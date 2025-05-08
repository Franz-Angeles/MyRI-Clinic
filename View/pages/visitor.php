<?php
include ('../components/body.php');
include ('../components/navbar.php');
?>
      <section class="md:sm:ml-24 lg:ml-72 md:h-dvh xl:lg:ml-82">
        <section class="relative py-7.5 pt-12">
          <h1 class="krona uppercase bg-white ml-12 px-5 inline z-20 text-4xl">
            Visitor
          </h1>
          <hr class="absolute z-[-1] w-full top-17" />
        </section>
        <section
          class="px-8.5 gap-3.5 uppercase flex justify-center flex-wrap lg:flex-nowrap min-[200px]:w-[90%]"
        >
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
          <section class="relative w-2/5 grow-1">
            <label
              id="Purpose"
              class="absolute inline top-0 bg-white ml-2 px-1 leading-1"
              for="name"
              >Purpose</label
            >
            <input
              id="Purpose"
              class="border-1 py-2.5 w-full px-4.5 rounded-lg"
              type="text"
            />
          </section>

          <section class="relative">
            <label
              id="Check-in"
              class="absolute inline top-0 bg-white ml-2 px-1 leading-1"
              for="name"
              >Check-in</label
            >
            <input
              id="Check-in"
              class="border-1 py-2.5 px-4.5 w-full rounded-lg"
              type="time"
            />
          </section>
          <section class="relative">
            <label
              id="check-out"
              class="absolute inline top-0 w-full bg-white ml-2 px-1 leading-1"
              for="check-out"
              >check-out</label
            >
            <input
              id="check-out"
              class="border-1 py-2.5 px-4.5 rounded-lg w-full"
              type="time"
            />
          </section>

          <section
            class="poppins text-white bg-primary rounded-lg relative cursor-pointer"
          >
            <button
              class="uppercase w-full py-2.5 px-9 flex gap-5 items-center justify-evenly"
            >
              <p>submit</p>
              <img clas src="../assets/icons/check-icon.svg" alt="" />
            </button>
          </section>
        </section>
        <section class="relative py-7.5 mt-5">
          <hr class="absolute z-[-1] w-full bottom-0" />
        </section>
        <!-- visitor list components >>>>>>>>> -->
        <?php
        include ('../components/visitorlist.php')
        ?>
      </section>
  </body>
</html>
