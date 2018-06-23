@extends('layout/default')
@section('content')

    <main>
        <div class="container">
            <div class="row">
                <div class="offset-sm-3 col-sm-7">
                    <h2>Sazinies ar mums!</h2>
                </div>
            </div>
            <div class="row">
                <div class="offset-sm-3 col-sm-6">
                    <form>
                        <div class="form-group">
                            <input type="text" class="form-control" name="name" placeholder="Ieraksti savu vārdu" minlength="3" required>
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control" name="email" placeholder="Ieraksti savu e-pasta adresi" minlength="8" required>
                        </div>                       
                        <textarea class="form-control" name="message" rows="3" placeholder="Ieraksti savu ziņu" style="margin-bottom: 10px;" required></textarea>                      
                        <div class="text-center">
                            <button type="button" class="btn btn-warning text-light" name="submit">Nosūti ziņu</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="row">
                <div class="offset-sm-3 col-sm-7">
                    <p>Vai arī droši zvani mums uz tālruņa nr.: xxxxxxxx</p>
                </div>
            </div>
        </div>
    </main>

@endsection