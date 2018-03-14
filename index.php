<?php
if ($_POST['pass'] == 'please')
echo 'Welcome to the secret page!';
else
header('Location: welcome_page.html')
?>
