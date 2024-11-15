{% extends 'partials/template.twig.php' %}   

{% block title %} Job Application | Enviar Arquivo {% endblock %}
   
{% block body %}
<form action="/arquivo-salvar" method="post" enctype="multipart/form-data">
 
<input type="hidden" name="id" value="{{id}}" />

<div class="mb-3">
    <label for="arquivo" class="form-label">Curriculo em Arquivo</label>
    <input type="file" class="form-control" id="arquivo" name="curriculo" aria-describedby="arquivoHelp" />
    <p id="arquivoHelp" class="form-text">Envie seu curriculo.</p>
  </div>

  <button type="submit" class="btn btn-primary">Enviar Curriculo</button>
</form>
{% endblock %}