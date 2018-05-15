<?php
require_once(__DIR__."/php/template.php");

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
                  <div class="col-1-1">
                      <img src="img/me.jpg" alt="my_picture" width="400" height="400" > 
                      
                      <div class="infoRow">
                          <div class="parta1">
                              <h4><a class="ESNlink" href="running.html"> Runner </a></h4>
                          </div>
                          <span class="part-round"></span>
                          <div class="parta2">
                              <h4> Computer Science Student </h4>
                          </div>
                          <span class="part-round"></span>
                          <div class="parta3">
                              <h4><a class="ESNlink" href="http://pwr.esn.pl/"> ESN member </a></h4>
                          </div> 
                      </div> 
                  </div>

                     
                  <div class="col-1-6">
                      <div class="headerL"><h4>My studies</h4></div>
                      <div class="content"><a href="sem/sem1.php">I semester (pl)</a></div>
                      <div class="content"><a href="sem/sem2.php">II semester (pl)</a></div>
                      <div class="content"><a href="sem/sem3.php">III semester (pl)</a></div>
                      <div class="content"><a href="sem/sem4.php">IV semester (pl)</a></div>
                      <div class="contentDisable">V semester</div>
                      <div class="contentDisable">VI semester</div>
                      <div class="contentDisable">VII semester</div>
                                          
                      <div class="headerLa"><h4>My interests</h4></div>
                      <div class="content"><a href="hobby/running.php">Running</a></div>
                      <div class="content"><a href="hobby/music.php">Alternative music</a></div>
                      <div class="content"><a href="hobby/math.php">Mathematics</a></div>
                  </div>
            </div>

<?php
// generujemy zamknięcie strony 
echo $P->End();
?>