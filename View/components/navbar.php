<script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>

<header
  class="bg-primary flex krona text-3xl justify-between px-7 py-4.5 items-center text-white md:hidden"
>
  <img
    id="home-btn"
    class="size-12 cursor-pointer"
    src="../assets/icons/school-icon.svg"
    alt=""
  />

  <h1 id="home-btn" class="cursor-pointer">MyRi Clinic</h1>

  <img
    id="menu-btn"
    class="z-21 size-9 cursor-pointer invert"
    src="../assets/icons/menu-icon.svg"
    alt="menu-btn"
  />
</header>

<nav
  id="SideBar"
  class="z-20 w-62 md:sm:w-24 lg:w-72 md:h-dvh xl:lg:w-82 translate-x-[50rem]  drop-shadow-2xl md:drop-shadow-none h-dvh md:translate-x-0 fixed duration-500 right-0 top-[-17px] md:top-0 md:left-0 md:block"
>
  <main
    class="grid text-white h-[70%] grid-rows-[100px_1fr_60px] md:h-dvh "
  >
    <section
      class="row-start-1 invisible md:visible cursor-pointer shadow-2xl bg-secondary flex items-center justify-center text-2xl krona"
    >
      <img
        class="md:block size-12 lg:hidden"
        src="../assets/icons/school-icon.svg"
        alt="school-img"
      />
      <h1 class="md:hidden text-3xl lg:block">MyRi Clinic</h1>
    </section>

    <!-- navlinks -->
    <section
      class="poppins uppercase row-start-2 bg-primary flex gap-y-3 flex-col  px-3 py-4 text-lg"
    >
   <!-- visitor link -->
      <a
        class="flex gap-x-4 px-3.5 py-3.5 leading-6 hover:bg-[#ffffff1f] rounded-lg md:flex md:justify-center lg:justify-start"
        href="../pages/visitor.php"
        ><img src="../assets/icons/visit-icon.svg" alt="visitor-icon" />
        <p class="md:hidden lg:block">visitor</p>
      </a>

      <!-- visit history -->
      <a
        class="flex gap-x-4 px-3.5 py-3.5 leading-6 hover:bg-[#ffffff1f] rounded-lg md:flex md:justify-center lg:justify-start"
        href="../pages/visithistory.php"
        ><img src="../assets/icons/history-icon.svg" alt="history-icon" />
        <p class="md:hidden lg:block">visit history</p>
      </a>
      <!-- medical forn  -->
      <a
        class="flex gap-x-4 px-3.5 py-3.5 leading-6 hover:bg-[#ffffff1f] rounded-lg md:flex md:justify-center lg:justify-start"
        href="../pages/medicalform.php"
        ><img src="../assets/icons/medicalform-icon.svg" alt="inforamation-icon" />
        <p class="md:hidden lg:block">medical form</p>
      </a>
        <!-- student info -->
      <a
        class="flex gap-x-4 px-3.5 py-3.5 leading-6 hover:bg-[#ffffff1f] rounded-lg md:flex md:justify-center lg:justify-start"
        href="../pages/studentlist.php"
        ><img src="../assets/icons/student-icon.svg" alt="inforamation-icon" />
        <p class="md:hidden lg:block">student list</p>
      </a>

          <!-- student info -->
          <a
        class="flex gap-x-4 px-3.5 py-3.5 leading-6 hover:bg-[#ffffff1f] rounded-lg md:flex md:justify-center lg:justify-start"
        href="../pages/medicalinformation.php"
        ><img src="../assets/icons/medicalinfo-icon.svg" alt="inforamation-icon" />
        <p class="md:hidden lg:block">medical info</p>
      </a>
    </section>
    <section
      class="rounded-bl-2xl md:rounded-none row-start-3 bg-secondary poppins uppercase px-5 py-3.5 flex text-lg w-full items-center gap-x-5"
    >

    <!-- logout -->
      <a
        id="logout-btn"
        class="flex gap-x-4 px-3.5 py-3.5 leading-6 rounded-lg md:flex md:justify-center lg:justify-start"
        href="../pages/index.php"
        ><img src="../assets/icons/exit-icon.svg" alt="inforamation-icon" />
        <p class="md:hidden lg:block">logout</p>
      </a>
    </section>
  </main>
</nav>
<script src="../script/scriptnavbar.js"></script>


