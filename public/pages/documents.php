<?php

require_once($_SERVER['DOCUMENT_ROOT'].'/SegréConduite/public/includes/var.php');
$pageName = "Documents";
require_once (__DIR__ . '/../includes/header.php');
require_once(__DIR__.'/../includes/page_header.php');

?>
<h1>Documents</h1>

<section>
    <p>Voici les documents importants à fournir pour votre inscription à notre auto-école :</p>
    <ul>
        <li>
            Une <a href="<?php echo $domain ?>/assets/documents/attestation-hebergement.doc" download>attestation d'hébergement</a>, que vous devrez remplir sans rature et nous faire parvenir avec tous les autres documents lors de l'inscription.
        </li>
        <li>
            Une <a href="<?php echo $domain ?>/assets/documents/declaration-remplacement-ASSR2.doc" download>déclaration de remplacement ASSR2</a>, que vous devrez remplir et nous faire parvenir avec les autres documents lors de l'inscription.
        </li>
        <li>
            Si vous venez d'obtenir votre permis, veuillez fournir la liste des <a href="<?php echo $domain ?>/assets/documents/docs-permis.doc" download>documents pour le permis</a>.
        </li>
        <li>
            Enfin, veuillez également prendre connaissance de notre <a href="<?php echo $domain ?>/assets/documents/reglement-interieur.docx">règlement intérieur</a> avant de vous inscrire.
        </li>
    </ul>
    <svg class="bigTriangleShadow" xmlns="http://www.w3.org/2000/svg" version="1.1" width="100%" height="100" viewBox="0 0 100 100" preserveAspectRatio="none">
        <path class="trianglePath1" d="M0 0 L50 100 L100 0 Z" />
        <path class="trianglePath2" d="M50 100 L100 40 L100 0 Z" />
    </svg>
</section>