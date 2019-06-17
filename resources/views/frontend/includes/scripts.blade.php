<!-- JS Global Compulsory -->
<script src="{{ asset('assets/vendor/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('assets/vendor/jquery-migrate/jquery-migrate.min.js') }}"></script>
<script src="{{ asset('assets/vendor/popper.min.js') }}"></script>
<script src="{{ asset('assets/vendor/bootstrap/bootstrap.min.js') }}"></script>

<!-- JS Implementing Plugins -->
<script src="{{ asset('assets/vendor/hs-megamenu/src/hs.megamenu.js') }}"></script>
<script src="{{ asset('assets/vendor/dzsparallaxer/dzsparallaxer.js') }}"></script>
<script src="{{ asset('assets/vendor/dzsparallaxer/dzsscroller/scroller.js') }}"></script>
<script src="{{ asset('assets/vendor/dzsparallaxer/advancedscroller/plugin.js') }}"></script>
<script src="{{ asset('assets/vendor/fancybox/jquery.fancybox.min.js') }}"></script>
<script src="{{ asset('assets/vendor/slick-carousel/slick/slick.js') }}"></script>

<script src="{{ asset('assets/vendor/revolution-slider/revolution/js/jquery.themepunch.tools.min.js') }}"></script>
<script src="{{ asset('assets/vendor/revolution-slider/revolution/js/jquery.themepunch.revolution.min.js') }}"></script>

<script src="{{ asset('assets/vendor/revolution-slider/revolution-addons/slicey/js/revolution.addon.slicey.min.js') }}"></script>

<script src="{{ asset('assets/vendor/revolution-slider/revolution/js/extensions/revolution.extension.actions.min.js') }}"></script>
<script src="{{ asset('assets/vendor/revolution-slider/revolution/js/extensions/revolution.extension.carousel.min.js') }}"></script>
<script src="{{ asset('assets/vendor/revolution-slider/revolution/js/extensions/revolution.extension.kenburn.min.js') }}"></script>
<script src="{{ asset('assets/vendor/revolution-slider/revolution/js/extensions/revolution.extension.layeranimation.min.js') }}"></script>
<script src="{{ asset('assets/vendor/revolution-slider/revolution/js/extensions/revolution.extension.migration.min.js') }}"></script>
<script src="{{ asset('assets/vendor/revolution-slider/revolution/js/extensions/revolution.extension.navigation.min.js') }}"></script>
<script src="{{ asset('assets/vendor/revolution-slider/revolution/js/extensions/revolution.extension.parallax.min.js') }}"></script>
<script src="{{ asset('assets/vendor/revolution-slider/revolution/js/extensions/revolution.extension.slideanims.min.js') }}"></script>
<script src="{{ asset('assets/vendor/revolution-slider/revolution/js/extensions/revolution.extension.video.min.js') }}"></script>

<!-- JS Unify -->
<script src="{{ asset('global/js/hs.core.js') }}"></script>
<script src="{{ asset('global/js/components/hs.header.js') }}"></script>
<script src="{{ asset('global/js/helpers/hs.hamburgers.js') }}"></script>
<script src="{{ asset('global/js/components/hs.dropdown.js') }}"></script>
<script src="{{ asset('global/js/components/hs.popup.js') }}"></script>
<script src="{{ asset('global/js/components/hs.carousel.js') }}"></script>
<script src="{{ asset('global/js/components/hs.go-to.js') }}"></script>

<!--- MAP --->
<script  src="{{ asset('assets/vendor/jquery.easypin.custom/dist/jquery.easypin.js') }}"></script>
<script  src="{{ asset('global/js/components/hs.map.pin.js') }}"></script>

<!-- JS Customization -->
<script src="{{ asset('global/js/custom.js') }}"></script>

<!-- JS Plugins Init. -->
<script>

    $('.map-container').click(function(){
        $(this).find('iframe').addClass('clicked')
    })
        .mouseleave(function(){
            $(this).find('iframe').removeClass('clicked')
        });

    function inicializar() {
        //Opciones del mapa
        var OpcionesMapa = {
            center: new google.maps.LatLng(25.832078, -80.257843),
            zoom: 16
        };

        var miMapa;
        //constructor
        miMapa = new google.maps.Map(document.getElementById('mapa'), OpcionesMapa);

        //Añadimos el marcador
        var Marcador = new google.maps.Marker({
            position: new google.maps.LatLng(25.832078, -80.257843),
            map: miMapa,
            title:"Santa Barbara"
        });
    }

    $(document).on('ready', function () {


        var tpj = jQuery,
            revapi26;

        tpj(document).ready(function () {
            if (tpj("#rev_slider_26_1").revolution == undefined) {
                revslider_showDoubleJqueryError("#rev_slider_26_1");
            } else {
                revapi26 = tpj("#rev_slider_26_1").show().revolution({
                    sliderType: "standard",
                    jsFileLocation: "revolution/js/",
                    sliderLayout: "fullscreen",
                    dottedOverlay: "none",
                    delay: 9000,
                    navigation: {
                        keyboardNavigation: "off",
                        keyboard_direction: "horizontal",
                        mouseScrollNavigation: "off",
                        mouseScrollReverse: "default",
                        onHoverStop: "off",
                        touch: {
                            touchenabled: "on",
                            touchOnDesktop: "off",
                            swipe_threshold: 75,
                            swipe_min_touches: 1,
                            swipe_direction: "horizontal",
                            drag_block_vertical: false
                        },
                        arrows: {
                            style: "uranus",
                            enable: true,
                            hide_onmobile: true,
                            hide_under: 778,
                            hide_onleave: false,
                            tmp: '',
                            left: {
                                h_align: "left",
                                v_align: "center",
                                h_offset: 15,
                                v_offset: 0
                            },
                            right: {
                                h_align: "right",
                                v_align: "center",
                                h_offset: 15,
                                v_offset: 0
                            }
                        },
                        bullets: {
                            enable: true,
                            hide_onmobile: false,
                            style: "bullet-bar",
                            hide_onleave: false,
                            direction: "horizontal",
                            h_align: "center",
                            v_align: "bottom",
                            h_offset: 0,
                            v_offset: 30,
                            space: 5,
                            tmp: ''
                        }
                    },
                    responsiveLevels: [1240, 1024, 778, 480],
                    visibilityLevels: [1240, 1024, 778, 480],
                    gridwidth: [1240, 1024, 778, 480],
                    gridheight: [868, 768, 960, 720],
                    lazyType: "none",
                    parallax: {
                        type: "scroll",
                        origo: "slidercenter",
                        speed: 2000,
                        levels: [5, 10, 15, 20, 25, 30, 35, 40, 45, 46, 47, 48, 49, 50, 51, 55]
                    },
                    shadow: 0,
                    spinner: "off",
                    stopLoop: "off",
                    stopAfterLoops: -1,
                    stopAtSlide: -1,
                    shuffle: "off",
                    autoHeight: "off",
                    fullScreenAutoWidth: "off",
                    fullScreenAlignForce: "off",
                    fullScreenOffsetContainer: "",
                    fullScreenOffset: "60px",
                    hideThumbsOnMobile: "off",
                    hideSliderAtLimit: 0,
                    hideCaptionAtLimit: 0,
                    hideAllCaptionAtLilmit: 0,
                    debugMode: false,
                    fallbacks: {
                        simplifyAll: "off",
                        nextSlideOnWindowFocus: "off",
                        disableFocusListener: false
                    }
                });
            }
        });


        // initialization of header
        $.HSCore.components.HSHeader.init($('#js-header'));
        $.HSCore.helpers.HSHamburgers.init('.hamburger');

        // initialization of HSMegaMenu component
        $('.js-mega-menu').HSMegaMenu({
            event: 'hover',
            pageContainer: $('.container'),
            breakpoint: 991
        });

        // initialization of HSDropdown component
        $.HSCore.components.HSDropdown.init($('[data-dropdown-target]'), {
            afterOpen: function () {
                $(this).find('input[type="search"]').focus();
            }
        });

        // initialization of popups
        $.HSCore.components.HSPopup.init('.js-fancybox');

        // initialization of carousel
        $.HSCore.components.HSCarousel.init('.js-carousel');

        // initialization of go to
        $.HSCore.components.HSGoTo.init('.js-go-to');
    });
</script>

@stack('custom_scripts')
