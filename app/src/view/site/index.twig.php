{% extends 'partials/template.twig.php' %}   

{% block title %} Job Application {% endblock %}

{% block body %}



<div class="px-4 py-5 my-5 text-center">
    <div class="col-lg-6 mx-auto">
      <p class="lead mb-4">Clique no botão inicia para começar a cadastrar o seu curriculo.</p>
      <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
        <a href= '\formulario' class="btn btn-primary btn-lg px-4 gap-3">Iniciar Cadastro</a>
        <a href='#' class="btn btn-outline-secondary btn-lg px-4">Saiba Mais</a>
      </div>
    </div>
</div>

{% endblock %}