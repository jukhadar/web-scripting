<?php

    $pageID = 'home';
    $title = 'Ajax File Upload';


    require('structure.php');
    require('socket.php');
    
    $structure = new Structure;

    echo $structure->header($title);
?>

<div class="main">
<h1>Ajax File Upload</h1>
    <form class="ajax-fun">
        <input type="file" name="file" class="file-upload" />
        <input type="submit" value="Submit File" />
    </form>
</div>

    <div class="spinner">
        <h2>Please stand by while we loade your image!</h2>
        <img src="spinner.gif">
    </div>

<?php
    echo "";
    
    echo $structure->footer();

?>