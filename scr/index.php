<?php
include("config.php");
include("header.php");
?>

<body>
    <h1 class="text-center">Danh sách dược phẩm</h1>
    <table class="table">
        <thead class="thead-dark">
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Tên</th>
                <th scope="col">Loại thuốc</th>
                <th scope="col">Giá bán</th>
                <th scope="col">Action</th>
                <th scope="col"></th>
            </tr>
        </thead>
        <tbody>
            <?php 
                $sql = "SELECT id, name, type, selling_price FROM drugs";

                $res = mysqli_query($conn,$sql);
                $sn = 1;

                if(mysqli_num_rows($res)>0){
                    while($row = mysqli_fetch_assoc($res)){
                        $id = $row['id'];
                        $name = $row['name'];
                        $type = $row['type'];
                        $price = $row['selling_price'];
                        ?>
                        <tr>
                            <th scope="row"><?php echo $sn++;?></th>
                            <td><?php echo $name;?></td>
                            <td><?php echo $type;?></td>
                            <td><?php echo $price;?></td>
                            <td>
                                <a href="http://localhost:8888/kiem_tra/scr/add.php"><button type="button" class="btn btn-primary">Thêm</button></a>
                                <button type="button" class="btn btn-success">Sửa</button>
                                <button type="button" class="btn btn-warning">Xóa</button>
                            </td>
                            <td><a href="http://localhost:8888/kiem_tra/scr/view.php?id=<?php echo $id;?>">Nhấn vào đây để xem chi tiết</a></td>
                        </tr> 
                        <?php
                    }
                }else{}
                
            ?>
               
    </table>


</body>
<?php
include("footer.php")
?>