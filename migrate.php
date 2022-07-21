<?php

# Fakedaten generieren mit FakerPHP

// 1. FakerPHP installieren
//          composer require fakerphp/faker
// 2. Datenbanktabelle 'users' erzeugen
// 3. Datenbank 'travel_agency' anlegen
// 4. '/inc/datenbank.inc.php' erstellen/kopieren und anpassen

require_once 'vendor/autoload.php';
require_once __DIR__ . '/inc/datenbank.inc.php';

# DB Tabelle erzeugen

// 1. Datenbanktabelle 'users' erzeugen
// 2. Datenbank 'travel_agency' anlegen
// 3. '/inc/datenbank.inc.php' erstellen/kopieren und anpassen

function createDbTable(PDO $db) {
    try {
        $sql = 'DROP TABLE IF EXISTS `offers`';
        $db->query($sql);

        $sql = 'CREATE TABLE `offers` ( 
            `id` INT PRIMARY KEY AUTO_INCREMENT, 
            `title` VARCHAR (100) UNIQUE NOT NULL, 
            `description` VARCHAR(255) NOT NULL,
            `image` VARCHAR (150) NOT NULL,
            `price` INTEGER NOT NULL,
            `duration` INTEGER NOT NULL
        )';

        $db->query($sql);

    } catch (PDOException $e) {
        // var_dump($e);
        echo $e->getMessage() . PHP_EOL;
        // header('Location: errorpage.php', true, 307);
    }
}

function createFakeData() {
    $faker = Faker\Factory::create('de_DE');

    $offer = [];

    $offer['title'] = $faker->sentence(5);
    $offer['description'] = $faker->paragraph(2);
    $offer['price'] = round($faker->numberBetween(500, 5000),-2);

    switch (true) {
        case $offer['price'] / 100 <= 10:
            $duration = $faker->randomElement([5, 7]);
            break;
        case $offer['price'] / 100 <= 25:
            $duration = $faker->randomElement([7, 10]);
            break;
        default:
            $duration = $faker->randomElement([10, 12, 15]);
            break;
    }
    $offer['duration'] = $duration;
    $offer['image'] = $faker->image('./images', 270, 174, 'hotel', true);

    return $offer;
}

function persistData(PDO $db, array $data) {
    try {
        $sql = 'INSERT INTO `offers` 
          (`title`, `description`, `price`, `duration`, `image`)
          VALUES 
          (:title, :description, :price, :duration, :image)
          ';
        $PDOStatement = $db->prepare($sql);
        $PDOStatement->execute($data);    
    } catch (PDOException $e) {
        // var_dump($e);
        echo $e->getMessage() . PHP_EOL;
        // header('Location: errorpage.php', true, 307);
    }
}

# Fakedaten generieren und in DB-Tabelle Speichern

createDbTable($db);

for ($i = 1; $i <= 16; $i++) {
    persistData($db, createFakeData());
}
