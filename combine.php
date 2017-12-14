<?php
    
    /*
     * combine.php
     * a file that combine all the json file (course entry for each section)
     * and generate a combine json file in the same format as DIG form
     *
     */
    
    class RecordEntry{
        
        public $criteria_pos = "";
        public $subject_code = "";
        public $course_name = "";
        public $credit = "";
        public $grade = "";

    }
    
    $record_objects = array();
    
    $string = file_get_contents("temp/cs_required.json");
    $json_a = json_decode($string, true);
    
    foreach ($json_a as $key => $value){
        
        $temp = new RecordEntry();
        
        $decoded_ = json_decode($value, true);
        
        if ((strcmp($decoded_['grade'],"W\t") == 0)||(strcmp($decoded_['grade'],"W") == 0)|| (strcmp($decoded_['grade'],"F\t") == 0)||(strcmp($decoded_['grade'],"F") == 0)){
            // do nothing
        }else {
            $temp -> criteria_pos = $decoded_['subject'].$decoded_['course_code'];
            $temp -> subject_code = $decoded_['subject'].$decoded_['course_code'];
            $temp -> course_name = $decoded_['course_name'];
            $temp -> credit = $decoded_['credit'];
            $temp -> grade = $decoded_['grade'];
        
            $record_objects[] = json_encode(get_object_vars($temp));
        }
    }
    
    $string = file_get_contents("temp/supporting.json");
    $json_a = json_decode($string, true);
    
    foreach ($json_a as $key => $value){
        
        $temp = new RecordEntry();
        
        $decoded_ = json_decode($value, true);
        
        if ((strcmp($decoded_['grade'],"W\t") == 0)||(strcmp($decoded_['grade'],"W") == 0)|| (strcmp($decoded_['grade'],"F\t") == 0)||(strcmp($decoded_['grade'],"F") == 0)){
            // do nothing
        }else {
            $temp -> criteria_pos = $decoded_['subject'].$decoded_['course_code'];
            $temp -> subject_code = $decoded_['subject'].$decoded_['course_code'];
            $temp -> course_name = $decoded_['course_name'];
            $temp -> credit = $decoded_['credit'];
            $temp -> grade = $decoded_['grade'];
            
            $record_objects[] = json_encode(get_object_vars($temp));
        }
    }
    
    $string = file_get_contents("temp/art_humanity.json");
    $json_a = json_decode($string, true);
    
    foreach ($json_a as $key => $value){
        
        $temp = new RecordEntry();
        
        $decoded_ = json_decode($value, true);
        
        if ((strcmp($decoded_['grade'],"W\t") == 0)||(strcmp($decoded_['grade'],"W") == 0)|| (strcmp($decoded_['grade'],"F\t") == 0)||(strcmp($decoded_['grade'],"F") == 0)){
            // do nothing
        }else {
            $temp -> criteria_pos = $decoded_['subject'].$decoded_['course_code'];
            $temp -> subject_code = $decoded_['subject'].$decoded_['course_code'];
            $temp -> course_name = $decoded_['course_name'];
            $temp -> credit = $decoded_['credit'];
            $temp -> grade = $decoded_['grade'];
            
            $record_objects[] = json_encode(get_object_vars($temp));
        }
    }
    
    $string = file_get_contents("temp/writing.json");
    $json_a = json_decode($string, true);
    
    foreach ($json_a as $key => $value){
        
        $temp = new RecordEntry();
        
        $decoded_ = json_decode($value, true);
        
        if ((strcmp($decoded_['grade'],"W\t") == 0)||(strcmp($decoded_['grade'],"W") == 0)|| (strcmp($decoded_['grade'],"F\t") == 0)||(strcmp($decoded_['grade'],"F") == 0)){
            // do nothing
        }else {
            $temp -> criteria_pos = $decoded_['subject'].$decoded_['course_code'];
            $temp -> subject_code = $decoded_['subject'].$decoded_['course_code'];
            $temp -> course_name = $decoded_['course_name'];
            $temp -> credit = $decoded_['credit'];
            $temp -> grade = $decoded_['grade'];
            
            $record_objects[] = json_encode(get_object_vars($temp));
        }
    }
    
    $i = 11;
    
    $string = file_get_contents("temp/project_sequence.json");
    $json_a = json_decode($string, true);
    
    foreach ($json_a as $key => $value){
        
        $temp = new RecordEntry();
        
        $decoded_ = json_decode($value, true);
        
        if ((strcmp($decoded_['grade'],"W\t") == 0)||(strcmp($decoded_['grade'],"W") == 0)|| (strcmp($decoded_['grade'],"F\t") == 0)||(strcmp($decoded_['grade'],"F") == 0)){
            // do nothing
        }else {
            $temp -> criteria_pos = $i;
            $temp -> subject_code = $decoded_['subject'].$decoded_['course_code'];
            $temp -> course_name = $decoded_['course_name'];
            $temp -> credit = $decoded_['credit'];
            $temp -> grade = $decoded_['grade'];
            
            $record_objects[] = json_encode(get_object_vars($temp));
            $i = $i + 1;
        }
    }
    
    $string = file_get_contents("temp/upper_elective.json");
    $json_a = json_decode($string, true);
    
    $i = 13;
    
    foreach ($json_a as $key => $value){
        
        $temp = new RecordEntry();
        
        $decoded_ = json_decode($value, true);
        
        if ((strcmp($decoded_['grade'],"W\t") == 0)||(strcmp($decoded_['grade'],"W") == 0)|| (strcmp($decoded_['grade'],"F\t") == 0)||(strcmp($decoded_['grade'],"F") == 0)){
            // do nothing
        }else {
            $temp -> criteria_pos = $i;
            $temp -> subject_code = $decoded_['subject'].$decoded_['course_code'];
            $temp -> course_name = $decoded_['course_name'];
            $temp -> credit = $decoded_['credit'];
            $temp -> grade = $decoded_['grade'];
            
            $record_objects[] = json_encode(get_object_vars($temp));
            $i = $i + 1;
        }
    }
    
    $string = file_get_contents("temp/tech_elective.json");
    $json_a = json_decode($string, true);
    
    $i = 26;
    
    foreach ($json_a as $key => $value){
        
        $temp = new RecordEntry();
        
        $decoded_ = json_decode($value, true);
        
        if ((strcmp($decoded_['grade'],"W\t") == 0)||(strcmp($decoded_['grade'],"W") == 0)|| (strcmp($decoded_['grade'],"F\t") == 0)||(strcmp($decoded_['grade'],"F") == 0)){
            // do nothing
        }else {
            $temp -> criteria_pos = $i;
            $temp -> subject_code = $decoded_['subject'].$decoded_['course_code'];
            $temp -> course_name = $decoded_['course_name'];
            $temp -> credit = $decoded_['credit'];
            $temp -> grade = $decoded_['grade'];
            
            $record_objects[] = json_encode(get_object_vars($temp));
            $i = $i + 1;
        }
    }
    
    $string = file_get_contents("temp/ns_elective.json");
    $json_a = json_decode($string, true);
    
    $i = 21;
    
    foreach ($json_a as $key => $value){
        
        $temp = new RecordEntry();
        
        $decoded_ = json_decode($value, true);
        
        if ((strcmp($decoded_['grade'],"W\t") == 0)||(strcmp($decoded_['grade'],"W") == 0)|| (strcmp($decoded_['grade'],"F\t") == 0)||(strcmp($decoded_['grade'],"F") == 0)){
            // do nothing
        }else {
            $temp -> criteria_pos = $i;
            $temp -> subject_code = $decoded_['subject'].$decoded_['course_code'];
            $temp -> course_name = $decoded_['course_name'];
            $temp -> credit = $decoded_['credit'];
            $temp -> grade = $decoded_['grade'];
            
            $record_objects[] = json_encode(get_object_vars($temp));
            $i = $i + 1;
        }
    }
    
    $string = file_get_contents("temp/free_elective.json");
    $json_a = json_decode($string, true);
    
    $i = 36;
    
    foreach ($json_a as $key => $value){
        
        $temp = new RecordEntry();
        
        $decoded_ = json_decode($value, true);
        
        if ((strcmp($decoded_['grade'],"W\t") == 0)||(strcmp($decoded_['grade'],"W") == 0)|| (strcmp($decoded_['grade'],"F\t") == 0)||(strcmp($decoded_['grade'],"F") == 0)){
            // do nothing
        }else {
            $temp -> criteria_pos = $i;
            $temp -> subject_code = $decoded_['subject'].$decoded_['course_code'];
            $temp -> course_name = $decoded_['course_name'];
            $temp -> credit = $decoded_['credit'];
            $temp -> grade = $decoded_['grade'];

            $record_objects[] = json_encode(get_object_vars($temp));
            $i = $i + 1;
        }
    }
    
    $string = file_get_contents("temp/ss_elective.json");
    $json_a = json_decode($string, true);
    
    $i = 33;
    
    foreach ($json_a as $key => $value){
        
        $temp = new RecordEntry();
        
        $decoded_ = json_decode($value, true);
        
        if ((strcmp($decoded_['grade'],"W\t") == 0)||(strcmp($decoded_['grade'],"W") == 0)|| (strcmp($decoded_['grade'],"F\t") == 0)||(strcmp($decoded_['grade'],"F") == 0)){
            // do nothing
        }else {
            $temp -> criteria_pos = $i;
            $temp -> subject_code = $decoded_['subject'].$decoded_['course_code'];
            $temp -> course_name = $decoded_['course_name'];
            $temp -> credit = $decoded_['credit'];
            $temp -> grade = $decoded_['grade'];
            
            $record_objects[] = json_encode(get_object_vars($temp));
            $i = $i + 1;
        }
    }
    
    
    $string = file_get_contents("temp/ah_elective.json");
    $json_a = json_decode($string, true);
    
    $i = 31;
    
    foreach ($json_a as $key => $value){
        
        $temp = new RecordEntry();
        
        $decoded_ = json_decode($value, true);
        
        if ((strcmp($decoded_['grade'],"W\t") == 0)||(strcmp($decoded_['grade'],"W") == 0)|| (strcmp($decoded_['grade'],"F\t") == 0)||(strcmp($decoded_['grade'],"F") == 0)){
            // do nothing
        }else {
            $temp -> criteria_pos = $i;
            $temp -> subject_code = $decoded_['subject'].$decoded_['course_code'];
            $temp -> course_name = $decoded_['course_name'];
            $temp -> credit = $decoded_['credit'];
            $temp -> grade = $decoded_['grade'];
            
            $record_objects[] = json_encode(get_object_vars($temp));
            $i = $i + 1;
        }
    }
    
    $encodedString = json_encode($record_objects);
    file_put_contents('temp/combined.json', $encodedString);
    /*
    unlink("temp/cs_required.json");
    unlink("temp/supporting.json");
    unlink("temp/art_humanity.json");
    unlink("temp/writing.json");
    unlink("temp/upper_elective.json");
    unlink("temp/project_sequence.json");
    unlink("temp/tech_elective.json");
    unlink("temp/free_elective.json");
    unlink("temp/ns_elective.json");
    unlink("temp/ss_elective.json");
    unlink("temp/ah_elective.json");
    unlink("temp/results.json");
    */
?>
