<!DOCTYPE html>
<html>
<head>
	<title>Question adder</title>
	
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>
<body>
<form>
<div class="container">
	<h1 style="position: center">Question</h1>
	<textarea name="question" class="form-control" rows="5" placeholder="question" id="question"></textarea> <br>
	<div class="container">
  <div class="container" id="subandtext">
	 <span style="padding-right: 1.8em">Subject:</span>
<select class="selectpicker" name="subject" id="subject">
  <?php
    $con = mysqli_connect("localhost", "root", "root", "exampaper");
    $subject = "select subjectname from subject";
    $query = mysqli_query($con, $subject);
    

    while ($row = $query->fetch_assoc()) {
      $subjectname = $row['subjectname'];
    echo "<option value='$subjectname'>$subjectname</option>";    
}
    
  ?>
  <option value="1">others</option>>
  
</select>
</div>

<br>
<div class="container">
	 <span style="padding-right: 2.8em">Level:</span>
<select class="selectpicker" name="level" id="level">
  <option>easy</option>
  <option>medium</option>
  <option>hard</option>
</select>
</div>
<br>
<div class="container">
	 <span style="padding-right: 2.8em">Marks:</span>
<select class="selectpicker" name="marks" id="marks">
  <option>1</option>
  <option>2</option>
  <option>5</option>
  <option>10</option>
  <option>15</option>
</select>
</div>
<br>
<div class="container">
	 <span style="padding-right: 2.8em">Unit:</span>
<select class="selectpicker" name="chapter" id="chapter">
  <option>1</option>
  <option>2</option>
  <option>3</option>
  <option>4</option>
  <option>5</option>
</select>
</div>
<br>
<div class="container">
<button name="submit" id="submit" class="btn btn-lg btn-primary" type="submit">Submit</button>
</div>



</div>
</form>


<script>
$('#subject').change(function(){
    if( $(this).val() == '1'){
        $('#subandtext').append('<input id="newsubjectname" type="text" placeholder="new subject" /><input id="newsubjectcode" type="text" placeholder="subject code" />');
    }else{
        $('#newsubjectname').remove();
        $('#newsubjectcode').remove();
    }
});


$(document).ready(function() {
    $("#submit").click(function(){
var question = $("#question").val();
var subjectcode = '';
var subject = $("#subject").val();
var level = $("#level").val();
var marks = $("#marks").val();
var chapter = $('#chapter').val();
var flag=0;
// Returns successful data submission message when the entered information is stored in database.
var dataString;
if (subject==='1') {
  subject = $("#newsubjectname").val();
  subjectcode = $("#newsubjectcode").val();
  dataString = 'question1='+ question + '&subject1='+ subject + '&level1='+ level + '&marks1='+ marks+ '&chapter1='+chapter+'&subjectcode1='+subjectcode;
  flag=1;
}
else{
dataString = 'question1='+ question + '&subject1='+ subject + '&level1='+ level + '&marks1='+ marks+ '&chapter1='+chapter;
}
if(subject===''||question===''||level===''||marks===''||chapter===''||(subjectcode==='' && flag===1))
{
alert("Please Fill All Fields");
}
else
{
// AJAX Code To Submit Form.
$.ajax({
type: "POST",
url: "sub.php",
data: dataString,
cache: false,
success: function(result){
alert("Registration Successful");
window.location = "welcome.php";
}
});
//$("#loginform").reset();
document.getElementById("subject").value="";
document.getElementById("chapter").value="";
document.getElementById("level").value="";
document.getElementById("marks").value="";
document.getElementById("question").value="";

}
return false;
});
});
</script>
</body>
</html>