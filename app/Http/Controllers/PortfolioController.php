<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    // 👇 ĐÂY LÀ HÀM INDEX MÀ BẠN CẦN QUAN TÂM
    public function index()
    {
        // Dòng này nghĩa là: Trả về giao diện tên là "home"
        return view('home');
    }

    public function projects()
    {
        $projects = [
            ['title' => 'Web Bán Hàng', 'description' => 'Laravel Project'],
            ['title' => 'App Quản Lý', 'description' => 'PHP Thuần']
        ];
        return view('projects', compact('projects'));
    }

    public function contact()
    {
        return view('contact');
    }
}
