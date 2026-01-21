@extends('layouts.app')

@section('title', 'Trang Chủ - Welcome')

@section('content')
    <div class="p-5 mb-4 bg-white rounded-3 shadow-sm border text-center">
        <div class="container-fluid py-5">
            <h1 class="display-4 fw-bold text-primary">Xin chào, tôi là Developer! 🚀</h1>
            <p class="col-md-8 fs-4 mx-auto text-secondary">
                Tôi chuyên xây dựng các ứng dụng web hiện đại, hiệu suất cao bằng Laravel Framework.
                Đây là hồ sơ năng lực cá nhân của tôi.
            </p>
            <div class="mt-4">
                <a href="{{ route('projects') }}" class="btn btn-primary btn-lg px-4 gap-3 me-2">
                    <i class="bi bi-folder-check"></i> Xem Dự Án
                </a>
                <a href="{{ route('contact') }}" class="btn btn-outline-secondary btn-lg px-4">
                    <i class="bi bi-envelope"></i> Liên Hệ
                </a>
            </div>
        </div>
    </div>

    <div class="row align-items-md-stretch">
        <div class="col-md-6 mb-3">
            <div class="h-100 p-5 text-white bg-gradient-primary rounded-3 shadow-sm">
                <h2>Kỹ Năng Backend</h2>
                <p>Thành thạo PHP, Laravel Framework, MySQL, RESTful API và mô hình MVC.</p>
            </div>
        </div>
        <div class="col-md-6 mb-3">
            <div class="h-100 p-5 bg-white border rounded-3 shadow-sm">
                <h2 class="text-dark">Kỹ Năng Frontend</h2>
                <p>Có kinh nghiệm làm việc với HTML5, CSS3, Bootstrap 5 và JavaScript cơ bản.</p>
            </div>
        </div>
    </div>
@endsection
