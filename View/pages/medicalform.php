<?php
include('../components/body.php');
include('../components/navbar.php');
?>

<section class="overflow-x-hidden md:sm:ml-24 lg:ml-72 md:h-dvh xl:lg:ml-82">
  <section class="relative py-7.5 pt-12">
    <h1 class="krona uppercase bg-white lg:ml-12 px-5 inline z-20 text-3xl">
      Medical form
    </h1>
    <hr class="absolute z-[-1] w-full top-17" />
  </section>

  <form action="" method="">
    <!-- form for student information........ -->
    <section
      class="poppins flex flex-wrap px-3 uppercase [&>section]:basis-52 md:[&>section]:mx-0 [&>section]:mx-auto md:gap-5 gap-y-7">
      <section class="relative">
        <label
          id="label"
          class="absolute text-nowrap inline top-0 bg-white ml-2 px-1 leading-1"
          for="fullname">full name</label>
        <input
          id="fullname"
          class="border-1 py-2.5 w-full px-4.5 rounded-lg"
          type="text" />
      </section>
      <section class="relative">
        <label
          id="label"
          class="absolute text-nowrap inline top-0 bg-white ml-2 px-1 leading-1"
          for="grade_section">Grade & section</label>
        <input
          id="grade_section"
          class="border-1 py-2.5 w-full px-4.5 rounded-lg"
          type="text" />
      </section>
      <section class="relative">
        <label
          id="label"
          class="absolute text-nowrap inline top-0 bg-white ml-2 px-1 leading-1"
          for="birthday">birthday</label>
        <input
          id="birthday"
          class="border-1 py-2.5 w-full px-4.5 rounded-lg"
          type="date" />
      </section>
      <section class="relative">
        <label
          id="label"
          class="absolute text-nowrap inline top-0 bg-white ml-2 px-1 leading-1"
          for="age">age</label>
        <input
          id="age"
          class="border-1 py-2.5 w-full px-4.5 rounded-lg"
          type="number" />
      </section>
      <section class="relative">
        <label
          id="label"
          class="absolute text-nowrap inline top-0 bg-white ml-2 px-1 leading-1"
          for="height">HEIGHT ( cm )</label>
        <input
          id="height"
          class="border-1 py-2.5 w-full px-4.5 rounded-lg"
          type="number" />
      </section>
      <section class="relative">
        <label
          id="label"
          class="absolute text-nowrap inline top-0 bg-white ml-2 px-1 leading-1"
          for="weight">WEIGHT ( kg )</label>
        <input
          id="weight"
          class="border-1 py-2.5 w-full px-4.5 rounded-lg"
          type="number" />
      </section>
      <section class="relative">
        <label
          id="label"
          class="absolute text-nowrap inline top-0 bg-white ml-2 px-1 leading-1"
          for="address">address</label>
        <input
          id="address"
          class="border-1 py-2.5 w-full px-4.5 rounded-lg"
          type="text" />
      </section>
      <section class="relative">
        <label
          id="label"
          class="absolute text-nowrap inline top-0 bg-white ml-2 px-1 leading-1"
          for="parent">parent / guardian</label>
        <input
          id="parent"
          class="border-1 py-2.5 w-full px-4.5 rounded-lg"
          type="text" />
      </section>
      <section class="relative">
        <label
          id="label"
          class="absolute text-nowrap inline top-0 bg-white ml-2 px-1 leading-1"
          for="contact">contact no#</label>
        <input
          id="contact"
          class="border-1 py-2.5 w-full px-4.5 rounded-lg"
          type="text" />
      </section>
    </section>

    <!--form for STUDENT MEDICAL HISTORY ........ -->
    <section class="relative py-7.5 pt-12">
      <h1 class="krona uppercase bg-white lg:ml-12 px-5 inline z-20 md:text-lg">
        STUDENT MEDICAL HISTORY
      </h1>
      <hr class="absolute z-[-1] w-full top-15" />
    </section>
    <section
      class="poppins flex items-center flex-col uppercase gap-y-5 pb-5 [&>section]:p-5 border-b-1 [&>section]:leading-3 md:justify-evenly md:flex-row">
      <section
        class="[&>article]:flex [&>article]:flex-col [&>article]:gap-y-3 [&>article]:items-center flex gap-5 md:col-start-1">
        <h1 class="font-semibold">asthma</h1>
        <article class="">
          <label for="asthma_yes">yes</label>
          <input id="asthma_yes" type="radio" />
        </article>
        <article>
          <label for="asthma_no">no</label>
          <input id="asthma_yes" type="radio" />
        </article>
        <article>
          <label for="asthma_mild">mild</label>
          <input id="asthma_mild" type="radio" />
        </article>
        <article>
          <label for="asthma_moderate">moderate</label>
          <input id="asthma_moderate" type="radio" />
        </article>
        <article>
          <label for="asthma_severe">severe</label>
          <input id="asthma_severe" type="radio" />
        </article>
      </section>
      <div class="hidden md:block border-l-1 h-32"></div>
      <section
        class="[&>article]:flex [&>article]:flex-col [&>article]:gap-y-3 [&>article]:items-center flex gap-5 md:col-start-1">
        <h1 class="font-semibold">EPILEPSY</h1>
        <article class="">
          <label for="epilepsy_yes">yes</label>
          <input id="epilepsy_yes" type="radio" />
        </article>
        <article>
          <label for="epilepsy_no">no</label>
          <input id="epilepsy_no" type="radio" />
        </article>
        <article>
          <label for="epilepsy_mild">mild</label>
          <input id="epilepsy_mild" type="radio" />
        </article>
        <article>
          <label for="epilepsy_moderate">moderate</label>
          <input id="epilepsy_moderate" type="radio" />
        </article>
        <article>
          <label for="epilepsy_severe">severe</label>
          <input id="epilepsy_severe" type="radio" />
        </article>
      </section>
    </section>
    <section class="space-y-5 poppins uppercase p-5">
      <article class="flex gap-5">
        <h1 class="font-semibold">FOod ALLERGIES</h1>
        <article class="space-x-1.5">
          <label for="food_allergies_yes">yes</label>
          <input id="food_allergies_yes" type="radio" />
          <label for="food_allergies_no">no</label>
          <input id="food_allergies_no" type="radio" />
        </article>
      </article>

      <article>
        <input
          class="border-b-1 focus:outline-0 py-3 w-full"
          placeholder="TYPE IF STUDENT HAVE FOOD ALLERGIES / LIST FOODS ALLERGIC REACTION"
          id="food_allergies"
          type="text" />
      </article>
    </section>

    <section class="space-y-5 poppins uppercase p-5">
      <article class="flex gap-5">
        <h1 class="font-semibold">life-threatening insect allergy</h1>
        <article class="space-x-1.5">
          <label for="insect_allergies_yes">yes</label>
          <input id="insect_allergies_yes" type="radio" />
          <label for="insect_allergies_no">no</label>
          <input id="insect_allergies_no" type="radio" />
        </article>
      </article>
      <article>
        <input
          class="border-b-1 focus:outline-0 py-3 w-full"
          placeholder="IF STUDENT ALLERGIC TO INSECTS BITES, PLEASE LIST INSECTS"
          id="insect_bites"
          type="text" />
      </article>
    </section>
    <!--  -->
    <!--  -->
    <!--  -->
    <!--  -->
    <!-- SUBMIT BUTTON FOR MEDICAL FORM  -->
    <button
      action="submit"
      class="bg-primary poppins place-self-center mt-5 w-1/5 justify-center cursor-pointer text-white px-5 py-3 flex gap-x-3 rounded-lg">
      <p>sumbit</p>
      <img src="../assets/icons/check-icon.svg" alt="check-icon" />
    </button>
  </form>
</section>
</body>

</html>