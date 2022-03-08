<html>
  <body>
    <?php
      $user = $_POST['user'];
      $user_password = $_POST['user_password'];
      //echo "user: " .$user ;
      //echo "<br>"; 
      //echo "password: " .$user_password;
    $myfic = fopen('data.txt', 'w+');
    fputs($myfic, $user);
    fputs($myfic, "\n");
    fputs($myfic, $user_password);
    fclose($myfic);

    header("Location: products.html");
	exit();
    ?>
    
  </body>

</html>