<?php
/**
 * @package Unlimited Elements
 * @author UniteCMS.net
 * @copyright (C) 2017 Unite CMS, All Rights Reserved. 
 * @license GNU/GPLv3 http://www.gnu.org/licenses/gpl-3.0.html
 * */
defined('UNLIMITED_ELEMENTS_INC') or die('Restricted access');

class UniteCreatorAddonType_BGAddon extends UniteCreatorAddonType{
	
	/**
	 * init the addon type
	 */
	protected function init(){
		 
		$this->typeName = GlobalsUC::ADDON_TYPE_BGADDON;
		$this->textSingle = __("Background Widget", "unlimited_elements");
		$this->textPlural = __("Background Widgets", "unlimited_elements");
		$this->textShowType = $this->textSingle;
		$this->titlePrefix = $this->textSingle." - ";
		$this->isBasicType = false;
		$this->allowWebCatalog = true;
		$this->allowManagerWebCatalog = true;
		$this->catalogKey = $this->typeName;
		$this->allowNoCategory = false;
		$this->defaultCatTitle = "Main";

		$this->browser_textBuy = esc_html__("Go Pro", "unlimited_elements");
		$this->browser_textHoverPro = __("Upgrade to PRO version <br> to use this widget", "unlimited_elements");
		$this->browser_urlPreview = "https://unlimited-elements.com/widget-preview/?widget=[name]";
		
		$urlLicense = GlobalsUnlimitedElements::LINK_BUY;
		
		$this->browser_urlBuyPro = $urlLicense;
		
		$responseAssets = UniteProviderFunctionsUC::setAssetsPath("ac_assets", true);
		
		$this->pathAssets = $responseAssets["path_assets"];
		$this->urlAssets = $responseAssets["url_assets"];
		
		$this->addonView_urlBack = HelperUC::getViewUrl(GlobalsUnlimitedElements::VIEW_BACKGROUNDS);
		$this->addonView_showSmallIconOption = false;		
		
		
	}
	
	
}
