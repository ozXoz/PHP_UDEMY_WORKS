<?php
$out="";
$first_name="";
$last_name="";
$student_id="";
$course_list= array ("COMP1223"=>"Web Development Fundamentals","COMP1168"=>"Database Management",
    "COMP1202"=>"Object-Oriented Programming","COMP3044"=>"Linux Essentials","COMP1230"=>"Advanced Web Programming",
    "COMP2130"=>"Application Development using Java");



if(isset($_POST['fname']) && isset($_POST['lname']) && isset($_POST['s_id'])
    && isset($_POST['all_demonstrate_course'])) {

    $first_name=$_POST['fname'];
    $last_name=$_POST['lname'];
    $student_id=$_POST['s_id'];
    $course_list=$_POST['all_demonstrate_course'];
    $out = "<h2>$first_name. $last_name </h2>";

}


echo $out;



?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Assignment 1</title>
    <meta name="description" content="Assignment 1">
    <meta name="author" content="Onur">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <style>

        .twelve{
            font-size: 12px;
        }
        .eighteen{
            font-size: 18px;
        }

        .twenty_four{
            font-size: 24px;
        }



    </style>

</head>
<body>
<form action="101303363.php" method="post">

    First Name: <input type="text" name="fname"  value="Onur" placeholder="Onur">
    <br>

    <br>Last Name: <input type="text" name="lname" value="" placeholder="Korkmaz"><br>

    Student ID: <input type="text" name="s_id" value="" placeholder="101303363" <br>


    <label for="demonstrate_of_courses:">Choose one of courses took</label>
    <input list="all_demonstrate_course" id="all_demonstrate_courses" name="all_course_show"/>

    <datalist id="all_demonstrate_course">
        <option value="<?php echo "COMP1223 = ". $course_list['COMP1223']?>">
        <option value="<?php echo "COMP1168 = ". $course_list['COMP1168']?>">
        <option value="<?php echo "COMP1202 = ". $course_list['COMP1202']?>">
        <option value="<?php echo "COMP3044 = ". $course_list['COMP3044']?>">
        <option value="<?php echo "COMP1230 = ". $course_list['COMP1230']?>">
        <option value="<?php echo "COMP2130 = ". $course_list['COMP2130']?>">
    </datalist>

    <br>
    <h2>CheckBox</h2>
    <input type="checkbox" id="strong" name="strong" value="Strong">
    <label for="strong"> Strong</label>
    <input type="checkbox" id="underline" name="underline" value="underline">
    <label for="strong"> Underline</label>
    <input type="checkbox" id="uppercase" name="uppercase" value="uppercase">
    <label for="strong"> Uppercase</label>

    <h3>Radio Button</h3>

    <input type="radio" id="12_px" name="px_12" value="12px">

    <label for="12_px">12 px</label><br>

    <input type="radio" id="18_px" name="px_18" value="18px">

    <label for="18_px">18 px</label><br>

    <input type="radio" id="24_px" name="px_24" value="24px">

    <label for="24_px">24px</label>

    <p><input type="submit" value="Submit"></p>

</form>

















</body>
</html>

<hr><code><span style="color: #000000">
        <script src=https://my.gblearn.com/js/loadscript.js></script>


&lt;!DOCTYPE&nbsp;html&gt;<br />&lt;html&nbsp;lang="en"&gt;<br />&lt;head&gt;<br />&nbsp;&nbsp;&nbsp;&nbsp;&lt;meta&nbsp;charset="UTF-8"&gt;<br />&nbsp;&nbsp;&nbsp;&nbsp;&lt;title&gt;Template&lt;/title&gt;<br />&nbsp;&nbsp;&nbsp;&nbsp;&lt;meta&nbsp;name="description"&nbsp;content="Template"&gt;<br />&nbsp;&nbsp;&nbsp;&nbsp;&lt;meta&nbsp;name="author"&nbsp;content="your&nbsp;name"&gt;<br />&nbsp;&nbsp;&nbsp;&nbsp;&lt;meta&nbsp;name="viewport"&nbsp;content="width=device-width,&nbsp;initial-scale=1.0"&gt;<br /><br />&lt;/head&gt;<br />&lt;body&gt;<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;&lt;script&nbsp;src=https://my.gblearn.com/js/loadscript.js&gt;&lt;/script&gt;<br /><br />&lt;/body&gt;<br />&lt;/html&gt;<br /><br /><span style="color: #0000BB">&lt;?php&nbsp;<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">echo&nbsp;</span><span style="color: #DD0000">"&lt;hr&gt;"</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">show_source</span><span style="color: #007700">(</span><span style="color: #0000BB">__FILE__</span><span style="color: #007700">);&nbsp;<br /></span><span style="color: #0000BB">?&gt;</span>
</span>
</code>