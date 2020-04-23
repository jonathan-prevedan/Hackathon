$(document).ready(function(){
    var currentrooms = [];
    
    $.each($('.room'), function(){
        currentrooms.push(this.id);
    })

    setInterval(function(){
        updateRooms(currentrooms);
        if($('.wrapper').children().length == 0){
            $('.wrapper').append("<p class='msg'>Il n'y a pas de salles libres, créez en une</p>");
        }
        else{
            $('#spinner').remove();
        }
    }, 3000);


    $('#btn_modal').click(function(){
        $('#backmodal').show(250);
    })


})
// Functions
function updateRooms(currentrooms){
    $.ajax({
        url: "api/getRooms.php",
        success: function(data){
            var roomsinbdd = [];
            data = JSON.parse(data);
            $.each(data, function(room){
                roomsinbdd.push(data[room].id);
                if(!currentrooms.includes(data[room].id)){
                    currentrooms.push(data[room].id);
                    $('.msg').remove();
                    $('.wrapper').append("<div class='room' id='" + data[room].id + "'><p>" + data[room].name + "</p><p>" + data[room].players + "/10 joueurs</p><input type='hidden' id='" + data[room].uniqid + "'><form method='get' action='game'><input type='hidden' value='" + data[room].uniqid + "' name='i'><input class='join_button' type='submit' value='Rejoindre'></form>");

                }
            })
            $.each($('.room'), function(){
                if(!roomsinbdd.includes(this.id)){
                    currentrooms.splice(currentrooms.indexOf(this.id), 1 );
                    $('#' + this.id).remove();
                }
            })
        }
    })
}