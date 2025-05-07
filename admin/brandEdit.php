<?php
include_once('./partials/meta.php');
include_once('./config/db.php');
session_start();
$msg = null;
$db = new Db();
// if ($_SESSION['data']['email'] != null && $_SESSION['data']['login'] == true) {

if (isset($_REQUEST['brand_id'])) {
    $sql = "SELECT * FROM `brand` WHERE `id` = :brandId ";
    $stmt = $db->dbHandler->prepare($sql);
    $stmt->bindParam('brandId', $_REQUEST['brand_id']);
    $stmt->execute();
    $data = $stmt->fetch(PDO::FETCH_ASSOC);
    // var_dump($data);
}

if (isset($_REQUEST['submit'])) {
    $sql = 'UPDATE `brand` SET `name`=:name,`description`=:description,`img_url`=:img_url WHERE `id` = :id';
    $stmt = $db->dbHandler->prepare($sql);
    $stmt->bindParam(':id', $id);
    $stmt->bindParam(':name', $name);
    $stmt->bindParam(':description', $description);
    $stmt->bindParam(':img_url', $img_url);
    
    $id = $_REQUEST['id'];
    $name = $_REQUEST['name'];
    $description = $_REQUEST['description'];
    $detaiimg_urlls = $_REQUEST['img_url'];
    // $btnOneText = $_REQUEST['btnOneText'];
    // $btnOneUrl = $_REQUEST['btnOneUrl'];
    // $btnTwoTxt = $_REQUEST['btnTwoTxt'];
    // $btnTwoUrl = $_REQUEST['btnTwoUrl'];
    // $align = $_REQUEST['align'];
    // if (!empty($_FILES['image']) && $_FILES['image']['name'] != "") {
    //     var_dump($_FILES['image']);
    //     if ($_REQUEST['oldImage'] != null) {
    //         unlink("/" . $_REQUEST['oldImage']);
    //     }
    //     $dir = "uploads/";
    //     $filename = $dir . $_FILES['image']['name'];
    //     if (move_uploaded_file($_FILES['image']['tmp_name'], $filename)) {
    //         $image = "uploads/" . $_FILES['image']['name'];
    //     }
    // } else {
    //     $image = $_REQUEST['oldImage'];
    // }
    // var_dump($_FILES['image']);

    // Upload File
    // $isActive = $_REQUEST['isActive'];

    $stmt->execute();
    $msg = "Brand Update Success!";
    header("location:brandIndex.php");
}
?>

<!-- Meta File End -->
<section class="body">

    <!-- start: header -->
    <?php
    include_once('./partials/header.php');
    ?>
    <!-- end: header -->

    <div class="inner-wrapper">
        <!-- start: sidebar -->
        <?php
        include_once('./partials/sidebar.php');
        ?>
        <!-- end: sidebar -->

        <section role="main" class="content-body content-body-modern">
            <header class="page-header page-header-left-inline-breadcrumb">
                <h2 class="font-weight-bold text-6">Edit Brand</h2>
                <div class="right-wrapper">
                    <ol class="breadcrumbs">
                        <li><span>Home</span></li>
                        <li><span>Edit Brand</span></li>
                    </ol>
                    <a class="sidebar-right-toggle" data-open="sidebar-right"><i class="fas fa-chevron-left"></i></a>
                </div>
            </header>

            <!-- start: page -->
            <div class="row">
                <div class="col-12">
                    <section class="card">
                        <div class="card-body p-5">
                            <?php
                            if ($msg != null) {
                                echo $msg;
                            }
                            ?>
                            <form action="" method="post" enctype="multipart/form-data">
                                <input type="hidden" name="id" value="<?= $data['id']; ?>">
                                <div class="form-group">
                                    <label class="" for="name">Brand Name</label>
                                    <input type="text" name="name" class="form-control" id="name" placeholder="subTitle" value="<?= $data['name']; ?>">
                                </div>
                                <div class="form-group">
                                    <label class="" for="description">description</label>
                                    <input type="text" name="description" class="form-control" id="description" placeholder="description" value="<?= $data['description']; ?>">
                                </div>
                                <div class="form-group">
                                    <label class="" for="img_url">img_url</label>
                                    <input type="text" name="img_url" class="form-control" id="img_url" placeholder="img_url" value="<?= $data['img_url']; ?>">
                                </div>


                                <div class="form-group">
                                    <button type="submit" name="submit" value="submit" class="btn btn-primary">Update</button>
                                </div>
                            </form>
                        </div>
                    </section>
                </div>
            </div>
            <!-- end: page -->
        </section>
    </div>


</section>

<?php
include_once('./partials/footer.php');
?>

<?php
// } else {
//     header('location: http://localhost/shop/admin/login.php');
// }
?>