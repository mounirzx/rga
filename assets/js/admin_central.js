$(document).ready(function(){



    /******************************************************************* */

    var count_users=0
    //list des utilisateurs
$.ajax({
    url:'./assets/php/list_admin_central.php',
    method:'post',
    async:false,
    success:function(response){
        console.log(response)
        var data = JSON.parse(response)
        var list_admin_central="";
        count_users=data.length;
        for(var i = 0; i<data.length; i++){
            list_admin_central+="<tr><td></td><td>"+data[i].username+"</td><td>"+data[i].nom_admin+"</td><td>"+data[i].phone+"</td><td>Admin central</td><td><a class='btn btn-warning btn-sm'  href='edit_admin_central.php?id_user="+data[i].id_user+"'><i class='fa-solid fa-user-pen'></i></a></td></tr>"
        }
        $('#list_admin_central').html(list_admin_central)
    }
})



/********************************************************************************* */

///get username

function getUsername(){
    count_users = parseInt(count_users) + 1;

    if(count_users < 10) {
        // If it is, prepend '0' to the number
        count_users = ("0" + count_users).slice(-2);
    }
    $('#username').val('AC-'+count_users)
    
    
    
}
getUsername()

/***********************************************************************************/

///ajouter admin central


$('#add_user').click(function(e){
    e.preventDefault()
    console.log('data')
    
    var first_name = $('#first_name').val()
    var last_name = $('#last_name').val()
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
            url:"assets/php/add_users.php",
            method:'post',
            async:false,
            data:{role:"admin_central",wilaya:"",commune:"",first_name:first_name,last_name:last_name,email:email,phone:phone,username:username,password:password},
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
                      $('#email').val("")
                      $('#phone').val("")
                      //$('#username').val("")
                      $('#password').val("")
                      getUsername()
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
    }
    
           
        })
    
/*************************************************************************************/

///get admin central data 
function getAdminData(){
    var id_user=$('#id_admin').val()
    $.ajax({
        url:'assets/php/get_admin_central_data.php',
        method:'post',
        async:false,
        data:{id_user:id_user},
        success:function(response){
          console.log(response)
            var data = JSON.parse(response)
            $('#first_name').val(data[0].nom_admin)
            $('#last_name').val(data[0].prenom_admin)
            $('#email').val(data[0].email)
            $('#phone').val(data[0].phone)
            $('#username').val(data[0].username)
            $('#password').val(data[0].nonhashedpass)
        }
    })
}//end function getAdminData
getAdminData()



/*********************************************************************************** */

//edit admin central

    $('#valider').click(function(e){

e.preventDefault()
        /***********/
        //data

        var first_name = $('#first_name').val();
        var last_name = $('#last_name').val();
        var email = $('#email').val();
        var phone = $('#phone').val();
        var username = $('#username').val();
        var password = $('#password').val();
        var id_user = $('#id_admin').val();
        var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        if(!emailRegex.test(email)){
            $('#email_error').html('email format invalid')
        }else{
            $('#email_error').html('')
            $('#first_name_error').html('')
            $('#last_name_error').html('')

            $.ajax({
                url:'assets/php/edit_admin_central.php',
                method:'post',
                async:false,
                data:{
                    first_name:first_name,last_name:last_name,email:email,phone:phone,username:username,password:password,id_user:id_user
                },
                success:function(response){
                    console.log(response)
                    if(response=='true'){
                        Swal.fire({
                            position: "center",
                            icon: "success",
                            title: "Changement effectué avec succès",
                            showConfirmButton: true,
                            
                          });
                    }
                }
            })

        }

        /***********/
    })

})//end ready