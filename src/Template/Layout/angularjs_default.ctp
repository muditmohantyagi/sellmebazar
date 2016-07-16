<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

$cakeDescription = 'Free classified advertisement';
?>
<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= $cakeDescription ?>:
        <?= $this->fetch('title') ?>
    </title>
    <?= $this->Html->meta('icon') ?>
    <!-- Bootstrap Core CSS -->
    <?php //echo $this->Html->css(array('bootstrap.min','style','modern-business','font-awesome.min')) ?>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
 <?php echo $this->Html->css(array('bootstrap.min','style','modern-business','font-awesome.min')) ?>
 <?php echo $this->Html->script(array('jquery','bootstrap.min')) ?>
    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
</head>
<body>
<?php echo $this->Element('main_header'); ?>

 <div class="container" ng-app="mainApp">
	<?php echo $this->element('home_search'); ?>
			<?php //echo $this->Flash->render() ?>
     <?php //echo $this->fetch('content') ?>
	 <ng-view></ng-view> 
 </div>
 <div class="container">
<?php  echo $this->element('footer') ?>
</div>
    <!-- Bootstrap Core JavaScript -->
    <!-- Script to Activate the Carousel -->
	 <?php echo $this->Html->script(array('ng/1.5.6-angular.min','ng/1.5.6-angular-route.min','ng/app/app')) ?>
<!--
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/angularjs/1.2.28/angular.min.js"></script>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/angularjs/1.2.28//angular-route.min.js"></script>
-->

<script>
(function(){
  // setup your carousels as you normally would using JS
  // or via data attributes according to the documentation
  // http://getbootstrap.com/javascript/#carousel
  $('#carousel123').carousel({ interval: 2000 });
  $('#carouselABC').carousel({ interval: 3600 });
}());

(function(){
  $('.carousel-showsixmoveone .item').each(function(){
    var itemToClone = $(this);

    for (var i=1;i<6;i++) {
      itemToClone = itemToClone.next();

      // wrap around if at end of item collection
      if (!itemToClone.length) {
        itemToClone = $(this).siblings(':first');
      }

      // grab item, clone, add marker class, add to collection
      itemToClone.children(':first-child').clone()
        .addClass("cloneditem-"+(i))
        .appendTo($(this));
    }
  });
}());
</script>

</body>
</html>
