<html>
  <head>
      <h1>Welcome to Your Blog!</h1>
  </head>
<?php
// Update log from POST
function updateFromPOST() {
    // Does the value exist?
    if(isset($_POST["submit"])) {
      echo $_POST["log"];

    // // Get the current contents
    // $currentContent = readLog();
    
    // // Add a <br> between content
    // $currentContent = $currentContent . "<br>" . $_POST["log"];
    
    // // Update the file
    // updateLog($currentContent);
    }
  }
?>
<body>
  <p>Please share your thoughts!</p>
  <form action="index.php" method="POST">
    <input type="text" name="log" rows="10" cols="50"></input>
    <input type="submit" name="submit"></input>
  </form>
</body>
</html>