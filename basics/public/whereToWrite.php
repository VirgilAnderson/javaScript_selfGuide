<?php require_once('../private/initialize.php'); ?>
<?php $page = "Where to write javaScript?"; // Change the page name?>
<?php INCLUDE(SHARED_PATH . '/header.php'); ?>
<?php INCLUDE(SHARED_PATH . '/introBanner.php'); ?>
      <article>
        <main>
          <h1>Where should I write my javaScript functions?</h1>
          <p>javaScript can be written in the head, body or on an external file</p>
          <h2>Inline javaScript</h2>
          <p>If you want to embed javaScript into your head or body, you must place it inside of &ltscript&gt tags</p>
          <p class="code_example">&ltscript&gt</p>
          <p class="code_example">document.getElementById("demo").style.fontWeight="bold";</p>
          <p class="code_example">&lt/script&gt</p>
          <p id="demo">javaScript makes me bold!</p>
          <script>
            document.getElementById('demo').style.fontWeight="bold";
          </script>

        </main>
        <?php INCLUDE(SHARED_PATH . '/aside.php'); ?>
      </article>
    </div><!-- .row -->
    <script>var page = "link_4"; // assign the class .active to the active page</script>
    <?php INCLUDE(SHARED_PATH .'/footer.php'); ?>
