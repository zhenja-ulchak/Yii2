<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\web\UploadedFile;

class ImageUpload extends Model{
    
    public $imege;

    public function rules()
    {
        return [
            [['imege'], 'required'],
            [['imege'], 'file', 'extensions' => 'jpg,png']
        ];
    }


    public function uploadFile(UploadedFile $file, $currentImage)
    {
        $this->imege = $file;

       if($this->validate())
       {
           
          // $this->deleteCurrentImage($currentImage);
          
           $filename = $this->generateFilename();

            $this->imege->saveAs($this->getFolder() . $filename);

            $m=Podcategory::findOne($_GET['id']);
         //die($_SERVER['DOCUMENT_ROOT'].'/web/uploads/'.$m->imege);
            if (is_file($_SERVER['DOCUMENT_ROOT'].'/web/uploads/'.$m->imege)) {

                unlink($_SERVER['DOCUMENT_ROOT'].'/web/uploads/'.$m->imege);
            }
        
            $m->imege=$filename;
            if ($m->save()) {
                return true;
            };
            
       }

    }

    private function getFolder()
    {
        return $_SERVER['DOCUMENT_ROOT'].Yii::getAlias('@web') . '/uploads/';
    }

    private function generateFilename()
    {
        return strtolower(md5(uniqid($this->imege->baseName)) . '.' . $this->imege->extension);
    }

    // public function deleteCurrentImage($currentImage)
    // {
    //     if($this->fileExists($currentImage))
    //     {
    //         unlink($this->getFolder() . $currentImage);
    //     }
    // }

    public function fileExists($currentImage)
    {
        if(!empty($currentImage) && $currentImage != null)
        {
            return file_exists($this->getFolder() . $currentImage);
        }
    }

    public function saveImage()
    { /*
        $filename = $this->generateFilename();

        $this->imege->saveAs($this->getFolder() . $filename);

        $m=Podcategory::findOne($_GET['id']);
       // die($_SERVER['DOCUMENT_ROOT'].'/web/upload/'.$m->imege);
        if (is_file($_SERVER['DOCUMENT_ROOT'].'/web/upload/'.$m->imege)) {
            unlink($_SERVER['DOCUMENT_ROOT'].'/web/upload/'.$m->imege);
        }
    
        $m->imege=$filename;
        $m->save();*/
        return $filename;
    }
}