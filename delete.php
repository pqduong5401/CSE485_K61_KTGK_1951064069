<?php include 'header.php' ?>
<main class="container">
        <h2>Xoá Đề Thi</h2>
        
        
        <form action="process-delete.php?id=<?php echo $_GET['id']; ?>"method="post">
        <div class="form-group row">
                <label for="exam_title" class="col-sm-2 col-form-label">Tên Bài Thi:</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" id="exam_title" name="exam_title" >
                </div>
            </div>
            <div class="form-group row">
                <label for="exam_datetime" class="col-sm-2 col-form-label">Ngày thi</label>
                <div class="col-sm-10">
                <input type="Date" class="form-control" id="exam_datetime" name="exam_datetime">
                </div>
            </div>
            <div class="form-group row">
                <label for="duration" class="col-sm-2 col-form-label">Thời gian làm bài</label>
                <div class="col-sm-10">
                <input type="tel" class="form-control" id="duration" name="duration">
                </div>
            </div>
            <div class="form-group row">
                <label for="total_question" class="col-sm-2 col-form-label">Số câu hỏ</label>
                <div class="col-sm-10">
                <input type="tel" class="form-control" id="total_question" name="total_question">
                </div>
            </div>
            <div class="form-group row">
                <label for="marks_per_right_answer" class="col-sm-2 col-form-label">Điểm cho mỗi câu trả lời đúng</label>
                <div class="col-sm-10">
                <input type="tel" class="form-control" id="marks_per_right_answer" name="marks_per_right_answer">
                </div>
            </div>
            <div class="form-group row">
                <label for="created_on" class="col-sm-2 col-form-label">Ngày tạo bài thi</label>
                <div class="col-sm-10">
                <input type="date" class="form-control" id="created_on" name="created_on">
                </div>
            </div>
            <div class="form-group row">
                <label for="status" class="col-sm-2 col-form-label">Trạng thái</label>
                <div class="col-sm-10">
                <input type="tel" class="form-control" id="status" name="status">
                </div>
            </div>
            <div class="form-group row">
                <label for="exam_code" class="col-sm-2 col-form-label">Mã truy cập bài thi</label>
                <div class="col-sm-10">
                <input type="tel" class="form-control" id="exam_code" name="exam_code">
                </div>
            </div>

            

            <div class="form-group row">
                <label for="empMobile" class="col-sm-2 col-form-label"></label>
                <div class="col-sm-10">
                    <button type="submit" class="btn btn-success">Lưu lại</button>
                </div>
            </div>
        </form>
    </main>
    <?php include 'footer.php' ?>