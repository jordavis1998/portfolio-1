<html>
  <head>
      <h1>Welcome to Your Blog!</h1>
      <p>Please share your thoughts!</p>
  </head>
<?php
    // post of the value in textarea
    if(isset($_POST["submit"])) {
      echo $_POST["log"];
    }
  
?>
<body>
  <form action="index.php" method="POST">
      <textarea name="log" rows="10" cols="50"></textarea>
    <br/>
    <p>
      <input type="submit" name="submit"></input>
    </p>
  </form>
</body>
</html>