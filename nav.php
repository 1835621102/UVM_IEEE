<nav>
    <!--<img class= "uvmlogo" src="uvmlogo.bmp" alt="UVM Logo">-->
    <a href="index.php"><img class="logo" src="img/ieee_black.png" alt="logo"></a>
    <p class="tagline"> Advancing Technology for Humanity</p>
    <div class="header">
        
        <ol class="navOl">
            <?php
            /* This sets the current page to not be a link. Repeat this if block for
             *  each menu item */
            if ($path_parts['filename'] == "index") {
                print '<li class="activeLi">Home</li>';
            } else {
                print '<li class="navLi"><a class="hvr-bounce-to-right" href="index.php">Home</a></li>';
            }
//            if ($path_parts['filename'] == "events") {
//                print '<li class="activeLi">events</li>';
//            } 
           
//            else {
//                print '<li class="navLi"><a class="hvr-bounce-to-right" href="events.php">events</a></li>';
//            }
            if ($path_parts['filename'] == "calendar") {
                print '<li class="activeLi">calendar</li>';
            } 
            elseif($path_parts['filename'] == "event1"){
                print '<li class="activeLi">calendar</li>';
            }elseif($path_parts['filename'] == "event2"){
                print '<li class="activeLi">calendar</li>';
            }elseif($path_parts['filename'] == "event3"){
                print '<li class="activeLi">calendar</li>';
            }elseif($path_parts['filename'] == "event4"){
                print '<li class="activeLi">calendar</li>';
            }
            elseif($path_parts['filename'] == "event5"){
                print '<li class="activeLi">events</li>';
            }
            
            else {
                print '<li class="navLi"><a class="hvr-bounce-to-right" href="calendar.php">calendar</a></li>';
            }
            if ($path_parts['filename'] == "projects") {
                print '<li class="activeLi">projects</li>';
            } elseif ($path_parts['filename'] == "project1") {
                print '<li class="activeLi">projects</li>';
            } elseif ($path_parts['filename'] == "project2") {
                print '<li class="activeLi">projects</li>';
            } elseif ($path_parts['filename'] == "project3") {
                print '<li class="activeLi">projects</li>';
            } elseif ($path_parts['filename'] == "project4") {
                print '<li class="activeLi">projects</li>';
            } elseif ($path_parts['filename'] == "project5") {
                print '<li class="activeLi">projects</li>';
            } else {
                print '<li class="navLi"><a class="hvr-bounce-to-right" href="projects.php">projects</a></li>';
            }
            if ($path_parts['filename'] == "officers") {
                print '<li class="activeLi">officers</li>';
            } else {
                print '<li class="navLi"><a class="hvr-bounce-to-right" href="officers.php">officers</a></li>';
            }
//            if ($path_parts['filename'] == "about") {
//                print '<li class="activeLi">about</li>';
//            } else {
//                print '<li class="navLi"><a class="hvr-bounce-to-right" href="about.php">about</a></li>';
//            }
            ?>
            <li class="joinUs"><a target="_blank" class= "joinLink" href="https://thelynx.collegiatelink.net/organization/ieee">Join US</a></li>
        </ol>

    </div>
</nav>