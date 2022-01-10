<?php         
namespace Concrete\Package\IgSpacer;
use Package;
use BlockType;
use Database;

defined('C5_EXECUTE') or die(_("Access Denied."));

class Controller extends Package {

	protected $pkgHandle = 'ig_spacer';
	protected $appVersionRequired = '5.7.2';
	protected $pkgVersion = '0.9.4';
	public function getPackageDescription() {
		return t('Adds space between blocks without coding. For more addons and themes <a href="http://concrete5.iglobalweb.com" target="_blank">concrete5.iglobalweb.com</a>');
	}
	public function getPackageName() {
		return t("Spacer");
	}
	
	public function install() {
		$pkg = parent::install();
		BlockType::installBlockTypeFromPackage('ig_spacer', $pkg);
	}
	public function uninstall(){ 
		$pkg = parent::uninstall();
		$db = Database::connection();
		$db->Execute('DROP TABLE IF EXISTS btIgSpacer');
	}
}