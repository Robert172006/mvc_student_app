<?php
require_once "model/StudentModel.php";

$model = new StudentModel();
$students = $model->getAllStudents();

require_once "view/index.php";
?>