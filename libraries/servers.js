$(document).ready(function(){

    setInterval(function(){
        updateServers();
    }, 3000)

    $('.server').click(function(){
        const id = this.id;
        document.location.href = "game?i=" + id;
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
                    if(!$('#' + data[server].id).children('.status').hasClass("available")){
                        $('#' + data[server].id).children('.status').addClass("available");
                        $('#' + data[server].id).children('.status').children('p').text("Disponible");
                    }
                }else if(data[server].status == 1){
                    $('#' + data[server].id).children('.status').removeClass('available');
                    if(!$('#' + data[server].id).children('.status').hasClass("disavailable")){
                        $('#' + data[server].id).children('.status').addClass("disavailable");
                        $('#' + data[server].id).children('.status').children('p').text("Complet");
                    }
                }else if(data[server].status == 0){
                    $('#' + data[server].id).children('.status').removeClass('available');
                    if(!$('#' + data[server].id).children('.status').hasClass("disavailable")){
                        $('#' + data[server].id).children('.status').addClass("disavailable");
                        $('#' + data[server].id).children('.status').children('p').text("Indisponible");
                    }
                }
            })
        }
    })
}