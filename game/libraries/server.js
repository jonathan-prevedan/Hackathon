$(document).ready(function(){
    var currentlogs = [];

    console.log("Document loaded");
    const server = $('#gameid').val();
    setInterval(() => {
        getserverupdate(server);
    }, 1000)

    function getserverupdate(server){
        $.ajax({
            url: "api/server.php",
            method: "POST",
            data: {server: server},
            success: function(data){
                data = JSON.parse(data);
                $.each(data, function(logs){
                    if(!currentlogs.includes(data[logs].id)){
                        currentlogs.push(data[logs].id);
                        $('#logs').append("<div class='line'>" + data[logs].value + "</div>");
                    }
                })
            }
        })
    }
})