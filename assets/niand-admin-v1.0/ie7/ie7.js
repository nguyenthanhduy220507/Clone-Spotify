/* To avoid CSS expressions while still supporting IE 7 and IE 6, use this script */
/* The script tag referencing this file must be placed before the ending body tag. */

/* Use conditional comments in order to target IE 7 and older:
	<!--[if lt IE 8]><!-->
	<script src="ie7/ie7.js"></script>
	<!--<![endif]-->
*/

(function() {
	function addIcon(el, entity) {
		var html = el.innerHTML;
		el.innerHTML = '<span style="font-family: \'niand-admin\'">' + entity + '</span>' + html;
	}
	var icons = {
		'niand-icon-trashcan': '&#xe902;',
		'niand-icon-delete': '&#xe902;',
		'niand-icon-edit': '&#xe903;',
		'niand-icon-update': '&#xe903;',
		'niand-icon-music': '&#xf001;',
		'niand-icon-star': '&#xf006;',
		'niand-icon-user': '&#xf007;',
		'niand-icon-cog': '&#xf013;',
		'niand-icon-gear': '&#xf013;',
		'niand-icon-chevron-left': '&#xf053;',
		'niand-icon-chevron-right': '&#xf054;',
		'niand-icon-group': '&#xf0c0;',
		'niand-icon-users': '&#xf0c0;',
		'niand-icon-music-album': '&#xe900;',
		'niand-icon-playlist': '&#xe901;',
		'0': 0
		},
		els = document.getElementsByTagName('*'),
		i, c, el;
	for (i = 0; ; i += 1) {
		el = els[i];
		if(!el) {
			break;
		}
		c = el.className;
		c = c.match(/niand-icon-[^\s'"]+/);
		if (c && icons[c[0]]) {
			addIcon(el, icons[c[0]]);
		}
	}
}());
