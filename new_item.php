<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
  <title>Bootstrap 101 Template</title>

  <!-- Bootstrap -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="css/myscc.css" rel="stylesheet">

  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
      <script src="boot/js/html5shiv.min.js"></script>
      <script src="boot/js/respond.min.js"></script>
    <![endif]-->
</head>

<body>

  <?php
  $id = $name = $price = $desc = $quantity = "";
  $type = "add";
  if (isset($_GET['q'])) {
    $id = $_GET['id'];
    $name = $_GET['name'];
    $price = $_GET['price'];
    $quantity = $_GET['q'];
    $desc = $_GET['desc'];
    $type = "edit";
  }
  ?>


  <div class="contianer-fluid">
    <div class="row">
      <div class="col-md-4 col-md-offset-4" dir="rtl">
        <br><br><br>
        <h2 class="tittle">اضافه کردن جنس جدید </h2>

        <br />

        <form class="form-horizontal" action="add_item.php" method="POST">
          <input type="hidden" name="type" value="<?php echo ($type); ?>">
          <input type="hidden" name="id" value="<?php echo ($id); ?>">
          <div class="form-group">
            <div class="col-sm-10">
              <input type="text" name="name" value="<?php echo ($name) ?>" class="form-control" id="name" placeholder=" نام جنس">
            </div>
            <label for="name" class="col-sm-2 control-label"> نام جنس</label>
          </div>

          <div class="form-group">
            <div class="col-sm-10">
              <input type="number" min="1" name="quantity" value="<?php echo ($quantity) ?>" class="form-control" id="quantity" placeholder="مقدار">
            </div>
            <label for="quantity" class="col-sm-2 control-label">مقدار</label>
          </div>

          <div class="form-group">
            <div class="col-sm-10">
              <input type="INT" name="price" value="<?php echo ($price) ?>" class="form-control" id="price" placeholder="قیمت">
            </div>
            <label for="price " class="col-sm-2 control-label">قیمت</label>
          </div>

          <div class="form-group">
            <div class="col-sm-10">
              <input type="text" name="desc" value="<?php echo ($desc) ?>" class="form-control" id="desc" placeholder="توضیحات">
            </div>
            <label for="desc" class="col-sm-2 control-label">توضیحات</label>
          </div>

          <div class="form-group">
            <div class="col-md-4">
              <input type="submit" value="اضافه کردن" class="btn btn-success btn-block " value="<?php if (isset($_GET['q'])) echo ('Update');
                                                                                                else {
                                                                                                  echo ('Add');
                                                                                                } ?>" class="btn btn-primary form-control">
            </div>
            <div class="col-md-10"></div>
          </div>
        </form>





      </div>
    </div>
  </div>










  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
  <script src="js/jquery.min.js"></script>
  <script src="js/myscript.js"></script>
  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <script src="js/bootstrap.min.js"></script>
</body>

</html>