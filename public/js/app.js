
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
const totalWidth = itemWidth * totalItems;
$items.append($items.html());
const speed = 200;
const duration = totalWidth / speed;
$items.css('--scroll-duration', `${duration}s`);

const swiperAbout = new Swiper('.swiper-container-about', {
    slidesPerView: 'auto',
    effect: 'slide',
    speed: 500,
    autoplay: {
        delay: 2000,
        disableOnInteraction: false,
      },

  });


const $mainImageAbout = $('.flex-col .img-about');

$('.swiper-container-about .swiper-slide img').on('click', function () {
    $mainImageAbout.attr('src', $(this).attr('src'));
});

// Function to initialize Swipers dynamically
function initializeSwipers(selector) {
    document.querySelectorAll(selector).forEach((swiperContainer) => {
      new Swiper(swiperContainer, {
        slidesPerView: 'auto',
        autoplay: {
          delay: 2000,
          disableOnInteraction: false,
        },

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


    if (currentPage === '/') {
        header.css('background-color', 'transparent');


        if (scrollTop > 50) {
            header.css('background-color', 'rgb(61 46 42)');
        } else {
        header.css('background-color', 'transparent');

        }
    }
    else {
        header.css('background-color', 'rgb(61, 46, 42)');


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

$.get('/all-countries', function(data) {
    const phoneDropdown = $('.dropdown_phone');
    const countryDropdown = $('.dropdown_country');

    // Define Emirates code and flag
    const emiratesCode = '+971';
    const emiratesFlagUrl = 'https://flagcdn.com/w320/ae.png';

    // Populate phone dropdown
    data.forEach(country => {
        const countryDialCode = country.dial_code || '';
        const countryCode = country.code;
        const flagUrl = `https://flagcdn.com/w320/${countryCode.toLowerCase()}.png`;
        const countryName = country.name;

        // Append to phone dropdown
        phoneDropdown.append(`
            <div class="code" data-flag="${flagUrl}" data-code="${countryDialCode}">
                <img src="${flagUrl}" class="flag" alt="${countryName} Flag" style="width: 20px; height: 15px;">
                <div class="name-city">${countryName}<span> ${countryDialCode}</span></div>
            </div>
        `);

        // Append to country dropdown
        countryDropdown.append(`
            <div class="city" data-flag="${flagUrl}" data-city="${countryName.replace(/\s+/g, '_')}">
                <img src="${flagUrl}" class="flag" alt="${countryName} Flag" style="width: 20px; height: 15px;">
                <div class="name-city">${countryName}</div>
            </div>
        `);
    });

    $('.phone_number').on('input', function() {
        $(this).val($(this).val().replace(/[^0-9]/g, ''));
    });

    $('.city_code').on('click', function() {
        $('.dropdown_phone').toggle();
    });

    $('.dropdown_phone .code').on('click', function() {
        $(this).addClass('active').siblings().removeClass('active');
        var flagSrc = $(this).data('flag');
        var phoneCode = $(this).data('code');

        if ($(this).find('.name-city').text().includes('Emirates')) {
            flagSrc = emiratesFlagUrl;
            phoneCode = emiratesCode;
        }

        $('#selected-flag').attr('src', flagSrc);
        $('#country-code-input').val(phoneCode);
        $('.dropdown_phone').hide();
    });

    $('.city_name').on('click', function() {
        $('.dropdown_country').toggle();
    });

    $('.dropdown_country .city').on('click', function() {
        $(this).addClass('active').siblings().removeClass('active');
        var flagSrc = $(this).data('flag');
        var countryName = $(this).data('city').replace(/_/g, ' ');

        if (countryName.includes('Emirates')) {
            flagSrc = emiratesFlagUrl;
            $('#location-input').val('Emirates');
        } else {
            $('#location-input').val(countryName);
        }

        $('.country_field').val(countryName);
        $('#selected-flag-country').attr('src', flagSrc);
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

    $('.contact-us form').on('submit', function(e) {
        var countryCode = $('#country-code-input').val().replace('%2B', '+');
        console.log('Country Code:', countryCode);
    });
});
const about_swiper = new Swiper('.about_swiper', {
    slidesPerView: 'auto',
    autoplay: {
      delay: 2000,
    },
    freeMode: true,
    effect: 'fade',
    speed: 1000,

  });

  const available_property_swiper = new Swiper('.available_property_swiper', {
    slidesPerView: '1',
    autoplay: {
        delay: 2500,
        disableOnInteraction: false,
      },
    allowTouchMove: false,
    spaceBetween: 30,
    centeredSlides: true,
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
      },
    freeMode: true,
    effect: 'slide',
    speed: 300,

  });
  const senior_swiper = new Swiper('.senior_swiper.team_swiper', {
    slidesPerView: 'auto',
    navigation: {
        nextEl: ".swiper-button-next.senior-next",
        prevEl: ".swiper-button-prev.senior-prev",
      },
    freeMode: true,
    effect: 'slide',
    speed: 300,

  });


$(".first.toggle").on("click", function() {
    $(this).next(".second").toggleClass("show");
    $(this).find('img').toggleClass('rotate')
});

const allImages = $('.flex_banner .rest');
const showMoreContainer = $('.show-more');
let swiperInstance;

const showImages = () => {
    const windowWidth = $(window).width();
    const visibleImagesCount = windowWidth > 767 ? 4 : 2;
    allImages.hide().removeClass('first');
    const visibleImages = allImages.slice(0, visibleImagesCount);
    visibleImages.show();
    visibleImages.first().addClass('first');

    if (allImages.length > visibleImagesCount) {
        showMoreContainer.show();
    } else {
        showMoreContainer.hide();
    }
};

showImages();
$(window).resize(showImages);

const openSwiperFromImage = (startIndex) => {
    $('.swiper-popup').fadeIn(300);
    const swiperWrapper = $('.swiper-popup .swiper-wrapper');
    swiperWrapper.empty();

    allImages.each(function () {
        const src = $(this).find('img').attr('src');
        swiperWrapper.append(`
            <div class="swiper-slide">
                <img src="${src}" style="width:100%">
            </div>
        `);
    });

    if (swiperInstance) {
        swiperInstance.destroy(true, true);
        swiperInstance = null;
    }

    swiperInstance = new Swiper('.swiper-container-popup', {
        initialSlide: startIndex,
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
        slidesPerView: 1,
        freeMode: true,
        effect: 'slide',
        speed: 500,
    });
};

allImages.on('click', function () {
    const startIndex = allImages.index(this);
    openSwiperFromImage(startIndex);
});

showMoreContainer.find('.overlay').on('click', function () {
    const firstHiddenIndex = allImages.filter(':hidden').first().index();
    if (firstHiddenIndex !== -1) {
        openSwiperFromImage(firstHiddenIndex);
    }
});

$('.close-btn').on('click', function () {
    $('.swiper-popup').fadeOut();
    if (swiperInstance) {
        swiperInstance.destroy(true, true);
        swiperInstance = null;
    }
});

// var $grid_isotope = $('.js-filter-grid').isotope({
//     itemSelector: '.filter_teams_items',
//     layoutMode: 'fitRows',
//     transitionDuration: '0.6s' // Smooth transition
// });

// Trigger the initial filter, ensuring all items are shown or the correct items are shown
// $grid_isotope.isotope({ filter: '*' });  // '*' will show all items initially

// Filter items on select change
$('#section-filter > div').on('click', function () {
    var filterValue = $(this).text().trim(); 
    if (filterValue === 'All') {
        $('.filter_teams_items').fadeIn(); 
    } else {
        $('.filter_teams_items').each(function () {
            if ($(this).data('section') === filterValue) {
                $(this).fadeIn();
            } else {
                $(this).fadeOut(); 
            }
        });
    }
});
$('.down').on('click', function() {
    var nextSection = $('#next-section').offset().top ;
    $('html, body').animate({ scrollTop: nextSection }, 400);
});
