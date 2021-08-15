<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="/styles.css">
		<link rel="stylesheet" href="/custom.css">
		<link rel="stylesheet" href="/media.css">
        <title>Login</title>
    </head>
    <body>
        <div class="guides cen centext"><h1>Welcome</h1></div>
		<div class="guides cen centext"></div>
		<div class="guides cen centext">
			<form method="POST" action="/login">
				@csrf
				<label for="uname">Username:</label><br>
				<input type="text" id="uname" name="uname" value=""><br>
				<label for="pword">Password:</label><br>
				<input type="password" id="pword" name="pword" value=""><br>
				<input type="submit" value="Submit">
			</form>
		</div>
    </body>
</html>
