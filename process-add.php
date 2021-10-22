<?php
    $exam_title = $_POST['exam_title'];
    $exam_datetime = $_POST['exam_datetime'];
    $duration = $_POST['duration'];
    $total_question = $_POST['total_question'];
    $marks_per_right_answer = $_POST['marks_per_right_answer'];
    $created_on = $_POST['created_on'];
    $status = $_POST['status'];
    $created_on = $_POST['exam_code'];


    include 'config.php';

    // Bước 02:
    $sql = "INSERT INTO `blood_donor`(`bd_name`, `bd_sex`, `bd_age`, `bd_bgroup`, `bd_reg_date`, `bd_phno`) 
    VALUES ('$bd_name','$bd_sex','$bd_age','$bd_bgroup','$date','$phone')";

    echo $sql;
    $result = mysqli_query($conn,$sql);
    
    // Bước 03:
    if($result > 0){
        header("Location:index.php");
    }else{
        echo "Lỗi!";
    }


    //Bước 04: Đóng kết nối
    mysqli_close($conn);


?>