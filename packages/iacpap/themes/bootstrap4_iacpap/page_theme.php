<?php

namespace Concrete\Package\Iacpap\Theme\Bootstrap4Iacpap;

use Concrete\Core\Asset\Asset;
use Concrete\Core\Asset\AssetList;
use Concrete\Core\Page\Theme\Theme;

defined('C5_EXECUTE') or die("Access Denied.");

class PageTheme extends Theme
{
    protected $pThemeGridFrameworkHandle = 'bootstrap4';

    public function registerAssets()
    {
        // We want to utilize the internal minifying logic for the theme's own
        // JavaScript. If new files are needed, add them here.

        $al = AssetList::getInstance();
/*		 $this->requireAsset('javascript', 'jquery');
		 $this->providesAsset('javascript', 'core/cms');
        $this->providesAsset('css', 'core/cms');*/

      
		$al->register(
            'javascript',
            'wow',
			'themes/bootstrap4_iacpap/js/wow.min.js',
            array(
                'version' => '0.1',
                'position' => Asset::ASSET_POSITION_FOOTER,
                'minify' => false,
                'combine' => false
            ),
            $this->getPackageHandle()
        );
		$al->register(
            'javascript',
            'plugin',
			'themes/bootstrap4_iacpap/js/plugin.min.js',
            array(
                'version' => '0.1',
                'position' => Asset::ASSET_POSITION_FOOTER,
                'minify' => false,
                'combine' => false
            ),
            $this->getPackageHandle()
        );
		 $al->register(
            'javascript',
            'main',
			'themes/bootstrap4_iacpap/js/main.js',
            array(
                'version' => '0.1',
                'position' => Asset::ASSET_POSITION_FOOTER,
                'minify' => false,
                'combine' => false
            ),
            $this->getPackageHandle()
        );
        
        $this->requireAsset('javascript', 'picturefill'); // Responsive images fallback
        $this->requireAsset('javascript', 'wow');
		$this->requireAsset('javascript', 'plugin');
		$this->requireAsset('javascript', 'main');

    }

    public function getThemeEditorClasses()
    {
        return array(
            // Custom styles for the content editor (Redactor)
            //array('title' => t('Standard Button'), 'menuClass' => '', 'spanClass' => 'btn btn-default'),
        );
    }

    public function getThemeBlockClasses()
    {
        return array(
            // Custom classes for the blocks
            //'content' => array('custom-class'),
        );
    }

    public function getThemeResponsiveImageMap()
    {
        return array(
            'lg' => '1600px',
            'md' => '1200px',
            'sm' => '768px',
            'xs' => '0',
        );
    }
}