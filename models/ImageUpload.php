<?php

namespace app\models;

use yii\base\Model;
use Yii;

class ImageUpload extends Model{
    
    public $image;
    
    public function rules()
    {
        return [
            [['image'], 'required'],
            [['image'], 'file', 'extensions' => 'jpg,png']
        ];
    }
    
    public function uploadFile(\yii\web\UploadedFile $file, $currentImage)
    {
        $this->image = $file;
        
        if($this->validate())
        {
            $this->deleteCurrentImage($currentImage);

            $filename = strtolower(uniqid($file->baseName)) . '.' . $file->extension;

            $file->saveAs(Yii::getAlias('@web') . 'uploads/' . $filename);

            return $filename;
        }
    }
     
    public function deleteCurrentImage($currentImage){
        
        if(!empty($currentImage) && $currentImage != null){
            if(file_exists(Yii::getAlias('@web') . 'uploads/' . $currentImage))
            {
                unlink(Yii::getAlias('@web') . 'uploads/' . $currentImage);
            }
        } 
    }
}
