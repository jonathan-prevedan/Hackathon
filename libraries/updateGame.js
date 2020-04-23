$(document).ready(function(){

    const user = $('#username').val();
    const gameid = $('#gameid').val();

    setInterval(function(){
        updateStatus(user, gameid);
    }, 500)


})

function updateStatus(user, gameid){
    $.ajax({
        url: "api/updateGame.php",
        method: "post",
        data: {username:user,server:gameid}
    })
}