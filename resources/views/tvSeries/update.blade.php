<h1>Compila i seguenti campi con valori nuovi</h1><br>
<form action="/tvseries/{{$tvseries->id}}" method="post">
    @csrf
    <input type="hidden" name="_method" value="patch">
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
    <p>Regista:</p>

        <select name='director_id' id='director_id'>
            @foreach ($directors as $director)
                <option  value="{{$director->id}}">{{$director->name}} {{$director->surname}}</option>
            @endforeach


    <br><br>
    <input type="submit" value="Modifica"><br>
</form>



<br>
<a href="/">Torna alla home</a><br>
    <a href="/directors">Torna alla lista</a>
