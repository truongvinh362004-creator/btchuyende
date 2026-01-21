@extends('layouts.app')

@section('title', 'Dự Án Của Tôi')

@section('content')
    <div class="text-center mb-5">
        <h2 class="fw-bold">🌟 Các Dự Án Đã Hoàn Thành</h2>
        <p class="text-muted">Danh sách các sản phẩm tâm huyết tôi đã thực hiện.</p>
    </div>

    @if(isset($projects) && count($projects) > 0)
        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">
            @foreach($projects as $index => $project)
                <div class="col">
                    <div class="card h-100 border-0 shadow-sm hover-card">
                        <img src="https://placehold.co/600x400/3490dc/ffffff?text=Project+{{ $index + 1 }}" class="card-img-top" alt="...">

                        <div class="card-body">
                            <h5 class="card-title fw-bold text-primary">{{ $project['title'] }}</h5>
                            <p class="card-text text-secondary">{{ $project['description'] }}</p>
                        </div>
                        <div class="card-footer bg-white border-0 pb-3">
                            <a href="#" class="btn btn-sm btn-outline-primary w-100">Chi tiết <i class="bi bi-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    @else
        <div class="alert alert-warning text-center">
            <i class="bi bi-exclamation-triangle"></i> Chưa có dự án nào được cập nhật.
        </div>
    @endif
@endsection
