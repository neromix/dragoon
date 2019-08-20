@extends('admin.master')

@section('title', 'Dash')

@section('additional-styles')
<style>
.ua-icon {
    background-size: cover;
    background-image: url({{ asset('img/admin/avatar-test.png') }});
}

.hero {
    background-image: url({{ asset('img/admin/plague-dragon.jpg') }}); 
}
</style>
@endsection

@section('content')

<div id="admin-container">

    @include('admin.includes.nav')

    <div class="content-container">
        <section class="section hero-section hidden md:block">
            <div class="section-container">
                <div class="hero w-full h-64 bg-cover bg-bottom shadow-center"></div>
            </div>
        </section>
        <!-- /.hero-section -->
    </div>
    <!-- /.content-container -->

</div>
<!-- /.admin-container -->

<script>
    var activeLink = document.getElementById("settings-link");
    activeLink.classList.add('active');
</script>
@endsection