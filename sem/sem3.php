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

echo $P->createSem("Architektura komputerów i systemy operacyjne",
"<li>Posługiwać się Zasadą Indukcji Matematycznej.</li><li>Wiele pożytecznych informacji o kwantyfikatorach i tautologiach.</li><liPodstawowe informacje o grafach.</li>",
"<li>Dowiedzieć się więcej o różnych \"nieskończonościach\".</li><li>Dobrze zrozumieć zasadę szufladkową.</li>");
echo $P->createSem("Metody probabilistyczne i statystyka",
"<li>Posługiwać się Zasadą Indukcji Matematycznej.</li><li>Wiele pożytecznych informacji o kwantyfikatorach i tautologiach.</li><liPodstawowe informacje o grafach.</li>",
"<li>Dowiedzieć się więcej o różnych \"nieskończonościach\".</li><li>Dobrze zrozumieć zasadę szufladkową.</li>");
echo $P->createSem("Technologie programowania",
"<li>Posługiwać się Zasadą Indukcji Matematycznej.</li><li>Wiele pożytecznych informacji o kwantyfikatorach i tautologiach.</li><liPodstawowe informacje o grafach.</li>",
"<li>Dowiedzieć się więcej o różnych \"nieskończonościach\".</li><li>Dobrze zrozumieć zasadę szufladkową.</li>");
echo $P->createSem("Bazy danych",
"<li>Posługiwać się Zasadą Indukcji Matematycznej.</li><li>Wiele pożytecznych informacji o kwantyfikatorach i tautologiach.</li><liPodstawowe informacje o grafach.</li>",
"<li>Dowiedzieć się więcej o różnych \"nieskończonościach\".</li><li>Dobrze zrozumieć zasadę szufladkową.</li>");

// generujemy zamknięcie strony 
echo $P->End();
?>