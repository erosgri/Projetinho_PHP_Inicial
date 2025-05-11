<div class="titulo">Data #01</div>

<?php
echo time() . '<br>';
echo date('D, d \d\e M \d\e Y H:i A');

echo '<br>';

//deixará de existir
echo strftime('%A, %d de %B de %Y', time()) . '<br>';

setlocale(LC_TIME, 'pt_BR', 'pt_BR.utf-8');

$amanha = time() + (24 * 60 * 60);
echo strftime('%A, %d de %B de %Y', $amanha);

$proximaSemana = strtotime('+1 week');

echo '<hr>';

$formatter = new IntlDateFormatter('pt_BR', IntlDateFormatter::FULL, IntlDateFormatter::NONE);
echo $formatter->format(new DateTime()) . '<br>';

$amanha = new DateTime('+1 day');
echo $formatter->format($amanha) . '<br>';

$proximaSemana = new DateTime('+1 week');
// Você ainda pode usar $formatter com qualquer objeto DateTime:
echo $formatter->format($proximaSemana);


?>