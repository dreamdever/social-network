<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link href="https://fonts.googleapis.com/css?family=Lato:400,700&amp;subset=latin-ext" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/stylesheets/homepage/normalize.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/stylesheets/homepage/hamburgers.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/stylesheets/homepage/main.css') }}">

    <link rel="icon" type="image/png" href="{{ asset('assets/images/homepage/favicon/favicon.ico') }}">


    <title>Sociálna sieť</title>
</head>
<body>

    <header>
        <div class="container">
            <div id="top-bar" class="flex-container">
                <div id="brand">
                    <h1>
                        <a href="">
                            <img src="{{ asset('assets/images/favicons/favicon-32x32.png')}}" alt="logo"> SPIN
                        </a>
                    </h1>
                </div>
                <nav id="nav-bar">
                    <button id="mobile-nav" class="hamburger hamburger--elastic" type="button">
                        <span class="hamburger-box">
                          <span class="hamburger-inner"></span>
                        </span>
                    </button>
                    <ul id="nav">
                        <li><a href="#social-network">Sociálna sieť</a></li>
                        <li><a href="#technology">Technológie</a></li>
                        <li><a href="#team">Náš tím</a></li>
                        <li><a href="#about">O Projekte</a></li>
                    </ul>
                </nav>
            </div>
        </div>
        <div id="social-network" class="container">
            <h2>Projekt SPIN</h2>
            <div class="underline"></div>
            <p>
                Spin je sociálna sieť pre komunikáciu medzi vývojármi. Tento projekt integruje najmodernejšie technológie vývoja internetových webstránok.
            </p>
            <a href="{{ route('home') }}" class="btn">Prejsť na projekt</a>
        </div>
    </header>

    <main>

        <section id="technology">
            <div class="container">
                <h2>Použité Technológie</h2>
                <div class="underline"></div>
                <p>
                     Celý náš projekt je postavený na PHP frameworku <a href="https://laravel.com/ ">Laravel</a> a ďaľšie použité technológie sú: <br><a href="http://php.net/manual/en/language.references.php">PHP</a>, <a href="https://developer.mozilla.org/en-US/docs/Web/Guide/HTML/HTML5">HTML5</a>, <a href="https://developer.mozilla.org/en-US/docs/Web/CSS/Reference">CSS3</a>, <a href="https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference">JavaScript</a>.
                </p>
                <div class="flex-container">
                    <div class="logo-wrapper">
                        <img src="{{ asset('assets/images/homepage/logo/HTML-logo.png') }}" alt="HTML5">
                    </div>
                    <div class="logo-wrapper">
                         <img src="{{ asset('assets/images/homepage/logo/CSS-logo.png') }}" alt="CSS3">
                    </div>
                    <div class="logo-wrapper">
                        <img src="{{ asset('assets/images/homepage/logo/JS-logo.png') }}" alt="JS">
                    </div>
                    <div class="logo-wrapper">
                         <img src="{{ asset('assets/images/homepage/logo/PHP-logo.png') }}" alt="HTML5">
                    </div>
                    <div class="logo-wrapper">
                         <img src="{{ asset('assets/images/homepage/logo/LARAVEL-logo.png') }}" alt="HTML5">
                    </div>
                </div>
            </div>
        </section>

        <section id="team">
            <div class="container">
                <h2>Náš tím</h2>
                <div class="flex-container">
                    <div class="blurb">
                        <div class="photo"></div>
                        <h3>Andrej</h3>
                        <p>HTML5 & CSS3</p>
                    </div>
                    <div class="blurb">
                        <div class="photo"></div>
                        <h3>Martin</h3>
                         <p>PHP & JS & HTML5 & CSS3</p>
                    </div>
                    <div class="blurb">
                        <div class="photo"></div>
                        <h3>Stanley</h3>
                        <p>PHP & JS & HTML5 & CSS3</p>
                    </div>
                </div>
                <div class="underline"></div>
                <p id="text">
                    Tvorcovia Spinu študujú druhý rok na fakulte prírodných vied UCM v Trnave. Každý člen sa vo voľnom čase venuje vývoju dynamických webstránok, dizajnu, programovaniu desktopových aplikácií a návrhu databáz.
                </p>
            </div>
        </section>

        <section id="about">
            <div class="container">
                <h2>O Projekte</h2>
                <div id="table">
                    <table>
                        <thead>
                            <tr>
                                <th>Úloha</th>
                                <th>Odhadovaný čas</th>
								<th>Reálny čas</th>
                                <th>Kto to bude robiť</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Login/Register userov</td>
                                <td>2h</td>
                                <td>2h</td>
                                <td>Martin</td>
                            </tr>
                            <tr>
                                <td>Úvodná stránka</td>
                                <td>4h</td>
                                <td>3,5h</td>
                                <td>Andrej</td>
                            </tr>
                            <tr>
                                <td>Vyhľadavanie užívatelov</td>
                                <td>3h</td>
                                <td>3h</td>
                                <td>Stanley</td>
                            </tr>
                            <tr>
                                <td>Návrh databázy</td>
                                <td>5h</td>
                                <td>5h</td>
                                <td>Martin &amp; Stanley</td>
                            </tr>
                            <tr>
                                <td>Profil užívatelov</td>
                                <td>10h</td>
                                <td>10h</td>
                                <td>Všetci</td>
                            </tr>
							<tr>
                                <td>Timeline</td>
                                <td>5h</td>
                                <td>5h</td>
                                <td>Martin &amp; Stanley</td>
                            </tr>
							<tr>
                                <td>Systém priatelov</td>
                                <td>5h</td>
                                <td>5h</td>
                                <td>Všetci</td>
                            </tr>
							<tr>
                                <td>Systém správ + live chat</td>
                                <td>5h</td>
                                <td>5h</td>
                                <td>Všetci</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </section>

    </main>

    <footer>
        <div class="container">
            <p>Copyright © 2017, Designed by Andrej</p>
        </div>
    </footer>


<script src="{{ asset('assets/javascript/homepage/jquery.min.js') }}"></script>
<script src="{{ asset('assets/javascript/homepage/app.js') }}"></script>
</body>
</html>