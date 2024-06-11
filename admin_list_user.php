<?php
include('includes/header.php');
?>
<body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
       
   <!--===============================================================================================-->
   <script src="static/vendor/jquery/jquery-3.2.1.min.js"></script>
    <!--===============================================================================================-->
    <script src="static/vendor/bootstrap/js/popper.js"></script>
    <script src="static/vendor/bootstrap/js/bootstrap.min.js"></script>
    <!--===============================================================================================-->
    <script src="static/vendor/select2/select2.min.js"></script>
    <!--===============================================================================================-->
    <script src="https://cdn.datatables.net/2.0.3/js/dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/2.0.3/js/dataTables.bootstrap5.min.js"></script>
    <style>
        .edit-container {
            display: flex;
            align-items: center;
        }
        .edit-container input {
            margin-right: 10px;
            max-width: 50%;
        }
    </style>
    <br>
    <br>


<!-- 
<div class="card">
<div class="card-body">
            <div class="row">
                <div style="padding-left:100px" class="col">
                    <table id="userTable">
                        <thead>
                            <tr>
                                <th style="min-width:300px">Username</th>
                                <th style="min-width:300px">Mot de passe</th>
                                <th style="min-width:80px">Actions</th> 
                            </tr>
                        </thead>
                        <tbody></tbody>
                    </table>
                </div>
       
            </div>
        </div>

</div> -->


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Information de l'utilisateur</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form>
  <div class="form-group">
    <label for="exampleInputEmail1">Nom </label>
    <input type="text" class="form-control" id="nom" aria-describedby="emailHelp" >
    
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Prenom</label>
    <input type="text" class="form-control" id="prenom" >
  </div>
  
 
</form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
     
      </div>
    </div>
  </div>
</div>


    <div class="card">
        <div style="text-align: center;" class="card-header">
            <div class="row">
                <div class="col-8">
                    <h5>Modification des utilisateurs</h5>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="row">
                <div style="padding-left:100px" class="col">
                    <table id="userTable">
                        <thead>
                            <tr>
                            <th style="min-width:300px">id</th>
                                <th style="min-width:300px">Username</th>
                                <th style="min-width:300px">Mot de passe</th>
                                <th style="min-width:80px">Actions</th> 
                            </tr>
                        </thead>
                        <tbody></tbody>
                    </table>
                </div>
                <div class="col">
                    <br><br><br>
                    <br><br><br>
                    <br><br><br>
                    <div id="container">
                        <div class="row">
                            <div class="col">
                                <input style="max-width:300px" type="text" class="form-control" value="" id="passwordField">
                                <br>
                                <div id="copyMessage" style="color:green; display: none;"><b>Valeur copiée !</b></div>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="container center-container">
                                <div class="col" style="align-items: center !important;">
                                    <button style="max-width:300px; margin-left:46px;" class="btn btn-info generateBtn">Générer un mot de passe</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
        <script>



// $(document).ready(function(){

// function listUsers(){
//     $.ajax({
//         url:'admins/listUsers.php',
//         method:'post',
//         async:false,
//         success:function(data){
//                 console.log(response)
//         }
//     })
// }

// })


            $(document).ready(function() {
                var table = $('#userTable').DataTable({
                    ajax: {
                        url: 'admins/crud.php',
                        dataSrc: ''
                    },
                    columns: [
                        { data: 'id_user' , className: 'text-center'},
                        { data: 'username' },
                        { data: 'nonhashedpass' },
                        {
                            // New column for delete button
                            data: null,
                            defaultContent: '<button class="btn btn-danger  deleteBtn"><i style="font-size: 19px; color: white;" class="fa fa-trash" aria-hidden="true"></i></button><button type="button" class="btn btn-info infoBtn" data-toggle="modal" data-target="#exampleModal"><i style="font-size: 19px; color: white;" class="fa fa-eye" aria-hidden="true"></i></button>'
                        }
                    ]
                });

                // Click event handler for editing
                $('#userTable tbody').on('click', 'td', function() {
                    var cell = table.cell(this);
                    var columnIndex = cell.index().column;
                    var rowIndex = cell.index().row;
                    if (columnIndex === 0 || $(this).find('.deleteBtn').length > 0) {
                        return; // "id" column clicked or delete button clicked, do nothing
                    }
                    // Check if the clicked cell already contains an input field
                    if ($(this).find('input').length > 0) {
                        return; // Input field already exists, do nothing
                    }

                    // Close any open input fields
                    $('#userTable tbody td').each(function() {
                        var existingInput = $(this).find('input');
                        if (existingInput.length > 0) {
                            var cellData = existingInput.val();
                            $(this).html(cellData);
                        }
                    });

                    // Get the cell data and replace with input field and validate button
                    var cellData = cell.data();
                    $(this).html('<div class="edit-container"><input type="text" class="form-control" id="pasteField" value="' + cellData + '"><button  class="btn btn-success validateBtn" ><i style="font-size: 19px; color: white;" class="fa fa-check" aria-hidden="true"></i></button></div>');
                    // Focus on the input field 
                    $(this).find('input').focus();
                });

                // Click event handler for validate button (using event delegation)
                $('#userTable').on('click', '.validateBtn', function() {
                    var newValue = $(this).prev('input').val();
                    var cell = table.cell($(this).closest('td'));
                    var columnIndex = cell.index().column;
                  
                    var rowIndex = cell.index().row;
                    var columnName = table.column(columnIndex).dataSrc(); // Get actual column name
                    var id_user = table.cell(rowIndex, 0).data();
console.log(id_user)
                    // Send the new value to PHP for update
                    $.ajax({
                        url: 'admins/process_changes.php',
                        method: 'POST',
                        data: {
                            id: id_user , // Assuming IDs start from 1
                            column: columnName,
                            value: newValue
                        },
                        success: function(response) {
                            console.log(response); // Handle success response
                        },
                        error: function(xhr, status, error) {
                            console.error(xhr.responseText); // Handle error response
                        }
                    });

                    // Replace the input field and button with the updated value
                    cell.data(newValue);
                });

                // Event handler for delete button click
                $('#userTable').on('click', '.deleteBtn', function(event) {
                    event.stopPropagation(); // Prevent editing cell when delete button is clicked
                    var row = table.row($(this).closest('tr'));
                    var rowData = row.data();
                    var userId = rowData.id_user;
                    var role = rowData.role;
                    var username = rowData.username; // Get the username
console.log(userId)
console.log(role)
                    // Display confirmation dialog using SweetAlert
                    Swal.fire({
                        title: 'Êtes-vous sûr?',
                        text: 'Vous ne pourrez pas revenir en arrière!',
                        icon: 'warning',
                        showCancelButton: true,
                        confirmButtonColor: '#3085d6',
                        confirmButtonText: 'Oui, supprimer!',
                        cancelButtonText: 'Annuler'
                    }).then((result) => {
                        if (result.isConfirmed) {
                            // Send delete request to server
                            $.ajax({
                                url: 'admins/delete_user.php',
                                method: 'POST',
                                data: { id: userId, role: role },
                                success: function(response) {
                                    // Remove the row from the table on successful deletion
                                    row.remove().draw(false);
                                    console.log(response); // Handle success response
                                    // Show success message using SweetAlert
                                    Swal.fire({
                                        icon: 'success',
                                        title: 'Supprimé!',
                                        text: 'L\'utilisateur a été supprimé avec succès.',
                                        timer: 1000, // 1 second
                                        showConfirmButton: false
                                    });
                                },
                                error: function(xhr, status, error) {
                                    console.error(xhr.responseText); // Handle error response
                                    // Show error message using SweetAlert
                                    Swal.fire({
                                        icon: 'error',
                                        title: 'Erreur!',
                                        text: 'Échec de la suppression de l\'utilisateur. Veuillez réessayer.'
                                    });
                                }
                            });
                        }
                    });
                });




                /******************************************************************************* */
                                // Event handler for delete button click
                                $('#userTable').on('click', '.infoBtn', function(event) {
                                    // event.stopPropagation(); // Prevent editing cell when delete button is clicked
                                    var row = table.row($(this).closest('tr'));
                                    var rowData = row.data();
                                    var userId = rowData.id_user;
                                    var role = rowData.role;
                                    console.log(role)

                                    
                        
                                
         
                });
            });
        </script>

        <script>
            // Function to generate a random password
            function generatePassword() {
                var length = 8; // Default length
                var result = '';
                var characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789!@#$%^&*()_+{}|:<>?';

                for (var i = 0; i < length; i++) {
                    result += characters.charAt(Math.floor(Math.random() * characters.length));
                }

                return result;
            }

            // Event listener for the "Generate Password" button
            document.querySelector('.generateBtn').addEventListener('click', function() {
                var generatedPassword = generatePassword();
                document.getElementById('passwordField').value = generatedPassword;
            });

            // Event listener for the "Validate" button
            document.querySelector('#passwordField').addEventListener('click', function() {
                var passwordField = document.getElementById('passwordField');
                if (passwordField.value.trim() !== '') {
                    passwordField.select();
                    document.execCommand('copy');
                    document.getElementById('copyMessage').style.display = 'block';
                    setTimeout(function() {
                        document.getElementById('copyMessage').style.display = 'none';
                    }, 2000); // Hide message after 2 seconds
                }
            });

            // Event listener for double click to paste
            document.addEventListener('dblclick', function(event) {
                if (event.target.id === 'pasteField') {
                    navigator.clipboard.readText().then(function(text) {
                        document.getElementById('pasteField').value = text;
                    }).catch(function(err) {
                        console.error('Failed to read clipboard contents: ', err);
                    });
                }
            });
        </script>
    </div>




</body>
</html>
