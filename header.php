<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <meta name="author" content="Daniel Benedict L. Omoto Freelance Web Developer">
  <meta name="description" content="The main purpose of this site is for my job application, as a technical test.">

  <?php
    wp_head();
  ?>
  
</head>

<body>
  <!--VERSION 29-->
  <!-- wrapper -->
  <div class="max-w-[2122px] h-fit m-auto overflow-auto">
    <!--NAVIGATION-->
    <nav class="w-full h-[158px] bg-white flex flex-row justify-between relative">
      <!--shop, our story, expertise-->
      <div
        class="w-1/3 2xl:ml-[130px] lg:ml-[65px] md:ml-[35px] ml-[25px] 2xl:text-[18px] text-[16px] leading-[30px] text-[#737373] font-['Brown_Std'] md:block hidden">
        <ul class="h-full flex flex-row justify-start items-center 2xl:space-x-20 lg:space-x-14 space-x-8">
          <li class="hover:underline underline-offset-4 decoration-gray-400 decoration-4">SHOP</li>
          <li class="hover:underline underline-offset-4 decoration-gray-400 decoration-4">OUR STORY</li>
          <li class="hover:underline underline-offset-4 decoration-gray-400 decoration-4">EXPERTISE</li>
        </ul>
      </div>

      <!--logo-->
      <div class="md:w-1/3 w-1/2 flex flow-row justify-center items-center">
        <div class="max-w-[262px] max-h-[128px] lg:w-full lg:h-full w-[131px] h-[64px] dbomoto-logo"></div>
      </div>

      <!--contacts, search, account, cart-->
      <div
        class="flex flex-row w-1/3 2xl:mr-[130px] lg:mr-[65px] md:mr-[35px] mr-[25px] justify-end h-full items-center 2xl:space-x-20 lg:space-x-14 space-x-8 2xl:text-[18px] text-[16px] md:flex hidden">
        <a
          class="leading-[30px] text-[#737373] font-['Brown_Std'] hover:underline underline-offset-4 decoration-gray-400 decoration-4">CONTACT</a>
        <div class="flex flex-row w-32 justify-between">
          <div
            class="w-[28px] h-[29px] text-center !hover:underline !underline-offset-4 decoration-gray-400 decoration-4"><i
              class="fas fa-search"></i></div>
          <div
            class="w-[28px] h-[29px] text-center !hover:underline !underline-offset-4 decoration-gray-400 decoration-4"><i
              class="fa-regular fa-user"></i></div>
          <div
            class="w-[28px] h-[29px] text-center !hover:underline !underline-offset-4 decoration-gray-400 decoration-4"><i
              class="fa-solid fa-cart-shopping"></i></div>
        </div>
      </div>

      <!--MENU MOBILE-->
      <div class="md:hidden w-1/2 h-full flex justify-center items-center">
        <div class="w-16 h-16 text-center text-4xl flex justify-center items-center" onclick="toggleClass(['#menu'],['-translate-y-full'])"><i
            class="fa-solid fa-bars"></i></div>
      </div>
      <div class="w-full absolute text-right top-[158px] overflow-hidden">
        <ul id="menu" class="transition-all ease-in-out text-gray-500 font-['Brown_Std'] bg-white -translate-y-full">
          <li class="py-3 pr-3 border-b-2 border-gray-300 active:bg-gray-600 active:text-white">SHOP</li>
          <li class="py-3 pr-3 border-b-2 border-gray-300 active:bg-gray-600 active:text-white">OUR STORY</li>
          <li class="py-3 pr-3 border-b-2 border-gray-300 active:bg-gray-600 active:text-white">EXPERTISE</li>
          <li class="py-3 pr-3 border-b-2 border-gray-300 active:bg-gray-600 active:text-white">CONTACT</li>
          <li class="py-3 pr-3 border-b-2 border-gray-300 active:bg-gray-600 active:text-white"><i
              class="fas fa-search "></i> SEARCH</li>
          <li class="py-3 pr-3 border-b-2 border-gray-300 active:bg-gray-600 active:text-white"><i
              class="fa-regular fa-user"></i> ACCOUNT</li>
          <li class="py-3 pr-3 border-b-2 border-gray-300 active:bg-gray-600 active:text-white"><i
              class="fa-solid fa-cart-shopping"></i> CART</li>
        </ul>
      </div>
    </nav>