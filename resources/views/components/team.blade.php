<div class="col flex-col">

    <div class="img-container">
        <img src="{{asset('/storage/'.$team->image)}}">
        <div class="overlay">
            <a href="#">View Profile</a>
        </div>
    </div>
    <a class="name" href="#">{{$team->name}}</a>
   {{$team->section->name}}
</div>
