<?php
include('../components/body.php');
include('../components/navbar.php');
?>

<section class="md:sm:ml-24 lg:ml-72 md:h-dvh xl:lg:ml-82">
  <section class="relative py-7.5 pt-12">
    <h1 class="krona uppercase bg-white lg:ml-12 px-5 inline z-20 text-3xl">
      Medical form
    </h1>
    <hr class="absolute z-[-1] w-full top-17" />
  </section>
  <form action="" method="">


    <!--  -->
    <!--  -->
    <!--  -->
    <!--  -->
    <!-- value of medical form for form for updating the old gods ........ -->
    <section
      class="poppins flex flex-wrap px-3 uppercase [&>section]:basis-52 md:[&>section]:mx-0 [&>section]:mx-auto md:gap-5 gap-y-7">
      <!-- fullname -->
      <section class="relative">
        <label
          id="label"
          class="absolute text-nowrap inline top-0 bg-white ml-2 px-1 leading-1"
          id="new__fullname">full name</label>
        <input
          id="new__fullname"
          value="israel valimento"
          class="border-1 border-black py-2.5 w-full px-4.5 rounded-lg text-[#808080b0]"
          type="text"
          disabled />
      </section>
      <!-- grade and section -->
      <section class="relative">
        <label
          id="label"
          class="absolute text-nowrap inline top-0 bg-white ml-2 px-1 leading-1"
          for="sdasadf.grade">Grade & section</label>
        <input
          id="new__grade"
          value="10 - wan"
          class="border-1 border-black py-2.5 w-full px-4.5 rounded-lg text-[#808080b0]"
          type="text"
          disabled />
      </section>

      <!-- birthday -->
      <section class="relative">
        <label
          id="label"
          class="absolute text-nowrap inline top-0 bg-white ml-2 px-1 leading-1"
          for="new_birthday">birthday</label>
        <input
          id="new_birthday"
          class="border-1 border-black py-2.5 w-full px-4.5 rounded-lg text-[#808080b0]"
          type="date"
          disabled />
      </section>

      <!-- age -->
      <section class="relative">
        <label
          id="label"
          class="absolute text-nowrap inline top-0 bg-white ml-2 px-1 leading-1"
          for="asdfage">age</label>
        <input
          id="new_age"
          value="32"
          class="border-1 border-black py-2.5 w-full px-4.5 rounded-lg text-[#808080b0]"
          type="number"
          disabled />
        <!-- HEIGHT ( FEET / INCHES ) -->
      </section>
      <section class="relative">
        <label
          id="label"
          class="absolute text-nowrap inline top-0 bg-white ml-2 px-1 leading-1"
          for="new_height">HEIGHT ( CM )</label>
        <input
          id="new_height"
          value="132"
          class="border-1 border-black py-2.5 w-full px-4.5 rounded-lg text-[#808080b0]"
          type="number"
          disabled />
      </section>
      <!-- WEIGHT ( kg ) -->
      <section class="relative">
        <label
          id="label"
          class="absolute text-nowrap inline top-0 bg-white ml-2 px-1 leading-1"
          for="weight">WEIGHT ( kg )</label>
        <input
          id="new_weight"
          value="74"
          class="border-1 border-black py-2.5 w-full px-4.5 rounded-lg text-[#808080b0]"
          type="number"
          disabled />
      </section>

      <!-- address -->
      <!--  -->

      <section class="relative">
        <label
          id="label"
          class="absolute text-nowrap inline top-0 bg-white ml-2 px-1 leading-1"
          for="new_address">address</label>
        <input
          id="new_address"
          value="blk 1 lot 4 pandawan 2"
          class="border-1 border-black py-2.5 w-full px-4.5 rounded-lg text-[#808080b0]"
          type="text"
          disabled />
      </section>

      <!-- parent guardian -->
      <section class="relative">
        <label
          id="label"
          class="absolute text-nowrap inline top-0 bg-white ml-2 px-1 leading-1"
          for="new_parent">parent / guardian</label>
        <input
          id="new_parent"
          value="kokoy sorento o "
          class="border-1 border-black py-2.5 w-full px-4.5 rounded-lg text-[#808080b0]"
          type="text"
          disabled />
      </section>

      <!-- contact -->
      <section class="relative">
        <label
          id="label"
          class="absolute text-nowrap inline top-0 bg-white ml-2 px-1 leading-1"
          for="new_number">contact no#</label>
        <input
          id="new_number"
          value="09519321123"
          class="border-1 border-black py-2.5 w-full px-4.5 rounded-lg text-[#808080b0]"
          type="text"
          disabled />
      </section>
    </section>
    <!--  -->
    <!--  -->
    <!--  -->
    <!--  -->
    <!-- STUDENT MEDICAL HISTORY -->
    <section class="relative py-7.5 pt-12">
      <h1 class="krona uppercase bg-white lg:ml-12 px-5 inline z-20 md:text-lg">
        STUDENT MEDICAL HISTORY
      </h1>
      <hr class="absolute z-[-1] w-full top-15" />
    </section>
    <!--  -->
    <!--  -->
    <!--  -->
    <!--  -->
    <section
      class="poppins flex items-center flex-col uppercase gap-y-5 pb-5 [&>section]:p-5 border-b-1 [&>section]:leading-3 md:justify-evenly md:flex-row">
      <section
        class="[&>article]:flex [&>article]:flex-col [&>article]:gap-y-3 [&>article]:items-center flex gap-5 md:col-start-1">
        <!-- asthma -->
        <h1 class="font-semibold">asthma</h1>
        <article class="">
          <label for="yes">yes</label>
          <input class="size-5" id="new_asthma_yes" type="radio" disabled />
        </article>
        <article>
          <label for="new_asthma_no">no</label>
          <input
            class="size-5"
            id="new_asthma_no"
            type="radio"
            checked
            disabled />
        </article>
        <article>
          <label for="mild">mild</label>
          <input class="size-5" id="new_asthma_mild" type="radio" disabled />
        </article>
        <article>
          <label for="moderate">moderate</label>
          <input
            class="size-5"
            class="size-5"
            id="new_asthma_moderate"
            type="radio"
            disabled />
        </article>
        <article>
          <label for="severe">severe</label>
          <input class="size-5" id="new_asthma_severe" type="radio" disabled />
        </article>
      </section>

      <div class="hidden md:block border-l-1 h-32"></div>

      <!-- EPILEPSY -->
      <section
        class="[&>article]:flex [&>article]:flex-col [&>article]:gap-y-3 [&>article]:items-center flex gap-5 md:col-start-1">
        <h1 class="font-semibold">EPILEPSY</h1>
        <article class="">
          <label for="yes">yes</label>
          <input class="size-5" id="new_epilepsy_yes" type="radio" disabled />
        </article>
        <article>
          <label for="no">no</label>
          <input class="size-5" id="new_epilepsy_yes" type="radio" disabled />
        </article>
        <article>
          <label for="mild">mild</label>
          <input class="size-5" id="new__asthma_mild" type="radio" disabled />
        </article>
        <article>
          <label for="moderate">moderate</label>
          <input class="size-5" id="new_asthma_moderate" type="radio" disabled />
        </article>
        <article>
          <label for="severe">severe</label>
          <input class="size-5" id="new_asthma_severe" type="radio" disabled />
        </article>
      </section>
    </section>
    <section class="space-y-5 poppins uppercase p-5">
      <article class="flex items-center gap-5">
        <h1 class="font-semibold">food ALLERGIES</h1>
        <article class="flex items-center space-x-2.5">
          <label for="new_food_allergies_yes">yes</label>
          <input
            class="size-4.5"
            id="new_food_allergies_yes"
            type="radio"
            checked
            disabled />
          <label for="new_food_allergies_no">no</label>
          <input
            class="size-4.5"
            id="new_food_allergies_no"
            type="radio"
            disabled />
        </article>
      </article>
      <article>
        <input
          id="new_food_allergic"
          value="mannga talong sitaw"
          class="border-b-1 focus:outline-0 py-3 text-[#808080b0] uppercase w-full"
          placeholder="TYPE IF STUDENT HAVE FOOD ALLERGIES / LIST FOODS ALLERGIC REACTION"
          type="text"
          disabled />
      </article>
    </section>

    <section class="space-y-5 poppins uppercase p-5">
      <article class="flex gap-5">
        <h1 class="font-semibold">life-threatening insect allergy</h1>
        <article class="flex items-center space-x-2.5">
          <label for="yes">yes</label>
          <input
            class="size-4.5"
            id="new_insect_allergy_yes"
            type="radio"
            disabled />
          <label for="no">no</label>
          <input
            class="size-4.5"
            id="new_insect_allergy_no"
            type="radio"
            checked
            disabled />
        </article>
      </article>

      <article>
        <input
          class="border-b-1 uppercase text-[#808080b0] focus:outline-0 py-3 w-full"
          value="none"
          placeholder="IF STUDENT ALLERGIC TO INSECTS BITES, PLEASE LIST INSECTS"
          id="new_insect_bites"
          type="text"
          disabled />
      </article>
    </section>
    <section class="flex place-content-center ">
      <button
        id="edit_mode"
        class="poppins border-1 custom-hover hover:bg-[#06118e] place-self-center uppercase mt-5 justify-center cursor-pointer px-5 py-3 flex gap-x-3 rounded-lg">
        <p>edit form</p>
        <img
          class="invert size-5"
          src="../assets/icons/edit-icon.svg"
          alt="check-icon" />
      </button>


      <!-- editing mode section -->
      <section id="save_cancel_btn" class="hidden flex gap-5">
        <button
          action=""
          class="poppins border-1 custom-hover hover:bg-[#06118e] place-self-center uppercase mt-5 justify-center cursor-pointer px-5 py-3 flex gap-x-3 rounded-lg">
          <p>save edit</p>
          <img
            class="invert"
            src="../assets/icons/check-icon.svg"
            alt="check-icon" />
        </button>

        <button
          action="reset"
          class="bg-[#fb4949] poppins place-self-center uppercase mt-5 justify-center cursor-pointer text-white px-5 py-3 flex gap-x-3 rounded-lg">
          <p>cancel edit</p>
          <img src="../assets/icons/delete-icon.svg" alt="check-icon" />
        </button>
      </section>
    </section>
  </form>
</section>
</body>
<script src="../script/medicalinfo.js"></script>

</html>