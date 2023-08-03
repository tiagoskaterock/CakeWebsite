<?= $this->element('includes/header'); ?>

<div class="container mt-5">
  <div class="row">
    <div class="col-lg-8">

      <article>

        <header class="mb-4">

          <h1 class="fw-bolder mb-1"><?php echo $post->title ?></h1>

          <div class="text-muted fst-italic mb-2">
            Posted <?php echo $post->created->diffForHumans() ?>
          </div>
          
        </header>

        <!-- Preview image figure-->
        <figure class="mb-4">
          <img 
            class="img-fluid rounded" 
            src="<?= $post->image ?>" 
            alt="<?= $post->title ?>">
        </figure>

        <!-- Post content-->
        <section class="mb-5">
          <p class="fs-5 mb-4">
          	<?= $post->content ?>
          </p>
        </section>
      </article>         

    </div>

	<?= $this->element('includes/side_widgets'); ?>

  </div>

</div>

<?= $this->element('includes/footer'); ?>
