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
                            include ('mpdf60/mpdf.php');
                            
                            $html .= $page_visits[0]['email']."
                            <table class='table'>
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
                                                    <tr class='active'>
                                                @else
                                                    <tr>
                                                @endif
                                                    <td>{{ $counter }}</td>
                                                    <td>{{ $visit->id }}</td>
                                                    @if ($visit->email == null)
                                                        <td><span class='label label-default'>GUEST</span></td>
                                                    @else
                                                        <td>{{ $visit->email }}</td>
                                                    @endif
                                                    <td>{{ $visit->route }}</td>
                                                    <td>{{ $visit->ip_address }}</td>
                                                    <td>{{ date('d.m.Y H:i:s', $visit->created_at->getTimestamp()) }}</td>
                                                    <td>
                                                        @if ($visit->result == 'result')
                                                            <span class='label label-success'>USPJEH</span>
                                                        @else
                                                            <span class='label label-success'>USPJEH</span>
                                                        @endif
                                                    </td>
                                                </tr>
                                                <?php $counter++; ?>
                                            @endforeach
                                        </tbody>
                                    </table>";




                            /*$html .= "<html>
                                <head>
                                <style>
                                body {font-family: sans-serif;
                                    font-size: 10pt;
                                }
                                td { vertical-align: top; 
                                    border-left: 0.6mm solid #000000;
                                    border-right: 0.6mm solid #000000;
                                    align: center;
                                }
                                table thead td { background-color: #EEEEEE;
                                    text-align: center;
                                    border: 0.6mm solid #000000;
                                }
                                td.lastrow {
                                    background-color: #FFFFFF;
                                    border: 0mm none #000000;
                                    border-bottom: 0.6mm solid #000000;
                                    border-left: 0.6mm solid #000000;
                                    border-right: 0.6mm solid #000000;
                                }
                                
                                </style>
                                </head>
                                <body>
                                
                                <!--mpdf
                                <htmlpagefooter name='myfooter'>
                                <div style='border-top: 1px solid #000000; font-size: 9pt; text-align: center; padding-top: 3mm; '>
                                Page {PAGENO} of {nb}
                                </div>
                                </htmlpagefooter>
                                
                                <sethtmlpageheader name='myheader' value='on' show-this-page='1' />
                                <sethtmlpagefooter name='myfooter' value='on' />
                                mpdf-->
                                
                                <div style='text-align:center;'>HTML Form to PDF - Blog.theonlytutorials.com</div><br>
                                <table class='items' width='100%' style='font-size: 9pt; border-collapse: collapse;' cellpadding='8'>
                                <thead>
                                <tr>
                                <td width='15%'>FIELDS</td>
                                <td width='15%'>VALUES</td>
                                </tr>
                                </thead>
                                <tbody>
                                <tr><td>Name</td><td>blabla</td></tr>
                                <tr><td>Email</td><td>blabla</td></tr>
                                <tr><td class='lastrow'>Your Message</td><td class='lastrow'>msg</td></tr>
                                </tbody>
                                </table>
                                </body>
                                </html>";*/
 
                            /*$mpdf = new mPDF();
                            $mpdf->WriteHTML($html);
                            $mpdf->SetDisplayMode('fullpage');
 
                            $mpdf->Output();*/
                            
                            $html .='test'; 
                            $html = utf8_encode($html);
                            $mpdf = new mPDF('utf-8', 'A4-L');
                            $mpdf->allow_charset_conversion = TRUE;
                            $mpdf->charset_in = 'UTF8'; 
                            $mpdf->WriteHTML($html);
                            $mpdf->Output('Report', 'I');
                            exit();
 
                        ?>

                        
@endsection