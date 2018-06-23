@extends('layout/default')
@section('content')

    <main>
        <div class="container">
            <div class="row"> 
                <div class="offset-sm-3 col-sm-5"> 
                    <h2>Ielogošanās panelis:</h2>
                        <form method="post" action="{{ route("ielogosanas")}}">
                            <div class="form-group">
                                <input type="email" name="email" class="form-control" placeholder="Ievadi savu e-pasta adresi" required>
                            </div>
                            <div class="form-group">
                                <input type="password" name="password" class="form-control" placeholder="Ievadi savu paroli" required>
                            </div>
                            <div class="text-center">
                                <button type="submit" class="btn btn-warning text-light " id="loginbutton" style="margin-bottom: 10px;">Ielogoties</button> 
                            </div>
                        </form>
                </div>
            </div>
        </div>
    </main>

@endsection
        