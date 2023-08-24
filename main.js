const mainCarousel = new Siema({
    selector: '.mainCarousel',
    perPage: 1,
    loop: true,
    draggable: window.innerWidth < 768,
    onChange: () => {
        changeMainCarouselDotsView(mainCarousel.currentSlide)
    }
});
const mainCarouselButtonsInner = Array.from(document.querySelectorAll('.hero__indicators--main .hero__indicators__item__inner'));

const mainCarouselGoTo = (n) => {
    mainCarousel.goTo(n);
}

const changeMainCarouselDotsView = (n) => {
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
    draggable: window.innerWidth < 768
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

const mobileMenu = document.querySelector('.mobileMenu');
const mobileMenuChildren = Array.from(document.querySelectorAll('.mobileMenu>*'));

const openMobileMenu = () => {
    mobileMenu.style.transform = 'scaleX(1)';

    setTimeout(() => {
        mobileMenuChildren.forEach((item) => {
            item.style.opacity = '1';
        });
    }, 200);
}

const closeMobileMenu = () => {
    mobileMenuChildren.forEach((item) => {
        item.style.opacity = '0';
    });

    setTimeout(() => {
        mobileMenu.style.transform = 'scaleX(0)';
    }, 200);
}
