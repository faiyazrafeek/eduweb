<?php

require("connection.php");

if (isset($_POST["save"])){
  $id = $_POST["id"];
  $title = $_POST["title"];
  $duration = $_POST["duration"];

  $sql = "INSERT INTO courses (course_id, course_title, course_duration)
  VALUES ('$id', '$title', '$duration')";

  if (mysqli_query($conn, $sql)) {
    header("location: course.php");
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }
}

$sql = "SELECT * FROM courses";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
  // output data of each row
  while($row = mysqli_fetch_assoc($result)) {
    echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
  }
} else {
  echo "0 results";
}

mysqli_close($conn);

?>