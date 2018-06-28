<?php require_once('../private/initialize.php'); ?>
<?php $page = "String Methods"; // Change the page name?>
<?php INCLUDE(SHARED_PATH . '/header.php'); ?>
<?php INCLUDE(SHARED_PATH . '/arraysBanner.php'); ?>
      <article>
        <main>
          <h1>javaScript Arrays</h1>
          <p>It frequently happens in coding that you will have a list of variables of the same type. For instance if you were building a website for a property management company, you might have many apartments. One might code that as follows:</p>
          <div class="code_example">
            <p>var apartment_1 = "N207";</p>
            <p>var apartment_2 = "N208";</p>
            <p>var apartment_3 = "N209";</p>
          </div>
          <p>What if you have 300 apartments? It is impractical to generate a separate variable for each apartment. That's why we use arrays.</p>
          <p>Arrays allow you to store a list of variables inside of it.</p>
          <p class="code_example">var apartment = ["N207", "N208", "N209"];</p>
          <p>Now you can access the elements of the array by number, starting with 0.</p>
          <p id="array_demo">What apartments are stored in the array?</p>
          <script>
            var apartment =["N207", "N208", "N209"];
            var list = apartment[0] + ' ' + apartment[1] + ' ' + apartment[2];
          </script>
          <button onclick="document.getElementById('array_demo').innerHTML=list">Click to find out</button>
          <h2>Accessing array data</h2>
          <p>Accessing the information stored within the array is easy. You simply treat it as a variable and place the number of the list (starting at 0) inside brackets.</p>
          <p class="code_example">document.getElementById('demo').innerHTML = apartment[0];</p>
          <p id="demo"></p>
          <script>
            document.getElementById('demo').innerHTML=apartment[0];
          </script>
          <p>In order to display all the data contained within an array, you can simply call the array without a number.</p>
          <p class="code_example">document.getElementById('demo_all').innerHTML=apartment;</p>
          <p id="demo_all"></p>
          <script>
            document.getElementById('demo_all').innerHTML=apartment;
          </script>
          <p>Arrays are frequently used with loops in order to store data in the loop through every iteration of the loop. We'll get to loops later.</p>
          <p>Arrays should be thought of as objects. The only real difference between an array and an object is that an array accesses the variables by number, while the object accesses the data by name. That, and you can create methods within an object.</p>
          <p id="beer">Test</p>
          <?php INCLUDE(SHARED_PATH . '/pagination.php'); ?>
        </main>
        <?php INCLUDE(SHARED_PATH . '/aside.php'); ?>
      </article>
    </div><!-- .row -->
    <script>
      var page = "link_11"; // assign the class .active to the active page
      var page_2 = 11; // Assign the class .paginationActive to the active page
    </script>
    <?php INCLUDE(SHARED_PATH .'/footer.php'); ?>
