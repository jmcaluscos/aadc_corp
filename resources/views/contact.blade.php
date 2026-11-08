@extends('layouts.default')

@section('title')
<title>A&DC Construction Corp. | Contact</title>
@endsection

@section('content')
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
        <h2>Let’s build <b>your dream</b> together</h2><a class="btn"
            href="{{ Route::has('contact') ? route('contact') : " #" }}">Contact Us</a>
    </div>
</div>
<a href="#top" id="up" aria-label="Back to top">&uarr;</a>
@endsection