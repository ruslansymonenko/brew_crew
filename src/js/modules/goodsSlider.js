export function goodsSlider (sliderContainer, line, slideItems) {
    const slider = document.querySelector(sliderContainer);
    const sliderLine = document.querySelector(line);
    const slides = document.querySelectorAll(slideItems);
    const prevSlideBtn = document.querySelector('.prev_slide-btn--goods');
    const nextSlideBtn = document.querySelector('.next_slide-btn--goods');

    let countStart = 0;
    let countEnd = 2;

    function putSlideNum (elements) {
        elements.forEach((item, i) => {
            item.setAttribute('data-position', i);
        })
    };

    function setSlides (start, end, el) {
        el.forEach((item, i) => {
            if (i >= start && i <= end) {
                item.classList.add('goods_slider-item-active');
            } else {
                item.classList.remove('goods_slider-item-active');
            }
        })
    }

    function prevSlides (elements) {
        if (countStart <= 0) {
            countEnd = elements.length - 1;
            countStart = elements.length - 3;
        } else {
            countStart--;
            countEnd--;
        }

        setSlides(countStart, countEnd, elements);
    };

    function nextSlides (elements) {
        if (countEnd >= elements.length - 1) {
            countStart = 0;
            countEnd = 2;
        } else {
            countStart++;
            countEnd++;
        };

        setSlides(countStart, countEnd, elements);
    }

    putSlideNum(slides);

    prevSlideBtn.addEventListener('click', () => {
        prevSlides(slides);
    });

    nextSlideBtn.addEventListener('click', () => {
        nextSlides(slides);
    })
}