<?php wp_footer(); ?>
</body>
<!-- <script type="application/javascript">
    const body = document.getElementById('body');
    const sections = document.querySelectorAll('.section');
    const sectBtns = document.querySelectorAll('.controls');
    const sectBtn = document.querySelectorAll('.control');
    const allSections = document.querySelector('.main-content');
    const lightThemeBtn = document.querySelector(".theme-control-light");
    const darkThemeBtn = document.querySelector(".theme-control-dark");
    let element = document.body;

    window.addEventListener("load", (event) => {
        console.log("page is fully loaded");
        element.classList.add('dark-theme');
        darkThemeBtn.classList.add('active-btn');
    });

    function pageTransitions() {
        // Button Click Active Class
        for (let i = 0; i < sectBtn.length; i++) {
            sectBtn[i].addEventListener('click', function () {
                let currentBtn = document.querySelectorAll('.active-btn');
                currentBtn[0].className = currentBtn[0].className.replace(' active-btn', '');
                this.className += ' active-btn';
            });
        }

        // Sections Active Class
        allSections.addEventListener('click', function (e) {
            const id = e.target.dataset.id;
            if (id) {
                //Remove Selected Class From Other Buttons
                //sectBtns.forEach(function(btn){
                //    btn.classList.remove('active');
                //});

                //Add Active Class To Current Button Being Clicked
                //e.target.classList.add('active');

                //Hide Other Sections From Being Displayed And Display Current Section
                sections.forEach(function (section) {
                    section.classList.remove('active');
                });

                const element = document.getElementById(id);
                element.classList.add('active');
                switch (id) {
                    case 'home':
                        body.style.backgroundColor = 'var(--color-background-home)'
                        break;
                    case 'about':
                        body.style.backgroundColor = 'var(--color-background-about)'
                        break;
                    case 'portfolio':
                        body.style.backgroundColor = 'var(--color-background-portfolio)'
                        break;
                    case 'blogs':
                        body.style.backgroundColor = 'var(--color-background-blog)'
                        break;
                    case 'contact':
                        body.style.backgroundColor = 'var(--color-background-contact)'
                        break;
                    default:
                        break;
                }

            }
        });

        // Theme Switcher
        lightThemeBtn.addEventListener('click', () => {
            element.classList.remove('dark-theme');
            element.classList.add('light-theme');

            lightThemeBtn.classList.add('active-btn');
            darkThemeBtn.classList.remove('active-btn');
        });

        darkThemeBtn.addEventListener('click', () => {
            element.classList.remove('light-theme');
            element.classList.add('dark-theme');

            darkThemeBtn.classList.add('active-btn');
            lightThemeBtn.classList.remove('active-btn');
        });
    }

    pageTransitions();
</script> -->

</html>