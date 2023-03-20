<?php

require_once($_SERVER['DOCUMENT_ROOT'].'/SegréConduite/public/includes/var.php');
$pageName = "Acceuil";
require_once (__DIR__ . '/includes/header.php');

?>
<img class="img-accueil" src="<?php echo $domain ?>/assets/img/vitrine.jpg" alt="Vitrine de Segré Conduite">
    <section>
        <h1>Segre Conduite</h1>
        <div class="divider"><div class="dividermask"></div><span><i class="fa-solid fa-car-side"></i></span></div>
        <p>Vous cherchez une auto-école de confiance à Segré ? Ne cherchez plus ! L'Auto Ecole Segré Conduite, située au 11-13 rue Jules Ferry, est là pour vous accompagner dans votre apprentissage de la conduite.</p>
        <p>Rencontrez notre équipe de professionnels passionnés et motivés pour démarrer votre apprentissage de la conduite à l'Auto Ecole Segré Conduite. Ne perdez plus de temps et lancez-vous sur la route de la réussite dès maintenant !</p>
        <svg class="bigTriangleShadow" xmlns="http://www.w3.org/2000/svg" version="1.1" width="100%" height="100" viewBox="0 0 100 100" preserveAspectRatio="none">
            <path class="trianglePath1" d="M0 0 L50 100 L100 0 Z" />
            <path class="trianglePath2" d="M50 100 L100 40 L100 0 Z" />
        </svg>
    </section>

    <section>
        <h2>Accueil</h2>
        <div class="divider"><div class="dividermask"></div><span><i class="fa-solid fa-car-side"></i></span></div>
        <p>Nous proposons des permanences d'accueil au bureau pour répondre à toutes vos questions et vous aider à choisir la formule qui vous convient le mieux.</p>
        <table>
            <tr><th class="b-top b-left b-right b-bottom">Permanences D'accueil</th></tr>
            <tr><td class="b-top b-left b-right">Lundi</td></tr>
            <tr><td class=" b-left b-right b-bottom">17h à 19h</td></tr>
            <tr><td class="b-top b-left b-right">Mercredi</td></tr>
            <tr><td class="b-left b-right">11h à 12h</td></tr>
            <tr><td class="b-left b-right">&</td></tr>
            <tr><td class="b-left b-right b-bottom">16h à 18h</td></tr>
            <tr><td class="b-top b-left b-right">Vendredi</td></tr>
            <tr><td class="b-left b-right b-bottom">17h à 19h</td></tr>
            <tr><td class="b-top b-left b-right">Samedi</td></tr>
            <tr><td class="b-left b-right b-bottom">10h à 12h</td></tr>
        </table>
        <p>Les permanences peuvent être modifiées en cas de jours fériés, d'imprévu ou d'absence de notre équipe. Dans ce cas, nous ferons de notre mieux pour vous informer à l'avance et trouver une solution pour répondre à vos besoins. </p>
        <svg class="bigTriangleShadow" xmlns="http://www.w3.org/2000/svg" version="1.1" width="100%" height="100" viewBox="0 0 100 100" preserveAspectRatio="none">
            <path class="trianglePath1" d="M0 0 L50 100 L100 0 Z" />
            <path class="trianglePath2" d="M50 100 L100 40 L100 0 Z" />
        </svg>
    </section>

    <section>
        <h2>Nous situez</h2>
        <div class="divider"><div class="dividermask"></div><span><i class="fa-solid fa-car-side"></i></span></div>
        <p>Notre auto-école est idéalement située au 11-13 rue Jules Ferry à Segré, à proximité des établissements scolaires :</p>
        <ul>
            <li><p>Nous sommes à distance similaire entre les deux lycées (Blaise Pascal et Bourg Chevreau St-Anne)</p></li>
            <li><p>Nous sommes également proches des deux collèges (Georges Gironde et Saint Joseph)</p></li>
        </ul>
        <p>Notre emplacement stratégique facilite l'accès à nos services pour les étudiants et les jeunes conducteurs. Que vous veniez à pied, en vélo ou en voiture, notre auto-école est facilement accessible depuis tous les quartiers de la ville. Rejoignez-nous pour une formation de qualité à deux pas de chez vous !</p>

        <ul class="wrapper">
            <li class="icon waze">
              <span class="tooltip">Waze</span>
              <span><a class="logo button-s" href="https://ul.waze.com/ul?place=ChIJGxSeFdSTCEgRWJPrG9Jn04I&ll=47.68385250%2C-0.87132210&navigate=yes&utm_campaign=default&utm_source=waze_website&utm_medium=lm_share_location" target="_blank" rel="noopener noreferrer"><img src="assets/img/logo/waze-icon.svg" alt="Logo Waze" class="waze-logo"></a></span>
            </li>
            <li class="icon maps">
              <span class="tooltip">Google Maps</span>
              <span><a class="logo button-s" href="https://goo.gl/maps/KUAdjCRGJYwBWdbVA" target="_blank" rel="noopener noreferrer"><img src="assets/img/logo/google-maps-2020-icon.svg" alt="Logo Google Maps" class="maps-logo"></a></span>
            </li>
        </ul>
        <svg class="bigTriangleShadow" xmlns="http://www.w3.org/2000/svg" version="1.1" width="100%" height="100" viewBox="0 0 100 100" preserveAspectRatio="none">
            <path class="trianglePath1" d="M0 0 L50 100 L100 0 Z" />
            <path class="trianglePath2" d="M50 100 L100 40 L100 0 Z" />
        </svg>
    </section>

    <section>
        <h2>Prestations</h2>
        <div class="divider"><div class="dividermask"></div><span><i class="fa-solid fa-car-side"></i></span></div>
        <p>Notre auto-école vous propose une large gamme de formations à la conduite pour répondre à tous vos besoins : </p>

        <div class="links">
            <ul class="links__list" style="--item-total:9">
                <li class="links__item" style="--item-count:1">
                    <a class="links__link" href="#">
                        <img class="links__icon" src="assets/img/logo/Permis-B.png" alt="Logo Permis B">
                        <span class="links__text">Permis B</span>
                    </a>
                </li>
                <li class="links__item" style="--item-count:2">
                    <a class="links__link" href="#">
                        <img class="links__icon" src="assets/img/logo/permis-moto.png" alt="Logo Permis Moto">
                        <span class="links__text">Permis Moto</span>
                    </a>
                </li>
                <li class="links__item" style="--item-count:3">
                    <a class="links__link" href="#">
                        <img class="links__icon" src="assets/img/logo/Permis-AM.png" alt="Logo Permis AM">
                        <span class="links__text">Permis AM (BSR)</span>
                    </a>
                </li>
                <li class="links__item" style="--item-count:4">
                    <a class="links__link" href="#">
                        <img class="links__icon" src="assets/img/logo/Permis-B96.png" alt="Logo Permis B96">
                        <span class="links__text">Permis B96</span>
                    </a>
                </li>
                <li class="links__item" style="--item-count:5">
                    <a class="links__link" href="#">
                        <img class="links__icon" src="assets/img/logo/conduite-supervisé.png" alt="Logo Conduite supervisée">
                        <span class="links__text">Conduite supervisée</span>
                    </a>
                </li>
                <li class="links__item" style="--item-count:6">
                    <a class="links__link" href="#">
                        <img class="links__icon" src="assets/img/logo/conduite_accompagnée.png" alt="Logo Conduite accompagnée">
                        <span class="links__text">Conduite accompagnée</span>
                    </a>
                </li>
                <li class="links__item" style="--item-count:7">
                    <a class="links__link" href="#">
                        <img class="links__icon" src="assets/img/logo/AAC_logo.png" alt="Logo Tests psychotechniques">
                        <span class="links__text">Tests psychotechniques</span>
                    </a>
                </li>
                <li class="links__item" style="--item-count:8">
                    <a class="links__link" href="#">
                        <img class="links__icon" src="assets/img/logo/code.png" alt="Logo Code">
                        <span class="links__text">Code en ligne</span>
                    </a>
                </li>
                <li class="links__item" style="--item-count:9">
                    <a class="links__link" href="#">
                        <img class="links__icon" src="assets/img/logo/stage-code.png" alt="Logo Stage code">
                        <span class="links__text">Stage code intensif</span>
                    </a>
                </li>
            </ul>
        </div>
        <svg class="bigTriangleShadow" xmlns="http://www.w3.org/2000/svg" version="1.1" width="100%" height="100" viewBox="0 0 100 100" preserveAspectRatio="none">
            <path class="trianglePath1" d="M0 0 L50 100 L100 0 Z" />
            <path class="trianglePath2" d="M50 100 L100 40 L100 0 Z" />
        </svg>
    </section>
    
    <section>
        <h2>Documents pour inscription</h2>
        <div class="divider"><div class="dividermask"></div><span><i class="fa-solid fa-car-side"></i></span></div>
        <p>Pour vous inscrire dans notre auto-école, nous avons besoin des documents suivants :</p>
        <ul>
            <li><p>Pièce d'identité du candidat + Pièce d'identité d'un parent</p></li>
            <li><p>Attestation JDC</p></li>
            <li><p>Justificatif de domicile (même parent que la pièce d'identité)</p></li>
            <li><p>Attestation d'hébergement (imprimable sur notre site dans "documents")</p></li>
            <li><p>E-photo sur place ou E-photo (certifiée ANTS)</p></li>
            <li><p>Titre de conduite déjà obtenu (AM, Moto, etc...)</p></li>
            <li><p>ASSR2</p></li>
            <li><p>Un numéro de portable et une adresse mail</p></li>
        </ul>
        <p>Vous pouvez nous fournir ces documents en copies, par mail ou sur clé USB, regroupés dans un format JPEG, BMP ou PDF. Nous serons ravis de vous accueillir et de vous aider à réaliser vos projets de conduite !</p>
        <svg class="bigTriangleShadow" xmlns="http://www.w3.org/2000/svg" version="1.1" width="100%" height="100" viewBox="0 0 100 100" preserveAspectRatio="none">
            <path class="trianglePath1" d="M0 0 L50 100 L100 0 Z" />
            <path class="trianglePath2" d="M50 100 L100 40 L100 0 Z" />
        </svg>
    </section>

    <section>
        <h2>Formations Code</h2>
        <div class="divider"><div class="dividermask"></div><span><i class="fa-solid fa-car-side"></i></span></div>
        <p>Nous sommes là pour vous accompagner tout au long de votre formation de code :</p>
        <ul>
            <li><p>Horaires des cours de code : le lundi de 18h à 19h, le mercredi de 16h à 17h et de 17h à 18h (cours théorique), le vendredi de 17h à 18h et de 18h à 19h et le samedi de 10h à 11h et de 11h à 12h (cours théorique)</p></li>
            <li><p>Stages code pendant les vacances scolaires</p></li>
            <li><p>Formation code en ligne : séries + cours (validité 6 mois) avec aide et suivi de vos formateurs</p></li>
            <li><p>Tous les cours de code sont animés et corrigés par un formateur</p></li>
            <li><p>Formation code sur tablettes "comme à l'examen" dans nos locaux</p></li>
        </ul>
        <p>Notre auto-école vous propose une formation complète et adaptée à votre rythme pour vous permettre de réussir votre examen de code. Les cours sont dispensés par des formateurs qualifiés qui seront là pour vous aider à progresser et répondre à toutes vos questions. Avec nos cours en ligne, vous pourrez travailler le code chez vous à votre rythme, avec l'aide et le suivi de nos formateurs. Rejoignez-nous pour une formation de qualité !</p>
        <svg class="bigTriangleShadow" xmlns="http://www.w3.org/2000/svg" version="1.1" width="100%" height="100" viewBox="0 0 100 100" preserveAspectRatio="none">
            <path class="trianglePath1" d="M0 0 L50 100 L100 0 Z" />
            <path class="trianglePath2" d="M50 100 L100 40 L100 0 Z" />
        </svg>
    </section>

    <div class="route"></div>

    <?php

    require_once (__DIR__ . '/includes/footer.php');

    ?>
</body>
</html>