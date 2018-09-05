/**
 * Filename: scripts.js
 * Author: Lippee Proustion
 * Description: Contains all Javascript functions for the Institutional Repository 
 *     application.
 *
 */

/*arrow down*/
 $('.about-click').click(function(){
        $('html,body').animate({scrollTop:$('#about').offset().top},800);
    });

/*responsive menu*/
  $(document).ready(function() {
    $('#menu').bind('click',function(event){
        $('#navbar ul').slideToggle();
    });
    
    $(window).resize(function(){  
        var w = $(window).width();  
        if(w > 768) {  
            $('#navbar ul').removeAttr('style');  
        }  
        });
        
        });
		
/*Content*/
 $('.content-click').click(function(){
        $('html,body').animate({scrollTop:$('#content').offset().top},800);
    });

var acc = document.getElementsByClassName("accordion");
        var i;

        for (i = 0; i < acc.length; i++) {
            acc[i].addEventListener("click", function () {
                this.classList.toggle("active");
                var panel = this.nextElementSibling;
                if (panel.style.display === "block") {
                    panel.style.display = "none";
                } else {
                    panel.style.display = "block";
                }
            });
        }




// When the user scrolls down 534px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
    if (document.body.scrollTop > 534 || document.documentElement.scrollTop > 534) {
        document.getElementById("myBtn").style.display = "block";
    } else {
        document.getElementById("myBtn").style.display = "none";
    }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
}


// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}

/*scroll fadein*/
$(window).scroll(function(){
            $(".fadeout").css("opacity", 1 - $(window).scrollTop() / 300);
        });


/*nightside carousel*/
   var timer = 10000;

var i = 0;
var max = $('#c > li').length;
 
    $("#c > li").eq(i).addClass('active').css('left','0');
    $("#c > li").eq(i + 1).addClass('active').css('left','25%');
    $("#c > li").eq(i + 2).addClass('active').css('left','50%');
    $("#c > li").eq(i + 3).addClass('active').css('left','75%');
 

    setInterval(function(){ 

        $("#c > li").removeClass('active');

        $("#c > li").eq(i).css('transition-delay','0.25s');
        $("#c > li").eq(i + 1).css('transition-delay','0.5s');
        $("#c > li").eq(i + 2).css('transition-delay','0.75s');
        $("#c > li").eq(i + 3).css('transition-delay','1s');

        if (i < max-4) {
            i = i+4; 
        }

        else { 
            i = 0; 
        }  

        $("#c > li").eq(i).css('left','0').addClass('active').css('transition-delay','1.25s');
        $("#c > li").eq(i + 1).css('left','25%').addClass('active').css('transition-delay','1.5s');
        $("#c > li").eq(i + 2).css('left','50%').addClass('active').css('transition-delay','1.75s');
        $("#c > li").eq(i + 3).css('left','75%').addClass('active').css('transition-delay','2s');
    
    }, timer);