<section class="content-header">
    <div class="container-fluid pt-5">
        <div class="row mb-2">
            <div class="col-sm-6 ">
                <h1>Thêm mới phòng trọ</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="">Home</a></li>

                    <li class="breadcrumb-item active">Thêm mới </li>

                </ol>
            </div>
        </div>
    </div>
</section>

<section class="content">
    <form method="POST" enctype="multipart/form-data" action="../san-pham/index.php">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card card-warning">
                        <div class="card-header">
                            <h3 class="card-title mt-4"> </h3>
                        </div>
                        <div class="row">
                            <div class="col-sm-4">
                                <div class="card-body">

                                    <div class="form-group">
                                        <label for="">Mã phòng trọ</label>
                                        <input type="text" class="form-control" placeholder="Auto number" name="id_sp" readonly>
                                    </div>
                                    <div class="form-group">
                                        <label for="">Số lượng</label>
                                        <input type="number" class="form-control" placeholder="Số lượng" name="soluong">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Địa chỉ chi tiết</label>
                                        <input type="text" class="form-control" placeholder="Địa chỉ" name="dia_chi">
                                    </div>

                                </div>
                            </div>
                            <div class="col-sm-4">

                                <div class="card-body">
                                    <div role="form">
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <!-- text input -->
                                                <div class="form-group">
                                                    <label>Tên phòng trọ</label>
                                                    <input type="text" class="form-control" placeholder="Tên sản phẩm" name="ten_sanpham">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputFile">Ảnh phòng</label>
                                            <div class="input-group">
                                                <div class="custom-file">
                                                    <input type="file" class="custom-file-input" id="exampleInputFile" name="avatar">
                                                    <label class="custom-file-label" for="exampleInputFile">Choose file</label>

                                                </div>

                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="form-group">
                                                <label for="">Ngày nhập</label>
                                                <input type="text" class="form-control" name="ngay_nhap" readonly value="<?php echo $datetime; ?>">
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="card-body">

                                    <div class="form-group">
                                        <label for="">Giá mong muốn</label>
                                        <input type="number" class="form-control" placeholder="Đơn giá" name="giatien">
                                    </div>
                                    <div class="form-group">
                                        <label>Loại hàng</label>
                                        <select class="form-control" name="id_diadiem">
                                            <?php foreach ($diadiem as $dd) {
                                                extract($dd);
                                                echo " <option value='" . $dd['id_diadiem'] . "'>" . $dd['ten_diadiem'] . "</option>";
                                            } ?>

                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Số lượt xem</label>
                                        <input type="text" class="form-control" name="luot_xem" readonly value="0">
                                    </div>


                                </div>
                            </div>
                            <div class="col-md-12">

                                <div class="card-header">
                                    <h3 class="card-title">
                                        Mô tả phòng trọ
                                    </h3>
                                </div>
                                <div class="card-body pad">
                                    <div class="mb-3">
                                        <textarea name="chi_tiet" class="textarea" placeholder="Place some text here" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
                                    </div>

                                </div>

                            </div>
                            <div class="pl-4 ">
                                <div class="center-block">
                                    <button type="submit" name="btn_add" class="btn btn-primary ">Thêm mới</button>
                                    <button type="reset" class="btn btn-danger ">Nhập lại</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
    </form>
</section>