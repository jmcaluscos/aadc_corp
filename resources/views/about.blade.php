@extends('layouts.default')

@section('title')
<title>A&DC Construction Corp. | About</title>
@endsection

@section('content')
<section class="pagehead">
    <div class="wrap">
        <div class="eyebrow">A&amp;DC Construction Corporation</div>
        <h1>About Us</h1>
    </div>
</section>

<section>
    <div class="wrap">
        <div class="story">
            <div class="logobox" role="img" aria-label="A&amp;DC logo"></div>
            <div>
                <div class="script">Our Story</div>
                <h2 style="font-size:32px;margin-bottom:18px">Your Trusted Builder</h2>
                <p>A&amp;DC Construction Corporation is a Filipino-owned and managed corporation established in
                    2022, specializing in Design and Engineering Construction. As a general contractor, we have the
                    skills, resources and partnerships to provide value-added construction services while building
                    lasting partnerships with our customers throughout the construction process.</p>
                <p>Our logo is derived from the name of our owner, who worked as a construction worker for many
                    years and dreamed of having his own company. The gold and the building symbolize our goal: to
                    build your dreams, exceeding your expectations with exceptional quality and pride.</p>
            </div>
        </div>


    </div>
</section>
<section>
    <div class="wrap">
        <div class="head">
            <div class="eyebrow">Our Commitments</div>
            <h2>Vision, Mission &amp; Values</h2>
        </div>
        <div class="tabs"><button class="on" data-t="0">Vision</button><button data-t="1">Mission</button><button
                data-t="2">Values</button></div>
        <div class="panel on">
            <p>To provide a reliable and efficient service to our clients on every project.</p>
            <p>To be a leading construction company in the global market.</p>
            <p>To become the customer’s most choice by attaining excellence in quality and timely completed
                value-added projects.</p>
        </div>
        <div class="panel">
            <p>Dedicated to providing quality construction, technical and management services to our valued
                customers.</p>
            <p>We strive to build long-term relationships with our clients based on safety, quality, timely service
                and an anticipation of their needs.</p>
            <p>We will treat all employees fairly and involve them in the quality improvement process to ensure
                responsiveness and cost-effective work execution.</p>
        </div>
        <div class="panel">
            <p>We value excellence, trust, respect, empowerment, accountability and mutual relationship.</p>
            <p>We maintain the highest level of professionalism, integrity, honesty and fairness in our
                relationships with suppliers, subcontractors and clients.</p>
        </div>
    </div>
</section>
<section class="alt">
    <div class="wrap">
        <div class="safety">
            <div>
                <div class="eyebrow">Health &amp; Safety</div>
                <h2 style="font-size:32px;margin:8px 0 18px">A safe workplace, every day</h2>
                <p><b>Company’s responsibility.</b> A&amp;DC shall provide and maintain a working environment that
                    is safe and without risk to the health and safety of its employees and assets.</p>
                <p><b>Employee’s responsibility.</b> Every employee shall comply with all relevant legislation,
                    instructions, rules and procedures, and share responsibility for everyone’s safety while using
                    equipment properly.</p>
            </div>
            <div class="card">
                <h3>We are committed to:</h3>
                <ul>
                    <li>Protect our own health and safety</li>
                    <li>Protect the health and safety of others</li>
                    <li>Care for and correctly use personal protective equipment</li>
                    <li>Promptly report any risk to any person</li>
                    <li>Co-operate to ensure compliance with duties</li>
                    <li>Comply with prescribed safety measures</li>
                    <li>Maintain mental health and a positive attitude</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<a href="#top" id="up" aria-label="Back to top">&uarr;</a>
@endsection
