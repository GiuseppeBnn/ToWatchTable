<h1>Compila i seguenti campi con valori nuovi</h1><br>
<form action="/directors/{{$director->id}}" method="post">
    @csrf
    <input type="hidden" name="_method" value="patch">
    <p>Nome</p>
    <input type="text" name='name' id="name">
    <p>Cognome</p>
    <input type="text" name='surname' id="surname">
    <p>Anno di nascita</p>
    <input type="text" name="year" id="year">
    <br>
    <input type="submit" value="Aggiungi">
</form>



<br>
<a href="/">Torna alla home</a><br>
    <a href="/directors">Torna alla lista</a>
