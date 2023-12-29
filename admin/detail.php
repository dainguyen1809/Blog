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
    <link rel="stylesheet" href="../assets/fonts/flaticon/font/flaticon.css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">

    <link rel="stylesheet" href="../assets/css/tiny-slider.css">
    <link rel="stylesheet" href="../assets/css/aos.css">
    <link rel="stylesheet" href="../assets/css/glightbox.min.css">
    <link rel="stylesheet" href="../assets/css/style.css">

    <link rel="stylesheet" href="../assets/css/flatpickr.min.css">


    <title>Chi tiết bài viết</title>
</head>

<body>
    <?php 
        $id = $_GET['id'];
        require 'config/connect.php';

        $sql = "select * from news where id = '$id'";
        $result = mysqli_query($conn, $sql);    
        
        $row = mysqli_fetch_array($result);
    ?>

    <div class="hero overlay inner-page bg-primary">
        <div class="container">
            <div class="row align-items-center justify-content-center text-center p-3">
                <div class="col-lg-6">
                    <h1 class="heading"><a href="index.php" class="text-light">NHD - Blog</a></h1>
                </div>
            </div>
        </div>
    </div>

    <div class="site-cover site-cover-sm same-height overlay single-page"
        style="background-image: url('<?php echo $row['photos'];?>');">
        <div class="container">
            <div class="row same-height justify-content-center">
                <div class="col-md-6">
                    <div class="post-entry text-center">
                        <h1 class="mb-4">
                            <?php echo $row['title'];?>
                        </h1>
                        <div class="post-meta align-items-center text-center">
                            <span class="d-inline-block mt-1">By dainguyen.nhd</span>
                            <span>&nbsp;-&nbsp;
                                <?php echo date('d-m-Y', strtotime($row['date']));?>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="section">
        <div class="container">

            <div class="row blog-entries element-animate">

                <div class="col-12 main-content">
                    <div class="row">
                        <p><a href="index.php">Trang chủ <i class="bi bi-house"></i></a>
                            &RightArrow;<span>
                                <?php echo $row['title'];?>
                            </span></p>
                    </div>
                    <div class="post-content-body">
                        <h4 class="fw-bolder text-dark">
                            <?php echo $row['title'];?>
                        </h4>
                        <div class="row my-4">
                            <div class="col-md-6 mb-4">
                                <img src="<?php echo $row['photos'];?>" alt="Image placeholder"
                                    class="img-fluid rounded">
                            </div>
                        </div>
                        <p>
                            <?php echo nl2br($row['content']);?>
                        </p>
                    </div>


                    <div class="pt-5">
                        <p>Categories: <a href="#">Food</a>, <a href="#">Travel</a> Tags: <a href="#">#manila</a>,
                            <a href="#">#asia</a>
                        </p>
                    </div>
                </div>
            </div>
    </section>

    <footer class="site-footer">
        <div class="container text-center">
            <div class="row">
                <div class="widget">
                    <h3 class="mb-2">About</h3>
                    <p>Just A Geek <i class="bi bi-suit-heart-fill"></i></p>
                </div>
                <div class="row mt-2">
                    <div class="col-12 text-center">

                        <p>Copyright &copy; by dainguyen.nhd <script>
                            document.write(new Date().getFullYear());
                            </script>.</a>
                        </p>
                    </div>
                </div>
            </div> <!-- /.container -->
    </footer> <!-- /.site-footer -->

    <!-- Preloader -->
    <div id="overlayer"></div>
    <div class="loader">
        <div class="spinner-border text-primary" role="status">
            <span class="visually-hidden">Loading...</span>
        </div>
    </div>

    <script src="../assets/js/bootstrap.bundle.min.js"></script>
    <script src="../assets/js/tiny-slider.js"></script>

    <script src="../assets/js/flatpickr.min.js"></script>


    <script src="../assets/js/aos.js"></script>
    <script src="../assets/js/glightbox.min.js"></script>
    <script src="../assets/js/navbar.js"></script>
    <script src="../assets/js/counter.js"></script>
    <script src="../assets/js/custom.js"></script>



</body>

</html>