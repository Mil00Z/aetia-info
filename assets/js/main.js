$(document).ready(function(){

// // Actions directes  DOM au chargement
//   $('body').append('<div id="back-to-top"><a href="#main-header">BackUp</a></div>');

 var viewport_width = $(window).width();
 var toggle_content = $('.toggle-infos');
  $('#search-bar').hide();

    $('.logiciels-more_content').addClass('hidden');

//toggle search bar
    $('.toggle-search').on('click', function(){
        $(this).toggleClass('active-search');
        $('#search-bar').fadeToggle(700);
    });

// Afficher les contenus cachés supplémentaires
 toggle_content.on('click','button', function(e){
  $(this).toggleClass('active-btn');
//   // selectionne le parent puis le frère direct
  $(this).parent().next('.logiciels-more_content').toggleClass('hidden').animate({"display":"none"}, "500");
  console.log('toggle Content');
 });

    //nav services fixed
    var nav_fixed =  $("nav_services");
    $('main').find('section:not(#banner-solutions)').each(function() {
        var section_id =  $(this).prop('id');
        console.log(section_id);

            nav_fixed.each(function () {
            $(this).html('<a href="#" class="nav_services--itemfix">' + section_id + '</a>');
        })
     });

// Slider HomePage
    $('.solutions-slider').slick({
        arrows: true,
        dots: false,
        slidesToShow: 3,
        slidesToScroll: 2,
        // appendArrows: '.solutions-slider--nav',
        prevArrow:$('.prev'),
        nextArrow:$('.next'),
        // responsive: [
        //     {
        //         breakpoints: 500,
        //         settings: 'unslick'
        //     },
        //     {
        //         breakpoint: 960,
        //         settings: {
        //             slidesToShow: 2,
        //             slidesToScroll: 2
        //             }
        //     },
        //     {
        //         breakpoint: 1100,
        //         settings: {
        //             slidesToShow: 3,
        //             slidesToScroll: 3
        //             }
        //      },
        // ]
    });


// Slider Services
//     $('.tab-content').slick({
//         arrows:false,
//         dots:true,
//         appendDots:'.list-services',
//         slideToShow:1,
//         slidesToScroll: 1,
//         vertical:true,
//         verticalSwiping:true,
//     });
//
//     var nb_of_item = $('.nav-item').length;
//     $('.slick-dots').find('button').each(function() {
//             for (i =1; i <= nb_of_item; i++){
//                 $(this).text('item' + i );
//             }
//             console.log(nb_of_item);
//         });


    $('a[data-toggle="tab"]').on('shown.bs.tab', function (e) {
        var target = $(this).attr('href');

        $(target).css('right','-'+$(window).width()+'px');
        var right = $(target).offset().right;
        console.log(right);
        $(target).css({right:right}).animate({"right":"0px"}, "100");
    });


// récuperer les styles des pseudos élèment
    var pseudo_el = window.getComputedStyle(
        document.querySelector('.pseudo-test'), '::after'
    );
    var get_value_pseudoel = pseudo_el.getPropertyValue('height');
    console.log( 'valeur du pseudo / ' + get_value_pseudoel);


//  // Smooth Scroll & activation de l'item'
//     $(' .card-container ul li  a').on('click', function () {
//      var link = $(this).attr('href');
//      var target = $(link);
//      var target_pos = target.offset().top;

//      var height_prestation_content = $('.gallery-prestation_content').height();
//      // console.log(height_prestation_content);

//      $('html,body').animate({scrollTop: target_pos - height_prestation_content}, 1000, 'swing');
//      target.toggleClass('active');
//      console.log(target);
//  });

 // push off top bar
 //    $(window).on('scroll',function(){
 //        if($(this).scrollTop() > 20) {
 //            $('#top-bar').toggleClass('off-view');
 //        } else {
 //            console.log('top bar regular');
 //        }
 //    });



  });
