@extends ('layouts.app')
@section('content')
    
    <div class="container">
        <div class="iconos-opcion">
            
            <div class="opc-indiv">
                <img src="./img/montaña.png" class="icons" style="height: 30px; width: 30px" alt="">
                <a class="espacios" style="text-decoration:none; color:black" href="./rural.html">Rural</a>
            </div>
            <div>
                <img src="./img/space.png" class="icons" style="height: 30px; width: 30px" alt="">
                <a class="espacios" style="text-decoration:none; color:black;" href="./atipico.html">Atípico</a>
            </div>
            <div>
                <img src="./img/city.png" class="icons" style="height: 30px; width: 30px" alt="">
                <a class="espacios" style="text-decoration:none; color:black;" href="./ciudad.html">Ciudad</a>
            </div>
            <div>
                <img src="./img/tiendacampaña.png" class="icons" style="height: 30px; width: 30px" alt="">
                <a class="espacios" style="text-decoration:none; color:black" href="./camping.html">Camping</a>
            </div>
            <div>
                <img src="./img/castillo.png" class="icons" style="height: 30px; width: 30px" alt="">
                <a class="espacios" style="text-decoration:none; color:black" href="./historicas.html">Históricas</a>
            </div>
            <div>
                <img src="./img/isla.png" class="icons" style="height: 30px; width: 30px" alt="">
                <a class="espacios" style="text-decoration:none; color:black" href="./islas.html">Islas</a>
            </div>
        </div>

        @foreach ($casas as $casa )
            <div class="card mt-5" style = "width: 18 rem;">

                <img src="{{ $casa->img }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">{{ $casa->title }}</h5>
                        <p class="card-text">{{$casa->description}}</p>
                            @isset($casa->age)
                                <p class="card-text">Edad mínima: {{ $casa->age}}</p>
                            @endisset
                            <div class="btn-bg bg-2">
                                <div class="btn btn-2">
                                  <button href="#">It Growth</button>
                                </div>
                              </div>
                    </div>


            </div>
        @endforeach


    </div>



@endsection