@extends('admin.master')

@section('title', 'Dash')

@section('additional-styles')
<style>

</style>
@endsection

@section('content')

<div id="admin-container">

    <nav>
        <h1 class="branding text-brand-500 text-2xl text-center py-4">
            <i class="fas fa-dragon text-2xl md:text-3xl xl:text-2xl"></i> <b class="hidden xl:inline-block">Dragoon</b>
        </h1>
        <!-- /.branding -->

        <div class="user-panel flex flex-col text-white py-4">
            <div class="user-avatar w-full flex justify-center mb-2 md:mr-0">
                <div class="bg-white rounded-full h-10 w-10 md:h-16 md:w-16"></div>
            </div>
            <span class="w-full text-center my-2 hidden md:block px-4 break-words">Hello, admin!</span>
            <div class="flex flex-col md:flex-row justify-center align-middle text-2xl">
                <a href="#" class="text-center md:mr-4"><i class="fas fa-envelope"></i></a>
                <a href="http://dragoon.test/admin/login" class="text-center"><i class="fas fa-sign-out"></i></a>
            </div>
        </div>
        <!-- /.user-panel -->

        <ul class="nav-ul">
            <a href="#"><li class="active">
                <i class="fas fa-tachometer-fast fa-fw"></i>
                <b>Dashboard</b>
            </li></a>

            <a href="#"><li>
                <i class="fas fa-cogs fa-fw"></i>
                <b>Settings</b>
            </li></a>

            <a href="#"><li>
                <i class="fas fa-feather-alt fa-fw"></i>
                <b>News</b>
            </li></a>

            <a href="#"><li>
                <i class="fas fa-users fa-fw"></i>
                <b>Players</b>
            </li></a>

            <a href="#"><li>
                <i class="fas fa-scroll-old fa-fw"></i>
                <b>Permissions</b>
            </li></a>

            <a href="#"><li>
                <i class="fas fa-treasure-chest fa-fw"></i>
                <b>Items</b>
            </li></a>

            <a href="#"><li>
                <i class="fas fa-swords fa-fw"></i>
                <b>Equipment</b>
            </li></a>

            <a href="#"><li>
                <i class="fas fa-city fa-fw"></i>
                <b>Towns</b>
            </li></a>

            <a href="#"><li>
                <i class="fas fa-paw-claws fa-fw"></i>
                <b>Creatures</b>
            </li></a>

            <a href="#"><li>
                <i class="fas fa-life-ring fa-fw"></i>
                <b>Tickets</b>
            </li></a>
        </ul>
        <!-- /.a-nav -->
    </nav>
    <!-- /nav -->

    <div class="content-container">
        <section class="metrics w-full hidden md:flex md:flex-col lg:flex-row mb-8">
            <div class="metric-block blue-gradient mb-2 lg:mb-0 lg:mr-2">
                <div class="text"><i class="fas fa-treasure-chest"></i> Items</div>
                <div class="number">1337</div>
            </div>

            <div class="metric-block purple-gradient my-4 lg:my-0 lg:mx-4">
                <div class="text"><i class="fas fa-city"></i> Cities</div>
                <div class="number">46</div>
            </div>

            <div class="metric-block red-gradient mt-2 lg:mt-0 lg:ml-2">
                <div class="text"><i class="fas fa-life-ring"></i> Tickets</div>
                <div class="number">352</div>
            </div>
        </section>
        <!-- /.metrics -->

        <section class="section todo-section">
            <div class="section-title">
                <h2 class="section-h2 text-2xl">To-Do Center</h2>
                <span class="section-subc hidden md:block">Here you'll find the current to-do tasks, 
                    a form to submit new to-dos and the 5 latest completed to-dos.</span>
            </div>
        </section>
        <!-- /.todo-section -->

        <section class="section info-section">
            <div class="section-title">
                <h2 class="section-h2 text-2xl">Information Center</h2>
                <span class="section-subc hidden md:block">You'll see the 5 latest actions performed by admins 
                    and the 5 latest News posts here.</span>
            </div>
        </section>
        <!-- /.info-section -->
    </div>
    <!-- /.content-container -->

</div>
<!-- /.admin-container -->

@endsection