@extends('admin.master')

@section('title', 'Login')

@section('additional-styles')
<style>
body {
    background-image: url('{{ asset("img/admin/well-of-eternity.jpg") }}')
}
</style>
@endsection

@section('content')

<div class="container mx-auto h-full flex justify-center items-center">

    <div class="login-form w-full max-w-md bg-gray-700 text-white shadow-center">
        <div class="bg-brand-500 text-white w-full px-8 py-4 font-bold">
            <h1 class="text-center text-3xl"><i class="fas fa-dragon"></i> Dragoon</h1>
        </div>

        <form class="px-8 py-8">
            <div class="mb-4">
                <label class="block text-sm mb-2" for="username">
                    Username
                </label>
                <input class="input input-dark focus:border-brand-500" id="username" type="text" placeholder="Username">
            </div>

            <div class="mb-6">
                <label class="block text-sm mb-2" for="password">
                    Password
                </label>
                <input class="input input-dark focus:border-brand-500" id="password" type="password" placeholder="password123">
                <!-- <p class="text-red text-xs italic">Please choose a password.</p> -->
            </div>

            <a href="http://dragoon.test/admin/dashboard">
            <button class="btn btn-brand w-full" type="button">
                <i class="fas fa-sign-in"></i> Sign In
            </button>
            </a>
        </form>
        <!-- /form -->

        <div class="text-center w-full text-gray-500 pb-4">
            Copyright &copy; Surf, Inc.
        </div>
    </div>
    <!-- /.login-form -->

</div>
<!-- /.container -->

@endsection