$(document).ready(function(){

    setInterval(function(){
        updateServers();
    }, 1000)

    $('.server').click(function(){
        var status = $('#' + this.id).children(".status").children("p").text();
        if(status == "Disponible"){
            const id = this.id;
            document.location.href = "game/game.php?i=" + id;
        }
    })



})


function updateServers(){
    $.ajax({
        url: "api/servers.php",
        success: function(data){
            data = JSON.parse(data);
            $.each(data, function(server){
                if(data[server].status == 2){
                    $('#' + data[server].id).children('.status').removeClass('disavailable');
                    $('#' + data[server].id).children('.status').removeClass('started');
                    if(!$('#' + data[server].id).children('.status').hasClass("available")){
                        $('#' + data[server].id).children('.status').addClass("available");
                        $('#' + data[server].id).children('.status').children('p').text("Disponible");
                    }
                }else if(data[server].status == 1){
                    $('#' + data[server].id).children('.status').removeClass('available');
                    $('#' + data[server].id).children('.status').removeClass('started');
                    if(!$('#' + data[server].id).children('.status').hasClass("disavailable")){
                        $('#' + data[server].id).children('.status').addClass("disavailable");
                        $('#' + data[server].id).children('.status').children('p').text("Complet");
                    }
                }else if(data[server].status == 0){
                    $('#' + data[server].id).children('.status').removeClass('available');
                    $('#' + data[server].id).children('.status').removeClass('started');
                    if(!$('#' + data[server].id).children('.status').hasClass("disavailable")){
                        $('#' + data[server].id).children('.status').addClass("disavailable");
                        $('#' + data[server].id).children('.status').children('p').text("Indisponible");
                    }
                }else if(data[server].status == 4){
                    $('#' + data[server].id).children('.status').removeClass('available');
                    $('#' + data[server].id).children('.status').removeClass('disavailable');
                    if(!$('#' + data[server].id).children('.status').hasClass("started")){
                        $('#' + data[server].id).children('.status').addClass("started");
                        $('#' + data[server].id).children('.status').children('p').text("En cours");
                    }
                }

                $('#' + data[server].id).children('#players').text(data[server].players + "/10 joueurs");

            })
        }
    })
}