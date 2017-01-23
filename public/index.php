
<!--
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<form action="/first.local/www/add.php" method="post" enctype="multipart/form-data">
    <label for="title">Название</label>
    <input type="text" id="title" name="title">
    <br>
    <label for="text">Файл</label>
    <input type="text" id="image" name="image">
    <br>
    <input type="submit">
    </form>





<form action="/add.php" title="text" method="post">
    <p>Запишите сюда новость</p>
    <p><textarea name="newstitle" cols="100" rows="5" title="Заголовок новости">Пиши сюда заголовок новости</textarea></p>
    <textarea name="newnews" cols="100" rows="10" title="Поле ввода текста">Пиши сюда новость</textarea>
    <input type="submit" title="123" name="new" value="go">
</form>



</body>
</html>
-->
<?php


class Page {

    public $header = 'Header';
    public $content;
    public $footer;

    public function __construct($head, $cont, $foot)
    {
        $this -> header = $head;
        $this -> content = $cont;
        $this -> footer = $foot;
    }

    public function __destruct()
    {
        // TODO: Implement __destruct() method.

        echo 'I am destructor';
    }

    public function view($var){
        echo $var;
    }

//    public function view_header() {
//        $this -> view($this -> header);
//    }
//    public function view_content() {
//        $this -> view($this -> content);
//    }
//    public function view_footer() {
//        $this -> view($this -> footer);
//    }





}

$head = 'Голова';
$cont = 'Контент';
$foot = 'Подвал';

$index = new Page($head, $cont, $foot);
//$index -> view_header();
//$index -> view_content();
echo $index ->content;
//$index -> view($foot);







class Article {
    public $title;
    public $text;

//    public function view() {
//        echo '<h1>' . $this->title . '</h1>';
//        echo '<div>' . $this->text . '</div>';
//
//    }

    public function __construct($title, $text)
    {
        $this->title = $title;
        $this->text = $text;

    }

    public function __destruct()
    {
        // TODO: Implement __destruct() method.
        echo "<br>I'm destruct view<br>"; 
    }

    public function view() {
        echo '<h1>' . $this->title . '</h1>';
        echo '<div>' . $this->text . '</div>';

    }

}

$article = new Article ('Заголовок', 'Текст');
$article->view();






