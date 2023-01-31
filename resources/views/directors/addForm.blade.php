<h1>Compila i seguenti campi</h1><br>
<form action="/directors" method="post">
    @csrf
    <p>Nome</p>
    <input type="text" name='name' id="name">
    <p>Cognome</p>
    <input type="text" name='surname' id="surname">
    <p>Anno di nascita</p>
    <input type="text" name="year" id="year">
    <br>
    <input type="submit" value="Aggiungi">
</form>

<a href="/">Torna alla home</a><br>
    <a href="/directors">Torna alla lista</a>
