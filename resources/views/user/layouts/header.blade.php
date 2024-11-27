<title>Eduport - LMS, Education and Course Theme</title>

<!-- Meta Tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="author" content="Webestica.com">
<meta name="description" content="Eduport- LMS, Education and Course Theme">

<!-- Dark mode -->
<script>
    const storedTheme = localStorage.getItem('theme')

    const getPreferredTheme = () => {
        if (storedTheme) {
            return storedTheme
        }
        return window.matchMedia('(prefers-color-scheme: light)').matches ? 'light' : 'light'
    }

    const setTheme = function(theme) {
        if (theme === 'auto' && window.matchMedia('(prefers-color-scheme: dark)').matches) {
            document.documentElement.setAttribute('data-bs-theme', 'dark')
        } else {
            document.documentElement.setAttribute('data-bs-theme', theme)
        }
    }

    setTheme(getPreferredTheme())

    window.addEventListener('DOMContentLoaded', () => {
        var el = document.querySelector('.theme-icon-active');
        if (el != 'undefined' && el != null) {
            const showActiveTheme = theme => {
                const activeThemeIcon = document.querySelector('.theme-icon-active use')
                const btnToActive = document.querySelector(`[data-bs-theme-value="${theme}"]`)
                const svgOfActiveBtn = btnToActive.querySelector('.mode-switch use').getAttribute('href')

                document.querySelectorAll('[data-bs-theme-value]').forEach(element => {
                    element.classList.remove('active')
                })

                btnToActive.classList.add('active')
                activeThemeIcon.setAttribute('href', svgOfActiveBtn)
            }

            window.matchMedia('(prefers-color-scheme: dark)').addEventListener('change', () => {
                if (storedTheme !== 'light' || storedTheme !== 'dark') {
                    setTheme(getPreferredTheme())
                }
            })

            showActiveTheme(getPreferredTheme())

            document.querySelectorAll('[data-bs-theme-value]')
                .forEach(toggle => {
                    toggle.addEventListener('click', () => {
                        const theme = toggle.getAttribute('data-bs-theme-value')
                        localStorage.setItem('theme', theme)
                        setTheme(theme)
                        showActiveTheme(theme)
                    })
                })

        }
    })
</script>



<!-- Google Font -->
<link rel="preconnect" href="https://fonts.googleapis.com/">
<link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
<link rel="stylesheet"
    href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;700&amp;family=Roboto:wght@400;500;700&amp;display=swap">

<!-- Plugins CSS -->
<link rel="stylesheet" type="text/css"
    href="{{ asset('backend/frontassets/assets/vendor/font-awesome/css/all.min.css') }}">
<link rel="stylesheet" type="text/css"
    href="{{ asset('backend/frontassets/assets/vendor/bootstrap-icons/bootstrap-icons.css') }}">
<link rel="stylesheet" type="text/css"
    href="{{ asset('backend/frontassets/assets/vendor/tiny-slider/tiny-slider.css') }}">
<link rel="stylesheet" type="text/css"
    href="{{ asset('backend/frontassets/assets/vendor/glightbox/css/glightbox.css') }}">

<!-- Favicon -->
<link rel="shortcut icon" href="{{ asset('backend/frontassets/assets/images/favicon.ico') }}">

<!-- Theme CSS -->
<link rel="stylesheet" type="text/css" href="{{ asset('backend/frontassets/assets/css/style.css') }}">



<script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
        dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'G-7N7LGGGWT1');
</script>


<!--social share-->
<meta property="og:title" content="@yield('og:title', 'Default Title')">
<meta property="og:description" content="@yield('og:description', 'Default Description')">
<meta property="og:image" content="@yield('og:image', asset('default-thumbnail.jpg'))">
<meta property="og:url" content="{{ url()->current() }}">
<meta property="og:type" content="website">

<!-- Twitter Card -->
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="@yield('og:title', 'Default Title')">
<meta name="twitter:description" content="@yield('og:description', 'Default Description')">
<meta name="twitter:image" content="@yield('og:image', asset('default-thumbnail.jpg'))">



<!--csrf-->
<meta name="csrf-token" content="{{ csrf_token() }}">
