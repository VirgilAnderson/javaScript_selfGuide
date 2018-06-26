<?php require_once('../private/initialize.php'); ?>
<?php $page = "Variables in javaScript"; // Change the page name?>
<?php INCLUDE(SHARED_PATH . '/header.php'); ?>
<?php INCLUDE(SHARED_PATH . '/eventsBanner.php'); ?>
      <article>
        <main>

          <?php INCLUDE(SHARED_PATH . '/pagination.php'); ?>
        </main>
        <?php INCLUDE(SHARED_PATH . '/aside.php'); ?>

      </article>
    </div><!-- .row -->
    <script>
      var page = "link_9"; // assign the class .active to the active page
      var page_2 = 9; // Assign the class .paginationActive to the active page
    </script>
    <?php INCLUDE(SHARED_PATH .'/footer.php'); ?>
