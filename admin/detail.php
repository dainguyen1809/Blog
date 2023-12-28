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
        include 'config/connect.php';

        $sql = "select * from news where id = '$id'";
        $result = mysqli_query($conn, $sql);    
        
        $row = mysqli_fetch_array($result);
    ?>

    <div class="hero overlay inner-page">
        <div class="container">
            <div class="row align-items-center justify-content-center text-center p-3">
                <div class="col-lg-6">
                    <h1 class="heading" data-aos="fade-up"><a href="index.php" class="text-primary">NHD - Blog</a></h1>
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
                                    <?php echo date('d/m/Y', strtotime($row['date']));?>
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

                    <div class="col-md-12 col-lg-8 main-content">
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
                                    <img src="<?php echo $row['photos'];?>" alt="Image placeholder" class="img rounded">
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


                        <div class="pt-5 comment-wrap">
                            <h3 class="mb-5 heading">Bình luận</h3>
                            <!-- <ul class="comment-list">
              <li class="comment">
                <div class="vcard">
                  <img src="assets/images/person_1.jpg" alt="Image placeholder">
                </div>
                <div class="comment-body">
                  <h3>Jean Doe</h3>
                  <div class="meta">January 9, 2018 at 2:21pm</div>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur quidem laborum necessitatibus, ipsam impedit vitae autem, eum officia, fugiat saepe enim sapiente iste iure! Quam voluptas earum impedit necessitatibus, nihil?</p>
                  <p><a href="#" class="reply rounded">Reply</a></p>
                </div>
              </li>

              <li class="comment">
                <div class="vcard">
                  <img src="assets/images/person_2.jpg" alt="Image placeholder">
                </div>
                <div class="comment-body">
                  <h3>Jean Doe</h3>
                  <div class="meta">January 9, 2018 at 2:21pm</div>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur quidem laborum necessitatibus, ipsam impedit vitae autem, eum officia, fugiat saepe enim sapiente iste iure! Quam voluptas earum impedit necessitatibus, nihil?</p>
                  <p><a href="#" class="reply rounded">Reply</a></p>
                </div>

                <ul class="children">
                  <li class="comment">
                    <div class="vcard">
                      <img src="assets/images/person_3.jpg" alt="Image placeholder">
                    </div>
                    <div class="comment-body">
                      <h3>Jean Doe</h3>
                      <div class="meta">January 9, 2018 at 2:21pm</div>
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur quidem laborum necessitatibus, ipsam impedit vitae autem, eum officia, fugiat saepe enim sapiente iste iure! Quam voluptas earum impedit necessitatibus, nihil?</p>
                      <p><a href="#" class="reply rounded">Reply</a></p>
                    </div>


                    <ul class="children">
                      <li class="comment">
                        <div class="vcard">
                          <img src="assets/images/person_4.jpg" alt="Image placeholder">
                        </div>
                        <div class="comment-body">
                          <h3>Jean Doe</h3>
                          <div class="meta">January 9, 2018 at 2:21pm</div>
                          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur quidem laborum necessitatibus, ipsam impedit vitae autem, eum officia, fugiat saepe enim sapiente iste iure! Quam voluptas earum impedit necessitatibus, nihil?</p>
                          <p><a href="#" class="reply rounded">Reply</a></p>
                        </div>

                        <ul class="children">
                          <li class="comment">
                            <div class="vcard">
                              <img src="assets/images/person_5.jpg" alt="Image placeholder">
                            </div>
                            <div class="comment-body">
                              <h3>Jean Doe</h3>
                              <div class="meta">January 9, 2018 at 2:21pm</div>
                              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur quidem laborum necessitatibus, ipsam impedit vitae autem, eum officia, fugiat saepe enim sapiente iste iure! Quam voluptas earum impedit necessitatibus, nihil?</p>
                              <p><a href="#" class="reply rounded">Reply</a></p>
                            </div>
                          </li>
                        </ul>
                      </li>
                    </ul>
                  </li>
                </ul>
              </li>

              <li class="comment">
                <div class="vcard">
                  <img src="assets/images/person_1.jpg" alt="Image placeholder">
                </div>
                <div class="comment-body">
                  <h3>Jean Doe</h3>
                  <div class="meta">January 9, 2018 at 2:21pm</div>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur quidem laborum necessitatibus, ipsam impedit vitae autem, eum officia, fugiat saepe enim sapiente iste iure! Quam voluptas earum impedit necessitatibus, nihil?</p>
                  <p><a href="#" class="reply rounded">Reply</a></p>
                </div>
              </li>
            </ul> -->


                            <div class="comment-form-wrap pt-5">
                                <h3 class="mb-5">Tạo bình luận</h3>
                                <form action="#" class="p-5 bg-light">
                                    <div class="form-group">
                                        <label for="name">Name *</label>
                                        <input type="text" class="form-control" id="name">
                                    </div>
                                    <div class="form-group">
                                        <label for="email">Email *</label>
                                        <input type="email" class="form-control" id="email">
                                    </div>
                                    <div class="form-group">
                                        <label for="website">Website</label>
                                        <input type="url" class="form-control" id="website">
                                    </div>

                                    <div class="form-group">
                                        <label for="message">Message</label>
                                        <textarea name="" id="message" cols="30" rows="10"
                                            class="form-control"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <input type="submit" value="Post Comment" class="btn btn-primary">
                                    </div>

                                </form>
                            </div>
                        </div>

                    </div>

                    <!-- END main-content -->

                    <?php include '../includes/sidebar.php';?>

                </div>
            </div>
        </section>


        <!-- Start posts-entry -->
        <section class="section posts-entry posts-entry-sm bg-light">
            <div class="container">
                <div class="row mb-4">
                    <div class="col-12 text-uppercase text-black">Một số bài viết</div>
                </div>
                <div class="row">
                    <div class="col-md-6 col-lg-3">
                        <div class="blog-entry">
                            <a href="detail.php" class="img-link">
                                <img src="<?php echo $row['photos'];?>" alt="Image" class="img-fluid">
                            </a>
                            <span class="date">
                                <?php echo date('d/m/Y', strtotime($row['date']));?>
                            </span>
                            <h2><a href="single.php">
                                    <?php echo $row['title'];?>
                                    </p>
                                    <p><a href="#" class="read-more">Xem thêm</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End posts-entry -->

        <?php include '../includes/footer.php';?>

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