<!doctype html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Registration | 2K23</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="theme-color" content="#cd2929">
        <meta name="mobile-web-app-capable" content="yes"/>
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <meta name="theme-color" content="#333333">
        <meta name="mobile-web-app-capable" content="yes">
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"/>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
        <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
        <?php
            session_start(); // Start a PHP session
            // Check if the form was submitted and store data in session
            if (isset($_POST['submit'])) {
                $_SESSION['Name'] = $_POST['Name'];
                $_SESSION['College'] = $_POST['College'];
                $_SESSION['Department'] = $_POST['Department'];
                $_SESSION['Year'] = $_POST['Year'];
                $_SESSION['Gender'] = $_POST['Gender'];
                $_SESSION['Email'] = $_POST['Email'];
                $_SESSION['Contact'] = $_POST['Contact'];
                $_SESSION['techEvent'] = $_POST['techEvent'];
                $_SESSION['nontechEvent'] = $_POST['nontechEvent'];
                $_SESSION['Workshop'] = $_POST['Workshop'];
                $_SESSION['Rules'] = $_POST['Rules'];
            }
            ?>
        <link rel="apple-touch-icon" href="img/plogo2k15.png">
        <link rel="shortcut icon" href="img/plogo2k15.png" type="image/x-icon" />
        <!-- Place favicon.ico in the root directory -->

        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/styler.css">
        <style>
            label {
                font-weight: 600;
                color: #555;
            }
            body {
                background: #cd2929;
            }
            input::-webkit-outer-spin-button,
            input::-webkit-inner-spin-button {
                -webkit-appearance: none;
                margin: 0;
            }
            input[type=number] {
                -moz-appearance: textfield;
            }
            #loader {
                display: none;
                position: fixed;
                top: 0;
                left: 0;
                right: 0;
                bottom: 0;
                width: 100%;
                background: rgba(0,0,0,0.75) url(img/loading2.gif) no-repeat center center;
                z-index: 10000;
            }
                    a {
            color: #e8f0ff;
            text-decoration: none;
            -webkit-transition: 0.2s opacity;
            transition: 0.2s opacity;
        }
        a:hover, a:focus {
            text-decoration: none;
            outline: none;
            opacity: 0.8;
            color: #cd2929;
        }
            #footer {
                position: relative;
                padding-top: 60px;
                padding-bottom: 60px;
                background-color: #cd2929
            }

            .footer-logo {
                text-align: center;
                margin-bottom: 40px;
            }

            .footer-logo>a>img {
                max-height: 80px;
            }
            .footer-follow {
                text-align: center;
                margin-bottom: 20px;
            }
            .footer-follow li {
                display: inline-block;
                margin-right: 10px;
                margin-bottom: 13px;
            }

            .footer-follow li a {
            display: inline-block;
            width: 50px;
            height: 50px;
            line-height: 50px;
            text-align: center;
            border-radius: 3px;
            background-color: #cd2929;
            color:#FFF;
            }

            .footer-copyright p {
                text-align: center;
                font-size: 14px;
                text-transform: uppercase;
                margin: 0;
            color:#fff;
            }




        </style>

    </head>
    <body>
         <!-- Modal registered successfully -->
         <div id="myModal" class="modal fade" tabindex="-1">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Welcome to Techno Zarre 2023</h5>
                        <a><button type="button" class="close" data-dismiss="modal">&times;</button></a>
                    </div>
                    <div class="modal-body">
                        <p>Congratulations ! You're successfully registered.</p>
                    </div>
                    <div class="modal-footer">

                        <a href="index.html"><button type="button" class="btn btn-primary" data-dismiss="modal">OK</button></a>
                    </div>
                </div>
            </div>
        </div> 

        <div class="reg-title">
            <a href="index.html"><img src="download1.jpeg" alt="logo" height=25%/></a>
            <h2 class="text-center" style="color: #FFF;">TECHNO ZARRE</h2>
            <p style="color: white;">&diams; &diams; &diams;</p>
        </div>
        <div class="container">
            <form method="post" action="form.php" id="regForm">

                <h2 class="text-center" style="color:white" >Register Event</h2>
                <br>

            <div class="row jumbotron">
                <div class="col-sm-6 form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" name="Name" id="name" placeholder="Enter your name." required>
                </div>
                <div class="col-sm-6 form-group">
                    <label for="college">College</label>
                    <input type="text" class="form-control" name="College" id="College" placeholder="Enter your College Name." required>
                </div>

                <div class="col-sm-4 form-group">
                    <label for="dept">Department</label>
                    <select name="Department" class="form-control browser-default custom-select">
                        <option name="Department" id="department" class="form-control" data-department="MECH" value="MECH" selected>Mechanical Engineering</option>
                        <option name="Department" id="department" class="form-control" data-department="AUTO" value="AUTO">Automobile Engineering</option>
                        <option name="Department" id="department" class="form-control" data-department="CIVIL" value="CIVIL">Civil Engineering</option>
                        <option name="Department" id="department" class="form-control" data-department="ECE" value="ECE">Electronics and Communication Engineering</option>
                        <option name="Department" id="department" class="form-control" data-department="CSE/IT" value="CSE/IT">Computer Science/IT</option>
                        <option name="Department" id="department" class="form-control" data-department="OTHERS" value="OTHERS">Others</option>
                    </select>
                </div>
                <div class="col-sm-2 form-group">
                    <label for="year">Year</label>
                    <select name="Year" class="form-control browser-default custom-select">
                        <option name="Year" id="year" class="form-control" data-year="1" value="1" selected>I YEAR</option>
                        <option name="Year" id="year" class="form-control" data-year="2" value="2">II YEAR</option>
                        <option name="Year" id="year" class="form-control" data-year="3" value="3">III YEAR</option>
                        <option name="Year" id="year" class="form-control" data-year="4" value="4">IV YEAR</option>
                    </select>
                </div>
                <div class="col-sm-6 form-group">
                    <label for="gender">Gender</label>
                    <select name="Gender" id="sex" class="form-control browser-default custom-select">
                    <option name="Gender" id="sex" class="form-control" value="male">Male</option>
                    <option name="Gender" id="sex" class="form-control" value="female">Female</option>
                    <option name="Gender" id="sex" class="form-control" value="unspesified" selected>Unspecified</option>
                </select>
                </div>
                <div class="col-sm-6 form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" name="Email" id="email" placeholder="Enter your email." required>
                </div>

                <div class="col-sm-6 form-group">
                    <label for="tel">Phone</label>
                    <input type="number" name="Contact" class="form-control" id="tel" placeholder="Enter Your Contact Number." required>
                </div>

                <div class="col-sm-3 form-group">
                    <label for="cod">Technical</label><br>
                    <div><input type="checkbox" name="techEvent[]" class="tech-checkbox" id="pp" value="PaperPresentation"> <label for="pp">Paper Presentation</label></div>
                    <div><input type="checkbox" name="techEvent[]" class="tech-checkbox" id="aq" value="AutoQuiz"> <label for="aq">Auto Quiz</label></div>
                    <div><input type="checkbox" name="techEvent[]" class="tech-checkbox" id="rc" value="RCCar"> <label for="rc">RC Car</label></div>
                    <div><input type="checkbox" name="techEvent[]" class="tech-checkbox" id="hr" value="HydroRocketry"> <label for="hr">Pit Stop</label></div>
                    <div><input type="checkbox" name="techEvent[]" class="tech-checkbox" id="mc" value="MrCad"> <label for="mc">Mr. CAD</label></div>
                    <div><input type="checkbox" name="techEvent[]" class="tech-checkbox" id="mm" value="MrManufacturer"> <label for="mm">Mr. Manufacturer</label></div>


                </div>
                <div class="col-sm-3 form-group">
                    <label for="cod">Non-Technical</label><br>
                    <div><input type="checkbox" name="nontechEvent[]" class="nontech-checkbox" id="meme" value="MemeCreation"> <label for="meme">Tech Memes</label></div>
                    <div><input type="checkbox" name="nontechEvent[]" class="nontech-checkbox" id="mobphoto" value="MobilePhotography"> <label for="mobphoto">Mobile Photography</label></div>
                    <div><input type="checkbox" name="nontechEvent[]" class="nontech-checkbox" id="conn" value="Connexion"> <label for="conn">Connexion</label></div>
                    <br>
                    <label for="cod">Workshops</label><br>
                    <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="customRadioInline1" name="Workshop" class="custom-control-input" value="None" checked>
                        <label class="custom-control-label" for="customRadioInline1">None</label>
                    </div><br>
                    <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="customRadioInline2" name="Workshop" class="custom-control-input" value="3D Printing">
                        <label class="custom-control-label" for="customRadioInline2">3D Printing</label>
                    </div>
                   

                </div>
                <input type="hidden" id="event" name="Event" value="">

                <div class="col-sm-6 form-group">
                    <label for="rules"><p class="mb-0 font-weight-bold text-secondary text-uppercase">NOTE</p></label>
                    <div >
                          <p class="mb-4">
                           <ul>
                             <li>For group events, please register each team member separately.
                                (A team should have between 2 and 4 members)</li>
                             <li>Food and Transport Facility will be arranged.</li>
                             <li>Each Participant is allowed to participate upto 2 Events in each category.<br>(Technical - 2 , Non Technical - 2)</li>
                             <li>All the events will be conducted simultaneously so please choose wisely.</li>
                             <li>Certificates will be provided.</li>
                             <li>Decision of the judges will be final and binding.</li>
                             <li>On spot registration is available.</li>
                           </ul>
                          </p>
                      </div>
                </div>
                <div class="col-sm-12">
                    <input type="checkbox" name="Rules" class="form-check d-inline" id="chb" required><label for="chb" class="form-check-label">&nbsp;I read all rules and instructions.
                    </label>
                </div>

                <div class="col-sm-12 form-group mb-0">

                   <!-- <input type="submit"  id="regBtn" name="submit" value="Register" class="btn btn-primary mb-2 float-right py-2 px-4 text-white" data-toggle="modal"> -->
                    <button input type="submit" name="submit" id="regBtn" class="btn btn-primary mb-2 float-right py-2 px-4 text-white" data-toggle="modal " onclick="register()">Register</button>       
                </div>
            </div>
            </form>
        </div>
        <div id="loader"></div>
        <footer id="footer">
            <div class="container">
              <!-- Row -->
                <div class="row">
                  <div class="col-md-12">
                     <!-- footer logo -->
                    <div class="footer-logo">
                      <a href="#"><img src="download1.jpeg" alt="scanfcode"></a>
                    </div>
                    <!-- /footer logo -->
                    <!-- footer follow -->
                    <ul class="footer-follow">
                      <li><a href="https://instagram.com/mukkund145?igshid=NGVhN2U2NjQ0Yg=="><i class="fa fa-instagram"></i></a></li>
                      <li><a href="mailto:210701170@rajalakshmi.edu.in"><i class="fa fa-envelope"></i></a></li>
                      <li><a href="tel:+917550002379"><i class="fa fa-phone"></i></a></li>
                    </ul>
                    <!-- /footer follow -->
                    <!-- footer copyright -->
                    <div class="footer-copyright">
                      <p>Copyright © 2023. All Rights Reserved. <a href="index.html" target="_blank">Techno Zarre 2023</a></p>
                    </div>
                    <!-- /footer copyright -->
                  </div>
                </div>
                <!-- /Row -->
              </div>
              <!-- /Container -->
            </footer>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"></script>
        <script>


            const scriptURL = 'https://script.google.com/macros/s/AKfycbzQ34mi61Ye5yr8z4qNITyy_3GenRYMoir9vLdEFFBYPlBG8whuRzRxXDW0ZoGKSZxdQA/exec'
            const form = document.forms['google-sheet']

            form.addEventListener('submit', e => {
            e.preventDefault()
            var check_box_values = $('#regForm [type="checkbox"]:checked').map(function () {
                return this.value;
                }).get();
                document.getElementById("event").value = check_box_values;
                var spinner = $('#loader');
                $("#loader").show().delay(4000).fadeOut();


            fetch(scriptURL, { method: 'POST', body: new FormData(form)})
            .then(response =>  $("#myModal").modal('show'))
            .catch(error => console.log("Error",error))
            })

        </script>


        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script>
            
    
            document.addEventListener("DOMContentLoaded", function () {
            const name = "<?php echo isset($_SESSION['Name']) ? $_SESSION['Name'] : ''; ?>";
            const college = "<?php echo isset($_SESSION['College']) ? $_SESSION['College'] : ''; ?>";
            const department = "<?php echo isset($_SESSION['Department']) ? $_SESSION['Department'] : ''; ?>";
            const year = "<?php echo isset($_SESSION['Year']) ? $_SESSION['Year'] : ''; ?>";
            const gender = "<?php echo isset($_SESSION['Gender']) ? $_SESSION['Gender'] : ''; ?>";
            const email = "<?php echo isset($_SESSION['Email']) ? $_SESSION['Email'] : ''; ?>";
            const contact = "<?php echo isset($_SESSION['Contact']) ? $_SESSION['Contact'] : ''; ?>";
            
            document.getElementById('name').value = name;
            document.getElementById('College').value = college;
            document.getElementById('department').value = department;
            document.getElementById('year').value = year;
            document.getElementById('sex').value = gender;
            document.getElementById('email').value = email;
            document.getElementById('tel').value = contact;
            
            <?php
            $techEvent = isset($_SESSION['techEvent']) ? $_SESSION['techEvent'] : [];
            foreach ($techEvent as $value) {
                echo 'document.getElementById("' . $value . '").checked = true;';
            }

            $nontechEvent = isset($_SESSION['nontechEvent']) ? $_SESSION['nontechEvent'] : [];
            foreach ($nontechEvent as $value) {
                echo 'document.getElementById("' . $value . '").checked = true;';
            }

            $workshop = isset($_SESSION['Workshop']) ? $_SESSION['Workshop'] : '';
            echo 'document.getElementById("' . $workshop . '").checked = true;';
            ?>
        });

            $(document).ready(function () {
            $("input[name='techEvent[]']").change(function () {

            var maxAllowed = 2;
            var cnt = $("input[name='techEvent[]']:checked").length;
            if (cnt > maxAllowed) {
                $(this).prop("checked", "");
            }

            });

            });

            $(document).ready(function () {
            $("input[name='nontechEvent[]']").change(function () {
            var maxAllowed = 2;
            var cnt = $("input[name='nontechEvent[]']:checked").length;
            if (cnt > maxAllowed) {
                $(this).prop("checked", "");
            }

            });
            });
            function register(){
                var message = "Welcome to Techno Zarre 2023!!\n Congratulations! You're successfully registered.";
            alert(message);
            window.location.href = "index.html";
            }
        </script>
        
        </div>
    </body>
</html>
