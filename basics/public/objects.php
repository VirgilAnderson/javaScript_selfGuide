<?php require_once('../private/initialize.php'); ?>
<?php $page = "Variables in javaScript"; // Change the page name?>
<?php INCLUDE(SHARED_PATH . '/header.php'); ?>
<?php INCLUDE(SHARED_PATH . '/objectsBanner.php'); ?>
      <article>
        <main>
          <h1>Object Oriented Design</h1>
          <p>An object is a concept where we try to resemble real life things in code. For example, an airplane is a real life object. It possesses properties like weight, height, color and model. It also possesses methods like start and stop.</p>
          <p>All planes have properties but the values of those properties change from plane to plane. One plane might be white while another might be gray.</p>
          <p>Creating an object allows you to define the properties and methods that are appropriate to your task and bundle them all together.</p>

          <h2>Objects as variables</h2>
          <p>As you learned on the <a href="variables.php">variables</a> page, a variable is like an empty box to store information. A useful way to think of an object is like a container to put all your related variables into.</p>
          <p class="code_example">var aircraft{type: "glider", model: "ASH25", color: "white"};</p>
          <p>You can then access the information within the object using the name of the object and the name of the property seperated by a .</p>
          <p class="code_example">document.getElementById("demo").innerHTML = aircraft.type + " is " + aircraft.model " and " + aircraft.color;</p>
          <p id="demo">Tell me about this aircraft</p>
          <script>
            var aircraft = {type: "glider", model: "ASH25", color: "white"};
          </script>
          <button type="button" onclick="document.getElementById('demo').innerHTML = 'The model of this ' + aircraft.type + ' is ' + aircraft.model + ' and its color is ' + aircraft.color + '.'">Click here</button>



        </main>
        <?php INCLUDE(SHARED_PATH . '/aside.php'); ?>
      </article>
    </div><!-- .row -->
    <script>var page = "link_8"; // assign the class .active to the active page</script>
    <?php INCLUDE(SHARED_PATH .'/footer.php'); ?>