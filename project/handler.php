<?php

    require('socket.php');

    if (!empty($_POST['action'])) {
        switch ($_POST['action']) {
            case 'makes':
                findCarMakes();
                break;
            case 'models':
                findCarModels($_POST['make']);
                break;
            case 'engines':
                findCarEngines($_POST['make'], $_POST['model']);
                break;
            case 'save':
                save($_POST);
                break;
            default:
                echo json_encode($_POST);
                break;
        }    
    }
    
    
    function findCarMakes()
    {
        global $connection;
        
        $query = "SELECT * FROM makes";
        $result = mysqli_query($connection, $query);
        
        $makes = mysqli_fetch_all($result);
             
        echo json_encode($makes);
    }
    
    
    function findCarModels($makeId)
    {
        global $connection;
        
        $query = "SELECT * FROM models WHERE make=".$makeId;
        $result = mysqli_query($connection, $query);
        
        $models = mysqli_fetch_all($result);
             
        echo json_encode($models);
    }
    
    
    function findCarEngines($makeId, $modelId)
    {
        global $connection;
        
        $query = "SELECT * FROM engines WHERE make=".$makeId." AND model=".$modelId;
        $result = mysqli_query($connection, $query);
        
        $engines = mysqli_fetch_all($result);
             
        echo json_encode($engines);
    }
    
    
    function save($post)
    {
        global $connection;
        
        $query = "SELECT makes.name AS Make, 
                        models.name AS Model, 
                        engines.size AS Engine
                    FROM makes 
                    INNER JOIN models
                        ON makes.id = models.make
                    INNER JOIN engines
                        ON models.id = engines.model
                    WHERE makes.id=".$post['make']." AND models.id=".$post['model']." AND engines.id=".$post['engine'];
        
        $result = mysqli_query($connection, $query);
        
        $selection = mysqli_fetch_assoc($result);
        
        echo json_encode($selection);
        
        
        // $query = "INSERT INTO salesleads (id, name, phone, email, zipcode, bestcontact, make, model, engine, date)
        //             VALUES(
        //                 '', 
        //                 '".$post['name']."', 
        //                 '".$post['phone']."', 
        //                 '".$post['email']."', 
        //                 '".$post['zipcode']."',
        //                 '".$post['best']."',
        //                 '".$selection['Make']."',
        //                 '".$selection['Model']."',
        //                 '".$selection['Engine']."',
        //                  NOW()
        //                 )";
        
        // $result = mysqli_query($connection, $query);
        
        // return ($result) ? true : false;
    }
    
?>