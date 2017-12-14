<?php
    
    /* ns_elective.php */

    require_once('connect_db.php');
    
    $string = file_get_contents("temp/results.json");
    
    $json_a = json_decode($string, true);
    
    $natural_science_electives = array();
    $ns_elec = array();
    $free_electives = array();
    $put_back = array();
    
    foreach ($json_a as $key => $value){
        
        $decoded_ = json_decode($value, true);

        if ($decoded_["subject"] == "CHEM" || $decoded_["subject"] == "BIOL"
                || $decoded_["subject"] == "PHYS" || $decoded_["subject"] == "GEOL"
                || $decoded_["subject"] == "ATMO") {
                $natural_science_electives[] = json_encode($decoded_);
        }else{
            $put_back[] = json_encode($decoded_);
        }
    }
    
    $arr = sizeof($natural_science_electives);
    
    for($i = 0; $i < $arr; $i ++){
        if ($i < 4){
            $ns_elec[] = $natural_science_electives[$i];
        }else{
            $free_electives[] = $natural_science_electives[$i];
        }
    }
    
    $encodedString = json_encode($put_back);
    file_put_contents('temp/results.json', $encodedString);
    
    $encodedString = json_encode($ns_elec);
    file_put_contents('temp/ns_elective.json', $encodedString);
    
    $encodedString = json_encode($free_electives);
    file_put_contents('temp/free_elective.json', $encodedString.PHP_EOL , FILE_APPEND | LOCK_EX);
    
?>
