<h1>Lista film</h1>

<ul>
    @foreach ($films as $film)
        <li style="font-size: 40px">{{$film->name}}</li>
        <a href="/films/{{$film->id}}">Dettagli</a><br><br>

    @endforeach

</ul>

<a href="/films/create">Aggiungi Film</a>
<br><br>
<a href="/">Torna alla home</a>
