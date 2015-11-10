<!DOCTYPE html>
<html>
    <head>
	<title>Harrison Lin</title>
	<meta charset="UTF-8">

	<!-- Bootstrap CDN -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
	<!-- custom Bootstrap css theme -->
	<link href="{{ asset('/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css">
	<!-- Font-Awesome CDN -->
	<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
	<!-- Bootstrap and JQuery CDN -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
	<!-- Custom css -->
	<link href="{{ asset('/css/style.css') }}" rel="stylesheet" type="text/css">

	<style>

	    .main-container {
                text-align: center;
                vertical-align: middle;
            }

            .content {
                text-align: center;
                display: inline-block;
            }

	    .title {
                font-size: 96px;
	    }

	    .title.sub {
	    	font-size: 48px;
	    }
	</style>

	<nav class="navbar navbar-default">
	  <div class="container-fluid">
	    <!-- Brand and toggle get grouped for better mobile display -->
	    <div class="navbar-header">
	      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
		<span class="sr-only">Toggle navigation</span>
		<span class="icon-bar"></span>
		<span class="icon-bar"></span>
		<span class="icon-bar"></span>
	      </button>
	      <a class="navbar-brand" href="/">Home</a>
	    </div>

	    <!-- Collect the nav links, forms, and other content for toggling -->
	    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
	      <ul class="nav navbar-nav">
		<li><a href="#">About </a></li>
		<li><a href="/links">Links </a></li>
	      </ul>
	    </div><!-- /.navbar-collapse -->
	  </div><!-- /.container-fluid -->
	</nav>
    </head>
    <body>
        <div class="main-container text-center">
            <div class="content">
		<div class="title">Welcome</div>
		<div class="title sub">Harrison's Cat 125 portfolio</div>
            </div>
        </div>
    </body>
</html>
