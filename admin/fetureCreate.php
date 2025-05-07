<?php
include_once('./partials/meta.php');
include_once('./config/db.php');
session_start();
$msg = null;
$db = new Db();
// if ($_SESSION['data']['email'] != null && $_SESSION['data']['login'] == true) {
if (isset($_SESSION['msg'])) {
    echo "<div class='alert alert-success'>" . $_SESSION['msg'] . "</div>";
    unset($_SESSION['msg']);
}
if (isset($_REQUEST['submit'])) {

    $sql = 'INSERT INTO `feture`(`subtitle`, `title`, `btnText`, `btnUrl`, `image`, `isActive`) VALUES (?,?,?,?,?,?)';
    $stmt = $db->dbHandler->prepare($sql);
    $stmt->bindParam(1, $subtitle);
    $stmt->bindParam(2, $title);
    $stmt->bindParam(3, $btnText);
    $stmt->bindParam(4, $btnUrl);
    $stmt->bindParam(5, $image);
    $stmt->bindParam(6, $isActive);
    $subtitle = $_REQUEST['subtitle'];
    $title = $_REQUEST['title'];
    $btnText = $_REQUEST['btnText'];
    $btnUrl = $_REQUEST['btnUrl'];
    // Upload File
    $dir = "uploads/";
    $filename = $dir . $_FILES['image']['name'];
    if (move_uploaded_file($_FILES['image']['tmp_name'], $filename)) {
        $image = "uploads/" . $_FILES['image']['name'];
    } else {
        $image = "";
    }
    $isActive = $_REQUEST['isActive'];
    // $password = md5($_REQUEST['password']);
    $stmt->execute();
    $msg = "Featured Insert Success!";
}
// }
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
                <h2 class="font-weight-bold text-6">Create Featured</h2>
                <div class="right-wrapper">
                    <ol class="breadcrumbs">
                        <li><span>Home</span></li>
                        <li><span>Create Featured</span></li>
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
                                <div class="form-group">
                                    <label class="" for="subtitle">sub Title</label>
                                    <input type="text" name="subtitle" class="form-control" id="subtitle" placeholder="subtitle">
                                </div>
                                <div class="form-group">
                                    <label class="" for="title">Title</label>
                                    <input type="text" name="title" class="form-control" id="title" placeholder="title">
                                </div>
                                <div class="form-group">
                                    <label class="" for="btnText">btnText</label>
                                    <input type="text" name="btnText" class="form-control" id="btnText" placeholder="btnText">
                                </div>
                                <div class="form-group">
                                    <label class="" for="btnUrl">btnUrl</label>
                                    <input type="text" name="btnUrl" class="form-control" id="btnUrl" placeholder="btnUrl">
                                </div>
                                <div class="form-group">
                                    <label for="image">image</label>
                                    <input type="file" name="image" class="form-control" id="image">
                                </div>
                                <div class="form-group">
                                    <label for="isActive">Status</label>
                                    <select name="isActive" id="isActive" class="form-control">
                                        <option value="">~~Select~~</option>
                                        <option value="1">Active</option>
                                        <option value="0">Deactive</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <button type="submit" name="submit" value="submit" class="btn btn-primary">Save</button>
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
?>;