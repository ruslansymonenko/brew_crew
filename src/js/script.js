import {headerScroll} from './modules/headerScroll.js';
import {anchors} from './modules/anchors.js';
import {goodsSlider} from './modules/goodsSlider.js';
import {infoSlider} from './modules/infoSlider.js';

window.addEventListener('DOMContentLoaded', () => {
    headerScroll();
    anchors();
    goodsSlider('.goods_slider', '.goods_slider-line', '.goods_slider-item');
    infoSlider('.info_page-slider', '.info_slider-line', '.info_page-slider-item');
})