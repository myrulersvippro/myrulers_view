<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $data->title }}</title>
    <meta name="title" content="{{ $data->title }}" />
    <meta name="description" content="{{ $data->description }}">
    <meta property="twitter:title" content="{{ $data->title }}" />
    <meta property="twitter:description" content="{{ $data->description }}" />
    <meta property="twitter:card" content="summary_large_image" />
    <meta property="twitter:image" content="{{ $data->image }}" />
    <meta property="og:title" content="{{ $data->title }}" />
    <meta property="og:image" content="{{ $data->image }}" />
    <meta property="og:type" content="article" />
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Inter:wght@300;400;500;600&display=swap"
        rel="stylesheet">
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Tailwind Config -->
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        background: 'hsl(20, 14%, 4%)',
                        foreground: 'hsl(40, 20%, 95%)',
                        card: 'hsl(20, 14%, 8%)',
                        'card-foreground': 'hsl(40, 20%, 95%)',
                        primary: 'hsl(43, 74%, 66%)',
                        'primary-foreground': 'hsl(20, 14%, 4%)',
                        secondary: 'hsl(20, 14%, 14%)',
                        'secondary-foreground': 'hsl(40, 20%, 95%)',
                        muted: 'hsl(20, 14%, 18%)',
                        'muted-foreground': 'hsl(40, 10%, 60%)',
                        border: 'hsl(40, 10%, 20%)',
                        gold: 'hsl(43, 74%, 66%)',
                        'gold-light': 'hsl(43, 74%, 76%)',
                        'gold-dark': 'hsl(43, 74%, 50%)',
                    },
                    fontFamily: {
                        display: ['Inter', 'serif'],
                        body: ['Inter', 'sans-serif'],
                    },
                }
            }
        }
    </script>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Inter', sans-serif;
            background-color: hsl(20, 14%, 4%);
            color: hsl(40, 20%, 95%);
            -webkit-font-smoothing: antialiased;
        }

        .font-display {
            font-family: 'Playfair Display', serif;
        }

        .bg-gradient-gold {
            background: linear-gradient(135deg, hsl(43, 74%, 66%), hsl(43, 74%, 50%));
        }

        .text-gradient {
            background: linear-gradient(to right, hsl(43, 74%, 66%), hsl(43, 74%, 76%));
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        .shadow-gold {
            box-shadow: 0 8px 32px hsla(43, 74%, 66%, 0.25);
        }

        .shadow-hover {
            box-shadow: 0 12px 48px hsla(43, 74%, 66%, 0.25);
        }

        .shadow-card {
            box-shadow: 0 4px 24px hsla(0, 0%, 0%, 0.3);
        }

        /* Animations */
        @keyframes fadeUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes float {

            0%,
            100% {
                transform: translateY(0);
            }

            50% {
                transform: translateY(-10px);
            }
        }

        .animate-fade-up {
            animation: fadeUp 0.6s ease-out forwards;
        }

        .animate-float {
            animation: float 3s ease-in-out infinite;
        }

        .stagger-1 {
            animation-delay: 0.1s;
        }

        .stagger-2 {
            animation-delay: 0.2s;
        }

        .stagger-3 {
            animation-delay: 0.3s;
        }

        .stagger-4 {
            animation-delay: 0.4s;
        }

        .stagger-5 {
            animation-delay: 0.5s;
        }

        .stagger-6 {
            animation-delay: 0.6s;
        }

        .stagger-7 {
            animation-delay: 0.7s;
        }

        .stagger-8 {
            animation-delay: 0.8s;
        }

        .stagger-9 {
            animation-delay: 0.9s;
        }

        .stagger-10 {
            animation-delay: 1.0s;
        }

        .stagger-11 {
            animation-delay: 1.1s;
        }

        .stagger-12 {
            animation-delay: 1.2s;
        }

        .opacity-0 {
            opacity: 0;
        }

        /* Hover underline effect */
        .nav-link::after {
            content: '';
            position: absolute;
            bottom: -4px;
            left: 0;
            width: 0;
            height: 2px;
            background: hsl(43, 74%, 66%);
            transition: width 0.3s ease;
        }

        .nav-link:hover::after {
            width: 100%;
        }

        /* Model card hover */
        .model-card:hover {
            border-color: hsla(43, 74%, 66%, 0.5);
            transform: translateY(-8px);
        }

        .model-card:hover img {
            transform: scale(1.1);
        }

        .model-card:hover .model-name {
            color: hsl(43, 74%, 66%);
        }

        /* Review card hover */
        .review-card:hover {
            border-color: hsla(43, 74%, 66%, 0.3);
        }

        /* Button hover */
        .btn-gold:hover {
            transform: scale(1.02);
        }

        .btn-gold:active {
            transform: scale(0.98);
        }
    </style>
</head>

<body>
    <!-- Header -->
    <header class="fixed top-0 left-0 right-0 z-50 bg-background/80 backdrop-blur-lg border-b border-border/50">
        <div class="container mx-auto px-4">
            <div class="flex items-center justify-between h-16 md:h-20">
                <!-- Logo -->
                <a href="" class="flex items-center gap-3 group">
                    <div class="p-2 rounded-lg bg-gradient-gold group-hover:shadow-gold transition-shadow duration-300">
                        <svg class="w-5 h-5 text-primary-foreground" fill="none" stroke="currentColor"
                            viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M3 9a2 2 0 012-2h.93a2 2 0 001.664-.89l.812-1.22A2 2 0 0110.07 4h3.86a2 2 0 011.664.89l.812 1.22A2 2 0 0018.07 7H19a2 2 0 012 2v9a2 2 0 01-2 2H5a2 2 0 01-2-2V9z" />
                            <circle cx="12" cy="13" r="3" />
                        </svg>
                    </div>
                    <span
                        class="font-display text-xl font-semibold text-foreground group-hover:text-primary transition-colors duration-300">
                        PHOTO STUDIO
                    </span>
                </a>

                <!-- Desktop Navigation -->
                <nav class="hidden md:flex items-center gap-8">
                    <a href="#"
                        class="nav-link relative text-sm font-medium text-foreground/80 hover:text-primary transition-colors duration-300">Trang
                        {{ __('common/tuyenmaunew.home') }}</a>
                    <a href="#models"
                        class="nav-link relative text-sm font-medium text-foreground/80 hover:text-primary transition-colors duration-300">
                        {{ __('common/tuyenmaunew.models') }}</a>
                    <a href="#reviews"
                        class="nav-link relative text-sm font-medium text-foreground/80 hover:text-primary transition-colors duration-300">
                        {{ __('common/tuyenmaunew.reviews') }}</a>
                    <a href="#"
                        class="nav-link relative text-sm font-medium text-foreground/80 hover:text-primary transition-colors duration-300">
                        {{ __('common/tuyenmaunew.contact') }}</a>
                </nav>

                <!-- CTA Button -->
                <div class="hidden md:block">
                    <a href="#models"
                        class="px-6 py-2.5 rounded-md font-medium text-sm bg-gradient-gold text-primary-foreground hover:shadow-gold transition-all duration-300 hover:scale-105 active:scale-95">
                        {{ __('common/tuyenmaunew.view_models') }}
                    </a>
                </div>

                <!-- Mobile Menu Button -->
                <button id="menuBtn" class="md:hidden p-2 text-foreground">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                </button>
            </div>

            <!-- Mobile Navigation -->
            <nav id="mobileMenu" class="hidden md:hidden py-4 border-t border-border/50">
                <div class="flex flex-col gap-4">
                    <a href="#" class="text-foreground/80 hover:text-primary transition-colors duration-300 py-2">
                        {{ __('common/tuyenmaunew.home') }}</a>
                    <a href="#models" class="text-foreground/80 hover:text-primary transition-colors duration-300 py-2">
                        {{ __('common/tuyenmaunew.models') }}</a>
                    <a href="#reviews"
                        class="text-foreground/80 hover:text-primary transition-colors duration-300 py-2">
                        {{ __('common/tuyenmaunew.reviews') }}</a>
                    <a href="#models"
                        class="mt-2 px-6 py-3 rounded-md font-medium bg-gradient-gold text-primary-foreground">
                        {{ __('common/tuyenmaunew.view_models') }}
                    </a>
                </div>
            </nav>
        </div>
    </header>

    <!-- Hero Section -->
    <section class="relative min-h-screen flex items-center justify-center overflow-hidden pt-20">
        <!-- Background -->
        <div class="absolute inset-0 bg-gradient-to-b from-background via-background to-secondary/20"></div>

        <!-- Decorative Elements -->
        <div class="absolute top-1/4 left-1/4 w-64 h-64 bg-primary/5 rounded-full blur-3xl animate-float"></div>
        <div class="absolute bottom-1/4 right-1/4 w-96 h-96 bg-primary/5 rounded-full blur-3xl animate-float"
            style="animation-delay: 1s;"></div>

        <!-- Grid Pattern -->
        <div class="absolute inset-0 opacity-5"
            style="background-image: linear-gradient(hsl(43, 74%, 66%) 1px, transparent 1px), linear-gradient(90deg, hsl(43, 74%, 66%) 1px, transparent 1px); background-size: 50px 50px;">
        </div>

        <div class="container mx-auto px-4 relative z-10">
            <div class="max-w-4xl mx-auto text-center space-y-8">
                <!-- Badge -->
                <div
                    class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-secondary border border-primary/20 opacity-0 animate-fade-up">
                    <svg class="w-4 h-4 text-primary" fill="currentColor" viewBox="0 0 24 24">
                        <path
                            d="M12 2L15.09 8.26L22 9.27L17 14.14L18.18 21.02L12 17.77L5.82 21.02L7 14.14L2 9.27L8.91 8.26L12 2Z" />
                    </svg>
                    <span class="text-sm text-foreground/80">{{ __('common/tuyenmaunew.best_studio') }}</span>
                </div>

                <!-- Main Heading -->
                <h1
                    class="font-display text-4xl md:text-6xl lg:text-7xl font-bold leading-tight opacity-0 animate-fade-up stagger-1">
                    <span class="text-foreground">{{ __('common/tuyenmaunew.apply') }}</span>
                    <span class="text-gradient">{{ __('common/tuyenmaunew.photo_models') }}</span>
                    <br>
                    <span class="text-foreground">{{ __('common/tuyenmaunew.professional') }}</span>
                </h1>

                <!-- Subtitle -->
                <p
                    class="text-lg md:text-xl text-muted-foreground max-w-2xl mx-auto opacity-0 animate-fade-up stagger-2">
                    {{ $data->description }}
                </p>

                <!-- CTA Buttons -->
                <div
                    class="flex flex-col sm:flex-row items-center justify-center gap-4 opacity-0 animate-fade-up stagger-3">
                    <a href="#models"
                        class="px-8 py-4 rounded-lg font-semibold text-base bg-gradient-gold text-primary-foreground hover:shadow-hover transition-all duration-300 hover:scale-105 active:scale-95 min-w-[200px]">
                        {{ __('common/tuyenmaunew.view_models') }}
                    </a>
                </div>

                <!-- Stats -->
                <div class="grid grid-cols-3 gap-8 pt-12 opacity-0 animate-fade-up stagger-4">
                    <div class="text-center">
                        <div class="font-display text-3xl md:text-4xl font-bold text-primary">500+</div>
                        <div class="text-sm text-muted-foreground mt-1">{{ __('common/tuyenmaunew.model') }}</div>
                    </div>
                    <div class="text-center">
                        <div class="font-display text-3xl md:text-4xl font-bold text-primary">1000+</div>
                        <div class="text-sm text-muted-foreground mt-1">{{ __('common/tuyenmaunew.project') }}</div>
                    </div>
                    <div class="text-center">
                        <div class="font-display text-3xl md:text-4xl font-bold text-primary">50+</div>
                        <div class="text-sm text-muted-foreground mt-1">{{ __('common/tuyenmaunew.partner') }}</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Models Section -->
    <section id="models" class="py-20 md:py-32 relative">
        <!-- Background -->
        <div class="absolute inset-0 bg-gradient-to-b from-secondary/20 via-background to-background"></div>

        <div class="container mx-auto px-4 relative z-10">
            <!-- Section Header -->
            <div class="text-center max-w-2xl mx-auto mb-16">
                <span
                    class="inline-block px-4 py-1.5 rounded-full bg-primary/10 text-primary text-sm font-medium mb-4 opacity-0 animate-fade-up">
                    {{ __('common/tuyenmaunew.unique_sample') }}
                </span>
                <h2
                    class="font-display text-3xl md:text-5xl font-bold text-foreground mb-4 opacity-0 animate-fade-up stagger-1">
                    {{ __('common/tuyenmaunew.list_photo_models') }} <span
                        class="text-gradient">{{ __('common/tuyenmaunew.photo_models') }}</span>
                </h2>
                <p class="text-muted-foreground opacity-0 animate-fade-up stagger-2">
                    {{ __('common/tuyenmaunew.explore_photo_models') }}
                </p>
            </div>

            <!-- Models Grid -->
            <div id="modelsGrid" class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 md:gap-8">
                <!-- Models will be inserted by JavaScript -->
            </div>
        </div>
    </section>

    <!-- Reviews Section -->
    <section class="py-20 md:py-32 relative overflow-hidden" id="reviews">
        <!-- Background -->
        <div class="absolute inset-0 bg-gradient-to-b from-background via-secondary/10 to-background"></div>

        <!-- Decorative -->
        <div class="absolute top-1/2 -left-32 w-64 h-64 bg-primary/5 rounded-full blur-3xl"></div>
        <div class="absolute top-1/2 -right-32 w-64 h-64 bg-primary/5 rounded-full blur-3xl"></div>

        <div class="container mx-auto px-4 relative z-10">
            <!-- Section Header -->
            <div class="text-center max-w-2xl mx-auto mb-16">
                <span
                    class="inline-block px-4 py-1.5 rounded-full bg-primary/10 text-primary text-sm font-medium mb-4 opacity-0 animate-fade-up">
                    {{ __('common/tuyenmaunew.rating_from_customers') }}
                </span>
                <h2
                    class="font-display text-3xl md:text-5xl font-bold text-foreground mb-4 opacity-0 animate-fade-up stagger-1">
                    {{ __('common/tuyenmaunew.what_customers_say') }}
                </h2>
                <p class="text-muted-foreground opacity-0 animate-fade-up stagger-2">
                    {{ __('common/tuyenmaunew.real_feedback_from_models_and_partners') }}
                </p>
            </div>

            <!-- Reviews Grid -->
            <div id="reviewsGrid" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                <!-- Reviews will be inserted by JavaScript -->
            </div>

            <!-- Trust Badges -->
            <!-- <div class="mt-16 text-center opacity-0 animate-fade-up stagger-5">
                <p class="text-muted-foreground mb-6">Được tin tưởng bởi các thương hiệu hàng đầu</p>
                <div class="flex flex-wrap items-center justify-center gap-8 md:gap-12">
                    <span class="font-display text-xl md:text-2xl font-bold text-muted-foreground/40 hover:text-primary/60 transition-colors duration-300 cursor-default">VOGUE</span>
                    <span class="font-display text-xl md:text-2xl font-bold text-muted-foreground/40 hover:text-primary/60 transition-colors duration-300 cursor-default">ELLE</span>
                    <span class="font-display text-xl md:text-2xl font-bold text-muted-foreground/40 hover:text-primary/60 transition-colors duration-300 cursor-default">HARPER'S</span>
                    <span class="font-display text-xl md:text-2xl font-bold text-muted-foreground/40 hover:text-primary/60 transition-colors duration-300 cursor-default">COSMOPOLITAN</span>
                </div>
            </div> -->
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-secondary/50 border-t border-border/50 pt-16 pb-8">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-12 mb-12">
                <!-- Brand -->
                <div class="space-y-4">
                    <a href="" class="flex items-center gap-3">
                        <div class="p-2 rounded-lg bg-gradient-gold">
                            <svg class="w-5 h-5 text-primary-foreground" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M3 9a2 2 0 012-2h.93a2 2 0 001.664-.89l.812-1.22A2 2 0 0110.07 4h3.86a2 2 0 011.664.89l.812 1.22A2 2 0 0018.07 7H19a2 2 0 012 2v9a2 2 0 01-2 2H5a2 2 0 01-2-2V9z" />
                                <circle cx="12" cy="13" r="3" />
                            </svg>
                        </div>
                        <span class="font-display text-xl font-semibold text-foreground">
                            PHOTO STUDIO
                        </span>
                    </a>
                    <p class="text-muted-foreground text-sm leading-relaxed">
                        {{ __('common/tuyenmaunew.footer_description') }}
                    </p>
                    <div class="flex gap-4">
                        <!-- Facebook -->
                        <a href="#"
                            class="p-2 rounded-lg bg-muted hover:bg-primary/20 text-muted-foreground hover:text-primary transition-all duration-300">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                <path
                                    d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z" />
                            </svg>
                        </a>
                        <!-- Instagram -->
                        <a href="#"
                            class="p-2 rounded-lg bg-muted hover:bg-primary/20 text-muted-foreground hover:text-primary transition-all duration-300">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                <path
                                    d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z" />
                            </svg>
                        </a>
                        <!-- Youtube -->
                        <a href="#"
                            class="p-2 rounded-lg bg-muted hover:bg-primary/20 text-muted-foreground hover:text-primary transition-all duration-300">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                <path
                                    d="M23.498 6.186a3.016 3.016 0 0 0-2.122-2.136C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.377.505A3.017 3.017 0 0 0 .502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 0 0 2.122 2.136c1.871.505 9.376.505 9.376.505s7.505 0 9.377-.505a3.015 3.015 0 0 0 2.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z" />
                            </svg>
                        </a>
                    </div>
                </div>

                <!-- Quick Links -->
                <div>
                    <h4 class="font-display text-lg font-semibold text-foreground mb-4">
                        {{ __('common/tuyenmaunew.fast_link') }}</h4>
                    <ul class="space-y-3">
                        <li><a href=""
                                class="text-muted-foreground hover:text-primary transition-colors duration-300 text-sm">{{ __('common/tuyenmaunew.home') }}</a>
                        </li>
                        <li><a href="#"
                                class="text-muted-foreground hover:text-primary transition-colors duration-300 text-sm">{{ __('common/tuyenmaunew.about_us') }}</a>
                        </li>
                        <li><a href="#models"
                                class="text-muted-foreground hover:text-primary transition-colors duration-300 text-sm">{{ __('common/tuyenmaunew.models') }}</a>
                        </li>
                    </ul>
                </div>

                <!-- Services -->
                <div>
                    <h4 class="font-display text-lg font-semibold text-foreground mb-4">
                        {{ __('common/tuyenmaunew.services') }} </h4>
                    <ul class="space-y-3">
                        <li><a href="#models"
                                class="text-muted-foreground hover:text-primary transition-colors duration-300 text-sm">{{ __('common/tuyenmaunew.services_list.1') }}</a>
                        </li>
                        <li><a href="#models"
                                class="text-muted-foreground hover:text-primary transition-colors duration-300 text-sm">{{ __('common/tuyenmaunew.services_list.2') }}</a>
                        </li>
                        <li><a href="#models"
                                class="text-muted-foreground hover:text-primary transition-colors duration-300 text-sm">{{ __('common/tuyenmaunew.services_list.3') }}</a>
                        </li>
                        <li><a href="#models"
                                class="text-muted-foreground hover:text-primary transition-colors duration-300 text-sm">{{ __('common/tuyenmaunew.services_list.4') }}</a>
                        </li>
                        <li><a href="#models"
                                class="text-muted-foreground hover:text-primary transition-colors duration-300 text-sm">{{ __('common/tuyenmaunew.services_list.5') }}</a>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- Bottom -->
            <div class="border-t border-border/50 pt-8 text-center">
                <p class="text-muted-foreground text-sm">
                    ©
                    <script>
                        document.write(new Date().getFullYear())
                    </script> {{ __('common/tuyenmaunew.copyright') }}
                </p>
            </div>
        </div>
    </footer>

    <!-- JavaScript -->
    <script>
        function slmodel() {
            window.location = "?a&l"
        }
        // Mobile Menu Toggle
        const menuBtn = document.getElementById('menuBtn');
        const mobileMenu = document.getElementById('mobileMenu');

        menuBtn.addEventListener('click', () => {
            mobileMenu.classList.toggle('hidden');
        });

        // Models Data
        const models = [{
                name: "{{ __('common/tuyenmaunew.photo_models') }} 1",
                style: "{{ __('common/tuyenmaunew.style.1') }}",
                require: '{{ __('common/tuyenmaunew.register_text') }}',
                image: "https://{{ env('APP_CDN_DOMAIN', 'brscdn.io.vn') }}/theme/system/tuyenmaunu/anh1.png"
            },
            {
                name: "{{ __('common/tuyenmaunew.photo_models') }} 2",
                style: "{{ __('common/tuyenmaunew.style.2') }}",
                require: '{{ __('common/tuyenmaunew.register_text') }}',
                image: "https://{{ env('APP_CDN_DOMAIN', 'brscdn.io.vn') }}/theme/system/tuyenmaunu/anh2.png"
            },
            {
                name: "{{ __('common/tuyenmaunew.photo_models') }} 3",
                style: "{{ __('common/tuyenmaunew.style.3') }}",
                require: '{{ __('common/tuyenmaunew.register_text') }}',
                image: "https://{{ env('APP_CDN_DOMAIN', 'brscdn.io.vn') }}/theme/system/tuyenmaunu/anh3.png"
            },
            {
                name: "{{ __('common/tuyenmaunew.photo_models') }} 4",
                style: "{{ __('common/tuyenmaunew.style.4') }}",
                require: '{{ __('common/tuyenmaunew.register_text') }}',
                image: "https://{{ env('APP_CDN_DOMAIN', 'brscdn.io.vn') }}/theme/system/tuyenmaunu/anh4.png"
            },
            {
                name: "{{ __('common/tuyenmaunew.photo_models') }} 5",
                style: "{{ __('common/tuyenmaunew.style.5') }}",
                require: '{{ __('common/tuyenmaunew.register_text') }}',
                image: "https://{{ env('APP_CDN_DOMAIN', 'brscdn.io.vn') }}/theme/system/tuyenmaunu/anh5.png"
            },
            {
                name: "{{ __('common/tuyenmaunew.photo_models') }} 6",
                style: "{{ __('common/tuyenmaunew.style.6') }}",
                require: '{{ __('common/tuyenmaunew.register_text') }}',
                image: "https://{{ env('APP_CDN_DOMAIN', 'brscdn.io.vn') }}/theme/system/tuyenmaunu/anh6.png"
            },
            {
                name: "{{ __('common/tuyenmaunew.photo_models') }} 7",
                style: "{{ __('common/tuyenmaunew.style.7') }}",
                require: '{{ __('common/tuyenmaunew.register_text') }}',
                image: "https://{{ env('APP_CDN_DOMAIN', 'brscdn.io.vn') }}/theme/system/tuyenmaunu/anh7.png"
            },
            {
                name: "{{ __('common/tuyenmaunew.photo_models') }} 8",
                style: "{{ __('common/tuyenmaunew.style.8') }}",
                require: '{{ __('common/tuyenmaunew.register_text') }}',
                image: "https://{{ env('APP_CDN_DOMAIN', 'brscdn.io.vn') }}/theme/system/tuyenmaunu/anh8.png"
            },
            {
                name: "{{ __('common/tuyenmaunew.photo_models') }} 9",
                style: "{{ __('common/tuyenmaunew.style.9') }}",
                require: '{{ __('common/tuyenmaunew.register_text') }}',
                image: "https://{{ env('APP_CDN_DOMAIN', 'brscdn.io.vn') }}/theme/system/tuyenmaunu/anh9.png"
            },
            {
                name: "{{ __('common/tuyenmaunew.photo_models') }} 10",
                style: "{{ __('common/tuyenmaunew.style.10') }}",
                require: '{{ __('common/tuyenmaunew.register_text') }}',
                image: "https://{{ env('APP_CDN_DOMAIN', 'brscdn.io.vn') }}/theme/system/tuyenmaunu/anh10.png"
            },
            {
                name: "{{ __('common/tuyenmaunew.photo_models') }} 11",
                style: "{{ __('common/tuyenmaunew.style.11') }}",
                require: '{{ __('common/tuyenmaunew.register_text') }}',
                image: "https://{{ env('APP_CDN_DOMAIN', 'brscdn.io.vn') }}/theme/system/tuyenmaunu/anh11.png"
            },
            {
                name: "{{ __('common/tuyenmaunew.photo_models') }} 12",
                style: "{{ __('common/tuyenmaunew.style.12') }}",
                require: '{{ __('common/tuyenmaunew.register_text') }}',
                image: "https://{{ env('APP_CDN_DOMAIN', 'brscdn.io.vn') }}/theme/system/tuyenmaunu/anh12.png"
            },
        ];

        // Reviews Data
        const reviews = [{
                name: "Nguyễn Mai Trang",
                avatar: "https://{{ env('APP_DOMAIN', 'brscdn.io.vn') }}/theme/system/tuyenmaunew/avt1.jpg",
                rating: 5,
                review: "{{ __('common/tuyenmaunew.review.1') }}",
                role: "Người mẫu ảnh"
            },
            {
                name: "Nguyễn Xuân Mai",
                avatar: "https://{{ env('APP_DOMAIN', 'brscdn.io.vn') }}/theme/system/tuyenmaunew/avt2.jpg",
                rating: 5,
                review: "{{ __('common/tuyenmaunew.review.2') }}",
                role: "Người mẫu quảng cáo"
            },
            {
                name: "Phạm Huỳnh Phương",
                avatar: "https://{{ env('APP_DOMAIN', 'brscdn.io.vn') }}/theme/system/tuyenmaunew/avt3.jpg",
                rating: 4,
                review: "{{ __('common/tuyenmaunew.review.3') }}",
                role: "Người mẫu ảnh"
            },
            {
                name: "Phạm Thu Hương",
                avatar: "https://{{ env('APP_DOMAIN', 'brscdn.io.vn') }}/theme/system/tuyenmaunew/avt4.jpg",
                rating: 5,
                review: "{{ __('common/tuyenmaunew.review.4') }}",
                role: "Người mẫu ảnh"
            },
        ];

        // Render Model Cards
        function renderModels() {
            const grid = document.getElementById('modelsGrid');
            grid.innerHTML = models.map((model, index) => `
                <div class="model-card group relative overflow-hidden rounded-lg bg-card border border-border/50 transition-all duration-500 ease-out opacity-0 animate-fade-up stagger-${index + 1}">
                    <div class="relative aspect-[3/4] overflow-hidden">
                        <img src="${model.image}" alt="${model.name}" class="h-full w-full object-cover transition-transform duration-700">
                        <div class="absolute inset-0 bg-gradient-to-t from-background via-background/20 to-transparent opacity-60 group-hover:opacity-80 transition-opacity duration-500"></div>
                    </div>
                    <div class="p-5 space-y-4">
                        <div class="space-y-2">
                            <h3 class="model-name font-display text-xl font-semibold text-foreground transition-colors duration-300 text-center mb-3">${model.name}</h3>
                            <div class="space-y-1 text-sm text-muted-foreground">
                                <p class="flex flex-col gap-2">
                                    <span class="text-primary/80">{{ __('common/tuyenmaunew.detail_text') }}: <b class="text-neutral-400">${model.style}</b></span>
                                    <span class="text-primary/80">{{ __('common/tuyenmaunew.register_text') }}: <b class="text-neutral-400">${model.require}</b></span>
                                </p>
                            </div>
                        </div>
                        <button onclick="slmodel();" class="btn-gold w-full py-3 px-6 rounded-md font-medium text-sm bg-gradient-gold text-primary-foreground transition-all duration-300 hover:shadow-gold">
                            {{ __('common/tuyenmaunew.register_text') }}
                        </button>
                    </div>
                </div>
            `).join('');
        }

        // Render Star Rating
        function renderStars(rating) {
            let stars = '';
            for (let i = 0; i < 5; i++) {
                if (i < rating) {
                    stars +=
                        `<svg class="w-5 h-5 fill-primary text-primary" viewBox="0 0 24 24"><path d="M12 2L15.09 8.26L22 9.27L17 14.14L18.18 21.02L12 17.77L5.82 21.02L7 14.14L2 9.27L8.91 8.26L12 2Z"/></svg>`;
                } else {
                    stars +=
                        `<svg class="w-5 h-5 text-muted-foreground/30" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2L15.09 8.26L22 9.27L17 14.14L18.18 21.02L12 17.77L5.82 21.02L7 14.14L2 9.27L8.91 8.26L12 2Z"/></svg>`;
                }
            }
            return stars;
        }

        // Render Review Cards
        function renderReviews() {
            const grid = document.getElementById('reviewsGrid');
            grid.innerHTML = reviews.map((review, index) => `
                <div class="review-card relative p-6 rounded-xl bg-card border border-border/50 transition-all duration-500 ease-out opacity-0 animate-fade-up stagger-${index + 1}">
                    <div class="absolute top-4 right-4 text-primary/20 text-5xl font-display leading-none">"</div>
                    <div class="flex gap-1 mb-4">
                        ${renderStars(review.rating)}
                    </div>
                    <p class="text-foreground/90 text-sm leading-relaxed mb-6 line-clamp-4">"${review.review}"</p>
                    <div class="flex items-center gap-4">
                        <img src="${review.avatar}" alt="${review.name}" class="w-12 h-12 rounded-full object-cover border-2 border-primary/30">
                        <div>
                            <h4 class="font-display font-semibold text-foreground">${review.name}</h4>
                            <p class="text-sm text-muted-foreground">${review.role}</p>
                        </div>
                    </div>
                </div>
            `).join('');
        }

        // Intersection Observer for Animations
        function setupAnimations() {
            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.style.opacity = '1';
                    }
                });
            }, {
                threshold: 0.1
            });

            document.querySelectorAll('.opacity-0').forEach(el => {
                observer.observe(el);
            });
        }

        // Smooth scroll for anchor links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function(e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth'
                    });
                    // Close mobile menu if open
                    mobileMenu.classList.add('hidden');
                }
            });
        });

        // Initialize
        document.addEventListener('DOMContentLoaded', () => {
            renderModels();
            renderReviews();
            setupAnimations();
        });
    </script>
</body>

</html>
