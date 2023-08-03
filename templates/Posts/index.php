<?php use Cake\Utility\Text; ?>
<?php use Cake\Routing\Router; ?>

<?= $this->element('includes/header'); ?>

  <!-- Page content-->
  <div class="container mt-5">
    <div class="row">
      <div class="col-lg-8">

        <?= $this->element('includes/pagination'); ?>

        <?php foreach ($posts as $post): ?>
          <!-- Post content-->
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
              	<?= Text::truncate($post->content, 150, ['ellipsis' => '...']); ?>
              </p>
              <p>
              	<a 
              		href="<?= Router::url('/posts/view/' . $post->id) ?>" 
              		class="btn btn-primary"
              		title="<?= $post->title ?>">
              		Read More
              	</a>
              </p>
            </section>
          </article>

          <hr>
          
        <?php endforeach ?>

        <?= $this->element('includes/pagination'); ?>

      </div>

		<?= $this->element('includes/side_widgets'); ?>

    </div>
  </div>

<?= $this->element('includes/footer'); ?>
