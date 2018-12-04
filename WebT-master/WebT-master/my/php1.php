<?php
  if(isset($_POST['name']))
    {
      echo $_POST['name'];
    }




?>


<!DOCTYPE html>
<html >
<head>

</head>
<body>
  <form method="post" action="#">
    Name: <input type="text" name="name"  value=<?=$_POST['name']?> >
          <input type="submit" name="submit" value="Submit"         >

</body>
</html>
