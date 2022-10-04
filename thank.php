<?php 

    echo 'Merci'. ' ' . $_POST['userFirstName'] . ' '.$_POST['userLastName'] .' '. 'de nous avoir contacté à propos de ' .$_POST['menuDestination'] . '<br>' .
    'Un de nos conseiller vous contactera soit à l’adresse' .' '. $_POST['userEmail'] . 'ou par téléphone au' . ' ' . $_POST['userPhone'] . ' ' . 'dans les plus brefs délais pour traiter votre demande : <br>' .
    $_POST['userMessage'] ;