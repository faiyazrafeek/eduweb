<?php
  session_start();
  require("connection.php");

  $id = "";
  $title = "";
  $duration = 0;
  $edit_state = false;

  // CREATE
  if (isset($_POST["save"])){
    $id = $_POST["id"];
    $title = $_POST["title"];
    $duration = $_POST["duration"];

    $sql = "INSERT INTO courses (course_id, course_title, course_duration)
    VALUES ('$id', '$title', '$duration')";

    if (mysqli_query($conn, $sql)) {
      $_SESSION["msg"] = "Course Added";
      header("location: course.php");
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
  }

  // READ
  $sql = "SELECT * FROM courses";
  $result = mysqli_query($conn, $sql);

  // UPDATE
  if (isset($_POST["update"])){
    $id = mysqli_real_escape_string($conn, $_POST["id"]);
    $title = mysqli_real_escape_string($conn, $_POST["title"]);
    $duration = mysqli_real_escape_string($conn, $_POST["duration"]);

    mysqli_query($conn, "UPDATE courses SET course_title='$title', course_duration='$duration' WHERE course_id='$id' ");
    $_SESSION["msg"] = "Course Updated";
    header("location: course.php");
  }

  // DELETE
  if (isset($_GET["del"])){
    $id = $_GET["del"];

    mysqli_query($conn, "DELETE FROM courses WHERE course_id='$id' ");
    $_SESSION["msg"] = "Course Deleted";
    header("location: course.php");
  }
?>