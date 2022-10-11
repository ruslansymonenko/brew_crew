export function infoSlider (sliderContainer, line, slideItems) {
    const slides = document.querySelectorAll(slideItems);
    const sliderLine = document.querySelector(line);
    const slider = document.querySelector(sliderContainer);
    const prevSlideBtn = document.querySelector('.prev_slide-btn--info');
    const nextSlideBtn = document.querySelector('.next_slide-btn--info');
    
    let counter = 0;
    let sliderWidth;

    function sliderInit () {
        sliderWidth = slider.offsetWidth;
        sliderLine.style.width = sliderWidth * slides.length + 'px';
        slides.forEach(item => {
            item.style.width = sliderWidth + 'px';
            item.style.height = 'auto';
        })
        
        sliderRoll();
    };

    function sliderRoll () {
        sliderLine.style.transform = 'translate(-' + counter*sliderWidth + 'px';
    }

    sliderInit();
    window.addEventListener('resize', sliderInit);

    prevSlideBtn.addEventListener('click', () => {
        counter--;
        if (counter < 0) {
            counter = slides.length - 1;
        }
        sliderRoll();
    });

    nextSlideBtn.addEventListener('click', () => {
        counter++;
        if (counter >= slides.length) {
            counter = 0;
        }
        sliderRoll();
    })
}