<?php
    
  //  require_once('connect_db.php');
    /* require connection to database */
    
  //  $query = "select subject, course_code from art_humanity;";
    /* query get all required course code */
    
  //  $response = mysqli_query($dbc, $query);
    
  //  if ($response) {
        
  //      while($row = mysqli_fetch_array($response)){
            
  //          $subject = $row['subject'];
  //          $course_code = $row['course_code'];
  //      }
    
        $subject = array();
        $course_code = array();
    
        $subject[] = "ENGL";
        $course_code[] = "2200";
    
        $taken_course_objects = array();
        
        $unsorted_course_entries = array();
        
        $size_arr = sizeof($subject);
        
        $string = file_get_contents("temp/results.json");
        
        $json_a = json_decode($string, true);
        
        foreach ($json_a as $key => $value){
            
            $decoded_ = json_decode($value, true);
            
            if ($decoded_["subject"] == $subject && $decoded_["course_code"] == $course_code) {
                echo "art humanity: ".$decoded_["subject"].$decoded_["course_code"]."<br>".PHP_EOL;
                $taken_course_objects = json_encode($decoded_);
            }else{
                $unsorted_course_entries[] = json_encode($decoded_);
            }
        }

        $encodedString = json_encode($taken_course_objects);
        file_put_contents('temp/art_humanity.json', $encodedString);
        
        $encodedString_two = json_encode($unsorted_course_entries);
        file_put_contents('temp/results.json', $encodedString_two);
        
 //   } else{
        
 //       echo "Error";
        
 //   }
    
    ?>
