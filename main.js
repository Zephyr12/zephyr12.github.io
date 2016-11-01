$.fn.extend({
    animateCss: function (animationName,calledAfter) {
    	this.css('visibility','visible');
        var animationEnd = 'webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend';
        this.addClass(animationName).one(animationEnd, function() {
            $(this).removeClass(animationName);
            calledAfter();
        });
    }
});
function done() {
	$(".animated").css('visibility','hidden');
    $(".jumbotron").animateCss("fadeIn",
    	function(){
    		$("#sitetitle").animateCss("fadeInUp",
    			function(){
    				$("#content").animateCss("fadeIn",function(){});
    			}
    		);
    	}
    );
}
$(done);