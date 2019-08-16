@extends('admin.master')

@section('title', 'Dash')

@section('additional-styles')
<style>
body {
    background-image: url('{{ asset("img/admin/login-ocean.jpg") }}')
}
</style>
@endsection

@section('content')

<div class="bg-white w-screen h-screen max-h-screen flex">
    <nav class="w-1/6 bg-gray-700">
        <h1 class="text-brand-500 font-bold text-2xl text-center py-4">Dragoon</h1>
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
        <nav class="flex justify-between w-full py-4 px-8 bg-brand-500 text-white">
            <div class="flex items-center">
                <i class="fas fa-expand mr-8 text-2xl"></i>

                <input class="form-inp fbb700" type="text" placeholder="search">
            </div>
            
        </nav>
    </div>
</div>
<!-- /.container -->

@endsection