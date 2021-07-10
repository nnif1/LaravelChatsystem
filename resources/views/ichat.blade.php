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
<script>
setInterval(myTimer ,10000);
function myTimer() {
window.location.assign("/ichat")
}
</script>
<div class="guides cen">
	<?php
$mess = new App\Models\msgs;


foreach ($mess::all() as $messes) {
if ($messes->chat == $_SESSION["chatty"]) {
?>

<?php echo "".$messes->user.": ".$messes->message."<br>"; ?>
<?php
}
}
?>
</div>
    </body>
</html>
