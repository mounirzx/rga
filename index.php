<!DOCTYPE html>
<html lang="en">
<head>
    <title>RGA</title>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="./static/images/icons/favicon.ico"/>
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="./static/vendor/bootstrap/css/bootstrap.min.css"/>
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="./static/fonts/font-awesome-4.7.0/css/font-awesome.min.css"/>
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="./static/vendor/animate/animate.css"/>
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="./static/vendor/css-hamburgers/hamburgers.min.css"/>
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="./static/vendor/select2/select2.min.css"/>
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="./static/css/util.css"/>
    <link rel="stylesheet" type="text/css" href="./static/css/main.css"/>
    <!-- <script disable-devtool-auto src='https://cdn.jsdelivr.net/npm/disable-devtool'></script> -->

    <!--===============================================================================================-->
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:ital,opsz,wght@0,6..12,200..1000;1,6..12,200..1000&display=swap" rel="stylesheet">
    <style>
        * {
            font-optical-sizing: auto;
            font-style: normal;
            font-variation-settings: "wdth" 100, "YTLC" 500;
        }

        .input100 {
            font-family: "Nunito Sans", sans-serif;
        }

        .container-login1005 {
            max-width: 100%;
            padding: 20px;
        }

        .container-login1005 .row {
            border: 2px solid white;
            background-color: rgba(255, 255, 255, 0.92);
            margin: auto;
            border-radius: 14px;
            padding: 20px;
        }


        @media (max-width: 991px) {
           .container-login1005 {
            max-width: 100%;
            padding: 20px;
            height: 100vh; /* Set container height to full viewport height */
            display: flex; /* Use flexbox for layout */
            justify-content: center; /* Center contents horizontally */
            align-items: center; /* Center contents vertically */
            }

              .container-login1005 .row {
                  border: 2px solid white;
                  background-color: rgba(255, 255, 255, 0.92);
                  border-radius: 14px;
                  padding: 20px;
                  max-width: 930px; /* Set max-width for better responsiveness */
                  width: 100%; /* Ensure row takes full width */
              }
            .container-login1005 .col {
                width: 100%;
            }

            .login100-pic img {
                max-width: 100%;
                height: auto;
            }

            form {
                width: 100%;
                padding-right: 0;
            }

            .container-login100-form-btn {
                margin-top: 20px;
            }

            .container-login100-form-btn button {
                width: 100%;
            }

            .logobneder {
                position: absolute;
                left: 50%;
                bottom: 20px;
                transform: translateX(-50%);
            }
        }

        @media (min-width: 992px) {
            .container-login1005 .row {
                height: 600px;
                width: 930px;
                padding-top: 6%;
                padding-left: 60px;
            }
        }
        html, body {
            overflow: hidden; /* Disable scrolling */
            width: 100%;
            height: 100%;
            margin: 0;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        body {
            background-image: url(./static/forest4.png);
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center;
        }
    </style>
</head>
<body>

<div class="limiter">
    <div class="container-login1005 text-center">
        <div class="row">
            <div class="col text-center">
                <h5 style="font-weight: bold; font-size: 24px; margin-bottom: -21px;">الجمهورية الجزاﺋﺮﻳﺔ الديمقراطية الشعبية</h5>
                <br/>
                <h8 style="font-size: 14px;">REPUBLIQUE ALGERIENNE DEMOCRATIQUE ET POPULAIRE</h8>
                <br/><br/>
                <h5 style="font-weight: bold; font-size: 22px; margin-bottom: -21px; margin-top: -4px">وزارة الفلاحة و التنمية الريفية</h5>
                <br/>
                <h8 style="font-size: 13px;">MINISTERE DE L'AGRICULTURE ET DU DEVELOPPEMENT RURAL</h8>
                <br/><br/>
                <h5 style="font-size: 20px; margin-bottom: -23px; margin-top: -7px;"> مديرية الاحصائيات و الرقمنة و الاستشراف </h5>
                <br/>
                <h8 style="font-size: 10px;">DIRECTION DES STATISTIQUES DE LA NUMERISATION ET DE LA PROTECTIVE</h8>
                <div class="login100-pic" style="margin-top: 13px">
                    <img style="max-width: 380px; min-width: 200px" src="static/logo.svg" alt="IMG"/>
                </div>
            </div>
            <div class="col" style="margin-top: 20px">
                <form method="post" class="login100-form validate-form">
                    <input type="hidden" name="csrfmiddlewaretoken"
                           value="ohwBO0gXou48jKkUwWQnZEI5JmUYvsekHP8EzeolnpVusdcnHF30daDlgYz4bf6y"/>
                    <b class="error" style="color:#dc3545;"></b>
                    <br/><br/>
                    <div class="wrap-input100 validate-input" data-validate="Valid email is required: ex@abc.xyz">
                        <input class="input100" type="text" name="username" id="username"
                               placeholder="nom d'utilisateur"/>
                        <span class="focus-input100"></span>
                        <span class="symbol-input100">
                            <i class="fa fa-envelope" aria-hidden="true"></i>
                        </span>
                    </div>
                    <div class="wrap-input100 validate-input"
                     data-validate="Password is required">
                        <input class="input100" type="password" name="password" id="password"
                               placeholder="Mot de passe"/>
                        <span class="focus-input100"></span>
                        <span class="symbol-input100">
                            <i class="fa fa-lock" aria-hidden="true"></i>
                        </span>
                    </div>
                    <div class="container-login100-form-btn">
                        <button type="submit" class="login100-form-btn" id="login">
                            <i class="fa fa-sign-in" style="margin-right: 10px; color: aliceblue;"></i>
                            <b style="color: aliceblue">Se connecter</b>
                        </button>
                    </div>
                </form>
                <div data-tilt style="margin-left: 20px; margin-top: 103px">
                    <img class="logobneder" style="width: 60px  ;margin-right: 110px;  margin-top: -66px;" src="static/logo2.png" alt="IMG"/>
                </div>
            </div>
        </div>
    </div>
</div>

<!--===============================================================================================-->
<script src="static/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
<script src="static/vendor/bootstrap/js/popper.js"></script>
<script src="static/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
<script src="static/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
<script src="static/vendor/tilt/tilt.jquery.min.js"></script>
<script>
    if (window.innerWidth > 991) {
        $(".js-tilt").tilt({
            scale: 1.1,
        });
    }
</script>
<!--===============================================================================================-->
<script src="statc/js/main.js"></script>
<script src="assets/js/login.js"></script>
<script src="assets/js/login-urls.js"></script>
</body>
</html>
