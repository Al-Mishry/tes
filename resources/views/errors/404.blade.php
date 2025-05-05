<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>404 - Lost in Cyberspace</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.4/gsap.min.js"></script>
    <style>
        .cyberpunk-bg {
            background: linear-gradient(135deg, #0f0f1a 0%, #1a1a2e 100%);
        }

        .cyber-glow {
            text-shadow: 0 0 10px rgba(0, 255, 255, 0.8),
                         0 0 20px rgba(0, 255, 255, 0.6),
                         0 0 30px rgba(0, 255, 255, 0.4);
        }

        .cyber-border {
            border: 2px solid #00ffff;
            box-shadow: 0 0 15px rgba(0, 255, 255, 0.5),
                        inset 0 0 15px rgba(0, 255, 255, 0.3);
        }

        .cyber-button {
            position: relative;
            overflow: hidden;
            transition: all 0.3s;
        }

        .cyber-button::before {
            content: '';
            position: absolute;
            top: -50%;
            left: -50%;
            width: 200%;
            height: 200%;
            background: linear-gradient(
                to bottom right,
                transparent 45%,
                rgba(0, 255, 255, 0.5) 50%,
                transparent 55%
            );
            transform: rotate(45deg);
            transition: all 0.5s;
        }

        .cyber-button:hover::before {
            left: 100%;
        }

        .matrix-fall {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            overflow: hidden;
            z-index: 0;
        }

        .matrix-char {
            position: absolute;
            color: rgba(0, 255, 0, 0.7);
            font-family: 'Courier New', monospace;
            font-size: 16px;
            user-select: none;
        }

        @keyframes scanline {
            0% { transform: translateY(-100%); }
            100% { transform: translateY(100%); }
        }

        .scanlines {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: repeating-linear-gradient(
                to bottom,
                transparent 0%,
                rgba(0, 255, 255, 0.05) 0.5%,
                transparent 1%
            );
            pointer-events: none;
            z-index: 10;
            animation: scanline 4s linear infinite;
        }

        .pulse {
            animation: pulse 2s infinite;
        }

        @keyframes pulse {
            0% { opacity: 0.7; }
            50% { opacity: 1; }
            100% { opacity: 0.7; }
        }
    </style>
</head>
<body class="cyberpunk-bg text-green-400 min-h-screen flex items-center justify-center overflow-hidden">
    <div class="matrix-fall" id="matrix"></div>
    <div class="scanlines"></div>

    <div class="container mx-auto px-4 py-10 text-center relative z-10">
        <div class="mb-10">
            <svg class="mx-auto h-32 w-32 cyber-glow pulse" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M12 22C17.5228 22 22 17.5228 22 12C22 6.47715 17.5228 2 12 2C6.47715 2 2 6.47715 2 12C2 17.5228 6.47715 22 12 22Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M8 14C8 14 9.5 16 12 16C14.5 16 16 14 16 14" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M9 9H9.01" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M15 9H15.01" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
        </div>

        <div class="cyber-border p-8 mb-10 bg-black bg-opacity-50 backdrop-blur-sm">
            <h1 class="text-8xl font-bold mb-4 cyber-glow">404</h1>
            <h2 class="text-2xl font-mono mb-6 tracking-widest">ERROR: PAGE NOT FOUND</h2>
            <p class="text-gray-300 font-mono max-w-2xl mx-auto">
                >_ SYSTEM ALERT: TARGET LOCATION UNAVAILABLE<br>
                >_ POSSIBLE CAUSES: INVALID COORDINATES, DATA CORRUPTION, OR NETWORK ANOMALY<br>
                >_ SUGGESTED ACTION: RETURN TO HOME BASE OR INITIATE SYSTEM DIAGNOSTIC
            </p>
        </div>

        <div class="flex flex-col md:flex-row gap-6 justify-center">
            <a href="/" class="cyber-button px-8 py-3 bg-black text-green-400 font-mono border border-green-400 rounded-none">
                >_ RETURN TO HOME
            </a>
            <button id="diagnosticBtn" class="cyber-button px-8 py-3 bg-black text-cyan-400 font-mono border border-cyan-400 rounded-none">
                >_ RUN DIAGNOSTIC
            </button>
        </div>

        <div class="mt-16 text-gray-500 font-mono text-sm">
            <p>>_ SYSTEM STATUS: ONLINE | v2.5.1 | © 2025 CYBER SYSTEMS</p>
        </div>
    </div>

    <script>
        // Matrix rain effect
        const matrix = document.getElementById('matrix');
        const chars = "01アイウエオカキクケコサシスセソタチツテトナニヌネノハヒフヘホマミムメモヤユヨラリルレロワヲン";
        const fontSize = 16;
        const columns = Math.floor(window.innerWidth / fontSize);
        const drops = Array(columns).fill(1);

        function createMatrix() {
            for (let i = 0; i < columns; i++) {
                const char = document.createElement('div');
                char.className = 'matrix-char';
                char.style.left = (i * fontSize) + 'px';
                char.style.top = (drops[i] * fontSize) + 'px';
                char.textContent = chars.charAt(Math.floor(Math.random() * chars.length));
                matrix.appendChild(char);

                if (drops[i] * fontSize > window.innerHeight && Math.random() > 0.975) {
                    drops[i] = 0;
                }
                drops[i]++;
            }

            // Remove old characters
            const matrixChars = document.querySelectorAll('.matrix-char');
            if (matrixChars.length > 200) {
                for (let i = 0; i < 20; i++) {
                    if (matrixChars[i]) matrix.removeChild(matrixChars[i]);
                }
            }
        }

        setInterval(createMatrix, 50);

        // Button effects
        document.getElementById('diagnosticBtn').addEventListener('click', function() {
            const originalText = this.textContent;
            this.textContent = ">_ DIAGNOSTIC IN PROGRESS...";
            this.disabled = true;

            setTimeout(() => {
                this.textContent = ">_ ERROR TRACKING FAILED";
                setTimeout(() => {
                    this.textContent = originalText;
                    this.disabled = false;
                }, 1500);
            }, 2000);
        });

        // GSAP animations
        gsap.from(".cyber-border", {
            duration: 1.5,
            scale: 0.8,
            opacity: 0,
            ease: "power3.out"
        });

        gsap.from("h1", {
            duration: 1,
            y: -50,
            opacity: 0,
            ease: "back.out(1.7)"
        });

        gsap.from("h2, p", {
            duration: 1,
            y: 30,
            opacity: 0,
            stagger: 0.2,
            delay: 0.5
        });

        gsap.from(".flex", {
            duration: 1,
            y: 30,
            opacity: 0,
            delay: 1
        });
    </script>
</body>
</html>
