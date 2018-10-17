
@extends('adminlte::page')

@section('title', 'CAPAC')


@section('content_header')
    <h1>Informações Gerais do Evento </h1>
@stop

@section('content')

    <!-- /.box-header -->
    <div class="box-body">
      <form role="form">
        <!-- text input -->
        <div class="form-group text-center">
          <label>Nome do Evento * </label>
          <input type="text" class="form-control" placeholder="Enter ...">
        </div>


          <div class="form-group text-center">
            <label>Tipo de Evento *</label>
            <select class="form-control">
              <option>option 1</option>
              <option>option 2</option>
              <option>option 3</option>
              <option>option 4</option>
              <option>option 5</option>
            </select>
          </div>

        <div class="form-group text-center">
          <label>Nome do Grupo</label>
          <input type="text" class="form-control" placeholder="Enter ...">
        </div>

        <!-- textarea -->
        <div class="form-group text-center">
          <label>Ficha técnica completa* </label><br>
          <b>Esse campo deve conter a listagem de pessoas envolvidas no espetáculo, como elenco, <br>técnicos, e outros profissionais envolvidos na realização do mesmo.</b>
         <div class="text-left">            
            <h4>Elenco de exemplo:</h4>
            <p>Ana Cañas (voz e guitarra)</p>
            <p>Lúcio Maia (guitarra solo)</p>
            <p>Fabá Jimenez (guitarra base)</p>
            <p>Fabio Sá (baixo)</p>
            <p>Marco da Costa (bateria)</p>
            <p>Eloá Faria (figurinista)</p>
            <p>Leonardo Kuero (técnico de som)</p>
         </div>
          
          
          <textarea class="form-control" rows="6" placeholder="Enter ..."></textarea>
        </div>
        <div class="form-group text-center">
            <label>Integrantes do grupo:</label><br>
            <h5>Esse campo deve conter a listagem de pessoas envolvidas no espetáculo <span class="text-danger">incluindo o líder do grupo.</span></h5>
            <h5>Apenas o <span class="text-danger">nome civil, RG e CPF</span> de quem irá se apresentar, excluindo técnicos.</h5>
           <div class="text-left">            
              <h4>Elenco de exemplo:</h4>
              <p>Ana Cañas RG 00000000-0 CPF 000.000.000-00</p>
              <p>Lúcio Maia RG 00000000-0 CPF 000.000.000-00</p>
              <p>Fabá Jimenez RG 00000000-0 CPF 000.000.000-00</p>
              <p>Fabio Sá RG 00000000-0 CPF 000.000.000-00</p>
              <p>Marco da Costa RG 00000000-0 CPF 000.000.000-00</p>
           </div>
            
            
            <textarea class="form-control" rows="6" placeholder="Enter ..."></textarea>
          </div>

          <div class="form-group text-center">
            <label>Classificação indicativa * (Confira aqui como classificar)</label>
            <div class="form-group">
                <label>Select</label>
                <select class="form-control">
                  <option>option 1</option>
                  <option>option 2</option>
                  <option>option 3</option>
                  <option>option 4</option>
                  <option>option 5</option>
                </select>
              </div>
          </div>

          <div class="form-group text-center">
              <label>Sinopse *</label><br>
              <h5>Esse campo deve conter uma breve descrição do que será apresentado no espetáculo.</h5>
              <h5>Apenas o <span class="text-danger">nome civil, RG e CPF</span> de quem irá se apresentar, excluindo técnicos.</h5>
             <div class="text-left">            
                <h4>Texto de exemplo:</h4>
                <p>Ana Cañas faz o show de lançamento do seu quarto disco, “Tô na Vida” (Som Livre/Guela Records). 
                  Produzido por Lúcio Maia (Nação Zumbi) em parceria com Ana e mixado por Mario Caldato Jr, é o 
                  primeiro disco totalmente autoral da carreira da cantora e traz 
                  parcerias com Arnaldo Antunes e Dadi entre outros.
                </p>
             </div>
              
              
              <textarea class="form-control" rows="6" placeholder="Enter ..."></textarea>
            </div>

        <div class="form-group">
          <label>Textarea Disabled</label>
          <textarea class="form-control" rows="3" placeholder="Enter ..." disabled=""></textarea>
        </div>

        <!-- input states -->
        <div class="form-group has-success">
          <label class="control-label" for="inputSuccess"><i class="fa fa-check"></i> Input with success</label>
          <input type="text" class="form-control" id="inputSuccess" placeholder="Enter ...">
          <span class="help-block">Help block with success</span>
        </div>
        <div class="form-group has-warning">
          <label class="control-label" for="inputWarning"><i class="fa fa-bell-o"></i> Input with
            warning</label>
          <input type="text" class="form-control" id="inputWarning" placeholder="Enter ...">
          <span class="help-block">Help block with warning</span>
        </div>
        <div class="form-group has-error">
          <label class="control-label" for="inputError"><i class="fa fa-times-circle-o"></i> Input with
            error</label>
          <input type="text" class="form-control" id="inputError" placeholder="Enter ...">
          <span class="help-block">Help block with error</span>
        </div>

        <!-- checkbox -->
        <div class="form-group">
          <div class="checkbox">
            <label>
              <input type="checkbox">
              Checkbox 1
            </label>
          </div>

          <div class="checkbox">
            <label>
              <input type="checkbox">
              Checkbox 2
            </label>
          </div>

          <div class="checkbox">
            <label>
              <input type="checkbox" disabled="">
              Checkbox disabled
            </label>
          </div>
        </div>

        <!-- radio -->
        <div class="form-group">
          <div class="radio">
            <label>
              <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked="">
              Option one is this and that—be sure to include why it's great
            </label>
          </div>
          <div class="radio">
            <label>
              <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
              Option two can be something else and selecting it will deselect option one
            </label>
          </div>
          <div class="radio">
            <label>
              <input type="radio" name="optionsRadios" id="optionsRadios3" value="option3" disabled="">
              Option three is disabled
            </label>
          </div>
        </div>

        <!-- select -->
        <div class="form-group">
          <label>Select</label>
          <select class="form-control">
            <option>option 1</option>
            <option>option 2</option>
            <option>option 3</option>
            <option>option 4</option>
            <option>option 5</option>
          </select>
        </div>
        <div class="form-group">
          <label>Select Disabled</label>
          <select class="form-control" disabled="">
            <option>option 1</option>
            <option>option 2</option>
            <option>option 3</option>
            <option>option 4</option>
            <option>option 5</option>
          </select>
        </div>

        <!-- Select multiple-->
        <div class="form-group">
          <label>Select Multiple</label>
          <select multiple="" class="form-control">
            <option>option 1</option>
            <option>option 2</option>
            <option>option 3</option>
            <option>option 4</option>
            <option>option 5</option>
          </select>
        </div>
        <div class="form-group">
          <label>Select Multiple Disabled</label>
          <select multiple="" class="form-control" disabled="">
            <option>option 1</option>
            <option>option 2</option>
            <option>option 3</option>
            <option>option 4</option>
            <option>option 5</option>
          </select>
        </div>

      </form>
    </div>

@stop


