
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
function updateHiddenInputAndActiveClass(groupName, hiddenInputId) {
   
    $('.group-options.' + groupName + ' input[type="radio"]').each(function() {
        if ($(this).prop('checked')) {
            $(this).closest('.option').addClass('active');
        }
    });

    $('.group-options.' + groupName + ' .option .custom-radio').click(function() {
        var selectedValue = $(this).data('value');
        $('#' + hiddenInputId).val(selectedValue); 
        $('.group-options.' + groupName + ' .option').removeClass('active');
        $(this).closest('.option').addClass('active');
        $(this).find('input[type="radio"]').prop('checked', true);
    });
}

updateHiddenInputAndActiveClass('interest-group', 'interestd_status');
updateHiddenInputAndActiveClass('property-group', 'property_status');
updateHiddenInputAndActiveClass('property-type', 'property_type');
updateHiddenInputAndActiveClass('bedroom-group', 'bedrooms');
updateHiddenInputAndActiveClass('bathroom-group', 'bathroom');
$('.options-selected').click(function() {
    var $currentAbs = $(this).next('.abs');
    $('.abs').not($currentAbs).slideUp(200);
    $('.options-selected').not(this).removeClass('active');
    $currentAbs.slideToggle(200);
    $(this).toggleClass('active');
});

$('.done').click(function() {
    $(this).closest('.abs').slideUp(200);
    $(this).closest('.abs').prev('.options-selected').removeClass('active'); 
});

$('.reset').click(function() {
    var $container = $(this).closest('.abs');
    $container.find('input[type="hidden"]').val('');
    $container.find('.group-options .option').removeClass('active');
    $container.find('input[type="radio"]').prop('checked', false);
    var hiddenInputId = $container.find('input[type="hidden"]').attr('id');
    $('#' + hiddenInputId).val(''); 
});

const $items = $('.items');
const itemWidth = $items.children().first().outerWidth(true); 
const totalItems = $items.children().length;
$items.append($items.html());
$items.css({ left: 0 });
function animateItems() {
    $items.animate(
        { left: -itemWidth * totalItems }, 
        {
            duration: 40000,
            easing: 'linear',
            complete: function() {
                $items.css({ left: 0 });
                animateItems(); 
            }
        }
    );
}

animateItems();

// Function to initialize Swipers dynamically
function initializeSwipers(selector) {
    document.querySelectorAll(selector).forEach((swiperContainer) => {
      new Swiper(swiperContainer, {
        slidesPerView: 'auto',
        autoplay: {
          delay: 2000, 
          disableOnInteraction: false,
        },
        freeMode: true,
        effect: 'slide',
        speed: 500,
        pagination: {
          el: swiperContainer.querySelector('.swiper-pagination'),
          clickable: true,
        },
      });
    });
  }
  
 
  initializeSwipers('.explore_recent_swiper');
  initializeSwipers('.team_swiper');

  document.querySelectorAll('.box-desc').forEach(function (desc) {
    const maxChars = 186;
    let text = desc.textContent.trim();
  
    console.log(text.length);  
  
    if (text.length < maxChars) {
      desc.classList.add('none-ellipsis');
      if (desc.nextElementSibling) {
        desc.nextElementSibling.style.display = 'none';
      }

    }
  });
  function bgHeader(){
    var header = $('.header');
    var scrollTop = $(window).scrollTop();
    var currentPage = window.location.pathname;
    if (currentPage.includes('contact-us')) {
        // If you're on the Contact Us page, set the background to red
        header.css('background-color', 'rgb(61 46 42)');
    } else
    if (scrollTop > 50) {
    header.css('background-color', 'rgb(61 46 42)'); 
    } else {
    header.css('background-color', 'transparent'); 
    }
  }
  bgHeader();
  $(window).scroll(function() {
    bgHeader();
  });
  $(document).ready(function() {
    $('#search-select').select2({
        placeholder: "Select options...",
        allowClear: true,
        
    });
    $('.input-search').click(function(){
        $('.abs').hide()
    });
    
  
});
$('.to-top').click(function(e) {
    e.preventDefault(); 
    $('html, body').animate({
        scrollTop: 0
    }, 800); 
});


// $(document).mousemove(function(event) {
//     var smoke = $('<div class="smoke"></div>');
//     smoke.css({
//         left: event.pageX - 10 + 'px',
//         top: event.pageY - 10 + 'px'
//     });
//     $('body').append(smoke);

//     setTimeout(function() {
//         smoke.remove();
//     }, 2000); 
// });

function checkInput(input) {
    const span = input.nextElementSibling;
    if (input.value.trim() !== "") {
        span.style.display = "none";
    } else {
        span.style.display = "block";
    }
}
$('.phone_number').on('input', function() {
    $(this).val($(this).val().replace(/[^0-9]/g, ''));
});

// countries code
$('.city_code').on('click', function() {
    $('.dropdown_phone').toggle();
});
$('.dropdown_phone .code').on('click', function() {
    $(this).addClass('active').siblings().removeClass('active');
    var flagSrc = $(this).data('flag'); 
    var phoneCode = $(this).data('code'); 
    $('#selected-flag').attr('src', flagSrc);
    $('#country-code-input').val(phoneCode);
    $('.dropdown_phone').hide();
});
// country name (location)
$('.city_name').on('click', function() {
    $('.dropdown_country').toggle();
});
$('.dropdown_country .city').on('click', function() {
    $(this).addClass('active').siblings().removeClass('active');
    var flagSrc = $(this).data('flag'); 
    var country_name = $(this).data('city'); 
    $('#selected-flag-country').attr('src', flagSrc);
    $('#location-input').val(country_name);
    $('.dropdown_country').hide();
});



$(document).on('click', function(e) {
    if (!$(e.target).closest('.cities').length) {
        $('.dropdown_phone').hide();
    }
    if (!$(e.target).closest('.countries').length) {
        $('.dropdown_country').hide();
    }
});



  