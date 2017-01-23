<?php

class JsonToFile {

    public $line;






    public function __construct()
    {

        $fromPost = $_POST;
        $fromPost = json_encode($fromPost, JSON_UNESCAPED_UNICODE);

        $text = $this->line = $fromPost;
        $fp = fopen("file.txt", "w");
        fwrite($fp, $text);
        fclose($fp);


    }


}

//
//$fromPost = $_POST['newstitle'].$_POST['newnews'];
//$fromPost = json_encode($fromPost, JSON_UNESCAPED_UNICODE);
//var_dump($_POST);

$item = new JsonToFile();



//
//$text = "Какой-то текст";
//
//// открываем файл, если файл не существует,
////делается попытка создать его
//$fp = fopen("file.txt", "w");
//
//// записываем в файл текст
//fwrite($fp, $text);
//
//// закрываем
//fclose($fp);