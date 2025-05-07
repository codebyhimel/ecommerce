<?php
session_start();
include_once('./partials/meta.php');
include_once('./config/db.php');
$msg = null;
$db = new Db();
$data = [];

// offer delete start

if (isset($_GET['brand_id'])) {
    $id = $_GET['brand_id'];

    $sql = "SELECT image FROM brand WHERE id = :id";
    $stmt = $db->dbHandler->prepare($sql);
    $stmt->bindParam(':id', $id);
    $stmt->execute();
    $brand = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($brand) {
        if (!empty($brand['image']) && file_exists($brand['image'])) {
            unlink($brand['image']);
        }

        $deleteSql = "DELETE FROM brand WHERE id = :id";
        $delStmt = $db->dbHandler->prepare($deleteSql);
        $delStmt->bindParam(':id', $id);
        $delStmt->execute();

        $_SESSION['msg'] = "Brand deleted successfully!";
    } else {
        $_SESSION['msg'] = "Brand not found!";
    }
}

if (isset($_POST['submit'])) {
}

// Offer delete end

$sql = "SELECT * FROM `brand`";
$stmt = $db->dbHandler->prepare($sql);
$stmt->execute();
$data = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!-- HTML Part -->
<div class="inner-wrapper">
    <?php include_once("./partials/header.php"); ?>
    <?php include_once("./partials/sidebar.php"); ?>

    <section role="main" class="content-body content-body-modern mt-5">
        <header class="page-header page-header-left-inline-breadcrumb">
            <h2 class="font-weight-bold text-6">Brand List </h2>
            <div class="right-wrapper">
                <ol class="breadcrumbs">
                    <li><span>Home</span></li>
                    <li><span>Brand List</span></li>
                </ol>
                <a class="sidebar-right-toggle" data-open="sidebar-right"><i class="fas fa-chevron-left"></i></a>
            </div>
        </header>

        <!-- start: page -->
        <div class="row">
            <div class="col">
                <div class="card card-modern">
                    <div class="card-body">
                        <div class="datatables-header-footer-wrapper">
                            <div class="datatable-header">
                                <div class="row align-items-center mb-3">
                                    <div class="col-12 col-lg-auto mb-3 mb-lg-0">
                                        <a href="/shop/admin/brandCreate.php" class="btn btn-primary btn-md font-weight-semibold btn-py-2 px-4">+ Add Brand</a>
                                    </div>
                                    <div class="col-8 col-lg-auto ms-auto ml-auto mb-3 mb-lg-0">
                                        <div class="d-flex align-items-lg-center flex-column flex-lg-row">
                                            <label class="ws-nowrap me-3 mb-0">Filter By:</label>
                                            <select class="form-control select-style-1 filter-by" name="filter-by">
                                                <option value="all" selected>All</option>
                                                <option value="1">ID</option>
                                                <option value="2">name</option>
                                                <option value="3">description</option>
                                                <option value="4">img_url</option>
                                                <!-- <option value="5">Create at</option> -->
                                                <option value="6">Action</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-4 col-lg-auto ps-lg-1 mb-3 mb-lg-0">
                                        <div class="d-flex align-items-lg-center flex-column flex-lg-row">
                                            <label class="ws-nowrap me-3 mb-0">Show:</label>
                                            <select class="form-control select-style-1 results-per-page" name="results-per-page">
                                                <option value="12" selected>12</option>
                                                <option value="24">24</option>
                                                <option value="36">36</option>
                                                <option value="100">100</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-12 col-lg-auto ps-lg-1">
                                        <div class="search search-style-1 search-style-1-lg mx-lg-auto">
                                            <div class="input-group">
                                                <input type="text" class="search-term form-control" name="search-term" id="search-term" placeholder="Search Order">
                                                <button class="btn btn-default" type="submit"><i class="bx bx-search"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <table class="table table-ecommerce-simple table-striped mb-0" style="min-width: 750px;">
                                <thead>
                                    <tr>
                                        <th><input type="checkbox" class="select-all checkbox-style-1" /></th>
                                        <th>ID</th>
                                        <th>name</th>
                                        <th>description</th>
                                        <th>img_url</th>
                                        <!-- <th>Create at</th> -->
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php if (!empty($data)) : ?>
                                        <?php foreach ($data as $item) : ?>
                                            <tr>
                                                <td><input type="checkbox" class="checkbox-style-1" /></td>
                                                <td><?= $item['id'] ?></td>
                                                <td><?= $item['name'] ?></td>
                                                <td><?= $item['description'] ?></td>
                                                <td><?= $item['img_url'] ?></td>
                                                <td>
                                                    <a href="./brandEdit.php?brand_id=<?= $item['id'] ?>" class="btn btn-primary">Edit</a>
                                                    <a href="brandIndex.php?brand_id=<?= $item['id']; ?>"
                                                        onclick="return confirm('Are you sure you want to delete this Brand?');"
                                                        class="btn btn-danger">Delete</a>
                                                </td>
                                            </tr>
                                        <?php endforeach; ?>
                                    <?php else : ?>
                                        <tr>
                                            <td colspan="7" class="text-center">No brand found.</td>
                                        </tr>
                                    <?php endif; ?>
                                </tbody>
                            </table>

                            <hr class="solid mt-5 opacity-4">
                            <div class="datatable-footer">
                                <div class="row align-items-center justify-content-between mt-3">
                                    <div class="col-lg-auto text-center order-3 order-lg-2">
                                        <div class="results-info-wrapper"></div>
                                    </div>
                                    <div class="col-lg-auto order-2 order-lg-3 mb-3 mb-lg-0">
                                        <div class="pagination-wrapper"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php include_once("./partials/footer.php"); ?>
        </div>
    </section>
</div>