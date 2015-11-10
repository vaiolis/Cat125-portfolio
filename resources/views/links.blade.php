<!DOCTYPE html>
<html lang="en">
    <head>
	<meta charset="UTF-8">
        <title>Annotated Links</title>

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
		<li class="active"><a href="/links">Links <span class="sr-only">(current)</span></a></li>
	      </ul>
	    </div><!-- /.navbar-collapse -->
	  </div><!-- /.container-fluid -->
	</nav>
	
    </head>
    <body>
	<div class="container text-left">
            <div class="jumbotron">
		<h1 class="text-center">Helpful Links</h1>
		<p>
		    <a href="http://www.codeacademy.com">Code Academy</a>
		    is a training ground for both new and seasoned programmers.  This site offers online coding practice which includes an overview of various programming techniques and step-by-step instructions on how to implement them.
		</p>
		<p>
		    <a href="http://www.w3schools.com">W3Schools</a>
		    is a site dedicated to web design.  It provides code snippets for properties of all types of web elements, from HTML tags to JQuery functions.  This site serves as both a resource for instruction and as documentation for web design standards.
		</p>
		<p>
		    <a href="http://laravel.com/docs/5.1">Laravel</a>
		    5.1 is the framework on which this application is built.  This site contains the documentation of Laravel's many features and utilities.
		</p>
		<p>
		    <a href="http://www.laracasts.com">Laracasts</a>
		    is the Laravel developer's Khan Academy.  It provides video tutorials that explain many of the intricacies of the Laravel framework in a comprehensive yet concise manner.
		</p>
		<p>
		    <a href="http://www.heroku.com">Heroku</a>
		    provides hosting for this application.  Heroku is a platform for web hosting of small to enterprise sized web applications.  It's also free for small-scale applications!
		</p>
            </div>
        </div>
    </body>

    <footer class="footer">
	<script type="text/javascript" src="{{ asset('/js/custom.js') }}"></script>

	<div class="footer-container">
		<p class="text-muted">&copy; Copyright 2015 Harrison Lin</p>
	</div>
    </footer>
</html>
