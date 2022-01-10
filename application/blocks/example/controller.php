<?php namespace Application\Block\Example;

defined("C5_EXECUTE") or die("Access Denied.");

use Concrete\Core\Block\BlockController;
use Concrete\Core\Editor\LinkAbstractor;
use Core;

class Controller extends BlockController
{
    public $btFieldsRequired = [];
    protected $btTable = 'btExample';
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
        return t("example");
    }

    public function getSearchableContent()
    {
        $content = [];
        $content[] = $this->code;
        $quick_optionsExploded = explode("\n", $this->quick);
        $quick_options = [];
        foreach ($quick_optionsExploded as $quick_option) {
            $quick_options[] = '<li>' . $quick_option . '</li>';
        }
        if (!empty($quick_options)) {
            $content[] = '<ul>' . implode('', $quick_options) . '</ul>';
        }
        $content[] = $this->what;
        return implode(" ", $content);
    }

    public function view()
    {
        $this->set("quick_options", trim($this->quick) != "" ? explode("\n", $this->quick) : []);
        $this->set('what', LinkAbstractor::translateFrom($this->what));
    }

    public function add()
    {
        $this->addEdit();
    }

    public function edit()
    {
        $this->addEdit();
        
        $this->set('what', LinkAbstractor::translateFromEditMode($this->what));
    }

    protected function addEdit()
    {
        $this->requireAsset('redactor');
        $this->requireAsset('core/file-manager');
        $this->set('btFieldsRequired', $this->btFieldsRequired);
        $this->set('identifier_getString', Core::make('helper/validation/identifier')->getString(18));
    }

    public function save($args)
    {
        $args['code'] = htmlentities($args['code']);
        $args['what'] = LinkAbstractor::translateTo($args['what']);
        parent::save($args);
    }

    public function validate($args)
    {
        $e = Core::make("helper/validation/error");
        if (in_array("code", $this->btFieldsRequired) && trim($args["code"]) == "") {
            $e->add(t("The %s field is required.", t("code")));
        }
        if (in_array("quick", $this->btFieldsRequired) && (trim($args["quick"]) == "")) {
            $e->add(t("The %s field is required.", t("quick")));
        }
        if (in_array("what", $this->btFieldsRequired) && (trim($args["what"]) == "")) {
            $e->add(t("The %s field is required.", t("what you see")));
        }
        return $e;
    }

    public function composer()
    {
        $this->edit();
    }
}