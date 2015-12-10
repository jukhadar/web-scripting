
<?php   
    include 'socket.php';   
            
    $hj_sql = " SELECT make.car_make, model.car_model, engine.size FROM make INNER JOIN model ON make.id = model.id_make INNER JOIN engine ON model.car_model = engine.model;";
    $hj_result = $db->query($hj_sql);
     
    echo "<table style='color:#660066;  font-size:11px;>".
                 "<tr width = '200' align ='left'>".
                     "<th style='border: 1px solid black; border-collapse: collapse; padding: 5px;'>Make ID </th>".
                 "<tr>";
     
     
     if($hj_result->num_rows > 0) {
         while($raw = $hj_result->fetch_assoc()) {
             echo "<tr>".
             "<td style='border: 1px solid black; border-collapse: collapse; padding: 5px;'>".$raw["car_make"]."<td />".
             "<td style='border: 1px solid black; border-collapse: collapse; padding: 5px;'>".$raw["car_model"]."<td />".
             "<td style='border: 1px solid black; border-collapse: collapse; padding: 5px;'>".$raw["size"]."<td />".
             "</tr>";
         }
     } else {
         echo "0 results";
    }
    

    
    echo "</table>";
?>