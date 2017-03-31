<!--Breadcrumb-->
<section id="breadcrumb" class="space">
  <div class="container">
    <div class="row">
      <div class="col-sm-6 breadcrumb-block">
        <h2><?php echo $page_title; ?></h2>&nbsp;
        <?php if ($page_title=='货币兑换'): ?>
          <a href="https://www.google.com/finance/converter?a=1&amp;from=CAD&amp;to=USD" target="_blank" class="btn btn-success btn-large" style="margin-right: 5px;">Currency rate</a>
          <?php endif; ?>
      </div>
      <div class="col-sm-6 breadcrumb-block text-right">
        <ol class="breadcrumb">
          <li><span>You are here:</span><a href="home.php">Home</a></li>
          <li class="active"><?php echo $page_title; ?></li>
        </ol>
      </div>
    </div>
  </div>
</section>
