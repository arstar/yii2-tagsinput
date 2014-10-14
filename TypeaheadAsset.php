<?php

/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace yii\tagsinput;

use Yii;

/**
 * 
 * @author Nghia Nguyen <yiidevelop@hotmail.com>
 * @since 2.0
 */
class TypeaheadAsset extends \yii\web\AssetBundle {

    public $sourcePath = '@bower/typeahead.js';
    public $js = ['dist/typeahead.bundle.min.js'];
    public $depends = ['yii\web\JqueryAsset'];

}
