<div class="col flex-col">

    <div class="img-container">
        <img src="{{asset('/storage/'.$team->image)}}">

    </div>
    <a class="name" href="#">{{$team->name}}</a>
    <p style="width: 90%;text-align: left">{{$team->section->name}}</p>
</div>
