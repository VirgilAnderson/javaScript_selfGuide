<?php require_once('../private/initialize.php'); ?>
<?php $page = "Change CSS Values"; // Change the page name?>
<?php INCLUDE(SHARED_PATH . '/header.php'); ?>
<?php INCLUDE(SHARED_PATH . '/introBanner.php'); ?>
      <article>
        <main>
          <h1>Change CSS Values</h1>
          <p>javaScript can easily change style values to enhance the look of your web project</p>
          <p class="code_example">document.getElementById("demo").style.fontSize ="35px"; </p>
          <p id="demo">Watch the text change before your very eyes</p>
          <button onclick="document.getElementById('demo').style.fontSize='35px'">Click Me</button>

        </main>
        <?php INCLUDE(SHARED_PATH . '/aside.php'); ?>
      </article>
    </div><!-- .row -->
    <script>var page = "link_3"; // assign the class .active to the active page</script>
    <?php INCLUDE(SHARED_PATH .'/footer.php'); ?>
