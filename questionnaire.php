
<?php
include('includes/header.php');
?>
<<<<<<< Updated upstream
<link rel="stylesheet" href="assets/css/questionnaire.css">
<script  src="./assets/js/questionnaire-mask.js" defer></script>
   
=======

      <style>
        /* @font-face {
			font-family: 'Scheherazade';
			src: url('static/fonts/rga/ScheherazadeNew-Regular.ttf') format('truetype');
			font-weight: normal;
			font-style: normal;
		} */

       
	
         @page {
         size: A4;
         margin: 0;
         }
         body {
            font-family: 'Scheherazade', arial; /* Use the custom font */
         width: 210mm;
         height: 297mm;
         margin: 0;
         padding: 0;
         margin: auto;
         line-height: 15px;
         background-color: #dadada;
         }
         body span {
            font-family: 'Scheherazade', arial; /* Use the custom font */
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
         .line-edit {
         width: 30px;
         height: 33px;
         margin-right: 3px;
         text-align: center;
         border: 1px solid #ccc;
         border-radius: 5px;
         }
         .line-edit:focus {
         outline: none;
         border-color: #007bff;
         box-shadow: 0 0 5px rgba(0, 123, 255, 0.5);
         }
         .font_12 {
         font-size: 12px !important;
         }
         .form-check {
         display: flex;
         align-items: center;
         }
         /* Style for the checkbox input */
         .form-check-input {
         margin-right: 10px;
         /* Adjust as needed */
         height: 25px;
         /* Adjust size as needed */
         width: 25px;
         /* Adjust size as needed */
         cursor: pointer;
         }
         /* Style for the custom checkbox design */
         .checkmark {
         display: inline-block;
         height: 25px;
         /* Adjust size as needed */
         width: 25px;
         /* Adjust size as needed */
         background-color: #4CAF50;
         /* Green color */
         border-radius: 5px;
         /* Rounded corners */
         }
         /* Style for the checkmark icon */
         .checkmark:after {
         content: "";
         display: none;
         position: absolute;
         }
         /* Show the checkmark icon when the checkbox is checked */
         .form-check-input:checked+.checkmark:after {
         display: block;
         }
         /* Style for the checkmark icon */
         .checkmark:after {
         left: 7px;
         /* Adjust position as needed */
         top: 3px;
         /* Adjust position as needed */
         width: 6px;
         /* Adjust size as needed */
         height: 12px;
         /* Adjust size as needed */
         border: solid white;
         border-width: 0 3px 3px 0;
         transform: rotate(45deg);
         /* Rotate the checkmark */
         }
         /* Style for the text next to the checkbox */
         .form-check-label {
         font-size: 16px;
         /* Adjust size as needed */
         color: #000;
         /* Text color */
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
         zoom: 10%;
         /* Adjust the value as needed */
         }

         .err{
            color: red;
            margin-bottom: 5px;

        }

         }

         
        ::-webkit-scrollbar {
    width: 12px;
}

::-webkit-scrollbar-track {
    background-color: #ffffff; /* Change the background color as needed */
}

::-webkit-scrollbar-thumb {
    background-color: #136a23; /* Change the thumb color as needed */
    border-radius: 8px;
}

::-webkit-scrollbar-thumb:hover {
    background-color: #555; /* Change the thumb color on hover as needed */
}
      </style>
>>>>>>> Stashed changes
    
   <body>

     
 
     <br><br><br>
 
     <div class="card">
    
    <img src="static/header.png">

         <div class="card-body">
 
 
         <form id="info_form" method="post">
    
<<<<<<< Updated upstream
=======
                <h4 style="margin-bottom: 27px;">I- Information générales - معلومات عامة</h4>
                <div style="border-top: 2px solid red; width:330px; margin:-20px 0px 0px 30px; "></div>
                <input disabled hidden name="user" class="bneder" value="<?php echo $_SESSION['id_user']; ?>" />
>>>>>>> Stashed changes

                        <br>
                        <input  name="etat" hidden disabled class="bneder" value="en attent">
                <h5 style="margin-bottom: 27px;">I- Information générales - معلومات عامة</h5>
                <div style="border-top: 1px solid red; width:230px; margin:-20px 0px 0px 50px; "></div>
                
                <div class="row">
                    <div class="col">
                    <br><br><br>
                <input disabled hidden name="user" class="bneder" value="<?php echo $_SESSION['id_user']; ?>" />
                    <div class="input-group input-group-sm">
                    <div class="qst-num zxcount"></div>
                    <span class="input-group-text" id="basic-addon3">
                    تاريخ المرور
                    <br />
                    Date de passage</span>
                    <select class="form-select" id="day_of_passage" >
                       <option value="-"></option>
                       <option  value="1">1</option>
                       <option  value="2">2</option>
                       <option  value="3">3</option>
                       <option  value="4">4</option>
                       <option  value="5">5</option>
                       <option  value="6">6</option>
                       <option  value="7">7</option>
                       <option  value="8">8</option>
                       <option  value="9">9</option>
                       <option  value="10"> 10
                       </option>
                       <option  value="11"> 11
                       </option>
                       <option  value="12"> 12
                       </option>
                       <option  value="13"> 13
                       </option>
                       <option  value="14"> 14
                       </option>
                       <option  value="15"> 15
                       </option>
                       <option  value="16"> 16
                       </option>
                       <option  value="17"> 17
                       </option>
                       <option  value="18"> 18
                       </option>
                       <option  value="19"> 19
                       </option>
                       <option  value="20"> 20
                       </option>
                       <option  value="21"> 21
                       </option>
                       <option  value="22"> 22
                       </option>
                       <option  value="23"> 23
                       </option>
                       <option  value="24"> 24
                       </option>
                       <option  value="25"> 25
                       </option>
                       <option  value="26"> 26
                       </option>
                       <option  value="27"> 27
                       </option>
                       <option  value="28"> 28
                       </option>
                       <option  value="29"> 29
                       </option>
                       <option  value="30"> 30
                       </option>
                       <option  value="30"> 31
                       </option>
                    </select>
                    <select class="form-select"  id="month_of_passage" >
                       <option value="-"></option>
                        <option  value="5">Mai</option>
                        <option  value="6">Juin</option>
                        <option  value="7">Juillet</option>
                    </select>
                    <select class="form-control" id="year_of_passage" >
                       
                       <option selected value="2024">2024
                       </option>
                       
                    </select>
                 </div>
                 <br />
                 <div class="input-group input-group-sm">
                 <div class="qst-num zxcount"></div>
                    <span class="input-group-text" id="basic-addon3">لقب
                    المحصي
                    <br />
                    Nom du recenseur</span>
<<<<<<< Updated upstream
                    <input readonly class="form-control " id="nom_recensseur" name="nom_recensseur"  value="" />
=======
                    <input class="form-control" id="exampleInputEmail1" type="text" 
                       value="" />
>>>>>>> Stashed changes
                 </div>
                 <br />
                 <div class="input-group input-group-sm">
                 <div class="qst-num zxcount"></div>
                    <span class="input-group-text" id="basic-addon3">إسم
                    المحصي
                    <br />
                    Prénom du recenseur</span>
<<<<<<< Updated upstream
                    <input readonly class="form-control " id="prenom_recenseur" name="prenom_recenseur"   
=======
                    <input class="form-control" id="exampleInputEmail1"  type="text" 
>>>>>>> Stashed changes
                       value="" />
                 </div>
                 <br />
                 <br />
                        <div class="input-group input-group-sm">
                        <div hidden class="qst-num zxcount"></div>
                        <div class="qst-num ">7</div>
                            <span class="input-group-text" id="basic-addon3">الولاية
                                <br>
                                Wilaya</span>
<<<<<<< Updated upstream
                            <input readonly class="form-control" id="wilaya_name_ascii" >
                        
                    
                 </div>
               
=======
                            <select class="form-select" id="wilaya_select" >
                                <option selected>
                                    -
                                </option>
                       <option  value="Tipaza">Tipaza</option>
                       <option  value="El Taref">El Taref</option>
                       <option  value="Mascara">Mascara</option>
                       <option  value="Djelfa">Djelfa</option>
                       <option  value="Biskra">Biskra</option>
                       <option  value="Adrar">Adrar</option>
                    </select>
                 </div>
                 <br />
                 <div class="input-group input-group-sm">
                 <div hidden class="qst-num zxcount"></div>
                        <div class="qst-num ">8</div>
                    <span class="input-group-text" id="basic-addon3">البلدية<br />
                    commune</span>
                    <input readonly class="form-control" type="text"  value="" />
                 </div>
>>>>>>> Stashed changes

                 <br />

                 <script>
<<<<<<< Updated upstream
                  //   document.getElementById('wilaya_select').addEventListener('change', function () {
                  //       var selectedOption = this.options[this.selectedIndex].value;
=======
                    $(document).ready(function() {
                      // Listen for the form submission
                      $('#info_form').on('submit', function(e)) {
                        e.preventDefault(); // Prevent the default form submission
                    
                        // Collect the form data
                        var formObject = {};
                        var formData = $(this).serializeArray();
                        $.each(formData, function(_, element) {
                          formObject[element.name] = element.value;
                        });
                    
                        // Send the form data with fetch
                        fetch('http://localhost/agr/BondVert.php', {
                          method: 'POST',
                          headers: {
                            'Content-Type': 'application/json',
                            'Accept': 'application/json'
                          },
                          body: JSON.stringify(formObject)
                        })
                        .then(response => response.json())
                        .then(data => {
                          console.log('Success:', data);
                          // Handle success, e.g., show a message to the user
                        })
                        .catch((error) => {
                          console.error('Error:', error);
                          // Handle error, e.g., show an error message to the user
                        });
                      });
                    
                    </script>
                    

                 <script>
                    document.getElementById('wilaya_select').addEventListener('change', function () {
                        var selectedOption = this.options[this.selectedIndex].value;
>>>>>>> Stashed changes
                
                  //       var communeOfPassageInput = document.querySelector('[name="commune_of_passage"]');
                  //       var commune_code = document.querySelector('[name="commune_code"]');
                
                  //       var wilayaValues = {
                  //           'Tipaza': { communeOfPassage: 'Ahmar el ain - حمر العين', communeCode: '4219' },
                  //           'El Taref': { communeOfPassage: 'Drean - دريعان', communeCode: '3613' },
                  //           'Mascara': { communeOfPassage: 'Oued Taria - واد تاغية', communeCode: '2922' },
                  //           'Djelfa': { communeOfPassage: 'Aïn el bell - عين الإبل', communeCode: '1730' },
                  //           'Biskra': { communeOfPassage: 'Aïn naga - عين ناقة', communeCode: '0739' },
                  //           'Adrar': { communeOfPassage: 'Inzeghmir - عين زقمير', communeCode: '0105' },
                  //       };
                
                  //       if (wilayaValues[selectedOption]) {
                  //           communeOfPassageInput.value = wilayaValues[selectedOption].communeOfPassage;
                  //           commune_code.value = wilayaValues[selectedOption].communeCode;
                  //       }
                  //   });
                </script>


<!-- removed -->
                 <!-- <div class="input-group input-group-sm">
                    <span class="input-group-text" id="basic-addon3">
                    Numéro de l'exploitation ou immatriculation <br /> رقم المستثمرة أو رقم التسجيل في
                    البلدية
                    </span>
            
                  
                       <input id="in3"  maxlength="4" num class="form-control" 
                          value="" />
                   
                 </div> 
                 <br />-->
                 
                
              </div>
              <div class="col">

              <?php
if ($_SESSION['role'] == "recenseur") {
    $disabled = "disabled";
} else {
    $disabled = "";
}
?>
    <div  class="card"> 


<<<<<<< Updated upstream
<div class="card-body" style=" border-radius: 5px; border: 2px solid red; padding: 11px;">
<div style="text-align:right; color:red;"><p>  إطار للمراقب مخصص  - Cadre réservé au contrôleur</p></div>

<div style="margin: 8px 0px 0px 0px;" class="input-group input-group-sm"><br>

<span class="input-group-text" id="basic-addon3"> الرقم <br>
   Numéro</span>
    <input  <?= $disabled ?>   class="form-control bneder" id="num_qst" name="num_qst">

</div> 
=======
                    <div class="card-body" style=" border-radius: 5px; border: 2px solid red; padding: 11px;">
                       <div class="input-group input-group-sm">
                       <div hidden class="qst-num zxcount"></div>
                       <div class="qst-num ">4</div>
                          <span style="width: 102px;" class="input-group-text" id="basic-addon3">تاريخ
                          المراقبة
                          <br />
                          Date de contrôle
                          </span>
                          <select class="select-ee" id="inputGroupSelect01">
                             <option value="-"></option>
                             <option  value="1">1</option>
                             <option  value="2">2</option>
                             <option  value="3">3</option>
                             <option  value="4">4</option>
                             <option  value="5">5</option>
                             <option  value="6">6</option>
                             <option  value="7">7</option>
                             <option  value="8">8</option>
                             <option  value="9">9</option>
                             <option  value="10"> 10
                             </option>
                             <option  value="11"> 11
                             </option>
                             <option  value="12"> 12
                             </option>
                             <option  value="13"> 13
                             </option>
                             <option  value="14"> 14
                             </option>
                             <option  value="15"> 15
                             </option>
                             <option  value="16"> 16
                             </option>
                             <option  value="17"> 17
                             </option>
                             <option  value="18"> 18
                             </option>
                             <option  value="19"> 19
                             </option>
                             <option  value="20"> 20
                             </option>
                             <option  value="21"> 21
                             </option>
                             <option  value="22"> 22
                             </option>
                             <option  value="23"> 23
                             </option>
                             <option  value="24"> 24
                             </option>
                             <option  value="25"> 25
                             </option>
                             <option  value="26"> 26
                             </option>
                             <option  value="27"> 27
                             </option>
                             <option  value="28"> 28
                             </option>
                             <option  value="29"> 29
                             </option>
                             <option  value="30"> 30
                             </option>
                             <option  value="30"> 31
                             </option>
                          </select>
                          <select class="select-ee" id="inputGroupSelect01" >
                             <option value="-"></option>
                             <option  value="1">1 - Janvier</option>
                             <option  value="2">2 - Février</option>
                             <option  value="3">3 - Mars</option>
                             <option  value="4">4 - Avril</option>
                             <option  value="5">5 - Mai</option>
                             <option  value="6">6 - Juin</option>
                             <option  value="7">7 - Juillet</option>
                             <option  value="8">8 - Août</option>
                             <option  value="9">9 - Septembre</option>
                             <option  value="10">10 - Octobre</option>
                             <option  value="11">11 - Novembre</option>
                             <option  value="12">12 - Décembre</option>
                          </select>
                          <select class="select-ee" id="inputGroupSelect01">
                             <option value="-">-</option>
                             <option  value="2024">2024
                             </option>
                             <option  value="2025">2025
                             </option>
                             <option  value="2026">2026
                             </option>
                             <option  value="2027">2027
                             </option>
                             <option  value="2028">2028
                             </option>
                             <option  value="2029">2029
                             </option>
                             <option  value="2030">2030
                             </option>
                          </select>
                       </div>
                       <br />
                       <div class="input-group input-group-sm">
                       <div hidden class="qst-num zxcount"></div>
                       <div class="qst-num ">5</div>
                          <span class="input-group-text" id="basic-addon3">لقب
                          المراقب
                          <br />
                          Nom du contrôleur</span>
                          <input readonly class="form-control"type="text" 
                             value="BNEDER" />
                       </div>
                       <br />
                       <div class="input-group input-group-sm">
                       <div hidden class="qst-num zxcount"></div>
                       <div class="qst-num ">6</div>
                          <span class="input-group-text" id="basic-addon3">إسم
                          المراقب
                          <br />
                          prénom du contrôleur</span>
                          <input readonly class="form-control" type="text" 
                             value="BNEDER" />
                       </div>
>>>>>>> Stashed changes

<br>

   <div class="input-group input-group-sm">
   <div hidden class="qst-num zxcount"></div>
   <div class="qst-num ">4</div>
      <span style="width: 102px;" class="input-group-text" id="basic-addon3">تاريخ
      المراقبة
      <br />
      Date de contrôle
      </span>
      <select  <?= $disabled ?> class="form-control" id="inputGroupSelect01">
         <option value="-"></option>
         <option  value="1">1</option>
         <option  value="2">2</option>
         <option  value="3">3</option>
         <option  value="4">4</option>
         <option  value="5">5</option>
         <option  value="6">6</option>
         <option  value="7">7</option>
         <option  value="8">8</option>
         <option  value="9">9</option>
         <option  value="10"> 10
         </option>
         <option  value="11"> 11
         </option>
         <option  value="12"> 12
         </option>
         <option  value="13"> 13
         </option>
         <option  value="14"> 14
         </option>
         <option  value="15"> 15
         </option>
         <option  value="16"> 16
         </option>
         <option  value="17"> 17
         </option>
         <option  value="18"> 18
         </option>
         <option  value="19"> 19
         </option>
         <option  value="20"> 20
         </option>
         <option  value="21"> 21
         </option>
         <option  value="22"> 22
         </option>
         <option  value="23"> 23
         </option>
         <option  value="24"> 24
         </option>
         <option  value="25"> 25
         </option>
         <option  value="26"> 26
         </option>
         <option  value="27"> 27
         </option>
         <option  value="28"> 28
         </option>
         <option  value="29"> 29
         </option>
         <option  value="30"> 30
         </option>
         <option  value="30"> 31
         </option>
      </select>
      <select  <?= $disabled ?>  class="form-control" id="inputGroupSelect01" >
         <option value="-"></option>
         <option  value="1">Janvier</option>
         <option  value="2">Février</option>
         <option  value="3">Mars</option>
         <option  value="4">Avril</option>
         <option  value="5">Mai</option>
         <option  value="6">Juin</option>
         <option  value="7">Juillet</option>
         <option  value="8">Août</option>
         <option  value="9">Septembre</option>
         <option  value="10">Octobre</option>
         <option  value="11">Novembre</option>
         <option  value="12">Décembre</option>
      </select>
      <select  <?= $disabled ?>  class="form-control"  id="inputGroupSelect01">
         <option value="-"></option>
         <option  value="2024">2024
         </option>
         <option  value="2025">2025
         </option>
         <option  value="2026">2026
         </option>
         <option  value="2027">2027
         </option>
         <option  value="2028">2028
         </option>
         <option  value="2029">2029
         </option>
         <option  value="2030">2030
         </option>
      </select>
   </div>
   <br />
   <div class="input-group input-group-sm">
   <div hidden class="qst-num zxcount"></div>
   <div class="qst-num ">5</div>
      <span class="input-group-text" id="basic-addon3">لقب
      المراقب
      <br />
      Nom du contrôleur</span>
      <input  <?= $disabled ?> readonly class="form-control"  id="nom_controleur"
         />
   </div>
   <br />
   <div class="input-group input-group-sm">
   <div hidden class="qst-num zxcount"></div>
   <div class="qst-num ">6</div>
      <span class="input-group-text" id="basic-addon3">إسم
      المراقب
      <br />
      prénom du contrôleur</span>
      <input  <?= $disabled ?> readonly class="form-control"  id="prenom_controleur" />
   </div>

</div>
</div>



                

                
                
          
<<<<<<< Updated upstream
               
=======
                 <div style="margin: 8px 0px 0px 0px;" class="input-group input-group-sm"><br>
                 <div hidden class="qst-num zxcount"></div>
                 <div class="qst-num ">9</div>
                    <span class="input-group-text" id="basic-addon3">رمز البلدية<br>
                        commune Code</span>
                        <input  type="text" class="form-control bneder" id="commune_code" name="commune_code" value="<?php echo isset($_SESSION['commune_code']) ? $_SESSION['commune_code'] : 'No Commune Code'; ?>">

                </div>
>>>>>>> Stashed changes
                 
            
              </div>
              <div class="row">
           <div class="col-8">
           <div class="input-group input-group-sm" style="margin-right:8px;">
                 <div hidden class="qst-num zxcount"></div>
                        <div class="qst-num ">8</div>
                    <span class="input-group-text" id="basic-addon3">البلدية<br />
                    commune</span>
                    <input readonly class="form-control"  id="commune_name_ascii"  value="" />
                 </div>
                 <br>
                 <div class="input-group input-group-sm">
                 <div  class="qst-num zxcount"></div>
                    <span class="input-group-text" id="basic-addon3">
                    district-zone <br /> إسم المكان، المنطقة
                    </span>
<<<<<<< Updated upstream
                    <input class="form-control"   id="nom_zone_district" />

                 </div>
                 
         </div>
=======
                    <input class="form-control"  type="text" 
                       value="" />
                 </div>
            </div>
>>>>>>> Stashed changes
            <div class="col">
           <div  class="input-group input-group-sm"><br>
                 <div hidden class="qst-num zxcount"></div>
                 <div class="qst-num ">9</div>
                    <span class="input-group-text"  id="basic-addon3">رمز البلدية<br>
                        commune Code</span>
                        <input style="max-width:88px;" readonly num   maxlength="4"  class="form-control bneder" id="commune_code" name="commune_code">

                </div>
                <br>
                <div class="input-group input-group-sm">
                 <div class="qst-num zxcount"></div>
                    <span class="input-group-text" id="basic-addon3">
                    Numero du district-zone <br />رقم المنطقة
                    </span>
                  
<<<<<<< Updated upstream
                       <input style="max-width:88px;"  num   maxlength="2" num class="form-control" id="num_zone_district"  />
=======
                       <input id="in1" type="text" max="99" class="form-control" data-length="2"
                          value="" />
>>>>>>> Stashed changes
                    
                 </div>
            </div>
                </div>
           </div>
         
        
                <br />
         
           
           <br />
                 
           <br />
           <br />
           <br />
           <div style="border-top: 3px solid red;"></div>
           <br />
           <h5 style="margin-bottom: 27px;">II- Identification de l'exploitant تعريف المستثمر</h5>
           <div style="border-top: 1px solid red; width:300px; margin:-20px 0px 0px 50px; "></div>

           <br />
           <div class="row">
              <div class="col">
                 <div class="input-group input-group-sm">
                 <div class="qst-num zxcount"></div>
                   <span class="input-group-text" id="basic-addon3">
                    اللقب <br /> Nom
                    </span>
<<<<<<< Updated upstream
                    <input class="form-control bneder"  name="nom_exploitant" id="nom_exploitant"   />
=======
                    <input class="form-control bneder" type="text" name="nom_exploitant" id="nom_exploitant"  value="test" />
>>>>>>> Stashed changes
                 </div>
              </div>

           

      
               </script>

              <div class="col">
                 <div class="input-group input-group-sm">
                 <div class="qst-num zxcount"></div>
                   <span class="input-group-text" id="basic-addon3">
                    الإسم<br /> Prénom
                    </span>
<<<<<<< Updated upstream
                    <input class="form-control bneder"    name="prenom_exploitant"  id="prenom_exploitant" />
=======
                    <input class="form-control bneder"  type="text"  name="prenom_exploitant"  id="prenom_exploitant" value="test"/>
>>>>>>> Stashed changes
                 </div>
              </div>
           </div>
           <br />
        
              <div class="col">
                <div class="input-group input-group-sm">
                <div class="qst-num zxcount"></div>
                    <span class="input-group-text" id="basic-addon3" style="width: 165px;">
                      تاريخ الميلاد  Date de naissance</span>
                    <select class="form-select " id="jour_de_naissance"  style="width: 65px;">
                       <option value="02"></option>
                       <option  value="1">1</option>
                       <option  value="2">2</option>
                       <option  value="3">3</option>
                       <option  value="4">4</option>
                       <option  value="5">5</option>
                       <option  value="6">6</option>
                       <option  value="7">7</option>
                       <option  value="8">8</option>
                       <option  value="9">9</option>
                       <option  value="10"> 10
                       </option>
                       <option  value="11"> 11
                       </option>
                       <option  value="12"> 12
                       </option>
                       <option  value="13"> 13
                       </option>
                       <option  value="14"> 14
                       </option>
                       <option  value="15"> 15
                       </option>
                       <option  value="16"> 16
                       </option>
                       <option  value="17"> 17
                       </option>
                       <option  value="18"> 18
                       </option>
                       <option  value="19"> 19
                       </option>
                       <option  value="20"> 20
                       </option>
                       <option  value="21"> 21
                       </option>
                       <option  value="22"> 22
                       </option>
                       <option  value="23"> 23
                       </option>
                       <option  value="24"> 24
                       </option>
                       <option  value="25"> 25
                       </option>
                       <option  value="26"> 26
                       </option>
                       <option  value="27"> 27
                       </option>
                       <option  value="28"> 28
                       </option>
                       <option  value="29"> 29
                       </option>
                       <option  value="30"> 30
                       </option>
                       <option  value="30"> 31
                       </option>
                    </select>
                    <select class="form-select"   id="mois_de_naissance" style="width: 165px;">
                       <option value="02"></option>
                       <option  value="01">Janvier</option>
                       <option  value="02">Février</option>
                       <option  value="03">Mars</option>
                       <option  value="04">Avril</option>
                       <option  value="05">Mai</option>
                       <option  value="06">Juin</option>
                       <option  value="07">Juillet</option>
                       <option  value="08">Août</option>
                       <option  value="09">Septembre</option>
                       <option  value="10">Octobre</option>
                       <option  value="11">Novembre</option>
                       <option  value="12">Décembre</option>
                    </select>
                    <select class="form-select" id="annee_de_naissance"  style="width: 125px;" >
                    <option value="-" disabled selected> </option>
                        <option value="1880">1880</option><option value="1881">1881</option><option value="1882">1882</option><option value="1883">1883</option><option value="1884">1884</option><option value="1885">1885</option><option value="1886">1886</option><option value="1887">1887</option><option value="1888">1888</option><option value="1889">1889</option><option value="1890">1890</option><option value="1891">1891</option><option value="1892">1892</option><option value="1893">1893</option><option value="1894">1894</option><option value="1895">1895</option><option value="1896">1896</option><option value="1897">1897</option><option value="1898">1898</option><option value="1899">1899</option><option value="1900">1900</option><option value="1901">1901</option><option value="1902">1902</option><option value="1903">1903</option><option value="1904">1904</option><option value="1905">1905</option><option value="1906">1906</option><option value="1907">1907</option><option value="1908">1908</option><option value="1909">1909</option><option value="1910">1910</option><option value="1911">1911</option><option value="1912">1912</option><option value="1913">1913</option><option value="1914">1914</option><option value="1915">1915</option><option value="1916">1916</option><option value="1917">1917</option><option value="1918">1918</option><option value="1919">1919</option><option value="1920">1920</option><option value="1921">1921</option><option value="1922">1922</option><option value="1923">1923</option><option value="1924">1924</option><option value="1925">1925</option><option value="1926">1926</option><option value="1927">1927</option><option value="1928">1928</option><option value="1929">1929</option><option value="1930">1930</option><option value="1931">1931</option><option value="1932">1932</option><option value="1933">1933</option><option value="1934">1934</option><option value="1935">1935</option><option value="1936">1936</option><option value="1937">1937</option><option value="1938">1938</option><option value="1939">1939</option><option value="1940">1940</option><option value="1941">1941</option><option value="1942">1942</option><option value="1943">1943</option><option value="1944">1944</option><option value="1945">1945</option><option value="1946">1946</option><option value="1947">1947</option><option value="1948">1948</option><option value="1949">1949</option><option value="1950">1950</option><option value="1951">1951</option><option value="1952">1952</option><option value="1953">1953</option><option value="1954">1954</option><option value="1955">1955</option><option value="1956">1956</option><option value="1957">1957</option><option value="1958">1958</option><option value="1959">1959</option><option value="1960">1960</option><option value="1961">1961</option><option value="1962">1962</option><option value="1963">1963</option><option value="1964">1964</option><option value="1965">1965</option><option value="1966">1966</option><option value="1967">1967</option><option value="1968">1968</option><option value="1969">1969</option><option value="1970">1970</option><option value="1971">1971</option><option value="1972">1972</option><option value="1973">1973</option><option value="1974">1974</option><option value="1975">1975</option><option value="1976">1976</option><option value="1977">1977</option><option value="1978">1978</option><option value="1979">1979</option><option value="1980">1980</option><option value="1981">1981</option><option value="1982">1982</option><option value="1983">1983</option><option value="1984">1984</option><option value="1985">1985</option><option value="1986">1986</option><option value="1987">1987</option><option value="1988">1988</option><option value="1989">1989</option><option value="1990">1990</option><option value="1991">1991</option><option value="1992">1992</option><option value="1993">1993</option><option value="1994">1994</option><option value="1995">1995</option><option value="1996">1996</option><option value="1997">1997</option><option value="1998">1998</option><option value="1999">1999</option><option value="2000">2000</option><option value="2001">2001</option><option value="2002">2002</option><option value="2003">2003</option><option value="2004">2004</option><option value="2005">2005</option><option value="2006">2006</option><option value="2007">2007</option><option value="2008">2008</option><option value="2009">2009</option><option value="2010">2010</option><option value="2011">2011</option><option value="2012">2012</option><option value="2013">2013</option><option value="2014">2014</option><option value="2015">2015</option><option value="2016">2016</option><option value="2017">2017</option><option value="2018">2018</option><option value="2019">2019</option><option value="2020">2020</option><option value="2021">2021</option><option value="2022">2022</option><option value="2023">2023</option><option value="2024">2024</option>
                    </select>
                    
                    <div class="qst-num zxcount" style="margin-left:10px;"></div>

                    <span class="input-group-text" id="basic-addon3">الجنس
                    <br />
                    Sexe</span>
                    <select class="form-select bneder"   name="sexe_exploitant"  >
                       <option value="-" disabled selected> 
                       </option>
                       <option  value="1"> Masculin - ذكر
                       </option>
                       <option  value="2"> Féminin - أنثى
                       </option>
                    </select>
             </div>

   
          

                  <br/>



            <div class="row">
                <div class="col">
                        <div class="input-group input-group-sm">
                        <div class="qst-num zxcount"></div>
                           <span class="input-group-text " id="basic-addon3">المستوى التعليمي
                           <br />
                           Niveau d'instruction</span>
                           <select class="form-select  bneder" id="niveau_instruction"   name="niveau_instruction" >
                              <option disabled value="-" selected="">  </option>
                              <option  value="1">1-Aucun - لاشيء</option>
                              <option  value="2">2-Primaire - إبتدائي</option>
                              <option  value="3">3-Moyen - متوسط</option>
                              <option  value="4">4-Secondaire - ثانوي</option>
                              <option  value="5">5-Universitaire - جامعي</option>
                           </select>
                           <div style="margin: 7px 0px 0px 20px;" class="qst-num zxcount"></div>
                     </div>
                    
               </div>
               <div class="col-7">
           
                  <div class="input-group input-group-sm" >
            
                    <span class="input-group-text " id="basic-addon3">مستوى التكوين الفلاحي
                    <br />
                    Niveau de formation agricole</span>
                    <select class="form-select  bneder" id="niveau_formation_agricole" name="niveau_formation_agricole" >
                       <option disabled value="-" selected="">  </option>
                       <option  value="1">1- Aucun - لاشيء</option>
                       <option  value="2">2- Perfectionnement - تأهيل</option>
                       <option  value="3">3- Agent technique-عون تقني</option>
                       <option  value="4">4- Agent technique spécialisé - عون تقني متخصص</option>
                       <option  value="5">5- Technicien - تقني</option>
                       <option  value="6">6- Technicien supérieur - تقني سامي</option>
                       <option  value="7">7- Ingénieur - مهندس</option>
                       <option  value="8">8- Vétérinaire - بيطري</option>
                       <option  value="9">9- Formation - تكوين</option>
                    </select>
                 </div>
              </div>
            </div> 
<br>
              
               <div class="input-group input-group-sm">
           <div class="qst-num zxcount" ></div>
              <span class="input-group-text" id="basic-addon3">
              عنوان المستثمر الفلاحي (الفلاح) - Adresse de l'exploitant agricole
              </span>
              <input class="form-control bneder"   
                 name="adress_exploitant" />
           </div>
           <br />
         


            <div class="row">
               <div class="col">
               <div class="input-group input-group-sm">
               <div class="qst-num zxcount"></div>
            <span class="input-group-text" id="basic-addon3">
            رقم التعريف الوطني <br> Numéro d’identité nationale
            </span>
            <input class="form-control bneder" num   maxlength="18" id="nin_exploitant" name="nin_exploitant"   />
            </div>
<br>

<div class="input-group input-group-sm">
<div class="qst-num zxcount"></div>
            <span class="input-group-text" id="basic-addon3">
            رقم التعريف اإلحصائي <br> Numéro d’identification statstique
            </span>
            <input class="form-control bneder"  num   maxlength="15" id="nis_exploitant"  num name="nis_exploitant" />
            </div>

               </div>
               <div class="col">
               <div class="input-group input-group-sm">
               <div class="qst-num zxcount"></div>
                 <span class="input-group-text" id="basic-addon3">
                 رقم الهاتف <br /> Numéro de téléphone
                 </span>
                 <input class="form-control bneder" num   maxlength="10" id="phone_exploitant"  name="phone_exploitant">
              </div>
              
              <br>
              <div class="input-group input-group-sm">
              <div class="qst-num zxcount"></div>
                    <span class="input-group-text" id="basic-addon3">  البريد الإكتروني<br /> é-mail</span>
                    <input class="form-control bneder"    id="email_exploitant"  name="email_exploitant" />
                 </div>
               </div>
            </div> 

 
</div>

             
             
      
        <br/>     
        
        <div class="row">
         <div class="col-7">
         <div class="input-group input-group-sm">
         <div class="qst-num zxcount"></div>
            <span class="input-group-text" id="basic-addon3">نوع التأمين إذا كان مؤمنا
               <br>
               Type d'assurance, si assuré</span>

           
          
                <select class="form-select col-6 bneder" id="assurance_exploitant" name="assurance_exploitant" style="width: 200px;">
                <option disabled value="-" selected="">  </option>
                        <option value="1">1 - CASNOS
                        </option>
                        <option value="2">2 - CNAS
                        </option>
                </select>
            </div>
         </div>
         <div class="col">
         <div class="input-group input-group-sm">
         <div class="qst-num zxcount"></div>
            <span class="input-group-text" id="basic-addon3">
               رقم الضمان الإجتماعي <br> Numéro de sécurité social
               </span>
            <input num   maxlength="12" class="form-control bneder"   id="num_sec_sociale" name="num_sec_sociale"   />
            </div>
         </div>

        </div>
        
        <br />
        <div class="row">
  <div class="col-4">
    <div class="card">
      <div class="card-header" style="text-align: center;">
        هل أنت مسجل في?<br>
        <div class="qst-num zxcount" style="margin: 0px 0px 0px 0px; text-align: left;"></div>Etes-vous inscrit à?
      </div>
      <div class="card-body">
        <div class="row">
          <div class="col">
            <div class="form-check">
<<<<<<< Updated upstream
              <input class="form-check-input " id="caw" name="caw" type="checkbox" > <label class="form-check-label" for="caw">الغرفة الفالحية الوالئية<br>
=======
              <input class="form-check-input" id="caw" name="caw" type="checkbox" > <label class="form-check-label" for="caw">الغرفة الولائية للفلاحة<br>
>>>>>>> Stashed changes
              La Chambre d’Agriculture de la Wilaya (CAW)</label>
            </div><br>
            <div class="form-check">
              <input class="form-check-input" id="capa" name="capa" type="checkbox" > <label class="form-check-label" for="capa">غرفة الصيد البحري وتربية المائيات<br>
              La Chambre de la Pêche et de l'Aquaculture (CAPA)</label>
            </div><br>
            <div class="form-check">
              <input class="form-check-input" id="unpa" name="unpa" type="checkbox" > <label class="form-check-label" for="unpa">الإتحاد الوطني للفلاحين الجزائريين<br>
              L’Union Nationale des Paysans Algériens (UNPA)</label>
            </div>
          </div><br>
          <div class="col">
            <div class="form-check">
<<<<<<< Updated upstream
               <input class="form-check-input" id="cam" name="cam" type="checkbox" > <label class="form-check-label" for="cam">غرفة الصناعة التقليدية والحرف<br>
               La Chambre de l'Artisanat et des Metiers (CAM)</label>
=======
              <input class="form-check-input" id="ccw" name="ccw" type="checkbox" > <label class="form-check-label" for="ccw">غرفة الحرف والمهنيين<br>
              La Chambre du Commerce de la Wilaya (CCW)</label>
            </div><br>
            <div class="form-check">
              <input class="form-check-input" id="cam" name="cam" type="checkbox" > <label class="form-check-label" for="cam">الغرفة التجارية الولائية<br>
              La Chambre de l'artisanat et des metiers (CAM)</label>
>>>>>>> Stashed changes
            </div><br>
            <div class="form-check">
              <input class="form-check-input" id="dispositif_social" name="dispositif_social" type="checkbox" > <label class="form-check-label" for="dispositif_social">الأجهزة الإجتماعية<br>
              جهاز إجتماعي - Dispositif Social</label>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="col-8">
    <br>
    <br>
    <br>
    <br>
    <div class="input-group input-group-sm">
      <div class="qst-num zxcount"></div><span class="input-group-text" id="basic-addon3">رقم بطاقة الفلاح<br>
      Numéro de la carte fellah</span> <input num maxlength="7" class="form-control bneder"  id="num_carte_fellah_exploitant" name="num_carte_fellah_exploitant">
    </div><br>
    <div class="input-group input-group-sm">
      <div class="qst-num zxcount"></div><span class="input-group-text" id="basic-addon3">منحدر من عائلة فلاحية<br>
      Issu d'une famille agricole</span> <select class="form-select col-6 bneder" id="issu_famille_agricole" name="issu_famille_agricole">
        <option value="-" disabled selected>
        </option>
        <option value="1">
          1 - Oui - نعم
        </option>
        <option value="2">
          2- Non - لا
        </option>
      </select>
    </div><br>
    <div class="input-group input-group-sm">
      <div class="qst-num zxcount"></div><span class="input-group-text" id="basic-addon3">هل أنت الفلاح - المستثمر<br>
      Etes-vous l'exploitant ?</span> <select class="form-select col-6 bneder" id="exploitant" name="exploitant" style="width: 225px;">
        <option value="-" disabled selected>
         
        </option>
        <option value="1">
          1 - الوحيد - Unique
        </option>
        <option value="2">
          2 - الرئيسي - Principal
        </option>
      </select>
    </div><br>
    <div class="input-group input-group-sm">
      <div class="qst-num zxcount"></div><span class="input-group-text" id="basic-addon3">عدد المتعاونين أو الشركاء إذا كان الفلاح - المستثمر هو الرئيسي<br>
      Nombre de co-exploitants, si</span> <input num   maxlength="2" class="form-control bneder"  id="nb_co_exploitants" name="nb_co_exploitants">
    </div><br>
    <div class="input-group input-group-sm">
      <div class="qst-num zxcount"></div><span class="input-group-text" id="basic-addon3">طبيعة المستثمر (الفلاح) -<br>
      Nature de l'exploitant</span> 
      <select class="form-select col-6 bneder" id="nature_exploitant" name="nature_exploitant">
        <option value="-" disabled selected>
         
        </option>
        <option value="1">
          1 - مالك - Propriétaire
        </option>
        <option value="2">
          2 - مسير - Gérant
        </option>
        <option value="2">
          2 - مستأجر - Locataire
        </option>
      </select>
    </div>
  </div>
</div>
<br>
             
             

             
       <br/>
             
 
             
             
    <br />
 

    <br />     
             
             
             
             
             
             
             
             
             
         <div style="border-top: 3px solid red;"></div>
    <br />
    <h5 style="margin-bottom: 27px;">III- Identification de l'exploitation تعريف المستثمرة</h5>
    <div style="border-top: 1px solid red; width:300px; margin:-20px 0px 0px 50px; "></div>
<br>
<br>
<div class="input-group input-group-sm">
  <div class="qst-num zxcount"></div><span class="input-group-text" id="basic-addon3">إسم المستثمرة<br>
<<<<<<< Updated upstream
  Nom des investissements agricoles</span> <input class="form-control bneder" id="nom_exploitation" name="nom_exploitation"  >
=======
  Nom des investissements agricoles</span> <input class="form-control bneder" id="nom_exploitation" name="nom_exploitation" type="text" value="test">
>>>>>>> Stashed changes
</div><br>
<div class="input-group input-group-sm">
  <div class="qst-num zxcount"></div><span class="input-group-text" id="basic-addon3">عنوان المستثمرة (أو إسم المكان)<br>
  Adresse de l'exploitation (ou lieu dit)</span> <input class="form-control bneder" id="adress_exploitation" name="adress_exploitation"  value="">
</div><br>
<div class="input-group input-group-sm">
  <div class="qst-num zxcount"></div><span class="input-group-text" id="basic-addon3">الوضع القانوني للمستثمرة<br>
  Statut juridique de l’exploitation</span> <select class="form-select bneder" id="statut_juridique_de_lexploitation" name="statut_juridique_de_lexploitation">
    <option value="-" disabled selected>
      
    </option>
    <option value="1">
      1 - Société civile - مؤسسة مدنية
    </option>
    <option value="2">
      2 - Société familiale - مؤسسة عائلية
    </option>
    <option value="3">
      3 - SARL - ش.ذ.م.م
    </option>
    <option value="4">
      4 - EURL - م.ا.م.م
    </option>
    <option value="5">
      5 - Coopérative - تعاونية
    </option>
    <option value="6">
      6 - Groupement - تجمع
    </option>
    <option value="7">
      7 - Location - إيجار
    </option>
    <option value="8">
      8 - Association - جمعية
    </option>
    <option value="9">
      9 - Partenariat - شراكة
    </option>
    <option value="10">
      10 - Sans statut juridique - بدون وضع قانوني
    </option>
    <option value="11">
      11 - Privé individuel - فردي خاص
    </option>
    <option value="12">
      11 - Autre - آخر
    </option>
  </select>
</div><br>
<div class="row">
  <div class="col">
    <div class="card" style="font-size: 12px;">
      <div class="card-header" style="text-align: center;">
        الإحداثيات الجغرافية للمستثمرة<br>
        <div class="qst-num zxcount" style="margin: 0px 0px 0px 0px; text-align: left;"></div>Coordonnées géographiques de l'exploitation
      </div>
      <div class="card-body">
        <div class="input-group input-group-sm">
<<<<<<< Updated upstream
          <span class="input-group-text" id="basic-addon3">خط الطول (س) Longitude (X)</span> <select style="max-width: 33px;" class="form-select bneder" id="longitude_x_prefix" name="longitude_x_prefix">
=======
          <span class="input-group-text" id="basic-addon3">خط الطول (س) Longitude (X)</span> <select style="height: 33px;" class="select-ee" id="inputGroupSelect01" name="longitude_x_prefix">
>>>>>>> Stashed changes
            <option value="EST">
              +
            </option>
            <option value="OUEST">
              -
            </option>
          </select> <input class="form-control bneder"  id="lon_exploitation" name="lon_exploitation">
        </div><br>
        <div class="input-group input-group-sm">
          <span class="input-group-text" id="basic-addon3">خط العرض (ع) Latitude (Y)</span> <input class="form-control bneder"  id="lat_exploitation" name="lat_exploitation">
        </div>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <div class="card-header" style="text-align: center;">
        نشاط المستثمرة - Activité de l'exploitation
      </div>
      <div class="card-body">
        <!-- <div class="row">
                     <div class="col">
                        <div class="form-check">
                            <input class="form-check-input bneder" id="vegetale" name="vegetale" type="checkbox" >

                           <label class="form-check-label" for="vegetale">
                           نباتية - Végétale
                           </label>
                        </div>
                     </div>
                     <div class="col">
                        <div class="form-check">
                            <input class="form-check-input bneder" id="elevage" name="elevage" type="checkbox" >

                           <label class="form-check-label" for="elevage">
                           تربية الحيوانات - Elevage
                           </label>
                        </div>
                     </div>
                     <div class="col">
                        <div class="form-check">
                           <input class="form-check-input bneder" id="mixed" name="mixed" type="checkbox" >
                           <label class="form-check-label" for="mixed">
                           مختلطة - mixed
                           </label>
                        </div>
                     </div>
                  </div> -->
        <div class="input-group input-group-sm">
          <div class="qst-num zxcount"></div><span class="input-group-text" id="basic-addon3">نشاط المستثمرة<br>
<<<<<<< Updated upstream
          Activité de l'exploitation</span> <select class="form-select bneder" id="activite_exploitation" name="activite_exploitation">
            <option value="-" disabled selected>
             
=======
          Activité de l'exploitation</span> <select class="select-ee bneder" id="vegetale" name="vegetale">
            <option>
              -
>>>>>>> Stashed changes
            </option>
            <option value="1">
              1 - نباتي - Végétale
            </option>
            <option value="2">
              2 - تربية الحيوانات - Animale
            </option>
            <option value="2">
              2 - مختلط - mixte
            </option>
          </select>
        </div><br>
        <div class="input-group input-group-sm">
          <div class="qst-num zxcount"></div><span class="input-group-text" id="basic-addon3">إذا كان النشاط تربية الحيونات<br>
          Si activité est l'élevage</span> <select class="form-select bneder" id="type_activite_exploitation" name="type_activite_exploitation">
            <option value="-" disabled selected>
             
            </option>
            <option value="1">
              1 - لديه أرض - Avec terre
            </option>
            <option value="2">
              2 - بدون أرض - Sans terre
            </option>
          </select>
        </div>
      </div>
    </div>
  </div>
</div><br>
<br>
<div class="row">
  <div class="col-5">
    <div class="card" style="font-size: 12px;">
      <div class="card-header" style="text-align: center;">
        إمكانية الوصول إلى المستثمرة<br>
        <div class="qst-num zxcount" style="margin: 0px 0px 0px 0px; text-align: left;"></div>Accessibilité de l’exploitation
      </div>
      <div class="card-body">
        <div class="row">
          <div class="col">
            <div class="form-check">
              <input class="form-check-input bneder" id="route_national" name="route_national" type="checkbox" > <label class="form-check-label" for="route_national">طريق وطني<br>
              Route national</label>
            </div><br>
            <div class="form-check">
              <input class="form-check-input bneder" id="chemin_de_wilaya" name="chemin_de_wilaya" type="checkbox" > <label class="form-check-label" for="chemin_de_wilaya">طريق ولائي<br>
              Chemin de wilaya</label>
            </div><br>
            <div class="form-check">
              <input class="form-check-input bneder" id="route_communale" name="route_communale" type="checkbox" > <label class="form-check-label" for="route_communale">طريق بلدي<br>
              Route communale</label>
            </div>
          </div>
          <div class="col">
            <div class="form-check">
              <input class="form-check-input bneder" id="piste" name="piste" type="checkbox" > <label class="form-check-label" for="piste">مسار ريفي<br>
              Piste</label>
            </div><br>
            <div class="form-check">
              <input class="form-check-input bneder" id="acces_agricole" name="acces_agricole" type="checkbox" > <label class="form-check-label" for="acces_agricole">مسار فلاحي<br>
              Accés agricole</label>
            </div><br>
            <div class="form-check">
              <input class="form-check-input bneder" id="acces_rural" name="acces_rural" type="checkbox" > <label class="form-check-label" for="acces_rural">مدخل<br>
              Accés rural</label>
            </div>
          </div>
        </div>
      </div>
    </div><br>
    <br>
  </div>
  <div class="col">
    <div class="input-group input-group-sm">
    <div class="qst-num zxcount"></div>
      <span class="input-group-text" id="basic-addon3">شبكة كهرباء</span>
      <div class="col-auto">
        <select class="form-select form-select bneder" id="reseau_electrique" name="reseau_electrique" style="height: 33px;">
          <option selected>
            -
          </option>
          <option value="1">
            1 - Oui
          </option>
          <option value="2">
            2 - Non
          </option>
        </select>
      </div>
    
      </div>
      <br>
      <div class="input-group input-group-sm">
      <div class="qst-num zxcount"></div>
<<<<<<< Updated upstream
      <span class="input-group-text" id="basic-addon3">هل المستثمرة متصلة بشبكة الهاتف؟<br>
      L'éxploiation est-elle connectée à
un réseau téléphonique ?
</span><select class="form-select bneder" id="reseau_telephonique" name="reseau_telephonique">
=======
        <span class="input-group-text" id="basic-addon3">شبكة الهاتف</span> <select class="select-ee bneder" id="reseau_telephonique" name="reseau_telephonique">
>>>>>>> Stashed changes
          <option selected>
            -
          </option>
          <option value="1">
            1 - Oui
          </option>
          <option value="2">
            2 - Non
          </option>
        </select>
      </div>
<br>
  
      
<div class="input-group input-group-sm">
<div class="qst-num zxcount"></div>
<<<<<<< Updated upstream
<span class="input-group-text" id="basic-addon3">إذا كان نعم<br>
Si oui, 
</span> <select class="form-select bneder" id="reseau_telephonique_si_oui" name="reseau_telephonique_si_oui">
=======
        <span class="input-group-text" id="basic-addon3">إذا نعم</span> <select class="select-ee bneder" id="reseau_telephonique_si_oui" name="reseau_telephonique_si_oui">
>>>>>>> Stashed changes
          <option selected>
            -
          </option>
          <option value="1">
            1 - Mobile
          </option>
          <option value="2">
            2 - Fixe
          </option>
        </select>
      </div>
      <br>
   <div class="input-group input-group-sm">
   <div class="qst-num zxcount"></div>
<<<<<<< Updated upstream
   
   <span class="input-group-text" id="basic-addon3">هل المستثمرة متصلة بشبكة
اإلنترنت؟ <br>
L'éxploiation est-elle connectée
au réseau internet ?
</span> <select class="form-select bneder" id="reseau_internet" name="reseau_internet">
=======
    <span class="input-group-text" id="basic-addon3">شبكة الإنترنت</span> <select class="select-ee bneder" id="reseau_internet" name="reseau_internet">
>>>>>>> Stashed changes
      <option selected>
        -
      </option>
      <option value="1">
        1 - Oui
      </option>
      <option value="2">
        2 - Non
      </option>
    </select>
  </div><br>
   <div class="input-group input-group-sm">
   <div class="qst-num zxcount"></div>
<<<<<<< Updated upstream
   <span class="input-group-text" id="basic-addon3" style="max-width: 82% !important; ">
    إذا نعم، هل تستخدم اإلنترنت
    ألغراض متعلقة بالفالحة؟
    <br>
    Si oui, utilisez-vous le réseau
    internet pour des besoins
    agricoles ?
</span> <select class="form-select bneder" id="reseau_internet_si_oui" name="reseau_internet_si_oui">
=======
    <span class="input-group-text" id="basic-addon3">إذا نعم هل تستخدم الإنترنت لتلبية الإحتياجات الفلاحية؟</span> <select class="select-ee bneder" id="reseau_internet_si_oui" name="reseau_internet_si_oui">
>>>>>>> Stashed changes
      <option selected>
        -
      </option>
      <option value="1">
        1 - Oui
      </option>
      <option value="2">
        2 - Non
      </option>
    </select>
  </div>
      </div>
 
  <br>
<br>
  
 
</div>
<script>
    var select1 = document.getElementsByName('reseau_internet')[0];
    var select2 = document.getElementsByName('reseau_internet_si_oui')[0];

    select1.addEventListener('input', updateSelect2);

    function updateSelect2() {
        var selectedValue = select1.value;
        select2.disabled = (selectedValue != '1');
    }
</script>
<br/>

<div class="card" style="font-size: 12px;">
               <div class="card-header" style="text-align: center;">
                  الوضع القانوني للأرض
                  <br><div class="qst-num zxcount" style="margin: 0px 0px 0px 0px; text-align: left;"></div>
                  Statut juridique des terres
               </div>
               <div class="card-body">

                  <div style="margin-top: 62px;height: 50px;width: 90%;background-color: white;position: absolute;z-index: 99;">
                        </div>


                  <div class="row" style="text-align: center;">
<<<<<<< Updated upstream
                    <!-- <div class="col-1"></div> -->
                    <div class="col-4">أصل الأرضي <br> Origine des terres</div>
                    
                     <div class="col-3">كيفية الولوج لاستغلال الأراضي <br> Mode d’accés à l'exploitation des terres </div>
                     <div class="col"></div>

                     <div class="col-2" style="padding-left: 33px;">المساحة(هكتار) <br> Superficie(Hectare)</div>
                     <div class="col-2">المساحة(ار) <br> Superficie(Are)</div>
=======
                    <div class="col-3">أصل الأرض <br> Origine des terres</div>
                     <div class="col-4">طريقة استغلال الأراضي <br> Mode d’exploitation des terres</div>
                     <div class="col" style="padding-left: 33px;">المساحة(هكتار) <br> Superficie(Hectare)</div>
                     <div class="col">المساحة(ار) <br> Superficie(Are)</div>
>>>>>>> Stashed changes
                     <div class="col"></div>
                  </div>
                  <hr>


                  <div id="formContainer">



<<<<<<< Updated upstream
                  <div style="margin-bottom: 5px;" class="row statut_juridique_s ">
                        <div class="col-4">
=======
                     <div style="margin-bottom: 5px;" class="row statut_juridique_s">
                        <div class="col">
>>>>>>> Stashed changes
                        <div class="input-group input-group-sm">

                            <select  class="form-select" id="origine_des_terres" name="origine_des_terres" >
                                <option selected="" disabled ></option>
                                <option value="1">1 - Melk personnel titré ملك شخصي موثق</option>
                                <option value="2">2 - Melk personnel non titré ملك شخصي غير موثق</option>
                                <option value="3">3 - Melk en indivision titré ملك مشترك موثق</option>
                                <option value="4">4 - Melk en indivision non titré ملك مشترك غير موثق
                                </option>
                                <option value="5">5 - Domaine public ملكية عامة للدولة</option>
                                <option value="6">6 - Domaine privé de l'état ملكية خاصة للدولة</option>
                                <option value="7">7 - Wakf privé وقف خاص</option>
                                <option value="8">8 - Wakf public وقف عام</option>
                                <option value="9">9 - d g g</option>
                            </select>

                            </div>
                        </div>

                        <div class="col-3">

                        

                        <div class="input-group input-group-sm">

                                <select  class="form-select" id="mode_dexploitation_des_terres" name="mode_dexploitation_des_terres" value="1">
                                <option  selected="" disabled>-</option>
                                <option value="1">1- APFA «18-83» - ح.م.أ.ف</option>
                                <option value="2">2- Ex EAC «03-10» - م.ف.ج</option>
                                <option value="3">3- Ex EAI «م.ف,ف - « 10-03 </option>
                                <option value="4">4- Ex GCA «483-97» - ع.إ.ف</option>
                                <option value="5">5- Ex CDARS «483-97» - م.ت.ف.ر.ص</option>
                                <option value="6">6- Concession CIM 108, CIM 1839</option>
                                <option value="7">7 - Nouvelle concession ONTA  إمتياز جديد«&nbsp;21-432&nbsp;»</option>
                                <option value="8">8 - Nouvelle concession ODASإمتياز جديد «&nbsp;20-265&nbsp;»</option>
                                <option value="9">9 - Exploitation sans titre إستغلال بدون سند «&nbsp;21-432&nbsp;»</option>
                                <option value="10">10 - Ferme pilote مزرعة نموذجية</option>
                                <option value="11">11 - Etablissement public (EPA, EPIC, EPE) مؤسسة عمومية</option>
                                <option value="12">12 - Droit d’usage des forêts حق الانتفاع في استخدام الغابات للملكية العمومية</option>
<<<<<<< Updated upstream
                                <option value="13">13- Inconnu غير معروف</option> -->
                                <option  disabled=""  selected value="-"></option>
                                <option  disabled="" style="font-weight: 700;">حق الإنتفاع في استخدام  غابات للملكية العمومية</option>
                                  <option value="13">13 - Vente/Achat بيع/شراء</option>
                                 <option value="14">14 - Succession إرث</option>
                                 <option value="15">15 - Donation هبة</option>
                                 <option value="16">16 - Testament وصية</option>
                                 <option value="17">17 - Droit préemption حق الشفاعة</option>
                                 <option value="18">18 - Préscription acquisitive ملكية مكتسبة</option>
                                 <option value="19">19 - Certificat de possession شهادة حيازة</option>
                                 <option value="20">20 - Location إجار</option>
                                 <option value="21">21 - Autre  آخرى </option>
                                 <option value="22">22 - Inconnu غير معروف</option>
=======
                                <option value="13">13- Inconnu غير معروف</option>
>>>>>>> Stashed changes
                                </select>
                               
                         </div>

<<<<<<< Updated upstream
                      </div>
                      <div class="col-1"></div>
                      <style>
.error {
    border: 2px solid red;
}
</style>
<script>
$(document).ready(function(){
    var selectedValues = []; // Array to hold the counts of each combined value selected

    $(document).on('change', '.statut_juridique_check', function() {
        var fullId = $(this).attr('id');
        var idPart = fullId.match(/[^_]+$/)[0]; // Extract the dynamic part of the ID

        var val1 = $('#origine_des_terres_' + idPart).val() || "";
        var val2 = $('#status_juridique_' + idPart).val() || "";
        var cc = val1 + val2; // Combine the values to form a unique identifier

        // Clear any previous error indication before any new validation
        $('#origine_des_terres_' + idPart).removeClass('error');
        $('#status_juridique_' + idPart).removeClass('error');

        if(val1 === "" || val2 === "") {
            console.log("Both selections are required.");
            return; // Exit the function if one of the dropdowns is not selected
        }

        // Check if this combination already exists in the array
        if($.inArray(cc, selectedValues) !== -1){
            console.log("This combination of values has already been selected.");
            Swal.fire({
               title: 'Attention!',
                text: 'Cette option a déjà été sélectionnée. Veuillez en choisir une autre.',
                icon: 'warning',
                confirmButtonText: 'OK'
            });
            $('#origine_des_terres_' + idPart).addClass('error');
            $('#status_juridique_' + idPart).addClass('error');
            $("#"+fullId).prop("selectedIndex", 0); // Optionally reset the current dropdown
        } else {
            // If the combination is unique, add it to the array and ensure no error class is present
            selectedValues.push(cc);
        }
    });
});
</script>



                        <div class="col-2">
                            <div class="input-group input-group-sm">
                       <input  id="superfecie_sj" name="superfecie_sj"    maxlength="4" oninput="this.value = this.value.replace(/[^0-9]/g, '');" class="form-control coherence_surface_total-surface  surface_total_error statut_juridique_s"    >
                       </div>
                       </div>
                       <div class="col-1"> 
                       <div class="input-group input-group-sm">
                                    
                                    <input  id="superfecie_sj_are" name="superfecie_sj_are"  maxlength="2" oninput="this.value = this.value.replace(/[^0-9]/g, '');" class="form-control superficie_are coherence_surface_total-surface_are  surface_total_error_are statut_juridique_s"  >
=======

                         
                           
                        </div>
                        <div class="col">
                            <div class="input-group input-group-sm">

                            <style>
    .big-space {
        width: 50px; /* Adjust the width to increase or decrease the space */
        display: inline-block;
    }
    .small-space {
        width: 20px; /* Adjust the width to increase or decrease the space */
        display: inline-block;
    }
    .mid-space {
      width: 35px; /* Adjust the width to increase or decrease the space */
        display: inline-block;
    }
</style>
                                    <input  id="in11" name="superficie_hectare"   type="text" max="9999" class="form-control" data-length="4" value="" >
                            
                                   
                                    <div class="big-space"></div>
                                    <div class="small-space"></div>
                                    
                                    <input  id="in12" name="superficie_are" type="text" max="99" class="form-control" data-length="2" value="">
>>>>>>> Stashed changes
                             

                            </div>

                        </div>
                        <div class="col-1">

                            <div class="d-grid gap-2">
                                        <button style="width: 328px;position: absolute;left: 220px;z-index: 500" class="btn btn-primary btn-sm" type="button" id="addForm">+</button>

                            </div>


                        </div>

                    </div>
              



                  <script>
                  document.getElementById('addForm').addEventListener('click', function () {
    const formContainer = document.getElementById('formContainer');
    const formRow = formContainer.firstElementChild.cloneNode(true);

    // Generate unique IDs and names for the cloned form elements
    formRow.querySelectorAll('[id], [name]').forEach(function (element) {
        element.setAttribute('id', element.getAttribute('id') + '_' + formContainer.children.length);
        element.setAttribute('name', element.getAttribute('name') + '_' + formContainer.children.length);

        // Remove the "disabled" attribute if present
        element.removeAttribute('disabled');
    });

    // Remove the add button from the cloned row and add a remove button
    const removeButton = document.createElement('button');
    removeButton.textContent = '-';
    removeButton.type = 'button';

    removeButton.classList.add('btn', 'btn-danger', 'btn-sm', 'disable-44-45-46');
    removeButton.addEventListener('click', function () {
        formRow.remove();
    });
    formRow.querySelector('.d-grid').innerHTML = '';
    formRow.querySelector('.d-grid').appendChild(removeButton);

    formContainer.appendChild(formRow);

    // Enable the cloned input elements inside the replicated HTML code
    formRow.querySelectorAll('.line-edit').forEach(function (inputElement) {
        inputElement.removeAttribute('disabled');
    });

 
});

                 </script>
                 
                 
               </div>
            </div>
 </div>    


 <br/>

<div class="row">
   <div class="col-8">
 <div class="input-group input-group-sm">
<div class="qst-num zxcount"></div>

<<<<<<< Updated upstream
   <span style="max-width:84%" class="input-group-text" id="basic-addon3">إذا كانت المستثمرة م.ف.ف أو م.ف.ج هل لديه عقد امتياز؟

=======
   <span class="input-group-text" id="basic-addon3">إذا كانت المستثمرة م.ف.ف أو م.ف.ج هل يملك عقد
   امتياز؟
>>>>>>> Stashed changes
   <br>
   Si l'exploitation est une EAI ou une EAC,posséde -il un acte de
   concession
   ?
   </span>
   <select class="form-select bneder" id="si_exploi_eai_eac" name="si_exploi_eai_eac">
      <option selected="">-</option>
      <option value="1">1 - Oui - نعم</option>
      <option value="2">2 - Non - لا</option>
   </select>
</div>

<<<<<<< Updated upstream

   </div>
   <div class="col-4">
   <div class="input-group input-group-sm">
 <div  hidden class="qst-num zxcount"></div>
 <div   class="qst-num">46</div>


               <span style="max-width:60%" class="input-group-text" id="basic-addon3">
               le Référence cadastrale <br> مرجع مسح الأراضي
=======
<br>

<div class="card" style="font-size: 12px;">
<div class="qst-num zxcount"  style="margin: 2px 0px 2px 0px;"></div>

<div class="row">
   <div class="col">
   <div class="input-group input-group-sm">
               <span class="input-group-text" id="basic-addon3">
               إذا كانت م.ف.ج 
             <br>  Si EAC

               
               Nombre des exploitants

               </span>
               
               <input style="width:100px;" class="form-control bneder" type="text"  id="si_exploi_eac" name="si_exploi_eac"  value="">
              
            </div>

   </div>
   <div class="col-7">
   <div class="input-group input-group-sm">
               <span class="input-group-text" id="basic-addon3">
             المساحة

               <br>
               Superficie
>>>>>>> Stashed changes
               </span>
               
                 <input class="form-control bneder" num maxlength="6"   id="reference_cadastrale" name="reference_cadastrale" value="">




   </div>
</div>
</div>




<br>
 





 <br>



 <div class="card" style="font-size: 12px;">
    <div class="card-header" style="text-align: center;">
        إذا كانت م.ف.ج - Si Ex-EAC
        <div class="qst-num zxcount" hidden style="margin: 0px 0px 0px 0px; text-align: left;"></div>
        <div class="qst-num" style="margin: 0px 0px 0px 0px; text-align: left;">45</div>
    </div>
    <!-- <div class="qst-num zxcount"  style="margin: 2px 0px 2px 0px;"></div> -->
    <br>
    <div class="row">
        <div class="col-2"></div>
        <div class="col-4">
            عدد األعضاء<br>
            Nombre des <br>exploitants
        </div>
        <div class="col">
            مساحة م.ف.ج<br>
            Superficie de l'Ex-EAC
        </div>
    </div>
    <div class="row">
    <div class="col-2"></div>
        <div class="col-4"></div>
        <div class="col-2">Hectar - هكتار</div>
        <div class="col"> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  Are - آر</div>
    </div>
    <br>
    <div class="row">
        <div class="col-2"></div>
        <div class="col-4">
            <div class="input-group input-group-sm">
                <input style="width:100px;" class="form-control bneder" num maxlength="2" id="si_exploi_eac" name="si_exploi_eac" value="">
            </div>
        </div>
        <div class="col-4">
            <div class="row">
                <div class="col">
                    <div class="input-group input-group-sm">
                        <input num maxlength="5" class="form-control bneder" id="exploi_superficie_hec" name="exploi_superficie_hec" value="">
                    </div>
                </div>
                
                <div class="col-5">
                    <div class="input-group input-group-sm">
                        <input  num maxlength="2" class="form-control bneder" id="exploi_superficie_are" name="exploi_superficie_are" value="">
                        <br>
                    </div>
                </div>
            </div>
        </div>
       
    </div>
    <br>
</div>
 


<br/>

















<div id='sans_terre'>



            <div style="border-top: 3px solid red;"></div>
<br>
            <h5 style="margin-bottom: 27px;" >IV-Superficie de l'exploitation مساحة المستثمرة</h5>
            <div style="border-top: 1px solid red; width:250px; margin:-20px 0px 0px 50px;"></div>
            <br>
            <h6><b>(Campagne agricole الموسم الفلاحي 2023-2024)</b></h6>



            <div class="container mt-3">
   <div class="row" style="text-align: center;">
      <div class="col-5"></div>
      <div class="col">
         (المساحة Superficie) جافة (هكتار) - En sec (Hectare)
      </div>
      <div class="col">
         (المساحة Superficie) (هكتار) مروية - En irriguée (Hectare)
      </div>
   </div>
   <br>
   <div class="row" style="text-align: center;">
      <div class="col-5"></div>
      <div class="col-3">
         <div class="row">
         <div class="col"></div>
            <div class="col-5" style="padding-left:15px">
               Hectare  هكتار
            </div>
            <div class="col-3">
               Are  آر
            </div>
         </div>
      </div>
      <div class="col-3">
      <div class="row">
     

      <div class="col-5"></div>
            <div class="col-4" style="padding-left:15px">
               Hectare  هكتار
            </div>
  
            <div class="col-3">
            
           
               Are  آر
            </div>
         </div>
      </div>
   </div>
   <table class="table table-sm">
      <tbody>
         <!-- Labels for Superficie -->
         
         
         
         <!-- Cultures herbacées -->
         <tr>
            
         <td style="width: 233px;">
    <div class="qst-num zxcount" style="margin: 5px 0px 2px 0px; position: absolute; "></div>
    <p  style="margin: 0px 0px 0px 25px;"> Cultures herpacées</p>
    <p style="margin: 0px 0px 0px 25px;" > محاصيل عشبية نباتية</p>
</td>
            <td style="padding-left:15px">
               <div class="input-group input-group-sm">
                
<<<<<<< Updated upstream
               
                     <input  class="surface  form-control coherence_surface_total-surface surface_total bneder" id="cultures_herbacees_1" name="cultures_herbacees_1"  maxlength="5" num   >
             
                 
                     
                 
                     
                     <input  class="surface  form-control  coherence_surface_total-surface_are bneder" name="cultures_herbacees_2"   maxlength="2" num   value="">
                     
=======
               <div class="small-space"></div>
                     <input  class="surface bneder form-control" id="cultures_herbacees_1" name="cultures_herbacees_1"  max="9999"  data-length="4" value="5" >
                
                 <div class="small-space"></div>
                     <span style="width: 32px;"></span>
                 
                     
                     <input  class="surface bneder form-control" name="cultures_herbacees_2"   max="99"  data-length="2" value="">
                     <div class="small-space"></div>
>>>>>>> Stashed changes
               </div>
            </td>
            <td style="padding-left:10px">
               <div class="input-group input-group-sm">
<<<<<<< Updated upstream
               
                     <input id="in16" class="surface  form-control bneder" name="cultures_herbacees_3"  maxlength="5" num   value="">
                     
                  
             
                     
                     
                     <input  class="surface  form-control bneder" name="cultures_herbacees_4"  maxlength="2" num   value="">
                     
=======
               <div class="small-space"></div>
                     <input id="in16" class="surface bneder form-control" name="cultures_herbacees_3" type="text" max="9999"  data-length="4" value="">
                     <div class="mid-space"></div>
                  <span style="width: 32px;"></span>
             
                     
                     
                     <input  class="surface bneder form-control" name="cultures_herbacees_4" type="text" max="99"  data-length="2" value="">
                     <div class="small-space"></div>
>>>>>>> Stashed changes
               </div>
            </td>
         </tr>
         <!-- Terres au repos (jachères) -->
         <tr>
            <td style="width: 233px;">
    <div class="qst-num zxcount" style="margin: 5px 0px 2px 0px; position: absolute; "></div>
            <p style="margin: 0px 0px 0px 25px;" >Terres au repos (jachères)</p>
            <p style="margin: 0px 0px 0px 25px;" > أراضي مستريحة (البور)</p>
            </td>
            <td style="padding-left:15px">
               <div class="input-group input-group-sm">
                
                     
                     
               
                     
<<<<<<< Updated upstream
                     <input  class="surface  form-control coherence_surface_total-surface surface_total bneder" name="terres_au_repos_jacheres_1"  maxlength="5" num   value="">
                  
                  
=======
                     <input  class="surface bneder form-control" name="terres_au_repos_jacheres_1" type="text" max="9999"  data-length="4" value="">
>>>>>>> Stashed changes
                  
                     
                     
<<<<<<< Updated upstream
                     <input  class="surface  form-control coherence_surface_total-surface_are bneder" name="terres_au_repos_jacheres_2"  maxlength="2" num   value="">
                     
=======
                     <input  class="surface bneder form-control" name="terres_au_repos_jacheres_2" type="text" max="99"  data-length="2" value="">
                     <div class="small-space"></div>
>>>>>>> Stashed changes
               </div>
            </td>
            <td style="padding-left:10px">
               <div class="input-group input-group-sm">
                
                     
               
                     
                     
                     <input  class="surface bneder form-control" name="terres_au_repos_jacheres_3"  maxlength="5" num   value="">
                     
                  
                
                      
                     
                     <input  class="surface bneder form-control" name="terres_au_repos_jacheres_4"  maxlength="2" num   value="">
                     
               </div>
            </td>
         </tr>
         <tr>
           
            <td style="width: 233px;">
         <div class="qst-num zxcount" style="margin: 5px 0px 2px 0px; position: absolute; "></div>
         <p style="margin: 0px 0px 0px 25px;" >Plantations (arboriculture)</p>
         <p style="margin: 0px 0px 0px 25px;" >مغروسات (أشجار)</p>
            </td>
            <td style="padding-left:15px">
               <div class="input-group input-group-sm">
                  
                     
                     
               
                     
<<<<<<< Updated upstream
                     <input  class="surface bneder form-control coherence_surface_total-surface surface_total" name="plantations_arboriculture_1"   maxlength="5" num   value="">
=======
                     <input  class="surface bneder form-control" name="plantations_arboriculture_1"  type="text" max="9999"  data-length="4" value="">
>>>>>>> Stashed changes
                 

                  
                 
                     
<<<<<<< Updated upstream
                     
                     <input  class="surface bneder form-control coherence_surface_total-surface_are" name="plantations_arboriculture_2"   maxlength="2" num   value="">
                     
=======
                     <div class="small-space"></div>
                     <input  class="surface bneder form-control" name="plantations_arboriculture_2"  type="text" max="99"  data-length="2" value="">
                     <div class="small-space"></div>
>>>>>>> Stashed changes
               </div>
            </td>
            <td style="padding-left:10px">
               <div class="input-group input-group-sm">
                
                     
                     
                     
                     
                     <input  class="surface bneder form-control" name="plantations_arboriculture_3"   maxlength="5" num   value="">
                     
                  
                 
                     
                     
                     <input  class="surface bneder form-control" name="plantations_arboriculture_4"   maxlength="2" num   value="">
                     
               </div>
            </td>
         </tr>
         <!-- Prairies naturelles -->
         <tr>
            <td style="width: 233px;">
            <div class="qst-num zxcount" style="margin: 5px 0px 2px 0px; position: absolute; "></div>
          
            <p style="margin: 0px 0px 0px 25px;" >Prairies naturelles</p>
            <p style="margin: 0px 0px 0px 25px;" >مروج طبيعية</p>
            </td>
            <td style="padding-left:15px">
               <div class="input-group input-group-sm">
               
                     
                     
               
                     
<<<<<<< Updated upstream
                     <input  class="surface bneder form-control coherence_surface_total-surface surface_total" name="prairies_naturelles_1"  maxlength="5" num   value="">
                     
                  
               
                     
                     
                     <input  class="surface bneder form-control coherence_surface_total-surface_are" name="prairies_naturelles_2"  maxlength="2" num   value="">
                     
=======
                     <input  class="surface bneder form-control" name="prairies_naturelles_1" type="text" max="9999"  data-length="4" value="">
                     <div class="small-space"></div>
                  <span style="width: 32px;"></span>
               
                     
                     
                     <input  class="surface bneder form-control" name="prairies_naturelles_2" type="text" max="99"  data-length="3" value="">
                     <div class="small-space"></div>
>>>>>>> Stashed changes
               </div>
            </td>
            <td style="padding-left:10px">
               <div class="input-group input-group-sm">
              
               
                     
                     
                     
                     <input class="surface bneder form-control" name="prairies_naturelles_3"  maxlength="5" num   value="">
                     
                  
            
                     
                     
                     <input  class="surface bneder form-control" name="prairies_naturelles_4"  maxlength="2" num   value="">
                     
                 
               </div>
            </td>
         </tr>
         <!-- Superficie agricole utile (SAU) -->
         <tr>
            <td style="width: 233px;">
            <div class="qst-num zxcount" style="margin: 5px 0px 2px 0px; position: absolute; "></div>

               <p style="margin: 0px 0px 5px 25px;" >Superficie agricole utile(SAU)
               المساحة الفلاحية المستخدَمَة</p>
               <div style="border-top: 1px solid red; width:260px; margin:0px 30px 0px 30px;"></div>
            </td>
            <td style="padding-left:15px">
               <div class="input-group input-group-sm">
               
               
                     <input style="border: 1px solid " class="surface bneder form-control"  name="superficie_agricole_utile_sau_1" readonly=""   num maxlength="5" value="">
                     
                     
                
                  
                 
                     
                     <input style="border: 1px solid " class="surface bneder form-control" name="superficie_agricole_utile_sau_2" readonly=""  num maxlength="2" value="">
                     
               </div>
            </td>
            <td style="padding-left:10px">
               <div class="input-group input-group-sm">
               
                     
                     <input style="border: 1px solid " class="surface bneder form-control" name="superficie_agricole_utile_sau_3" readonly=""   num maxlength="5" value="">
                     
                  
            
                     
                     <input style="border: 1px solid " class="surface bneder form-control" name="superficie_agricole_utile_sau_4" readonly=""  num maxlength="2" value="">
                 
               </div>
            </td>
         </tr>
         <!-- Pacages et parcours -->
         <tr>
        
            <td style="width: 233px;">
            <div class="qst-num zxcount" style="margin: 5px 0px 2px 0px; position: absolute; "></div>

            <p style="margin: 0px 0px 0px 25px;" >Pacages et parcours</p>
            <p style="margin: 0px 0px 0px 25px;" > المراعي</p>
            </td>
            <td style="padding-left:15px">
               <div class="input-group input-group-sm">

               
                     
                     
                     
<<<<<<< Updated upstream
                     <input  class="surface bneder form-control coherence_surface_total-surface surface_total" name="pacages_et_parcours_1"  maxlength="5" num   value="">
                     
                  
                 
                     
                     
                     <input class="surface bneder form-control coherence_surface_total-surface_are" name="pacages_et_parcours_2"  maxlength="2" num   value="">
                     
=======
                     <input  class="surface bneder form-control" name="pacages_et_parcours_1" type="text" max="9999"  data-length="4" value="">
                     <div class="small-space"></div>
                  <span style="width: 32px;"></span>
                 
                     
                     
                     <input class="surface bneder form-control" name="pacages_et_parcours_2" type="text" max="99"  data-length="2" value="">
                     <div class="small-space"></div>
>>>>>>> Stashed changes
               </div>
            </td>
            <td></td>
         </tr>
         <!-- Surfaces improductives -->
         <tr>
         
            <td style="width: 233px;">
            <div class="qst-num zxcount" style="margin: 5px 0px 2px 0px; position: absolute; "></div>

            <p style="margin: 0px 0px 0px 25px;" >Surfaces improductives</p>
            <p style="margin: 0px 0px 0px 25px;" > مساحات غير منتجة</p>
            </td>
            <td style="padding-left:15px">
               <div class="input-group input-group-sm">
                
                     
               
                     
                     
                     
<<<<<<< Updated upstream
                     <input  class="form-control bneder coherence_surface_total-surface surface_total" name="surfaces_improductives_1"  maxlength="5" num   value="">
                     
                  
            
                     
                     
                     <input  class="form-control bneder coherence_surface_total-surface_are" name="surfaces_improductives_2"  maxlength="2" num   value="">
                     
=======
                     <input  class="form-control bneder" name="surfaces_improductives_1" type="text" max="9999"  data-length="4" value="">
                     <div class="small-space"></div>
                  <span style="width: 32px;"></span>
            
                     
                     
                     <input  class="form-control bneder" name="surfaces_improductives_2" type="text" max="99"  data-length="2" value="">
                     <div class="small-space"></div>
>>>>>>> Stashed changes
               </div>
            </td>
            <td></td>
         </tr>
         <!-- Superficie agricole totale (SAT) -->
         <tr>
            <td style="width: 233px;">
            <div class="qst-num zxcount" style="margin: 5px 0px 2px 0px; position: absolute; "></div>
         <p style="margin: 0px 0px 5px 25px;" >Superficie agricole totale (SAT)
               المساحة الفلاحية الإجمالية</p>
               <div style="border-top: 1px solid red; width:260px; margin:0px 30px 0px 30px;"></div>

            </td>
            <td style="padding-left:15px">
               <div class="input-group input-group-sm">
               
                     
<<<<<<< Updated upstream
                     <input style="border: 1px solid " class="surface  form-control bneder" name="superficie_agricole_totale_sat_1" readonly=""  num maxlength="5" value="">
                     
                  
                 
                     
                     <input style="border: 1px solid "  class="surface  form-control bneder" name="superficie_agricole_totale_sat_2" readonly=""  num maxlength="2" value="">
                     
=======
                     <input class="surface bneder form-control" name="superficie_agricole_totale_sat_1" readonly="" type="text"  style="max-width: 80px;" value="">
                     <div class="small-space"></div>
                  <span style="width: 32px;"></span>
                 
                     
                     <input  class="surface bneder form-control" name="superficie_agricole_totale_sat_2" readonly="" type="text"  style="max-width: 60px;" value="">
                     <div class="small-space"></div>
>>>>>>> Stashed changes
               </div>
            </td>
            <td></td>
         </tr>
         <tr>
            <td style="width: 233px;">
            <div class="qst-num zxcount" style="margin: 5px 0px 2px 0px; position: absolute; "></div>
<p style="margin: 0px 0px 0px 25px;" >Terres forestières(bois, forêts, maquis, vides labourables)</p>
               <p style="margin: 0px 0px 0px 25px;" >  أراضي الغابات (غابات,أدغال,فراغات للحرث)</p>
            </td>
            <td style="padding-left:15px">
               <div class="input-group input-group-sm">
               
                     
                  
<<<<<<< Updated upstream
               
                     <input  class="surface  form-control coherence_surface_total-surface surface_total bneder" name="terres_forestieres_bois_forets_maquis_vides_labourables_1"  num maxlength="5" value="">
                     
                  
               
                     
                     
                     <input  class="surface  form-control coherence_surface_total-surface_are bneder" name="terres_forestieres_bois_forets_maquis_vides_labourables_2" num maxlength="2"  value="">
                     
=======
               <div class="small-space"></div>
                     <input  class="surface bneder form-control" name="terres_forestieres_bois_forets_maquis_vides_labourables_1" type="text"  style="max-width: 80px;" value="">
                     <div class="small-space"></div>
                  <span style="width: 32px;"></span>
               
                     
                     
                     <input  class="surface bneder form-control" name="terres_forestieres_bois_forets_maquis_vides_labourables_2" type="text"  style="max-width: 60px;" value="">
                     <div class="small-space"></div>
>>>>>>> Stashed changes
               </div>
            </td>
            <td></td>
         </tr>
         <tr>
            <td style="width: 233px;">


            <div class="qst-num zxcount" style="margin: 5px 0px 2px 0px; position: absolute; "></div>
         <p style="margin: 0px 0px 5px 25px;" >Surface totale (ST) المساحة الإجمالية</p>
               <div style="border-top: 1px solid red; width:95px; margin:0px 30px 0px 65px;"></div>
             
            </td>
            <td style="padding-left:15px">
               <div class="input-group input-group-sm">
            
               

<<<<<<< Updated upstream
                  <input  style="border: 1px solid " class="surface bneder form-control surface_total_error " name="surface_totale_st_1"  id="surface_totale_st_1"     num maxlength="5"  >
                     
=======
                  <input  class="surface bneder form-control " name="surface_totale_st_1"  id="surface_totale_st_1"   type="text"  style="max-width: 80px;"  >
                     <div class="small-space"></div>
>>>>>>> Stashed changes

                  
                
                     
<<<<<<< Updated upstream
                  <input style="border: 1px solid " class="surface bneder form-control  coherence_surface_total-surface_are  surface_total_error_are" name="surface_totale_st_2"  id="surface_totale_st_2"    num maxlength="2" >
                     
=======
                  <input  class="surface bneder form-control " name="surface_totale_st_2"  id="surface_totale_st_2"  type="text"  style="max-width: 60px;" >
                     <div class="small-space"></div>
>>>>>>> Stashed changes

               
               </div>
            </td>
            <td></td>
         </tr>
      </tbody>
   </table>
</div>



<br/>

<div class="card" style="font-size: 12px;">
               <div class="card-body">
                  <div class="row">
                     <div class="col">
                        <div class="input-group input-group-sm">
                           <div class="qst-num zxcount"></div>

                           <span class="input-group-text" id="basic-addon3">
                           هل المستثمرة مكونة من قطعة واحدة؟ <br>
                           L'exploitation est elle d'un seul bloc ?
                           </span>
                           <select class="form-control bneder" id="exploit_est_un_bloc" name="exploit_est_un_bloc">
                              <option selected="" disabled value="-">  </option>
                              <option value="1">1- Non-لا</option>
                              <option value="2">2- Oui-نعم</option>
                           </select>
                        </div>
                     </div>
                     <div class="col">
                        <div class="input-group input-group-sm">
                              <div class="qst-num zxcount"></div>

                           <span class="input-group-text" id="basic-addon3">
                           إذا كان لا، ما هوعدد القطع؟
                           <br>
                           Si non, quel est le nombre de blocs ?
                           </span>
                           
                           
                              <input disabled num maxlength="2" class="form-control bneder" id="exploit_est_un_bloc_oui" name="exploit_est_un_bloc_oui"  >
                         
                        </div>
                     </div>

                     <script>
                        var select_exploit_est_un_bloc = document.getElementsByName('exploit_est_un_bloc')[0];

                        var exploit_est_un_bloc = document.getElementById('exploit_est_un_bloc');
                        var exploit_est_un_bloc_oui = document.getElementById('exploit_est_un_bloc_oui');
                     
                        select_exploit_est_un_bloc.addEventListener('input', function () {
                           update_exploit_est_un_bloc_oui();
                        });
                     
                        function update_exploit_est_un_bloc_oui() {
                            var selectedValue = select_exploit_est_un_bloc.value;
                            
                            exploit_est_un_bloc_oui.disabled = (selectedValue != '2');
                        }
                     </script>


                  </div>
               </div>
            </div>

<br/>



<div class="card" style="font-size: 12px;">
               <div class="card-body">
               <div class="row">
                     <div class="col">
                  <div class="input-group input-group-sm">
                        <div class="qst-num zxcount"></div>

                     <span class="input-group-text" id="basic-addon3">
                     هل هناك سكان غير شرعيين في المستثمرة؟
                     <br>
                     Existe t’il des indus occupants sur votre exploitation ?
                     </span>
                     <select class="form-control bneder" id="exploit_indus_sur_exploitation" name="exploit_indus_sur_exploitation">
                        <option selected="" disabled value="-">  </option>
                        <option value="1">1- Oui-نعم</option>
                        <option value="2">2- Non-لا</option>
                     </select>
                  </div>
                  </div>
                  <br>
                  <div class="col-5">

                  <div class="input-group input-group-sm">
                      <div class="qst-num zxcount"></div>

                     <span class="input-group-text" id="basic-addon3">
                     إذا كان نعم، ما هوعدد الأسر؟
                     <br>
                     Si oui, quel est le nombre nombre de ménages ?
                     </span>
                   
                      
<<<<<<< Updated upstream
                        <input disabled num maxlength="2" class="form-control bneder" id="exp_indu_si_oui_nombre_menage" name="exp_indu_si_oui_nombre_menage" >
=======
                        <input  class="form-control bneder" id="exploit_indus_sur_exploitation_oui" name="exploit_indus_sur_exploitation_oui" type="text">
>>>>>>> Stashed changes
                   
                  </div>
                  </div>
                  </div>
               </div>
            </div>
            <br>


            <script>
                        var select_exploit_indus_sur_exploitation = document.getElementsByName('exploit_indus_sur_exploitation')[0];

                        var exploit_indus_sur_exploitation = document.getElementById('exploit_indus_sur_exploitation');
                        var exp_indu_si_oui_nombre_menage = document.getElementById('exp_indu_si_oui_nombre_menage');
                     
                        select_exploit_indus_sur_exploitation.addEventListener('input', function () {
                            updateselect_exploit_indus_sur_exploitation();
                        });
                     
                        function updateselect_exploit_indus_sur_exploitation() {
                            var selectedValue = select_exploit_indus_sur_exploitation.value;
                            
                            exp_indu_si_oui_nombre_menage.disabled = (selectedValue != '1');
                        }
                     </script>





            <div class="card" style="font-size: 12px;">
               <div class="card-body">
               <div class="row">
                     <div class="col-6">
                  <div class="input-group input-group-sm">
                        <div class="qst-num zxcount"></div>

                     <span class="input-group-text" id="basic-addon3">
                     (م²) المساحة المبنية المشغولة
                     <br>
                     Surface bâtie occupée (²m) 
                     </span>
<<<<<<< Updated upstream
                     <input num maxlength="4" class="form-control bneder" id="surface_bati_occupe" name="surface_bati_occupe" >
=======
                     <input  class="form-control bneder" id="exploit_indus_sur_exploitation_oui" name="exploit_indus_sur_exploitation_oui" type="text">
>>>>>>> Stashed changes

                  </div>
                  </div>
                  <br>
                  <div class="col">

                  <div class="input-group input-group-sm">
                      <div class="qst-num zxcount"></div>

                     <span class="input-group-text" id="basic-addon3">
                     (آر) المساحة الغير المبنية المشغولة
                     <br>
                     Surface non bâtie occupée (Are) 
                     </span>
                   
                      
<<<<<<< Updated upstream
                        <input num maxlength="4" class="form-control bneder" id="surface_non_bati_occupe" name="surface_non_bati_occupe" >
=======
                        <input  class="form-control bneder" id="exploit_indus_sur_exploitation_oui" name="exploit_indus_sur_exploitation_oui" type="text">
>>>>>>> Stashed changes
                   
                  </div>
                  </div>
                  </div>
               </div>
            </div>
           

           <br/>


           <div class="card" style="font-size: 12px;">
               <div class="card-header" style="text-align: center;">
               <div class="qst-num zxcount" style="margin: 0px 0px 0px 0px; position:absolute ;text-align: left;"></div>  ما هي مصادر الطاقة المستخدمة في المستثمرة؟ - Quelles sont les sources d'énergie utilisées dans
                  l'exploitation ?
               </div>
               <div class="card-body">
                  <div class="row">
                     <div class="col">
                        <div class="form-check">
                           <input class="form-check-input bneder" id="eng_reseau_electrique" name="eng_reseau_electrique" type="checkbox">
                           <label class="form-check-label" for="eng_reseau_electrique">
                           الشبكة الكهربائية
                           <br>
                           Réseau électrique
                           </label>
                        </div>
                     </div>
                     <div class="col">
                        <div class="form-check">
                           <input class="form-check-input bneder" id="eng_groupe_electrogene" name="eng_groupe_electrogene" type="checkbox">
                           <label class="form-check-label" for="eng_groupe_electrogene">
                           مولد كهرباء
                           <br>
                           Groupe electrogéne
                           </label>
                        </div>
                     </div>
                     <div class="col">
                        <div class="form-check">
                           <input class="form-check-input bneder" id="eng_energie_solaire" name="eng_energie_solaire" type="checkbox">
                           <label class="form-check-label" for="eng_energie_solaire">
                           الطاقة الشمسية
                           <br>
                           Energie solaire
                           </label>
                        </div>
                     </div>

                  </div>
                  <div class="row">


                     <div class="col">
                        <div class="form-check">
                           <input class="form-check-input bneder" id="eng_energie_eolienne" name="eng_energie_eolienne" type="checkbox">
                           <label class="form-check-label" for="eng_energie_eolienne">
                           طاقة الرياح
                           <br>
                           Energie éolienne
                           </label>
                        </div>
                     </div>
                     <div class="col">
                        <div class="form-check">
                           <input class="form-check-input bneder" id="eng_energie_carburant" name="eng_energie_carburant" type="checkbox">
                           <label class="form-check-label" for="eng_energie_carburant">
                           وقود
                           <br>
                            Carburant
                           </label>
                        </div>
                     </div>
                     <div class="col">
                        <div class="form-check">
                           <input class="form-check-input bneder" id="autres_sources_d_energie" name="autres_sources_d_energie" type="checkbox">
                           <label class="form-check-label" for="autres_sources_d_energie">
                              
                           مصادر أخرى للطاقة
                           <br>
                           Autres sources d'énergie
                           </label>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <br/>












         
            <div style="border-top: 3px solid red;"></div><br>
<h5 style="margin-bottom: 27px;">V-Utilisation du sol إستخدام الأراضي</h5>
<div style="border-top: 1px solid red; width:210px; margin:-20px 0px 0px 50px;"></div><br>
<div class="card" style="font-size: 12px;">
 
   <div class="card-header" style="text-align: center;"> <div class="qst-num zxcount" style="margin: 0px 0px 0px 0px; position:absolute ;text-align: left;"></div>
      <h6><b>(Campagne agricole الموسم الفلاحي 2023-2024)</b></h6>

</div>
    <div class="card-body">
      <div class="row" style="text-align: center;">
        <div class="row" style="text-align: center;">
        <div style="margin-top: 75px;height: 40px;width: 696px;background-color: #ffffff;position: absolute;z-index: 99;"></div>
        </div>
        <div class="col-4">
          Code culture - رقم الزراعة
        </div>
        <div class="col-3">
          (المساحة Superficie)<br>
          جافة (هكتار) - En sec (Hectare)
        </div>
        <div class="col-2">
          (المساحة Superficie)<br>
          (هكتار) مروية - En irriguée (Hectare)
        </div>
        <div class="col-2">
          مقحمة<br>
          En intercalaire
        </div>
        <div class="col-1"></div>
      </div><br>
      <div id="formContainer2">
        <div class="row code_culture_s" style="margin-bottom: 10px;">
          <div class="col-4" style="margin-right: 20px;">
            <div class="input-group input-group-sm">
<<<<<<< Updated upstream
              <select class="form-select code_culture_s code_culture_check" id="code_culture" name="code_culture">
=======
              <select class="form-select code-culture-select" id="code_culture" name="code_culture">
>>>>>>> Stashed changes
                <option disabled value="-" selected>
                </option>
                <option style="font-weight: 700;">
                  Grandes cultures - المحاصيل الكبرى
                </option>
                <option value="1">
                  1 - Blé dur - قمح صلب
                </option>
                <option value="2">
                  2 - Blétendre - قمح لين
                </option>
                <option value="3">
                  3 - Orge - شعير
                </option>
                <option value="4">
                  4 - Avoine - خرطال
                </option>
                <option value="5">
                  5 - Sorgho - الذرة البيضاء(سرغوم)
                </option>
                <option value="6">
                  6 - Maïsgrain - حبوب الذرة
                </option>
                <option value="7">
                  7 - Autrescéréales - الحبوب الأخرى
                </option>
                <option disabled style="font-weight: 700;">
                  Légumessecs - البقول الجافة
                </option>
                <option value="8">
                  8 - Lentilles - عدس
                </option>
                <option value="9">
                  9 - Pois-chiche - حمص
                </option>
                <option value="10">
                  10 - Pois sec - بازلاء مجففة
                </option>
                <option value="11">
                  11 - Haricotsec - الفاصوليا الجافة
                </option>
                <option value="12">
                  12 - Fèvesèche - فول جاف
                </option>
                <option value="13">
                  13 - Autres-أخرى
                </option>
                <option disabled style="font-weight: 700;">
                  Fourrages - الأعلاف
                </option>
                <option value="14">
                  14 - Vesce et Vesce-avoine - البيقية والخرطال
                </option>
                <option value="15">
                  15 - Luzerne - فصة
                </option>
                <option value="16">
                  16 - Maïs fourrager - الذرة العلفية
                </option>
                <option value="17">
                  17 - Autres fourrages - أعلاف أخرى
                </option>
                <option disabled style="font-weight: 700;">
                  Maraîchage - الخضروات
                </option>
                <option value="18">
                  18 - Pomme de terre - البطاطا
                </option>
                <option value="19">
                  19 - Oignonsecet vert - بصل جاف وأخضر
                </option>
                <option value="20">
                  20 - Ail - ثوم
                </option>
                <option value="21">
                  21 - Tomate - طماطم
                </option>
                <option value="22">
                  22 - Piment - فلفل حار
                </option>
                <option value="23">
                  23 - Poivron(frais et séché) - فلفل حلو
                </option>
                <option value="24">
                  24 - Carotte - جزر
                </option>
                <option value="25">
                  25 - Courgette - كوسه
                </option>
                <option value="26">
                  26 - Navet - اللفت
                </option>
                <option value="27">
                  27 - Concombre - خيار
                </option>
                <option value="28">
                  28 - ChouetChou-fleur - الملفوف وكرمب
                </option>
                <option value="29">
                  29 - Artichaut - قرنون
                </option>
                <option value="30">
                  30 - Betterave -الشمندر
                </option>
                <option value="31">
                  31 - Fèveverte- فول أخضر
                </option>
                <option value="32">
                  32 - Haricotvert - فاصوليا خضراء
                </option>
                <option value="33">
                  33 - Petitpois - البازلاء
                </option>
                <option value="34">
                  34 - Fraises - فراولة
                </option>
                <option value="35">
                  35 - Salade(laitue) - خس
                </option>
                <option value="36">
                  36 - Melon - بطيخ
                </option>
                <option value="37">
                  37 - Pastéque - دلاع
                </option>
                <option value="38">
                  38 - Autres-أخرى
                </option>
                <option disabled style="font-weight: 700;">
                  Cultures industrielles - المحاصيل الصناعية
                </option>
                <option value="39">
                  39 - Tomateindustrielle - الطماطم الصناعية
                </option>
                <option value="40">
                  40 - Betterave àsucre - شمندر سكري
                </option>
                <option value="41">
                  41 - Oléagineux(arachide, soja, maïs,...) - بذور زيتية(فولسوداني,صويا,ذرة)
                </option>
                <option value="42">
                  42 - Tabac - التبغ
                </option>
                <option value="43">
                  43 - Autres - أخرى
                </option>
                <option disabled style="font-weight: 700;">
                  Arboriculture - الأشجار
                </option>
                <option value="44">
                  44 - Oranger - أشجار البرتقال
                </option>
                <option value="45">
                  45 - Citronnier - أشجار الليمون
                </option>
                <option value="46">
                  46 - Mandarinier - أشجار المندرين
                </option>
                <option value="47">
                  47 - Clémentinier - أشجار الكليمنتين
                </option>
                <option value="48">
                  48 - Pamplemoussier - أشجار اليمون الهندي
                </option>
                <option value="49">
                  49 - Abricotier - أشجار المشمش
                </option>
                <option value="50">
                  50 - Pêchier et nectarinier - أشجار الخوخ والنكتارين
                </option>
                <option value="51">
                  51 - Cognassier - أشجار السفرجل
                </option>
                <option value="52">
                  52 - Poirier - أشجار اإلجاص
                </option>
                <option value="53">
                  53 - Pommier - أشجار التفاح
                </option>
                <option value="54">
                  54 - Prunier - أشجار البرقوق
                </option>
                <option value="55">
                  55 - Olivier de table - أشجار زيتون "زيتون المائدة"
                </option>
                <option value="56">
                  56 - Olivier à huile - أشجار الزيتون "الزيت"
                </option>
                <option value="57">
                  57 - Figuier - أشجار التين
                </option>
                <option value="58">
                  58 - Amandier - أشجار اللوز
                </option>
                <option value="59">
<<<<<<< Updated upstream
                  59 - Noyer - أشجار الجوز
=======
                  59 - Noix-أشجار الجوز
>>>>>>> Stashed changes
                </option>
                <option value="60">
                  60 - Cerisier - أشجار الكرز
                </option>
                <option value="61">
                  61 - Palmier dattier (Deglet Nour)-أشجار النخيل "دڨلة نور"
                </option>
                <option value="62">
<<<<<<< Updated upstream
                  62 - Palmier dattier (Deglet Nour) - أشجار النخيل "دڨلة نور"
                </option>
                <option value="63">
                  63 - Palmier dattier (Ghars) - أشجار النخيل "غرس"
                </option>
                <option value="64">
                  64 - Palmier dattier (autres) - أشجار النخيل "أخرى"
                </option>
                <option value="65">
                  65 - Vigne de table - كروم المائدة
=======
                  62 - Palmier dattier (Ghars)-أشجار النخيل "غرس"
                </option>
                <option value="63">
                  63 - Palmier dattier (autres)-أشجار النخيل "أخرى"
                </option>
                <option value="64">
                  64 - Vigne de table-أشجار العنب األكل
                </option>
                <option value="65">
                  65 - Vigne de cuve-أشجار عنب العصير
>>>>>>> Stashed changes
                </option>
                <option value="66">
                  66 - Grenadier-أشجار الرمان
                </option>
                <option value="67">
                  67 - Arganier-أشجار األرقان
                </option>
                <option value="68">
<<<<<<< Updated upstream
                  68 - Grenadier - أشجار الرمان
                </option>
                <option value="69">
                  69 - Arganier - أشجار األرقان
                </option>
                <option value="70">
                  70 - Autres arbres - أشجار أخرى
=======
                  68 - Autres arbres-أشجار أخرى
>>>>>>> Stashed changes
                </option>
                <option disabled style="font-weight: 700;">
                  Divers - محاصيل مختلفة
                </option>
                <option value="69">
                  69 - Herbes et épices - الأعشاب والتوابل
                </option>
                <option value="70">
                  70 - Plantes aromatiques et médicinales .. - نباتات العطرية و الطبية
                </option>
                <option value="71">
<<<<<<< Updated upstream
                  71 - Herbes - الأعشاب 
                </option>
                <option value="72">
                  72 - Plantes aromatiques et médicinales - نباتات العطرية و الطبية
=======
                  71 - Pépinières fruitières - مشاتل الفاكهة
                </option>
                <option value="72">
                  72 - Pépinières maraichères - مشاتل الخضار
>>>>>>> Stashed changes
                </option>
                <option value="73">
                  73 - Pépinières forestières - مشاتل الغابات
                </option>
                <option value="74">
                  74 - Autres Pépinières - مشاتل أخرى
                </option>
                <option value="75">
                  75 - Autres Cultures - محاصيل أخرى
                </option>
              </select>
            </div>
          </div>
          <div class="col">
            <div class="row">
              <div class="col-5">
               <!-- need to cahnge -->
                <input  id="superficie_hec" name="superficie_hec"  maxlength="4" num class="form-control"  value="">
              </div>
              <div class="col">
                <input id="superficie_are" name="superficie_are"  maxlength="3" num class="form-control"  value="">
              </div>
              <div class="col">
                <input id="en_intercalaire" name="en_intercalaire"  maxlength="2" num class="form-control"  value="">
              </div>
            </div>
          </div>
          <div class="col-1">
            <div class="d-grid gap-2">
              <button style="width: 328px;position: absolute;left: 220px;z-index: 500" class="btn btn-primary btn-sm" type="button" id="addForm2">+</button>
            </div>
          </div>
        </div>
      </div>


      <script>
$(document).ready(function(){
    // Attach a change event listener to the dropdown with the class 'code_culture_s'
    $('#code_culture').change(function() {
        var selectedOptionText = $(this).find('option:selected').text().trim();
        alert("Selection made: " + selectedOptionText);
    });
});
</script>





      <script>




$(document).ready(function(){
    var selectedCombinations = []; // Array to hold unique combinations per row

    // Event handler for changes on any element with the class 'code_culture_check' within each row
    $(document).on('change', '.code_culture_check', function() {
        var $row = $(this).closest('.row'); // Get the current row
        var rowId = $row.index(); // Get the index of the row to make unique row identifier

        var values = [];
        var isValid = true; // Flag to check if all selects and inputs are properly selected/filled

        // Collect all values and create a combined string as a unique identifier for this row
        $row.find('.code_culture_check').each(function() {
            var val = $(this).val();
            if (!val) {
                isValid = false; // if any value is empty, set isValid to false
            }
            values.push(val);
        });

        var combinedValues = values.join('-'); // Combine values to form a unique identifier for the set

        // If not all inputs/selects are filled, do not proceed with duplicate check
        if (!isValid) {
            console.log("All selections are required in each row.");
            return;
        }

        // Unique identifier for this specific row's combination
        var rowIdentifier = 'row_' + rowId + '_' + combinedValues;

        if ($.inArray(rowIdentifier, selectedCombinations) !== -1) {
            // If the combination already exists in the array
            console.log("This combination has already been selected in this row.");
            Swal.fire({
                title: 'Attention!',
                text: 'Cette combinaison de valeurs a déjà été sélectionnée dans cette ligne. Veuillez modifier votre choix.',
                icon: 'warning',
                confirmButtonText: 'OK'
            });

            // Reset all selects and inputs in this row
            $row.find('.code_culture_check').each(function() {
                if ($(this).is('select')) {
                    $(this).val($(this).find('option:first').val());
                } else {
                    $(this).val('');
                }
            });
        } else {
            // If the combination is unique, add it to the array
            selectedCombinations.push(rowIdentifier);
        }
    });
});


        //   var val2 = $('#status_juridique_' + idPart).val() || "";

      //   var cc = val1 + val2; // Combine the values to form a unique identifier

      //   // Clear any previous error indication before any new validation
      //   $('#origine_des_terres_' + idPart).removeClass('error');
      //   $('#status_juridique_' + idPart).removeClass('error');

      //   if(val1 === "" || val2 === "") {
      //       console.log("Both selections are required.");
      //       return; // Exit the function if one of the dropdowns is not selected
      //   }

      //   // Check if this combination already exists in the array
      //   if($.inArray(cc, selectedValues) !== -1){
      //       console.log("This combination of values has already been selected.");
      //       Swal.fire({
      //           icon: "error",
      //           title: "Erreur",
      //           text: "Cette combinaison de valeurs a déjà été sélectionnée. Veuillez choisir une combinaison différente."
      //       });
      //       $('#origine_des_terres_' + idPart).addClass('error');
      //       $('#status_juridique_' + idPart).addClass('error');
      //       $("#"+fullId).prop("selectedIndex", 0); // Optionally reset the current dropdown
      //   } else {
      //       // If the combination is unique, add it to the array and ensure no error class is present
      //       selectedValues.push(cc);
      //   }
//     });
// });














               document.getElementById('addForm2').addEventListener('click', function () {
                   const formContainer = document.getElementById('formContainer2');
                   const formRow = formContainer.firstElementChild.cloneNode(true);
           
                   // Generate unique IDs and names for the cloned form elements
                   formRow.querySelectorAll('[id], [name]').forEach(function (element) {
                       element.setAttribute('id', element.getAttribute('id') + '_' + formContainer.children.length);
                       element.setAttribute('name', element.getAttribute('name') + '_' + formContainer.children.length);
           
                       // Remove the "disabled" attribute if present
                       element.removeAttribute('disabled');
                   });
           
                   // Remove the add button from the cloned row and add a remove button
                   const removeButton = document.createElement('button');
                   removeButton.textContent = '-';
                   removeButton.type = 'button';
                   removeButton.classList.add('btn', 'btn-danger', 'btn-sm');
                   removeButton.addEventListener('click', function () {
                       formRow.remove();
                   });
                   formRow.querySelector('.d-grid').innerHTML = '';
                   formRow.querySelector('.d-grid').appendChild(removeButton);
           
                   formContainer.appendChild(formRow);
           
                   // Enable the cloned input elements inside the replicated HTML code
                   formRow.querySelectorAll('.line-edit').forEach(function (inputElement) {
                       inputElement.removeAttribute('disabled');
                   });
           
               });
      </script> <!-- TODO -->
    </div>
  
</div>
<br>



               
 <!-- TODO  -->
           




           









           <div class="row">
               <div class="col-7">
                  <div class="card" style="font-size: 12px;">
                     <div class="card-header" style="text-align: center;"> <div class="qst-num zxcount" style="margin: 0px 0px 0px 0px; position:absolute ;text-align: left;"></div>عدد الأشجار المتفرقة - Nombre d'arbres épars
                    
                  </div>





                     <div class="card-body">
                        <div class="row">
                            <div style="padding-left: 0px;" class="col">
                          

                                
                                <div class="input-group input-group-sm">
                                    <span class="input-group-text" id="basic-addon3">
                                    أشجار الزيتون <br> Oliviers
                                    </span>
                                       <input class="form-control bneder" maxlength="4" num  id="oliviers" name="oliviers">                   
                               </div>
                                <!-- Removed the similar input fields -->
                                <!-- Continue with the other tree types -->
                                <!-- Start of input group -->
                                    <br>
                                <div class="input-group input-group-sm">
                                    <span class="input-group-text" id="basic-addon3">
                                    أشجار التين <br> Figuiers
                                    </span>
                                       <input class="form-control bneder" maxlength="4" num id="figuiers" name="figuiers">                   
                               </div>
                                <!-- End of input group -->
                                <!-- Start of input group -->
                                    <br>
                                <div class="input-group input-group-sm">
                                    <span class="input-group-text" id="basic-addon3">
                                    أشجار ذات نوات <br> Noyaux-Pépins
                                    </span>
<<<<<<< Updated upstream
                                       <input class="form-control bneder" maxlength="4" num  id="grenadiers" name="grenadiers">                   
=======
                                       <input class="form-control bneder" id="noyaux_pepins" name="noyaux_pepins">                   
>>>>>>> Stashed changes
                               </div>
                                <!-- End of input group -->
                                <!-- Start of input group -->
                                    <br>
                                <div class="input-group input-group-sm">
                                    <span class="input-group-text" id="basic-addon3">
                                    أشجار العنب <br> Vigne
                                    </span>
                                       <input class="form-control bneder" id="vigne" name="vigne">                   
                               </div>
                                <!-- End of input group -->
                                <!-- Start of input group -->

                                    <br>
                                <div class="input-group input-group-sm">
                                    <span class="input-group-text" id="basic-addon3">
                                    أشجار اللوز <br> Amandiers
                                    </span>
                                       <input class="form-control bneder" maxlength="4" num id="amandiers" name="amandiers">                   
                               </div>
                                <!-- End of input group -->
                            </div>
                            <div style="padding-left: 0px;" class="col">
                                <!-- Continue with the other tree types -->
                                <!-- Start of input group -->
                                    
                                <div class="input-group input-group-sm">
                                    <span class="input-group-text" id="basic-addon3">
                                    أشجار الرمان <br> Grenadiers
                                    </span>
                                       <input class="form-control bneder"  id="grenadiers" name="grenadiers">                   
                               </div>
                                <!-- End of input group -->
                                <!-- Start of input group -->

                                    <br>
                                <div class="input-group input-group-sm">
                                    <span class="input-group-text" id="basic-addon3">
                                    أشجار السفرجل<br> Cognassiers
                                    </span>
<<<<<<< Updated upstream
                                       <input class="form-control bneder" maxlength="4" num id="vigne" name="vigne">                   
=======
                                       <input class="form-control bneder"  id="cognassiers" name="cognassiers">                   
>>>>>>> Stashed changes
                               </div>
                                <!-- End of input group -->
<<<<<<< Updated upstream
                            </div>
                            
                            <!-- End of input group -->
                            <!-- Start of input group -->
                            <div style="padding-left: 0px;" class="col">
                            <div class="input-group input-group-sm">
                               <span class="input-group-text" id="basic-addon3">
                                  أشجار النخيل <br> Palmiers dattiers
                               </span>
                               <input class="form-control bneder" maxlength="4" num id="palmiers_dattiers" name="palmiers_dattiers">                   
                            </div>
                            <br>
                            
                              <!-- End of input group -->
                              <!-- Start of input group -->
                             
                              <!-- End of input group -->
                              <!-- Start of input group -->
                              
                              <div class="input-group input-group-sm">
                               <span class="input-group-text" id="basic-addon3">
                                  أشجار السفرجل<br> Cognassiers
                                 </span>
                                 <input class="form-control bneder" maxlength="4" num  id="cognassiers" name="cognassiers">                   
                              </div>
                              
                              <br>
                                  <!-- Continue with the other tree types -->
                                  <!-- Start of input group -->
                                    <div class="input-group input-group-sm">
                                      <span class="input-group-text" id="basic-addon3">
                                      أشجار ذات النوات و البذرة<br> Noyaux-Pépins
                                      </span>
                                         <input class="form-control bneder" maxlength="4" num id="noyaux_pepins" name="noyaux_pepins">                   
                                 </div>   
=======
                                <!-- Start of input group -->
                                    <br>
                                <div class="input-group input-group-sm">
                                    <span class="input-group-text" id="basic-addon3">
                                    أشجار النخيل <br> Palmiers dattiers
                                    </span>
                                       <input class="form-control bneder" id="palmiers_dattiers" name="palmiers_dattiers">                   
                               </div>
                                <!-- End of input group -->
                                <!-- Start of input group -->



>>>>>>> Stashed changes


                                    <br>
                                <div class="input-group input-group-sm">
                                    <span class="input-group-text" id="basic-addon3">
                                        أشجار الخروب <br> Caroubier
                                    </span>
                                       <input class="form-control bneder" maxlength="4" num id="caroubier" name="caroubier">                   
                               </div>



<<<<<<< Updated upstream
                               <br>
                                <div class="input-group input-group-sm">
                                    <span class="input-group-text" id="basic-addon3">
                                    أشجارأخرى<br> Autres
                                    </span>
                                    <input class="form-control bneder" maxlength="4" num id="autre_arbres_isoles" name="autre_arbres_isoles">   
                               </div>
=======
>>>>>>> Stashed changes

                                    
                                    
                                    
                                    
                                        
                                <!-- End of input group -->
                            </div>
                        </div>
                    </div>
                    


















                  </div>
               </div>
               <div class="col">
                  <div class="card" style="font-size: 12px;">
                     <div class="card-body">
                        <div class="input-group input-group-sm">
                        <div class="qst-num zxcount"></div>
                           <span class="input-group-text" id="basic-addon3" style="width: 247px; display: block; margin: 0 auto; text-align: center; ">
                           هل تمارس الزراعة البيولوجية؟
                           <br>
                           Pratiquez-vous l'agriculture biologique?</span>
                           <select class="form-select bneder" id="pratiquez_vous_lagriculture_biologique" name="pratiquez_vous_lagriculture_biologique" style="max-width: 247px;height: 28px;margin-left: 21px;">
                              <option disabled="" value="-" selected="">  </option>
                              <option value="1">1 - Oui - نعم</option>
                              <option value="2">2 - Non - لا</option>
                           </select>
                        </div>
                        <br>
                        <div class="input-group input-group-sm">
                        <div class="qst-num zxcount"></div>
                        <span class="input-group-text" id="basic-addon3" style="width: 247px; display: block; margin: 0 auto; text-align: center;">إذا نعم, هل
                           لديك
                           شهادة إعتماد؟
                           <br>
                           Si oui, Avez-vous un certificat ?</span>
                          <select disabled="" class="form-select bneder" id="si_oui_avez_vous_un_certificat" name="si_oui_avez_vous_un_certificat" style="max-width: 247px;height: 28px;margin-left: 21px;">
                              <option disabled="" value="-" selected="">  </option>
                              <option value="1">1 - Oui - نعم</option>
                              <option value="2">2 - Non - لا</option>
                           </select>
                        </div>
                     </div>
                  


                  <script>
                     var select7 = document.getElementsByName('pratiquez_vous_lagriculture_biologique')[0];
                     var select27 = document.getElementsByName('si_oui_avez_vous_un_certificat')[0];
                  
                     select7.addEventListener('input', function () {
                        updateSelect7();
                     });
                  
                     function updateSelect7() {
                        var selectedValue = select7.value;
                        select27.disabled = (selectedValue != '1');
                     }
                  </script>


                  
                  <div class="input-group input-group-sm" style="margin-left: 5px;">
                  <div class="qst-num zxcount"></div>
                  <span class="input-group-text"  style="font-size: 10px !important; width: 270px;  text-align: center; " id="basic-addon3" >إذا نعم, هل
                  هل تمارس تربية المائيات المدمجة مع الفلاحة؟
                     <br>
                     Pratiquez-vous l'aquaculture intégrée à l'agriculture ?
                     </span><br>
                 
                     <select class="form-select bneder" id="pratiquez_vous_laquaculture_integree_a_lagriculture" name="pratiquez_vous_laquaculture_integree_a_lagriculture" style=" max-width: 270px; height: 28px; margin-left: 19px;">
                        <option disabled="" value="-" selected="">  </option>
                        <option value="1">1 - Oui - نعم</option>
                        <option value="2">2 - Non - لا</option>
                     </select>
                 
                  </div> <br>
                  <div class="input-group input-group-sm" style="margin-left: 5px;">
                  <div class="qst-num zxcount"></div>
                     <span class="input-group-text" id="basic-addon3">هل تمارس تربية الحلزون
                     ؟
                     <br>
                     Pratiquez-vous l'Héliciculture?</span>
                     <select style=" max-width: 90px;" class="form-select bneder" id="pratiquez_vous_l_heliciculture" name="pratiquez_vous_l_heliciculture">
                        <option disabled value="-" selected="">  </option>
                        <option value="1">1 - Oui - نعم</option>
                        <option value="2">2 - Non - لا</option>
                     </select>
                  </div>
                  <br>
                  <div class="input-group input-group-sm" style="margin-left: 5px;">
                  <div class="qst-num zxcount"></div>
                     <span class="input-group-text" id="basic-addon3">هل تمارس زراعة
                     الفطريات ؟
                     <br>
                     Pratiquez-vous la Myciculture ?</span>
                     <select class="form-select bneder" style=" max-width: 80px;" id="pratiquez_vous_la_myciculture" name="pratiquez_vous_la_myciculture">
                        <option disabled value="-" selected="">  </option>
                        <option value="1">1 - Oui - نعم</option>
                        <option value="2">2 - Non - لا</option>
                     </select>
                  </div>
                  <br>
               </div>
            </div>
         </div>
<br/>

            <div class="card" style="font-size: 12px;">
               <div class="card-body">
                  <div class="input-group input-group-sm">
                  <div class="qst-num zxcount"></div>
                     <span class="input-group-text" id="basic-addon3">
                     هل تمارس الزراعة التعاقدية؟<br>
                     Pratiquez-vous une agriculture conventionnée?
                     </span>
                     <select class="form-select bneder" id="pratiquez_vous_une_agriculture_conventionnee" name="pratiquez_vous_une_agriculture_conventionnee">
                        <option disabled value="-" selected="">  </option>
                        <option value="1">1 - Oui - نعم</option>
                        <option value="2">2 - Non - لا</option>
                     </select>
                  </div>
                  <br>
                  <div id="card1" class="card" style="font-size: 12px;">
                     <div class="card-header" style="text-align: center;"><div class="qst-num zxcount" style="margin: 0px 0px 0px 0px; position:absolute ;text-align: left;">65</div>
                     إذا كان نعم, أي شعبة ؟ - Si oui,
                        quelles
                        filières?
                     </div>
                     <div class="card-body">
                        <div class="row">
                           <div class="col">
                              <div class="form-check">
                                 <input class="form-check-input bneder" id="tomate_industrielle" name="tomate_industrielle" type="checkbox">
                                 <label class="form-check-label" for="tomate_industrielle">
                                 الطماطم الصناعية
                                 <br>
                                 Tomate Industrielle
                                 </label>
                              </div>
                           </div>
                           <div class="col">
                              <div class="form-check">
                                 <input class="form-check-input bneder" id="cereales" name="cereales" type="checkbox">
                                 <label class="form-check-label" for="cereales">
                                 الحبوب
                                 <br>
                                 Céréales
                                 </label>
                              </div>
                           </div>
                           <div class="col">
                              <div class="form-check">
                                 <input class="form-check-input bneder" id="aviculture" name="aviculture" type="checkbox">
                                 <label class="form-check-label" for="aviculture">
                                 تربية الدواجن
                                 <br>
                                 Aviculture
                                 </label>
                              </div>
                           </div>
                          </div> 
                          <div class="row">
                           <div class="col">
                              <div class="form-check">
                                 <input class="form-check-input bneder" id="maraichages" name="maraichages" type="checkbox">
                                 <label class="form-check-label" for="maraichages">
                                 الخضروات
                                 <br>
                                 Maraîchages
                                 </label>
                              </div>
                           </div>
                           <div class="col">
                              <div class="form-check">
                                 <input class="form-check-input bneder" id="pomme_de_terre" name="pomme_de_terre" type="checkbox">
                                 <label class="form-check-label" for="pomme_de_terre">
                                 البطاطس
                                 <br>
                                 Pomme de terre
                                 </label>
                              </div>
                           </div>
                           <div class="col">
                              <div class="form-check">
                                 <input class="form-check-input bneder" id="autre_division" name="autre_division" type="checkbox">
                                 <label class="form-check-label" for="autre_division">
                                 شعبة أخرى
                                 <br>
                                 Autre
                                 </label>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>


                  <script>
                     var select5 = document.getElementsByName('pratiquez_vous_une_agriculture_conventionnee')[0];
                  
                     select5.addEventListener('input', function () {
                         updateSelect6();
                     });
                  
                     function updateSelect6() {

                         var div_to_effect5 = document.getElementById('card1');
                         var child_inputs1 = div_to_effect5.getElementsByTagName('input');

                         if(select5.value != '1'){
                             for (var i = 0; i < child_inputs1.length; i++) {
                                 child_inputs1[i].disabled = true;
                             }
                         }else{
                             for (var i = 0; i < child_inputs1.length; i++) {
                                 child_inputs1[i].disabled = false;
                             }
                         }
                        

                     }
                  </script>

               </div>
            </div>





            <br>


            </div>

            <div style="border-top: 3px solid red;"></div>




            <br>
            <div id="chapt_animals">
            <h5 style="margin-bottom: 27px;">VI-Cheptel المواشي</h5>
            <div style="border-top: 1px solid red; width:155px; margin:-20px 0px 0px 15px; "></div>
            <br>
            <h6>(Campagne agricole الموسم الفلاحي 2023-2024)</h6>
            <br>
            <br>



            <div class="card" style="font-size: 12px;">
                <div class="card-body">
                   <div class="row">
                      <div class="col">
                         <div class="err" id="chapt_bovins_error"></div>
                         <div class="input-group input-group-sm">
                         <div class="qst-num zxcount"></div>
                            <span class="input-group-text" id="chapt_basic-addon3" style="width: 152px">
                            الأبقار
                            <br> Bovins
                            </span>
                               <input class="form-control bneder" id="chapt_bovins" maxlength="4" num name="chapt_bovins">
                         </div>
                      </div>
                      <div class="col">
                         <div class="input-group input-group-sm">
                         <div class="qst-num zxcount"></div>
                            <span class="input-group-text" id="chapt_basic-addon3">
                            منها الأبقار الحلوب المتطورة
                            <br> Dont vaches laitiéres BLM
                            </span>
                               <input class="form-control bneder" id="chapt_dont_vaches_laitieres_blm" num maxlength="4" name="chapt_dont_vaches_laitieres_blm" >
                         </div>
                      </div>
                   </div>
                   <br>
                   <div class="row">
                      <div class="col">
                         <div class="input-group input-group-sm">
                         <div class="qst-num zxcount"></div>
                            <span class="input-group-text" id="chapt_basic-addon3">
                            منها الأبقار الحلوب المحسنة
                            <br> Dont vaches laitiéres BLA
                            </span>
                               <input class="form-control bneder" id="chapt_dont_vaches_laitieres_bla" num maxlength="4" name="chapt_dont_vaches_laitieres_bla" >
                         </div>
                      </div>
                      <div class="col">
                         <div class="input-group input-group-sm">
                         <div class="qst-num zxcount"></div>
                            <span class="input-group-text" id="chapt_basic-addon3" style="width: 155px;">
                            منها الأبقار الحلوب المحلية
                            <br> Dont vaches laitiéres BLL
                            </span>
                               <input class="form-control bneder" id="chapt_dont_vaches_laitieres_bll" num maxlength="4" name="chapt_dont_vaches_laitieres_bll" >
                         </div>
                      </div>
                   </div>
                </div>
             </div>
             


















            <br>
            <br>
            <div class="row">
                <div class="col">
                   <div class="card" style="font-size: 12px;">
                      <div class="card-body">
                         <div class="err" id="chapt_ovins_error"></div>
                         <div class="input-group input-group-sm">
                         <div class="qst-num zxcount"></div>
                            <span class="input-group-text" id="chapt_basic-addon3" style="width: 81px;">
                            الأغنام<br>Ovins
                            </span>
                               <input class="form-control bneder"  num maxlength="4" id="chapt_ovins" name="chapt_ovins" >
                         </div>
                         <br>
                         <div class="input-group input-group-sm">
                         <div class="qst-num zxcount"></div>
                            <span class="input-group-text" id="chapt_basic-addon3">
                            منها النعاج
                            <br>Dont brebis
                            </span>
                               <input class="form-control bneder" num maxlength="4" id="chapt_dont_brebis" name="chapt_dont_brebis" >
                         </div>
                      </div>
                   </div>
                   <br>




                </div>
                <div class="col">
                   <div class="card" style="font-size: 12px;">
                      <div class="card-body">
                         <div class="err" id="chapt_caprins_error"></div>
                         <div class="input-group input-group-sm">
                         <div class="qst-num zxcount"></div>
                            <span class="input-group-text" id="chapt_basic-addon3" >
                            الماعز
                            <br> Caprins
                            </span>
                               <input class="form-control bneder" num maxlength="4" id="chapt_caprins" name="chapt_caprins" >
                         </div>
                         <br>
                         <div class="input-group input-group-sm">
                         <div class="qst-num zxcount"></div>
                            <span class="input-group-text" id="chapt_basic-addon3">
                            منها العنزات
                            <br> Dont chèvres
                            </span>
                               <input class="form-control bneder" num maxlength="4" id="chapt_dont_chevres" name="chapt_dont_chevres" >
                         </div>
                      </div>
                   </div>
                   
                 


                  
                </div>
                
                <div class="col">

<div class="card" style="font-size: 12px;">
                      <div class="card-body">
                         <div class="err" id="chapt_camelins_error"></div>
                         <div class="input-group input-group-sm">
                         <div class="qst-num zxcount"></div>
                            <span class="input-group-text" id="chapt_basic-addon3" >
                            الإبل
                            <br> Camelins
                            </span>
                               <input class="form-control bneder" num maxlength="4" id="chapt_camelins" name="chapt_camelins" >
                         </div>
                         <br>
                         <div class="input-group input-group-sm">
                         <div class="qst-num zxcount"></div>
                            <span class="input-group-text" id="chapt_basic-addon3">
                            منها النق
                            <br> Dont chamelles
                            </span>
                               <input class="form-control bneder" num maxlength="4" id="chapt_dont_chamelles" name="chapt_dont_chamelles" >
                         </div>
                      </div>
                   </div>

</div>
             </div>
             <br>


             <div class="row">
             <div class="col">
             <div class="card" style="font-size: 12px;">

<div class="card-body">
<div class="err" id="chapt_equins_error"></div>
<div class="input-group input-group-sm">
<div class="qst-num zxcount"></div>
<span class="input-group-text" id="chapt_basic-addon3" >
الخيل
<br>Equins
</span>
<input class="form-control bneder" num maxlength="4"id="chapt_equins" name="chapt_equins" >
</div>
<br>
<div class="input-group input-group-sm">
<div class="qst-num zxcount"></div>
<span class="input-group-text"  id="chapt_basic-addon3">
منها الفرس
<br>Dont juments
</span>
<input class="form-control bneder" num maxlength="4" id="chapt_dont_juments" name="chapt_dont_juments" >
</div>
</div>
</div>
</div>

 <div class="col">
        <div class="card" style="font-size: 12px;">
            <div class="card-body">
                <div class="input-group input-group-sm">
                <div class="qst-num zxcount"></div>
                    <span class="input-group-text" id="chapt_basic-addon3">الأرانب<br>Cuniculture</span>
                        <input class="form-control bneder" num maxlength="4" id="chapt_cuniculture" name="chapt_cuniculture">
                </div>
            </div>
        </div>
    </div>
    <div class="col">
        <div class="card" style="font-size: 12px;">
            <div class="card-body">
                <div class="input-group input-group-sm">
                <div class="qst-num zxcount"></div>
                    <span class="input-group-text" id="chapt_basic-addon3">البغال<br>Mulets</span>
                        <input class="form-control bneder" num maxlength="4" id="chapt_mulets" name="chapt_mulets">
                </div>
            </div>
        </div>
    
        <div class="card" style="font-size: 12px;">
            <div class="card-body">
                <div class="input-group input-group-sm">
                <div class="qst-num zxcount"></div>
                    <span class="input-group-text" id="chapt_basic-addon3">الحمير<br>Anes</span>
                        <input class="form-control bneder" num maxlength="4" id="chapt_anes" name="chapt_anes">
                </div>
            </div>
        </div>
    </div>
   
</div>










            
             <br>
             <br>
             <div class="row">
                <div class="col-3"></div>
                <div class="col">
                   (العدد - Nombre de sujets) <br> البيض - Ponte
                </div>
                <div class="col">
                   (العدد - Nombre de sujets) <br> اللحم - Chair
                </div>
             </div>
             <table class="table table-sm">
                <tbody>
                   <!-- Labels for Superficie -->
                   
                   <!-- Cultures herbacées -->
                   <tr>
  
                      <td colspan="2">
                      <div class="qst-num zxcount" style="margin: 5px 0px 2px 0px; position: absolute; "></div>
                      <p style="margin: 0px 0px 0px 25px;">Poules</p>
                      <p style="margin: 0px 0px 0px 25px;"> الدجاج</p>
                      </td>
                      <td>
                            <input class="form-control bneder" id="chapt_poules_ponte" name="chapt_poules_ponte" >
                      </td>
                      <td>
                            <input class="form-control bneder" id="chapt_poules_chair" name="chapt_poules_chair" >
                      </td>
                   </tr>
                   <tr>
                      <td colspan="2">
                      <div class="qst-num zxcount" style="margin: 5px 0px 2px 0px; position: absolute; "></div>
                      <p style="margin: 0px 0px 0px 25px;">Dindes</p>
                      <p style="margin: 0px 0px 0px 25px;"> الديك الرومي</p>
                      </td>
                      <td>
                            <input class="form-control bneder" id="chapt_dindes_ponte" name="chapt_dindes_ponte" >
                      </td>
                      <td>
                            <input class="form-control bneder" id="chapt_dindes_chair" name="chapt_dindes_chair" >
                      </td>
                   </tr>
                   <tr>
                      <td colspan="2">
                      <div class="qst-num zxcount" style="margin: 5px 0px 2px 0px; position: absolute; "></div>
                      <p style="margin: 0px 0px 0px 25px;">Autre aviculture</p>
                         <p style="margin: 0px 0px 0px 25px;"> دواجن أخرى</p>
                      </td>
                      <td>
                            <input class="form-control bneder" id="chapt_autre_aviculture_ponte" name="chapt_autre_aviculture_ponte" >
                      </td>
                      <td>
                            <input class="form-control bneder" id="chapt_autre_aviculture_chair" name="chapt_autre_aviculture_chair" >
                      </td>
                   </tr>
                </tbody>
             </table>
             
             
<br>

<br>
<div class="row">
  <div class="col">
    <div class="card" style="font-size: 12px;">
      <div class="card-header" style="text-align: center;">
        تربية النحل - Apiculture
      </div>
      <div class="card-body">
        <div class="row">
          <div class="col">
            <div class="err" id="chapt_ruches_modernes_error"></div>
            <div class="input-group input-group-sm">
            <div class="qst-num zxcount"></div>
              <span class="input-group-text" id="chapt_basic-addon3" style="width: 134px;">خلايا النحل العصرية<br>Ruches modernes</span>
              <input class="form-control bneder" num maxlength="4" id="chapt_ruches_modernes" name="chapt_ruches_modernes">
            </div>
            </div><div class="col">
            <div class="input-group input-group-sm">
              <span class="input-group-text" id="chapt_basic-addon3" style="width: 134px;">منها ممتلئة<br>dont sont pleines</span>
              <input class="form-control bneder" num maxlength="4" id="chapt_dont_sont_pleines" name="chapt_dont_sont_pleines">
            </div>
          </div>
        </div>
        <br> <!-- Line break -->
        <div class="row">
          <div class="col">
            <div class="err" id="chapt_ruches_traditionnelles_error"></div>
            <div class="input-group input-group-sm">
            <div class="qst-num zxcount"></div>
              <span class="input-group-text" id="chapt_basic-addon3">خلايا النحل التقليدية<br>Ruches traditionnelles</span>
              <input class="form-control bneder" num maxlength="4" id="chapt_ruches_traditionnelles" name="chapt_ruches_traditionnelles">
            </div>
            </div><div class="col">

            <div class="input-group input-group-sm">
              <span class="input-group-text" id="chapt_basic-addon3" style="width: 134px;">منها ممتلئة<br>dont sont pleines</span>
              <input class="form-control bneder" num maxlength="4" id="chapt_dont_sont_pleines_2" name="chapt_dont_sont_pleines_2">
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<br>
<div class="input-group input-group-sm">
                           <div class="qst-num zxcount"></div>

                           <span class="input-group-text" id="basic-addon3">
                     

                           هل تمارس الترحال الرعوي؟<br>
                           Pratiquez-vous la transhumance ?
                           </span>
                           <select class="form-control bneder" id="chapt_Pratiquez_transhumance" name="chapt_Pratiquez_transhumance">
                              <option selected="" disabled value="-">  </option>
                              <option value="1">1- Oui-نعم</option>
                              <option value="2">2- Non-لا</option>
                           </select>
                        </div>

<<<<<<< Updated upstream
                    
=======

>>>>>>> Stashed changes































           











<!-- Mounir's part start  -->
 
<br/>  
<br><div style="border-top: 3px solid red;"></div>
            
            <br>
            <h5 style="margin-bottom: 27px;">VII- Batiments d'exploitation مباني الإستغلال</h5>
            <div style="border-top: 1px solid red; width:300px; margin:-20px 0px 0px 50px;"></div>
            <br><br>



            
            <div class="input-group input-group-sm">
               <span class="input-group-text" id="basic-addon3"> 
                   إستغلال المباني الفلاحية بطريقة 
                   <br>
                   Les bâtiments d'exploitation agricole sont exploités 
               </span>
<<<<<<< Updated upstream
               <select class="form-select bneder" id="bat_exploitation_agricole_sont_exploites" name="bat_exploitation_agricole_sont_exploites">
                   <option value="-" disabled selected="selected">  </option>
=======
               <select class="select-ee" id="inputGroupSelect01" name="bat_exploitation_agricole_sont_exploites">
                   <option selected="selected"> - </option>
>>>>>>> Stashed changes
                   <option value="1">1 - En individuel - فردية</option>
                   <option value="2">2 - En collectif - جماعية</option>
                   <option value="3">3 - Mixte - مختلطة</option>
               </select>

           </div>
<br>
<<<<<<< Updated upstream



<div class="row">
                           <div class="col-4"></div>
                           <div class="col">
                              العدد - Nombre
                           </div>

                           <div class="col" style="padding-right: 25px;">
                              المساحة(م²)-Surface(m²)
                           </div>
  <div class="col-3"></div>
<table class="table table-sm">
  <tbody>
    <!-- Labels for Superficie -->
    <!-- Cultures herbacées -->
    <tr>
      <td style="width:280px">
      <div class="qst-num zxcount" style="margin: 5px 0px 2px 0px; position: absolute; "></div>
      <p style="margin: 0px 0px 0px 25px;">مباني سكنية</p>
      <p style="margin: 0px 0px 0px 25px;">Bâtiments d'habitation</p></td>
      <td>
      <div class="input-group input-group-sm">
         <input id="in82" name="batiments_dhabitation_nombre"  maxlength="2" num class="form-control bneder"  value="">
      </div>
      </td>
      
      
      <td>
     
      <div class="input-group input-group-sm">
          <input id="in83" name="batiments_dhabitation_surface" style="float:right;" class="form-control bneder"  maxlength="5" num  value="">
        </div>
      </td>
    </tr>
  </tbody>
</table>
</div>

<br>
<div class="card" style="font-size: 12px;">
  <div class="card-header" style="text-align: center;">
    مباني تربية الحيوانات - Bâtiments d'élevage
  </div>
  <div class="card-body">
    <div class="row">
      <div class="col-4"></div>
      <div class="col">
        العدد - Nombre
      </div>
      <div class="col" style="padding-right: 25px;">
        المساحة(م²)-Surface(m²)
      </div>
      <div class="col-3"></div>
    </div>
    <table class="table table-sm">
      <tbody>
        <!-- Labels for Superficie -->
        <tr>
          <td style="width:255px;">
            <div class="qst-num zxcount" style="margin: 5px 0px 2px 0px; position: absolute;"></div>
            <p style="margin: 0px 0px 0px 25px;">حضيرة</p>
            <p style="margin: 0px 0px 0px 25px;">Bergerie</p>
          </td>
          <td>
            <div class="input-group input-group-sm">
              <input id="in102" name="bergerie_nombre" maxlength="2" num="" class="form-control bneder" value="">
            </div>
          </td>
          <td>
            <div class="input-group input-group-sm">
              <input id="in103" name="bergerie_surface" class="form-control bneder" maxlength="5" num="" value="">
            </div>
          </td>
        </tr>
        <tr>
          <td style="width:255px;">
            <div class="qst-num zxcount" style="margin: 5px 0px 2px 0px; position: absolute;"></div>
            <p style="margin: 0px 0px 0px 25px;">إسطبل</p>
            <p style="margin: 0px 0px 0px 25px;">Etable</p>
          </td>
          <td>
            <div class="input-group input-group-sm">
              <input id="in104" name="etable_nombre" maxlength="2" num="" class="form-control bneder" value="">
            </div>
          </td>
          <td>
            <div class="input-group input-group-sm">
              <input id="in105" name="etable_surface" class="form-control bneder" maxlength="5" num="" value="">
            </div>
          </td>
        </tr>
        <tr>
          <td style="width:255px;">
            <div class="qst-num zxcount" style="margin: 5px 0px 2px 0px; position: absolute;"></div>
            <p style="margin: 0px 0px 0px 25px;">اسطبل خيول</p>
            <p style="margin: 0px 0px 0px 25px;">Ecurie de chevauxv</p>
          </td>
          <td>
            <div class="input-group input-group-sm">
              <input id="in106" name="ecurie_de_chevaux_nombre" maxlength="2" num="" class="form-control bneder" value="">
            </div>
          </td>
          <td>
            <div class="input-group input-group-sm">
              <input id="in107" name="ecurie_de_chevaux_surface" class="form-control bneder" maxlength="5" num="" value="">
            </div>
          </td>
        </tr>
        <tr>
          <td style="width:255px;">
            <div class="qst-num zxcount" style="margin: 5px 0px 2px 0px; position: absolute;"></div>
            <p style="margin: 0px 0px 0px 25px;">مدجنة (مبنى)</p>
            <p style="margin: 0px 0px 0px 25px;">Poulailler (bâtis en dur)</p>
          </td>
          <td>
            <div class="input-group input-group-sm">
              <input id="in108" name="poulailler_batis_en_dur_nombre" maxlength="2" num="" class="form-control bneder" value="">
            </div>
          </td>
          <td>
            <div class="input-group input-group-sm">
              <input id="in109" name="poulailler_batis_en_dur_surface" class="form-control bneder" maxlength="5" num="" value="">
            </div>
          </td>
        </tr>
        <tr>
          <td style="width:255px;">
            <div class="qst-num zxcount" style="margin: 5px 0px 2px 0px; position: absolute;"></div>
            <p style="margin: 0px 0px 0px 25px;">مدجنة (بيوت بلاستيكية)</p>
            <p style="margin: 0px 0px 0px 25px;">Poulailler (sous serre)</p>
          </td>
          <td>
            <div class="input-group input-group-sm">
              <input id="in110" name="poulailler_sous_serre_nombre" maxlength="2" num="" class="form-control bneder" value="">
            </div>
          </td>
          <td>
            <div class="input-group input-group-sm">
              <input id="in111" name="poulailler_sous_serre_surface" class="form-control bneder" maxlength="5" num="" value="">
            </div>
          </td>
        </tr><!-- ////new -->
        <tr>
          <td style="width:255px;">
            <div class="qst-num zxcount" style="margin: 5px 0px 2px 0px; position: absolute;"></div>
            <p style="margin: 0px 0px 0px 25px;">بيوت بالستيكية</p>
            <p style="margin: 0px 0px 0px 25px;">Serres Tunnels</p>
          </td>
          <td>
            <div class="input-group input-group-sm">
              <input id="in110" name="serres_tunnels_nombre" maxlength="2" num="" class="form-control bneder" value="">
            </div>
          </td>
          <td>
            <div class="input-group input-group-sm">
              <input id="in111" name="serres_tunnels_surface" class="form-control bneder" maxlength="5" num="" value="">
            </div>
          </td>
        </tr>
        <tr>
          <td style="width:255px;">
            <div class="qst-num zxcount" style="margin: 5px 0px 2px 0px; position: absolute;"></div>
            <p style="margin: 0px 0px 0px 25px;">بيوت متعددة القبب</p>
            <p style="margin: 0px 0px 0px 25px;">Serres Multichapelles</p>
          </td>
          <td>
            <div class="input-group input-group-sm">
              <input id="in110" name="serres_multichapelles_nombre" maxlength="2" num="" class="form-control bneder" value="">
            </div>
          </td>
          <td>
            <div class="input-group input-group-sm">
              <input id="in111" name="serres_multichapelles_surface" class="form-control bneder" maxlength="5" num="" value="">
            </div>
          </td>
        </tr><!-- ////end new -->
      </tbody>
    </table>
  </div>
</div>






<br>
=======
>>>>>>> Stashed changes
            <div class="row">
                     <div class="col-5"></div>
                     <div class="col-2">
                        العدد - Nombre
                     </div>

                     <div class="col"  >
                        المساحة (م²) - Surface (m²)
                     </div>
                     <div class="col-2"></div>

                  </div><table class="table table-sm">
               <tbody>
                  <!-- Labels for Superficie -->
                  
                  <!-- Cultures herbacées -->
                  <tr>
<<<<<<< Updated upstream
      <td style="width:330px">
      <div class="qst-num zxcount" style="margin: 5px 0px 2px 0px; position: absolute; "></div>
      <p style="margin: 0px 0px 0px 25px;">مباني التخزين</p>
      <p style="margin: 0px 0px 0px 25px;">Bâtiment de stockage</p></td>
      <td>
      <div class="input-group input-group-sm">
         <input id="in82" name="batiment_de_stockage_nombre"  maxlength="2" num class="form-control bneder"  value=""></td>
         </div>
      
         <td>
      <div class="input-group input-group-sm">

          <input id="in83" name="batiment_de_stockage_surface"  class="form-control bneder"  maxlength="5" num  value="">
        </div>
      </td>
    </tr>
                
                  <tr>
                     <td>
                    <div class="qst-num zxcount" style="margin: 5px 0px 2px 0px; position: absolute;"></div>
                    <p style="margin: 0px 0px 0px 25px;">  مباني وضع العتاد الفالحي</p>
                     <p style="margin: 0px 0px 0px 25px;">Bâtiment pour le remisage du matériel agricole </p>
    
                     </td>
                     <td>
      <div class="input-group input-group-sm">
                      
                         
                           <input id="in84" name="batiment_dentreposage_des_produits_agricoles_nombre" maxlength="2" num class="form-control bneder"  value="">
                  </div>
=======
                     <td >
                        <b>Bâtiments d'habitation</b><br>
                        مباني سكنية
                     </td>
                     <td>
>>>>>>> Stashed changes
                       
                           
                           <input id="in80" name="batiments_dhabitation_nombre"type="text" style="max-width:80px;" style="max-width:60px;" max="99" class="form-control" data-length="2" value="">
                    
                     </td>
                     <td>
<<<<<<< Updated upstream
                     
                     <div class="input-group input-group-sm">
                           <input id="in85" name="batiment_dentreposage_des_produits_agricoles_surface" class="form-control bneder"  maxlength="5" num   value="">
=======
                     <div class="line-edits-container" id="cn91" style="padding-left: 132px">
                           
                           <input id="in81" name="batiments_dhabitation_surface"  style="    margin:auto;" class="form-control" type="text" max="99999"  data-length="5" value="">
>>>>>>> Stashed changes
                  </div>
                     </td>
                  </tr>
                  <tr>
                     <td>
                        <b>Bâtiment de stockage
                        </b><br>
                        مباني التخزين
                     </td>
                     <td>
                       
                     <div class="input-group input-group-sm">
                          
<<<<<<< Updated upstream
                           <input id="in86" name="autres_batiment_stockage_nombre"  maxlength="2" num class="form-control bneder"  value="">
                  </div>
                     </td>
                     <td>
                  
                     <div class="input-group input-group-sm">
                           <input id="in87" name="autres_batiment_stockage_surface" class="form-control bneder"  maxlength="5" num   value="">
=======
                           <input id="in82" name="batiment_de_stockage_nombre"type="text" max="99" class="form-control" data-length="2" value="">
                      
                     </td>
                     <td>
                     <div class="line-edits-container" id="cn91" style="padding-left: 132px">
                           
                           <input id="in83" name="batiment_de_stockage_surface"  style="    margin:auto;"class="form-control" type="text" max="99999"  data-length="5" value="">
                  </div>
                     </td>
                  </tr>
                  <tr>
                     <td>
                        <b>Bâtiment d'entreposage des produits agricoles
                        </b><br>
                        مباني تخزين المنتوجت الفلاحية
                     </td>
                     <td>
                      
                         
                           <input id="in84" name="batiment_dentreposage_des_produits_agricoles_nombre"type="text" max="99" class="form-control" data-length="2" value="">
                       
                     </td>
                     <td>
                     
                     <div class="line-edits-container" id="cn91" style="padding-left: 132px">
                           <input id="in85" name="batiment_dentreposage_des_produits_agricoles_surface" style="    margin:auto;" class="form-control" type="text" max="99999"  data-length="5" value="">
                  </div>
                     </td>
                  </tr>
                  <tr>
                     <td>
                        <b>Bâtiment pour le remisage du matériel agricole
                        </b><br>
                        مباني تخزين العتاد الفلاحي
                     </td>
                     <td>
                       
                          
                           <input id="in86" name="batiment_pour_le_remisage_du_materiel_agricole_nombre" type="text" max="99" class="form-control" data-length="2" value="">
                        
                     </td>
                     <td>
                  
                     <div class="line-edits-container" id="cn91" style="padding-left: 132px">
                           <input id="in87" name="batiment_pour_le_remisage_du_materiel_agricole_surface" style="    margin:auto;"class="form-control" type="text" max="99999"  data-length="5" value="">
>>>>>>> Stashed changes
                  </div>
                     </td>
                  </tr>
                  <tr>
                     <td>
                        <b>Caves
                        </b><br>
                        أقبية
                     </td>
                     <td>
                       
                     <div class="input-group input-group-sm">
                           
<<<<<<< Updated upstream
                           <input id="in88" name="caves_nombre" maxlength="2" num class="form-control bneder"  value="">
                           </div>
                     
=======
                           <input id="in88" name="caves_nombre"type="text" max="99" class="form-control" data-length="2" value="">
                        </div>
>>>>>>> Stashed changes
                     </td>
                     <td>
                     <div class="input-group input-group-sm">
                           
<<<<<<< Updated upstream
                           <input id="in89" name="caves_surface" class="form-control bneder"  maxlength="5" num   value="">
=======
                           <input id="in89" name="caves_surface" style="    margin:auto;"class="form-control" type="text" max="99999"  data-length="5" value="">
>>>>>>> Stashed changes
                        </div>
                     </td>
                  </tr>
                  <tr>
                     <td>
                        <b>Unité de conditionnement
                        </b><br>
                        وحدة التوظيب
                     </td>
                     <td>
                     <div class="input-group input-group-sm">
                   
<<<<<<< Updated upstream
                           <input id="in90" name="unite_de_conditionnement_nombre" maxlength="2" num class="form-control bneder"  value="">
=======
                           <input id="in90" name="unite_de_conditionnement_nombre"type="text" max="99" class="form-control" data-length="2" value="">
>>>>>>> Stashed changes
                        </div>
                     </td>
                     <td>
                     <div class="input-group input-group-sm">
                           
<<<<<<< Updated upstream
                           <input id="in91" name="unite_de_conditionnement_surface" class="form-control bneder"  maxlength="5" num   value="">
=======
                           <input id="in91" name="unite_de_conditionnement_surface" style="    margin:auto;"class="form-control" type="text" max="99999"  data-length="5" value="">
>>>>>>> Stashed changes
                        </div>
                     </td>
                  </tr>
                  <tr>
                     <td>
                        <b>Unité de transformation
                        </b><br>
                        وحدة التحويل
                     </td>
                     <td>
                     <div class="input-group input-group-sm">
                      
<<<<<<< Updated upstream
                           <input id="in92" name="unite_de_transformation_nombre" maxlength="2" num class="form-control bneder"  value="">
=======
                           <input id="in92" name="unite_de_transformation_nombre"type="text" max="99" class="form-control" data-length="2" value="">
>>>>>>> Stashed changes
                        </div>
                     </td>
                     <td>
                     <div class="input-group input-group-sm">
                           
<<<<<<< Updated upstream
                           <input id="in93" name="unite_de_transformation_surface" class="form-control bneder"  maxlength="5" num   value="">
=======
                           <input id="in93" name="unite_de_transformation_surface" style="    margin:auto;"class="form-control" type="text" max="99999"  data-length="5" value="">
>>>>>>> Stashed changes
                        </div>
                     </td>
                  </tr>


<<<<<<< Updated upstream
                  <tr>
                     <td>
                    <div class="qst-num zxcount" style="margin: 5px 0px 2px 0px; position: absolute; "></div>
                     <p style="margin: 0px 0px 0px 25px;">Centre de collecte de lait</p>
                        <p style="margin: 0px 0px 0px 25px;"> مركز جمع الحليب</p>
                     </td>
                     <td>
                     <div class="input-group input-group-sm">
                      
                           <input id="in94" name="centre_de_collecte_de_lait_nombre" maxlength="2" num class="form-control bneder"  value="">
                        </div>
                     </td>
                     <td>
                     <div class="input-group input-group-sm">
                           
                           <input id="in95" name="centre_de_collecte_de_lait_surface" class="form-control bneder"  maxlength="5" num   value="">
                        </div>
                     </td>
                  </tr>
=======

>>>>>>> Stashed changes

                  <tr>
                     <td>
                        <b>Autre batiments
                        </b><br>
                        مباني أخرى
                     </td>
                     <td>
                     <div class="input-group input-group-sm">
                     
<<<<<<< Updated upstream
                           <input id="in222" name="autre_batiments_nombre" maxlength="2" num class="form-control bneder"  value="">
=======
                           <input id="in222" name="autre_batiments_nombre"type="text" max="99" class="form-control" data-length="2" value="">
>>>>>>> Stashed changes
                        </div>
                     </td>
                     <td>
                     <div class="input-group input-group-sm">
                           
<<<<<<< Updated upstream
                           <input id="in223" name="autre_batiments_surface" class="form-control bneder"  maxlength="5" num   value="">
=======
                           <input id="in223" name="autre_batiments_surface" style="    margin:auto;"class="form-control" type="text" max="99999"  data-length="5" value="">
>>>>>>> Stashed changes
                        </div>
                     </td>
                  </tr>



                  <tr>
                     <td>
                        <b>Centre de collecte de lait
                        </b><br>
                        مركز جمع الحليب
                     </td>
                     <td>
                        <div class="line-edits-container" id="cn94">
                      
                           <input id="in94" name="centre_de_collecte_de_lait_nombre"type="text" max="99" class="form-control" data-length="2" value="">
                        </div>
                     </td>
                     <td>
                        <div class="line-edits-container" id="cn95" style="padding-left: 132px">
                           
                           <input id="in95" name="centre_de_collecte_de_lait_surface" style="    margin:auto;"class="form-control" type="text" max="99999"  data-length="5" value="">
                        </div>
                     </td>
                  </tr>
                  <tr>
                     <td>
                        <b>Serres Tunnels
                        </b><br>
                        بيوت بلاستيكية
                     </td>
                     <td>
                        <div class="line-edits-container" id="cn98">
                    
                           <input id="in98" name="serres_tunnels_nombre" maxlength="2" num class="form-control"  value="">
                        </div>
                     </td>
                     <td>
                        <div class="line-edits-container" id="cn99" style="padding-left: 132px">
                           
                           <input id="in99" name="serres_tunnels_surface" class="form-control"  maxlength="5" num   value="">
                        </div>
                     </td>
                  </tr>
                  <tr>
                     <td>
                        <b>Serres Multichapelles
                        </b><br>
                        بيوت متعددة القبب
                     </td>
                     <td>
                        <div class="line-edits-container" id="cn100">
                         
                           <input id="in100" name="serres_multichapelles_nombre" maxlength="2" num class="form-control"  value="">
                        </div>
                     </td>
                     <td>
                        <div class="line-edits-container" id="cn101" style="padding-left: 132px">
                           
                           <input id="in101" class="form-control"  maxlength="5" num   value="">
                        </div>
                     </td>
                  </tr>
               </tbody>
            </table>
            <div class="card" style="font-size: 12px;">
               <div class="card-header" style="text-align: center;">مباني تربية الحيوانات - Bâtiments
                  d'élevage
               </div>
               <div class="card-body">
                  <div class="row">
                           <div class="col-4"></div>
                           <div class="col">
                              العدد - Nombre
                           </div>
                           <div class="col">
                              المساحة (م²) - Surface (m²)
                           </div>
                        </div><table class="table table-sm">
                     <tbody>
                        <!-- Labels for Superficie -->
                        
                        <tr>
                           <td style="width:255px;">
                              <b>Bergerie</b><br>
                              حضيرة
                           </td>
                           <td>
                              <div class="line-edits-container" id="cn102">
                           
                                 <input id="in102" name="bergerie_nombre"type="text" max="99" class="form-control" data-length="2" value="">
                              </div>
                           </td>
                           <td>
                              <div class="line-edits-container" id="cn103" style="margin-left: 151px">
                                
                                 <input id="in103" name="bergerie_surface" class="form-control" type="text" max="99999"  data-length="5" value="">
                              </div>
                           </td>
                        </tr>
                        <tr>
                           <td style="width:255px;">
                              <b>Etable</b><br>
                              إسطبل
                           </td>
                           <td>
                              <div class="line-edits-container" id="cn104">
                               
                                 <input id="in104" name="etable_nombre"type="text" max="99" class="form-control" data-length="2" value="">
                              </div>
                           </td>
                           <td>
                              <div class="line-edits-container" id="cn105" style="margin-left: 151px">
                                
                                 <input id="in105" name="etable_surface" class="form-control" type="text" max="99999"  data-length="5" value="">
                              </div>
                           </td>
                        </tr>
                        <tr>
                           <td style="width:255px;">
                              <b>Ecurie de chevaux
                              </b><br>
                              اسطبل خيول
                           </td>
                           <td>
                              <div class="line-edits-container" id="cn106">
                             
                                 <input id="in106" name="ecurie_de_chevaux_nombre"type="text" max="99" class="form-control" data-length="2" value="">
                              </div>
                           </td>
                           <td>
                              <div class="line-edits-container" id="cn107" style="margin-left: 151px">
                              
                                 <input id="in107" name="ecurie_de_chevaux_surface" class="form-control" type="text" max="99999"  data-length="5" value="">
                              </div>
                           </td>
                        </tr>
                        <tr>
                           <td style="width:255px;">
                              <b>مدجنة (مبنى)
                              </b><br>
                              Poulailler (bâtis en dur)
                           </td>
                           <td>
                              <div class="line-edits-container" id="cn108">
                           
                                 <input id="in108" name="poulailler_batis_en_dur_nombre" type="text" max="99" class="form-control" data-length="2" value="">
                              </div>
                           </td>
                           <td>
                              <div class="line-edits-container" id="cn109" style="margin-left: 151px">
                                
                                 <input id="in109" name="poulailler_batis_en_dur_surface" class="form-control" type="text" max="99999"  data-length="5" value="">
                              </div>
                           </td>
                        </tr>
                        <tr>
                           <td style="width:255px;">
                              <b>Poulailler (sous serre)
                              </b><br>
                              مدجنة (بيوت بلاستيكية)
                           </td>
                           <td>
                              <div class="line-edits-container" id="cn110">
                              
                                 <input id="in110" name="poulailler_sous_serre_nombre"type="text" max="99" class="form-control" data-length="2" value="">
                              </div>
                           </td>
                           <td>
                              <div class="line-edits-container" id="cn111" style="margin-left: 151px">
                                
                                 <input id="in111" name="poulailler_sous_serre_surface" class="form-control" type="text" max="99999"  data-length="5" value="">
                              </div>
                           </td>
                        </tr>
                     </tbody>
                  </table>
               </div>
            </div>
            <br>
            <div class="row">
                     <div class="col-4"></div>
                     <div class="col">
                        العدد - Nombre
                     </div>
                     <div class="col"  style="text-align: center;">
                        المساحة (م²) - Surface (m²)
                     </div>
                     <div class="col-3"></div>

                  </div><table class="table table-sm">
               <tbody>
                  <!-- Labels for Superficie -->
                  
                  <tr>
                     <td style="width:264px;">
                        <b>Chambre froide</b><br>
                        غرف التبريد
                     </td>
                     <td>
<<<<<<< Updated upstream
                     <div class="input-group input-group-sm">

                           <input id="in112" name="chambre_froide_nombre" maxlength="2" num class="form-control bneder"  value="">
                           </div>

=======
                        <div class="line-edits-container" id="cn112">
                    
                           <input id="in112" name="chambre_froide_nombre"type="text" max="99" class="form-control" data-length="2" value="">
                        </div>
>>>>>>> Stashed changes
                     </td>
                     <td style="padding-left:65px">
                     <div class="input-group input-group-sm">
                          
<<<<<<< Updated upstream
                           <input id="in113" name="chambre_froide_surface" class="form-control bneder"  maxlength="5" num   value="">
=======
                           <input id="in113" name="chambre_froide_surface" class="form-control" type="text" max="99999"  data-length="5" value="">
>>>>>>> Stashed changes
                        </div>
                     </td>
                  </tr>
               </tbody>
            </table>
            <br><br><br>


            <div style="border-top: 3px solid red;"></div>
            <br>
            <h5>VIII- Matériel agricole العتاد الفلاحي</h5>
            <br>
<<<<<<< Updated upstream
            <div style="border-top: 1px solid red; width:230px; margin:-20px 0px 0px 50px; "></div>
            <br>
 <!-- <div style="width:450px;" class="input-group input-group-sm">
 <div class="qst-num zxcount"></div>
=======

 <div style="width:450px;" class="input-group input-group-sm">
>>>>>>> Stashed changes
                  <span class="input-group-text" id="basic-addon3">
                  ما هي طريقة إستغالل العتاد الفالحي ؟
                      <br>
                      Le mode d'exploitation du matériel agricole ? 
                  </span>
               <select class="form-control bneder" id="inputGroupSelect01" name="ee_mode_exploitation_materiel">
                  <option  selected="selected" vlaue="-">  </option>
                  <option value="1">1- en individuel - فردية</option>
                  <option value="2">2- en collectif - جماعية</option>
                  <option value="3">3- Mixte - مختلطة  </option>
              </select>
                  
            
</div> -->
<br>
            <div style="margin-top:15px; height: 34px;width: 659px;background-color: white;position: absolute;z-index: 99;"></div>
            <br>
           

<<<<<<< Updated upstream



<!-- <div class="card-header" style="text-align: center;"><div class="qst-num zxcount" style="margin: 0px 0px 0px 0px; position:absolute ;text-align: left;">72</div>
                     إذا كان نعم, أي شعبة ؟ - Si oui,
                        quelles
                        filières?
                     </div> -->
<div class="card" style="font-size: 12px;">
<div class="card-header" style="text-align: center;"><div class="qst-num zxcount" style="margin: 0px 0px 0px 0px; position:absolute ;text-align: left;"></div>
نوع و عدد العتاد الفالحي ؟ 
<br>
Type et nombre du matériel agricole ? 
                     </div>
    <div class="card-body">
      <div class="row" style="text-align: center;">
        <div class="row" style="text-align: center;">
          <div style="margin-top: 150px;height: 40px;width: 696px;background-color: #ffffff;position: absolute;z-index: 99;"></div>
          <!-- <div style="margin-top: 0px; text-align: left; position: absolute" class="qst-num zxcount"></div> -->
        </div>
        
        <div class="col-2">
         <br>
         <br>

         <br>
         <br>
         <br>
          <p>رمز العتاد<br>
          Code matériel</p>
        </div>
        <div class="col-1"></div>
        <div class="col-2">
         <br>
         <br>
         <br>
         <br>
      
         <br>
         <br>
          <p>Nombre - العدد</p>
        </div>
        <div class="col-3">
 <div class="qst-num zxcount"></div>

         <div class="card" style="font-size: 12px;">
                        <div class="card-header" style="text-align: center;">  كيفية تسخير العتاد الفلاحي ؟
                           
                        </div>
                        <div class="card-header" style="text-align: center;">Mode de mobilisation du matériel agricole ?
                        </div>
                     </div>
                  </div>
                  <div class="col-3">
 <div class="qst-num zxcount"></div>

         <div class="card" style="font-size: 12px;">
                        <div class="card-header" style="text-align: center;">  طربقة إستغلال العتاد الفلاحي ؟
                           
                        </div>
                        <div class="card-header" style="text-align: center;">Mode de d'éxploitation du matériel agricole ?
                        </div>
                     </div>
                  </div> 
        <div class="col-1"></div>

      </div><br>
      <br>
      <div id="formContainer3">
        <div class="row code_materiel_s" style="margin-bottom: 10px;">
          <div class="col-3">
            <div class="input-group input-group-sm">
              <span class="input-group-text" id="basic-addon3">رقم العتاد<br>
              Code matériel</span> <select disabled="disabled" class="form-select code_materiel_s" id="code_materiel" name="code_materiel">
                <option selected disabled>
                </option>
                <option value="1">
                  1 - Tracteur à roue &lt;=45 CV - جرار ذو عجلات &lt;=5 حص
                </option>
                <option value="2">
                  2 - Tracteur à roue 45 CV- 65CV - جرار ذو عجلات65-45 حص
                </option>
                <option value="3">
                  3 - Tracteur à roue &gt;65 CV - جرار ذو عجلات&gt;5حص
                </option>
                <option value="4">
                  4 - Tracteur à chenilles &lt;=80 CV - جرار ذو سلاسل&lt;=80حص
                </option>
                <option value="5">
                  5 - Tracteur à chenilles &gt; 80 CV - جرار ذو سلاسل&gt;80حص
                </option>
                <option value="6">
                  6 - Motoculteur - جرار صغير
                </option>
                <option value="7">
                  7 - Moissonneuse-batteuse 6m - آلة حصاد و درس 6م
                </option>
                <option value="8">
                  8 - Moissonneuse-batteuse 3m - آلة حصاد و درس 3م
                </option>
                <option value="9">
                  9 - Véhicules légers - مركبة خفيفة
                </option>
                <option value="10">
                  10 - Véhicules lourds - مركبة ثقيلة
                </option>
                <option value="11">
                  11 - Charrue - محراث
                </option>
                <option value="12">
                  12 - Covercrop - مغطي المزروعات
                </option>
                <option value="13">
                  13 - Epandeur d’engrais - ناثر الأسمدة
                </option>
                <option value="14">
                  14 - Pulvérisateur, atomiseurs - آلة الرش والرذاذ
                </option>
                <option value="15">
                  15 - Poudreuses tractées - آلة السحق المقطورة
                </option>
                <option value="16">
                  16 - Semoir - آلة التبذير
                </option>
                <option value="17">
                  17 - Faucheuse - آلة الحش
                </option>
                <option value="18">
                  18 - Ramasseuse-presse - آلة الجمع والربط
                </option>
                <option value="19">
                  19 - Planteuse pomme de terre - آلة غرس البطاطا
                </option>
                <option value="20">
                  20 - Arracheuse pomme de terre - آلة قلع البطاطا
                </option>
                <option value="21">
                  21 - Remorque - مقطورة
                </option>
                <option value="22">
                  22 - Citerne - صهريج
                </option>
                <option value="23">
                  23 - Motopompe - مضخة ميكانيكية
                </option>
                <option value="24">
                  24 - Electropompe - مضخة كهربائية
                </option>
                <option value="25">
                  25 - Ensileuse - الة حصد الاعلاف
                </option>
                <option value="26">
                  26 - Emrubaneuse - الة التغليف
                </option>
                <option value="27">
                  27 - Autre matériel - عتاد آخر
                </option>
              </select>
            </div>
          </div>
          <div class="col-2">
            <div class="input-group input-group-sm">
              <span class="input-group-text" id="basic-addon3">العدد<br>
              Nombre</span> <input id="code_materiel_nombre" name="code_materiel_nombre"  maxlength="3" num class="form-control code_materiel_s"  value="">
            </div>
          </div>
          <div class="col">
          <div class="input-group input-group-sm">
              
               <select class="form-control code_materiel_s" id="ee_mode_mobilisation_materiel" name="ee_mode_mobilisation_materiel">
                  <option  selected="selected" vlaue="-">  </option>
                  <option value="1">1- en proprièté - ملكية</option>
                  <option value="2">2- en location - إجار</option>
                  <option value="3">3- en prêt - إستلاف</option>
              </select>
                  
            
</div>
          </div>
          <div class="col">
          <div class="input-group input-group-sm">
              
              <select class="form-control code_materiel_s" id="ee_mode_exploitation_materiel" name="ee_mode_exploitation_materiel">
                 <option  selected="selected" vlaue="-">  </option>
                  <option value="1">1- en individuel - فردية</option>
                  <option value="2">2- en collectif - جماعية</option>
                  <option value="3">3- Mixte - مختلطة  </option>
             </select>
                 
           
</div>
<div class="col-1">
          </div>
          </div>
          <div class="col-1">
            <div class="d-grid gap-2">
              <button style="width: 328px;position: absolute;left: 220px;z-index: 500" class="btn btn-primary btn-sm" id="addForm3" type="button">+</button>
            </div>
          </div>
        </div>
      </div>
      <script>




$(document).ready(function(){
    var selectedValues = []; // Array to hold the unique values selected

    // Event handler for changes on any select with the class 'code_culture_check'
    $(document).on('change', '.code_materiel_check', function() {
        var selectedValue = $(this).val(); // Fetch the value of the selected option in the select element

        if (selectedValues.indexOf(selectedValue) !== -1) {
            // If the value already exists in the array, display a SweetAlert message in French
            Swal.fire({
                title: 'Attention!',
                text: 'Cette option a déjà été sélectionnée. Veuillez en choisir une autre.',
                icon: 'warning',
                confirmButtonText: 'OK'
            });

            // Optionally reset to the first option or default state
            $(this).val($(this).find('option:first').val());
        } else {
            // Add the new value to the array if it's not already there
            selectedValues.push(selectedValue);
            console.log('Selected value:', selectedValue); // Log the newly added value
        }
    });
});




           document.getElementById('addForm3').addEventListener('click', function () {
               const formContainer = document.getElementById('formContainer3');
               const formRow = formContainer.firstElementChild.cloneNode(true);

               // Generate unique IDs and names for the cloned form elements
               formRow.querySelectorAll('[id], [name]').forEach(function (element) {
                   element.setAttribute('id', element.getAttribute('id') + '_' + formContainer.children.length);
                   element.setAttribute('name', element.getAttribute('name') + '_' + formContainer.children.length);

                   // Remove the "disabled" attribute if present
                   element.removeAttribute('disabled');
=======
            <div id="formContainer3">
               <div class="row code_materiel_s" style="margin-bottom: 10px;">
                  <div class="col-7">
                     <div class="input-group input-group-sm">
                        <span class="input-group-text" id="basic-addon3">
                        رقم العتاد
                        <br>
                        Code matériel
                        </span>
                        <select disabled="disabled" class="select-ee " id="code_materiel" name="code_materiel">
                        <option selected="" disabled ></option>
                           <option value="1">1 - Tracteur à roue &lt;=45 CV - جرار ذو عجلات &lt;=5 حص</option>
                           <option value="2">2 - Tracteur à roue 45 CV- 65CV - جرار ذو عجلات65-45 حص</option>
                           <option value="3">3 - Tracteur à roue &gt;65 CV - جرار ذو عجلات&gt;5حص</option>
                           <option value="4">4 - Tracteur à chenilles &lt;=80 CV - جرار ذو سلاسل&lt;=80حص</option>
                           <option value="5">5 - Tracteur à chenilles &gt; 80 CV - جرار ذو سلاسل&gt;80حص</option>
                           <option value="6">6 - Motoculteur - جرار صغير</option>
                           <option value="7">7 - Moissonneuse-batteuse 6m - آلة حصاد و درس 6م</option>
                           <option value="8">8 - Moissonneuse-batteuse 3m - آلة حصاد و درس 3م</option>
                           <option value="9">9 - Véhicules légers - مركبة خفيفة</option>
                           <option value="10">10 - Véhicules lourds - مركبة ثقيلة</option>
                           <option value="11">11 - Charrue - محراث</option>
                           <option value="12">12 - Covercrop - مغطي المزروعات</option>
                           <option value="13">13 - Epandeur d’engrais - ناثر الأسمدة</option>
                           <option value="14">14 - Pulvérisateur, atomiseurs - آلة الرش والرذاذ</option>
                           <option value="15">15 - Poudreuses tractées - آلة السحق المقطورة</option>
                           <option value="16">16 - Semoir - آلة التبذير</option>
                           <option value="17">17 - Faucheuse - آلة الحش</option>
                           <option value="18">18 - Ramasseuse-presse - آلة الجمع والربط</option>
                           <option value="19">19 - Planteuse pomme de terre - آلة غرس البطاطا</option>
                           <option value="20">20 - Arracheuse pomme de terre - آلة قلع البطاطا</option>
                           <option value="21">21 - Remorque - مقطورة</option>
                           <option value="22">22 - Citerne - صهريج</option>
                           <option value="23">23 - Motopompe - مضخة ميكانيكية</option>
                           <option value="24">24 - Electropompe - مضخة كهربائية</option>
                           <option value="25">25 - Ensileuse - الة حصد الاعلاف</option>
                           <option value="26">26 - Emrubaneuse - الة التغليف</option>
                           <option value="27">27 - Autre matériel - عتاد آخر</option>
                        </select>
                     </div>
                  </div>
                  <div class="col">
                     <div class="input-group input-group-sm">
                        <span class="input-group-text" id="basic-addon3">
                        العدد
                        <br>
                        Nombre
                        </span>
                      
                           <input id="code_materiel_nombre"  name="code_materiel_nombre "type="text" max="999" class="form-control" data-length="3" value="">
                        
                     </div>
                  </div>
                  <div class="col-1">
                     <div class="d-grid gap-2">
                        <button style="width: 328px;position: absolute;left: 220px;z-index: 500" class="btn btn-primary btn-sm" id="addForm3" type="button">+</button>
                     </div>
                  </div>
               </div>


               

               
            </div>
            <script>
               document.getElementById('addForm3').addEventListener('click', function () {
                   const formContainer = document.getElementById('formContainer3');
                   const formRow = formContainer.firstElementChild.cloneNode(true);
           
                   // Generate unique IDs and names for the cloned form elements
                   formRow.querySelectorAll('[id], [name]').forEach(function (element) {
                       element.setAttribute('id', element.getAttribute('id') + '_' + formContainer.children.length);
                       element.setAttribute('name', element.getAttribute('name') + '_' + formContainer.children.length);
           
                       // Remove the "disabled" attribute if present
                       element.removeAttribute('disabled');
                   });
           
                   // Remove the add button from the cloned row and add a remove button
                   const removeButton = document.createElement('button');
                   removeButton.textContent = '-';
                   removeButton.type = 'button';
                   removeButton.classList.add('btn', 'btn-danger', 'btn-sm');
           
                   removeButton.addEventListener('click', function () {
                       formRow.remove();
                   });
                   formRow.querySelector('.d-grid').innerHTML = '';
           
                   formRow.querySelector('.d-grid').appendChild(removeButton);
           
                   formContainer.appendChild(formRow);
           
                   // Enable the cloned input elements inside the replicated HTML code (if needed)
                   formRow.querySelectorAll('.line-edit').forEach(function (inputElement) {
                       inputElement.removeAttribute('disabled');
                   });
           
                   // Assuming the InputHandler class is correctly implemented
                   var inputHandler = new InputHandler(`cn114_${formContainer.children.length - 1}`, `in114_${formContainer.children.length - 1}`);
                   inputHandler.handleHiddenInputChange();
>>>>>>> Stashed changes
               });
           </script>
           
            <br>













  <br><br><br>
            <div style="border-top: 3px solid red;"></div>
            <br>
<<<<<<< Updated upstream
            <h5 style="margin-bottom:27px;">IX- Ressources en eau الموارد المائية</h5>
            <div style="border-top: 1px solid red; width:320px; margin:-20px 0px 0px 25px; "></div>
=======
            <h4>IX- Ressources en eau الموارد المائية</h4>
>>>>>>> Stashed changes
            <br>

            <div  class="input-group input-group-sm">
                  <span class="input-group-text" id="basic-addon3">
                  المستثمرة تقع بأي محيط ري ؟
                      <br>
                      L'exploitation est située dans quel type de périmètre d'irrigation ? 
                  </span>
               <select class="form-control bneder" id="inputGroupSelect01" name="eau_exploitation_type_irrigation">
                  <option  selected="selected" vlaue="-">  </option>
                  <option value="1">1- الكبرى الري محيطات - Grands Périmètres d'Irrigation (GPI)</option>
                  <option value="2">محيطات الري المتوسطة و الصغرى -2 - Hydraulique Moyenne et Petite (PMH)</option>

              </select>


            </div>
            <br>
            <div style="text-align: center;"><b>نوع المصدر - Type d'ouvrage</b></div>
            <br><br>
            <div class="row">
<<<<<<< Updated upstream
      
      <div class="col">
<div class="card" style="font-size: 12px;">
<div class="card-header" style="text-align: center;">
<div class="qst-num zxcount" style="margin: 0px 0px 0px 0px; position:absolute ;text-align: left;"></div>
محيطات الري المتوسطة و الصغرى<br>
Petite et Moyenne Hydraulique
</div>
<div class="card-body">
<div class="row">
<div class="col">
       <div class="form-check">
         <input class="form-check-input bneder" id="flexCheckDefault666" name="eau_barrage" type="checkbox"> <label class="form-check-label" for="flexCheckDefault666">سد<br>
         Barrage</label>
       </div><br>
       <div class="form-check">
         <input class="form-check-input bneder" id="flexCheckDefault777" name="eau_station_depuration" type="checkbox"> <label class="form-check-label" for="flexCheckDefault777">محطة معالجة مياه الصرف<br>
         Station d'épuration</label>
       </div><br>
       <div class="form-check">
         <input class="form-check-input bneder" id="flexCheckDefault888" name="eau_ensemble_de_forages" type="checkbox"> <label class="form-check-label" for="flexCheckDefault888">مجموعة آبار عميقة<br>
         Ensemble de forages</label>
       </div>
     </div>
     <div class="col">
       <div class="form-check">
         <input class="form-check-input bneder" id="flexCheckDefault1010" name="eau_petit_barrage" type="checkbox"> <label class="form-check-label" for="flexCheckDefault1010">سد صغير<br>
         Petit barrage</label>
       </div><br>
       <div class="form-check">
         <input class="form-check-input bneder" id="flexCheckDefault1011" name="eau_retenu_collinaire" type="checkbox"> <label class="form-check-label" for="flexCheckDefault1011">خزان التلال<br>
         Retenu collinaire</label>
       </div><br>
<!-- herere -->
      <div class="form-check">
         <input class="form-check-input bneder" id="flexCheckDefault122" name="eau_forage_collectif" type="checkbox"> <label class="form-check-label" for="flexCheckDefault122">بئر عميق جماعي<br>
         Forage collectif </label>
      </div>
     <br>
     </div>
 <!-- farouk touil -->
 <div class="col-4">
    <div class="form-check">
        <input class="form-check-input bneder" id="forage" name="eau_forage" type="checkbox">
        <label class="form-check-label" for="Forage">بئر عميق<br> Forage</label>
        <!-- Input element to insert an integer value -->
        <div style=" display:none; margin-left:25px;" class="input-group bneder-input input-group-sm">

              <input num maxlength="2" id="eau_total_forage" name="eau_total_forage" class="form-control bneder-input bneder" style="display:none;" >
                      <span class="input-group-text" id="basic-addon3">العدد<br>
              Nombre</span>
            </div>
    
      </div><br>
    <div class="form-check">
        <input class="form-check-input bneder" id="puits" name="eau_puits" type="checkbox">
        <label class="form-check-label" for="Puits">بئر<br> Puits</label>
        <!-- Input element to insert an integer value -->
        <div style=" display:none; margin-left:35px;" class="input-group bneder-input input-group-sm">
              
              <input num maxlength="2" name="eau_total_puits"  id="eau_total_puits" class="form-control bneder-input bneder" style="display:none;" >
        <span class="input-group-text" id="basic-addon3">العدد<br>
              Nombre</span>
            </div>
    </div><br>
    <div class="form-check">
        <input class="form-check-input bneder" id="source" name="eau_source" type="checkbox">
        <label class="form-check-label" for="Source">منبع<br> Source</label>
        <!-- Input element to insert an integer value -->
        <div style=" display:none; margin-left:25px;" class="input-group bneder-input input-group-sm">
             
        <input num maxlength="2" name="eau_total_source"  id="eau_total_source" class="form-control bneder-input bneder" style="display:none;" >
        <span class="input-group-text" id="basic-addon3">العدد<br>
              Nombre</span>
      </div>
      </div><br>
</div>

 <!-- farouk touil -->
     <div class="col">
       <div class="form-check">
         <input class="form-check-input bneder" id="flexCheckDefault1010" name="eau_pompage_doued" type="checkbox"> <label class="form-check-label" for="flexCheckDefault1010">ضخ من الوادي<br>
         Pompage d'Oued</label>
       </div><br>
       <div class="form-check">
         <input class="form-check-input bneder" id="flexCheckDefault1011" name="eau_crues_doued" type="checkbox"> <label class="form-check-label" for="flexCheckDefault1011">فيض الوادي<br>
         Crues d'oued</label>
       </div><br>
       <div class="form-check">
         <input class="form-check-input bneder" id="flexCheckDefault122" name="eau_foggara" type="checkbox"> <label class="form-check-label" for="flexCheckDefault122">فوقارة<br>
         Foggara</label>
       </div><br>
       <div class="form-check">
         <input class="form-check-input bneder" id="flexCheckDefault122" name="eau_autres_ress" type="checkbox"> <label class="form-check-label" for="flexCheckDefault122">مصادر أخرى<br>
         Autres</label>
       </div><br>
     </div>
</div>
</div>
</div>

<br>
=======
               <div class="col">
                  <div class="card" style="font-size: 12px;">
                     <div class="card-header" style="text-align: center;">محيطات الري الكبرى <br>
                        Grands Périmètres d'Irrigation (GPI)
                     </div>
                     <div class="card-body">
                        <div class="input-group input-group-sm">
                           <span class="input-group-text" id="basic-addon3" style="width: 128px;">
                           سد<br>Barrage
                           </span>
                    
                              <input id="in115" tb name="eau_barrage" type="text" max="99" class="form-control" data-length="2" value="">
                          
                        </div>
                        <br>
                        <div class="input-group input-group-sm">
                           <span class="input-group-text" id="basic-addon3" style="height: 50px;width: 128px;">
                           محطة معالجة مياه<br> الصرف الصحي
                           <br>Station d'épuration
                           </span>
                          
                             
                              <input id="in116" tb name="eau_station_depuration" type="text" max="99" class="form-control" data-length="2" value="">
                          
                        </div>
                        <br>
                        <div class="input-group input-group-sm">
                           <span class="input-group-text" id="basic-addon3">
                           مجموعة آبار عميقة
                           <br>Ensemble de forages
                           </span>
                           
                              
                              <input id="in117" tb name="eau_ensemble_de_forages" type="text" max="99" class="form-control" data-length="2" value="">
                           
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-8">
                  <div class="card" style="font-size: 12px;">
                     <div class="card-header" style="text-align: center;">محيطات الري المتوسطة و الصغرى
                        <br>
                        Petite et Moyenne Hydraulique
                     </div>
                     <div class="card-body">
                        <div class="row">
                           <div class="col">
                              <div class="input-group input-group-sm">
                                 <span class="input-group-text" id="basic-addon3" style="width: 111px;">
                                 بئر<br>Puits
                                 </span>
                               
                                    <input id="in118" tb name="eau_puits" type="text" max="99" class="form-control" data-length="2" value="">
                                 
                              </div>
                              <br>
                              <div class="input-group input-group-sm">
                                 <span class="input-group-text" id="basic-addon3" style="width: 111px;">
                                 بئر عميق
                                 <br>Forage
                                 </span>
                                 
                                    <input id="in119" tb name="eau_forage" type="text" max="99" class="form-control" data-length="2" value="">
                                 
                              </div>
                              <br>
                              <div class="input-group input-group-sm">
                                 <span class="input-group-text" id="basic-addon3">
                                 ضخ من الوادي
                                 <br>Pompage d'Oued
                                 </span>
                                 
                                    <input id="in120" tb name="eau_pompage_doued" type="text" max="99" class="form-control" data-length="2" value="">
                                 
                              </div>
                              <br>
                              <div class="input-group input-group-sm">
                                 <span class="input-group-text" id="basic-addon3" style="width: 111px;">
                                 فيض الوادي
                                 <br>Crues d'oued
                                 </span>
                            
                                    <input id="in121" tb name="eau_crues_doued" type="text" max="99" class="form-control" data-length="2" value="">
                               
                              </div>
                              <br>
                              <div class="input-group input-group-sm">
                                 <span class="input-group-text" id="basic-addon3" style="width: 111px;">
                                 سد صغير
                                 <br>Petit barrage
                                 </span>
                                
                                    <input id="in122" tb name="eau_petit_barrage" type="text" max="99" class="form-control" data-length="2" value="">
                                
                              </div>
                           </div>
                           <div class="col">
                              <div class="input-group input-group-sm">
                                 <span class="input-group-text" id="basic-addon3" style="width: 146px;">
                                 خزان التلال
                                 <br>Retenu collinaire
                                 </span>
                                 
                                    <input id="in123" tb name="eau_retenu_collinaire" type="text" max="99" class="form-control" data-length="2" value="">
                                 
                              </div>
                              <br>
                              <div class="input-group input-group-sm">
                                 <span class="input-group-text" id="basic-addon3" style="width: 146px;">
                                 الفوقارة
                                 <br>Foggara
                                 </span>
                              
                                
                                    <input id="in124" tb name="eau_foggara" type="text" max="99" class="form-control" data-length="2" value="">
                                 
                              </div>
                              <br>
                              <div class="input-group input-group-sm">
                                 <span class="input-group-text" id="basic-addon3" style="width: 146px;">
                                 منبع
                                 <br>Source
                                 </span>
                              
                                    <input id="in125" tb name="eau_source" type="text" max="99" class="form-control" data-length="2" value="">
                                
                              </div>
                              <br>
                              <div class="input-group input-group-sm">
                                 <span class="input-group-text" id="basic-addon3">
                                 محطة معالجة مياه الصرف
                                 <br>Station d'épuration
                                 </span>
                               
                                    <input id="in126" tb name="eau_station_depuration_2" type="text" max="99" class="form-control" data-length="2" value="">
                                 
                              </div>
                              <br>
                              <div class="input-group input-group-sm">
                                 <span class="input-group-text" tb id="basic-addon3" style="width: 146px;">
                                 مصادر أخرى
                                 <br>Autres
                                 </span>
                               
                                    <input id="in127" tb name="eau_autres_ress" type="text" max="99" class="form-control" data-length="2" value="">
                                 
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
>>>>>>> Stashed changes
            <br>
            <div class="row">
               <div class="col">
                  <div class="card" style="font-size: 12px;">
                     <div class="card-header" style="text-align: center;">طريقة الري - Mode d'irrigation</div>
                     <div class="card-body">
<<<<<<< Updated upstream
  <div class="row">
    <div class="row">
      <div class="col-2"></div>
      <div style=" font-size: 10px !important;" class="col-4">
      
      المساحة (هكتار) <br>
      Superficie(ha)
      </div>
      <div style=" font-size: 10px !important;" class="col-4">
  
      المساحة (هكتار) <br>
      
     
      Superficie(ha)
      </div>
    

      <div style=" font-size: 10px !important;" class="col">
      
      
      المساحة (هكتار) <br>
     
      
      Superficie(ha)
      </div>
    </div><br>
    <div class="col">
      <br>
      <div class="input-group input-group-sm">
        <span class="input-group-text" id="basic-addon3" style="width:120px;;">رشاش كلاسيكي<br>
        Aspersion classique</span> <input id="in129" name="eau_aspersion_classique"  maxlength="3" num class="form-control bneder"  value="">
      </div><br>


      <div class="input-group input-group-sm">
        <span class="input-group-text" id="basic-addon3" style="width:120px;;">تقطير<br>
        Goutte à goutte</span> <input id="in132" name="eau_goutte_a_goutte"  maxlength="3" num class="form-control bneder"  value="">
      </div>
      <br>
      <div class="input-group input-group-sm">
        <span class="input-group-text" id="basic-addon3" style="width:120px;;">فيض<br>
        Epandage de crues</span> <input id="in131" name="eau_epandage_de_crues"  maxlength="3" num class="form-control bneder"  value="">
      </div><br>
    </div>
    <div class="col">
      <br>

      <div class="input-group input-group-sm">
        <span class="input-group-text" id="basic-addon3" style="width:120px;;">سطحي<br>
        Gravitaire</span> <input id="in130" name="eau_gravitaire"  maxlength="3" num class="form-control bneder"  value="">
      </div>

      <br>
      <div class="input-group input-group-sm">
        <span class="input-group-text" id="basic-addon3" style="width:120px;;">رش محوري<br>
        Pivots</span> <input id="in133" name="eau_pivots"  maxlength="3" num class="form-control bneder"  value="">
      </div><br>
      <div class="input-group input-group-sm">
        <span class="input-group-text" id="basic-addon3" style="width:120px;;">لفاف<br>
        Enrouleur</span> <input id="in134" name="eau_enrouleur"  maxlength="3" num class="form-control bneder"  value="">
      </div><br>
      
    </div>
    <div class="col">
      <br>
      <div class="input-group input-group-sm">
        <span class="input-group-text" id="basic-addon3" style="width:120px;;">فوقارة<br>
        Foggara</span> <input id="in136" name="eau_foggara_hec"  maxlength="3" num class="form-control bneder"  value="">
      </div>
      <br>
      
      <div class="input-group input-group-sm">
        <span class="input-group-text" id="basic-addon3" style="width:120px;;">أمطار إصطناعية<br>
        Pluie artificielle</span> <input id="in135" name="eau_pluie_artificielle"  maxlength="3" num class="form-control bneder"  value="">
      </div>
      <br>
      <div class="input-group input-group-sm">
        <span class="input-group-text" id="basic-addon3" style="width:120px;;">طرق أخرى<br>
        Autre</span> <input id="in210" name="eau_autre_hec"  maxlength="3" num class="form-control bneder"  value="">
      </div>
    </div>
  </div>
</div>
=======
                        <div class="row">
                           <div class="row">
                              <div class="col-7"></div>
                              <div class="col">هكتار - Hectare</div>
                              
                           </div>
                           <br>
                           <div class="col">
                              <br>
                              <div class="input-group input-group-sm">
                                 <span class="input-group-text" id="basic-addon3" style="width:170px;">
                                 الرشاش الكلاسيكي
                                 <br> Aspersion classique
                                 </span>
                                 
                                
                                    <input id="in129" name="eau_aspersion_classique"   type="text" max="999" class="form-control" data-length="3" value="">
                                
                                
                              </div>
                              <br>
                              <div class="input-group input-group-sm">
                                 <span class="input-group-text" id="basic-addon3" style="width:170px;">
                                 السطحي<br> Gravitaire
                                 </span>
                               
                                   
                                    <input id="in130" name="eau_gravitaire" type="text" max="999" class="form-control" data-length="3" value="">
                                 
                                
                              </div>
                              <br>
                              <div class="input-group input-group-sm">
                                 <span class="input-group-text" id="basic-addon3" style="width:170px;">
                                 الفيض<br> Epandage de crues
                                 </span>
                              
                                    
                                    <input id="in131" name="eau_epandage_de_crues" type="text" max="999" class="form-control" data-length="3" value="">
                             
                                
                              </div>
                              <br>
                              <div class="input-group input-group-sm">
                                 <span class="input-group-text" id="basic-addon3" style="width:170px;">
                                 التقطير<br> Goutte à goutte
                                 </span>
                                
                                   
                                    <input id="in132" name="eau_goutte_a_goutte" type="text" max="999" class="form-control" data-length="3" value="">
                                 
                                
                              </div>
                              <br>
                           </div>
                           <div class="col">
                              <div class="input-group input-group-sm">
                                 <span class="input-group-text" id="basic-addon3" style="width:170px;">
                                 الرش المحوري
                                 <br> Pivots
                                 </span>
                                
                                  
                                    <input id="in133" name="eau_pivots" type="text" max="999" class="form-control" data-length="3" value="">
                                 
                                
                              </div>
                              <br>
                              <div class="input-group input-group-sm">
                                 <span class="input-group-text" id="basic-addon3" style="width:170px;">
                                 اللفاف
                                 <br> Enrouleur
                                 </span>
                                
                                  
                                    <input id="in134" name="eau_enrouleur" type="text" max="999" class="form-control" data-length="3" value="">
                               
                                
                              </div>
                              <br>
                              <div class="input-group input-group-sm">
                                 <span class="input-group-text" id="basic-addon3" style="width:170px;">
                                 الأمطار الصناعية
                                 <br> Pluie artificielle
                                 </span>
                                
                               
                                    <input id="in135" name="eau_pluie_artificielle"type="text" max="999" class="form-control" data-length="3" value="">
                                 
                                
                              </div>
                              <br>
                              <div class="input-group input-group-sm">
                                 <span class="input-group-text" id="basic-addon3" style="width:170px;">
                                 الفوقارة
                                 <br> Foggara
                                 </span>
                                
                                   
                                    <input id="in136" name="eau_foggara_hec" type="text" max="999" class="form-control" data-length="3" value="">
                                 
                                
                              </div>
                              <br>
                              <div class="input-group input-group-sm">
                                 <span class="input-group-text" id="basic-addon3" style="width:170px;">
                                 طرق أخرى
                                 <br> Autre
                                 </span>
                              
                                   
                                    <input id="in210" name="eau_autre_hec" type="text" max="999" class="form-control" data-length="3" value="">
                             
                                
                              </div>
                           </div>
                        </div>
                     </div>
>>>>>>> Stashed changes
                  </div>
               </div>
               <div class="col">
                  <div class="card" style="font-size: 12px;">
                     <div class="card-header" style="text-align: center;">طريقة تخزين المياه - Mode de stockage
                        de
                        l’eau 
                     </div>
                     <div class="card-body">
                        <br>
                        <div class="row">
                           <div class="col">
                              <div class="form-check">
                                 <input class="form-check-input" id="flexCheckDefault666" name="eau_bassin_d_accumulation" type="checkbox">
                                 <label class="form-check-label" for="flexCheckDefault666">
                                 أحواض التجميع
                                 <br>
                                 Bassin d’accumulation
                                 </label>
                              </div>
                              <br>
                              <div class="form-check">
                                 <input class="form-check-input" id="flexCheckDefault777" name="eau_bassin_geomembrane" type="checkbox">
                                 <label class="form-check-label" for="flexCheckDefault777">
                                 الأحواض الأرضية
                                 <br>
                                 Bassin géomembrane
                                 </label>
                              </div>
                              <br>
                              <div class="form-check">
                                 <input class="form-check-input" id="flexCheckDefault888" name="eau_reservoir" type="checkbox">
                                 <label class="form-check-label" for="flexCheckDefault888">
                                 خزان
                                 <br>
                                 Réservoir
                                 </label>
                              </div>
                              <br>
                              <div class="form-check">
                                 <input class="form-check-input" id="flexCheckDefault999" name="eau_citrene_souple" type="checkbox">
                                 <label class="form-check-label" for="flexCheckDefault999">
                                 صهريج مرن
                                 <br>
                                 Citrene souple
                                 </label>
                              </div>
                           </div>
                           <div class="col">
                              <div class="form-check">
                                 <input class="form-check-input" id="flexCheckDefault1010" name="eau_mare_deau" type="checkbox">
                                 <label class="form-check-label" for="flexCheckDefault1010">
                                 بركة الماء
                                 <br>
                                 Marre d'eau
                                 </label>
                              </div>
                              <br>
                              <div class="form-check">
                                 <input class="form-check-input" id="flexCheckDefault1011" name="eau_ced" type="checkbox">
                                 <label class="form-check-label" for="flexCheckDefault1011">
                                 سد الماء
                                 <br>
                                 Ced
                                 </label>
                              </div>
                              <br>
                              <div class="form-check">
                                 <input class="form-check-input" id="flexCheckDefault122" name="eau_digue" type="checkbox">
                                 <label class="form-check-label" for="flexCheckDefault122">
                                 حاجز الماء
                                 <br>
                                 Digue
                                 </label>
                              </div>
                              <br>
                              <div class="form-check">
                                 <input class="form-check-input" id="flexCheckDefault133" name="eau_autres_1" type="checkbox">
                                 <label class="form-check-label" for="flexCheckDefault133">
                                 طرق أخرى
                                 <br>
                                 Autres
                                 </label>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <br><br><br>
            <div style="border-top: 3px solid red;"></div>
            <br>
<<<<<<< Updated upstream
            <h5 style="margin-bottom:27px;">X- Main d'œuvre اليد العاملة</h5>
            <div style="border-top: 1px solid red; width:225px; margin:-20px 0px 0px 15px; "></div>
=======
            <h4>X- Main d'œuvre اليد العاملة</h4>
>>>>>>> Stashed changes
            <br>
            <div class="row">
               <div class="row" style="text-align: center;">
                  <div class="col-4" style="margin-left: 47px;"></div>
                  <div class="col">
                     
                     <div class="card" style="font-size: 12px;">
                        <div class="card-header" style="text-align: center;"> توظيف دائم
                           
                        </div>
                        <div class="card-header" style="text-align: center;">Elmploi permanent <br> >= à 200 jours par an
                        </div>
                     </div>
                  </div>
                  <div class="col">
                     <div class="card" style="font-size: 12px;">
                        <div class="card-header" style="text-align: center;">توظيف موسمي
                        </div>
                        <div class="card-header" style="text-align: center;">Emploi saisonnier <br> < à 200 jours par an
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <br><br><div class="row" style="text-align: center;">
                     <div class="col-4"></div>
                     <div class="col">
                        <b>
                        عدد أجراء المستثمرة
                        <br>
                        Nombre de salariés de l'exploitation
         </b>
                     </div>
                  </div><br><div class="row" style="text-align: center;">
                     <div class="col-4"></div>
                     <div class="col" style="padding-left: 30px;">
                        (ذكور - Masculin) - (إناث - Féminin)
                     </div>
                     <div class="col" style="padding-right: 34px;">
                        (ذكور - Masculin) - (إناث - Féminin)
                     </div>
                  </div><table class="table table-sm">
               <tbody>
                  <!-- Labels for Superficie -->
                  
                  <!-- Cultures herbacées -->
                  
                  
                  
                  <tr>
                  <td style="width: 320px; ">
                  <div class="qst-num zxcount" style="margin: 5px 0px 2px 0px; position: absolute; "></div>

                 <p style="padding-left:60px;"> مساعد المستثمر (مع المستثمر الرئيسي)<br>
                        Co-exploitants (y compris exploitant principal)</p>
                     </td>
                     <td style="padding-left:21px;">

                        <div class="input-group input-group-sm">
                          
<<<<<<< Updated upstream
                              <input id="in138" tb name="co_exploitants_y_compris_exploitant_principa_l"  maxlength="3" num class="form-control bneder"  value="">
                        
                          
                              <input id="in139" tb name="co_exploitants_y_compris_exploitant_principa_2"  maxlength="3" num class="form-control bneder"  value="">
=======
                              <input id="in138" tb name="co_exploitants_y_compris_exploitant_principa_l" type="text" max="99" class="form-control" data-length="2" value="">
                        
                          
                              <input id="in139" tb name="co_exploitants_y_compris_exploitant_principa_2" type="text" max="99" class="form-control" data-length="2" value="">
>>>>>>> Stashed changes
                          
                        </div>
                     </td>
                     <td style="padding-left:88px;">

                        <div class="input-group input-group-sm">
                        
<<<<<<< Updated upstream
                              <input id="in140" tb name="co_exploitants_y_compris_exploitant_principa_3"  maxlength="3" num class="form-control bneder"  value="">
                        
                          
                              <input id="in141" tb name="co_exploitants_y_compris_exploitant_principa_4"  maxlength="3" num class="form-control bneder"  value="">
=======
                              <input id="in140" tb name="co_exploitants_y_compris_exploitant_principa_3" type="text" max="99" class="form-control" data-length="2" value="">
                        
                          
                              <input id="in141" tb name="co_exploitants_y_compris_exploitant_principa_4" type="text" max="99" class="form-control" data-length="2" value="">
>>>>>>> Stashed changes
                           
                        </div>
                     </td>
                  </tr>
                  <tr>
                  <td style="width: 320px;">
                     <div class="qst-num zxcount" style="margin: 5px 0px 2px 0px; position: absolute; "></div>

                 <p style="padding-left:60px;"> العمال الفلاحيين المحليين 
                  <br>
                        Ouvriers agricoles nationaux</p>
                     </td>
                     <td style="padding-left:21px;">

                        <div class="input-group input-group-sm">
                          
<<<<<<< Updated upstream
                              <input id="in142" tb name="ouvriers_agricoles_1"  maxlength="3" num class="form-control bneder"  value="">
                         
                          
                              <input id="in143" tb name="ouvriers_agricoles_2"  maxlength="3" num class="form-control bneder"  value="">
=======
                              <input id="in142" tb name="ouvriers_agricoles_1" type="text" max="99" class="form-control" data-length="2" value="">
                         
                          
                              <input id="in143" tb name="ouvriers_agricoles_2" type="text" max="99" class="form-control" data-length="2" value="">
>>>>>>> Stashed changes
                          
                        </div>
                     </td>
                     <td style="padding-left:88px;">

                        <div class="input-group input-group-sm">
                     
<<<<<<< Updated upstream
                              <input id="in144" tb name="ouvriers_agricoles_3"  maxlength="3" num class="form-control bneder"  value="">
                          
                              <input id="in145" tb name="ouvriers_agricoles_4"  maxlength="3" num class="form-control bneder"  value="">
=======
                              <input id="in144" tb name="ouvriers_agricoles_3" type="text" max="99" class="form-control" data-length="2" value="">
                          
                              <input id="in145" tb name="ouvriers_agricoles_4" type="text" max="99" class="form-control" data-length="2" value="">
>>>>>>> Stashed changes
                          
                        </div>
                     </td>
                  </tr>
                  <tr>
                  <td style="width: 320px; ">
                  <div class="qst-num zxcount" style="margin: 5px 0px 2px 0px; position: absolute; "></div>
                <p style="padding-left:60px;">  العمال الفلاحيين الأجانب 
                  <br>
                        Ouvriers agricoles étrangès</p>
                     </td>
                     <td style="padding-left:21px;">

                        <div class="input-group input-group-sm">
                      
<<<<<<< Updated upstream
                              <input id="in146" tb name="ouvriers_agricoles_etranges_1"  maxlength="3" num class="form-control bneder"  value="">
                         
                              <input id="in147" tb name="ouvriers_agricoles_etranges_2"  maxlength="3" num class="form-control bneder"  value="">
=======
                              <input id="in146" tb name="ouvriers_agricoles_etranges_1" type="text" max="99" class="form-control" data-length="2" value="">
                         
                              <input id="in147" tb name="ouvriers_agricoles_etranges_2" type="text" max="99" class="form-control" data-length="2" value="">
>>>>>>> Stashed changes
                          
                        </div>
                     </td>
                     <td style="padding-left:88px;">

                        <div class="input-group input-group-sm">
                           
<<<<<<< Updated upstream
                              <input id="in148" tb name="ouvriers_agricoles_etranges_3"  maxlength="3" num class="form-control bneder"  value="">
                          
                              <input id="in149" tb name="ouvriers_agricoles_etranges_4"  maxlength="3" num class="form-control bneder"  value="">
=======
                              <input id="in148" tb name="ouvriers_agricoles_etranges_3" type="text" max="99" class="form-control" data-length="2" value="">
                          
                              <input id="in149" tb name="ouvriers_agricoles_etranges_4" type="text" max="99" class="form-control" data-length="2" value="">
>>>>>>> Stashed changes
                          
                        </div>
                     </td>
                  </tr>
               </tbody>
            </table>  
            <div class="row" style="text-align: center;">
                     <div class="col-4"></div>
                     <div class="col">

                        <b>
                        الأعضاء الناشطين ( أكثر من 18 سنة) <br>
                        Membres actifs ( + de 18 ans )
         </b>
                     </div>
                  </div><br><div class="row" style="text-align: center;">
                     <div class="col-4"></div>
                     <div class="col" style="padding-left: 30px;">
                        (ذكور - Masculin) - (إناث - Féminin)
                     </div>
                     <div class="col" style="padding-right: 34px;">
                        (ذكور - Masculin) - (إناث - Féminin)
                     </div>
                  </div><br><table class="table table-sm">
               <tbody>
                  <!-- Labels for Superficie -->
                  <!-- Cultures herbacées -->
                  
                  
                  
                  <tr>
                  <td style="width: 320px;">
                  <div class="qst-num zxcount" style="margin: 5px 0px 2px 0px; position: absolute; "></div>

                 <p style="padding-left:60px;"> اليد العاملة العادية(الغير مؤهلة)
                  <br>
                        Main d'œuvre ordinnaire (non qualifiée)</p>
                     </td>
                                          <td style="padding-left:21px;">

                        <div class="input-group input-group-sm">
                        
<<<<<<< Updated upstream
                              <input id="in162" tb name="main_oeuvre_ordinnaire_1"  maxlength="3" num class="form-control bneder"  value="">
                         
                          
                              <input id="in163" tb name="main_oeuvre_ordinnaire_2"  maxlength="3" num class="form-control bneder"  value="">
=======
                              <input id="in162" tb name="main_oeuvre_ordinnaire_1" type="text" max="99" class="form-control" data-length="2" value="">
                         
                          
                              <input id="in163" tb name="main_oeuvre_ordinnaire_2" type="text" max="99" class="form-control" data-length="2" value="">
>>>>>>> Stashed changes
                           
                        </div>
                     </td>
                                          <td style="padding-left:88px;">

                        <div class="input-group input-group-sm">
                     
<<<<<<< Updated upstream
                              <input id="in164" tb  name="main_oeuvre_ordinnaire_3"  maxlength="3" num class="form-control bneder"  value="">
                          
                              <input id="in165" tb  name="main_oeuvre_ordinnaire_4"  maxlength="3" num class="form-control bneder"  value="">
=======
                              <input id="in164" tb  name="main_oeuvre_ordinnaire_3" type="text" max="99" class="form-control" data-length="2" value="">
                          
                              <input id="in165" tb  name="main_oeuvre_ordinnaire_4" type="text" max="99" class="form-control" data-length="2" value="">
>>>>>>> Stashed changes
                        
                        </div>
                     </td>
                  </tr>
                  <tr>
                  <td style="width: 320px;">
                  <div class="qst-num zxcount" style="margin: 5px 0px 2px 0px; position: absolute; "></div>

                  <p style="padding-left:60px;"> اليد العاملة مؤهلة
                  <br>
                        Main d'œuvre qualifiée</p>
                     </td>
                     <td style="padding-left:21px;">

                        <div class="input-group input-group-sm">
                         
<<<<<<< Updated upstream
                              <input id="in166" tb name="main_oeuvre_qualifiee_1"  maxlength="3" num class="form-control bneder"  value="">
                        
                              <input id="in167" tb name="main_oeuvre_qualifiee_2"  maxlength="3" num class="form-control bneder"  value="">
=======
                              <input id="in166" tb name="main_oeuvre_qualifiee_1" type="text" max="99" class="form-control" data-length="2" value="">
                        
                              <input id="in167" tb name="main_oeuvre_qualifiee_2" type="text" max="99" class="form-control" data-length="2" value="">
>>>>>>> Stashed changes
                          
                        </div>
                     </td>
                     <td style="padding-left:88px;">

                        <div class="input-group input-group-sm">
                         
<<<<<<< Updated upstream
                              <input id="in168" tb name="main_oeuvre_qualifiee_3"  maxlength="3" num class="form-control bneder"  value="">
                          
                              <input id="in169" tb name="main_oeuvre_qualifiee_4"  maxlength="3" num class="form-control bneder"  value="">
=======
                              <input id="in168" tb name="main_oeuvre_qualifiee_3" type="text" max="99" class="form-control" data-length="2" value="">
                          
                              <input id="in169" tb name="main_oeuvre_qualifiee_4" type="text" max="99" class="form-control" data-length="2" value="">
>>>>>>> Stashed changes
                          
                        </div>
                     </td>
                  </tr>
              
                  
               </tbody>
            </table>
            <div class="row" style="text-align: center;">
                     <div class="col-4"></div>
                     <div class="col">
                        <p>
                           Nombre des membres du ou des ménage (s) actifs de l'exploitation
                           <br>
                           عدد الأعضاء أو الأسر في المستثمر
                        </p>
                     </div>
                  </div><br><div class="row" style="text-align: center;">
                     <div class="col-4"></div>
                     <div class="col" style="padding-left: 30px;">
                        (ذكور - Masculin) - (إناث - Féminin)
                     </div>
                     <div class="col" style="padding-right: 34px;">
                        (ذكور - Masculin) - (إناث - Féminin)
                     </div>
                  </div><br><table class="table table-sm">
               <tbody>
                  <!-- Labels for Superficie -->
                  <!-- Cultures herbacées -->
                  
                  
                  
                  <tr>
                  <td style="width: 320px;">
                  <div class="qst-num zxcount" style="margin: 5px 0px 2px 0px; position: absolute; "></div>

                  <p style="padding-left:60px;"> 
                           فلاح أو مستثمر فردي
                           <br>
                           Exploitant individuel
                        </p>
                     </td>
                     <td style="padding-left:21px;">
                        <div class="input-group input-group-sm">
                     
<<<<<<< Updated upstream
                              <input id="in150" tb name="mo_exploitant_individuel_1"  maxlength="3" num class="form-control bneder"  value="">
                        
                              <input id="in151" tb name="mo_exploitant_individuel_2"  maxlength="3" num class="form-control bneder"  value="">
=======
                              <input id="in150" tb name="mo_exploitant_individuel_1" type="text" max="99" class="form-control" data-length="2" value="">
                        
                              <input id="in151" tb name="mo_exploitant_individuel_2" type="text" max="99" class="form-control" data-length="2" value="">
>>>>>>> Stashed changes
                          
                        </div>
                     </td>
                     <td style="padding-left:88px;">
                        <div class="input-group input-group-sm">
                         
<<<<<<< Updated upstream
                              <input id="in152" tb name="mo_exploitant_individuel_3"  maxlength="3" num class="form-control bneder"  value="">
                          
                              <input id="in153" tb name="mo_exploitant_individuel_4"  maxlength="3" num class="form-control bneder"  value="">
=======
                              <input id="in152" tb name="mo_exploitant_individuel_3" type="text" max="99" class="form-control" data-length="2" value="">
                          
                              <input id="in153" tb name="mo_exploitant_individuel_4" type="text" max="99" class="form-control" data-length="2" value="">
>>>>>>> Stashed changes
                           
                        </div>
                     </td>
                  </tr>
                  <tr>
                     <td style="width: 320px;">
                  <div class="qst-num zxcount" style="margin: 5px 0px 2px 0px; position: absolute; "></div>
                    
                     <p style="padding-left:60px;"> 
                           كبار (أكثر من 15 سنة) 
                           <br>
                           Adultes (+15 ans)
                     </p>
                     </td>
                     <td style="padding-left:21px;">
                        <div class="input-group input-group-sm">
                      
<<<<<<< Updated upstream
                              <input id="in154" tb name="mo_adultes_plus_15_ans_11"  maxlength="3" num class="form-control bneder"  value="">
                        
                              <input id="in155" name="mo_adultes_plus_15_ans_22"  maxlength="3" num class="form-control bneder"  tb value="">
=======
                              <input id="in154" tb name="mo_adultes_plus_15_ans_11" type="text" max="99" class="form-control" data-length="2" value="">
                        
                              <input id="in155" name="mo_adultes_plus_15_ans_22" type="text" max="99" class="form-control" data-length="2" tb value="">
>>>>>>> Stashed changes
                          
                        </div>
                     </td>
                     <td style="padding-left:88px;">
                        <div class="input-group input-group-sm">
                     
<<<<<<< Updated upstream
                              <input id="in156" tb name="mo_adultes_plus_15_ans_3"  maxlength="3" num class="form-control bneder"  value="">
                          
                              <input id="in157" tb name="mo_adultes_plus_15_ans_4"  maxlength="3" num class="form-control bneder"  value="">
=======
                              <input id="in156" tb name="mo_adultes_plus_15_ans_3" type="text" max="99" class="form-control" data-length="2" value="">
                          
                              <input id="in157" tb name="mo_adultes_plus_15_ans_4" type="text" max="99" class="form-control" data-length="2" value="">
>>>>>>> Stashed changes
                          
                        </div>
                     </td>
                  </tr>
                  <tr>
                     <td style="width: 320px;">
                  <div class="qst-num zxcount" style="margin: 5px 0px 2px 0px; position: absolute; "></div>

                     <p style="padding-left:60px;"> 
                           أطفال (أقل من 15 سنة)
                           <br>
                           Enfants (-15 ans)
                     </p>
                     </td>
                     <td style="padding-left:21px;">
                        <div class="input-group input-group-sm">
                       
<<<<<<< Updated upstream
                              <input id="in158" tb name="mo_enfants_moins_15_ans_1"  maxlength="3" num class="form-control bneder"  value="">
                        
                              <input id="in159" tb name="mo_enfants_moins_15_ans_2"  maxlength="3" num class="form-control bneder"  value="">
=======
                              <input id="in158" tb name="mo_enfants_moins_15_ans_1" type="text" max="99" class="form-control" data-length="2" value="">
                        
                              <input id="in159" tb name="mo_enfants_moins_15_ans_2" type="text" max="99" class="form-control" data-length="2" value="">
>>>>>>> Stashed changes
                          
                        </div>
                     </td>
                     <td style="padding-left:88px;">
                        <div class="input-group input-group-sm">
                           
<<<<<<< Updated upstream
                              <input id="in160" tb name="mo_enfants_moins_15_ans_3"  maxlength="3" num class="form-control bneder"  value="">
                          
                              <input id="in161" tb name="mo_enfants_moins_15_ans_4"  maxlength="3" num class="form-control bneder"  value="">
=======
                              <input id="in160" tb name="mo_enfants_moins_15_ans_3" type="text" max="99" class="form-control" data-length="2" value="">
                          
                              <input id="in161" tb name="mo_enfants_moins_15_ans_4" type="text" max="99" class="form-control" data-length="2" value="">
>>>>>>> Stashed changes
                           
                        </div>
                     </td>
                  </tr>
                  
               </tbody>
            </table>
          
            <br>
            <br>
            <br><br>
            <div style="border-top: 3px solid red;"></div>
            <br>
            <h5>XI- Ménage agricole <br> الأسرة الفلاحية</h5>
            <div style="text-align: center;">
               <b>
               تكوين أسرة رئيس المستثمرة <br> Composition du ménage du Chef d'exploitation
               </b>
            </div>
            <br>

            <br>
            <div class="row">
                     <div class="col-3">  </div>
                     <div class="col" style="text-align: center;">
                     <div class="qst-num zxcount"></div>
                     <div class="card" style="font-size: 12px;">
                        <div class="card-header" style="text-align: center;"> كبار (أكثر من 15 سنة)
                           
                        </div>
                        <div class="card-header" style="text-align: center;">Adultes (+15 ans) 
                        </div>
                     </div>
                     <br>
                     <p style="margin-left: 25px;">
                     (ذكور - Masculin) - (إناث - Féminin)
         </p>
                     </div>
                     <div class="col" style="text-align: center;">
                     <div class="qst-num zxcount"></div>
                     <div class="card" style="font-size: 12px;">
                        <div class="card-header" style="text-align: center;">  أطفال (أقل من 15 سنة أو أقل) 
                           
                        </div>
                        <div class="card-header" style="text-align: center;"> Enfants (15 ans et)  
                        </div>
                     </div>
                     <br>
                     <p style="margin-left: 25px;">

                        (ذكور - Masculin) - (إناث - Féminin)

                     </p>
                     </div>
                     <div class="col-1">  </div>
                  </div>
                  <table  class="table table-sm">
               <tbody>
                  <!-- Labels for Superficie -->
                  
                  <!-- Cultures herbacées -->
                  <tr >
                     <td style="width: 269px;" >
                     <div class="input-group input-group-sm">
                     <div class="qst-num ">126</div>
                     <div  hidden class="qst-num zxcount"></div>
               <span class="input-group-text" id="basic-addon3">
               عدد الأشخاص
               <br> Nombre de personnes
               </span>
             
               
<<<<<<< Updated upstream
                  <input id="ma_nombre_de_personnes" tb name="ma_nombre_de_personnes"  maxlength="2" num class="form-control bneder"  value="">
=======
                  <input id="in178" tb name="ma_nombre_de_personnes" type="text" max="99" class="form-control" data-length="2" value="">
>>>>>>> Stashed changes
               
                  
            </div>
                     </td>
                     <td>
<<<<<<< Updated upstream
                     <div class="input-group input-group-sm">

                           <input id="ma_adultes_plus_15_ans_m" name="ma_adultes_plus_15_ans_m"  maxlength="2" num class="form-control bneder"  value="">
                           <input id="ma_adultes_plus_15_ans_f" style="max-width:80px;" name="ma_adultes_plus_15_ans_f"  maxlength="2" num class="form-control bneder"  value="">
                           </div>
=======
                       
                           <input id="in179" name="ma_adultes_plus_15_ans_1" type="text" max="99" class="form-control" data-length="2" value="">
                      
                     </td>
                     <td>
                       
                           <input id="in180" style="max-width:80px;" name="ma_adultes_plus_15_ans_2" type="text" max="99" class="form-control" data-length="2" value="">
                        
                     </td>
                  </tr>
                  <tr>
                     <td>
                        <b>Enfants (-15 ans)
                        </b><br>
                        أطفال (أقل من 15 سنة)
                     </td>
                     <td>
                       
                           <input id="in181" name="ma_enfants_moins_15_ans_11" type="text" max="99" class="form-control" data-length="2" value="">
>>>>>>> Stashed changes
                    
                        </td>
                  
                
             
                   
                     <td>
<<<<<<< Updated upstream
                     <div style="margin-left:20px;" class="input-group input-group-sm">

                           <input id="ma_enfants_moins_15_ans_m" name="ma_enfants_moins_15_ans_m"  maxlength="2" num class="form-control bneder"  value="">
                   
                           <input id="ma_enfants_moins_15_ans_f" name="ma_enfants_moins_15_ans_f"  maxlength="2" num class="form-control bneder"  value="">
                           </div>
=======
                      
                           <input id="in182" name="ma_enfants_moins_15_ans_22" type="text" max="99" class="form-control" data-length="2" value="">
>>>>>>> Stashed changes
                     
                     </td>
                  </tr>
               </tbody>
            </table>
            <br><br><br>
            <div style="border-top: 3px solid red;"></div>
            <br>
            <h5>XII- Utilisation d'intrants - إستخدام المدخلات 
             </h5>  <br>
             <div class="qst-num zxcount"></div>
             <h6>(Campagne agricole الموسم الفلاحي 2023-2024)</h6>
            
            <br><br>
            <div class="row">

               <div class="col 36_si_sont_terres">
                  <div class="card">
                  <div class="card-body">

                  <div class="form-check">
                     <input name="ui_semences_selectionnees" class="form-check-input" type="checkbox" id="flexCheckDefault1441">
                     <label class="form-check-label" for="flexCheckDefault1441">
                         بذور منتقاة
                         <br>
                         Semences sélectionnées
                     </label>
                 </div>
                 <br>
                 <div class="form-check">
                     <input name="ui_semences_certifiees" class="form-check-input" type="checkbox" id="flexCheckDefault1552">
                     <label class="form-check-label" for="flexCheckDefault1552">
                         بذور معتمدة
                         <br>
                         Semences certifiées
                 </label></div>
                 <br>
                 <div class="form-check">
                     <input name="ui_semences_de_la_ferme" class="form-check-input" type="checkbox" id="flexCheckDefault1663">
                     <label class="form-check-label" for="flexCheckDefault1663">
                         بذور المزرعة
                         <br>
                         Semences de la ferme
                     </label>
                 </div>
                 <br>

                 <div class="form-check">
                  <input class="form-check-input" id="flexCheckDefault233" name="ui_bio" type="checkbox">
                  <label class="form-check-label" for="flexCheckDefault233">
                      بيولوجية
                      <br>
                      Bio
                  </label>
              </div>
              <br>

               </div>
              
              
              
              
               </div></div>
               <div class="col 36_si_sont_terres">
                  <div class="card"> 
                  
                  <div class="card-body">

                  <div class="form-check">
                     <input class="form-check-input" id="flexCheckDefault1774" name="ui_engrais_azotes" type="checkbox">
                     <label class="form-check-label" for="flexCheckDefault1774">
                         أسمدة آزوتية
                         <br>
                         Engrais azotés
                     </label>
                 </div>
                 <br>
                 <div class="form-check">
                     <input class="form-check-input" id="flexCheckDefault188" name="ui_engrais_phosphates" type="checkbox">
                     <label class="form-check-label" for="flexCheckDefault188">
                         أسمدة فوسفاتية
                         <br>
                         Engrais phosphatés
                     </label>
                 </div>
                 <br>
                 <div class="form-check">
                     <input class="form-check-input" id="flexCheckDefault199" name="ui_autres_engrais_mineraux" type="checkbox">
                     <label class="form-check-label" for="flexCheckDefault199">
                         أسمدة معدنية أخرى
                         <br>
                         Autres engrais minéraux
                     </label>
                 </div>
                 <br>


            
               </div>
            
            
               </div></div>
               <div class="col 36_si_sont_terres">

                  <div class="card"> 
                  
                  <div class="card-body">

                  <div class="form-check">
                     <input class="form-check-input" id="flexCheckDefault2110" name="ui_engrais_organique" type="checkbox">
                     <label class="form-check-label" for="flexCheckDefault2110">
                     أسمدة عضوية
                         <br>
                         Engrais organique
                     </label>
                 </div>
                 <br>
                 <div class="form-check">
                     <input class="form-check-input" id="flexCheckDefault22210" name="ui_fumier" type="checkbox">
                     <label class="form-check-label" for="flexCheckDefault22210">
                         سماد
                         <br>
                         Fumier
                     </label>
                 </div>
                 <br>
                 <div class="form-check">
                     <input class="form-check-input" id="flexCheckDefault22211" name="ui_produits_phytosanitaires" type="checkbox">
                     <label class="form-check-label" for="flexCheckDefault22211">
                         المُبيدات
                         <br>
                         Produits phytosanitaires
                     </label>
                 </div>
                 <br>
                 


               </div>
              
              
              
              
              
              
               </div></div>
               <div class="col-3">

<div class="card"> 

<div class="card-body">

<div class="form-check">
   <input class="form-check-input" id="flexCheckDefault2112" name="ui_vaccins" type="checkbox">
   <label class="form-check-label" for="flexCheckDefault2112">
   اللقاحات
       <br>
       Vaccins
   </label>
</div>
<br>
<div class="form-check">
   <input class="form-check-input" id="flexCheckDefault22212" name="ui_medicaments_veterinaires" type="checkbox">
   <label class="form-check-label" for="flexCheckDefault22212">
   الأدوية البيطرية


       <br>
       Médicaments vétérinaires
   </label>
</div>

<br>



</div>






</div></div>


            </div>




            
   
              
      
       
               <br><br>
               <div style="border-top: 3px solid red;"></div>
               <br>
               <h5>XIII - Financement des activités agricoles et assurances تمويل النشاط الفلاحي و التأمينات</h5>
               <br>
               <div class="card" style="font-size: 12px;">
                  <div class="card-body">
                     <div class="row">
                        <div class="col">
                           <div class="card">
                              <div class="card-header" style="text-align: center;">
                                 التمويل - Financement
                              </div>
                              <div class="card-body">
                                 <div class="form-check">
<<<<<<< Updated upstream
                                    <input type="checkbox" class="form-check-input bneder" id="fa_credit_bancaire" name="fa_credit_bancaire" >
                                    <label class="form-check-label" for="fa_credit_bancaire">
                                       قرض بنكي - Crédit bancaire
                                    </label>
                                 </div>
 
                                 <div class="form-check">
                                    <input class="form-check-input bneder" id="fa_propres_ressources" name="fa_propres_ressources" type="checkbox">
                                    <label class="form-check-label" for="fa_propres_ressources">
                                    موارد
ذاتية   - Propres ressources
                                    </label>
                                 </div>
                                 <div class="form-check">
                                    <input class="form-check-input bneder" id="fa_soutien_public" name="fa_soutien_public" type="checkbox">
                                    <label class="form-check-label" for="fa_soutien_public">
=======
                                    <input class="form-check-input" id="78278" name="fa_credit_bancaire" type="checkbox">
                                    <label class="form-check-label" for="78278">
                                    موارد ذاتية - Crédit bancaire
                                    </label>
                                 </div>
                                 <div class="form-check">
                                    <input class="form-check-input" id="5461745612" name="fa_propres_ressources" type="checkbox">
                                    <label class="form-check-label" for="5461745612">
                                    قرض بنكي - Propres ressources
                                    </label>
                                 </div>
                                 <div class="form-check">
                                    <input class="form-check-input" id="57148562" name="fa_soutien_public" type="checkbox">
                                    <label class="form-check-label" for="57148562">
>>>>>>> Stashed changes
                                    دَعْم عُمومي - Soutien public
                                    </label>
                                 </div>
                                 <div class="form-check">
<<<<<<< Updated upstream
                                    <input class="form-check-input bneder" id="fa_emprunt_a_un_tiers" name="fa_emprunt_a_un_tiers" type="checkbox">
                                    <label class="form-check-label" for="fa_emprunt_a_un_tiers">
=======
                                    <input class="form-check-input" id="875178275" name="fa_emprunt_a_un_tiers" type="checkbox">
                                    <label class="form-check-label" for="875178275">
>>>>>>> Stashed changes
                                    استلاف من الغير - Emprunt à un tiers
                                    </label>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="col">
                           <div id="card2" class="card">
                              <div class="card-header" style="text-align: center;">
                                 إذا كان دَعْم عُمومي، ما نوعه ؟
                                 <br> Si soutien public, quel type?
                              </div>
                              <div class="card-body">
                                 <div class="form-check">
<<<<<<< Updated upstream
                                    <input class="form-check-input bneder" id="fa_financiere" name="fa_financiere" type="checkbox">
                                    <label class="form-check-label" for="fa_financiere">
=======
                                    <input class="form-check-input" id="5642614" name="fa_financiere" type="checkbox">
                                    <label class="form-check-label" for="5642614">
>>>>>>> Stashed changes
                                    مالي - Financière
                                    </label>
                                 </div>
                                 <div class="form-check">
<<<<<<< Updated upstream
                                    <input class="form-check-input bneder" id="fa_materiel" name="fa_materiel" type="checkbox">
                                    <label class="form-check-label" for="fa_materiel">
=======
                                    <input class="form-check-input" id="2498429824" name="fa_materiel" type="checkbox">
                                    <label class="form-check-label" for="2498429824">
>>>>>>> Stashed changes
                                    عتاد - Matériel
                                    </label>
                                 </div>
                                 <div class="form-check">
<<<<<<< Updated upstream
                                    <input class="form-check-input bneder" id="fa_cultures" name="fa_cultures" type="checkbox">
                                    <label class="form-check-label" for="fa_cultures">
=======
                                    <input class="form-check-input" id="121545" name="fa_cultures" type="checkbox">
                                    <label class="form-check-label" for="121545">
>>>>>>> Stashed changes
                                    محاصيل - Cultures
                                    </label>
                                 </div>
                                 <div class="form-check">
                                    <input class="form-check-input bneder" id="fa_intrants" name="fa_intrants" type="checkbox">
                                    <label class="form-check-label" for="fa_intrants">
                                    مدخلات - Intrants
                                    </label>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>

                     <script>
                        // var check1 = document.getElementsByName('soutien_public')[0];
                     
                        // check1.addEventListener('input', function () {
                        //     updateSelect8();
                       // });
                     
                        function updateSelect8() {

                            var div_to_effect6 = document.getElementById('card2');
                            var child_inputs2 = div_to_effect6.getElementsByTagName('input');

                            if(!check1.checked){
                                for (var i = 0; i < child_inputs2.length; i++) {
                                    child_inputs2[i].disabled = true;
                                }
                            }else{
                                for (var i = 0; i < child_inputs2.length; i++) {
                                    child_inputs2[i].disabled = false;
                                }
                            }
                           
                        }
                     </script>

                     <br>
                     <div id="card3" class="card">
                        
                        <div class="card-header" style="text-align: center;">
                           إذا كان قرض، ما نوعه ؟
                           <br>
                           Si crédit bancaire, quel type?
                        </div>
                        <div class="card-body">

                           <div class="row">
                              <div class="col"><div class="form-check">
<<<<<<< Updated upstream
                                 <input class="form-check-input bneder" id="fa_ettahadi" name="fa_ettahadi" type="checkbox">
=======
                                 <input class="form-check-input" id="5fd4g5fd" name="fa_ettahadi" type="checkbox">
>>>>>>> Stashed changes
     
                                   <label class="form-check-label" for="fa_ettahadi">
                                   التحدي - Ettahadi
                                   </label>
                                </div></div>
                              <div class="col"> <div class="form-check">
<<<<<<< Updated upstream
                                 <input class="form-check-input bneder" id="fa_classique" name="fa_classique" type="checkbox">
=======
                                 <input class="form-check-input" id="5d4t1y5hg" name="fa_classique" type="checkbox">
>>>>>>> Stashed changes
     
                                   <label class="form-check-label" for="fa_classique">
                                   الكلاسيكي - Classique
                                   </label>
                                </div></div>
                              <div class="col"><div class="form-check">
<<<<<<< Updated upstream
                                 <input class="form-check-input bneder" id="fa_leasing" name="fa_leasing" type="checkbox">
=======
                                 <input class="form-check-input" id="tdf5h124s5h" name="fa_leasing" type="checkbox">
>>>>>>> Stashed changes
     
                                   <label class="form-check-label" for="fa_leasing">
                                   تأجير - Leasing
                                   </label>
                                </div></div>
                              <div class="col"><div class="form-check">
<<<<<<< Updated upstream
                                 <input class="form-check-input bneder" id="fa_rfig" name="fa_rfig" type="checkbox">
=======
                                 <input class="form-check-input" id="5gfd4yyt" name="fa_rfig" type="checkbox">
>>>>>>> Stashed changes
     
                                   <label class="form-check-label" for="fa_rfig">
                                   الرفيق - R'fig </label>
                                </div></div>
                           </div>


                           <script>
                              // var check2 = document.getElementsByName('propres_ressources')[0];
                           
                              // check2.addEventListener('input', function () {
                              //    updateSelect9();
                              // });
                           
                              // function updateSelect9() {
                           
                              //    var div_to_effect7 = document.getElementById('card3');
                              //    var child_inputs3 = div_to_effect7.getElementsByTagName('input');
                           
                              //    if(!check2.checked){
                              //       for (var i = 0; i < child_inputs3.length; i++) {
                              //             child_inputs3[i].disabled = true;
                              //       }
                              //    }else{
                              //       for (var i = 0; i < child_inputs3.length; i++) {
                              //             child_inputs3[i].disabled = false;
                              //       }
                              //    }
                                 
                              // }
                           </script>
                          
                           
                           
                        </div>
                     </div>
                  </div>
               </div>
               <br>
               <div class="card" style="font-size: 12px;">
                  <div class="card-body">
                     <div class="row">
                        <div class="col">
                           <div class="input-group input-group-sm">
                              <span class="input-group-text" id="basic-addon3">هل متعاقد
                              مع
                              التأمين الفلاحي؟
                              <br>
                              Avez vous contracté une assurance agricoles ?
                              </span>
<<<<<<< Updated upstream
                              <select class="form-select bneder" id="fa_avez_vous_contracte_une_assurance_agricole" name="fa_avez_vous_contracte_une_assurance_agricole">
=======
                              <select class="select-ee" id="inputGroupSelect01" name="fa_avez_vous_contracte_une_assurance_agricole">
>>>>>>> Stashed changes
                                 <option selected="selected"> - </option>

                                 <option value="1">1 - Oui - نعم</option>

                                <option value="2">2 - Non - لا</option>
                              </select>
                           </div>
                        </div>
                        <div class="col-5">
                           <div class="input-group input-group-sm">
                              <span class="input-group-text" id="basic-addon3">
                              إذا كان نعم، مع أي شركة؟
                              <br>
                              Si oui, quelle compagnie ?
                              </span>
<<<<<<< Updated upstream
                              <select disabled="disabled" class="form-select bneder" id="fa_si_oui_quelle_compagnie" name="fa_si_oui_quelle_compagnie">
=======
                              <select disabled="disabled" class="select-ee" id="inputGroupSelect01" name="fa_si_oui_quelle_compagnie">
>>>>>>> Stashed changes
                                 <option selected="selected"> - </option>

                                 <option value="1"> ص,م,ز,ق - CRMA</option>

                                 <option value="2"> أخرى - Cultures</option>
                              </select>
                           </div>
                        </div>
                     </div>


                     <script>
                        // var select8 = document.getElementsByName('avez_vous_contracte_une_assurance_agricole')[0];
                        // var select28 = document.getElementsByName('si_oui_quelle_compagnie')[0];
                     
                        // select8.addEventListener('input', function () {
                        //     updateSelect28();
                        // });
                     
                        // function updateSelect28() {
                        //     var selectedValue = select8.value;
                        //     select28.disabled = (selectedValue != '1');
                        // }
                     </script>

                     <br>
                     <div class="card">
                        <div class="card-header" style="text-align: center;">
                           نوع التأمين - Type d'assurance
                        </div>
                        <div class="card-body">
                           <div class="row">
                              <div class="col">
                                 <div class="form-check">
<<<<<<< Updated upstream
                                    <input class="form-check-input bneder" id="fa_terre" name="fa_terre" type="checkbox">
=======
                                    <input class="form-check-input" id="er6g54er6g" name="fa_terre" type="checkbox">
>>>>>>> Stashed changes

                                    <label class="form-check-label" for="fa_terre">
                                    الأرض - Terre
                                    </label>
                                 </div>
                                 <div class="form-check">
<<<<<<< Updated upstream
                                    <input class="form-check-input bneder" id="fa_personnel" name="fa_personnel" type="checkbox">
=======
                                    <input class="form-check-input" id="6er4ge8rg4" name="fa_personnel" type="checkbox">
>>>>>>> Stashed changes

                                    <label class="form-check-label" for="fa_personnel">
                                    العمال - Personnel
                                    </label>
                                    
                                 </div>
                              </div>
                              <div class="col">
                                 <div class="form-check">
<<<<<<< Updated upstream
                                    <input class="form-check-input bneder" id="fa_batiments" name="fa_batiments" type="checkbox">
=======
                                    <input class="form-check-input" id="564ger65g4erg" name="fa_batiments" type="checkbox">
>>>>>>> Stashed changes

                                    <label class="form-check-label" for="fa_batiments">
                                    المباني - Bâtiments
                                    </label>
                                 </div>
                                 <div class="form-check">
<<<<<<< Updated upstream
                                    <input class="form-check-input bneder" id="fa_materiels" name="fa_materiels" type="checkbox">
=======
                                    <input class="form-check-input" id="56er1t65er41yg" name="fa_materiels" type="checkbox">
>>>>>>> Stashed changes

                                    <label class="form-check-label" for="fa_materiels">
                                    العتاد - Matériels
                                    </label>
                                 </div>
                              </div>
                              <div class="col">
                                 <div class="form-check">
<<<<<<< Updated upstream
                                    <input class="form-check-input bneder" id="fa_cheptel" name="fa_cheptel" type="checkbox">
=======
                                    <input class="form-check-input" id="65ge4rg654erg" name="fa_cheptel" type="checkbox">
>>>>>>> Stashed changes

                                    <label class="form-check-label" for="fa_cheptel">
                                    المواشي - Cheptel
                                    </label>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <br><br><br>
               <br><br><br>
               <div style="border-top: 3px solid red;"></div>
               <br>
               <h5>XIV - Environnement de l'exploitation محيط المستثمرة</h5>
               <br>

    <div class="row">  
               <div class="input-group input-group-sm">
                  <span class="input-group-text" id="basic-addon3">
                      هل مقدمي الخدمات المتعلقة بالفلاحة موجودون في البلدية
                      <br>
                      Fournisseurs de services situés dans la commune ?
                  </span>
<<<<<<< Updated upstream
               <select class="form-select bneder" id="ee_fournisseurs_de_services_situes_dans_la_commune" name="ee_fournisseurs_de_services_situes_dans_la_commune">
=======
               <select class="select-ee" id="inputGroupSelect01" name="ee_fournisseurs_de_services_situes_dans_la_commune">
>>>>>>> Stashed changes
                  <option selected="selected"> - </option>
                  <option value="1">1 - Oui - نعم</option>
                  <option value="2">2 - Non - لا</option>
              </select>
                  
            
</div>
            
</div>




            <br>

               <br>
               <div class="card">
                  <div class="card-header" style="text-align: center;">
                     المؤسسات ذات الاهتمام القريبة - Etablissements d’intérêt à proximité (multichoice)
                  </div>
                  <div class="card-body">
                     <div class="row">
                        <div class="col">
                           <div class="form-check">
                            <input class="form-check-input" id="flexCheckDefault51" name="ee_banque" type="checkbox">

                              <label class="form-check-label" for="flexCheckDefault51">
                              بنك - Banque
                              </label>
                           </div>
                        </div>
                        <div class="col">
                           <div class="form-check">
                            <input class="form-check-input" id="flexCheckDefault52" name="ee_poste" type="checkbox">

                              <label class="form-check-label" for="flexCheckDefault52">
                              البريد - Poste
                              </label>
                           </div>
                        </div>
                        <div class="col">
                           <div class="form-check">
                            <input class="form-check-input" id="flexCheckDefault53" name="ee_fournisseur" type="checkbox">

                              <label class="form-check-label" for="flexCheckDefault53">
                              مورد - Fournisseur
                              </label>
                           </div>
                        </div>
                        <div class="col">
                           <div class="form-check">
                            <input class="form-check-input" id="flexCheckDefault54" name="ee_veterinaire" type="checkbox">

                              <label class="form-check-label" for="flexCheckDefault54">
                              عيادة بيطرية - Vétérinaire
                              </label>
                           </div>
                        </div>
                        <div class="col">
                           <div class="form-check">
                            <input class="form-check-input" id="flexCheckDefault5552" name="ee_laboratoire" type="checkbox">

                              <label class="form-check-label" for="flexCheckDefault5552">
                              مخبر - Laboratoire
                              </label>
                           </div>
                        </div>
                     </div>
                     <div class="row" style="margin-top: 5px;">
                  
                        <div class="col">
                           <div class="form-check">
                            <input class="form-check-input" id="flexCheckDefault56" name="ee_bureau_detudes" type="checkbox">

                              <label class="form-check-label" for="flexCheckDefault56">
                              مكتب الدراسات - Bureau d'études
                              </label>
                           </div>
                        </div>
                        <div class="col">
                           <div class="form-check" style="position: absolute;right: 154px;">
                            <input class="form-check-input" id="flexCheckDefault57" name="ee_cooperatives_specialisees" type="checkbox">

                              <label class="form-check-label" for="flexCheckDefault57">
                              التعاونيات المتخصصة - Coopératives spécialisées
                              </label>
                           </div>
                        </div>
                     </div>
                     <div class="row">
                        <div class="col">
                           <div class="form-check">
                            <input class="form-check-input" id="ge29r85b4er" name="ee_assurances" type="checkbox">

                              <label class="form-check-label" for="ge29r85b4er">
                              التأمينات- Assurances
                              </label>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <br>
               <div class="card">
                  <div class="card-header" style="text-align: center;">
                     تسويق المنتوجات - Ecoulement des produits
                  </div>
                  <div class="card-body">
                     <div class="row">
                        <div class="col">
                           <div class="form-check">
                            <input class="form-check-input" id="flexCheckDefault85" name="ee_vente_sur_pied" type="checkbox">

                              <label class="form-check-label" for="flexCheckDefault85">
                              البيع قبل الجني - Vente sur pied
                              </label>
                           </div>
                        </div>
                        <div class="col">
                           <div class="form-check">
                            <input class="form-check-input" id="flexCheckDefault95" name="ee_au_marche_de_gros" type="checkbox">

                              <label class="form-check-label" for="flexCheckDefault95">
                              البيع في سوق الجملة - Au marché de gros
                              </label>
                           </div>
                        </div>
                        <div class="col">
                           <div class="form-check">
                            <input class="form-check-input" id="flexCheckDefault105" name="ee_intermediaire" type="checkbox">

                              <label class="form-check-label" for="flexCheckDefault105">
                              البيع عن طريق الوسطاء - Intermédiaire
                              </label>
                           </div>
                        </div>
                        <div class="col">
                           <div class="form-check">
                            <input class="form-check-input" id="flexCheckDefault511" name="ee_vente_directe" type="checkbox">

                              <label class="form-check-label" for="flexCheckDefault511">
                              البيع المباشر - Vente directe
                              </label>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <br>
               <div class="card">
                  <div class="card-header" style="text-align: center;">
                     Informations sur le marché de l’écoulement des produits de l’exploitation - معلومات عن سوق
                     تسويق منتجات المستثمرة
                  </div>
                  <div class="card-body">
                     <div class="row">
                        <div class="col">
                           <div class="form-check">
                            <input class="form-check-input" id="flexCheckDefault512" name="ee_local" type="checkbox">

                              <label class="form-check-label" for="flexCheckDefault512">
                              محلي - Local
                              </label>
                           </div>
                        </div>
                        <div class="col">
                           <div class="form-check">
                            <input class="form-check-input" id="flexCheckDefault513" name="ee_national" type="checkbox">

                              <label class="form-check-label" for="flexCheckDefault513">
                              وطني - National
                              </label>
                           </div>
                        </div>
                        <div class="col">
                           <div class="form-check">
                            <input class="form-check-input" id="flexCheckDefault514" name="ee_international" type="checkbox">

                              <label class="form-check-label" for="flexCheckDefault514">
                              دولي - International
                              </label>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <br>
               <div class="card">
                  <div class="card-header" style="text-align: center;">
                     هل أنت منخرط في - Etes-vous adhérant à
                  </div>
                  <div class="card-body">
                     <div class="row">
                        <div class="col">
                           <div class="form-check">
                            <input class="form-check-input" id="flexCheckDefault515" name="ee_cooperative_agricole" type="checkbox">

                              <label class="form-check-label" for="flexCheckDefault515">
                              تعاونية فلاحية - Coopérative agricole
                              </label>
                           </div>
                        </div>
                        <div class="col">
                           <div class="form-check">

                            <input class="form-check-input" id="flexCheckDefault5137" name="ee_association_professionnelle_agricole" type="checkbox">



                        
                              <label class="form-check-label" for="flexCheckDefault5137">
                              جمعية مهنية فلاحية - Association professionnelle agricole
                              </label>
                           </div>
                        </div>
                        <div class="col">
                           <div class="form-check">

                            <input class="form-check-input" id="flexCheckDefault517" name="ee_groupe_d_interet_commun_gic" type="checkbox">

                              <label class="form-check-label" for="flexCheckDefault517">
                              مجموعة المصالح المشتركة - Groupe d’intérêt commun (GIC)
                              </label>
                           </div>
                        </div>
                     </div>
                     <div class="row" style="margin-top: 5px;">
                        <div class="col">
                           <div class="form-check">
                            <input class="form-check-input" id="flexCheckDefault518" name="ee_autre_associations" type="checkbox">

                              <label class="form-check-label" for="flexCheckDefault518">
                              جمعيات أخرى - Autre associations
                              </label>
                           </div>
                        </div>
                        <div class="col">
                           <div class="form-check" style="position: absolute; left: 266px;">
                            <input class="form-check-input" id="flexCheckDefault519" name="ee_cwifa" type="checkbox">

                              <label class="form-check-label" for="flexCheckDefault519">
                              Conseil de wilaya interprofessionnel des filiales agricoles "CWIFA" - المجلس
                              الولائي المهني المشترك للشعب الفلاحية
                              </label>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <br>
               <br>
               <br>
<!-- Mounir's part end  -->














<?php
// Determine button text based on user's role
if ($_SESSION['role'] == "admin" || $_SESSION['role'] == "controleur" || $_SESSION['role'] == "superviseur") {
    $approveBtnText = "Valider";
    $rejectBtnText = "Rejeter";
} elseif ($_SESSION['role'] == "recenseur") {
    $approveBtnText = "Ajouter";
    $rejectBtnText = "Annuler";
}
?>

<<<<<<< Updated upstream
<div class="row">
    <div class="col<?= ($_SESSION['role'] == "recenseur") ? '-2' : '' ?>">
        <button class="btn btn-success btn-lg approve-btn" style="width: 100%;" href="#" data-state="approved" id="submitDate" type="button"><?= $approveBtnText ?></button>
    </div>
    <div class="col">
        <a class="btn btn-danger btn-lg reject-btn" style="width: 100%;" href="#" data-state="rejected" data-id="962"><?= $rejectBtnText ?></a>
    </div>
</div>

<script>
// Add event listener to detect Ctrl + *
document.addEventListener('keydown', function(event) {
if (event.ctrlKey && event.key === '*') {
// Trigger the click event of the button
document.getElementById('submitDate').click();  
}
});
</script>
=======

>>>>>>> Stashed changes




         
          <!--===============================================================================================-->
   <script src="static/vendor/jquery/jquery-3.2.1.min.js"></script>
    <!--===============================================================================================-->
    <script src="static/vendor/bootstrap/js/popper.js"></script>
    <script src="static/vendor/bootstrap/js/bootstrap.min.js"></script>
    <!--===============================================================================================-->
    <script src="static/vendor/select2/select2.min.js"></script>
    <!--===============================================================================================-->
    <script src="static/vendor/tilt/tilt.jquery.min.js"></script>
    <script src="https://cdn.datatables.net/2.0.3/js/dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/2.0.3/js/dataTables.bootstrap5.min.js"></script>
<script src="./assets/js/questionnaire.js"></script>
<script src="./assets/js/logique.js"></script>

             
             
             
             
 <script>
        
         
</script>

<script>
   // Function to remove the row
   function removeRow(button) {
       // Get the parent row and remove it
       var row = button.closest('.row');
       row.parentNode.removeChild(row);
   }
</script>


<script>
   window.onload = function () {
       var inputs = document.querySelectorAll('input'); // Select all input elements

       inputs.forEach(function (input) {
           if (input.value.toLowerCase() === 'none') {
            console.log(input.value)
               input.value = ''; // Clear the input field
           }
       });
   };
</script>


<script>
    

<<<<<<< Updated upstream
    




=======
        var inputsTB = document.querySelectorAll('input[tb]');
        inputsTB.forEach(function(input) {
            input.style.maxWidth = "51px";
        });
       var inputsMax999 = document.querySelectorAll('input[max="999"]');
        inputsMax999.forEach(function(input) {
            input.style.maxWidth = "60px";
        });
        var inputsBigTB = document.querySelectorAll('input[bigtb]'); // Corrected selector
        inputsBigTB.forEach(function(input) {
            input.style.maxWidth = "69px";
        });
        var inputsMax9999 = document.querySelectorAll('input[max="9999"]');
        inputsMax9999.forEach(function(input) {
            input.style.maxWidth = "80px";
        });
        var inputsMax99999 = document.querySelectorAll('input[max="99999"]');
        inputsMax99999.forEach(function(input) {
            input.style.maxWidth = "90px";
        });
        
    }

    // Trigger the adjustment when the page loads
    window.onload = adjustMaxWidth;
</script>


<script>
>>>>>>> Stashed changes
   document.getElementById("info_form").addEventListener("submit", function (event) {
       event.preventDefault(); // Prevent form submission

       errs = document.getElementsByClassName("err")

       function clear_err(){

           for(i in errs){
               console.log(i)
               errs[i].textContent = ""
           }
       }


       // ================================= CHECK ======================================================================================
       var bovins = parseFloat(document.getElementsByName("bovins")[0].value);
       var dont_vaches_laitieres_bla = parseFloat(document.getElementsByName("dont_vaches_laitieres_bla")[0].value);
       var dont_vaches_laitieres_blm = parseFloat(document.getElementsByName("dont_vaches_laitieres_blm")[0].value);
       var dont_vaches_laitieres_bll = parseFloat(document.getElementsByName("dont_vaches_laitieres_bll")[0].value);

       var ovins = parseFloat(document.getElementsByName("ovins")[0].value);
       var dont_brebis = parseFloat(document.getElementsByName("dont_brebis")[0].value);

       var equins = parseFloat(document.getElementsByName("equins")[0].value);
       var dont_juments = parseFloat(document.getElementsByName("dont_juments")[0].value);

       var caprins = parseFloat(document.getElementsByName("caprins")[0].value);
       var dont_chevres = parseFloat(document.getElementsByName("dont_chevres")[0].value);

       var camelins = parseFloat(document.getElementsByName("camelins")[0].value);
       var dont_chamelles = parseFloat(document.getElementsByName("dont_chamelles")[0].value);

       var ruches_modernes = parseFloat(document.getElementsByName("ruches_modernes")[0].value);
       var dont_sont_pleines = parseFloat(document.getElementsByName("dont_sont_pleines")[0].value);

       var ruches_traditionnelles = parseFloat(document.getElementsByName("ruches_traditionnelles")[0].value);
       var dont_sont_pleines_2 = parseFloat(document.getElementsByName("dont_sont_pleines_2")[0].value);











       if (bovins < (dont_vaches_laitieres_bla + dont_vaches_laitieres_blm + dont_vaches_laitieres_bll)) {
           clear_err()

           var bovins_error = document.getElementById("bovins_error");
           bovins_error.textContent = "Veuillez vérifier l'erreur ci-dessous";
           bovins_error.scrollIntoView({ behavior: 'smooth', block: 'center' });

       }else if(ovins < dont_brebis){
           clear_err()

           var ovins_error = document.getElementById("ovins_error");
           ovins_error.textContent = "Veuillez vérifier l'erreur ci-dessous";
           ovins_error.scrollIntoView({ behavior: 'smooth', block: 'center' });


       }else if(equins < dont_juments){
           clear_err()

           var equins_error = document.getElementById("equins_error");
           equins_error.textContent = "Veuillez vérifier l'erreur ci-dessous";
           equins_error.scrollIntoView({ behavior: 'smooth', block: 'center' });



       }else if(caprins < dont_chevres){
           clear_err()

           var caprins_error = document.getElementById("caprins_error");
           caprins_error.textContent = "Veuillez vérifier l'erreur ci-dessous";
           caprins_error.scrollIntoView({ behavior: 'smooth', block: 'center' });


           
       }else if(camelins < dont_chamelles){
           clear_err()

           var camelins_error = document.getElementById("camelins_error");
           camelins_error.textContent = "Veuillez vérifier l'erreur ci-dessous";
           camelins_error.scrollIntoView({ behavior: 'smooth', block: 'center' });


       }else if(ruches_modernes < dont_sont_pleines){
           clear_err()

           var ruches_modernes_error = document.getElementById("ruches_modernes_error");
           ruches_modernes_error.textContent = "Veuillez vérifier l'erreur ci-dessous";
           ruches_modernes_error.scrollIntoView({ behavior: 'smooth', block: 'center' });


       }else if(ruches_traditionnelles < dont_sont_pleines_2){
           clear_err()

           var ruches_traditionnelles_error = document.getElementById("ruches_traditionnelles_error");
           ruches_traditionnelles_error.textContent = "Veuillez vérifier l'erreur ci-dessous";
           ruches_traditionnelles_error.scrollIntoView({ behavior: 'smooth', block: 'center' });


       } else {
           event.target.submit();
       }

   });
</script>




             
<script>
   document.getElementById("info_form").addEventListener("input", function () {
       console.log("capturing")

       var prairies_naturelles_1 = parseFloat(document.getElementsByName("prairies_naturelles_1")[0].value) || 0;
       var plantations_arboriculture_1 = parseFloat(document.getElementsByName("plantations_arboriculture_1")[0].value) || 0;
       var terres_au_repos_jacheres_1 = parseFloat(document.getElementsByName("terres_au_repos_jacheres_1")[0].value) || 0;
       var cultures_herbacees_1 = parseFloat(document.getElementsByName("cultures_herbacees_1")[0].value) || 0;
       var superficie_agricole_utile_sau_1 = prairies_naturelles_1 + plantations_arboriculture_1 + terres_au_repos_jacheres_1 + cultures_herbacees_1;
       document.getElementsByName("superficie_agricole_utile_sau_1")[0].value = (superficie_agricole_utile_sau_1).toFixed(2);

       var prairies_naturelles_2 = parseFloat(document.getElementsByName("prairies_naturelles_2")[0].value) || 0;
       var plantations_arboriculture_2 = parseFloat(document.getElementsByName("plantations_arboriculture_2")[0].value) || 0;
       var terres_au_repos_jacheres_2 = parseFloat(document.getElementsByName("terres_au_repos_jacheres_2")[0].value) || 0;
       var cultures_herbacees_2 = parseFloat(document.getElementsByName("cultures_herbacees_2")[0].value) || 0;
       var superficie_agricole_utile_sau_2 = prairies_naturelles_2 + plantations_arboriculture_2 + terres_au_repos_jacheres_2 + cultures_herbacees_2;
       document.getElementsByName("superficie_agricole_utile_sau_2")[0].value = (superficie_agricole_utile_sau_2).toFixed(2);


       var prairies_naturelles_3 = parseFloat(document.getElementsByName("prairies_naturelles_3")[0].value) || 0;
       var plantations_arboriculture_3 = parseFloat(document.getElementsByName("plantations_arboriculture_3")[0].value) || 0;
       var terres_au_repos_jacheres_3 = parseFloat(document.getElementsByName("terres_au_repos_jacheres_3")[0].value) || 0;
       var cultures_herbacees_3 = parseFloat(document.getElementsByName("cultures_herbacees_3")[0].value) || 0;
       var superficie_agricole_utile_sau_3 = prairies_naturelles_3 + plantations_arboriculture_3 + terres_au_repos_jacheres_3 + cultures_herbacees_3;
       document.getElementsByName("superficie_agricole_utile_sau_3")[0].value = (superficie_agricole_utile_sau_3).toFixed(2);

       var prairies_naturelles_4 = parseFloat(document.getElementsByName("prairies_naturelles_4")[0].value) || 0;
       var plantations_arboriculture_4 = parseFloat(document.getElementsByName("plantations_arboriculture_4")[0].value) || 0;
       var terres_au_repos_jacheres_4 = parseFloat(document.getElementsByName("terres_au_repos_jacheres_4")[0].value) || 0;
       var cultures_herbacees_4 = parseFloat(document.getElementsByName("cultures_herbacees_4")[0].value) || 0;
       var superficie_agricole_utile_sau_4 = prairies_naturelles_4 + plantations_arboriculture_4 + terres_au_repos_jacheres_4 + cultures_herbacees_4;
       document.getElementsByName("superficie_agricole_utile_sau_4")[0].value = (superficie_agricole_utile_sau_4).toFixed(2);


       var pacages_et_parcours_1 = parseFloat(document.getElementsByName("pacages_et_parcours_1")[0].value) || 0;
       var surfaces_improductives_1 = parseFloat(document.getElementsByName("surfaces_improductives_1")[0].value) || 0;
       var superficie_agricole_totale_sat_1 = pacages_et_parcours_1 + surfaces_improductives_1 + superficie_agricole_utile_sau_3
       document.getElementsByName("superficie_agricole_totale_sat_1")[0].value = (superficie_agricole_totale_sat_1 + superficie_agricole_utile_sau_1).toFixed(2);

       var pacages_et_parcours_2 = parseFloat(document.getElementsByName("pacages_et_parcours_2")[0].value) || 0;
       var surfaces_improductives_2 = parseFloat(document.getElementsByName("surfaces_improductives_2")[0].value) || 0;
       var superficie_agricole_totale_sat_2 = pacages_et_parcours_2 + surfaces_improductives_2 + superficie_agricole_utile_sau_4
       document.getElementsByName("superficie_agricole_totale_sat_2")[0].value = (superficie_agricole_totale_sat_2 + superficie_agricole_utile_sau_2).toFixed(2);

       var terres_forestieres_bois_forets_maquis_vides_labourables_1 = parseFloat(document.getElementsByName("terres_forestieres_bois_forets_maquis_vides_labourables_1")[0].value) || 0;
       var surface_totale_st_1 = terres_forestieres_bois_forets_maquis_vides_labourables_1
       document.getElementsByName("surface_totale_st_1")[0].value = (surface_totale_st_1 + superficie_agricole_totale_sat_1 + superficie_agricole_utile_sau_1).toFixed(2);
       

       var terres_forestieres_bois_forets_maquis_vides_labourables_2 = parseFloat(document.getElementsByName("terres_forestieres_bois_forets_maquis_vides_labourables_2")[0].value) || 0;
       var surface_totale_st_2 = terres_forestieres_bois_forets_maquis_vides_labourables_2
       document.getElementsByName("surface_totale_st_2")[0].value = (surface_totale_st_2 + superficie_agricole_totale_sat_2 + superficie_agricole_utile_sau_2).toFixed(2);

   });
</script>       

<script>


// commune_code.addEventListener("blur", (e) => {
//    commune_code.style.border = "3px solid red";
//     if(commune_code.value == ""){
//       commune_code.style.border = "3px solid red";
//       commune_code.focus();  // Set focus when empty
//     }
//     if(commune_code.value != ""){
//       commune_code.style.border = "3px solid green";
//     }
// });
   nom_exploitant.addEventListener("blur", (e) => {
    nom_exploitant.style.border = "3px solid red";
    if(nom_exploitant.value == ""){
        nom_exploitant.style.border = "3px solid red";
        nom_exploitant.focus();  // Set focus when empty
    }
    if(nom_exploitant.value != ""){
        nom_exploitant.style.border = "3px solid green";
    }
});

prenom_exploitant.addEventListener("blur", (e) => {
    prenom_exploitant.style.border = "3px solid red";
    if(prenom_exploitant.value == ""){
        prenom_exploitant.style.border = "3px solid red";
        prenom_exploitant.focus();  // Set focus when empty
    }
    if(prenom_exploitant.value != ""){
        prenom_exploitant.style.border = "3px solid green";
    }
});

annee_de_naissance.addEventListener("blur", (e) => {
    annee_de_naissance.style.border = "3px solid red";
    if(annee_de_naissance.value == ""){
        annee_de_naissance.style.border = "3px solid red";
        annee_de_naissance.focus();  // Set focus when empty
    }
    if(annee_de_naissance.value != ""){
        annee_de_naissance.style.border = "3px solid green";
    }
});

nin_exploitant.addEventListener("blur", (e) => {
    nin_exploitant.style.border = "3px solid red";
    if(nin_exploitant.value == ""){
        nin_exploitant.style.border = "3px solid red";
        nin_exploitant.focus();  // Set focus when empty
    }
    if(nin_exploitant.value != ""){
        nin_exploitant.style.border = "3px solid green";
    }
});

commune_code.addEventListener("blur", (e) => {
    commune_code.style.border = "3px solid red";
    if(commune_code.value == ""){
        commune_code.style.border = "3px solid red";
        commune_code.focus();  // Set focus when empty
    }
    if(commune_code.value != ""){
        commune_code.style.border = "3px solid green";
    }
});

nom_exploitation.addEventListener("blur", (e) => {
    nom_exploitation.style.border = "3px solid red";
    if(nom_exploitation.value == ""){
        nom_exploitation.style.border = "3px solid red";
        nom_exploitation.focus();  // Set focus when empty
    }
    if(nom_exploitation.value != ""){
        nom_exploitation.style.border = "3px solid green";
    }
});


               var surfaces = document.getElementsByClassName("surface");

               for (let i = 0; i < surfaces.length; i++) {
                  surfaces[i].addEventListener("blur", (e) => {
                     if((surface_totale_st_1.value < 0 || surface_totale_st_1.value == 0)){
                        surface_totale_st_1.style.border = "3px solid red";
                        surface_totale_st_2.style.border = "3px solid red";
                        surfaces[i].focus();
                     
                     }
                  if(surface_totale_st_1.value > 0){
                     surface_totale_st_1.style.border = "3px solid green";
                     surface_totale_st_2.style.border = "3px solid green";
                  }
                  });
               }

             




              </script>   
             
             
             
   </body>
</html>


