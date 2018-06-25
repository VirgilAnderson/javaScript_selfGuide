<?php require_once('../private/initialize.php'); ?>
<?php $page = "Variables in javaScript"; // Change the page name?>
<?php INCLUDE(SHARED_PATH . '/header.php'); ?>
<?php INCLUDE(SHARED_PATH . '/variableBanner.php'); ?>
      <article>
        <main>
          <h1>javaScript Variables</h1>
          <p>Variables give javaScript life!</p>

          <h2>Variable Identifiers</h2>
          <p>In order to create a variable, you must first give it a name. Let's name our variable box_1. It is useful however to give your variables a meaningul name.</p>
          <p>Declare your variable with the keyword var</p>
          <p class="code_example">var box_1;</p>

          <h2>Assignment operator</h2>
          <p>To put information into your variable container, we must use the assignment operator. The assignment operator is the = sign.</p>
          <p class="code_example">var box_1 = 8;</p>
          <p>Now our box stores the number 8. We can use this information to output the number later.</p>


        </main>
        <?php INCLUDE(SHARED_PATH . '/aside.php'); ?>
      </article>
    </div><!-- .row -->
    <script>var page = "link_6"; // assign the class .active to the active page</script>
    <?php INCLUDE(SHARED_PATH .'/footer.php'); ?>
