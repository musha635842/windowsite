<?php
header('Access-Control-Allow-Origin: *');
if (empty($_GET['id']))
{
  $_GET['id'] = 1;
} 
Window::model()->updateByPk($_GET['id'], array(
    'request' => Window::model()->findByPk($_GET['id'])->request + 1 
));
$this->pageTitle=Yii::app()->name;
?>
<?php if(Window::model()->findByPk($_GET['id'])->gauge > 0) {
    print_r('<div id="window">
    <style>
     #window
     {
     width: 123px;
     height: 123px;
     background: #00f;
     visibility: hidden;
     }
</style>'.
      Window::model()->findByPk($_GET['id'])->content
      .
      '</div>'
    );
  }?>

<script>
setTimeout(function () {document.getElementById('window').style.visibility = 'visible'} ,10000)
</script>