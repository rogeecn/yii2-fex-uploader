<?php
/**
 * Created by PhpStorm.
 * User: yanghao
 * Date: 2015/6/5
 * Time: 10:00
 */

namespace FexUploader;


use yii\web\AssetBundle;

class UploaderAssets extends AssetBundle
{
    public $basePath = '@vendor/rogeecn/yii2-fex-uploader/assets';
    public $css = [
        'webuploader.css',
    ];

    public $js = [
        'webuploader.js'
    ];
    public $depends = [
    ];
}