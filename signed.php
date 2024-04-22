<?PHP
    session_start();

    if (!(isset($_SESSION['permission']) && $_SESSION['permission'] != '')) {

        header ("Location: mainPage");
    }
?>
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Strona główna</title>
    <meta name="description" content="Strona główna 40 Drużyny Wędrowniczej Ardenti Caelum w Zielonce"/>
    <meta name="keywords" content="40, Drużyna, Wędrownicza, Harcerze, Zielonka, Ardenti Caelum"/>
    <link rel="stylesheet" href="style.css" type="text/css"/>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700&amp;subset=latin-ext" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
</head>
<body>
    <header>
        <header>
            <a href="MainPage"><img id="logo" src="img/Untitled.png"></a> <h1 id="title">Strona główna WD40 Zalogowany</h1>
            <div style="clear: both;"></div>
        </header>

        <nav>

        <nav>
            <a href="info"><div class="menu">Informacje<br>szczegółowe</div></a>
            <a href="zdjecia"><div class="menu">Zdjęcia</div></a>
            <a href="kronika"><div class="menu">Kronika</div></a>
            <a href="rozkazy"><div class="menu">Rozkazy</div></a>
            <a href="konstytucja"><div class="menu">Konstytucja</div></a>
            <a href="wydarzenia"><div class="menu">wydarzenia</div></a>
            <a href="faq"><div class="menu">FAQ</div></a>
            <div style="clear: both;"></div>
        </nav>

        </nav>

    </header>
    <main>

        <div id="content">Witaj na stronie głównej naszej drużyny wędrowniczej pod nazwą Ardenti caelum. Znajdziesz tutaj wszystkie informacje na nasz temat. Życze miłego przeglądania.
        </br><img src="img/everyone.png" style=" padding: 15px; display: block; margin-left: auto; margin-right: auto; width: 50%;"></div>
        <div style="clear: both;"></div>
        

    </main>
    <footer>
        <div id="contact">
            Drużynowa (Kasia Bilińska): <a href="mailto:wedrownicza40@gmail.com">wedrownicza40@gmail.com</a>   697 079 952 <br>
            Przyboczny (Michał Ufnal): 730 696 777 <br>
            Przyboczny (Michał Puchalski): 883 855 820 <br>
            Twórca Strony (Miłosz Obroślak): <a href="mailto:miloszobroslak6@gmail.com">miloszobroslak6@gmail.com</a> 727 935 980
        </div>

        <div style="clear: both;"></div>

    </footer>



</body>
</html>