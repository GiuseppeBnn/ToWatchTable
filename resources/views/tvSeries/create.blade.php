<h1>Compila i seguenti campi</h1><br>


<form action="/tvseries" method="post">
    @csrf
    <fieldset>
    <p>Nome</p>
    <input type="text" name='name' id="name">
    <p>Genere</p>
    <input type="text" name='genre' id="genre">
    <p>Anno di uscita</p>
    <input type="text" name="year" id="year"><br>
    <p>Stagione</p>
    <input type="text" name="season" id="season"><br>
    <p>Episodi</p>
    <input type="text" name="episodes" id="episodes"><br>
    <p>Piattaforma di streaming</p>
    <select name="platform" id="platform">
        <option value="Netflix">Netflix</option>
        <option value="PrimeVideo">PrimeVideo</option>
        <option value="Nowtv">Nowtv</option>
        <option value="Crunchyroll">Crunchyroll</option>
        <option value="VVVID">VVVID</option>
    </select><br>
    <p>Seleziona tra i registi disponibili:</p>

        <select name='director_id' id='director_id'>
            @foreach ($directors as $director)
                <option  value="{{$director->id}}">{{$director->name}} {{$director->surname}}</option>
            @endforeach


    <br><br>
    <input type="submit" value="Aggiungi"><br>
</form>
</fieldset>
<br>
<a href="/">Torna alla home</a><br>
    <a href="/tvseries">Torna alla lista serie tv</a>
