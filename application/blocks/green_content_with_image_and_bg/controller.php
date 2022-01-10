<?php namespace Application\Block\GreenContentWithImageAndBg;

defined("C5_EXECUTE") or die("Access Denied.");

use Concrete\Core\Block\BlockController;
use Core;
use File;
use Page;

class Controller extends BlockController
{
    public $btFieldsRequired = [];
    protected $btExportFileColumns = ['bgimg', 'img'];
    protected $btTable = 'btGreenContentWithImageAndBg';
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
        return t("Green Content with image and Bg");
    }

    public function getSearchableContent()
    {
        $content = [];
        $content[] = $this->blacktitle;
        $content[] = $this->greentitle;
        $content[] = $this->desc_1;
        return implode(" ", $content);
    }

    public function view()
    {
        
        if ($this->bgimg && ($f = File::getByID($this->bgimg)) && is_object($f)) {
            $this->set("bgimg", $f);
        } else {
            $this->set("bgimg", false);
        }
        
        if ($this->img && ($f = File::getByID($this->img)) && is_object($f)) {
            $this->set("img", $f);
        } else {
            $this->set("img", false);
        }
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
        $this->requireAsset('core/file-manager');
        $this->set('btFieldsRequired', $this->btFieldsRequired);
        $this->set('identifier_getString', Core::make('helper/validation/identifier')->getString(18));
    }

    public function validate($args)
    {
        $e = Core::make("helper/validation/error");
        if (in_array("bgimg", $this->btFieldsRequired) && (trim($args["bgimg"]) == "" || !is_object(File::getByID($args["bgimg"])))) {
            $e->add(t("The %s field is required.", t("Background Image")));
        }
        if (in_array("blacktitle", $this->btFieldsRequired) && (trim($args["blacktitle"]) == "")) {
            $e->add(t("The %s field is required.", t("Black Title")));
        }
        if (in_array("greentitle", $this->btFieldsRequired) && (trim($args["greentitle"]) == "")) {
            $e->add(t("The %s field is required.", t("Green Title")));
        }
        if (in_array("desc_1", $this->btFieldsRequired) && trim($args["desc_1"]) == "") {
            $e->add(t("The %s field is required.", t("Description")));
        }
        if (in_array("img", $this->btFieldsRequired) && (trim($args["img"]) == "" || !is_object(File::getByID($args["img"])))) {
            $e->add(t("The %s field is required.", t("Image")));
        }
        return $e;
    }

    public function composer()
    {
        $this->edit();
    }
}