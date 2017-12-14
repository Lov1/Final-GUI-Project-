<?php
    /*cs_elec.php*/
    
    require_once('connect_db.php');
    /* require connection to database */
    
    $query = "select course_code from cs_elective;";
    /* query get all required course code */
    
    $response = mysqli_query($dbc, $query);
    
    $course_code = array();
    
    if ($response) {
        
        while($row = mysqli_fetch_array($response)){
            $course_code[] =  $row['course_code'];
        }
        
        $string = file_get_contents("temp/results.json");
        
        $json_a = json_decode($string, true);
        
        $taken_course_objects = array();
        
        $put_back = array();
        
        foreach ($json_a as $key => $value){
            $decoded_ = json_decode($value, true);
            if ($decoded_["subject"] == "COMP" &&(in_array($decoded_["course_code"], $course_code))){
                $course_num[] = $decoded_["course_code"];
                $taken_course_objects[] = $decoded_;
            }else{
                $put_back[] = json_encode($decoded_);
            }
        }
        
        $encodedString = json_encode($put_back);
        file_put_contents('temp/results.json', $encodedString);
        
        $arr = sizeof($taken_course_objects);

        if ($arr == 1){
            $upper_elective[] = $taken_course_objects[0];
        }else if ($arr >= 2){
            $query2 = "select partOne, partTwo from cs_project_sequence;";
            /* query get all required course code */
            $response2 = mysqli_query($dbc, $query2);
            
            if ($response2) {
                while ($row = mysqli_fetch_array($response2)) {
                    $partOne[] =  $row['partOne'];
                    $partTwo[] =  $row['partTwo'];
                }
                $arr1 = sizeof($partOne);
                $stop = False;
                foreach ($taken_course_objects as $key => $value){
                    if ($stop){
                        if($value["course_code"] == $proj_one["course_code"] || $value["course_code"] == $proj_two["course_code"]) {
                            
                        }else {
                            $left[] = $value;
                        }
                    }else{
                        if (in_array($value["course_code"], $partOne)){
                            $find = False;
                            
                            $proj_one = $value;
                            $key = array_keys($partOne, $value["course_code"]);
                            $arr_size = sizeof($key);
                        
                            for($i = 0; $i < $arr_size; $i ++){
                                if (in_array($partTwo[$key[$i]], $course_num)){
                                    $proj_two = $taken_course_objects[array_search($partTwo[$key[$i]], $course_num)];
                                    $find = True;
                                    $stop = True;
                                    break;
                                }
                            }
                            if(!$find){
                                $left[] = $value;
                            }
                        }
                    }
                }
            }
            
            $proj[] = json_encode($proj_one);
            $proj[] = json_encode($proj_two);
            
            $encodedString = json_encode($proj);
            file_put_contents('temp/project_sequence.json', $encodedString);
            
            $arr_left = sizeof($left);
            
            switch ($arr_left) {
                case 0:
                    break;
                case 1:
                    $upper[] = json_encode($left[0]);
                    
                    $encodedString = json_encode($upper);
                    file_put_contents('temp/upper_elective.json', $encodedString);
                    break;
                case 2:
                    $upper[] = json_encode($left[0]);
                    $upper[] = json_encode($left[1]);
                    
                    $encodedString = json_encode($upper);
                    file_put_contents('temp/upper_elective.json', $encodedString);
                    break;
                case 3:
                    $upper[] = json_encode($left[0]);
                    $upper[] = json_encode($left[1]);
                    
                    $encodedString = json_encode($upper);
                    file_put_contents('temp/upper_elective.json', $encodedString);
                    
                    $tech[] = json_encode($left[2]);
                    
                    $encodedString = json_encode($tech);
                    file_put_contents('temp/tech_elective.json', $encodedString);
                    break;
                case 4:
                    $upper[] = json_encode($left[0]);
                    $upper[] = json_encode($left[1]);
                    
                    $encodedString = json_encode($upper);
                    file_put_contents('temp/upper_elective.json', $encodedString);
                    
                    $tech[] = json_encode($left[2]);
                    $tech[] = json_encode($left[3]);
                    
                    $encodedString = json_encode($tech);
                    file_put_contents('temp/tech_elective.json', $encodedString);
                    break;
                default:
                    $upper[] = json_encode($left[0]);
                    $upper[] = json_encode($left[1]);
                    
                    $encodedString = json_encode($upper);
                    file_put_contents('temp/upper_elective.json', $encodedString);
                    
                    $tech[] = json_encode($left[2]);
                    $tech[] = json_encode($left[3]);
                    
                    $encodedString = json_encode($tech);
                    file_put_contents('temp/tech_elective.json', $encodedString);

                    for($i = 0; $i < $arr_left; $i++){
                        $free_elec[] = json_encode($left[3]);
                    }
                    
                    $encodedString = json_encode($free_elec);
                    file_put_contents('temp/free_elective.json', $encodedString.PHP_EOL , FILE_APPEND | LOCK_EX);
            }
        }
        
    }else{

    }
    


?>
