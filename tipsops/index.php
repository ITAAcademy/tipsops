<!DOCTYPE html>
<html lang="en">
<head>	   
	<?php include_once 'template/head.php';?>
    <title>Tipsops</title>	
</head>
<body>
    <!-- Navigation -->
	<?php include_once 'template/navigation.php'; ?>
    <!-- Page Content -->
    <div class="container">
        <div class="row">
            <!-- Blog Post Content Column -->
            <?php include_once 'Views_content/main.php'?>
            <!-- Blog Sidebar Widgets Column -->
            <?php include_once 'template/blocks.php'; ?>
        </div>
        <!-- /.row -->
        <hr/>
        <!-- Footer -->        
        <?php include 'template/footer.php'; ?>
    </div>
    <!-- /.container -->
    <!-- jQuery -->
    <script src="template/js/jquery.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="template/js/bootstrap.min.js"></script>
</body>
</html>