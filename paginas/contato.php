
<div class="container">
    <h1 class="text-center">Redes Sociais</h1>
    <div class="center">
<div class="btn-group" role="group" aria-label="Basic example">
    <a href="https://www.instagram.com/gui_lherme_freitas/#">
  <button type="button" class="btn btn-primary">Instagram</button>
</a>
<a href="https://www.facebook.com/?locale=pt_BR">
  <button type="button" class="btn btn-primary">Facebook</button>
</a>
<a href="https://github.com/guilhermefreitas450">
  <button type="button" class="btn btn-primary">Github</button>
</a>
</div>
</div>
    <form name="formContato" method="post">
        <label for="none"> Digite seu nome:</label>
        <input type="text" name="nome" id="nome" required placeholder="Digite seu nome completo"
        class="form-control form-control-lg">
        <label for="email"> Digite seu e-mail:</label>
        <input type="email" name="email" id="email" required placeholder="Digite um e-mail válido"
        class="form-control form-control-lg">
        <label for="mensagem"> Digite sua mensagem:</label>
        <input type="text" name="mensagem" id="msg"style="height:200px" required placeholder="Digite sua mensagem"
        class="form-control form-control-lg">
<div class="center">
    <div class="botao-msg">
        <button type="submit" class="btn btn-success btn-lg">
        Enviar Mensagem
</div>
        </div>
</button>
</form>
</div>
function validateForm() {
const name = document.getElementById('fname').value;
const email = document.getElementById('email').value;
const message = document.getElementById('subject').value;
if (name = "") {
alert("Por favor, preencha seu nome.");
return false;
}
const emailPattern = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,6}$/;
if (email === || emailPattern.test(email)) {
alert("Por favor, preencha um e-mail válido.");
return false;
if (message=
alert("Por favor, escreva sua mensagem.");
return false;
}
return true;
}
function funcao1() {
if (validateForm()) {
alert("Mensagem enviada com sucesso!");
location.reload(); // Recarrega a página
}
}