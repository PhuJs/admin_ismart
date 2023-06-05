<div id="content" class="mh-full pt-4">
    <div class="add_product p-16">
        <div class="card">
            <div class="card-header fs-5 fw-semibold">
                Thêm sản phẩm
            </div>
            <div class="card-body">
                <form action="" method="POST">
                    <div class="row g-3">
                        <div class="col-6">
                            <div class="mb-3">
                                <label for="product_name" class="form-label">Tên sản phẩm</label>
                                <input type="text" class="form-control" aria-label="First name" id="product_name">
                            </div>
                            <div class="mb3">
                                <div class="row g-3">
                                    <div class="col-6">
                                        <div class="mb-3">
                                            <label for="product_price" class="form-label">Giá sản
                                                phẩm</label>
                                            <input type="text" class="form-control" aria-label="First name" id="product_price">
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="mb-3">
                                            <label for="discount" class="form-label">Giá cũ</label>
                                            <input type="text" class="form-control" aria-label="First name" id="discount">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-6">
                            <label for="desc">Mô tả sản phẩm</label>
                            <textarea name="desc" class="form-control" id="desc" style="height:72%;"></textarea>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="mb-3">
                                <label for="product_detail">Chi tiết sản phẩm</label>
                                <textarea class="form-control" name="detail" id="product_detail" cols="30" rows="10"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-4">
                            <div class="mb-3">
                                <label for="formFile" class="form-label">Hình ảnh sản phẩm</label>
                                <input class="form-control" type="file" id="formFile">
                            </div>
                            <div class="mb-3">
                                <label for="formFiles" class="form-label">Hình ảnh chi tiết</label>
                                <input class="form-control" type="file" id="formFiles">
                            </div>
                            <div class="mb-3">
                                <label for="product-cart">Danh mục</label>
                                <select name="" id="product-cart" class="form-select">
                                    <option value="">--- Chọn danh mục ---</option>
                                    <option value="">Điện Thoại</option>
                                    <option value="">Laptop</option>
                                    <option value="">Đồng hồ</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="">Trạng thái</label>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="radio_status" id="flexRadioDefault1" value="1" checked>
                                    <label class="form-check-label" for="flexRadioDefault1">
                                        Chờ duyệt
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="radio_status" id="flexRadioDefault2" value="2">
                                    <label class="form-check-label" for="flexRadioDefault2">
                                        Đã đăng
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="col-8">
                            <!-- Trống -->
                        </div>
                    </div>
                    <input type="submit" class="btn btn-primary" value="Thêm mới" name="submit">
                </form>
            </div>
        </div>
    </div>
</div>