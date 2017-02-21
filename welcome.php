<!DOCTYPE html>
<html>
<head>
	<title>Welcome</title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="css/bootstrap.css" rel="stylesheet" media="screen">
    <link href="css/main.css" rel="stylesheet" media="screen">
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">

        <h2 class="form-signin-heading">Welcome to the Question paper creater </h2>

        
        <!-- The checkbox remember me is not implemented yet...
        <label class="checkbox">
          <input type="checkbox" value="remember-me"> Remember me
        </label>
        -->
        <button name="createpaper" id="createpaper" class="btn btn-lg btn-primary btn-block" type="submit">Create paper</button>

        <button name="addquestion" id="addquestion" class="btn btn-lg btn-primary btn-block" type="submit" onclick="question()">Add question</button>

        
        <script type="text/javascript">
        	function question() {
        		window.open('question.php','_self')
        	}
        </script>
    </div>
</body>
</html>