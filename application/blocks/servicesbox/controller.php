<?php namespace Application\Block\Servicesbox;

defined("C5_EXECUTE") or die("Access Denied.");

use AssetList;
use Concrete\Core\Block\BlockController;
use Core;
use File;
use Page;
use Permissions;

class Controller extends BlockController
{
    public $btFieldsRequired = [];
    protected $btExportFileColumns = ['Icon'];
    protected $btTable = 'btServicesbox';
    protected $btInterfaceWidth = 400;
    protected $btInterfaceHeight = 500;
    protected $btIgnorePageThemeGridFrameworkContainer = false;
    protected $btCacheBlockRecord = true;
    protected $btCacheBlockOutput = true;
    protected $btCacheBlockOutputOnPost = true;
    protected $btCacheBlockOutputForRegisteredUsers = true;
    protected $pkg = false;
    
    public function getBlockTypeDescription()
    {
        return t("services box");
    }

    public function getBlockTypeName()
    {
        return t("services box");
    }

    public function getSearchableContent()
    {
        $content = [];
        $content[] = $this->Tiltle;
        $content[] = $this->Description_1;
        return implode(" ", $content);
    }

    public function view()
    {
        
        if ($this->Icon && ($f = File::getByID($this->Icon)) && is_object($f)) {
            $this->set("Icon", $f);
        } else {
            $this->set("Icon", false);
        }
        $cta_URL = null;
		$cta_Object = null;
		$cta_Title = trim($this->cta_Title);
		if (trim($this->cta) != '') {
			switch ($this->cta) {
				case 'page':
					if ($this->cta_Page > 0 && ($cta_Page_c = Page::getByID($this->cta_Page)) && !$cta_Page_c->error && !$cta_Page_c->isInTrash()) {
						$cta_Object = $cta_Page_c;
						$cta_URL = $cta_Page_c->getCollectionLink();
						if ($cta_Title == '') {
							$cta_Title = $cta_Page_c->getCollectionName();
						}
					}
					break;
				case 'file':
					$cta_File_id = (int)$this->cta_File;
					if ($cta_File_id > 0 && ($cta_File_object = File::getByID($cta_File_id)) && is_object($cta_File_object)) {
						$fp = new Permissions($cta_File_object);
						if ($fp->canViewFile()) {
							$cta_Object = $cta_File_object;
							$cta_URL = $cta_File_object->getRelativePath();
							if ($cta_Title == '') {
								$cta_Title = $cta_File_object->getTitle();
							}
						}
					}
					break;
				case 'url':
					$cta_URL = $this->cta_URL;
					if ($cta_Title == '') {
						$cta_Title = $cta_URL;
					}
					break;
				case 'relative_url':
					$cta_URL = $this->cta_Relative_URL;
					if ($cta_Title == '') {
						$cta_Title = $this->cta_Relative_URL;
					}
					break;
				case 'image':
					if ($this->cta_Image && ($cta_Image_object = File::getByID($this->cta_Image)) && is_object($cta_Image_object)) {
						$cta_URL = $cta_Image_object->getURL();
						$cta_Object = $cta_Image_object;
						if ($cta_Title == '') {
							$cta_Title = $cta_Image_object->getTitle();
						}
					}
					break;
			}
		}
		$this->set("cta_URL", $cta_URL);
		$this->set("cta_Object", $cta_Object);
		$this->set("cta_Title", $cta_Title);
    }

    public function add()
    {
        $this->addEdit();
    }

    public function edit()
    {
        $this->addEdit();
    }

    protected function addEdit()
    {
        $this->set("cta_Options", $this->getSmartLinkTypeOptions([
  'page',
  'file',
  'image',
  'url',
  'relative_url',
], true));
        $this->requireAsset('core/file-manager');
        $this->set('btFieldsRequired', $this->btFieldsRequired);
        $this->set('identifier_getString', Core::make('helper/validation/identifier')->getString(18));
    }

    public function save($args)
    {
        if (isset($args["cta"]) && trim($args["cta"]) != '') {
			switch ($args["cta"]) {
				case 'page':
					$args["cta_File"] = '0';
					$args["cta_URL"] = '';
					$args["cta_Relative_URL"] = '';
					$args["cta_Image"] = '0';
					break;
				case 'file':
					$args["cta_Page"] = '0';
					$args["cta_URL"] = '';
					$args["cta_Relative_URL"] = '';
					$args["cta_Image"] = '0';
					break;
				case 'url':
					$args["cta_Page"] = '0';
					$args["cta_Relative_URL"] = '';
					$args["cta_File"] = '0';
					$args["cta_Image"] = '0';
					break;
				case 'relative_url':
					$args["cta_Page"] = '0';
					$args["cta_URL"] = '';
					$args["cta_File"] = '0';
					$args["cta_Image"] = '0';
					break;
				case 'image':
					$args["cta_Page"] = '0';
					$args["cta_File"] = '0';
					$args["cta_URL"] = '';
					$args["cta_Relative_URL"] = '';
					break;
				default:
					$args["cta_Title"] = '';
					$args["cta_Page"] = '0';
					$args["cta_File"] = '0';
					$args["cta_URL"] = '';
					$args["cta_Relative_URL"] = '';
					$args["cta_Image"] = '0';
					break;	
			}
		}
		else {
			$args["cta_Title"] = '';
			$args["cta_Page"] = '0';
			$args["cta_File"] = '0';
			$args["cta_URL"] = '';
			$args["cta_Relative_URL"] = '';
			$args["cta_Image"] = '0';
		}
        parent::save($args);
    }

    public function validate($args)
    {
        $e = Core::make("helper/validation/error");
        if (in_array("Icon", $this->btFieldsRequired) && (trim($args["Icon"]) == "" || !is_object(File::getByID($args["Icon"])))) {
            $e->add(t("The %s field is required.", t("Icon")));
        }
        if (in_array("Tiltle", $this->btFieldsRequired) && (trim($args["Tiltle"]) == "")) {
            $e->add(t("The %s field is required.", t("Tiltle")));
        }
        if (in_array("Description_1", $this->btFieldsRequired) && (trim($args["Description_1"]) == "")) {
            $e->add(t("The %s field is required.", t("Description")));
        }
        if ((in_array("cta", $this->btFieldsRequired) && (!isset($args["cta"]) || trim($args["cta"]) == "")) || (isset($args["cta"]) && trim($args["cta"]) != "" && !array_key_exists($args["cta"], $this->getSmartLinkTypeOptions(['page', 'file', 'image', 'url', 'relative_url'])))) {
			$e->add(t("The %s field has an invalid value.", t("CTA")));
		} elseif (array_key_exists($args["cta"], $this->getSmartLinkTypeOptions(['page', 'file', 'image', 'url', 'relative_url']))) {
			switch ($args["cta"]) {
				case 'page':
					if (!isset($args["cta_Page"]) || trim($args["cta_Page"]) == "" || $args["cta_Page"] == "0" || (($page = Page::getByID($args["cta_Page"])) && $page->error !== false)) {
						$e->add(t("The %s field for '%s' is required.", t("Page"), t("CTA")));
					}
					break;
				case 'file':
					if (!isset($args["cta_File"]) || trim($args["cta_File"]) == "" || !is_object(File::getByID($args["cta_File"]))) {
						$e->add(t("The %s field for '%s' is required.", t("File"), t("CTA")));
					}
					break;
				case 'url':
					if (!isset($args["cta_URL"]) || trim($args["cta_URL"]) == "" || !filter_var($args["cta_URL"], FILTER_VALIDATE_URL)) {
						$e->add(t("The %s field for '%s' does not have a valid URL.", t("URL"), t("CTA")));
					}
					break;
				case 'relative_url':
					if (!isset($args["cta_Relative_URL"]) || trim($args["cta_Relative_URL"]) == "") {
						$e->add(t("The %s field for '%s' is required.", t("Relative URL"), t("CTA")));
					}
					break;
				case 'image':
					if (!isset($args["cta_Image"]) || trim($args["cta_Image"]) == "" || !is_object(File::getByID($args["cta_Image"]))) {
						$e->add(t("The %s field for '%s' is required.", t("Image"), t("CTA")));
					}
					break;	
			}
		}
        return $e;
    }

    public function composer()
    {
        $al = AssetList::getInstance();
        $al->register('javascript', 'auto-js-' . $this->btHandle, 'blocks/' . $this->btHandle . '/auto.js', [], $this->pkg);
        $this->requireAsset('javascript', 'auto-js-' . $this->btHandle);
        $this->edit();
    }

    protected function getSmartLinkTypeOptions($include = [], $checkNone = false)
	{
		$options = [
			''             => sprintf("-- %s--", t("None")),
			'page'         => t("Page"),
			'url'          => t("External URL"),
			'relative_url' => t("Relative URL"),
			'file'         => t("File"),
			'image'        => t("Image")
		];
		if ($checkNone) {
            $include = array_merge([''], $include);
        }
		$return = [];
		foreach($include as $v){
		    if(isset($options[$v])){
		        $return[$v] = $options[$v];
		    }
		}
		return $return;
	}
}