<?php namespace Application\Block\RoundedVideo;

defined("C5_EXECUTE") or die("Access Denied.");

use Concrete\Core\Block\BlockController;
use Core;

class Controller extends BlockController
{
    public $btFieldsRequired = [];
    protected $btTable = 'btRoundedVideo';
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
        return t("rounded video");
    }

    public function getBlockTypeName()
    {
        return t("rounded video");
    }

    public function getSearchableContent()
    {
        $content = [];
        $content[] = $this->roundedvideo;
        return implode(" ", $content);
    }

    public function view()
    {
        $this->set("roundedvideo", ($vimeoPlayerID = $this->vimeoPlayerID($this->roundedvideo)) ? $vimeoPlayerID : null);
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
        if (in_array("roundedvideo", $this->btFieldsRequired) && trim($args["roundedvideo"]) == "") {
            $e->add(t("The %s field is required.", t("rounded video")));
        }
        elseif (trim($args["roundedvideo"]) != "") {
            if (!$this->vimeoPlayerID($args["roundedvideo"])) {
                $e->add(t("The %s field does not have a valid Vimeo URL.", t("rounded video")));
            }
        }
        return $e;
    }

    public function composer()
    {
        $this->edit();
    }

    public function vimeoPlayerID($link)
    {
        $regexstr = '~(?:<iframe [^>]*src=")?(?:https?:\/\/(?:[\w]+\.)*vimeo\.com(?:[\/\w:]*(?:\/videos)?)?\/([0-9]+)[^\s]*)"?(?:[^>]*><\/iframe>)?(?:<p>.*<\/p>)?~ix';
        preg_match($regexstr, $link, $matches);
        return $matches ? $matches[1] : false;
    }
}