<!DOCTYPE html>
<html lang="it">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Glory Church</title>
    <link rel="stylesheet" href="/css/style.css" type="style/css" />
    <link rel="icon" href="img/favicon.ico" type="image/x-icon" />
    <link rel="stylesheet" href="css/all.min.css" />
  </head>
  <body>
    <header>
      <div id="head-cont">
        <div class="header-content">
          <div class="logo">
            <a href="/">
              <img
                src="img/logo-chiesa.png"
                alt="Logo Chiesa Evangelica"
                height="50"
              />
              <h1>Chiesa Evangelica [Nome Città/Regione]</h1>
            </a>
          </div>

          <nav class="main-nav">
            <ul>
              <li><a href="../../index.html">Home</a></li>
              <li><a href="../about.html">Chi Siamo</a></li>
              <li class="dropdown">
                <a href="resources.html">Risorse Online</a>
                <ul class="submenu">
                  <li><a href="sermoni.html">Sermoni</a></li>
                  <li><a href="libri.html">Libri Cristiani</a></li>
                  <li><a href="musica.html">Musica (YouTube)</a></li>
                </ul>
              </li>
              <li><a href="../activity.html">Attività & Eventi</a></li>
              <li><a href="contacts.html">Contatti</a></li>
            </ul>
          </nav>

          <div class="header-tools">
            <div class="language-switcher">
              <a href="#" class="current-lang">UA (Ucraino)</a>
              <ul class="lang-options">
                <li><a href="en/index.html">EN (English)</a></li>
                <li><a href="ru/index.html">RU (Русский)</a></li>
              </ul>
            </div>

            <button class="menu-toggle" aria-label="Apri Menu">&#9776;</button>
          </div>
        </div>
      </div>
    </header>

    <main>
      <section id="page-hero" class="small-hero">
        <div class="container">
          <h1>Archivio Sermoni</h1>
          <p>
            Ascolta o scarica i messaggi della Parola di Dio per la tua crescita
            spirituale.
          </p>
        </div>
      </section>

      <section id="sermons-archive" class="container content-section">
        <div class="filter-controls">
          <input
            type="text"
            id="search-bar"
            placeholder="Cerca per titolo, oratore o passo biblico..."
          />

          <select id="filter-speaker">
            <option value="">Tutti gli Oratori</option>
            <option value="pastore-capo">[Nome Pastore Capo]</option>
            <option value="pastore-associato">[Nome Pastore Associato]</option>
          </select>

          <select id="filter-series">
            <option value="">Tutte le Serie</option>
            <option value="fede-nel-caos">Fede nel Caos</option>
            <option value="studio-marco">Studio del Vangelo di Marco</option>
          </select>

          <select id="filter-book">
            <option value="">Tutti i Libri Biblici</option>
            <option value="genesi">Genesi</option>
            <option value="salmi">Salmi</option>
            <option value="romani">Romani</option>
          </select>
        </div>

        <div id="sermons-list" class="sermons-grid">
          <article
            class="sermon-card"
            data-speaker="pastore-capo"
            data-series="fede-nel-caos"
            data-book="salmi"
          >
            <div class="sermon-meta">
              <span class="sermon-date">20 Ottobre 2024</span>
              <span class="sermon-speaker">[Nome Pastore Capo]</span>
            </div>
            <h3>La Fiducia nel Salmo 46: Dio è il Nostro Rifugio</h3>
            <p class="sermon-passage">Salmo 46:1-3</p>
            <p class="sermon-snippet">
              Un messaggio di incoraggiamento su come trovare stabilità in
              Cristo, anche quando il mondo intorno è in subbuglio.
            </p>
            <div class="sermon-actions">
              <a
                href="audio/salmo46.mp3"
                class="btn-action download-btn"
                download
                aria-label="Scarica audio"
                ><i class="icon-download"></i> Scarica</a
              >

              <a
                href="[LINK YOUTUBE SERMONE]"
                target="_blank"
                class="btn-action video-btn"
                aria-label="Guarda su YouTube"
                ><i class="icon-youtube"></i> Video</a
              >

              <button
                class="btn-action listen-btn"
                data-audio-src="audio/salmo46.mp3"
                aria-label="Ascolta ora"
              >
                <i class="icon-play"></i> Ascolta
              </button>
            </div>
          </article>
          <article
            class="sermon-card"
            data-speaker="pastore-capo"
            data-series="studio-marco"
            data-book="marco"
          >
            <div class="sermon-meta">
              <span class="sermon-date">13 Ottobre 2024</span>
              <span class="sermon-speaker">[Nome Pastore Capo]</span>
            </div>
            <h3>Serie Marco, Parte 4: L'Autorità di Gesù (Cap. 2)</h3>
            <p class="sermon-passage">Marco 2:1-12</p>
            <p class="sermon-snippet">
              Esaminando la guarigione del paralitico, scopriamo come l'autorità
              di Gesù si estenda sia sulla malattia che sul peccato.
            </p>
            <div class="sermon-actions">
              <a
                href="audio/marco2.mp3"
                class="btn-action download-btn"
                download
                aria-label="Scarica audio"
                ><i class="icon-download"></i> Scarica</a
              >
              <a
                href="[LINK YOUTUBE SERMONE 2]"
                target="_blank"
                class="btn-action video-btn"
                aria-label="Guarda su YouTube"
                ><i class="icon-youtube"></i> Video</a
              >
              <button
                class="btn-action listen-btn"
                data-audio-src="audio/marco2.mp3"
                aria-label="Ascolta ora"
              >
                <i class="icon-play"></i> Ascolta
              </button>
            </div>
          </article>
        </div>

        <div class="pagination">
          <a href="#" class="page-link disabled">&laquo; Precedente</a>
          <a href="#" class="page-link active">1</a>
          <a href="#" class="page-link">2</a>
          <a href="#" class="page-link">3</a>
          <a href="#" class="page-link">Prossima &raquo;</a>
        </div>
      </section>
    </main>

    <footer>
      <div id="foot-cont">
        <div class="footer-section contact-info">
          <h3>Contattaci</h3>
          <p>
            <strong>Indirizzo:</strong> [Indirizzo Fisico Completo, Città,
            Ucraina]
          </p>
          <p>
            <strong>Email:</strong>
            <a href="mailto:info@tuochiesa.ua">info@tuochiesa.ua</a>
          </p>
          <p><strong>Telefono:</strong> [+380 XX XXX XX XX]</p>
          <p class="service-times-footer">Culto Domenicale: 10:00</p>
        </div>

        <div class="footer-section quick-links">
          <h3>Navigazione</h3>
          <ul>
            <li><a href="../about.html">La Nostra Fede</a></li>
            <li><a href="../activity.html">Eventi & Calendario</a></li>
            <li><a href="/">Archivio Sermoni</a></li>
            <li><a href="../donat.html">Aiuto Umanitario</a></li>
          </ul>
        </div>

        <div class="footer-section resources-legal">
          <h3>Risorse & Legale</h3>
          <ul>
            <li><a href="books.html">Libri Online</a></li>
            <li><a href="/"></a></li>
            <li><a href="/"></a></li>
            <li><a href="/"></a></li>
          </ul>
        </div>

        <div class="footer-section social-media">
          <h3>Seguici</h3>
          <div class="social-icons">
            <a href="[LINK FACEBOOK]" target="_blank" aria-label="Facebook"
              ><i class="icon-facebook"></i
            ></a>
            <a href="[LINK YOUTUBE]" target="_blank" aria-label="YouTube"
              ><i class="icon-youtube"></i
            ></a>
            <a href="[LINK INSTAGRAM]" target="_blank" aria-label="Instagram"
              ><i class="icon-instagram"></i
            ></a>
            <a href="[LINK TELEGRAM]" target="_blank" aria-label="Telegram"
              ><i class="icon-telegram"></i
            ></a>
          </div>

          <p class="mission-statement">
            "La nostra missione: Amare Dio, servire il prossimo."
          </p>
        </div>
        <div class="footer-bottom">
          <p>
            &copy; 2024 Chiesa Cristiana Evangelica [Nome]. Tutti i diritti
            riservati.
          </p>
          <p>Realizzato con fede e speranza.</p>
        </div>
      </div>
    </footer>

    <script>
      document.addEventListener("DOMContentLoaded", () => {
        const searchBar = document.getElementById("search-bar");
        const filterSpeaker = document.getElementById("filter-speaker");
        const filterSeries = document.getElementById("filter-series");
        const filterBook = document.getElementById("filter-book");
        const sermonsList = document.getElementById("sermons-list");
        const sermonCards = sermonsList.querySelectorAll(".sermon-card");

        function filterSermons() {
          const searchText = searchBar.value.toLowerCase();
          const selectedSpeaker = filterSpeaker.value;
          const selectedSeries = filterSeries.value;
          const selectedBook = filterBook.value;

          sermonCards.forEach((card) => {
            const title = card.querySelector("h3").textContent.toLowerCase();
            const speaker = card.getAttribute("data-speaker");
            const series = card.getAttribute("data-series");
            const book = card.getAttribute("data-book");
            const passage = card
              .querySelector(".sermon-passage")
              .textContent.toLowerCase();

            // 1. Filtro Ricerca Testuale (Titolo, Oratore, Passo)
            const textMatch =
              title.includes(searchText) ||
              card
                .querySelector(".sermon-speaker")
                .textContent.toLowerCase()
                .includes(searchText) ||
              passage.includes(searchText);

            // 2. Filtro Oratore
            const speakerMatch =
              selectedSpeaker === "" || speaker === selectedSpeaker;

            // 3. Filtro Serie
            const seriesMatch =
              selectedSeries === "" || series === selectedSeries;

            // 4. Filtro Libro Biblico
            const bookMatch = selectedBook === "" || book === selectedBook;

            if (textMatch && speakerMatch && seriesMatch && bookMatch) {
              card.style.display = "block"; // Mostra la scheda
            } else {
              card.style.display = "none"; // Nascondi la scheda
            }
          });
        }

        // Aggiungi ascoltatori di eventi a tutti gli input di filtro
        searchBar.addEventListener("input", filterSermons);
        filterSpeaker.addEventListener("change", filterSermons);
        filterSeries.addEventListener("change", filterSermons);
        filterBook.addEventListener("change", filterSermons);

        // Logica base per il pulsante "Ascolta" (potrebbe aprire un player audio, un modale, ecc.)
        sermonsList.addEventListener("click", (e) => {
          if (e.target.closest(".listen-btn")) {
            const button = e.target.closest(".listen-btn");
            const audioSrc = button.getAttribute("data-audio-src");
            alert(
              `Avvio riproduzione audio: ${audioSrc}\nQui andrebbe la logica per aprire un lettore audio o un pop-up.`
            );
          }
        });
      });
    </script>
  </body>
</html>
