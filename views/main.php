<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <h1>Super poke</h1>
    <section>
        <h2>Capturer poke</h2>
        <?php if ($poke): ?>
            <p>un pokemon sauvage apparait, <?= $poke->getName() ?> est dans la place</p>
              <form action="/capture" method="post">
            <button type="submit" name="capture" value=<?= $poke->getId() ?>>Capturer</button>
        </form>

        <form action="/free" method="POST">
            <button type="submit" name="chill">Laisser tranquile</button>
        </form>
        <?php else: ?>
            <p>Tout les pokemon ont ete capturer</p>
        <?php endif ?>
    </section>
    <section>
        <h2>Mes pokemons</h2>
        <?php foreach ($pokesCaptured as $pokeCapt): ?>
            <h3><?= $pokeCapt['name'] ?></h3>
            <form action="" method="post">
                <button type="submit" name="free" value=<?= $pokeCapt['id'] ?>>Liberer</button>
            </form>
        <?php endforeach ?>
    </section>
</body>

</html>