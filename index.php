<!DOCTYPE html>
<!--
Creators: Xiaoling Zheng, Lovina Delph.
Date: December 13th 2017.
File: index.php
Description: This file is the interface of our version 2 project.
-->
<html>
    <head>
        <title>TODO supply a title</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="source/newcss.css">
        <link rel="stylesheet" href="/resources/demos/style.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
        <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </head>
    <body>
        
    <div class = "picture1">
        <div id="test" class="jumbotron text-center">
            <h2 id =header1  aria-describedby="header_help"> Declaration of Intent to Graduate </h2>
                <small id="header_help" class="form-text text-muted">For Computer Science students  (with course database imported)</small>
        </div>
    </div>
        
  <nav class="navbar navbar-inverse navbar-fixed-top">
       <div class="container-fluid">
          <div class="navbar-header">
              <a class="navbar-brand" href="#">GUI I Final Project</a>
          </div>
      <ul class="nav navbar-nav">
      <li class="active"><a href="http://localhost/PhpProject1/cur.php">Home</a></li>
      <li><a href="https://sm-prd11.ucollaborate.net/UMassIAM/Login.jsp?contextType=external&username=string&password=secure_string&challenge_url=https%3A%2F%2Fsm-prd11.ucollaborate.net%2FUMassIAM%2FLogin.jsp&request_id=5079215210370478663&authn_try_count=0&locale=en_US&resource_url=https%253A%252F%252Fsm-prd.sa.umasscs.net%252Fpsp%252Fsaprdmobile%252FEMPLOYEE%252FHRMS%252Fc%252FSA_LEARNER_SERVICES.SSS_TSRQST_UNOFF.GBL%253FFolderPath%253DPORTAL_ROOT_OBJECT.CO_EMPLOYEE_SELF_SERVICE.HCCC_ACADEMIC_RECORDS.HC_SSS_TSRQST_UNOFF_GBL%2526IsFolder%253Dfalse%2526IgnoreParamTempl%253DFolderPath%25252cIsFolder%2526gsmobile%253D1"target="_blank">Get Unofficial Transcript</a></li>
      </ul>
     </div>
   </nav>


  <div class="container">
    <div id = "front">
        <form  class="form-horizontal" id = "input_form" onsubmit="return false">
            <fieldset>
                <div id="form_style">
                    <div class = "form-row">    
                        <div class="col-sm-4">
                            <label for="name" class="control-label"> Name: </label> <input type ="text" class="form-control" id ="name" autocomplete="off" placeholder="Enter Name*"  required><br>
                            <label for="id_number"> Student ID: </label> <input type ="number" class="form-control"  id="id_number" autocomplete="off" placeholder="Enter Student ID*" required><br>
                            <label for="usr_email"> Email: </label> <input type="email" class="form-control"  id="usr_email" placeholder="Enter Email*" autocomplete="off" required><br>
                            <label for="usr_number"> Phone: </label> <input type="number" class="form-control"  id="usr_number" autocomplete="off" placeholder="Enter Phone Number*" required><br>
                            <label for="ovr_gpa"> Overall GPA: </label> <input type="number" class="form-control" step = "0.01" id="ovr_gpa" placeholder="Enter Overall GPA*"  autocomplete="off"><br>
                            <div id="slider"></div>
                        </div>

                        <div class="col-sm-2"></div>

                        <div class="col-sm-4">
                            <label for="datepicker">Date of Graduation: </label> <input type="text" class="form-control" id="datepicker" placeholder="Enter your Graduation Date*"><br>
                            <label for="minor"> Minor(s): </label> <input type ="text" class="form-control" id="minor" autocomplete="off" placeholder="Enter your minor" required> <br>
                            <label for="other_major"> Other Major: </label> <input type="text" class="form-control" id="other_major" autocomplete="off" placeholder="Enter Any Other Majors"required><br>
                            <label for="datepicker2"> Date Processed: </label> <input type="text" class="form-control" id="datepicker2" placeholder="Enter Processing Date*"><br>
                            <label for="cs_gpa"> CS GPA: </label> <input type="number" step = "0.01" id="cs_gpa" class="form-control" placeholder="Enter CS GPA*" autocomplete="off"><br>
                            <div id="slider2"></div>
                        </div>
                    </div>
                </div>
                <div class="form-row">
                    <div class = "col-sm-9"></div>
                    <div class = "col-sm-2">
                        <br><br>
                      </div>
                    <div class = "col-sm-1"></div>
                </div>
            </fieldset>
        </form>
        
        <iframe id="hidden-iframe" style = "display: none;"></iframe>
        
        <div id="uploadstyle" > 
            <form enctype="multipart/form-data" action="<?php print $_SERVER['PHP_SELF']?>" method="post" target="hidden-iframe">
                <p><input type="hidden" name="MAX_FILE_SIZE" value="200000">
                    <input type="file"  name="pdfFile"/><br>
                    <input class="btn btn-primary" type="submit" id="uploadBtn" value="Upload!"></p>
            </form>
        </div>
        
        <div class = "group row">
            <br>
            <div class = "col-sm-8"></div>
            <div class = "col-sm-2">
                <input type = "button" id ="submit_form" class="btn pull-right" value = "Submit" onclick="show_table()">
            </div>
            <div class = "col-sm-2"></div>
        </div>
        <br> 
        <br>
        <br>
</div>
<div id = "results" style = "display: none;font-family: Georgia;">
            <div class="instruction">           
                <h3 style = "text-align: center; font-size: 35px">
                    University of Massachusetts Lowell<br>
                </h3>

                <h3 id =  "DIG_head" style = "text-align: center;">
                    College of Sciences   •  Department of Computer Science<br>
                    Program of Baccalaureate Study<br>
                    <strong>Declaration of Intent to Graduate (DIG)</strong> (effective Fall 2011)
                </h3>

                <br><br>
                
                <p style = "font-style: italic;">
                    Both sides of this form must be completed and submitted to the undergraduate coordinator for you to be considered for graduation.  Please follow the directions carefully and completely.  <strong>The deadline for submitting this form appears in the university calendar.</strong>
                </p>

                <h4><strong>INSTRUCTIONS BY COLUMN</strong></h4>
                
            <p id = "DIG_instruction" style = "margin-left: 5%;">
                    <ol>
                    <li><b>Course No.</b>  Fill in the number if it is not already provided.  For transfer courses, do not use UMass Lowell course numbers, please use the transfer school course numbers.</li>
                    <li><b>Course Name.</b>  Fill in the complete course name if it is not already provided.  Be sure to add titles for project courses.</li>
                    <li><b>Credits.</b>  Cross check the value in this column with your transcript.  Make any corrections necessary.</li>
                    <li><b>Grade.</b>  Fill in grades earned for courses taken at UMass Lowell.  Write T for transferred courses that have been approved by the Undergraduate Coordinator by initial transfer evaluation or academic petition.  These courses must appear on your UML transcript.</li>
                    <li><b>Check and Comments.</b>  Leave these columns blank unless the course has not yet been completed.  In that case, write the semester the course will be completed (such as Fall 2006 or Spring 2007) in the Comments column.</li>
                    </ol>
                    After this form is completely filled out, make an appointment with the Undergraduate Coordinator to review it.<br>
                </p>
            </div>
            
            <div id="info_section">

                <br>

                <div class= "form-group row">                   
                    <div class = "col-xs-2">
                        <p>Name: </p>
                    </div> 
                    <div class = "col-xs-4" id = "name_field"></div> 
                    <div class = "col-xs-2">
                        <p>Date: </p>
                    </div>                    
                    <div class = "col-xs-4" id = "date_field"></div>                   
                </div>

                <div class= "form-group row">
                    <div class = "col-xs-2">
                        <p>Student ID: </p>
                    </div>
                    <div class = "col-xs-4" id = "id_field"></div>
                    <div class = "col-xs-2">
                        <p>Minor(s): </p>
                    </div>
                    <div class = "col-xs-4" id = "minor_field"></div>
                </div>

                <div class= "form-group row">
                    <div class = "col-xs-2">
                        <p>E-mail: </p>
                    </div>
                    <div class = "col-xs-4" id = "email_field"></div>
                        <div class = "col-xs-2">
                        <p>Other Major: </p>
                    </div>
                    <div class = "col-xs-4" id = "othermajor_field"></div>
                </div>

                <div class= "form-group row">
                    <div class = "col-xs-2">
                        <p>Phone: </p>
                    </div>
                    <div class = "col-xs-4" id = "phone_field"></div>
                    <div class = "col-xs-2">
                        <p>Date Processed: </p>
                    </div>
                    <div class = "col-xs-4" id = "dateprocessed_field"></div>
                </div>

                <div class= "form-group row">
                    <div class = "col-xs-2">
                        <p>Overall GPA: </p>
                    </div>
                    <div class = "col-xs-4" id = "overallgpa_field"></div>
                    <div class = "col-xs-2">
                        <p>CS GPA: </p>
                    </div>
                    <div class = "col-xs-4" id = "csgpa_field"></div>
                </div>

            </div>
    <div class = "group row">
    
        <div class = "col-sm-11"></div>
        <div class = "col-sm-1">
            <input class = "btn" type="button" value = "EDIT" onclick= "display_table()">
        </div>
        
    
    
    </div>  
    <div id="course_table">
        <div id="table_one">
            <div class="container">
                <h2>Computer Science Courses</h2>
                <table class="table table-condensed">
                    <thead>
                        <tr>
                            <th>Course No.</th>
                            <th>Course Name</th>
                            <th>Credits</th>
                            <th>Grade</th>
                            <th>Check</th>
                            <th>Comments</th>
                            </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td id="course_num1"></td>
                            <td id="course_name1"></td>
                            <td id="credits_1"></td>
                            <td id="grade_1"></td>
                            <td id="check_1"></td>
                            <td id="comments_1"></td>
                        </tr>
                        <tr>
                            <td id="course_num2"></td>
                            <td id="course_name2"></td>
                            <td id="credits_2"></td>
                            <td id="grade_2"></td>
                            <td id="check_2"></td>
                            <td id="comments_2"></td>
                        </tr>
                        <tr>
                            <td id="course_num3"></td>
                            <td id="course_name3"></td>
                            <td id="credits_3"></td>
                            <td id="grade_3"></td>
                            <td id="check_3"></td>
                            <td id="comments_3"></td>
                        </tr>
                        <tr>
                            <td id="course_num4"></td>
                            <td id="course_name4"></td>
                            <td id="credits_4"></td>
                            <td id="grade_4"></td>
                            <td id="check_4"></td>
                            <td id="comments_4"></td>
                        </tr>
                        <tr>
                            <td id="course_num5"></td>
                            <td id="course_name5"></td>
                            <td id="credits_5"></td>
                            <td id="grade_5"></td>
                            <td id="check_5"></td>
                            <td id="comments_5"></td>
                        </tr>
                        <tr>
                            <td id="course_num6"></td>
                            <td id="course_name6"></td>
                            <td id="credits_6"></td>
                            <td id="grade_6"></td>
                            <td id="check_6"></td>
                            <td id="comments_6"></td>
                        </tr>
                        <tr>
                            <td id="course_num7"></td>
                            <td id="course_name7"></td>
                            <td id="credits_7"></td>
                            <td id="grade_7"></td>
                            <td id="check_7"></td>
                            <td id="comments_7"></td>
                        </tr>
                        <tr>
                            <td id="course_num8"></td>
                            <td id="course_name8"></td>
                            <td id="credits_8"></td>
                            <td id="grade_8"></td>
                            <td id="check_8"></td>
                            <td id="comments_8"></td>
                        </tr>
                        <tr>
                            <td id="course_num9"></td>
                            <td id="course_name9"></td>
                            <td id="credits_9"></td>
                            <td id="grade_9"></td>
                            <td id="check_9"></td>
                            <td id="comments_9"></td>
                        </tr>
                        <tr>
                            <td id="course_num10"></td>
                            <td id="course_name10"></td>
                            <td id="credits_10"></td>
                            <td id="grade_10"></td>
                            <td id="check_10"></td>
                            <td id="comments_10"></td>
                        </tr>
                        <tr>
                            <td id="course_num11"></td>
                            <td id="course_name11"></td>
                            <td id="credits_11"></td>
                            <td id="grade_11"></td>
                            <td id="check_11"></td>
                            <td id="comments_11"></td>
                        </tr>
                        <tr>
                            <td id="course_num12"></td>
                            <td id="course_name12"></td>
                            <td id="credits_12"></td>
                            <td id="grade_12"></td>
                            <td id="check_12"></td>
                            <td id="comments_12"></td>
                        </tr>
                        <tr>
                            <td id="course_num13"></td>
                            <td id="course_name13"></td>
                            <td id="credits_13"></td>
                            <td id="grade_13"></td>
                            <td id="check_13"></td>
                            <td id="comments_13"></td>
                        </tr>
                        <tr>
                            <td id="course_num14"></td>
                            <td id="course_name14"></td>
                            <td id="credits_14"></td>
                            <td id="grade_14"></td>
                            <td id="check_14"></td>
                            <td id="comments_14"></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        

        </div>
        <div id="table_two">
            <div class="container">
                <h2>Supporting Courses</h2>
                <table class="table table-condensed">
                    <thead>
                        <tr>
                            <th>Course No.</th>
                            <th>Course Name</th>
                            <th>Credits</th>
                            <th>Grade</th>
                            <th>Check</th>
                            <th>Comments</th>
                            </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td id="course_num15"></td>
                            <td id="course_name15"></td>
                            <td id="credits_15"></td>
                            <td id="grade_15"></td>
                            <td id="check_15"></td>
                            <td id="comments_15"></td>
                        </tr>
                        <tr>
                            <td id="course_num16"></td>
                            <td id="course_name16"></td>
                            <td id="credits_16"></td>
                            <td id="grade_16"></td>
                            <td id="check_16"></td>
                            <td id="comments_16"></td>
                        </tr>
                        <tr>
                            <td id="course_num17"></td>
                            <td id="course_name17"></td>
                            <td id="credits_17"></td>
                            <td id="grade_17"></td>
                            <td id="check_17"></td>
                            <td id="comments_17"></td>
                        </tr>
                        <tr>
                            <td id="course_num18"></td>
                            <td id="course_name18"></td>
                            <td id="credits_18"></td>
                            <td id="grade_18"></td>
                            <td id="check_18"></td>
                            <td id="comments_18"></td>
                        </tr>
                        <tr>
                            <td id="course_num19"></td>
                            <td id="course_name19"></td>
                            <td id="credits_19"></td>
                            <td id="grade_19"></td>
                            <td id="check_19"></td>
                            <td id="comments_19"></td>
                        </tr>
                        <tr>
                            <td id="course_num20"></td>
                            <td id="course_name20"></td>
                            <td id="credits_20"></td>
                            <td id="grade_20"></td>
                            <td id="check_20"></td>
                            <td id="comments_20"></td>
                        </tr>
                        <tr>
                            <td id="course_num21"></td>
                            <td id="course_name21"></td>
                            <td id="credits_21"></td>
                            <td id="grade_21"></td>
                            <td id="check_21"></td>
                            <td id="comments_21"></td>
                        </tr>
                        <tr>
                            <td id="course_num22"></td>
                            <td id="course_name22"></td>
                            <td id="credits_22"></td>
                            <td id="grade_22"></td>
                            <td id="check_22"></td>
                            <td id="comments_22"></td>
                        </tr>
                        <tr>
                            <td id="course_num23"></td>
                            <td id="course_name23"></td>
                            <td id="credits_23"></td>
                            <td id="grade_23"></td>
                            <td id="check_23"></td>
                            <td id="comments_23"></td>
                        </tr>
                        <tr>
                            <td id="course_num24"></td>
                            <td id="course_name24"></td>
                            <td id="credits_24"></td>
                            <td id="grade_24"></td>
                            <td id="check_24"></td>
                            <td id="comments_24"></td>
                        </tr>
                        <tr>
                            <td id="course_num25"></td>
                            <td id="course_name25"></td>
                            <td id="credits_25"></td>
                            <td id="grade_25"></td>
                            <td id="check_25"></td>
                            <td id="comments_25"></td>
                        </tr>
                        <tr>
                            <td id="course_num26"></td>
                            <td id="course_name26"></td>
                            <td id="credits_26"></td>
                            <td id="grade_26"></td>
                            <td id="check_26"></td>
                            <td id="comments_26"></td>
                        </tr>
                        <tr>
                            <td id="course_num27"></td>
                            <td id="course_name27"></td>
                            <td id="credits_27"></td>
                            <td id="grade_27"></td>
                            <td id="check_27"></td>
                            <td id="comments_27"></td>
                        </tr>
                    </tbody>
                </table>
            </div>

        </div>
        <div id="table_three">
            <div class="container">
                <h2>University Core Courses</h2>
                <table class="table table-condensed">
                    <thead>
                        <tr>
                            <th>Course No.</th>
                            <th>Course Name</th>
                            <th>Credits</th>
                            <th>Grade</th>
                            <th>Check</th>
                            <th>Comments</th>
                            </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td id="course_num28"></td>
                            <td id="course_name28"></td>
                            <td id="credits_28"></td>
                            <td id="grade_28"></td>
                            <td id="check_28"></td>
                            <td id="comments_28"></td>
                        </tr>
                        <tr>
                            <td id="course_num29"></td>
                            <td id="course_name29"></td>
                            <td id="credits_29"></td>
                            <td id="grade_29"></td>
                            <td id="check_29"></td>
                            <td id="comments_29"></td>
                        </tr>
                        <tr>
                            <td id="course_num30"></td>
                            <td id="course_name30"></td>
                            <td id="credits_30"></td>
                            <td id="grade_30"></td>
                            <td id="check_30"></td>
                            <td id="comments_30"></td>
                        </tr>
                        <tr>
                            <td id="course_num31"></td>
                            <td id="course_name31"></td>
                            <td id="credits_31"></td>
                            <td id="grade_31"></td>
                            <td id="check_31"></td>
                            <td id="comments_31"></td>
                        </tr>
                        <tr>
                            <td id="course_num32"></td>
                            <td id="course_name32"></td>
                            <td id="credits_32"></td>
                            <td id="grade_32"></td>
                            <td id="check_32"></td>
                            <td id="comments_32"></td>
                        </tr>
                        <tr>
                            <td id="course_num33"></td>
                            <td id="course_name33"></td>
                            <td id="credits_33"></td>
                            <td id="grade_33"></td>
                            <td id="check_33"></td>
                            <td id="comments_33"></td>
                        </tr>
                        <tr>
                            <td id="course_num34"></td>
                            <td id="course_name34"></td>
                            <td id="credits_34"></td>
                            <td id="grade_34"></td>
                            <td id="check_34"></td>
                            <td id="comments_34"></td>
                        </tr>
                        <tr>
                            <td id="course_num35"></td>
                            <td id="course_name35"></td>
                            <td id="credits_35"></td>
                            <td id="grade_35"></td>
                            <td id="check_35"></td>
                            <td id="comments_35"></td>
                        </tr>
                        <tr>
                            <td id="course_num36"></td>
                            <td id="course_name36"></td>
                            <td id="credits_36"></td>
                            <td id="grade_36"></td>
                            <td id="check_36"></td>
                            <td id="comments_36"></td>
                        </tr>
                        <tr>
                            <td id="course_num37"></td>
                            <td id="course_name37"></td>
                            <td id="credits_37"></td>
                            <td id="grade_37"></td>
                            <td id="check_37"></td>
                            <td id="comments_37"></td>
                        </tr>
                        <tr>
                            <td id="course_num38"></td>
                            <td id="course_name38"></td>
                            <td id="credits_38"></td>
                            <td id="grade_38"></td>
                            <td id="check_38"></td>
                            <td id="comments_38"></td>
                        </tr>
                        <tr>
                            <td id="course_num39"></td>
                            <td id="course_name39"></td>
                            <td id="credits_39"></td>
                            <td id="grade_39"></td>
                            <td id="check_39"></td>
                            <td id="comments_39"></td>
                        </tr>
                    </tbody>
                </table>
            </div>

        </div>
        </div>
    </div>
        </div>

    <?php

        if ( isset( $_FILES['pdfFile'] ) ) {
            if ($_FILES['pdfFile']['type'] == "application/pdf") {
                $source_file = $_FILES['pdfFile']['tmp_name'];
                $dest_file = "upload/".$_FILES['pdfFile']['name'];

                if (file_exists($dest_file)) {
                    print "The file name already exists!!";
                }
                else {
                    move_uploaded_file( $source_file, $dest_file )
                    or die ("Error!!");
                    if($_FILES['pdfFile']['error'] == 0) {
                        print "Pdf file uploaded successfully!";
                        print "<b><u>Details : </u></b><br/>";
                        print "File Name : ".$_FILES['pdfFile']['name']."<br.>"."<br/>";
                        print "File Size : ".$_FILES['pdfFile']['size']." bytes"."<br/>";
                        print "File location : upload/".$_FILES['pdfFile']['name']."<br/>";
                    }
                }
        
        /*if file uploaded successfully*/
        
        include 'extract.php';
        include 'cs_required.php';
        include 'supporting.php';
        include 'writing.php';
        include 'art_humanity.php';
        include 'cs_elec.php';
        include 'ns_elective.php';
        include 'free_elec.php';
        
        include 'ah_ss.php';
        
        include 'combine.php';
        include 'assign_pos.php';
        
        /*if file uploaded successfully*/
        
        unlink($dest_file);
	} 
	else {
		if ( $_FILES['pdfFile']['type'] != "application/pdf") {
			print "Error occured while uploading file : ".$_FILES['pdfFile']['name']."<br/>";
			print "Invalid  file extension, should be pdf !!"."<br/>";
			print "Error Code : ".$_FILES['pdfFile']['error']."<br/>";
		}
	}
}
?>

<script>

    $( function() {
      $( "#datepicker2 ,#datepicker" ).datepicker();
    });

  

    $.getJSON( "temp/combined.json", function( data ) {
          $.each( data, function( key, val ) {
                 var obj =  JSON.parse(val);
                 document.getElementById("course_num"+obj.criteria_pos).innerHTML = obj.subject_code;
                 document.getElementById("course_name"+obj.criteria_pos).innerHTML = obj.course_name;
                 document.getElementById("credits_"+obj.criteria_pos).innerHTML = obj.credit;
                 document.getElementById("grade_"+obj.criteria_pos).innerHTML = obj.grade;
          });
    });
    $( function() {
          $( "#slider" ).slider({
                       range: "min",
                        value: 0,
                        min: 0.0,
                        max: 4.0,
                        step: 0.01,
                        slide: function (event, ui) {
                        $("#ovr_gpa").val(ui.value);
                        
                        }
                        });
          var initialValue = $("#slider").slider("option", "value");
          $("#ovr_gpa").val(initialValue);
          $("#ovr_gpa").change(function(){
                       var newVal = $(this).val();
                       $("#slider").slider("option", "value", newVal);
                       });
          });

        $( function() {
        $( "#slider2" ).slider({
                         range: "min",
                         value: 0,
                         min: 0,
                         max: 4.0,
                         step: 0.01,
                         slide: function (event, ui) {
                         $("#cs_gpa").val(ui.value);
                         
                         }
                         });
        var initialValue = $("#slider2").slider("option", "value");
        $("#cs_gpa").val(initialValue);
        $("#cs_gpa").change(function(){
                      var newVal = $(this).val();
                      $("#slider2").slider("option", "value", newVal);
                      });
        });


function show_table(){
    
        submit_info();
        
        var e3 = document.getElementById("results");
        e3.style.display = 'block';
        
        var e1 = document.getElementById("front");
        e1.style.display = 'none';
}

function display_table(){
    
    var index = 1;
    
    for (; index<=39; index++){
        var rows = document.getElementById("course_num"+index);
        var rows1 = document.getElementById("course_name"+index);
        var rows2 = document.getElementById("credits_"+index);
        var rows3 = document.getElementById("grade_"+index);
        var rows4 = document.getElementById("comments_"+index);
        
        var txt = rows.textContent || rows.innerText;
        var txt1 = rows1.textContent || rows1.innerText;
        var txt2 = rows2.textContent || rows2.innerText;
        var txt3 = rows3.textContent || rows3.innerText;
        var txt4 = rows4.textContent || rows4.innerText;
        
        if (txt.trim()==="") rows.innerHTML='<td> <input type="text" id="course_num"'+ index +'></td>';
        if (txt1.trim()==="") rows1.innerHTML='<td> <input type="text" id="course_name"'+ index +'></td>';
        if (txt2.trim()==="") rows2.innerHTML='<td> <input type="text" id="ccredits_"'+ index +'></td>';
        if (txt3.trim()==="") rows3.innerHTML='<td> <input type="text" id="grade_"'+ index +'></td>';
        if (txt4.trim()==="") rows4.innerHTML='<td> <input type="text" id="comments_"'+ index +'></td>';
    }
}

    function submit_info(){
        
        /*set info form*/
        document.getElementById("name_field").innerHTML = document.getElementById("name").value;
        document.getElementById("id_field").innerHTML = document.getElementById("id_number").value;
        document.getElementById("date_field").innerHTML = document.getElementById("datepicker").value;
        document.getElementById("email_field").innerHTML = document.getElementById("usr_email").value;
        document.getElementById("phone_field").innerHTML = document.getElementById("usr_number").value;
                                 
        document.getElementById("minor_field").innerHTML = document.getElementById("minor").value;
        document.getElementById("overallgpa_field").innerHTML = document.getElementById("ovr_gpa").value;
        document.getElementById("csgpa_field").innerHTML = document.getElementById("cs_gpa").value;
        document.getElementById("dateprocessed_field").innerHTML = document.getElementById("datepicker2").value;
        document.getElementById("othermajor_field").innerHTML = document.getElementById("other_major").value;
        /*set info form*/
        
   }


</script>
    </body>
</html>
