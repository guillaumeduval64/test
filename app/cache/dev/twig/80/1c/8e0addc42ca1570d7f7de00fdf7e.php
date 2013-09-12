<?php

/* @WebProfiler/Profiler/base_js.html.twig */
class __TwigTemplate_801c8e0addc42ca1570d7f7de00fdf7e extends Twig_Template
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
        return array (  91 => 35,  79 => 29,  75 => 28,  70 => 26,  66 => 25,  62 => 24,  50 => 15,  32 => 6,  26 => 3,  48 => 9,  41 => 8,  22 => 2,  24 => 2,  19 => 1,  526 => 211,  523 => 210,  519 => 209,  516 => 208,  511 => 205,  507 => 202,  504 => 201,  500 => 197,  497 => 196,  492 => 193,  489 => 192,  485 => 190,  476 => 187,  473 => 186,  468 => 185,  465 => 184,  459 => 179,  457 => 178,  455 => 177,  453 => 176,  451 => 175,  447 => 173,  444 => 172,  440 => 125,  437 => 124,  431 => 4,  419 => 218,  415 => 217,  409 => 215,  407 => 214,  403 => 212,  400 => 210,  398 => 208,  392 => 205,  388 => 203,  386 => 201,  381 => 198,  379 => 196,  376 => 195,  374 => 192,  371 => 191,  369 => 184,  365 => 182,  363 => 172,  349 => 161,  336 => 153,  329 => 151,  322 => 149,  316 => 148,  309 => 146,  302 => 144,  295 => 142,  288 => 140,  281 => 138,  273 => 132,  262 => 129,  258 => 127,  253 => 126,  251 => 124,  229 => 104,  227 => 103,  219 => 97,  217 => 96,  209 => 90,  207 => 89,  160 => 49,  136 => 27,  68 => 20,  64 => 14,  55 => 11,  51 => 9,  47 => 8,  43 => 7,  34 => 4,  29 => 1,  38 => 5,  35 => 5,  30 => 5,  83 => 30,  74 => 25,  65 => 19,  57 => 14,  53 => 13,  46 => 14,  42 => 12,  39 => 7,  33 => 5,  31 => 4,  28 => 3,);
    }
}
