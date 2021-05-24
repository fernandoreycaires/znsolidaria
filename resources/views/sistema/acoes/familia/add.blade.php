@extends('sistema/layout/index')

@section('content')

<!-- page content -->
<div class="right_col" role="main">
  <div class="">
    <div class="page-title">
      <div class="title_left">
        <h3>Comunidades</h3>
      </div>
    </div>

    <div class="clearfix"></div>

    <div class="row">
      <div class="col-md-12 col-sm-12 ">
        <div class="x_panel">
          <div class="x_title">
            <h2>Adicionar Comunidade </h2>
            
            <div class="clearfix"></div>
          </div>
          <div class="x_content">
            <br />
            <form method="POST" action="{{route('acoes.familia.add')}}" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">
              @csrf
              
              <div class="item form-group">
                <label class="col-form-label col-md-3 col-sm-3 label-align ">Comunidade </label><span class="required">*</span>
                <div class="col-md-6 col-sm-6 ">
                  <select class="form-control" name="comunidade">
                    <option>Selecione ...</option>
                    @foreach ($comunidades as $comunidade)
                      <option value="{{$comunidade->id}}">{{$comunidade->comunidade}} </option>
                    @endforeach
                  </select>
                </div>
              </div>

              <hr>

              <div class="item form-group">
                <label class="col-form-label col-md-3 col-sm-3 label-align" for="nome">Nome: <span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 ">
                  <input type="text" id="nome" name="nome" required="required" class="form-control" placeholder="Nome completo">
                </div>
              </div>
              <div class="item form-group">
                <label class="col-form-label col-md-3 col-sm-3 label-align" for="nascimento">Data de Nascimento: <span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 ">
                  <input id="nascimento" name="nascimento" class="date-picker form-control" placeholder="dd-mm-yyyy" type="text" required="required" onfocus="this.type='date'" onmouseover="this.type='date'" onclick="this.type='date'" onblur="this.type='text'" onmouseout="timeFunctionLong(this)">
                  <script>
                    function timeFunctionLong(input) {
                      setTimeout(function() {
                        input.type = 'text';
                      }, 60000);
                    }
                  </script>
                </div>
              </div>
              <div class="item form-group">
                <label class="col-form-label col-md-3 col-sm-3 label-align" for="cpf">CPF: <span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 ">
                  <input type="text" id="cpf" name="cpf" required="required" class="form-control" placeholder="Somente números">
                </div>
              </div>
              <div class="item form-group">
                <label class="col-form-label col-md-3 col-sm-3 label-align" for="rg">RG: 
                </label>
                <div class="col-md-6 col-sm-6 ">
                  <input type="text" id="rg" name="rg" class="form-control" placeholder="Somente números">
                </div>
              </div>
              <div class="item form-group">
                <label class="col-form-label col-md-3 col-sm-3 label-align" for="estado_civil">Estado Civil: <span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 ">
                  <input type="text" id="estado_civil" name="estado_civil" class="form-control">
                </div>
              </div>
              
              <hr>

              <div class="item form-group">
                <label class="col-form-label col-md-3 col-sm-3 label-align" for="telefone">Telefone <span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 ">
                  <input type="number" id="telefone" name="telefone" required="required" class="form-control" placeholder="Somente numeros com o DDD" >
                </div>
              </div>
              <div class="item form-group">
                <label class="col-form-label col-md-3 col-sm-3 label-align" for="email">Email
                </label>
                <div class="col-md-6 col-sm-6 ">
                  <input type="text" id="email" name="email" class="form-control">
                </div>
              </div>

              <hr>
              
              <div class="item form-group">
                <label class="col-form-label col-md-3 col-sm-3 label-align" for="endereco">Endereço <span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 ">
                  <input type="text" id="endereco" name="endereco" required="required" class="form-control">
                </div>
              </div>
              <div class="item form-group">
                <label class="col-form-label col-md-3 col-sm-3 label-align" for="numero">Número <span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 ">
                  <input type="text" id="numero" name="numero" required="required" class="form-control">
                </div>
              </div>
              <div class="item form-group">
                <label for="bairro" class="col-form-label col-md-3 col-sm-3 label-align">Bairro <span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 ">
                  <input id="bairro" class="form-control" type="text" name="bairro" required="required">
                </div>
              </div>
              <div class="item form-group">
                <label for="cidade" class="col-form-label col-md-3 col-sm-3 label-align">Cidade <span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 ">
                  <input id="cidade" class="form-control" type="text" name="cidade" required="required">
                </div>
              </div>
              <div class="item form-group">
                <label for="estado" class="col-form-label col-md-3 col-sm-3 label-align">Estado <span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 ">
                  <input id="estado" class="form-control" type="text" name="estado" required="required">
                </div>
              </div>

              <hr>

              <div class="item form-group">
                <label for="observacao" class="col-form-label col-md-3 col-sm-3 label-align">Observação
                </label>
                <div class="col-md-6 col-sm-6">
                  <textarea id="observacao" class="form-control" name="observacao" placeholder="Breve observação ou nada a declarar"></textarea>
                </div>
              </div>

              <div class="ln_solid"></div>
              <div class="item form-group">
                <div class="col-md-6 col-sm-6 offset-md-3">
                  <a href="{{route('acoes.familia.index')}} " class="btn btn-primary">Cancel</a>
                  <button type="submit" class="btn btn-success">Salvar</button>
                </div>
              </div>

            </form>
          </div>
        </div>
      </div>
    </div>

    <div class="clearfix"></div>

    <div class="row">
      <div class="col-md-12">
      
          
      
      </div>
    </div>

  </div>
</div>
<!-- /page content -->
    


@endsection