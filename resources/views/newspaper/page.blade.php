@extends('layouts.app')
@section('content')
<div id="_token" class="hidden" data-token="{{ csrf_token() }}"></div>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="row justify-content-center">
                @foreach($page as $p)
                    <div class="col-md-6">
                        <a href="#" class="section-title first" data-type="text" data-column="chapeu" data-url="{{route('page/update', ['id'=>$p->id])}}" data-pk="{{$p->id}}" data-title="change" data-name="chapeu">{{ $p->chapeu }}</a>
                        <div class="teaser-title">
                            <h2 class="title2">
                                <a href="#" data-type="text" data-column="titulo" data-url="{{route('page/update', ['id'=>$p->id])}}" data-pk="{{$p->id}}" data-title="change" data-name="titulo">{{ $p->titulo }}</a>
                            </h2>
                        </div>
                        <div class="teaser">
                            <p data-type="text" data-column="chamada" data-url="{{route('page/update', ['id'=>$p->id])}}" data-pk="{{$p->id}}" data-title="change" data-name="chamada">{{ $p->chamada }}</p>
                        </div>
                        <hr class="style14">
                    </div> 
                @endforeach                
            </div>
            @guest
            @else         
            <button type="button" class="btn btn-primary float-right">Atualizar</button>  
            @endguest       
        </div> 
    </div>    
</div>
@endsection
@section('scripts') 
@guest
@else 
<script>
$(document).ready(function() {
    $("button").click(function(){
        sendData();
    });  
    function sendData() { 
        $('.col-md-6  > a, .col-md-6  h2 > a, .col-md-6  div > p').each(function (index, element) {
            $.post( $(element).data('url'), { name: $(element).data('name'), value: $(element).text(), pk: $(element).data('pk'), _token: $("#_token").data("token") } );
        });
    }
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
@endguest
@endsection