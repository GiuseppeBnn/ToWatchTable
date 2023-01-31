<h1>Dettagli Serie TV</h1>
<title>{{$tvseries->name}}</title>


<ul>
        <p>Titolo:</p>
        <li>{{$tvseries->name}}</li><br>
        <p>Genere:</p>
        <li>{{$tvseries->genre}}</li><br>
        <p>Anno di uscita:</p>
        <li>{{$tvseries->year}}</li><br>
        <p>Regista:</p>
        <li>{{$tvseries->director}}</li>
        <p>Stagione:</p>
        <li>{{$tvseries->season}}</li>
        <p>Episodi:</p>
        <li>{{$tvseries->episodes}}</li>
        <p>Piattaforma di streaming:</p>
        <li>{{$tvseries->platform}}</li>
</ul>


        <form action="/tvseries/{{$tvseries->id}}" method="post">
            @csrf
            <input type="hidden" name="_method" value="delete">
            <input type="submit" value="Cancella dalla lista">
        </form><br>


        <a href="/tvseries/{{$tvseries->id}}/edit">Modifica dettagli</a><br>
        <br><br>
        <a href="/tvseries">Ritorna a lista serie tv</a><br>
        <br><br>
