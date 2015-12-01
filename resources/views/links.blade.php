@extends('app')

@section('title', 'Annotated Links')

@section('body')
	<div class="container text-left">
            <div class="jumbotron">
		<h1 class="text-center">Helpful Links</h1>
		<p>
		    <a href="http://www.codeacademy.com" target="_blank">Code Academy</a>
		    is a training ground for both new and seasoned programmers.  This site offers online coding practice which includes an overview of various programming techniques and step-by-step instructions on how to implement them.
		</p>
		<p>
		    <a href="http://www.w3schools.com" target="_blank">W3Schools</a>
		    is a site dedicated to web design.  It provides code snippets for properties of all types of web elements, from HTML tags to JQuery functions.  This site serves as both a resource for instruction and as documentation for web design standards.
		</p>
		<p>
		    <a href="http://laravel.com/docs/5.1" target="_blank">Laravel</a>
		    5.1 is the framework on which this application is built.  This site contains the documentation of Laravel's many features and utilities.
		</p>
		<p>
		    <a href="http://www.laracasts.com" target="_blank">Laracasts</a>
		    is the Laravel developer's Khan Academy.  It provides video tutorials that explain many of the intricacies of the Laravel framework in a comprehensive yet concise manner.
		</p>
		<p>
		    <a href="http://www.heroku.com" target="_blank">Heroku</a>
		    provides hosting for this application.  Heroku is a platform for web hosting of small to enterprise sized web applications.  It's also free for small-scale applications!
		</p>
            </div>
        </div>
@stop

