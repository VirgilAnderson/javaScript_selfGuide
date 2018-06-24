<?php require_once('../private/initialize.php'); ?>
<?php $page = "Where to write javaScript?"; // Change the page name?>
<?php INCLUDE(SHARED_PATH . '/header.php'); ?>
<?php INCLUDE(SHARED_PATH . '/introBanner.php'); ?>
      <article>
        <main>
          <h1>Where should I write my javaScript functions?</h1>
          <p>javaScript can be written in the head, body or on an external file</p>
          <h2>Inline javaScript</h2>
          <p class="code_example"><script></p>
          <p id="demo">Watch the text change before your very eyes</p>
          <button onclick="document.getElementById('demo').style.fontSize='35px'">Click Me</button>
          <h2>Show Elements</h2>
          <p>javaScript can dynamically display hidden elements on the page at any time</p>
          <p class="code_example">getElementById("demo_2").style.display ="block"; </p>
          <p id="demo_2" style="display: none">TAA DAAAA!!!!!</p>
          <button onclick="document.getElementById('demo_2').style.display='block'">Want to see a magic trick?</button>
          <h2>Hide Elements</h2>
          <p>javaScript can also dynamically hide elements</p>
          <p class="code_example">getElementById("demo_3").style.display="none";</p>
          <p id="demo_3">Watch me disappear!</p>
          <button onclick="getElementById('demo_3').style.display='none'">Abra Cadabra</button>
        </main>
        <?php INCLUDE(SHARED_PATH . '/aside.php'); ?>
      </article>
    </div><!-- .row -->
    <script>var page = "link_3"; // assign the class .active to the active page</script>
    <?php INCLUDE(SHARED_PATH .'/footer.php'); ?>
