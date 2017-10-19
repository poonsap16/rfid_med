<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Upload File</title>
  </head>
  <body>

    <form action="/uploadfile" method="POST" enctype="multipart/form-data">

      {{ csrf_field() }}

      Select Files: <input type="file" name="files[]" multiple/>
      <input type="submit" value="upload file">

    </form>
  </body>
</html>
