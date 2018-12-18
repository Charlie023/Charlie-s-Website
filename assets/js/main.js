//submit in the comments section
   $(document).ready(function(){
          $("#buttony").click(function(){
              // alert("asdasd");
              var name = $("#name").val();
              var email = $("#email").val();
              var comments = $("#comments").val();
              // alert(name+email+comments);

              if (email === "" || comments ==="") {
                alert("Email and Comments required!");
              }
              else{

                    $.ajax({
                        url:"sendToEmail.php",
                        method:"POST",
                        data:{name:name,email:email,comments:comments},
                        success:function(){
                          
                            $("#name").val("");
                            $("#email").val("");
                            $("#comments").val("");
                        }

                    });
              }
             
          });
      });



    //scroll back to top function
    (function(){
        // Back to Top - by CodyHouse.co
      var backTop = document.getElementsByClassName('js-cd-top')[0],
        // browser window scroll (in pixels) after which the "back to top" link is shown
        offset = 300,
        //browser window scroll (in pixels) after which the "back to top" link opacity is reduced
        offsetOpacity = 1200,
        scrollDuration = 700,
        scrolling = false;
      if( backTop ) {
        //update back to top visibility on scrolling
        window.addEventListener("scroll", function(event) {
          if( !scrolling ) {
            scrolling = true;
            (!window.requestAnimationFrame) ? setTimeout(checkBackToTop, 250) : window.requestAnimationFrame(checkBackToTop);
          }
        });
        //smooth scroll to top
        backTop.addEventListener('click', function(event) {
          event.preventDefault();
          (!window.requestAnimationFrame) ? window.scrollTo(0, 0) : scrollTop(scrollDuration);
        });
      }

      function checkBackToTop() {
        var windowTop = window.scrollY || document.documentElement.scrollTop;
        ( windowTop > offset ) ? addClass(backTop, 'cd-top--show') : removeClass(backTop, 'cd-top--show', 'cd-top--fade-out');
        ( windowTop > offsetOpacity ) && addClass(backTop, 'cd-top--fade-out');
        scrolling = false;
      }
      
      function scrollTop(duration) {
          var start = window.scrollY || document.documentElement.scrollTop,
              currentTime = null;
              
          var animateScroll = function(timestamp){
            if (!currentTime) currentTime = timestamp;        
              var progress = timestamp - currentTime;
              var val = Math.max(Math.easeInOutQuad(progress, start, -start, duration), 0);
              window.scrollTo(0, val);
              
              if(progress < duration) {
                  window.requestAnimationFrame(animateScroll);
              }
          };

          window.requestAnimationFrame(animateScroll);
      }

      Math.easeInOutQuad = function (t, b, c, d) {
        t /= d/2;
        if (t < 1) return c/2*t*t + b;
        t--;
        return -c/2 * (t*(t-2) - 1) + b;
      };

      //class manipulations - needed if classList is not supported
      function hasClass(el, className) {
          if (el.classList) return el.classList.contains(className);
          else return !!el.className.match(new RegExp('(\\s|^)' + className + '(\\s|$)'));
      }
      function addClass(el, className) {
        var classList = className.split(' ');
        if (el.classList) el.classList.add(classList[0]);
        else if (!hasClass(el, classList[0])) el.className += " " + classList[0];
        if (classList.length > 1) addClass(el, classList.slice(1).join(' '));
      }
      function removeClass(el, className) {
        var classList = className.split(' ');
          if (el.classList) el.classList.remove(classList[0]);  
          else if(hasClass(el, classList[0])) {
            var reg = new RegExp('(\\s|^)' + classList[0] + '(\\s|$)');
            el.className=el.className.replace(reg, ' ');
          }
          if (classList.length > 1) removeClass(el, classList.slice(1).join(' '));
      }
    })();



    // Wrap every letter in a span
$('.ml2').each(function() {
  $(this).html($(this).text().replace(/([^\x00-\x80]|[\w!''])/g, "<span class='letter'>$&</span>"));
  //                                                 ^^^^^
});

//animation of the wrapped strings

anime.timeline({loop: false})
  .add({
    targets: '.ml2 .letter',
    scale: [4,1],
    opacity: [0,1],
    translateZ: 0,  
    easing: "easeOutExpo",  
    duration: 1950,
    delay: function(el, i) {
      return 70*i;
    }
  });


  




    
      