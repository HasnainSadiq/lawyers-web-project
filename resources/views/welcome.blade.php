<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ asset('./css/welcomeStyle.css') }}" rel="stylesheet">
    <!-- Styles -->
    <style>
        /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */
        html {
            line-height: 1.15;
            -webkit-text-size-adjust: 100%
        }

        body {
            margin: 0
        }

        a {
            background-color: transparent
        }

        [hidden] {
            display: none
        }

        html {
            font-family: system-ui, -apple-system, BlinkMacSystemFont, Segoe UI, Roboto, Helvetica Neue, Arial, Noto Sans, sans-serif, Apple Color Emoji, Segoe UI Emoji, Segoe UI Symbol, Noto Color Emoji;
            line-height: 1.5
        }

        *,
        :after,
        :before {
            box-sizing: border-box;
            border: 0 solid #e2e8f0
        }

        a {
            color: inherit;
            text-decoration: inherit
        }

        svg,
        video {
            display: block;
            vertical-align: middle
        }

        video {
            max-width: 100%;
            height: auto
        }

        .bg-white {
            --bg-opacity: 1;
            background-color: #fff;
            background-color: rgba(255, 255, 255, var(--bg-opacity))
        }

        .bg-gray-100 {
            --bg-opacity: 1;
            background-color: #f7fafc;
            background-color: rgba(247, 250, 252, var(--bg-opacity))
        }

        .border-gray-200 {
            --border-opacity: 1;
            border-color: #edf2f7;
            border-color: rgba(237, 242, 247, var(--border-opacity))
        }

        .border-t {
            border-top-width: 1px
        }

        .flex {
            display: flex
        }

        .grid {
            display: grid
        }

        .hidden {
            display: none
        }

        .items-center {
            align-items: center
        }

        .justify-center {
            justify-content: center
        }

        .font-semibold {
            font-weight: 600
        }

        .h-5 {
            height: 1.25rem
        }

        .h-8 {
            height: 2rem
        }

        .h-16 {
            height: 4rem
        }

        .text-sm {
            font-size: .875rem
        }

        .text-lg {
            font-size: 1.125rem
        }

        .leading-7 {
            line-height: 1.75rem
        }

        .mx-auto {
            margin-left: auto;
            margin-right: auto
        }

        .ml-1 {
            margin-left: .25rem
        }

        .mt-2 {
            margin-top: .5rem
        }

        .mr-2 {
            margin-right: .5rem
        }

        .ml-2 {
            margin-left: .5rem
        }

        .mt-4 {
            margin-top: 1rem
        }

        .ml-4 {
            margin-left: 1rem
        }

        .mt-8 {
            margin-top: 2rem
        }

        .ml-12 {
            margin-left: 3rem
        }

        .-mt-px {
            margin-top: -1px
        }

        .max-w-6xl {
            max-width: 72rem
        }

        .min-h-screen {
            min-height: 100vh
        }

        .overflow-hidden {
            overflow: hidden
        }

        .p-6 {
            padding: 1.5rem
        }

        .py-4 {
            padding-top: 1rem;
            padding-bottom: 1rem
        }

        .px-6 {
            padding-left: 1.5rem;
            padding-right: 1.5rem
        }

        .pt-8 {
            padding-top: 2rem
        }

        .fixed {
            position: fixed
        }

        .relative {
            position: relative
        }

        .top-0 {
            top: 0
        }

        .right-0 {
            right: 0
        }

        .shadow {
            box-shadow: 0 1px 3px 0 rgba(0, 0, 0, .1), 0 1px 2px 0 rgba(0, 0, 0, .06)
        }

        .text-center {
            text-align: center
        }

        .text-gray-200 {
            --text-opacity: 1;
            color: #edf2f7;
            color: rgba(237, 242, 247, var(--text-opacity))
        }

        .text-gray-300 {
            --text-opacity: 1;
            color: #e2e8f0;
            color: rgba(226, 232, 240, var(--text-opacity))
        }

        .text-gray-400 {
            --text-opacity: 1;
            color: #cbd5e0;
            color: rgba(203, 213, 224, var(--text-opacity))
        }

        .text-gray-500 {
            --text-opacity: 1;
            color: #a0aec0;
            color: rgba(160, 174, 192, var(--text-opacity))
        }

        .text-gray-600 {
            --text-opacity: 1;
            color: #718096;
            color: rgba(113, 128, 150, var(--text-opacity))
        }

        .text-gray-700 {
            --text-opacity: 1;
            color: #4a5568;
            color: rgba(74, 85, 104, var(--text-opacity))
        }

        .text-gray-900 {
            --text-opacity: 1;
            color: #1a202c;
            color: rgba(26, 32, 44, var(--text-opacity))
        }

        .underline {
            text-decoration: underline
        }

        .antialiased {
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale
        }

        .w-5 {
            width: 1.25rem
        }

        .w-8 {
            width: 2rem
        }

        .w-auto {
            width: auto
        }

        .grid-cols-1 {
            grid-template-columns: repeat(1, minmax(0, 1fr))
        }

        @media (min-width:640px) {
            .sm\:rounded-lg {
                border-radius: .5rem
            }

            .sm\:block {
                display: block
            }

            .sm\:items-center {
                align-items: center
            }

            .sm\:justify-start {
                justify-content: flex-start
            }

            .sm\:justify-between {
                justify-content: space-between
            }

            .sm\:h-20 {
                height: 5rem
            }

            .sm\:ml-0 {
                margin-left: 0
            }

            .sm\:px-6 {
                padding-left: 1.5rem;
                padding-right: 1.5rem
            }

            .sm\:pt-0 {
                padding-top: 0
            }

            .sm\:text-left {
                text-align: left
            }

            .sm\:text-right {
                text-align: right
            }
        }

        @media (min-width:768px) {
            .md\:border-t-0 {
                border-top-width: 0
            }

            .md\:border-l {
                border-left-width: 1px
            }

            .md\:grid-cols-2 {
                grid-template-columns: repeat(2, minmax(0, 1fr))
            }
        }

        @media (min-width:1024px) {
            .lg\:px-8 {
                padding-left: 2rem;
                padding-right: 2rem
            }
        }

        @media (prefers-color-scheme:dark) {
            .dark\:bg-gray-800 {
                --bg-opacity: 1;
                background-color: #2d3748;
                background-color: rgba(45, 55, 72, var(--bg-opacity))
            }

            .dark\:bg-gray-900 {
                --bg-opacity: 1;
                background-color: #1a202c;
                background-color: rgba(26, 32, 44, var(--bg-opacity))
            }

            .dark\:border-gray-700 {
                --border-opacity: 1;
                border-color: #4a5568;
                border-color: rgba(74, 85, 104, var(--border-opacity))
            }

            .dark\:text-white {
                --text-opacity: 1;
                color: #fff;
                color: rgba(255, 255, 255, var(--text-opacity))
            }

            .dark\:text-gray-400 {
                --text-opacity: 1;
                color: #cbd5e0;
                color: rgba(203, 213, 224, var(--text-opacity))
            }
        }

    </style>

    <style>
        body {
            font-family: 'Nunito', sans-serif;
        }

    </style>
</head>

<body class="antialiased">
    <div class="top-nav col-12">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Navbar</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Home</a>
                        </li>
                    </ul>
                    {{-- login and register button --}}
                    <div class="sm:items-center py-2 sm:pt-0 ">
                        @if (Route::has('login'))
                            <div class=" px-6 py-2 sm:block">
                                @auth
                                    <a href="{{ url('/dashboard') }}"
                                        class="text-sm btn btn-primary text-gray-700 underline">Dashboard</a>
                                @else
                                    <a href="{{ route('login') }}" class="text-sm text-gray-700 btn btn-primary py-2 ">Log
                                        in</a>

                                    @if (Route::has('register'))
                                        <a href="{{ route('register') }}"
                                            class="ml-4 text-sm text-gray-700 btn btn-primary py-2">Register</a>
                                    @endif
                                @endauth
                            </div>
                        @endif
                    </div>

                </div>
            </div>
        </nav>

    </div>
    <div class="col-sm-12 top-banner text-center py-5 px-5 mx-12">
        <div class="jumbotron">
            <h1 class="display-4">Hello, world!</h1>
            <p class="lead">This is a simple hero unit, a simple jumbotron-style component for calling extra attention
                to featured content or information.</p>
            <hr class="my-4">
            <p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
            <a class="btn btn-primary btn-lg" href="#" role="button">Login As CLIENT</a>
            <a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a>
        </div>
    </div>

    <!-- Path section start -->
    <section class="container service col-12">
        <div class="service-section-header text-center">
            <div class="container">
                <h2>Services that you want</h2>
                <div class="col-sm-12 col-md-6 col-lg-6 offset-md-3 offset-lg-3">
                    <p>Are you looking to post your Legal Question? Now it's very simple, just post your
                        question and get immediate advice from experienced and best Askwakeel Lawyers in your
                        area</p>
                </div>
            </div>
        </div>
        <div class="service-container col-12">
            {{-- 1 service for row 1 start --}}
            <div class="row first">  
                <div class="col-xs-12 col-sm-12 col-lg-3 py-2">
                    <div class="card">
                        <img src="{{ asset('../images/cat/legal_notices.svg') }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Legal Notice</h5>
                            <p class="card-text">A Legal Notice is a formal written communication between the
                                parties.</p>
                            <a href="#" class="btn btn-primary">Learn More </a>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-lg-3 py-2">
                    <div class="card">
                        <img src="{{ asset('../images/cat/civil_matter.svg') }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Civil Matter</h5>
                            <p class="card-text">Civil law, or civilian law, also known as private law, regulates disputes between private persons or corporate entities</p>
                            <a href="#" class="btn btn-primary">Learn More </a>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-lg-3 py-2">
                    <div class="card">
                        <img src="{{ asset('../images/cat/company_reg.svg') }}" class="card-img-top rounded-lg" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Company Matter </h5>
                            <p class="card-text">There are a lot of reasons to register company in Pakistan and one big reson is to invest in Pakistan. </p>
                            <a href="#" class="btn btn-primary">Learn More </a>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-lg-3 py-2">
                    <div class="card">
                        <img src="{{ asset('../images/cat/criminal_matter.svg') }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Criminal Matter </h5>
                            <p class="card-text">All areas of criminal litigation and our major services in criminal cases are such as:</p>
                            <a href="#" class="btn btn-primary">Learn More </a>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-lg-3 py-2">
                    <div class="card">
                        <img src="{{ asset('../images/cat/divorce.svg') }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Divorce Matter </h5>
                            <p class="card-text">Dissolutions of Marriage can be done by way of Talaq or Khula.</p>
                            <a href="#" class="btn btn-primary">Learn More </a>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-lg-3 py-2">
                    <div class="card">
                        <img src="{{ asset('../images/cat/family_matter.svg') }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Family Matter</h5>
                            <p class="card-text">Family law is the area of law that deals with marriage, divorce, Khula, custody of minors, child maintenance and schedule meeting with minors as well as many other disputes that come up when you get married, have children, and get divorced per chance.</p>
                            <a href="#" class="btn btn-primary">Learn More </a>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-lg-3 py-2">
                    <div class="card">
                        <img src="{{ asset('../images/cat/immigration.svg') }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Immigration</h5>
                            <p class="card-text">A Legal Notice is a formal written communication between the
                                parties.</p>
                            <a href="#" class="btn btn-primary">Learn More </a>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-lg-3 py-2">
                    <div class="card">
                        <img src="{{ asset('../images/cat/mediation.svg') }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Mediation</h5>
                            <p class="card-text">A Learn More is a formal written communication between the
                                parties.</p>
                            <a href="#" class="btn btn-primary">Learn More </a>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-lg-3 py-2">
                    <div class="card">
                        <img src="{{ asset('../images/cat/recovery_matter.svg') }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Recovery Matter</h5>
                            <p class="card-text">A Learn More is a formal written communication between the
                                parties.</p>
                            <a href="#" class="btn btn-primary">Learn More </a>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-lg-3 py-2">
                    <div class="card">
                        <img src="{{ asset('../images/cat/service_matter.svg') }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Service Matter</h5>
                            <p class="card-text">A Learn More is a formal written communication between the
                                parties.</p>
                            <a href="#" class="btn btn-primary">Learn More </a>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-lg-3 py-2">
                    <div class="card">
                        <img src="{{ asset('../images/cat/tax_filling.svg') }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Tax Filling</h5>
                            <p class="card-text">A Learn More is a formal written communication between the
                                parties.</p>
                            <a href="#" class="btn btn-primary">Learn More </a>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-lg-3 py-2">
                    <div class="card">
                        <img src="{{ asset('../images/cat/trade_mark.svg') }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Trade Mark</h5>
                            <p class="card-text">A Learn More is a formal written communication between the
                                parties.</p>
                            <a href="#" class="btn btn-primary">Learn More </a>
                        </div>
                    </div>
                </div>
            </div>
            {{-- 1 service for row 1 end --}}
         
            {{-- section for lawyer start--}}
                <div class="container col-12">
                    <section class="heading col-12 text-center">
                        <h2 class="top-lawyer">PakLawyerPK Lawyers</h2>
                        <p>PakLawyerPK Experts adhere to high standards of professionalism and conduct. Each of our Expert is a lawyer verified by Bar Council and expert in his/her respective field.</p>
                    </section> <hr>
                    <div class="container col-10">
                        
                    </div>
                </div>
            {{-- section for lawyer start--}}

        </div>
    </section>

    {{-- compile js, bootstrap, propoer --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>
