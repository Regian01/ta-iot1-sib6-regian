<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    function index() {
        $data['title'] = 'Pengguna';
        $data['breadcrumbs'][] = [
            'title' => 'Dashboard',
            'url' => route('dashboard')
        ];
        $data['breadcrumbs'][] = [
            'title' => 'Pengguna',
            'url' => route('users.index')
        ];

        return view('pages.user.index', $data);
    }
}
