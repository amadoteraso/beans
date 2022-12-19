<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border=1>
    <form method="post" action="">
<tr>
    <td> <label>Email:</label></td>
    <td><input type="text" name="Email"></td>
</tr>
<tr>
    <td><label>Contact Number:</label></td>
    <td><input type="text" name="contact"></td>
</tr>
<tr>
    <td><label>COMMENT</label></td>
    <td><textarea name="comment"></textarea></td>
</tr>
<tr>
    <td colspan=2><input type="submit" name="submit"></td>
</tr>
    </form>
</table>
<?php
if(isset($_POST['submit'])){
   $email = $_POST['Email'];
   $contact = $_POST['contact'];
   $comment = $_POST['comment'];

   echo 'My email is:'.$email;
   echo "<br>";
   echo 'My Contact details is:'.$contact;
   echo "<br>";
   echo 'My comment is:'.$comment;
}
?>


</body>
</html>