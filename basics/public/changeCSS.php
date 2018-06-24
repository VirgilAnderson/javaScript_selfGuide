<?php require_once('../private/initialize.php'); ?>
<?php $page = "Change CSS Values"; // Change the page name?>
<?php INCLUDE(SHARED_PATH . '/header.php'); ?>
<?php INCLUDE(SHARED_PATH . '/introBanner.php'); ?>
      <article>
        <main>
          <h1>Change CSS Values</h1>
          <p>javaScript can easily change style values to enhance the look of your web project</p>
          <h2>Change font style</h2>
          <p class="code_example">document.getElementById("demo").style.fontSize ="35px"; </p>
          <p id="demo">Watch the text change before your very eyes</p>
          <button onclick="document.getElementById('demo').style.fontSize='35px'">Click Me</button>
          <h2>Show Elements</h2>
          <p>javaScript can dynamically display hidden elements on the page at any time</p>
          <p id="code_example">getElementById("demo_2").style.display ="block"; </p>
          <p id="demo_2" style="display: none">TAA DAAAA!!!!!</p>
          <button onclick="document.getElementById('demo_2').style.display='block'">Want to see a magic trick?</button>

        </main>
        <?php INCLUDE(SHARED_PATH . '/aside.php'); ?>
      </article>
    </div><!-- .row -->
    <script>var page = "link_3"; // assign the class .active to the active page</script>
    <?php INCLUDE(SHARED_PATH .'/footer.php'); ?>
