<?php
include('includes/header.php');
?>

<body>
    <br>
    <br>
    <div class="card">
        <div style="text-align: center;" class="card-header">
            <div class="row">
                <div class="col-8">
                    <h5>List des utilisateurs</h5>
                </div>
             <div class="col-3">
             <!-- <a class="btn btn-success" href="./add_superviseur.php">Ajouter superviseur</a> -->
             </div>
            </div>
            
            
            

        </div>
    



        <hr>
        <div class="container">
            <div class="card">
                <div style="text-align: center;" class="card-header">
                        <h6>Liste des utilisateurs</h6>
                       
                    
                </div>
                <div class="card-body">
                    <select id="wilaya" class='form-control' style="background: #0064f5;color: white;">
                        <option value="">Selection de wilaya</option>
                    </select>
                    <table class="table table-hover" id="tableUsers">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Nom d'utilisateur</th>
                                <th scope="col">Wilaya</th>
                                <th scope="col">Commune</th>
                                <th scope="col">Nom complet</th>
                                <th scope="col">Téléphone</th>
                                <th scope="col">Rôle</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody id="list_users" >
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <br>
        <br>



    </div>

    
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
<!-- <script src="./assets/js/superviseurs.js"></script> -->

<script>



    $(document).ready(function(){

        function getWwilaya(){

            $.ajax({
                url:'assets/php/list_wilaya.php',
                method:'post',
                async:false,
                success:function(response){
                    var data = JSON.parse(response)
                    var wilaya_list="<option></option>"
                    for(i=0;i<data.length; i++){
                        wilaya_list+="<option value='"+data[i].wilaya_code+"'>"+data[i].wilaya_code+" "+data[i].wilaya_name_ascii+"</option>"
                    }
                    $('#wilaya').append(wilaya_list)


                }
            })
        }

        getWwilaya()


        if (localStorage.getItem('filterValue')) {

            //get value from local storage
                $('#wilaya').val(localStorage.getItem('filterValue'));
                getUsersList(localStorage.getItem('filterValue'))
            }


                $('#wilaya').change(function(){

                    var wilaya_code = $(this).val()
                    localStorage.setItem('filterValue', wilaya_code);
                    getUsersList(wilaya_code)
                    
                })


        function getUsersList(wilaya_code){
            $.ajax({
                url:'assets/php/utilisateurs_list.php',
                method:'post',
                async:false,
                data:{wilaya_code:wilaya_code},
                success:function(response){
                    console.log(response)

                        var data = JSON.parse(response)
                    var list_users=""
                    for(var i = 0; i < data.length ; i++){
                        var nom="-";
                        var prenom="";
                        var wilaya="-"; 
                        var commune="-"
                        var phone="-";
                        var id_user="";
                        

                        var controleur =""
                        var wilaya_code_controleur="";
                      

                            if(data[i].role=="superviseur_national"){
                                nom =  data[i].nom_superviseur_national
                                prenom =  data[i].prenom_superviseur_national
                                wilaya =  data[i].superviseur_nat_wilaya
                                phone =  data[i].phone
                                id_user = data[i].id_user_superviseur_national
                            }if(data[i].role=="superviseur"){
                                nom =  data[i].nom_superviseur
                                prenom =  data[i].prenom_superviseur
                                wilaya =  data[i].wilaya_sup
                                phone =  data[i].superviseur_phone
                                id_user = data[i].id_user_superviseur
                            }if(data[i].role=="controleur"){
                                wilaya_code_controleur=data[i].wilaya_code_controleur
                                nom =  data[i].nom_controleur
                                prenom =  data[i].prenom_controleur
                                wilaya =  data[i].controleur_wilaya
                                
                                phone =  data[i].controleur_phone
                                commune =  data[i].controleur_commune
                                id_user = data[i].id_user_controleur
                            }
                            if(data[i].role=="recenseur"){
                                controleur=data[i].controleur
                                console.log(controleur)
                                nom =  data[i].nom_recensseur
                                prenom =  data[i].prenom_recenseur
                                phone =  data[i].recenseur_phone
                                commune =  data[i].recenseur_commune
                                id_user = data[i].id_user_recenseur
                            }


                        list_users+='<tr><td>'+data[i].id_userr+'</td><td>'+data[i].username+'</td><td>'+wilaya+'</td><td>'+commune+'</td><td>'+prenom+' '+nom+'</td><td>'+phone+'</td><td>'+data[i].role+'</td><td><button id="user_details" controleur="'+controleur+'" role="'+data[i].role+'" data="'+id_user+'" wilaya="'+wilaya+'"  wilaya_code_controleur ="'+wilaya_code_controleur+'"class="btn btn-warning btn-sm"><i class="fa-solid fa-eye"></i></button></td></tr>'
                    }
                    $('#list_users').empty()
                    $('#list_users').append(list_users)

                    $('#tableUsers').DataTable();

                }
            })
        }

       
 

        $(document).on('click','#user_details',function(){

            var role = $(this).attr('role')
            var id_user = $(this).attr('data')
            console.log(id_user)
            if(role=="superviseur"){
                window.location="superviseur_form.php?id_user="+id_user
            }
            if(role=="controleur"){
                var wilaya= $(this).attr('wilaya')
                var wilaya_code_controleur= $(this).attr('wilaya_code_controleur')
                window.location="controleur_form.php?id_user="+id_user+"&wilaya="+wilaya+"&wilaya_code_controleur="+wilaya_code_controleur
            }
            if(role=="recenseur"){

                var controleur = $(this).attr('controleur')
                window.location="recenseur_form.php?id_user="+id_user+"&controleur="+controleur
            }
            if(role=="superviseur_national"){
                window.location="superviseur_national_form.php?id_user="+id_user
            }
            //window.location="user_details.php?id_user="+id_user
        //     $.ajax({
        //         url:'assets/php/get_user_details.php',
        //         method:'post',
        //         async:false,
        //         success::function(response){
        //             console.log(response)
        //         }

         })
      
        // $(document).on('click','#delete',function(){
        //     var id_user = $(this).attr('data')
        //     console.log(id_user)

        //                 Swal.fire({
        //                         title: "Etes vous sur?",
                               
        //                         icon: "warning",
        //                         showCancelButton: true,
        //                         confirmButtonColor: "#3085d6",
        //                         cancelButtonColor: "#d33",
        //                         confirmButtonText: "Oui"
        //                         }).then((result) => {
        //                         if (result.isConfirmed) {


        //                             $.ajax({
        //                                 url:'assets/php/delete_user.php',
        //                                 method:'post',
        //                                 async:false,
        //                                 data:{
        //                                     id_user:id_user
        //                                 },
        //                                 success:function(response){
        //                                     console.log(response)
        //                                     getUsersList()

        //                                     Swal.fire({
        //                             title: "Suppression effectuer avec success !",
                                    
        //                             icon: "success"
        //                             });
                                            
        //                                 }
        //                             })
                                    
        //                         }
        //                         });



        // })

    })
</script>
</body>

</html>