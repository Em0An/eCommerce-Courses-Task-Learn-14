<?php

// task Languages

if (($_SERVER["REQUEST_METHOD"] === "POST") && (isset($_POST['ar']))) {

    include $lang . 'arabic.php';

} elseif (($_SERVER["REQUEST_METHOD"] === "POST") && (isset($_POST['en']))) {

    include $lang . 'english.php';

} else {

    include $lang . 'english.php';
}

?>

<div class="relative">
  <a>Languages</a>
  <input id ="mycb" type="checkbox">
  <div class ="child">
    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
        <input type="submit" name="ar" value="Arabic" /><br>
        <input type="submit" name="en" value="English" />
    </form>
  </div>
</div>
