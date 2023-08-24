const mainCarousel = new Siema({
    selector: '.mainCarousel',
    perPage: 1,
    loop: true,
    draggable: false
});
const mainCarouselButtonsInner = Array.from(document.querySelectorAll('.hero__indicators--main .hero__indicators__item__inner'));

const mainCarouselGoTo = (n) => {
    mainCarousel.goTo(n);

    mainCarouselButtonsInner.forEach((item, index) => {
        if(index === n) {
            item.style.opacity = '1';
        }
        else {
            item.style.opacity = '0';
        }
    });
}

const newsCarousel = new Siema({
    selector: '.newsCarousel',
    perPage: 1,
    loop: true,
    draggable: false
});
const newsCarouselButtonsInner = Array.from(document.querySelectorAll('.hero__indicators--news .hero__indicators__item__inner'));

const changeNewsCarouselDotsView = (n) => {
    newsCarouselButtonsInner.forEach((item, index) => {
        if(index === n) {
            item.style.opacity = '1';
        }
        else {
            item.style.opacity = '0';
        }
    });
}

const newsCarouselPrev = () => {
    newsCarousel.prev();
    changeNewsCarouselDotsView(newsCarousel.currentSlide);
}

const newsCarouselNext = () => {
    newsCarousel.next();
    changeNewsCarouselDotsView(newsCarousel.currentSlide);
}

const newsCarouselGoTo = (n) => {
    newsCarousel.goTo(n);
    changeNewsCarouselDotsView(n);
}
