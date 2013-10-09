<?php echo $this->subview('partials/header.php'); ?>
    <div class="inner_content">
      <div class="content">
        <?php echo $this->generateBlock('main'); ?>
      </div>
      <div class="sidebar_container">
          <div class="sidebar">
              <?php echo $this->generateBlock('side')->asStatic(); ?>
          </div>
      </div>
    </div>
<?php echo $this->subview('partials/footer.php'); ?>