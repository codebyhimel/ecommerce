<?php
include_once('./partials/meta.php');
include_once('./config/db.php');
session_start();
$msg = null;
$db = new Db();

// Fetch attribute data if 'attr_id' is provided in the request
if (isset($_REQUEST['attr_id'])) {
    $sql = "SELECT * FROM `attribute` WHERE `id` = :attributeId";
    $stmt = $db->dbHandler->prepare($sql);
    $stmt->bindParam(':attributeId', $_REQUEST['attr_id']);
    $stmt->execute();
    $data = $stmt->fetch(PDO::FETCH_ASSOC);
}

// Update attribute data if the form is submitted
if (isset($_REQUEST['submit'])) {
    $sql = 'UPDATE `attribute` SET `name`=:name, `type`=:type, `isActive`=:isActive WHERE `id` = :id';
    $stmt = $db->dbHandler->prepare($sql);

    $id = $_REQUEST['id'];
    $name = $_REQUEST['name'];
    $type = $_REQUEST['type'];
    $isActive = $_REQUEST['isActive'];

    $stmt->bindParam(':id', $id);
    $stmt->bindParam(':name', $name);
    $stmt->bindParam(':type', $type);
    $stmt->bindParam(':isActive', $isActive);

    $stmt->execute();

    $msg = "Attribute Updated Successfully!";
    header("location: attributeIndex.php");
}
?>

<!-- Meta File End -->
<section class="body">
    <!-- Start: Header -->
    <?php include_once('./partials/header.php'); ?>
    <!-- End: Header -->

    <div class="inner-wrapper">
        <!-- Start: Sidebar -->
        <?php include_once('./partials/sidebar.php'); ?>
        <!-- End: Sidebar -->

        <section role="main" class="content-body content-body-modern">
            <header class="page-header page-header-left-inline-breadcrumb">
                <h2 class="font-weight-bold text-6">Edit Attribute</h2>
                <div class="right-wrapper">
                    <ol class="breadcrumbs">
                        <li><span>Home</span></li>
                        <li><span>Edit Attribute</span></li>
                    </ol>
                    <a class="sidebar-right-toggle" data-open="sidebar-right"><i class="fas fa-chevron-left"></i></a>
                </div>
            </header>

            <!-- Start: Page -->
            <div class="row">
                <div class="col-12">
                    <section class="card">
                        <div class="card-body p-5">
                            <?php
                            // Display success or error messages
                            if ($msg != null) {
                                echo "<div class='alert alert-success'>$msg</div>";
                            }
                            ?>
                            <form action="" method="post" enctype="multipart/form-data">
                                <input type="hidden" name="id" value="<?= $data['id']; ?>">

                                <div class="form-group">
                                    <label for="name">Attribute Name</label>
                                    <input type="text" name="name" class="form-control" id="name" placeholder="Attribute Name" value="<?= $data['name']; ?>" required>
                                </div>

                                <div class="form-group">
                                    <label for="type">Type</label>
                                    <input type="text" name="type" class="form-control" id="type" placeholder="Type" value="<?= $data['type']; ?>" required>
                                </div>

                                <div class="form-group">
                                    <label for="isActive">Status</label>
                                    <select name="isActive" id="isActive" class="form-control" required>
                                        <option value="">~~Select~~</option>
                                        <option value="1" <?= ($data['isActive'] == 1) ? 'selected' : ''; ?>>Active</option>
                                        <option value="0" <?= ($data['isActive'] == 0) ? 'selected' : ''; ?>>Deactive</option>
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
            <!-- End: Page -->
        </section>
    </div>
</section>

<?php include_once('./partials/footer.php'); ?>