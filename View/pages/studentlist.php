<?php
include('../components/body.php');
include('../components/navbar.php');
?>

<section class="md:sm:ml-24 lg:ml-72 md:h-dvh xl:lg:ml-82 uppercase">
  <section class="relative mt-10">
    <h1 class="krona text-3xl inline px-5 bg-white z-[10] ml-10">
      Student list
    </h1>
    <hr class="absolute w-full top-[20px]  z-[-1]" />
  </section>

  <!-- FORM SEARCH SECTION FOR USERS  -->
  <form class="w-1/2 relative mt-[30px] uppercase px-8.5 flex gap-7">
    <section class="relative w-full grow-1">
      <label
        id="label"
        class="absolute text-nowrap inline top-0 bg-white ml-2 px-1 leading-1"
        for="name">full name</label>
      <input
        id="name"
        class="border-1 py-2.5 w-full px-4.5 rounded-lg"
        type="text" />
    </section>

    <!-- drop down for year level -->
    <section class="relative w-full">
      <label
        id="label"
        class="absolute text-nowrap inline top-0 bg-white ml-2 px-1 leading-1"
        for="name">Year level</label>
      <select class="border-1 rounded-lg py-2.5 w-full px-4.5" name="YearLevel" id="">
        <option value="7">grade 7</option>
        <option value="8">grade 8</option>
        <option value="9">grade 9</option>
        <option value="10">grade 10</option>
      </select>
    </section>

    <button
      action="submit"
      class="bg-[#06118e] text-white poppins uppercase flex justify-evenly gap-2.5 px-10 cursor-pointer py-2.5 rounded-lg">
      <p>Search</p>
      <img src="../assets/icons/search-icon.svg" />
    </button>


  </form>
  <hr class="w-full z-[-1] mt-[80px]" />

  <?php
  include('../components/studentlist.php');

  ?>
</section>
</body>

</html>