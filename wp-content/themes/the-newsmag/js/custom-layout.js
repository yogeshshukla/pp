/**
 * setting for the layout option in customizer
 */
jQuery(document).ready(function () {
	jQuery('.controls#the-newsmag-img-container li img').click(function () {
		jQuery('.controls#the-newsmag-img-container li').each(function () {
			jQuery(this).find('img').removeClass('the-newsmag-radio-img-selected');
		});
		jQuery(this).addClass('the-newsmag-radio-img-selected');
	});
});
