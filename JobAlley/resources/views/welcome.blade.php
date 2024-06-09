<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>JobAlley</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Font awesome icon -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-Kw/U5YH5Q5wz0d6PTzQUPsJ+DuNhZVJO0rmOzYkMq+AYOimtSxIEtHrfP0OwCvk5gjBx2w61FxoO8Q0ICzG14A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

        <!-- Styles -->
        <style>
            /* ! tailwindcss v3.2.4 | MIT License | https://tailwindcss.com */*,::after,::before{box-sizing:border-box;border-width:0;border-style:solid;border-color:#e5e7eb}::after,::before{--tw-content:''}html{line-height:1.5;-webkit-text-size-adjust:100%;-moz-tab-size:4;tab-size:4;font-family:Figtree, sans-serif;font-feature-settings:normal}body{margin:0;line-height:inherit}hr{height:0;color:inherit;border-top-width:1px}abbr:where([title]){-webkit-text-decoration:underline dotted;text-decoration:underline dotted}h1,h2,h3,h4,h5,h6{font-size:inherit;font-weight:inherit}a{color:inherit;text-decoration:inherit}b,strong{font-weight:bolder}code,kbd,pre,samp{font-family:ui-monospace, SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;font-size:1em}small{font-size:80%}sub,sup{font-size:75%;line-height:0;position:relative;vertical-align:baseline}sub{bottom:-.25em}sup{top:-.5em}table{text-indent:0;border-color:inherit;border-collapse:collapse}button,input,optgroup,select,textarea{font-family:inherit;font-size:100%;font-weight:inherit;line-height:inherit;color:inherit;margin:0;padding:0}button,select{text-transform:none}[type=button],[type=reset],[type=submit],button{-webkit-appearance:button;background-color:transparent;background-image:none}:-moz-focusring{outline:auto}:-moz-ui-invalid{box-shadow:none}progress{vertical-align:baseline}::-webkit-inner-spin-button,::-webkit-outer-spin-button{height:auto}[type=search]{-webkit-appearance:textfield;outline-offset:-2px}::-webkit-search-decoration{-webkit-appearance:none}::-webkit-file-upload-button{-webkit-appearance:button;font:inherit}summary{display:list-item}blockquote,dd,dl,figure,h1,h2,h3,h4,h5,h6,hr,p,pre{margin:0}fieldset{margin:0;padding:0}legend{padding:0}menu,ol,ul{list-style:none;margin:0;padding:0}textarea{resize:vertical}input::placeholder,textarea::placeholder{opacity:1;color:#9ca3af}[role=button],button{cursor:pointer}:disabled{cursor:default}audio,canvas,embed,iframe,img,object,svg,video{display:block;vertical-align:middle}img,video{max-width:100%;height:auto}[hidden]{display:none}*, ::before, ::after{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }::-webkit-backdrop{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }::backdrop{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }.relative{position:relative}.mx-auto{margin-left:auto;margin-right:auto}.mx-6{margin-left:1.5rem;margin-right:1.5rem}.ml-4{margin-left:1rem}.mt-16{margin-top:4rem}.mt-6{margin-top:1.5rem}.mt-4{margin-top:1rem}.-mt-px{margin-top:-1px}.mr-1{margin-right:0.25rem}.flex{display:flex}.inline-flex{display:inline-flex}.grid{display:grid}.h-16{height:4rem}.h-7{height:1.75rem}.h-6{height:1.5rem}.h-5{height:1.25rem}.min-h-screen{min-height:100vh}.w-auto{width:auto}.w-16{width:4rem}.w-7{width:1.75rem}.w-6{width:1.5rem}.w-5{width:1.25rem}.max-w-7xl{max-width:80rem}.shrink-0{flex-shrink:0}.scale-100{--tw-scale-x:1;--tw-scale-y:1;transform:translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))}.grid-cols-1{grid-template-columns:repeat(1, minmax(0, 1fr))}.items-center{align-items:center}.justify-center{justify-content:center}.gap-6{gap:1.5rem}.gap-4{gap:1rem}.self-center{align-self:center}.rounded-lg{border-radius:0.5rem}.rounded-full{border-radius:9999px}.bg-gray-100{--tw-bg-opacity:1;background-color:rgb(243 244 246 / var(--tw-bg-opacity))}.bg-white{--tw-bg-opacity:1;background-color:rgb(255 255 255 / var(--tw-bg-opacity))}.bg-red-50{--tw-bg-opacity:1;background-color:rgb(254 242 242 / var(--tw-bg-opacity))}.bg-dots-darker{background-image:url("data:image/svg+xml,%3Csvg width='30' height='30' viewBox='0 0 30 30' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M1.22676 0C1.91374 0 2.45351 0.539773 2.45351 1.22676C2.45351 1.91374 1.91374 2.45351 1.22676 2.45351C0.539773 2.45351 0 1.91374 0 1.22676C0 0.539773 0.539773 0 1.22676 0Z' fill='rgba(0,0,0,0.07)'/%3E%3C/svg%3E")}.from-gray-700\/50{--tw-gradient-from:rgb(55 65 81 / 0.5);--tw-gradient-to:rgb(55 65 81 / 0);--tw-gradient-stops:var(--tw-gradient-from), var(--tw-gradient-to)}.via-transparent{--tw-gradient-to:rgb(0 0 0 / 0);--tw-gradient-stops:var(--tw-gradient-from), transparent, var(--tw-gradient-to)}.bg-center{background-position:center}.stroke-red-500{stroke:#ef4444}.stroke-gray-400{stroke:#9ca3af}.p-6{padding:1.5rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.text-center{text-align:center}.text-right{text-align:right}.text-xl{font-size:1.25rem;line-height:1.75rem}.text-sm{font-size:0.875rem;line-height:1.25rem}.font-semibold{font-weight:600}.leading-relaxed{line-height:1.625}.text-gray-600{--tw-text-opacity:1;color:rgb(75 85 99 / var(--tw-text-opacity))}.text-gray-900{--tw-text-opacity:1;color:rgb(17 24 39 / var(--tw-text-opacity))}.text-gray-500{--tw-text-opacity:1;color:rgb(107 114 128 / var(--tw-text-opacity))}.underline{-webkit-text-decoration-line:underline;text-decoration-line:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.shadow-2xl{--tw-shadow:0 25px 50px -12px rgb(0 0 0 / 0.25);--tw-shadow-colored:0 25px 50px -12px var(--tw-shadow-color);box-shadow:var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)}.shadow-gray-500\/20{--tw-shadow-color:rgb(107 114 128 / 0.2);--tw-shadow:var(--tw-shadow-colored)}.transition-all{transition-property:all;transition-timing-function:cubic-bezier(0.4, 0, 0.2, 1);transition-duration:150ms}.selection\:bg-red-500 *::selection{--tw-bg-opacity:1;background-color:rgb(239 68 68 / var(--tw-bg-opacity))}.selection\:text-white *::selection{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.selection\:bg-red-500::selection{--tw-bg-opacity:1;background-color:rgb(239 68 68 / var(--tw-bg-opacity))}.selection\:text-white::selection{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.hover\:text-gray-900:hover{--tw-text-opacity:1;color:rgb(17 24 39 / var(--tw-text-opacity))}.hover\:text-gray-700:hover{--tw-text-opacity:1;color:rgb(55 65 81 / var(--tw-text-opacity))}.focus\:rounded-sm:focus{border-radius:0.125rem}.focus\:outline:focus{outline-style:solid}.focus\:outline-2:focus{outline-width:2px}.focus\:outline-red-500:focus{outline-color:#ef4444}.group:hover .group-hover\:stroke-gray-600{stroke:#4b5563}.z-10{z-index: 10}@media (prefers-reduced-motion: no-preference){.motion-safe\:hover\:scale-\[1\.01\]:hover{--tw-scale-x:1.01;--tw-scale-y:1.01;transform:translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))}}@media (prefers-color-scheme: dark){.dark\:bg-gray-900{--tw-bg-opacity:1;background-color:rgb(17 24 39 / var(--tw-bg-opacity))}.dark\:bg-gray-800\/50{background-color:rgb(31 41 55 / 0.5)}.dark\:bg-red-800\/20{background-color:rgb(153 27 27 / 0.2)}.dark\:bg-dots-lighter{background-image:url("data:image/svg+xml,%3Csvg width='30' height='30' viewBox='0 0 30 30' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M1.22676 0C1.91374 0 2.45351 0.539773 2.45351 1.22676C2.45351 1.91374 1.91374 2.45351 1.22676 2.45351C0.539773 2.45351 0 1.91374 0 1.22676C0 0.539773 0.539773 0 1.22676 0Z' fill='rgba(255,255,255,0.07)'/%3E%3C/svg%3E")}.dark\:bg-gradient-to-bl{background-image:linear-gradient(to bottom left, var(--tw-gradient-stops))}.dark\:stroke-gray-600{stroke:#4b5563}.dark\:text-gray-400{--tw-text-opacity:1;color:rgb(156 163 175 / var(--tw-text-opacity))}.dark\:text-white{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.dark\:shadow-none{--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;box-shadow:var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)}.dark\:ring-1{--tw-ring-offset-shadow:var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);--tw-ring-shadow:var(--tw-ring-inset) 0 0 0 calc(1px + var(--tw-ring-offset-width)) var(--tw-ring-color);box-shadow:var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000)}.dark\:ring-inset{--tw-ring-inset:inset}.dark\:ring-white\/5{--tw-ring-color:rgb(255 255 255 / 0.05)}.dark\:hover\:text-white:hover{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.group:hover .dark\:group-hover\:stroke-gray-400{stroke:#9ca3af}}@media (min-width: 640px){.sm\:fixed{position:fixed}.sm\:top-0{top:0px}.sm\:right-0{right:0px}.sm\:ml-0{margin-left:0px}.sm\:flex{display:flex}.sm\:items-center{align-items:center}.sm\:justify-center{justify-content:center}.sm\:justify-between{justify-content:space-between}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width: 768px){.md\:grid-cols-2{grid-template-columns:repeat(2, minmax(0, 1fr))}}@media (min-width: 1024px){.lg\:gap-8{gap:2rem}.lg\:p-8{padding:2rem}}
            
        </style>

        <!-- CDN Bootstrap 4 -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>

        

        
        <style>
            html {
                scroll-behavior: smooth;
            }
            body {
                font-family: Figtree, sans-serif;
            }
            .jumbotron {
                background-color: #CCCCFF;
                color: #fff;
            }
            .navbar-toggler {
                background-color: #CCCCFF;
            }
            .nav-item {
                padding: 0 5px;
            }
            .nav-item:hover {
                background-color: #D3D3D3;
                border-radius: 5px;
            }

            /* Chatbot */
            .chatbot-toggler {
                position: fixed;
                right: 40px;
                bottom: 50px;
                height: 60px;
                width: 60px;
                color: #fff;
                border: 1px solid #fff;
                outline: none;
                background: linear-gradient(135deg, #614385, #516395);
                border-radius: 50%;
                box-shadow: 0 5px 10px rgba(0, 0, 0, 0.1);
                z-index: 200;
                cursor: pointer;
                display: flex;
                align-items: center;
                justify-content: center;
                transition: all 0.5s ease;
            }

            .chatbot-toggler:hover {
                box-shadow: 0 0 10px #40e0d0, 0 0 40px #40e0d0, 0 0 80px #40e0d0;
            }

            .show-chatbot .chatbot-toggler {
                transform: rotate(90deg);
            }

            .chatbot-toggler span {
                position: absolute;
                font-size: 24px;
            }

            .show-chatbot .chatbot-toggler span:first-child,
            .chatbot-toggler span:last-child {
                opacity: 0;
            }

            .show-chatbot .chatbot-toggler span:last-child {
                opacity: 1;
            }

            .chatbot {
                position: fixed;
                right: 40px;
                bottom: 120px;
                width: 420px;
                background: #fff;
                border-radius: 15px;
                box-shadow: 0 5px 10px rgba(0, 0, 0, 0.1);
                z-index: 200;
                transform: scale(0.5);
                opacity: 0;
                pointer-events: none;
                transform-origin: bottom right;
                transition: all 0.1s ease;
            }

            /* Open chatbot feature when chatbot-toggler is checked */
            .show-chatbot .chatbot {
                transform: scale(1);
                opacity: 1;
                pointer-events: auto;
            }

            .chatbot h2 {
                background: linear-gradient(135deg, #614385, #516395);
                padding: 16px 0;
                text-align: center;
                border-radius: 15px;
                color: #fff;
                font-size: 1.4rem;
            }

            .chatbot .chatbox {
                height: 300px;
                overflow-y: auto; /* enable vertical scroll if conversation messages need more than height*/
                padding: 15px 20px 80px;
            }

            .chatbot .chat {
                display: flex;
                margin-bottom: 15px;
            }

            .chatbox .chat p {
                max-width: 75%;
                color: #fff;
                white-space: pre-wrap;
                font-size: 0.95rem;
                padding: 12px 16px;
                border-radius: 10px 10px 0 10px;
                background: #516395;
            }

            .chatbox .incoming p {
                color: #000;
                background-color: #f2f2f2;
                border-radius: 0 10px 10px 10px;
            }

            .chatbox .incoming span {
                height: 30px;
                width: 30px;
            }

            .chatbox .outgoing {
                justify-content: flex-end;
            }

            .chatbot .chat-input {
                position: absolute;
                bottom: 0;
                width: 100%;
                background: #fff;
                padding: 5px 20px;
                border-top: 1px solid #ccc;
                border-radius: 15px;
                display: flex;
                gap: 5px;
                align-items: center;
            }

            .chat-input textarea {
                height: 55px;
                width: 100%;
                border: none;
                outline: none;
                max-height: 180px;
                font-size: 0.95rem;
                resize: none;
                padding: 16px 15px 16px 0;
            }

            .chat-input .send-btn {
                align-items: center;
                font-size: 24px;
            }

            .chat-input .send-btn:hover {
                color: #516395;
                cursor: pointer;
            }

            @media(max-width: 490px) {
                .chatbot {
                    position: fixed;
                    right: 0;
                    bottom: 120px;
                    width: 100%;
                }
            }
        </style>

    </head>

    <body>

        <nav class="navbar navbar-expand-sm bg-white navbar-dark fixed-top">
        <div class="container">
            
            
            <a class="navbar-brand mt-0 font-weight-bold text-dark" href="/">JobAlley</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            
            <div class="collapse navbar-collapse" id="collapsibleNavbar">
                <ul class="navbar-nav px-4">
                
                    <li class=" nav-item">
                        <a href="#jobs" class="nav-link font-weight-semibold text-dark">Explore Jobs</a>
                    </li>
                    <li class=" nav-item">
                        <a href="#about" class=" nav-link font-weight-semibold text-dark">About Us</a>
                    </li>
                    <li class=" nav-item">
                        <a href="#contact" class="nav-link font-weight-semibold text-dark">Contact Us</a>
                    </li>
                        
                </ul>
            </div>
            @if (Route::has('login'))
            <ul class="nav navbar-nav navbar-right pt-2 pb-2 space-y-1 ml-auto">
                    @auth
                        <a href="{{ url('/home') }}" class="font-semibold text-blue-950 hover:text-gray-900 dark:text-blue-950 dark:hover:text-dark focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Dashboard</a>
                    @else

                    <li>
                        <a href="{{ route('login') }}" class="ml-4 font-semibold text-blue-950 hover:text-gray-900 dark:text-blue-950 dark:hover:text-dark focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">
                           Log In</a>
                    </li>

                        @if (Route::has('register'))
                        <li>
                            <a href="{{ route('register') }}" class="ml-4 font-semibold text-blue-950 hover:text-gray-900 dark:text-blue-950 dark:hover:text-dark focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">
                                   Register</a>
                        </li>
                        @endif
                    @endauth
            </ul>
            @endif
            

        </div>
        </nav>
        
        <div class="jumbotron text-center py-5" style="margin-top:60px;">
            <h1 class="display-4 mb-4">JobAlley</h1>
            <p>Find your perfect job with one click</p>
          
        </div>

        <div class="container">
            <div class="row">
                <div class="col-sm-5">
                    <h1>Find jobs that are in demand!</h1>
                    <h5>All with one click!</h5>
                    
                </div>
                <div class="col-sm-7">
                    <img class="img-fluid" src="https://img.freepik.com/free-vector/flat-employment-agency-search-new-employees-hire_88138-802.jpg" alt="job seaarch">
                </div>
                
            </div>

        </div>

        <!-- Chatbot -->
        <div>
            <button class="chatbot-toggler">
                <span><i class="fa-solid fa-robot"></i></span>
                <span><i class="fa-solid fa-xmark"></i></span>
            </button>
        
            <div class="chatbot">
                <!-- Title -->
                <h2>Chatbot</h2>
        
                <!-- Chat conversation -->
                <ul class="chatbox">
                    <li class="chat incoming">
                        <span><i class="fa-solid fa-robot"></i></span>
                        <p>Hi there 😊<br>How can I help you today?</p>
                    </li>
                    <!--<li class="chat outgoing">
                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit.</p>
                    </li>-->
                </ul>
        
                <!-- Chat input field -->
                <div class="chat-input">
                    <textarea id="input-field" placeholder="Enter a message" required></textarea>
                    <span class="send-btn" id="send-btn"><i class="fa-regular fa-paper-plane"></i></span>
                </div>
            </div>
        </div>

        <!-- Job search feature intro section -->
        <section class="head pb-5" id="jobs">
            <div class="container py-5"> 
                <h1 class="font-weight-light text-center py-3">Explore Jobs</h1>
                <div class="row d-flex">
                    <!-- Intro 1 -->
                    <div class="col-md-4 d-flex align-items-stretch">
                        <div class="card mb-4 box-shadow">
                            <div class="card-body">
                                <h5 class="card-title">Search for jobs</h5>
                                <p class="card-text">Find the perfect match for your skills and expertise effortlessly.</p>
                            </div>
                        </div>
                    </div>
                    <!-- Intro 2 -->
                    <div class="col-md-4 d-flex align-items-stretch">
                        <div class="card mb-4 box-shadow">
                            <div class="card-body">
                                <h5 class="card-title">View job details</h5>
                                <p class="card-text">Dive deep into job descriptions to make informed decisions about your next career move.</p>
                            </div>
                        </div>
                    </div>
                    <!-- Intro 3 -->
                    <div class="col-md-4 d-flex align-items-stretch">
                        <div class="card mb-4 box-shadow">
                            <div class="card-body">
                                <h5 class="card-title">Apply and submit job application</h5>
                                <p class="card-text">Streamline your application process and connect with potential employers seamlessly.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="d-flex justify-content-end align-items-center">
                    <div class="btn-group" id="more-jobs-button">
                        <a href="{{ route('jobsearch') }}" class="btn btn-sm btn-outline-primary">More Jobs &nbsp; &rarr;</a>
                    </div>
                </div>
            </div>
        </section>

        <!-- About section--->
        <section class="head pb-5" id="about">
            <div class="container py-5"> 
                <div class="card">
                    <div class="card-body">
                        <h1 class="font-weight-light text-center py-3">About Us</h1>
                        <hr>

                        <h2>Our Mission</h2>
                        <p>Our mission is to create a dynamic and user-friendly job portal that bridges the gap between job seekers and employers. We strive to provide a comprehensive platform that offers seamless job searching, application, and recruitment processes, while ensuring user engagement and support through innovative features and personalized experiences.</p>

                        <h2>Our Vision</h2>
                        <p>Our vision is to be the leading job portal that empowers job seekers to find their dream jobs and enables employers to discover top talent effortlessly. We aim to continuously innovate and enhance our platform to support the evolving needs of the job market, fostering a community where career opportunities and professional growth are accessible to everyone.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Contact and feedback section--->
        <section class="head pb-5" id="contact">
            <div class="container py-5"> 
                <div class="card">
                    <div class="card-body">
                        <h1 class="font-weight-light text-center py-3">Contact Us</h1>
                        <div class="row">

                            <!-- Contact info -->
                            <div class="col-lg-6 col-md-12 col-sm-12 col-12">
                                <div class="row pt-3">
                                    <div class="col-lg-1 offset-1 col-md-2 col-sm-2 col-2">
                                        <span>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="40" height="35" fill="currentColor" class="bi bi-geo-alt-fill" viewBox="0 0 16 16">
                                                <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10m0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6"/>
                                            </svg>
                                        </span>
                                    </div>
                                    <div class="col-lg-10 col-md-9 col-sm-9">
                                        <h3> Find us at our office </h3>
                                        <p>Lot 147, Beach Street,<br> 
                                        Ampang,  Selangor, <br>
                                        Malaysia</p>
                                    </div>
                                </div>
                                <div class="row pt-3">
                                    <div class="col-lg-1 offset-1 col-md-2 col-sm-2 col-2">
                                        <span>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="40" height="35" fill="currentColor" class="bi bi-telephone-fill" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.68.68 0 0 0 .178.643l2.457 2.457a.68.68 0 0 0 .644.178l2.189-.547a1.75 1.75 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.6 18.6 0 0 1-7.01-4.42 18.6 18.6 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877z"/>
</svg>
                                        </span>
                                    </div>
                                    <div class="col-lg-10 col-md-9 col-sm-9">
                                        <h3> Give us a call </h3>
                                        <p>Mr. Gojo Satoru <br> 
                                        +60 4 587 3641 , <br>
                                        Mon - Fri || 8:00 am - 6:00 pm</p>
                                    </div>
                                </div>
                            </div>

                            <!-- Feedback form -->
                            <div class="col-lg-6 col-md-12 col-sm-12 col-12">
                                <form action="https://api.web3forms.com/submit" method="POST">
                                    <input type="hidden" name="access_key" value="{{ env('WEB3FORMS_API_KEY') }}">

                                    <label>Name</label>
                                    <input type="text" class="form-control mb-2" name="name" placeholder="Name" required>

                                    <label>Email</label>
                                    <input type="email" class="form-control mb-2" name="email" placeholder="Email" required>

                                    <label>Your Message</label>
                                    <textarea class="form-control mb-2" name="message" placeholder="Message" cols="10" rows="5" required></textarea>

                                    <div class="p-2 w-full">
                                        <button type="submit" class="btn btn-primary float-right">Send</button>
                                    </div>
                        
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>



        <!--footer--->
        
        <footer class="bg-body-tertiary text-center text-lg-start mb-0">
        <!-- Copyright -->
        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.05);">
            © 2024 Copyright
            <a class="text-body" href="#">JobAlley.com</a>
        </div>
        <!-- Copyright -->
        </footer>

        <!-- Script (font awesome) -->
        <script src="https://kit.fontawesome.com/dd36547fc8.js" crossorigin="anonymous"></script>

        <!-- Script (chatbot) -->
        <script>
            const chatInput = document.querySelector(".chat-input textarea");
            const sendChatBtn = document.querySelector(".chat-input span");
            const chatbox = document.querySelector(".chatbox");
            const chatbotToggler = document.querySelector(".chatbot-toggler");

            let userMessage;
            const inputInitHeight = chatInput.scrollHeight;

            // API key
            let API_KEY_CHATBOT = "{{ env('OPENAI_API_KEY') }}";

            // Create a chat <li> element with passed message and className to show conversation messages
            const createChatLi = (message, className) => {
                const chatLi = document.createElement("li");
                chatLi.classList.add("chat", className);
                let chatContent = className === "outgoing" ? `<p></p>` : `<span><i class="fa-solid fa-robot"></i></span><p></p>`
                chatLi.innerHTML = chatContent;
                chatLi.querySelector("p").textContent = message;
                return chatLi;
            }

            const generateResponse = (incomingChatLi) => {
                const API_URL = "https://api.openai.com/v1/chat/completions";
                const messageElement = incomingChatLi.querySelector("p");

                const requestOptions = {
                    method: "POST",
                    headers: {
                        "Content-Type": "application/json",
                        "Authorization": `Bearer ${API_KEY_CHATBOT}`
                    },
                    body: JSON.stringify({
                        model: "gpt-3.5-turbo",
                        messages: [{role: "user", content: userMessage}]
                    })
                }

                // Send POST request to API, and get response
                fetch(API_URL, requestOptions).then(res => res.json()).then(data => {
                    // Log the json data from api in console for debugging purpose
                    console.log(data);

                    // Display the bot response as incoming message
                    messageElement.textContent = data.choices[0].message.content;

                }).catch((error) => {
                    console.log(error);
                    messageElement.textContent = "Oops! Something went wrong. Please try again.";
                
                });
            }

            // Handle when user send a message in the chatbot feature
            const handleChat = () => {
                userMessage = chatInput.value.trim();
                console.log(userMessage);

                // Check if input field is empty
                if(!userMessage) return;

                // Append user message to chatbox
                chatbox.appendChild(createChatLi(userMessage, "outgoing"));
                chatbox.scrollTo(0, chatbox.scrollHeight);
                
                // Clear the textarea after sending the message
                chatInput.value = '';

                // Response
                setTimeout(() => {
                    // Display loading message while response is being generated
                    const incomingChatLi = createChatLi("Typing...", "incoming")
                    chatbox.appendChild(incomingChatLi);
                    chatbox.scrollTo(0, chatbox.scrollHeight);

                    // Call method to generate response based on user input and display the response as incoming message from the bot
                    generateResponse(incomingChatLi);
                }, 600);
            }

            // Adjust input field height based on content size
            chatInput.addEventListener("input", () => {
                chatInput.style.height = `${inputInitHeight}px`;
                chatInput.style.height = `${chatInput.scrollHeight}px`;
            });

            // Event listener to toggle out/in ui of chatbot feature
            chatbotToggler.addEventListener("click", () => document.body.classList.toggle("show-chatbot"));

            // Event listener for chatbot send button
            sendChatBtn.addEventListener("click", handleChat);
        </script>

    </body>
</html>
