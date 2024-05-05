$(document).ready(function(){



    /******************************************************************* */
    //list des utilisateurs
$.ajax({
    url:'./assets/php/list_admin_central.php',
    method:'post',
    async:false,
    success:function(response){
        console.log(response)
    }
})

})