<?php
    
    include 'course_conversion_look_up.php';
    include 'vendor/autoload.php';
    
    $file_name = $dest_file;
    
    class Course {
        public $subject = "";
        public $course_code = "";
        public $course_name = "";
        public $credit = "";
        public $grade = "";
    }
    
    $json_objects = array();
    
    $parser = new \Smalot\PdfParser\Parser();
    $pdf    = $parser->parseFile($file_name);
    
    $text = $pdf->getText();
    
    $struct_info = preg_match_all("/([A-Z]{4})\s(\d{4})\s([\w\W\s]*?)\s(\d.00)\s(\d.00)\s(\w)/", $text, $regs2);
    /* regex for courses taken including and after Fall 2015 in \w\w\w\w \d\d\d\d format */

    $struct_info_old1 = preg_match_all("/(\d{2})\s\s(\d{3})\s([\w\W\s]*?)\s(\d.00)\s(\d.00)\s(\w)/", $text,  $regs3);
    /* regex for courses taken have course code in \d\d \d\d\d format */
    
    $struct_info_old2 = preg_match_all("/([A-Z]{4})\s\s(\d{3})\s([\w\W\s]{0,50}?)\s(\d.00)\s(\d.00)\s(\w)/", $text,  $regs4);
    /* regex for courses taken have course code in \w\w\w\w \d\d\d format */
    
    if ($struct_info == true)
    {
        $n = sizeof($regs2[0]);
        
        for($a = 0; $a < $n; $a ++){
            /*************************************
             $regsx[1][$a] = course subject
             $regsx[2][$a] = course code
             $regsx[3][$a] = course name
             $regsx[4][$a] = number of credit
             $regsx[5][$a] = grade
             ************************************/
            
            $temp = new Course();
            $temp->subject = $regs2[1][$a];
            $temp->course_code = $regs2[2][$a];
            $temp->course_name = $regs2[3][$a];
            $temp->credit = $regs2[4][$a];
            $temp->grade = $regs2[6][$a];
            
            $json_objects[] = json_encode(get_object_vars($temp));
        }
    }else {
        /* no matchings */
    }

    if ($struct_info_old1 == true)
    {
        $n = sizeof($regs3[0]);

        for($a = 0; $a < $n; $a ++){

            $temp = new Course();
            $temp->subject = $look_up_subject_code[$regs3[1][$a]];
            $temp->course_code = $regs3[2][$a] * 10; /* convert to 4-digit format*/
            $temp->course_name = $regs3[3][$a];
            $temp->credit = $regs3[4][$a];
            $temp->grade = $regs3[6][$a];

            $json_objects[] = json_encode(get_object_vars($temp));
        }
    }else {
        /* no matchings */
    }
    
    if ($struct_info_old2 == true)
    {
        $n = sizeof($regs4[0]);
        
        for($a = 0; $a < $n; $a ++){
            
            $temp = new Course();
            $temp->subject = $regs4[1][$a];
            $temp->course_code = $regs4[2][$a] * 10; /*convert to 4-digit format*/
            $temp->course_name = $regs4[3][$a];
            $temp->credit = $regs4[4][$a];
            $temp->grade = $regs4[6][$a];
            
            $json_objects[] = json_encode(get_object_vars($temp));
        }
    }
    else {
        /* no matchings */
    }
    
    $encodedString = json_encode($json_objects);
    file_put_contents('temp/results.json', $encodedString);

?>
