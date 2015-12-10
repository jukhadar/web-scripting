<?php
    $pageID = 'home';
    $title = 'Ajax File Upload';
    
    require('socket.php');
    require('structure.php');
    
    $structure = new Structure;
    
    echo $structure->header($title);
?>


<!-- 11/01/2015 -->
<form id="form" class="sales-lead" method="POST">
    <select id="makes" name="makes"></select>
    <select id="models" name="models"></select>
    <select id="engines" name="engines"></select>
    <br />
    <br />
    <input name="firstname" id="name" size="30" type="text"><br> Your name:<br>
    <span class="nameError"> Please enter your name</span></br>
    
    <input name="email" id="email" size="30" type="text"><br> Your email:<br>
    <span class="emailError"> Please enter your E-mail </span></br>
    
    <input name="phone" id="phone" size="30" type="text"><br> Your phone:<br> 
    <span class="phoneError"> Please enter your phone</span></br>
    
    <input name="zip" id="zip" size="5" type="text"><br> Your Zip Code:<br>
    <span class="zipCodeError"> Please enter Zip Code</span></br>
    <span class="zipCodeErrorTow"> Please enter a valid Zip Code</span></br>
    <span class="zipCodeErrorThree"> Please enter a valid Zip Code</span></br>
    
    <p>Please choose the best way to contact you</p>
    <input type="radio" name="best" value="email">E-mail
      <br>
    <input type="radio" name="best" value="phone">Phone
    
    <span class="bestWayError">Please choose the best way to contact you</span></br>
    
    <input type="submit" value="SEND">
</form>
<div class="test"> github test</div>
<h1 class='greeting'></h1>
<h2 class='zip-statement'></h2>
<div class='list'></div>


<!--  end -->

    <!--<div class="main">-->
    <!--    <h1>Load Form Options Via Ajax!</h1>-->
    <!--    <form id="form" class="ajax-fun">-->
    <!--        <select id="makes"></select>-->
    <!--        <select id="models"></select>-->
    <!--        <select id="engines"></select>-->
            
    <!--        <input type="submit" value="Submit File" />-->
    <!--    </form>-->
    <!--</div>-->
  
<?php  
    echo $structure->footer();
?>