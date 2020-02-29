@yield('form')



<div class="form-row">
    @csrf
    <div class="form-group col-md-2">
        <label for="inputEmail4">CPF</label>
        <input type="text" class="form-control" id="inputEmail4" placeholder="Somente números" name="cpf">
    </div>

</div>
<div class="form-row">
    <div class="form-group col-md-5">
        <label for="inputAddress">Nome Completo</label>
        <input type="text" class="form-control" id="inputAddress" placeholder="Ex: João da Silva" name="name">
    </div>

    <div class="form-group col-md-2">
        <label for="inputAddress2">Data de Nascimento</label>
        <input type="text" class="form-control" id="inputAddress2" placeholder="Ex: 01/01/2000" name="birthdate">
    </div>
</div>


<div class="form-row">
    <div class="form-group col-md-1">
        <label for="inputCity">DDD</label>
        <input type="text" class="form-control" id="inputCity" name="ddd1">
    </div>
    <div class="form-group col-md-2">
        <label for="inputCity">Telefone</label>
        <input type="text" class="form-control" id="inputCity" name="cellphone1">
    </div>

</div>

<div class="form-row">

    <div class="form-group col-md-2">
        <label for="inputState">Tipo de Convênio</label>
        <select id="inputState" class="form-control" name="health_insurance">

            <option value selected="1">Particular</option>
            <option value="2">Unimed</option>
            <option value="3">SUS</option>
        </select>
    </div>
</div>

<button type="submit" class="btn btn-primary">Salvar</button>


</form>

@stop


