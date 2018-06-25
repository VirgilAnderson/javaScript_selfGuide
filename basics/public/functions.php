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

        </main>
        <?php INCLUDE(SHARED_PATH . '/aside.php'); ?>
      </article>
    </div><!-- .row -->
    <script>var page = "link_7"; // assign the class .active to the active page</script>
    <?php INCLUDE(SHARED_PATH .'/footer.php'); ?>
