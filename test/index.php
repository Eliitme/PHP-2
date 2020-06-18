<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="../admincp/script/ckeditor/ckeditor.js"></script>
</head>
<body>
    <form action="" method="post" enctype="multipart/form-data">
    <textarea name="test" id="test" cols="30" rows="10"></textarea>
    <script>
        CKEDITOR.replace('test',{
            filebrowserUploadUrl: 'uploads/upload.php'
        });
    </script>
    </form>
</body>
</html>