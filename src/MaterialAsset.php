<?php
/**
 * Created by PhpStorm.
 * User: base
 * Date: 25/12/2019
 * Time: 01:52
 */

namespace google\material;

use yii\web\AssetBundle;

class MaterialAsset extends AssetBundle
{
    public $sourcePath = '@bower-asset/material-components-web/build';
    public $css = [
        'material-components-web.css'
    ];
    public $js = [
        'material-components-web.js'
    ];
}