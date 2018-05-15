<?php

$HEADER =<<<EOT
<!DOCTYPE html>
<html lang="pl">
<head>
<meta charset="utf-8">
<title>{{TITLE}}</title> 
<meta name="description" content= "{{DESCRIPTION}}">
<meta name="author" content="Basia Banaszak">
<meta name="viewport" content = "width=device-width, initial-scale=1.0"/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
{{FAVICON}}
{{STYLES}}
{{SCRIPTS}}
{{INNER-STYLE}}
</head>
<body>
<div class="container">
<div class="row">
<div id="navbarTop">
<header id="navigation"><b>Basia Banaszak</b></header>
<a class="back" href="../index.php" ><img id="home" src="home.png" alt="home_page"></a>
</div>
</div>
EOT;

$FOOTER =<<<EOT
<div class="row">
<div class="col-6-6 head" id="navbar">
<p> Copyright: Basia Banaszak</p>
<ul>
<li><a class="none-link" href="mailto:basiab217@gmail.com"><i class="fa fa-envelope"></i></a></li>
<li><a class="none-link" href="https://www.facebook.com/basia.banaszak.77"><i class="fa fa-facebook"></i></a></li>
<li><a class="none-link" href="https://github.com/forestfox128"><i class="fa fa-github"></i></a></li>
</ul>

</div>
</div>
</div><!-- container -->
</body>
</html>   
EOT;

/**
* Klasa sluzaca do generowania stron ustalonej witryny
* @package project_one
* @author Basia Banaszak
*/
class MyPage {
	private $title        = "";
	private $description  = "";
	private $root         = "";
	private $cssfiles     = [];
	private $jsfiles      = [];
	private $innerStyle   = "";    

  /**
  * Dodaje specyficzne style do strony
  * @param string $filename
  * @return void
  */
  public function AddCSS($filename) {
  	$this->cssfiles[] = $filename;
  }

  /**
  * Ustalamy skrypty umieszczane w nagłówku 
  * @param string $filename
  * @return void
  */
  public function AddJS($filename) {
  	$this->jsfiles[] = $filename;
  }
  
  /**
  * Ustawienie opisu strony (description)
  * @param string $s
  * @return void
  */
  public function SetDescription($s) {
  	$this->description = $s;
  }

  /**
  * Dodanie wewnętrznego stylu strony
  * @param string $s
  * @return void
  */
  public function AddInnerStyle($s) {
  	$this->innerStyle = $s;
  }
  
  /**
  * Ustawienie opisu strony
  * @param string $title - tytul strony
  * @param string $root - sciezka do glownego katalogu witryny
  * @return void
  */
  
  public function __construct($title = "", $root="") {
  	$this->title = $title;
  	$this->root  = $root;
  	// $this->AddCSS("reset.css");
  	$this->AddCSS("reset.css");
    $this->AddCSS("styles.css");
    $this->AddCSS("web.css");
  }

  /**
  * Zwraca lancuch z poczatkiem strony
  * @return string
  */  
  public function Begin() {
  	global $HEADER;
  	$s = str_replace(["{{TITLE}}", "{{DESCRIPTION}}"], [$this->title, $this->description], $HEADER);

    // dodajemy style
  	$X = [];
  	$C = $this->cssfiles;
  	$TMP = '  <link rel="stylesheet" href="{{R}}/css/{{CSS}}">' . "\n";
  	for ($i = 0; $i < count($C); $i++){
  		$X[]= (string) str_replace(["{{R}}", "{{CSS}}"], [$this->root, (string) $C[$i]], $TMP);
  	} 
  	$s= str_replace("{{STYLES}}", join("\n",$X), $s);

  	// dodajemy favicon
  	$X = [];
  	$TMP = '  <link rel="icon" type="image/png" href="{{R}}/img/fox.png">' . "\n";
  	for ($i = 0; $i < count($C); $i++){
  		$X[]= (string) str_replace(["{{R}}"], [$this->root], $TMP);
  	} 
  	$s= str_replace("{{FAVICON}}", join("\n",$X), $s);

    // dodajemy skrypty
  	$X = [];
  	$C = $this->jsfiles;
  	$T = '  <script src="{{R}}js/{{JS}}"></script>' . "\n";
  	for ($i = 0; $i < count($this->jsfiles); $i++){
  		$X[]= str_replace(["{{R}}", "{{JS}}"], [$this->root, (string) $C[$i]], $T);
  	} 
  	$s= str_replace("{{SCRIPTS}}", join("\n",$X), $s);

    // aktualizujemy styl wewnętrzny strony
  	$X = ($this->innerStyle === "") ? "" : "<style>\n" . $this->innerStyle . "\n</style>\n"; 
  	$s= str_replace("{{INNER-STYLE}}", $X, $s);

    // usuwamy puste linie
    //return preg_replace('/^[ \t]*[\r\n]+/m', '', $s);
  	return preg_replace('/^\h*\v+/m', '', $s);
    // \h : dowolny poziomy pusty znak
    // \v : dowolny pionowy pusty znak
    // /m : multiline
  }

  public function PageHeader(){
  	global $PAGE_HEADER;
  	return $PAGE_HEADER;
  }
  /**
  * Zwraca lancuch z zamknieciem strony
  * @return string
  */    
  public function End() {
  	global $FOOTER;
  	return $FOOTER;    
  }  

  public function createSem($title, $contentLeft, $contentRight){

    if ($title !==""){
      $s= "<div class='subjectHeader'> <h4>{$title}</h4></div>\n";
    }
    $s.= "<div class=\"row\">\n<div class=\"col-1-2\">
        <div class=\"frameB\">
        <div class=\"headerE\"><h4>Czego się nauczyłam?</h4></div>
        <ul>{$contentLeft}</ul></div></div>";
    
    $s.= "<div class=\"row\">\n<div class=\"col-1-2\">
        <div class=\"frameP\">
        <div class=\"headerEa\"><h4>Czego się nauczyłam?</h4></div>
        <ul>{$contentRight}</ul></div></div>";

    $s.= "</div>\n";
    return $s;
  }

  public function createHobby($title, $content, $image=""){

    $s= "<div class=\"col-1-1\">
        <div class=\"framePa\">
        <div class=\"headerEa\"><h4>{$title}</h4></div>
        <div class=\"contentA\">{$content}</div></div></div>";
    
    if ($img !== ""){
        $s.= "<div class=\"col-1-6\">
        <img id=route src=\"/../img/{$image}\" alt={$image}>
        </div>\n";
    }
    return $s;
  }

} //class MyPage

?>