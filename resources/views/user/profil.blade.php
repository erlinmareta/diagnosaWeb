<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>profil user</title>
</head>

<body>
    @if($errors->any())
    <div class="alert alert-danger">{{ $errors->first() }}</div>
    @endif
<form method="POST" action="{{ route('user.update') }}">
        {{ csrf_field() }}
        {{-- @foreach($dtuser as $user) --}}
        <div class="col-6 mx-auto mt-5">
            <legend class="text-center">Profil User</legend>
            <div class="mb-3">
                <label for="disabledTextInput" class="form-label">Username</label>
                <input type="text" name="username" id="disabledTextInput" class="form-control" placeholder="Emrin"
                    value="{{ $dtuser->name??"" }}">
            </div>
            <div class="mb-3">
                <label for="disabledTextInput" class="form-label">Nomor Handphone</label>
                <input type="phone" name="hp" id="disabledTextInput" class="form-control" placeholder="08239252"
                    value="{{ $dtuser->hp??"" }}">
            </div>
            <div class="mb-3">
                <label for="disabledTextInput" class="form-label">Alamat</label>
                <input type="text" name="alamat" id="disabledTextInput" class="form-control" placeholder="Alamat"
                    value="{{ $dtuser->alamat??"" }}">
            </div>
            <div class="mb-3">
                <label for="disabledTextInput" class="form-label">Email</label>
                <input type="email" name="email" id="disabledTextInput" class="form-control" placeholder="sdsad@jsd.com"
                    value="{{ $dtuser->email??"" }}">
            </div>
            <div class="mb-3">
                <label for="disabledTextInput" class="form-label">Password</label>
                <input type="password" name="password" id="disabledTextInput" class="form-control"
                    placeholder="password">
            </div>
            <div class="d-grid gap-2 col-3 mx-auto">
                <button class="btn btn-primary" type="submit">Update Profil</button>
            </div><br>
            <div class="d-grid gap-2 col-3 mx-auto">
                <a href="{{ route('cetakmcu',$dtuser->id) }}" class="btn btn-primary">Unduh File</a>
            </div><br>
            <div class="d-grid gap-2 col-3 mx-auto">
                <a href="{{ url('/logout') }}" class="btn btn-primary">Logout</a>
            </div>

        </div>
    </form>
    {{-- @endforeach --}}


</body>

</html>
