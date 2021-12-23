<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <table class="table-output-excel" border="1">
        <tr>
            <th rowspan="2"><strong>No </strong></th>
            <th rowspan="2"><strong>Bidang </strong></th>
            <th colspan="4"><strong>Anggaran </strong></th>
            <th colspan="3"><strong>Output </strong></th>
        </tr>
        <tr>
            <th><strong>Pagu </strong></th>
            <th><strong>Realisasi </strong></th>
            <th><strong>Sisa </strong></th>
            <th><strong>% </strong></th>
            <th><strong>Target </strong></th>
            <th><strong>Realisasi </strong></th>
            <th><strong>% </strong></th>
        </tr>
    
        <tr>
            <td>1</td>
            <td>Umum</td>
            <td>Rp. {{ number_format($paguUMUM, 0, '.', '.') }}</td>
            <td>Rp. {{ number_format($rpUMUM, 0, '.', '.') }}</td>
            <td>Rp. {{ number_format($paguUMUM - $rpUMUM, 0, '.', '.') }}</td>
            <td>{{ $percentageUMUM }} % </td>
            <td>{{ $targetUMUM }}</td>
            <td>{{ $rp2UMUM }}</td>
            <td>{{ $percentageUMUM2 }} % </td>
        </tr>
    
        <tr>
            <td>2</td>
            <td>PPAI</td>
            <td>Rp. {{ number_format($paguPPAI, 0, '.', '.') }}</td>
            <td>Rp. {{ number_format($rpPPAI, 0, '.', '.') }}</td>
            <td>Rp. {{ number_format($paguPPAI - $rpPPAI, 0, '.', '.') }}</td>
            <td>{{ $percentagePPAI }} % </td>
            <td>{{ $targetPPAI }}</td>
            <td>{{ $rp2PPAI }}</td>
            <td>{{ $percentagePPAI2 }} % </td>
        </tr>

        <tr>
            <td>3</td>
            <td>PPAII</td>
            <td>Rp. {{ number_format($paguPPAII, 0, '.', '.') }}</td>
            <td>Rp. {{ number_format($rpPPAII, 0, '.', '.') }}</td>
            <td>Rp. {{ number_format($paguPPAII - $rpPPAII, 0, '.', '.') }}</td>
            <td>{{ $percentagePPAII }} % </td>
            <td>{{ $targetPPAII }}</td>
            <td>{{ $rp2PPAII }}</td>
            <td>{{ $percentagePPAII2 }} % </td>
        </tr>

        <tr>
            <td>4</td>
            <td>SKKI</td>
            <td>Rp. {{ number_format($paguSKKI, 0, '.', '.') }}</td>
            <td>Rp. {{ number_format($rpSKKI, 0, '.', '.') }}</td>
            <td>Rp. {{ number_format($paguSKKI - $rpSKKI, 0, '.', '.') }}</td>
            <td>{{ $percentageSKKI }} % </td>
            <td>{{ $targetSKKI }}</td>
            <td>{{ $rp2SKKI }}</td>
            <td>{{ $percentageSKKI2 }} % </td>
        </tr>

        <tr>
            <td>5</td>
            <td>PAPK</td>
            <td>Rp. {{ number_format($paguPAPK, 0, '.', '.') }}</td>
            <td>Rp. {{ number_format($rpPAPK, 0, '.', '.') }}</td>
            <td>Rp. {{ number_format($paguPAPK - $rpPAPK, 0, '.', '.') }}</td>
            <td>{{ $percentagePAPK }} % </td>
            <td>{{ $targetPAPK }}</td>
            <td>{{ $rp2PAPK }}</td>
            <td>{{ $percentagePAPK2 }} % </td>
        </tr>
    
    </table>
</body>
</html>