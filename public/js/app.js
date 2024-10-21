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
//  const cityNames = ['New York', 'Los Angeles', 'Miami', 'Dubai', 'Paris'];
//  let cityIndex = 0;

//  function changeCity() {
//     const $citySpan = $('#city-name');
//     $citySpan.hide(200, function() {
//         $citySpan.text(cityNames[cityIndex]);
//         $citySpan.slideDown(300);
//     });
//     cityIndex = (cityIndex + 1) % cityNames.length;
// }

// setInterval(changeCity, 3000);

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
    $('#' + hiddenInputId).val(''); // Ensure hidden input is cleared
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