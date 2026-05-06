<?php
require_once __DIR__ . "/../config/database.php";

class StudentModel {
    private $conn;

    public function __construct() {
        $db = new Database();
        $this->conn = $db->connect();
    }

    public function getAllStudents() {
        $stmt = $this->conn->prepare("SELECT * FROM students");
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function addStudent($name, $course, $year_level) {
        $stmt = $this->conn->prepare(
            "INSERT INTO students (name, course, year_level) VALUES (?, ?, ?)"
        );
        return $stmt->execute([$name, $course, $year_level]);
    }

    public function updateStudent($id, $name, $course, $year_level) {
        $stmt = $this->conn->prepare(
            "UPDATE students SET name=?, course=?, year_level=? WHERE id=?"
        );
        return $stmt->execute([$name, $course, $year_level, $id]);
    }

    public function deleteStudent($id) {
        $stmt = $this->conn->prepare("DELETE FROM students WHERE id=?");
        return $stmt->execute([$id]);
    }
}
?>