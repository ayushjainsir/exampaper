<?php 
 $con = mysqli_connect("localhost", "root", "root", "exampaper"); 
 session_start();
  $question = $_POST['question1'];
  $level = $_POST['level1'];
  $marks = $_POST['marks1'];
  $chapter = $_POST['chapter1'];
  $subject = $_POST['subject1'];
  $contributer = $_SESSION["username"];
  echo $contributer;
  if(isset($_POST['subjectcode1']))
  {
    $subjectcode=$_POST['subjectcode1'];
    $insertingquery="INSERT INTO subject (subjectname, subjectcode) VALUES ('$subject','$subjectcode')";
    $query = mysqli_query($con, $insertingquery);
    $insertingquery= "CREATE TABLE $subjectcode (
      qid int(11) AUTO_INCREMENT PRIMARY KEY, 
      question varchar(500),
      level varchar(10),
      marks int(11),
      chapter int(11),
      created_at timestamp,
      contributer varchar(50) )";
    $query = mysqli_query($con, $insertingquery);

  }

  $selectsubject = "select subjectcode from subject where subjectname = '$subject'";
  $query = mysqli_query($con, $selectsubject);
  $row = mysqli_fetch_row($query);
  $subjectcode = $row[0];

  
  $insertingquery = "INSERT INTO $subjectcode (question, level, marks, chapter, contributer) VALUES ('$question', '$level', '$marks', '$chapter', '$contributer')";
  $query = mysqli_query($con, $insertingquery);
  if($query){
     echo "<script>alert('Question submitted sucessfully')</script>";
  }
  else{
    echo "error: ". $insertingquery;
  }
 
 ?>