<?php namespace Application\Block\ResponsiveImageContainer;

defined("C5_EXECUTE") or die("Access Denied.");

use Concrete\Core\Block\BlockController;
use Core;
use File;
use Page;

class Controller extends BlockController
{
    public $btFieldsRequired = [];
    protected $btExportFileColumns = ['img'];
    protected $btTable = 'btResponsiveImageContainer';
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
        return t("Image Responsive Container");
    }

    public function view()
    {
        
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