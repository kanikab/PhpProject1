<?php
function test() {
  echo $_POST["user"]; 
}    

if (isset($_POST)){ //If it is the first time, it does nothing   
  test();
}
?>

<form action="test.php" method="post">
            <input type="text" name="user" placeholder="enter a text" />
            <input type="submit" value="submit" onclick="test()" />
</form>