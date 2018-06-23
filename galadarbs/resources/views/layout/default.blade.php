<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Log In</title>
        <link href="https://fonts.googleapis.com/css?family=Comfortaa:400,700&amp;subset=latin-ext" rel="stylesheet">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="css/style.css" />
        <link rel="shortcut icon" type="image/png" href="images/agua_logo.png">
    </head>
    
    <body>
        <header>
        <p style="font-size: 20px; margin: 15px 32px;"><?php
        date_default_timezone_set("Europe/Riga");
            echo "Šodien ir:" . "  " . date("Y/m/d") . "    ";
            echo "plkst. " . date("h:i a");
        ?></p>
            <div class="container">
                <div class="row">
                    <div class="col-sm-1">
                        <a href="{{ route('parmums') }}"> <!--important-->
                            <img src="images/agua_logo.png" style="margin-left: 20px;"></a>
                    </div>
                    <div class="col-sm-10"> 
                        <nav>
                            <ul>
                                <?php
                                    $navigation=[
                                        'parmums'=> route('parmums'), 
                                        'ielogosanas'=> route('ielogosanas'), 
                                        'katalogs'=> route('katalogs'), 
                                        'kontakti'=> route('kontakti'), 
                                        'nodarbibas'=> route('nodarbibas')
                                    ];
                                    ?>
                                    @foreach($navigation as $name => $url)
                                        <li class="nav-item">
                                            <a class="nav-link {{ (url()->current() == $url) ? 'active'  : '' }}" 
                                                href="{{$url}} ">
                                                @lang("auth.". $name)</a> <!--no resources/lang/en-->
                                        </li>
                                    @endforeach
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
            </header>

    @yield('content')
<br>
<br>
<br>
<br>
        <footer>
            <p>Visas tiesības aizsargātas &#169; Agua</p>     
        </footer>
            
        <script
        src="https://code.jquery.com/jquery-3.3.1.min.js"
        integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
        crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

       

    </body>
</html>