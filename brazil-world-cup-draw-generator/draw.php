<?php
/*
 * World Cup Draw Example.
 *
 * Using Array functions & SPL Iterators to simulate (simplified) World Cup draws.
 *
 * @author Oscar Merida <oscar@phparch.com>
 8 @author Edgar Sandi <edgar.r.sando@gmail.com> -- UPDATED VALUES AND ADDED NEW FIFA RULE TO SORT FOOTBALL TEAMS
 */
 
// teams organized by pot, 8 in each.
$pots = [
    ['Brazil', 'Espanha', 'Argentina', 'Bélgica', 'Colômbia', 'Alemanha', 'Suíça', 'Uruguai'],
    ['Costa do Marfim', 'Gana', 'Argélia', 'Nigéria', 'Camarões', 'Chile', 'Equador'],
    ['Japão', 'Irã', 'Coréia do Sul', 'Austrália', 'Estados Unidos', 'México', 'Costa Rica', 'Honduras'],
    ['Bósnia', 'Croácia', 'Inglaterra', 'Grécia', 'Itália', 'Holanda', 'Portugal', 'Rússia', 'França'],
];

$biggerKey = $pots[3];
$smallKey = $pots[1];

shuffle($biggerKey);
array_push($smallKey, array_pop($biggerKey));

// shuffle teams within each pot and setup the multipleIterator to generate groups
$multiple = new MultipleIterator();
foreach ($pots as $pot) {
    shuffle($pot);
    $multiple->attachIterator(new ArrayIterator($pot));
}
 
// $multiple->current() returns an array of 4 teams.
// The first call to current() gives us the first element in each of the 4 pots, and so on.
// Calling next() advances the internal pointer to the next 4 teams in each of the 4 pots.
foreach (range('A', 'H') as $name) {
    echo $name . ': ' . implode(', ', $multiple->current()) . PHP_EOL;
    $multiple->next();
}