<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>RetroMonsters</title>
    <link rel="icon" type="image/png" href="images/favico.png" />

    <link
      href="https://fonts.googleapis.com/css2?family=Creepster&family=Roboto:wght@100;400;900&display=swap"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
    />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.16/dist/tailwind.min.css"
    />
    <script src="//unpkg.com/alpinejs" defer></script>
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/nouislider/distribute/nouislider.min.css"
    />
    <script src="https://cdn.jsdelivr.net/npm/nouislider/distribute/nouislider.min.js"></script>
    <style>
      .monster-card[data-monster-type="cosmique"] {
        background: linear-gradient(to right, #6e48aa, #9d50bb);
      }

      .monster-card[data-monster-type="aquatique"] {
        background: linear-gradient(to right, #395ca6, #546da4);
      }

      .monster-card[data-monster-type="terrestre"] {
        background: linear-gradient(to right, #3a4146, #657581);
      }

      .monster-card[data-monster-type="volant"] {
        background: linear-gradient(to right, #2e5063, #457791);
      }

      .monster-card[data-monster-type="spectral"] {
        background: linear-gradient(to right, #7b195a, #9d3078);
      }
      body {
        font-family: "Roboto", sans-serif;
      }
      .creepster {
        font-family: "Creepster", system-ui;
        font-size: 2rem;
        letter-spacing: 0.2rem;
      }

      .noUi-connect {
        background: #516ba4;
      }
    </style>
  </head>
  <body class="bg-gray-800 text-white font-sans">
    <!-- Main Content -->
    <div class="container mx-auto flex flex-wrap pb-12">
      <main class="w-full px-4">
        <div class="container mx-auto pb-12">
          <div class="flex flex-wrap justify-center">
            <div class="w-full">
              <div class="bg-gray-700 p-6 rounded-lg shadow-lg">
                <h2 class="text-2xl font-bold mb-4 text-center creepster">
                  Ajouter un monstre
                </h2>
                <form class="space-y-6">
                  <div>
                    <label for="name" class="block mb-1">Nom</label>
                    <input
                      type="text"
                      id="name"
                      class="w-full border rounded px-3 py-2 text-gray-700"
                      placeholder="Nom du Monstre"
                    />
                  </div>
                  <div>
                    <label for="creator" class="block mb-1">Créateur</label>
                    <input
                      type="text"
                      id="creator"
                      class="w-full border rounded px-3 py-2 text-gray-700"
                      placeholder="Nom du créateur"
                    />
                  </div>
                  <div>
                    <label for="type" class="block mb-1">Type</label>
                    <input
                      type="text"
                      id="type"
                      class="w-full border rounded px-3 py-2 text-gray-700"
                      placeholder="Type"
                    />
                  </div>
                  <div>
                    <label for="pv" class="block mb-1">PV</label>
                    <input
                      type="text"
                      id="pv"
                      class="w-full border rounded px-3 py-2 text-gray-700"
                      placeholder="Nombre de PV"
                    />
                  </div>
                  <div>
                    <label for="attack" class="block mb-1">Attaque</label>
                    <input
                      type="text"
                      id="attack"
                      class="w-full border rounded px-3 py-2 text-gray-700"
                      placeholder="Puissance d'attaque"
                    />
                  </div>
                  <div>
                    <label for="defense" class="block mb-1">Défense</label>
                    <input
                      type="text"
                      id="defense"
                      class="w-full border rounded px-3 py-2 text-gray-700"
                      placeholder="Puisance défensive"
                    />
                  </div>
                  <div>
                    <label for="rarity" class="block mb-1">Rareté</label>
                    <input
                      type="text"
                      id="rarity"
                      class="w-full border rounded px-3 py-2 text-gray-700"
                      placeholder="Rareté"
                    />
                  </div>
                  <div class="flex justify-between items-center">
                    <button
                      type="submit"
                      class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded"
                    >
                      Ajouter
                    </button>
                    <button
                      type="reset"
                      class="text-red-400 hover:text-red-500"
                    >
                      Annuler
                    </button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </main>
    </div>
  </body>
</html>
