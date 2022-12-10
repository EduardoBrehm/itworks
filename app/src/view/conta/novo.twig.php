{% extends 'partials/template.twig.php' %}

{% block title%} Novo Registro {% endblock %}

{% block body%}

<form action= "{{BASE}}conta" method="post">

    <div class="mt-3">
        <label for="txtValor">Valor</label>
        <input
            type="text"
            id="txtValor"
            name="txtValor"
            class="form-control"
            placeholder="Valor"
            required
        />

    </div>

    <div class="mt-3">
        <label for="txtMovimentacao">Movimentação</label>
        <select id="">
            <option value="">Selecione</option>
            <option value="CREDITO">Crédito</option>
            <option value="DEBITO">Débito</option>
    </div>


    <div class="mt-3">
        <label for="txtDataRegistro">Data do Registro</label>
            <button type="submit" class="btn btn-success">Salvar</button>
    </div>
</form>

{% endblock %}