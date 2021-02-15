<!-- Create una classe per descrivere un entitá, assegnatele degli attributi, utilizzate il constructor. Create alcune istanze della classe. Stampate a schermo gli attributi di ogni istanza.
Per chi non ha fantasia ecco qualche entitá che potete usare:
Animale, Persona, Casa, Computer, Hotel, Film, Videogioco, Sport, Bicicletta, Veicolo, Nazione etc. -->
<?php
/**
 * @author Alessio alessio@gmail.com
 * @copyright 2021 ALessio
 */
class Persona {
    public $nome;
    public $cognome;
    public $età;
    public $lavoro;
    public $email;
    public $telefono;
    public $nazionalità;
    public function __construct(string $nome, string $cognome, int $età, string $lavoro, string $email, int $telefono, string $nazionalità) {
        $this->nome = $nome;
        $this->cognome = $cognome;
        $this->età = $età;
        $this->lavoro = $lavoro;
        $this->email = $email;
        $this->telefono = $telefono;
        $this->nazionalità = $nazionalità;
    }
}

$alessio = new Persona('Alessio', 'Di Giacomo', 21, 'studente', 'alessio@gmail.com', 3313334, 'italiano');
$piero = new Persona('Piero', 'Di Piero', 21, 'studente', 'piero@gmail.com', 3313334, 'italiano');
$persone = [$alessio, $piero];

class Film{
    public $titolo;
    public $anno;
    public $regista;
    public $protagonista;
    public function __construct(string $titolo, int $anno, string $regista, string $protagonista) {
        $this->titolo = $titolo;
        $this->anno = $anno;
        $this->regista = $regista;
        $this->protagonista = $protagonista;
    }
}

$psycho = new Film('Psycho', 1960, 'Hitchock', 'Marion Crane');
$uccelli = new Film('Gli Uccelli', 1961, 'Hitchock', 'Mitch Brenner');
$films= [$psycho, $uccelli]
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Persone</h1>
    <?php foreach ($persone as $key => $persona) {?>
        <ul>
            <?php foreach ($persona as $chiave => $value) {?>
                <li><?php echo $value?></li>
                
            <?php } ?>
        </ul>
    <?php }
    ?>

    <h1>Films</h1>
    <?php foreach ($films as $key => $film) {?>
        <ul>
            <?php foreach ($film as $chiave => $value) {?>
                <li><?php echo $value?></li>
                
            <?php } ?>
        </ul>
    <?php }
    ?>
</body>
</html>
