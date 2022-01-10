<?php namespace Application\Block\FilteredSection;

defined("C5_EXECUTE") or die("Access Denied.");

use Concrete\Core\Block\BlockController;
use Core;

class Controller extends BlockController
{
    public $btFieldsRequired = [];
    protected $btTable = 'btFilteredSection';
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
        return t("Filtered Section");
    }

    public function getBlockTypeName()
    {
        return t("Filtered Section");
    }

    public function getSearchableContent()
    {
        $content = [];
        $content[] = $this->titleone;
        $content[] = $this->titletwo;
        $content[] = $this->orangetitle;
        return implode(" ", $content);
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
        $this->set('btFieldsRequired', $this->btFieldsRequired);
        $this->set('identifier_getString', Core::make('helper/validation/identifier')->getString(18));
    }

    public function validate($args)
    {
        $e = Core::make("helper/validation/error");
        if (in_array("titleone", $this->btFieldsRequired) && trim($args["titleone"]) == "") {
            $e->add(t("The %s field is required.", t("Title 1")));
        }
        if (in_array("titletwo", $this->btFieldsRequired) && (trim($args["titletwo"]) == "")) {
            $e->add(t("The %s field is required.", t("Title 2")));
        }
        if (in_array("orangetitle", $this->btFieldsRequired) && (trim($args["orangetitle"]) == "")) {
            $e->add(t("The %s field is required.", t("Orange Title")));
        }
        return $e;
    }

    public function composer()
    {
        $this->edit();
    }
}