<?php
    /*
     * free_elec.php
     */
    
    $string = file_get_contents("temp/results.json");
    $json_a = json_decode($string, true);
    
    $free_elec = array();
    
    $i = 0;
    
    foreach ($json_a as $key => $value){
        if ($i < 4){
            $free_elec[] = $value;
            $i++;
        }else {
            $put_back[] = $value;
        }
    }
    
    
    $encodedString = json_encode($free_elec);
  //  file_put_contents('temp/free_elective.json', $encodedString.PHP_EOL , FILE_APPEND);
    file_put_contents('temp/free_elective.json', $encodedString);
    
    $encodedString = json_encode($put_back);
    file_put_contents('temp/results.json', $encodedString);

?>
