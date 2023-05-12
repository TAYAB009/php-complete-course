<?php
    $db = mysqli_connect('localhost', 'tayab', 'SYSTEMS_ENGINNER', 'hospital');
    // echo gettype($db);
    if (!$db) {
        die('Connect Error'.mysqli_connect_error());
    }else{
        echo 'Database accessed!';
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
<title>Hospital database</title>

<script>
function fetchResults() {
  var xhr = new XMLHttpRequest();
  xhr.onreadystatechange = function() {
    if (xhr.readyState === 4 && xhr.status === 200) {
      document.getElementById("results").innerHTML = xhr.responseText;
    }
  };
  xhr.open("GET", "cardicDB.php", true);
  xhr.send();
   
}



</script>

</head>
<body>
</br></br></br>
    <button type = "button" onclick="fetchResults()">fetch all result</button> 
    <h3>My hospital database</h3>
    <div id="results"></div>
</body>
</html>
 
