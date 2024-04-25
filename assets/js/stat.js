$(document).ready(function(){
   

var list_commune


var sum_en_attente=0;
var sum_rejete = 0;
var sum_approuve = 0;
var nb_qst_a_recense = 0
var nb_qst_recense=0
var total_questionnaire=0;
    function getCommuneList(wil){

            $.ajax({
                url:'assets/php/commune_by_user.php',
                method:'post',
                async:false,
                data:{wil:wil},
                success:function(response){
                   
                    var data = JSON.parse(response)
                  
                    list_commune = data
                    var list;
            
                  

                    for(var i=0; i < data.length; i++){



                   
                        var commune = data[i].commune_code;
                        console.log(commune)
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



                        /******************************************** */
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

                                 
                                    etat = "<td>"+approuvee+"</td><td>"+rejete+"</td><td>"+en_attente+"</td>"
                                }
                            })

                        /******************************************** */
                        nb_qst_a_recense+= parseFloat(data[i].qst_a_recense)
                        nb_qst_recense+= parseFloat(data[i].qst_recense)
                      var  taux_avancememnt_1 = (parseFloat(data[i].qst_recense)*100)/parseFloat(data[i].qst_a_recense)
                  
if(data[i].qst_a_recense==0){
    taux_avancememnt_1=0
}
var  taux_avancememnt_2 = (parseFloat(count)*100)/parseFloat(data[i].qst_recense)
if(data[i].qst_recense==0){
    taux_avancememnt_2=0
}
                            list+="<tr class='text-center'><td></td><td > "+data[i].commune_name_ascii+"</td><td>"+data[i].qst_a_recense+"</td><td>"+data[i].qst_recense+"</td><td>"+count+"</td><td><div class='progress'><div class='progress-bar' role='progressbar' style='width: "+taux_avancememnt_1+"%;' aria-valuenow='"+taux_avancememnt_1+"' aria-valuemin='0' aria-valuemax='100'>"+taux_avancememnt_1+"%</div></div></td><td><div class='progress'><div class='progress-bar' role='progressbar' style='width: "+taux_avancememnt_2+"%;' aria-valuenow='"+taux_avancememnt_2+"' aria-valuemin='0' aria-valuemax='100'>"+taux_avancememnt_2+"%</div></div></td>"+etat+"<td><button data='"+data[i].commune_code+"' id ='showModal' data-bs-toggle='modal' data-bs-target='#exampleModal' class='btn btn-warning btn-sm'><i class='fa-solid fa-pen-to-square'></i></button></td></tr>"

                            total_questionnaire+=parseFloat(count);
                    }
                    $('#list').empty(list)
                    $('#list').append(list)
                    $('#tableQst').DataTable({
                       
                    });
                }
          
            })

       
          $('#sum_qst_a_recense').html(nb_qst_a_recense)  
          $('#qst_recense').html(nb_qst_recense)  
          $('#total_questionnaire').html(total_questionnaire)


          $('#en_attente').html(sum_en_attente)
          $('#sum_rejete').html(sum_rejete)
          $('#sum_approuve').html(sum_approuve)
      
       
          

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

        var nb_qst_a_recense =  $('#nb_qst_a_recense').val()
        var nb_qst_recense =$('#nb_qst_recense').val()
        var code_commune =$('#code_commune').val()
      


        $.ajax({
            url:'assets/php/update_nb_quesionnaire.php',
            method:'post',
            async:false,
            data:{code_commune:code_commune,nb_qst_recense:nb_qst_recense,nb_qst_a_recense:nb_qst_a_recense},
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

    // $.ajax({
    //     url:'assets/php/etat_avancement.php',
    //     method:'post',
    //     async:false,
    //     success:function(response){
    //         console.log(response)

    //         var data = JSON.parse(response)
    //         console.log(data)
    //         console.log(data.sum_qst_a_recense)
    //         $('#sum_qst_a_recense').html(data.sum_qst_a_recense)
    //         $('#qst_recense').html(data.qst_recense)
    //     }
    // })
})