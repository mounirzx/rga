
<?php
session_start();


if(!isset($_SESSION['is_login'])){
    header('location:Login');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>RGA</title>
    <!-- <script disable-devtool-auto src='https://cdn.jsdelivr.net/npm/disable-devtool'></script> -->

    <link rel="icon" type="image/png" href="./static/images/icons/favicon.ico" />

<link rel="stylesheet" href="./assets/css/questionnaire.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<link  rel="stylesheet" href="https://cdn.datatables.net/2.0.3/css/dataTables.bootstrap5.min.css"/>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
        integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
        <link href="
https://cdn.jsdelivr.net/npm/sweetalert2@11.10.7/dist/sweetalert2.min.css
" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

<script src="static/vendor/jquery/jquery-3.2.1.min.js"></script>
<script src="
https://cdn.jsdelivr.net/npm/sweetalert2@11.10.7/dist/sweetalert2.all.min.js
"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/crypto-js/4.2.0/crypto-js.min.js"></script>
<script src="assets/js/urls.js"></script>



 <style>
        /* @page {
            size: A4;
            margin: 0;
        } */


        body {
            /* width: 210mm;
            height: 297mm; */
            margin:0px 50px 50px 50px ;
            padding: 0;
            /* margin: auto; */
            line-height: 15px;
            background-color: #dadada;
        }

        body span {

            font-size: 12px !important;
            height: 33px;
            line-height: 14px !important;
        }

        body div {

            font-size: 12px !important;
        }

        body label {

            font-size: 12px !important;
            line-height: 15px !important;
        }


        .line-edits-container {
            display: flex;
        }

        /* Custom styles for printing */
        @media print {

            /* Adjust input size */
            input[type="text"],
            select.form-select {
                width: auto !important;
            }

            /* Ensure input text is not cut off */
            input[type="text"] {
                white-space: nowrap;
                overflow: visible;
            }

            body {
                zoom: 90%;
                /* Adjust the value as needed */
            }
            

        }
        .select2-container--default .select2-results>.select2-results__options{
            background:#fff;
        }
        .select2-container--default .select2-selection--multiple .select2-selection__choice{
            height:20px;
        }
       
    </style>


<style>

.sablier-body {
	background: white;
	display: grid;
	font: 1em/1.5 sans-serif;
	place-items: center;
}

.sablier, .sablier:before, .sablier:after {
	animation-duration: 4s;
	animation-iteration-count: infinite;
}
.sablier {
  font-size: calc(16px + (24 - 16) * (100vw - 320px) / (1280 - 320));
	--fg: #0099ff;
	--primary: #0099ff;
	--bg: #e3e4e8;
	--polygonH: polygon(0% 0%,100% 0%,100% 5.55%,95% 5.55%,95% 28%,60% 46%,60% 54%,95% 72%,95% 94.45%,100% 94.45%,100% 100%,0% 100%,0% 94.45%,5% 94.45%,5% 72%,40% 54%,40% 46%,5% 28%,5% 5.55%,0% 5.55%);
	animation-name: flip;
	animation-timing-function: ease-in-out;
	background-image: linear-gradient(var(--primary) 0.5em,#737a8c55 0.5em 8.5em,var(--primary) 8.5em);
	clip-path: var(--polygonH);
	-webkit-clip-path: var(--polygonH);
	overflow: hidden;
	position: relative;
	width: 5em;
	height: 9em;
	z-index: 0;
}
.sablier:before, .sablier:after {
	animation-timing-function: linear;
	content: "";
	display: block;
	position: absolute;
}
.sablier:before {
	--polygonB1: polygon(0% 0%,100% 0%,100% 24%,50% 47%,50% 47%,50% 47%,50% 47%,50% 47%,50% 47%,50% 47%,50% 47%,0% 24%);
	--polygonB2: polygon(0% 4%,100% 4%,100% 24%,55% 45%,55% 100%,55% 100%,55% 100%,45% 100%,45% 100%,45% 100%,45% 45%,0% 24%);
	--polygonB3: polygon(0% 24%,100% 24%,100% 24%,55% 45%,55% 80%,100% 100%,100% 100%,0% 100%,0% 100%,45% 80%,45% 45%,0% 24%);
	--polygonB4: polygon(45% 45%,55% 45%,55% 45%,55% 45%,55% 58%,100% 76%,100% 100%,0% 100%,0% 76%,45% 58%,45% 45%,45% 45%);
	--polygonB5: polygon(50% 53%,50% 53%,50% 53%,50% 53%,50% 53%,100% 76%,100% 100%,0% 100%,0% 76%,50% 53%,50% 53%,50% 53%);
	animation-name: fill;
	background-color: var(--fg);
	background-size: 100% 3.6em;
	clip-path: var(--polygonB1);
	-webkit-clip-path: var(--polygonB1);
	top: 0.5em;
	left: 0.5em;
	width: 4em;
	height: 8em;
	z-index: 1;
}
.sablier:after {
	animation-name: glare;
	background:
	linear-gradient(90deg,#0000 0.5em,#0003 0.5em 1.5em,#0000 1.5em 3.5em,#fff3 3.5em 4.5em,#fff0 4.5em 6.5em,#0003 6.5em 7.5em,#0000 7.5em) 0 0 / 100% 0.5em,
	linear-gradient(90deg,#0000 0.75em,#0003 0.75em 1.25em,#0000 1.25em 3.75em,#fff3 3.75em 4.25em,#fff0 4.25em 6.75em,#0003 6.75em 7.25em,#0000 7.25em) 0 0.5em / 100% 8em,
	linear-gradient(90deg,#0000 0.5em,#0003 0.5em 1.5em,#0000 1.5em 3.5em,#fff3 3.5em 4.5em,#fff0 4.5em 6.5em,#0003 6.5em 7.5em,#0000 7.5em) 0 100% / 100% 0.5em;
	background-repeat: repeat-x;
	top: 0;
	left: -3em;
	width: 200%;
	height: 100%;
	z-index: 2;
}
/* Animation */
@keyframes fill {
	from {
	clip-path: var(--polygonB1);
	-webkit-clip-path: var(--polygonB1);
	}
	10% {
	clip-path: var(--polygonB2);
	-webkit-clip-path: var(--polygonB2);
	}
	45% {
	clip-path: var(--polygonB3);
	-webkit-clip-path: var(--polygonB3);
	}
	80% {
	clip-path: var(--polygonB4);
	-webkit-clip-path: var(--polygonB4);
	}
	85%, to {
	clip-path: var(--polygonB5);
	-webkit-clip-path: var(--polygonB5);
	}
}
@keyframes glare {
	from, 90% {
	transform: translateX(0);
	}
	to {
	transform: translateX(3em);
	}
	}
	@keyframes flip {
	from, 90% {
	transform: rotate(0);
	}
	to {
	transform: rotate(180deg);
	}
}
/* Mode nuit */
@media (prefers-color-scheme: dark) {
	:root {
	--bg: #17181c;
	--fg: #c7cad1;
	}
}</style>

   
</head>

<div class="modal" id="connectionModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true" data-backdrop="static" data-keyboard="false">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 style="color:red;" class="modal-title" id="exampleModalCenterTitle">Connexion Perdue <p style="float:right;margin-left: 7rem;">إنقطاع الأنترنت</p></h4>
                </div>
                <div class="modal-body">
                    <div class="sablier-body">
                        <div class="sablier"></div>
                    </div>
                    <br>
                    <p dir="ltr" style="font-weight:bold;font-size:18px;">Prière attendre le rétablissement de la connexion avant de continuer!...</p>
                    <br>
                    <p dir="rtl" style="font-weight:bold;font-size:18px;">الرجاءإنتظار إعادة الاتصال بشبكة الأنترنت قبل المواصلة!...</p>
                </div>
            </div>
        </div>
    </div>
    <script>

        $(document).ready(function () {
            // let connectionCheckInterval;
            // const offlineCheckInterval = 10; // 0.1 seconds
            // const onlineCheckInterval = 5000; // 5 seconds

            // function checkConnection() {
            //     var xhr = new XMLHttpRequest();
            //     xhr.open('HEAD', '/', true);
            //     xhr.timeout = 20000; // Timeout in milliseconds

            //     xhr.onload = function () {
            //         if (xhr.status >= 200 && xhr.status < 300) {
            //             // Connection successful
            //             $('#connectionModal').modal('hide');
            //             clearInterval(connectionCheckInterval);
            //             scheduleNextCheck(onlineCheckInterval);
            //         } else {
            //             // Connection error (e.g., server down)
            //             $('#connectionModal').modal('show');
            //             clearInterval(connectionCheckInterval);
            //             scheduleNextCheck(offlineCheckInterval);
            //         }
            //     };

            //     xhr.onerror = function () {
            //         // Connection error
            //         $('#connectionModal').modal('show');
            //         clearInterval(connectionCheckInterval);
            //         scheduleNextCheck(offlineCheckInterval);
            //     };

            //     xhr.ontimeout = function () {
            //         // Request timed out (slow connection)
            //         $('#connectionModal').modal('show');
            //         clearInterval(connectionCheckInterval);
            //         scheduleNextCheck(offlineCheckInterval);
            //     };

            //     xhr.send();
            // }

            // function scheduleNextCheck(interval) {
            //     connectionCheckInterval = setInterval(checkConnection, interval);
            // }

            // // Initial check
            // checkConnection();

            // // Additional event listeners to handle network changes
            // window.addEventListener('online', checkConnection);
            // window.addEventListener('offline', checkConnection);
        });


</script>

<nav class="navbar navbar-expand-lg"  style="background-color: #ffffff;border-radius: 5px; border-bottom-left-radius: 50px; height: 75px; text-align: center">
    <div class="container">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
            aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
           
             <style>
                .nav-item:hover .nav-link {
                    color: #00A859; /* Change to your desired green color */
                }
            </style>
            <?php
                if($_SESSION['role']=="admin" || $_SESSION['role']=="recenseur"  ){

                
            ?>
            <li style="border-right: 2px solid #0e6212;" class="nav-item">
                <a class="nav-link active" aria-current="page" id="superviseurpage" href="Questionnaire">
                    <img src="static/icons/form.svg" alt="Plus Icon" style="width: 20px; height: 20px; margin-right: 5px;">
                    Ajouter Questionnaire  <br/>  إظافة إستبيان
                </a>
            </li>
           <?php
           }
           ?>
             <style>
                .nav-item:hover .nav-link {
                    color: #00A859; /* Change to your desired green color */
                }
            </style>
            
            <?php
                if($_SESSION['role']=="admin" || $_SESSION['role']=="recenseur"  || $_SESSION['role']=="controleur" || $_SESSION['role']=="superviseur" || $_SESSION['role']=="admin_central" ){

                
            ?>
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="ListeQuestionnaires">
                    <img src="static/icons/list.svg"  alt="List Icon" style="width: 20px; height: 20px; margin-right: 5px;">
                    Liste de Questionnaires  <br/>  قائمة الإستبيانات
                </a>
            </li>

            <?php
           }
           ?>

<?php
                if($_SESSION['role']=="admin" || $_SESSION['role']=="admin_central"){
            ?>
               <li style="border-left: 1px solid #aaaaaa;" class="nav-item">
               <a class="nav-link active" aria-current="page" href="ListeUtilisateurs">     <img src="static/icons/list.svg"  alt="List Icon" style="width: 20px; height: 20px; margin-right: 5px;">Liste des utilisateurs  <br/>    قائمة المستخدمين</a>
            </li>
<?php
                }
                if($_SESSION['role']=="admin" ){
            ?>
            <li style="border-left: 1px solid #aaaaaa;" class="nav-item">
               <a class="nav-link active" aria-current="page" href="SuperviseursNational"> <i style="font-size: 19px; color: blue;" class="fa-solid fa-user-tie"></i> &nbsp;Superviseurs nationaux  <br/>  المشرفين الوطنيين</a>
            </li>
            <?php
           }
           ?>
          
<?php
                if($_SESSION['role']=="admin"){
            ?>
            <li style="border-left: 1px solid #aaaaaa;" class="nav-item">
               <a class="nav-link active" aria-current="page" href="Superviseurs"> <i style="font-size: 19px; color: green;" class="fa-solid fa-user-tie"></i>&nbsp;Superviseurs wilayas <br/>  المشرفين الولائيين</a>
            </li>
            <?php
           }
           ?>
   <?php
                if($_SESSION['role']=="admin"){
            ?>
            <li style="border-left: 1px solid #aaaaaa;" class="nav-item">
               <a class="nav-link active" aria-current="page" href="admin_central.php"> <i style="font-size: 19px; color: red;" class="fa-solid fa-user-tie"></i> &nbsp;Responsables centraux  <br/>  المسؤولين المركزيين </a>
            </li>
            <li style="border-left: 1px solid #aaaaaa;" class="nav-item">
               <a class="nav-link active" aria-current="page" href="Userupdate"> <i style="font-size: 19px; color: cayen;" class="fa-solid fa-user-tie"></i> &nbsp;modification des utilisateur  <br/>  تحديث المستخدمين</a>
            </li>
            <?php
           }
           ?>       
          <?php
                if($_SESSION['role']=="superviseur"){
            ?>
            <li style="border-left: 1px solid #aaaaaa;" class="nav-item">
               <a class="nav-link active" aria-current="page" href="Controleurs">Controleurs</a>
            </li>

            <?php
           }
           ?>
            <?php
                if($_SESSION['role']=="controleur"){
            ?>
            <li style="border-left: 1px solid #aaaaaa;" class="nav-item">
            <a class="nav-link active" aria-current="page" href="Recenseurs">Recenseurs</a>
            </li>
          
            <?php
           }
           ?>   
     <?php
                if($_SESSION['role']=="superviseur" || $_SESSION['role']=="controleur" || $_SESSION['role']=="superviseur_national" || $_SESSION['role']=="admin_central"){
            ?>
            <li style="border-left: 1px solid #aaaaaa;" class="nav-item">
               <a class="nav-link " aria-current="page" href="Statistiques"><i style="font-size: 19px; color: cayen;"  class="fa-solid fa-chart-line"></i> &nbsp; Statistique <br/> الاحصائيات</a>
            </li>
          
            <?php
           }
           ?>


       
            </ul>
        </div>

        <a style="margin: 10px;" class="nav-link active">
            <img src="static/icons/person.svg" alt="User Icon" style="width: 20px; height: 20px; margin-right: 5px;">
            <b><?php echo $_SESSION['username']; ?></b>

        </a>

        <a href="Logout"  class="btn btn-danger btn-sm logout" style="border-radius: 17px;">
            <img src="static/icons/signout.svg" alt="Logout Icon" style="width: 25px; height: 29px; margin-right: 5px;">
            
        </a>
        
    </div>
</nav>


