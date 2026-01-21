@extends('layouts.app')

@section('title', 'Dự Án')

@section('content')
    <div class="text-center mb-5">
        <h2 class="fw-bold display-5">DỰ ÁN TIÊU BIỂU</h2>
        <div style="width: 60px; height: 4px; background: #0d6efd; margin: 10px auto; border-radius: 2px;"></div>
        <p class="text-muted">Các sản phẩm thực tế đã hoàn thiện</p>
    </div>

    <?php if (isset($projects) && count($projects) > 0): ?>

        <div class="row row-cols-1 row-cols-md-3 g-4">

            <?php foreach ($projects as $index => $project): ?>

                <div class="col">
                    <div class="card h-100 border-0 soft-shadow rounded-4 overflow-hidden position-relative group-hover">
                        <div class="card-img-top d-flex align-items-center justify-content-center text-white"
                             style="height: 180px; background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);">
                             <i class="bi bi-laptop display-1 opacity-25"></i>
                             <h2 class="position-absolute fw-bold">#<?php echo $index + 1; ?></h2>
                        </div>

                        <div class="card-body p-4">
                            <h4 class="card-title fw-bold text-dark mb-3">
                                <?php echo $project['title']; ?>
                            </h4>
                            <p class="card-text text-secondary">
                                <?php echo $project['description']; ?>
                            </p>
                        </div>

                        <div class="card-footer bg-white border-0 p-4 pt-0">
                            <a href="#" class="btn btn-outline-primary w-100 rounded-pill py-2 fw-bold">
                                CHI TIẾT <i class="bi bi-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>

            <?php endforeach; ?>

        </div>

    <?php else: ?>
        <div class="alert alert-warning text-center p-5 rounded-4 soft-shadow">
            <h3>📭 Chưa có dự án nào</h3>
        </div>
    <?php endif; ?>
@endsection
