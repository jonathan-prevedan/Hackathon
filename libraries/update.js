$(document).ready(function(){
    setInterval(function(){
        update();
    }, 500)  
})

function update(){
    $.ajax({url: "api/update.php"})
}