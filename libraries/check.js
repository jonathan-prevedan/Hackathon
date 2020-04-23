$(document).ready(function(){

    var id = $('#gameid').val();
    var user = $('#userid').val();
    updateActivity(user);

    setInterval(function(){
        checkroomstatus(id);
    }, 10000)

    setInterval(function(){
        updateActivity(user, id);
    }, 5000)

})


function checkroomstatus(id){
    $.ajax({
        url: "api/checkRoomS.php",
        method: "POST",
        data: {id:id},
        success: function(response){
            response = JSON.parse(response);
            if(response == true){
                window.location.href = 'salons.php';
            }
        }
    })
}

function updateActivity(user, id){
    $.ajax({
        url: "api/updateActivity.php",
        method: "POST",
        data: {user:user, gameid:id}
    })
}