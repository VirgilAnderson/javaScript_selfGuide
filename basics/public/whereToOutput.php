<?php require_once('../private/initialize.php'); ?>
<?php $page = "Where to Output javaScript?"; // Change the page name?>
<?php INCLUDE(SHARED_PATH . '/header.php'); ?>
<?php INCLUDE(SHARED_PATH . '/outputBanner.php'); ?>
      <article>
        <main>
          <h1>Where Should I output my javaScript?</h1>
          <p>You may be wondering where you can print your data out with javaScript. We'll start by embedding it in HTML</p>
          <h2>Outputting javaScript to HTML</h2>
          <p class="code_example">document.getElementById("sample").innerHTML= 5 + 6;</p>
          <p id="sample">Here is the text to change</p>
          <button type="button" onclick="document.getElementById('sample').innerHTML= 5 + 6;">What's 5 + 6</button>
        </main>
        <?php INCLUDE(SHARED_PATH . '/aside.php'); ?>
      </article>
    </div><!-- .row -->
    <script>var page = "link_5"; // assign the class .active to the active page</script>
    <?php INCLUDE(SHARED_PATH .'/footer.php'); ?>