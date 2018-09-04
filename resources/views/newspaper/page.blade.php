@extends('layouts.app')

@section('content')
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