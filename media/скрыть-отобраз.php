 @foreach($showhide as $showhide_world)
    @if($one->showhide == show)
    <?php $showhide = 'adminka/'.$one->id.'hide';?>
     <?php $showhide_world = 'Скрыть';?>
    <?php $showhide = 'adminka/'.$one->id.'show';?>
    <?php $showhide_world = 'Отобразить';?>
    @endif
    <a href="{{$showhide}}">{{$showhide_world}}</a>
    @endforeach