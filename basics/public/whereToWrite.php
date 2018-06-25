<?php require_once('../private/initialize.php'); ?>
<?php $page = "Where to write javaScript?"; // Change the page name?>
<?php INCLUDE(SHARED_PATH . '/header.php'); ?>
<?php INCLUDE(SHARED_PATH . '/whereToBanner.php'); ?>
      <article>
        <main>
          <h1>Where should I write my javaScript functions?</h1>
          <p>Depending on the circumstances, you can choose different places to write your javaScript. Simple code might just be added into the body or head of the html file whereas more complicated functions should be written and maintained externally to maximize load times and enable ease of code maintenance.</p>
          <h2>javaScript in &lthead&gt and &ltbody&gt</h2>
          <p>If you want to embed javaScript into your head or body, you must place it inside of &ltscript&gt tags</p>
          <p class="code_example">&ltscript&gt</p>
          <p class="code_example">document.getElementById("demo").style.fontWeight="bold";</p>
          <p class="code_example">&lt/script&gt</p>
          <p id="demo">javaScript makes me bold!</p>
          <script>
            document.getElementById('demo').style.fontWeight="bold";
          </script>
          <h2>External javaScript</h2>
          <p>If you posses a large amount of code or several smaller functions, it makes more sense to place your javaScript into an external source.</p>
          <p class="code_example">function myFunction(){</p>
          <p class="code_example">  getElementById("demo_2").innerHTML = "I changed this paragraph from firstScript.js";</p>
          <p class="code_example">}</p>
          <p class="code_example">&ltscript&gt type="button" onclick="myFunction()">Try it&ltscript&gt</p>
          <p id="demo_2">Pay attention to this text</p>
          <button onclick="getElementById('demo_2').innerHTML = 'I changed this paragraph from firstScript.js'">Click me to change text</button>
          <h2>Reference external javaScript</h2>
          <p>Rather than embedding the file name in the button, you can also reference the external file and then call the function.</p>
          <p class="code_example">&ltbutton type="button" onclick="functionName()"&gtTry it&ltbutton&gt</p>
          <p class="code_example">&ltscript src="/javaScript/newScript.js"&gt&lt/script&gt</p>
          <p id="demo_3">This text will change</p>

          <button type="button" onclick="newFunction()">Click Me</button>
          <script src="/javaScript/newScript.js"></script>

        </main>
        <?php INCLUDE(SHARED_PATH . '/aside.php'); ?>
      </article>
    </div><!-- .row -->
    <script>var page = "link_4"; // assign the class .active to the active page</script>
    <?php INCLUDE(SHARED_PATH .'/footer.php'); ?>
