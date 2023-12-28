<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Untree.co">
    <link rel="shortcut icon" href="favicon.png">

    <meta name="description" content="" />
    <meta name="keywords" content="bootstrap, bootstrap5" />

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@400;600;700&display=swap" rel="stylesheet">


    <link rel="stylesheet" href="../assets/fonts/icomoon/style.css">
    <link rel="stylesheet" href="../assets/fonqts/flaticon/font/flaticon.css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">

    <link rel="stylesheet" href="../assets/css/tiny-slider.css">
    <link rel="stylesheet" href="../assets/css/aos.css">
    <link rel="stylesheet" href="../assets/css/glightbox.min.css">
    <link rel="stylesheet" href="../assets/css/style.css">

    <link rel="stylesheet" href="../assets/css/flatpickr.min.css">


    <title>Blog</title>
</head>

<body>
    <?php 
        require 'config/connect.php';
        $sql = "select * from news";
        
        $result = mysqli_query($conn, $sql);
    ?>
    <div class="hero overlay inner-page bg-primary">
        <div class="container">
            <div class="row align-items-center justify-content-center text-center p-3">
                <div class="col-lg-6">
                    <h1 class="heading"><a href="index.php" class="text-light">Trang Chủ</a></h1>
                </div>
            </div>
        </div>
    </div>

    <div class="container p-4">
        <div class="row">
            <h4><a class="btn btn-primary" href="forms/form_insert.php">Thêm bài viết <i
                        class="bi bi-pencil-square"></i></a></h4>
        </div>
        <table class="table table-bordered border-primary text-center">
            <thead>
                <tr>
                    <th scope="col">Tiêu Đề</th>
                    <th scope="col">Ngày Đăng</th>
                    <th scope="col">Ảnh</th>
                    <th scope="col">Sửa</th>
                    <th scope="col">Xóa</th>
                </tr>
            </thead>
            <tbody class="text-center">
                <?php foreach ($result as $each){ ?>
                <tr>
                    <td>
                        <h4>
                            <a class="text-dark" href="detail.php?id=<?php echo $each['id']?>">
                                <?php echo $each['title']?>
                            </a>
                        </h4>
                    </td>
                    <td>
                        <?php echo $each['date']?>
                    </td>
                    <td>
                        <img src="<?php echo $each['photos']?>" alt="Ảnh minh họa" height="150">
                    </td>
                    <td></td>
                    <td></td>
                </tr>
                <?php }?>
            </tbody>
        </table>
    </div>


    <script src="./assets/js/bootstrap.bundle.min.js"></script>
    <script src="./assets/js/tiny-slider.js"></script>

    <script src="./assets/js/flatpickr.min.js"></script>


    <script src="./assets/js/aos.js"></script>
    <script src="./assets/js/glightbox.min.js"></script>
    <script src="./assets/js/navbar.js"></script>
    <script src="./assets/js/counter.js"></script>
    <script src="./assets/js/custom.js"></script>

</body>

</html>