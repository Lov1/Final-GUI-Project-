<?php
    
    /* cs_required.php
     *
     * Descriptions:
     *  1. connect to database, query all cs required course code
     *  2. parse through results.json, append cs required (taken) classes to taken.json
    */
    
    require_once('connect_db.php');
    /* require connection to database */

    $query = "select subject, course_code from cs_required;";
    /* query get all required course code */
    
    $response = mysqli_query($dbc, $query);
    
    if ($response) {
        
        while($row = mysqli_fetch_array($response)){
            $required_course_code[] = $row['course_code'];
        }

        $size_arr = sizeof($required_course_code);
        
        $taken_course_objects = array();
        
        $unsorted_course_entries = array();
        
        $string = file_get_contents("temp/results.json");
        
        $json_a = json_decode($string, true);
        
        foreach ($json_a as $key => $value){
            
            $decoded_ = json_decode($value, true);
            
            if ($decoded_["subject"] == "COMP" && in_array($decoded_["course_code"], $required_course_code)){
                $taken_course_objects[] = json_encode($decoded_);
            }else {
                $unsorted_course_entries[] = json_encode($decoded_);
            }
        }
        
        $encodedString_one = json_encode($taken_course_objects);
        file_put_contents('temp/cs_required.json', $encodedString_one);
        
        unlink("temp/results.json");
        
        $encodedString_two = json_encode($unsorted_course_entries);
        file_put_contents('temp/results.json', $encodedString_two);
        
    } else {
        
    }
    

?>
