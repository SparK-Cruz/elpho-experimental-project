<?php
  $title = "Contato";
?>
<!DOCTYPE html>
<html>
  <head>
    <?php include("views/common/head.html.php"); ?>
  </head>
  <body>
    <?php include("views/common/menu.html.php"); ?>
    <div class="wrapper">
      <h2>Contato</h2>
      <form action="" method="POST">
        <label>Nome:</label><input type="text" name="name" /><br />
        <label>Mensagem:</label><textarea name="message"></textarea><br />
        <input type="submit" />
        <p><?=$viewbag->resultMessage?></p>
      </form>
    </div>
  </body>
</html>