<?php

    require('structure.php');
    
    $structure = new Structure;

    echo $structure->header('Advanced Scripting', 'Snarflatt');
    
    echo "<p>This is the index content part.</p>";
    
    echo $structure->footer();

?>
