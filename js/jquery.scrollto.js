/*!
 * jquery.scrollto.js 0.0.1 - https://github.com/yckart/jquery.scrollto.js
 * Scroll smooth to any element in your DOM.
 *
 * Copyright (c) 2012 Yannick Albert (http://yckart.com)
 * Licensed under the MIT license (http://www.opensource.org/licenses/mit-license.php).
 * 2013/02/17
 **/
$.scrollTo=$.fn.scrollTo=function(o,n,t){return this instanceof $?(t=$.extend({},{gap:{x:0,y:0},animation:{easing:"easeInSine",duration:"slow",complete:$.noop,step:$.noop}},t),this.each((function(){$(this).stop().animate({scrollLeft:isNaN(Number(o))?$(n).offset().left+t.gap.x:o,scrollTop:isNaN(Number(n))?$(n).offset().top+t.gap.y-69:n},t.animation)}))):$.fn.scrollTo.apply($("html, body"),arguments)};