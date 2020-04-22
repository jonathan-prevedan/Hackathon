$(document).ready(function(){

    $("#btn").click(function(){
        var username = $("#username").val();
        
        $.ajax({
            url: 'api/createU.php',
            method: 'POST',
            data: {user: username},
            success: function(){
                console.log('cgood');
            }

        })
    

    });

});

