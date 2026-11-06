<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Contact Us | A&amp;DC Construction Corporation</title>
    <link rel="icon" href="logo.png">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&family=Playfair+Display:ital,wght@1,500&display=swap">
    {{-- <link rel="stylesheet" href="style.css"> --}}
    @vite(['resources/css/app.css', 'resources/js/app.js', 'resources/js/data.js', 'resources/js/main.js'])
</head>

<body>
    <div class="topbar">
        <div class="wrap"><span>📍 Taguig City, Metro Manila</span><span><a href="tel:+63287247509">02-8724-7509</a>
                &nbsp;|&nbsp; <a
                    href="mailto:adcengineeringandconstruction@gmail.com">adcengineeringandconstruction@gmail.com</a></span>
        </div>
    </div>
    <header>
        <div class="wrap">
            <a class="brand" href="{{ Route::has('home') ? route('home') : "#" }}">
                <img src="{{ asset('img/logo/logo.png') }}" alt="A&amp;DC logo"><span>A&amp;DC<small>CONSTRUCTION
                        CORPORATION</small></span></a>
            <button id="mb" aria-label="Menu">&#9776;</button>
            <nav id="nav">
                <a href="{{ Route::has('home') ? route('home') : "#" }}">Home</a>
                <a href="{{ Route::has('about') ? route('about') : "#" }}">About</a>
                <a href="{{ Route::has('services') ? route('services') : "#" }}">Services</a>
                <a href="{{ Route::has('projects') ? route('projects') : "#" }}">Projects</a>
                <a href="{{ Route::has('partners') ? route('partners') : "#" }}">Partners</a>
                <a href="{{ Route::has('team') ? route('team') : "#" }}">Team</a>
                <a href="{{ Route::has('contact') ? route('contact') : "#" }}" class="on">Contact</a>
            </nav>
        </div>
    </header>
    <section class="pagehead">
        <div class="wrap">
            <div class="eyebrow">A&amp;DC Construction Corporation</div>
            <h1>Contact Us</h1>
        </div>
    </section>

    <section>
        <div class="wrap">
            <div class="info">
                <div class="card">
                    <h3>Address</h3>
                    <p>#39-B Sto. Ni&ntilde;o Street, South Signal Village, Taguig City 1632</p>
                </div>
                <div class="card">
                    <h3>Phone</h3>
                    <p>Landline: 02-8724-7509<br>Mobile: 0967-823-7051 / 0970-215-2892</p>
                </div>
                <div class="card">
                    <h3>Email</h3>
                    <p><a
                            href="mailto:adcengineeringandconstruction@gmail.com">adcengineeringandconstruction@gmail.com</a><br><a
                            href="mailto:manstrngr@gmail.com">manstrngr@gmail.com</a></p>
                </div>
            </div>
        </div>
    </section>
    <section class="alt">
        <div class="wrap">
            <div class="head">
                <div class="eyebrow">Get In Touch</div>
                <h2>Request a Quote</h2>
                <p>Tell us about your project and we will get back to you.</p>
            </div>
            <form class="form" id="cf"><input id="fn" placeholder="Full name" required><input id="fe" type="email"
                    placeholder="Email address" required><input id="fp" placeholder="Phone number"><input id="fs"
                    placeholder="Project type (e.g. Fit-out, Roofing)"><textarea id="fm" rows="5"
                    placeholder="Project details" required></textarea><button class="btn"
                    style="background:var(--gold);color:var(--navy);cursor:pointer">Send Message</button></form>
        </div>
    </section>
    <div class="cta">
        <div class="wrap">
            <h2>Let’s build <b>your dream</b> together</h2><a class="btn" href="contact.html">Contact Us</a>
        </div>
    </div>
    <a href="#top" id="up" aria-label="Back to top">&uarr;</a>

    <footer id="contact">
        <div class="wrap">
            <div class="fg">
                <div>
                    <h4>A&amp;DC Construction Corporation</h4>
                    <p>Design and Engineering Construction. PCAB License No. 56496. SEC Reg. 2033010080440-31.</p>
                </div> 
                <div>
                    <h4>Explore</h4>
                    <a href="{{ Route::has('about') ? route('about') : "#" }}">About Us</a>
                    <a href="{{ Route::has('services') ? route('services') : "#" }}">Services</a>
                    <a href="{{ Route::has('projects') ? route('projects') : "#" }}">Projects</a>
                    <a href="{{ Route::has('partners') ? route('partners') : "#" }}">Partners</a>
                    <a href="{{ Route::has('team') ? route('team') : "#" }}">Key Personnel</a>
                </div>
                <div>
                    <h4>Quick Links</h4>
                    <a href="{{ Route::has('projects') ? route('projects') : "#" }}">Completed Projects</a>
                    <a href="{{ Route::has('partners') ? route('partners') : "#" }}">Partners</a>
                    <a href="{{ Route::has('team') ? route('team') : "#" }}">Leadership</a>
                </div>
                <div>
                    <h4>Keep in Touch</h4>
                    <b style="color:#fff">Allan D. Caluscos, Director</b>
                    <br><p>#39-B Sto. Niño
                    Street, South Signal Village,<br>
                    Taguig City 1632<br>
                    Landline: 02-8724-7509<br>
                    Mobile: 0967-823-7051
                    / 0970-215-2892</p><br>
                    <a href="mailto:adcengineeringandconstruction@gmail.com">adcengineeringandconstruction@gmail.com</a>
                    <a href="mailto:manstrngr@gmail.com">manstrngr@gmail.com</a>
                    <p>Message us on the A&amp;DC Engineering
                    and Construction Services Facebook page.</p>
                </div>
            </div>
            <div class="copy">© 2026 A&amp;DC Construction Corporation. All rights reserved.</div>
        </div>
    </footer>
    {{-- <script src="data.js"></script>
    <script src="main.js"></script> --}}
</body>

</html>