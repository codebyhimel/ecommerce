<?php
include_once('./partials/meta.php');
include_once('./config/db.php');
session_start();

$db = new Db();
$msg = null;

// Success message show from session (if exists)
if (isset($_SESSION['msg'])) {
    echo "<div class='alert alert-success'>" . $_SESSION['msg'] . "</div>";
    unset($_SESSION['msg']);
}

// Handle form submission
if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $type = $_POST['type'];
    $isActive = $_POST['isActive'];
    $create_at = date('Y-m-d H:i:s');

    $sql = 'INSERT INTO `attribute`(`name`, `type`, `isActive`, `create_at`) VALUES (?, ?, ?, ?)';
    $stmt = $db->dbHandler->prepare($sql);
    $stmt->bindParam(1, $name);
    $stmt->bindParam(2, $type);
    $stmt->bindParam(3, $isActive);
    $stmt->bindParam(4, $create_at);

    if ($stmt->execute()) {
        $msg = "<div class='alert alert-success'>Attribute Insert Success!</div>";
    } else {
        $msg = "<div class='alert alert-danger'>Something went wrong!</div>";
    }
}
?>

<section class="body">

    <?php include_once('./partials/header.php'); ?>

    <div class="inner-wrapper">

        <?php include_once('./partials/sidebar.php'); ?>

        <section role="main" class="content-body content-body-modern">
            <header class="page-header page-header-left-inline-breadcrumb">
                <h2 class="font-weight-bold text-6">Create Attribute</h2>
                <div class="right-wrapper">
                    <ol class="breadcrumbs">
                        <li><span>Home</span></li>
                        <li><span>Create Attribute</span></li>
                    </ol>
                    <a class="sidebar-right-toggle" data-open="sidebar-right"><i class="fas fa-chevron-left"></i></a>
                </div>
            </header>

            <div class="row">
                <div class="col-12">
                    <section class="card">
                        <div class="card-body p-5">
                            <?php if ($msg) echo $msg; ?>
                            <form action="" method="post" enctype="multipart/form-data">
                                <div class="form-group">
                                    <label for="name">Attribute Name</label>
                                    <input type="text" name="name" class="form-control" id="name" placeholder="Attribute name" required>
                                </div>
                                <div class="form-group">
                                    <label for="type">Type</label>
                                    <input type="text" name="type" class="form-control" id="type" placeholder="Type" required>
                                </div>
                                <div class="form-group">
                                    <label for="isActive">Status</label>
                                    <select name="isActive" id="isActive" class="form-control" required>
                                        <option value="">~~ Select ~~</option>
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
        </section>
    </div>

</section>

<?php include_once('./partials/footer.php'); ?>