<h1>Dettagli Film</h1>



<ul>
        <p>Titolo:</p>
        <li>{{$film->name}}</li><br>
        <p>Genere:</p>
        <li>{{$film->genre}}</li><br>
        <p>Anno di uscita:</p>
        <li>{{$film->year}}</li><br>
        <p>Regista:</p>
        <li>{{$film->director}}</li>
</ul>


        <form action="/films/{{$film->id}}" method="post">
            @csrf
            <input type="hidden" name="_method" value="delete">
            <input type="submit" value="Cancella dalla lista">
        </form><br>


        <a href="/films/{{$film->id}}/edit">Modifica dettagli</a><br>
        <br><br>
        <a href="/films">Ritorna a lista film</a><br>
        <br><br>
