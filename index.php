<?php 
require_once('config.php');
$page = isset($_GET['page']) ? $_GET['page'] : 'home';
$page_name = explode("/",$page)[count(explode("/",$page)) -1];
?>
<!DOCTYPE html>
<html lang="en" itemscope itemtype="http://schema.org/WebPage">

<?php include_once('includes/header.php') ?>

<body class="index-page bg-gray-200">
    <script>start_loader()</script>
    <?php include_once('includes/top-navigation.php') ?>
    <header class="header-2">
        <div class="page-header min-vh-45 relative" style="background-image: url('<?= $_settings->info('cover') ?>')">
            <span class="mask bg-gradient-dark opacity-4"></span>
            <div class="container">
                <div class="row">
                    <div class="col-lg-10 text-center mx-auto">
                        <h1 class="text-white pt-3 mt-n5"><?= $_settings->info('name') ?></h1>
                        <p class="lead text-white mt-3"><?= ucwords(str_replace(["_","/"]," ",$page)). " Page" ?></p>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <div class="card card-body blur shadow-blur mx-3 mx-md-4 mt-n6">
        <?php 
        if($_settings->chk_flashdata('success')):
        ?>
        <div class="alert alert-success ?> rounded-0 text-light py-1 px-4 mx-3">
            <div class="d-flex w-100 align-items-center">
                <div class="col-10">
                    <?= $_settings->flashdata('success') ?>
                </div>
                <div class="col-2 text-end">
                    <button class="btn m-0 text-sm" type="button" onclick="$(this).closest('.alert').remove()"><i class="material-icons mb-0">close</i></button>
                </div>
            </div> 
        </div>
        <?php endif; ?>
        <?php
        if(is_file($page.'.php')){
            include $page.'.php';
        }else{
            if(is_dir($page) && is_file($page.'/index.php')){
                include $page.'/index.php';
            }else{
                echo '<h4 class="text-center fw-bolder">Page Not Found</h4>';
            }
        }
        ?>
    </div>
    <style>
    img.img-thumbnail.product-thumb {
        width: 5rem;
        height: 5rem;
        object-fit: scale-down;
        object-position: center center;
    }
    #product-list .prod-item:nth-child(even){
        direction:rtl !important;
    }
    #product-list .prod-item:nth-child(even) > * {
        direction:ltr !important;
    }
</style>
<section class="py-4">
    <div class="container">
        <h3 class="fw-bolder text-center">Hot sales</h3>
        <center>
            <hr class="bg-primary w-25 opacity-100">
        </center>
        <div class="list-group" id="product-list">
            <?php 
            $qry = $conn->query("SELECT p.*, c.name as category, u.username FROM `product_list` p inner join `category_list` c on p.category_id = c.id inner join users u on p.user_id = u.id where p.`status` = 1 ");
            while($row = $qry->fetch_assoc()):
            ?>


            <!-- query strings -->
            <a href="./?page=products/view_details&id=<?= $row['id'] ?>" class="text-reset text-decoration-none list-group-item list-group-item-action d-flex w-100 prod-item align-items-center">
                <div style="display: flex;">

                <div class="col-3 text-center"><img src="<?= validate_image( is_file(base_app."uploads/thumbnails/".($row['id']).".png") ? "uploads/thumbnails/".($row['id']).".png?v=".(strtotime($row['date_updated'])) : '') ?>" class="product-thumb" alt=""></div>

                    <div class="col-9">
                        <h3 class="fs-bolder"><?= $row['title'] ?></h3>
                        <hr>
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-sm-12">
                                <div class="d-flex w-100 align-items-center">
                                    <div class="col-auto d-flex align-items-center pe-3">
                                        <i class="material-icons me-3">category</i>
                                        Category:
                                    </div>
                                    <div class="col-auto flex-shrink-1 flex-grow-1"><?= isset($row['category']) ? ($row['category']) : 0 ?></div>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 col-sm-12">
                                <div class="d-flex w-100 align-items-center">
                                    <div class="col-auto d-flex align-items-center pe-3">
                                        <i class="material-icons me-3">inventory_2</i>
                                        Stock/s:
                                    </div>
                                    <div class="col-auto flex-shrink-1 flex-grow-1"><?= isset($row['stock']) ? number_format($row['stock']) : 0 ?></div>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 col-sm-12">
                                <div class="d-flex w-100 align-items-center">
                                    <div class="col-auto d-flex align-items-center pe-3">
                                        <i class="material-icons me-3">sell</i>
                                        Price:
                                    </div>
                                    <div class="col-auto flex-shrink-1 flex-grow-1"><?= isset($row['selling_price']) ? format_num($row['selling_price'],2) : 0 ?></div>
                                </div>
                            </div>
                        </div>
                        <p class="truncate-3"><?= $row['short_description'] ?></p>
                    </div>
                     
                    
                </div> 

            </a>
            <?php endwhile; ?>
        </div>

    </div>
</section>

    <?php include_once('includes/footer.php') ?>

</body>

</html>