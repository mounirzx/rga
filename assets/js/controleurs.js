$(document).ready(function(){


    $(document).ready(function() {
        $('.js-example-basic-multiple').select2({
      
        width: "85%"
      });
    });
    function usersList(){
        $.ajax({
            url:'assets/php/list_controleurs.php',
            method:'post',
            async:false,
            success:function(response){
              data = response
                var list_controleurs=""
                for(i=0;i<data.length;i++){
                    list_controleurs+="<tr><td>"+(i+1)+"</td><td>"+data[i].username+"</td><td>"+data[i].wilaya_name_ascii+"</td><td>"+data[i].commune+"</td><td>"+data[i].nom_controleur+"  "+data[i].prenom_controleur+"</td><td>"+data[i].phone+"</td><td>Controleur</td><td><a href='./controleur_form.php?id_user="+data[i].id_user+"' class='btn btn-warning btn-sm'>Modifier</a></td></tr>"
                }
                $('#list_controleurs').append(list_controleurs)
                $('#tableControleur').DataTable();
            }
        })
    }
    usersList()


/**********************************************************************************************/
var wilaya_code;
    function getRecenseurData(){
        var id_user=$('#id_controleur').val()
       
        $.ajax({
            url:'assets/php/get_controleur_data.php',
            method:'post',
            async:false,
            data:{id_user:id_user},
            success:function(response){
                //getWilayaList()
              
                var data = JSON.parse(response)
                $('#first_name').val(data[0].nom_controleur)
                $('#last_name').val(data[0].prenom_controleur)
                $('#email').val(data[0].email)
                $('#wilaya').val(data[0].wilaya)
                console.log(data[0].wilaya)
               // $('#commune').val(data[0].commune)
                $('#phone').val(data[0].phone)
                $('#username').val(data[0].username)
                wilaya_code = data[0].wilaya
               $('#password').val(data[0].nonhashedpass)
                
                getCommuneList()
                $('#commune').val(data[0].commune).trigger('change');
            }
        })
    }
    getRecenseurData()

/************************************************************************************************/
    function getCommuneList(){
        console.log('test')
        $.ajax({
            url:'assets/php/list_commune.php',
            method:'post',
            async:false,
            data:{wilaya_code:wilaya_code},
            success:function(response){

              
                var data = JSON.parse(response)
                var commune="";
                for(i=0;i<data.length;i++){
                    commune+="<option value='"+data[i].commune_code+"'>"+data[i].commune_name_ascii+"  "+data[i].commune_name+"</option>"
                }
                $('#commune').append(commune)

              
            }
        })
    }

/************************************************************************************************/
// function getWilayaList(){
//     $.ajax({
//         url:'assets/php/list_wilaya.php',
//         method:'post',
//         async:false,
      
//         success:function(response){

         
//             var data = JSON.parse(response)
//             var wilaya="";
//             for(i=0;i<data.length;i++){
//                 wilaya+="<option value='"+data[i].wilaya_code+"'>"+data[i].wilaya_name_ascii+"</option>"
//             }
//             $('#wilaya').append(wilaya)

          
//         }
//     })
// }

$('#wilaya').change(function(){


    var wilaya_code = $(this).val()

    $.ajax({
        url:'assets/php/list_commune.php',
        method:'post',
        async:false,
        data:{wilaya_code:wilaya_code},
        success:function(response){

           
            var data = JSON.parse(response)
            var commune="";
            for(i=0;i<data.length;i++){
                commune+="<option value='"+data[i].commune_code+"'>"+data[i].commune_name_ascii+"  "+data[i].commune_name+"</option>"
            }
            $('#commune').empty(commune)
            $('#commune').append(commune)

          
        }
    })
    


    $.ajax({
        url:'assets/php/controleur_by_wilaya.php',
        method:'post',
        async:false,
        data:{wilaya:wilaya_code},
        success:function(response){
         
            var data = JSON.parse(response)
           console.log(data)
            data = data+1
            if(data < 10) {
                // If it is, prepend '0' to the number
                data = ("0" + data).slice(-2);
            }
           
            $('#username').val('C'+wilaya_code +'-'+data)
        }
    })

})
    /***********************************************************************************************/

    $('#valider').click(function(e){
e.preventDefault()


var first_name = $('#first_name').val()
var last_name = $('#last_name').val()
var wilaya = $('#wilaya').val()
var commune = $('#commune').val()
var email = $('#email').val()
var phone = $('#phone').val()
var id_controleur = $('#id_controleur').val()
var username = $('#username').val()
var password = $('#password').val()
var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
if(!emailRegex.test(email)){
    $('#email_error').html('email format invalid')
}else{
    $('#email_error').html('')
    $('#first_name_error').html('')
    $('#last_name_error').html('')
}

        $.ajax({
            url:"assets/php/change_info_controleur.php",
            method:'post',
            async:false,
            data:{first_name:first_name,last_name:last_name,commune:commune,email:email,phone:phone,id_controleur:id_controleur,wilaya:wilaya,password:password,username:username},
            success:function(response){
                console.log(response)
                if(response=="true"){
                   
                    Swal.fire({
                        position: "center",
                        icon: "success",
                        title: "Changement effectué avec succès",
                        showConfirmButton: true,
                        
                      });
                }
            }
        })
    })


    /**********************************************************************************/
    function containsOnlyLetters(input) {
        var letterRegex = /^[a-zA-Z\s]+$/;
        return letterRegex.test(input);
    }


    $('#add_user').click(function(e){
        e.preventDefault()
        
        
        var first_name = $('#first_name').val()
        var last_name = $('#last_name').val()
        var wilaya = $('#wilaya').val()
        var commune = $('#commune').val()
        var email = $('#email').val()
        var phone = $('#phone').val()
        var username = $('#username').val()
        var password = $('#password').val()
        var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        if(!emailRegex.test(email)){
            $('#email_error').html('email format invalid')
        }else{
            $('#email_error').html('')
            $('#first_name_error').html('')
            $('#last_name_error').html('')
        }
        
                $.ajax({
                    url:"assets/php/add_users.php",
                    method:'post',
                    async:false,
                    data:{role:"controleur",first_name:first_name,last_name:last_name,commune:commune,email:email,phone:phone,username:username,wilaya:wilaya,password:password},
                    success:function(response){
                        var data = JSON.parse(response)
                        console.log(response)
                        if(data.response=="true"){
                            console.log(response)
                            Swal.fire({
                                position: "center",
                                icon: "success",
                                title: "L'ajout effectuée avec succès",
                                showConfirmButton: true,
                                
                              });
                              $('#first_name').val("")
                              $('#last_name').val("")
                              $('#wilaya').val("")
                              $('#email').val("")
                              $('#phone').val("")
                              $('#username').val("")
                              $('#password').val("")
                        }else{
                            Swal.fire({
                                icon: "error",
                                title: "Oops...",
                                text: "Veuillez remplir les champs obligatoire!",
                               
                              });
                        }
                    },
                    error: function(xhr, status, error) {
                        console.error("AJAX Error:", error);
                    
                    }
                })
            })
    



            
            var count = 0;

            $('#phone').on('input', function() {
                var input = $(this).val().trim();
                var numbers = input.replace(/\D/g, ''); // Remove non-numeric characters
        
                if (numbers.length > 10) {
                    // If more than 10 numbers are entered, remove the extra ones
                    numbers = numbers.slice(0, 10);
                }
        
                $(this).val(numbers); // Update input value
                count = numbers.length;
            });


})//ready