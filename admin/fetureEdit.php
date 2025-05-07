<?php
include_once('./partials/meta.php');
include_once('./config/db.php');
session_start();

$msg = null;
$db = new Db();
$data = [];

// Fetch data by slider_id
if (isset($_REQUEST['feature_id'])) {
    $sql = "SELECT * FROM `feture` WHERE `id` = :feature_id";
    $stmt = $db->dbHandler->prepare($sql);
    $stmt->bindParam(':feature_id', $_REQUEST['feature_id']);
    $stmt->execute();
    $data = $stmt->fetch(PDO::FETCH_ASSOC);
}

// Handle form submit
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_REQUEST['submit'])) {
    $id = $_REQUEST['id'];
    $subtitle = $_REQUEST['subtitle'];
    $title = $_REQUEST['title'];
    $btnText = $_REQUEST['btnText'];
    $btnUrl = $_REQUEST['btnUrl'];
    $isActive = $_REQUEST['isActive'];

    // Handle image
    if (!empty($_FILES['image']['name'])) {
        if (!empty($_REQUEST['oldImage']) && file_exists('./' . $_REQUEST['oldImage'])) {
            unlink('./' . $_REQUEST['oldImage']);
        }
        $dir = "uploads/";
        $filename = $dir . $_FILES['image']['name'];
        if (move_uploaded_file($_FILES['image']['tmp_name'], $filename)) {
            $image = $filename;
        }
    } else {
        $image = $_REQUEST['oldImage'];
    }

    // Update query
    $sql = 'UPDATE `feture` SET `subtitle` = :subtitle, `title` = :title, `btnText` = :btnText, `btnUrl` = :btnUrl, `image` = :image, `isActive` = :isActive WHERE `id` = :id';
    $stmt = $db->dbHandler->prepare($sql);
    $stmt->bindParam(':id', $id);
    $stmt->bindParam(':subtitle', $subtitle);
    $stmt->bindParam(':title', $title);
    $stmt->bindParam(':btnText', $btnText);
    $stmt->bindParam(':btnUrl', $btnUrl);
    $stmt->bindParam(':image', $image);
    $stmt->bindParam(':isActive', $isActive);
    $stmt->execute();

    header("Location: fetureIndex.php");
    exit();
}
?>

<section class="body">
    <?php include_once('./partials/header.php'); ?>
    <div class="inner-wrapper">
        <?php include_once('./partials/sidebar.php'); ?>

        <section role="main" class="content-body content-body-modern">
            <header class="page-header page-header-left-inline-breadcrumb">
                <h2 class="font-weight-bold text-6">Edit Featured</h2>
                <div class="right-wrapper">
                    <ol class="breadcrumbs">
                        <li><span>Home</span></li>
                        <li><span>Edit Feature</span></li>
                    </ol>
                    <a class="sidebar-right-toggle" data-open="sidebar-right"><i class="fas fa-chevron-left"></i></a>
                </div>
            </header>

            <div class="row">
                <div class="col-12">
                    <section class="card">
                        <div class="card-body p-5">
                            <?php if ($msg != null) echo $msg; ?>

                            <form action="" method="post" enctype="multipart/form-data">
                                <input type="hidden" name="id" value="<?= $data['id']; ?>">

                                <div class="form-group">
                                    <label for="subtitle">Subtitle</label>
                                    <input type="text" name="subtitle" class="form-control" id="subtitle" placeholder="subtitle" value="<?= $data['subtitle']; ?>">
                                </div>

                                <div class="form-group">
                                    <label for="title">Title</label>
                                    <input type="text" name="title" class="form-control" id="title" placeholder="title" value="<?= $data['title']; ?>">
                                </div>

                                <div class="form-group">
                                    <label for="btnText">Button Text</label>
                                    <input type="text" name="btnText" class="form-control" id="btnText" placeholder="btnText" value="<?= $data['btnText']; ?>">
                                </div>

                                <div class="form-group">
                                    <label for="btnUrl">Button URL</label>
                                    <input type="text" name="btnUrl" class="form-control" id="btnUrl" placeholder="btnUrl" value="<?= $data['btnUrl']; ?>">
                                </div>

                                <div class="form-group">
                                    <label for="image">Image</label>
                                    <input type="file" name="image" class="form-control" id="image">
                                    <?php if (!empty($data['image'])) : ?>
                                        <img src="./<?= $data['image']; ?>" alt="Image" height="50">
                                    <?php endif; ?>
                                    <input type="hidden" name="oldImage" value="<?= $data['image']; ?>">
                                </div>

                                <div class="form-group">
                                    <label for="isActive">Status</label>
                                    <select name="isActive" id="isActive" class="form-control">
                                        <option value="">~~Select~~</option>
                                        <option value="1" <?= $data['isActive'] == 1 ? 'selected' : ''; ?>>Active</option>
                                        <option value="0" <?= $data['isActive'] == 0 ? 'selected' : ''; ?>>Deactive</option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <button type="submit" name="submit" value="submit" class="btn btn-primary">Update</button>
                                </div>
                            </form>
                        </div>
                    </section>
                </div>
            </div>
        </section>
    </div>
</section>

<?php include_once('./partials/footer.php'); ?>