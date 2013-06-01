/**
* Run Code: a jQuery Plugin
* @author: Trevor Morris (trovster)
* @url: http://www.trovster.com/lab/code/plugins/jquery.run-code.js
* @documentation: http://www.trovster.com/lab/plugins/run-code/
* @published: 11/09/2008
* @updated: 29/09/2008
* @requires: jQuery v.1.2.6 or above
*
*/
if(typeof jQuery != 'undefined') {
	jQuery(function($) {
		$.fn.extend({
			runcode: function(options) {
				var settings = $.extend({}, $.fn.runcode.defaults, options);
			
				return this.each(
					function() {
						if($.fn.jquery < '1.2.6') {return;}
						var $t = $(this);
						var o = $.metadata ? $.extend({}, settings, $t.metadata()) : settings;
						
						eval($t.text());
					}
				);
			}
		});
		
		/**
		* Plugin Defaults
		*/
		$.fn.runcode.defaults = {};
	});
}