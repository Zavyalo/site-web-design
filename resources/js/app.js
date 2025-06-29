import Swiper from 'swiper/bundle';

import './bootstrap';

import './burger';

import Alpine from 'alpinejs';
import mask from '@alpinejs/mask';
Alpine.plugin(mask);
window.Alpine = Alpine;

Alpine.start();

import.meta.glob([
    '../images/**',
]);

window.onload = function () {

    if (document.querySelector('.SwiperServices')) {
        const swiper = new Swiper('.SwiperServices', {
            spaceBetween: 15,
            slidesPerView: 5,

            breakpoints: {
                // when window width is >= 640px
                320: {
                    slidesPerView: 2,

                    spaceBetween: 20
                },
                640: {
                    slidesPerView: 3,
                    spaceBetween: 20
                },
                768: {
                    slidesPerView: 3,
                    spaceBetween: 20
                },
                1024: {
                    slidesPerView: 4,
                    spaceBetween: 20
                },
                1280: {
                    slidesPerView: 4,
                    spaceBetween: 20
                },
                1440: {
                    slidesPerView: 5,
                    spaceBetween: 20
                },
                1536: {
                    slidesPerView: 5,
                    spaceBetween: 20
                },
                speed: 1000,
                loop: true,
                autoplay: {
                    delay: 1500,
                    disableOnInteraction: false,
                }
            }
        })
    }
    if (document.querySelector('.SwiperWelcome')) {
        const swiper = new Swiper('.SwiperWelcome', {
            spaceBetween: 15,
            slidesPerView: 5,

            breakpoints: {
                // when window width is >= 640px
                320: {

                    slidesPerView: 4,
                    spaceBetween: 6
                },
                640: {
                    slidesPerView: 3,
                    spaceBetween: 6
                },
                768: {
                    slidesPerView: 3,
                    spaceBetween: 6
                },
                1024: {
                    slidesPerView: 3,
                    spaceBetween: 15
                },
                1280: {
                    slidesPerView: 3,
                    spaceBetween: 15
                },
                1440: {
                    slidesPerView: 3,
                    spaceBetween: 15
                },
                1536: {
                    slidesPerView: 3,
                    spaceBetween: 15
                },
                speed: 1000,
                loop: true,
                autoplay: {
                    delay: 1500,
                    disableOnInteraction: false,
                }
            }
        })
    }
    if (document.querySelector('.SwiperWelcomepartners')) {
        const swiper = new Swiper('.SwiperWelcomepartners', {
            spaceBetween: 15,
            slidesPerView: 5,
            breakpoints: {
                // when window width is >= 640px
                320: {
                    slidesPerView: 2,
                    spaceBetween: 6
                },
                640: {
                    slidesPerView: 3,
                    spaceBetween: 6
                },
                768: {
                    slidesPerView: 4,
                    spaceBetween: 6
                },
                1024: {
                    slidesPerView: 4,
                    spaceBetween: 15
                },
                1280: {
                    slidesPerView: 5,
                    spaceBetween: 15
                },
                1440: {
                    slidesPerView: 5,
                    spaceBetween: 15
                },
                1536: {
                    slidesPerView: 5,
                    spaceBetween: 15
                },
                speed: 1000,
                loop: true,
                autoplay: {
                    delay: 1500,
                    disableOnInteraction: false,
                }
            }
        })
    }
};

