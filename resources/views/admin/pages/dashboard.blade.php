@extends('admin.master')

@section('title', 'Dash')

@section('additional-styles')
<style>
.ua-icon {
    background-size: cover;
    background-image: url({{ asset('img/admin/avatar-test.png') }});
}

.hero {
    background-image: url({{ asset('img/admin/anime-spirit-dog.png') }}); 
}
</style>
@endsection

@section('content')

<div id="admin-container">

    <nav>
        <h1 class="branding bg-brand-500 text-white text-2xl text-center py-4">
            <i class="fas fa-dragon text-2xl md:text-3xl xl:text-2xl"></i> <b class="hidden xl:inline-block">Dragoon</b>
        </h1>
        <!-- /.branding -->

        <div class="user-panel flex flex-col text-white py-4 pt-6">
            <div class="user-avatar w-full flex justify-center mb-2 md:mr-0">
                <div class="ua-icon bg-white rounded-full h-10 w-10 md:h-16 md:w-16"></div>
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
        <section class="metrics w-full hidden md:flex md:flex-col lg:flex-row mb-6">
            <div class="metric-block blue-gradient mb-2 lg:mb-0 lg:mr-2">
                <div class="text"><i class="fad fa-check-double"></i> Tasks</div>
                <div class="number">1337</div>
            </div>

            <div class="metric-block purple-gradient my-4 lg:my-0 lg:mx-4">
                <div class="text"><i class="fas fa-users"></i> Players</div>
                <div class="number">46</div>
            </div>

            <div class="metric-block red-gradient mt-2 lg:mt-0 lg:ml-2">
                <div class="text"><i class="fas fa-life-ring"></i> Tickets</div>
                <div class="number">352</div>
            </div>
        </section>
        <!-- /.metrics -->

        <section class="section hero-section hidden md:block">
            <div class="section-container">
                <div class="hero w-full h-64 bg-cover bg-center shadow-center"></div>
            </div>
        </section>
        <!-- /.hero-section -->

        <section class="section task-section">
            <div class="section-container">
                <div class="section-card h-auto">
                    <h3 class="card-title">Current task list</h3>
                    <div class="card-content">
                        <ul class="task-list">
                            <li>
                                <input type="checkbox">
                                <div>
                                    <h4>Sparkle all the ponies</h4>
                                    <span>By Emmanuel on 4/20/2019</span>
                                </div>
                            </li>

                            <li>
                                <input type="checkbox">
                                <div>
                                    <h4>Eliminate lemonade elixirs</h4>
                                    <span>By Papadopolous78 on 3/7/2019</span>
                                </div>
                            </li>

                            <li>
                                <input type="checkbox">
                                <div>
                                    <h4>Make some ecchi grills</h4>
                                    <span>By nice on 6/9/2019</span>
                                </div>
                            </li>

                            <li>
                                <input type="checkbox">
                                <div>
                                    <h4>Contemplate the Schrodinger equations</h4>
                                    <span>By 3in5teinXX on 5/2/1856</span>
                                </div>
                            </li>

                            <li>
                                <input type="checkbox">
                                <div>
                                    <h4>Actually do some work</h4>
                                    <span>By Splashsky on 8/20/2019</span>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- End of add-task form -->

                <div class="section-card">
                    <h3 class="card-title">Recent admin activities</h3>
                    <div class="card-content">
                        <ul class="activity-list">
                            <li>
                                <i class="fas fa-treasure-chest fa-fw"></i>
                                <div>
                                    <h4>Ricardo added a new item</h4>
                                    <span>5 hrs ago</span>
                                </div>
                            </li>

                            <li>
                                <i class="fas fa-shield fa-fw"></i>
                                <div>
                                    <h4>Milos69 banned a user for cheating</h4>
                                    <span>30 mins ago</span>
                                </div>
                            </li>

                            <li>
                                <i class="fas fa-lemon fa-fw"></i>
                                <div>
                                    <h4>KingK0ng45 established the Lemonade Elixir</h4>
                                    <span>140 yrs ago</span>
                                </div>
                            </li>

                            <li>
                                <i class="fas fa-axe-battle fa-fw"></i>
                                <div>
                                    <h4>Francis crafted a Legendary weapon</h4>
                                    <span>2 hrs ago</span>
                                </div>
                            </li>

                            <li>
                                <i class="fas fa-pen fa-fw"></i>
                                <div>
                                    <h4>Splashsky actually did some work</h4>
                                    <span>7 mins ago</span>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- End of list of tasks -->
            </div>
        </section>
        <!-- /.task-section -->
    </div>
    <!-- /.content-container -->

</div>
<!-- /.admin-container -->

@endsection