 {% extends 'partials/template.twig.php' %}   
    
    {% block body %}
    <table class="table">
            {% for item in ListaExtrato %}
            <tr>
                <td>{{ item.id}}</td>
                <td>{{ item.valor}}</td>
                <td>{{ item.movimentacao}}</td>
                <td>{{ item.dataRegistro}}</td>
            </tr>
        {% endfor %}
    </table>
    {% endblock %}