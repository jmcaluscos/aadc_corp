@extends('layouts.default')

@section('title')
<title>A&DC Construction Corp. | Home</title>
@endsection

@section('content')
<section class="hero" id="top">
    <div class="slide s1 on"></div>
    <div class="slide s2"></div>
    <div class="slide s3"></div>
    <div class="wrap">
        <div class="eyebrow">Design &amp; Engineering Construction</div>
        <h1>Building Your <b>Dreams</b>, Beyond Expectation</h1>
        <p>A Filipino-owned general contractor delivering quality construction with cost-saving methodology,
            exceptional craftsmanship and pride.</p>
        <div>
            <a class="btn" href="{{ Route::has('services') ? route('services') : " #" }}">Our Services</a>
        </div>
    </div>
    <div class="dots"><i class="on"></i><i></i><i></i></div>
    <div class="cap" id="cap">Retail &amp; Commercial Fit-outs</div>
</section>

<div class="wrap">
    <div class="stats">
        <div><b>2022</b><span>Established</span></div>
        <div><b>PCAB</b><span>License No. 56496</span></div>
        <div><b>28</b><span>Projects on Record</span></div>
        <div><b>2017</b><span>Earliest Project on Record</span></div>
    </div>
</div>
<section class="alt">
    <div class="wrap">
        <div class="head">
            <div class="eyebrow">Why A&amp;DC</div>
            <h2>Built On Trust &amp; Craftsmanship</h2>
        </div>
        <div class="grid4">
            <div class="why"><i>★</i>
                <h3>Quality Delivery</h3>
                <p>Excellence in craftsmanship on every project we handle.</p>
            </div>
            <div class="why"><i>⏱</i>
                <h3>On-Time Completion</h3>
                <p>Timely, value-added projects delivered as promised.</p>
            </div>
            <div class="why"><i>₱</i>
                <h3>Cost-Saving Methods</h3>
                <p>Smart methodology that protects your budget.</p>
            </div>
            <div class="why"><i>⛑</i>
                <h3>Safety First</h3>
                <p>A safe workplace for our people, assets and clients.</p>
            </div>
        </div>
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