<div class="col flex-col">

    <div class="img-container">
        <img src="{{asset('/storage/'.$team->image)}}">
        <div class="overlay">
        </div>
    </div>
    <a class="name" href="#">{{$team->name}}</a>
    <p>{{$team->section->name}}</p>
</div>
