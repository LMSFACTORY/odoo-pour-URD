<?php

$_POST['moodleusername'] = $data['username'];

$_POST['email'] = $data['email'];
$_POST['firstname'] = $data['firstname'];
$_POST['lastname'] = $data['lastname'];
//$_POST['gender'] = 'female';
switch ($data['profile_field_Genre']) {
    case "Femme":
        $_POST['gender'] = 'female';
        break;
    case "Homme":
        $_POST['gender'] = 'male';
        break;
    case "Autre":
        $_POST['gender'] = 'other';
        break;
}
//$_POST['mainlanguage'] = 'fr_FR';
switch ($data['profile_field_Langue']) {
    case "Français":
        $_POST['mainlanguage'] = 'fr_FR';
        break;
    case "English":
        $_POST['mainlanguage'] = 'en_GB';
        break;
}
$_POST['city'] = $data['city'];
$_POST['country'] = $data['country'];
$_POST['organisation'] = $data['profile_field_Organisation'];
$_POST['function'] = $data['profile_field_Poste'];

//$_POST['infoformation_subscription'] = 'y';
switch ($data['profile_field_Newsletterformation']) {
    case "0":
        $_POST['infoformation_subscription'] = 'n';
        break;
    case "1":
        $_POST['infoformation_subscription'] = 'y';
        break;
}
//$_POST['groupeurdnewsletter_subscription'] ='n';
switch ($data['profile_field_newslettergroupeurd']) {
    case "0":
        $_POST['groupeurdnewsletter_subscription'] = 'n';
        break;
    case "1":
        $_POST['groupeurdnewsletter_subscription'] = 'y';
        break;
}

require_once('odoo_contact_registration-cli.php');


/*echo $_POST['moodleusername'];
echo "<br>";
echo $_POST['email'];
echo "<br>";
echo $_POST['firstname'];
echo "<br>";
echo $_POST['lastname'];
echo "<br>";
echo $_POST['gender'];
echo "<br>";
echo $_POST['mainlanguage'];
echo "<br>";
echo $_POST['city'];
echo "<br>";
echo $_POST['country'];
echo "<br>";
echo $_POST['organisation'];
echo "<br>";
echo $_POST['function'];
echo "<br>";
echo $_POST['infoformation_subscription'];
echo "<br>";
echo $_POST['groupeurdnewsletter_subscription'];*/

/*
--Key=username, Value=PRT
--Key=email, Value=sd
--Key=firstname, Value=sd
--Key=lastname, Value=sd
--Key=profile_field_Genre, Value=Femme / Homme / Autre
--Key=profile_field_Langue, Value=Français / English
--Key=city, Value=Plaisians
--Key=country, Value=FR
--Key=profile_field_Organisation, Value=
--Key=profile_field_Poste, Value=
--Key=profile_field_Newsletterformation, Value=0 / 1
--Key=profile_field_newslettergroupeurd, Value=0 / 1
*/



?>