@extends('sistema/layout/index')

@section('content')

<!-- page content -->
<div class="right_col" role="main">
  <div class="">
    <div class="page-title">
      <div class="title_left">
        <h3>Ações</h3>
      </div>
    </div>

    <div class="clearfix"></div>

    <div class="row">
      <div class="col-md-12 col-sm-12 ">
        <div class="x_panel">
          <div class="x_title">
            <h2>Cadastrar Novo Evento</h2>
            
            <div class="clearfix"></div>
          </div>
          <div class="x_content">
            <br>

            <form method="POST" action="{{route('acoes.acoes.add')}}" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">
              @csrf
              <input type="hidden" name="status" value="Ativo">
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
              <div class="item form-group">
                <label class="col-form-label col-md-3 col-sm-3 label-align" for="descricao">Descrição
                </label>
                <div class="col-md-6 col-sm-6 ">
                  <textarea id="descricao" name="descricao" class="form-control "></textarea>
                </div>
              </div>
              <div class="item form-group">
                <label class="col-form-label col-md-3 col-sm-3 label-align" for="agendamentoData">Data da Ação: <span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 ">
                  <input id="agendamentoData" name="agendamentoData" class="date-picker form-control" placeholder="dd-mm-yyyy" type="text" required="required" onfocus="this.type='date'" onmouseover="this.type='date'" onclick="this.type='date'" onblur="this.type='text'" onmouseout="timeFunctionLong(this)">
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
                <label class="col-form-label col-md-3 col-sm-3 label-align" for="agendamentoHora">Hora da Ação: <span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 ">
                  <input id="agendamentoHora" name="agendamentoHora" class="date-picker form-control" placeholder="hh:mm" type="time" required="required">
                </div>
              </div>

              <hr>
              
              <div class="item form-group">
                <label for="local" class="col-form-label col-md-3 col-sm-3 label-align">Nome do Local que será realizado<span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 ">
                  <input id="local" class="form-control" type="text" name="local" required="required">
                </div>
              </div>
              <div class="item form-group">
                <label class="col-form-label col-md-3 col-sm-3 label-align" for="endereco">Endereço Referencia <span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 ">
                  <input type="text" id="endereco" name="endereco" required="required" class="form-control">
                </div>
              </div>
              <div class="item form-group">
                <label class="col-form-label col-md-3 col-sm-3 label-align" for="numero">Número<span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 ">
                  <input type="text" id="numero" name="numero" required="required" class="form-control">
                </div>
              </div>
              <div class="item form-group">
                <label for="bairro" class="col-form-label col-md-3 col-sm-3 label-align">Bairro<span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 ">
                  <input id="bairro" class="form-control" type="text" name="bairro" required="required">
                </div>
              </div>
              <div class="item form-group">
                <label for="cep" class="col-form-label col-md-3 col-sm-3 label-align">CEP<span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 ">
                  <input id="cep" class="form-control" type="text" name="cep" required="required" placeholder="Apenas numeros">
                </div>
              </div>
              
              <div class="ln_solid"></div>
              <div class="item form-group">
                <div class="col-md-6 col-sm-6 offset-md-3">
                  <a href="{{route('acoes.acoes')}} " class="btn btn-primary">Cancel</a>
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