<form class="form-contact">
    <div class="desc-form">
        <div class="bold">Questions about real estate?</div>
        <div>Our experts have answers.</div>
    </div>
    <div class="input-field">
        <input type="text" placeholder="Name" oninput="checkInput(this)" >
        <span>*</span>
    </div>
    <div class="input-field input-field-email">
        <input type="email" placeholder="Email address" oninput="checkInput(this)" >
        <span>*</span>
    </div>
    <div class="input-field">
        <textarea placeholder="Tell us how we can help you today"></textarea>
    </div>
    <div class="input-field cities">
        <div class="city_code">
            <img src="/images/arabic_flag.png" class="flag" id="selected-flag">
            <img src="/images/arrow.png" id="arrow">
        </div>
        <input class="phone_number" type="text" name="phone_number" placeholder="Phone number">
        <input type="hidden" name="country_code" id="country-code-input" value="00971">
        <div class="dropdown_phone">
            <!-- Phone codes will be populated here dynamically -->
        </div>
    </div>
    <div class="input-field countries">
        <div class="city_name">
            <img src="/images/arabic_flag.png" class="flag" id="selected-flag-country"> 
            <img src="/images/arrow.png" id="arrow">
        </div>
        <input class="country_field" type="text" name="country_field" placeholder="Location">
        <input type="hidden" name="country" id="location-input" value="Emirates"> 
        <div class="dropdown_country">
            <!-- Countries will be populated here dynamically -->
        </div>
    </div>
    <div class="input-field submit">
        <input type="submit" value="SEND">
    </div>
</form>