<?php
require_once(__DIR__."/../php/template.php");

$OPIS = "Basia Banaszak";
$STYL =<<<EOT

EOT;

// generuejmy stronę i ustawiamy jej parametry
$P =  new myPage("Basia Banaszak");
$P->SetDescription($OPIS);
$P->AddInnerStyle($STYL);

// Wyświetlamy początek strony
echo $P->Begin();
echo $P->PageHeader();

echo $P->createSem("Analiza matematyczna II",
"<li>Posługiwać się regułą d'Hospitala.</li><li>Udowadniać wiele potencjalnie oczywistych własności matematycznych.</li><li>Liczyć całki.</li>",
"<li>Radzić sobie ze skomplikowanymi ciągami geometrycznymi.</li><li>Przypomnieć sobie dowód 0<1.</li>");

echo $P->createSem("Algebra abstarkcyjna i kodowanie",
"<li>Korzystać z macierzy.</li><li>Dobrze rozumieć operację modulo.</li><li>Wykonywać działania na liczbach zespolonych.</li>",
"<li>Praktycznego zastosowania macierzy w programowaniu.</li><li>Historii liczb zespolonych.</li>");

echo $P->createSem("Kurs programowania",
"<li>Czym jest niezmiennik pętli.</li><li>Korzystania ze wskaźników w języku C.</li>",
"<li>Radzić sobie ze skomplikowanymi ciągami geometrycznymi.</li>");

echo $P->createSem("Matematyka dyskretna",
"<li>Posługiwać się Zasadą Indukcji Matematycznej.</li><li>Wiele pożytecznych informacji o kwantyfikatorach i tautologiach.</li><liPodstawowe informacje o grafach.</li>",
"<li>Dowiedzieć się więcej o różnych \"nieskończonościach\".</li><li>Dobrze zrozumieć zasadę szufladkową.</li>");

echo $P->createSem("Problemy prawne informatyki",
"<li>Posługiwać się Zasadą Indukcji Matematycznej.</li><li>Wiele pożytecznych informacji o kwantyfikatorach i tautologiach.</li><liPodstawowe informacje o grafach.</li>",
"<li>Dowiedzieć się więcej o różnych \"nieskończonościach\".</li><li>Dobrze zrozumieć zasadę szufladkową.</li>");
// generujemy zamknięcie strony 

echo $P->End();
?>