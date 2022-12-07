<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IGT Internship</title>
    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="images/logo_1.ico">
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
    <!-- MDB -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.0.1/mdb.min.css" rel="stylesheet" />
    <style>
        body {
            background: rgb(238, 174, 202);
            background: radial-gradient(circle, rgba(238, 174, 202, 1) 0%, rgba(148, 187, 233, 1) 100%);
        }

        form {
            box-sizing: border-box;
        }

        .form-required {
            color: red;
            font-weight: 600;
        }

        label {
            color: black !important;
        }

        .card {
            box-shadow: rgba(148, 187, 233, 0.25) 0px 30px 60px -12px inset, rgba(148, 187, 233, 0.3) 0px 18px 36px -18px inset;
        }

        input[type=number]::-webkit-inner-spin-button,
        input[type=number]::-webkit-outer-spin-button {
            -webkit-appearance: none;
            margin: 0;
        }
    </style>
</head>

<body>
    <section class="vh-100">

        <div class="container h-100">

            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-lg-10 col-xl-9">
                    <div class="card text-black" style="border-radius: 10px;">

                        <div class="card-body p-md-5">
                            <div class="row justify-content-center">
                                <div class="col-md-10 col-lg-9 col-xl-9 order-2 order-lg-1">
                                    <div class="d-flex flex-column align-items-center mb-4">
                                        <a class="navbar-brand " href="index.php"><img src="images/logo_1.png" alt="logo" width="200" height="150"></a>
                                        <p class="text-center h4 fw-bold mb-5 mx-1 mx-md-4 mt-4" style="color: #005d89;">Student Registration Form</p>
                                    </div>


                                    <form class="mx-1 mx-md-4 was-validated" action="register.php" method="post">

                                        <div class="d-flex flex-row align-items-center">
                                            <div class="flex-fill mb-0">
                                                <div class="d-flex flex-column align-items-left mb-4">
                                                    <label class="form-label" for="firstname">First Name <span class="form-required"> * </span></label>
                                                    <input type="text" id="firstname" name="firstname" class="form-control" placeholder="First Name" required="" />
                                                </div>

                                            </div>
                                            &nbsp;&nbsp;&nbsp;

                                            <div class="flex-fill mb-0">

                                                <div class="d-flex flex-column align-items-left mb-4">
                                                    <label class="form-label" for="lastname">Last Name <span class="form-required"> * </span></label>
                                                    <input type="text" id="lastname" name="lastname" class="form-control" placeholder="Last Name" required="" />
                                                    
                                                </div>
                                            </div>
                                        </div>

                                        <div class="d-flex flex-column align-items-left">
                                            <label class="form-label" for="gender">Gender <span class="form-required"> * </span></label>
                                            <div class="d-flex flex-row align-items-center mb-4">

                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="optradio" id="flexRadioDefault1" required="" />
                                                    <span class="form-label" for="flexRadioDefault1"> Male</span>
                                                </div>
                                                &nbsp;&nbsp;&nbsp;
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="optradio" id="flexRadioDefault2" required="" />
                                                    <span class="form-label" for="flexRadioDefault2"> Female </span>
                                                </div>
                                            </div>
                                        </div>


                                        <!-- Department -->

                                        <div class="d-flex flex-column align-items-left">
                                            <label class="form-label" for="department">Department<span class="form-required"> * </span></label>
                                            <div class="d-flex flex-row align-items-center mb-4">

                                                <div class="form-group flex-fill"><select class="form-control transparent-input" id="dept1" name="dept1" onchange="display1(this.value);" required="">
                                                        <option value="" disabled selected>Select Department</option>
                                                        <option value="B.E Civil engineering">B.E Civil engineering</option>
                                                        <option value="Aerospace Engineering">B.E Aerospace Engineering</option>
                                                        <option value="Automobile Engineering">B.E Automobile Engineering</option>
                                                        <option value="Industrial Engineering">B.E Industrial Engineering</option>
                                                        <option value="Mechanical Engineering">B.E Mechanical Engineering</option>
                                                        <option value="Manufacturing Engineering">B.E Manufacturing Engineering</option>
                                                        <option value="Printing Engineering">B.E Printing Engineering</option>
                                                        <option value="Mining Engineering">B.E Mining Engineering</option>
                                                        <option value="Information Technology">B.Tech Information Technology</option>
                                                        <option value="Information science and Technology">B.Tech Information science and Technology</option>
                                                        <option value="Computer science  and Engineering">B.E Computer science and Engineering</option>
                                                        <option value="Electrical and Electronics Engineering">B.E Electrical and Electronics Engineering</option>
                                                        <option value="Instrumentation Engineering">B.E Instrumentation Engineering</option>
                                                        <option value="dept">others</option>
                                                    </select>
                                                </div><br>
                                            </div>
                                        </div>

                                        <div class="d-flex flex-row align-items-center mb-4 ">
                                            <div class="form-group flex-fill"><input class="form-control transparent-input" data-msg="Please enter at least 4 chars" data-rule="minlen:4" id="dept" name="dept" placeholder="Type your Department e.g(B.E Electronic and Engineering)" style="display:none;" type="text" /></div>
                                        </div>

                                        <!-- Internship -->
                                        <div class="d-flex flex-column align-items-left">
                                            <label class="form-label" for="internship">Internship<span class="form-required"> * </span></label>
                                            <div class="d-flex flex-row align-items-center mb-4">
                                                <div class="form-group flex-fill"><select class="form-control transparent-input" id="intern1" name="intern1" onchange="display2(this.value);" required="">
                                                        <option value="" disabled selected>Select Internship </option>
                                                        <option value="Web Development">Web Development</option>
                                                        <option value="Blockchain">Blockchain</option>
                                                        <option value="Machine Learning">Machine Learning</option>
                                                        <option value="Deep Learning">Deep Learning</option>
                                                        <option value="intern">others</option>
                                                    </select></div><br>
                                            </div>
                                        </div>

                                        <div class="d-flex flex-row align-items-center mb-4 ">
                                            <div class="form-group flex-fill"><input class="form-control transparent-input" data-msg="Please enter at least 4 chars" data-rule="minlen:4" id="intern" name="intern" placeholder="Type your Internship Preference" style="display:none;" type="text" /></div>
                                        </div>

                                        <!-- College Name -->
                                        <div class="d-flex flex-column align-items-left">
                                            <label class="form-label" for="college"> College Name<span class="form-required"> * </span></label>
                                            <div class="d-flex flex-row align-items-center mb-4">
                                                <div class="form-outline flex-fill mb-0">
                                                    <input type="text" id="college" name="college" class="form-control" required="" placeholder="College Name" />
                                                </div>
                                            </div>
                                        </div>

                                        <!-- College Register Number -->
                                        <div class="d-flex flex-column align-items-left">
                                            <label class="form-label" for="register"> College Register Number<span class="form-required"> * </span></label>
                                            <div class="d-flex flex-row align-items-center mb-4">
                                                <div class="form-outline flex-fill mb-0">
                                                    <input type="text" id="register" name="register" class="form-control" required="" placeholder="College Register Number" />
                                                </div>
                                            </div>
                                        </div>



                                        <!-- Year of passed out -->
                                        <div class="d-flex flex-column align-items-left">
                                            <label class="form-label" for="yopo"> Year of passed out<span class="form-required"> * </span></label>
                                            <div class="d-flex flex-row align-items-center mb-4">
                                                <div class="form-outline flex-fill mb-0">
                                                    <input type="text" id="yopo" name="yopo" class="form-control" required="" placeholder="Year of passed out" />
                                                </div>
                                            </div>
                                        </div>


                                        <!--contact -->
                                        <div class="d-flex flex-column align-items-left">
                                            <label class="form-label" for="contact"> Contact<span class="form-required"> * </span></label>
                                            <div class="d-flex flex-row align-items-center mb-4">
                                                <div class="form-outline flex-fill mb-0">
                                                    <input type="number" id="contact" name="contact" class="form-control" required="" placeholder="Contact" />
                                                </div>
                                            </div>
                                        </div>


                                        <!-- email -->
                                        <div class="d-flex flex-column align-items-left">
                                            <label class="form-label" for="email"> Email<span class="form-required"> * </span></label>
                                            <div class="d-flex flex-row align-items-center mb-4">
                                                <div class="form-outline flex-fill mb-0">
                                                    <input type="email" id="email" name="email" class="form-control" required="" placeholder="Email ID" />
                                                </div>
                                            </div>
                                        </div>

                                        <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                                            <input type="submit" class="btn btn-primary btn-lg" value="Register">
                                        </div>

                                    </form>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- MDB -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.0.1/mdb.min.js"></script>
    <script>
        function display1(val) {
            var element1 = document.getElementById('dept');

            if (val == 'dept') {

                element1.style.display = 'block';
                element1.required = true;
            } else {
                element1.style.display = 'none';
            }
        }


        function display2(val) {
            var element2 = document.getElementById('intern');
            if (val == 'intern') {

                element2.style.display = 'block';
                element2.required = true;
            } else {
                element2.style.display = 'none';
            }
        }
    </script>
</body>

</html>
