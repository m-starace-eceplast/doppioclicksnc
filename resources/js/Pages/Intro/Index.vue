<script setup>
import { ref, onMounted } from 'vue'
import { Head, usePage } from '@inertiajs/vue3';
import Footer from '../../Components/Footer.vue';

onMounted(() => {
  document.querySelectorAll('.inner-square').forEach((el) => {
    setTimeout(() => el.classList.add('loaded'), 1200) // piccolo delay per effetto più naturale
  })
  
  // Fix cursore forzato con JavaScript
  const forceCursor = () => {
    document.body.style.cursor = 'auto';
    document.documentElement.style.cursor = 'auto';
    
    // Rimuovi tutti gli stili che nascondono il cursore
    const elements = document.querySelectorAll('*');
    elements.forEach(el => {
      const styles = window.getComputedStyle(el);
      if (styles.cursor === 'none') {
        el.style.cursor = 'auto !important';
      }
    });
  };
  
  // Esegui immediatamente e poi ogni secondo
  forceCursor();
  setInterval(forceCursor, 1000);
  
  // Aggiungi event listener per forzare il cursore
  document.addEventListener('mousemove', forceCursor);
})

const cursorHand = usePage().props.images.cursorHand;

</script>

<template>
    <v-app>

        <Head title="Welcome" />
        <v-container fluid class="d-flex align-center justify-center fill-height pa-0 position-relative">
            <div class="outer-square">
                <!-- Riga superiore -->
                <v-row no-gutters class="inner-row">
                    <!-- Prima sezione -->
                    <v-col cols="12" sm="6" md="6" class="inner-square">
                        <v-row class="fill-height ma-0" align="center" justify="center">
                            <v-col class="d-flex flex-column align-center justify-center text-center pa-10">
                                <h1 class="text-h3 text-md-h2 font-weight-bold mb-3 text-uppercase text-primary">
                                    {{ String('Assistenza Stampanti HP').toUpperCase() }}
                                </h1>

                                <p class="text-body-1 text-grey-darken-2 mb-4" style="max-width: 800px;">
                                    Offriamo supporto tecnico specializzato per l’integrazione e la
                                    gestione delle stampanti nei tuoi ambienti HP. Diagnosi rapide,
                                    configurazioni personalizzate e ottimizzazione delle prestazioni
                                    per garantire la massima produttività.
                                </p>

                                <p class="text-body-2 text-grey-darken-1" style="max-width: 700px;">
                                    Dalla risoluzione dei problemi di rete alla manutenzione
                                    software, curiamo ogni dettaglio con precisione e affidabilità.
                                    Un servizio su misura, pensato per realtà professionali che
                                    vogliono eliminare tempi morti e inefficienze.
                                </p>
                            </v-col>
                        </v-row>
                    </v-col>

                    <!-- Seconda sezione -->
                    <v-col cols="12" sm="6" md="6" class="inner-square">
                        <v-row class="fill-height ma-0" align="center" justify="center">
                            <v-col class="d-flex flex-column align-center justify-center text-center pa-12">
                                <h1 class="text-h3 text-md-h2 font-weight-bold mb-3 text-uppercase text-primary">
                                    {{ String('Assistenza Stampanti SHARP').toUpperCase() }}
                                </h1>

                                <p class="text-body-1 text-grey-darken-2 mb-4"
                                    style="max-width: 780px; letter-spacing: 0.3px;">
                                    Supporto tecnico avanzato per stampanti integrate in ambienti
                                    SHARP. Interventi rapidi, configurazioni ottimizzate e
                                    monitoraggio costante delle prestazioni.
                                </p>

                                <p class="text-body-2 text-grey-darken-1" style="max-width: 680px; line-height: 1.6;">
                                    Dalla risoluzione di errori di spooler alla gestione dei driver
                                    su sistemi web server, offriamo un servizio professionale,
                                    scalabile e progettato per garantire continuità operativa.
                                </p>
                            </v-col>
                        </v-row>
                    </v-col>
                </v-row>

                <!-- Riga inferiore -->
                <v-row no-gutters class="inner-row">
                    <!-- Terza sezione -->
                    <v-col cols="12" sm="6" md="6" class="inner-square">
                        <v-row class="fill-height ma-0" align="center" justify="center">
                            <v-col class="d-flex flex-column align-center justify-center text-center pa-10">
                                <h2 class="text-h4 text-md-h3 font-weight-bold mb-3 text-primary text-uppercase">
                                    {{ String('Arredi d’Ufficio & Componentistica PC').toUpperCase() }}
                                </h2>

                                <p class="text-body-1 text-grey-darken-2 mb-4" style="max-width: 800px;">
                                    Scopri soluzioni integrate per il tuo ambiente di lavoro: dalle
                                    postazioni ergonomiche ai sistemi hardware su misura.
                                    Progettiamo spazi e tecnologie che migliorano produttività,
                                    comfort e stile.
                                </p>

                                <p class="text-body-2 text-grey-darken-1" style="max-width: 700px;">
                                    Ogni elemento — scrivanie, sedute, periferiche, componenti e reti
                                    — viene selezionato con cura per offrire il massimo equilibrio
                                    tra design, efficienza e affidabilità. Un approccio tecnico e
                                    funzionale pensato per le aziende moderne.
                                </p>
                            </v-col>
                        </v-row>
                    </v-col>

                    <!-- Quarta sezione -->
                    <v-col cols="12" sm="6" md="6" class="inner-square">
                        <v-row class="fill-height ma-0" align="center" justify="center">
                            <v-col class="d-flex flex-column align-center justify-center text-center pa-10">
                                <h2 class="text-h4 text-md-h3 font-weight-bold mb-3 text-primary text-uppercase">
                                    {{ String('Videosorveglianza & Sicurezza Aziendale').toUpperCase() }}
                                </h2>

                                <p class="text-body-1 text-grey-darken-2 mb-4" style="max-width: 800px;">
                                    Soluzioni avanzate di videosorveglianza per proteggere persone,
                                    dati e ambienti aziendali. Sistemi integrati con gestione da
                                    remoto, analisi intelligente e connessione sicura ai tuoi
                                    server.
                                </p>

                                <p class="text-body-2 text-grey-darken-1" style="max-width: 700px;">
                                    Dalla progettazione dell’impianto alla configurazione delle
                                    telecamere IP e dei registratori NVR, garantiamo affidabilità,
                                    controllo continuo e conformità alle normative sulla privacy.
                                </p>
                            </v-col>
                        </v-row>
                    </v-col>
                </v-row>
            </div>

            <!-- Quadrato centrale -->
            <div class="central-square">
                <span>
                    <img :src="usePage().props.images.logo" alt="Doppio Click Logo" style="max-width: 100%; max-height: 100%;" />
                </span>
            </div>
            <Footer />
        </v-container>
    </v-app>
</template>

<style scoped>
/* Fix cursore globale - VERSIONE SUPER AGGRESSIVA */
:deep(*) {
  cursor: auto !important;
}

:deep(.v-application) {
  cursor: auto !important;
}

:deep(.v-btn) {
  cursor: url('http://localhost:8000/storage/images/cursor/cursor-hand-32.png'), pointer !important;
}

:deep(button) {
  cursor: url('http://localhost:8000/storage/images/cursor/cursor-hand-32.png'), pointer !important;
}

:deep(a) {
  cursor: url('http://localhost:8000/storage/images/cursor/cursor-hand-32.png'), pointer !important;
}

:deep(input) {
  cursor: text !important;
}

:deep(textarea) {
  cursor: text !important;
}

/* Forza il cursore su tutto il body */
body {
  cursor: url('http://localhost:8000/storage/images/cursor/cursor-hand-32.png'), auto !important;
}

html {
  cursor: url('http://localhost:8000/storage/images/cursor/cursor-hand-32.png'), auto !important;
}

/* Override qualsiasi cursore nascosto */
:deep([style*="cursor: none"]) {
  cursor: auto !important;
}

:deep([style*="cursor:none"]) {
  cursor: auto !important;
}

/* Fix per puntatori specifici */
.v-btn, button, [role="button"] {
  cursor: pointer !important;
}

a, [role="link"] {
  cursor: pointer !important;
}

input, textarea, select {
  cursor: text !important;
}

/* Contenitore principale */
.fill-height {
  height: 100vh;
  width: 100%;
  overflow: hidden;
  position: relative;
}

/* Struttura griglia */
.outer-square {
  display: flex;
  flex-direction: column;
  width: 100%;
  height: 100%;
  margin: 0;
}

.inner-row {
  flex: 1;
  display: flex;
  margin: 0;
  padding: 0;
}

.inner-square {
  flex: 1;
  position: relative;
  overflow: hidden;
  background-color: #fcfcfc;
  transition: background-color 0.3s ease;
}

/* Bordi animati */
.inner-square::before,
.inner-square::after {
  content: "";
  position: absolute;
  background-color: #a5a5a541; /* colore bordo */
  transition: all 0.8s ease;
}

/* Riga orizzontale */
.inner-square::before {
  height: 2px;
  width: 0%;
  top: 0;
  left: 0;
}

/* Riga verticale */
.inner-square::after {
  width: 2px;
  height: 0%;
  bottom: 0;
  right: 0;
}

/* Quando la pagina è caricata */
.inner-square.loaded::before {
  width: 100%;
}

.inner-square.loaded::after {
  height: 100%;
}

/* Centro assoluto */
.central-square:not(:hover) {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -51%);
  width: 150px;
  height: 150px;
  z-index: 30;
  display: flex;
  align-items: center;
  justify-content: center;
  transition: all 0.3s ease;
}

.central-square:hover {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -51%);
  width: 140px;
  height: 140px;
  z-index: 30;
  display: flex;
  align-items: center;
  justify-content: center;
  cursor: pointer;
  transition: all 0.3s ease;
}

/* Testo opzionale */
.central-square span {
  color: #1976d2;
  font-weight: 600;
  font-size: 1rem;
  letter-spacing: 0.5px;
}

/* Fix globali Vuetify */
.v-container,
.v-row,
.v-col {
  margin: 0 !important;
  padding: 0 !important;
  max-width: 100% !important;
  overflow: hidden !important;
}

/* Responsive */
@media (max-width: 960px) {
  .fill-height {
    height: auto;
    min-height: 100vh;
  }

  .inner-row {
    flex-direction: column;
  }

  .inner-square {
    min-height: 45vh;
    border: none;
    border-bottom: 1px solid #e0e0e0;
  }

  .central-square {
    width: 100px;
    height: 100px;
    transform: translate(-50%, -50%);
  }
}

</style>