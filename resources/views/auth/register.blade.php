@extends('layouts.app')

@section('styles')
<link href="/css/app.css" rel="stylesheet">
@endsection

@section('title')
<title> Registracija — ITelecom </title>
@endsection

@section('content')
<div class="container">
<?php
            if ($_SERVER['REQUEST_METHOD'] == "POST") {
                            include ('mpdf60/mpdf.php');
                            
                            $html .= "<p style='font-size:20px'>Ja, ".$_REQUEST['full_name']." rasporedjen/a na radno mjesto 'radnik' u ITelecom dajem dana ".date('d.m.Y', time())." godine sljedecu</p>";
                            $html .= "<br>";
                            $html .= "<h1 style='font-size:36px' align='center'><b>I Z J A V U</b></h1><br>";

                            $html .= "<p style='font-size:20px'>Kojom pod punom moralnom, materijalnom i krivicnom odgovornoscu izjavljujem:
<br><br>-	Da sve informacije, podatke, isprave koje saznajem i do kojih dodjem prilikom obavljanja svakodnevnih radnih aktivnosti unutar firme ITelecom, koji predstavljaju poslovnu tajnu, necu saopstavati ili davati drugim pravnim i fizickim licima na uvid; 
<br><br>-	Da sam upoznat da svi instalacioni mediji, softverske licence i programi, kao i razvijena programska rjesenja, pripadaju firmi  u kojoj sam zaposlen, te da nemam prava ni pod kakvim uslovima izvršiti neovlasteno prisvajanje, presnimavanje, instalaciju, prodaju drugim pravnim ili fizickim licima van ugovornog odnosa sa firmom ITelecom
<br><br>-	Obavezujem se na cuvanje elektronskog identiteta koji ukljucuje korisnicko ime i lozinku koju sam dobio od Poslodavca i koji mi omogucava pristup informacionom sistemu i mreznim uslugama,
<br><br>-	Obavezujem se na cuvanje svog elektronskog identiteta i informacione arhitekture koja pripada firmi ITelecom,
Ovim putem potvrdjujem da sam upoznat/a s Politikom informacijske sigurnosti i Pravilnikom o disciplinskoj i materijalnoj odgovornosti radnika firme ITelecom, Pravilnikom o radu Drustva, te ostalim politikama i procedurama koje se primjenjuju u Drustvu i koje se odnose na obavljanje poslova radnog mjesta za koje sam zakljucio/la Ugovor o radu.
Ukoliko postupim suprotno gore navedenoj izjavi saglasan/a sam da se isto ima smatrati tezom povredom radne obaveze.<br><br>".date('d.m.Y', time()).". Sarajevo,<br><br> 
________________<br>
Radnik<p>";
                            $html = utf8_encode($html);
                            $mpdf = new mPDF('utf-8', 'A4-L');
                            $mpdf->allow_charset_conversion = TRUE;
                            $mpdf->charset_in = 'UTF8'; 
                            $mpdf->WriteHTML($html);
                            $mpdf->Output('Report', 'I');
                            exit();
                        }

?>



    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                
                <style>
                    body {
                        background: url(images/telecom.jpg) no-repeat center center;
                    }
                </style>
                
                <div class="panel-heading">Registrujte se</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="/register">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('full_name') ? ' has-error' : '' }}">
                            <label for="full_name" class="col-md-4 control-label">Ime i prezime</label>

                            <div class="col-md-6">
                                <input id="full_name" type="text" class="form-control" name="full_name" value="{{ old('full_name') }}" required autofocus>

                                @if ($errors->has('full_name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('full_name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-mail adresa</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Lozinka</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password-confirm" class="col-md-4 control-label">Ponovite lozinku</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('telephone') ? ' has-error' : '' }}">
                            <label for="telephone" class="col-md-4 control-label">Telefonski broj</label>

                            <div class="col-md-6">
                                <input id="telephone" type="text" class="form-control" name="telephone" required>

                                @if ($errors->has('telephone'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('telephone') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        
                        <div class="form-group{{ $errors->has('type') ? ' has-error' : '' }}">
                            <label for="type" class="col-md-4 control-label">Rola</label>
                            
                            <div class="col-md-6">
                                <select id="type" class="form-control" name="type" value="admin" required >
                                    <option value="admin">  Admin  </option>
                                    <option value="worker"> Radnik </option>
                                    <option value="client"> Korisnik </option>                                   
                                </select>

                                @if ($errors->has('type'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('type') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Register
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
