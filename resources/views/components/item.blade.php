@foreach($sisterCompanies as $company)
    <div class="item">
        <img src="{{asset('/storage/'.$company->image)}}">
    </div>
@endforeach



