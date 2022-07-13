
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Colorlib Templates">
    <meta name="author" content="Colorlib">
    <meta name="keywords" content="Colorlib Templates">

    <!-- Title Page-->
    <title>Apply for job by Colorlib</title>

    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">

    <!-- Main CSS-->
    <link href="css/main.css" rel="stylesheet" media="all">
</head>

<body>
    <div class="page-wrapper bg-dark p-t-100 p-b-50">
        <div class="wrapper wrapper--w900">
            <div class="card card-6">
                <div class="card-heading">
                    <h2 class="title">Silahkan pesan disini</h2>
                </div>
                <div class="card-body">
                    <form method="post" action="{{ url('simpandata') }}">
                        {{ csrf_field() }}
                        <input type="hidden" name="idpasien" value="{{$auth->id}}">
                         <div class="form-row">
                           <div class="name">Berat Badan</div>
                           <div class="value">
                                  <input class="input--style-6" type="text" name="bb" placeholder="kg">
                              </div>
                           </div>

                <div class="card-body">
                    <form method="POST">
                         <div class="form-row">
                             <div class="name">Tinggi Badan</div>
                              <div class="value">
                                   <input class="input--style-6" type="text" name="tb" placeholder="cm">
                                  </div>
                               </div>
                <div class="card-body">
                    <form method="POST">
                        <div class="form-row">
                            <div class="name" placeholder="Paket">Pilih Paket</div>
                            <div class="value">
                                <select class="input--style-6" name="idpaket" id="idpaket" style="width: 100%; min-height:40px">
                                    <option value="">Pilih Paket</option>
                                    @foreach($paket as $p)
                                    <option value="{{ $p->id }}">{{ $p->nama }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="name">Keluhan</div>
                            <div class="value">
                                <div class="input-group">
                                    <textarea class="textarea--style-6" name="keluhan" placeholder="masukkan keluhan anda disini"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Upload file</div>
                            <div class="value">
                                <div class="input-group js-input-file">
                                    <input class="input-file" type="file" name="file" id="file">
                                    <label class="label--file" for="file">Choose file</label>
                                    <span class="input-file__info">No file chosen</span>
                                </div>
                                <div class="label--desc">Upload your CV/Resume or any other relevant file. Max file size 50 MB</div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="card-footer">
                    <button class="btn btn--radius-2 btn--blue-2" type="submit">Pesan sekarang</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Jquery JS-->
    <script src="vendor/jquery/jquery.min.js"></script>


    <!-- Main JS-->
    <script src="js/global.js"></script>

</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>
<!-- end document-->
