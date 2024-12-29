<form class="form-contact" method="post" action="{{route('submit-email')}}">
    @if(session('success'))
        <div class="btn-primary">Email Sent Successfully</div>
    @endif
    @csrf
    <div class="desc-form">
        <div class="bold">Questions about real estate?</div>
        <div>Our experts have answers.</div>
    </div>
    <div class="input-field" style="grid-column: 2 span">
        <input  type="text" name="name" placeholder="Name" oninput="checkInput(this)" >
        <span>*</span>
    </div>
    <div class="input-field input-field-email">
        <input type="email" name="email" placeholder="Email address" oninput="checkInput(this)" >
        <span>*</span>
    </div>
    <div class="input-field">
        <textarea name="message" placeholder="Tell us how we can help you today"></textarea>
    </div>
    <div class="input-field cities">
        <div class="city_code">
            <img src="/images/arabic_flag.png" class="flag" id="selected-flag">
            <img src="/images/arrow.png" id="arrow">
        </div>
        <input class="phone_number" type="text" name="phone" placeholder="Phone number">
        <input type="hidden" name="country_code" id="country-code-input" value="00971">
        <div class="dropdown_phone">
            <!-- Phone codes will be populated here dynamically -->
        </div>
    </div>
    <div class="input-field countries" style="grid-column: 2 span" >
        <div class="city_name">
            <img src="/images/arabic_flag.png" class="flag" id="selected-flag-country">
            <img src="/images/arrow.png" id="arrow">
        </div>
        <input class="country_field" type="text" name="country" placeholder="Location">
        <input type="hidden" name="location" id="location-input" value="Emirates">
        <div class="dropdown_country">
            <!-- Countries will be populated here dynamically -->
        </div>
    </div>
    <div class="input-field submit">
        <input type="submit" value="SEND">
    </div>
</form>
