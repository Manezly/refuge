const burger_menu = () => {
    const navbar = document.querySelector('.navbar_container');
    const burgerClick = document.querySelector('.nav_burger');
    htmlElement = document.documentElement;
    if(!navbar) {
        return;
    }
    burgerClick.addEventListener('click', () => {
    navbar.classList.toggle('on');
    htmlElement.classList.toggle('remove_scrolling');
    });
}

const sticky_nav = () => {
    const container = document.getElementById('sticky_nav_container');
    const navbar = document.querySelector('.navbar');
    if (!container) {
        return;
    }
    window.addEventListener('scroll', function() {
        const containerPosition = container.getBoundingClientRect().top;
        const threshold = 0;

        if (containerPosition <= threshold) {
            navbar.classList.add('scrolled');
        } else {
            navbar.classList.remove('scrolled');
        }
    });
}

const featured_list_fade_in_out = () => {
    const featured = document.querySelector('.featured');
    const featuredLeft = document.querySelector('.featured_left');
    const featuredRight = document.querySelector('.featured_right');
    if (!featured) {
        return;
    }
    featuredLeft.addEventListener('mouseover', () => {
        featured.classList.add('left_in_right_out')
    })
    featuredLeft.addEventListener('mouseout', () => {
        featured.classList.remove('left_in_right_out')
    })
    featuredRight.addEventListener('mouseover', () => {
        featured.classList.add('right_in_left_out')
    })
    featuredRight.addEventListener('mouseout', () => {
        featured.classList.remove('right_in_left_out')
    })
}

const featured_hover_button = () => {
    const featured = document.querySelector('.featured');
    if (!featured) {
        return;
    }
    const containers = document.querySelectorAll('.featured_button_float');
    containers.forEach((container) => {
        const buttonContainer = container.querySelector('.featured_button');
        const containerWidth = buttonContainer.offsetWidth;
        const containerHeight = buttonContainer.offsetHeight;
        container.addEventListener('mousemove', (e) => {
            const containerRect = container.getBoundingClientRect();
            const X = e.clientX - containerRect.left - containerWidth/2; 
            const Y = e.clientY - containerRect.top - containerHeight/2; 
            buttonContainer.style.left = `${X}px`;
            buttonContainer.style.top = `${Y}px`;
        });
    });
};

const whats_on_slide_hover_button = () => {
    const featured = document.querySelector('.whats_on_container');
    if (!featured) {
        return;
    }
    const containers = document.querySelectorAll('.single_event_img_container');
    containers.forEach((container) => {
        const buttonContainer = container.querySelector('.click_me');
        const containerWidth = buttonContainer.offsetWidth;
        const containerHeight = buttonContainer.offsetHeight;
        container.addEventListener('mousemove', (e) => {
            const containerRect = container.getBoundingClientRect();
            const X = e.clientX - containerRect.left - containerWidth/2; 
            const Y = e.clientY - containerRect.top - containerHeight/2; 
            buttonContainer.style.left = `${X}px`;
            buttonContainer.style.top = `${Y}px`;
        });
    });
};

const create_paired_swipers = () => {
    const slider = document.querySelector('.mySwiper');
    const swiper1 = new Swiper(slider, {
        slidesPerView: 'auto',
        freeMode: true,
        watchSlidesProgress: true,
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },
    });
    
    const cardSlider = document.querySelector('.cardSwiper');
    const swiper2 = new Swiper(cardSlider, {
        effect: "cards",
        grabCursor: true,
        spaceBetween: 100,
        thumbs: {
            swiper: swiper1,
        },
    });
    
    const slides = document.querySelectorAll('.mouseover');
    
    slides.forEach( (slide) => {
        slide.addEventListener('mouseover', () => {
            const index = Array.from(slides).indexOf(slide);
            swiper1.slideTo(index);
            swiper2.slideTo(index);
        });
    });
    
    swiper1.on('slideChange', () => {
        swiper2.slideTo(swiper1.activeIndex); 
    });
    
    swiper2.on('slideChange', () => {
        swiper1.slideTo(swiper2.activeIndex); 
    }); 
}

const what_on_swiper = () => {
    const swiper = new Swiper(".what_on_swiper", {
        watchSlidesProgress: true,
        slidesPerView: 1,
        breakpoints: {
            1000: {
                slidesPerView: 4,
            }
        }
    });
}

const gallery_swiper = () => {
    const swiper = new Swiper(".gallery_swiper", {
        slidesPerView: 'auto',
        spaceBetween: '21%',
        centeredSlides: true,
        preventClicks: true,
        loop:true, 
        autoplay: true,
        allowTouchMove: false,
    });
}

const read_more_button_toggle = () => {
    const read_more_buttons = document.querySelectorAll('.read_more');
    const swiperReplacementArticles = document.querySelectorAll('.swiper_replacement_article');
    if(!read_more_buttons) {
        return;
    }

    read_more_buttons.forEach((button, index) => {
        button.addEventListener('click', () => {
            swiperReplacementArticles[index].classList.toggle('open');
        });
    });
}

const dark_mode_toggle = () => {
    const sun_click = document.querySelectorAll('.sun');
    const moon_click = document.querySelectorAll('.moon');
    const theme = localStorage.getItem('theme');
    theme && document.body.classList.add(theme);

    
    moon_click.forEach((button) => {
        button.addEventListener('click', () => {
            document.body.classList.add('dark_mode');
            localStorage.setItem('theme', 'dark_mode');
        })
    })
    sun_click.forEach((button) => {
        button.addEventListener('click', () => {
            document.body.classList.remove('dark_mode');
            localStorage.removeItem('theme');
        })
    })
}

const hover_menu = () => {
    const menu = document.querySelector('.menu');
    if (!menu) {
        return;
    }
    const articles = document.querySelectorAll('.menu_article');

    articles.forEach((article) => {
        article.addEventListener('mouseover', () => article.classList.add('open'));
        article.addEventListener('mouseout', () => article.classList.remove('open'));

        const imageContainer = article.querySelector('.menu_left > div');
        const containerWidth = imageContainer.offsetWidth;
        const containerHeight = imageContainer.offsetHeight;

        article.addEventListener('mousemove', (e) => {
            const containerRect = article.getBoundingClientRect();
            const X = e.clientX - containerRect.left - containerWidth/2; 
            const Y = e.clientY - containerRect.top - containerHeight/2; 
            imageContainer.style.left = `${X}px`;
            imageContainer.style.top = `${Y}px`;
        });
    });
};

const private_hire_swiper = () => {
    const bigSwiper = new Swiper(".private_hire_swiper", {
        slidesPerView: 'auto',
        spaceBetween: '5%',
        centeredSlides: true,
        preventClicks: true,
        // loop:true, 
        // autoplay: false,
        allowTouchMove: false,
        thumbs: {
            swiper: {
                el: '.linked_swiper',
                slidesPerView: 'auto',
                allowTouchMove: true,
                slideToClickedSlide: true,
            },
        },
    });
};

const private_hire_button = () => {
    const parent_container = document.querySelector('.parent_container');
    if (!parent_container) {
        return;
    }
    const containers = document.querySelectorAll('.gallery_img');
    containers.forEach((container) => {
        const buttonContainer = container.querySelector('.gallery_img > a');
        const containerWidth = buttonContainer.offsetWidth;
        const containerHeight = buttonContainer.offsetHeight;
        container.addEventListener('mousemove', (e) => {
            const containerRect = container.getBoundingClientRect();
            const X = e.clientX - containerRect.left - containerWidth/2; 
            const Y = e.clientY - containerRect.top - containerHeight/2; 
            buttonContainer.style.left = `${X}px`;
            buttonContainer.style.top = `${Y}px`;
        });
    });
};

const lerp = (current, target, factor) =>
    current * (1 - factor) + target * factor;

let mousePosition = { x: 0, y: 0 };
window.addEventListener("mousemove", (e) => {
    mousePosition.x = e.pageX;
    mousePosition.y = e.pageY;
});

const calculateDistance = (x1, y1, x2, y2) => {
    return Math.hypot(x1 - x2, y1 - y2);
};

class MagneticObject {
    constructor(domElement) {
        this.domElement = domElement;
        this.boundingClientRect = this.domElement.getBoundingClientRect();
        this.triggerArea = 350;
        this.interpolationFactor = 0.1;  // Lower factor for smoother movement

        this.lerpingData = {
            x: { current: 0, target: 0 },
            y: { current: 0, target: 0 },
        };

        this.resize = this.resize.bind(this);
        this.render = this.render.bind(this);

        window.addEventListener("resize", this.resize);
        this.render();
    }

    resize() {
        this.boundingClientRect = this.domElement.getBoundingClientRect();
    }

    render() {
        const distanceFromMouseToCenter = calculateDistance(
            mousePosition.x,
            mousePosition.y,
            this.boundingClientRect.left + this.boundingClientRect.width / 2,
            this.boundingClientRect.top + this.boundingClientRect.height / 2
        );

        let targetHolder = { x: 0, y: 0 };

        if (distanceFromMouseToCenter < this.triggerArea) {
            this.domElement.classList.add("focus");
            targetHolder.x =
                (mousePosition.x -
                    (this.boundingClientRect.left +
                        this.boundingClientRect.width / 2)) *
                0.2;
            targetHolder.y =
                (mousePosition.y -
                    (this.boundingClientRect.top +
                        this.boundingClientRect.height / 2)) *
                0.2;
        } else {
            this.domElement.classList.remove("focus");
        }

        this.lerpingData.x.target = targetHolder.x;
        this.lerpingData.y.target = targetHolder.y;

        for (const axis in this.lerpingData) {
            this.lerpingData[axis].current = lerp(
                this.lerpingData[axis].current,
                this.lerpingData[axis].target,
                this.interpolationFactor
            );
        }

        this.domElement.style.transform = `translate(${this.lerpingData.x.current}px, ${this.lerpingData.y.current}px)`;

        window.requestAnimationFrame(this.render);
    }
}
document.addEventListener("DOMContentLoaded", () => {
    const button = document.querySelector(".book_badge");
    if (button) {
        new MagneticObject(button);
    }
});

window.addEventListener('DOMContentLoaded', burger_menu);
window.addEventListener('DOMContentLoaded', sticky_nav);
window.addEventListener('DOMContentLoaded', featured_list_fade_in_out);
window.addEventListener('DOMContentLoaded', featured_hover_button);
window.addEventListener('DOMContentLoaded', create_paired_swipers);
window.addEventListener('DOMContentLoaded', what_on_swiper);
window.addEventListener('DOMContentLoaded', gallery_swiper);
window.addEventListener('DOMContentLoaded', read_more_button_toggle);
window.addEventListener('DOMContentLoaded', dark_mode_toggle);
window.addEventListener('DOMContentLoaded', hover_menu);
window.addEventListener('DOMContentLoaded', private_hire_swiper);
window.addEventListener('DOMContentLoaded', private_hire_button);
window.addEventListener('DOMContentLoaded', whats_on_slide_hover_button);