<?php

/* @WebProfiler/Profiler/base_js.html.twig */
class __TwigTemplate_9e926962f0fcdf59c48d677c2dbadacf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<script>/*<![CDATA[*/
    Sfjs = (function() {
        \"use strict\";

        var noop = function() {},

            profilerStorageKey = 'sf2/profiler/',

            request = function(url, onSuccess, onError, payload, options) {
                var xhr = window.XMLHttpRequest ? new XMLHttpRequest() : new ActiveXObject('Microsoft.XMLHTTP');
                options = options || {};
                xhr.open(options.method || 'GET', url, true);
                xhr.setRequestHeader('X-Requested-With', 'XMLHttpRequest');
                xhr.onreadystatechange = function(state) {
                    if (4 === xhr.readyState && 200 === xhr.status) {
                        (onSuccess || noop)(xhr);
                    } else if (4 === xhr.readyState && xhr.status != 200) {
                        (onError || noop)(xhr);
                    }
                };
                xhr.send(payload || '');
            },

            hasClass = function(el, klass) {
                return el.className.match(new RegExp('\\\\b' + klass + '\\\\b'));
            },

            removeClass = function(el, klass) {
                el.className = el.className.replace(new RegExp('\\\\b' + klass + '\\\\b'), ' ');
            },

            addClass = function(el, klass) {
                if (!hasClass(el, klass)) { el.className += \" \" + klass; }
            },

            getPreference = function(name) {
                if (!window.localStorage) {
                    return null;
                }

                return localStorage.getItem(profilerStorageKey + name);
            },

            setPreference = function(name, value) {
                if (!window.localStorage) {
                    return null;
                }

                localStorage.setItem(profilerStorageKey + name, value);
            };

        return {
            hasClass: hasClass,

            removeClass: removeClass,

            addClass: addClass,

            getPreference: getPreference,

            setPreference: setPreference,

            request: request,

            load: function(selector, url, onSuccess, onError, options) {
                var el = document.getElementById(selector);

                if (el && el.getAttribute('data-sfurl') !== url) {
                    request(
                        url,
                        function(xhr) {
                            el.innerHTML = xhr.responseText;
                            el.setAttribute('data-sfurl', url);
                            removeClass(el, 'loading');
                            (onSuccess || noop)(xhr, el);
                        },
                        function(xhr) { (onError || noop)(xhr, el); },
                        options
                    );
                }

                return this;
            },

            toggle: function(selector, elOn, elOff) {
                var i,
                    style,
                    tmp = elOn.style.display,
                    el = document.getElementById(selector);

                elOn.style.display = elOff.style.display;
                elOff.style.display = tmp;

                if (el) {
                    el.style.display = 'none' === tmp ? 'none' : 'block';
                }

                return this;
            }
        }
    })();
/*]]>*/</script>
";
    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/base_js.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  91 => 35,  79 => 29,  75 => 28,  70 => 26,  66 => 25,  62 => 24,  50 => 15,  32 => 6,  26 => 3,  48 => 9,  41 => 8,  22 => 2,  24 => 2,  19 => 1,  541 => 226,  538 => 225,  534 => 224,  531 => 223,  526 => 220,  522 => 217,  519 => 216,  515 => 212,  512 => 211,  507 => 208,  504 => 207,  500 => 205,  491 => 202,  488 => 201,  483 => 200,  480 => 199,  474 => 194,  472 => 193,  470 => 192,  468 => 191,  466 => 190,  462 => 188,  459 => 187,  455 => 140,  452 => 139,  446 => 4,  434 => 233,  430 => 232,  424 => 230,  422 => 229,  418 => 227,  415 => 225,  413 => 223,  407 => 220,  403 => 218,  401 => 216,  396 => 213,  394 => 211,  391 => 210,  389 => 207,  386 => 206,  384 => 199,  380 => 197,  378 => 187,  364 => 176,  351 => 168,  344 => 166,  337 => 164,  331 => 163,  324 => 161,  317 => 159,  310 => 157,  303 => 155,  296 => 153,  288 => 147,  277 => 144,  273 => 142,  268 => 141,  266 => 139,  251 => 126,  249 => 125,  225 => 103,  223 => 102,  209 => 90,  207 => 89,  160 => 49,  136 => 27,  68 => 20,  64 => 14,  55 => 11,  51 => 9,  47 => 8,  43 => 7,  34 => 4,  29 => 1,  38 => 5,  35 => 5,  30 => 5,  83 => 30,  74 => 25,  65 => 19,  57 => 14,  53 => 13,  46 => 14,  42 => 12,  39 => 7,  33 => 5,  31 => 4,  28 => 3,);
    }
}
