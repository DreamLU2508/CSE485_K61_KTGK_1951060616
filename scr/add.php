<?php include("header.php"); ?>

<body>
    <h1 class="text-center">Thêm thuốc</h1>
    <form class="container-fluid" action="" method="POST">
        <div class="form-group">
            <label for="exampleInputEmail1">Tên Thuốc</label>
            <input type="text" class="form-control" id="" placeholder="Nhập tên thuốc" name="name">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Loại thuốc</label>
            <input type="Text" class="form-control" id="" placeholder="Nhập loại Thuốc" name="type">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Liều Lượng</label>
            <input type="text" class="form-control" id="" placeholder="Nhập Liều Lượng" name="dose">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Mã thuốc</label>
            <input type="text" class="form-control" id="" placeholder="Nhập Mã" name="code">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Giá nhập</label>
            <input type="text" class="form-control" id="" placeholder="Nhập Giá nhập" name="cost_price">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Giá bán</label>
            <input type="text" class="form-control" id="" placeholder="Nhập Giá bán" name="selling_price">
        </div>
        <div class="form-group">
            <div class="form-check">
                <input class="form-check-input" type="radio" name="check1" id="flexRadioDefault1">
                <label class="form-check-label" for="flexRadioDefault1">
                   Còn hạn sử dụng
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="check2" id="flexRadioDefault2" checked>
                <label class="form-check-label" for="flexRadioDefault2">
                    Hết hạn sử dụng
                </label>
            </div>
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Công ty</label>
            <input type="text" class="form-control" id="" placeholder="Nhập công ty" name="company_name">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Ngày sản xuất</label>
            <input type="text" class="form-control" id="" placeholder="Nhập ngày" name="production_date">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Ngày hết hạn</label>
            <input type="text" class="form-control" id="" placeholder="Nhập Ngày" name="expiration_date">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Nơi sản xuất</label>
            <input type="text" class="form-control" id="" placeholder="Nhập nơi sản xuất" name="place">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Số lượng</label>
            <input type="text" class="form-control" id="" placeholder="Nhập số lượng" name="quantity">
        </div>

        <button type="submit" class="btn btn-primary" name="submit">Thêm</button> 
    </form>
</body>
<?php
include("footer.php")
?>

<?php
    if(isset($_POST['submit']))
    {
        $name = $_POST['name'];
        $type = $_POST['type'];
        $name = md5(uniqid(rand(), true));
        $barcode = $_POST['dose'];
        $code = $_POST['code'];
        $cost_price = $_POST['cost_price'];
        $selling_price = $_POST['selling_price'];
        if(isset($_POST['check1'])){
            $expiry = 1;
        }else{
            $expiry = 0;
        }
        $company_name = $_POST['company_name'];
        $production_date = $_POST['production_date'];
        $expiration_date = $_POST['expiration_date'];
        $place = $_POST['place'];
        $quantity = $_POST['quantity'];

        $sql = "INSERT INTO drugs(id, name, type, barcode, dose, code, cost_price, selling_price, expiry, company_name, production_date, expiration_date, place, quantity) VALUES ('$id', '$name','$type', '$barcode', '$dose', '$code', '$cost_price', '$selling_price', '$expiry', '$company_name', '$production_date', '$expiration_date', '$place', '$quantity')";
    }
?>
