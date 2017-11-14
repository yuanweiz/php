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
<form method="POST" action="query.php">
<table>
  <tr>
  <td>customer name:</td> 
    <td><input type="text" size="30" name="customerName"></td>
  </tr>
  <tr>
    <td>keyword:</td>
    <td><input type="text" size="30" name="keyword"></td>
  </tr>
  <tr>
    <td>number of people:</td>
    <td><input type="number" size="10" name="quantity" value="10"></td>
  </tr>
  <tr>
    <td>datetime:</td>
    <td><input type="text" size="30" name="datetime" value="2017-11-05 12:00:00"></td>
  </tr>
</table>
<p><input type="submit" value="search">
</form>
</body>
</html>
