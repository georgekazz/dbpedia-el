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

<header
    style="width: 100%; position: fixed; top: 0; left: 0; z-index: 1000; background: #012f42; box-shadow: 0 2px 4px rgba(0, 0, 0, 0.06); padding: 10px 20px;">
    <div style="display: flex; align-items: center; width: 100%;">

        <div class="logo" style="display: flex; align-items: center; gap: 10px;">
            <a href="./" aria-label="Αρχική">
                <div class="logo-circle">
                    <img src="./img/dbpedia-logo.png" alt="Λογότυπο DBpedia" class="logo-img" style="height: 40px;">
                </div>
            </a>
            <span style="color: white; font-weight: bold;">Ελληνική DBpedia</span>
        </div>

        <div style="display: flex; align-items: center; gap: 30px; margin-left: auto;">
            <nav>
                <ul style="display: flex; gap: 20px; list-style: none; margin: 0; padding: 0;">
                    <li><a href="./" style="color: white; text-decoration: none;">Αρχική</a></li>
                    <li><a href="#" style="color: white; text-decoration: none;">Η Ομάδα</a></li>
                    <li><a href="./examples" style="color: white; text-decoration: none;">Παραδείγματα</a></li>
                </ul>
            </nav>
        </div>
    </div>
</header>

<main>
    
    <!-- DBpedia Description Section -->
    <section class="max-w-5xl mx-auto px-4 py-12" id="team">
        <h2 class="text-3xl font-bold mb-6">Η Ομάδα της Ελληνικής DBpedia</h2>
        <p class="mb-4">
            Τα δεδομένα της DBpedia προέρχονται από τη συλλογική προσπάθεια της κοινότητας της Wikipedia και δεν θα
            υπήρχαν χωρίς την εθελοντική και αποτελεσματική συμβολή των διαχειριστών και συγγραφέων της Wikipedia.
        </p>
        <p class="mb-4">
            Στόχος της ομάδας DBpedia Greek είναι η αναβάθμιση της χρηστικότητας και της αξίας των δεδομένων της
            ελληνικής Wikipedia μέσω της διασύνδεσης τους με διεθνή σύνολα δεδομένων και της ανάπτυξης
            σημασιολογικής
            αναπαράστασης για την επεξεργασία γνώσης.
        </p>
        <p class="mb-4">
            Συνεπώς, πάνω απ' όλα, είμαστε βαθιά ευγνώμονες προς την κοινότητα της ελληνικής Wikipedia.
        </p>
        <p class="mb-4">
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
        <p class="mb-4">
            <strong>Ερευνητική Ομάδα:</strong> κ. Δημήτρης Κοντοκώστας, Δρ. Χαράλαμπος Μπράτσας, Καθ. Ιωάννης
            Αντωνίου,
            Καθ. Γιώργος Μητακίδης.
        </p>
        <p class="mb-4">
            Το πρώτο βήμα προς την Ελληνική DBpedia έγινε κατά τη διάρκεια του μαθήματος "Επεξεργασία Γνώσης στο
            Διαδίκτυο" το ακαδημαϊκό έτος 2009-2010. Οι φοιτητές Αλεξίου Σ., Καραλής Α., Καρβούνας Γ., Κοντοκώστας
            Δ.
            και Ξανθοπούλου Π., υπό την επίβλεψη του Δρ. Χαράλαμπου Μπράτσα, δημιούργησαν τους πρώτους DBpedia
            mappings
            στο πλαίσιο της πτυχιακής τους εργασίας.
        </p>
        <p>
            Το επόμενο βήμα έγινε σε συνεργασία του κ. Δημήτρη Κοντοκώστα, όπου αναπτύχθηκε το I18n DBpedia Information
            Extraction Framework ως μέρος της μεταπτυχιακής του διατριβής.
        </p>
        <p class="mt-4 text-gray-700">
            Το παρόν έργο αφορά τη διεθνοποίηση της DBpedia.
            Μπορείτε να διαβάσετε περισσότερα στο
            <a href="https://www.sciencedirect.com/science/article/abs/pii/S1570826812000030" target="_blank"
                rel="noopener noreferrer"
                class="text-yellow-800 hover:text-blue-600 hover:underline inline-flex items-center transition-colors duration-200">
                σχετικό επιστημονικό άρθρο
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