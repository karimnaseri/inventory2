<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Bootstrap 101 Template</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/mystyle.css">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">


</head>

<body>
    <div class="contianer-fluid">
        <!--row 1-->
        <div class="row" id="top">

            <div class="col-md-3" id="logo">
                <img id="logo" src="img/unnamed.png" alt="logo" />
            </div>

            <div class="col-md-6"></div>
            <div class="col-md-3" id="depname">
                <h1> خدمات نرم افزاری</h1>
            </div>
        </div>
        <!--end row 1-->

        <?php
        ?>
        <div class="container w3-center w3-gray w3-card">
            <br>
            <a href="new_item.php" class="btn btn-primary "> اضافه کردن جنس جدید</a>
        </div>
        <br>
        <section class="container" dir="rtl">
            <table class="table table-striped table-hover table-bordered">
                <?php
                require('include/connection.php');
                $sql = $conn->query("select * from item");
                if ($sql && $sql->num_rows > 0) {
                ?>

                    <tr>
                        <th>نام</th>
                        <th>مقدار</th>
                        <th>قیمت</th>
                        <th>توضیحات</th>
                        <th>تاریخ</th>
                        <th></th>

                    </tr>
                    <?php
                    while ($items = $sql->fetch_assoc()) {
                    ?>
                        <tr>
                            <td><?php echo ($items['name']); ?></td>
                            <td><?php echo ($items['quantity']); ?></td>
                            <td><?php echo ($items['price']); ?></td>
                            <td><?php echo ($items['description']); ?></td>
                            <td><?php echo ($items['reg_date']); ?></td>
                            <td><a href="javascript:void(0)" onClick="do_delete(<?php echo ($items['id']); ?>)" class="btn btn-danger">Delete </a> &nbsp;
                                <a href="new_item.php?id=<?php echo ($items['id'] . "&name=" . $items['name'] . "&q=" . $items['quantity'] . "&price=" . $items['price'] . "&desc=" . $items['description']); ?>" class="btn btn-secondary">Edit</a>
                            </td>
                        </tr>
                <?php
                    }
                }
                ?>
                <table>
        </section>
        <script type='text/javascript'>
            function do_delete(id) {
                if (confirm('آیا برای حذف این جنس مطمن هستید؟')) {
                    location.assign('delete.php?id=' + id);
                }
            }
        </script>


        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="js/jquery.min.js"></script>
        <script src="js/myscript.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="js/bootstrap.min.js"></script>
</body>

</html>