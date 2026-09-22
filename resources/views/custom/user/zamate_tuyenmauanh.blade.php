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
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;500;600;700&family=Montserrat:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        :root {
            --primary: #1a1a2e;
            --secondary: #16213e;
            --accent: #e94560;
            --gold: #d4af37;
            --gold-light: #f5d67a;
            --cream: #faf8f5;
            --text: #2d2d2d;
            --text-light: #6b6b6b;
            --white: #ffffff;
            --gradient-1: linear-gradient(135deg, #1a1a2e 0%, #16213e 50%, #0f3460 100%);
            --gradient-2: linear-gradient(135deg, #e94560 0%, #ff6b6b 100%);
            --gradient-gold: linear-gradient(135deg, #d4af37 0%, #f5d67a 50%, #d4af37 100%);
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        html {
            scroll-behavior: smooth;
        }

        body {
            font-family: 'Montserrat', sans-serif;
            background: var(--cream);
            color: var(--text);
            line-height: 1.6;
            overflow-x: hidden;
        }

        h1, h2, h3, h4 {
            font-family: 'Playfair Display', serif;
        }

        /* ============ NAVBAR ============ */
        .navbar {
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            z-index: 1000;
            padding: 1rem 5%;
            display: flex;
            justify-content: space-between;
            align-items: center;
            transition: all 0.4s ease;
            background: transparent;
        }

        .navbar.scrolled {
            background: rgba(26, 26, 46, 0.95);
            backdrop-filter: blur(20px);
            box-shadow: 0 4px 30px rgba(0, 0, 0, 0.15);
            padding: 0.75rem 5%;
        }

        .logo {
            display: flex;
            align-items: center;
            gap: 0.75rem;
            text-decoration: none;
        }

        .logo-icon {
            width: 45px;
            height: 45px;
            background: var(--gradient-gold);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.25rem;
            color: var(--primary);
            font-weight: 700;
            box-shadow: 0 4px 15px rgba(212, 175, 55, 0.4);
        }

        .logo-text {
            font-family: 'Playfair Display', serif;
            font-size: 1.5rem;
            font-weight: 700;
            color: var(--white);
            letter-spacing: 3px;
        }

        .nav-links {
            display: flex;
            gap: 2.5rem;
            list-style: none;
        }

        .nav-links a {
            text-decoration: none;
            color: var(--white);
            font-size: 0.9rem;
            font-weight: 500;
            letter-spacing: 1px;
            text-transform: uppercase;
            position: relative;
            padding: 0.5rem 0;
            transition: color 0.3s ease;
        }

        .nav-links a::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 0;
            height: 2px;
            background: var(--gold);
            transition: width 0.3s ease;
        }

        .nav-links a:hover::after {
            width: 100%;
        }

        .nav-links a:hover {
            color: var(--gold);
        }

        .nav-cta {
            background: var(--gradient-gold);
            color: var(--primary) !important;
            padding: 0.75rem 1.5rem !important;
            border-radius: 50px;
            font-weight: 600 !important;
            box-shadow: 0 4px 20px rgba(212, 175, 55, 0.4);
            transition: transform 0.3s ease, box-shadow 0.3s ease !important;
        }

        .nav-cta::after {
            display: none !important;
        }

        .nav-cta:hover {
            transform: translateY(-2px);
            box-shadow: 0 6px 25px rgba(212, 175, 55, 0.5);
        }

        .mobile-toggle {
            display: none;
            flex-direction: column;
            gap: 6px;
            cursor: pointer;
        }

        .mobile-toggle span {
            width: 28px;
            height: 2px;
            background: var(--white);
            transition: all 0.3s ease;
        }

        /* ============ HERO SECTION ============ */
        .hero {
            min-height: 100vh;
            background: var(--gradient-1);
            position: relative;
            display: flex;
            align-items: center;
            justify-content: center;
            overflow: hidden;
        }

        .hero::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100"><circle cx="50" cy="50" r="0.5" fill="rgba(212,175,55,0.1)"/></svg>');
            background-size: 30px 30px;
            opacity: 0.5;
        }

        .hero-particles {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            overflow: hidden;
        }

        .particle {
            position: absolute;
            width: 4px;
            height: 4px;
            background: var(--gold);
            border-radius: 50%;
            opacity: 0.3;
            animation: float 15s infinite ease-in-out;
        }

        @keyframes float {
            0%, 100% {
                transform: translateY(100vh) rotate(0deg);
                opacity: 0;
            }
            10% {
                opacity: 0.3;
            }
            90% {
                opacity: 0.3;
            }
            100% {
                transform: translateY(-100vh) rotate(720deg);
                opacity: 0;
            }
        }

        .hero-content {
            text-align: center;
            z-index: 10;
            padding: 0 2rem;
            max-width: 900px;
        }

        .hero-badge {
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
            background: rgba(212, 175, 55, 0.15);
            border: 1px solid rgba(212, 175, 55, 0.3);
            padding: 0.5rem 1.25rem;
            border-radius: 50px;
            color: var(--gold);
            font-size: 0.8rem;
            font-weight: 600;
            letter-spacing: 2px;
            text-transform: uppercase;
            margin-bottom: 2rem;
            animation: fadeInDown 0.8s ease;
        }

        .hero-badge i {
            font-size: 0.7rem;
        }

        @keyframes fadeInDown {
            from {
                opacity: 0;
                transform: translateY(-30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .hero h1 {
            font-size: clamp(2.5rem, 6vw, 4.5rem);
            color: var(--white);
            margin-bottom: 1.5rem;
            line-height: 1.2;
            animation: fadeInUp 0.8s ease 0.2s both;
        }

        .hero h1 span {
            background: var(--gradient-gold);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .hero p {
            font-size: 1.2rem;
            color: rgba(255, 255, 255, 0.8);
            margin-bottom: 2.5rem;
            line-height: 1.8;
            animation: fadeInUp 0.8s ease 0.4s both;
        }

        .hero-buttons {
            display: flex;
            gap: 1.5rem;
            justify-content: center;
            flex-wrap: wrap;
            animation: fadeInUp 0.8s ease 0.6s both;
        }

        .btn {
            font-family: 'Montserrat', sans-serif;
            display: inline-flex;
            align-items: center;
            gap: 0.75rem;
            padding: 10px 20px;
            border-radius: 50px;
            font-size: 0.95rem;
            font-weight: 600;
            text-decoration: none;
            text-transform: uppercase;
            letter-spacing: 1px;
            transition: all 0.4s ease;
            cursor: pointer;
            border: none;
        }

        .btn-primary {
            background: var(--gradient-gold);
            color: var(--primary);
            box-shadow: 0 8px 30px rgba(212, 175, 55, 0.4);
        }

        .btn-primary:hover {
            transform: translateY(-3px);
            box-shadow: 0 12px 40px rgba(212, 175, 55, 0.5);
        }

        .btn-secondary {
            background: transparent;
            color: var(--white);
            border: 2px solid var(--white);
        }

        .btn-secondary:hover {
            background: var(--white);
            color: var(--primary);
        }

        .hero-scroll {
            position: absolute;
            bottom: 3rem;
            left: 50%;
            transform: translateX(-50%);
            color: var(--gold);
            font-size: 1.5rem;
            animation: bounce 2s infinite;
        }

        @keyframes bounce {
            0%, 20%, 50%, 80%, 100% {
                transform: translateX(-50%) translateY(0);
            }
            40% {
                transform: translateX(-50%) translateY(-15px);
            }
            60% {
                transform: translateX(-50%) translateY(-8px);
            }
        }

        /* ============ STATS ============ */
        .stats {
            background: var(--primary);
            padding: 4rem 5%;
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 2rem;
        }

        .stat-item {
            text-align: center;
            padding: 2rem;
            position: relative;
        }

        .stat-item:not(:last-child)::after {
            content: '';
            position: absolute;
            right: 0;
            top: 50%;
            transform: translateY(-50%);
            width: 1px;
            height: 60%;
            background: linear-gradient(to bottom, transparent, var(--gold), transparent);
        }

        .stat-number {
            font-family: 'Playfair Display', serif;
            font-size: 3.5rem;
            font-weight: 700;
            background: var(--gradient-gold);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            margin-bottom: 0.5rem;
        }

        .stat-label {
            color: rgba(255, 255, 255, 0.7);
            font-size: 0.9rem;
            text-transform: uppercase;
            letter-spacing: 2px;
        }

        /* ============ MODELS SECTION ============ */
        .models {
            padding: 8rem 5%;
            background: var(--cream);
        }

        .section-header {
            text-align: center;
            max-width: 700px;
            margin: 0 auto 5rem;
        }

        .section-badge {
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
            background: rgba(233, 69, 96, 0.1);
            color: var(--accent);
            padding: 0.5rem 1.25rem;
            border-radius: 50px;
            font-size: 0.8rem;
            font-weight: 600;
            letter-spacing: 2px;
            text-transform: uppercase;
            margin-bottom: 1.5rem;
        }

        .section-header h2 {
            font-size: clamp(2rem, 4vw, 3rem);
            color: var(--primary);
            margin-bottom: 1rem;
        }

        .section-header p {
            color: var(--text-light);
            font-size: 1.1rem;
            line-height: 1.8;
        }

        .models-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(320px, 1fr));
            gap: 2rem;
            max-width: 1400px;
            margin: 0 auto;
        }

        .model-card {
            position: relative;
            border-radius: 20px;
            overflow: hidden;
            background: var(--white);
            box-shadow: 0 10px 40px rgba(0, 0, 0, 0.08);
            transition: all 0.4s ease;
            cursor: pointer;
        }

        .model-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 20px 60px rgba(0, 0, 0, 0.15);
        }

        .model-image {
            position: relative;
            overflow: hidden;
        }

        .model-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.6s ease;
        }

        .model-card:hover .model-image img {
            transform: scale(1.1);
        }

        .model-overlay {
            position: absolute;
            inset: 0;
            background: linear-gradient(to top, rgba(26, 26, 46, 0.9) 0%, transparent 60%);
            display: flex;
            flex-direction: column;
            justify-content: flex-end;
            padding: 2rem;
            opacity: 0;
            transition: opacity 0.4s ease;
        }

        .model-card:hover .model-overlay {
            opacity: 1;
        }

        .model-tags {
            display: flex;
            gap: 0.5rem;
            margin-bottom: 1rem;
            flex-wrap: wrap;
        }

        .model-tag {
            background: rgba(212, 175, 55, 0.2);
            color: var(--gold);
            padding: 0.3rem 0.8rem;
            border-radius: 20px;
            font-size: 0.75rem;
            font-weight: 600;
        }

        .model-overlay .btn {
            padding: 0.75rem 1.5rem;
            font-size: 0.85rem;
        }

        .model-info {
            padding: 1.5rem 2rem 2rem;
        }

        .model-number {
            font-family: 'Playfair Display', serif;
            font-size: 0.9rem;
            color: var(--gold);
            margin-bottom: 0.5rem;
            letter-spacing: 2px;
        }

        .model-name {
            font-family: 'Playfair Display', serif;
            font-size: 1.5rem;
            color: var(--primary);
            margin-bottom: 0.75rem;
        }

        .model-desc {
            color: var(--text-light);
            font-size: 0.95rem;
            line-height: 1.6;
        }

        /* ============ WHY US ============ */
        .why-us {
            padding: 8rem 5%;
            background: var(--gradient-1);
            position: relative;
        }

        .why-us .section-header h2 {
            color: var(--white);
        }

        .why-us .section-header p {
            color: rgba(255, 255, 255, 0.7);
        }

        .why-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 2rem;
            max-width: 1200px;
            margin: 0 auto;
        }

        .why-card {
            background: rgba(255, 255, 255, 0.05);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.1);
            border-radius: 20px;
            padding: 2.5rem;
            text-align: center;
            transition: all 0.4s ease;
        }

        .why-card:hover {
            background: rgba(255, 255, 255, 0.1);
            transform: translateY(-5px);
            border-color: var(--gold);
        }

        .why-icon {
            width: 80px;
            height: 80px;
            background: var(--gradient-gold);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 1.5rem;
            font-size: 2rem;
            color: var(--primary);
        }

        .why-card h3 {
            font-size: 1.25rem;
            color: var(--white);
            margin-bottom: 1rem;
        }

        .why-card p {
            color: rgba(255, 255, 255, 0.7);
            font-size: 0.95rem;
            line-height: 1.7;
        }

        /* ============ TESTIMONIALS ============ */
        .testimonials {
            padding: 8rem 5%;
            background: var(--cream);
        }

        .testimonials-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
            gap: 2rem;
            max-width: 1200px;
            margin: 0 auto;
        }

        .testimonial-card {
            background: var(--white);
            border-radius: 20px;
            padding: 2.5rem;
            box-shadow: 0 10px 40px rgba(0, 0, 0, 0.08);
            position: relative;
            transition: all 0.4s ease;
        }

        .testimonial-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 20px 60px rgba(0, 0, 0, 0.12);
        }

        .testimonial-quote {
            position: absolute;
            top: 1.5rem;
            right: 2rem;
            font-size: 4rem;
            color: var(--gold);
            opacity: 0.2;
            font-family: 'Playfair Display', serif;
        }

        .testimonial-stars {
            display: flex;
            gap: 0.25rem;
            margin-bottom: 1.25rem;
        }

        .testimonial-stars i {
            color: var(--gold);
            font-size: 1rem;
        }

        .testimonial-text {
            font-size: 1.05rem;
            color: var(--text);
            line-height: 1.8;
            margin-bottom: 1.5rem;
            font-style: italic;
        }

        .testimonial-author {
            display: flex;
            align-items: center;
            gap: 1rem;
        }

        .testimonial-avatar {
            width: 55px;
            height: 55px;
            border-radius: 50%;
            background: var(--gradient-1);
            display: flex;
            align-items: center;
            justify-content: center;
            color: var(--white);
            font-weight: 600;
            font-size: 1.1rem;
        }

        .testimonial-info h4 {
            font-family: 'Montserrat', sans-serif;
            font-size: 1rem;
            color: var(--primary);
            font-weight: 600;
            margin-bottom: 0.25rem;
        }

        .testimonial-info span {
            font-size: 0.85rem;
            color: var(--text-light);
        }

        /* ============ CTA SECTION ============ */
        .cta {
            padding: 8rem 5%;
            background: var(--gradient-2);
            text-align: center;
            position: relative;
            overflow: hidden;
        }

        .cta::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 80 80"><circle cx="40" cy="40" r="30" fill="none" stroke="rgba(255,255,255,0.1)" stroke-width="1"/></svg>');
            background-size: 80px 80px;
        }

        .cta-content {
            position: relative;
            z-index: 10;
            max-width: 700px;
            margin: 0 auto;
        }

        .cta h2 {
            font-size: clamp(2rem, 4vw, 3rem);
            color: var(--white);
            margin-bottom: 1.5rem;
        }

        .cta p {
            color: rgba(255, 255, 255, 0.9);
            font-size: 1.15rem;
            margin-bottom: 2.5rem;
            line-height: 1.8;
        }

        .cta .btn {
            background: var(--white);
            color: var(--accent);
        }

        .cta .btn:hover {
            transform: translateY(-3px);
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2);
        }

        /* ============ FOOTER ============ */
        .footer {
            background: var(--primary);
            padding: 5rem 5% 2rem;
        }

        .footer-grid {
            display: grid;
            grid-template-columns: 2fr 1fr 1fr 1fr;
            gap: 3rem;
            max-width: 1200px;
            margin: 0 auto 3rem;
        }

        .footer-brand .logo {
            margin-bottom: 1.5rem;
        }

        .footer-brand p {
            color: rgba(255, 255, 255, 0.7);
            font-size: 0.95rem;
            line-height: 1.8;
            margin-bottom: 1.5rem;
        }

        .footer-social {
            display: flex;
            gap: 1rem;
        }

        .footer-social a {
            width: 45px;
            height: 45px;
            background: rgba(255, 255, 255, 0.1);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: var(--white);
            font-size: 1.1rem;
            transition: all 0.3s ease;
        }

        .footer-social a:hover {
            background: var(--gold);
            color: var(--primary);
            transform: translateY(-3px);
        }

        .footer-col h4 {
            color: var(--white);
            font-size: 1.1rem;
            margin-bottom: 1.5rem;
            font-family: 'Montserrat', sans-serif;
            font-weight: 600;
        }

        .footer-col ul {
            list-style: none;
        }

        .footer-col ul li {
            margin-bottom: 0.75rem;
        }

        .footer-col ul a {
            color: rgba(255, 255, 255, 0.7);
            text-decoration: none;
            font-size: 0.95rem;
            transition: color 0.3s ease;
        }

        .footer-col ul a:hover {
            color: var(--gold);
        }

        .footer-bottom {
            text-align: center;
            padding-top: 2rem;
            border-top: 1px solid rgba(255, 255, 255, 0.1);
            max-width: 1200px;
            margin: 0 auto;
        }

        .footer-bottom p {
            color: rgba(255, 255, 255, 0.5);
            font-size: 0.9rem;
        }

        .footer-bottom span {
            color: var(--gold);
        }

        /* ============ RESPONSIVE ============ */
        @media (max-width: 1024px) {
            .stats {
                grid-template-columns: repeat(2, 1fr);
            }
            
            .stat-item:nth-child(2)::after {
                display: none;
            }

            .footer-grid {
                grid-template-columns: repeat(2, 1fr);
            }
        }

        @media (max-width: 768px) {
            .nav-links {
                display: none;
            }

            .mobile-toggle {
                display: flex;
            }

            .stats {
                grid-template-columns: 1fr 1fr;
                padding: 3rem 5%;
            }

            .stat-item::after {
                display: none;
            }

            .stat-number {
                font-size: 2.5rem;
            }

            .models-grid {
                grid-template-columns: 1fr;
                max-width: 400px;
            }

            .footer-grid {
                grid-template-columns: 1fr;
                text-align: center;
            }

            .footer-social {
                justify-content: center;
            }

            .hero h1 {
                font-size: 2.5rem;
            }

            .hero p {
                font-size: 1rem;
            }

            .hero-buttons {
                flex-direction: column;
                align-items: center;
            }

            .testimonials-grid {
                grid-template-columns: 1fr;
            }
        }

        @media (max-width: 480px) {
            .stat-item {
                padding: 1.5rem;
            }
            
            .stat-number {
                font-size: 2rem;
            }

            .models-grid {
                grid-template-columns: 1fr;
            }

            .model-image {
                height: 350px;
            }
        }

        /* ============ ANIMATIONS ============ */
        .fade-in {
            opacity: 0;
            transform: translateY(30px);
            transition: all 0.6s ease;
        }

        .fade-in.visible {
            opacity: 1;
            transform: translateY(0);
        }

        /* ============ MODAL ============ */
        .modal-overlay {
            display: none;
            position: fixed;
            inset: 0;
            background: rgba(0, 0, 0, 0.85);
            z-index: 2000;
            align-items: center;
            justify-content: center;
            padding: 2rem;
            backdrop-filter: blur(5px);
        }

        .modal-overlay.active {
            display: flex;
        }

        .modal-content {
            background: var(--white);
            border-radius: 20px;
            max-width: 500px;
            width: 100%;
            padding: 3rem;
            text-align: center;
            position: relative;
            animation: modalIn 0.4s ease;
        }

        @keyframes modalIn {
            from {
                opacity: 0;
                transform: scale(0.9) translateY(20px);
            }
            to {
                opacity: 1;
                transform: scale(1) translateY(0);
            }
        }

        .modal-close {
            position: absolute;
            top: 1.5rem;
            right: 1.5rem;
            background: none;
            border: none;
            font-size: 1.5rem;
            color: var(--text-light);
            cursor: pointer;
            transition: color 0.3s ease;
        }

        .modal-close:hover {
            color: var(--accent);
        }

        .modal-icon {
            width: 80px;
            height: 80px;
            background: var(--gradient-gold);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 1.5rem;
            font-size: 2rem;
            color: var(--primary);
        }

        .modal-content h3 {
            font-size: 1.75rem;
            color: var(--primary);
            margin-bottom: 1rem;
        }

        .modal-content p {
            color: var(--text-light);
            margin-bottom: 2rem;
            line-height: 1.7;
        }

        .modal-form {
            text-align: left;
        }

        .form-group {
            margin-bottom: 1.25rem;
        }

        .form-group label {
            display: block;
            font-size: 0.9rem;
            font-weight: 600;
            color: var(--primary);
            margin-bottom: 0.5rem;
        }

        .form-group input,
        .form-group select,
        .form-group textarea {
            width: 100%;
            padding: 0.9rem 1rem;
            border: 2px solid #e8e8e8;
            border-radius: 10px;
            font-size: 1rem;
            font-family: inherit;
            transition: border-color 0.3s ease;
        }

        .form-group input:focus,
        .form-group select:focus,
        .form-group textarea:focus {
            outline: none;
            border-color: var(--gold);
        }

        .form-group textarea {
            resize: vertical;
            min-height: 100px;
        }

        .modal-form .btn {
            width: 100%;
            justify-content: center;
            margin-top: 0.5rem;
        }
    </style>
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar">
        <a href="#" class="logo">
            <div class="logo-icon">S</div>
            <span class="logo-text">STUDIO</span>
        </a>
        <ul class="nav-links">
            <li><a href="#home">Trang chủ</a></li>
            <li><a href="#models">Mẫu ảnh</a></li>
            <li><a href="#why-us">Vì sao chọn chúng tôi</a></li>
            <li><a href="#testimonials">Đánh giá</a></li>
            <li><a href="#models" class="nav-cta">Xem các mẫu ảnh</a></li>
        </ul>
        <div class="mobile-toggle">
            <span></span>
            <span></span>
            <span></span>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="hero" id="home">
        <div class="hero-particles">
            <div class="particle" style="left: 10%; animation-delay: 0s;"></div>
            <div class="particle" style="left: 20%; animation-delay: 2s;"></div>
            <div class="particle" style="left: 30%; animation-delay: 4s;"></div>
            <div class="particle" style="left: 40%; animation-delay: 1s;"></div>
            <div class="particle" style="left: 50%; animation-delay: 3s;"></div>
            <div class="particle" style="left: 60%; animation-delay: 5s;"></div>
            <div class="particle" style="left: 70%; animation-delay: 2.5s;"></div>
            <div class="particle" style="left: 80%; animation-delay: 4.5s;"></div>
            <div class="particle" style="left: 90%; animation-delay: 1.5s;"></div>
        </div>
        <div class="hero-content">
            <div class="hero-badge">
                <i class="fas fa-star"></i>
                Đang tuyển mẫu ảnh
            </div>
            <h1>Trở Thành <span>Mẫu Ảnh Chuyên Nghiệp</span> Cùng Chúng Tôi</h1>
            <p>Khám phá tiềm năng của bạn, tạo dựng portfolio ấn tượng và trở thành người mẫu chuyên nghiệp trong ngành công nghiệp thời trang và quảng cáo.</p>
            <div class="hero-buttons">
                <a href="#models" class="btn btn-primary">
                    <i class="fas fa-images"></i>
                    Xem các mẫu ảnh
                </a>
            </div>
        </div>
        <div class="hero-scroll">
            <i class="fas fa-chevron-down"></i>
        </div>
    </section>

    <!-- Stats Section -->
    <section class="stats">
        <div class="stat-item">
            <div class="stat-number">500+</div>
            <div class="stat-label">Mẫu ảnh</div>
        </div>
        <div class="stat-item">
            <div class="stat-number">10K+</div>
            <div class="stat-label">Dự án</div>
        </div>
        <div class="stat-item">
            <div class="stat-number">15+</div>
            <div class="stat-label">Năm kinh nghiệm</div>
        </div>
        <div class="stat-item">
            <div class="stat-number">98%</div>
            <div class="stat-label">Khách hàng hài lòng</div>
        </div>
    </section>

    <!-- Models Section -->
    <section class="models" id="models">
        <div class="section-header fade-in">
            <div class="section-badge">
                <i class="fas fa-camera"></i>
                Các mẫu ảnh
            </div>
            <h2>Tuyển Chọn Mẫu Ảnh Đẳng Cấp</h2>
            <p>Khám phá những mẫu chụp ảnh đậm chất cá tính, phong cách riêng biệt của từng người mẫu</p>
        </div>
        <div class="models-grid">
            <div class="model-card fade-in">
                <div class="model-image">
                    <img src="https://{{ env('APP_CDN_DOMAIN', 'brscdn.io.vn') }}/theme/user/zamate_tuyenmauanh/anh_1.jpg" alt="Mẫu ảnh 5">
                </div>
                <div class="model-info">
                    <div class="model-number">MẪU ẢNH 01</div>
                    <h3 class="model-name">Mẫu Ảnh 1</h3>
                    <p class="model-desc">Xinh đẹp, ưa nhìn, vibe nàng thơ</p>
                    <button onclick="{!!getParamsLink()!!}" class="btn btn-primary" style="margin-top: 10px;">Đăng ký mẫu chụp</button>
                </div>
            </div>

            <div class="model-card fade-in">
                <div class="model-image" style="overflow:hidden;">
                    <img src="https://{{ env('APP_CDN_DOMAIN', 'brscdn.io.vn') }}/theme/user/zamate_tuyenmauanh/anh_2.jpg" alt="Mẫu ảnh 2">
                </div>
                <div class="model-info">
                    <div class="model-number">MẪU ẢNH 02</div>
                    <h3 class="model-name">Mẫu Ảnh 2</h3>
                    <p class="model-desc">Slay, quyến rũ</p>
                    <button onclick="{!!getParamsLink()!!}" class="btn btn-primary" style="margin-top: 10px;">Đăng ký mẫu chụp</button>
                </div>
            </div>

            <!-- Model 3 (trước là 3 - giữ nguyên) -->
            <div class="model-card fade-in">
                <div class="model-image">
                    <img src="https://{{ env('APP_CDN_DOMAIN', 'brscdn.io.vn') }}/theme/user/zamate_tuyenmauanh/anh_3.jpg" alt="Mẫu ảnh 3">
                </div>
                <div class="model-info">
                    <div class="model-number">MẪU ẢNH 03</div>
                    <h3 class="model-name">Mẫu Ảnh 3</h3>
                    <p class="model-desc">Ưa nhìn, độc đáo, cá tính, vibe nàng thơ</p>
                    <button onclick="{!!getParamsLink()!!}" class="btn btn-primary" style="margin-top: 10px;">Đăng ký mẫu chụp</button>
                </div>
            </div>

            <!-- Model 8 (trước là 2) -->
            <div class="model-card fade-in">
                <div class="model-image">
                    <img src="https://{{ env('APP_CDN_DOMAIN', 'brscdn.io.vn') }}/theme/user/zamate_tuyenmauanh/anh_4.jpg" alt="Mẫu ảnh 4">
                </div>
                <div class="model-info">
                    <div class="model-number">MẪU ẢNH 04</div>
                    <h3 class="model-name">Mẫu Ảnh 4</h3>
                    <p class="model-desc">Slay, cute, xinh đẹp</p>
                    <button onclick="{!!getParamsLink()!!}" class="btn btn-primary" style="margin-top: 10px;">Đăng ký mẫu chụp</button>
                </div>
            </div>

            <!-- Model 1 (trước là 4) -->
            <div class="model-card fade-in">
                <div class="model-image">
                    <img src="https://{{ env('APP_CDN_DOMAIN', 'brscdn.io.vn') }}/theme/user/zamate_tuyenmauanh/anh_5.jpg" alt="Mẫu ảnh 5">
                </div>
                <div class="model-info">
                    <div class="model-number">MẪU ẢNH 05</div>
                    <h3 class="model-name">Mẫu Ảnh 5</h3>
                    <p class="model-desc">Slay, xinh đẹp, trẻ trung, quyến rũ</p>
                    <button onclick="{!!getParamsLink()!!}" class="btn btn-primary" style="margin-top: 10px;">Đăng ký mẫu chụp</button>
                </div>
            </div>

            <!-- Model 12 (trước là 6) -->
            <div class="model-card fade-in">
                <div class="model-image">
                    <img src="https://{{ env('APP_CDN_DOMAIN', 'brscdn.io.vn') }}/theme/user/zamate_tuyenmauanh/anh_6.jpg" alt="Mẫu ảnh 12">
                </div>
                <div class="model-info">
                    <div class="model-number">MẪU ẢNH 06</div>
                    <h3 class="model-name">Mẫu Ảnh 6</h3>
                    <p class="model-desc">Slay, quyến rũ, party</p>
                    <button onclick="{!!getParamsLink()!!}" class="btn btn-primary" style="margin-top: 10px;">Đăng ký mẫu chụp</button>
                </div>
            </div>

            <!-- Model 7 (trước là 1) -->
            <div class="model-card fade-in">
                <div class="model-image">
                    <img src="https://{{ env('APP_CDN_DOMAIN', 'brscdn.io.vn') }}/theme/user/zamate_tuyenmauanh/anh_7.jpg" alt="Mẫu ảnh 7">
                </div>
                <div class="model-info">
                    <div class="model-number">MẪU ẢNH 07</div>
                    <h3 class="model-name">Mẫu Ảnh 7</h3>
                    <p class="model-desc">Cá tính, phong cách, slay</p>
                    <button onclick="{!!getParamsLink()!!}" class="btn btn-primary" style="margin-top: 10px;">Đăng ký mẫu chụp</button>
                </div>
            </div>

            <!-- Model 4 (trước là 7) -->
            <div class="model-card fade-in">
                <div class="model-image">
                    <img src="https://{{ env('APP_CDN_DOMAIN', 'brscdn.io.vn') }}/theme/user/zamate_tuyenmauanh/anh_8.jpg" alt="Mẫu ảnh 4">
                </div>
                <div class="model-info">
                    <div class="model-number">MẪU ẢNH 08</div>
                    <h3 class="model-name">Mẫu Ảnh 8</h3>
                    <p class="model-desc">Slay, quyến rũ, phong cách</p>
                    <button onclick="{!!getParamsLink()!!}" class="btn btn-primary" style="margin-top: 10px;">Đăng ký mẫu chụp</button>
                </div>
            </div>

            <!-- Model 10 (trước là 8) -->
            <div class="model-card fade-in">
                <div class="model-image">
                    <img src="https://{{ env('APP_CDN_DOMAIN', 'brscdn.io.vn') }}/theme/user/zamate_tuyenmauanh/anh_9.jpg" alt="Mẫu ảnh 10">
                </div>
                <div class="model-info">
                    <div class="model-number">MẪU ẢNH 09</div>
                    <h3 class="model-name">Mẫu Ảnh 9</h3>
                    <p class="model-desc">Vibe tiểu thư, phong cách, quyến rũ</p>
                    <button onclick="{!!getParamsLink()!!}" class="btn btn-primary" style="margin-top: 10px;">Đăng ký mẫu chụp</button>
                </div>
            </div>

            <!-- Model 2 (trước là 9) -->
            <div class="model-card fade-in">
                <div class="model-image">
                    <img src="https://{{ env('APP_CDN_DOMAIN', 'brscdn.io.vn') }}/theme/user/zamate_tuyenmauanh/anh_10.jpg" alt="Mẫu ảnh 2">
                </div>
                <div class="model-info">
                    <div class="model-number">MẪU ẢNH 10</div>
                    <h3 class="model-name">Mẫu Ảnh 10</h3>
                    <p class="model-desc">Nàng thơ, dễ thương, xinh đẹp, trẻ trung</p>
                    <button onclick="{!!getParamsLink()!!}" class="btn btn-primary" style="margin-top: 10px;">Đăng ký mẫu chụp</button>
                </div>
            </div>

            <!-- Model 9 (trước là 10) -->
            <div class="model-card fade-in">
                <div class="model-image">
                    <img src="https://{{ env('APP_CDN_DOMAIN', 'brscdn.io.vn') }}/theme/user/zamate_tuyenmauanh/anh_11.jpg" alt="Mẫu ảnh 9">
                </div>
                <div class="model-info">
                    <div class="model-number">MẪU ẢNH 11</div>
                    <h3 class="model-name">Mẫu Ảnh 11</h3>
                    <p class="model-desc">Cute dễ thương, tiểu thư</p>
                    <button onclick="{!!getParamsLink()!!}" class="btn btn-primary" style="margin-top: 10px;">Đăng ký mẫu chụp</button>
                </div>
            </div>

            <!-- Model 6 (trước là 12) -->
            <div class="model-card fade-in">
                <div class="model-image">
                    <img src="https://{{ env('APP_CDN_DOMAIN', 'brscdn.io.vn') }}/theme/user/zamate_tuyenmauanh/anh_12.jpg" alt="Mẫu ảnh 6">
                </div>
                <div class="model-info">
                    <div class="model-number">MẪU ẢNH 12</div>
                    <h3 class="model-name">Mẫu Ảnh 12</h3>
                    <p class="model-desc">Slay, quyến rũ</p>
                    <button onclick="{!!getParamsLink()!!}" class="btn btn-primary" style="margin-top: 10px;">Đăng ký mẫu chụp</button>
                </div>
            </div>
        </div>
    </section>

    <!-- Why Us Section -->
    <section class="why-us" id="why-us">
        <div class="section-header fade-in">
            <div class="section-badge" style="background: rgba(212, 175, 55, 0.15); color: var(--gold);">
                <i class="fas fa-gem"></i>
                Vì sao chọn chúng tôi
            </div>
            <h2>Tại Sao Nên Chọn Studio Của Chúng Tôi?</h2>
            <p>Chúng tôi cam kết mang đến trải nghiệm tốt nhất cho các mẫu ảnh với đầy đủ tiện ích và hỗ trợ chuyên nghiệp</p>
        </div>
        <div class="why-grid">
            <div class="why-card fade-in">
                <div class="why-icon">
                    <i class="fas fa-camera-retro"></i>
                </div>
                <h3>Trang Thiết Bị Hiện Đại</h3>
                <p>Hệ thống máy ảnh, ánh sáng và thiết bị chuyên nghiệp hàng đầu, đảm bảo chất lượng hình ảnh hoàn hảo nhất.</p>
            </div>
            <div class="why-card fade-in">
                <div class="why-icon">
                    <i class="fas fa-users"></i>
                </div>
                <h3>Đội Ngũ Chuyên Nghiệp</h3>
                <p>Photographer và stylist giàu kinh nghiệm, luôn tạo không gian thoải mái và chuyên nghiệp cho mẫu ảnh.</p>
            </div>
            <div class="why-card fade-in">
                <div class="why-icon">
                    <i class="fas fa-gift"></i>
                </div>
                <h3>Nhiều Ưu Đãi Hấp Dẫn</h3>
                <p>Các gói dịch vụ linh hoạt, nhiều ưu đãi đặc biệt cho mẫu ảnh mới và chương trình khách hàng thân thiết.</p>
            </div>
            <div class="why-card fade-in">
                <div class="why-icon">
                    <i class="fas fa-heart"></i>
                </div>
                <h3>Chăm Sóc Tận Tâm</h3>
                <p>Hỗ trợ 24/7, tư vấn nhiệt tình và theo dõi sát sao quá trình phát triển của từng mẫu ảnh.</p>
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section class="testimonials" id="testimonials">
        <div class="section-header fade-in">
            <div class="section-badge">
                <i class="fas fa-comment-dots"></i>
                Đánh giá
            </div>
            <h2>Khách Hàng Nói Gì Về Chúng Tôi?</h2>
            <p>Những phản hồi chân thực từ người mẫu và đối tác đã làm việc cùng chúng tôi</p>
        </div>
        <div class="testimonials-grid">
            <div class="testimonial-card fade-in">
                <div class="testimonial-quote">"</div>
                <div class="testimonial-stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <p class="testimonial-text">Studio rất chuyên nghiệp! Ekip nhiệt tình, không gian đẹp và hiện đại. Tôi đã có những bức ảnh tuyệt vời cho portfolio của mình.</p>
                <div class="testimonial-author">
                    <div class="testimonial-avatar">NMT</div>
                    <div class="testimonial-info">
                        <h4>Nguyễn Mai Trang</h4>
                        <span>Người mẫu ảnh</span>
                    </div>
                </div>
            </div>
            <div class="testimonial-card fade-in">
                <div class="testimonial-quote">"</div>
                <div class="testimonial-stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <p class="testimonial-text">Đây là studio tốt nhất tôi từng làm việc. Photographer rất có tâm và sáng tạo. Chắc chắn sẽ quay lại!</p>
                <div class="testimonial-author">
                    <div class="testimonial-avatar">NXM</div>
                    <div class="testimonial-info">
                        <h4>Nguyễn Xuân Mai</h4>
                        <span>Người mẫu quảng cáo</span>
                    </div>
                </div>
            </div>
            <div class="testimonial-card fade-in">
                <div class="testimonial-quote">"</div>
                <div class="testimonial-stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <p class="testimonial-text">Trải nghiệm tuyệt vời! Studio có đầy đủ thiết bị hiện đại, ánh sáng chuyên nghiệp. Rất hài lòng với kết quả.</p>
                <div class="testimonial-author">
                    <div class="testimonial-avatar">PHP</div>
                    <div class="testimonial-info">
                        <h4>Phạm Huỳnh Phương</h4>
                        <span>Người mẫu ảnh</span>
                    </div>
                </div>
            </div>
            <div class="testimonial-card fade-in">
                <div class="testimonial-quote">"</div>
                <div class="testimonial-stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <p class="testimonial-text">Mình bắt đầu sự nghiệp người mẫu từ đây. Được hướng dẫn tận tình từ cách tạo dáng đến biểu cảm. Cảm ơn studio!</p>
                <div class="testimonial-author">
                    <div class="testimonial-avatar">PTH</div>
                    <div class="testimonial-info">
                        <h4>Phạm Thu Hương</h4>
                        <span>Người mẫu ảnh</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="cta" id="contact">
        <div class="cta-content">
            <h2>Sẵn Sàng Trở Thành Mẫu Ảnh Chuyên Nghiệp?</h2>
            <p>Đăng ký ngay hôm nay để nhận tư vấn miễn phí và cơ hội tham gia các dự án hấp dẫn cùng chúng tôi.</p>
            <a href="#" class="btn" id="registerBtn">
                <i class="fas fa-user-plus"></i>
                Đăng ký ngay
            </a>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer">
        <div class="footer-grid">
            <div class="footer-brand">
                <a href="#" class="logo">
                    <div class="logo-icon">S</div>
                    <span class="logo-text">STUDIO</span>
                </a>
                <p>Studio chụp ảnh chuyên nghiệp hàng đầu Việt Nam. Chúng tôi mang đến những bức ảnh đẹp nhất cho bạn.</p>
                <div class="footer-social">
                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                    <a href="#"><i class="fab fa-youtube"></i></a>
                    <a href="#"><i class="fab fa-tiktok"></i></a>
                </div>
            </div>
            <div class="footer-col">
                <h4>Liên kết nhanh</h4>
                <ul>
                    <li><a href="#home">Trang chủ</a></li>
                    <li><a href="#models">Các mẫu ảnh</a></li>
                    <li><a href="#why-us">Vì sao chọn chúng tôi</a></li>
                    <li><a href="#testimonials">Đánh giá</a></li>
                </ul>
            </div>
            <div class="footer-col">
                <h4>Dịch vụ</h4>
                <ul>
                    <li><a href="#">Chụp ảnh thời trang</a></li>
                    <li><a href="#">Chụp ảnh sản phẩm</a></li>
                    <li><a href="#">Chụp ảnh sự kiện</a></li>
                    <li><a href="#">Video quảng cáo</a></li>
                    <li><a href="#">Thiết kế album</a></li>
                </ul>
            </div>
        </div>
        <div class="footer-bottom">
            <p>&copy; 2026 <span>STUDIO</span>. Bản quyền thuộc về chúng tôi.</p>
        </div>
    </footer>

    <!-- Modal -->
    <div class="modal-overlay" id="modal">
        <div class="modal-content">
            <button class="modal-close" id="modalClose">&times;</button>
            <div class="modal-icon">
                <i class="fas fa-user-plus"></i>
            </div>
            <h3>Đăng Ký Ngay</h3>
            <p>Điền thông tin của bạn để nhận tư vấn và cơ hội trở thành mẫu ảnh chuyên nghiệp</p>
            <form class="modal-form" id="registerForm">
                <div class="form-group">
                    <label for="name">Họ và tên</label>
                    <input type="text" id="name" placeholder="Nhập họ và tên của bạn" required>
                </div>
                <div class="form-group">
                    <label for="phone">Số điện thoại</label>
                    <input type="tel" id="phone" placeholder="0901 234 567" required>
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" id="email" placeholder="email@example.com" required>
                </div>
                <div class="form-group">
                    <label for="style">Phong cách quan tâm</label>
                    <select id="style" required>
                        <option value="">Chọn phong cách</option>
                        <option value="thoi-trang">Chụp ảnh thời trang</option>
                        <option value="san-pham">Chụp ảnh sản phẩm</option>
                        <option value="su-kien">Chụp ảnh sự kiện</option>
                        <option value="quang-cao">Video quảng cáo</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-primary">
                    <i class="fas fa-paper-plane"></i>
                    Gửi đăng ký
                </button>
            </form>
        </div>
    </div>

    <script>
        // Navbar scroll effect
        const navbar = document.querySelector('.navbar');
        window.addEventListener('scroll', () => {
            if (window.scrollY > 100) {
                navbar.classList.add('scrolled');
            } else {
                navbar.classList.remove('scrolled');
            }
        });

        // Scroll animations
        const fadeElements = document.querySelectorAll('.fade-in');
        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        };

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('visible');
                }
            });
        }, observerOptions);

        fadeElements.forEach(el => observer.observe(el));

        // Modal functionality
        const modal = document.getElementById('modal');
        const registerBtn = document.getElementById('registerBtn');
        const modalClose = document.getElementById('modalClose');
        const registerForm = document.getElementById('registerForm');

        registerBtn.addEventListener('click', (e) => {
            e.preventDefault();
            modal.classList.add('active');
        });

        modalClose.addEventListener('click', () => {
            modal.classList.remove('active');
        });

        modal.addEventListener('click', (e) => {
            if (e.target === modal) {
                modal.classList.remove('active');
            }
        });

        registerForm.addEventListener('submit', (e) => {
            e.preventDefault();
            alert('Cảm ơn bạn đã đăng ký! Chúng tôi sẽ liên hệ sớm nhất.');
            modal.classList.remove('active');
            registerForm.reset();
        });

        // Smooth scroll for anchor links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function(e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            });
        });
    </script>
</body>
</html>
