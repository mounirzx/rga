<?php
include('includes/header.php');
?>
<!DOCTYPE html>
<html lang="en">

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
    
   <body>
      
   <style>
  .invalid { border-color: red; }
  #error { color: red }
  .select-ee{
                              border: 1px solid #E3E0E0;
                              border-radius: 3px;

                          }

                          .select-ee:hover{
                              border: 1px solid #E3E0E0;
                              
                          }
                          .qst-num{
font-size:10px;
margin: 7px 7px 7px 0px;
color:#ff0000;
font-weight: bold;
                          }
</style>
     
 
     <br><br><br>
 
     <div class="card">
    
    <img src="static/header.png">

         <div class="card-body">
 
 
         <form id="info_form" method="post">
    
                <h5 style="margin-bottom: 27px;">I- Information générales - معلومات عامة</h5>
                <div style="border-top: 2px solid red; width:260px; margin:-20px 0px 0px 30px; "></div>

                        <br>

                <div class="row">
                    <div class="col">
                    <div class="input-group input-group-sm">
                    <div class="qst-num zxcount"></div>
                    <span class="input-group-text" id="basic-addon3">
                    تاريخ المرور
                    <br />
                    Date de passage</span>
                    <select class="select-ee" id="day_of_passage" >
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
                    <select class="select-ee"  id="month_of_passage" >
                       <option value="-"></option>
                       <option  value="01">1 - Janvier</option>
                       <option  value="02">2 - Février</option>
                       <option  value="03">3 - Mars</option>
                       <option  value="04">4 - Avril</option>
                       <option  value="05">5 - Mai</option>
                       <option  value="06">6 - Juin</option>
                       <option  value="07">7 - Juillet</option>
                       <option  value="08">8 - Août</option>
                       <option  value="09">9 - Septembre</option>
                       <option  value="10">10 - Octobre</option>
                       <option  value="11">11 - Novembre</option>
                       <option  value="12">12 - Décembre</option>
                    </select>
                    <select class="select-ee" id="year_of_passage" >
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
                 <div class="qst-num zxcount"></div>
                    <span class="input-group-text" id="basic-addon3">لقب
                    المحصي
                    <br />
                    Nom du recenseur</span>
                    <input class="form-control" id="nom_recensseur" type="text" 
                       value="" />
                 </div>
                 <br />
                 <div class="input-group input-group-sm">
                 <div class="qst-num zxcount"></div>
                    <span class="input-group-text" id="basic-addon3">إسم
                    المحصي
                    <br />
                    Prénom du recenseur</span>
                    <input class="form-control" id="prenom_recenseur"  type="text" 
                       value="" />
                 </div>
                 <br />
                        <div class="input-group input-group-sm">
                        <div hidden class="qst-num zxcount"></div>
                        <div class="qst-num ">7</div>
                            <span class="input-group-text" id="basic-addon3">الولاية
                                <br>
                                Wilaya</span>
                                <input class="form-control" id="wilaya_name_ascii" >
                 </div>
                 <br />
                 <div class="input-group input-group-sm">
                 <div hidden class="qst-num zxcount"></div>
                        <div class="qst-num ">8</div>
                    <span class="input-group-text" id="basic-addon3">البلدية<br />
                    commune</span>
                    <input readonly class="form-control" type="text" id="commune_name_ascii"  value="" />
                 </div>

                 <br />
                 

                 <script>
                    $(document).ready(function() {
                      // Listen for the form submission
                      $('#info_form').on('submit', function(e) {
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
                    });
                    </script>
                    

                 <script>
                    document.getElementById('wilaya_select').addEventListener('change', function () {
                        var selectedOption = this.options[this.selectedIndex].value;
                
                        var communeOfPassageInput = document.querySelector('[name="commune_of_passage"]');
                        var commune_code = document.querySelector('[name="commune_code"]');
                
                        var wilayaValues = {
                            'Tipaza': { communeOfPassage: 'Ahmar el ain - حمر العين', communeCode: '4219' },
                            'El Taref': { communeOfPassage: 'Drean - دريعان', communeCode: '3613' },
                            'Mascara': { communeOfPassage: 'Oued Taria - واد تاغية', communeCode: '2922' },
                            'Djelfa': { communeOfPassage: 'Aïn el bell - عين الإبل', communeCode: '1730' },
                            'Biskra': { communeOfPassage: 'Aïn naga - عين ناقة', communeCode: '0739' },
                            'Adrar': { communeOfPassage: 'Inzeghmir - عين زقمير', communeCode: '0105' },
                        };
                
                        if (wilayaValues[selectedOption]) {
                            communeOfPassageInput.value = wilayaValues[selectedOption].communeOfPassage;
                            commune_code.value = wilayaValues[selectedOption].communeCode;
                        }
                    });
                </script>


<!-- removed -->
                 <!-- <div class="input-group input-group-sm">
                    <span class="input-group-text" id="basic-addon3">
                    Numéro de l'exploitation ou immatriculation <br /> رقم المستثمرة أو رقم التسجيل في
                    البلدية
                    </span>
            
                  
                       <input id="in3" type="text" max="9999" class="form-control" data-length="4"
                          value="" />
                   
                 </div> 
                 <br />-->
                 
                
              </div>
              <div class="col">
                 
                

                 <div  class="card"> 


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
                          id="nom_controleur"/>
                       </div>
                       <br />
                       <div class="input-group input-group-sm">
                       <div hidden class="qst-num zxcount"></div>
                       <div class="qst-num ">6</div>
                          <span class="input-group-text" id="basic-addon3">إسم
                          المراقب
                          <br />
                          prénom du contrôleur</span>
                          <input readonly class="form-control" type="text"  id="prenom_controleur"  />
                       </div>

                    </div>
                 </div>
                 <br/>
                 <br/>
                
          
                 <div style="margin: 8px 0px 0px 0px;" class="input-group input-group-sm"><br>
                 <div hidden class="qst-num zxcount"></div>
                 <div class="qst-num ">9</div>
                    <span class="input-group-text" id="basic-addon3">رمز البلدية<br>
                        commune Code</span>
                        <input  type="text" class="form-control bneder" id="commune_code" name="commune_code">
                </div>
                 
                 <br />
              </div>
           </div>


           <div class="row">
            <div class="col-8">
            <div class="input-group input-group-sm">
                 <div  class="qst-num zxcount"></div>
                    <span class="input-group-text" id="basic-addon3">
                    district-zone <br /> إسم المكان، المنطقة
                    </span>
                    <input class="form-control"   type="text" id="nom_zone_district" />
                 </div>
            </div>
            <div class="col">
            <div class="input-group input-group-sm">
                 <div class="qst-num zxcount"></div>
                    <span class="input-group-text" id="basic-addon3">
                    Numero du district-zone <br />رقم المنطقة
                    </span>
                  
                    <input  type="text" max="99" class="form-control" id="num_zone_district" data-length="2"
                         />
                    
                 </div>
            </div>
           </div>
           
           <br />
                 
           <br />
           <br />
           <br />
           <div style="border-top: 3px solid red;"></div>
           <br />
           <h5 style="margin-bottom: 27px;">II- Identification de l'exploitation تعريف المستثمر</h5>
           <div style="border-top: 2px solid red; width:330px; margin:-20px 0px 0px 30px; "></div>

           <br />
           <div class="row">
              <div class="col">
                 <div class="input-group input-group-sm">
                   <span class="input-group-text" id="basic-addon3">
                    اللقب <br /> Nom
                    </span>
                    <input class="form-control bneder" type="text" name="nom_exploitant"    />
                 </div>
              </div>
              <div class="col">
                 <div class="input-group input-group-sm">
                   <span class="input-group-text" id="basic-addon3">
                    الإسم<br /> Prénom
                    </span>
                    <input class="form-control bneder"  type="text"  name="prenom_exploitant" />
                 </div>
              </div>
           </div>
           <br />
        
              <div class="col">
                <div class="input-group input-group-sm">
                    <span class="input-group-text" id="basic-addon3" style="width: 165px;">
                      تاريخ الميلاد  Date de naissance</span>
                    <select class="select-ee " id="jour_de_naissance"  style="width: 65px;">
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
                    <select class="select-ee"   id="mois_de_naissance" style="width: 165px;">
                       <option value="-"></option>
                       <option  value="01">1 - Janvier</option>
                       <option  value="02">2 - Février</option>
                       <option  value="03">3 - Mars</option>
                       <option  value="04">4 - Avril</option>
                       <option  value="05">5 - Mai</option>
                       <option  value="06">6 - Juin</option>
                       <option  value="07">7 - Juillet</option>
                       <option  value="08">8 - Août</option>
                       <option  value="09">9 - Septembre</option>
                       <option  value="10">10 - Octobre</option>
                       <option  value="11">11 - Novembre</option>
                       <option  value="12">12 - Décembre</option>
                    </select>
                    <select class="select-ee" id="annee_de_naissance"  style="width: 125px;">
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
                  
                    <span class="input-group-text" id="basic-addon3">الجنس
                    <br />
                    Sexe</span>
                    <select class="select-ee bneder"   name="sexe_exploitant"  style="width: 197px;">
                       <option selected=""> -
                       </option>
                       <option  value="1"> Masculin - ذكر
                       </option>
                       <option  value="2"> Féminin - أنثى
                       </option>
                    </select>
             </div>

   
          

                  <br/>



            <div class="row">
                <div class="col-6">
                        <div class="input-group input-group-sm">
                           <span class="input-group-text col-6" id="basic-addon3">المستوى التعليمي
                           <br />
                           Niveau d'instruction</span>
                           <select class="select-ee col-6 bneder" id="niveau_instruction"   name="niveau_instruction" >
                              <option selected=""> - </option>
                              <option  value="1">1 - Aucun- لاشيء</option>
                              <option  value="2">2 - Primaire - إبتدائي</option>
                              <option  value="3">3 - Moyen- متوسط</option>
                              <option  value="4">4 - Secondaire - ثانوي</option>
                              <option  value="5">5 - Universitaire - جامعي</option>
                           </select>
                     </div>
               </div>
               <div class="col-6">
                  <div class="input-group input-group-sm" >
                    <span class="input-group-text col-6" id="basic-addon3">مستوى التكوين الفلاحي
                    <br />
                    Niveau de formation agricole</span>
                    <select class="select-ee col-6 bneder" id="niveau_formation_agricole" name="niveau_formation_agricole" >
                       <option selected=""> - </option>
                       <option  value="1">1 - Aucun - لاشيء</option>
                       <option  value="2">2 - Agent technique spécialisé - عون تقني متخصص</option>
                       <option  value="3">3 - Ingénieur - مهندس</option>
                       <option  value="4">4 - Perfectionnement - تأهيل</option>
                       <option  value="5">5 - Technicien - تقني</option>
                       <option  value="6">6 - Vétérinaire - بيطري</option>
                       <option  value="7">7 - Agent technique - عون تقني</option>
                       <option  value="8">8 - Technicien supérieur - تقني سامي</option>
                       <option  value="9">9 - Formation - تكوين</option>
                    </select>
                 </div>
              </div>
            </div> 

              
            


            <div class="row">
               <div class="col">

               </div>
               <div class="col">

               </div>
            </div> 

            <br/>





           <div class="input-group input-group-sm">
              <span class="input-group-text" id="basic-addon3">
              عنوان المستثمر الفلاحي (الفلاح) - Adresse de l'exploitant agricole
              </span>
              <input class="form-control bneder"  type="text" 
                 name="adress_exploitant"  data-uppercase-first="true"/>
           </div>
           <br />
         







           <div class="row">
              <div class="col">
                 <div class="input-group input-group-sm">
                 
                    <span class="input-group-text" id="basic-addon3">
                    رقم الهاتف <br /> Numéro de téléphone
                    </span>
                    <input class="form-control bneder" type="text" id="phone_exploitant"  name="phone_exploitant">
                 </div>
              </div>
              <div class="col">
                 <div class="input-group input-group-sm">
                    <span class="input-group-text" id="basic-addon3">  البريد الإكتروني<br /> é-mail</span>
                    <input class="form-control bneder"  type="text"  id="email_exploitant"  name="email_exploitant" />
                 </div>
              </div>
           </div>


<br/>
<br/>

       
 
</div>
<br />
<br />
<div class="card">
    <div class="card-header" style="text-align: center;">
        هل أنت مسجل في?
        <br>
        Etes-vous inscrit à?
    </div>
    <div class="card-body">
        <div class="row">
            <div class="col">
                <div class="form-check">
                    <input class="form-check-input" id="caw" name="caw" type="checkbox" value="1">
                    <label class="form-check-label" for="caw">
                        الغرفة الولائية للفلاحة
                        <br>
                        La Chambre d’Agriculture de la Wilaya (CAW)
                    </label>
                </div>
                <br>
                <div class="form-check">
                    <input class="form-check-input" id="capa" name="capa" type="checkbox" value="1">
                    <label class="form-check-label" for="capa">
                        غرفة الصيد البحري وتربية الأحياء المائية
                        <br>
                        La Chambre de la pêche et de l'aquacutur (CAPA)
                    </label>
                </div>
                <br>
                <div class="form-check">
                    <input class="form-check-input" id="unpa" name="unpa" type="checkbox" value="1">
                    <label class="form-check-label" for="unpa">
                        الإتحاد الوطني للفلاحين الجزائريين
                        <br>
                        L’Union Nationale des Paysans Algériens (UNPA)
                    </label>
                </div>
            </div>
            <br>
            <div class="col">
                <div class="form-check">
                    <input class="form-check-input" id="ccw" name="ccw" type="checkbox" value="1">
                    <label class="form-check-label" for="ccw">
                        غرفة الحرف والمهنيين
                        <br>
                        La Chambre du Commerce de la Wilaya (CCW)
                    </label>
                </div>
                <br>
                <div class="form-check">
                    <input class="form-check-input" id="cam" name="cam" type="checkbox" value="1">
                    <label class="form-check-label" for="cam">
                        الغرفة التجارية الولائية
                        <br>
                        La Chambre de l'artisanat et des metiers (CAM)
                    </label>
                </div>
                <br>
                <div class="form-check">
                    <input class="form-check-input" id="dispositif_social" name="dispositif_social" type="checkbox" value="1">
                    <label class="form-check-label" for="dispositif_social">
                        الأجهزة الإجتماعية
                        <br>
                        جهاز إجتماعي - Dispositif Social
                    </label>
                </div>
            </div>
        </div>
    </div>
</div>


<!--          Ca marche jusque la    -->
             
<br />
     
     
             
             <br/>
             
             
             <br />
    <div class="row">
        <div class="col">
            <div class="input-group input-group-sm">
            <span class="input-group-text" id="basic-addon3">
            رقم التعريف الوطني <br> Numéro d’identité nationale
            </span>
            <input class="form-control bneder" type="text"  id="nin_exploitant" name="nin_exploitant"   />
            </div>
        </div>
        <div class="col">
            <div class="input-group input-group-sm">
            <span class="input-group-text" id="basic-addon3">
            رقم التعريف اإلحصائي <br> Numéro d’identification statstique
            </span>
            <input class="form-control bneder"  type="text" id="nis_exploitant"  name="nis_exploitant" />
            </div>
        </div>
    </div>

        <br/>      
             
        <br />
    <div class="row">
        <div class="col">
            <div class="input-group input-group-sm">
            <span class="input-group-text" id="basic-addon3">
               رقم بطاقة الفلاح <br> Numéro de la carte fellah
               </span>
            <input class="form-control bneder" type="text" id="num_carte_fellah_exploitant"  name="num_carte_fellah_exploitant"   />
            </div>
        </div>
        <div class="col">
            <div class="input-group input-group-sm">
            
            <span class="input-group-text" id="basic-addon3">نوع التأمين إذا كان مؤمنا
               <br>
               Type d'assurance, si assuré</span>

           
          
                <select class="select-ee col-6 bneder" id="assurance_exploitant" name="assurance_exploitant" style="width: 200px;">
                <option selected=""> - </option>
                        <option value="1">1 - CASNOS
                        </option>
                        <option value="2">2 - CNAS
                        </option>
                </select>
            </div>
        </div>
    </div>      
             

       <br />
             
             
    <div class="row">
        <div class="col">
            <div class="input-group input-group-sm">
            <span class="input-group-text" id="basic-addon3">
               رقم الضمان الإجتماعي <br> Numéro de sécurité social
               </span>
            <input class="form-control bneder" type="text"  id="num_sec_sociale" name="num_sec_sociale"   />
            </div>
        </div>
        <div class="col">
            <div class="input-group input-group-sm">
            
            <span class="input-group-text" id="basic-addon3">منحدر من عائلة فلاحية
                     <br>
                     Issu d'une famille agricole</span>

           
          
            <select class="select-ee col-6 bneder" id="issu_famille_agricole" name="issu_famille_agricole" style="width: 210px;">
                <option selected=""> - </option>
                <option selected=""> - </option>
                        <option value="1">1 - Oui - نعم</option>
                        <option value="2"> Non - لا</option>
                </select>
            </div>
        </div>
    </div>

             
       <br/>
             
        <br />
    <div class="row">
        <div class="col">
            <div class="input-group input-group-sm">
         
            <span class="input-group-text" id="basic-addon3">طبيعة المستثمر (الفلاح) - 
                        <br>
                        Nature de l'exploitant
                     </span>
            <input class="form-control bneder" type="text" id="nature_exploitant" name="nature_exploitant"   />
            </div>
        </div>
        <div class="col">
            <div class="input-group input-group-sm">
            
            <span class="input-group-text" id="basic-addon3">هل أنت الفلاح -
                     المستثمر
                     <br>
                     Etes-vous l'exploitant ?</span>
        
            <select class="select-ee col-6 bneder" id="exploitant" name="exploitant" style="width: 225px;">
            <option selected=""> - </option>
                        <option value="1">
                        1 - الوحيد - Unique</option>
                        <option value="2">
                        2 - الرئيسي - Principal</option>
                        </select>
            </div>
        </div>
    </div>
             
             
    <br />
    <div class="row">
        <div class="col">
            <div class="input-group input-group-sm">
         
            <span class="input-group-text" id="basic-addon3">عدد المتعاونين أو
                     الشركاء
                     إذا كان الفلاح - المستثمر هو الرئيسي
                     <br>
                     Nombre de co-exploitants, si</span>
            <input class="form-control bneder" type="text" id="nb_co_exploitants" name="nb_co_exploitants" />
            </div>
        </div>
        <div class="col">
         
        </div>
    </div>

    <br />     
             
             
             
             
             
             
             
             
             
         <div style="border-top: 3px solid red;"></div>
    <br />
    <h5>III - Identification de l'exploitant تعريف المستثمرة</h5>
    <br />

    <div class="input-group input-group-sm">
               <span class="input-group-text" id="basic-addon3">
               إسم المستثمرة
               <br>
               Nom des investissements agricoles
               </span>
               <input class="form-control bneder" id="nom_exploitation" name="nom_exploitation" type="text" value="">
            </div>

            <br />

            <div class="input-group input-group-sm">
               <span class="input-group-text" id="basic-addon3">
               عنوان المستثمرة (أو إسم المكان) <br> Adresse de l'exploitation (ou lieu dit)
               </span>
               <input class="form-control bneder" id="adress_exploitation" name="adress_exploitation" type="text" value="">
            </div>

            <br />

            <div class="input-group input-group-sm">
               <span class="input-group-text" id="basic-addon3">الوضع القانوني للمستثمرة
               <br>
               Statut juridique de l’exploitation</span>
               <select class="select-ee statut_juridique_s" id="statut_juridique_de_lexploitation" name="statut_juridique_de_lexploitation">
                  <option selected=""> - </option>
                  <option value="1">1 - Société civile - مؤسسة مدنية</option>
                  <option value="2">2 - Société familiale - مؤسسة عائلية</option>
                  <option value="3">3 - SARL - ش.ذ.م.م</option>
                  <option value="4">4 - EURL - م.ا.م.م</option>
                  <option value="5">5 - Coopérative - تعاونية</option>
                  <option value="6">6 - Groupement - التجمع</option>
                  <option value="7">7 - Location - الإيجار</option>
                  <option value="8">8 - Association - الجمعية</option>
                  <option value="9">9 - Partenariat - الشراكة</option>
                  <option value="10">10 - Sans statut juridique - بدون وضع قانوني</option>
                  <option value="11">11 - Autre</option>
               </select>
            </div>

            <br />

            <div class="card">
               <div class="card-header" style="text-align: center;">نشاط المستثمرة - Activité de l'exploitation
               </div>
               <div class="card-body">
                  <div class="row">
                     <div class="col">
                        <div class="form-check">
                            <input class="form-check-input bneder" id="vegetale" name="activite_exploitation" type="checkbox" value="1">

                           <label class="form-check-label" for="vegetale">
                           نباتية - Végétale
                           </label>
                        </div>
                     </div>
                     <div class="col">
                        <div class="form-check">
                            <input class="form-check-input bneder" id="elevage" name="activite_exploitation" type="checkbox" value="2">

                           <label class="form-check-label" for="elevage">
                           تربية الحيوانات - Elevage
                           </label>
                        </div>
                     </div>
                     <div class="col">
                        <div class="form-check">
                           <input class="form-check-input bneder" id="mixed" name="activite_exploitation" type="checkbox" value="3">
                           <label class="form-check-label" for="mixed">
                           مختلطة - mixed
                           </label>
                        </div>
                     </div>
                  </div>


                        <br>
                        <div class="input-group input-group-sm">
                            <span class="input-group-text" id="basic-addon3">
                                إذا كان النشاط تربية المواشي
                            <br>
                            Si activité est l'élevage</span>
                            <select class="select-ee bneder" id="type_activite_exploitation" name="type_activite_exploitation">
                            <option> - </option>
                            <option value="1">1 - لديه أرض - Avec terre</option>
                            <option value="2">2 - بدون أرض - Sans terre</option>
                            </select>
                        </div>
               </div>
            </div>

 <br />
 <br />
 <br />
 <br />


             
             
 <div class="row">
               <div class="col-7">
                  <div class="card" style="font-size: 12px;">
                     <div class="card-header" style="text-align: center;">
                        <h7> الإحداثيات الجغرافية للمستثمرة <br> Coordonnées géographiques de l'exploitation
                        </h7>
                     </div>
                     <div class="card-body">
                      

                         

                           <div class="input-group input-group-sm">
                            <span class="input-group-text" id="basic-addon3">
                            خط الطول (س)
Longitude (X)
                            </span>
                            <select style="height: 33px;" class="select-ee" id="inputGroupSelect01" name="longitude_x_prefix">
                                <option value="EST">+</option>
                                <option value="OUEST">-</option>
                            </select>
                            <input class="form-control bneder" type="number" id="lon_exploitation" name="lon_exploitation">
                            </div>
<br/>

                            <div class="input-group input-group-sm">
                            <span class="input-group-text" id="basic-addon3">
                            خط العرض (ع)
Latitude (Y)
                            </span>
                            <input class="form-control bneder" type="number" id="lat_exploitation" name="lat_exploitation">
                            </div>

                        </div>
                     </div>
                  </div>
            
        
                  <div class="col">
                  <div class="card" style="font-size: 12px;">
                     <div class="card-header" style="text-align: center;">
                        <h7> إمكانية الوصول إلى المستثمرة <br> Accessibilité de l’exploitation</h7>
                     </div>
                     <div class="card-body">
                        <div class="row">
                           <div class="col">
                              <div class="form-check">
                                 <input class="form-check-input bneder" id="route_national" name="route_national" type="checkbox" value="1">
                                 <label class="form-check-label" for="route_national">
                                 طريق وطني
                                 <br>
                                 Route national
                                 </label>
                              </div>
                              <br>
                              <div class="form-check">
                                 <input class="form-check-input bneder" id="chemin_de_wilaya" name="chemin_de_wilaya" type="checkbox" value="1">
                                 <label class="form-check-label" for="chemin_de_wilaya">
                                 طريق ولائي
                                 <br>
                                 Chemin de wilaya
                                 </label>
                              </div>
                              <br>
                              <div class="form-check">
                                 <input class="form-check-input bneder" id="route_communale" name="route_communale" type="checkbox" value="1">
                                 <label class="form-check-label" for="route_communale">
                                 طريق بلدي
                                 <br>
                                 Route communale
                                 </label>
                              </div>
                           </div>
                           <div class="col">
                              <div class="form-check">
                                 <input class="form-check-input bneder" id="piste" name="piste" type="checkbox" value="1">
                                 <label class="form-check-label" for="piste">
                                 مسار
                                 <br>
                                 Piste
                                 </label>
                              </div>
                              <br>
                              <div class="form-check">
                                 <input class="form-check-input bneder" id="acces_agricole" name="acces_agricole" type="checkbox" value="1">
                                 <label class="form-check-label" for="acces_agricole">
                                 مسار فلاحي
                                 <br>
                                 Accés agricole
                                 </label>
                              </div>
                              <br>
                              <div class="form-check">
                                 <input class="form-check-input bneder" id="acces_rural" name="acces_rural" type="checkbox" value="1">
                                 <label class="form-check-label" for="acces_rural">
                                 مسار ريفي
                                 <br>
                                 Accés rural
                                 </label>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <br>
                  <br>
               </div>




<div class="col">
    <div class="row">
        <div class="row">
            <div class="input-group input-group-sm">
                <span class="input-group-text" id="basic-addon3">شبكة كهرباء</span>
                <div class="col-auto">
                    <select class="select-ee form-select bneder" id="reseau_electrique" name="reseau_electrique" style="height: 33px;">
                        <option selected=""> - </option>
                        <option value="1">1 - Oui</option>
                        <option value="2">2 - Non</option>
                    </select>
                </div>
            </div>
        </div>
        <div class="col"></div>
    </div>
    <br>
    <div class="row">
        <div class="col-8">
            <div class="input-group input-group-sm">
                <span class="input-group-text" id="basic-addon3">شبكة الهاتف</span>
                <select class="select-ee bneder" id="reseau_telephonique" name="reseau_telephonique" >
                    <option selected=""> - </option>
                    <option value="1">1 - Oui</option>
                    <option value="2">2 - Non</option>
                </select>
            </div>
        </div>
        <div class="col">
            <div class="input-group input-group-sm">
                <span class="input-group-text" id="basic-addon3">إذا نعم</span>
                <select class="select-ee bneder" id="reseau_telephonique_si_oui" name="reseau_telephonique_si_oui">
                    <option selected="">-</option>
                    <option value="1">1 - Mobile</option>
                    <option value="2">2 - Fixe</option>
                </select>
            </div>
        </div>
    </div>
    <br>
    <div class="input-group input-group-sm">
        <span class="input-group-text" id="basic-addon3">شبكة الإنترنت</span>
        <select class="select-ee bneder" id="reseau_internet" name="reseau_internet">
            <option selected=""> - </option>
            <option value="1">1 - Oui</option>
            <option value="2">2 - Non</option>
        </select>
    </div>
    <br>
    <div class="input-group input-group-sm">
        <span class="input-group-text" id="basic-addon3">إذا نعم هل تستخدم الإنترنت لتلبية الإحتياجات الفلاحية؟</span>
        <select class="select-ee bneder" id="reseau_internet_si_oui" name="reseau_internet_si_oui">
            <option selected="">-</option>
            <option value="1">1 - Oui</option>
            <option value="2">2 - Non</option>
        </select>
    </div>
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

</div>

<br/>
<div class="card" style="font-size: 12px;">
               <div class="card-header">
                  الوضع القانوني للأرض
                  <br>
                  Statut juridique des terres 
               </div>
               <div class="card-body">

                  <div style="margin-top: 62px;height: 34px;width: 90%;background-color: white;position: absolute;z-index: 99;">
                        </div>


                  <div class="row" style="text-align: center;">
                    <div class="col-3">أصل الأرض <br> Origine des terres</div>
                     <div class="col-4">طريقة استغلال الأراضي <br> Mode d’exploitation des terres</div>
                     <div class="col" style="padding-left: 33px;">المساحة(هكتار) <br> Superficie(Hectare)</div>
                     <div class="col">المساحة(ار) <br> Superficie(Are)</div>
                     <div class="col"></div>
                  </div>
                  <hr>


                  <div id="formContainer">



                     <div style="margin-bottom: 5px;" class="row">
                        <div class="col">
                        <div class="input-group input-group-sm">

                            <select  class="form-select" id="origine_des_terres" name="origine_des_terres" value="1">
                                <option selected="">-</option>
                                <option value="1">1 - Melk personnel titré ملك شخصي موثق</option>
                                <option value="2">2 - Melk personnel non titré ملك شخصي غير موثق</option>
                                <option value="3">3 - Melk en indivision titré ملك مشترك موثق</option>
                                <option value="4">4 - Melk en indivision non titré ملك مشترك غير موثق
                                </option>
                                <option value="5">5 - Domaine public ملكية عامة للدولة</option>
                                <option value="6">6 - Domaine privé de l'état ملكية خاصة للدولة</option>
                                <option value="7">7 - Wakf privé وقف خاص</option>
                                <option value="8">8 - Wakf public وقف عام</option>
                                <option value="9">9 - Inconnu ملك مجهول</option>
                            </select>

                            </div>
                        </div>

                        <div class="col">


                        <div class="input-group input-group-sm">

                                <select  class="form-select statut_juridique_s" id="status_juridique" name="status_juridique" value="1">
                                <option selected="">-</option>
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
                                <option value="13">13- Inconnu غير معروف</option>
                                </select>
                                <div class="big-space"></div>
                         </div>


                         
                           
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
                                    <input  id="superfecie_sj" name="superfecie_sj"   type="number" max="9999" class="form-control statut_juridique_s" oninput="this.value = Math.max(0, Math.min(9999, this.value));" value="" >
                            
                                   
                                    <div class="big-space"></div>
                                    <div class="small-space"></div>
                                    
                                    <input  id="superfecie_sj_are" name="superfecie_sj_are" type="number" max="99" class="form-control statut_juridique_s" oninput="this.value = Math.max(0, Math.min(99, this.value));" value="">
                             

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

                 </script>
                 
                 
               </div>
            </div>
 </div>    


 <br/>






 <div class="input-group input-group-sm">
               <span class="input-group-text" id="basic-addon3">
               le Référence - مرجع مسح األراضي
               </span>
               <div class="line-edits-container" id="cn13">
                 <input class="select-ee bneder" type="number"  id="reference_cadastrale" name="reference_cadastrale" value="">
               </div>
 </div>
 <br>

<div class="input-group input-group-sm">
   <span class="input-group-text" id="basic-addon3">إذا كانت المستثمرة م.ف.ف أو م.ف.ج هل يملك عقد
   امتياز؟
   <br>
   Si l'exploitation est une EAI ou une EAC,posséde -il un acte de
   concession
   ?
   </span>
   <select class="select-ee bneder" id="si_exploi_eai_eac" name="si_exploi_eai_eac">
      <option selected="">-</option>
      <option value="1">1 - Oui - نعم</option>
      <option value="2"> Non - لا</option>
   </select>
</div>

<br>


        <div class="input-group input-group-sm">
               <span class="input-group-text" id="basic-addon3">
               إذا كانت م.ف.ج 
             <br>  Si EAC

               
               Nombre des exploitants

               </span>
               <div class="line-edits-container" id="cn13">
               <input class="select-ee bneder" type="number"  id="si_exploi_eac" name="si_exploi_eac"  value="">
               </div>
            </div>

            <br>

            <div class="input-group input-group-sm">
               <span class="input-group-text" id="basic-addon3">
             المساحة

               <br>
               Superficie
               </span>
               <div class="line-edits-container" id="cn13">
               <input class="select-ee bneder" type="number" id="exploi_superficie_hec" name="exploi_superficie_hec" value="">
               <input class="select-ee bneder" type="number"  id="exploi_superficie_are" name="exploi_superficie_are" value="">
               </div>
            </div>
           

<br/>
<br/>























            <div style="border-top: 3px solid red;"></div>
            <h5>IV-Superficie de l'exploitation مساحة المستثمرة</h5>
            <h6>(Campagne agricole الموسم الفلاحي 2023-2024)</h6>



            <div class="container mt-3">
   <div class="row" style="text-align: center;">
      <div class="col-4"></div>
      <div class="col">
         (المساحة Superficie) جافة (هكتار) - En sec (Hectare)
      </div>
      <div class="col">
         (المساحة Superficie) (هكتار) مروية - En irriguée (Hectare)
      </div>
   </div>
   <br>
   <div class="row" style="text-align: center;">
      <div class="col-4"></div>
      <div class="col">
         <div class="row">
            <div class="col">
               Hectare - هكتار
            </div>
            <div class="col">
               Are - آر
            </div>
         </div>
      </div>
      <div class="col">
         <div class="row">
            <div class="col">
               Hectare - هكتار
            </div>
            <div class="col">
               Are - آر
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
               <b>Cultures herbacées</b><br>
               محاصيل عشبية نباتية
            </td>
            <td>
               <div class="input-group input-group-sm">
                
               <div class="small-space"></div>
                     <input id="in14" class="bneder form-control" id="cultures_herbacees_1" name="cultures_herbacees_1" type="number" max="9999"  oninput="this.value = Math.max(0, Math.min(9999, this.value));" value="" >
                
                 <div class="small-space"></div>
                     <span style="width: 32px;"></span>
                 
                     
                     <input id="in15" class="bneder form-control" name="cultures_herbacees_2"  type="number" max="99"  oninput="this.value = Math.max(0, Math.min(99, this.value));" value="">
                     <div class="small-space"></div>
               </div>
            </td>
            <td>
               <div class="input-group input-group-sm">
               <div class="small-space"></div>
                     <input id="in16" class="bneder form-control" name="cultures_herbacees_3" type="number" max="9999"  oninput="this.value = Math.max(0, Math.min(9999, this.value));" value="">
                     <div class="mid-space"></div>
                  <span style="width: 32px;"></span>
             
                     
                     
                     <input id="in200" class="bneder form-control" name="cultures_herbacees_4" type="number" max="99"  oninput="this.value = Math.max(0, Math.min(99, this.value));" value="">
                     <div class="small-space"></div>
               </div>
            </td>
         </tr>
         <!-- Terres au repos (jachères) -->
         <tr>
            <td style="width: 233px;">
               <b>Terres au repos (jachères)</b><br>
               أراضي مستريحة (البور)
            </td>
            <td>
               <div class="input-group input-group-sm">
                
                     
                     
               <div class="small-space"></div>
                     
                     <input id="in18" class="bneder form-control" name="terres_au_repos_jacheres_1" type="number" max="9999"  oninput="this.value = Math.max(0, Math.min(9999, this.value));" value="">
                  
                  <span style="width: 32px;"></span>
                  <div class="small-space"></div>
                     
                     
                     <input id="in205" class="bneder form-control" name="terres_au_repos_jacheres_2" type="number" max="99"  oninput="this.value = Math.max(0, Math.min(99, this.value));" value="">
                     <div class="small-space"></div>
               </div>
            </td>
            <td>
               <div class="input-group input-group-sm">
                
                     
               <div class="small-space"></div>
                     
                     
                     <input id="in201" class="bneder form-control" name="terres_au_repos_jacheres_3" type="number" max="9999"  oninput="this.value = Math.max(0, Math.min(9999, this.value));" value="">
                     <div class="mid-space"></div>
                  <span style="width: 32px;"></span>
                
                      
                     
                     <input id="in203" class="bneder form-control" name="terres_au_repos_jacheres_4" type="number" max="99"  oninput="this.value = Math.max(0, Math.min(99, this.value));" value="">
                     <div class="small-space"></div>
               </div>
            </td>
         </tr>
         <tr>
            <td style="width: 233px;">
               <b>Plantations (arboriculture)</b><br>
               مغروسات (أشجار)
            </td>
            <td>
               <div class="input-group input-group-sm">
                  
                     
                     
               <div class="small-space"></div>
                     
                     <input id="in17" class="bneder form-control" name="plantations_arboriculture_1"  type="number" max="9999"  oninput="this.value = Math.max(0, Math.min(9999, this.value));" value="">
                 

                  <span style="width: 32px;"></span>
                 
                     
                     <div class="small-space"></div>
                     <input id="in204" class="bneder form-control" name="plantations_arboriculture_2"  type="number" max="99"  oninput="this.value = Math.max(0, Math.min(99, this.value));" value="">
                     <div class="small-space"></div>
               </div>
            </td>
            <td>
               <div class="input-group input-group-sm">
                
                     
                     
                     <div class="small-space"></div>
                     
                     <input id="in19" class="bneder form-control" name="plantations_arboriculture_3"  type="number" max="9999"  oninput="this.value = Math.max(0, Math.min(9999, this.value));" value="">
                     <div class="mid-space"></div>
                  <span style="width: 32px;"></span>
                 
                     
                     
                     <input id="in20" class="bneder form-control" name="plantations_arboriculture_4"  type="number" max="99"  oninput="this.value = Math.max(0, Math.min(99, this.value));" value="">
                     <div class="small-space"></div>
               </div>
            </td>
         </tr>
         <!-- Prairies naturelles -->
         <tr>
            <td style="width: 233px;">
               <b>Prairies naturelles</b><br>
               مروج طبيعية
            </td>
            <td>
               <div class="input-group input-group-sm">
               
                     
                     
               <div class="small-space"></div>
                     
                     <input id="in21" class="bneder form-control" name="prairies_naturelles_1" type="number" max="9999"  oninput="this.value = Math.max(0, Math.min(9999, this.value));" value="">
                     <div class="small-space"></div>
                  <span style="width: 32px;"></span>
               
                     
                     
                     <input id="in22" class="bneder form-control" name="prairies_naturelles_2" type="number" max="99"  oninput="this.value = Math.max(0, Math.min(999, this.value));" value="">
                     <div class="small-space"></div>
               </div>
            </td>
            <td>
               <div class="input-group input-group-sm">
              
               <div class="small-space"></div>
                     
                     
                     
                     <input id="in23" class="bneder form-control" name="prairies_naturelles_3" type="number" max="9999"  oninput="this.value = Math.max(0, Math.min(9999, this.value));" value="">
                     <div class="mid-space"></div>
                  <span style="width: 32px;"></span>
            
                     
                     
                     <input id="in24" class="bneder form-control" name="prairies_naturelles_4" type="number" max="99"  oninput="this.value = Math.max(0, Math.min(99, this.value));" value="">
                     <div class="small-space"></div>
                 
               </div>
            </td>
         </tr>
         <!-- Superficie agricole utile (SAU) -->
         <tr>
            <td style="width: 233px;">
               <b>Superficie agricole utile (SAU)</b><br>
               المساحة الفلاحية المستخدَمَة
            </td>
            <td>
               <div class="input-group input-group-sm">
               
               <div class="small-space"></div>
                     <input class="bneder form-control"  name="superficie_agricole_utile_sau_1" readonly="" type="number"  style="max-width: 80px;" value="">
                     
                     <div class="small-space"></div>
                
                  <span style="width: 32px;"></span>
                 
                     
                     <input id="in26" class="bneder form-control" name="superficie_agricole_utile_sau_2" readonly="" type="number"  style="max-width: 60px;" value="">
                     <div class="small-space"></div>
               </div>
            </td>
            <td>
               <div class="input-group input-group-sm">
               <div class="small-space"></div>
                     
                     <input id="in27" class="bneder form-control" name="superficie_agricole_utile_sau_3" readonly="" type="number"  style="max-width: 80px;" value="">
                     <div class="mid-space"></div>
                  <span style="width: 32px;"></span>
            
                     
                     <input id="in28" class="bneder form-control" name="superficie_agricole_utile_sau_4" readonly="" type="number" style="max-width: 60px;" value="">
                 <div class="small-space"></div>
               </div>
            </td>
         </tr>
         <!-- Pacages et parcours -->
         <tr>
            <td style="width: 233px;">
               <b>Pacages et parcours</b><br>
               المراعي
            </td>
            <td>
               <div class="input-group input-group-sm">

               <div class="small-space"></div>
                     
                     
                     
                     <input id="in29" class="bneder form-control" name="pacages_et_parcours_1" type="number" max="9999"  oninput="this.value = Math.max(0, Math.min(9999, this.value));" value="">
                     <div class="small-space"></div>
                  <span style="width: 32px;"></span>
                 
                     
                     
                     <input id="in30" class="bneder form-control" name="pacages_et_parcours_2" type="number" max="99"  oninput="this.value = Math.max(0, Math.min(99, this.value));" value="">
                     <div class="small-space"></div>
               </div>
            </td>
            <td></td>
         </tr>
         <!-- Surfaces improductives -->
         <tr>
            <td style="width: 233px;">
               <b>Surfaces improductives</b><br>
               مساحات غير منتجة
            </td>
            <td>
               <div class="input-group input-group-sm">
                
                     
               <div class="small-space"></div>
                     
                     
                     
                     <input id="in31" class="form-control bneder" name="surfaces_improductives_1" type="number" max="9999"  oninput="this.value = Math.max(0, Math.min(9999, this.value));" value="">
                     <div class="small-space"></div>
                  <span style="width: 32px;"></span>
            
                     
                     
                     <input id="in32" class="form-control bneder" name="surfaces_improductives_2" type="number" max="99"  oninput="this.value = Math.max(0, Math.min(99, this.value));" value="">
                     <div class="small-space"></div>
               </div>
            </td>
            <td></td>
         </tr>
         <!-- Superficie agricole totale (SAT) -->
         <tr>
            <td style="width: 233px;">
               <b>Superficie agricole totale (SAT)</b><br>
               المساحة الفلاحية الإجمالية
            </td>
            <td>
               <div class="input-group input-group-sm">
               <div class="small-space"></div>
                     
                     <input id="in33" class="bneder form-control" name="superficie_agricole_totale_sat_1" readonly="" type="number"  style="max-width: 80px;" value="">
                     <div class="small-space"></div>
                  <span style="width: 32px;"></span>
                 
                     
                     <input id="in34" class="bneder form-control" name="superficie_agricole_totale_sat_2" readonly="" type="number"  style="max-width: 60px;" value="">
                     <div class="small-space"></div>
               </div>
            </td>
            <td></td>
         </tr>
         <tr>
            <td style="width: 233px;">
               <b>Terres forestières (bois, forêts, maquis, vides labourables)
               </b><br>
               أراضي الغابات (غابات,أدغال,فراغات للحرث)
            </td>
            <td>
               <div class="input-group input-group-sm">
               
                     
                  
               <div class="small-space"></div>
                     <input id="in35" class="bneder form-control" name="terres_forestieres_bois_forets_maquis_vides_labourables_1" type="number"  style="max-width: 80px;" value="">
                     <div class="small-space"></div>
                  <span style="width: 32px;"></span>
               
                     
                     
                     <input id="in36" class="bneder form-control" name="terres_forestieres_bois_forets_maquis_vides_labourables_2" type="number"  style="max-width: 60px;" value="">
                     <div class="small-space"></div>
               </div>
            </td>
            <td></td>
         </tr>
         <tr>
            <td style="width: 233px;">
               <b>Surface totale (ST) المساحة الإجمالية
               </b>
            </td>
            <td>
               <div class="input-group input-group-sm">
            
               <div class="small-space"></div>

                     <input id="in37" class="bneder form-control" name="surface_totale_st_1" readonly="" type="number"  style="max-width: 80px;" value="">
                     <div class="small-space"></div>

                  <span style="width: 32px;"></span>
                
                     
                     <input id="in38" class="bneder form-control" name="surface_totale_st_2" readonly="" type="number"  style="max-width: 60px;" value="">
                     <div class="small-space"></div>

               
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
                           <span class="input-group-text" id="basic-addon3">
                           هل المستثمرة مكونة من قطعة واحدة؟ <br>
                           L'exploitation est elle d'un seul bloc ?
                           </span>
                           <select class="select-ee bneder" id="exploit_est_un_bloc" name="exploit_est_un_bloc">
                              <option selected=""> - </option>
                              <option value="1">1 - Oui - نعم</option>
                              <option value="2"> Non - لا</option>
                           </select>
                        </div>
                     </div>
                     <div class="col">
                        <div class="input-group input-group-sm">
                           <span class="input-group-text" id="basic-addon3">
                           إذا كان لا، ما هوعدد القطع؟
                           <br>
                           Si non, quel est le nombre de blocs ?
                           </span>
                           <div class="line-edits-container" id="cn39">
                           
                              <input class="select-ee bneder" id="exploit_est_un_bloc_oui" name="exploit_est_un_bloc_oui" type="text" >
                           </div>
                        </div>
                     </div>

                     <script>
                        var select3 = document.getElementsByName('exploit_est_un_bloc')[0];

                        var dd1 = document.getElementById('dd1');
                        var dd2 = document.getElementById('dd2');
                     
                        select3.addEventListener('input', function () {
                            updateSelect3();
                        });
                     
                        function updateSelect3() {
                            var selectedValue = select3.value;
                            dd1.disabled = (selectedValue != '2');
                            dd2.disabled = (selectedValue != '2');
                        }
                     </script>


                  </div>
               </div>
            </div>

<br/>



<div class="card" style="font-size: 12px;">
               <div class="card-body">
                  <div class="input-group input-group-sm">
                     <span class="input-group-text" id="basic-addon3">
                     هل هناك سكان غير شرعيين في المستثمرة؟
                     <br>
                     Existe t’il des indus occupants sur votre exploitation ?
                     </span>
                     <select class="select-ee" id="exploit_indus_sur_exploitation" name="exploit_indus_sur_exploitation">
                        <option selected=""> - </option>
                        <option value="1">1 - Oui - نعم</option>
                        <option value="2"> Non - لا</option>
                     </select>
                  </div>
                  <br>
                  <div class="input-group input-group-sm">
                     <span class="input-group-text" id="basic-addon3">
                     إذا كان نعم، ما هوعدد الأسر؟
                     <br>
                     Si oui, quel est le nombre nombre de ménages ?
                     </span>
                     <div class="line-edits-container" id="cn40">
                     <!-- name="exploit_indus_sur_exploitation_oui" -->
                        <input  class="select-ee bneder" id="exploit_indus_sur_exploitation_oui"  type="text">
                     </div>
                  </div>
               </div>
            </div>
            <script>
               var select4 = document.getElementsByName('exploit_indus_sur_exploitation')[0];
               
               var dd11 = document.getElementById('dd11');
               var dd22 = document.getElementById('dd22');
               
               select4.addEventListener('input', function () {
                   updateSelect4();
               });
               
               function updateSelect4() {
                   var selectedValue = select4.value;
                   dd11.disabled = (selectedValue != '1');
                   dd22.disabled = (selectedValue != '1');
               }
           </script>

           <br/>


           <div class="card" style="font-size: 12px;">
               <div class="card-header" style="text-align: center;">
                  ما هي مصادر الطاقة المستخدمة في المستثمرة؟ - Quelles sont les sources d'énergie utilisées dans
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



            <div style="border-top: 3px solid red;"></div>
            <h5>V-Utilisation du sol إستخدام الأراضي</h5>
            <h6>
               (Campagne agricole الموسم الفلاحي 2023-2024)

            </h6>

               <br/>

            






















 <!-- TODO  -->
               <div class="row" style="text-align: center;">

               <div style="margin-top: 59px;height: 40px;width: 696px;background-color: white;position: absolute;z-index: 99;">
               </div>

               <div class="col-4">Code culture - رقم الزراعة</div>
               <div class="col-3">
                  (المساحة Superficie) <br> جافة (هكتار) - En sec (Hectare)
               </div>
               <div class="col-2">
                  (المساحة Superficie) <br> (هكتار) مروية - En irriguée (Hectare)
               </div>
               <div class="col-2">
                  مقحمة <br> En intercalaire
               </div>
               <div class="col-1">
               </div>
            </div>

            <br/>





            <div id="formContainer2">
               <div class="row" style="margin-bottom: 10px;">

                           <div class="col-4" style="margin-right: 20px;">
                              <div class="input-group input-group-sm">
                                 <select  class="form-select code_culture_s" id="code_culture" name="code_culture">
                                    <option selected=""> - </option>
                                    <option  style="font-weight: 700;">Grandes cultures - المحاصيل الكبرى</option>
                                    <option value="1">1 - Blé dur - قمح صلب</option>
                                    <option value="2">2 - Blétendre - قمح لين</option>
                                    <option value="3">3 - Orge - شعير</option>
                                    <option value="4">4 - Avoine - خرطال</option>
                                    <option value="5">5 - Sorgho - الذرة البيضاء</option>
                                    <option value="6">6 - Maïsgrain - حبوب الذرة</option>
                                    <option value="7"> 7 - Autrescéréales - الحبوب الأخرى</option>
                                    <option disabled="" style="font-weight: 700;">Légumessecs - البقول الجافة</option>
                                    <option value="8">8 - Lentilles- عدس</option>
                                    <option value="9">9 - ois-chiche - حمص</option>
                                    <option value="10">10 - Poissec -بازلاء مجففة</option>
                                    <option value="11">11 - Haricotsec- الفاصوليا الجافة</option>
                                    <option value="12">12 - Fèvesèche- فول جاف</option>
                                    <option value="13">13 - Autres-أخرى</option>
                                    <option disabled="" style="font-weight: 700;"> Fourrages - الأعلاف</option>
                                    <option value="14">14 - VesceetVesce-avoine - البيقية والخرطال</option>
                                    <option value="15">15 - Luzerne - فصة</option>
                                    <option value="16">16 - Maïsfourrager - الذرة العلفية</option>
                                    <option value="17">17 - Autresfourrages - أعلاف أخرى</option>
                                    <option disabled="" style="font-weight: 700;"> Maraîchage - الخضروات</option>
                                    <option value="18">18 - Pommedeterre - البطاطا</option>
                                    <option value="19">19 - Oignonsecet vert - بصل جاف وأخضر</option>
                                    <option value="20">20 - Ail -ثوم</option>
                                    <option value="21">21 - Tomate-طماطم</option>
                                    <option value="22">22 - Piment-فلفل حار</option>
                                    <option value="23">23 - Poivron(frais et séché) - فلفل حلو</option>
                                    <option value="24">24 - Carotte-جزر</option>
                                    <option value="25">25 - Courgette -كوسه</option>
                                    <option value="26">26 - Navet-اللفت</option>
                                    <option value="27">27 - Concombre -خيار</option>
                                    <option value="28">28 - ChouetChou-fleur - الملفوف وكرمب</option>
                                    <option value="29">29 - Artichaut -قرنون</option>
                                    <option value="30">30 - Betterave -الشمندر</option>
                                    <option value="31">31 - Fèveverte- فول أخضر</option>
                                    <option value="32">32 - Haricotvert - فاصوليا خضراء</option>
                                    <option value="33">33 - Petitpois- البازلاء</option>
                                    <option value="34">34 - Fraises-فراولة</option>
                                    <option value="35">35 - Salade(laitue) - خس</option>
                                    <option value="36">36 - Melon - بطيخ</option>
                                    <option value="37">37 - Pastéque - دلاع</option>
                                    <option value="38">38 - Autres-أخرى</option>
                                    <option disabled="" style="font-weight: 700;"> Cultures industrielles - المحاصيل الصناعية</option>
                                    <option value="39">39 - Tomateindustrielle - الطماطم الصناعية</option>
                                    <option value="40">40 - Betterave àsucre - شمندر سكري</option>
                                    <option value="41">41 - Oléagineux(arachide, soja, maïs,...) - بذور زيتية(فولسوداني,صويا,ذرة)</option>
                                    <option value="42">42 - Tabac-التبغ</option>
                                    <option value="43">43 - Autres-أخرى</option>
                                    <option disabled="" style="font-weight: 700;"> Arboriculture - الأشجار</option>
                                    <option value="44">44 - Oranger-أشجار البرتقال</option>
                                    <option value="45">45 - Citronnier-أشجار الليمون</option>
                                    <option value="46">46 - Mandarinier-أشجار المندرين</option>
                                    <option value="47">47 - Clémentinier-أشجار الكليمنتين</option>
                                    <option value="48">48 - Pamplemoussier-أشجار اليمون الهندي</option>
                                    <option value="49">49 - Abricotier-أشجار المشمش</option>
                                    <option value="50">50 - Pêchier et nectarinier-أشجار الخوخ والنكتارين</option>
                                    <option value="51">51 - Cognassier-أشجار السفرجل</option>
                                    <option value="52">52 - Poirier-أشجار اإلجاص</option>
                                    <option value="53">53 - Pommier-أشجار التفاح</option>
                                    <option value="54">54 - Prunier-أشجار البرقوق</option>
                                    <option value="55">55 - Olivier de table-أشجار زيتون "زيتون المائدة"</option>
                                    <option value="56">56 - Olivier à huile-أشجار الزيتون "الزيت"</option>
                                    <option value="57">57 - Figuier-أشجار التين</option>
                                    <option value="58">58 - Amandier-أشجار اللوز</option>
                                    <option value="59">59 - Noix-أشجار الجوز</option>
                                    <option value="60">60 - Cerisier-أشجار الكرز</option>
                                    <option value="61">61 - Palmier dattier (Deglet Nour)-أشجار النخيل "دڨلة نور"</option>
                                    <option value="62">62 - Palmier dattier (Ghars)-أشجار النخيل "غرس"</option>
                                    <option value="63">63 - Palmier dattier (autres)-أشجار النخيل "أخرى"</option>
                                    <option value="64">64 - Vigne de table-أشجار العنب األكل</option>
                                    <option value="65">65 - Vigne de cuve-أشجار عنب العصير</option>
                                    <option value="66">66 - Grenadier-أشجار الرمان</option>
                                    <option value="67">67 - Arganier-أشجار األرقان</option>
                                    <option value="68">68 - Autres arbres-أشجار أخرى</option>

                                    <option disabled="" style="font-weight: 700;"> Divers - محاصيل مختلفة</option>
                                    <option value="65">65 - Herbes et épices - الأعشاب والتوابل</option>
                                    <option value="66">66 - Plantes ornementales, aromatiques .. - نباتات الزينة/ العطرية/ الطبية</option>
                                    <option value="67">67 - Pépinières fruitières - مشاتل الفاكهة</option>
                                    <option value="68">68 - Pépinières maraichères - مشاتل الخضار</option>
                                    <option value="69">69 - Pépinières forestières - مشاتل الغابات</option>
                                    <option value="70">70 - Autres Pépinières - مشاتل أخرى</option>
                                    <option value="71">71 - Autres Cultures - محاصيل أخرى</option> 

                                 </select>
                              </div>
                           </div>
                           <div class="col">
                              <div class="row">
                                 <div class="col-5">
                                 
                                       
                                       
                                    
                                 
                                       <input bigtb id="superficie_hec" name="superficie_hec" type="number" max="999" class="form-control code_culture_s" oninput="this.value = Math.max(0, Math.min(999, this.value));" value="">
                                 
                                 </div>
                                 <div class="col">
                                 
                                    
                                       
                                       <input id="superficie_are" name="superficie_are"  type="number" max="999" class="form-control code_culture_s" oninput="this.value = Math.max(0, Math.min(999, this.value));" value="" >

                                 
                                 </div>
                                 <div class="col">
                                 
                                 
                                       
                                       <input id="en_intercalaire"  name="en_intercalaire" type="number" max="99" class="form-control code_culture_s" oninput="this.value = Math.max(0, Math.min(99, this.value));" value="">

                                    
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
           </script>
           <!-- TODO -->

















           <div class="row">
               <div class="col-7">
                  <div class="card" style="font-size: 12px;">
                     <div class="card-header" style="text-align: center;">عدد الأشجار المتفرقة - Nombre d'arbres épars
                     </div>






                     <div class="card-body">
                        <div class="row">
                            <div style="padding-left: 0px;" class="col">
                                <div class="input-group input-group-sm">
                                    <span class="input-group-text" id="basic-addon3">
                                        أشجار الزيتون <br> Oliviers
                                    </span>
                                    <div class="line-edits-container" id="cn46">
                                        <input class="line-edit bneder" id="oliviers" name="oliviers">
                                    </div>
                                </div>
                                <br>
                                <!-- Removed the similar input fields -->
                                <!-- Continue with the other tree types -->
                                <!-- Start of input group -->
                                <div class="input-group input-group-sm">
                                    <span class="input-group-text" id="basic-addon3">
                                        أشجار التين <br> Figuiers
                                    </span>
                                    <div class="line-edits-container" id="cn47">
                                        <input class="line-edit bneder" id="figuiers" name="figuiers">
                                    </div>
                                </div>
                                <!-- End of input group -->
                                <!-- Start of input group -->
                                <div class="input-group input-group-sm">
                                    <span class="input-group-text" id="basic-addon3">
                                        أشجار ذات نوات <br> Noyaux-Pépins
                                    </span>
                                    <div class="line-edits-container" id="cn48">
                                        <input class="line-edit bneder" id="noyaux_pepins" name="noyaux_pepins">
                                    </div>
                                </div>
                                <!-- End of input group -->
                                <!-- Start of input group -->
                                <div class="input-group input-group-sm">
                                    <span class="input-group-text" id="basic-addon3">
                                        أشجار العنب <br> Vigne
                                    </span>
                                    <div class="line-edits-container" id="cn49">
                                        <input class="line-edit bneder" id="vigne" name="vigne">
                                    </div>
                                </div>
                                <!-- End of input group -->
                                <!-- Start of input group -->
                                <div class="input-group input-group-sm">
                                    <span class="input-group-text" id="basic-addon3">
                                        أشجار اللوز <br> Amandiers
                                    </span>
                                    <div class="line-edits-container" id="cn50">
                                        <input class="line-edit bneder" id="amandiers" name="amandiers">
                                    </div>
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
                                    <div class="line-edits-container" id="cn51">
                                        <input class="line-edit bneder" id="grenadiers" name="grenadiers">
                                    </div>
                                </div>
                                <!-- End of input group -->
                                <!-- Start of input group -->
                                <div class="input-group input-group-sm">
                                    <span class="input-group-text" id="basic-addon3">
                                        أشجار السفرجل<br> Cognassiers
                                    </span>
                                    <div class="line-edits-container" id="cn52">
                                        <input class="line-edit bneder" id="cognassiers" name="cognassiers">
                                    </div>
                                </div>
                                <!-- End of input group -->
                                <!-- Start of input group -->
                                <div class="input-group input-group-sm">
                                    <span style="width: 100px;" class="input-group-text" id="basic-addon3">
                                        أشجار النخيل <br> Palmiers dattiers
                                    </span>
                                    <div class="line-edits-container" id="cn53">
                                        <input class="line-edit bneder" id="palmiers_dattiers" name="palmiers_dattiers">
                                    </div>
                                </div>
                                <!-- End of input group -->
                                <!-- Start of input group -->
                                <div class="input-group input-group-sm">
                                    <span class="input-group-text" id="basic-addon3">
                                        أشجار الخروب <br> Caroubier
                                    </span>
                                    <div class="line-edits-container" id="cn54">
                                        <input class="line-edit bneder" id="caroubier" name="caroubier">
                                    </div>
                                </div>
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
                           <span class="input-group-text" id="basic-addon3" style="width: 267px;">
                           هل تمارس الزراعة البيولوجية في المستثمرة؟
                           <br>
                           Pratiquez-vous l'agriculture biologique?</span>
                           <select class="select-ee bneder" id="pratiquez_vous_lagriculture_biologique" name="pratiquez_vous_lagriculture_biologique" style="width: 268px; height: 28px;">
                              <option selected=""> - </option>
                              <option value="1">1 - Oui - نعم</option>
                              <option value="2"> Non - لا</option>
                           </select>
                        </div>
                        <br>
                        <div class="input-group input-group-sm">
                           <span class="input-group-text" id="basic-addon3">إذا نعم, هل
                           لديك
                           شهادة إعتماد؟
                           <br>
                           Si oui, Avez-vous un certificat ?</span>
                           <select disabled="" class="select-ee bneder" id="si_oui_avez_vous_un_certificat" name="si_oui_avez_vous_un_certificat" style="width: 183px;height: 28px;">
                              <option selected=""> - </option>
                              <option value="1">1 - Oui - نعم</option>
                              <option value="2"> Non - لا</option>
                           </select>
                        </div>
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


                  <br>
                  <div class="input-group input-group-sm">
                     <span class="input-group-text" id="basic-addon3" style="width: 301;">
                     هل تمارس تربية المائيات المدمجة مع الفلاحة؟
                     <br>
                     Pratiquez-vous l'aquaculture intégrée à l'agriculture ?
                     </span>
                     <select class="form-select bneder" id="pratiquez_vous_laquaculture_integree_a_lagriculture" name="pratiquez_vous_laquaculture_integree_a_lagriculture">
                        <option selected=""> - </option>
                        <option value="1">1 - Oui - نعم</option>
                        <option value="2"> Non - لا</option>
                     </select>
                  </div>
                  <br>
                  <div class="input-group input-group-sm">
                     <span class="input-group-text" id="basic-addon3">هل تمارس تربية الحلزون
                     ؟
                     <br>
                     Pratiquez-vous l'Héliciculture?</span>
                     <select class="select-ee bneder" id="pratiquez_vous_l_heliciculture" name="pratiquez_vous_l_heliciculture">
                        <option selected=""> - </option>
                        <option value="1">1 - Oui - نعم</option>
                        <option value="2"> Non - لا</option>
                     </select>
                  </div>
                  <br>
                  <div class="input-group input-group-sm">
                     <span class="input-group-text" id="basic-addon3">هل تمارس زراعة
                     الفطريات ؟
                     <br>
                     Pratiquez-vous la Myciculture ?</span>
                     <select class="select-ee bneder" id="pratiquez_vous_la_myciculture" name="pratiquez_vous_la_myciculture">
                        <option selected=""> - </option>
                        <option value="1">1 - Oui - نعم</option>
                        <option value="2"> Non - لا</option>
                     </select>
                  </div>
                  <br>
               </div>
            </div>
<br/>

            <div class="card" style="font-size: 12px;">
               <div class="card-body">
                  <div class="input-group input-group-sm">
                     <span class="input-group-text" id="basic-addon3">
                     هل تمارس الزراعة التعاقدية؟<br>
                     Pratiquez-vous une agriculture conventionnée?
                     </span>
                     <select class="select-ee bneder" id="pratiquez_vous_une_agriculture_conventionnee" name="pratiquez_vous_une_agriculture_conventionnee">
                        <option selected=""> - </option>
                        <option value="1">1 - Oui - نعم</option>
                        <option value="2"> Non - لا</option>
                     </select>
                  </div>
                  <br>
                  <div id="card1" class="card" style="font-size: 12px;">
                     <div class="card-header" style="text-align: center;">إذا كان نعم, أي شعبة ؟ - Si oui,
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




            <div style="border-top: 3px solid red;"></div>




            <div id="chapt_animals">
            <h5>VI-Cheptel المواشي</h5>
            <h6>(Campagne agricole الموسم الفلاحي 2023-2024)</h6>
            <br>
            <br>



            <div class="card" style="font-size: 12px;">
                <div class="card-body">
                   <div class="row">
                      <div class="col">
                         <div class="err" id="chapt_bovins_error"></div>
                         <div class="input-group input-group-sm">
                            <span class="input-group-text" id="chapt_basic-addon3" style="width: 152px">
                            الأبقار
                            <br> Bovins
                            </span>
                            <div class="line-edits-container" id="chapt_cn56">
                               <input class="line-edit bneder" id="chapt_bovins" name="chapt_bovins">
                            </div>
                         </div>
                      </div>
                      <div class="col">
                         <div class="input-group input-group-sm">
                            <span class="input-group-text" id="chapt_basic-addon3">
                            منها الأبقار الحلوب المتطورة
                            <br> Dont vaches laitiéres BLM
                            </span>
                            <div class="line-edits-container" id="chapt_cn57">
                               <input class="line-edit bneder" id="chapt_dont_vaches_laitieres_blm" name="chapt_dont_vaches_laitieres_blm" >
                            </div>
                         </div>
                      </div>
                   </div>
                   <br>
                   <div class="row">
                      <div class="col">
                         <div class="input-group input-group-sm">
                            <span class="input-group-text" id="chapt_basic-addon3">
                            منها الأبقار الحلوب المحسنة
                            <br> Dont vaches laitiéres BLA
                            </span>
                            <div class="line-edits-container" id="chapt_cn58">
                               <input class="line-edit bneder" id="chapt_dont_vaches_laitieres_bla" name="chapt_dont_vaches_laitieres_bla" >
                            </div>
                         </div>
                      </div>
                      <div class="col">
                         <div class="input-group input-group-sm">
                            <span class="input-group-text" id="chapt_basic-addon3" style="width: 155px;">
                            منها الأبقار الحلوب المحلية
                            <br> Dont vaches laitiéres BLL
                            </span>
                            <div class="line-edits-container" id="chapt_cn59">
                               <input class="line-edit bneder" id="chapt_dont_vaches_laitieres_bll" name="chapt_dont_vaches_laitieres_bll" >
                            </div>
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
                            <span class="input-group-text" id="chapt_basic-addon3" style="width: 81px;">
                            الأغنام<br>Ovins
                            </span>
                            <div class="line-edits-container" id="chapt_cn60">
                               <input class="line-edit bneder" id="chapt_ovins" name="chapt_ovins" >
                            </div>
                         </div>
                         <br>
                         <div class="input-group input-group-sm">
                            <span class="input-group-text" id="chapt_basic-addon3">
                            منها النعاج
                            <br>Dont brebis
                            </span>
                            <div class="line-edits-container" id="chapt_cn61">
                               <input class="line-edit bneder" id="chapt_dont_brebis" name="chapt_dont_brebis" >
                            </div>
                         </div>
                      </div>
                   </div>
                   <br>
                   <div class="card" style="font-size: 12px;">
                      <div class="card-body">
                         <div class="err" id="chapt_equins_error"></div>
                         <div class="input-group input-group-sm">
                            <span class="input-group-text" id="chapt_basic-addon3" style="width: 90px;">
                            الخيل
                            <br>Equins
                            </span>
                            <div class="line-edits-container" id="chapt_cn62">
                               <input class="line-edit bneder" id="chapt_equins" name="chapt_equins" >
                            </div>
                         </div>
                         <br>
                         <div class="input-group input-group-sm">
                            <span class="input-group-text" id="chapt_basic-addon3">
                            منها الفرس
                            <br>Dont juments
                            </span>
                            <div class="line-edits-container" id="chapt_cn63">
                               <input class="line-edit bneder" id="chapt_dont_juments" name="chapt_dont_juments" >
                            </div>
                         </div>
                      </div>
                   </div>
                </div>
                <div class="col">
                   <div class="card" style="font-size: 12px;">
                      <div class="card-body">
                         <div class="err" id="chapt_caprins_error"></div>
                         <div class="input-group input-group-sm">
                            <span class="input-group-text" id="chapt_basic-addon3" style="width: 88px;">
                            الماعز
                            <br> Caprins
                            </span>
                            <div class="line-edits-container" id="chapt_cn65">
                               <input class="line-edit bneder" id="chapt_caprins" name="chapt_caprins" >
                            </div>
                         </div>
                         <br>
                         <div class="input-group input-group-sm">
                            <span class="input-group-text" id="chapt_basic-addon3">
                            منها العنزات
                            <br> Dont chèvres
                            </span>
                            <div class="line-edits-container" id="chapt_cn66">
                               <input class="line-edit bneder" id="chapt_dont_chevres" name="chapt_dont_chevres" >
                            </div>
                         </div>
                      </div>
                   </div>
                   <br>
                   <div class="card" style="font-size: 12px;">
                      <div class="card-body">
                         <div class="err" id="chapt_camelins_error"></div>
                         <div class="input-group input-group-sm">
                            <span class="input-group-text" id="chapt_basic-addon3" style="width: 100px;">
                            الإبل
                            <br> Camelins
                            </span>
                            <div class="line-edits-container" id="chapt_cn67">
                               <input class="line-edit bneder" id="chapt_camelins" name="chapt_camelins" >
                            </div>
                         </div>
                         <br>
                         <div class="input-group input-group-sm">
                            <span class="input-group-text" id="chapt_basic-addon3">
                            منها النق
                            <br> Dont chamelles
                            </span>
                            <div class="line-edits-container" id="chapt_cn68">
                               <input class="line-edit bneder" id="chapt_dont_chamelles" name="chapt_dont_chamelles" >
                            </div>
                         </div>
                      </div>
                   </div>
                </div>
             </div>
             <br>
             <div class="row">
                <div class="col">
                   <div class="input-group input-group-sm">
                      <span class="input-group-text" id="chapt_basic-addon3">
                      البغال
                      <br>Mulets
                      </span>
                      <div class="line-edits-container" id="chapt_cn71">
                         <input class="line-edit bneder" id="chapt_mulets" name="chapt_mulets" >
                      </div>
                   </div>
                   <br>
                   <div class="input-group input-group-sm">
                      <span class="input-group-text" id="chapt_basic-addon3">
                      الحمير
                      <br>Anes
                      </span>
                      <div class="line-edits-container" id="chapt_cn72">
                         <input class="line-edit bneder" id="chapt_anes" name="chapt_anes" >
                      </div>
                   </div>
                </div>
             </div>
             



















             <br>
             <div class="input-group input-group-sm">
                <span class="input-group-text" id="chapt_basic-addon3">
                الأرانب
                <br>Cuniculture
                </span>
                <div class="line-edits-container" id="chapt_cn73">
                   <input class="line-edit bneder" id="chapt_cuniculture" name="chapt_cuniculture" >
                </div>
             </div>
             </div>
             <div class="col">
                <div class="card" style="font-size: 12px;">
                   <div class="card-header" style="text-align: center;">تربية النحل - Apiculture</div>
                   <div class="card-body">
                      <div class="err" id="chapt_ruches_modernes_error"></div>
                      <div class="input-group input-group-sm">
                         <span class="input-group-text" id="chapt_basic-addon3" style="width: 134px;">
                         خلايا النحل العصرية
                         <br> Ruches modernes
                         </span>
                         <div class="line-edits-container" id="chapt_cn69">
                            <input class="line-edit bneder" id="chapt_ruches_modernes" name="chapt_ruches_modernes" >
                         </div>
                      </div>
                      <br>
                      <div class="input-group input-group-sm">
                         <span class="input-group-text" id="chapt_basic-addon3" style="width: 134px;">
                         منها ممتلئة
                         <br> dont sont pleines
                         </span>
                         <div class="line-edits-container" id="chapt_cn208">
                            <input class="line-edit bneder" id="chapt_dont_sont_pleines" name="chapt_dont_sont_pleines" >
                         </div>
                      </div>
                      <br>
                      <div class="err" id="chapt_ruches_traditionnelles_error"></div>
                      <div class="input-group input-group-sm">
                         <span class="input-group-text" id="chapt_basic-addon3">
                         خلايا النحل التقليدية
                         <br>Ruches traditionnelles
                         </span>
                         <div class="line-edits-container" id="chapt_cn70">
                            <input class="line-edit bneder" id="chapt_ruches_traditionnelles" name="chapt_ruches_traditionnelles" >
                         </div>
                      </div>
                      <br>
                      <div class="input-group input-group-sm">
                         <span class="input-group-text" id="chapt_basic-addon3" style="width: 134px;">
                         منها ممتلئة
                         <br> dont sont pleines
                         </span>
                         <div class="line-edits-container" id="chapt_cn209">
                            <input class="line-edit bneder" id="chapt_dont_sont_pleines_2" name="chapt_dont_sont_pleines_2" >
                         </div>
                      </div>
                   </div>
                </div>
                <br>
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
                         <b>Poules</b><br>
                         الدجاج
                      </td>
                      <td>
                         <div class="line-edits-container" id="chapt_cn74">
                            <input class="line-edit bneder" id="chapt_poules_ponte" name="chapt_poules_ponte" >
                         </div>
                      </td>
                      <td>
                         <div class="line-edits-container" id="chapt_cn75">
                            <input class="line-edit bneder" id="chapt_poules_chair" name="chapt_poules_chair" >
                         </div>
                      </td>
                   </tr>
                   <tr>
                      <td colspan="2">
                         <b>Dindes</b><br>
                         الديك الرومي
                      </td>
                      <td>
                         <div class="line-edits-container" id="chapt_cn76">
                            <input class="line-edit bneder" id="chapt_dindes_ponte" name="chapt_dindes_ponte" >
                         </div>
                      </td>
                      <td>
                         <div class="line-edits-container" id="chapt_cn77">
                            <input class="line-edit bneder" id="chapt_dindes_chair" name="chapt_dindes_chair" >
                         </div>
                      </td>
                   </tr>
                   <tr>
                      <td colspan="2">
                         <b>Autre aviculture
                         </b><br>
                         دواجن أخرى
                      </td>
                      <td>
                         <div class="line-edits-container" id="chapt_cn78">
                            <input class="line-edit bneder" id="chapt_autre_aviculture_ponte" name="chapt_autre_aviculture_ponte" >
                         </div>
                      </td>
                      <td>
                         <div class="line-edits-container" id="chapt_cn79">
                            <input class="line-edit bneder" id="chapt_autre_aviculture_chair" name="chapt_autre_aviculture_chair" >
                         </div>
                      </td>
                   </tr>
                </tbody>
             </table>
             
             


































           







<!-- Mounir's part start  -->
 
<br/>  
<br><div style="border-top: 3px solid red;"></div>
            
            <br>
            <h5>VII- Batiments d'exploitation مباني الإستغلال</h5>
            <br><br>



            
            <div class="input-group input-group-sm">
               <span class="input-group-text" id="basic-addon3"> 
                   إستغلال المباني الفلاحية بطريقة 
                   <br>
                   Les bâtiments d'exploitation agricole sont exploités 
               </span>
               <select class="select-ee" id="inputGroupSelect01" name="bat_exploitation_agricole_sont_exploites">
                   <option selected="selected"> - </option>
                   <option value="1">1 - En individuel - فردية</option>
                   <option value="2">2 - En collectif - جماعية</option>
                   <option value="3">3 - Mixte - مختلطة</option>
               </select>

           </div>
<br>
            <div class="row">
                     <div class="col-5"></div>
                     <div class="col">
                        العدد - Nombre
                     </div>
                     <div class="col"  style="text-align: center;">
                        المساحة (م²) - Surface (m²)
                     </div>
                  </div><table class="table table-sm">
               <tbody>
                  <!-- Labels for Superficie -->
                  
                  <!-- Cultures herbacées -->
                  <tr>
                     <td >
                        <b>Bâtiments d'habitation</b><br>
                        مباني سكنية
                     </td>
                     <td>
                       
                           
                           <input id="in80" name="batiments_dhabitation_nombre"type="number" style="max-width:80px;" style="max-width:60px;" max="99" class="form-control" oninput="this.value = Math.max(0, Math.min(99, this.value));" value="">
                    
                     </td>
                     <td>
                     <div class="line-edits-container" id="cn91" style="padding-left: 132px">
                           
                           <input id="in81" name="batiments_dhabitation_surface"  style="    margin:auto;" class="form-control" type="number" max="99999"  oninput="this.value = Math.max(0, Math.min(99999, this.value));" value="">
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
                       
                          
                           <input id="in82" name="batiment_de_stockage_nombre"type="number" max="99" class="form-control" oninput="this.value = Math.max(0, Math.min(99, this.value));" value="">
                      
                     </td>
                     <td>
                     <div class="line-edits-container" id="cn91" style="padding-left: 132px">
                           
                           <input id="in83" name="batiment_de_stockage_surface"  style="    margin:auto;"class="form-control" type="number" max="99999"  oninput="this.value = Math.max(0, Math.min(99999, this.value));" value="">
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
                      
                         
                           <input id="in84" name="batiment_dentreposage_des_produits_agricoles_nombre"type="number" max="99" class="form-control" oninput="this.value = Math.max(0, Math.min(99, this.value));" value="">
                       
                     </td>
                     <td>
                     
                     <div class="line-edits-container" id="cn91" style="padding-left: 132px">
                           <input id="in85" name="batiment_dentreposage_des_produits_agricoles_surface" style="    margin:auto;" class="form-control" type="number" max="99999"  oninput="this.value = Math.max(0, Math.min(99999, this.value));" value="">
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
                       
                          
                           <input id="in86" name="batiment_pour_le_remisage_du_materiel_agricole_nombre" type="number" max="99" class="form-control" oninput="this.value = Math.max(0, Math.min(99, this.value));" value="">
                        
                     </td>
                     <td>
                  
                     <div class="line-edits-container" id="cn91" style="padding-left: 132px">
                           <input id="in87" name="batiment_pour_le_remisage_du_materiel_agricole_surface" style="    margin:auto;"class="form-control" type="number" max="99999"  oninput="this.value = Math.max(0, Math.min(99999, this.value));" value="">
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
                       
                           
                           <input id="in88" name="caves_nombre"type="number" max="99" class="form-control" oninput="this.value = Math.max(0, Math.min(99, this.value));" value="">
                        </div>
                     </td>
                     <td>
                        <div class="line-edits-container" id="cn89" style="padding-left: 132px">
                           
                           <input id="in89" name="caves_surface" style="    margin:auto;"class="form-control" type="number" max="99999"  oninput="this.value = Math.max(0, Math.min(99999, this.value));" value="">
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
                        <div class="line-edits-container" id="cn90">
                   
                           <input id="in90" name="unite_de_conditionnement_nombre"type="number" max="99" class="form-control" oninput="this.value = Math.max(0, Math.min(99, this.value));" value="">
                        </div>
                     </td>
                     <td>
                        <div class="line-edits-container" id="cn91" style="padding-left: 132px">
                           
                           <input id="in91" name="unite_de_conditionnement_surface" style="    margin:auto;"class="form-control" type="number" max="99999"  oninput="this.value = Math.max(0, Math.min(99999, this.value));" value="">
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
                        <div class="line-edits-container" id="cn92">
                      
                           <input id="in92" name="unite_de_transformation_nombre"type="number" max="99" class="form-control" oninput="this.value = Math.max(0, Math.min(99, this.value));" value="">
                        </div>
                     </td>
                     <td>
                        <div class="line-edits-container" id="cn93" style="padding-left: 132px">
                           
                           <input id="in93" name="unite_de_transformation_surface" style="    margin:auto;"class="form-control" type="number" max="99999"  oninput="this.value = Math.max(0, Math.min(99999, this.value));" value="">
                        </div>
                     </td>
                  </tr>




                  <tr>
                     <td>
                        <b>Autre batiments
                        </b><br>
                        مباني أخرى
                     </td>
                     <td>
                        <div class="line-edits-container" id="cn222">
                     
                           <input id="in222" name="autre_batiments_nombre"type="number" max="99" class="form-control" oninput="this.value = Math.max(0, Math.min(99, this.value));" value="">
                        </div>
                     </td>
                     <td>
                        <div class="line-edits-container" id="cn223" style="padding-left: 132px">
                           
                           <input id="in223" name="autre_batiments_surface" style="    margin:auto;"class="form-control" type="number" max="99999"  oninput="this.value = Math.max(0, Math.min(99999, this.value));" value="">
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
                      
                           <input id="in94" name="centre_de_collecte_de_lait_nombre"type="number" max="99" class="form-control" oninput="this.value = Math.max(0, Math.min(99, this.value));" value="">
                        </div>
                     </td>
                     <td>
                        <div class="line-edits-container" id="cn95" style="padding-left: 132px">
                           
                           <input id="in95" name="centre_de_collecte_de_lait_surface" style="    margin:auto;"class="form-control" type="number" max="99999"  oninput="this.value = Math.max(0, Math.min(99999, this.value));" value="">
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
                    
                           <input id="in98" name="serres_tunnels_nombre"type="number" max="99" class="form-control" oninput="this.value = Math.max(0, Math.min(99, this.value));" value="">
                        </div>
                     </td>
                     <td>
                        <div class="line-edits-container" id="cn99" style="padding-left: 132px">
                           
                           <input id="in99" name="serres_tunnels_surface" style="    margin:auto;"class="form-control" type="number" max="99999"  oninput="this.value = Math.max(0, Math.min(99999, this.value));" value="">
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
                         
                           <input id="in100" name="serres_multichapelles_nombre"type="number" max="99" class="form-control" oninput="this.value = Math.max(0, Math.min(99, this.value));" value="">
                        </div>
                     </td>
                     <td>
                        <div class="line-edits-container" id="cn101" style="padding-left: 132px">
                           
                           <input id="in101" style="    margin:auto;"class="form-control" type="number" max="99999"  oninput="this.value = Math.max(0, Math.min(99999, this.value));" value="">
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
                           
                                 <input id="in102" name="bergerie_nombre"type="number" max="99" class="form-control" oninput="this.value = Math.max(0, Math.min(99, this.value));" value="">
                              </div>
                           </td>
                           <td>
                              <div class="line-edits-container" id="cn103" style="margin-left: 151px">
                                
                                 <input id="in103" name="bergerie_surface" class="form-control" type="number" max="99999"  oninput="this.value = Math.max(0, Math.min(99999, this.value));" value="">
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
                               
                                 <input id="in104" name="etable_nombre"type="number" max="99" class="form-control" oninput="this.value = Math.max(0, Math.min(99, this.value));" value="">
                              </div>
                           </td>
                           <td>
                              <div class="line-edits-container" id="cn105" style="margin-left: 151px">
                                
                                 <input id="in105" name="etable_surface" class="form-control" type="number" max="99999"  oninput="this.value = Math.max(0, Math.min(99999, this.value));" value="">
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
                             
                                 <input id="in106" name="ecurie_de_chevaux_nombre"type="number" max="99" class="form-control" oninput="this.value = Math.max(0, Math.min(99, this.value));" value="">
                              </div>
                           </td>
                           <td>
                              <div class="line-edits-container" id="cn107" style="margin-left: 151px">
                              
                                 <input id="in107" name="ecurie_de_chevaux_surface" class="form-control" type="number" max="99999"  oninput="this.value = Math.max(0, Math.min(99999, this.value));" value="">
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
                           
                                 <input id="in108" name="poulailler_batis_en_dur_nombre" type="number" max="99" class="form-control" oninput="this.value = Math.max(0, Math.min(99, this.value));" value="">
                              </div>
                           </td>
                           <td>
                              <div class="line-edits-container" id="cn109" style="margin-left: 151px">
                                
                                 <input id="in109" name="poulailler_batis_en_dur_surface" class="form-control" type="number" max="99999"  oninput="this.value = Math.max(0, Math.min(99999, this.value));" value="">
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
                              
                                 <input id="in110" name="poulailler_sous_serre_nombre"type="number" max="99" class="form-control" oninput="this.value = Math.max(0, Math.min(99, this.value));" value="">
                              </div>
                           </td>
                           <td>
                              <div class="line-edits-container" id="cn111" style="margin-left: 151px">
                                
                                 <input id="in111" name="poulailler_sous_serre_surface" class="form-control" type="number" max="99999"  oninput="this.value = Math.max(0, Math.min(99999, this.value));" value="">
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
                     <div class="col">
                        المساحة (م³) - Surface (m³)
                     </div>
                  </div><table class="table table-sm">
               <tbody>
                  <!-- Labels for Superficie -->
                  
                  <tr>
                     <td style="width:264px;">
                        <b>Chambre froide</b><br>
                        غرف التبريد
                     </td>
                     <td>
                        <div class="line-edits-container" id="cn112">
                    
                           <input id="in112" name="chambre_froide_nombre"type="number" max="99" class="form-control" oninput="this.value = Math.max(0, Math.min(99, this.value));" value="">
                        </div>
                     </td>
                     <td>
                        <div class="line-edits-container" id="cn113" style="margin-left: 162px;">
                          
                           <input id="in113" name="chambre_froide_surface" class="form-control" type="number" max="99999"  oninput="this.value = Math.max(0, Math.min(99999, this.value));" value="">
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


            <div style="height: 34px;width: 659px;background-color: white;position: absolute;z-index: 99;"></div>


            <div id="formContainer3">
               <div class="row" style="margin-bottom: 100px;">
             
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
               });
           </script>
           
            <br>













  <br><br><br>
            <div style="border-top: 3px solid red;"></div>
            <br>
            <h5>IX- Ressources en eau الموارد المائية</h5>
            <br>
            <div style="text-align: center;"><b>نوع المصدر - Type d'ouvrage</b></div>
            <br><br>
            <div class="row">
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
                    
                              <input id="in115" tb name="eau_barrage" type="number" max="99" class="form-control" oninput="this.value = Math.max(0, Math.min(99, this.value));" value="">
                          
                        </div>
                        <br>
                        <div class="input-group input-group-sm">
                           <span class="input-group-text" id="basic-addon3" style="height: 50px;width: 128px;">
                           محطة معالجة مياه<br> الصرف الصحي
                           <br>Station d'épuration
                           </span>
                          
                             
                              <input id="in116" tb name="eau_station_depuration" type="number" max="99" class="form-control" oninput="this.value = Math.max(0, Math.min(99, this.value));" value="">
                          
                        </div>
                        <br>
                        <div class="input-group input-group-sm">
                           <span class="input-group-text" id="basic-addon3">
                           مجموعة آبار عميقة
                           <br>Ensemble de forages
                           </span>
                           
                              
                              <input id="in117" tb name="eau_ensemble_de_forages" type="number" max="99" class="form-control" oninput="this.value = Math.max(0, Math.min(99, this.value));" value="">
                           
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
                               
                                    <input id="in118" tb name="eau_puits" type="number" max="99" class="form-control" oninput="this.value = Math.max(0, Math.min(99, this.value));" value="">
                                 
                              </div>
                              <br>
                              <div class="input-group input-group-sm">
                                 <span class="input-group-text" id="basic-addon3" style="width: 111px;">
                                 بئر عميق
                                 <br>Forage
                                 </span>
                                 
                                    <input id="in119" tb name="eau_forage" type="number" max="99" class="form-control" oninput="this.value = Math.max(0, Math.min(99, this.value));" value="">
                                 
                              </div>
                              <br>
                              <div class="input-group input-group-sm">
                                 <span class="input-group-text" id="basic-addon3">
                                 ضخ من الوادي
                                 <br>Pompage d'Oued
                                 </span>
                                 
                                    <input id="in120" tb name="eau_pompage_doued" type="number" max="99" class="form-control" oninput="this.value = Math.max(0, Math.min(99, this.value));" value="">
                                 
                              </div>
                              <br>
                              <div class="input-group input-group-sm">
                                 <span class="input-group-text" id="basic-addon3" style="width: 111px;">
                                 فيض الوادي
                                 <br>Crues d'oued
                                 </span>
                            
                                    <input id="in121" tb name="eau_crues_doued" type="number" max="99" class="form-control" oninput="this.value = Math.max(0, Math.min(99, this.value));" value="">
                               
                              </div>
                              <br>
                              <div class="input-group input-group-sm">
                                 <span class="input-group-text" id="basic-addon3" style="width: 111px;">
                                 سد صغير
                                 <br>Petit barrage
                                 </span>
                                
                                    <input id="in122" tb name="eau_petit_barrage" type="number" max="99" class="form-control" oninput="this.value = Math.max(0, Math.min(99, this.value));" value="">
                                
                              </div>
                           </div>
                           <div class="col">
                              <div class="input-group input-group-sm">
                                 <span class="input-group-text" id="basic-addon3" style="width: 146px;">
                                 خزان التلال
                                 <br>Retenu collinaire
                                 </span>
                                 
                                    <input id="in123" tb name="eau_retenu_collinaire" type="number" max="99" class="form-control" oninput="this.value = Math.max(0, Math.min(99, this.value));" value="">
                                 
                              </div>
                              <br>
                              <div class="input-group input-group-sm">
                                 <span class="input-group-text" id="basic-addon3" style="width: 146px;">
                                 الفوقارة
                                 <br>Foggara
                                 </span>
                              
                                
                                    <input id="in124" tb name="eau_foggara" type="number" max="99" class="form-control" oninput="this.value = Math.max(0, Math.min(99, this.value));" value="">
                                 
                              </div>
                              <br>
                              <div class="input-group input-group-sm">
                                 <span class="input-group-text" id="basic-addon3" style="width: 146px;">
                                 منبع
                                 <br>Source
                                 </span>
                              
                                    <input id="in125" tb name="eau_source" type="number" max="99" class="form-control" oninput="this.value = Math.max(0, Math.min(99, this.value));" value="">
                                
                              </div>
                              <br>
                              <div class="input-group input-group-sm">
                                 <span class="input-group-text" id="basic-addon3">
                                 محطة معالجة مياه الصرف
                                 <br>Station d'épuration
                                 </span>
                               
                                    <input id="in126" tb name="eau_station_depuration_2" type="number" max="99" class="form-control" oninput="this.value = Math.max(0, Math.min(99, this.value));" value="">
                                 
                              </div>
                              <br>
                              <div class="input-group input-group-sm">
                                 <span class="input-group-text" tb id="basic-addon3" style="width: 146px;">
                                 مصادر أخرى
                                 <br>Autres
                                 </span>
                               
                                    <input id="in127" tb name="eau_autres_ress" type="number" max="99" class="form-control" oninput="this.value = Math.max(0, Math.min(99, this.value));" value="">
                                 
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <br>
            <div class="row">
               <div class="col">
                  <div class="card" style="font-size: 12px;">
                     <div class="card-header" style="text-align: center;">طريقة الري - Mode d'irrigation</div>
                     <div class="card-body">
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
                                 
                                
                                    <input id="in129" name="eau_aspersion_classique"   type="number" max="999" class="form-control" oninput="this.value = Math.max(0, Math.min(999, this.value));" value="">
                                
                                
                              </div>
                              <br>
                              <div class="input-group input-group-sm">
                                 <span class="input-group-text" id="basic-addon3" style="width:170px;">
                                 السطحي<br> Gravitaire
                                 </span>
                               
                                   
                                    <input id="in130" name="eau_gravitaire" type="number" max="999" class="form-control" oninput="this.value = Math.max(0, Math.min(999, this.value));" value="">
                                 
                                
                              </div>
                              <br>
                              <div class="input-group input-group-sm">
                                 <span class="input-group-text" id="basic-addon3" style="width:170px;">
                                 الفيض<br> Epandage de crues
                                 </span>
                              
                                    
                                    <input id="in131" name="eau_epandage_de_crues" type="number" max="999" class="form-control" oninput="this.value = Math.max(0, Math.min(999, this.value));" value="">
                             
                                
                              </div>
                              <br>
                              <div class="input-group input-group-sm">
                                 <span class="input-group-text" id="basic-addon3" style="width:170px;">
                                 التقطير<br> Goutte à goutte
                                 </span>
                                
                                   
                                    <input id="in132" name="eau_goutte_a_goutte" type="number" max="999" class="form-control" oninput="this.value = Math.max(0, Math.min(999, this.value));" value="">
                                 
                                
                              </div>
                              <br>
                           </div>
                           <div class="col">
                              <div class="input-group input-group-sm">
                                 <span class="input-group-text" id="basic-addon3" style="width:170px;">
                                 الرش المحوري
                                 <br> Pivots
                                 </span>
                                
                                  
                                    <input id="in133" name="eau_pivots" type="number" max="999" class="form-control" oninput="this.value = Math.max(0, Math.min(999, this.value));" value="">
                                 
                                
                              </div>
                              <br>
                              <div class="input-group input-group-sm">
                                 <span class="input-group-text" id="basic-addon3" style="width:170px;">
                                 اللفاف
                                 <br> Enrouleur
                                 </span>
                                
                                  
                                    <input id="in134" name="eau_enrouleur" type="number" max="999" class="form-control" oninput="this.value = Math.max(0, Math.min(999, this.value));" value="">
                               
                                
                              </div>
                              <br>
                              <div class="input-group input-group-sm">
                                 <span class="input-group-text" id="basic-addon3" style="width:170px;">
                                 الأمطار الصناعية
                                 <br> Pluie artificielle
                                 </span>
                                
                               
                                    <input id="in135" name="eau_pluie_artificielle"type="number" max="999" class="form-control" oninput="this.value = Math.max(0, Math.min(999, this.value));" value="">
                                 
                                
                              </div>
                              <br>
                              <div class="input-group input-group-sm">
                                 <span class="input-group-text" id="basic-addon3" style="width:170px;">
                                 الفوقارة
                                 <br> Foggara
                                 </span>
                                
                                   
                                    <input id="in136" name="eau_foggara_hec" type="number" max="999" class="form-control" oninput="this.value = Math.max(0, Math.min(999, this.value));" value="">
                                 
                                
                              </div>
                              <br>
                              <div class="input-group input-group-sm">
                                 <span class="input-group-text" id="basic-addon3" style="width:170px;">
                                 طرق أخرى
                                 <br> Autre
                                 </span>
                              
                                   
                                    <input id="in210" name="eau_autre_hec" type="number" max="999" class="form-control" oninput="this.value = Math.max(0, Math.min(999, this.value));" value="">
                             
                                
                              </div>
                           </div>
                        </div>
                     </div>
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
            <h5>X- Main d'œuvre اليد العاملة</h5>
            <br>
            <div class="row">
               <div class="row" style="text-align: center;">
                  <div class="col-4" style="margin-left: 47px;"></div>
                  <div class="col">
                     <div class="card" style="font-size: 12px;">
                        <div class="card-header" style="text-align: center;"> توظيف دائم
                           
                        </div>
                        <div class="card-header" style="text-align: center;">Elmploi permanent
                        </div>
                     </div>
                  </div>
                  <div class="col">
                     <div class="card" style="font-size: 12px;">
                        <div class="card-header" style="text-align: center;">توظيف موسمي
                        </div>
                        <div class="card-header" style="text-align: center;">Emploi saisonnier
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
                     <td style="width: 320px;">
                        <b>Co-exploitants (y compris exploitant principal)</b><br>
                        مساعد المستثمر (مع المستثمر الرئيسي)
                     </td>
                     <td>
                        <div class="input-group input-group-sm">
                          
                              <input id="in138" tb name="co_exploitants_y_compris_exploitant_principa_l" type="number" max="99" class="form-control" oninput="this.value = Math.max(0, Math.min(99, this.value));" value="">
                        
                          
                              <input id="in139" tb name="co_exploitants_y_compris_exploitant_principa_2" type="number" max="99" class="form-control" oninput="this.value = Math.max(0, Math.min(99, this.value));" value="">
                          
                        </div>
                     </td>
                     <td>
                        <div class="input-group input-group-sm">
                        
                              <input id="in140" tb name="co_exploitants_y_compris_exploitant_principa_3" type="number" max="99" class="form-control" oninput="this.value = Math.max(0, Math.min(99, this.value));" value="">
                        
                          
                              <input id="in141" tb name="co_exploitants_y_compris_exploitant_principa_4" type="number" max="99" class="form-control" oninput="this.value = Math.max(0, Math.min(99, this.value));" value="">
                           
                        </div>
                     </td>
                  </tr>
                  <tr>
                     <td style="width: 320px;">
                        <b>Ouvriers agricoles
                        </b><br>
                        العمال الفلاحيين
                     </td>
                     <td>
                        <div class="input-group input-group-sm">
                          
                              <input id="in142" tb name="ouvriers_agricoles_1" type="number" max="99" class="form-control" oninput="this.value = Math.max(0, Math.min(99, this.value));" value="">
                         
                          
                              <input id="in143" tb name="ouvriers_agricoles_2" type="number" max="99" class="form-control" oninput="this.value = Math.max(0, Math.min(99, this.value));" value="">
                          
                        </div>
                     </td>
                     <td>
                        <div class="input-group input-group-sm">
                     
                              <input id="in144" tb name="ouvriers_agricoles_3" type="number" max="99" class="form-control" oninput="this.value = Math.max(0, Math.min(99, this.value));" value="">
                          
                              <input id="in145" tb name="ouvriers_agricoles_4" type="number" max="99" class="form-control" oninput="this.value = Math.max(0, Math.min(99, this.value));" value="">
                          
                        </div>
                     </td>
                  </tr>
                  <tr>
                     <td style="width: 277px;">
                        <b>Ouvriers agricoles étrangès
                        </b><br>
                        العمال الفلاحيين الأجانب
                     </td>
                     <td>
                        <div class="input-group input-group-sm">
                      
                              <input id="in146" tb name="ouvriers_agricoles_etranges_1" type="number" max="99" class="form-control" oninput="this.value = Math.max(0, Math.min(99, this.value));" value="">
                         
                              <input id="in147" tb name="ouvriers_agricoles_etranges_2" type="number" max="99" class="form-control" oninput="this.value = Math.max(0, Math.min(99, this.value));" value="">
                          
                        </div>
                     </td>
                     <td>
                        <div class="input-group input-group-sm">
                           
                              <input id="in148" tb name="ouvriers_agricoles_etranges_3" type="number" max="99" class="form-control" oninput="this.value = Math.max(0, Math.min(99, this.value));" value="">
                          
                              <input id="in149" tb name="ouvriers_agricoles_etranges_4" type="number" max="99" class="form-control" oninput="this.value = Math.max(0, Math.min(99, this.value));" value="">
                          
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
                        <b>Main d'œuvre ordinnaire (non qualifiée)
                        </b><br>
                     اليد العاملة العادية(الغير مؤهلة)
                     </td>
                     <td>
                        <div class="input-group input-group-sm">
                        
                              <input id="in162" tb name="main_oeuvre_ordinnaire_1" type="number" max="99" class="form-control" oninput="this.value = Math.max(0, Math.min(99, this.value));" value="">
                         
                          
                              <input id="in163" tb name="main_oeuvre_ordinnaire_2" type="number" max="99" class="form-control" oninput="this.value = Math.max(0, Math.min(99, this.value));" value="">
                           
                        </div>
                     </td>
                     <td>
                        <div class="input-group input-group-sm">
                     
                              <input id="in164" tb  name="main_oeuvre_ordinnaire_3" type="number" max="99" class="form-control" oninput="this.value = Math.max(0, Math.min(99, this.value));" value="">
                          
                              <input id="in165" tb  name="main_oeuvre_ordinnaire_4" type="number" max="99" class="form-control" oninput="this.value = Math.max(0, Math.min(99, this.value));" value="">
                        
                        </div>
                     </td>
                  </tr>
                  <tr>
                     <td style="width: 277px;">
                        <b>Main d'œuvre qualifiée
                        </b><br>
                        اليد العاملة مؤهلة
                     </td>
                     <td>
                        <div class="input-group input-group-sm">
                         
                              <input id="in166" tb name="main_oeuvre_qualifiee_1" type="number" max="99" class="form-control" oninput="this.value = Math.max(0, Math.min(99, this.value));" value="">
                        
                              <input id="in167" tb name="main_oeuvre_qualifiee_2" type="number" max="99" class="form-control" oninput="this.value = Math.max(0, Math.min(99, this.value));" value="">
                          
                        </div>
                     </td>
                     <td>
                        <div class="input-group input-group-sm">
                         
                              <input id="in168" tb name="main_oeuvre_qualifiee_3" type="number" max="99" class="form-control" oninput="this.value = Math.max(0, Math.min(99, this.value));" value="">
                          
                              <input id="in169" tb name="main_oeuvre_qualifiee_4" type="number" max="99" class="form-control" oninput="this.value = Math.max(0, Math.min(99, this.value));" value="">
                          
                        </div>
                     </td>
                  </tr>
              
                  
               </tbody>
            </table>
            <div class="row" style="text-align: center;">
                     <div class="col-4"></div>
                     <div class="col">
                        <b>
                        عدد الأعضاء أو الأسر في المستثمر
                        <br>
                        Nombre des membres du ou des ménage (s) actifs de l'exploitation
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
                        <b>Exploitant individuel
                        </b><br>
                        فلاح أو مستثمر فردي
                     </td>
                     <td>
                        <div class="input-group input-group-sm">
                     
                              <input id="in150" tb name="mo_exploitant_individuel_1" type="number" max="99" class="form-control" oninput="this.value = Math.max(0, Math.min(99, this.value));" value="">
                        
                              <input id="in151" tb name="mo_exploitant_individuel_2" type="number" max="99" class="form-control" oninput="this.value = Math.max(0, Math.min(99, this.value));" value="">
                          
                        </div>
                     </td>
                     <td>
                        <div class="input-group input-group-sm">
                         
                              <input id="in152" tb name="mo_exploitant_individuel_3" type="number" max="99" class="form-control" oninput="this.value = Math.max(0, Math.min(99, this.value));" value="">
                          
                              <input id="in153" tb name="mo_exploitant_individuel_4" type="number" max="99" class="form-control" oninput="this.value = Math.max(0, Math.min(99, this.value));" value="">
                           
                        </div>
                     </td>
                  </tr>
                  <tr>
                     <td style="width: 277px;">
                        <b>Adultes (+15 ans)
                        </b><br>
                        كبار (أكثر من 15 سنة)
                     </td>
                     <td>
                        <div class="input-group input-group-sm">
                      
                              <input id="in154" tb name="mo_adultes_plus_15_ans_11" type="number" max="99" class="form-control" oninput="this.value = Math.max(0, Math.min(99, this.value));" value="">
                        
                              <input id="in155" name="mo_adultes_plus_15_ans_22" type="number" max="99" class="form-control" oninput="this.value = Math.max(0, Math.min(99, this.value));" tb value="">
                          
                        </div>
                     </td>
                     <td>
                        <div class="input-group input-group-sm">
                     
                              <input id="in156" tb name="mo_adultes_plus_15_ans_3" type="number" max="99" class="form-control" oninput="this.value = Math.max(0, Math.min(99, this.value));" value="">
                          
                              <input id="in157" tb name="mo_adultes_plus_15_ans_4" type="number" max="99" class="form-control" oninput="this.value = Math.max(0, Math.min(99, this.value));" value="">
                          
                        </div>
                     </td>
                  </tr>
                  <tr>
                     <td style="width: 277px;">
                        <b>Enfants (-15 ans)
                        </b><br>
                        أطفال (أقل من 15 سنة)
                     </td>
                     <td>
                        <div class="input-group input-group-sm">
                       
                              <input id="in158" tb name="mo_enfants_moins_15_ans_1" type="number" max="99" class="form-control" oninput="this.value = Math.max(0, Math.min(99, this.value));" value="">
                        
                              <input id="in159" tb name="mo_enfants_moins_15_ans_2" type="number" max="99" class="form-control" oninput="this.value = Math.max(0, Math.min(99, this.value));" value="">
                          
                        </div>
                     </td>
                     <td>
                        <div class="input-group input-group-sm">
                           
                              <input id="in160" tb name="mo_enfants_moins_15_ans_3" type="number" max="99" class="form-control" oninput="this.value = Math.max(0, Math.min(99, this.value));" value="">
                          
                              <input id="in161" tb name="mo_enfants_moins_15_ans_4" type="number" max="99" class="form-control" oninput="this.value = Math.max(0, Math.min(99, this.value));" value="">
                           
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
            <div class="input-group input-group-sm">
               <span class="input-group-text" id="basic-addon3">
               عدد الأشخاص
               <br> Nombre de personnes
               </span>
             
               
                  <input id="in178" tb name="ma_nombre_de_personnes" type="number" max="99" class="form-control" oninput="this.value = Math.max(0, Math.min(99, this.value));" value="">
               
                  
            </div>
            <br>
            <div class="row">
                     <div class="col-4"></div>
                     <div class="col">
                        ذكور - Masculin
                     </div>
                     <div class="col">
                        إناث - Féminin
                     </div>
                  </div><table class="table table-sm">
               <tbody>
                  <!-- Labels for Superficie -->
                  
                  <!-- Cultures herbacées -->
                  <tr>
                     <td style="width: 269px;">
                        <b>Adultes (+15 ans)
                        </b><br>
                        كبار (أكثر من 15 سنة)
                     </td>
                     <td>
                       
                           <input id="in179" name="ma_adultes_plus_15_ans_1" type="number" max="99" class="form-control" oninput="this.value = Math.max(0, Math.min(99, this.value));" value="">
                      
                     </td>
                     <td>
                       
                           <input id="in180" style="max-width:80px;" name="ma_adultes_plus_15_ans_2" type="number" max="99" class="form-control" oninput="this.value = Math.max(0, Math.min(99, this.value));" value="">
                        
                     </td>
                  </tr>
                  <tr>
                     <td>
                        <b>Enfants (-15 ans)
                        </b><br>
                        أطفال (أقل من 15 سنة)
                     </td>
                     <td>
                       
                           <input id="in181" name="ma_enfants_moins_15_ans_11" type="number" max="99" class="form-control" oninput="this.value = Math.max(0, Math.min(99, this.value));" value="">
                    
                     </td>
                     <td>
                      
                           <input id="in182" name="ma_enfants_moins_15_ans_22" type="number" max="99" class="form-control" oninput="this.value = Math.max(0, Math.min(99, this.value));" value="">
                     
                     </td>
                  </tr>
               </tbody>
            </table>
            <br><br><br>
            <div style="border-top: 3px solid red;"></div>
            <br>
            <h5>XII- Utilisation d'intrants - إستخدام المدخلات <br> (Campagne agricole الموسم الفلاحي 2023-2024)
            </h5>
            <br><br>
            <div class="row">

               <div class="col">
                  <div class="card">
                  <div class="card-body">

                  <div class="form-check">
                     <input name="ui_semences_selectionnees" class="form-check-input" type="checkbox" value="1" id="flexCheckDefault1441">
                     <label class="form-check-label" for="flexCheckDefault1441">
                         بذور مختارة
                         <br>
                         Semences sélectionnées
                     </label>
                 </div>
                 <br>
                 <div class="form-check">
                     <input name="ui_semences_certifiees" class="form-check-input" type="checkbox" value="1" id="flexCheckDefault1552">
                     <label class="form-check-label" for="flexCheckDefault1552">
                         بذور معتمدة
                         <br>
                         Semences certifiées
                 </label></div>
                 <br>
                 <div class="form-check">
                     <input name="ui_semences_de_la_ferme" class="form-check-input" type="checkbox" value="1" id="flexCheckDefault1663">
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
               <div class="col">
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
               <div class="col">

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
               <div class="col">

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
                                    دَعْم عُمومي - Soutien public
                                    </label>
                                 </div>
                                 <div class="form-check">
                                    <input class="form-check-input" id="875178275" name="fa_emprunt_a_un_tiers" type="checkbox">
                                    <label class="form-check-label" for="875178275">
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
                                    <input class="form-check-input" id="5642614" name="fa_financiere" type="checkbox">
                                    <label class="form-check-label" for="5642614">
                                    مالي - Financière
                                    </label>
                                 </div>
                                 <div class="form-check">
                                    <input class="form-check-input" id="2498429824" name="fa_materiel" type="checkbox">
                                    <label class="form-check-label" for="2498429824">
                                    عتاد - Matériel
                                    </label>
                                 </div>
                                 <div class="form-check">
                                    <input class="form-check-input" id="121545" name="fa_cultures" type="checkbox">
                                    <label class="form-check-label" for="121545">
                                    محاصيل - Cultures
                                    </label>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>

                     <script>
                        var check1 = document.getElementsByName('soutien_public')[0];
                     
                        check1.addEventListener('input', function () {
                            updateSelect8();
                        });
                     
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
                                 <input class="form-check-input" id="5fd4g5fd" name="fa_ettahadi" type="checkbox">
     
                                   <label class="form-check-label" for="5fd4g5fd">
                                   التحدي - Ettahadi
                                   </label>
                                </div></div>
                              <div class="col"> <div class="form-check">
                                 <input class="form-check-input" id="5d4t1y5hg" name="fa_classique" type="checkbox">
     
                                   <label class="form-check-label" for="5d4t1y5hg">
                                   الكلاسيكي - Classique
                                   </label>
                                </div></div>
                              <div class="col"><div class="form-check">
                                 <input class="form-check-input" id="tdf5h124s5h" name="fa_leasing" type="checkbox">
     
                                   <label class="form-check-label" for="tdf5h124s5h">
                                   تأجير - Leasing
                                   </label>
                                </div></div>
                              <div class="col"><div class="form-check">
                                 <input class="form-check-input" id="5gfd4yyt" name="fa_rfig" type="checkbox">
     
                                   <label class="form-check-label" for="5gfd4yyt">
                                   الرفيق - R'fig </label>
                                </div></div>
                           </div>


                           <script>
                              var check2 = document.getElementsByName('propres_ressources')[0];
                           
                              check2.addEventListener('input', function () {
                                 updateSelect9();
                              });
                           
                              function updateSelect9() {
                           
                                 var div_to_effect7 = document.getElementById('card3');
                                 var child_inputs3 = div_to_effect7.getElementsByTagName('input');
                           
                                 if(!check2.checked){
                                    for (var i = 0; i < child_inputs3.length; i++) {
                                          child_inputs3[i].disabled = true;
                                    }
                                 }else{
                                    for (var i = 0; i < child_inputs3.length; i++) {
                                          child_inputs3[i].disabled = false;
                                    }
                                 }
                                 
                              }
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
                              <select class="select-ee" id="inputGroupSelect01" name="fa_avez_vous_contracte_une_assurance_agricole">
                                 <option selected="selected"> - </option>

                                 <option value="1">1 - Oui - نعم</option>

                                <option value="2"> Non - لا</option>
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
                              <select disabled="disabled" class="select-ee" id="inputGroupSelect01" name="fa_si_oui_quelle_compagnie">
                                 <option selected="selected"> - </option>

                                 <option value="1"> ص,م,ز,ق - CRMA</option>

                                 <option value="2"> أخرى - Cultures</option>
                              </select>
                           </div>
                        </div>
                     </div>


                     <script>
                        var select8 = document.getElementsByName('avez_vous_contracte_une_assurance_agricole')[0];
                        var select28 = document.getElementsByName('si_oui_quelle_compagnie')[0];
                     
                        select8.addEventListener('input', function () {
                            updateSelect28();
                        });
                     
                        function updateSelect28() {
                            var selectedValue = select8.value;
                            select28.disabled = (selectedValue != '1');
                        }
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
                                    <input class="form-check-input" id="er6g54er6g" name="fa_terre" type="checkbox">

                                    <label class="form-check-label" for="er6g54er6g">
                                    الأرض - Terre
                                    </label>
                                 </div>
                                 <div class="form-check">
                                    <input class="form-check-input" id="6er4ge8rg4" name="fa_personnel" type="checkbox">

                                    <label class="form-check-label" for="6er4ge8rg4">
                                    العمال - Personnel
                                    </label>
                                 </div>
                              </div>
                              <div class="col">
                                 <div class="form-check">
                                    <input class="form-check-input" id="564ger65g4erg" name="fa_batiments" type="checkbox">

                                    <label class="form-check-label" for="564ger65g4erg">
                                    المباني - Bâtiments
                                    </label>
                                 </div>
                                 <div class="form-check">
                                    <input class="form-check-input" id="56er1t65er41yg" name="fa_materiels" type="checkbox">

                                    <label class="form-check-label" for="56er1t65er41yg">
                                    العتاد - Matériels
                                    </label>
                                 </div>
                              </div>
                              <div class="col">
                                 <div class="form-check">
                                    <input class="form-check-input" id="65ge4rg654erg" name="fa_cheptel" type="checkbox">

                                    <label class="form-check-label" for="65ge4rg654erg">
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
               <select class="select-ee" id="inputGroupSelect01" name="ee_fournisseurs_de_services_situes_dans_la_commune">
                  <option selected="selected"> - </option>
                  <option value="1">1 - Oui - نعم</option>
                  <option value="2"> Non - لا</option>
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





           <div class="row">
            <div class="col">
            <button class="btn btn-success btn-lg approve-btn" style="width: 100%;" href="#" data-state="approved" id="submitDate" type="button">Submit Date</button>
             
            </div>
            <div class="col">
               <a class="btn btn-danger btn-lg reject-btn" style="width: 100%;" href="#" data-state="rejected" data-id="962">Rejeter</a>
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
      <script src="./assets/js/update.js"></script>

             
             
             
             
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
    // Function to adjust max-width of inputs with various attributes
    function adjustMaxWidth() {
        var inputsMax99 = document.querySelectorAll('input[max="99"]');
        inputsMax99.forEach(function(input) {
            input.style.maxWidth = "60px";
        });

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
             
      $(document).ready(function () {
    // Fetch questionnaire data by ID on page load
    var urlParams = new URLSearchParams(window.location.search);
    var id = parseInt( CryptoJS.AES.decrypt(atob(urlParams.get('id')), 'your_secret_key').toString(CryptoJS.enc.Utf8));
    if (id) {
        fetchQuestionnaireById(id);
    }

    // Function to fetch questionnaire data by ID
    function fetchQuestionnaireById(id) {
        $.ajax({
            url: './assets/php/questionnaire_by_id.php',
            method: 'GET',
            data: { id: id },
            dataType: 'json',
            success: function (response) {
    // Iterate over the response object keys
    console.log(response)
    Object.keys(response).forEach(function(key) {
        // Target the form field by name and set its value to the corresponding value in the response
        $('[name="' + key + '"]').val(response[key]);

        // For checkboxes, if the value is '1', check the checkbox
       if (response[key] == 1 || response[key] =="on" ) {
            $('[name="' + key + '"]').prop('checked', true);
        } else {
            $('[name="' + key + '"]').prop('checked', false);
        }
    }); 



    /************************************************* */
    //get list Materiel Agricol


    $.ajax({
      url:'assets/php/list_materiel_agricol.php',
      method:'post',
      async:false,
      data:{id:id},
      success:function(response){
        // console.log(response)

         var data = JSON.parse(response);
         var inputs="";
         for(var i = 0; i<data.length;i++){
            console.log(data[i].code_materiel)
            inputs += '<div class="row" style="margin-bottom: 10px;">';
            inputs += '<div class="col-3">'; // Adjust column size as needed
inputs += '<div class="input-group input-group-sm">';
inputs += '<label for="inputGroupSelect01" class="input-group-text" id="basic-addon3">رقم العتاد<br>Code matériel</label>'; // Using label for better accessibility
inputs += '<select class="select-ee materiel_agricole form-control" id="inputGroupSelect01" name="code_materiel">';
inputs += '<option value="-"> - </option>'; // Corrected 'value' spelling
    inputs += '<option value="1" ' + (data[i].code_materiel === "1" ? 'selected' : '') + '>1 - Tracteur à roue &lt;=45 CV - جرار ذو عجلات &lt;=5 حص</option>';
    inputs += '<option value="2" ' + (data[i].code_materiel === "2" ? 'selected' : '') + '>2 - Tracteur à roue 45 CV- 65CV - جرار ذو عجلات65-45 حص</option>';
    inputs += '<option value="3" ' + (data[i].code_materiel === "3" ? 'selected' : '') + '>3 - Tracteur à roue &gt;65 CV - جرار ذو عجلات&gt;5حص</option>';
    inputs += '<option value="4" ' + (data[i].code_materiel === "4" ? 'selected' : '') + '>4 - Tracteur à chenilles &lt;=80 CV - جرار ذو سلاسل&lt;=80حص</option>';
    inputs += '<option value="5" ' + (data[i].code_materiel === "5" ? 'selected' : '') + '>5 - Tracteur à chenilles &gt; 80 CV - جرار ذو سلاسل&gt;80حص</option>';
    inputs += '<option value="6" ' + (data[i].code_materiel === "6" ? 'selected' : '') + '>6 - Motoculteur - جرار صغير</option>';
    inputs += '<option value="7" ' + (data[i].code_materiel === "7" ? 'selected' : '') + '>7 - Moissonneuse-batteuse 6m - آلة حصاد و درس 6م</option>';
    inputs += '<option value="8" ' + (data[i].code_materiel === "8" ? 'selected' : '') + '>8 - Moissonneuse-batteuse 3m - آلة حصاد و درس 3م</option>';
    inputs += '<option value="9" ' + (data[i].code_materiel === "9" ? 'selected' : '') + '>9 - Véhicules légers - مركبة خفيفة</option>';
    inputs += '<option value="10" ' + (data[i].code_materiel === "10" ? 'selected' : '') + '>10 - Véhicules lourds - مركبة ثقيلة</option>';
    inputs += '<option value="11" ' + (data[i].code_materiel === "11" ? 'selected' : '') + '>11 - Charrue - محراث</option>';
    inputs += '<option value="12" ' + (data[i].code_materiel === "12" ? 'selected' : '') + '>12 - Covercrop - مغطي المزروعات</option>';
    inputs += '<option value="13" ' + (data[i].code_materiel === "13" ? 'selected' : '') + '>13 - Epandeur d’engrais - ناثر الأسمدة</option>';
    inputs += '<option value="14" ' + (data[i].code_materiel === "14" ? 'selected' : '') + '>14 - Pulvérisateur, atomiseurs - آلة الرش والرذاذ</option>';
    inputs += '<option value="15" ' + (data[i].code_materiel === "15" ? 'selected' : '') + '>15 - Poudreuses tractées - آلة السحق المقطورة</option>';
    inputs += '<option value="16" ' + (data[i].code_materiel === "16" ? 'selected' : '') + '>16 - Semoir - آلة التبذير</option>';
    inputs += '<option value="17" ' + (data[i].code_materiel === "17" ? 'selected' : '') + '>17 - Faucheuse - آلة الحش</option>';
    inputs += '<option value="18" ' + (data[i].code_materiel === "18" ? 'selected' : '') + '>18 - Ramasseuse-presse - آلة الجمع والربط</option>';
    inputs += '<option value="19" ' + (data[i].code_materiel === "19" ? 'selected' : '') + '>19 - Planteuse pomme de terre - آلة غرس البطاطا</option>';
    inputs += '<option value="20" ' + (data[i].code_materiel === "20" ? 'selected' : '') + '>20 - Arracheuse pomme de terre - آلة قلع البطاطا</option>';
    inputs += '<option value="21" ' + (data[i].code_materiel === "21" ? 'selected' : '') + '>21 - Remorque - مقطورة</option>';
    inputs += '<option value="22" ' + (data[i].code_materiel === "22" ? 'selected' : '') + '>22 - Citerne - صهريج</option>';
    inputs += '<option value="23" ' + (data[i].code_materiel === "23" ? 'selected' : '') + '>23 - Motopompe - مضخة ميكانيكية</option>';
    inputs += '<option value="24" ' + (data[i].code_materiel === "24" ? 'selected' : '') + '>24 - Electropompe - مضخة كهربائية</option>';
    inputs += '<option value="25" ' + (data[i].code_materiel === "25" ? 'selected' : '') + '>25 - Ensileuse - الة حصد الاعلاف</option>';
    inputs += '<option value="26" ' + (data[i].code_materiel === "26" ? 'selected' : '') + '>26 - Emrubaneuse - الة التغليف</option>';
    inputs += '<option value="27" ' + (data[i].code_materiel === "27" ? 'selected' : '') + '>27 - Autre matériel - عتاد آخر</option>';
    inputs += '</select>';
    inputs += '</div>';
    inputs += '</div>';
   // Existing JavaScript code to dynamically create inputs
   inputs += '<div class="col-2">';
   inputs += '<div class="input-group input-group-sm">';
   inputs += '<span class="input-group-text" id="basic-addon3"> العدد<br>Nombre</span>';
   inputs += '<input id="in114" value="' + data[i].code_materiel_nombre + '" name="code_materiel_nombre" type="number" max="999" class="form-control" oninput="this.value = Math.max(0, Math.min(999, this.value));" value="">';
   inputs += '</div>';
   inputs += '</div>';

   // Additional code for 'Mode of Mobilization' select input
   inputs += '<div class="col">';
   inputs += '<div class="input-group input-group-sm">';
   inputs += '<select class="form-control code_materiel_s" id="ee_mode_mobilisation_materiel" name="ee_mode_mobilisation_materiel">';
   inputs += '<option selected="selected" value="-"> </option>';
   inputs += '<option value="1">1- en proprièté - ملكية</option>';
   inputs += '<option value="2">2- en location - إجار</option>';
   inputs += '<option value="3">3- en prêt - إستلاف</option>';
   inputs += '</select>';
   inputs += '</div>';
   inputs += '</div>';

   // Additional code for 'Mode of Exploitation' select input
   inputs += '<div class="col">';
   inputs += '<div class="input-group input-group-sm">';
   inputs += '<select class="form-control code_materiel_s" id="ee_mode_exploitation_materiel" name="ee_mode_exploitation_materiel">';
   inputs += '<option selected="selected" value="-"> </option>';
   inputs += '<option value="1">1- en individuel - فردية</option>';
   inputs += '<option value="2">2- en collectif - جماعية</option>';
   inputs += '<option value="3">3- Mixte - مختلطة</option>';
   inputs += '</select>';
   inputs += '</div>';
   inputs += '</div>';

    inputs += '<div class="col-1">';
    inputs += '<div class="d-grid gap-2"></div>';
    inputs += '</div>';
    inputs += '</div>';

         }

         $('#formContainer3').append(inputs)
      }

    })



    /********************************statut_juridique_s**************************************/
    $.ajax({
    url: 'assets/php/list_status_juridique.php',
    method: 'post',
    async: false,
    data: { id: id },
    success: function (response) {
        console.log(response);

        var data = JSON.parse(response);
        var status_juridique_inputs = "";

        for (var i = 0; i < data.length; i++) {
            console.log(data[i].status_juridique);
            status_juridique_inputs += '<div style="margin-bottom: 5px;" class="row statut_juridique_s"><div class="col"><div class="input-group input-group-sm"><select class="form-select statut_juridique_s" id="origine_des_terres" name="origine_des_terres"><option value="-">-</option><option value="1" ' + (data[i].origine_des_terres === "1" ? 'selected' : '') + '>1 - Melk personnel titré ملك شخصي موثق</option><option value="2" ' + (data[i].origine_des_terres === "2" ? 'selected' : '') + '>2 - Melk personnel non titré ملك شخصي غير موثق</option><option value="3" ' + (data[i].origine_des_terres === "3" ? 'selected' : '') + '>3 - Melk en indivision titré ملك مشترك موثق</option><option value="4" ' + (data[i].origine_des_terres === "4" ? 'selected' : '') + '>4 - Melk en indivision non titré ملك مشترك غير موثق</option><option value="5" ' + (data[i].origine_des_terres === "5" ? 'selected' : '') + '>5 - Domaine public ملكية عامة للدولة</option><option value="6" ' + (data[i].origine_des_terres === "6" ? 'selected' : '') + '>6 - Domaine privé de l\'état ملكية خاصة للدولة</option><option value="7" ' + (data[i].origine_des_terres === "7" ? 'selected' : '') + '>7 - Wakf privé وقف خاص</option><option value="8" ' + (data[i].origine_des_terres === "8" ? 'selected' : '') + '>8 - Wakf public وقف عام</option><option value="9" ' + (data[i].origine_des_terres === "9" ? 'selected' : '') + '>9 - Inconnu ملك مجهول</option></select></div></div><div class="col"><div class="input-group input-group-sm"> <select class="form-select" id="status_juridique" name="status_juridique"><option value="-">-</option><option value="1" ' + (data[i].status_juridique === "1" ? 'selected' : '') + '>1- APFA «18-83» - ح.م.أ.ف</option><option value="2" ' + (data[i].status_juridique === "2" ? 'selected' : '') + '>2- Ex EAC «03-10» - م.ف.ج</option><option value="3" ' + (data[i].status_juridique === "3" ? 'selected' : '') + '>3- Ex EAI «م.ف,ف - « 10-03 </option><option value="4" ' + (data[i].status_juridique === "4" ? 'selected' : '') + '>4- Ex GCA «483-97» - ع.إ.ف</option><option value="5" ' + (data[i].status_juridique === "5" ? 'selected' : '') + '>5- Ex CDARS «483-97» - م.ت.ف.ر.ص</option><option value="6" ' + (data[i].status_juridique === "6" ? 'selected' : '') + '>6- Concession CIM 108, CIM 1839</option><option value="7" ' + (data[i].status_juridique === "7" ? 'selected' : '') + '>7 - Nouvelle concession ONTA  إمتياز جديد« 21-432 »</option><option value="8" ' + (data[i].status_juridique === "8" ? 'selected' : '') + '>8 - Nouvelle concession ODASإمتياز جديد « 20-265 »</option><option value="9" ' + (data[i].status_juridique === "9" ? 'selected' : '') + '>9 - Exploitation sans titre إستغلال بدون سند « 21-432 »</option><option value="10" ' + (data[i].status_juridique === "10" ? 'selected' : '') + '>10 - Ferme pilote مزرعة نموذجية</option><option value="11" ' + (data[i].status_juridique === "11" ? 'selected' : '') + '>11 - Etablissement public (EPA, EPIC, EPE) مؤسسة عمومية</option><option value="12" ' + (data[i].status_juridique === "12" ? 'selected' : '') + '>12 - Droit d’usage des forêts حق الانتفاع في استخدام الغابات للملكية العمومية</option><option value="13" ' + (data[i].status_juridique === "13" ? 'selected' : '') + '>13- Inconnu غير معروف</option></select><div class="big-space"></div></div></div><div class="col"><div class="input-group input-group-sm"><input value="' + data[i].superfecie_sj + '" id="in11" name="superficie_hectare" type="number" max="9999" class="form-control" oninput="this.value = Math.max(0, Math.min(9999, this.value));"><div class="big-space"></div><div class="small-space"></div> <input id="in12" name="superficie_are" type="number" max="99" class="form-control" oninput="this.value = Math.max(0, Math.min(99, this.value));" value="' + data[i].superfecie_sj_are + '"></div></div></div>';
        }

        $('#formContainer').append(status_juridique_inputs);
    }
});



    /************************************************************************************* */

    $.ajax({
      url:'assets/php/list_utilisation_sol.php',
      method:'post',
      async:false,
      data:{id:id},
      success:function(response){
         console.log(response)
         var data = JSON.parse(response)

         var inputs="";

         for(var i=0; i<data.length; i++){
inputs+=' <div class="row" style="margin-bottom: 10px;"><div class="col-4" style="margin-right: 20px;"><div class="input-group input-group-sm"><select  class="form-select " id="code_culture" name="code_culture"><option > - </option><option  style="font-weight: 700;">Grandes cultures - المحاصيل الكبرى</option><option value="1" '+(data[i].code_culture === "1" ? 'selected' : '')+'>1 - Blé dur - قمح صلب</option><option value="2" '+(data[i].code_culture === "2" ? 'selected' : '')+'>2 - Blétendre - قمح لين</option><option value="3" '+(data[i].code_culture === "3" ? 'selected' : '')+'>3 - Orge - شعير</option><option value="4" '+(data[i].code_culture === "4" ? 'selected' : '')+'>4 - Avoine - خرطال</option><option value="5" '+(data[i].code_culture === "5" ? 'selected' : '')+'>5 - Sorgho - الذرة البيضاء</option><option value="6" '+(data[i].code_culture === "6" ? 'selected' : '')+'>6 - Maïsgrain - حبوب الذرة</option><option value="7" '+(data[i].code_culture === "7" ? 'selected' : '')+'> 7 - Autrescéréales - الحبوب الأخرى</option><option disabled="" style="font-weight: 700;">Légumessecs - البقول الجافة</option><option value="8" '+(data[i].code_culture === "8" ? 'selected' : '')+'>8 - Lentilles- عدس</option><option value="9" '+(data[i].code_culture === "9" ? 'selected' : '')+'>9 - ois-chiche - حمص</option><option value="10" '+(data[i].code_culture === "10" ? 'selected' : '')+'>10 - Poissec -بازلاء مجففة</option><option value="11" '+(data[i].code_culture === "11" ? 'selected' : '')+'>11 - Haricotsec- الفاصوليا الجافة</option><option value="12" '+(data[i].code_culture === "12" ? 'selected' : '')+'>12 - Fèvesèche- فول جاف</option><option value="13" '+(data[i].code_culture === "13" ? 'selected' : '')+'>13 - Autres-أخرى</option><option disabled="" style="font-weight: 700;"> Fourrages - الأعلاف</option><option value="14" '+(data[i].code_culture === "14" ? 'selected' : '')+'>14 - VesceetVesce-avoine - البيقية والخرطال</option><option value="15" '+(data[i].code_culture === "15" ? 'selected' : '')+'>15 - Luzerne - فصة</option><option value="16" '+(data[i].code_culture === "16" ? 'selected' : '')+'>16 - Maïsfourrager - الذرة العلفية</option><option value="17" '+(data[i].code_culture === "17" ? 'selected' : '')+'>17 - Autresfourrages - أعلاف أخرى</option><option disabled="" style="font-weight: 700;"> Maraîchage - الخضروات</option><option value="18" '+(data[i].code_culture === "18" ? 'selected' : '')+'>18 - Pommedeterre - البطاطا</option><option value="19" '+(data[i].code_culture === "19" ? 'selected' : '')+'>19 - Oignonsecet vert - بصل جاف وأخضر</option><option value="20" '+(data[i].code_culture === "20" ? 'selected' : '')+'>20 - Ail -ثوم</option><option value="21" '+(data[i].code_culture === "21" ? 'selected' : '')+'>21 - Tomate-طماطم</option><option value="22" '+(data[i].code_culture === "22" ? 'selected' : '')+'>22 - Piment-فلفل حار</option><option value="23" '+(data[i].code_culture === "23" ? 'selected' : '')+'>23 - Poivron(frais et séché) - فلفل حلو</option><option value="24" '+(data[i].code_culture === "24" ? 'selected' : '')+'>24 - Carotte-جزر</option><option value="25" '+(data[i].code_culture === "25" ? 'selected' : '')+'>25 - Courgette -كوسه</option><option value="26" '+(data[i].code_culture === "26" ? 'selected' : '')+'>26 - Navet-اللفت</option><option value="27" '+(data[i].code_culture === "27" ? 'selected' : '')+'>27 - Concombre -خيار</option><option value="28" '+(data[i].code_culture === "28" ? 'selected' : '')+'>28 - ChouetChou-fleur - الملفوف وكرمب</option><option value="29" '+(data[i].code_culture === "29" ? 'selected' : '')+'>29 - Artichaut -قرنون</option><option value="30" '+(data[i].code_culture === "30" ? 'selected' : '')+'>30 - Betterave -الشمندر</option><option value="31" '+(data[i].code_culture === "31" ? 'selected' : '')+'>31 - Fèveverte- فول أخضر</option><option value="32" '+(data[i].code_culture === "32" ? 'selected' : '')+'>32 - Haricotvert - فاصوليا خضراء</option><option value="33" '+(data[i].code_culture === "33" ? 'selected' : '')+'>33 - Petitpois- البازلاء</option><option value="34" '+(data[i].code_culture === "34" ? 'selected' : '')+'>34 - Fraises-فراولة</option><option value="35" '+(data[i].code_culture === "35" ? 'selected' : '')+'>35 - Salade(laitue) - خس</option><option value="36" '+(data[i].code_culture === "36" ? 'selected' : '')+'>36 - Melon - بطيخ</option><option value="37" '+(data[i].code_culture === "37" ? 'selected' : '')+'>37 - Pastéque - دلاع</option><option value="38" '+(data[i].code_culture === "38" ? 'selected' : '')+'>38 - Autres-أخرى</option><option disabled="" style="font-weight: 700;"> Cultures industrielles - المحاصيل الصناعية</option><option value="39" '+(data[i].code_culture === "39" ? 'selected' : '')+'>39 - Tomateindustrielle - الطماطم الصناعية</option><option value="40" '+(data[i].code_culture === "40" ? 'selected' : '')+'>40 - Betterave àsucre - شمندر سكري</option><option value="41" '+(data[i].code_culture === "41" ? 'selected' : '')+'>41 - Oléagineux(arachide, soja, maïs,...) - بذور زيتية(فولسوداني,صويا,ذرة)</option><option value="42" '+(data[i].code_culture === "42" ? 'selected' : '')+'>42 - Tabac-التبغ</option><option value="43" '+(data[i].code_culture === "43" ? 'selected' : '')+'>43 - Autres-أخرى</option><option disabled="" style="font-weight: 700;"> Arboriculture - الأشجار</option><option value="44" '+(data[i].code_culture === "44" ? 'selected' : '')+'>44 - Oranger-أشجار البرتقال</option><option value="45" '+(data[i].code_culture === "45" ? 'selected' : '')+'>45 - Citronnier-أشجار الليمون</option><option value="46" '+(data[i].code_culture === "46" ? 'selected' : '')+'>46 - Mandarinier-أشجار المندرين</option><option value="47" '+(data[i].code_culture === "47" ? 'selected' : '')+' >47 - Clémentinier-أشجار الكليمنتين</option><option value="48" '+(data[i].code_culture === "48" ? 'selected' : '')+'>48 - Pamplemoussier-أشجار اليمون الهندي</option><option value="49" '+(data[i].code_culture === "49" ? 'selected' : '')+'>49 - Abricotier-أشجار المشمش</option><option value="50" '+(data[i].code_culture === "50" ? 'selected' : '')+'>50 - Pêchier et nectarinier-أشجار الخوخ والنكتارين</option><option value="51" '+(data[i].code_culture === "51" ? 'selected' : '')+'>51 - Cognassier-أشجار السفرجل</option><option value="52" '+(data[i].code_culture === "52" ? 'selected' : '')+'>52 - Poirier-أشجار اإلجاص</option><option value="53" '+(data[i].code_culture === "53" ? 'selected' : '')+'>53 - Pommier-أشجار التفاح</option><option value="54" '+(data[i].code_culture === "54" ? 'selected' : '')+'>54 - Prunier-أشجار البرقوق</option><option value="55" '+(data[i].code_culture === "55" ? 'selected' : '')+'>55 - Olivier de table-أشجار زيتون "زيتون المائدة"</option><option value="56" '+(data[i].code_culture === "56" ? 'selected' : '')+'>56 - Olivier à huile-أشجار الزيتون "الزيت"</option><option value="57" '+(data[i].code_culture === "57" ? 'selected' : '')+'>57 - Figuier-أشجار التين</option><option value="58" '+(data[i].code_culture === "58" ? 'selected' : '')+'>58 - Amandier-أشجار اللوز</option><option value="59" '+(data[i].code_culture === "59" ? 'selected' : '')+'>59 - Noix-أشجار الجوز</option><option value="60" '+(data[i].code_culture === "60" ? 'selected' : '')+'>60 - Cerisier-أشجار الكرز</option><option value="61" '+(data[i].code_culture === "61" ? 'selected' : '')+'>61 - Palmier dattier (Deglet Nour)-أشجار النخيل "دڨلة نور"</option><option value="62" '+(data[i].code_culture === "62" ? 'selected' : '')+'>62 - Palmier dattier (Ghars)-أشجار النخيل "غرس"</option><option value="63" '+(data[i].code_culture === "63" ? 'selected' : '')+'>63 - Palmier dattier (autres)-أشجار النخيل "أخرى"</option><option value="64" '+(data[i].code_culture === "64" ? 'selected' : '')+'>64 - Vigne de table-أشجار العنب األكل</option><option value="65" '+(data[i].code_culture === "65" ? 'selected' : '')+'>65 - Vigne de cuve-أشجار عنب العصير</option><option value="66" '+(data[i].code_culture === "66" ? 'selected' : '')+'>66 - Grenadier-أشجار الرمان</option><option value="67" '+(data[i].code_culture === "67" ? 'selected' : '')+'>67 - Arganier-أشجار األرقان</option><option value="68" '+(data[i].code_culture === "68" ? 'selected' : '')+'>68 - Autres arbres-أشجار أخرى</option><option disabled="" style="font-weight: 700;"> Divers - محاصيل مختلفة</option><option value="65" '+(data[i].code_culture === "46" ? 'selected' : '')+'>65 - Herbes et épices - الأعشاب والتوابل</option><option value="66">66 - Plantes ornementales, aromatiques .. - نباتات الزينة/ العطرية/ الطبية</option><option value="67">67 - Pépinières fruitières - مشاتل الفاكهة</option><option value="68">68 - Pépinières maraichères - مشاتل الخضار</option><option value="69">69 - Pépinières forestières - مشاتل الغابات</option><option value="70">70 - Autres Pépinières - مشاتل أخرى</option><option value="71">71 - Autres Cultures - محاصيل أخرى</option></select></div></div><div class="col"><div class="row"><div class="col-5"><input bigtb id="superficie_hec" name="superficie_hec" type="number" max="999" class="form-control" oninput="this.value = Math.max(0, Math.min(999, this.value));" value="'+data[i].superficie_hec+'" ></div><div class="col"><input id="superficie_are" name="superficie_are"  type="number" max="999" class="form-control" oninput="this.value = Math.max(0, Math.min(999, this.value));" value="'+data[i].superficie_are+'" ></div><div class="col"><input id="en_intercalaire"  name="en_intercalaire" type="number" max="99" class="form-control" oninput="this.value = Math.max(0, Math.min(99, this.value));"  value="'+data[i].en_intercalaire+'"></div></div></div></div>'
         }
         $('#formContainer2').append(inputs)
      }
    })
},
            error: function (xhr, status, error) {
                console.error('Error fetching questionnaire data:', error);
            }
        });
    }

    // Submit form event handler
    $('#questionnaireForm').submit(function (event) {
        event.preventDefault(); // Prevent default form submission
        // You can add your form submission logic here
    });
});

    </script>
</body>

</html>
