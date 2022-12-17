{% extends 'partials/template.twig.php' %}   

{% block title %} Job Application | Cadastro de Curriculo {% endblock %}
   
{% block body %}
<form action="/formulario-salvar" method="post">
  <div class="mb-3">
    <label for="firstname" class="form-label">Nome</label>
    <input type="text" class="form-control" id="firstname" name="nome" aria-describedby="emailHelp">
    <p id="firstnameHelp" class="form-text">Informe apenas o seu nome.</p>
  </div>

  <button type="submit" class="btn btn-primary">Enviar Formulario</button>
</form>
{% endblock %}