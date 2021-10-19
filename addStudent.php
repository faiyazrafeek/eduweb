<?php
    session_start();
    require("connection.php");

    $id = "";
    $name = "";
    $grade = 0;
    $address = "";
    $edit_state = false;


    // Insert Student
    if(isset($_POST["save"])){
        $id = $_POST['id'];
        $name = $_POST['stname'];
        $grade = $_POST["grade"];
        $address = $_POST["address"];

        $query = "INSERT INTO students VALUES('$id', '$name', '$grade', '$address')";
        if(mysqli_query($conn, $query)){    
            $_SESSION["msg"] = "Student Registered";    
            header("location: student.php");
        }else{
            echo 'Error saving data';
        }
    }

    // Fetching student data
    $query = "SELECT * FROM students";
    $result = mysqli_query($conn, $query);

    // Update Student
    if(isset($_POST["update"])){
        $id = mysqli_real_escape_string($conn, $_POST["id"]);
        $name = mysqli_real_escape_string($conn, $_POST["stname"]);
        $grade = mysqli_real_escape_string($conn, $_POST["grade"]);
        $address = mysqli_real_escape_string($conn, $_POST["address"]);

        $query = "UPDATE students SET student_name='$name', grade='$grade', address = '$address' WHERE student_id = '$id' ";
        if(mysqli_query($conn, $query)){    
            $_SESSION["msg"] = "Student Updated";    
            header("location: student.php");
        }else{
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
    }

    // Delete
    if (isset($_GET["del"])){
        $id = $_GET["del"];

        mysqli_query($conn, "DELETE FROM students WHERE student_id='$id' ");
        $_SESSION["msg"] = "Student Deleted";
        header("location: student.php");
    }

    


?>