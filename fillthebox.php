<br>
      <div class="bg-light-subtle">
        <h3 class="text-center">Fill the Box</h3>
        <p class="text-center">Handpick sweet surprises</p>
      </div>
<div class="row">
  <div class="col-md-10">
    <!--products-->
    <div class="row">
    <!--fetching products-->
    <?php
    getproducts();
    get_unique_categories();
get_unique_occassion();

    ?>
      <!--row end-->
    </div>
    <!--col end-->
  </div>
  <!--Side nav-->
  <div class="col-md-2 bg-danger-subtle p-0">
    <!--categories-->
    <ul class="navbar-nav me-auto text-center">
      <li class="nav-item">
        <a href="#" class="nav-link text-light-emphasis"><h4>Categories</h4></a>
      </li>
      <?php
          getcategory();
      ?>
    </ul>
    <!--occasion-->
    <ul class="navbar-nav me-auto text-center">
      <li class="nav-item">
        <a href="#" class="nav-link text-light-emphasis"><h4>Occasion</h4></a>
      </li>
      <?php
      getoccassion();
      ?>
    </ul>
    

  </div>
</div>