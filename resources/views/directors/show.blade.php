<h1>Dettagli Regista</h1>




        <p>Nome:</p>
        <h3>{{$director->name}}</h3><br>
        <p>Cognome:</p>
        <h3>{{$director->surname}}</h3><br>
        <p>Anno di nascita:</p>
        <h3>{{$director->year}}</h3>


        <a href="/directors/{{$director->id}}/edit">Modifica dettagli</a><br>
        <br><br>

        <form action="/directors/{{$director->id}}" method="post">
            @csrf
            <input type="hidden" name="_method" value="delete">
            <input type="submit" value="Cancella dalla lista">
        </form><br>
<h2>Film:</h2><br>
<ul>



        @foreach($director->films as $film)
        <h3>{{$film->name}}  <br> Genere:     {{$film->genre}} <br> Anno di uscita:    {{$film->year}}</h3><br><br><br>
        @endforeach

</ul>


    <a href="/">Torna alla home</a><br>
    <a href="/directors">Torna alla lista</a>
