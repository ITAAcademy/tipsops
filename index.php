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
            <div class="col-lg-8">
                <?php include_once 'Views_content/main.php'?>
            </div>
            <!-- Blog Sidebar Widgets Column -->
            <div class="col-md-4">
                <?php include_once 'template/blocks.php'; ?>
            </div>
        </div>
        <!-- /.row -->
        <hr/>        
    </div>
    <!-- Footer --> 
    <?php include_once 'template/footer.php'; ?>
    <!-- /.container -->
    <!-- jQuery -->
    <script src="template/js/jquery.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="template/js/bootstrap.min.js"></script>
</body>
</html>