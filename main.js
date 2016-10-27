$(function(){
    $.get(
        window.location.hash + ".html",
        function(data, stat, jq){
            $("body").html(data);
        }
    );
})
