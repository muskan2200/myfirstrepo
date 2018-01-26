<html>
<head>
</head>
<body>
<?php
include("connection.php");
$str=mysqli_query($connection,"select * from rock_paper_scissors ) or die (mysqli_error($connection));
?>
</body>
</html>