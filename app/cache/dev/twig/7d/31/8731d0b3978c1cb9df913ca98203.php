<?php

/* MyAppApBundle:Satisfaction:ajouter.html.twig */
class __TwigTemplate_7d318731d0b3978c1cb9df913ca98203 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <title>";
        // line 4
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
        <link rel=\"stylesheet\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappap/css/satisfaction.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />
 

";
        // line 9
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "1ea8096_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_1ea8096_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/1ea8096_jquery.raty_1.js");
            // line 10
            echo "                   <script src=\"http://code.jquery.com/jquery-1.9.1.min.js\"></script>

    <script type=\"text/javascript\" src=\"";
            // line 12
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
";
        } else {
            // asset "1ea8096"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_1ea8096") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/1ea8096.js");
            // line 10
            echo "                   <script src=\"http://code.jquery.com/jquery-1.9.1.min.js\"></script>

    <script type=\"text/javascript\" src=\"";
            // line 12
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
";
        }
        unset($context["asset_url"]);
        // line 14
        echo "
<script>
    \$(document).ready(function() {


/*!
 * jQuery Raty - A Star Rating Plugin
 * ------------------------------------------------------------------
 *
 * jQuery Raty is a plugin that generates a customizable star rating.
 *
 * Licensed under The MIT License
 *
 * @version        2.5.2
 * @since          2010.06.11
 * @author         Washington Botelho
 * @documentation  wbotelhos.com/raty
 *
 * ------------------------------------------------------------------
 *
 *  <div id=\"star\"></div>
 *
 *  \$('#star').raty();
 *
 */

;(function(\$) {
    var image =  \"";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappap/images/star-off.png"), "html", null, true);
        echo "\";
  var methods = {
    init: function(settings) {
      return this.each(function() {
        methods.destroy.call(this);

        this.opt = \$.extend(true, {}, \$.fn.raty.defaults, settings);

        var that  = \$(this),
            inits = ['number', 'readOnly', 'score', 'scoreName'];

        methods._callback.call(this, inits);

        if (this.opt.precision) {
          methods._adjustPrecision.call(this);
        }

        this.opt.number = methods._between(this.opt.number, 0, this.opt.numberMax)

        this.opt.path = this.opt.path || '';

        if (this.opt.path && this.opt.path.charAt( this.opt.path.length - 1 ) !== '/') {
          this.opt.path += '/';
        }

        this.stars = methods._createStars.call(this);
        this.score = methods._createScore.call(this);

        methods._apply.call(this, this.opt.score);

        var space  = this.opt.space ? 4 : 0,
            width  = this.opt.width || (this.opt.number * this.opt.size + this.opt.number * space);

        if (this.opt.cancel) {
          this.cancel = methods._createCancel.call(this);

          width += (this.opt.size + space);
        }

        if (this.opt.readOnly) {
          methods._lock.call(this);
        } else {
          that.css('cursor', 'pointer');
          methods._binds.call(this);
        }

        if (this.opt.width !== false) {
          that.css('width', width);
        }

        methods._target.call(this, this.opt.score);

        that.data({ 'settings': this.opt, 'raty': true });
      });
    }, _adjustPrecision: function() {
      this.opt.targetType = 'score';
      this.opt.half       = true;
    }, _apply: function(score) {
      if (score && score > 0) {
        score = methods._between(score, 0, this.opt.number);
        this.score.val(score);
      }

      methods._fill.call(this, score);

      if (score) {
        methods._roundStars.call(this, score);
      }
    }, _between: function(value, min, max) {
      return Math.min(Math.max(parseFloat(value), min), max);
    }, _binds: function() {
      if (this.cancel) {
        methods._bindCancel.call(this);
      }

      methods._bindClick.call(this);
      methods._bindOut.call(this);
      methods._bindOver.call(this);
    }, _bindCancel: function() {
      methods._bindClickCancel.call(this);
      methods._bindOutCancel.call(this);
      methods._bindOverCancel.call(this);
    }, _bindClick: function() {
      var self = this,
          that = \$(self);

      self.stars.on('click.raty', function(evt) {
        self.score.val((self.opt.half || self.opt.precision) ? that.data('score') : this.alt);

        if (self.opt.click) {
          self.opt.click.call(self, parseFloat(self.score.val()), evt);
        }
      });
    }, _bindClickCancel: function() {
      var self = this;

      self.cancel.on('click.raty', function(evt) {
        self.score.removeAttr('value');

        if (self.opt.click) {
          self.opt.click.call(self, null, evt);
        }
      });
    }, _bindOut: function() {
      var self = this;

      \$(this).on('mouseleave.raty', function(evt) {
        var score = parseFloat(self.score.val()) || undefined;

        methods._apply.call(self, score);
        methods._target.call(self, score, evt);

        if (self.opt.mouseout) {
          self.opt.mouseout.call(self, score, evt);
        }
      });
    }, _bindOutCancel: function() {
      var self = this;

      self.cancel.on('mouseleave.raty', function(evt) {
        \$(this).attr('src', self.opt.path + self.opt.cancelOff);

        if (self.opt.mouseout) {
          self.opt.mouseout.call(self, self.score.val() || null, evt);
        }
      });
    }, _bindOverCancel: function() {
      var self = this;

      self.cancel.on('mouseover.raty', function(evt) {
        \$(this).attr('src', self.opt.path + self.opt.cancelOn);

        self.stars.attr('src', self.opt.path + self.opt.starOff);

        methods._target.call(self, null, evt);

        if (self.opt.mouseover) {
          self.opt.mouseover.call(self, null);
        }
      });
    }, _bindOver: function() {
      var self   = this,
          that   = \$(self),
          action = self.opt.half ? 'mousemove.raty' : 'mouseover.raty';

      self.stars.on(action, function(evt) {
        var score = parseInt(this.alt, 10);

        if (self.opt.half) {
          var position = parseFloat((evt.pageX - \$(this).offset().left) / self.opt.size),
              plus     = (position > .5) ? 1 : .5;

          score = score - 1 + plus;

          methods._fill.call(self, score);

          if (self.opt.precision) {
            score = score - plus + position;
          }

          methods._roundStars.call(self, score);

          that.data('score', score);
        } else {
          methods._fill.call(self, score);
        }

        methods._target.call(self, score, evt);

        if (self.opt.mouseover) {
          self.opt.mouseover.call(self, score, evt);
        }
      });
    }, _callback: function(options) {
      for (i in options) {
        if (typeof this.opt[options[i]] === 'function') {
          this.opt[options[i]] = this.opt[options[i]].call(this);
        }
      }
    }, _createCancel: function() {
      var that   = \$(this),
          icon   = this.opt.path + this.opt.cancelOff,
          cancel = \$('<img />', { src: icon, alt: 'x', title: this.opt.cancelHint, 'class': 'raty-cancel' });

      if (this.opt.cancelPlace == 'left') {
        that.prepend('&#160;').prepend(cancel);
      } else {
        that.append('&#160;').append(cancel);
      }

      return cancel;
    }, _createScore: function() {
      return \$('<input />', { type: 'hidden', name: this.opt.scoreName }).appendTo(this);
    }, _createStars: function() {
      var that = \$(this);

      for (var i = 1; i <= this.opt.number; i++) {
        var title = methods._getHint.call(this, i),
            icon  = (this.opt.score && this.opt.score >= i) ? 'starOn' : 'starOff';

        icon = this.opt.path + this.opt[icon];

        \$('<img />', { src : icon, alt: i, title: title }).appendTo(this);

        if (this.opt.space) {
          that.append((i < this.opt.number) ? '&#160;' : '');
        }
      }

      return that.children('img');
    }, _error: function(message) {
      \$(this).html(message);

      \$.error(message);
    }, _fill: function(score) {
      var self  = this,
          hash  = 0;

      for (var i = 1; i <= self.stars.length; i++) {
        var star   = self.stars.eq(i - 1),
            select = self.opt.single ? (i == score) : (i <= score);

        if (self.opt.iconRange && self.opt.iconRange.length > hash) {
          var irange = self.opt.iconRange[hash],
              on     = irange.on  || self.opt.starOn,
              off    = irange.off || self.opt.starOff,
              icon   = select ? on : off;

          if (i <= irange.range) {
            star.attr('src', self.opt.path + icon);
          }

          if (i == irange.range) {
            hash++;
          }
        } else {
          var icon = select ? 'starOn' : 'starOff';

          star.attr('src', this.opt.path + this.opt[icon]);
        }
      }
    }, _getHint: function(score) {
      var hint = this.opt.hints[score - 1];
      return (hint === '') ? '' : (hint || score);
    }, _lock: function() {
      var score = parseInt(this.score.val(), 10), // TODO: 3.1 >> [['1'], ['2'], ['3', '.1', '.2']]
          hint  = score ? methods._getHint.call(this, score) : this.opt.noRatedMsg;

      \$(this).data('readonly', true).css('cursor', '').attr('title', hint);

      this.score.attr('readonly', 'readonly');
      this.stars.attr('title', hint);

      if (this.cancel) {
        this.cancel.hide();
      }
    }, _roundStars: function(score) {
      var rest = (score - Math.floor(score)).toFixed(2);

      if (rest > this.opt.round.down) {
        var icon = 'starOn';                                 // Up:   [x.76 .. x.99]

        if (this.opt.halfShow && rest < this.opt.round.up) { // Half: [x.26 .. x.75]
          icon = 'starHalf';
        } else if (rest < this.opt.round.full) {             // Down: [x.00 .. x.5]
          icon = 'starOff';
        }

        this.stars.eq(Math.ceil(score) - 1).attr('src', this.opt.path + this.opt[icon]);
      }                              // Full down: [x.00 .. x.25]
    }, _target: function(score, evt) {
      if (this.opt.target) {
        var target = \$(this.opt.target);

        if (target.length === 0) {
          methods._error.call(this, 'Target selector invalid or missing!');
        }

        if (this.opt.targetFormat.indexOf('{score}') < 0) {
          methods._error.call(this, 'Template \"{score}\" missing!');
        }

        var mouseover = evt && evt.type == 'mouseover';

        if (score === undefined) {
          score = this.opt.targetText;
        } else if (score === null) {
          score = mouseover ? this.opt.cancelHint : this.opt.targetText;
        } else {
          if (this.opt.targetType == 'hint') {
            score = methods._getHint.call(this, Math.ceil(score));
          } else if (this.opt.precision) {
            score = parseFloat(score).toFixed(1);
          }

          if (!mouseover && !this.opt.targetKeep) {
            score = this.opt.targetText;
          }
        }

        if (score) {
          score = this.opt.targetFormat.toString().replace('{score}', score);
        }

        if (target.is(':input')) {
          target.val(score);
        } else {
          target.html(score);
        }
      }
    }, _unlock: function() {
      \$(this).data('readonly', false).css('cursor', 'pointer').removeAttr('title');

      this.score.removeAttr('readonly', 'readonly');

      for (var i = 0; i < this.opt.number; i++) {
        this.stars.eq(i).attr('title', methods._getHint.call(this, i + 1));
      }

      if (this.cancel) {
        this.cancel.css('display', '');
      }
    }, cancel: function(click) {
      return this.each(function() {
        if (\$(this).data('readonly') !== true) {
          methods[click ? 'click' : 'score'].call(this, null);
          this.score.removeAttr('value');
        }
      });
    }, click: function(score) {
      return \$(this).each(function() {
        if (\$(this).data('readonly') !== true) {
          methods._apply.call(this, score);

          if (!this.opt.click) {
            methods._error.call(this, 'You must add the \"click: function(score, evt) { }\" callback.');
          }

          this.opt.click.call(this, score, { type: 'click' });

          methods._target.call(this, score);
        }
      });
    }, destroy: function() {
      return \$(this).each(function() {
        var that = \$(this),
            raw  = that.data('raw');

        if (raw) {
          that.off('.raty').empty().css({ cursor: raw.style.cursor, width: raw.style.width }).removeData('readonly');
        } else {
          that.data('raw', that.clone()[0]);
        }
      });
    }, getScore: function() {
      var score = [],
          value ;

      \$(this).each(function() {
        value = this.score.val();

        score.push(value ? parseFloat(value) : undefined);
      });

      return (score.length > 1) ? score : score[0];
    }, readOnly: function(readonly) {
      return this.each(function() {
        var that = \$(this);

        if (that.data('readonly') !== readonly) {
          if (readonly) {
            that.off('.raty').children('img').off('.raty');

            methods._lock.call(this);
          } else {
            methods._binds.call(this);
            methods._unlock.call(this);
          }

          that.data('readonly', readonly);
        }
      });
    }, reload: function() {
      return methods.set.call(this, {});
    }, score: function() {
      return arguments.length ? methods.setScore.apply(this, arguments) : methods.getScore.call(this);
    }, set: function(settings) {
      return this.each(function() {
        var that   = \$(this),
            actual = that.data('settings'),
            news   = \$.extend({}, actual, settings);

        that.raty(news);
      });
    }, setScore: function(score) {
      return \$(this).each(function() {
        if (\$(this).data('readonly') !== true) {
          methods._apply.call(this, score);
          methods._target.call(this, score);
        }
      });
    }
  };

  \$.fn.raty = function(method) {
    if (methods[method]) {
      return methods[method].apply(this, Array.prototype.slice.call(arguments, 1));
    } else if (typeof method === 'object' || !method) {
      return methods.init.apply(this, arguments);
    } else {
      \$.error('Method ' + method + ' does not exist!');
    }
  };

  \$.fn.raty.defaults = {
    cancel        : false,
    cancelHint    : 'Cancel this rating!',
    cancelOff     : \"";
        // line 458
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappap/images/cancel-off.png"), "html", null, true);
        echo "\",
    cancelOn      : \"";
        // line 459
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappap/images/cancel-on.png"), "html", null, true);
        echo "\",
    cancelPlace   : 'left',
    click         : undefined,
    half          : false,
    halfShow      : true,
    hints         : ['bad', 'poor', 'regular', 'good', 'gorgeous'],
    iconRange     : undefined,
    mouseout      : undefined,
    mouseover     : undefined,
    noRatedMsg    : 'Not rated yet!',
    number        : 5,
    numberMax     : 20,
    path          : '',
    precision     : false,
    readOnly      : false,
    round         : { down: .25, full: .6, up: .76 },
    score         : undefined,
    scoreName     : 'score',
    single        : false,
    size          : 16,
    space         : true,
    starHalf      : 'star-half.png',
    starOff       :  \"";
        // line 481
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappap/images/star-off.png"), "html", null, true);
        echo "\",
    starOn        :   \"";
        // line 482
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappap/images/star-on.png"), "html", null, true);
        echo "\",
    target        : undefined,
    targetFormat  : '{score}',
    targetKeep    : false,
    targetText    : '',
    targetType    : 'hint',
    width         : undefined
  };

})(jQuery);

var appel = \"";
        // line 493
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["satisfaction"]) ? $context["satisfaction"] : $this->getContext($context, "satisfaction")), "appel"), "html", null, true);
        echo "\";
if(  appel == undefined ) {
appel = 0 ;
}
\$('.appel').raty({
    score: appel,
    cancel    : true,  
    click: function(score,evt) {
    //var sc = \$(this).attr('data-score');
        \$('#appel').val(score);
  }
});


var equipe = \"";
        // line 507
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["satisfaction"]) ? $context["satisfaction"] : $this->getContext($context, "satisfaction")), "equipe"), "html", null, true);
        echo "\";
if(  equipe == undefined ) {
equipe = 0 ;
}
\$('.equipe').raty({
  score: equipe,
  cancel    : true,
  click: function(score,evt) {
    //var sc = \$(this).attr('data-score');
    \$('#equipe').val(score);
  }
});


var service = \"";
        // line 521
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["satisfaction"]) ? $context["satisfaction"] : $this->getContext($context, "satisfaction")), "service"), "html", null, true);
        echo "\";
if(  service == undefined ) {
service = 0 ;
}
\$('.service').raty({
  score: service,
  cancel    : true,
  click: function(score,evt) {
    //var sc = \$(this).attr('data-score');
    \$('#service').val(score);
  }
});
  
});
</script>
 
    </head>
    <body>
                     <div id=\"logoSatisfaction\">
                         <img src=\"";
        // line 540
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappap/images/logo.png"), "html", null, true);
        echo "\" title=\"Client\"/>
            </div>
                <div id=\"satisfaction\">
                <form action=\"\" method=\"post\" ";
        // line 543
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo ">
                    <div class=\"error\">
                        ";
        // line 545
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
                    </div>
                        
                       <div id=\"divCheckbox\" style=\"display: none;\">
                        ";
        // line 549
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
                               </div>
                <table>
                    
                    <tr>
                        <td>";
        // line 554
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "appel"), 'label');
        echo "</td>
                    </tr>
                    <tr>
                        <td>    
                        ";
        // line 558
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "appel"), 'errors');
        echo "
                            <div class=\"appel\"></div>
                            <input type=\"hidden\" value=\"\" id=\"appel\" name=\"satisfaction[appel]\" />                           
                        </td>
                    </tr>
                    <tr>
                        <td>";
        // line 564
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "equipe"), 'label');
        echo "</td>
                    </tr>
                    <tr>
                        <td>    
                        ";
        // line 568
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "equipe"), 'errors');
        echo "
                            <div class=\"equipe\"></div>
                            <input type=\"hidden\" value=\"\" id=\"equipe\" name=\"satisfaction[equipe]\" />                           
                        </td>
                    </tr>
                     <tr>
                        <td>";
        // line 574
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "service"), 'label');
        echo "</td>
                    </tr>
                    <tr>
                        <td>    
                        ";
        // line 578
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "equipe"), 'errors');
        echo "
                            <div class=\"service\"></div>
                            <input type=\"hidden\" value=\"\" id=\"service\" name=\"satisfaction[service]\" />                           
                        </td>
                    </tr>
                    <tr>
                        <td>";
        // line 584
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "peinture"), 'label');
        echo "</td>
                    </tr>
                    <tr>
                        <td>
                        ";
        // line 588
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "peinture"), 'errors');
        echo "
                        <input type=\"radio\" value=\"Oui\" id=\"peinture\" name=\"satisfaction[peinture]\" />Oui        
                         <input type=\"radio\" value=\"Non\" id=\"peinture\" name=\"satisfaction[peinture]\" />Non                           
                        </td>
                    </tr>
                    <tr>
                        <td>";
        // line 594
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "question"), 'label');
        echo "</td>
                                                ";
        // line 595
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "question"), 'widget');
        echo "

                    </tr>
                    <tr>
                        <td>    
                        ";
        // line 600
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "question"), 'errors');
        echo "
                        </td>
                    </tr>
                </table>
                                
                <br>
                <input type=\"submit\" value=\"Suivant\" title=\"Envoyer\"/>    
                </form>               
                </div>
    </body>
</html>





";
        // line 616
        if ((isset($context["message"]) ? $context["message"] : $this->getContext($context, "message"))) {
            // line 617
            echo "<p>";
            echo twig_escape_filter($this->env, (isset($context["message"]) ? $context["message"] : $this->getContext($context, "message")), "html", null, true);
            echo "</p>
";
        }
        // line 619
        echo "

";
    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        echo "Intranet";
    }

    public function getTemplateName()
    {
        return "MyAppApBundle:Satisfaction:ajouter.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  748 => 4,  742 => 619,  736 => 617,  734 => 616,  715 => 600,  707 => 595,  703 => 594,  694 => 588,  687 => 584,  678 => 578,  671 => 574,  662 => 568,  655 => 564,  646 => 558,  639 => 554,  631 => 549,  624 => 545,  619 => 543,  613 => 540,  591 => 521,  574 => 507,  557 => 493,  543 => 482,  539 => 481,  514 => 459,  510 => 458,  90 => 41,  61 => 14,  55 => 12,  51 => 10,  44 => 12,  40 => 10,  36 => 9,  30 => 6,  25 => 4,  20 => 1,);
    }
}
