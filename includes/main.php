<?php
    require 'admin/config/connect.php';
    
    $pages = 1;
    if(isset($_GET['pages'])){
        $pages = $_GET['pages'];
    }
    
    $search = '';
    if(isset($_GET['search'])){
        $search = $_GET['search'];
    }
    
   $sql_num_news = "select count(*) from news where title like '%$search%'";
   $array_num_news = mysqli_query($conn, $sql_num_news);
   $result_num_news = mysqli_fetch_array($array_num_news);
   $num_news = $result_num_news['count(*)'];

   $num_news_on_pages = 2;

   $num_pages = ceil($num_news / $num_news_on_pages);
   $skip_pages = $num_news_on_pages * ($pages - 1);
    

    $sql = "select * from news
    where title like '%$search%'
    limit $num_news_on_pages offset $skip_pages";
    $result = mysqli_query($conn, $sql);
    
    // $pages = 1;
        
    //     if(isset($_GET['pages'])){
    //         $pages = $_GET['pages'];
    //     }

    //     $search = '';
    //     if(isset($_GET['search'])){
    //         $search = $_GET['search'];
    //     }
        
    //     $sql_num_news = "select count(*) from news where title like '%$search%'";
    //     $array_num_news= mysqli_query($conn, $sql_num_news);
    //     $result_num_news = mysqli_fetch_array($array_num_news);
    //     $num_news = $result_num_news['count(*)'];
        
    //     $num_news_on_pages = 2;
        
    //     $num_pages = ceil($num_news / $num_news_on_pages);

    //     $skip_pages =$num_news_on_pages * ($pages - 1);


    //     $sql = "select * from news
    //         where title like '%$search%'
    //         limit $num_news_on_pages offset $skip_pages";
        
    //     $result = mysqli_query($conn, $sql);
?>

<div class="section search-result-wrap">
    <div class="container">
        <div class="row posts-entry">
            <div class="col-lg-8">
                <?php foreach($result as $each){?>
                <div class="blog-entry d-flex blog-entry-search-item">
                    <a href="detail.php?id=<?php echo $each['id']?>" class="img-link me-4">
                        <img src="<?php echo $each['photos'];?>" alt="Image" class="img-fluid">
                    </a>
                    <div>
                        <span class="date">
                            <?php echo date('d-m-Y', strtotime($each['date']));?> &bullet; <a href="#">Business</a>
                        </span>
                        <h2><a class="text-dark" href="detail.php?id=<?php echo $each['id']?>">
                                <?php echo $each['title'];?>
                            </a></h2>
                        <p>
                            <?php echo substr($each['content'], 0, 242); ?>...
                        </p>
                        <p><a href="detail.php?id=<?php echo $each['id']?>" class="btn btn-sm btn-outline-primary">Read
                                More</a></p>
                    </div>
                </div>
                <?php }?>
                <div class="row text-start pt-5 border-top">
                    <div class="col-md-12">
                        <div class="custom-pagination">
                            <?php for($i = 1; $i <= $num_pages; $i++){?>
                            <a href="?pages=<?php echo $i?>&search=<?php echo $search?>">
                                <?php echo $i?>
                            </a>
                            <?php }?>
                        </div>
                    </div>
                </div>
            </div>




            <?php require 'includes/sidebar.php';?>

        </div>
    </div>
</div>