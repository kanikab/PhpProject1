<?php
ob_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Best View</title>
    </head>
    <body>

<!-- User Login -->
        <div id="mn1" class="main1">
            <form action="test.php" method="post" enctype="multipart/form-data">
<input type="file" multiple="multiple" name="file[]" /><input type="submit" value="Upload" />
</form>
        </div>


        <?php
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            forgot_password();
        }
        function forgot_password() {
            for($i=0;$i<count($_FILES['file']['size']);$i++){
	if(strstr($_FILES['file']['type'][$i], 'image')!==false){
		$file = 'uploads/'.time().' - '.$_FILES['file']['name'][$i];
		move_uploaded_file($_FILES['file']['tmp_name'][$i],$file);
		echo'<a href="'.$file.'"><img src="'.$file.'" style="max-height: 250px;max-width: 500px;" alt="Uploaded Image '.$i.'" /></a><br/>';
	}
}
        }
        ?>
    </body>
</html>
