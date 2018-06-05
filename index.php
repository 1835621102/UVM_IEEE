<?php
include 'top.php';
?>
<style scoped>
    @import 'css/onepagescroll.css';
    @import 'css/calendar.css';
</style>
<?php
echo '<div class="main"><section>';
include 'nav.php';
?>

<span class="welcome">Welcome to</span>
<span class="IEEE">IEEE</span>

<!--########################slide pictures##################################-->

<!--<div class="homeSlide" >
    <div class="slides">
        <img class="slideImg" src="img/SlideshowGallery/News1/IEEEarduinoworkshop2015.jpg" alt="">
        <div class="imgSliderText">IEEE arduino robotics workshop is an Engineering project</div>
    </div>
    <div class="slides">
        <img class="slideImg" src="img/SlideshowGallery/News5/IEEE_Conference.jpg" alt="">
        <div class="imgSliderText">UVM IEEE attended IEEE region one conference at Central Connecticut State University in New Britain, Connecticut.</div>
    </div>
    <div class="slides">
        <img class="slideImg" src="img/SlideshowGallery/News3/IEEEseminars.jpg" alt="">
        <div class="imgSliderText">IEEE host seminars with keynote from speakers</div>
    </div>

    <div class="leftArrow" onclick="plusDivs(-1)"><img class="left-arrow" src="img/left-arrow.png" alt="left arrow"></div>
    <div class="rightArrow" onclick="plusDivs(1)"><img class="right-arrow" src="img/right-arrow.png" alt="right arrow"></div>
    <div class="center section text-white display-bottomleft" style="width:100%">
        <span class="badge demo border transparent hover-white" onclick="currentDiv(1)"></span>
        <span class="badge demo border transparent hover-white" onclick="currentDiv(2)"></span>
        <span class="badge demo border transparent hover-white" onclick="currentDiv(3)"></span>
    </div>
</div>-->

<div id="my-accordion" class="accordion-slider">
    <div class="as-panels">
        <div class="as-panel">
            <a href="event4.php"><img class="as-background" src="img/SlideshowGallery/News1/IEEEarduinoworkshop2015.jpg" alt=""/></a>
            <p class="as-layer as-opened as-black as-padding hide-small-screen" data-position="bottomLeft" data-show-transition="left" data-horizontal="245" data-hide-transition="up" data-show-delay="700">IEEE arduino robotics workshop is an Engineering project</p>
        </div>
        <div class="as-panel">
            <a href="project5.php"><img class="as-background" src="img/DSC_2869.jpg" alt=""/></a>
            <p class="as-layer as-opened as-white as-padding hide-small-screen" data-vertical="20%" data-show-transition="left" data-hide-transition="up" data-show-delay="700">Our Summer Project: a brand new drone</p>
        </div>
        <div class="as-panel">
            <a href="event5.php"><img class="as-background" src="img/SlideshowGallery/News5/IEEE_Conference.jpg" alt=""/></a>
            <p class="as-layer as-opened as-black as-padding hide-small-screen" data-horizontal="10" data-vertical="10" data-width="40%" data-show-transition="down" data-show-delay="900" data-hide-transition="up">UVM IEEE attended IEEE region one conference at Central Connecticut State University in New Britain, Connecticut.</p>
        </div>
        <div class="as-panel">
            <a href="project2.php"><img class="as-background" src="img/2.jpg" alt=""/></a>
            <p class="as-layer as-opened as-white as-padding hide-small-screen" data-vertical="20%" data-show-transition="left" data-hide-transition="up" data-show-delay="700">A prototype of our first homemade 3D printer</p>
        </div>
        <div class="as-panel">
            <a href="officers.php"><img class="as-background" src="img/SlideshowGallery/News3/IEEEseminars.jpg" alt=""/></a>
            <p class="as-layer as-opened as-black as-padding hide-small-screen" data-show-transition="left" data-show-delay="500" data-hide-transition="left">IEEE host seminars with keynote from speakers</p>
        </div>
    </div>
</div>

<script>
    var index = 0;
    carousel();
    function currentDiv(n) {
        showDivs(slideIndex = n);
    }

    function carousel() {
        var i;
        var x = document.getElementsByClassName("slides");
        for (i = 0; i < x.length; i++) {
            x[i].style.display = "none";
        }
        index++;
        if (index > x.length) {
            index = 1;
        }
        x[index - 1].style.display = "block";
        setTimeout(carousel, 4000);
    }
</script>
<script>
    var slideIndex = 1;
    showDivs(slideIndex);

    function plusDivs(n) {
        showDivs(slideIndex += n);
    }

    function currentDiv(n) {
        showDivs(slideIndex = n);
    }

    function showDivs(n) {
        var i;
        var x = document.getElementsByClassName("slides");
        var dots = document.getElementsByClassName("demo");
        if (n > x.length) {
            slideIndex = 1;
        }
        if (n < 1) {
            slideIndex = x.length;
        }
        for (i = 0; i < x.length; i++) {
            x[i].style.display = "none";
        }
        for (i = 0; i < dots.length; i++) {
            dots[i].className = dots[i].className.replace(" w3-white", "");
        }
        x[slideIndex - 1].style.display = "block";
        dots[slideIndex - 1].className += " w3-white";
    }
</script>
</section>
<!--######################## end slide pictures ##################################-->
<!--######################## end slide pictures ##################################-->
<section id="welcomeSection">
    <?php
    include "nav.php";
    ?>
    <div class="section1">
        <span class="IEEELong">Institute of Electrical and Electronics Engineers</span>
    </div>

    <div class="section1">
        <p class="homeWelcome">The Institute of Electrical and Electronics Engineers (IEEE, pronounced "I triple E") at the University of 
            Vermont is a resource that provides support for electrical engineering 
            students outside the classroom. We conduct a lecture series throughout 
            the academic year as well facilitate student projects and sponsor career 
            networking events.</p>
    </div>

    <div class="section1">
        <iframe class="videoWelcome" width="300" height="169" src="https://www.youtube.com/embed/fcmCpEpg0lQ"  allowfullscreen></iframe>
    </div>

    <div class="section1">
        <h2 id="history">IEEE history</h2>
        <p class="history">The IEEE is a professional association with its corporate office in New York City and its operations center in 
            Piscataway, New Jersey. It was formed in 1963 from the amalgamation of the American Institute of 
            Electrical Engineers and the Institute of Radio Engineers. Today, it is the world's largest 
            association of technical professionals with more than 400,000 members in chapters around the world. 
            Its objectives are the educational and technical advancement of electrical and electronic engineering, 
            telecommunications, computer engineering and allied disciplines.</p>
    </div>

</section>
<section id="myCalendar">
    <?php
    include "nav.php";
    ?>
    <div class="section1">
        <article id="main">
            <style>
                
            </style>
            <div id="section">
                <h2 class="calendar">Upcoming Events</h2>
                <figure class="img-left small">
                    <img class="tiny" src="img/May5.png" alt="date">
                </figure>
                <h4 >
                    <a href="event1.php"> Student Professional Awareness Conference (S-PAC)</a>        
                </h4>
                <p id ="calendar">
                    An annual conference focused on career development with a national speaker and a panel of professionals. 
                    Participants also have the chance to talk to each company and provide a resume to them.
                </p>
                <figure class="img-left small">
                    <img class="tiny" src="img/May15.png" alt="date">
                </figure>
                <h4>
                    <a href="event2.php">EE Student Faculty Mingler</a>
                </h4>
                <p class ="calendar">
                    An opportunity for EE students of all years to network with graduates and faculty.
                    Food and refreshments will be served.
                </p>
            </div>
        </article>
    </div>

    <footer>

        <div class="socialMedia">
            <ul class="footerRight">
                <li class="UVMLogo"><a target="_blank" href="https://www.uvm.edu"><img class="uvmlogo" src="img/uvmLogo.png" alt="UVM logo"/></a></li>

            </ul>
        </div>
        <div class="resources">
            <ul class="resourcesOl">
                <li class="resourcesLi">Resources</li>
                <li class="resourcesLi"><a target="_blank" class="footerLink" href="http://www.uvmaero.org/">AERO</a></li>
                <li class="resourcesLi"><a target="_blank" class="footerLink" href="http://sites.ieee.org/gm/">IEEE GMS</a></li>
                <li class="resourcesLi"><a target="_blank" class="footerLink" href="https://www.asme.org/">ASME</a></li>
                <li class="resourcesLi"><a target="_blank" class="footerLink" href="http://www.asce.org/">ASCE</a></li>
                <li class="resourcesLi"><a target="_blank" class="footerLink" href="http://societyofwomenengineers.swe.org/">SWE</a></li>
            </ul>
        </div>
        <div class="contact">
            <ul class="footerMiddle">
                <li class="contactLi">ieee@uvm.edu</li>
                <li class="contactLi">Perkins 303</li>
                <li class="facebookLi"><a target="_blank" href="https://www.facebook.com/UVM.IEEE"><img class="fb" src="img/facebook.png" alt="facebook"/></a></li>
                <li class="twitterLi"><a target="_blank" href="https://twitter.com/UvmIEEE"><img class="twitter" src="img/twitter.png" alt="twitter"/></a></li>

            </ul>
        </div>


    </footer>


</section>
</div><!--/*close div class main*/-->
<script src="js/jquery.min.js"></script>
<script src="js/onepagescroll.js"></script>
<script src="js/main.js"></script>
</body>
</html>