@extends ('leauts.default')
@section('content')

<div class="fotos">
    @foreach($tovs as $one)
        @if($one->photo)
        <?$pic="<a href='#' data ='$one->id'> <img src='".asset('media/uploads/photo/s_'.$one->photo)."'/></a>";?>
        @else
        <?$pic="-";?>
        @endif
    <div class="tovs">
        <a href='#' data="{{$one->id}}" class="picsmall">{{$one->name}}</a>
        {{$pic}}

        {{Form::open(array('url'=>'basket/index/'.$one->id))}}

        <input type="number" min="0" name="colvo"/>
        <input type="submit">
        {{Form::close()}}
</div>
    @endforeach

    </div>
@stop