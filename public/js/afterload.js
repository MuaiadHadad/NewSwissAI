function onloadbarar() {
    /**
     * Template Name: Sailor
     * Template URL: https://bootstrapmade.com/sailor-free-bootstrap-theme/
     * Updated: Aug 07 2024 with Bootstrap v5.3.3
     * Author: BootstrapMade.com
     * License: https://bootstrapmade.com/license/
     */

    (function() {
        "use strict";

        /**
         * Apply .scrolled class to the body as the page is scrolled down
         */
        function toggleScrolled() {
            const selectBody = document.querySelector('body');
            const selectHeader = document.querySelector('#header');
            if (!selectHeader.classList.contains('scroll-up-sticky') && !selectHeader.classList.contains('sticky-top') && !selectHeader.classList.contains('fixed-top')) return;
            window.scrollY > 100 ? selectBody.classList.add('scrolled') : selectBody.classList.remove('scrolled');
        }

        document.addEventListener('scroll', toggleScrolled);
        window.addEventListener('load', toggleScrolled);

        /**
         * Mobile nav toggle
         */
        const mobileNavToggleBtn = document.querySelector('.mobile-nav-toggle');

        function mobileNavToogle() {
            document.querySelector('body').classList.toggle('mobile-nav-active');
            mobileNavToggleBtn.classList.toggle('bi-list');
            mobileNavToggleBtn.classList.toggle('bi-x');
        }
        mobileNavToggleBtn.addEventListener('click', mobileNavToogle);

        /**
         * Hide mobile nav on same-page/hash links
         */
        document.querySelectorAll('#navmenu a').forEach(navmenu => {
            navmenu.addEventListener('click', () => {
                if (document.querySelector('.mobile-nav-active')) {
                    mobileNavToogle();
                }
            });

        });

        /**
         * Toggle mobile nav dropdowns
         */
        document.querySelectorAll('.navmenu .toggle-dropdown').forEach(navmenu => {
            navmenu.addEventListener('click', function(e) {
                e.preventDefault();
                this.parentNode.classList.toggle('active');
                this.parentNode.nextElementSibling.classList.toggle('dropdown-active');
                e.stopImmediatePropagation();
            });
        });

        /**
         * Preloader
         */
        const preloader = document.querySelector('#preloader');
        if (preloader) {
            window.addEventListener('load', () => {
                preloader.remove();
            });
        }

        /**
         * Scroll top button
         */
        let scrollTop = document.querySelector('.scroll-top');

        function toggleScrollTop() {
            if (scrollTop) {
                window.scrollY > 100 ? scrollTop.classList.add('active') : scrollTop.classList.remove('active');
            }
        }
        scrollTop.addEventListener('click', (e) => {
            e.preventDefault();
            window.scrollTo({
                top: 0,
                behavior: 'smooth'
            });
        });

        window.addEventListener('load', toggleScrollTop);
        document.addEventListener('scroll', toggleScrollTop);

        /**
         * Animation on scroll function and init
         */
        function aosInit() {
            AOS.init({
                duration: 600,
                easing: 'ease-in-out',
                once: true,
                mirror: false
            });
        }
        window.addEventListener('load', aosInit);

        /**
         * Auto generate the carousel indicators
         */
        document.querySelectorAll('.carousel-indicators').forEach((carouselIndicator) => {
            carouselIndicator.closest('.carousel').querySelectorAll('.carousel-item').forEach((carouselItem, index) => {
                if (index === 0) {
                    carouselIndicator.innerHTML += `<li data-bs-target="#${carouselIndicator.closest('.carousel').id}" data-bs-slide-to="${index}" class="active"></li>`;
                } else {
                    carouselIndicator.innerHTML += `<li data-bs-target="#${carouselIndicator.closest('.carousel').id}" data-bs-slide-to="${index}"></li>`;
                }
            });
        });

        /**
         * Initiate glightbox
         */
        const glightbox = GLightbox({
            selector: '.glightbox'
        });

        /**
         * Init isotope layout and filters
         */
        document.querySelectorAll('.isotope-layout').forEach(function(isotopeItem) {
            let layout = isotopeItem.getAttribute('data-layout') ?? 'masonry';
            let filter = isotopeItem.getAttribute('data-default-filter') ?? '*';
            let sort = isotopeItem.getAttribute('data-sort') ?? 'original-order';

            let initIsotope;
            imagesLoaded(isotopeItem.querySelector('.isotope-container'), function() {
                initIsotope = new Isotope(isotopeItem.querySelector('.isotope-container'), {
                    itemSelector: '.isotope-item',
                    layoutMode: layout,
                    filter: filter,
                    sortBy: sort
                });
            });

            isotopeItem.querySelectorAll('.isotope-filters li').forEach(function(filters) {
                filters.addEventListener('click', function() {
                    isotopeItem.querySelector('.isotope-filters .filter-active').classList.remove('filter-active');
                    this.classList.add('filter-active');
                    initIsotope.arrange({
                        filter: this.getAttribute('data-filter')
                    });
                    if (typeof aosInit === 'function') {
                        aosInit();
                    }
                }, false);
            });

        });

        /**
         * Initiate Pure Counter
         */
        new PureCounter();

        /**
         * Animate the skills items on reveal
         */
        let skillsAnimation = document.querySelectorAll('.skills-animation');
        skillsAnimation.forEach((item) => {
            new Waypoint({
                element: item,
                offset: '80%',
                handler: function(direction) {
                    let progress = item.querySelectorAll('.progress .progress-bar');
                    progress.forEach(el => {
                        el.style.width = el.getAttribute('aria-valuenow') + '%';
                    });
                }
            });
        });

        /**
         * Init swiper sliders
         */
        function initSwiper() {
            document.querySelectorAll(".init-swiper").forEach(function(swiperElement) {
                let config = JSON.parse(
                    swiperElement.querySelector(".swiper-config").innerHTML.trim()
                );

                if (swiperElement.classList.contains("swiper-tab")) {
                    initSwiperWithCustomPagination(swiperElement, config);
                } else {
                    new Swiper(swiperElement, config);
                }
            });
        }

        window.addEventListener("load", initSwiper);

    })();

    const services = {
        'custom-ai': `
    <img src="img/services.jpg" alt="Custom AI Development" class="img-fluid services-img">
    <h3>Custom AI Development</h3>
    <p>We build AI systems from the ground up, tailored to your unique business processes and data, enabling automation and intelligent decision-making.</p>
    <ul>
      <li><i class="bi bi-check-circle"></i> End-to-end AI solution architecture.</li>
      <li><i class="bi bi-check-circle"></i> Custom model training and deployment.</li>
      <li><i class="bi bi-check-circle"></i> Integration with existing software ecosystems.</li>
    </ul>`,

        'analytics': `
    <img src="img/analytics.jpg" alt="AI-Powered Analytics" class="img-fluid services-img">
    <h3>AI-Powered Analytics</h3>
    <p>Unlock insights from your data with predictive analytics, dashboards, and advanced reporting powered by machine learning algorithms.</p>
    <ul>
      <li><i class="bi bi-check-circle"></i> Real-time data visualization.</li>
      <li><i class="bi bi-check-circle"></i> Predictive modeling and forecasting.</li>
      <li><i class="bi bi-check-circle"></i> KPI tracking and performance optimization.</li>
    </ul>`,

        'chatbots': `
    <img src="img/chatbot.jpg" alt="AI Chatbots" class="img-fluid services-img">
    <h3>AI-Powered Chatbots</h3>
    <p>Enhance customer engagement and support with intelligent chatbots trained on your business domain and language.</p>
    <ul>
      <li><i class="bi bi-check-circle"></i> Natural language understanding (NLU).</li>
      <li><i class="bi bi-check-circle"></i> Multi-channel integration (web, WhatsApp, Messenger).</li>
      <li><i class="bi bi-check-circle"></i> 24/7 automated customer service.</li>
    </ul>`,

        'fine-tuning': `
    <img src="img/fine-tuning.jpg" alt="AI Model Fine-Tuning" class="img-fluid services-img">
    <h3>AI Model Fine-Tuning</h3>
    <p>Improve performance and relevance of pre-trained models by fine-tuning them on your specific data and objectives.</p>
    <ul>
      <li><i class="bi bi-check-circle"></i> Domain-specific language adaptation.</li>
      <li><i class="bi bi-check-circle"></i> Hyperparameter tuning for optimization.</li>
      <li><i class="bi bi-check-circle"></i> Continuous retraining strategies.</li>
    </ul>`,

        'ml-consulting': `
    <img src="img/consulting.jpg" alt="ML Consulting" class="img-fluid services-img">
    <h3>Machine Learning Consulting</h3>
    <p>Strategic guidance on how to apply ML to solve real-world problems, reduce costs, and increase efficiency.</p>
    <ul>
      <li><i class="bi bi-check-circle"></i> Feasibility analysis and roadmap creation.</li>
      <li><i class="bi bi-check-circle"></i> Model selection and validation.</li>
      <li><i class="bi bi-check-circle"></i> Technology stack recommendations.</li>
    </ul>`,

        'security': `
    <img src="img/security.jpg" alt="AI Security" class="img-fluid services-img">
    <h3>AI Security & Compliance</h3>
    <p>Protect your AI systems with secure design, access controls, and compliance with ethical and legal standards.</p>
    <ul>
      <li><i class="bi bi-check-circle"></i> Data privacy and GDPR compliance.</li>
      <li><i class="bi bi-check-circle"></i> Adversarial attack resistance.</li>
      <li><i class="bi bi-check-circle"></i> Transparent and explainable AI.</li>
    </ul>`,

        'automation': `
    <img src="img/automation.jpg" alt="Automation" class="img-fluid services-img">
    <h3>Automation Solutions</h3>
    <p>Automate repetitive tasks and workflows using AI-based process automation tailored to your business logic.</p>
    <ul>
      <li><i class="bi bi-check-circle"></i> Robotic Process Automation (RPA).</li>
      <li><i class="bi bi-check-circle"></i> AI-powered decision engines.</li>
      <li><i class="bi bi-check-circle"></i> End-to-end digital transformation.</li>
    </ul>`,

        'strategy': `
    <img src="img/strategy.jpg" alt="AI Strategy" class="img-fluid services-img">
    <h3>AI Consulting & Strategy</h3>
    <p>Develop long-term AI adoption strategies aligned with your organization’s vision and digital roadmap.</p>
    <ul>
      <li><i class="bi bi-check-circle"></i> AI readiness assessment.</li>
      <li><i class="bi bi-check-circle"></i> Strategic planning and governance.</li>
      <li><i class="bi bi-check-circle"></i> Change management and training.</li>
    </ul>`,

        'custom-solutions': `
    <img src="img/custom-solutions.jpg" alt="Custom AI Solutions" class="img-fluid services-img">
    <h3>Custom AI Solutions</h3>
    <p>Design and implement AI features that address your exact use case — from prototype to production.</p>
    <ul>
      <li><i class="bi bi-check-circle"></i> Rapid prototyping and MVPs.</li>
      <li><i class="bi bi-check-circle"></i> Scalable backend systems.</li>
      <li><i class="bi bi-check-circle"></i> User-centered design and deployment.</li>
    </ul>`
    };
    function loadServiceFromURL() {
        const params = new URLSearchParams(window.location.search);
        const serviceKey = params.get('service');

        if (serviceKey && services[serviceKey]) {
            document.getElementById('service-content').innerHTML = services[serviceKey];

            // Marcar ativo na sidebar
            document.querySelectorAll('.services-list a').forEach(link => {
                link.classList.remove('active');
                if (link.getAttribute('onclick')?.includes(serviceKey)) {
                    link.classList.add('active');
                }
            });
        }
    }

// Permitir navegação local também
    function showService(key) {
        if (services[key]) {
            history.pushState({}, '', '?service=' + key);
            document.getElementById('service-content').innerHTML = services[key];

            document.querySelectorAll('.services-list a').forEach(link => {
                link.classList.remove('active');
                if (link.getAttribute('onclick')?.includes(key)) {
                    link.classList.add('active');
                }
            });
        }
    }

// Ao carregar a página
    document.addEventListener('DOMContentLoaded', loadServiceFromURL);

    (function () {
        // ----- Navegação entre passos do formulário -----
        const steps = document.querySelectorAll('.form-step');
        let currentStep = 0;

        function showStep(index) {
            steps.forEach((step, i) => {
                step.classList.toggle('d-none', i !== index);
            });
        }

        function nextStep() {
            if (validateStep(currentStep) && currentStep < steps.length - 1) {
                currentStep++;
                showStep(currentStep);
            }
        }

        function prevStep() {
            if (currentStep > 0) {
                currentStep--;
                showStep(currentStep);
            }
        }

        function validateStep(stepIndex) {
            const step = steps[stepIndex];
            const requiredInputs = step.querySelectorAll('[required]');
            const checkGroups = step.querySelectorAll('.custom-check');
            function isValidURL(url) {
                const pattern = new RegExp('^(https?:\\/\\/)?' + // protocolo opcional
                    '((([a-zA-Z\\d]([a-zA-Z\\d-]*[a-zA-Z\\d])*)\\.)+[a-zA-Z]{2,}|' + // domínio
                    'localhost|' + // localhost
                    '\\d{1,3}(\\.\\d{1,3}){3})' + // ou IP
                    '(\\:\\d+)?(\\/[-a-zA-Z\\d%_.~+]*)*' + // porta e caminho
                    '(\\?[;&a-zA-Z\\d%_.~+=-]*)?' + // query string
                    '(\\#[-a-zA-Z\\d_]*)?$', 'i'); // fragmento
                return !!pattern.test(url);
            }

            let valid = true;

            // Regex simples para email válido
            function isValidEmail(email) {
                const regex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
                return regex.test(email);
            }

            // Validar campos obrigatórios
            requiredInputs.forEach(input => {
                const value = input.value.trim();

                // Campos obrigatórios
                if (!value) {
                    input.classList.add('is-invalid');
                    valid = false;
                } else if (["linkedin", "github"].includes(input.name) && !isValidURL(value)) {
                    input.classList.add('is-invalid');
                    valid = false;
                } else {
                    input.classList.remove('is-invalid');
                }
            });
            const optionalInputs = step.querySelectorAll('input[name="portfolio"], input[name="website"]');

            optionalInputs.forEach(input => {
                const value = input.value.trim();
                if (value && !isValidURL(value)) {
                    input.classList.add('is-invalid');
                    valid = false;
                } else {
                    input.classList.remove('is-invalid');
                }
            });

            // Validar pelo menos um checkbox (por passo)
            const checkboxes = Array.from(checkGroups).filter(input => input.type === 'checkbox');
            const grouped = checkboxes.reduce((acc, checkbox) => {
                const name = checkbox.name;
                if (!acc[name]) acc[name] = [];
                acc[name].push(checkbox);
                return acc;
            }, {});

            const expertiseFeedback = document.getElementById('expertise-feedback');
            for (let name in grouped) {
                const group = grouped[name];
                const isAnyChecked = group.some(chk => chk.checked);

                if (!isAnyChecked) {
                    //group.forEach(chk => chk.classList.add("is-invalid"));
                    if (expertiseFeedback) expertiseFeedback.style.display = "block";
                    valid = false;
                } else {
                    //group.forEach(chk => chk.classList.remove("is-invalid"));
                    if (expertiseFeedback) expertiseFeedback.style.display = "none";
                }
            }
            const techFeedback = document.getElementById('tech-feedback');
            const techCheckboxes = Array.from(step.querySelectorAll('input[name="tech[]"]'));

            if (techCheckboxes.length) {
                const techSelected = techCheckboxes.some(chk => chk.checked);
                if (!techSelected) {
                    //techCheckboxes.forEach(chk => chk.classList.add('is-invalid'));
                    if (techFeedback) techFeedback.style.display = 'block';
                    valid = false;
                } else {
                    //techCheckboxes.forEach(chk => chk.classList.remove('is-invalid'));
                    if (techFeedback) techFeedback.style.display = 'none';
                }
            }
            const expFeedback = document.getElementById('exp-feedback');
            const expCheckboxes = Array.from(step.querySelectorAll('input[name="exp[]"]'));
            if (expCheckboxes.length) {
                const expSelected = expCheckboxes.some(chk => chk.checked);
                if (!expSelected) {
                    //techCheckboxes.forEach(chk => chk.classList.add('is-invalid'));
                    if (expFeedback) expFeedback.style.display = 'block';
                    valid = false;
                } else {
                    //techCheckboxes.forEach(chk => chk.classList.remove('is-invalid'));
                    if (expFeedback) expFeedback.style.display = 'none';
                }
            }

            return valid;
        }


        document.addEventListener("DOMContentLoaded", () => {
            showStep(currentStep);

            document.querySelectorAll('.btn-next').forEach(btn => {
                btn.addEventListener('click', nextStep);
            });

            document.querySelectorAll('.btn-back').forEach(btn => {
                btn.addEventListener('click', prevStep);
            });
        });

        // ----- Serviço com animação fade -----
        window.showService = function (key) {
            const container = document.getElementById("service-content");

            // remove classe ativa de todos os links
            document.querySelectorAll(".services-list a").forEach(link => link.classList.remove("active"));
            event.target.classList.add("active");

            // inicia animação de fade-out
            container.classList.add("fade-out");

            setTimeout(() => {
                container.innerHTML = services[key];

                container.classList.remove("fade-out");
                container.classList.add("fade-in");

                setTimeout(() => {
                    container.classList.remove("fade-in");
                }, 400);
            }, 300);
        }
    })();
    function updateFileName(input) {
        const fileName = input.files.length > 0 ? input.files[0].name : 'No file chosen';
        document.getElementById('file-name').innerText = fileName;
    }
    document.addEventListener('DOMContentLoaded', () => {
        const alerts = ['alert-success', 'alert-error', 'alert-errors', 'alert-cert-size'];

        alerts.forEach(id => {
            const alert = document.getElementById(id);
            if (alert) {
                setTimeout(() => {
                    alert.classList.remove('animate__fadeInDown');
                    alert.classList.add('animate__fadeOutUp');

                    setTimeout(() => {
                        alert.remove();
                    }, 1000);
                }, 30000); // 30s
            }
        });
    });


    function updateActiveMenu() {
        const path = window.location.pathname;
        const routes = {
            '/': 'index',
            '/about': 'about',
            '/service': 'service',
            '/blog': 'blog',
            '/careers': 'careers',
            '/contact': 'contact',
        };

        const currentRoute = routes[path] || '';

        document.querySelectorAll('a.nav-link').forEach(link => {
            const routeName = link.getAttribute('data-nav');
            link.classList.toggle('active', routeName === currentRoute);
        });
    }
    document.addEventListener("DOMContentLoaded", () => {
        document.querySelectorAll('input[type="number"]').forEach(input => {
            // Bloquear teclas inválidas
            input.addEventListener('keydown', function (e) {
                const invalidKeys = ["e", "E", "+", "-", "."];
                const allowedKeys = ["Backspace", "Delete", "ArrowLeft", "ArrowRight", "Tab"];

                if (
                    invalidKeys.includes(e.key) ||
                    (!allowedKeys.includes(e.key) && isNaN(Number(e.key)))
                ) {
                    e.preventDefault();
                }

                // Limita a 2 dígitos (permite apagar)
                const isNumber = e.key >= '0' && e.key <= '9';
                const isAllowed = allowedKeys.includes(e.key);
                if (isNumber && this.value.length >= 2 && !this.selectionStart !== this.selectionEnd) {
                    e.preventDefault();
                }
            });

            // Bloquear colagem inválida ou maior que 2 dígitos
            input.addEventListener('paste', function (e) {
                const pasteData = e.clipboardData.getData('text');
                if (!/^\d{1,2}$/.test(pasteData)) {
                    e.preventDefault();
                }
            });

            // Extra: limitar também no lado visual (para mobile/input scroll)
            input.setAttribute('maxlength', '2');
            input.setAttribute('min', '0');
            input.setAttribute('max', '99');
        });
    });


    document.addEventListener("DOMContentLoaded", () => {
        const phoneInput = document.querySelector("#phone");

        if (phoneInput) {
            const iti = window.intlTelInput(phoneInput, {
                initialCountry: "", // detecta via IP
                nationalMode: false, // permite digitar com código do país
                utilsScript: "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.20/js/utils.js",
                geoIpLookup: callback => {
                    fetch("https://ipapi.co/json")
                        .then(res => res.json())
                        .then(data => callback(data.country_code))
                        .catch(() => callback("us"));
                }
            });


            // Ao carregar a página, inserir código inicial
            setTimeout(() => {
                const dialCode = iti.getSelectedCountryData().dialCode;
                phoneInput.value = '+' + dialCode +' ';
            }, 300); // espera lib carregar corretamente

            // Bloquear caracteres inválidos
            phoneInput.addEventListener("keydown", function (e) {
                const allowedKeys = ["Backspace", "Delete", "ArrowLeft", "ArrowRight", "Tab"];
                if (
                    allowedKeys.includes(e.key) ||
                    (e.key >= "0" && e.key <= "9") ||
                    (e.key === "+" && this.selectionStart === 0)
                ) {
                    return;
                }
                e.preventDefault();
            });

            phoneInput.addEventListener("paste", function (e) {
                const pasted = e.clipboardData.getData("text");
                if (!/^\+?[0-9]*$/.test(pasted)) {
                    e.preventDefault();
                }
            });

            // Validação no submit
            phoneInput.form.addEventListener("submit", function (e) {
                if (!iti.isValidNumber()) {
                    phoneInput.classList.add("is-invalid");
                    e.preventDefault();
                } else {
                    phoneInput.classList.remove("is-invalid");
                    phoneInput.value = iti.getNumber();
                }
            });
        }
    });
    function setupPhoneInput() {
        const phoneInput = document.querySelector("#phone");
        if (!phoneInput || typeof window.intlTelInput !== "function") return;

        const iti = window.intlTelInput(phoneInput, {
            initialCountry: "",
            nationalMode: false,
            utilsScript: "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.20/js/utils.js",
            geoIpLookup: callback => {
                fetch("https://ipapi.co/json")
                    .then(res => res.json())
                    .then(data => callback(data.country_code))
                    .catch(() => callback("us"));
            }
        });

        // Aguarda 200ms e insere o código do país
        setTimeout(() => {
            const dialCode = iti.getSelectedCountryData().dialCode;
            if (phoneInput.value === "") {
                phoneInput.value = "+" + dialCode;
            }
        }, 200);



        // Bloquear letras e símbolos
        phoneInput.addEventListener("keydown", function (e) {
            const allowedKeys = ["Backspace", "Delete", "ArrowLeft", "ArrowRight", "Tab"];
            if (
                allowedKeys.includes(e.key) ||
                (e.key >= "0" && e.key <= "9") ||
                (e.key === "+" && this.selectionStart === 0)
            ) return;
            e.preventDefault();
        });

        phoneInput.addEventListener("paste", function (e) {
            const pasted = e.clipboardData.getData("text");
            if (!/^\+?[0-9]*$/.test(pasted)) {
                e.preventDefault();
            }
        });

        phoneInput.form.addEventListener("submit", function (e) {
            if (!iti.isValidNumber()) {
                phoneInput.classList.add("is-invalid");
                e.preventDefault();
            } else {
                phoneInput.classList.remove("is-invalid");
                phoneInput.value = iti.getNumber();
            }
        });
    }
}
