$(document).ready(function(){



    function usersList(){
        $.ajax({
            url:'assets/php/list_users.php',
            method:'post',
            async:false,
            success:function(response){
                console.log(response)
            }
        })
    }
    usersList()

})//ready