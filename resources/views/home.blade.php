<?php
use App\Models\perms;
use App\Models\prelation;
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
		<div class="guides cen centext">
		<?php
			if ($_SESSION["log"] == "in") {
				echo "".$_SESSION["user"]."<a href='/logout'>logout</a>";
			}
		?>
		</div>
		<div class="guides cen centext"><?php echo $post; ?></div>
		<div class="guides cen centext">
		<?php
			$chat1 = new App\Models\chats;


			foreach ($chat1->pluck('chatname') as $chat2) {
		?>
		<?php echo "<a href='/chat/".$chat2."'>".$chat2."</a>"; ?>
		<?php
			}
		?>
		</div>
		<?php
			$perms = new perms;
			$relations = new prelation;
			foreach ($relations::all() as $relation) {
                $uuidr = $relation->userid;
                if ($uuidr == $_SESSION["uuid"]) {
                    foreach ($perms::all() as $perm) {
                        if ($perm->id == $relation->permid) {
                            if ($perm->access == "admin") {
                                echo "<div class='guides cen centext'><a href='/admin'>Admin</a></div>";
                            }
                        }
                    }
                }
            }
		?>
    </body>
</html>
