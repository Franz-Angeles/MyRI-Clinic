<?php
include ('../components/body.php');
include ('../components/navbar.php');
?>

<section class="md:sm:ml-24 lg:ml-72 md:h-dvh xl:lg:ml-82 uppercase">
  <section class="relative mt-10">
    <h1 class="krona text-3xl inline px-5 bg-white z-[10] ml-10">
      Student list
    </h1>
    <hr class="absolute w-full top-[20px]  z-[-1]" />
  </section>


  <section class="w-[500px] relative mt-[30px] uppercase px-8.5 flex gap-7">
    <section class="relative w-2/5 grow-1">
        <label
          id="label"
          class="absolute text-nowrap inline top-0 bg-white ml-2 px-1 leading-1"
          for="name"
          >full name</label
        >
        <input
          id="name"
          class="border-1 py-2.5 w-full px-4.5 rounded-lg"
          type="text"
        />
      </section>
    <button
      class="bg-[#06118e] text-white poppins uppercase flex justify-evenly gap-2.5 px-10 cursor-pointer py-2.5 rounded-lg"
    >
      <p>Search</p>
      <img src="../assets/icons/search-icon.svg" />
    </button>
  </section>
  <hr class="w-full z-[-1] mt-[80px]" />

  <?php
  include ('../components/studentlist.php');

  ?>
</section>
</body>
</html>
