<?php
use App\Models\chats;
?>
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="/styles.css">
	<link rel="stylesheet" href="/custom.css">
	<link rel="stylesheet" href="/media.css">
        <title>HomePage</title>
    </head>
    <body class="antialiased">
	<?php 
?>
        <div class="guides cen centext"><a href="/">Return to HomePage</a></div>
	<div class="guides cen centext"><iframe <iframe src="/ichat" title="W3Schools Free Online Web Tutorials"></iframe> </div>
	<div class="guides cen centext">
	<form method="POST" action="/post">
	@csrf
	<label for="fname">Write Your Message</label><br>
	<input type="text" id="texta" name="texta" value=""><br>
	<input type="submit" value="Submit">
	</form>
	
	</div>
    </body>
</html>
