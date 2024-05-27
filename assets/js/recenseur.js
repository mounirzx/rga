$(document).ready(function(){

    
    var wilaya;
    function usersList(){
        $.ajax({
            url:'assets/php/list_recenseur.php',
            method:'post',
            async:false,
            success:function(response){
                console.log(response)
                var data = JSON.parse(response)
             
                var list_recenseurs=""
                for(i=0;i<data.length;i++){
                    wilaya = data[0].wilaya_code
                    console.log(wilaya)
                    list_recenseurs+="<tr><td>"+(i+1)+"</td><td>"+data[i].username+"</td><td>"+data[i].wilaya_name_ascii+"</td><td>"+data[i].prenom_recenseur+"  "+data[i].nom_recensseur+"</td><td>"+data[i].phone+"</td><td>Recenseur</td><td><a href='./recenseur_form.php?id_user="+data[i].id_user+"' class='btn btn-warning btn-sm'>Modifier</a></td></tr>"
                }
                $('#list_recenseurs').append(list_recenseurs)
                $('#tablerecenseur').DataTable();
            }
        })
    }
    usersList()


/**********************************************************************************************/

    function getRecenseurData(){
        var id_user=$('#id_recenseur').val()
        console.log(id_user)
        $.ajax({
            url: url.getRecenseurData,
            method:'post',
            async:false,
            data:{id_user:id_user},
            success:function(response){
                getCommuneList()
                console.log(response)
                var data = JSON.parse(response)
               
                $('#first_name').val(data[0].nom_recensseur)
                $('#last_name').val(data[0].nom_recensseur)
                $('#email').val(data[0].email)
                $('#commune').val(data[0].commune)
                $('#phone').val(data[0].phone)
                $('#username').val(data[0].username)
                $('#password').val(data[0].nonhashedpass)
            }
        })
    }
    getRecenseurData()

/************************************************************************************************/
    function getCommuneList(){

        var controleur = $('#controleur').val()
        $.ajax({
            url:'assets/php/commune_affecte.php',
            method:'post',
            async:false,
            data:{
                controleur:controleur
            },
            success:function(response){

                console.log(response)
                var data = JSON.parse(response)
                var commune="";
                for(i=0;i<data.length;i++){
                    commune+="<option value='"+ data[i].commune_code+"'>"+data[i].commune_name_ascii+" "+data[i].commune_name+" "+data[i].commune_code+"</option>"
                }
                $('#commune').append(commune)

              
            }
        })
    }



    /***********************************************************************************************/

    $('#valider').click(function(e){
e.preventDefault()


var first_name = $('#first_name').val()
var last_name = $('#last_name').val()
var commune = $('#commune').val()
var email = $('#email').val()
var phone = $('#phone').val()
var password = $('#password').val()
var username = $('#username').val()
var id_recenseur = $('#id_recenseur').val()
var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
if(!emailRegex.test(email)){
    $('#email_error').html('email format invalid')
}else{
    $('#email_error').html('')
    $('#first_name_error').html('')
    $('#last_name_error').html('')
}
$(this).attr('disabled','true')
        $.ajax({
            url:"assets/php/change_info_recenseur.php",
            method:'post',
            async:false,
            data:{first_name:first_name,last_name:last_name,commune:commune,email:email,phone:phone,id_recenseur:id_recenseur,password:password,username:username},
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

    /************************************************************************************** */
    $('#commune').change(function(){
        $.ajax({
            url:'assets/php/recenseur_by_wilaya.php',
            method:'post',
            async:false,
            data:{wilaya:wilaya},
            success:function(response){
             
                var data = JSON.parse(response)

                var count =data.count
                console.log(count)
                count = count+1
                console.log(data)
                if(count < 10) {

                    // If it is, prepend '0' to the number
                    count = ("0" + count).slice(-2);
                    
                }
               
                $('#username').val('R'+data.wilaya +'-'+count)
            }
        })

    
      
    })
    /***************************************************************************** */
    
    $('#add_user').click(function(e){
        e.preventDefault()
        
        
        var first_name = $('#first_name').val()
        var last_name = $('#last_name').val()
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
        $(this).attr('disabled','true')
                $.ajax({
                    url:"assets/php/add_users.php",
                    method:'post',
                    async:false,
                    data:{role:"recenseur",first_name:first_name,last_name:last_name,commune:commune,email:email,phone:phone,username:username,password:password},
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
                            }else if(data.response=="1"){
                                Swal.fire({
                                    icon: "error",
                                    title: "Oops...",
                                    text: "Cet utilisateur existe déja",
                                   
                                  });
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