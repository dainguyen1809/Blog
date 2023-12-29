<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Form Insert</title>

    <!-- Custom fonts for this template-->
    <link href="../assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="../assets/css/sb-admin-2.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
</head>

<body>
    <?php 
        $id = $_GET['id'];
        require '../config/connect.php';

        $sql = "select * from news where id = '$id'";
        $result = mysqli_query($conn, $sql);

        $row = mysqli_fetch_array($result);
    ?>

    <div class="container">
        <div class="col-12 pt-5">
            <h3 class="text-center">Thêm Bài Viết</h3>
        </div>
        <form method="post" action="../handlers/process_delete.php" class="p-5 bg-light">
            <div class="form-group">
                <label for="title">Mã</label>
                <input name="id" type="hidden" class="form-control" id="name" value="<?php echo $row['id'];?>">
            </div>
            <div class="form-group">
                <label for="title">Tiêu Đề</label>
                <input name="title" type="text" class="form-control" id="name" value="<?php echo $row['title'];?>">
            </div>
            <div class="form-group">
                <label for="date">Ngày Đăng</label>
                <input name="date" type="date" class="form-control" id="email" value="<?php echo $row['date'];?>">
            </div>
            <div class="form-group">
                <label for="photos">Ảnh</label>
                <input name="photos" type="text" class="form-control" id="website" value="<?php echo $row['photos'];?>">
            </div>

            <div class="form-group">
                <label for="content">Nội Dung</label>
                <textarea name="content" id="message" cols="30" rows="10"
                    class="form-control"><?php echo $row['content'];?></textarea>
            </div>
            <div class="row">
                <div class="col-6">
                    <button type="submit" class="btn btn-danger col-4">Xóa</button>
                    <a href="../index.php" class="btn btn-secondary col-4"><i class="bi bi-arrow-left"></i> Quay lại</a>
                </div>
            </div>

        </form>
    </div>



</body>

</html>