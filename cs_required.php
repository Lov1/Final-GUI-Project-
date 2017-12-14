<?php
    
    /* cs_required.php
     *
     * Descriptions:
     *  1. connect to database, query all cs required course code
     *  2. parse through results.json, append cs required (taken) classes to taken.json
    */
    
        $required_course_code = array();
    
        $required_course_code[] = "1010";
        $required_course_code[] = "1020";
        $required_course_code[] = "2010";
        $required_course_code[] = "2030";
        $required_course_code[] = "2040";
        $required_course_code[] = "3010";
        $required_course_code[] = "3040";
        $required_course_code[] = "3050";
        $required_course_code[] = "3080";
        $required_course_code[]  ="4040";

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

?>
