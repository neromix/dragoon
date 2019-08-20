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
            <div class="hero w-full h-64 bg-cover bg-bottom shadow-center"></div>
        </section>
        <!-- /.hero-section -->

        <section class="section">
            <div class="section-card">
                <h3 class="card-title">Game metadata</h3>
                <div class="card-content">
                    <form>
                        <div class="form-group">
                            <label for="game-status" class="block text-sm mb-2">
                                <b>Game Status</b><span class="explanation"> - by setting this you change the status of 
                                the game between open, closed and maintenance mode.</span>
                            </label>
                            <select name="game-status" class="select select-dark">
                                <option value="open">Open</option>
                                <option value="closed">Closed</option>
                                <option value="maintenence">Maintenance</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="game-name" class="block text-sm mb-2">
                                <b>Game Name</b><span class="explanation"> - this is the name of your game. This will adjust 
                                any direct mentions of the name.</span>
                            </label>
                            <input type="text" id="game-name" class="input input-dark" placeholder="Enter your game's name here" value="Dragoon">
                        </div>

                        <div class="form-group">
                            <label for="map-size" class="block text-sm mb-2">
                                <b>Map Size</b><span class="explanation"> - the game world is a square, and this value is the length of one side.
                                Your world is this value squared.</span>
                            </label>
                            <input type="number" id="map-size" class="input input-dark" placeholder="250" value="250">
                        </div>

                        <input type="submit" class="btn btn-brand" value="Save changes">
                    </form>
                </div>
            </div>

            <div class="section-card">
                <h3 class="card-title">Forum configurations</h3>
                <div class="card-content">
                    <form>
                        <div class="form-group">
                            <label for="forum-type" class="block text-sm mb-2">
                                <b>Forum Type</b><span class="explanation"> - here you can choose to use the internal forum software, 
                                an external forum or no forum.</span>
                            </label>
                            <select name="forum-type" class="select select-dark">
                                <option value="internal">Internal</option>
                                <option value="external">External</option>
                                <option value="none">None</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="forum-link" class="block text-sm mb-2">
                                <b>External forum link</b><span class="explanation"> - if you selected external forum above, here's 
                                where you set the link to the forum.</span>
                            </label>
                            <input type="text" id="forum-link" class="input input-dark" placeholder="https://exampleforum.com">
                        </div>

                        <div class="form-group">
                            <label for="form-verify" class="block text-sm mb-2">
                                <b>Additional verification</b><span class="explanation"> - when enabled, this setting requires players 
                                to verify their email to use the forums, on top of normal account verification.</span>
                            </label>
                            <select name="forum-verify" class="select select-dark">
                                <option value="enabled">Enable</option>
                                <option value="disabled">Disable</option>
                            </select>
                        </div>

                        <input type="submit" class="btn btn-brand" value="Save changes">
                    </form>
                </div>
            </div>

            <div class="section-card">
                <h3 class="card-title">Fun values</h3>
                <div class="card-content">
                    <form>
                        <div class="form-group">
                            <label for="gold-mod" class="block text-sm mb-2">
                                <b>Gold modifier</b><span class="explanation"> - by raising or lowering this number, you can affect 
                                how much gold players earn.</span>
                            </label>
                            <input type="number" name="gold-mod" class="input input-dark" placeholder="1" value="1">
                        </div>

                        <div class="form-group">
                            <label for="exp-mod" class="block text-sm mb-2">
                                <b>EXP modifier</b><span class="explanation"> - like the gold modifier above, this affects EXP gains</span>
                            </label>
                            <input type="number" name="exp-mod" class="input input-dark" placeholder="1" value="1">
                        </div>

                        <input type="submit" class="btn btn-brand" value="Save changes">
                    </form>
                </div>
            </div>
        </section>
    </div>
    <!-- /.content-container -->

</div>
<!-- /.admin-container -->

<script>
    $('#settings-link').addClass('active');
</script>
@endsection