<h1>Compila i seguenti campi</h1><br>

<head>
    <link rel="shortcut icon" type="image/png" href="{{ asset('img/favicon-32x32.png') }}">
<form action="/films" method="post">
    @csrf
    <fieldset>
    <p>Nome</p>
    <input type="text" name='name' id="name">
    <p>Genere</p>
    <input type="text" name='genre' id="genre">
    <p>Anno di uscita</p>
    <input type="text" name="year" id="year"><br>
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
    <a href="/films">Torna alla lista film</a>
