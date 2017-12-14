<?php
    
    
    /* cs_elec.php  */
    

        $course_code = array();
    
        
        $course_code[] = "3090";
        $course_code[] = "3100";
        $course_code[] = "3500";
        $course_code[] = "3611";
        $course_code[] = "4050";
        $course_code[] = "4060";
        $course_code[] = "4110";
        $course_code[] = "4120";
        $course_code[] = "4130";
        $course_code[] = "4140";
        $course_code[] = "4200";
        $course_code[] = "4210";
        $course_code[] = "4220";
        $course_code[] = "4230";
        $course_code[] = "4270";
        $course_code[] = "4280";
        $course_code[] = "4290";
        $course_code[] = "4420";
        $course_code[] = "4500";
        $course_code[] = "4510";
        $course_code[] = "4570";
        $course_code[] = "4610";
        $course_code[] = "4611";
        $course_code[] = "4620";
        $course_code[] = "4630";
       
        $string = file_get_contents("temp/results.json");
        
        $json_a = json_decode($string, true);
        
        $taken_course_objects = array();
        
        $put_back = array();
        
        foreach ($json_a as $key => $value){
            $decoded_ = json_decode($value, true);
            if ($decoded_["subject"] == "COMP" &&(in_array($decoded_["course_code"], $course_code))){
                if((strcmp($decoded_["grade"], "W/t") == 0)|| (strcmp($decoded_["grade"], "F/t") == 0)
                   || (strcmp($decoded_["grade"], "W")== 0) || (strcmp($decoded_["grade"], "W/t") == 0)){
                    // do nothing
                }else {
                    $course_num[] = $decoded_["course_code"];
                    $taken_course_objects[] = $decoded_;
                }
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

                $partOne = array();
                $partTwo = array();
                
                $partOne[] = "3090";
                $partTwo[] = "3100";
                
                $partOne[] = "4060";
                $partTwo[] = "ALL";
                
                $partOne[] = "4110";
                $partTwo[] = "4120";
                
                $partOne[] = "4130";
                $partTwo[] = "4140";
                
                $partOne[] = "4130";
                $partTwo[] = "5610";
 
                $partOne[] = "4200";
                $partTwo[] = "4210";
                
                $partOne[] = "4200";
                $partTwo[] = "4220";

                $partOne[] = "4200";
                $partTwo[] = "4500";                

                $partOne[] = "4210";
                $partTwo[] = "4220";    

                $partOne[] = "4220";
                $partTwo[] = "4230";    

                $partOne[] = "4220";
                $partTwo[] = "4420";
                
                $partOne[] = "4270";
                $partTwo[] = "4280";
                
                $partOne[] = "4500";
                $partTwo[] = "4510";   

                $partOne[] = "4610";
                $partTwo[] = "4620";                  

                $partOne[] = "5400";
                $partTwo[] = "5410"; 
                
                $partOne[] = "5610";
                $partTwo[] = "5620";
                
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
      //  }
        
  //  }else{

    //}
    


?>
