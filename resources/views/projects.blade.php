@extends('layouts.default')

@section('title')
<title>A&DC Construction Corp. | Contact</title>
@endsection

@section('content')
<section class="pagehead">
    <div class="wrap">
        <div class="eyebrow">A&amp;DC Construction Corporation</div>
        <h1>Our Projects</h1>
    </div>
</section>

<section class="alt" id="projects">
    <div class="wrap">
        <div class="head">
            <div class="eyebrow">Transcending Industries</div>
            <h2>Our Projects</h2>
            <p>Retail stores, residences, roofing, waterproofing and institutional repainting across Metro Manila
                and beyond.</p>
        </div>
        <div class="pgrid">
            <a class="proj"><img src="{{ asset('img/project_img/p1.jpg') }}" alt="Sperry store" loading="lazy">
                <div><span>Retail</span><b>Sperry Concept Stores</b></div>
            </a>
            <a class="proj"><img src="{{ asset('img/project_img/p2.jpg') }}" alt="Retail interior" loading="lazy">
                <div><span>Retail Fit-out</span><b>Complex Lifestyle Store</b></div>
            </a>
            <a class="proj"><img src="{{ asset('img/project_img/p3.jpg') }}" alt="Keds store" loading="lazy">
                <div><span>Retail</span><b>Keds Concept Stores</b></div>
            </a>
            <a class="proj"><img src="{{ asset('img/project_img/p4.jpg') }}" alt="Residence" loading="lazy">
                <div><span>Residential</span><b>House Renovation, Fairview</b></div>
            </a>
            <a class="proj"><img src="{{ asset('img/project_img/p5.jpg') }}" alt="Roofing" loading="lazy">
                <div><span>Roofing</span><b>Roof Repair &amp; Painting</b></div>
            </a>
            <a class="proj"><img src="{{ asset('img/project_img/p6.jpg') }}" alt="Residential perspective"
                    loading="lazy">
                <div><span>Residential</span><b>Residential Construction</b></div>
            </a>
        </div>
        <div class="head" style="margin-top:64px;margin-bottom:24px">
            <h2>Completed Projects</h2>
        </div>
        <div class="tools"><input id="q" placeholder="Search project or location…" aria-label="Search projects">
        </div>

        <div class="tbwrap">
            <table>
                <thead>
                    <tr>
                        <th>Project</th>
                        <th>Location</th>
                        <th>Completed</th>
                    </tr>
                </thead>
                <tbody id="tb"></tbody>
            </table>
        </div>
    </div>
</section>

<a href="#top" id="up" aria-label="Back to top">&uarr;</a>
@endsection