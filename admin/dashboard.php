<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}
session_regenerate_id(true);

include_once("./partials/meta.php");
include_once("./partials/header.php");
?>

<h2>Welcome to Dashboard, <?php echo htmlspecialchars($_SESSION['username']); ?>!</h2>
<a href="logout.php">Logout</a>

<div class="inner-wrapper">
    <!-- start: sidebar -->
    <?php include_once("./partials/sidebar.php"); ?>
    <!-- end: sidebar -->

    <section role="main" class="content-body content-body-modern">
        <header class="page-header page-header-left-inline-breadcrumb">
            <h2 class="font-weight-bold text-6">Dashboard</h2>
            <div class="right-wrapper">
                <ol class="breadcrumbs"></ol>
            </div>
        </header>

        <!-- Main Content Here -->
        <div class="dashboard-content">
            <p>Welcome To Dashboard</p> <!-- Example content -->
        </div>

    </section>
</div>

<?php include_once("./partials/footer.php"); ?> <!-- Footer Include -->