<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
  
  <a href="add.php" class="btn btn-success"><i class="fas fa-user-plus"></i> Thêm bài thi</a>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- On tables -->
    <table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Tên Bài Thi</th>
      <th scope="col">Ngày thi</th>
      <th scope="col">Thời gian làm bài</th>
      <th scope="col">Số câu hỏi</th>
      <th scope="col">Điểm mỗi câu trả lời đúng</th>
      <th scope="col">Ngày tạo bài thi</th>
      <th scope="col">Trạng Thái</th>
      <th scope="col">Mã Truy Cập </th>
      <th scope="col">Sửa thông tin</th>
      <th scope="col">Xóa thông tin</th>
    </tr>
  </thead>
  <tbody>
  <?php
            // Quy trình 4 bước
            // Bước 01: Đã tạo sẵn, gọi lại thôi
            include 'config.php';
            // Bước 02: Thực hiện TRUY VẤN
            $sql = "SELECT id, exam_title, exam_datetime, duration, total_question,
            marks_per_right_answer, created_on,status, exam_code FROM exams ";
            
            
            $result = mysqli_query($conn, $sql); //Lưu kết quả trả về vào result
            // Bước 03: Phân tích và xử lý kết quả
            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
            ?>
                    <tr>
                        <th scope="row"><?php echo $row['id']; ?> </th>
                        <td><?php echo $row['exam_title']; ?></td>
                        <td><?php echo $row['exam_datetime']; ?></td>
                        <td><?php echo $row['duration']; ?></td>
                        <td><?php echo $row['total_question']; ?></td>
                        <td><?php echo $row['marks_per_right_answer']; ?></td>
                        <td><?php echo $row['created_on']; ?></td>
                        <td><?php echo $row['status']; ?></td>
                        <td><?php echo $row['exam_code']; ?></td>
                        <td><a href="all.php?id= <?php echo $row['id']; ?>"><i class="fas fa-user-times btn btn-success"></i></a></td>
                        <td><a href="edit.php?id= <?php echo $row['id']; ?>"><i class="fas fa-user-edit btn btn-success"></i></a></td>
                        <td><a href="delete.php?id= <?php echo $row['id']; ?>"><i class="fas fa-user-times btn btn-success"></i></a></td>
                    </tr>
            <?php
                }
            }
            ?>
  </tbody>
</table>
  </body>
</html>