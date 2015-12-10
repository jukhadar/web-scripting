<?php
    $pageID = 'home';
    $title = 'Ajax File Upload';
    
    require('socket.php');
    require('structure.php');
    
    $structure = new Structure;
    
    echo $structure->header($title);
?>
    
    <div class="main">
        <h1>Load Form Options Via Ajax!</h1>
        <form class="ajax-fun">
            <select id="makes" name="makes"></select><br />
            <select id="models" name="models" disabled></select><br />
            <select id="engines" name="engines" disabled></select><br />
            <input type="text" id="name" name="name" placeholder="Your Name" /><br />
            <span class= "nameError"> Please enter your name</span></br>
            <input type="tel" id="phone" name="phone"  placeholder="Your Phone" /><br />
           
            <span class = "phoneError"> Please enter your phone</span></br>
            <input type="email" id="email" name="email" placeholder="Your Email" /><br />
            <span class = "emailError"> Please enter your E-mail </span></br>
            <input type="text" id="zipcode" name="zipcode" placeholder="Your Zip Code" /><br /><br />
             <span class = "zipCodeError"> Please enter Zip Code</span></br>
            Best way to contact you:<br />
            <input type="checkbox" id="best-phone" name="best" value="phone"> Phone<br>
            <input type="checkbox" id="best-email" name="best" value="email" checked> Email<br>
            <br />
            <input type="submit" value="Submit File" />
        </form>
    </div>
  
<?php  
    echo $structure->footer();
?>