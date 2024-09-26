<html>
<body>

<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
  Name: <input type="text" name="user_name">
  <input type="submit">
</form>

<?php

/*
- `$_REQUEST` is a PHP super global variable which contains submitted form data, and all cookie data.

- `$_REQUEST` is an array containing data from `$_GET`, `$_POST`, and `$_COOKIE`.
*/

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = htmlspecialchars($_REQUEST['user_name']);
  if (empty($name)) {
    echo "Name is empty";
  } else {
    echo $name;
  }
}
?>

</body>
</html>