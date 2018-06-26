<?php require_once('../private/initialize.php'); ?>
<?php $page = "String Methods"; // Change the page name?>
<?php INCLUDE(SHARED_PATH . '/header.php'); ?>
<?php INCLUDE(SHARED_PATH . '/stringMethodsBanner.php'); ?>
      <article>
        <main>
          <h1>Using String Methods</h1>
          <p>Strings as objects allows you to find out how many characters are contained within your string, search for specific content within your string or even extract bits out of a string.</p>
          <?php INCLUDE(SHARED_PATH . '/pagination.php'); ?>
        </main>
        <?php INCLUDE(SHARED_PATH . '/aside.php'); ?>
      </article>
    </div><!-- .row -->
    <script>
      var page = "link_10"; // assign the class .active to the active page
      var page_2 = 10; // Assign the class .paginationActive to the active page
    </script>
    <?php INCLUDE(SHARED_PATH .'/footer.php'); ?>
