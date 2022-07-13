<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Validate</title>
</head>

<body>
    <script></script>
    <script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/css/toastr.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/js/toastr.js"></script>
    @if(session('toast_success')!=null )
    <script type="text/javascript">
        toastr.success("{{ session('toast_success') }}" )
    </script>
    <script type="text/javascript">
        setTimeout(function() {
    window.location.replace("{{ url('/home') }}");
    }, 3000);
    </script>
    @endif
</body>

</html>
