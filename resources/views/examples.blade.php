<!DOCTYPE html>
<html lang="el">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Παραδείγματα - DBpedia Greek</title>

    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />
    <link rel="icon" href="./img/dbpedia-logo.png" type="image/x-icon" />
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet" />
    <link href="./css/style.css" rel="stylesheet" />

    <style>
        pre code {
            font-family: 'Fira Code', monospace, monospace;
            font-size: 0.9rem;
            line-height: 1.4;
        }

        pre::-webkit-scrollbar {
            height: 8px;
        }

        pre::-webkit-scrollbar-thumb {
            background: rgb(211, 162, 2);
            border-radius: 4px;
        }

        pre::-webkit-scrollbar-track {
            background: #1e1e1e;
        }
    </style>
</head>

<body class="flex flex-col min-h-screen">

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
                        <li><a href="./people" style="color: white; text-decoration: none;">Η Ομάδα</a></li>
                        <li><a href="#" style="color: white; text-decoration: none;">Παραδείγματα</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>

    <main class="flex-grow container mx-auto px-4 sm:px-6 lg:px-8 py-10 max-w-5xl">

        <section>
            <h2 class="text-3xl font-semibold mb-6 text-gray-900">SPARQL</h2>

            <p class="mb-6 max-w-3xl text-gray-700 text-lg leading-relaxed">
                Οι παρακάτω ερωτήσεις μπορούν να εκτελεστούν στο
                <a href="https://web.archive.org/web/20201205120544/http://el.dbpedia.org/sparql" target="_blank"
                    rel="noopener noreferrer" class="text-blue-600 hover:underline font-semibold">
                    SPARQL Endpoint
                </a>
                της εφαρμογής. Τα δεδομένα υπακούν στην οντολογία της DBpedia και ο γράφος στον οποίο ανήκουν τα
                δεδομένα
                είναι:
            </p>

            <p class="mb-10 font-mono bg-gray-100 p-4 rounded border border-gray-300 max-w-xs select-all shadow-sm">
                http://el.dbpedia.org
            </p>

            <div class="space-y-10">

                <!-- Παράδειγμα 1 -->
                <article
                    class="bg-white rounded-lg shadow-md p-6 border border-gray-200 hover:shadow-lg transition duration-300">
                    <h3 class="text-xl font-semibold mb-3 text-gray-900">Ημερομηνία και τόπος θανάτου του Μ. Αλέξανδρου
                    </h3>
                    <p class="mb-5 text-gray-700 text-base leading-relaxed">
                        Εμφάνιση της ημερομηνίας και του τόπου θανάτου του Μ. Αλέξανδρου
                    </p>
                    <pre
                        class="language-sparql rounded-lg overflow-x-auto bg-[#2d2d2d] text-gray-100 p-5 border border-gray-800 shadow-inner">
<code>PREFIX dbpedia: &lt;http://el.dbpedia.org/resource/&gt;
PREFIX ontology: &lt;http://dbpedia.org/ontology/&gt;

select ?deathDate ?deathPlace
where {
  dbpedia:Αλέξανδρος_ο_Μέγας ontology:deathDate ?deathDate ;
                             ontology:deathPlace ?deathPlace.
}</code></pre>
                    <button
                        class="mt-4 px-5 py-2 bg-yellow-600 text-white rounded-lg hover:bg-yellow-800 transition inline-flex items-center gap-2 select-none"
                        aria-label="Αντιγραφή κώδικα">
                        <i class="fa-regular fa-copy text-lg"></i> <span>Αντιγραφή</span>
                    </button>
                </article>

                <!-- Παράδειγμα 2 -->
                <article
                    class="bg-white rounded-lg shadow-md p-6 border border-gray-200 hover:shadow-lg transition duration-300">
                    <h3 class="text-xl font-semibold mb-3 text-gray-900">Κατοικημένα νησιά του Αιγαίου</h3>
                    <p class="mb-5 text-gray-700 text-base leading-relaxed">
                        Εμφάνιση των κατοικημένων νησιών του Αιγαίου με τις επίσημες ιστοσελίδες (όπου αυτές υπάρχουν)
                        ταξινομημένα
                        με βάση τον πληθυσμό
                    </p>
                    <pre
                        class="language-sparql rounded-lg overflow-x-auto bg-[#2d2d2d] text-gray-100 p-5 border border-gray-800 shadow-inner">
<code>PREFIX rdf: &lt;http://www.w3.org/1999/02/22-rdf-syntax-ns#&gt;
PREFIX rdfs: &lt;http://www.w3.org/2000/01/rdf-schema#&gt;
PREFIX foaf:  &lt;http://xmlns.com/foaf/0.1/&gt;
PREFIX dbpedia: &lt;http://el.dbpedia.org/resource/&gt;
PREFIX ontology: &lt;http://dbpedia.org/ontology/&gt;

select ?name ?population ?url
where {
  ?o rdf:type ontology:Island;
     ontology:archipelago  dbpedia:Αιγαίο_Πέλαγος;
     rdfs:label ?name;
     dbpedia-owl:populationTotal ?population .
   OPTIONAL { ?o foaf:homepage ?url }
   FILTER (?population > 0) .
} ORDER BY DESC(?population)</code></pre>
                    <button
                        class="mt-4 px-5 py-2 bg-yellow-600 text-white rounded-lg hover:bg-yellow-800 transition inline-flex items-center gap-2 select-none"
                        aria-label="Αντιγραφή κώδικα">
                        <i class="fa-regular fa-copy text-lg"></i> <span>Αντιγραφή</span>
                    </button>
                </article>

                <!-- Παράδειγμα 3 -->
                <article
                    class="bg-white rounded-lg shadow-md p-6 border border-gray-200 hover:shadow-lg transition duration-300">
                    <h3 class="text-xl font-semibold mb-3 text-gray-900">Έλληνες προσωκρατικοί φιλόσοφοι</h3>
                    <p class="mb-5 text-gray-700 text-base leading-relaxed">
                        Εμφάνιση όλων των Ελλήνων προσωκρατικών φιλόσοφων
                    </p>
                    <pre
                        class="language-sparql rounded-lg overflow-x-auto bg-[#2d2d2d] text-gray-100 p-5 border border-gray-800 shadow-inner">
<code>PREFIX dbpedia: &lt;http://el.dbpedia.org/resource/&gt;
PREFIX ontology: &lt;http://dbpedia.org/ontology/&gt;
PREFIX category: &lt;http://el.dbpedia.org/resource/Κατηγορία:&gt;
PREFIX rdf: &lt;http://www.w3.org/1999/02/22-rdf-syntax-ns#&gt;
PREFIX rdfs: &lt;http://www.w3.org/2000/01/rdf-schema#&gt;
PREFIX skos: &lt;http://www.w3.org/2004/02/skos/core#&gt;

select distinct ?name
where {
  ?o rdfs:label ?name;
     rdf:type ontology:Philosopher;
     dcterms:subject category:Προσωκρατικοί_φιλόσοφοι.
}</code></pre>
                    <button
                        class="mt-4 px-5 py-2 bg-yellow-600 text-white rounded-lg hover:bg-yellow-800 transition inline-flex items-center gap-2 select-none"
                        aria-label="Αντιγραφή κώδικα">
                        <i class="fa-regular fa-copy text-lg"></i> <span>Αντιγραφή</span>
                    </button>
                </article>

                <!-- Παράδειγμα 4 -->
                <article
                    class="bg-white rounded-lg shadow-md p-6 border border-gray-200 hover:shadow-lg transition duration-300">
                    <h3 class="text-xl font-semibold mb-3 text-gray-900">Αλφαβητική λίστα χωρών</h3>
                    <p class="mb-5 text-gray-700 text-base leading-relaxed">
                        Αλφαβητική λίστα των χωρών με τις πρωτεύουσές τους (αν υπάρχουν)
                    </p>
                    <pre
                        class="language-sparql rounded-lg overflow-x-auto bg-[#2d2d2d] text-gray-100 p-5 border border-gray-800 shadow-inner">
<code>PREFIX ontology: &lt;http://dbpedia.org/ontology/&gt;
PREFIX rdfs: &lt;http://www.w3.org/2000/01/rdf-schema#&gt;

select ?country ?capital
where {
  ?c       rdf:type ontology:Country;
           rdfs:label ?country.
      OPTIONAL { 
           ?c ontology:capital ?cap_uri.
           ?cap_uri rdfs:label ?capital .
      }
}
ORDER BY ASC(?country )</code></pre>
                    <button
                        class="mt-4 px-5 py-2 bg-yellow-600 text-white rounded-lg hover:bg-yellow-800 transition inline-flex items-center gap-2 select-none"
                        aria-label="Αντιγραφή κώδικα">
                        <i class="fa-regular fa-copy text-lg"></i> <span>Αντιγραφή</span>
                    </button>
                </article>

            </div>

        </section>

    </main>

    <footer>
        <div class="footer-content">
            <div>
                &copy; 2025 Georgios Christoforos Kazlaris. Όλα τα δικαιώματα κατοχυρωμένα.
            </div>
        </div>
    </footer>

    <script>
        document.querySelectorAll('button[aria-label="Αντιγραφή κώδικα"]').forEach(button => {
            button.addEventListener('click', () => {
                const codeBlock = button.previousElementSibling.querySelector('code');
                if (!codeBlock) return;
                const text = codeBlock.innerText.trim();
                navigator.clipboard.writeText(text).then(() => {
                    button.querySelector('span').textContent = 'Αντιγράφηκε ✓';
                    button.classList.add('bg-green-600');
                    button.classList.remove('bg-blue-600');
                    setTimeout(() => {
                        button.querySelector('span').textContent = 'Αντιγραφή';
                        button.classList.add('bg-blue-600');
                        button.classList.remove('bg-green-600');
                    }, 2000);
                });
            });
        });
    </script>

</body>

</html>