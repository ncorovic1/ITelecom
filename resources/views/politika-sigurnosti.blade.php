@extends('layouts.app')

@section('title')
<title> ITelecom </title>
@endsection

@section('styles')
    <link rel="stylesheet" href="{{ config('app.filePath'). '/css/app.css' }}" />
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
@endsection

@section('fonts')
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,300i,400,400i,600,600i,700,700i" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,400i,600,600i,700,700i" rel="stylesheet">
@endsection

@section('content')

<div class="col-md-1"></div>
<div class="col-md-10">

Upravljanje sigurnosti informacija jeste jedan od najvažnijih izazova sa kojima se susreće svaka IT organizacija u svom poslu. Važnost se ogleda u konstantnoj potrebi za očuvanje sigurnosti svih hardverskih i softverskih resursa koji su u posjedu kompanije, kao i zaštiti podataka i informacija koje IT kompanija nudi.
Ovaj process opisuje aktivnosti koje su vezane za zaštitu informacija protiv rizika od gubitka, zloupotrebe, razotkrivanja i oštećenja informacija. Primarni cilj upravljanja sigurnosti informacija je da se ostvari kontrola nad pristupom informacijama. Pod ovim misli se na očuvanje povjerljivosti, integriteta i dostupnosti informacije. 
Namjena upravljanja sigurnosti informacijama je da obezbjedi i zaštiti informacije i imovinu od svih prijetnji, bilo internih ili eksternih, slučajnih ili namjernih kroz uspostavljanje, implementaciju, izvršavanje, nadziranje, preispitivanje, održavanje i poboljšanje sistema upravljanja sigurnošću informacija (ISMS). Implementacija ove politike i pravila je važna za održavanje integriteta informacionog sistema za pružanje usluga osoblju Organizacije i drugim zainteresovanim stranama. 

<br><br>

<h4><b>Zaštita informacija od neovlašćenog pristupa istim</b></h4>

Kao što smo već rekli, primarni cilj upravljanja sigurnosti informacija je da se ostvari kontrola nad pristupom informacijama. Ovaj uslov se ispunjava definisanjem rola u sistemu, kao i pravima pristupa različitim informacijama, u ovisnosti od odgovarajuće role.
Ovaj zahtjev je u sklopu sistema ITelecom implementiran regulisanjem prava pristupa, za različite vrste korisnika. Unutar sistema je implementirana autentifikacija, u svrhu identificiranja samog korisnika, kao i autorizacija, koja korisniku pruža uslugu sistema, koja je u skladu sa pravima pristupa, koja pripadaju korisniku sa tim identitetom. Na ovaj način je onemogućen neovlašten pristup informacijama, jer svaki korisnik vidi one informacije, koje su mu dozvoljene na uvid, definicijom njegove role u sistemu.

<h4><b>Čuvanje integriteta informacija kroz zaštitu od neovlašćene izmjene</b></h4>

Kao što je bitno onemogućiti neovlašteni pristup informacijama u sistemu, još je bitnije onemogućiti neovlaštenu izmjenu tih informacija.
U sistemu ITelecoma, ovaj zahtjev je, kao što je to opisano kod prethodno opisanog zahtjeva za kontrolu pristupa informacijama, ispunjen postojanjem autentifikacije, a zatim autorizacije za određene akcije u sistemu.

<h4><b>Mogućnost pristupa i izmjene informacija ovlaštenim licima kada je to potrebno</b></h4>
Ovaj zahtjev je nadgradnja prethodno opisanog, i ispunjen je na identičan način.

<h4><b>Zaštita od otkrivanja informacija neovlaštenim osobama bilo slučajnim ili namjernim aktivnostima</b></h4>

Nakon što je uspostavljen primarni cilj, tj. kontrola pristupa informacijama u sistemu, potrebno je obezbijediti, da korisnici sistema, kojima njihova rola dozvoljava pristup određenim povjerljivim informacijama, iste informacije ne prenose onima koji nisu ovlašteni da iste znaju. Nažalost, ovaj zahtjev za sigurnošću informacija se za razliku od kontrole pristupa informacijama ne može riješiti softverski, unutar samog informacionog sistema, već potpisivanjem izjave o čuvanju povjerljivih informacija.
Unutar ITelecoma, svaki uposlenik, kao i administrator sistema, dužan je da potpiše sljedeću izjavu

</div>
<div class="col-md-1"></div>
@endsection