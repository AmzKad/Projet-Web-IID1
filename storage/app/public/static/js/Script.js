// var swiper = new Swiper('.swiper-container', {
//     direction: 'horizontal', // Right to Left direction
//     loop: true, // Loop the slides
//     autoplay: {
//         delay: 5000, 
//     },
//     pagination: {
//         el: '.swiper-pagination', 
//         clickable: true, 
//     },
// });


// swiper.on('slideChange', function () {
//     document.querySelectorAll('.HSlide_Img').forEach(slide=> {
//         slide.classList.remove('scale');
//     });

//     var activeSlide = swiper.slides[swiper.activeIndex];

//     activeSlide.classList.add('scale');
//     console.log(activeSlide)
// });

// var carousel = document.getElementById('imageSlider');
//     carousel.addEventListener('slid.bs.carousel', function () {
//       var activeItem = carousel.querySelector('.carousel-item.active');
//       var items = carousel.querySelectorAll('.carousel-item');
//       items.forEach(function (item) {
//         if (item === activeItem) {
//           item.style.transform = 'scale(1.2)';
//         } else {
//           item.style.transform = 'scale(1)';
//         }
//       });
//     });