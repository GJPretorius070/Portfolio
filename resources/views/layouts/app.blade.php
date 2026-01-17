<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GJ Pretorius - Full Stack Engineer & Automation Specialist</title>
    <meta name="description" content="Portfolio of GJ Pretorius, a Full Stack Engineer and Automation Specialist expert in Laravel, ASP.NET Core, and N8N workflows.">
    <meta name="keywords" content="Full Stack Developer, Laravel, ASP.NET Core, Automation, N8N, Vue.js, React, PHP, C#">
    <meta name="author" content="GJ Pretorius">

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ url('/') }}">
    <meta property="og:title" content="GJ Pretorius - Full Stack Engineer & Automation Specialist">
    <meta property="og:description" content="Innovative Full Stack Engineer specializing in MVC Architecture, Mobile-First Development, and Automation.">
    <meta property="og:image" content="{{ asset('images/og-image.jpg') }}">

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="{{ url('/') }}">
    <meta property="twitter:title" content="GJ Pretorius - Full Stack Engineer & Automation Specialist">
    <meta property="twitter:description" content="Innovative Full Stack Engineer specializing in MVC Architecture, Mobile-First Development, and Automation.">
    <meta property="twitter:image" content="{{ asset('images/og-image.jpg') }}">

    <!-- JSON-LD Structured Data -->
    <script type="application/ld+json">
    {
        "@@context": "https://schema.org",
        "@@type": "Person",
        "name": "GJ Pretorius",
        "jobTitle": "Full Stack Engineer & Automation Specialist",
        "url": "{{ url('/') }}",
        "sameAs": [
            "https://www.linkedin.com/in/gj-pretorius-243957275"
        ],
        "knowsAbout": ["Laravel", "ASP.NET Core", "N8N", "Automation", "Web Development", "Mobile Development"]
    }
    </script>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <style>
        :root {
            --bg-color: #0a0a0a;
            --text-color: #f0f0f0;
            --accent-color: #00ff88;
            --secondary-color: #1a1a1a;
            --card-bg: #111;
        }
        body {
            background-color: var(--bg-color);
            color: var(--text-color);
            font-family: 'Outfit', sans-serif;
            margin: 0;
            padding: 0;
            line-height: 1.6;
        }
    </style>
</head>
<body>
    @yield('content')
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
