<?php
/* php -S localhost:8000
PHP PHP HYPERTEXT PREPROCESSOR
Php es un lenguaje de programación que se ejecuta en el servidor de tipado dinámico, debil y gradual
*/
$name = "Mario";
// $name = 2;
$isDev = true;
$age = 35;
$height = 1.75;
const NOMBRE = "Mario";
define('LOGO_URL', 'https://cdn.freebiesupply.com/logos/large/2x/php-1-logo-png-transparent.png');
$output = "Hello, my name is $name and I'm $age years old";

$outputAge = match (true) {
    $age < 2   => "You are a baby, $name :baby:",
    $age < 10  => "You are a child $name :child:",
    $age < 18  => "You are a teenager $name :teen:",
    $age == 18 => "You are 18 years old $name :beer:",
    $age < 40  => "You are a young adult $name :adult:",
    $age >= 40 => "You are an adult $name :older:",
    default    => "You are a young"
};

$bestLanguages = ["PHP"];
$bestLanguages[] = "JavaScript";
$bestLanguages[] = "Python";
$bestLanguages[3] = "Ruby";
$bestLanguages[] = "Java";
$bestLanguages[] = "C#";
$bestLanguages[] = "Go";

$person = [
    "name" => "Mario",
    "age" => 35,
    "isDev" => true,
    "height" => 1.75
]
?>

<ul>
    <?php foreach ($bestLanguages as $key => $language) : ?>
        <li><?= $key . " " . $language ?></li>
    <?php endforeach; ?>
</ul>

<h3>Best programming language is <?= $bestLanguages[3] ?></h3>

<img src="<?= LOGO_URL ?>" alt="PHP Logo" width="200">
<h2><?= $outputAge ?></h2>
<h1>
    <?=
    $output;
    ?>
</h1>
<style>
    :root {
        color-scheme: light dark;
    }

    body {
        display: grid;
        place-content: center;
    }
</style>