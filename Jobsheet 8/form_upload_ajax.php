<!DOCTYPE html>
<html>
    <head>
        <title>Unggah File Dokumen Atau Gambar</title>
    </head>

    <body>
        <!-- Soal 3.1 -->
        <!-- <form id="upload-form" action="upload_ajax.php" method="post" enctype="multipart/form-data">
            <input type="file" name="file" id="file">
            <input type="submit" name="submit" value="Unggah">
        </form>
        <div id="status"></div>

        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script src="upload.js"></script> -->

        <!-- Soal 3.2 -->
        <form id="upload-form" action="upload_ajax.php" method="post" enctype="multipart/form-data">
            <input type="file" name="file[]" id="file" multiple= "multiple">
            <input type="submit" name="submit" value="Unggah">
        </form>
        <div id="status"></div>

        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script src="upload.js"></script>
    </body>
</html>