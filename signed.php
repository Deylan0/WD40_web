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

            <ul class="main-menu">
                <a href="zdjecia.html"><li>Zdjęcia</li></a>
                <a href="kornika.html"><li>Kronika</li></a>
                <a href="rozkazy.html"><li>Rozkazy</li></a>
                <a href="kadra.html"><li>Kadra</li></a>
                <a href="konstytucja.html"><li>Konstytucja</li></a>
                <a href="jak_dolonczyc.html"><li>Jak do nas dołączyć</li></a>
                <a href="skladki.html"><li>Składki</li></a>
                <a href="wydarzenia.html"><li>wydarzenia</li></a>
            </ul>

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