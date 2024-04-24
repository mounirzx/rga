$(document).ready(function(){


    function usersList(){
        $.ajax({
            url:'assets/php/list_superviseurs.php',
            method:'post',
            async:false,
            success:function(response){
              data = JSON.parse(response)
                var list_superviseurs=""
                for(i=0;i<data.length;i++){
                    list_superviseurs+="<tr><td>"+(i+1)+"</td><td>"+data[i].username+"</td><td>"+data[i].wilaya_name_ascii+"</td><td>"+data[i].nom_superviseur+"  "+data[i].prenom_superviseur+"</td><td>"+data[i].phone+"</td><td>Superviseur</td><td><a href='./superviseur_form.php?id_user="+data[i].id_user+"' class='btn btn-warning btn-sm'>Modifier</a></td></tr>"
                }
                $('#list_superviseurs').append(list_superviseurs)
                $('#tableSuperviseur').DataTable();
            }
        })
    }
    usersList()


/**********************************************************************************************/
var wilaya_code;
    function getRecenseurData(){
        var id_user=$('#id_controleur').val()
       
        $.ajax({
            url:'assets/php/get_superviseur_data.php',
            method:'post',
            async:false,
            data:{id_user:id_user},
            success:function(response){
                getWilayaList()
              
                var data = JSON.parse(response)
                $('#first_name').val(data[0].nom_superviseur)
                $('#last_name').val(data[0].prenom_superviseur)
                $('#email').val(data[0].email)
                $('#wilaya').val(data[0].wilaya)
               // $('#commune').val(data[0].commune)
                $('#phone').val(data[0].phone)
                $('#username').val(data[0].username)
                
                
               
            }
        })
    }
    getRecenseurData()

/************************************************************************************************/

/************************************************************************************************/
function getWilayaList(){
    $.ajax({
        url:'assets/php/list_wilaya.php',
        method:'post',
        async:false,
      
        success:function(response){

         
            var data = JSON.parse(response)
            var wilaya="";
            for(i=0;i<data.length;i++){
                wilaya+="<option value='"+data[i].wilaya_code+"'>"+data[i].wilaya_name_ascii+" "+data[i].wilaya_name+"</option>"
            }
            $('#wilaya').append(wilaya)

          
        }
    })
}


    /***********************************************************************************************/

    $('#valider').click(function(e){
e.preventDefault()


var first_name = $('#first_name').val()
var last_name = $('#last_name').val()
var wilaya = $('#wilaya').val()

var email = $('#email').val()
var phone = $('#phone').val()
var id_superviseur = $('#id_superviseur').val()
var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
if(!emailRegex.test(email)){
    $('#email_error').html('email format invalid')
}else{
    $('#email_error').html('')
    $('#first_name_error').html('')
    $('#last_name_error').html('')
}

        $.ajax({
            url:"assets/php/change_info_superviseur.php",
            method:'post',
            async:false,
            data:{first_name:first_name,last_name:last_name,email:email,phone:phone,id_superviseur:id_superviseur,wilaya:wilaya},
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
    

        //get username

        $('#wilaya').change(function(){

     
      
            var wilaya = $(this).val()
            $.ajax({
                url:'assets/php/superviseur_by_wilaya.php',
                method:'post',
                async:false,
                data:{wilaya:wilaya},
                success:function(response){
                 
                    var data = JSON.parse(response)
                   console.log(data)
                    data = data+1
                    if(data < 10) {
                        // If it is, prepend '0' to the number
                        data = ("0" + data).slice(-2);
                    }
                   
                    $('#username').val('S'+wilaya +'-'+data)
                }
            })
    
          
        })
        
    
    
    
    /******************************************************************************************** */
        $('#add_user').click(function(e){
            e.preventDefault()
            console.log('data')
            
            var first_name = $('#first_name').val()
            var last_name = $('#last_name').val()
            var wilaya = $('#wilaya').val()
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
            
                $.ajax({
                    url:"assets/php/add_superviseur.php",
                    method:'post',
                    async:false,
                    data:{first_name:first_name,last_name:last_name,email:email,phone:phone,wilaya:wilaya,username:username,password:password},
                    success:function(response){
                        var data = JSON.parse(response)
                        console.log(data)
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
                        }
                    },
                    error: function(xhr, status, error) {
                        console.error("AJAX Error:", error);
                    }
                })
            }
            
                   
                })
            
})//ready