<?php require_once('../private/initialize.php'); ?>
<?php $page = "Change Attributes"; // Change the page name ?>
<?php INCLUDE(SHARED_PATH . '/header.php'); ?>
<?php INCLUDE(SHARED_PATH . '/introBanner.php'); ?>
    <div class="row">
      <article>
        <main>
          <h1>Change Attributes</h1>
          <p>With JavaScript, you can easily change attribute values like source, href, width, height, alt, lang, title, id, etc.</p>
          <p class="code_example">document.getElementById("myImage").src='pic_bulbon.gif'</p>
          <p>In this instance, we will change the image source attribute with a button click</a>
          <button onclick="document.getElementById('myImage').src='images/pic_bulbon.gif'">ON</button>
          <img id="myImage" src="images/pic_bulboff.gif" style="width: 100px">
          <button onclick="document.getElementById('myImage').src='images/pic_bulboff.gif'">OFF</button>


        </main>
        <?php INCLUDE(SHARED_PATH . '/aside.php'); ?>
      </article>
    </div><!-- .row -->
    <script> var page = "link_2"; // assign the class .active to the active page</script>
    <?php INCLUDE(SHARED_PATH .'/footer.php'); ?>
