<?php namespace Application\Block\Programblock;

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
    protected $btTable = 'btProgramblock';
    protected $btInterfaceWidth = 400;
    protected $btInterfaceHeight = 500;
    protected $btIgnorePageThemeGridFrameworkContainer = false;
    protected $btCacheBlockRecord = true;
    protected $btCacheBlockOutput = true;
    protected $btCacheBlockOutputOnPost = true;
    protected $btCacheBlockOutputForRegisteredUsers = true;
    protected $pkg = false;
    
    public function getBlockTypeName()
    {
        return t("Program Block");
    }

    public function getSearchableContent()
    {
        $content = [];
        $content[] = $this->blacktitle;
        $content[] = $this->orangetitle;
        $content[] = $this->description_1;
        return implode(" ", $content);
    }

    public function view()
    {
        $buttontitle_URL = null;
		$buttontitle_Object = null;
		$buttontitle_Title = trim($this->buttontitle_Title);
		if (trim($this->buttontitle) != '') {
			switch ($this->buttontitle) {
				case 'page':
					if ($this->buttontitle_Page > 0 && ($buttontitle_Page_c = Page::getByID($this->buttontitle_Page)) && !$buttontitle_Page_c->error && !$buttontitle_Page_c->isInTrash()) {
						$buttontitle_Object = $buttontitle_Page_c;
						$buttontitle_URL = $buttontitle_Page_c->getCollectionLink();
						if ($buttontitle_Title == '') {
							$buttontitle_Title = $buttontitle_Page_c->getCollectionName();
						}
					}
					break;
				case 'file':
					$buttontitle_File_id = (int)$this->buttontitle_File;
					if ($buttontitle_File_id > 0 && ($buttontitle_File_object = File::getByID($buttontitle_File_id)) && is_object($buttontitle_File_object)) {
						$fp = new Permissions($buttontitle_File_object);
						if ($fp->canViewFile()) {
							$buttontitle_Object = $buttontitle_File_object;
							$buttontitle_URL = $buttontitle_File_object->getRelativePath();
							if ($buttontitle_Title == '') {
								$buttontitle_Title = $buttontitle_File_object->getTitle();
							}
						}
					}
					break;
				case 'url':
					$buttontitle_URL = $this->buttontitle_URL;
					if ($buttontitle_Title == '') {
						$buttontitle_Title = $buttontitle_URL;
					}
					break;
				case 'relative_url':
					$buttontitle_URL = $this->buttontitle_Relative_URL;
					if ($buttontitle_Title == '') {
						$buttontitle_Title = $this->buttontitle_Relative_URL;
					}
					break;
				case 'image':
					if ($this->buttontitle_Image && ($buttontitle_Image_object = File::getByID($this->buttontitle_Image)) && is_object($buttontitle_Image_object)) {
						$buttontitle_URL = $buttontitle_Image_object->getURL();
						$buttontitle_Object = $buttontitle_Image_object;
						if ($buttontitle_Title == '') {
							$buttontitle_Title = $buttontitle_Image_object->getTitle();
						}
					}
					break;
			}
		}
		$this->set("buttontitle_URL", $buttontitle_URL);
		$this->set("buttontitle_Object", $buttontitle_Object);
		$this->set("buttontitle_Title", $buttontitle_Title);
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
        $this->set("buttontitle_Options", $this->getSmartLinkTypeOptions([
  'page',
  'file',
  'image',
  'url',
  'relative_url',
], true));
        $this->set('btFieldsRequired', $this->btFieldsRequired);
        $this->set('identifier_getString', Core::make('helper/validation/identifier')->getString(18));
    }

    public function save($args)
    {
        if (isset($args["buttontitle"]) && trim($args["buttontitle"]) != '') {
			switch ($args["buttontitle"]) {
				case 'page':
					$args["buttontitle_File"] = '0';
					$args["buttontitle_URL"] = '';
					$args["buttontitle_Relative_URL"] = '';
					$args["buttontitle_Image"] = '0';
					break;
				case 'file':
					$args["buttontitle_Page"] = '0';
					$args["buttontitle_URL"] = '';
					$args["buttontitle_Relative_URL"] = '';
					$args["buttontitle_Image"] = '0';
					break;
				case 'url':
					$args["buttontitle_Page"] = '0';
					$args["buttontitle_Relative_URL"] = '';
					$args["buttontitle_File"] = '0';
					$args["buttontitle_Image"] = '0';
					break;
				case 'relative_url':
					$args["buttontitle_Page"] = '0';
					$args["buttontitle_URL"] = '';
					$args["buttontitle_File"] = '0';
					$args["buttontitle_Image"] = '0';
					break;
				case 'image':
					$args["buttontitle_Page"] = '0';
					$args["buttontitle_File"] = '0';
					$args["buttontitle_URL"] = '';
					$args["buttontitle_Relative_URL"] = '';
					break;
				default:
					$args["buttontitle_Title"] = '';
					$args["buttontitle_Page"] = '0';
					$args["buttontitle_File"] = '0';
					$args["buttontitle_URL"] = '';
					$args["buttontitle_Relative_URL"] = '';
					$args["buttontitle_Image"] = '0';
					break;	
			}
		}
		else {
			$args["buttontitle_Title"] = '';
			$args["buttontitle_Page"] = '0';
			$args["buttontitle_File"] = '0';
			$args["buttontitle_URL"] = '';
			$args["buttontitle_Relative_URL"] = '';
			$args["buttontitle_Image"] = '0';
		}
        parent::save($args);
    }

    public function validate($args)
    {
        $e = Core::make("helper/validation/error");
        if (in_array("blacktitle", $this->btFieldsRequired) && (trim($args["blacktitle"]) == "")) {
            $e->add(t("The %s field is required.", t("Black Title")));
        }
        if (in_array("orangetitle", $this->btFieldsRequired) && (trim($args["orangetitle"]) == "")) {
            $e->add(t("The %s field is required.", t("Orange Title")));
        }
        if (in_array("description_1", $this->btFieldsRequired) && trim($args["description_1"]) == "") {
            $e->add(t("The %s field is required.", t("Description")));
        }
        if ((in_array("buttontitle", $this->btFieldsRequired) && (!isset($args["buttontitle"]) || trim($args["buttontitle"]) == "")) || (isset($args["buttontitle"]) && trim($args["buttontitle"]) != "" && !array_key_exists($args["buttontitle"], $this->getSmartLinkTypeOptions(['page', 'file', 'image', 'url', 'relative_url'])))) {
			$e->add(t("The %s field has an invalid value.", t("Button Title")));
		} elseif (array_key_exists($args["buttontitle"], $this->getSmartLinkTypeOptions(['page', 'file', 'image', 'url', 'relative_url']))) {
			switch ($args["buttontitle"]) {
				case 'page':
					if (!isset($args["buttontitle_Page"]) || trim($args["buttontitle_Page"]) == "" || $args["buttontitle_Page"] == "0" || (($page = Page::getByID($args["buttontitle_Page"])) && $page->error !== false)) {
						$e->add(t("The %s field for '%s' is required.", t("Page"), t("Button Title")));
					}
					break;
				case 'file':
					if (!isset($args["buttontitle_File"]) || trim($args["buttontitle_File"]) == "" || !is_object(File::getByID($args["buttontitle_File"]))) {
						$e->add(t("The %s field for '%s' is required.", t("File"), t("Button Title")));
					}
					break;
				case 'url':
					if (!isset($args["buttontitle_URL"]) || trim($args["buttontitle_URL"]) == "" || !filter_var($args["buttontitle_URL"], FILTER_VALIDATE_URL)) {
						$e->add(t("The %s field for '%s' does not have a valid URL.", t("URL"), t("Button Title")));
					}
					break;
				case 'relative_url':
					if (!isset($args["buttontitle_Relative_URL"]) || trim($args["buttontitle_Relative_URL"]) == "") {
						$e->add(t("The %s field for '%s' is required.", t("Relative URL"), t("Button Title")));
					}
					break;
				case 'image':
					if (!isset($args["buttontitle_Image"]) || trim($args["buttontitle_Image"]) == "" || !is_object(File::getByID($args["buttontitle_Image"]))) {
						$e->add(t("The %s field for '%s' is required.", t("Image"), t("Button Title")));
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