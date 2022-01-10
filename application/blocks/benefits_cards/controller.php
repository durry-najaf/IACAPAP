<?php namespace Application\Block\BenefitsCards;

defined("C5_EXECUTE") or die("Access Denied.");

use Concrete\Core\Block\BlockController;
use Concrete\Core\Editor\LinkAbstractor;
use Core;
use File;
use Page;

class Controller extends BlockController
{
    public $btFieldsRequired = [];
    protected $btExportFileColumns = ['icon'];
    protected $btTable = 'btBenefitsCards';
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
        return t("Benefits Cards");
    }

    public function getSearchableContent()
    {
        $content = [];
        $content[] = $this->title;
        $content[] = $this->desc_1;
        return implode(" ", $content);
    }

    public function view()
    {
        
        if ($this->icon && ($f = File::getByID($this->icon)) && is_object($f)) {
            $this->set("icon", $f);
        } else {
            $this->set("icon", false);
        }
        $this->set('desc_1', LinkAbstractor::translateFrom($this->desc_1));
    }

    public function add()
    {
        $this->addEdit();
    }

    public function edit()
    {
        $this->addEdit();
        
        $this->set('desc_1', LinkAbstractor::translateFromEditMode($this->desc_1));
    }

    protected function addEdit()
    {
        $this->requireAsset('core/file-manager');
        $this->requireAsset('redactor');
        $this->set('btFieldsRequired', $this->btFieldsRequired);
        $this->set('identifier_getString', Core::make('helper/validation/identifier')->getString(18));
    }

    public function save($args)
    {
        $args['desc_1'] = LinkAbstractor::translateTo($args['desc_1']);
        parent::save($args);
    }

    public function validate($args)
    {
        $e = Core::make("helper/validation/error");
        if (in_array("icon", $this->btFieldsRequired) && (trim($args["icon"]) == "" || !is_object(File::getByID($args["icon"])))) {
            $e->add(t("The %s field is required.", t("Icon")));
        }
        if (in_array("title", $this->btFieldsRequired) && (trim($args["title"]) == "")) {
            $e->add(t("The %s field is required.", t("Title")));
        }
        if (in_array("desc_1", $this->btFieldsRequired) && (trim($args["desc_1"]) == "")) {
            $e->add(t("The %s field is required.", t("Description")));
        }
        return $e;
    }

    public function composer()
    {
        $this->edit();
    }
}