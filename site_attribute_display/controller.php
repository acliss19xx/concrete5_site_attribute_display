<?php 

namespace Concrete\Package\SiteAttributeDisplay;

defined('C5_EXECUTE') or die("Access Denied.");

use Loader;
use Events;
use BlockType;
/**
 * Class that is used to redirect based on a page attribute
 * @package Page Redirect
 * @author Michael Krasnow <mnkras@gmail.com>
 * @category Packages
 * @copyright  Copyright (c) 2014 Michael Krasnow. (http://www.mnkras.com)
 */
class Controller extends \Concrete\Core\Package\Package {

	protected $pkgHandle = 'site_attribute_display';
	protected $appVersionRequired = '8.0.3';
	protected $pkgVersion = '0.0.9';
	
	public function getPackageDescription() {
		return t("Adds a site custom attribute display");
	}
	
	public function getPackageName() {
		return t("Site attribute display");
	}
	
	public function install() {
		$pkg = parent::install();
        BlockType::installBlockTypeFromPackage('site_attribute_display', $pkg);		
	}
}