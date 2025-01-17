/***********************
 Отправка формы в php BEGIN
 ***********************/
// $(function () {
//     $(".ajax-form").on("submit", function (event) {
//         const form = $(this);
//         const submitBtn = form.find('.btn');
//         let send = true;
//         event.preventDefault();
//
//         $(this).find("[data-req='true']").each(function () {
//             if ($(this).val() === "") {
//                 $(this).addClass('error');
//                 send = false;
//             }
//             if ($(this).is('select')) {
//                 if ($(this).val() === null) {
//                     $(this).addClass('error');
//                     send = false;
//                 }
//             }
//             if ($(this).is('input[type="checkbox"]')) {
//                 if ($(this).prop('checked') !== true) {
//                     $(this).addClass('error');
//                     send = false;
//                 }
//             }
//             if ($(this).is('input[type="tel"]')) {
//                 if ($(this).cleanVal().length < 11) {
//                     $(this).addClass('error');
//                     send = false;
//                 }
//             }
//         });
//
//         $(this).find("[data-req='true']").on('focus', function () {
//             $(this).removeClass('error');
//         });
//
//         // empty file inputs fix for mac
//         const fileInputs = $('input[type="file"]:not([disabled])', form);
//         fileInputs.each(function (_, input) {
//             if (input.files.length > 0) return;
//             $(input).prop('disabled', true)
//         });
//
//         const form_data = new FormData(this);
//
//         fileInputs.prop('disabled', false);
//
//         $("[data-label]").each(function () {
//             const input_name = $(this).attr('name');
//             const input_label__name = input_name + '_label';
//             const input_label__value = $(this).data('label').toString();
//             form_data.append(input_label__name, input_label__value)
//         });
//
//         if (send === true) {
//             submitBtn.prop('disabled', true);
//             $.ajax({
//                 type: "POST",
//                 async: true,
//                 url: "/send.php",
//                 cache: false,
//                 contentType: false,
//                 processData: false,
//                 data: form_data,
//                 success: (function (result) {
//                     console.log(result);
//                     $.fancybox.close();
//                     if (result.indexOf("Mail FAIL") !== -1) {
//                         $.fancybox.open({src: '#modal-error'});
//                     } else {
//                         setTimeout(function () {
//                             $.fancybox.open({src: '#modal-thanks'});
//                         }, 600);
//                         setTimeout(function () {
//                             $.fancybox.close();
//                         }, 4500);
//                         form[0].reset();
//                     }
//                     submitBtn.prop('disabled', false);
//                 })
//             });
//             setTimeout(function () {
//                 submitBtn.prop('disabled', false);
//             }, 4500);
//         }
//     });
// });
/***********************
 Отправка формы в php END
 ***********************/


/***********************
 Input mask BEGIN
 ***********************/
$(function () {
    const telInputs = $("input[type='tel']");
    String.prototype.replaceAt = function (index, replacement) {
        return this.substr(0, index) + replacement + this.substr(index + replacement.length);
    };

    const options = {
        onKeyPress: function (cep, event, currentField, options) {
            if (cep.charAt(1) === "8") {
                const currentValue = currentField.get(0).value;
                currentField.get(0).value = currentValue.replaceAt(1, "7");
            }
        }
    };

    telInputs.mask("+0 (000) 000-00-00", options);

    telInputs.on('focus', function () {
        if ($(this).get(0).value.length < 2) {
            $(this).get(0).value = "+"
        }
    });

    telInputs.on('blur', function () {
        if ($(this).get(0).value === "+") {
            $(this).get(0).value = ""
        }
    })
});
/***********************
 Input mask END
 ***********************/

$(function () {
    $(".detail-badge__accordion").accordion({
        heightStyle: "content",
        collapsible: true,
    });
    $(".scratch-faq-block").accordion({
        heightStyle: "content",
        collapsible: true,
    })
    $('.ui-accordion-header').on('click', function () {
        // alert('??')
        $(this).parents('.fixed-pos').css('height', 'auto');
    })
});

/***********************
 Elems Desc Enable BEGIN
 ***********************/

$(function () {
    $('body').on('click', '[data-toggle="desc-toggle"] [data-toggle-num]:not(.active)', function () {
        let targetName = $(this).parents('[data-toggle]').data('target'),
            num = $(this).data('toggle-num'),
            targetContainer = $(`[data-toggle-content=${targetName}]`),
            toggleItem = targetContainer.find(`[data-toggle-num=${num}]`),
            activeItem = targetContainer.find(`.active`);

        $(this).parents('[data-toggle]').find('.active').removeClass('active');
        $(this).addClass('active');
        activeItem.css('opacity', '0');
        setTimeout(function () {
            activeItem.removeClass('active');
            toggleItem.addClass('active');
            toggleItem.css('opacity', '0');
            setTimeout(function () {
                toggleItem.css('opacity', '1');
            }, 100)
        }, 300)
    })
})

/***********************
 Elems Desc Enable END
 ***********************/

/***********************
 fancybox BEGIN
 ***********************/
$.fancybox.defaults.backFocus = false;
$.fancybox.defaults.autoFocus = false;
$.fancybox.defaults.lang = 'ru';
$.fancybox.defaults.i18n =
    {
        'ru': {
            CLOSE: 'Закрыть',
            NEXT: 'Дальше',
            PREV: 'Назад',
            ERROR: 'Не удается загрузить. <br/> Попробуйте позднее.',
            PLAY_START: 'Начать слайдшоу',
            PLAY_STOP: 'Остановить слайдшоу',
            FULL_SCREEN: 'На весь экран',
            THUMBS: 'Превью'
        }
    };

function initFancy() {
    $('.fancy').fancybox({
        buttons: ['close']
    });
    $('.fancy-modal').fancybox({
        selector: '',
        touch: false
    });
    $('.fancy-map').fancybox({
        toolbar: false,
        smallBtn: true,
        defaultType: "iframe"
    });
    $('.fancy-video').fancybox({
        toolbar: false,
        smallBtn: true,
        youtube: {
            controls: 1,
            showinfo: 0,
            autoplay: 1
        }
    });
}

$(function () {
    initFancy();
});
/***********************
 fancybox END
 ***********************/


/***********************
 Прокрутка к секциям BEGIN
 ***********************/
$(function () {
    $('.scrollto').on('click', function () {
        const elementClick = $(this).attr("href");
        const destination = $(elementClick).offset().top;
        $('html,body').stop().animate({scrollTop: destination}, 1000);
        return false;
    });
});
/***********************
 Прокрутка к секциям END
 ***********************/


/***********************
 Waypoints BEGIN
 ***********************/
$(function () {
    $('.anim').waypoint(function () {
        $(this.element).toggleClass('animated');
    }, {
        offset: '85%'
    });
});
/***********************
 Waypoints END
 ***********************/


/***********************
 Mob menu BEGIN
 ***********************/
$(function () {
    $('.burger.mob').on('click', function () {
        $(this).toggleClass('active');
        $('.mob-panel').toggleClass('active');
        $('body').toggleClass('stopped');
    });

    $(document).on('click touchstart', function (e) {
        const div = $(".burger.mob.active,.mob-panel.active, .catalog-menu, .site-header-menu, .site-header-menu .burger");
        if (!div.is(e.target) && div.has(e.target).length === 0) {
            $('.burger.mob').removeClass('active');
            $('.site-header-menu .burger').removeClass('active');
            $('.mob-panel').removeClass('active');
            $('.catalog-menu').removeClass('active');
            $('body').removeClass('stopped');
            $('.black-overflow').removeClass('active');

        }
    });
});
/***********************
 Mob menu END
 ***********************/


/***********************
 Catalog BEGIN
 ***********************/
$(function () {
    $('.site-header-menu').on('click', function () {
        let burger = $(this).find('.burger');
        burger.toggleClass('active');
        $('.catalog-menu').toggleClass('active');
        $('body').toggleClass('stopped');
        $('.black-overflow').toggleClass('active');
    });
});
/***********************
 catalog END
 ***********************/

/***********************
 Intro slider BEGIN
 ***********************/
$(function ($) {
    $('.intro-slider').flickity({
        imagesLoaded: true,
        lazyLoad: true,
        pageDots: true
    });
});
/***********************
 Intro slider END
 ***********************/

/***********************
 Reviews slider BEGIN
 ***********************/
$(function ($) {
    let $slider = $('.reviews-slider').flickity({
        pageDots: false,
        prevNextButtons: false,
        draggable: true,
        contain: true
    });
    $slider.on('change.flickity', function (event, index) {
        let pagerItem = $('.page-navigation').find(`[data-page=${index + 1}]`);
        $('.page-navigation').find(`.active`).removeClass('active');
        pagerItem.addClass('active');
    });
    $('.page-navigation').on('click', 'li', function () {
        let index = Number($(this).data('page')) - 1;
        $(this).siblings('.active').removeClass('active');
        $(this).addClass('active');
        $slider.flickity('select', index);
        window.scrollTo({
            top: 0,
            behavior: "smooth"
        })
    });
});
/***********************
 Reviews slider END
 ***********************/

/***********************
 Blog slider BEGIN
 ***********************/
$(function ($) {
    let $slider = $('.blog-slider').flickity({
        pageDots: false,
        draggable: true,
        prevNextButtons: false,
    });
    $slider.on('change.flickity', function (event, index) {
        let pagerItem = $('.page-navigation').find(`[data-page=${index + 1}]`);
        $('.page-navigation').find(`.active`).removeClass('active');
        pagerItem.addClass('active');
    });
    $('.page-navigation').on('click', 'li', function () {
        let index = Number($(this).data('page')) - 1;
        $(this).siblings('.active').removeClass('active');
        $(this).addClass('active');
        $slider.flickity('select', index);
        window.scrollTo({
            top: 0,
            behavior: "smooth"
        })
    });
});
/***********************
 Blog slider END
 ***********************/

/***********************
 Interactive Pen Nav BEGIN
 ***********************/
$(function ($) {
    let sliderWrap = $('.interactive-pen-description');
    let $slider = $('.interactive-pen-description').flickity({
        imagesLoaded: true,
        lazyLoad: true,
        pageDots: false,
        prevNextButtons: false,
        draggable: true
    });
    $slider.on('change.flickity', function (event, index) {
        $('#interactive-pen').find(`.interactive-pen__info-point`).removeClass('active');
        let pagerItem = $('#interactive-pen').find(`.interactive-pen__info-point[data-toggle=${index + 1}]`);
        pagerItem.addClass('active');
    });
    $('.interactive-pen__info-point').on('click', function () {
        let index = Number($(this).data('toggle')) - 1;
        $('#interactive-pen').find(`.interactive-pen__info-point`).removeClass('active');
        $(this).addClass('active');
        $slider.flickity('select', index);
    });
    let digits = document.body.querySelectorAll('.interactive-pen__info-point');
    setInterval(function () {
        digits.forEach(item => {
            item.classList.add('shine');
            setTimeout(function () {
                item.classList.remove('shine');
            }, 500)
        })
    }, 1000)
});
/***********************
 Interactive Pen Nav END
 ***********************/


/***********************
 Middle slider BEGIN
 ***********************/
$(function ($) {
    $('.middle-slider').flickity({
        contain: true,
        imagesLoaded: true,
        lazyLoad: true,
        pageDots: false
    });
});
/***********************
 Middle slider END
 ***********************/


/***********************
 Logos slider BEGIN
 ***********************/
$(function ($) {
    $('.logo-slider').flickity({
        contain: true,
        imagesLoaded: true,
        lazyLoad: true,
        pageDots: false,
        groupCells: true,
        wrapAround: true
    });
});
/***********************
 Logos slider END
 ***********************/

/***********************
 Catalog slider BEGIN
 ***********************/
$(function ($) {
    $('.catalog-slider').flickity({
        contain: true,
        imagesLoaded: true,
        lazyLoad: true,
        pageDots: false,
        groupCells: true,
        wrapAround: true,
        draggable: true
    });
});
/***********************
 Catalog slider END
 ***********************/

/***********************
 Advantages slider BEGIN
 ***********************/
$(function ($) {
    if (screen.width <= 425) {
        let slider = $('.home-about__items');
        slider.removeClass('row');
        slider.flickity({
            contain: true,
            imagesLoaded: true,
            lazyLoad: true,
            pageDots: false,
            groupCells: true,
            wrapAround: true,
            draggable: true
        });
    }
});
/***********************
 Advantages slider END
 ***********************/

/***********************
 Reinit reviews slider BEGIN
 ***********************/
$(function ($) {
    if (screen.width <= 425) {
        let sliderReviews = $('.reviews-block.slider-re-init');
        sliderReviews.removeClass('reviews-block');
        sliderReviews.flickity({
            contain: true,
            imagesLoaded: true,
            lazyLoad: true,
            pageDots: false,
            groupCells: true,
            draggable: true
        });
        let sliderReviews2 = $('.reviews-grid.slider-re-init');
        // sliderReviews2.removeClass('reviews-grid');
        sliderReviews2.removeClass('row');
        sliderReviews2.flickity({
            contain: true,
            imagesLoaded: true,
            lazyLoad: true,
            pageDots: false,
            groupCells: true,
            draggable: true,
            adaptiveHeight: true
        });
    }
});
/***********************
 Advantages slider END
 ***********************/


/***********************
 parallax BEGIN
 ***********************/
$(function () {
    if (device.desktop()) {
        ParallaxScroll.init();
    }
});
/***********************
 parallax END
 ***********************/

/***********************
 interactive pen animation BEGIN
 ***********************/

$(function () {
    let pen = $("#interactive-pen"),
        body = pen.find('.body'),
        kernel = pen.find('.kernel'),
        cap = pen.find('.cap');
    if (pen.length) {
        pen.hover(
            function () {
                pen.addClass('active');
            }, function () {
            });
        if (device.desktop()) {
            $(window).on('scroll', function () {
                var offset = pen.offset();
                var posY = offset.top - $(window).scrollTop();
                var posX = offset.left - $(window).scrollLeft();
                if (posY <= 900 && posY >= 120) {
                    pen.addClass('active');
                } else {
                    pen.removeClass('active');
                }
            })
        } else {
            pen.addClass('active');
        }
    }
});

/***********************
 interactive pen animation END
 ***********************/

/***********************
 Two Ways slider BEGIN
 ***********************/

$(function () {
    if (!(device.desktop())) {
        $('.two-ways-content-mobile').flickity({
            contain: true,
            imagesLoaded: true,
            lazyLoad: true,
            pageDots: false,
            groupCells: true,
            wrapAround: true,
            draggable: true
        });
    }
});

/***********************
 Two Ways slider END
 ***********************/

/***********************
 custom input animation START
 ***********************/

$(function () {
    $(".label-input").focus(function () {
        let ths = $(this);
        let placeholder = ths.siblings('.label-input-label');
        placeholder.addClass('active');
        ths.on('blur', function () {
            if (ths.val() != '') {
            } else {
                placeholder.removeClass('active');
            }
        })
    })
});

/***********************
 custom input animation END
 ***********************/

/***********************
 article desc photo START
 ***********************/

$(function () {
    let images = document.querySelectorAll('.detailed-article img');

    if (images.length > 0) {
        for (let image of images) {
            let titleText = image.getAttribute('title');
            let newDiv = document.createElement('div');
            let title = document.createElement('p');

            title.className = 'image__desc';
            newDiv.className = 'image';

            title.innerText = titleText;
            image.insertAdjacentElement("afterEnd", newDiv);
            newDiv.appendChild(image);
            newDiv.appendChild(title);
        }
    }
});

/***********************
 article desc photo END
 ***********************/

/***********************
 Show order content START
 ***********************/

$(function () {
    $('.show-order-content').on('click', function () {
        let ths = $(this);
        let targetName = ths.data('order-num');
        let target = $('.order-content[data-order-num=' + targetName + ']');
        ths.toggleClass('active');
        target.toggleClass('active');
        if (target.hasClass('active')) {
            target.fadeOut();
        } else {
            target.fadeIn();
        }
    });
});

/***********************
 Show order content END
 ***********************/

$(document).ready(function () {
    $('.custom-select-basic').select2();
});

/***********************
 Video insert START
 ***********************/

$(document).ready(function () {
    $('.video').each(function () {
        let ths = $(this),
            iframe = ths.find('.youtube-video-frame'),
            src = iframe.data('src');
        ths.find('.video-play').on('click', function () {
            ths.html('');
            ths.append(`<iframe width="100%" height="100%" src="${src}" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>`)
        });
    });
})

/***********************
 Video insert END
 ***********************/

/***********************
 Catalog element photo START
 ***********************/

$(function () {
    $('.catalog-element-photo__main-slider').flickity({
        contain: true,
        imagesLoaded: true,
        lazyLoad: true,
        pageDots: false,
        groupCells: true,
        wrapAround: true,
        draggable: false,
        prevNextButtons: false,
    });
    $('.catalog-element-photo__elements-slider').flickity({
        asNavFor: ".catalog-element-photo__main-slider",
        contain: true,
        pageDots: false,
        imagesLoaded: true,
        prevNextButtons: true,
        groupCells: true,
    });
    $('.photo-gallery-slider').flickity({
        contain: true,
        pageDots: false,
        prevNextButtons: true,
        groupCells: true,
        lazyLoad: true,
    });
})

/***********************
 Catalog element photo END
 ***********************/

/***********************
 Custom variety START
 ***********************/

$(function () {
    $('.cat-el-variety__item input[type=radio]').on('click', function () {
        let ths = $(this),
            parent = ths.parents('.cat-el-variety'),
            title = parent.find('.cat-el-variety__current');
        title.text(ths.val());
    })
})

$(function () {
    $('.custom-input-basic button').on('click', function () {
        let ths = $(this),
            container = ths.parents('.custom-input-basic'),
            input = container.find('input'),
            step = container.data('step');
        let number = input.val() ? Number(input.val()) : 0;
        if (ths.hasClass('plus')) {
            number += step;
        } else if (ths.hasClass('minus') && number > 1) {
            number -= step;
        }
        input.val(number);
    })
    $('.custom-input-basic input').on('change', function () {
        if (Number($(this).val()) < 0) {
            $(this).val('0');
        }
    })
})

/***********************
 Custom variety END
 ***********************/

/***********************
 Fixed element position START
 ***********************/

$(function () {
    let fixedElem = document.body.getElementsByClassName('fixed-pos')[0];

    if (fixedElem && screen.width >= 465) {
        let isScrolling = false;

        window.addEventListener("scroll", throttleScroll, false);

        let parent = fixedElem.getAttribute('data-parent');
        parent = document.body.getElementsByClassName(`${parent}`)[0];
        $('.fixed-pos').parent().attr('style', 'position: relative;');
        let elemWidth = fixedElem.offsetWidth,
            elemHeight = fixedElem.offsetHeight,
            parentWidth = parent.offsetWidth,
            parentHeight = parent.offsetHeight,
            style = `width: ${parentWidth}px; height: ${parentHeight}px`;
        parent.setAttribute('style', `${style}`);
        style = `width: ${elemWidth}px; height: ${elemHeight}px`;
        fixedElem.setAttribute('style', `${style}`);

        function throttleScroll(e) {
            if (isScrolling == false) {
                window.requestAnimationFrame(function () {
                    scrolling(e);
                    isScrolling = false;
                });
            }

            isScrolling = true;
        }

        let onBottom = false;
        let onTop = true;

        function scrolling(e) {
            let coords = fixedElem.getBoundingClientRect(),
                parentCoords = parent.getBoundingClientRect();
            let startFromTop = (coords.top <= 30 && parentCoords.top <= 30 && !onBottom),
                stopFromTop = (parentCoords.top >= 30),
                startFromBottom = (coords.top <= 30 && parentCoords.top <= 30 && onBottom),
                stopFromBottom = (coords.bottom >= parentCoords.bottom && !onTop)
            if (startFromTop) {
                fixedElem.classList.add('fixed');
                onTop = false;
            }
            if (stopFromTop) {
                fixedElem.classList.remove('fixed');
                onTop = true;
            }
            if (startFromBottom) {
                fixedElem.classList.add('fixed');
                fixedElem.setAttribute('style', `${style}`);
                onBottom = false;
            }
            if (stopFromBottom) {
                fixedElem.classList.remove('fixed');
                fixedElem.setAttribute('style', `position: absolute; bottom: 0; ${style}`)
                onBottom = true;
            }
        }
    }
})

/***********************
 Fixed element position END
 ***********************/