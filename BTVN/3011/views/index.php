<?php global $data ?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CRUD MVC</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
          rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
          crossorigin="anonymous">
</head>
<body>
<div class="container mt-3">
    <div class="table-responsive">
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-6">
                        <h2>Manage <b>Products</b></h2>
                    </div>
                    <div class="col-sm-6">
                        <a href="index.php?controller=products&action=add" class="btn btn-success" data-toggle="modal"><i
                                    class="material-icons">&#xE147;</i> <span>Add New Product</span></a>
                    </div>
                </div>
            </div>

            <table class="table table-striped table-hover">
                <thead>
                <th>Tên</th>
                <th>Giá</th>
                <th>Số lượng</th>
                <th>Action</th>
                </thead>
                <tbody>
                <?php
                if (!empty($data) && is_array($data)) {
                    foreach ($data as $products) {
                        ?>
                        <tr>
                            <td><?= htmlspecialchars($products['name']) ?></td>
                            <td><?= htmlspecialchars($products['gia']) ?></td>
                            <td><?= htmlspecialchars($products['SoLuong']) ?></td>
                            <td>
                                <a href="index.php?controller=student&action=edit&id=<?= urlencode($products['id']) ?>"
                                   class="btn btn-danger">Edit</a>
                                <a href="index.php?controller=student&action=delete&id=<?= urlencode($products['id']) ?>"
                                   class="btn btn-primary">Delete</a>
                            </td>
                        </tr>
                        <?php
                    }
                } else {
                    // Optionally display a message or handle the case when there's no data
                    echo "<tr><td colspan='4'>No students found.</td></tr>";
                }
                ?>


                </tbody>
            </table>
        </div>
    </div>
</div>
</body>
</html>