<!-- <?php 
    require 'admin/config/connect.php';

    $sql = "select * from news";
    $result = mysqli_query($conn, $sql);
?> -->
<!-- Start posts-entry -->
<!-- <section class="section posts-entry posts-entry-sm bg-light">
    <div class="container">
        <div class="row mb-4">
            <div class="col-12 text-uppercase text-black">More Blog Posts</div>
        </div>
        <div class="row">
            <?php foreach($result as $each){?>
            <div class="col-md-6 col-lg-3">
                <div class="blog-entry">
                    <a href="detail.php?id=<?php echo $each['id'];?>" class="img-link">
                        <img src="<?php echo $each['photos']?>" alt="Image" class="img-fluid">
                    </a>
                    <span class="date"><?php echo date('d-m-Y', strtotime($each['date']));?></span>
                    <h2><a href="detail.php?id=<?php echo $each['id'];?>"><?php echo $each['title'];?></p>
                            <p><a href="#" class="read-more">Continue Reading</a></p>
                </div>
            </div>
            <?php }?>
        </div>
    </div>
</section> -->
<!-- End posts-entry -->