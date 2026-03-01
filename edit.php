<?php
include 'config.php';
$id = $_GET['id'];
if($_SERVER['REQUEST_METHOD']=='POST'){
    $name=$_POST['name'];
    $age=$_POST['age'];
    $course=$_POST['course'];
    $conn->query("UPDATE students SET name='$name',age='$age',course='$course' WHERE id=$id");
    header("Location:index.php?message=Student Updated!");
    exit;
}
$student=$conn->query("SELECT * FROM students WHERE id=$id")->fetch_assoc();
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Edit Student</title>
<link rel="stylesheet" href="style.css">
</head>
<body>
<header>Edit Student</header>
<div class="container">
<form method="post">
<input type="text" name="name" value="<?php echo $student['name']?>" required>
<input type="number" name="age" value="<?php echo $student['age']?>" required>
<select name="course" required>
<option value="Computer Science" <?php if($student['course']=='Computer Science') echo 'selected'?>>Computer Science</option>
<option value="Mathematics" <?php if($student['course']=='Mathematics') echo 'selected'?>>Mathematics</option>
<option value="Physics" <?php if($student['course']=='Physics') echo 'selected'?>>Physics</option>
<option value="Biology" <?php if($student['course']=='Biology') echo 'selected'?>>Biology</option>
</select>
<button type="submit">Update Student</button>
</form>
<a href="index.php" class="button" style="background:#00ffcc;color:#121212;">Back to List</a>
</div>
</body>
</html>