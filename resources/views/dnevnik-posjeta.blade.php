@extends('layouts.app')

@section('title')
<title> Dnevnik posjeta — ITelecom </title>
@endsection

@section('styles')
    <link rel="stylesheet" href="{{ config('app.filePath'). '/css/app.css' }}" />
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css" />
@endsection

@section('fonts')
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,300i,400,400i,600,600i,700,700i" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,400i,600,600i,700,700i" rel="stylesheet">
@endsection

@section('script')
    <!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>-->
@endsection

@section('content')

    <?php
        require_once 'dompdf/autoload.inc.php';
    ?>

    <div class="container-fluid">
        <div class="container-fluid">
<?php
            if ($_SERVER['REQUEST_METHOD'] == "POST") {
                include ('mpdf60/mpdf.php');
                
                $html = "<table class='table'>
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>ID</th>
                                                <th>E-mail adresa</th>
                                                <th>Stranica</th>
                                                <th>IP adresa</th>
                                                <th>Vrijeme</th>
                                                <th>Ishod</th>
                                            </tr>
                                        </thead>
                                        <tbody>";

                $counter = 0;
                foreach ($page_visits as $visit) {
                    if ($counter % 2 == 0) {
                        $html .= "<tr class='active'>";
                    }
                    else {
                        $html .= "<tr>";
                    }
                    
                    $html .= "<td>$counter</td>";
                    $html .= "<td>".$visit['id']."</td>";
                    
                    $html .= "<td>".$visit['email']."</td>";
                    $html .= "<td>".$visit['route']."</td>";
                    $html .= "<td>".$visit['ip_address']."</td>";
                    $html .= "<td>".date('d.m.Y H:i:s', $visit['created_at']->getTimestamp())."</td>";
                    $html .= "<td>";
                    if ($visit['result'] == 'AUTHORIZED') {
                        $html .= "USPJEH";
                    }
                    else {
                        $html .= "NEUSPJEH";
                    }
                    $html .= "</td></tr>";
                    $counter++;
                }
                $html .= "</tbody></table>";
                
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
                <div class="col-md-1">
                </div>
                <div class="col-md-10">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">
                                Dnevnik posjeta stranicama
                            </h3>
                        </div>
                        <div class="panel-body">
                            <br>
                            <div class="row">
                                <div class="col-md-1"></div>
                                <div class="col-md-10">
                                    <nav class="navbar navbar-default" role="navigation">
                                        <div class="navbar-header">
                                            
                                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                                                <span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span>
                                            </button>
                                        </div>
                                        
                                        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                                            <form method="GET" action="/dnevnik-posjeta" class="navbar-form navbar-left" role="search">
                                                <ul class="nav navbar-nav">
                                            
                                                    <div class="form-group">
                                                        <input id="filter-by-email" name="email" type="text" class="form-control" size="35" 
                                                            placeholder="Filtriraj po e-mail adresi" onkeyup="saveValue(this);">
                                                    </div>&nbsp;
                                                    <select class="form-control" name="created_at" id="sort-by-created-at">
                                                        <option value="" disabled selected>Poredaj hronološki</option>
                                                        <option value="Najnovije">Najnovije</option>
                                                        <option value="Najstarije">Najstarije</option>
                                                    </select>&nbsp;&nbsp;
                                                    <ul class="nav navbar-nav navbar-right">
                                                        <button type="submit" class="btn btn-default">
                                                            Filtriraj
                                                        </button>
                                                    </ul>
                                                </ul>
                                            </form>
                                        </div>
                                    </nav>
                                </div>
                                <div class="col-md-1"></div>
                            </div>

                            <div class="row">
                                <div class="col-md-1"></div>
                                <div class="col-md-10">
                                    <form action="" method="POST">
                                        <input type="submit" class="btn btn-default" name="exportPDF" value="PDF" />
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                    </form>
                                </div>
                                <div class="col-md-1"></div>
                            </div>

                            <div class="row">
                                <div class="col-md-1"></div>
                                <div class="col-md-10">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>ID</th>
                                                <th>E-mail adresa</th>
                                                <th>Stranica</th>
                                                <th>IP adresa</th>
                                                <th>Vrijeme</th>
                                                <th>Ishod</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $counter = 0; ?>
                                            @foreach ($page_visits as $visit)
                                                @if ($counter % 2 == 0)
                                                    <tr class="active">
                                                @else
                                                    <tr>
                                                @endif
                                                    <td>{{ $counter }}</td>
                                                    <td>{{ $visit->id }}</td>
                                                    @if ($visit->email == null)
                                                        <td><span class="label label-default">GUEST</span></td>
                                                    @else
                                                        <td>{{ $visit->email }}</td>
                                                    @endif
                                                    <td>{{ $visit->route }}</td>
                                                    <td>{{ $visit->ip_address }}</td>
                                                    <td>{{ date('d.m.Y H:i:s', $visit->created_at->getTimestamp()) }}</td>
                                                    <td>
                                                        @if ($visit->result == 'result')
                                                            <span class="label label-success">USPJEH</span>
                                                        @else
                                                            <span class="label label-success">USPJEH</span>
                                                        @endif
                                                    </td>
                                                </tr>
                                                <?php $counter++; ?>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                                <div class="col-md-1"></div>
                            </div>
                            <div class="row">
                                <div class="col-md-5"></div>
                                <div class="col-md-2">
                                    {{ $page_visits->links() }}
                                </div>
                                <div class="col-md-5"></div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-1"></div>
            </div>
        </div>
    </div>
    <script src="js/dnevnik-prijava.js"></script>
@endsection