<?php
include_once ('config/settings.php');
$FIRSTNAME = "Alain";
$LASTNAME = "Seys";
$USERNAME = "$FIRSTNAME."."$LASTNAME";
$EMAIL = $FIRSTNAME.".".$LASTNAME."@biopack.be";
$PROXY = $FIRSTNAME."@biopack.be";
$ADRES = "Koniinenboslaan 21";
$STATE = "West-Vlaanderen";
$CITY = "Gistel";
$ZIPCODE = "8470";
$COUNTRY = "België";
$DEPARTMENT = "";
$PHONE = "";
$COMPANY = "";
$MEMBEROF = "Domain Admins";


//wachtwoord gen instellingen
$chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
$passwoord_start = "0";
$password_lengte = "8";
$PASSWORD = substr(str_shuffle($chars), $passwoord_start, $password_lengte);


$profiel = "VERKOOP";
if($profiel == "VERKOOP"){
    //verkoop (bediendie)
    RechtenVerkoop($FIRSTNAME,$LASTNAME,$USERNAME,$PASSWORD,$EMAIL,$ADRES,$ZIPCODE,$STATE,$COUNTRY,$DEPARTMENT,$PHONE,$COMPANY,$MEMBEROF);
    $DEPARTMENT = "VERKOOP";
}
if($profiel == "LOGISIEK"){
    RecthenLogisitek();
    $DEPARTMENT = "LOGISIEK";
}
if($profiel == "BOEKHOUDING"){
    RechtenBoekhouding();
    $DEPARTMENT = "BOEKHOUDING";
}
if($profiel == "IT"){
    RechtenIT();
    $DEPARTMENT = "IT";
}




function ProcessCSV() {

}

function SendEmail(){

}

function RechtenVerkoop ($FIRSTNAME,$LASTNAME,$USERNAME,$PASSWORD,$EMAIL,$ADRES,$ZIPCODE,$STATE,$COUNTRY,$DEPARTMENT,$PHONE,$COMPANY,$MEMBEROF
)
{
    $verkoop_csv = fopen('_Export/'.$EMAIL.'.csv', 'w');
    fputcsv($verkoop_csv, array('firstname', 'lastname', 'username', 'password', 'email', 'streetaddress', 'city', 'zipcode', 'state', 'country', 'department', 'telephone', 'company', 'MemberOf'));
    $data = array(
        array($FIRSTNAME, $LASTNAME, $USERNAME, $PASSWORD, $EMAIL, $ADRES, $ZIPCODE, $STATE, $COUNTRY, $DEPARTMENT, $PHONE, $COMPANY, $MEMBEROF),
    );
    foreach ($data as $row) {
        fputcsv($verkoop_csv, $row);
    }
    fclose($verkoop_csv);
}

function RecthenLogisitek($FIRSTNAME,$LASTNAME,$USERNAME,$PASSWORD,$EMAIL,$ADRES,$ZIPCODE,$STATE,$COUNTRY,$DEPARTMENT,$PHONE,$COMPANY,$MEMBEROF) {
    $log_csv = fopen('_Export/test.csv', 'w');
    fputcsv($log_csv, array('firstname', 'lastname', 'username', 'password', 'email', 'streetaddress', 'city', 'zipcode', 'state', 'country', 'department', 'telephone', 'company', 'MemberOf'));
    $data = array(
        array($FIRSTNAME, $LASTNAME, $USERNAME, $PASSWORD, $EMAIL, $ADRES, $ZIPCODE, $STATE, $COUNTRY, $DEPARTMENT, $PHONE, $COMPANY, $MEMBEROF),
    );
    foreach ($data as $row) {
        fputcsv($log_csv, $row);
    }
    fclose($log_csv);
}
function RechtenBoekhouding($FIRSTNAME,$LASTNAME,$USERNAME,$PASSWORD,$EMAIL,$ADRES,$ZIPCODE,$STATE,$COUNTRY,$DEPARTMENT,$PHONE,$COMPANY,$MEMBEROF) {
    $boek_csv = fopen('_Export/'.$EMAIL.'.csv', 'w');
    fputcsv($boek_csv, array('firstname', 'lastname', 'username', 'password', 'email', 'streetaddress', 'city', 'zipcode', 'state', 'country', 'department', 'telephone', 'company', 'MemberOf'));
    $data = array(
        array($FIRSTNAME, $LASTNAME, $USERNAME, $PASSWORD, $EMAIL, $ADRES, $ZIPCODE, $STATE, $COUNTRY, $DEPARTMENT, $PHONE, $COMPANY, $MEMBEROF),
    );
    foreach ($data as $row) {
        fputcsv($boek_csv, $row);
    }
    fclose($boek_csv);
}
function RechtenIT($FIRSTNAME,$LASTNAME,$USERNAME,$PASSWORD,$EMAIL,$ADRES,$ZIPCODE,$STATE,$COUNTRY,$DEPARTMENT,$PHONE,$COMPANY,$MEMBEROF){
    $it_csv = fopen('_Export/test.csv', 'w');
    fputcsv($it_csv, array('firstname', 'lastname', 'username', 'password', 'email', 'streetaddress', 'city', 'zipcode', 'state', 'country', 'department', 'telephone', 'company', 'MemberOf'));
    $data = array(
        array($FIRSTNAME, $LASTNAME, $USERNAME, $PASSWORD, $EMAIL, $ADRES, $ZIPCODE, $STATE, $COUNTRY, $DEPARTMENT, $PHONE, $COMPANY, $MEMBEROF),
    );
    foreach ($data as $row) {
        fputcsv($it_csv, $row);
    }
    fclose($it_csv);
}
