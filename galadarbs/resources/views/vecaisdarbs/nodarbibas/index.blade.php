@extends('layout/default')
@section('content')

    <main>
        <div class="container">
            <div class="row" style="text-align: center;">
                <div class="col-sm-12">
                    <h4>Nodarbības notiek:</h4>  
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2176.3392407485026!2d24.1283324159995!3d56.942988907037!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x46eece296d173933%3A0x6c912e148f2a4c4f!2zTMSBxI1wbMSTxaFhIGllbGEgMTA2LzEwOCwgTGF0Z2FsZXMgcHJpZWvFoXBpbHPEk3RhLCBSxKtnYSwgTFYtMTAwMw!5e0!3m2!1slv!2slv!4v1529403778691" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                </div>
            </div>  
            </div>
            
            <div class="row">
                <div class="offset-sm-1 col-sm-10"><hr>
                <h4 style="text-align: center;">Nodarbību saraksts</h4>
                <table class="table table-light">
                        <thead>
                            <tr class="bg-light" style="text-transform: uppercase; font-weight: 40;">
                                <th scope="col">Diena</th>
                                <th scope="col">Laiks</th>
                                <th scope="col">Nodarbība</th>
                                <th scope="col">Pasniedzējs</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="bg-warning">
                                <td>Pirmdiena</td>
                                <td>18:30-20:00</td>
                                <td>Rueda de Casino (1.līmenis)</td>
                                <td>Krišjānis, Aija</td>
                            </tr>
                            <tr class="bg-warning">
                                <td>Pirmdiena</td>
                                <td>20:30-22:00</td>
                                <td>Rueda de Casino (2.līmenis)</td>
                                <td>Krišjānis, Kate</td>
                            </tr>
                            <tr class="bg-success">
                                <td>Otrdiena</td>
                                <td>18:30-20:00</td>
                                <td>Kubas salsa</td>
                                <td>Jurģis, Kate</td>
                            </tr>
                            <tr class="bg-success">
                                <td>Otrdiena</td>
                                <td>20:30-22:00</td>
                                <td>Regetons</td>
                                <td>Baiba, Kate</td>
                            </tr>
                            <tr class="bg-info">
                                <td>Trešdiena</td>
                                <td>18:30-20:00</td>
                                <td>Rueda de Casino (2.līmenis)</td>
                                <td>Jānis, Kate</td>
                            </tr>
                            <tr class="bg-info">
                                <td>Trešdiena</td>
                                <td>20:30-22:00</td>
                                <td>Kubas salsa un Rueda de Casino</td>
                                <td>Jānis, Baiba</td>
                            </tr>
                            <tr class="bg-primary">
                                <td>Ceturtdiena</td>
                                <td>18:30-20:00</td>
                                <td>Kubas salsa</td>
                                <td>Krišjānis, Marija</td>
                            </tr>
                            <tr class="bg-primary">
                                <td>Ceturtdiena</td>
                                <td>20:30-22:00</td>
                                <td>Timba</td>
                                <td>Jurģis, Marija</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>  
            <div class="row">  
                <div class="offset-sm-3 col-sm-6"><hr>
                    <h4 style="text-align: center;">Salsas pasākumi Rīgā:</h4>    
                        <iframe id="1258290293" src="http://www.google.com/calendar/embed?src=bailarico.com_m4rvc043r0mpomrev0kelsjc04@group.calendar.google.com&amp;color=%23668CD9&amp;mode=AGENDA&amp;ctz=Europe/Riga&amp;showTitle=1&amp;showNav=1&amp;showDate=1&amp;showTabs=1&amp;showCalendars=0&amp;hl=en_GB" title="Party" width="100%" height="600" frameborder="0" scrolling="no"></iframe></div>
            </div>     
        </div>              
    </main>

@endsection