<?php
    
    include 'entry_sort_look_up.php';

    $record_objects = array();
    
    $string = file_get_contents("temp/combined.json");
    
    $json_a = json_decode($string, true);
    
    $course_entries = array();
    
    $i = 0;
    
    foreach ($json_a as $key => $value){
        
        $temp = new RecordEntry();
        
        $decoded_ = json_decode($value, true);
        
        if(is_numeric($decoded_["criteria_pos"])){
            
        }else{
            $pos = $look_up_course_position[$decoded_["criteria_pos"]];
            $decoded_["criteria_pos"] = $pos;
        }
        
        $course_entries[] = json_encode($decoded_);
        $i += 1;
    }
    
    echo "<br>Total sorted courses: ".$i."<br><br>".PHP_EOL;
    
    $encodedString = json_encode($course_entries);
    file_put_contents('temp/combined.json', $encodedString);
    
?>
