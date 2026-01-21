@extends('layouts.app')

@section('title', 'Liên Hệ')

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-8 col-lg-6">
            <div class="card border-0 shadow-lg rounded-3 overflow-hidden">
                <div class="card-header bg-gradient-primary text-white text-center py-4">
                    <h3 class="mb-0"><i class="bi bi-envelope-paper"></i> Gửi Tin Nhắn</h3>
                    <p class="mb-0 opacity-75">Tôi sẽ phản hồi trong vòng 24h</p>
                </div>

                <div class="card-body p-4 p-md-5">
                    <form>
                        <div class="mb-3">
                            <label class="form-label fw-bold">Họ và Tên</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="bi bi-person"></i></span>
                                <input type="text" class="form-control" placeholder="Nhập tên của bạn">
                            </div>
                        </div>

                        <div class="mb-3">
                            <label class="form-label fw-bold">Email</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="bi bi-at"></i></span>
                                <input type="email" class="form-control" placeholder="name@gmail.com">
                            </div>
                        </div>

                        <div class="mb-3">
                            <label class="form-label fw-bold">Nội dung</label>
                            <textarea class="form-control" rows="4" placeholder="Bạn cần tư vấn gì?"></textarea>
                        </div>

                        <div class="d-grid">
                            <button type="button" class="btn btn-primary btn-lg">
                                Gửi Ngay <i class="bi bi-send"></i>
                            </button>
                        </div>
                    </form>
                </div>

                <div class="card-footer bg-light text-center py-3">
                    <small class="text-muted">Hoặc liên hệ trực tiếp qua SĐT: <strong>0339858284</strong></small>
                </div>
            </div>
        </div>
    </div>
@endsection
