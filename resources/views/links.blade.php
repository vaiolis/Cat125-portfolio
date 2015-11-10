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
    </head>
    <body>
        <div class="container text-center">
            <div class="jumbotron">
		<h1>Annotated Links</h1>
		<p>
		    <a href="http://www.codeacademy.com">Code Academy:</a>
		    A site for learning how to code.
		</p>
		<p>
		    <a href="http://www.w3schools.com">W3Schools:</a>
		    A site dedicated to web design.
		</p>
		<p>
		    <a href="http://laravel.com/docs/5.1">Laravel:</a>
		    Laravel 5.1 Documentation site.
		</p>
		<p>
		    <a href="http://www.laracasts.com">Laracasts:</a>
		    Video tutorials on Laravel PHP.
		</p>
		<p>
		    <a href="http://www.heroku.com">Heroku:</a>
		    Free application hosting for web developers.
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
