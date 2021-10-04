<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
include("index1.php");
$con = new connection();
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

</head>
<body>
<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
	<ul class="navbar-nav">
  <li class="nav-item">
    <a class="nav-link" href="alldocs.php">All documents</a>
  </li>
	<li class="nav-item">
		<a class="nav-link" href="requestdocs.php">Request Add</a>
	</li>
  <li class="nav-item">
    <a href="logout.php" class="nav-link">Logout</a>
  </li>
	</ul>
  <form class="form-inline" action="action_page.php" method="POST">
    <input class="form-control mr-sm-2" type="text" name="search" placeholder="Search Document">
    <button class="btn btn-success" type="submit">Search</button>
  </form>
</nav>