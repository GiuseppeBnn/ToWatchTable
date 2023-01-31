<h1>Compila i seguenti campi con valori nuovi</h1><br>
<form action="/films/{{$film->id}}" method="post">
    @csrf
    <input type="hidden" name="_method" value="patch">
    <p>Titolo</p>
    <input type="text" name='name' id="name">
    <p>Genere</p>
    <input type="text" name='genre' id="genre">
    <p>Anno di uscita</p>
    <input type="text" name="year" id="year">
    <br>
    <select name="director_id" id="director_id">
        @foreach ($directors as $director)
        <option value="{{$director->id}}">{{$director->name}}  {{$director->surname}}</option>

        @endforeach
    </select>
    <input type="submit" value="Aggiungi">
</form>



<br>
<a href="/">Torna alla home</a><br>
    <a href="/directors">Torna alla lista</a>
