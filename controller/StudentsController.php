<?php
require_once __DIR__ . "/../model/StudentModel.php";

$model = new StudentModel();

// ADD
if (isset($_POST['add'])) {
    $model->addStudent($_POST['name'], $_POST['course'], $_POST['year_level']);
    header("Location: ../index.php");
    exit;
}

// UPDATE
if (isset($_POST['update'])) {
    $model->updateStudent(
        $_POST['id'],
        $_POST['name'],
        $_POST['course'],
        $_POST['year_level']
    );
    header("Location: ../index.php");
    exit;
}

// DELETE
if (isset($_GET['delete'])) {
    $model->deleteStudent($_GET['delete']);
    header("Location: ../index.php");
    exit;
}
?>