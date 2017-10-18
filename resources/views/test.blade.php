<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form action="/test" method="POST" enctype="multipart/form-data">
      {{ csrf_field() }}
      Select Files: <input type="file" name="files[]" multiple/>
      <input type="submit" value="load file">
<!-- <input type="button" onclick="myFunction()" value="Submit form"> -->
    </form>
  </body>
</html>
