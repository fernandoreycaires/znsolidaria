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
            <form method="POST" action="{{route('acoes.comunidade.add')}}" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">
              @csrf
              <div class="item form-group">
                <label class="col-form-label col-md-3 col-sm-3 label-align" for="apelido">Apelido / Nome da Comunidade <span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 ">
                  <input type="text" id="apelido" name="apelido" required="required" class="form-control ">
                </div>
              </div>
              <div class="item form-group">
                <label class="col-form-label col-md-3 col-sm-3 label-align" for="endereco">Endereço Referencia </span>
                </label>
                <div class="col-md-6 col-sm-6 ">
                  <input type="text" id="endereco" name="endereco" class="form-control">
                </div>
              </div>
              <div class="item form-group">
                <label for="bairro" class="col-form-label col-md-3 col-sm-3 label-align">Bairro</label>
                <div class="col-md-6 col-sm-6 ">
                  <input id="bairro" class="form-control" type="text" name="bairro">
                </div>
              </div>
              <div class="item form-group">
                <label for="cidade" class="col-form-label col-md-3 col-sm-3 label-align">Cidade</label>
                <div class="col-md-6 col-sm-6 ">
                  <input id="cidade" class="form-control" type="text" name="cidade">
                </div>
              </div>
              <div class="item form-group">
                <label for="estado" class="col-form-label col-md-3 col-sm-3 label-align">Estado</label>
                <div class="col-md-6 col-sm-6 ">
                  <input id="estado" class="form-control" type="text" name="estado">
                </div>
              </div>

              <div class="ln_solid"></div>
              <div class="item form-group">
                <div class="col-md-6 col-sm-6 offset-md-3">
                  <a href="{{route('acoes.comunidade.index')}} " class="btn btn-primary">Cancel</a>
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