(function() {
    "use strict";


    var modal1 = document.getElementById("id-modal-1");
    var modal2 = document.getElementById("id-modal-2");
    var modal3 = document.getElementById("id-modal-3");
    var modal4 = document.getElementById("id-modal-4");
    var modal5 = document.getElementById("id-modal-5");
// Get the button that opens the modal
    var div1 = document.getElementById("div-1");
    var div2 = document.getElementById("div-2");
    var div3 = document.getElementById("div-3");
    var div4 = document.getElementById("div-4");
    var div5 = document.getElementById("div-5");

    var div11 = document.getElementById("div-11");
    var div12 = document.getElementById("div-12");
    var div13 = document.getElementById("div-13");
    var div14 = document.getElementById("div-14");
    var div15 = document.getElementById("div-15");

// Get the <span> element that closes the modal
    var span1 = document.getElementsByClassName("modal_close_1")[0];
    var span2 = document.getElementsByClassName("modal_close_2")[0];
    var span3 = document.getElementsByClassName("modal_close_3")[0];
    var span4 = document.getElementsByClassName("modal_close_4")[0];
    var span5 = document.getElementsByClassName("modal_close_5")[0];
    /**
   * Easy selector helper function
   */
  const select = (el, all = false) => {
    el = el.trim()
    if (all) {
      return [...document.querySelectorAll(el)]
    } else {
      return document.querySelector(el)
    }
  }

  /**
   * Easy event listener function
   */
  const on = (type, el, listener, all = false) => {
    let selectEl = select(el, all)
    if (selectEl) {
      if (all) {
        selectEl.forEach(e => e.addEventListener(type, listener))
      } else {
        selectEl.addEventListener(type, listener)
      }
    }
  }

  /**
   * Easy on scroll event listener 
   */
  const onscroll = (el, listener) => {
    el.addEventListener('scroll', listener)
  }

  /**
   * Navbar links active state on scroll
   */
  let navbarlinks = select('#navbar .scrollto', true)
  const navbarlinksActive = () => {
    let position = window.scrollY + 200
    navbarlinks.forEach(navbarlink => {
      if (!navbarlink.hash) return
      let section = select(navbarlink.hash)
      if (!section) return
      if (position >= section.offsetTop && position <= (section.offsetTop + section.offsetHeight)) {
        navbarlink.classList.add('active')
      } else {
        navbarlink.classList.remove('active')
      }
    })
  }
  window.addEventListener('load', navbarlinksActive)
  onscroll(document, navbarlinksActive)

  /**
   * Scrolls to an element with header offset
   */
  const scrollto = (el) => {
    let elementPos = select(el).offsetTop
    window.scrollTo({
      top: elementPos,
      behavior: 'smooth'
    })
  }

  

    let backtotop = select('.back-to-top')
    if (backtotop) {
      const toggleBacktotop = () => {
        if (window.scrollY > 100) {
          backtotop.classList.add('active')
        } else {
          backtotop.classList.remove('active')
        }
      }
      window.addEventListener('load', toggleBacktotop)
      onscroll(document, toggleBacktotop)
    }

    on('click', '.mobile-nav-toggle', function(e) {
        select('body').classList.toggle('mobile-nav-active')
        this.classList.toggle('bi-list')
        this.classList.toggle('bi-x')
    })


   


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

    div11.ondblclick = function() {
      modal1.style.display = "block";
      }
      div12.ondblclick = function() {
      modal2.style.display = "block";
      }
      div13.ondblclick = function() {
      modal3.style.display = "block";
      }
      div14.ondblclick = function() {
      modal4.style.display = "block";
      }
      div15.ondblclick = function() {
      modal5.style.display = "block";
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
        }     
    }

    

   



})()