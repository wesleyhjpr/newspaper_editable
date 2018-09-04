@extends('app')
@section('content')
<div id="_token" class="hidden" data-token="{{ csrf_token() }}"></div>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="row justify-content-center">
                @foreach($page as $p)
                    <div class="col-md-6">
                        <a href="#" class="section-title first testEdit" data-type="text" data-column="chapeu" data-url="{{route('page/update', ['id'=>$p->id])}}" data-pk="{{$p->id}}" data-title="change" data-name="chapeu">{{ $p->chapeu }}</a>
                        <div class="teaser-title">
                            <h2 class="title2">
                                <a  class="testEdit" href="#" data-type="text" data-column="titulo" data-url="{{route('page/update', ['id'=>$p->id])}}" data-pk="{{$p->id}}" data-title="change" data-name="titulo">{{ $p->titulo }}</a>
                            </h2>
                        </div>
                        <div class="teaser">
                            <p class="testEdit" data-type="text" data-column="chamada" data-url="{{route('page/update', ['id'=>$p->id])}}" data-pk="{{$p->id}}" data-title="change" data-name="chamada">{{ $p->chamada }}</p>
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
@guest
@else 
<script>
$.fn.editable.defaults.mode = 'inline';
$(document).ready(function() {
    $('.testEdit').editable({
        params: function(params) {
            // add additional params from data-attributes of trigger element
            params._token = $("#_token").data("token");
            params.name = $(this).editable().data('name');
            return params;
        },
        error: function(response, newValue) {
            if(response.status === 500) {
                return 'Server error. Check entered data.';
            } else {
                return response.responseText;
                // return "Error.";
            }
        }
    });
});
</script>
@endguest
@endsection