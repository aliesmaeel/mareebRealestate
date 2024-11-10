<form>
    {{-- search --}}
    <div class="input-search" style="display: flex; align-items: center; justify-content: center; position: relative; width: 100%;">
        <svg class="svg-inline--fa fa-magnifying-glass" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="magnifying-glass" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="" style="position: absolute; left: 10px; width: 16px; height: 16px;">
            <path fill="#212529" d="M416 208c0 45.9-14.9 88.3-40 122.7L502.6 457.4c12.5 12.5 12.5 32.8 0 45.3s-32.8 12.5-45.3 0L330.7 376c-34.4 25.2-76.8 40-122.7 40C93.1 416 0 322.9 0 208S93.1 0 208 0S416 93.1 416 208zM208 352a144 144 0 1 0 0-288 144 144 0 1 0 0 288z"></path>
        </svg>

        <select id="search-select" multiple="multiple"name="states[]" style="width: 100%; padding-left: 30px;">
            <option value="option1">option 1</option>
            <option value="option1">option 2</option>
            <option value="option1">option 3</option>
            <option value="option1">option 4</option>
            <option value="option1">option 4</option>
            <option value="option1">option 5</option>
            <option value="option1">option 6</option>
            <option value="option1">option 7</option>
            <option value="option1">option 8</option>
            <option value="option1">option 9</option>
        </select>
    </div>

    {{-- rent --}}
    <div class="dropdown">
        <div class="rent-option options-selected">
            <div>Rent</div>
            <img src="/images/arrow.png">
        </div>
        <div class="abs abs-rent">
            <div class="flex col">
                <div class="title">Interested to</div>
                <div class="group-options interest-group">
                    <div class="option">
                        <div class="custom-radio" data-value="buy">Buy</div>
                        <input type="radio" value="buy" name="interestd_status" style="display: none;">
                    </div>
                    <div class="active option">
                        <div class="custom-radio" data-value="rent">Rent</div>
                        <input type="radio" value="rent" name="interestd_status" style="display: none;">
                    </div>
                    <input type="hidden" id="interestd_status">
                </div>

                <div class="reset_done">
                    <div class="reset">Reset</div>
                    <div class="done">Done</div>
                </div>
            </div>
        </div>

    </div>
    {{-- type --}}
    <div class="dropdown">
        <div class="type-option options-selected">
            <div>Type</div>
            <img src="/images/arrow.png">

        </div>
        <div class="abs abs-type">
            <div class="flex col">
                <div class="title">Property type</div>
                <div class="group-options property-type">
                    <div class="option active">
                        <div class="custom-radio" data-value="Flat">Labor Accommodation</div>
                        <input type="radio" value="Flat" name="property_type" style="display: none;">
                    </div>
                    <div class=" option">
                        <div class="custom-radio" data-value="Bulk Units">Residential Apartments</div>
                        <input type="radio" value="Bulk Units" name="property_type" style="display: none;">
                    </div>
                    <div class=" option">
                        <div class="custom-radio" data-value="Bulk Units">Commercial Office Spaces</div>
                        <input type="radio" value="Bulk Units" name="property_type" style="display: none;">
                    </div>
                    <div class=" option">
                        <div class="custom-radio" data-value="Bulk Units">Showrooms</div>
                        <input type="radio" value="Bulk Units" name="property_type" style="display: none;">
                    </div>
                    <div class=" option">
                        <div class="custom-radio" data-value="Bulk Units">Flat</div>
                        <input type="radio" value="Bulk Units" name="property_type" style="display: none;">
                    </div>
                    <div class=" option">
                        <div class="custom-radio" data-value="Bulk Units">Bungalow</div>
                        <input type="radio" value="Bulk Units" name="property_type" style="display: none;">
                    </div>
                    <div class=" option">
                        <div class="custom-radio" data-value="Bulk Units">Compound</div>
                        <input type="radio" value="Bulk Units" name="property_type" style="display: none;">
                    </div>
                    <div class=" option">
                        <div class="custom-radio" data-value="Bulk Units">Duplex</div>
                        <input type="radio" value="Bulk Units" name="property_type" style="display: none;">
                    </div>
                    <input type="hidden" id="property_type">
                </div>
                <div class="reset_done">
                    <div class="reset">Reset</div>
                    <div class="done">Done</div>
                </div>
            </div>
        </div>

    </div>
     {{-- bedroom --}}
     <div class="dropdown">
        <div class="bedroom-option options-selected">
            <div>Bedrooms</div>
            <img src="/images/arrow.png">

        </div>
        <div class="abs abs-bedroom">
            <div class="flex col">
                <div class="title">Bedrooms</div>
                <div class="group-options bedroom-group">
                    <div class="option active">
                        <div class="custom-radio" data-value="any">Any</div>
                        <input type="radio" value="any" name="bedrooms" style="display: none;">
                    </div>
                    <div class=" option">
                        <div class="custom-radio" data-value="Studio">Studio</div>
                        <input type="radio" value="Studio" name="bedrooms" style="display: none;">
                    </div>
                    <div class=" option">
                        <div class="custom-radio" data-value="1 Beds">1 Beds</div>
                        <input type="radio" value="1 Beds" name="bedrooms" style="display: none;">
                    </div>
                    <div class=" option">
                        <div class="custom-radio" data-value="2 Beds">2 Beds</div>
                        <input type="radio" value="2 Beds" name="bedrooms" style="display: none;">
                    </div>
                    <div class=" option">
                        <div class="custom-radio" data-value="2 Beds">2 Beds</div>
                        <input type="radio" value="2 Beds" name="bedrooms" style="display: none;">
                    </div>
                    <div class=" option">
                        <div class="custom-radio" data-value="2 Beds">2 Beds</div>
                        <input type="radio" value="2 Beds" name="bedrooms" style="display: none;">
                    </div>
                    <div class=" option">
                        <div class="custom-radio" data-value="2 Beds">2 Beds</div>
                        <input type="radio" value="2 Beds" name="bedrooms" style="display: none;">
                    </div>
                    <input type="hidden" id="bedrooms">
                </div>
                <div class="title">Bathrooms</div>
                <div class="group-options bathroom-group">
                    <div class="option active">
                        <div class="custom-radio" data-value="any">Any</div>
                        <input type="radio" value="Any" name="bathroom" style="display: none;">
                    </div>
                    <div class=" option">
                        <div class="custom-radio" data-value="Studio">Studio</div>
                        <input type="radio" value="Studio" name="bathroom" style="display: none;">
                    </div>
                    <div class=" option">
                        <div class="custom-radio" data-value="1 Beds">1 Beds</div>
                        <input type="radio" value="1 Beds" name="bathroom" style="display: none;">
                    </div>
                    <div class=" option">
                        <div class="custom-radio" data-value="2 Beds">2 Beds</div>
                        <input type="radio" value="2 Beds" name="bathroom" style="display: none;">
                    </div>
                    <div class=" option">
                        <div class="custom-radio" data-value="2 Beds">2 Beds</div>
                        <input type="radio" value="2 Beds" name="bathroom" style="display: none;">
                    </div>
                    <div class=" option">
                        <div class="custom-radio" data-value="2 Beds">2 Beds</div>
                        <input type="radio" value="2 Beds" name="bathroom" style="display: none;">
                    </div>
                    <div class=" option">
                        <div class="custom-radio" data-value="2 Beds">2 Beds</div>
                        <input type="radio" value="2 Beds" name="bathroom" style="display: none;">
                    </div>
                    <input type="hidden" id="bathroom">
                </div>
                <div class="reset_done">
                    <div class="reset">Reset</div>
                    <div class="done">Done</div>
                </div>
            </div>
        </div>

    </div>
    {{-- price --}}
    <div class="dropdown">
        <div class="bedroom-option options-selected">
            <div>Price</div>
            <img src="/images/arrow.png">
        </div>
        <div class="abs abs-price">
            <div class="flex col">
                <div class="title">Price (AED)</div>
                <div class="group-options">
                    <div class="option">
                        <div>Min</div>
                        <input type="text" placeholder="min-price">
                    </div>
                    <div class="option">
                        <div>Max</div>
                        <input type="text" placeholder="min-price">
                    </div>

                </div>

                <div class="reset_done">
                    <div class="reset">Reset</div>
                    <div class="done">Done</div>
                </div>
            </div>
        </div>

    </div>

    <input type="submit" value="Submit" class="submit">
</form>
