@extends('layouts.app')

@section('content')
    <!-- Hero Section -->
    <header class="hero">
        <div class="container">
            <h1 class="glitch" data-text="{{ $portfolio['personal']['name'] }}">{{ $portfolio['personal']['name'] }}</h1>
            <h2 class="subtitle">{{ $portfolio['personal']['title'] }}</h2>
            <p class="bio">{{ $portfolio['personal']['bio'] }}</p>
            <div class="cta-group">
                <a href="#contact" class="btn btn-primary" aria-label="Contact GJ Pretorius">Get in Touch</a>
                <a href="#experience" class="btn btn-outline" aria-label="View Professional Experience">View Experience</a>
            </div>
        </div>
    </header>

    <!-- Experience Section -->
    <section id="experience" class="section reveal">
        <div class="container">
            <h2 class="section-title">Experience</h2>
            <div class="timeline">
                @foreach($portfolio['experience'] as $job)
                    <div class="timeline-item reveal">
                        <div class="timeline-marker"></div>
                        <div class="timeline-content">
                            <h3 class="role">{{ $job['role'] }}</h3>
                            <h4 class="company">{{ $job['company'] }} <span class="period">{{ $job['period'] }}</span></h4>
                            <ul class="job-details">
                                @foreach($job['details'] as $detail)
                                    <li>{{ $detail }}</li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Education Section -->
    <section id="education" class="section">
        <div class="container">
            <h2 class="section-title">Education</h2>
            <div class="grid education-grid">
                @foreach($portfolio['education'] as $edu)
                    <div class="card">
                        <h3 class="card-title">{{ $edu['qualification'] }}</h3>
                        <h4 class="card-subtitle">{{ $edu['institution'] }}</h4>
                        <span class="date">{{ $edu['date'] }}</span>
                        <div class="tags">
                            @foreach($edu['subjects'] as $subject)
                                <span class="tag">{{ $subject }}</span>
                            @endforeach
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Skills Section -->
    <section id="skills" class="section">
        <div class="container">
            <h2 class="section-title">Skills</h2>
            <div class="grid skills-grid">
                @foreach($portfolio['skills'] as $category => $skills)
                    <div class="card">
                        <h3 class="card-title">{{ $category }}</h3>
                        <div class="tags">
                            @foreach($skills as $skill)
                                <span class="tag">{{ $skill }}</span>
                            @endforeach
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="section">
        <div class="container">
            <h2 class="section-title">Contact</h2>
            <div class="contact-card">
                <p><strong>Email:</strong> <a href="mailto:{{ $portfolio['personal']['email'] }}">{{ $portfolio['personal']['email'] }}</a></p>
                <p><strong>Phone:</strong> {{ $portfolio['personal']['phone'] }}</p>
                <p><strong>LinkedIn:</strong> <a href="{{ $portfolio['personal']['linkedin'] }}" target="_blank" rel="noopener noreferrer" aria-label="Visit LinkedIn Profile">View Profile</a></p>
                <p><strong>Location:</strong> {{ $portfolio['personal']['location'] }}</p>
            </div>
        </div>
    </section>

    <footer class="footer">
        <div class="container">
            <p>&copy; {{ date('Y') }} {{ $portfolio['personal']['name'] }}. All rights reserved.</p>
        </div>
    </footer>
@endsection
