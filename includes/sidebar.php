<?php
    require 'admin/config/connect.php';
    
    $search = '';

    if(isset($_GET['search'])){
        $search = $_GET['search'];
    }
    
    $sql = "select * from news
    where title like '%$search%'";

    $result = mysqli_query($conn, $sql);
?>

<div class="col-md-12 col-lg-4 sidebar">
    <div class="row">
        <select class="form-select form-select-xl mb-3" aria-label=".form-select-xl example">
            <option selected>Vietnamese</option>
            <option value="1">English</option>
        </select>
    </div>
    <div class="sidebar-box search-form-wrap">
        <form class="sidebar-search-form">
            <span class="bi-search"></span>
            <input name="search" type="text" class="form-control" id="" placeholder="Nhập nội dung tìm kiếm..."
                value="<?php echo $search?>">
        </form>
    </div>
    <!-- END sidebar-box -->

    <div class="sidebar-box">
        <h3 class="heading">Bài viết phổ biến</h3>
        <div class="post-entry-sidebar">
            <ul>
                <?php foreach($result as $each){?>
                <li>
                    <a href="detail.php">
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
    </div>
    <!-- END sidebar-box -->

    <div class="sidebar-box">
        <h3 class="heading">Danh mục</h3>
        <ul class="categories">
            <li><a href="#">Ẩm thực <span>(12)</span></a></li>
        </ul>
    </div>
    <!-- END sidebar-box -->

    <div class="sidebar-box">
        <h3 class="heading">Tags</h3>
        <ul class="tags">
            <li><a href="#">Du lịch</a></li>
        </ul>
    </div>
</div>
<!-- END sidebar -->