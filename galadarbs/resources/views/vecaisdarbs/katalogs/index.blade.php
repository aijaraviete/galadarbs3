@extends('layout/default')
@section('content')

    <main>
        <div class="container">
            <div class="row" style="margin-bottom: 20px;">  
                <div class="col-sm-3 text-warning text-center border-left border-warning">
                    <p>Kubas salsa (casino) savu popularitāti ieguva 1970ajos gados,atceļojot no Kubas uz Eiropu.Tā cēlusies no Son dejas,pievienojot tai deju figūras no Kubas mambo,Kubas ča-ča-ča,Rumba guaguancó un Ziemeļamerikas džaiva</p></div>
                <div class="col-sm-3">
                    <a href="https://en.wikipedia.org/wiki/Cuban_salsa" target="_blank"><img class="roundedimg movingimg" src="images/salsa.jpg" /></a>
                    <h3 class="text-warning" style="text-align: center;">Kubas salsa</h3>          
                </div> 
                <div class="col-sm-3"> 
                    <a href="https://en.wikipedia.org/wiki/Cuban_rumba" target="_blank"><img class="roundedimg" src="images/rumba.jpg" style="border: 3px dashed #ffcc00;" /></a> 
                    <h3 class="text-warning" style="text-align: center;">Kubas rumba</h3>
                </div>
                <div class="col-sm-3 text-danger text-center border-right border-danger">
                    <p>Kubas rumba cēlusies 19.gs.Ziemeļkubā,to pavada "clave"-ritmisks bungu ritms.Rumba tradicionāli tiek iedalīta yambú,columbia un guaguancó rumbās.Visās tiek pielietoti arī teatrāli elementi.Pēdējā ir vispopulārākā.</p>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-3 text-success text-center border-left border-success">
                    <p>Regetons cēlies Puertoriko 1990ajos gados.Tas ir pietuvināti līdzīgs hip hopam ar Latīņamerikas un Karību mūzikas elementiem.Mūzika visbiežāk ir spāņu valodā un mūsdienās ieguvusi lielu popularitāti arī kā popmūzika.</p>
                </div>
                <div class="col-sm-3">
                    <a href="https://en.wikipedia.org/wiki/Reggaeton" target="_blank"><img class="roundedimg" src="images/regetons.jpg" style="border: 3px dashed #ffcc00" /></a> 
                    <h3 class="text-warning" style="text-align: center;">Regetons</h3>
                </div>
                <div class="col-sm-3">
                    <a href="https://en.wikipedia.org/wiki/Son_cubano" target="_blank"><img class="roundedimg" src="images/son.jpg" style="border: 3px dashed #ffcc00;" /></a>
                    <h3 style="margin-bottom: 40px; text-align: center;" class="text-warning">Son</h3>
                </div>
                <div class="col-sm-3 text-info text-center border-right border-info">
                    <p>Kubas Son ir nāk no Kubas,radies 19.gs.Tas sevī ietver gan āfrikāņu,gan spāņu mūzikas elementus un sākas uz 3.Son bieži dzirdama ģitāra,kā arī son klave.Tiek uzskatīts,ka tieši Son ir Kubas salsas pamatā.</p>
                </div>
            </div>
            <div class="row" style="margin-top: 40px;">
                <div class="offset-sm-2 col-sm-8">
                    <h4 style="text-align: center;">Nodarbību cenas:</h4>  
                    <table class="table table-light border border-warning">
                        <thead>
                            <tr>
                                <th scope="col">Nodarbības ilgums</th>
                                <th scope="col">Nodarbības maksa (1 nod.)</th>
                                <th scope="col">Nodarbības maksa (1 mēn.)</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>90 min</td>
                                <td>8 EUR</td>
                                <td>25 EUR</td>
                            </tr>
                            <tr>
                                <td>60 min</td>
                                <td>6 EUR</td>
                                <td>20 EUR</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="row" style="margin-top: 30px;">
                <div class="offset-sm-2 col-sm-8">
                    <iframe width="100%" height="315" src="https://www.youtube.com/embed/dulihnRbsn8" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </main>

@endsection