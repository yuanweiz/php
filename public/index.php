<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
                      "http://www.w3.org/TR/html401/loose.dtd">
<!-- <?php phpinfo(); ?> -->
<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
  <title>Login</title>
</head>
<body>
<h1>find a restaurant</h1>
<form method="POST" action="logincheck.php">
<table>
  <tr>
  <td>customer name:</td> 
    <td><input type="text" size="10" name="customerName"></td>
  </tr>
  <tr>
    <td>keyword:</td>
    <td><input type="text" size="10" name="keyword"></td>
  </tr>
  <tr>
    <td>number of people:</td>
    <td><input type="text" size="10" name="quantity"></td>
  </tr>
  <tr>
    <td>date:</td>
    <td><input type="text" size="10" name="date"></td>
  </tr>
  <tr>
    <td>time:</td>
    <td><input type="text" size="10" name="time"></td>
  </tr>
</table>
<p><input type="submit" value="search">
</form>
</body>
</html>
