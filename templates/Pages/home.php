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
              <!-- Post categories-->
<!--               <a class="badge bg-secondary text-decoration-none link-light" href="#!">Web Design</a>
              <a class="badge bg-secondary text-decoration-none link-light" href="#!">Freebies</a> -->
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
              <p class="fs-5 mb-4"><?= $post->content ?></p>
            </section>
          </article>
          
        <?php endforeach ?>

        <?= $this->element('includes/pagination'); ?>

        <!-- Comments section-->
        <section class="mb-5">
          <div class="card bg-light">
            <div class="card-body">
              <!-- Comment form-->
              <form class="mb-4"><textarea class="form-control" rows="3" placeholder="Join the discussion and leave a comment!"></textarea></form>
              <!-- Comment with nested comments-->
              <div class="d-flex mb-4">
                <!-- Parent comment-->
                <div class="flex-shrink-0"><img class="rounded-circle" src="https://dummyimage.com/50x50/ced4da/6c757d.jpg" alt="..." /></div>
                <div class="ms-3">
                  <div class="fw-bold">Commenter Name</div>
                  If you're going to lead a space frontier, it has to be government; it'll never be private enterprise. Because the space frontier is dangerous, and it's expensive, and it has unquantified risks.
                  <!-- Child comment 1-->
                  <div class="d-flex mt-4">
                    <div class="flex-shrink-0"><img class="rounded-circle" src="https://dummyimage.com/50x50/ced4da/6c757d.jpg" alt="..." /></div>
                    <div class="ms-3">
                      <div class="fw-bold">Commenter Name</div>
                      And under those conditions, you cannot establish a capital-market evaluation of that enterprise. You can't get investors.
                    </div>
                  </div>
                  <!-- Child comment 2-->
                  <div class="d-flex mt-4">
                    <div class="flex-shrink-0"><img class="rounded-circle" src="https://dummyimage.com/50x50/ced4da/6c757d.jpg" alt="..." /></div>
                    <div class="ms-3">
                      <div class="fw-bold">Commenter Name</div>
                      When you put money directly to a problem, it makes a good headline.
                    </div>
                  </div>
                </div>
              </div>
              <!-- Single comment-->
              <div class="d-flex">
                <div class="flex-shrink-0"><img class="rounded-circle" src="https://dummyimage.com/50x50/ced4da/6c757d.jpg" alt="..." /></div>
                <div class="ms-3">
                  <div class="fw-bold">Commenter Name</div>
                  When I look at the universe and all the ways the universe wants to kill us, I find it hard to reconcile that with statements of beneficence.
                </div>
              </div>
            </div>
          </div>
        </section>
      </div>
      <!-- Side widgets-->
      <div class="col-lg-4">
        <!-- Search widget-->
        <div class="card mb-4">
          <div class="card-header">Search</div>
          <div class="card-body">
            <div class="input-group">
              <input class="form-control" type="text" placeholder="Enter search term..." aria-label="Enter search term..." aria-describedby="button-search" />
              <button class="btn btn-primary" id="button-search" type="button">Go!</button>
            </div>
          </div>
        </div>
        <!-- Categories widget-->
        <div class="card mb-4">
          <div class="card-header">Categories</div>
          <div class="card-body">
            <div class="row">
              <div class="col-sm-6">
                <ul class="list-unstyled mb-0">
                  <li><a href="#!">Web Design</a></li>
                  <li><a href="#!">HTML</a></li>
                  <li><a href="#!">Freebies</a></li>
                </ul>
              </div>
              <div class="col-sm-6">
                <ul class="list-unstyled mb-0">
                  <li><a href="#!">JavaScript</a></li>
                  <li><a href="#!">CSS</a></li>
                  <li><a href="#!">Tutorials</a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <!-- Side widget-->
        <div class="card mb-4">
          <div class="card-header">Side Widget</div>
          <div class="card-body">You can put anything you want inside of these side widgets. They are easy to use, and feature the Bootstrap 5 card component!</div>
        </div>
      </div>
    </div>
  </div>
  <!-- Footer-->
  <footer class="py-5 bg-dark">
    <div class="container"><p class="m-0 text-center text-white">Copyright &copy; Your Website 2023</p></div>
  </footer>
  <!-- Bootstrap core JS-->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
  <!-- Core theme JS-->
  <script src="<?= $this->Url->script('scripts') ?>"></script>
</body>
</html>
