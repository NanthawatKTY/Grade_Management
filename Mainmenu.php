<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <h1 align="Center">รายวิชาที่สอน</h1>
</head>
<body>
<div class="container">
<div class="row">
      <div class="col-md-4"></div>
      <select class="col-md-4" name="txtKeyword" id="txtKeyword" class="form-control">
        <option selected>เลือกปีการศึกษา</option>
        <option>2560/1</option>
        <option>2560/2</option>
        <option>2561/1</option>
        <option>2561/2</option>
      </select> 
     <?php echo "&nbsp;"?> <button type="button" class="btn btn-lg btn-success" data-toggle="popover" title="ปีการศึกษา">ค้นหา</button> 
    </div>

    </div>
</div>
<div class="container">
<h3>Prototype Table</h3>
<table class="table">
  <tr>
    <th>รหัสวิชา</th>
    <th>รายวิชา</th>
    <th>ผลการเรียน</th>
  </tr>
  <tr>
    <td></td>
    <td></td>
    <td><button   type="button" class="btn btn-success">Default</button></td>
  </tr>
  <tr>
    <td></td>
    <td></td>
    <td><button  type="button" class="btn btn-success">Default</button></td>
  </tr>
  <tr>
    <td></td>
    <td></td>
    <td><button  type="button" class="btn btn-success">Default</button></td>
  </tr>
  <tr>
    <td></td>
    <td></td>
    <td><button  type="button" class="btn btn-success">Default</button></td>
  </tr>
  <tr>
    <td></td>
    <td></td>
    <td><button  type="button" class="btn btn-success">Default</button></td>
  </tr>
</table>
</div>
    
</body>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</html>