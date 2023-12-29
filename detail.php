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


    <link rel="stylesheet" href="./assets/fonts/icomoon/style.css">
    <link rel="stylesheet" href="./assets/fonts/flaticon/font/flaticon.css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">

    <link rel="stylesheet" href="./assets/css/tiny-slider.css">
    <link rel="stylesheet" href="./assets/css/aos.css">
    <link rel="stylesheet" href="./assets/css/glightbox.min.css">
    <link rel="stylesheet" href="./assets/css/style.css">

    <link rel="stylesheet" href="./assets/css/flatpickr.min.css">


    <title>Detail</title>
</head>

<body>
<?php 
        $id = $_GET['id'];
        require 'admin/config/connect.php';

        $sql = "select * from news where id = '$id'";
        $result = mysqli_query($conn, $sql);    
        
        $row = mysqli_fetch_array($result);
    ?>
    <?php require 'includes/header.php';?>

    <div class="site-cover site-cover-sm same-height overlay single-page" style="background-image: url('<?php echo $row['photos'];?>');">
        <div class="container">
            <div class="row same-height justify-content-center">
                <div class="col-md-6">
                    <div class="post-entry text-center">
                        <h1 class="mb-4"><?php echo $row['title'];?></h1>
                        <div class="post-meta align-items-center text-center">
                            <span class="d-inline-block mt-1">By dainguyen.nhd</span>
                            <span>&nbsp;-&nbsp; <?php echo date('d-m-Y', strtotime($row['date']));?></span>
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

                    <div class="post-content-body">
                        <p class="fs-5"><?php echo $row['content'];?></p>
                        <div class="row my-4">
                            <div class="col-md-12 mb-4">
                                <img src="<?php echo $row['photos'];?>" alt="Image placeholder" class="img-fluid rounded">
                            </div>
                        </div>
                    </div>


                    <div class="pt-5">
                        <p>Categories: <a href="#">Food</a>, <a href="#">Travel</a> Tags: <a href="#">#manila</a>, <a
                                href="#">#asia</a></p>
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
                                    <textarea name="" id="message" cols="30" rows="10" class="form-control"></textarea>
                                </div>
                                <div class="form-group">
                                    <input type="submit" value="Post Comment" class="btn btn-primary">
                                </div>

                            </form>
                        </div>
                    </div>

                </div>

                <!-- END main-content -->

                <?php require 'includes/sidebar.php';?>

            </div>
        </div>
    </section>


  <?php require 'repository/most_post.php'?>

    <?php require 'includes/footer.php';?>

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