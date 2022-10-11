export function slider () {
    const slides = document.querySelectorAll('.info_page-slider-item');
    const sliderLine = document.querySelector('.info_slider-line');
    const slider = document.querySelector('.info_page-slider');
    const prevSlideBtn = document.querySelectorAll('.prev_slide-btn');
    const nextSlideBtn = document.querySelectorAll('.next_slide-btn');
    
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

    prevSlideBtn.forEach(item => {
        item.addEventListener('click', () => {
            counter--;
            if (counter < 0) {
                counter = slides.length - 1;
            }
            sliderRoll();
        })
    })

    nextSlideBtn.forEach(item => {
        item.addEventListener('click', () => {
            counter++;
            if (counter >= slides.length) {
                counter = 0;
            }
            sliderRoll();
        })
    })
}