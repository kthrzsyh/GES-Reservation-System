<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link href="/css/style.css" type="text/css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    
    <title>GBI Emunah Solo Baru</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="/">GBI Emunah Solo Baru</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">

                </ul>
                <div class="d-flex">
                    @if(auth()->check())
                    @if(auth()->user()->role == 'admin')
                    <a href="/admin" class="btn btn-outline-danger" style="margin-right: 20px;" type="submit">Dashboard</a>
                    @else
                    <a href="/member" class="btn btn-outline-danger" style="margin-right: 20px;" type="submit">Dashboard</a>
                    @endif
                    <a href="/logout" class="btn btn-outline-success" style="margin-right: 20px;" type="submit">Logout</a>
                    @else
                    <a href="/login" class="btn btn-outline-success" style="margin-right: 20px;" type="submit">Login</a>
                    <a href="/pendaftaran" class="btn btn-outline-success" type="submit">Daftar</a>
                    @endif

                </div>
            </div>
        </div>
    </nav>
    <div class="mb-4 mt-4">
        @yield('content')
    </div>

    <div style="height: 200px; background-color: dimgrey;">
        <div class="d-flex justify-content-center">
            <div class="col pt-4">
                <div class="text-center">
                    <h6 class="footer">© 2020 GBI Emunah Solo Baru. All rights reserved.</h6>
                </div>
                <div class="text-center">
                    <h6 class="footer">Created by : Yeremia Tacha</h6>
                </div>
            </div>



        </div>

    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    @yield('js')
</body>


</html>