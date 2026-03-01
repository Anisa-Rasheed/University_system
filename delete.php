<?php
include 'config.php';
$id = $_GET['id'];
$student = $conn->query("SELECT * FROM students WHERE id=$id")->fetch_assoc();
if(!$student){ header("Location:index.php?message=Student Not Found!"); exit; }
if(isset($_POST['confirm'])){
    $conn->query("DELETE FROM students WHERE id=$id");
    header("Location:index.php?message=Student Deleted!");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Delete Student</title>
<link rel="stylesheet" href="style.css">
</head>
<body>
<div class="delete-confirm">
<p>Are you sure you want to delete <b><?php echo $student['name']?></b>?</p>
<form method="post">
<button type="submit" name="confirm" class="yes">Yes, Delete</button>
<a href="index.php" class="no">Cancel</a>
</form>
</div>
</body>
</html>