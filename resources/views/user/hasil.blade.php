<!DOCTYPE html>
<html>

<head>
    <title>Hasil Medical Checkup</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>

    @php
    date_default_timezone_set("Asia/Bangkok");

    function tgl_indo($tanggal){
    $bulan = array (
    1 => 'Januari',
    'Februari',
    'Maret',
    'April',
    'Mei',
    'Juni',
    'Juli',
    'Agustus',
    'September',
    'Oktober',
    'November',
    'Desember'
    );
    $pecahkan = explode('-', $tanggal);

    return $pecahkan[2] . ' ' . $bulan[ (int)$pecahkan[1] ] . ' ' . $pecahkan[0];
    }
    @endphp

    <div class="container">
        <center>
            <h2>Hasil Medical Checkup</h2>
        </center>
        <br />
        {{-- <a href="" class="btn btn-primary" target="_blank">CETAK PDF</a> --}}
        <table>
            <tbody>
                <h4><u>Identitas Diri</u></h4>
                @php $i=1 @endphp
                @foreach ($user as $item)
                <tr>
                    <td>Nama </td>
                    <td>: {{$item->name}}</td>

                </tr>
                <tr>
                    <td>Alamat </td>
                    <td>: {{$item->alamat}}</td>
                </tr>
                <tr>
                    <td>Email </td>
                    <td>: {{$item->email}}</td>
                </tr>
                <tr>
                    <td>Telpon </td>
                    <td>: {{$item->hp}}</td>
                </tr>

                <br> <br>
                <h4><u>Pemeriksaan</u></h4>
                <tr>
                    <td>Tinggi Badan</td>
                    <td>: {{ $item->tb }} cm</td>
                </tr>
                <tr>
                    <td>Berat Badan</td>
                    <td>: {{ $item->bb }} Kg</td>
                </tr>
                <tr>
                    <td>Paket Pemeriksaan </td>
                    <td>: {{ $item->nama }}</td>
                </tr>
                <tr>
                    <td>Keluhan</td>
                    <td>: {{$item->keluhan}}</td>
                </tr>
                <tr>
                    <td>Hasil Observasi</td>
                    <td>: {{ $item->hasil }}</td>
                </tr>
                <tr>
                    <td>Tanggal Pemeriksaan</td>
                    <td>: {{ tgl_indo(date("Y-m-d", strtotime($item->mupdate))) }}</td>
                </tr>


                @endforeach
                <br><br>

            </tbody>
        </table>
        <div style="position: absolute; bottom: 7cm; right: 3cm; height: 100px;">
            Indramayu, {{ tgl_indo(date("Y-m-d")) }}
            <br>
            Dokter Pemeriksa
            <br>
            <img src="{{ public_path('/images/ttd.png') }}" width="200pt" alt="">
            <br>
            <b><u>dr. Rustam Adi Suyoso,Sp.PD</u></b>
            <br>
            Spesialis Penyakit Dalam

        </div>

    </div>

</body>

</html>
