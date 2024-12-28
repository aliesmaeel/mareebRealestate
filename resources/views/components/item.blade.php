@foreach($sisterCompanies as $company)
    <div class="item" style="
    background-image: url({{asset('/storage/'.$company->image)}})">
    </div>
@endforeach



