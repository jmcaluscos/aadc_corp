<header>
    <div class="wrap">
        <a class="brand" href="{{ Route::has('home') ? route('home') : " #" }}">
            <img src="{{ asset('img/logo/logo.png') }}" alt="A&amp;DC logo"><span>A&amp;DC<small>CONSTRUCTION
                    CORPORATION</small></span></a>
        <button id="mb" aria-label="Menu">&#9776;</button>
        <nav id="nav">
            <a href="{{ Route::has('home') ? route('home') : " #" }}" @class(['on'=> Route::is('home')])>Home</a>
            <a href="{{ Route::has('about') ? route('about') : " #" }}" @class(['on'=> Route::is('about')])>About</a>
            <a href="{{ Route::has('services') ? route('services') : " #" }}" @class(['on'=>
                Route::is('services')])>Services</a>
            <a href="{{ Route::has('projects') ? route('projects') : " #" }}" @class(['on'=>
                Route::is('projects')])>Projects</a>
            <a href="{{ Route::has('partners') ? route('partners') : " #" }}" @class(['on'=>
                Route::is('partners')])>Partners</a>
            <a href="{{ Route::has('team') ? route('team') : " #" }}" @class(['on'=>
                Route::is('team')])>Team</a>
            <a href="{{ Route::has('contact') ? route('contact') : " #" }}" @class(['on'=>
                Route::is('contact')])>Contact</a>
        </nav>
    </div>
</header>