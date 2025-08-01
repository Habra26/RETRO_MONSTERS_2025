<!-- Section Monstre Aléatoire -->
<section class="mb-20">
    <div class="bg-gray-700 rounded-lg shadow-lg monster-card" data-monster-type="<?php echo $randomMonster['type_name']; ?>">
        <div class="md:flex">
            <!-- Image du monstre -->
            <div class="w-full md:w-1/2 relative">
                <img class="w-full h-full object-cover rounded-t-lg md:rounded-l-lg md:rounded-t-none"
                    src="../public/images/<?php echo $randomMonster['image_url']; ?>" alt="<?php echo $randomMonster['image_url']; ?>" />
                <div class="absolute top-4 right-4">
                    <button
                        class="text-white bg-gray-400 hover:bg-red-700 rounded-full p-2 transition-colors duration-300"
                        style="
                      width: 40px;
                      height: 40px;
                      display: flex;
                      justify-content: center;
                      align-items: center;
                    ">
                        <i class="fa fa-bookmark"></i>
                    </button>
                </div>
            </div>

            <!-- Détails du monstre -->
            <div class="p-6 md:w-1/2">
                <h2 class="text-3xl font-bold mb-2 creepster">
                    <?php echo $randomMonster['name']; ?>
                </h2>
                <p class="text-gray-300 text-sm mb-4">
                    <?php echo $randomMonster['description']; ?>
                </p>
                <div class="mb-4">
                    <strong class="text-white">Créateur:</strong>
                    <span class="text-red-400"><?php echo $randomMonster['user_id']; ?></span>
                </div>
                <div class="mb-4">
                    <div>
                        <strong class="text-white">Type:</strong>
                        <span class="text-gray-300"><?php echo $randomMonster['type_name']; ?></span>
                    </div>
                    <div>
                        <strong class="text-white">PV:</strong>
                        <span class="text-gray-300"><?php echo $randomMonster['pv']; ?></span>
                    </div>
                    <div>
                        <strong class="text-white">Attaque:</strong>
                        <span class="text-gray-300"><?php echo $randomMonster['attack']; ?></span>
                    </div>
                    <div>
                        <strong class="text-white">Défense:</strong>
                        <span class="text-gray-300"><?php echo $randomMonster['defense']; ?></span>
                    </div>
                    <div>
                        <strong class="text-white">Rareté:</strong>
                        <span class="text-gray-300"><?php echo $randomMonster['rarity']; ?></span>
                    </div>
                    <div>
                        <strong class="text-white">Date d'ajout:</strong>
                        <span class="text-gray-300"><?php echo $randomMonster['created_at']; ?></span>
                    </div>
                </div>
                <div class="mb-4">
                    <span class="text-yellow-400">★★★★☆</span>
                    <span class="text-gray-300 text-sm">(4.0/5.0)</span>
                </div>
                <div class="">
                    <a href="?monstersPage=show&id=<?php echo $randomMonster['id']; ?>"
                        class="inline-block text-white bg-red-500 hover:bg-red-700 rounded-full px-4 py-2 transition-colors duration-300">Plus
                        de détails</a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Section Derniers monstres -->
<section class="mb-20">
    <h2 class="text-2xl font-bold mb-4 creepster">
        Derniers monstres ajoutés
    </h2>
    <?php include '../app/views/monsters/_index.php'; ?>
</section>