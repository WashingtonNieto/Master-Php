@include('includes.header')

<h1><?=$titulo?></h1>
<h2><?=$listado[2]?></h2>

<h1>{{$titulo}}</h1>
<h2>{{$listado[2]}}</h2>

<p>{{date('Y')}}</p>

<!--comentario en html -->
<?php 
//comentario en php
?>


{{-- comentario en laravel-blade --}}

<!-- vamos a mostrar una variable si existe -->

{{-- en php lo hariamos asi: --}}
<?=isset($director) ? $director : 'No hay director'; ?> 
{{-- en blade no se porque no funciona --}}
{{-- $director or 'No hay director'--}}

<!-- CONDICIONALES -->
@if($titulo && count($listado) >= 2)
    <h1>El titulo existe y es este: {{$titulo}} y el listado es mayor a 2</h1>
@elseif($titulo)
    <h1>El titulo existe y el listado no es mayor a 5 {{$titulo}}</h1>
@else
    <h1>El titulo  NO existe {{$titulo}}</h1>
@endif    

<!-- BUCLES -->

@for($i = 0; $i <= 20; $i++)
    el numero es: {{$i}} <br/>
@endfor

<hr/>
<?php $contador = 1 ?>
@while ($contador <= 50)
    @if($contador % 2 == 0)
        NUMERO PAR: {{$contador}}<br/>
    @endif
    <?php $contador++; ?>
@endwhile

<hr/>
@foreach($listado as $pelicula)
    <p>{{$pelicula}}</p>
@endforeach

@include('includes.footer')