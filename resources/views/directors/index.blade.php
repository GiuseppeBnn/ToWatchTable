<h1>Lista registi</h1>

<ul>
    @foreach ($directors as $director)
        <li>{{$director->name}}  {{$director->surname}}</li>
        <a href="/directors/{{$director->id}}">Dettagli</a><br><br>

    @endforeach

</ul>

<a href="/directors/create">Aggiungi Regista</a>
<br><br>
<a href="/">Torna alla home</a>
