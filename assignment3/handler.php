<?php

    require('socket.php');
    
    $key = 'AIzaSyAv3-sizmLVyFura0wCD0Gb-UfE95xNIJ4';

    if (!empty($_POST['action'])) {
        switch ($_POST['action']) {
            case 'makes':
                findCarMakes();
                break;
            case 'models':
                findCarModels($_POST['make']);
                break;
            case 'engines':
                findCarEngines($_POST['make']);
                break;
            case 'save':
                saveLeads($_POST);
                break;
            case 'geocode':
                getGeoCode($_POST['zipcode']);
            default:
                // code...
                break;
        }    
    }
    
    
    
    // car makes
    function findCarMakes()
    {
        global $connection;
        
        $query = "SELECT * FROM make";
        $result = mysqli_query($connection, $query);
        
        $makes = mysqli_fetch_all($result);
        
        echo json_encode($makes);
    }
    
    
    
    // car model
    function findCarModels($make)
    {
        global $connection;
        
        $query = "SELECT * FROM model WHERE id_make = " . $make;
        $result = mysqli_query($connection, $query);
        
        $models = mysqli_fetch_all($result);
        
        echo json_encode($models);
    }
    
   
   // car engine 
    function findCarEngines($make)
    {
        global $connection;
        
        $query = "SELECT * FROM engine WHERE make = " . $make;
        $result = mysqli_query($connection, $query);
        
        $engines = mysqli_fetch_all($result);
        
        echo json_encode($engines);
    }
    
    function saveLeads($post)
    {
        global $connection;
        // salesleads
        $name= $post['name'];
        $phone= $post['phone'];
        $email= $post['email'];
        $zipCode= $post['zipCode'];
        $bestWay= $post['bestWay'];
        
        $sql = 'SELECT make.car_make FROM make WHERE make.id='.$post['make'];
        
        $sqlResult = mysqli_query($connection, $sql);
        $make = mysqli_fetch_assoc($sqlResult);

        $sql = 'SELECT model.car_model FROM model WHERE model.id_model='.$post['model'];
        $sqlResult = mysqli_query($connection, $sql);
        $model = mysqli_fetch_assoc($sqlResult);
        
        $sql = 'SELECT engine.size FROM engine WHERE engine.id='.$post['engine'];
        $sqlResult = mysqli_query($connection, $sql);
        $engine = mysqli_fetch_assoc($sqlResult);
        
        $sql = "INSERT INTO salesleads (id, name, email, phone, zip, bestWay, make, model, engine) VALUES ('', '".$name."','".$email."','".$phone."','".$zipCode."','".$bestWay."','".$make['car_make']."', '".$model['car_model']."', '".$engine['size']."')";
        
        $result = mysqli_query($connection, $sql);
        
         if ($result){
    	   echo json_encode($post);
         } else {
             echo false;
         }
    }
    
    function getGeoCode($zip)
    {
        // convert zipcode to lat and long
        global $key;
        
        $url = "https://maps.googleapis.com/maps/api/geocode/json?address=$zip&key=$key";
        
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        $response = json_decode(curl_exec($ch), true);
        curl_close($ch);
        
        if ($response['status'] == 'OK') {
            $geometry = $response['results'][0]['geometry']['location'];
    
            $list = getDealerList($geometry['lat'], $geometry['lng']);
            
            echo json_encode($list);
        } else {
            echo 'false';
        }
    }


    //
    function getDealerList($lat, $lng)
    {
        global $key;
        
        $url = "https://maps.googleapis.com/maps/api/place/radarsearch/json?location=$lat,$lng&radius=5000&types=car_dealer&key=$key";
        
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        $response = json_decode(curl_exec($ch), true);
        curl_close($ch);
        
        if ($response['status'] == 'OK') {
            
            $dealers = array_slice($response['results'], 0, 10, true);
            
            $dealerList = array();
            foreach ($dealers as $key => $dealer) {
                $dealerList[$key]['lat']     = $dealer['geometry']['location']['lat'];
                $dealerList[$key]['lng']     = $dealer['geometry']['location']['lng'];
                $dealerList[$key]['placeId'] = $dealer['place_id'];
                $dealerList[$key]['details'] = getDealerDetails($dealer['place_id']);
            }
            
            return $dealerList;
        }
    }
    //
    function getDealerDetails($id)
    {
        $key = 'AIzaSyAv3-sizmLVyFura0wCD0Gb-UfE95xNIJ4';  // diffrent key
        
        $url = "https://maps.googleapis.com/maps/api/place/details/json?placeid=$id&key=$key";
        
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        $response = json_decode(curl_exec($ch), true);
        curl_close($ch);
        
        $result = array();
        
        if ($response['status'] == 'OK') {
            $result['name'] = $response['result']['name'];
            $result['address'] = $response['result']['formatted_address'];
            $result['phone'] = $response['result']['formatted_phone_number'];
            $result['rating'] = $response['result']['rating'];
            $result['url'] = $response['result']['website'];
        
            return $result;
        }
    }
    
?>