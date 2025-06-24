<!DOCTYPE html>
<html lang="el">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Ελληνική DBpedia – Αρχική</title>

    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet" />
    <link rel="icon" href="./img/dbpedia-logo.png" type="image/x-icon" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />
    <link href="./css/style.css" rel="stylesheet" />
    <style>
        .partner-logo {
            height: 32px;
            max-height: 32px;
            width: auto;
            object-fit: contain;
            transition: opacity 0.3s ease;
            margin-top: 20px;
        }

        .partner-logo:hover {
            opacity: 0.8;
        }
    </style>
</head>

<body>
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
                        <li><a href="#" style="color: white; text-decoration: none;">Αρχική</a></li>
                        <li><a href="./people" style="color: white; text-decoration: none;">Η Ομάδα</a></li>
                        <li><a href="./examples" style="color: white; text-decoration: none;">Παραδείγματα</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>

    <main>
        <section class="hero" id="home">
            <canvas id="semanticCanvas"></canvas>
            <h1 id="hero-title">Global & Unified Access to Greek Knowledge Graph</h1>
            <p id="hero-desc">Η πύλη σου στον ελληνικό σημασιολογικό ιστό: ανοιχτά, διασυνδεδεμένα δεδομένα για όλους.
            </p>
            <button class="cta-btn" onclick="location.href='#aboutsection'" id="hero-btn">Ξεκίνα τώρα</button>
        </section>

        <section class="info-section" id="aboutsection">
            <div class="info-grid">
                <div class="info-card fancy-left" id="about">
                    <h2><i class="fas fa-info-circle"></i> <span id="about-title">Σχετικά</span></h2>
                    <p id="about-text">
                        Η DBpedia είναι μια «κοινοτική προσπάθεια για την εξαγωγή δομημένης πληροφορίας από τη Wikipedia
                        και τη διάθεση αυτής της πληροφορίας στο Διαδίκτυο». Η DBpedia σας επιτρέπει να κάνετε πολύπλοκα
                        ερωτήματα πάνω στα δεδομένα της Wikipedia, καθώς και να συνδέετε άλλα σύνολα δεδομένων του Ιστού
                        με τα δεδομένα της Wikipedia. Ελπίζουμε ότι αυτό θα διευκολύνει τη χρήση της τεράστιας
                        πληροφορίας που περιέχεται στη Wikipedia με νέους και ενδιαφέροντες τρόπους, και ότι μπορεί να
                        εμπνεύσει νέους μηχανισμούς πλοήγησης, σύνδεσης και βελτίωσης της ίδιας της εγκυκλοπαίδειας.
                    </p>
                    <p id="about-text2">
                        Η ελληνική DBpedia αποτελεί το πρώτο βήμα προς τη Διεθνοποίηση των Συνδεδεμένων Δεδομένων
                        (Linked Data) και την πρώτη επιτυχημένη προσπάθεια παροχής Συνδεδεμένων Δεδομένων με
                        απο-ανακτήσιμα IRI, τα οποία μπορούν να χρησιμεύσουν ως οδηγός για τη δημοσίευση LOD (Linked
                        Open Data) σε μη-λατινικές γλώσσες. </p>
                </div>

                <div class="info-card fancy-right">
                    <h2 id="extra-title" class="flex items-center gap-2 text-3xl font-semibold text-gray-900">
                        <i class="fa-solid fa-users text-blue-600"></i>
                        Μέλη της DBpedia
                    </h2>
                    <p id="extra-text">
                        Ο Σύνδεσμος DBpedia έχει διαμορφώσει ένα ευρύ και διεθνές δίκτυο μελών, αποτελούμενο από
                        κορυφαίους εκπροσώπους της βιομηχανίας και της ακαδημαϊκής κοινότητας. Όλα τα μέλη δεσμεύονται
                        στην υποστήριξη και προώθηση της DBpedia, αξιοποιώντας ενεργά το Open Knowledge Graph για τον
                        εμπλουτισμό και τη βελτίωση των δεδομένων τους. Σας προσκαλούμε να γνωρίσετε αναλυτικά τα μέλη
                        και τους συνεργάτες μας.
                    </p>

                    <div class="flex flex-wrap gap-6 items-center mt-4 mb-6">
                        <a href="https://okfn.gr" target="_blank" rel="noopener">
                            <img src="./img/okfn-logo.png" alt="OKFN logo" class="partner-logo" />
                        </a>
                        <a href="https://www.iee.ihu.gr/" target="_blank" rel="noopener">
                            <img src="./img/iee-logo.png" alt="IEE logo" class="partner-logo" />
                        </a>
                        <a href="https://www.ihu.gr/" target="_blank" rel="noopener">
                            <img src="./img/ihu-logo.png" alt="IHU logo" class="partner-logo" />
                        </a>
                        
                    </div>


                    <button id="openMembersBtn" class="btn-liquid-glass">Δείτε όλη την ομάδα</button>
                </div>
            </div>
        </section>

        <section class="olive-section">
            <div class="olive-content">
                <h2 class="olive-title">Μάθε Σχετικά για την DBpedia</h2>

                <div class="olive-text">
                    <p>
                        Η DBpedia αποτελεί μια κοινοτικά καθοδηγούμενη προσπάθεια εξαγωγής δομημένου περιεχομένου από
                        τις πληροφορίες που δημιουργούνται σε διάφορα έργα του Wikimedia. Οι πληροφορίες αυτές
                        διαμορφώνουν έναν ανοικτό γράφο γνώσης (Open Knowledge Graph), ο οποίος είναι διαθέσιμος για
                        όλους στον Παγκόσμιο Ιστό. Ένας γράφος γνώσης είναι ένας ιδιαίτερος τύπος βάσης δεδομένων, που
                        αποθηκεύει τη γνώση σε μορφή αναγνώσιμη από μηχανές και παρέχει τα μέσα για συλλογή, οργάνωση,
                        διαμοιρασμό, αναζήτηση και αξιοποίηση της πληροφορίας. Μια παρόμοια προσέγγιση χρησιμοποιεί και
                        η Google για τη δημιουργία των καρτών γνώσης στα αποτελέσματα αναζήτησης. Ελπίζουμε ότι αυτό το
                        έργο θα διευκολύνει τη χρήση του τεράστιου όγκου πληροφορίας των έργων του Wikimedia με νέους
                        και ενδιαφέροντες τρόπους.
                    </p>

                    <p>
                        Τα δεδομένα της DBpedia προσφέρονται ως Linked Data, μια τεχνολογία που επαναπροσδιορίζει τον
                        τρόπο με τον οποίο οι εφαρμογές αλληλεπιδρούν με τον Ιστό. Ο καθένας μπορεί να περιηγηθεί σε
                        αυτό τον ιστό γεγονότων μέσω τυπικών φυλλομετρητών, αυτοματοποιημένων crawler ή να εκτελέσει
                        πολύπλοκα ερωτήματα με γλώσσες τύπου SQL, όπως η SPARQL. Σκεφτήκατε ποτέ να ρωτήσετε τον Ιστό
                        για όλες τις πόλεις με χαμηλή εγκληματικότητα, ζεστό κλίμα και ανοιχτές θέσεις εργασίας; Αυτός
                        είναι ο τύπος ερωτημάτων που καθιστούν δυνατοί οι γράφοι γνώσης όπως η DBpedia.
                    </p>
                </div>

                <ul class="olive-list">
                    <li><span class="highlight">✔</span> Παρέχει ανοικτά, συνδεδεμένα δεδομένα για χρήση από κάθε φορέα.
                    </li>
                    <li><span class="highlight">✔</span> Υποστηρίζει τη διαλειτουργικότητα με άλλα Linked Open Data
                        σύνολα.</li>
                    <li><span class="highlight">✔</span> Ιδανική για έρευνα, εκπαιδευτικά projects και καινοτομία στον
                        Ιστό Σημασιολογίας.</li>
                    <li><span class="highlight">✔</span> Διεθνής κοινότητα & υποστήριξη σε πολλές γλώσσες.</li>
                </ul>

                <div class="btn-container-yl">
                    <a href="about" class="btn-yellow">Περισσότερες Λεπτομέρειες</a>
                </div>
            </div>
        </section>

        <!-- Popup modal -->
        <div id="membersModal" class="modal">
            <div class="modal-content liquid-glass">
                <span class="close-btn" id="closeMembersBtn">&times;</span>
                <h3>Η ομάδα της ελληνικής DBpedia</h3>
                <div class="members-gallery">
                    <div class="member-card">
                        <img src="./img/bratsas.jpg" alt="Μέλος 1" />
                        <div class="member-info">
                            <h4>Χαράλαμπος Μπράτσας</h4>
                            <p>Scientific Coordinator</p>
                        </div>
                    </div>
                    <div class="member-card">
                        <img src="./img/lazaros_img.jpg" alt="Μέλος 3" />
                        <div class="member-info">
                            <h4>Λάραζος Ιωαννίδης</h4>
                            <p>Μέλος της ελληνικής DBpedia</p>
                        </div>
                    </div>
                    <div class="member-card">
                        <img src="./img/kontokostas-img.jpg" alt="Μέλος 2" />
                        <div class="member-info">
                            <h4>Δημήτρης Κοντοκώστας</h4>
                            <p>Μέλος της ελληνικής DBpedia</p>
                        </div>
                    </div>
                    <div class="member-card">
                        <img src="./img/notis-img.jpg" alt="Μέλος 3" />
                        <div class="member-info">
                            <h4>Παναγιώτης-Μάριος Φιλιππίδης</h4>
                            <p>Μέλος της ελληνικής DBpedia</p>
                        </div>
                    </div>
                    <div class="member-card">
                        <img src="./img/adam-img.jpg" alt="Μέλος 3" />
                        <div class="member-info">
                            <h4>Αδάμ Φιλιππίδης</h4>
                            <p>Μέλος της ελληνικής DBpedia</p>
                        </div>
                    </div>
                    <div class="member-card">
                        <img src="./img/elisavet-img.jpg" alt="Μέλος 3" />
                        <div class="member-info">
                            <h4>Ελισάβετ Παρίση</h4>
                            <p>Μέλος της ελληνικής DBpedia</p>
                        </div>
                    </div>
                    <div class="member-card">
                        <img src="./img/kazlaris_img.png" alt="Μέλος 3" />
                        <div class="member-info">
                            <h4>Γιώργος-Χριστόφορος Καζλάρης</h4>
                            <p>Μέλος της ελληνικής DBpedia</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </main>

    <footer>
        <div class="footer-content">
            <div>
                &copy; 2025 Georgios Christoforos Kazlaris. Όλα τα δικαιώματα κατοχυρωμένα.
            </div>
        </div>
    </footer>

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
                        ctx.strokeStyle = `rgba(255,255,255,${1 - dist / 120})`;
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

    <script>
        const openBtn = document.getElementById('openMembersBtn');
        const modal = document.getElementById('membersModal');
        const closeBtn = document.getElementById('closeMembersBtn');

        openBtn.addEventListener('click', () => {
            modal.style.display = 'flex';
        });

        closeBtn.addEventListener('click', () => {
            modal.style.display = 'none';
        });

        window.addEventListener('click', (e) => {
            if (e.target === modal) {
                modal.style.display = 'none';
            }
        });

    </script>
</body>

</html>