<link rel="stylesheet" href="style.css">
<div id="postBox">
<form action="shout.php" method="post">
<table>
<tr>
<td>Name:</td><td> <input type="text" name="name" value="Anonymous"><input type="submit" value="Post"></td>
</tr>
<tr>
<td>Post:</td><td><textarea name="post"></textarea></td>
</tr>
</table>
</form>
</div>

<?php
echo file_get_contents("posts.html");
?>
<span id="powered">proudly powered by <a href="https://github.com/getgle/4shout">4shout</a></span>
