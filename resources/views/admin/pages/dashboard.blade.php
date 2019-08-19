@extends('admin.master')

@section('title', 'Dash')

@section('additional-styles')
<style>
.hero {
    background-image: url('{{ asset("img/admin/anime-spirit-dog.png") }}');
}
</style>
@endsection

@section('content')

<div class="bg-white w-screen min-h-screen flex">
    <nav class="w-1/6 bg-gray-700">
        <h1 class="text-brand-500 text-2xl text-center py-4">
            <i class="fas fa-dragon text-2xl md:text-3xl xl:text-2xl"></i> <b class="hidden xl:inline-block">Dragoon</b>
        </h1>

        <div class="user-panel bg-gray-800 flex flex-col text-white py-4 mb-4">
            <div class="user-avatar w-full flex justify-center mb-2 md:mr-0">
                <div class="bg-white rounded-full h-10 w-10"></div>
            </div>
            <span class="w-full text-center my-2 hidden md:block">Hello, admin!</span>
            <div class="flex flex-col md:flex-row justify-center align-middle text-2xl">
                <a href="#" class="text-center md:mr-4"><i class="fas fa-envelope"></i></a>
                <a href="http://dragoon.test/admin/login" class="text-center"><i class="fas fa-sign-out"></i></a>
            </div>
        </div>

        <ul class="admin-side-nav">
            <a href="#"><li>
                <i class="fas fa-tachometer-fast"></i>
                <b>Dashboard</b>
            </li></a>

            <a href="#"><li>
                <i class="fas fa-cogs"></i>
                <b>Settings</b>
            </li></a>

            <a href="#"><li>
                <i class="fas fa-feather-alt"></i>
                <b>News</b>
            </li></a>

            <a href="#"><li>
                <i class="fas fa-users"></i>
                <b>Players</b>
            </li></a>

            <a href="#"><li>
                <i class="fas fa-scroll-old"></i>
                <b>Permissions</b>
            </li></a>

            <a href="#"><li>
                <i class="fas fa-treasure-chest"></i>
                <b>Items</b>
            </li></a>

            <a href="#"><li>
                <i class="fas fa-swords"></i>
                <b>Equipment</b>
            </li></a>

            <a href="#"><li>
                <i class="fas fa-city"></i>
                <b>Towns</b>
            </li></a>

            <a href="#"><li>
                <i class="fas fa-paw-claws"></i>
                <b>Creatures</b>
            </li></a>

            <a href="#"><li>
                <i class="fas fa-life-ring"></i>
                <b>Tickets</b>
            </li></a>
        </ul>
    </nav>

    <div class="w-full flex flex-col">
        <div class="hero h-64 w-full bg-cover bg-center">
        </div>
    </div>
</div>
<!-- /.container -->

@endsection