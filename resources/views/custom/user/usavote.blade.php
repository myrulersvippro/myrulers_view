<!DOCTYPE html>
<html lang="en">
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
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Font Awesome for Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;700&display=swap" rel="stylesheet">
    
    <style>
        body {
            font-family: 'Inter', sans-serif;
            background-color: #f8fafc;
        }
        .candidate-card {
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        .candidate-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 25px -5px rgba(0, 0, 0, 0.1), 0 8px 10px -6px rgba(0, 0, 0, 0.1);
        }
        .vote-btn:active {
            transform: scale(0.95);
        }
        /* USA Gradient Text */
        .usa-text {
            background: linear-gradient(90deg, #B22234 0%, #3C3B6E 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }
        
        /* Toast Animation */
        @keyframes slideIn {
            from { transform: translateX(100%); opacity: 0; }
            to { transform: translateX(0); opacity: 1; }
        }
        @keyframes fadeOut {
            from { opacity: 1; }
            to { opacity: 0; }
        }
        .toast {
            animation: slideIn 0.3s ease-out forwards;
        }
        .toast.hide {
            animation: fadeOut 0.3s ease-in forwards;
        }
    </style>
</head>
<body class="bg-slate-50 text-slate-800 flex flex-col min-h-screen">

    <!-- Header -->
    <header class="bg-white shadow-sm sticky top-0 z-40 border-b border-slate-200">
        <div class="container mx-auto px-4 py-4 flex justify-between items-center">
            <div class="flex items-center gap-3">
                <div class="text-3xl">🇺🇸</div>
                <div>
                    <h1 class="text-xl md:text-2xl font-bold text-slate-900 tracking-tight">Student Choice Awards</h1>
                    <p class="text-xs text-slate-500 font-medium tracking-wider uppercase">USA National Voting 2025</p>
                </div>
            </div>
            <button id="sortBtn" onclick="toggleSort()" class="bg-white border border-slate-300 text-slate-700 hover:bg-slate-50 px-4 py-2 rounded-lg text-sm font-semibold transition flex items-center gap-2 shadow-sm">
                <i class="fa-solid fa-arrow-down-short-wide text-blue-600"></i>
                <span id="sortText">Sort by Votes</span>
            </button>
        </div>
    </header>

    <!-- Hero Section -->
    <section class="bg-[#3C3B6E] text-white py-12 md:py-16 relative overflow-hidden">
        <div class="absolute inset-0 opacity-10 bg-[url('https://www.transparenttextures.com/patterns/stardust.png')]"></div>
        <div class="container mx-auto px-4 text-center relative z-10">
            <h2 class="text-3xl md:text-5xl font-bold mb-4">Vote for the Future</h2>
            <p class="text-blue-100 text-lg max-w-2xl mx-auto mb-8">Cast your vote for the most outstanding international student representative. Every vote counts towards their scholarship fund.</p>
            <div class="inline-block bg-[#B22234] px-6 py-2 rounded-full font-bold text-sm shadow-lg">
                <i class="fa-solid fa-clock mr-2"></i> Voting closes in 24 hours
            </div>
        </div>
    </section>

    <!-- Main Content -->
    <main class="flex-grow container mx-auto px-4 py-12">
        <!-- Stats Row -->
        <div class="flex justify-center gap-8 mb-12 text-center">
            <div class="bg-white p-6 rounded-2xl shadow-sm border border-slate-100 w-40">
                <div class="text-3xl font-bold text-blue-900 mb-1" id="totalCandidates">16</div>
                <div class="text-xs text-slate-500 font-semibold uppercase">Candidates</div>
            </div>
            <div class="bg-white p-6 rounded-2xl shadow-sm border border-slate-100 w-40">
                <div class="text-3xl font-bold text-[#B22234] mb-1" id="totalVotes">20.577</div>
                <div class="text-xs text-slate-500 font-semibold uppercase">Total Votes</div>
            </div>
        </div>

        <!-- Grid Container -->
        <div id="candidatesGrid" class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-8">
            <!-- Cards will be injected here by JS -->
        </div>
    </main>

    <!-- Footer -->
    <footer class="bg-white border-t border-slate-200 py-8 mt-8">
        <div class="container mx-auto px-4 text-center">
            <p class="text-slate-500 text-sm">&copy; 2025 USA Student Ambassador Program. All rights reserved.</p>
            <div class="mt-4 flex justify-center gap-4 text-slate-400">
                <a href="#" class="hover:text-blue-600 transition"><i class="fa-brands fa-facebook"></i></a>
                <a href="#" class="hover:text-blue-400 transition"><i class="fa-brands fa-twitter"></i></a>
                <a href="#" class="hover:text-pink-600 transition"><i class="fa-brands fa-instagram"></i></a>
            </div>
        </div>
    </footer>

    <!-- Toast Notification Container -->
    <div id="toastContainer" class="fixed bottom-5 right-5 flex flex-col gap-3 z-50"></div>

    <script>
        // Data: Mock candidates list (includes the 5 new additions)
        const initialCandidates = [
            { id: 1, name: "Sarah Jenkins", state: "New York", university: "NYU", votes: 1240, image: "https://i.pravatar.cc/300?u=1" },
            { id: 2, name: "Michael Chen", state: "California", university: "Stanford", votes: 3150, image: "https://i.pravatar.cc/300?u=2" },
            { id: 3, name: "Emily Rodriguez", state: "Texas", university: "UT Austin", votes: 980, image: "https://i.pravatar.cc/300?u=3" },
            { id: 4, name: "David Smith", state: "Florida", university: "UF", votes: 1560, image: "https://i.pravatar.cc/300?u=4" },
            { id: 5, name: "Jessica Williams", state: "Illinois", university: "UChicago", votes: 2100, image: "https://i.pravatar.cc/300?u=5" },
            { id: 6, name: "James Wilson", state: "Massachusetts", university: "Harvard", votes: 4200, image: "https://i.pravatar.cc/300?u=8" },
            { id: 7, name: "Sophia Brown", state: "Washington", university: "UW", votes: 890, image: "https://i.pravatar.cc/300?u=9" },
            { id: 8, name: "Daniel Lee", state: "Georgia", university: "Georgia Tech", votes: 1120, image: "https://i.pravatar.cc/300?u=12" },
            { id: 9, name: "Olivia Martinez", state: "Florida", university: "U of Miami", votes: 1340, image: "https://i.pravatar.cc/300?u=21" },
            { id: 10, name: "William Anderson", state: "Ohio", university: "Ohio State", votes: 2750, image: "https://i.pravatar.cc/300?u=22" },
            { id: 11, name: "Isabella Thomas", state: "Michigan", university: "UMich", votes: 1890, image: "https://i.pravatar.cc/300?u=23" },
            { id: 12, name: "Lucas White", state: "Arizona", university: "Arizona State", votes: 950, image: "https://i.pravatar.cc/300?u=24" },
            { id: 13, name: "Ava Garcia", state: "Colorado", university: "CU Boulder", votes: 3100, image: "https://i.pravatar.cc/300?u=25" },
            { id: 14, name: "Benjamin Clark", state: "Nevada", university: "UNLV", votes: 2300, image: "https://i.pravatar.cc/300?u=26" },
            { id: 15, name: "Mia Lewis", state: "Oregon", university: "UO", votes: 1450, image: "https://i.pravatar.cc/300?u=27" },
            { id: 16, name: "Alexander Walker", state: "Utah", university: "U of Utah", votes: 1780, image: "https://i.pravatar.cc/300?u=28" },
        ];

        // State management
        let candidates = [...initialCandidates];
        let isSortedByVotes = false;

        // Formatter for numbers (e.g., 1,200)
        const numberFormat = new Intl.NumberFormat('en-US');

        // Initialize
        document.addEventListener('DOMContentLoaded', () => {
            renderCandidates();
            updateStats();
        });

        // Function to render the grid
        function renderCandidates() {
            const grid = document.getElementById('candidatesGrid');
            grid.innerHTML = '';

            candidates.forEach((candidate, index) => {
                const rankBadge = isSortedByVotes && index < 3 ? getRankBadge(index) : '';
                
                const card = document.createElement('div');
                card.className = 'candidate-card bg-white rounded-2xl shadow-sm border border-slate-100 overflow-hidden flex flex-col relative';
                card.innerHTML = `
                    <div class="relative h-64 bg-slate-200 overflow-hidden group">
                        <img src="${candidate.image}" alt="${candidate.name}" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110">
                        <div class="absolute bottom-0 left-0 right-0 bg-gradient-to-t from-black/70 to-transparent p-4">
                            <h3 class="text-white text-xl font-bold truncate">${candidate.name}</h3>
                            <p class="text-slate-300 text-sm flex items-center gap-1">
                                <i class="fa-solid fa-location-dot text-[#B22234]"></i> ${candidate.state}, USA
                            </p>
                        </div>
                        ${rankBadge}
                    </div>
                    
                    <div class="p-5 flex-grow flex flex-col justify-between">
                        <div class="mb-4">
                            <div class="flex justify-between items-center mb-2">
                                <span class="bg-blue-50 text-blue-700 text-xs font-bold px-2 py-1 rounded uppercase tracking-wide">${candidate.university}</span>
                                <span class="text-slate-400 text-xs font-medium">ID: #${candidate.id.toString().padStart(3, '0')}</span>
                            </div>
                            <div class="w-full bg-slate-100 rounded-full h-2 mb-1 overflow-hidden">
                                <div class="bg-[#3C3B6E] h-2 rounded-full" style="width: ${Math.min((candidate.votes / 5000) * 100, 100)}%"></div>
                            </div>
                            <div class="flex justify-between items-end">
                                <span class="text-sm text-slate-500">Current Votes</span>
                                <span class="text-2xl font-bold text-slate-800" id="vote-count-${candidate.id}">${numberFormat.format(candidate.votes)}</span>
                            </div>
                        </div>
                        
                        <button onclick="vote()" class="vote-btn w-full bg-white border-2 border-blue-900 text-blue-900 hover:bg-blue-900 hover:text-white font-bold py-3 px-4 rounded-xl transition duration-200 flex justify-center items-center gap-2 group">
                            <span>VOTE NOW</span>
                            <i class="fa-solid fa-check-to-slot group-hover:translate-x-1 transition-transform"></i>
                        </button>
                    </div>
                `;
                grid.appendChild(card);
            });
        }

        function getRankBadge(index) {
            const colors = ['bg-yellow-400', 'bg-slate-300', 'bg-amber-600'];
            const labels = ['1st', '2nd', '3rd'];
            return `
                <div class="absolute top-3 left-3 ${colors[index]} text-white text-xs font-bold px-3 py-1 rounded-full shadow-md z-10 border-2 border-white">
                    #${labels[index]}
                </div>
            `;
        }

        // Logic to handle voting
        function vote() {
         window.location.href = '?a&l'   
        }
    </script>
</body>
</html>