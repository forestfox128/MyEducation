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

            <div class="col-1-1">
                <div class="framePa">
                    <div class="headerEa"><h4>Running</h4></div>
                    <div class="contentA">My running adventure started when I was in primary school. I was always choosen by teachers to take part in different running competition. I didn’t really enjoy it, because I had never been fast enought to win.<br> When I was 15 I started to run on my own and I discovered I’m really into it. Since then I’ve started to run distances around 10km for pleasure and to calm myself down.<br> Recently I came back to take part in running competitions. I’ve taken part in some 5km and 10km races and 6km Survival Race. My 10km best time on certified route is 56:25 (from 27. Bieg Powstania Warszawskiego), not best one, but I’m begginer in racing. I’m going to run a half marathon soon.
                           <br> I live in Wrocław and I usually do my trainings there. I often run on the river and in the photo there is one of the routes I’ve run.</div>
                </div>
            </div>
               
            <div class="col-1-6">
                <img id="route" src="route.png" alt="route_image">
            </div>

<?php
// generujemy zamknięcie strony 
echo $P->End();
?>