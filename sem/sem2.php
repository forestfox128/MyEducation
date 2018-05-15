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
?>

            <div class="row">
                <div class="subjectHeader"> <h4>Analiza matematyczna I</h4></div>
            </div>
            <div class="row">
            <div class="col-1-2">
                <div class="frameB">
                    <div class="headerE"><h4>Czego się nauczyłam?</h4></div>
                    <ul>
                    <li>Posługiwać się regułą d'Hospitala.</li>
                    <li>Udowadniać wiele potencjalnie oczywistych własności matematycznych.</li>
                    <li>Liczyć całki</li>
                    </ul>
                </div>
            </div>
            <div class="col-1-2">
                <div class="frameP">
                    <div class="headerEa"><h4>Czego chcę się douczyć?</h4></div>
                    <ul>
                    <li>Radzić sobie ze skomplikowanymi ciągami geometrycznymi.</li>
                    </ul>
                </div>
            </div></div>

            <div class="row">
                <div class="subjectHeader"> <h4>Logika i struktury formalne</h4></div>
            </div>
            <div class="row">
            <div class="col-1-2">
                <div class="frameB">
                    <div class="headerE"><h4>Czego się nauczyłam?</h4></div>
                    <ul>
                    <li>Posługiwać się Zasadą Indukcji Matematycznej.</li>
                    <li>Wiele pożytecznych informacji o kwantyfikatorach i tautologiach.</li>
                    <li>Podstawowe informacje o grafach.</li>
                    </ul>
                </div>
            </div>
            <div class="col-1-2">
                <div class="frameP">
                    <div class="headerEa"><h4>Czego chcę się douczyć?</h4></div>
                    <ul>
                    <li>Poszerzyć swoją wiedzę z zakresu grafów.</li>
                    <li>Dowiedzieć się więcej o różnych "nieskończonościach"</li>
                    <li>Dobrze zrozumieć zasadę szufladkową.</li>
                    </ul>
                </div>
            </div></div>
        

            <div class="row">
                <div class="subjectHeader"> <h4>Algebra i geometria analityczna</h4></div>
            </div>
            <div class="row">
            <div class="col-1-2">
                <div class="frameB">
                    <div class="headerE"><h4>Czego się nauczyłam?</h4></div>
                    <ul>
                    <li>Korzystać z macierzy.</li>
                    <li>Dobrze rozumieć operację modulo.</li>
                    <li>Wykonywać działania na liczbach zespolonych.</li>
                    </ul>
                </div>
            </div>
            <div class="col-1-2">
                <div class="frameP">
                    <div class="headerEa"><h4>Czego chcę się douczyć?</h4></div>
                    <ul>
                    <li>Praktycznego zastosowania macierzy w programowaniu.</li>
                    <li>Historii liczb zespolonych.</li>
                    </ul>
                </div>
            </div></div>

            <div class="row">
            <div class="subjectHeader"> <h4>Wstep do informatyki i programowania</h4></div>
            </div>
            <div class="row">
            <div class="col-1-2">
                <div class="frameB">
                    <div class="headerE"><h4>Czego się nauczyłam?</h4></div>
                    <ul>
                    <li>Czym jest niezmiennik pętli.</li>
                    <li>Korzystania ze wskaźników w języku C.</li>
                    </ul>
                </div>
            </div>
            <div class="col-1-2">
                <div class="frameP">
                    <div class="headerEa"><h4>Czego chcę się douczyć?</h4></div>
                    <ul>
                    <li>Radzić sobie ze skomplikowanymi ciągami geometrycznymi.</li>
                    </ul>
                </div>
            </div></div>
            

<?php
// generujemy zamknięcie strony 
echo $P->End();
?>