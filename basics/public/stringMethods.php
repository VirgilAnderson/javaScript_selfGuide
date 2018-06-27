<?php require_once('../private/initialize.php'); ?>
<?php $page = "String Methods"; // Change the page name?>
<?php INCLUDE(SHARED_PATH . '/header.php'); ?>
<?php INCLUDE(SHARED_PATH . '/stringMethodsBanner.php'); ?>
      <article>
        <main>
          <h1>Using String Methods</h1>
          <p>Strings as objects allows you to find out how many characters are contained within your string, search for specific content within your string or even extract bits out of a string.</p>
          <h2>String Length</h2>
          <p>A useful built in feature within javaScript is the string length function. It enables you to take a string and determine how long the string is.</p>
          <div  class="code_example">
            <p>var sampleText = "Mary had a little lamb";</p>
            <p>var result = sampleText.length;</p>
          </div>
          <p id="demo">How many letters are in variable sampleText?</p>
          <script>
            var sampleText="Mary had a little lamb";
            var result = sampleText.length;
          </script>
          <button onclick="document.getElementById('demo').innerHTML = result">Click Here To Find Out</button>
          <p>javaScript counts a single white space by itself as a character and adds it to the string length total.</p>

          <h2>Find a string within a string</h2>
          <p>javaScript makes it easy to find specific data within the string that you are working with. We simply use the index of function.</p>
          <p class="code_example">var string = "This is my string";</p>
          <p class="code_example">var position = string.indexOf('string');</p>
          <p id="index_of">What position does the word string sit in my string?</p>
          <script>
            var string="This is my string";
            var pos = string.indexOf('string');
          </script>
          <button onclick="getElementById('index_of').innerHTML=pos">Click here to find out</button>

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
