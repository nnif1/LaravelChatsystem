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
        <title>HomePage</title>
    </head>
    <body>
        <div class="guides cen centext"><h1>Welcome</h1></div>
	<?php
	if ($_SESSION["log"] == "in") {
	echo "<div class='guides cen centext'>".$_SESSION["user"]."<a href='/logout'>logout</a></div>";
	}
	?>
	<div class="guides cen centext"><?php echo $post; ?></div>
	<?php
$chat1 = new App\Models\chats;


foreach ($chat1->pluck('chatname') as $chat2) {
?>
<div class="guides cen centext"><?php echo "<a href='/chat/".$chat2."'>".$chat2."</a>"; ?></div>
<?php
}
?>
    </body>
</html>
