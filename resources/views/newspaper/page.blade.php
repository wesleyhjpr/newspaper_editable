@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <a href="#" class="section-title first">Internacional</a>
                    <div class="teaser-title">
                        <h2 class="title2">
                            <a  href="#">EUA e Canadá não chegam em um acordo sobre o Nafta nesta sexta</a>
                        </h2>
                    </div>
                    <div class="teaser">
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's</p>
                    </div>
                    <hr class="style14">
                </div> 
                <div class="col-md-6">
                    <a href="#" class="section-title first">América Latina</a>
                    <div class="teaser-title">
                        <h2 class="title2">
                            <a href="#">Contra crise, Argentina corta ministérios e anuncia imposto</a>
                        </h2>
                    </div>
                    <div class="teaser">
                        <p>As incertezas eleitoras deixam os ativos daqui mais vulneráveis Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's</p>
                    </div> 
                    <hr class="style14">                   
                </div>
                <div class="col-md-6">
                    <a href="#" class="section-title first">Empresas</a>
                    <div class="teaser-title">
                        <h2 class="title2">
                            <a href="#">Expansão do mercado de capitais no Brasil pode acelerar emprego e renda</a>
                        </h2>
                    </div>
                    <div class="teaser">
                        <p>Avanço de financiamento privado criaria 1,7 milhão de vagas extras em cinco anos</p>
                    </div>
                </div>
                <div class="col-md-6">
                    <a href="#" class="section-title first">Finanças</a>
                    <div class="teaser-title">
                        <h2 class="title2">
                            <a href="#">Mercado de precatórios e litígios atrai interesse de inv</a>
                        </h2>
                    </div>
                    <div class="teaser">
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's</p>
                    </div>
                </div>
            </div>          
        </div>    
    </div>    
</div>
@endsection
@section('scripts')
<script>
$(document).ready(function() {   
    $('.col-md-6').find('a, p').each(function() {
        $(this).click(function() {
            $('.col-md-6 a').not($(this)).prop('contenteditable', false);
            $(this).prop('contenteditable', true);
        });
        $(this).blur(function() {
            $(this).prop('contenteditable', false);
        });
    });
});
</script>
@endsection