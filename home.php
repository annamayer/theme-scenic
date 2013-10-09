<?php if (!defined('CMS')) exit; ?>
<?php
/**
 * This comment block is used just to make IDE suggestions to work
 * @var $this \Ip\View
 */
?>
<?php echo $this->subview('partials/header.php'); ?>
    <div class="home_content">
        <?php
            echo $this->generateBlock('main');
        ?>
        <div class="grid">
            <div class="homeBlock3">
                <?php echo $this->generateBlock('home1'); ?>
            </div>
            <div class="homeBlock3">
                <?php echo $this->generateBlock('home2'); ?>
            </div>
            <div class="homeBlock3">
                <?php echo $this->generateBlock('home3'); ?>
            </div>
        </div>
    </div>
    <div class="clear"><!-- --></div>
<?php echo $this->subview('partials/footer.php'); ?>
