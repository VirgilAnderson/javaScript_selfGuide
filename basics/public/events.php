<?php require_once('../private/initialize.php'); ?>
<?php $page = "javaScript Events"; // Change the page name?>
<?php INCLUDE(SHARED_PATH . '/header.php'); ?>
<?php INCLUDE(SHARED_PATH . '/eventsBanner.php'); ?>
      <article>
        <main>
          <h1>Events</h1>
          <p>javaScript empowers you to utilize different user actions to trigger your functions. You can trigger your functions when the page loads, when the user clicks on something, hovers over something, when they press a key, when they move their cursor away from something or even when an html element has changed.</p>
          
          <h2>Syntax</h2>
          <p>Regardless of the event you choose to target, your syntax will look similar.</p>
          <p class="code_example">&ltelement event="Your code here"&gt</p>

          <h2>onClick</h2>
          <p>Here is how that code would look utilizing a button click</p>
          <p class="code_example">&ltbutton onclick="document.getElementById('test').innerHTML = 'foo'"&gtClick Me&ltbutton&gt</p>
          <p id="test"></p>
          <button onclick="document.getElementById('test').innerHTML='foo'">Click Me</button>

          <h2>onMouseOver</h2>
          <p>The process is similar with all the events you want to use. Follow the same syntax and it should work just fine. onMouseOver works when the user moves their cursor off of an element.</p>
          <p class="code_example">&ltp onmouseover="this.style.fontSize = '35'"&gtFeed Me Seamore!&lt/p&gt</p>
          <p onmouseover="this.style.fontSize='34px'">Feed Me Seamore!</p>

          <h2>Function</h2>
          <p>Because of the length of javaScript code, it's more common to see a function placed inside the event call syntax.</p>
          <p class="code_example">&ltinput onkeydown="myFunction()"&gt</p>
          <input onkeydown="myFunction()">
          <p id="example">Type in the field</p>
          <script>
            function myFunction(){
              document.getElementById('example').innerHTML = "You typed in my field!";
            }
          </script>

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
