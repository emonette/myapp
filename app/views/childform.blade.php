<!DOCTYPE html>
<html>
<head>

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
  {{ HTML::style('css/form1.css')}}
	
	<link href="../../dist/css/bootstrap.min.css" rel="stylesheet">
	<title>Form</title>
	 <!-- Bootstrap core CSS -->
    <link href="../../dist/css/bootstrap.min.css" rel="stylesheet">

    
    {{ HTML::style('css/starter-template.css')}}

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="../../assets/js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

  </head>

  <body>
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Application</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="#">Home</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#contact">Contact</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>
    <div class="container">

      <div class="starter-template">
        <h1>Please Enter Childs information Below.</h1>
     </div>

     <form name="form" method="POST" action"http://localhost:8000/home" onsubmit="return validateForm();">
      Child's Name: <input type="text" name="child" id="child"/><br>
      Child's Age: <input type="text" name="age" id="age"/> <br>
      Child's Gender: <input type="text" name="gender" id="gender"/><br>
      Parent Name: <input type="text" name="parentName" id="parentName"/><br>
      Parent Phone #: <input type="text" name="ParentTelNum" id="ParentTelNum"/><br>
      <input type="submit" value="submit"/>
     </form>

    </div><!-- /.container -->

<div class = "img">
<img src="images/kids.jpg" alt="kids">
</div>

<script>
  function validateForm()
  {
    var x = document.forms["form"] ["child"].value;
    if (x == null || x=="") {
      alert("Child's Name must be entered.");
      return false
  }

    var x = document.forms["form"] ["age"].value;
    if (x == null || x=="") {
      alert("Child's Age must be entered.");
      return false
    }
    var x = document.forms["form"] ["gender"].value;
    if (x == null || x=="") {
      alert("Child's Gender must be entered.");
      return false
    }
    var x = document.forms["form"] ["parentName"].value;
    if (x == null || x=="") {
      alert("Parent Name must be entered.");
      return false
    }
    var x = document.forms["form"] ["ParentTelNum"].value;
    if (x == null || x=="") {
      alert("Parent Phone # must be entered.");
      return false
    }
    alert("Thank you for submitting your child's information.")
  }
</script>


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="../../dist/js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>

</head>
</html>