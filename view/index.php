<?php include __DIR__ . "/header.php"; ?>

<h2>Student Management</h2>

<!-- ADD FORM -->
<form action="../controller/StudentController.php" method="POST">
    <input type="text" name="name" placeholder="Name" required>
    <input type="text" name="course" placeholder="Course" required>
    <input type="number" name="year_level" placeholder="Year Level" required>
    <button type="submit" name="add">Add Student</button>
</form>

<br>

<table border="1" cellpadding="10">
<tr>
    <th>ID</th>
    <th>Name</th>
    <th>Course</th>
    <th>Year</th>
    <th>Actions</th>
</tr>

<?php foreach ($students as $s): ?>
<tr>
    <td><?= $s['id']; ?></td>
    <td><?= $s['name']; ?></td>
    <td><?= $s['course']; ?></td>
    <td><?= $s['year_level']; ?></td>
    <td>
        <a href="../controller/StudentController.php?delete=<?= $s['id']; ?>"
           onclick="return confirm('Delete this student?')">
           Delete
        </a>
    </td>
</tr>
<?php endforeach; ?>

</table>

<?php include __DIR__ . "/footer.php"; ?>