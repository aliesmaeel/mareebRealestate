$(document).on('click', function(event) {
    const $sidebar = $('.right-list');
    const $svgIcon = $('.icon-list svg');
    if (!$sidebar.is(event.target) && $sidebar.has(event.target).length === 0 &&
        !$svgIcon.is(event.target) && $svgIcon.has(event.target).length === 0) {
        if ($sidebar.css('right') === '0px') {
            $sidebar.css('right', '-30rem');
        }
    }
});

$('.icon-list svg').on('click', function(event) {
    event.stopPropagation();  
    const $sidebar = $('.right-list');
    
    if ($sidebar.css('right') === '0px') {
        $sidebar.css('right', '-30rem');
    } else {
        $sidebar.css('right', '0');
    }
});
 // Array of city names
 const cityNames = ['New York', 'Los Angeles', 'Miami', 'Dubai', 'Paris'];
 let cityIndex = 0;

 function changeCity() {
    const $citySpan = $('#city-name');
    $citySpan.hide(200, function() {
        $citySpan.text(cityNames[cityIndex]);
        $citySpan.slideDown(300);
    });
    cityIndex = (cityIndex + 1) % cityNames.length;
}

setInterval(changeCity, 3000);

function updateHiddenInputAndActiveClass(groupName, hiddenInputId) {
    $('.group-options .option .custom-radio').click(function() {
        var selectedValue = $(this).data('value');
        $('#' + hiddenInputId).val(selectedValue);
        $('.group-options .option').removeClass('active');
        $(this).closest('.option').addClass('active');
        $(this).siblings('input[type="radio"]').prop('checked', true);
    });
}
updateHiddenInputAndActiveClass('interestd_status', 'interestd_status');
updateHiddenInputAndActiveClass('property_status', 'property_status');
$('.rent-option').click(function() {
    $('.abs').slideUp(200);
    $(this).next('.abs').slideDown(200);
});
$('.done').click(function() {
    $(this).closest('.abs').slideUp(); 
});

$('.reset').click(function() {
    $(this).closest('.abs').find('input[type="hidden"]').val('');
    $(this).closest('.abs').find('.group-options .option').removeClass('active');

    $(this).closest('.abs').find('.group-options input[type="radio"]').prop('checked', false);
});