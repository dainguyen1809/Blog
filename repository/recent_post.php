<?php
    require 'admin/config/connect.php';

    $sql = "select * from news";
    $result = mysqli_query($conn, $sql);
?>

<div class="col-lg-4 container">
    <div class="widget">
        <h3 class="mb-4">Bài đăng gần đây</h3>
        <div class="post-entry-footer">
            <ul>
                <?php foreach($result as $each){?>
                <li>
                    <a href="../detail.php">
                        <img src="<?php echo $each['photos'];?>" alt="Image placeholder" class="me-4 rounded">
                        <div class="text">
                            <h4><?php echo $each['title'];?></h4>
                            <div class="post-meta">
                                <span class="mr-2"><?php echo date('d-m-Y', strtotime($each['date']));?></span>
                            </div>
                        </div>
                    </a>
                </li>
                <?php }?>
            </ul>
        </div>


    </div> <!-- /.widget -->
</div>