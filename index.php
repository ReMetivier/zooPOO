<?php

spl_autoload_register(function ($class_name) {
    include 'classes/' .$class_name . '.php';
});
$money = 0;
$timer = 0;
$total = 0;
//staff
$tim = new Soigneur;
$james = new Medecin;

//animaux
$baguera = new Panthere;
$kiki = new Koala;
$kitty = new Ocelot;

$coefrevelry = $baguera->revelry + $kiki->revelry + $kitty->revelry;

?>

<!DOCTYPE html>
<html lang="en">
<body>
<?php while ($timer <30) : ?>
    <div class="flex">
        <div class=" flex jour">
            <?php $state = Zoo::random();?>
            <?php if($kiki->food == false): ?>
                <p><?php $tim->setFood($kiki);?></p>
                <p class="oui">Kiki a été nourrit</p>
            <?php else: ?>
                <p class="non">Kiki n'a pas faim</p>
            <?php endif;?>

            <?php if($kitty->food == false): ?>
                <p><?php $tim->setFood($kitty);?></p>
                <p class="oui">Kitty a été nourrit</p>
            <?php else: ?>
                <p class="non">Kitty n'a pas faim</p>
            <?php endif;?>

            <?php if($baguera->food == false): ?>
                <p><?php $tim->setFood($baguera);?></p>
                <p class="oui">Baguera a été nourrit</p>
            <?php else: ?>
                <p class="non">Baguera n'a pas faim</p>
            <?php endif;?>

            <?php if($kiki->food == false): ?>
                <p><?php $james->verifyHealth($kiki);?></p>
                <p class="oui">Kiki a été soigné</p>
            <?php else: ?>
                <p class="non">Kiki allait très bien</p>
            <?php endif;?>

            <?php if($kitty->food == false): ?>
                <p><?php $james->verifyHealth($kitty);?></p>
                <p class="oui">Kitty a été soigné</p>
            <?php else: ?>
                <p class="non">Kitty allait très bien</p>
            <?php endif;?>

            <?php if($baguera->food == false): ?>
                <p><?php $james->verifyHealth($baguera);?></p>
                <p class="oui">Baguera a été soigné</p>
            <?php else: ?>
                <p class="non">Baguera allait très bien</p>
            <?php endif;?>
        </div>
    </div>
    <div class="flex infos">
        <?php $customers = Zoo::nbCustomers($coefrevelry); ?>
        <?php $money = Zoo::money($customers); ?>
        <?php $total = $total + $money  ?>
        <?php $timer++; ?>
        <p>il y avait <?=$customers ?> et vous avez gagnez <?= $money ?> euros. Ce qui vous fait <?=$total?> euros en <?=$timer?> jours</p><br>
        <?php if($timer%30 = 0):?>
            <?php $total = $total - $tim->pay - $james->pay;?>
            <p> il vous reste <?= $total ?> après avoir payé vos employés </p>
        <?php endif;?>
    </div>
<!--    <div class="flex infos">-->
<!---->
<!--    </div>-->
    <?php if($state == 0): ?>
        <?php $kiki->food = true;?>
        <?php $kitty->food = true;?>
        <?php $baguera->food = true;?>
    <?php else: ?>
        <?php $kiki->food = false?>
        <?php $kiki->food = false;?>
        <?php $kitty->food= false;?>
        <?php $baguera->food = false;?>
    <?php endif;?>

<?php endwhile;?>
</body>
<head>
    <meta charset="UTF-8">
    <title>Zoo de France</title>
    <link rel="stylesheet" href="/css/style.css">
</head>
</html>
