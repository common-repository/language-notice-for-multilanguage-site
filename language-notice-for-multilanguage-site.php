<?php
/**
 * Language Notice For Multilanguage Site
 *
 * @author    Antonio Lamorgese <antonio.lamorgese@gmail.com>
 * @copyright 2023 Antonio Lamorgese
 * @license   GNU General Public License v3.0
 * @link      https://github.com/antoniolamorgese/language-notice-for-multilanguage-site
 * @see       https://jeremyhixon.com/tool/wordpress-option-page-generator/
 */

/**
 * Plugin Name:        Language Notice For Multilanguage Site
 * Plugin URI:         https://github.com/antoniolamorgese/language-notice-for-multilanguage-site
 * Description:        Language Notice For Multilanguage Site automatically adds a block containing the link to read the Post in the current language if available. This type of approach has a positive impact on SEO by increasing CTR.
 * Author:             Antonio Lamorgese
 * Author URI:         http://www.phpcodewizard.it/antoniolamorgese/
 * Version:            1.1.0
 * License:            GNU General Public License v3.0
 * License URI:        https://www.gnu.org/licenses/gpl-3.0.html
 * Text Domain:        language-notice-for-multilanguage-site
 * Domain Path:        /languages
 * GitHub Plugin URI:  https://github.com/antoniolamorgese/language-notice-for-multilanguage-site
 * Requires at least:  5.6
 * Tested up to:       6.3
 * Requires PHP:       5.6 or later
 *
 * This program is free software; you can redistribute it and/or modify it under the terms of the GNU
 * General Public License version 3, as published by the Free Software Foundation. You may NOT assume
 * that you can use any other version of the GPL.
 *
 * This program is distributed in the hope that it will be useful, but WITHOUT ANY WARRANTY; without
 * even the implied warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
 */

/**
 * Exit if called directly.
 */
if ( ! defined( 'ABSPATH' ) ) exit; 

/**
 * Create HTML code to include in the BODY tag.
 * Add Language Notice in post
 */
if(!is_Admin()) {
	if(!is_front_page()){
		/**
		 * Enqueue styles "font-awesome" icons
		 */
		add_action( 'wp_enqueue_scripts', function() {
			wp_register_style( 'styles-fontawesome-language-notice-for-multilanguage-site',  plugin_dir_url( __FILE__ ) . 'css/font-awesome.min.css' );
			wp_enqueue_style( 'styles-fontawesome-language-notice-for-multilanguage-site' );
		});

		if(!function_exists('language_notice_for_multilanguage_site_add_Code_html_in_tag_body')) {
			function language_notice_for_multilanguage_site_add_Code_html_in_tag_body() {
				?>
				    <!-- Language Notice For Multilanguage Site -->
					<hr id="language_notice_for_multilanguage_site_5">
					<div id='language_notice_for_multilanguage_site_0' class="alert alert-warning" style="display: none; width: 100%; height: auto; z-index: 9999;"></div>
					<script>
						jQuery(document).ready(function(){
							jQuery('link[hreflang]').each(function() {
							   var href = jQuery(this).attr('href');
  							   var hreflang = jQuery(this).attr('hreflang');
							   var languageBrowser = navigator.language;
							   var languageBrowser = languageBrowser.substring(0,2);
							   if(languageBrowser === hreflang){
								   if(href !== window.location.href){
							              //Show block Language Notice For Multilanguage Site   
								      if(languageBrowser === 'it'){
									     var mexBye = 'Ciao';
							                     var mexInfo = 'Questo Articolo è disponibile anche in italiano.';
							                     var mexLink = 'Leggi la versione in italiano.';
								      } else if(languageBrowser === 'en'){
									     var mexBye = 'Bye';
							                     var mexInfo = 'This Post is also available in english.';
							                     var mexLink = 'Read the english version.';
								      } else if(languageBrowser === 'es'){
									     var mexBye = 'Hola';
							                     var mexInfo = 'Esta publicación también está disponible en español.';
							                     var mexLink = 'Lea la versión en español.';
								      } else if(languageBrowser === 'fr'){
									     var mexBye = 'Au revoir';
							                     var mexInfo = 'Esta publicación también está disponible en français.';
							                     var mexLink = 'Lea la versión en français.';
								      } else if(languageBrowser === 'de'){
									     var mexBye = 'Hallo';
							                     var mexInfo = 'Dieser Artikel ist auch in deutche verfügbar.';
							                     var mexLink = 'Lesen Sie die deutsche Version.';
								      } else if(languageBrowser === 'pt'){
									     var mexBye = 'OI';
							                     var mexInfo = 'Este artigo também está disponível em português.';
							                     var mexLink = 'Leia a versão em português.';
								      } else {
									     var mexBye = 'Bye';
							                     var mexInfo = 'This article is also available in your language.';
							                     var mexLink = 'Read the version in your language.';
								      }	

								      if (window.location.href.indexOf("category") === -1) {
										if (!jQuery('#language_notice_for_multilanguage_site_0').hasClass('alert')) { 
									         	jQuery('#language_notice_for_multilanguage_site_0').addClass('alert');
										 }											 
										 if (!jQuery('#language_notice_for_multilanguage_site_0').hasClass('alert-warning')) { 
									         	jQuery('#language_notice_for_multilanguage_site_0').addClass('alert-warning');
										 }
										 if (jQuery(window).width() > 768) {
											// Desktop Device
											jQuery('#language_notice_for_multilanguage_site_0').html('<table style="border: 0px solid #fff3cd; border-collapse: collapse; text-align: center; vertical-align: middle; margin-top: 2px; margin-bottom: 2px;"><tr style="border: 0px solid #fff3cd; border-collapse: collapse;"><td style="border: 0px solid #fff3cd; border-collapse: collapse;"><i class="fa fa-language" style="font-size: 62px; color: blue;" aria-hidden="true"></i></td><td style="border: 0px solid #fff3cd; border-collapse: collapse;"><p class="has-medium-font-size"><span id="language_notice_for_multilanguage_site_1"><b>Bye!</b></span><br><span id="language_notice_for_multilanguage_site_2">This Post is also available in English.</span><br><a style="text-decoration: underline;" id="language_notice_for_multilanguage_site_3" href="" target="_blank"><span style="text-decoration: underline;" id="language_notice_for_multilanguage_site_4">Read the English version</span></a></p></td><td style="border: 0px solid #fff3cd; border-collapse: collapse;"><a style="float:right;" href="#" class="close" data-dismiss="alert" aria-label="close"><i style="font-size:24px; color:black;" class="fa fa-close" aria-hidden="true"></i></a></td></tr></table>');
										 } else {
											// Mobile Device
											jQuery('#language_notice_for_multilanguage_site_0').html('<a style="float:right;" href="#" class="close" data-dismiss="alert" aria-label="close"><i style="font-size:24px; color:black;" class="fa fa-close" aria-hidden="true"></i></a><i class="fa fa-language" style="font-size: 62px; color: blue;" aria-hidden="true"></i><p class="has-medium-font-size"><span id="language_notice_for_multilanguage_site_1"><b>Bye!</b></span><br><span id="language_notice_for_multilanguage_site_2">This Post is also available in English.</span><br><a style="text-decoration: underline;" id="language_notice_for_multilanguage_site_3" href="" target="_blank"><span style="text-decoration: underline;" id="language_notice_for_multilanguage_site_4">Read the English version</span></a></p>');
										 }
								      }	 else {
										if (jQuery('#language_notice_for_multilanguage_site_0').hasClass('alert')) { 
									         	jQuery('#language_notice_for_multilanguage_site_0').removeClass('alert');
										 }											 
										 if (jQuery('#language_notice_for_multilanguage_site_0').hasClass('alert-warning')) { 
									         	jQuery('#language_notice_for_multilanguage_site_0').removeClass('alert-warning');
										 }
								      }

								      jQuery('#language_notice_for_multilanguage_site_3').attr('href', href);
								      jQuery('#language_notice_for_multilanguage_site_1').replaceWith('<span id="language_notice_for_multilanguage_site_1"><b>'+mexBye+'!</b></span>');
								      jQuery('#language_notice_for_multilanguage_site_2').replaceWith('<span id="language_notice_for_multilanguage_site_2">'+mexInfo+'</span>');
								      jQuery('#language_notice_for_multilanguage_site_4').replaceWith('<span id="language_notice_for_multilanguage_site_4">'+mexLink+'</span>');
								      jQuery('#language_notice_for_multilanguage_site_0').insertAfter('h1');
								      jQuery('#language_notice_for_multilanguage_site_5').insertBefore('#language_notice_for_multilanguage_site_0');
								      jQuery('#language_notice_for_multilanguage_site_0').show();
								  
								      // break of the cycle
								      return false;
								   }   
							   }
							});
							if (jQuery("#language_notice_for_multilanguage_site_1").length <= 0) {
								jQuery('#language_notice_for_multilanguage_site_5').hide();
							}
						});	
					</script>
				<?php
			}	
			add_action('wp_footer', 'language_notice_for_multilanguage_site_add_Code_html_in_tag_body');
		}	
	}
}

