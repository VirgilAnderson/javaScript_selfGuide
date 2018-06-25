<?php require_once('../private/initialize.php'); ?>
<?php $page = "Variables in javaScript"; // Change the page name?>
<?php INCLUDE(SHARED_PATH . '/header.php'); ?>
<?php INCLUDE(SHARED_PATH . '/functionsBanner.php'); ?>
      <article>
        <main>
          <h1>JavaScript Functions</h1>
          <p>Any developer worth their salt will possess a mastery of functions. A function can make changes to your page or it can calculate and return data.</p>

          <h2>Basic function structure</h2>
          <p>A function includes a declaration of function, a name, parameters and a set of instructions.</p>
          <p class="code_example">function name(parameter, parameter2){</p>
          <p class="code_example"> code to be executed</p>
          <p class="code_example">}</p>

          <h2>Calling the function</h2>
          <p>Once you create a function, it will be patiently waiting for you to use it. In order to use the function you must Call the function.</p>
          <p>You can call the function to run immediately or you can do it on a specific action. To run the code immediately, use the function call between your code tags. Function call looks like this:</p>
          <p class="code_example">name(parameter);</p>

          <h2>Returning data with a function</h2>
          <p>A function can be used to make a calculation or execute a task and then return the result. The syntax for a function return is a bit different because you'll need to add paramters which become variables to be used within the function. The syntax looks like this:</p>
          <p class="code_example">function multiply(a, b){</p>
          <p class="code_example">  return a * b;</p>
          <p class="code_example">}</p>
          <p>When you call this function, you'll need to add parameters into the function in order to give the function something to calculate.</p>
          <p class="code_example">var x = multiply(3, 4);</p>
          <p>Once you have the new information stored in a variable, you can print it out to the screen using any of the <a href="whereToOutput.php">output methods</a> we described earlier.</p>
          <p id="demo">What is 3 * 4?</p>
          <script>
            function multiply(a, b){
              return a * b;
            }
            var product = multiply(3, 4);

          </script>
          <button type="button" onclick="document.getElementById('demo').innerHTML = product;">Math</button>

        </main>
        <?php INCLUDE(SHARED_PATH . '/aside.php'); ?>
      </article>
    </div><!-- .row -->
    <script>var page = "link_7"; // assign the class .active to the active page</script>
    <?php INCLUDE(SHARED_PATH .'/footer.php'); ?>
