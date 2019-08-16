@extends('admin.master')

@section('title', 'Login')

@section('additional-styles')
<style>
body {
    background-image: url('{{ asset("img/admin/login-ocean.jpg") }}')
}
</style>
@endsection

@section('content')

<div class="container mx-auto h-full flex justify-center items-center">

    <div class="login-form w-full max-w-md bg-white shadow">
        <div class="bg-brand-500 text-white w-full px-8 py-4 font-bold">
            <h1 class="text-center text-3xl">Dragoon Admin</h1>
        </div>

        <form class="px-8 py-8">
            <div class="mb-4">
                <label class="block text-grey-darker text-sm mb-2" for="username">
                    Username
                </label>
                <input class="form-inp" id="username" type="text" placeholder="Username">
            </div>

            <div class="mb-6">
                <label class="block text-grey-darker text-sm mb-2" for="password">
                    Password
                </label>
                <input class="form-inp" id="password" type="password" placeholder="password123">
                <!-- <p class="text-red text-xs italic">Please choose a password.</p> -->
            </div>

            <a href="http://dragoon.test/admin/dashboard">
            <button class="btn btn-brand w-full" type="button">
                <i class="fas fa-sign-in"></i> Sign In
            </button>
            </a>
        </form>
        <!-- /form -->

        <div class="text-center w-full text-gray-500 py-4 border-t border-gray-300">
            Copyright &copy; Surf, Inc.
        </div>
    </div>
    <!-- /.login-form -->

</div>
<!-- /.container -->

@endsection