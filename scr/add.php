<?php include("header.php"); ?>

<body>
    <h1 class="text-center">Thêm thuốc</h1>
    <form class="container-fluid">
        <div class="form-group">
            <label for="exampleInputEmail1">Tên Thuốc</label>
            <input type="text" class="form-control" id="" placeholder="Nhập tên thuốc">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Loại thuốc</label>
            <input type="Text" class="form-control" id="" placeholder="Nhập loại Thuốc">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Liều Lượng</label>
            <input type="text" class="form-control" id="" placeholder="Nhập Liều Lượng">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Mã thuốc</label>
            <input type="text" class="form-control" id="" placeholder="Nhập Mã">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Giá nhập</label>
            <input type="text" class="form-control" id="" placeholder="Nhập Giá nhập">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Giá bán</label>
            <input type="text" class="form-control" id="" placeholder="Nhập Giá bán">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Giá bán</label>
            <input type="text" class="form-control" id="" placeholder="Nhập Giá bán">
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
            <input type="text" class="form-control" id="" placeholder="Nhập công ty">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Ngày sản xuất</label>
            <input type="text" class="form-control" id="" placeholder="Nhập ngày">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Ngày hết hạn</label>
            <input type="text" class="form-control" id="" placeholder="Nhập Ngày">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Nơi sản xuất</label>
            <input type="text" class="form-control" id="" placeholder="Nhập nơi sản xuất">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Số lượng</label>
            <input type="text" class="form-control" id="" placeholder="Nhập số lượng">
        </div>

        <button type="submit" class="btn btn-primary">Thêm</button>
    </form>
</body>
<?php
include("footer.php")
?>
