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

/*tab*/
function openCity(evt, cityName) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
    document.getElementById(cityName).style.display = "block";
    evt.currentTarget.className += " active";
}

document.getElementById("defaultOpen").click();


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