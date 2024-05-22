const burger = document.getElementById('burger');
const navList = document.getElementById('nav-list');
const header = document.getElementById('header');
const languageToggle = document.getElementById('language-toggle');

burger.addEventListener('click', () => {
    burger.classList.toggle('active');
    navList.classList.toggle('active');
});

window.addEventListener('scroll', () => {
    if (window.scrollY > 50) {
        header.classList.add('scrolled');
    } else {
        header.classList.remove('scrolled');
    }
});

languageToggle.addEventListener('click', () => {
    if (languageToggle.textContent === 'Slovak') {
        window.location.href = '?lang=sl';
    } else {
        window.location.href = '?lang=en';
    }
});

document.addEventListener('DOMContentLoaded', () => {
    const urlParams = new URLSearchParams(window.location.search);
    const lang = urlParams.get('lang');
    if (lang === 'sl') {
        languageToggle.textContent = 'English';
    } else {
        languageToggle.textContent = 'Slovak';
    }
});

const fadeInElements = document.querySelectorAll('.header-content, .parallax-content, .information');

const observerOptions = {
    threshold: 0.1
};

const observer = new IntersectionObserver((entries, observer) => {
    entries.forEach(entry => {
        if (entry.isIntersecting) {
            entry.target.style.opacity = 1;
            entry.target.style.transform = 'translateY(0)';
            observer.unobserve(entry.target);
        }
    });
}, observerOptions);

fadeInElements.forEach(element => {
    observer.observe(element);
});
