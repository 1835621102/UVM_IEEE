<?php
include 'top.php';
?>
    <style scoped>
        @import 'css/calendar.css';
        @import "css/stylesheet.css";
    </style>
<?php
include 'nav.php';
?>


<h1>Calendar</h1>




<article id="main">

    <div class="section">
        <h2 class="calendar">Upcoming Events</h2>
        <figure class="img-left small">
            <img class="tiny" src="img/May5.png" alt="date">
        </figure>
        <h4 >
            <a href="event1.php"> Student Professional Awareness Conference (S-PAC)</a>        
        </h4>
        <p class ="calendar">
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
        <figure class="img-left small">
            <img class="tiny" src="img/May18.png" alt="date">
        </figure>
        <h4>
            <a href="event3.php">UVM Activities Fair</a>
        </h4>
        <p class ="calendar">
            At the beginning of the school year, come visit our club at the school activity fair! We recruit new members at the fair.
        </p>
    </div>
    <div class="section">
        <h3>Previous Events</h3>
        <figure class="img-left small">
            <img class="tiny" src="img/CalendarOrignal.png" alt="date">
        </figure>
        <h4>
            <a href="event4.php">Arduino Workshop</a>
        </h4>
        <p class ="calendar">
            Work on an engineering project using "Arduino", an open-source electronic prototyping platform used to create interactive objects. 
        </p>
        <figure class="img-left small">
            <img class="tiny" src="img/CalendaOrignal.png" alt="date">
        </figure>
        <h4>
            <a href="event5.php">Regional IEEE Conference</a>
        </h4>
        <p class ="calendar">
            We attended the IEEE "Region One" conference at Central Connecticut State University in New Britain, Connecticut.
        </p>
    </div>
</article>


<?php
include 'footer.php';
?>