$(document).ready(function(){
    $('.js-example-basic-multiple').select2({
      
        width: "85%"
      });
   
    var count_user=0;
        function usersList(){
            $.ajax({
                url:'assets/php/list_superviseurs_national.php',
                method:'post',
                async:false,
                success:function(response){
                  data = JSON.parse(response)
                    var list_superviseurs=""
                    count_user = data.length
                   
                    for(i=0;i<data.length;i++){
                        list_superviseurs+="<tr><td>"+(i+1)+"</td><td>"+data[i].username+"</td><td>"+data[i].wilaya+"</td><td>"+data[i].nom_superviseur_national+"  "+data[i].prenom_superviseur_national+"</td><td>"+data[i].phone+"</td><td>Superviseur</td><td><a href='./superviseur_national_form.php?id_user="+data[i].id_user+"' class='btn btn-warning btn-sm'>Modifier</a></td></tr>"
                    }
                    $('#list_superviseurs_national').append(list_superviseurs)
                    $('#tableSuperviseur').DataTable();
                }
            })
        }
        usersList()
    
    
    /**********************************************************************************************/
    var wilaya_code;
        function getRecenseurData(){
            var id_user=$('#id_controleur').val()
           console.log(id_user)
            $.ajax({
                url:'assets/php/get_superviseur_national_data.php',
                method:'post',
                async:false,
                data:{id_user:id_user},
                success:function(response){
                    console.log(response)
                    getWilayaList()
                  
                    var data = JSON.parse(response)
                    $('#first_name').val(data[0].nom_superviseur_national)
                    $('#last_name').val(data[0].prenom_superviseur_national)
                    $('#email').val(data[0].email)
                    $('#wilaya').val(data[0].wilaya)
                   // $('#commune').val(data[0].commune)
                    $('#phone').val(data[0].phone)
                    $('#username').val(data[0].username)
                    $('#password').val(data[0].nonhashedpass)
                    
                   
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
    var password = $('#password').val()
    var username = $('#username').val()
    var id_superviseur = $('#id_controleur').val()
    var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    if(!emailRegex.test(email)){
        $('#email_error').html('email format invalid')
    
    
    }else{
        $('#email_error').html('')
        $('#first_name_error').html('')
        $('#last_name_error').html('')
    
        $.ajax({
            url:"assets/php/change_info_superviseur_national.php",
            method:'post',
            async:false,
            data:{first_name:first_name,last_name:last_name,email:email,phone:phone,id_superviseur:id_superviseur,wilaya:wilaya,password:password,username:username},
            success:function(response){
                console.log(response)
                if(response=="true"){
                   
                    Swal.fire({
                        position: "center",
                        icon: "success",
                        title: "Changement effectuée avec succès",
                        showConfirmButton: true,
                        
                      });
                }
            }
        })
    }
    
           
        })
    
    
        /**********************************************************************************/
        function containsOnlyLetters(input) {
            var letterRegex = /^[a-zA-Z\s]+$/;
            return letterRegex.test(input);
        }
        /************************************************************************************* */
        //get username
    
        $('#wilaya').change(function(){
    
         
          
            var wilaya = $(this).val()
            $.ajax({
                url:'assets/php/count_superviseur_national.php',
                method:'post',
                async:false,
               
                success:function(response){
                 
                    var data = JSON.parse(response)
                   console.log(data)
                    data = data+1
                    if(data < 10) {
                        // If it is, prepend '0' to the number
                        data = ("0" + data).slice(-2);
                    }
                   
                    $('#username').val('SN' +'-'+data)
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
                    url:"assets/php/add_users_superviserur.php",
                    method:'post',
                    async:false,
                    data:{role:"superviseur_national",first_name:first_name,last_name:last_name,email:email,phone:phone,wilaya:wilaya,username:username,password:password},
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