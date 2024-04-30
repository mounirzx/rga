<?php
session_start();


if(!isset($_SESSION['is_login'])){
    header('location:index.php');
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>RGA</title>

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


   
</head>


<nav class="navbar navbar-expand-lg"  style="background-color: #ffffff;border-radius: 5px; border-bottom-left-radius: 50px; height: 75px;">
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
                <a class="nav-link active" aria-current="page" id="superviseurpage" href="./questionnaire.php">
                    <img src="static/icons/form.svg" alt="Plus Icon" style="width: 20px; height: 20px; margin-right: 5px;">
                    Ajouter Questionnaire - إظافة إستبيان
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
                if($_SESSION['role']=="admin" || $_SESSION['role']=="recenseur"  || $_SESSION['role']=="controleur" || $_SESSION['role']=="superviseur" ){

                
            ?>
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="./list_questionnaire.php">
                    <img src="static/icons/list.svg"  alt="List Icon" style="width: 20px; height: 20px; margin-right: 5px;">
                    Liste de Questionnaires - قائمة الإستبيانات
                </a>
            </li>

            <?php
           }
           ?>

<?php
                if($_SESSION['role']=="admin"){
            ?>
               <li style="border-left: 1px solid #aaaaaa;" class="nav-item">
               <a class="nav-link active" aria-current="page" href="./users_list.php">Liste des utilisateurs</a>
            </li>
            <li style="border-left: 1px solid #aaaaaa;" class="nav-item">
               <a class="nav-link active" aria-current="page" href="./superviseur_national.php">Superviseurs national</a>
            </li>
            <?php
           }
           ?>
          
<?php
                if($_SESSION['role']=="admin"){
            ?>
            <li style="border-left: 1px solid #aaaaaa;" class="nav-item">
               <a class="nav-link active" aria-current="page" href="./superviseur.php">Superviseurs</a>
            </li>
            <?php
           }
           ?>
          
          <?php
                if($_SESSION['role']=="superviseur"){
            ?>
            <li style="border-left: 1px solid #aaaaaa;" class="nav-item">
               <a class="nav-link active" aria-current="page" href="./controleur.php">Controleurs</a>
            </li>

            <?php
           }
           ?>
            <?php
                if($_SESSION['role']=="controleur"){
            ?>
            <li style="border-left: 1px solid #aaaaaa;" class="nav-item">
               <a class="nav-link active" aria-current="page" href="./recenseur.php">Recenseurs</a>
            </li>
          
            <?php
           }
           ?>   
     <?php
                if($_SESSION['role']=="superviseur" || $_SESSION['role']=="controleur" || $_SESSION['role']=="superviseur_national"){
            ?>
            <li style="border-left: 1px solid #aaaaaa;" class="nav-item">
               <a class="nav-link " aria-current="page" href="./stat.php">Statistique</a>
            </li>
          
            <?php
           }
           ?>

<?php
                if($_SESSION['role']=="recenseur" || $_SESSION['role']=="recenseur"){
            ?>
            <li style="border-left: 1px solid #aaaaaa;" class="nav-item">
               <a class="nav-link " aria-current="page" href="./stat.php">Recenseur</a>
            </li>
          
            <?php
           }
           ?>
            </ul>
        </div>

        <a style="margin: 10px;" class="nav-link active">
            <img src="static/icons/person.svg" alt="User Icon" style="width: 20px; height: 20px; margin-right: 5px;">
            <b><?php echo $_SESSION['username'] . '--' . (isset($_SESSION['commune_code']) ? $_SESSION['commune_code'] : 'No Commune Code'); ?></b>

        </a>

        <a href="assets/php/logout.php" class="btn btn-danger btn-sm logout" style="border-radius: 17px;">
            <img src="static/icons/signout.svg" alt="Logout Icon" style="width: 25px; height: 29px; margin-right: 5px;">
            
        </a>
        
    </div>
</nav>

