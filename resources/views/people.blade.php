<!DOCTYPE html>
<html lang="el">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Η Ομάδα - DBpedia Greek</title>

    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />
    <link rel="icon" href="./img/dbpedia-logo.png" type="image/x-icon">
    <link href="./css/people-style.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">

</head>
<canvas id="semanticCanvas"></canvas>

<header class="w-full fixed top-0 left-0 z-50 bg-[#012f42] shadow-md px-4 py-3">
    <div class="flex items-center justify-between max-w-7xl mx-auto">

        <!-- Logo -->
        <div class="flex items-center gap-2">
            <a href="./" aria-label="Αρχική" class="flex items-center gap-2">
                <div class="bg-white rounded-full p-1">
                    <img src="./img/dbpedia-logo.png" alt="Λογότυπο DBpedia" class="h-8 w-8 object-contain" />
                </div>
                <span class="text-white font-semibold text-lg">Ελληνική DBpedia</span>
            </a>
        </div>

        <!-- Hamburger (mobile) -->
        <button id="mobileMenuBtn" class="text-white md:hidden focus:outline-none">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
            </svg>
        </button>

        <!-- Navigation links -->
        <nav class="hidden md:flex gap-6">
            <a href="./" class="text-white hover:underline">Αρχική</a>
            <a href="./people" class="text-white hover:underline">Η Ομάδα</a>
            <a href="./examples" class="text-white hover:underline">Παραδείγματα</a>
        </nav>
    </div>

    <!-- Mobile menu -->
    <div id="mobileMenu" class="md:hidden hidden px-4 pt-4 pb-2 space-y-2 bg-[#012f42]">
        <a href="./" class="block text-white">Αρχική</a>
        <a href="./people" class="block text-white">Η Ομάδα</a>
        <a href="./examples" class="block text-white">Παραδείγματα</a>
    </div>
</header>


<main>

    <!-- DBpedia Description Section -->
    <section class="max-w-5xl mx-auto px-4 py-12" id="team">
        <h2 class="text-3xl font-bold mb-6">Η Ομάδα της Ελληνικής DBpedia</h2>
        <p class="mb-4 text-justify">
            Τα δεδομένα της DBpedia προέρχονται από τη συλλογική προσπάθεια της κοινότητας της Wikipedia και δεν θα
            υπήρχαν χωρίς την εθελοντική και αποτελεσματική συμβολή των διαχειριστών και συγγραφέων της Wikipedia.
        </p>
        <p class="mb-4 text-justify">
            Στόχος της ομάδας DBpedia Greek είναι η αναβάθμιση της χρηστικότητας και της αξίας των δεδομένων της
            ελληνικής Wikipedia μέσω της διασύνδεσης τους με διεθνή σύνολα δεδομένων και της ανάπτυξης
            σημασιολογικής
            αναπαράστασης για την επεξεργασία γνώσης.
        </p>
        <p class="mb-4 text-justify">
            Συνεπώς, πάνω απ' όλα, είμαστε βαθιά ευγνώμονες προς την κοινότητα της ελληνικής Wikipedia.
        </p>
        <p class="mb-4 text-justify">
            Η Ελληνική DBpedia τελεί υπό την αιγίδα του <a href="https://www.ihu.gr" target="_blank" rel="noopener"
                class="text-blue-600 hover:underline">
                Διεθνούς Πανεπιστημίου της Ελλάδος (ΔΙΠΑΕ)
            </a>, και η ανάπτυξη της
            υποστηρίζεται από το <a href="https://www.iee.ihu.gr/" target="_blank" rel="noopener"
                class="text-blue-600 hover:underline">
                Τμήμα Μηχανικών Πληροφορικής και Ηλεκτρονικών Συστημάτων
            </a> και το <a href="https://okfn.gr" target="_blank" rel="noopener" class="text-blue-600 hover:underline">
                Ίδρυμα Ανοικτής Γνώσης Ελλάδας
            </a>.
        </p>
        <p class="mb-4 text-justify">
            <strong>Ερευνητική Ομάδα:</strong> κ. Δημήτρης Κοντοκώστας, Επ. Καθηγητής Χαράλαμπος Μπράτσας, Καθ. Ιωάννης
            Αντωνίου,
            Καθ. Γιώργος Μητακίδης.
        </p>
        <p class="mb-4 text-justify">
            Το πρώτο βήμα προς την Ελληνική DBpedia έγινε κατά τη διάρκεια του μαθήματος "Επεξεργασία Γνώσης στο
            Διαδίκτυο" το ακαδημαϊκό έτος 2009-2010. Οι φοιτητές Αλεξίου Σ., Καραλής Α., Καρβούνας Γ., Κοντοκώστας
            Δ.
            και Ξανθοπούλου Π., υπό την επίβλεψη του Δρ. Χαράλαμπου Μπράτσα, δημιούργησαν τους πρώτους DBpedia
            mappings
            στο πλαίσιο της πτυχιακής τους εργασίας.
        </p>
        <p class="text-justify">
            Το επόμενο βήμα έγινε σε συνεργασία με τον Sören Auer, Sebastian Hellmann, Δημήτρη Κοντοκώστα, τον Χαράλαμπο Μπράτσα και τον Ιωάννη Αντωνίου όπου αναπτύχθηκε το I18n DBpedia Information
            Extraction Framework δίνοντας τη δυνατότητα διεθνοποίησης της DBpedia και της δημιουργίας εννοιολογικών γράφων σε διαφορετικές γλώσσες, βασισμένων στις αντίστοιχες γλωσσικές εκδόσεις της Wikipedia.
        </p>
        <p class="mt-4 text-gray-700 text-justify">
            Το παρόν έργο αφορά τη διεθνοποίηση της DBpedia.
            Μπορείτε να διαβάσετε περισσότερα εδώ:
            <a href="https://www.sciencedirect.com/science/article/abs/pii/S1570826812000030" target="_blank"
                rel="noopener noreferrer"
                class="text-yellow-800 hover:text-blue-600 hover:underline inline-flex items-center transition-colors duration-200">
                [1] Kontokostas, D.; Bratsas, C.; Auer, S.; Hellmann, S.; Antoniou, I.; Metakides, G. Internationalization
                of Linked Data: The Case of the Greek DBpedia Edition. Journal of Web Semantics 2012, 15, 51–61.
                https://doi.org/10.1016/j.websem.2012.01.001.
                <svg xmlns="http://www.w3.org/2000/svg" class="ml-1 h-4 w-4" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M13 7h6m0 0v6m0-6L10 16m-4 0h.01" />
                </svg>
            </a>.
        </p>

    </section>
</main>


<script>
    const canvas = document.getElementById('semanticCanvas');
    const ctx = canvas.getContext('2d');
    let width, height, points;

    function resize() {
        width = canvas.width = window.innerWidth;
        height = canvas.height = window.innerHeight;
        initPoints();
    }
    window.addEventListener('resize', resize);

    function initPoints() {
        const density = Math.floor((width * height) / 15000);
        points = [];
        for (let i = 0; i < density; i++) {
            points.push({
                x: Math.random() * width,
                y: Math.random() * height,
                vx: (Math.random() - 0.5) * 0.5,
                vy: (Math.random() - 0.5) * 0.5
            });
        }
    }

    function draw() {
        ctx.clearRect(0, 0, width, height);
        for (let i = 0; i < points.length; i++) {
            const p = points[i];
            p.x += p.vx;
            p.y += p.vy;
            if (p.x < 0 || p.x > width) p.vx *= -1;
            if (p.y < 0 || p.y > height) p.vy *= -1;

            ctx.beginPath();
            ctx.arc(p.x, p.y, 3, 0, Math.PI * 2);
            ctx.fillStyle = 'rgba(245, 196, 0, 0.9)';
            ctx.fill();

            for (let j = i + 1; j < points.length; j++) {
                const q = points[j];
                const dx = p.x - q.x;
                const dy = p.y - q.y;
                const dist = Math.hypot(dx, dy);
                if (dist < 120) {
                    ctx.beginPath();
                    ctx.moveTo(p.x, p.y);
                    ctx.lineTo(q.x, q.y);
                    ctx.strokeStyle = `rgba(0,0,0,${1 - dist / 120})`;
                    ctx.lineWidth = 1;
                    ctx.stroke();
                }
            }
        }
        requestAnimationFrame(draw);
    }

    resize();
    draw();


    const menuBtn = document.getElementById('mobileMenuBtn');
    const mobileMenu = document.getElementById('mobileMenu');

    menuBtn.addEventListener('click', () => {
        mobileMenu.classList.toggle('hidden');
    });
</script>

<!-- Footer -->
<footer>
    <div class="footer-content">
        <div>
            &copy; 2025 Georgios Christoforos Kazlaris. Όλα τα δικαιώματα κατοχυρωμένα.
        </div>
    </div>
</footer>

</body>



</html>