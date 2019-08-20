@extends('admin.master')

@section('title', 'Dash')

@section('additional-styles')
<style>
.ua-icon {
    background-size: cover;
    background-image: url({{ asset('img/admin/avatar-test.png') }});
}

.hero {
    background-image: url({{ asset('img/admin/dull-city.jpg') }}); 
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
            <div class="section-card">
                <h3 class="card-title">Submit a news post</h3>
                <div class="card-content">
                    <form>
                        <input type="text" name="title" class="input input-dark mb-4" placeholder="Title of news post">
                        <textarea class="input input-dark mb-4" placeholder="News goes here!"></textarea>

                        <div class="form-group">
                            <label for="type" class="block text-sm mb-2">News category</label>
                            <select class="select select-dark half" name="type">
                                <option>General</option>
                                <option>Update</option>
                                <option>Bug fix</option>
                                <option>Event</option>
                            </select>
                        </div>

                        <input type="submit" class="btn btn-brand" value="Submit post">
                    </form>
                </div>
            </div>
        </section>

        <section class="section">
            <div class="section-card">
                <h3 class="card-title">Previous news posts</h3>
                <div class="card-content">
                    <ul class="news-list">
                        <li class="bug-fix">
                            <i class="fas fa-spider fa-fw"></i>

                            <div class="mid">
                                <h4>There were some issues we had</h4>
                                <h5>By Joseph on 12/4/2019</h5>
                                <p>Here's some words that should be cut off ... read more</p>
                            </div>

                            <div class="right">
                                <span class="number">12980</span>
                                <span class="text">Upvotes</span>
                            </div>
                        </li>

                        <li class="update">
                            <i class="fas fa-scroll-old fa-fw"></i>

                            <div class="mid">
                                <h4>Here's the update for you</h4>
                                <h5>By Nebudchanezzar on 5/9/2019</h5>
                                <p>So in other news, there was some new content ... read more</p>
                            </div>

                            <div class="right">
                                <span class="number">768</span>
                                <span class="text">Upvotes</span>
                            </div>
                        </li>

                        <li class="general">
                            <i class="fas fa-feather-alt fa-fw"></i>

                            <div class="mid">
                                <h4>So what went on?</h4>
                                <h5>By Splashsky on 3/4/2019</h5>
                                <p>Some new content came out today ... read more</p>
                            </div>

                            <div class="right">
                                <span class="number">2631</span>
                                <span class="text">Upvotes</span>
                            </div>
                        </li>

                        <li class="event">
                            <i class="fas fa-flame fa-fw"></i>

                            <div class="mid">
                                <h4>Solstice of Myths</h4>
                                <h5>By Ricardo Milos on 4/20/2019</h5>
                                <p>It's here! The solstice in which all legendary ... read more</p>
                            </div>

                            <div class="right">
                                <span class="number">826004</span>
                                <span class="text">Upvotes</span>
                            </div>
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
    $('#news-link').addClass('active');
    $('textarea').autoResize();
</script>
@endsection