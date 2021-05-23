<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link href="/css/style.css" type="text/css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="//cdn.materialdesignicons.com/5.4.55/css/materialdesignicons.min.css">
    <!-- Google Font -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Itim&family=Nunito:wght@600&display=swap" rel="stylesheet">
    <title>GBI Emunah Solo Baru</title>
</head>

<body class="backgroundku">
    <div style="height: 75px;"></div>
    <nav class="navbar navbar-expand-lg navbarku fixed-top transparent navbar-inverse">
        <div class="container-fluid">
            <a href="/"><img src="{{asset('/img/logo_ges.png')}}" style="height: 50px;" alt=""></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                </ul>
                <div class="d-flex">
                    @if(auth()->check())
                    @if(auth()->user()->role == 'admin')
                    <a href="/admin" class="bt-primary-navbar" style="margin-right: 20px;" type="submit">Dashboard</a>
                    @else
                    <a href="/member" class="bt-primary-navbar" style="margin-right: 20px;" type="submit">Dashboard</a>
                    @endif
                    <a href="/logout" class="bt-primary-navbar" style="margin-right: 20px;" type="submit">Logout</a>
                    @else
                    <a href="/login" class="bt-primary-navbar" style="margin-right: 20px;" type="submit">Login</a>
                    <a href="/pendaftaran" class="bt-primary-navbar" type="submit">Daftar</a>
                    @endif

                </div>
            </div>
        </div>
    </nav>
    <div class="mt-4">
        @yield('content')
    </div>

    <div style="height: 100px; background-color: var(--primary_color);">
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
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <!-- 
    <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script> -->
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script>
        $(function() {
            $(document).scroll(function() {
                var $nav = $(".navbar");
                $nav.toggleClass("scrolled", $(this).scrollTop() > $nav.height());

            });
        });
    </script>
    @yield('js')
</body>


</html>