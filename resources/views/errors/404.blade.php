<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>404 - Page Not Found</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.4/gsap.min.js"></script>
    <style>
        .animate-float {
            animation: float 3s ease-in-out infinite;
        }

        @keyframes float {
            0% { transform: translateY(0px); }
            50% { transform: translateY(-20px); }
            100% { transform: translateY(0px); }
        }

        .glitch {
            position: relative;
        }

        .glitch::before, .glitch::after {
            content: "404";
            position: absolute;
            width: 100%;
            height: 100%;
            left: 0;
            top: 0;
        }

        .glitch::before {
            color: #00ffff;
            z-index: -1;
            animation: glitch-effect 2s infinite;
        }

        .glitch::after {
            color: #ff00ff;
            z-index: -2;
            animation: glitch-effect 3s infinite;
        }

        @keyframes glitch-effect {
            0% { transform: translate(0); }
            25% { transform: translate(-5px, 2px); }
            50% { transform: translate(5px, -2px); }
            75% { transform: translate(2px, 5px); }
            100% { transform: translate(0); }
        }

        .particles {
            position: absolute;
            width: 100%;
            height: 100%;
            z-index: -3;
        }

        .particle {
            position: absolute;
            width: 6px;
            height: 6px;
            border-radius: 50%;
            background-color: rgba(255, 255, 255, 0.5);
        }
    </style>
</head>
<body class="bg-gradient-to-b from-gray-900 to-gray-800 text-white min-h-screen flex items-center justify-center relative overflow-hidden">
    <div class="particles" id="particles"></div>

    <div class="container mx-auto px-4 py-10 text-center z-10">
        <div class="mb-8 animate-float">
            <svg class="mx-auto" width="180" height="180" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M12 21C16.9706 21 21 16.9706 21 12C21 7.02944 16.9706 3 12 3C7.02944 3 3 7.02944 3 12C3 16.9706 7.02944 21 12 21Z" stroke="white" stroke-width="2"/>
                <path d="M9 9H9.01" stroke="white" stroke-width="2" stroke-linecap="round"/>
                <path d="M15 9H15.01" stroke="white" stroke-width="2" stroke-linecap="round"/>
                <path d="M8 14C8 14 9.5 16 12 16C14.5 16 16 14 16 14" stroke="white" stroke-width="2" stroke-linecap="round"/>
            </svg>
        </div>

        <h1 class="text-9xl font-bold mb-4 glitch">404</h1>
        <h2 class="text-3xl font-medium mb-8">Page Not Found</h2>
        <p class="text-xl text-gray-300 mb-10">Halaman yang Anda cari mungkin telah dihapus, nama telah diubah, atau tidak tersedia untuk sementara.</p>

        <div class="flex flex-col md:flex-row gap-4 justify-center">
            <a href="/" class="px-8 py-3 bg-indigo-600 hover:bg-indigo-700 text-white font-medium rounded-lg transition-all duration-300 transform hover:scale-105">
                Back to Home
            </a>
            <button id="reportBtn" class="px-8 py-3 bg-transparent border border-gray-400 hover:border-white text-gray-300 hover:text-white font-medium rounded-lg transition-all duration-300">
                Report Issue
            </button>
        </div>

        <div class="mt-16 text-gray-500">
            <p>© 2025 FitManage. All rights reserved.</p>
        </div>
    </div>

    <script>
        // Create floating particles
        const particlesContainer = document.getElementById('particles');
        const particleCount = 50;

        for (let i = 0; i < particleCount; i++) {
            const particle = document.createElement('div');
            particle.classList.add('particle');

            const size = Math.random() * 5 + 1;
            particle.style.width = `${size}px`;
            particle.style.height = `${size}px`;

            particle.style.opacity = Math.random() * 0.8 + 0.2;
            particle.style.left = `${Math.random() * 100}%`;
            particle.style.top = `${Math.random() * 100}%`;

            particlesContainer.appendChild(particle);

            animateParticle(particle);
        }

        function animateParticle(particle) {
            const duration = Math.random() * 10 + 10;
            const direction = Math.random() > 0.5 ? 1 : -1;

            gsap.to(particle, {
                x: `${Math.random() * 100 * direction}`,
                y: `${-Math.random() * 100}`,
                duration: duration,
                opacity: 0,
                ease: "none",
                onComplete: () => {
                    // Reset particle
                    gsap.set(particle, {
                        x: 0,
                        y: 0,
                        opacity: Math.random() * 0.8 + 0.2,
                        left: `${Math.random() * 100}%`,
                        top: `${Math.random() * 100}%`
                    });
                    animateParticle(particle);
                }
            });
        }

        // Add button effect
        document.getElementById('reportBtn').addEventListener('click', function() {
            alert('Thank you for reporting this issue. Our team will look into it.');
        });

        // Additional animations with GSAP
        gsap.from('.glitch', {
            duration: 1,
            y: -50,
            opacity: 0,
            ease: "back.out(1.7)"
        });

        gsap.from('.text-3xl, .text-xl', {
            duration: 1,
            y: 30,
            opacity: 0,
            stagger: 0.2,
            delay: 0.3
        });

        gsap.from('.flex.flex-col', {
            duration: 1,
            y: 30,
            opacity: 0,
            delay: 0.7
        });
    </script>
</body>
</html>
