
<!DOCTYPE html>
<html>
<head>
<title><?php echo $page_title?></title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/mijnstijl.css">
</head>
<body>
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand">SessieVoorbeeld</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="home.php">Home</a></li>
      <li><a href="#">VoorbeelLink</a></li>
      <li><a href="#">VoorbeeldLink</a></li>
      <li><a href="#">Contact</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="#"><span class="glyphicon glyphicon-log-out"></span> Uitloggen</a></li>
      <li><a href="inloggen.php"><span class="glyphicon glyphicon-log-in"></span> Inloggen</a></li>
       <li><a><span class="glyphicon" welcome></span> <u>U bent niet ingelogd!</u></a></li>     
    </ul>
  </div>
</nav>

<div class="container">
  <br><br><p ><h1 class="koptekst" ><?php echo $page_title;?></h1></p>
  <div class="well">
