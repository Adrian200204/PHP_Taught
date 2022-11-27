<!DOCTYPE html>
<html>
<body>

<form action="upload.php" method="post" enctype="multipart/form-data">
  Select image to upload:
  <input type="file" name="fileToUpload" id="fileToUpload">
  <input type="submit" value="Upload Image" name="submit">
</form>

Files: <a href="./list_file.php"> Image List</a> <br>
Images: <a href="./upload.php"> Image Folder</a> <br>

</body>
</html>