<?php require_once('../private/initialize.php'); ?>
<?php $page = "Change Content"; // Change the page name ?>
<?php INCLUDE(SHARED_PATH . '/header.php'); ?>
<?php INCLUDE(SHARED_PATH . '/introBanner.php'); ?>
      <article>
        <main>
          <h1>Change Content</h1>
          <p>Here are a few ways to change content with javaScript</p>
          <h2>Get Element By Id</h2>
          <p>Use this method to select an element by it's ID</p>
          <p class="code_example">document.getElementById("demo").innerHTML = "Hello javaScript";</p>
          <p id="demo"></p>
          <script>
            document.getElementById("demo").innerHTML = "This content is added dynamically";
          </script>
          <h2>On button click</h2>
          <p>Use this method to add to the element whenever you click the button</p>
          <p class="code_example">onclick='document.getElementById("example").innerHTML = "Hello javaScript Programmer!"'</p>
          <p id="example">javaScript can change page content</p>
          <button onclick='document.getElementById("example").innerHTML = "Hello javaScript Programmer!"'>Click Me!</button>

        </main>
        <?php INCLUDE(SHARED_PATH . '/aside.php'); ?>
        <?php INCLUDE(SHARED_PATH . '/pagination.php'); ?>
      </article>
    </div><!-- .row -->
    <script>
      var page = "link_1"; // assign the class .active to the active page
      var page_2 = 1; // Assign the class .paginationActive to the active page
    </script>
    <?php INCLUDE(SHARED_PATH .'/footer.php'); ?>
