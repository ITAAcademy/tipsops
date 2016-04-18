<!DOCTYPE html>
<html lang="en">
<head>
    <script src="Content/scripts/getHtmlFromFile.js"></script>
    <script src="Content/scripts/HideAndDisplayNew.js"></script>


    <script>getHtml('template/head.html');</script>
    <title>Tipsops</title>
</head>
<body>

<!-- Navigation -->
<script>getHtml('template/navigation.php');</script>
<!-- Page Content -->
<div class="container" >
    <div class="row" class="main">
        <!-- Blog Post Content Column -->
        <div class="col-lg-8" >
            <script>getHtml('Content/show_new_article.php');</script>
        </div>
        <!-- Blog Sidebar Widgets Column -->
    </div>
</div>
<!-- Footer -->
<script>getHtml('template/footer.html');</script>
<!-- /.container -->
<!-- jQuery -->
<script src="template/js/jquery-1.12.0.js"></script>
<!-- Bootstrap Core JavaScript -->
<script src="template/js/bootstrap.min.js"></script>
</body>
</html>