<?php
?>
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="/styles.css">
		<link rel="stylesheet" href="/custom.css">
		<link rel="stylesheet" href="/media.css">
        <title>Admin</title>
    </head>
    <body>
        <?php
            //require perms 

        ?>
        
        <div class="guides cen centext"><a href="/">Return to HomePage</a></div>
        <div class="guides cen centext">
            <form method="POST" action="/cuser">
                @csrf
                <label>Create User</label><br>
                <label for="uname">Username:</label><br>
				<input type="text" id="uname" name="uname" value=""><br>
				<label for="pword">Password:</label><br>
				<input type="text" id="pword" name="pword" value=""><br>
				<input type="submit" value="Create New User">
            </form>
		
		</div>
        <div class="guides cen centext">
            <form method="POST" action="/cchat">
                @csrf
                <label>Create Chat</label><br>
                <label for="cname">Chat Name:</label><br>
				<input type="text" id="cname" name="cname" value=""><br>
				<input type="submit" value="Create New Chat">
            </form>
		
		</div>
        <div class="guides cen centext">
            <form method="POST" action="/aperm">
                @csrf
                <label>Add Permission to User</label><br>
                <label for="useid">User ID:</label><br>
				<input type="number" id="useid" name="useid" value=""><br>
                <label for="perid">Permission ID:</label><br>
				<input type="number" id="perid" name="perid" value=""><br>
				<input type="submit" value="Add Perm">
            </form>
		
		</div>
        <?php
			if ($_SESSION["log"] == "in") {
				echo "<div class='guides cen centext'>".$_SESSION["user"]."<a href='/logout'>logout</a></div>";
			}
		?>
    </body>
</html>