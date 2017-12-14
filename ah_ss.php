<?php
    
    $string = file_get_contents("temp/results.json");
    $json_a = json_decode($string, true);
    
    $free_elec = array();
    
    $i = 0;
    $j = 0;
    
    $ah = array();
    $ss = array();
    $put_back = array();
    
    foreach ($json_a as $key => $value){
        $decode = json_decode($value, true);
        if ($decode["subject"] == "PSYC" || $decode["subject"] == "SOCI"
            || $decode["subject"] == "ECON" || $decode["subject"] == "PUBH" ){
            if ($i < 2){
                $ah[] = json_encode($decode);
                $i ++;
            }else{
                $put_back[] = json_encode($decode);
            }
        }else if ($decode["subject"] == "PHIL" || $decode["subject"] == "POLI"
                  || $decode["subject"] == "HIST" || $decode["subject"] == "ARTS"
                  || $decode["subject"] == "MUTH" || $decode["subject"] == "MUED"
                  || $decode["subject"] == "MUAP" || $decode["subject"] == "MUHI"
                  || $decode["subject"] == "MUPF" || $decode["subject"] == "MUEN"
                  || $decode["subject"] == "MUBU" || $decode["subject"] == "MUSR"
                  || $decode["subject"] == "THEA"){
            if ($j < 3){
                $ss[] = json_encode($decode);
                $j ++;
            }else{
                $put_back[] = json_encode($decode);
            }
        }else{
            $put_back[] = json_encode($decode);
        }
    }
    
    $encodedString = json_encode($put_back);
    file_put_contents('temp/results.json', $encodedString);
    
    $encodedString = json_encode($ss);
    file_put_contents('temp/ss_elective.json', $encodedString);
    
    $encodedString = json_encode($ah);
    file_put_contents('temp/ah_elective.json', $encodedString);
    
?>
