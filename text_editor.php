<!DOCTYPE html>
<html lang="en">
<head>
    <script src="Content/scripts/getHtmlFromFile.js"></script>
    <script>getHtml('template/head.html');</script>
    <script type="text/javascript" src="editor/ckeditor/ckeditor.js"></script>
    <title>Tipsops</title>
</head>
<body>
<!-- Navigation -->
<script>getHtml('template/navigation.php');</script>
<!-- Page Content -->
<div class="container">
    <div class="row">
        <!-- Blog Post Content Column -->
        <div class="col-lg-12">
            <script>getHtml('Content/text_editor.php');</script>
        </div>
        <!-- Blog Sidebar Widgets Column -->
    </div>
</div>
<!-- Footer -->
<script>getHtml('template/footer.html');</script>
<!-- /.container -->
<!-- jQuery -->
<script src="template/js/jquery.js"></script>
<!-- Bootstrap Core JavaScript -->
<script src="template/js/bootstrap.min.js"></script>
</body>
</html>