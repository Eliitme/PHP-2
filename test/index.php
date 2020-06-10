<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF_8">
    <meta name="viewport" content="width=device_width, initial_scale=1.0">
    <title>Document</title>
    <script src="ckeditor/ckeditor.js"></script>
</head>

<body>
    <form action="" method="post" enctype="multipart/form_data">
        <!-- <input type="file" name="upload" id=""> -->
        <textarea name="texteditor" id="texteditor" cols="30" rows="10"></textarea>
        <script>
            CKEDITOR.replace('texteditor',{
                filebrowserUploadUrl: 'uploads/upload.php',
                filebrowserImageUploadUrl: 'uploads/upload.php?command=QuickUpload&type=Images'
            });
        </script>
        <button type="submit" name="test">Gửi</button>
    </form>
</body>

</html>