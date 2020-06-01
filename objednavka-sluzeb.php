<?php
mb_internal_encoding("UTF-8");

$hlaska = '';
if ($_POST) // V poli _POST něco je, odeslal se formulář
{
    if (isset($_POST['jmeno']) && $_POST['jmeno'] &&
        isset($_POST['email']) && $_POST['email'] &&
        isset($_POST['zprava']) && $_POST['zprava'] &&
        isset($_POST['cislo']) && $_POST['cislo'] &&
        isset($_POST['rok']) && $_POST['rok'] == date('Y'))
    {
        $hlavicka = 'From:'. 'Jméno: ' . $_POST['jmeno'] .' '. $_POST['email'] . ' | Telefón: ' . $_POST['cislo'];
        $hlavicka .= "\nMIME-Version: 1.0\n";
        $hlavicka .= "Content-Type: text/html; charset=\"utf-8\"\n";
        $adresa = 'valmapcz@gmail.com';
        $predmet = 'Nová zpráva z valmap.cz';
        $uspech = mb_send_mail($adresa, $predmet, $_POST['zprava'], $hlavicka);
        if ($uspech)
        {
            $hlaska = 'Email byl úspěšně odeslán, brzy vám odpovíme.';
        }
        else
            $hlaska = 'Email se nepodařilo odeslat. Zkontrolujte adresu.';
    }
    else
        $hlaska = 'Formulář není správně vyplněný!';
}

?>

<!DOCTYPE html>

<html lang="cs" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <title>Valmap - Výstavby a rekonstrukce, záměčnícké práce, brány, ploty, krby a kamna</title>
    <meta name="title" content="Valmap - Výstavby a rekonstrukce, záměčnícké práce, brány, ploty, krby a kamnaa" />
    <meta name="description" content="Firma Valmap je zaměřená na výstavbu či rekonstrukci Exteriérových a interiérových prostorů, zhotovení plotů, bran či krbů a kamen v Olomouci a Moravském kraji." />
    <meta name="keywords" content="Výstavba a rekonstrukce Olomouc, Krby a kamna, Ploty, Brány, Rekonstrukce exteriéru, Rekonstrukce interiéru,Výstavba a rekonstrukce Morvský kraj">
    <meta name="author" content="Lukáš Chylík" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="theme-color" content="#525252">content="/Resources/images/metaimage.JPG" />content="/Resources/images/meta/google-meta.jpg" />

    <link href="Resources/css/bootstrap.min.css" rel="stylesheet" />
    <link href="Resources/css/style.min.css" type="text/css" rel="stylesheet" />
    <link rel="apple-touch-icon" sizes="180x180" href="/Resources/images/Icons/favicons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/Resources/images/Icons/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/Resources/images/Icons/favicons/favicon-16x16.png">
    <link rel="manifest" href="/Resources/images/Icons/favicons/manifest.json">
    <link rel="mask-icon" href="/Resources/images/Icons/favicons/safari-pinned-tab.svg" color="#5bbad5">

    <meta itemprop="name" content="Valmap - Výstavby a rekonstrukce, záměčnícké práce, brány, ploty, krby a kamna" />
    <meta itemprop="description" content="Firma Valmap je zaměřená na výstavbu či rekonstrukci Exteriérových a interiérových prostorů, zhotovení plotů, bran či krbů a kamen v Olomouci a Moravském kraji." />
    <meta itemprop="image" content="/Resources/images/metaimage.JPG" />
</head>
<body>
    <header class="header-content">
        <nav class="navigation-bar" role="navigation">
            <ul class="menu">
                <li>
                    <a href="/"></a>
                </li>
                <li>
                    <a href="/#o-firme" id="aboutScroll">O nás</a>
                </li>
                <li class="sub-menu-li">
                    <a href="/#nabidka-sluzeb" id="productsScroll">Nabídka</a>
                    <ul class="sub-menu">
                        <li><a href="/exterierove-prace.html">Exteriér</a></li>
                        <li><a href="/interierove-prace.html">Interiér</a></li>
                       <li><a href="/stresni-systemy.html">Střešní systémy</a></li>
                    </ul>
                </li>
                <li>
                    <a href="/#projekty" id="projectsScroll">Ideologie</a>
                </li>
                <li>
                    <a href="/#kontakt" id="contactScroll">Kontakt</a>
                </li>
                <li class="active">
					<a href="/objednavka-sluzeb.php">Poptávka</a>
                </li>
            </ul>
            <ul class="menu-mobile">
                <li>
                    <a href="/">Home</a>
                </li>
                <li id="nav-icon4">
                    <span></span>
                    <span></span>
                    <span></span>
                </li>
            </ul>
        </nav>
    </header>

    <div style="background-color:#222831">
        <div class="demand-section">
            <div class="section-content">
                <h2 class="demand-section__title">Poptávka</span>
                <span class="demand-section__text">
                    neco o poptavce nejaky text co je co
                    Můžete nás kontaktovat prostřednictvím emailu
                    honza.zaboj@seznam.cz či telefonu +420 956 711 033 ve všedních
                    dnech od 8.00 do 18.00 hodin. Nebo nám na sebe zanechte kontakt
                    a my se Vám ozveme co nejdříve.
                </span>
            </div>
        </div>
    </div>
    <div style="background-color:#393E46">
        <div class="contact-section">
            <div class="section-content">
                <form class="contact-form" method="POST">
                    <div class="row">
                        <div class="col-md-2 help-column"></div>
                        <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                            <table>
                                <tr>
                                    <td>
                                        <input class="contact-form__input"
                                            name="jmeno"
                                            type="text"
                                            placeholder="Jméno a Příjmění *"
                                            required="required"/>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <input class="contact-form__input"
                                            name="email"
                                            type="email"
                                            placeholder="E-mail *"
                                            required="required"/>
                                </tr>
                                <tr>
                                    <td>
                                        <input class="contact-form__input"
                                            name="cislo"
                                            type="tel"
                                            placeholder="Telefón *"
                                            required="required"/>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <input class="contact-form__input"
                                            name="rok"
                                            type="number"
                                            placeholder="Aktuální rok * "
                                            required="required"/>
                                    </td>
                                </tr>
                            </table>
                        </div>
                        <div class="row questions col-xs-12 col-sm-12 col-md-4 col-lg-4">
                            <div class="text-center">
                                <div class="question">
                                    <div class="question-name">
                                        <h2>Nabízené zboží</h2>
                                    </div>
                                    <div class="question-body">
                                        <div class="demand-products">
                                            <div class="button-overlay prod1">
                                                <div class="button product1"></div>
                                                <span class="text">EXTERIER</span>
                                            </div>
                                            <div class="button-overlay prod2">
                                                <div class="button product2"></div>
                                                <span class="text">INTERIER</span>
                                            </div>
                                            <div class="button-overlay prod3">
                                                <div class="button product3"></div>
                                                <span class="text">STŘEŠNÍ SYSTÉMY</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-2 help-column"></div>
                    </div>
                    <div class="row">
                        <div class="col-md-2 help-column"></div>
                        <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
                            <?php
                            if ($hlaska)
                                echo('<p class="validation-message">' . $hlaska . '</p>');
                            ?>
                            <textarea class="contact-form__message" name="zprava" placeholder="Vaše zpráva *"></textarea>
                            <br />

                            <input class="submit-btn" type="submit" value="Odeslat" />
                        </div>
                        <div class="col-md-2 help-column"></div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <footer class="footer-content">
        <div class="section-content">
            <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 copy text-left">
                <span class="footer-content__copy">©VALMAP 2017 Všechna práva vyhrazena</span>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                <a style="margin-top: 2rem; display: block;" href="http://pocitadlo.abz.cz/" title="počítadlo přístupů: pocitadlo.abz.cz"><img src="http://pocitadlo.abz.cz/aip.php?tp=bb" alt="počítadlo.abz.cz" border="0" /></a>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                <span class="footer-content__developer">Developed by:&nbsp;
                <a href="http://luko-tech.wz.sk" title="Stránky vývojáře" target="_blank">Lukáš Chylík</a></span>
            </div>
        </div>
    </footer>

    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script src="Resources/js/bootstrap/bootstrap.min.js"></script>
    <script src="Resources/js/Init.min.js"></script>

</body>
</html>