

$(document).ready(function(){

function commune(wil){

    $.ajax({
        url:'assets/php/commune_by_user.php',
        method:'post',
        async:false,
        data:{wil:wil},
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
commune('all')


/***************************************************************************************************/
//
$("#listCommune").change(function(){
    var communeCode = $(this).val()
    console.log(communeCode)
    //console.log("Before filtering - Search criteria:", table.column(0));
    //table.column(0).search(communeCode).draw();

})
/***************************************************************************************************/

var list_commune



    function getCommuneList(wil) {

        var sum_en_attente=0;
        var sum_rejete = 0;
        var sum_approuve = 0;
        var nb_qst_a_recense = 0
        var nb_qst_recense=0
        var total_questionnaire=0;
        var sum_taux_avancememnt_1=0;
        var sum_taux_avancememnt_2=0;
        
            $.ajax({
                url:'assets/php/commune_by_user.php',
                method:'post',
                async:false,
                data:{wil:wil},
                success:function(response){
                   
                    var data = JSON.parse(response)
                  
                    list_commune = data

                   
                    /*********************************************************************************** */
                    var list;
            
                  

                    for(var i=0; i < data.length; i++){
                        var commune = data[i].commune_code;
                        var count=0;
                        $.ajax({
                            url:'assets/php/nb_qst.php',
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
                                url:'assets/php/etat_questionnaire.php',
                                method:'post',
                                async:false,
                                data:{commune:commune},
                                success:function(response){
                                  
                                    var data = JSON.parse(response)
                                  

                                    var en_attente=0;
                                    var approuvee=0;
                                    var rejete=0;

                                    for(var i =0; i<data.length;i++){

                                        if(data[i].etat =='En attente'){
                                            en_attente = data[i].total 
                                        }
                                        if(data[i].etat =='approuvee'){
                                            approuvee = data[i].total 
                                        }
                                        if(data[i].etat =='rejete'){
                                            rejete = data[i].total 
                                        }
                                      
                                    }
                                    sum_en_attente+= en_attente;
                                    sum_rejete +=rejete;
                                    sum_approuve += approuvee;

                                 
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

//calculer la somme du taux de recencement par rapport au nombre de questionnaire saisis

                            list+="<tr class='text-center'><td>"+data[i].commune_code+"</td><td class='align-middle' > "+data[i].commune_name_ascii+"</td><td  class='align-middle'>"+data[i].qst_a_recense+"</td><td  class='align-middle'>"+data[i].qst_recense+"</td><td style='background:#c7e5ff6e;'  class='align-middle'>"+count+"</td><td  class='align-middle'><div class='progress'><div class='progress-bar' role='progressbar' style='width: "+taux_avancememnt_1+"%;' aria-valuenow='"+taux_avancememnt_1+"' aria-valuemin='0' aria-valuemax='100'>"+taux_avancememnt_1+"%</div></div></td><td  class='align-middle'><div class='progress'><div class='progress-bar' role='progressbar' style='width: "+taux_avancememnt_2+"%;' aria-valuenow='"+taux_avancememnt_2+"' aria-valuemin='0' aria-valuemax='100'>"+taux_avancememnt_2+"%</div></div></td>"+etat+"<td  class='align-middle'><button data='"+data[i].commune_code+"' id ='showModal' data-bs-toggle='modal' data-bs-target='#exampleModal' class='btn btn-primary btn-sm editStatBtn '><i class='fa-solid fa-pen-to-square'></i></button></td></tr>"

                            total_questionnaire+=parseFloat(count);
                    }
                    $('#list').empty(list)
                    $('#list').append(list)

                    $('#tableQst').DataTable({
                        searching: false,
                        "dom": '<"top"i>rt<"bottom"flp><"clear">',
                        "columnDefs": [
                            { "orderable": false, "targets": "_all" }, // Disable sorting for all columns
                           // { "orderable": true, "targets": [0] } // Enable sorting for the first column
                        ],
                        
                    });

                    // new DataTable('#tableQst', {
                    //     layout: {
                    //         top2: 'searchPanes',
                    //         top1: 'searchBuilder'
                    //     },
                    //     initComplete: function () {
                    //         // this.api().columns().every(function () {
                    //         //     var column = this;
                    //         //     var title = column.header().textContent;
                     
                    //         //     $('<input type="text" placeholder="Search ' + title + '" />')
                    //         //         .appendTo($(column.header()).empty())
                    //         //         .on('keyup change clear', function () {
                    //         //             if (column.search() !== this.value) {
                    //         //                 column.search(this.value).draw();
                    //         //             }
                    //         //         });
                    //         // });
                    //     },
                    //     dom: 'Plfrtip',
                    //     searchPanes: {
                    //         viewTotal: true
                    //     }
                    // });
                    
               
                }
          
            })

       
          $('#sum_qst_a_recense').html(nb_qst_a_recense)  
          $('#qst_recense').html(nb_qst_recense)  
          $('#total_questionnaire').html(total_questionnaire)


          $('#en_attente').html(sum_en_attente)
          $('#sum_rejete').html(sum_rejete)
          $('#sum_approuve').html(sum_approuve)


          sum_taux_avancememnt_1 = sum_taux_avancememnt_1/100
           // Round to two decimal places
   // sum_taux_avancememnt_1 = sum_taux_avancememnt_1.toFixed(2);

          $('#sum_taux_avancememnt_1').html('  <div class="progress-bar" style="width: '+sum_taux_avancememnt_1+'%">'+sum_taux_avancememnt_1+'%</div> '+sum_taux_avancememnt_1+'%')
          sum_taux_avancememnt_2 = sum_taux_avancememnt_2 / 100
          $('#sum_taux_avancememnt_2').html('  <div class="progress-bar" style="width: '+sum_taux_avancememnt_2+'%">'+sum_taux_avancememnt_2+'%</div> '+sum_taux_avancememnt_2+'%')
       
          

    }

    getCommuneList('all')


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


    $('#modifier').click(function(e){
        e.preventDefault()
console.log(sum_taux_avancememnt_1)
        var nb_qst_a_recense =  $('#nb_qst_a_recense').val()
        var nb_qst_recense =$('#nb_qst_recense').val()
        var code_commune =$('#code_commune').val()
        var date =$('#date').val()
console.log(date)

        $.ajax({
            url:'assets/php/update_nb_quesionnaire.php',
            method:'post',
            async:false,
            data:{code_commune:code_commune,nb_qst_recense:nb_qst_recense,nb_qst_a_recense:nb_qst_a_recense,date:date},
            success:function(response){
                console.log(response)
                $('#tableQst').DataTable().destroy();
$('#list').empty();
                getCommuneList('all')  
                
            }
        })




        
    })




/***************************************************************************** */

//get wilaya 


function getWilaya(){
        $.ajax({
        url:'assets/php/wilaya_list_sup_nat.php',
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
   
    $('#tableQst').DataTable().destroy();
    getCommuneList(wilaya_code)
})
    /***************************************************************************** */

})