@extends('layouts.app')

@section('title', 'Trang Chủ')

@section('content')
    <div class="row align-items-center py-5" style="min-height: 80vh;">
        <div class="col-lg-6 order-2 order-lg-1">
            <div class="d-inline-block px-3 py-1 bg-primary bg-opacity-10 text-primary rounded-pill mb-3 fw-bold border border-primary border-opacity-25">
                👋 CHÀO MỪNG BẠN
            </div>
            <h1 class="display-3 fw-bold text-dark mb-4" style="line-height: 1.2;">
                Xây Dựng Website <br>
                <span style="background: linear-gradient(to right, #2563eb, #9333ea); -webkit-background-clip: text; -webkit-text-fill-color: transparent;">
                    Chuyên Nghiệp
                </span>
            </h1>
            <p class="lead text-secondary mb-5 pe-lg-5">
                Tôi biến những ý tưởng phức tạp thành giao diện người dùng đơn giản, tinh tế và hiệu quả cao bằng công nghệ Laravel & PHP thuần.
            </p>
            <div class="d-flex gap-3">
                <a href="<?php echo route('projects'); ?>" class="btn btn-primary btn-lg rounded-pill px-5 shadow-lg fw-bold">
                    XEM DỰ ÁN <i class="bi bi-arrow-right-short"></i>
                </a>
                <a href="<?php echo route('contact'); ?>" class="btn btn-white bg-white btn-lg rounded-pill px-5 shadow fw-bold text-dark border">
                    LIÊN HỆ
                </a>
            </div>
        </div>

        <div class="col-lg-6 text-center position-relative order-1 order-lg-2 mb-5 mb-lg-0">
            <div class="position-absolute top-50 start-50 translate-middle bg-primary rounded-circle"
                 style="width: 350px; height: 350px; opacity: 0.1; filter: blur(50px); z-index: -1;"></div>

            <img src="https://images.unsplash.com/photo-1555099962-4199c345e5dd?q=80&w=1000&auto=format&fit=crop"
                 class="img-fluid rounded-4 soft-shadow floating-anim"
                 style="max-height: 450px; transform: rotate(-2deg); border: 8px solid rgba(255,255,255,0.8);"
                 alt="Coding Workspace">
        </div>
    </div>

    <div class="row g-4 mt-2">
        <div class="col-md-4">
            <div class="p-4 bg-white rounded-4 soft-shadow border-0 h-100">
                <div class="d-inline-block p-3 bg-primary bg-opacity-10 text-primary rounded-3 mb-3">
                    <i class="bi bi-lightning-charge-fill fs-3"></i>
                </div>
                <h4>Tốc Độ Cao</h4>
                <p class="text-muted mb-0">Code PHP thuần được tối ưu hóa giúp website tải trang tức thì.</p>
            </div>
        </div>
        <div class="col-md-4">
            <div class="p-4 bg-white rounded-4 soft-shadow border-0 h-100">
                <div class="d-inline-block p-3 bg-success bg-opacity-10 text-success rounded-3 mb-3">
                    <i class="bi bi-shield-check fs-3"></i>
                </div>
                <h4>Bảo Mật</h4>
                <p class="text-muted mb-0">An toàn dữ liệu tuyệt đối với tiêu chuẩn của Laravel Framework.</p>
            </div>
        </div>
        <div class="col-md-4">
            <div class="p-4 bg-white rounded-4 soft-shadow border-0 h-100">
                <div class="d-inline-block p-3 bg-warning bg-opacity-10 text-warning rounded-3 mb-3">
                    <i class="bi bi-phone-fill fs-3"></i>
                </div>
                <h4>Responsive</h4>
                <p class="text-muted mb-0">Hiển thị hoàn hảo trên mọi thiết bị: Mobile, Tablet và Laptop.</p>
            </div>
        </div>
    </div>
@endsection
