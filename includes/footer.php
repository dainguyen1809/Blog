<footer class="site-footer">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="widget">
                    <h3 class="mb-4">About</h3>
                    <p>Just A Geek <i class="bi bi-suit-heart-fill"></i></p>
                </div> <!-- /.widget -->
                <div class="widget">
                    <h3>Social</h3>
                    <ul class="list-unstyled social">
                        <li><a href="https://www.instagram.com/dainguyen.dhn" target="_blank"><span
                                    class="icon-instagram"></span></a></li>
                        <li><a href="https://www.facebook.com/dainguyen.dhn" target="_blank"><span
                                    class="icon-facebook"></span></a></li>
                        <li><a href="https://www.github.com/dainguyen1809" target="_blank"><span
                                    class="icon-github"></span></a></li>
                    </ul>
                </div> <!-- /.widget -->
            </div>

            <div class="col-lg-4 container">
                <div class="widget">
                    <h3 class="mb-4">Bài đăng gần đây</h3>
                    <div class="post-entry-footer">
                        <ul>
                            <?php
                                require 'admin/config/connect.php';

                                $sql = "select * from news";
                                $result = mysqli_query($conn, $sql);

                                // Số lượng bài viết bạn muốn hiển thị
                                $numberOfPostsToShow = 3;
                                $count = 0;
                            ?>

                            <?php foreach ($result as $each) : ?>
                            <?php if ($count < $numberOfPostsToShow) : ?>
                            <li>
                                <a href="../detail.php">
                                    <img src="<?php echo $each['photos']; ?>" alt="Image placeholder"
                                        class="me-4 rounded">
                                    <div class="text">
                                        <h4><?php echo $each['title']; ?></h4>
                                        <div class="post-meta">
                                            <span
                                                class="mr-2"><?php echo date('d-m-Y', strtotime($each['date'])); ?></span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <?php
                                $count++;
                                endif;
                            ?>
                            <?php endforeach; ?>
                        </ul>
                    </div>


                </div> <!-- /.widget -->
            </div> <!-- /.col-lg-4 -->
        </div> <!-- /.row -->

        <div class="row mt-5">
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