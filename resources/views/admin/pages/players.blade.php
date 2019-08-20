@extends('admin.master')

@section('title', 'Dash')

@section('additional-styles')
<style>
.ua-icon {
    background-size: cover;
    background-image: url({{ asset('img/admin/avatar-test.png') }});
}

.hero {
    background-image: url({{ asset('img/admin/spirit-deer.jpg') }}); 
}
</style>
@endsection

@section('content')

<div id="admin-container">

    @include('admin.includes.nav')

    <div class="content-container">
        <section class="section hero-section hidden md:block">
            <div class="hero w-full h-64 bg-cover bg-center shadow-center"></div>
        </section>
        <!-- /.hero-section -->

        <section class="section">
            <div class="lg:hidden alert warning bg-danger-500 p-8 shadow-center">
                <b>Notice!</b> You can't use the player management features on mobile. 
                Please use a larger tablet, a medium tablet in landscape mode or a computer. Sorry.
            </div>
        </section>

        <section class="section">
            <div class="section-card">
                <h3 class="card-title">Player management list</h3>
                <div class="card-content">
                    <ul class="player-list">
                        <li>
                            <div>
                                <div class="ua-icon bg-white rounded-full h-12 w-12 md:h-20 md:w-20 mr-2 md:mr-8"></div>
                            </div>
                            <div class="mid">
                                <span class="text-xl font-medium">P3t3rpan</span>
                                <span class="opacity-50">Level 100 Paladin</span>
                                <span class="text-success-500">example@email.com verified</span>
                            </div>
                            <a href="#"><i class="fas fa-ellipsis-v text-4xl"></i></a>
                        </li>

                        <li>
                            <div>
                                <div class="ua-icon bg-white rounded-full h-12 w-12 md:h-20 md:w-20 mr-2 md:mr-8"></div>
                            </div>
                            <div class="mid">
                                <span class="text-xl font-medium">RicardoMilos</span>
                                <span class="opacity-50">Level 69 Berserker</span>
                                <span class="text-success-500">big@muscles.xx verified</span>
                            </div>
                            <a href="#"><i class="fas fa-ellipsis-v text-4xl"></i></a>
                        </li>

                        <li>
                            <div>
                                <div class="ua-icon bg-white rounded-full h-12 w-12 md:h-20 md:w-20 mr-2 md:mr-8"></div>
                            </div>
                            <div class="mid">
                                <span class="text-xl font-medium">DarkDesi</span>
                                <span class="opacity-50">Level 420 Assassin</span>
                                <span class="text-success-500">sweatpea@wife.net verified</span>
                            </div>
                            <a href="#"><i class="fas fa-ellipsis-v text-4xl"></i></a>
                        </li>

                        <li>
                            <div>
                                <div class="ua-icon bg-white rounded-full h-12 w-12 md:h-20 md:w-20 mr-2 md:mr-8"></div>
                            </div>
                            <div class="mid">
                                <span class="text-xl font-medium">Leonidas</span>
                                <span class="opacity-50">Level 300 Spartan</span>
                                <span class="text-cta-500">ucant@touch.this unverified</span>
                            </div>
                            <a href="#"><i class="fas fa-ellipsis-v text-4xl"></i></a>
                        </li>

                        <li>
                            <div>
                                <div class="ua-icon bg-white rounded-full h-12 w-12 md:h-20 md:w-20 mr-2 md:mr-8"></div>
                            </div>
                            <div class="mid">
                                <span class="text-xl font-medium">Xx_M3ltyTac0_xX</span>
                                <span class="opacity-50">Level 32 Turd in the Wind</span>
                                <span class="text-cta-500">whateven@is.this unverified</span>
                            </div>
                            <a href="#"><i class="fas fa-ellipsis-v text-4xl"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </section>
    </div>
    <!-- /.content-container -->

</div>
<!-- /.admin-container -->

<script>
    $('#players-link').addClass('active');
</script>
@endsection