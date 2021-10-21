<?php
include("config.php");
include("header.php");
?>
<body>
    <h1 class="text-center">Thông tin</h1>
    <?php
        $id = $_GET['id'];
        $sql = "SELECT * FROM drugs WHERE id = '$id'";
        $res = mysqli_query($conn,$sql);
        if(mysqli_num_rows($res)>0){
            $row = mysqli_fetch_assoc($res);
            $name = $row['name'];
            $type = $row['type'];
            $barcode = $row['barcode'];
            $dose = $row['dose'];
            $code = $row['code'];
            $cost_price = $row['cost_price'];
            $selling_price = $row['selling_price'];
            if($row['expiry'] == 1){
                $expiry = "Còn Hạn";
            }else{
                $expiry = "Hết hạn";
            }
            $company_name = $row['company_name'];
            $production_date = $row['production_date'];
            $expiration_date = $row['expiration_date'];
            $place = $row['place'];
            $quantity = $row['quantity'];

            echo "Tên: $name<br>";
            echo "Loại thuốc: $type<br>";
            echo "Mã vạch: $barcode<br>";
            echo "Liều lượng: $dose<br>";
            echo "Mã: $code<br>";
            echo "Giá nhập: $cost_price<br>";
            echo "Giá bán: $selling_price<br>";
            echo "Trạng thái Hạn sử dụng: $expiry<br>";
            echo "Công ty: $company_name<br>";
            echo "Ngày sản xuất: $production_date<br>";
            echo "Ngày hết hạn: $expiration_date<br>";
            echo "Nơi sản xuất: $place<br>";
            echo "Số lượng: $quantity<br>";
        }

    ?>
</body>
<?php
include("footer.php")
?>