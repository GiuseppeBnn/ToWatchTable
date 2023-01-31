<h1>Lista Serie TV</h1>

<ul>
    @foreach ($tvseries as $series)
        <li style="font-size: 40px">{{$series->name}}</li>
        <a href="/films/{{$series->id}}">Dettagli</a><br><br>

    @endforeach

</ul>

<a href="/tvseries/create">Aggiungi Serie</a>
<br><br>
<a href="/">Torna alla home</a>
