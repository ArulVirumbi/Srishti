(function() {
    "use strict";

    var modal1 = document.getElementById("id-modal-1");
    var modal2 = document.getElementById("id-modal-2");
    var modal3 = document.getElementById("id-modal-3");
    var modal4 = document.getElementById("id-modal-4");
    var modal5 = document.getElementById("id-modal-5");
    var modal6 = document.getElementById("id-modal-6");
    var modal7 = document.getElementById("id-modal-7");
    var modal8 = document.getElementById("id-modal-8");

// Get the button that opens the modal
    var div1 = document.getElementById("div-1");
    var div2 = document.getElementById("div-2");
    var div3 = document.getElementById("div-3");
    var div4 = document.getElementById("div-4");
    var div5 = document.getElementById("div-5");
    var div6 = document.getElementById("div-6");
    var div7 = document.getElementById("div-7");
    var div8 = document.getElementById("div-8");

// Get the <span> element that closes the modal
    var span1 = document.getElementsByClassName("modal_close_1")[0];
    var span2 = document.getElementsByClassName("modal_close_2")[0];
    var span3 = document.getElementsByClassName("modal_close_3")[0];
    var span4 = document.getElementsByClassName("modal_close_4")[0];
    var span5 = document.getElementsByClassName("modal_close_5")[0];
    var span6 = document.getElementsByClassName("modal_close_6")[0];
    var span7 = document.getElementsByClassName("modal_close_7")[0];
    var span8 = document.getElementsByClassName("modal_close_8")[0];

// When the user clicks on the button, open the modal
    div1.onclick = function() {
    modal1.style.display = "block";
    }
    div2.onclick = function() {
    modal2.style.display = "block";
    }
    div3.onclick = function() {
    modal3.style.display = "block";
    }
    div4.onclick = function() {
    modal4.style.display = "block";
    }
    div5.onclick = function() {
    modal5.style.display = "block";
    }
    div6.onclick = function() {
    modal6.style.display = "block";
    }
    div7.onclick = function() {
    modal7.style.display = "block";
    }
    div8.onclick = function() {
    modal8.style.display = "block";
    }
    
// When the user clicks on <span> (x), close the modal
    span1.onclick = function() {
    modal1.style.display = "none";
    }  
    span2.onclick = function() {
    modal2.style.display = "none";
    } 
    span3.onclick = function() {
    modal3.style.display = "none";
    } 
    span4.onclick = function() {
    modal4.style.display = "none";
    } 
    span5.onclick = function() {
    modal5.style.display = "none";
    }
    span6.onclick = function() {
    modal6.style.display = "none";
    }
    span7.onclick = function() {
    modal7.style.display = "none";
    }
    span8.onclick = function() {
    modal8.style.display = "none";
    }  

// When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
        if (event.target == modal1) {
            modal1.style.display = "none";
        }if (event.target == modal2) {
            modal2.style.display = "none";
        }if (event.target == modal3) {
            modal3.style.display = "none";
        }if (event.target == modal4) {
            modal4.style.display = "none";
        }if (event.target == modal5) {
            modal5.style.display = "none";
        }if (event.target == modal6) {
            modal6.style.display = "none";
        }if (event.target == modal7) {
            modal7.style.display = "none";
        }if (event.target == modal8) {
            modal8.style.display = "none";
        }
    }

})()