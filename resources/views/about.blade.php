<!DOCTYPE html>
<html lang="el">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Σχετικά - DBpedia Greek</title>

    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />
    <link rel="icon" href="./img/dbpedia-logo.png" type="image/x-icon">
    <link href="./css/people-style.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
    <style>
        p.text-justify {
            text-align: justify;
        }
    </style>
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
      <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
        viewBox="0 0 24 24" stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round"
          stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
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
        <h2 class="text-3xl font-bold mb-6">Γνωρίστε την DBpedia</h2>

        <p class="mb-4 text-justify">
            Αν σας ενδιαφέρει το έργο μας, αλλά είστε νέοι στην DBpedia, υπάρχουν ορισμένα άρθρα που μπορούν να σας
            βοηθήσουν να ξεκινήσετε:
        </p>

        <ul class="list-disc list-inside mb-6 space-y-2">
            <li>
                <strong>DBpedia – Μια μεγάλης κλίμακας, πολύγλωσση βάση γνώσης που εξάγεται από τη
                    Wikipedia.</strong><br />
                Jens Lehmann, Robert Isele, Max Jakob, Anja Jentzsch, Dimitris Kontokostas, Pablo N. Mendes, Sebastian
                Hellmann, Mohamed Morsey, Patrick van Kleef, Sören Auer, Christian Bizer.
            </li>

            <li>
                <strong>Διεθνοποίηση της DBpedia:</strong><br />
                Dimitris Kontokostas, Charalampos Bratsas, Sören Auer, Sebastian Hellmann, Ioannis Antoniou, George
                Metakides. Web Semantics, Τόμος 15, Σεπτέμβριος 2012, σελ. 51–61.
            </li>
        </ul>

        <h3 class="text-2xl font-semibold mb-3">Η Βάση Γνώσης της DBpedia</h3>
        <p class="mb-4 text-justify">
            Οι βάσεις γνώσης παίζουν σημαντικό ρόλο στην ενίσχυση της ευφυΐας των μηχανών αναζήτησης και της ενοποίησης
            της πληροφορίας. Η DBpedia αξιοποιεί την τεράστια ποσότητα πληροφορίας της Wikipedia για να εξάγει δομημένα
            δεδομένα και να τα καθιστά προσβάσιμα στον Ιστό υπό άδειες Creative Commons και GNU Free Documentation.
        </p>
        <p class="mb-4 text-justify">
            Η DBpedia υπερτερεί έναντι παραδοσιακών βάσεων γνώσης, καθώς καλύπτει πολλούς τομείς, εξελίσσεται αυτόματα
            με την Wikipedia, εκφράζει συμφωνία της κοινότητας και υποστηρίζει πολλές γλώσσες. Επιτρέπει ερωτήματα όπως:
            «Δείξε μου όλες τις πόλεις στο New Jersey με πάνω από 10.000 κατοίκους» ή «Όλοι οι Ιταλοί μουσικοί του 18ου
            αιώνα».
        </p>

        <h3 class="text-2xl font-semibold mb-3">Η Αρχιτεκτονική Παροχής Δεδομένων της DBpedia</h3>
        <p class="mb-4 text-justify">
            Το RDF Data Set της DBpedia φιλοξενείται και δημοσιεύεται μέσω της υποδομής OpenLink Virtuoso, η οποία
            παρέχει πρόσβαση στα δεδομένα μέσω ενός SPARQL endpoint και υποστήριξη για HTML ή RDF αναπαραστάσεις μέσω
            HTTP.
        </p>

        <div class="mt-8 text-center">
            <a href="./"
                class="inline-block px-6 py-3 bg-amber-600 text-white font-semibold rounded-full shadow-lg transform transition duration-300 hover:bg-emerald-700 hover:-translate-y-1 hover:scale-105">
                ← Πίσω στην Αρχική
            </a>
        </div>

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