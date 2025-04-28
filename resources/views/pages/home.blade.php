@extends('layouts.app')

@section('title', 'Home')
@section('page_title', 'Selamat datang di berita Batam')

@section('content')
    <h1 class="text-2xl font-bold mb-4">Selamat Pagi</h1>
    <p class="mb-4">Berikut adalah berita update di hari ini</p>
    <div class="flex space-x-8">
        @include('components.card', [
            'imgsrc' => 'images/rendang.jfif',
            'title' => 'Rendang Padang Asli Minang',
            'desc' => 'Dimasak lama dengan santan dan rempah pilihan, rendang ini dijamin bikin lupa kenyang!'
        ])

        @include('components.card', [
            'imgsrc' => 'images/rendang.jfif',
            'title' => 'Rendang Padang Asli Minang',
            'desc' => 'Dimasak lama dengan santan dan rempah pilihan, rendang ini dijamin bikin lupa kenyang!'
        ])

        @include('components.card', [
            'imgsrc' => 'images/rendang.jfif',
            'title' => 'Rendang Padang Asli Minang',
            'desc' => 'Dimasak lama dengan santan dan rempah pilihan, rendang ini dijamin bikin lupa kenyang!'
        ])
    </div>
@endsection