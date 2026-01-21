@extends('layouts.app')

@section('title', 'Liên Hệ')

@section('content')
    <div class="row justify-content-center">
        <div class="col-lg-10">
            <div class="card border-0 soft-shadow rounded-4 overflow-hidden">
                <div class="row g-0">

                    <div class="col-md-5 bg-dark text-white p-5 d-flex flex-column justify-content-center position-relative">
                        <div class="position-absolute top-0 end-0 bg-primary opacity-50 rounded-circle" style="width: 100px; height: 100px; margin: -20px; filter: blur(30px);"></div>

                        <h3 class="fw-bold mb-5">THÔNG TIN</h3>

                        <div class="d-flex mb-4">
                            <div class="me-3"><i class="bi bi-geo-alt-fill fs-4 text-primary"></i></div>
                            <div>
                                <strong class="text-uppercase text-white-50" style="font-size: 0.8rem;">Địa chỉ</strong>
                                <div class="fs-5">Trường Đại Học Sư Phạm Kỹ Thuật Vinh</div>
                            </div>
                        </div>

                        <div class="d-flex mb-4">
                            <div class="me-3"><i class="bi bi-envelope-fill fs-4 text-primary"></i></div>
                            <div>
                                <strong class="text-uppercase text-white-50" style="font-size: 0.8rem;">Email</strong>
                                <div class="fs-5">truongvinh362004.gmail.com</div>
                            </div>
                        </div>

                        <div class="d-flex">
                            <div class="me-3"><i class="bi bi-telephone-fill fs-4 text-primary"></i></div>
                            <div>
                                <strong class="text-uppercase text-white-50" style="font-size: 0.8rem;">Điện thoại</strong>
                                <div class="fs-5">0339858284</div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-7 bg-white p-5">
                        <h3 class="fw-bold text-dark mb-4">GỬI TIN NHẮN</h3>

                        <form action="" method="POST">
                            <?php echo csrf_field(); ?>

                            <div class="form-floating mb-3">
                                <input type="text" class="form-control bg-light border-0" id="name" placeholder="Tên">
                                <label for="name">Họ và Tên</label>
                            </div>

                            <div class="form-floating mb-3">
                                <input type="email" class="form-control bg-light border-0" id="email" placeholder="Email">
                                <label for="email">Email của bạn</label>
                            </div>

                            <div class="form-floating mb-4">
                                <textarea class="form-control bg-light border-0" placeholder="Nội dung" id="msg" style="height: 120px"></textarea>
                                <label for="msg">Lời nhắn...</label>
                            </div>

                            <div class="d-grid">
                                <button type="button" class="btn btn-primary btn-lg rounded-pill fw-bold shadow-sm">
                                    GỬI NGAY <i class="bi bi-send-fill ms-2"></i>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
