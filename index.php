<?php
include 'config.php';

$result = $conn->query("SELECT * FROM students ORDER BY id ASC");
$total = $result->num_rows;

$message = isset($_GET['message']) ? $_GET['message'] : '';
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>CRUD System</title>
<link rel="stylesheet" href="style.css">
</head>
<body>
<header>University Student System</header>
<div class="container">

<?php if($message): ?>
<div class="message"><?php echo $message; ?></div>
<script>setTimeout(()=>{document.querySelector('.message').style.display='none';},3000);</script>
<?php endif; ?>

<p>Total Students: <?php echo $total; ?></p>
<a href="add.php" class="button" style="background:#00ffcc;color:#121212;">Add New Student</a>

<table>
<thead>
<tr><th>ID</th><th>Name</th><th>Age</th><th>Course</th><th>Actions</th></tr>
</thead>
<tbody>
<?php while($row=$result->fetch_assoc()): ?>
<tr>
<td><?php echo $row['id']?></td>
<td><?php echo $row['name']?></td>
<td><?php echo $row['age']?></td>
<td><?php echo $row['course']?></td>
<td>
<a href="edit.php?id=<?php echo $row['id']?>" class="button edit">Edit</a>
<a href="delete.php?id=<?php echo $row['id']?>" class="button delete">Delete</a>
</td>
</tr>
<?php endwhile; ?>
</tbody>
</table>
</div>
</body>
</html>