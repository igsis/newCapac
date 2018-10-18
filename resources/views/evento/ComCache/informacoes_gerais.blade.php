
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
            <label>Classificação indicativa * <a href="#"> (Confira aqui como classificar)</a></label>
            <div class="form-group">
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
        
        <div class="form-group text-center">
            <label>Release *</label><br>
            <h5>Esse campo deve abordar informações relacionadas ao artista, abordando breves marcos na carreira e ações realizadas anteriormente.</h5>
            
            <div class="text-left">            
                <h4>Texto de exemplo:</h4>
                <p>
                    A cantora e compositora paulistana lançou, em 2007, o seu primeiro disco, "Amor e Caos". 
                    Dois anos depois, lançou "Hein?", disco produzido por Liminha e que contou com "Esconderijo", canção composta por Ana, eleita entre 
                    as melhores do ano pela revista Rolling Stone e que alcançou repercussão nacional por integrar a trilha sonora da novela 
                    "Viver a Vida" de Manoel Carlos, na Rede Globo. Ainda em 2009, grava, a convite do cantor e compositor Nando Reis, a bela canção 
                    "Pra Você Guardei o Amor". Em 2012, Ana lança o terceiro disco de inéditas, "Volta", com versões para Led Zeppelin ("Rock'n'Roll") 
                    e Edith Piaf ("La Vie en Rose"), além das inéditas autorais "Urubu Rei" (que ganhou clipe dirigido por Vera Egito) e "Será Que Você
                    Me Ama?". Em 2013, veio o primeiro DVD, "Coração Inevitável", registrando o show que contou com a direção e iluminação 
                    de Ney Matogrosso.
                </p>
            </div>
            
            
            <textarea class="form-control" rows="6" placeholder="Enter ..."></textarea>
        </div>
        
        <div class="form-group text-center">
            <label>Links</label><br>
            <h5>Esse campo deve conter os links relacionados ao espetáculo, ao artista/grupo que auxiliem na divulgação do evento.</h5>
            
            <div class="text-left">            
                <h4>Texto de exemplo:</h4>
                <p>
                    https://www.facebook.com/anacanasoficial/
                    https://www.youtube.com/user/anacanasoficial
                </p>
            </div>
            
            
            <textarea class="form-control" rows="6" placeholder="Enter ..."></textarea>
        </div>
        <button type="submit" class="btn btn-lg btn-info btn-block">Gravar</button>
    </form>
</div>

@stop