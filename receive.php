<?php
// If this is a POST, then echo back the text that was sent in the form
if ($_SERVER['REQUEST_METHOD'] == 'POST'){
  echo "You sent: ";
  echo $_REQUEST['text'];
} 
// Otherwise, just display a form to let people test
else { ?>
<html>
  <body>
  <form method="POST">
    <input type="text" name="number" value="250788123123"></input><br/>
    <textarea name="text">This is a test message</textarea><br/>
    <input type="submit" value="Test Message"</input></br>
  </form>
  </body>
</html>
<?php } ?>
