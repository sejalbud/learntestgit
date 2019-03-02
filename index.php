<head><script src="https://static.codepen.io/assets/editor/live/console_runner-1df7d3399bdc1f40995a35209755dcfd8c7547da127f6469fd81e5fba982f6af.js"></script><script src="https://static.codepen.io/assets/editor/live/css_reload-5619dc0905a68b2e6298901de54f73cefe4e079f65a75406858d92924b4938bf.js"></script><meta charset="UTF-8"><meta name="robots" content="noindex"><link rel="shortcut icon" type="image/x-icon" href="https://static.codepen.io/assets/favicon/favicon-8ea04875e70c4b0bb41da869e81236e54394d63638a1ef12fa558a4a835f1164.ico"><link rel="mask-icon" type="" href="https://static.codepen.io/assets/favicon/logo-pin-f2d2b6d2c61838f7e76325261b7195c27224080bc099486ddd6dccb469b8e8e6.svg" color="#111"><link rel="canonical" href="https://codepen.io/eksch/pen/xwdOeK">
<script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js" type="text/javascript"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
<style class="cp-pen-styles">* {
  font-family: 'Lato', sans-serif;
  font-weight: 300;
  transition: all .1s ease;
}

html, body {
  height: 100%;
}

h1 {
  font-size: 64px;
}

.page-section {
  height: 480px;
  width: 50%;
  margin-left: 35%;
  margin-top: 5%;
  padding: 3em;
  background: linear-gradient(45deg, #43cea2 10%, #185a9d 90%);
  color: white;
  box-shadow: 0px 3px 10px 0px rgba(0, 0, 0, 0.5);
}

.navigation {
  position: fixed;
  width: 30%;
  margin-left: 2%;
  background-color: #999;
  color: #fff;
}
.navigation__link {
  display: block;
  color: #ddd;
  text-decoration: none;
  padding: 1em;
  font-weight: 400;
}
.navigation__link:hover {
  background-color: #aaa;
}
.navigation__link.active {
  color: white;
  background-color: rgba(0, 0, 0, 0.1);
}
</style></head>
<link href='https://fonts.googleapis.com/css?family=Lato:100,400,700' rel='stylesheet' type='text/css'>

<nav class="navigation" id="mainNav">
            <a class="navigation__link" href="#1">Section 1</a>
            <a class="navigation__link" href="#2">Section 2</a>
            <a class="navigation__link" href="#3">Section 3</a>
            <a class="navigation__link" href="#4">Section 4</a>
                <a class="navigation__link" href="#5">Section 5</a>
                <a class="navigation__link" href="#6">Section 6</a>
                <a class="navigation__link" href="#7">Section 7</a>
</nav>

<div class="page-section hero" id="1">
            <h1>Smooth scroll, fixed jump menu with active class</h1>
</div>
<div class="page-section" id="2">
            <h1>Section Two</h1>
</div>
<div class="page-section" id="3">
            <h1>Section Three</h1>
</div>
<div class="page-section" id="4">
            <h1>Section Four</h1>
</div>
<div class="page-section" id="5">
            <h1>Section Five</h1>
</div>
<div class="page-section" id="6">
            <h1>Section Six</h1>
</div>
<div class="page-section" id="7">
            <h1>Section Seven</h1>
</div>
<style type="text/css">
    { 
    font-family: 'Lato', sans-serif;
    font-weight: 300;
    transition: all .1s ease; 
}

html, body {
        height: 100%;
}

h1 { font-size: 64px; }

.page-section {
        height: 480px;
        width: 50%;
        margin-left: 35%;
        margin-top: 5%;
        padding: 3em;
    background: linear-gradient(45deg, #43cea2 10%, #185a9d 90%);
        color: white;
        box-shadow: 0px 3px 10px 0px rgba(0,0,0,0.5);
}

.navigation {
    position: fixed; 
        width: 30%;
        margin-left: 2%;
    background-color: #999;
    color: #fff;
    
    &__link {
            display: block;
        color: #ddd; 
        text-decoration: none;
        padding: 1em;
            font-weight: 400;
            
            &:hover {
                background-color: #aaa;
            }
        
           &.active {
            color: white;
                 background-color: rgba(0,0,0,0.1);
           }
    }
}
</style>
<script src="https://static.codepen.io/assets/common/stopExecutionOnTimeout-de7e2ef6bfefd24b79a3f68b414b87b8db5b08439cac3f1012092b2290c719cd.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
        $('a[href*=#]').bind('click', function(e) {
                e.preventDefault(); // prevent hard jump, the default behavior

                var target = $(this).attr("href"); // Set the target as variable

                // perform animated scrolling by getting top-position of target-element and set it as scroll target
                $('html, body').stop().animate({
                        scrollTop: $(target).offset().top
                }, 600, function() {
                        location.hash = target; //attach the hash (#jumptarget) to the pageurl
                });

                return false;
        });
});

$(window).scroll(function() {
        var scrollDistance = $(window).scrollTop();

        // Show/hide menu on scroll
        //if (scrollDistance >= 850) {
        //      $('nav').fadeIn("fast");
        //} else {
        //      $('nav').fadeOut("fast");
        //}
    
        // Assign active class to nav links while scolling
        $('.page-section').each(function(i) {
                if ($(this).position().top <= scrollDistance) {
                        $('.navigation a.active').removeClass('active');
                        $('.navigation a').eq(i).addClass('active');
                }
        });
}).scroll();
</script>