{% extends 'partials/template.twig.php' %}

{% block title %} {{titulo}} {% endblock %}

{% block body %}


<div class="max-widht center-screen bg-white padding mt-5">

    <h1>{{titulo}}</h1>

    <hr/>

    <p>{{descricao}}</p>

    {% if link != null %}
    <a href="{{link}}" class="btn btn-info">Voltar</a>
    {% endif %}

</div>


{% endblock %}