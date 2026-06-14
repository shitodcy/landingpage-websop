document.addEventListener('DOMContentLoaded', () => {

    // SCROLL REVEAL — IntersectionObserver
    const revealObserver = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('active');
                revealObserver.unobserve(entry.target);
            }
        });
    }, {
        threshold: 0.08,
        rootMargin: '0px 0px -40px 0px'
    });

    document.querySelectorAll('.reveal, .reveal-left, .reveal-right, .reveal-scale').forEach(el => {
        revealObserver.observe(el);
    });


    // NAVBAR SCROLL EFFECT
    const navbar = document.getElementById('navbar');
    if (navbar) {
        const handleNavScroll = () => {
            if (window.scrollY > 60) {
                navbar.classList.add('scrolled');
            } else {
                navbar.classList.remove('scrolled');
            }
        };
        window.addEventListener('scroll', handleNavScroll, { passive: true });
        handleNavScroll(); // initial check
    }


    // MOBILE HAMBURGER MENU
    const hamburger = document.getElementById('hamburger');
    const mobileMenu = document.getElementById('mobile-menu');

    if (hamburger && mobileMenu) {
        hamburger.addEventListener('click', () => {
            const isOpen = mobileMenu.classList.contains('open');
            mobileMenu.classList.toggle('open');

            const spans = hamburger.querySelectorAll('.hamburger-line');
            if (!isOpen) {
                spans[0].style.transform = 'rotate(45deg) translate(6px, 6px)';
                spans[1].style.opacity = '0';
                spans[2].style.transform = 'rotate(-45deg) translate(6px, -6px)';
            } else {
                spans[0].style.transform = '';
                spans[1].style.opacity = '1';
                spans[2].style.transform = '';
            }
        });

        // Close mobile menu on link click
        mobileMenu.querySelectorAll('a').forEach(link => {
            link.addEventListener('click', () => {
                mobileMenu.classList.remove('open');
                const spans = hamburger.querySelectorAll('.hamburger-line');
                spans[0].style.transform = '';
                spans[1].style.opacity = '1';
                spans[2].style.transform = '';
            });
        });
    }


    // SMOOTH SCROLL FOR ANCHOR LINKS
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            const href = this.getAttribute('href');
            if (href === '#') return;
            e.preventDefault();
            const target = document.querySelector(href);
            if (target) {
                const navHeight = navbar ? navbar.offsetHeight : 0;
                const targetPos = target.getBoundingClientRect().top + window.scrollY - navHeight - 10;
                window.scrollTo({ top: targetPos, behavior: 'smooth' });
            }
        });
    });


    // TAB FILTER FOR MENU SECTIONS
    const tabBtns = document.querySelectorAll('.tab-btn');
    const menuSections = document.querySelectorAll('.menu-section');

    tabBtns.forEach(btn => {
        btn.addEventListener('click', () => {
            // Update active tab
            tabBtns.forEach(b => b.classList.remove('active'));
            btn.classList.add('active');

            const filter = btn.dataset.filter;

            menuSections.forEach(section => {
                if (filter === 'semua' || section.dataset.category === filter) {
                    section.style.display = '';
                    // Make sure items are visible
                    section.querySelectorAll('.reveal, .reveal-left, .reveal-right, .reveal-scale').forEach(el => {
                        el.classList.add('active');
                    });
                } else {
                    section.style.display = 'none';
                }
            });
        });
    });


    // PARALLAX EFFECT ON HERO IMAGE
    const parallaxEl = document.querySelector('.parallax-bg');
    if (parallaxEl) {
        let ticking = false;
        window.addEventListener('scroll', () => {
            if (!ticking) {
                window.requestAnimationFrame(() => {
                    const scrolled = window.scrollY;
                    if (scrolled < window.innerHeight) {
                        parallaxEl.style.transform = `translateY(${scrolled * 0.12}px)`;
                    }
                    ticking = false;
                });
                ticking = true;
            }
        }, { passive: true });
    }


    // ACTIVE NAV LINK HIGHLIGHT ON SCROLL
    const navSections = document.querySelectorAll('section[id]');
    const navLinks = document.querySelectorAll('.nav-link');

    if (navSections.length && navLinks.length) {
        const updateActiveLink = () => {
            const scrollPos = window.scrollY + 120;

            navSections.forEach(section => {
                const top = section.offsetTop;
                const height = section.offsetHeight;
                const id = section.getAttribute('id');

                if (scrollPos >= top && scrollPos < top + height) {
                    navLinks.forEach(link => {
                        link.classList.remove('active-link');
                        if (link.getAttribute('href') === `#${id}`) {
                            link.classList.add('active-link');
                        }
                    });
                }
            });
        };

        window.addEventListener('scroll', updateActiveLink, { passive: true });
        updateActiveLink();
    }


    // IMAGE LAZY LOAD FADE-IN
    const images = document.querySelectorAll('img[loading="lazy"]');
    images.forEach(img => {
        img.style.opacity = '0';
        img.style.transition = 'opacity 0.5s ease';
        if (img.complete) {
            img.style.opacity = '1';
        } else {
            img.addEventListener('load', () => {
                img.style.opacity = '1';
            });
            img.addEventListener('error', () => {
                img.style.opacity = '1';
            });
        }
    });

});
