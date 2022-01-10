<?php

namespace Concrete\Core\StyleCustomizer\Style;

use Concrete\Core\StyleCustomizer\Style\Value\ImageValue;
use Concrete\Package\AssetPipeline\Src\Core\Original\StyleCustomizer\Style\ImageStyle as CoreImageStyle;
use Concrete\Package\AssetPipeline\Src\StyleCustomizer\Style\ExtractableStyleInterface;
use Concrete\Package\AssetPipeline\Src\StyleCustomizer\Style\Value\ExtractorInterface;

class ImageStyle extends CoreImageStyle implements ExtractableStyleInterface
{

    public function getValuesFromExtractor(ExtractorInterface $extractor)
    {
        $values = array();

        $vars = $extractor->extractMatchingVariables('.+\-image');
        foreach ($vars as $name => $value) {
            $value = trim($value, "'\"");
            $uri = $extractor->normalizeUri($value);

            $iv = new ImageValue(substr($name, 0, -strlen('-image')));
            $iv->setUrl($uri);
            if (is_object($iv)) {
                $values[] = $iv;
            }
        }

        return $values;
    }

}
