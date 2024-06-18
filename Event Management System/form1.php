<?php
// Database connection settings
$host = 'localhost';      // MySQL server address (e.g., localhost)
$username = 'root';       // MySQL username
$password = '';           // MySQL password
$database = 'throt';     // MySQL database name
$conn = new mysqli($host, $username, $password, $database);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
session_start(); // Start or resume a PHP session
$sessionTimeout = 20; // 20 seconds

// Check if the session timestamp is set
if (isset($_SESSION['timestamp'])) {
    // Calculate the time elapsed since the last activity
    $elapsedTime = time() - $_SESSION['timestamp'];

    // If the elapsed time is greater than the session timeout, destroy the session
    if ($elapsedTime > $sessionTimeout) {
        session_unset();
        session_destroy();
    }
}
// Update the session timestamp to the current time
$_SESSION['timestamp'] = time();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $name = ($_POST["Name"]);
    $college = ($_POST["College"]);
    $department = ($_POST["Department"]);
    $gender = ($_POST["Gender"]);
    $email = ($_POST["Email"]);
    $contact = ($_POST["Contact"]);
    $techEvents = implode(", ", $_POST["techEvent"]);
    $nontechEvents = implode(", ", $_POST["nontechEvent"]);
    $workshop = ($_POST["Workshop"]);
    $year = ($_POST["Year"]);

    // Prepare and execute an SQL statement to insert data into the database
    $sql = "INSERT INTO registration (name, college, department, gender, email, contact, tech_events, nontech_events, workshop, year) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssssssssss", $name, $college, $department,  $gender, $email, $contact, $techEvents, $nontechEvents, $workshop, $year);
    if ($stmt->execute()) {
        header("Location: index.html");
        exit();
    } else {
        echo "Data submission failed. Error: " . $conn->error;
    }

    // Close the database connection
    $stmt->close();
    $conn->close();
} else {
    // The "Name" field was not submitted or it's an initial visit; handle it accordingly.

    // You can check if certain session variables exist and pre-fill the form:
    $name = isset($_SESSION['Name']) ? $_SESSION['Name'] : '';
    $college = isset($_SESSION['College']) ? $_SESSION['College'] : '';
    $department = isset($_SESSION['Department']) ? $_SESSION['Department'] : '';
    $gender = isset($_SESSION['Gender']) ? $_SESSION['Gender'] : '';
    $email = isset($_SESSION['Email']) ? $_SESSION['Email'] : '';
    $contact = isset($_SESSION['Contact']) ? $_SESSION['Contact'] : '';
    $techEvents = isset($_SESSION['techEvent']) ? $_SESSION['techEvent'] : [];
    $nontechEvents = isset($_SESSION['nontechEvent']) ? $_SESSION['nontechEvent'] : [];
    $workshop = isset($_SESSION['Workshop']) ? $_SESSION['Workshop'] : '';
    $year = isset($_SESSION['Year']) ? $_SESSION['Year'] : '';

}
?>
