<?php
include 'config.php';
if($_SERVER['REQUEST_METHOD']=='POST'){
    $name=$_POST['name'];
    $age=$_POST['age'];
    $course=$_POST['course'];
    $conn->query("INSERT INTO students(name,age,course) VALUES('$name','$age','$course')");
    header("Location:index.php?message=New Student Added!");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Add Student</title>
<link rel="stylesheet" href="style.css">
</head>
<body>
<header>Add Student</header>
<div class="container">
<form method="post">
<input type="text" name="name" placeholder="Student Name" required>
<input type="number" name="age" placeholder="Age" required>
<select name="course" required>
<option value="">Select Course</option>
<option>Computer Science</option>
<option>Mathematics</option>
<option>Physics</option>
<option>Biology</option>
</select>
<button type="submit">Add Student</button>
</form>
<a href="index.php" class="button" style="background:#00ffcc;color:#121212;">Back to List</a>
</div>
</body>
</html>