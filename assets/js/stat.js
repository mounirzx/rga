

$(document).ready(function(){

function commune(wil,comm){

    $.ajax({
        url: url.ComByUser,
        method:'post',
        async:false,
        data:{wil:wil,comm:comm},
        success:function(response){
           
            var data = JSON.parse(response)
          
            list_commune = data

            console.log(list_commune)
            /********************************************************************************** */
            //commune list
            var listCommune
            for(i=0;i<data.length;i++){
                listCommune+='<option value="'+data[i].commune_code+'">'+data[i].commune_name_ascii+'</option>'


            }
            $('#listCommune').append(listCommune)
        }
        })
}
commune('all','all')


/***************************************************************************************************/
//
$("#listCommune").change(function(){
    $('#tableQst').DataTable().destroy();
    var communeCode = $(this).val()
    var wilaya_code = $('#wilaya').val()
    console.log(communeCode)
    console.log(wilaya_code)
    
if(communeCode!=""){
    console.log("first")
    if(wilaya_code!=undefined){
        console.log('wilaya')
        getCommuneList(wilaya_code,communeCode)
    }else{
        console.log('communnn')
        console.log(communeCode)
        getCommuneList("all",communeCode)
    }
}else{
console.log("second")
    if(wilaya_code!=undefined){
        console.log(" wilaya second")
        getCommuneList(wilaya_code,'all')
    }else{
        console.log("all  commune")
        getCommuneList("all",'all')
    }
}
 

  
    //console.log("Before filtering - Search criteria:", table.column(0));
    //table.column(0).search(communeCode).draw();

})
/***************************************************************************************************/

var list_commune



    function getCommuneList(wil,comm) {
        console.log(comm)

        var sum_en_attente=0;
        var sum_rejete = 0;
        var sum_approuve = 0;
        var nb_qst_a_recense = 0
        var nb_qst_recense=0
        var total_questionnaire=0;
        var sum_taux_avancememnt_1=0;
        var sum_taux_avancememnt_2=0;
        
            $.ajax({
                url: url.ComByUser,
                method:'post',
                async:false,
                data:{wil:wil,comm:comm},
                success:function(response){
                   
                    var data = JSON.parse(response)
                  
                    list_commune = data

                   
                    /*********************************************************************************** */
                    var list;
            
                  

                    for(var i=0; i < data.length; i++){
                        var commune = data[i].commune_code;
                        var count=0;
                        $.ajax({
                            url: url.nbQst,
                            method:'post',
                            async:false,
                            data:{commune:commune},
                            success:function(response){
                                count = response;
                            }
                        })



                        /************************************************************/
                            //etat questionnaire
                            var etat="<td></td><td></td><td></td>"
                            $.ajax({
                                url: url.etatQst,
                                method:'post',
                                async:false,
                                data:{commune:commune},
                                success:function(response){
                                  console.log(response)
                                    var data = JSON.parse(response)
                                  

                                    var en_attente=0;
                                    var approuvee=0;
                                    var rejete=0;

                                    for(var i =0; i<data.length;i++){

                                        if(data[i].etat =='En attente'){
                                            en_attente = data[i].total 
                                        }
                                        if(data[i].etat =='Approuvés'){
                                            approuvee = data[i].total 
                                        }
                                        if(data[i].etat =='Rejetés'){
                                            rejete = data[i].total 
                                        }
                                      
                                    }
                                    sum_en_attente+= parseFloat(en_attente);
                                    sum_rejete +=parseFloat(rejete);
                                    sum_approuve += parseFloat(approuvee);

                                 
                                    etat = "<td style='background:#ddffca5e'>"+approuvee+"</td><td style='background:#dc354526;'>"+rejete+"</td><td style='background:#ffff0038'>"+en_attente+"</td>"
                                }
                            })
                         
                        /******************************************** */
                        nb_qst_a_recense+= parseFloat(data[i].qst_a_recense)
                        nb_qst_recense+= parseFloat(data[i].qst_recense)
                      var  taux_avancememnt_1 = (parseFloat(data[i].qst_recense)*100)/parseFloat(data[i].qst_a_recense)
                  
if(data[i].qst_a_recense==0){
    taux_avancememnt_1=0
}
sum_taux_avancememnt_1+=taux_avancememnt_1
var  taux_avancememnt_2 = (parseFloat(count)*100)/parseFloat(data[i].qst_recense)
if(data[i].qst_recense==0){
    taux_avancememnt_2=0
}
sum_taux_avancememnt_2+=taux_avancememnt_2
var role = $('#role').val()
//calculer la somme du taux de recencement par rapport au nombre de questionnaire saisis
var button=""
if(role=="superviseur_national"){
    button=""
}else{
    button ="<button data='"+data[i].commune_code+"' id ='showModal' data-bs-toggle='modal' data-bs-target='#exampleModal' class='btn btn-primary btn-sm editStatBtn '><i class='fa-solid fa-pen-to-square'></i></button> <button data='"+data[i].commune_code+"' id ='showModal2' data-bs-toggle='modal' data-bs-target='#modal2' class='btn btn-warning btn-sm editStatBtn '><i class='fa-solid fa-eye'></i></button>"
}

taux_avancememnt_1 = parseFloat(taux_avancememnt_1).toFixed(2)
taux_avancememnt_2 = parseFloat(taux_avancememnt_2).toFixed(2)


var taux2=""
if(taux_avancememnt_2<=100){
        taux2 = "<td  class='align-middle'><div class='progress'><div class='progress-bar' role='progressbar' style='width: "+taux_avancememnt_2+"%;' aria-valuenow='"+taux_avancememnt_2+"' aria-valuemin='0' aria-valuemax='100'>"+taux_avancememnt_2+"%</div></div></td>"
}else{
    taux2 = "<td  class='align-middle'><div class='progress'><div class='progress-bar' role='progressbar' style='width: 0%;' aria-valuenow='0' aria-valuemin='0' aria-valuemax='100'>0%</div></div></td>"
}

var taux1=""
if(taux_avancememnt_1<=100){
    taux1 = "<td  class='align-middle'><div class='progress'><div class='progress-bar' role='progressbar' style='width: "+taux_avancememnt_1+"%;' aria-valuenow='"+taux_avancememnt_1+"' aria-valuemin='0' aria-valuemax='100'>"+taux_avancememnt_1+"%</div></div></td>"
}else{
    taux1 =  "<td  class='align-middle'><div class='progress'><div class='progress-bar' role='progressbar' style='width: 0%;' aria-valuenow='0' aria-valuemin='0' aria-valuemax='100'>0%</div></div></td>"
}
/******************************************* */


list+="<tr class='text-center'><td>"+data[i].commune_code+"</td><td class='align-middle' > "+data[i].commune_name_ascii+"</td><td  class='align-middle'>"+data[i].qst_a_recense+"</td><td  class='align-middle'>"+data[i].qst_recense+"</td><td style='background:#c7e5ff6e;'  class='align-middle'>"+count+"</td>"+taux1+""+taux2+""+etat+"<td  style='width:90px !important;' class='align-middle'>"+button+"</td></tr>";


                total_questionnaire+=parseFloat(count);
                    }
                    $('#list').empty(list)
                    $('#list').append(list)
                    $('#spinner').hide()

                    $('#tableQst').DataTable({
                        searching: false,
                        "dom": '<"top"i>rt<"bottom"flp><"clear">',
                        "columnDefs": [
                            { "orderable": false, "targets": "_all" }, // Disable sorting for all columns
                           // { "orderable": true, "targets": [0] } // Enable sorting for the first column
                        ],
                        
                    });

                    
               
                }
          
            })

       
          $('#sum_qst_a_recense').html(nb_qst_a_recense)  
          $('#qst_recense').html(nb_qst_recense)  
          $('#total_questionnaire').html(total_questionnaire)


          $('#en_attente').html(sum_en_attente)
          $('#sum_rejete').html(sum_rejete)
          $('#sum_approuve').html(sum_approuve)

          sum_taux_avancememnt_1=(nb_qst_recense*100)/nb_qst_a_recense
         // sum_taux_avancememnt_1 = sum_taux_avancememnt_1/100
          sum_taux_avancememnt_1 = sum_taux_avancememnt_1.toFixed(2);
           // Round to two decimal places
   // sum_taux_avancememnt_1 = sum_taux_avancememnt_1.toFixed(2);

          $('#sum_taux_avancememnt_1').html('  <div class="progress-bar" style="width: '+sum_taux_avancememnt_1+'%">'+sum_taux_avancememnt_1+'%</div> '+sum_taux_avancememnt_1+'%')
        
          sum_taux_avancememnt_2 = (total_questionnaire*100)/nb_qst_recense
          //    sum_taux_avancememnt_2 = sum_taux_avancememnt_2 / 100

          sum_taux_avancememnt_2 = sum_taux_avancememnt_2.toFixed(2);
          $('#sum_taux_avancememnt_2').html('  <div class="progress-bar" style="width: '+sum_taux_avancememnt_2+'%">'+sum_taux_avancememnt_2+'%</div> '+sum_taux_avancememnt_2+'%')
       
          

    }

    getCommuneList('all','all')


    $(document).on("click","#showModal",function(){

           var data = $(this).attr('data')
        
            var filteredArray = list_commune.filter(function(item) {
                return item.commune_code === data;
              });
           
              $('#commune_name').val(filteredArray[0].commune_name_ascii)
              $('#nb_qst_a_recense').val(filteredArray[0].qst_a_recense)
             // $('#nb_qst_recense').val(filteredArray[0].qst_recense)
              $('#code_commune').val(data)
            


    })
    $(document).on("click","#showModal2",function(){
        console.log('okkkk')
        var data = $(this).attr('data')
        
         var filteredArray = list_commune.filter(function(item) {
             return item.commune_code === data;
           });
        
        
           $('#code_commune').val(data)
           var code_commune  = data
        
           
            // Destroy existing DataTable instance if it exists
            if ($.fn.DataTable.isDataTable('#example')) {
                $('#example').DataTable().destroy();
            }
        
            // Clear the table body to remove old data
            $('#example tbody').empty();
            var table = $('#example').DataTable({
                ajax: {
                    url: 'assets/php/list_nb_questionnaire.php', // Replace with your server endpoint
                    data: function(d) {
                        d.code_commune = code_commune;
                    },
                    dataSrc: ''
                },
                columns: [
                    { data: 'id' },
                    { data: 'commune_code' },
                    { data: 'date' },
                    { data: 'nombre_quest' },
                ]
            });
    // Make table variable accessible for the inline edit feature
    $('#example').on('click', 'tbody td:nth-child(4)', function() { // Targets the third column
        var cell = table.cell(this);
        if (cell) {
            var originalValue = cell.data();
            $(this).html('<input type="text" value="' + originalValue + '"/>');
            $('input', this).focus().on('blur', function() {
                var newValue = $(this).val();
                cell.data(newValue).draw();
                var rowIdx = cell.index().row;
                var rowData = table.row(rowIdx).data();
                var id = rowData.id; // Retrieve the id value from the row data
                var commune_code = rowData.commune_code;
                updateData(id, newValue,commune_code);
                
            });
        } else {
            console.error('Cell not found');
        }
    });
        
        })
        /************************* */

// Function to handle updating data (you'll need to define this function)
function updateData(id, value,commune_code) {
    // Your update logic here, e.g., AJAX request to update the server-side data
    console.log('Updating data at row:', id, 'with value:', value);

    $.ajax({
        url:'assets/php/update_nb_quest_recensee.php',
        method:'post',
        async:false,
        data:{id:id,value:value,commune_code:commune_code},
        success:function(response){
            console.log(response)
            if(response=='true'){
                location.reload();
            }
        }
    })
}


        /**************************************************** */

    $('#modifier').click(function(e){
        e.preventDefault()
console.log(sum_taux_avancememnt_1)
        var nb_qst_a_recense =  $('#nb_qst_a_recense').val()
        var nb_qst_recense =$('#nb_qst_recense').val()
        var code_commune =$('#code_commune').val()
        var date =$('#date').val()
console.log(date)

        $.ajax({
            url: url.updateNbQuestionnaire,
            method:'post',
            async:false,
            data:{code_commune:code_commune,nb_qst_recense:nb_qst_recense,nb_qst_a_recense:nb_qst_a_recense,date:date},
            success:function(response){
                console.log(response)
                $('#tableQst').DataTable().destroy();
$('#list').empty();
                getCommuneList('all','all')  
                
            }
        })




        
    })




/***************************************************************************** */

//get wilaya 


function getWilaya(){
        $.ajax({
        url: url.listWilSupNat,
        
        method:'post',
        async:false,
        success:function(response){
       

            var data = JSON.parse(response)
         
                var list_wilaya;
            for(var i=0;i<data.length; i++){
                list_wilaya+='<option value="'+data[i].wilaya_code+'">'+data[i].wilaya_name_ascii+'</option>'

            }

            $('#wilaya').append(list_wilaya)
          
        }
    })
}
getWilaya()






$('#wilaya').change(function(){
    

    var wilaya_code = $(this).val()
    commune(wilaya_code)
    $('#tableQst').DataTable().destroy();
    getCommuneList(wilaya_code,'all')
})
    /***************************************************************************** */


    // function get_wilaya_list(){
    //     $.ajax({
    //         url:'assets/php/list_wilaya.php',
    //         method:'post',
    //         async:false,
    //         success:function(response){
    //             console.log(response)
    //         }
    //     })
    // }
    // get_wilaya_list()
})