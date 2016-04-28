<script src="media/js/jquery.min.js"></script>
{{$tovs->name;}}
@if($tovs->photo)

<h2><img src='media/uploads/photo/{{$tovs->photo}}' class='mypic' /></h2>

@endif
<script>$(function(){
      var width = $('.mypic').width();
        console.log(width);
        size = '-'+width/2+'px';
        console.log(size);
        $('.model-window').css({'width':width,'margin-left':size});
    });
</script>