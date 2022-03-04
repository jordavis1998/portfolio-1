<?php
// Update log from POST
function updateFromPOST() {
    // Does the value exist?
    if(isset($_POST["submit"])) {
      echo $_POST["log"];

    // Get the current contents
    // $currentContent = readLog();
    
    // // Add a <br> between content
    // $currentContent = $currentContent . "<br>" . $_POST["log"];
    
    // // Update the file
    // updateLog($currentContent);
    }
  }
?>