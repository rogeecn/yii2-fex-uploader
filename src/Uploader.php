<?php

namespace FexUploader;

class Uploader extends \yii\base\Widget
{
    public $model = '';
    public $attrbute = '';
    public $template="";

    public $options = [
        'auto'=>true,
        'swf' => '/Uploader.swf',
        'server' => '/upload',
        'pick' => '#picker',
        'accept' => [
        ]
    ];
    public $callback = [
        'fileQueued'=>'',
        'uploadProgress'=>'',
        'uploadSuccess'=>'',
        'uploadError'=>'',
        'uploadComplete'=>'',
    ];

    public function run()
    {
        $this->registerAssets();
    }

    protected function registerAssets(){
        UploaderAssets::register(\Yii::$app->getView());
    }
}
