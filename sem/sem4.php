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
echo $P->createSem("Algorytmy i struktury danych",
"<li>Posługiwać się Zasadą Indukcji Matematycznej.</li><li>Wiele pożytecznych informacji o kwantyfikatorach i tautologiach.</li><liPodstawowe informacje o grafach.</li>",
"<li>Dowiedzieć się więcej o różnych \"nieskończonościach\".</li><li>Dobrze zrozumieć zasadę szufladkową.</li>");
echo $P->createSem("Nowoczesne Technologie WWW",
"<li>Posługiwać się Zasadą Indukcji Matematycznej.</li><li>Wiele pożytecznych informacji o kwantyfikatorach i tautologiach.</li><liPodstawowe informacje o grafach.</li>",
"<li>Dowiedzieć się więcej o różnych \"nieskończonościach\".</li><li>Dobrze zrozumieć zasadę szufladkową.</li>");
echo $P->createSem("Grafika komputerowa",
"<li>Posługiwać się Zasadą Indukcji Matematycznej.</li><li>Wiele pożytecznych informacji o kwantyfikatorach i tautologiach.</li><liPodstawowe informacje o grafach.</li>",
"<li>Dowiedzieć się więcej o różnych \"nieskończonościach\".</li><li>Dobrze zrozumieć zasadę szufladkową.</li>");
echo $P->createSem("Technologie sieciowe",
"<li>Posługiwać się Zasadą Indukcji Matematycznej.</li><li>Wiele pożytecznych informacji o kwantyfikatorach i tautologiach.</li><liPodstawowe informacje o grafach.</li>",
"<li>Dowiedzieć się więcej o różnych \"nieskończonościach\".</li><li>Dobrze zrozumieć zasadę szufladkową.</li>");
echo $P->createSem("Grafy",
"<li>Posługiwać się Zasadą Indukcji Matematycznej.</li><li>Wiele pożytecznych informacji o kwantyfikatorach i tautologiach.</li><liPodstawowe informacje o grafach.</li>",
"<li>Dowiedzieć się więcej o różnych \"nieskończonościach\".</li><li>Dobrze zrozumieć zasadę szufladkową.</li>");

// generujemy zamknięcie strony 
echo $P->End();
?>