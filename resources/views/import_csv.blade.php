<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Import-Export Data</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
    integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css"
    integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
    integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous">
    </script>
  </head>
  <body>
    <div class="container">
      <br />
      <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-6">
          <div class="row">
            <form action="{{url('/test')}}" method="post" enctype="multipart/form-data">
              <div class="col-md-6">
                {{csrf_field()}}
                <input type="file" name="file-name"/>
              </div>
              <div class="col-md-6">
                  <button class="btn btn-primary" type="submit">Import</button>
              </div>
            </form>
          </div>
        </div>
        <div class="col-md-2">
          <button class="btn btn-success">Export</button>
        </div>
      </div>
    </div>
  </body>
</html>
