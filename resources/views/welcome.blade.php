<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>E-LOIS : LAW OFFICE INFORMATION SYSTEM</title>

  <!-- Fonts -->
  <link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@400;500;600;700;800&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;700&display=swap" rel="stylesheet">

  <!-- Scripts -->
  @vite(['resources/css/app.css', 'resources/js/app.js'])
  <wireui:scripts />
  <script src="//unpkg.com/alpinejs" defer></script>
  <!-- Styles -->
  @livewireStyles
</head>

<body class="font-rubik antialiased">

  <div class="relative overflow-hidden bg-gradient-to-tr from-white via-white to-gray-400">
    <div class="absolute top-0 left-0 w-full h-full">
      <img src="{{ asset('images/courtroom.jpg') }}" class="h-full opacity-10 w-full object-cover" alt="">
    </div>
    <div class="absolute top-0 right-0  h-full opacity-20 object-fit w-full">
      <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink"
        xmlns:svgjs="http://svgjs.com/svgjs" width="1920" height="999" class="h-full w-full object-cover"
        preserveAspectRatio="none" viewBox="0 0 1920 999">
        <g mask="url(&quot;#SvgjsMask1053&quot;)" fill="none">
          <path d="M-268.62 216.12C-83.25 238.57-34.81 611.47 335.23 655.68 705.27 699.89 754.41 1068.19 939.08 1089.95"
            stroke="rgba(28, 30, 27, 0.58)" stroke-width="2"></path>
          <path
            d="M-307.26 169.14C-147.43 190.32-131.78 495.51 206.65 558.75 545.09 621.99 541.86 1041.85 720.57 1085.74"
            stroke="rgba(28, 30, 27, 0.58)" stroke-width="2"></path>
          <path
            d="M-125.58 844.44C89.4 833.51 252.17 453.73 642.28 454.83 1032.39 455.93 1159.86 1076.86 1410.14 1121.08"
            stroke="rgba(28, 30, 27, 0.58)" stroke-width="2"></path>
          <path
            d="M-217.75 714.32C-60.11 714.94 91.29 839.19 400.33 839.19 709.37 839.19 697.92 711.24 1018.41 714.32 1338.9 717.4 1444.79 1154.07 1636.49 1179.01"
            stroke="rgba(28, 30, 27, 0.58)" stroke-width="2"></path>
          <path d="M-374.71 735.58C-190.3 729.61-46.08 443.19 304.09 445.87 654.26 448.55 755.33 1033.76 982.89 1080.51"
            stroke="rgba(28, 30, 27, 0.58)" stroke-width="2"></path>
        </g>
        <defs>
          <mask id="SvgjsMask1053">
            <rect width="1920" height="999" fill="#ffffff"></rect>
          </mask>
        </defs>
      </svg>
    </div>
    <div class="hidden lg:absolute lg:inset-0 lg:block" aria-hidden="true">
      <svg class="absolute top-0 left-1/2 translate-x-64 -translate-y-8 transform" width="640" height="784"
        fill="none" viewBox="0 0 640 784">
        <defs>
          <pattern id="9ebea6f4-a1f5-4d96-8c4e-4c2abf658047" x="118" y="0" width="20" height="20"
            patternUnits="userSpaceOnUse">
            <rect x="0" y="0" width="4" height="4" class="text-gray-200"
              fill="currentColor" />
          </pattern>
        </defs>
        <rect y="72" width="640" height="640" rx="50" class="text-gray-50 rounded-xl"
          fill="currentColor" />
        <rect x="118" width="404" height="784" fill="url(#9ebea6f4-a1f5-4d96-8c4e-4c2abf658047)" />
      </svg>
    </div>


    <div class="relative pt-6 pb-16 sm:pb-24 lg:pb-32">
      <div>
        <nav class="relative mx-auto flex max-w-7xl items-center justify-between px-4 sm:px-6" aria-label="Global">
          <div class="flex flex-1 items-center">
            <div class="flex w-full items-center justify-between md:w-auto">
              <a href="#">
                <span class="sr-only">Your Company</span>

                <svg width="128" height="24" viewBox="0 0 128 24" fill="none"
                  xmlns="http://www.w3.org/2000/svg">
                  <g clip-path="url(#clip0_11_1979)">
                    <path
                      d="M11.5 3.278V2.5H12.5V3.278V3.63829L12.8418 3.7523L17.8418 5.4203L17.9999 5.47305L18.1581 5.42037L21.316 4.3683L21.6324 5.31589L19.0749 6.16867L18.5876 6.33116L18.7631 6.81391L21.7494 15.0243C20.7664 15.9402 19.448 16.5 18 16.5C16.5512 16.5 15.2335 15.9402 14.2505 15.0243L17.2349 6.81381L17.4104 6.3312L16.9232 6.1687L13.1582 4.9127L12.5 4.69311V5.387V19V19.5H13H16.5V20.5H7.50002V19.5H11H11.5V19V5.387V4.69329L10.8419 4.91266L7.07391 6.16866L6.58653 6.33112L6.76214 6.81391L9.74849 15.0245C8.76637 15.9402 7.44799 16.5 6.00002 16.5C4.55117 16.5 3.23347 15.9402 2.25054 15.0243L5.23494 6.81381L5.4104 6.33108L4.92313 6.16866L2.36755 5.3168L2.6842 4.36735L5.84198 5.41937L6.00008 5.47204L6.15816 5.41933L11.1582 3.75233L11.5 3.63836V3.278ZM18.4699 8.93214L18.0002 7.64028L17.5302 8.93203L16.1122 12.829L15.868 13.5H16.582H19.417H20.1309L19.8869 12.8291L18.4699 8.93214ZM6.46992 8.93214L6.00019 7.64029L5.53016 8.93203L4.11216 12.829L3.86801 13.5H4.58202H7.41702H8.13085L7.88692 12.8291L6.46992 8.93214Z"
                      fill="#00ABB3" stroke="#3C4048" />
                  </g>
                  <path
                    d="M34.675 21.25C32.5917 21.25 30.9333 20.7167 29.7 19.65C28.4833 18.5667 27.8583 16.9167 27.825 14.7C27.825 14.6333 27.825 14.55 27.825 14.45C27.825 14.3333 27.825 14.25 27.825 14.2C27.875 12.8167 28.175 11.65 28.725 10.7C29.2917 9.73333 30.075 9 31.075 8.5C32.0917 8 33.2833 7.75 34.65 7.75C36.1833 7.75 37.45 8.05833 38.45 8.675C39.4667 9.275 40.225 10.0833 40.725 11.1C41.225 12.1 41.475 13.225 41.475 14.475V15.175C41.475 15.3417 41.4083 15.4917 41.275 15.625C41.1417 15.7583 40.9833 15.825 40.8 15.825H33.1C33.1 15.825 33.1 15.8417 33.1 15.875C33.1 15.9083 33.1 15.9417 33.1 15.975C33.1 16.375 33.15 16.7333 33.25 17.05C33.3667 17.35 33.5417 17.5917 33.775 17.775C34.0083 17.9417 34.2917 18.025 34.625 18.025C34.8417 18.025 35.025 17.9917 35.175 17.925C35.325 17.8583 35.45 17.775 35.55 17.675C35.6667 17.5583 35.7667 17.45 35.85 17.35C36 17.2 36.125 17.1083 36.225 17.075C36.325 17.025 36.475 17 36.675 17H40.6C40.75 17 40.875 17.05 40.975 17.15C41.0917 17.25 41.1417 17.375 41.125 17.525C41.1083 17.825 40.9667 18.1917 40.7 18.625C40.4333 19.0417 40.0333 19.45 39.5 19.85C38.9833 20.25 38.3167 20.5833 37.5 20.85C36.6833 21.1167 35.7417 21.25 34.675 21.25ZM33.1 13.025H36.2V12.975C36.2 12.525 36.1417 12.1417 36.025 11.825C35.9083 11.5083 35.7333 11.275 35.5 11.125C35.2667 10.9583 34.9833 10.875 34.65 10.875C34.3167 10.875 34.0333 10.9583 33.8 11.125C33.5667 11.275 33.3917 11.5083 33.275 11.825C33.1583 12.1417 33.1 12.525 33.1 12.975V13.025ZM44.1594 15.625C43.976 15.625 43.8177 15.5667 43.6844 15.45C43.5677 15.3167 43.5094 15.1583 43.5094 14.975V12.025C43.5094 11.8417 43.5677 11.6917 43.6844 11.575C43.8177 11.4417 43.976 11.375 44.1594 11.375H52.1594C52.3427 11.375 52.4927 11.4417 52.6094 11.575C52.7427 11.6917 52.8094 11.8417 52.8094 12.025V14.975C52.8094 15.1583 52.7427 15.3167 52.6094 15.45C52.4927 15.5667 52.3427 15.625 52.1594 15.625H44.1594ZM56.2264 21C56.0597 21 55.9097 20.9417 55.7764 20.825C55.643 20.6917 55.5764 20.5333 55.5764 20.35V4.15C55.5764 3.96667 55.643 3.81667 55.7764 3.7C55.9097 3.56667 56.0597 3.5 56.2264 3.5H60.3764C60.5597 3.5 60.718 3.56667 60.8514 3.7C60.9847 3.81667 61.0514 3.96667 61.0514 4.15V16.55H68.2764C68.4597 16.55 68.618 16.6167 68.7514 16.75C68.8847 16.8667 68.9514 17.0167 68.9514 17.2V20.35C68.9514 20.5333 68.8847 20.6917 68.7514 20.825C68.618 20.9417 68.4597 21 68.2764 21H56.2264ZM78.2143 21.25C76.6143 21.25 75.2226 21 74.0393 20.5C72.8726 20 71.9476 19.25 71.2643 18.25C70.5976 17.2333 70.2393 15.975 70.1893 14.475C70.1726 13.775 70.1643 13.0583 70.1643 12.325C70.1643 11.575 70.1726 10.8333 70.1893 10.1C70.2393 8.61667 70.5976 7.36667 71.2643 6.35C71.9476 5.33333 72.8809 4.56667 74.0643 4.05C75.2476 3.51667 76.6309 3.25 78.2143 3.25C79.7809 3.25 81.1559 3.51667 82.3393 4.05C83.5226 4.56667 84.4559 5.33333 85.1393 6.35C85.8226 7.36667 86.1809 8.61667 86.2143 10.1C86.2476 10.8333 86.2643 11.575 86.2643 12.325C86.2643 13.0583 86.2476 13.775 86.2143 14.475C86.1643 15.975 85.7976 17.2333 85.1143 18.25C84.4476 19.25 83.5226 20 82.3393 20.5C81.1726 21 79.7976 21.25 78.2143 21.25ZM78.2143 17C78.9143 17 79.4893 16.7917 79.9393 16.375C80.3893 15.9417 80.6226 15.2583 80.6393 14.325C80.6726 13.6083 80.6893 12.9167 80.6893 12.25C80.6893 11.5667 80.6726 10.875 80.6393 10.175C80.6226 9.55833 80.5059 9.05 80.2893 8.65C80.0893 8.25 79.8059 7.95833 79.4393 7.775C79.0893 7.59167 78.6809 7.5 78.2143 7.5C77.7476 7.5 77.3309 7.59167 76.9643 7.775C76.5976 7.95833 76.3059 8.25 76.0893 8.65C75.8893 9.05 75.7809 9.55833 75.7643 10.175C75.7476 10.875 75.7393 11.5667 75.7393 12.25C75.7393 12.9167 75.7476 13.6083 75.7643 14.325C75.7976 15.2583 76.0309 15.9417 76.4643 16.375C76.9143 16.7917 77.4976 17 78.2143 17ZM89.4783 21C89.3117 21 89.1617 20.9417 89.0283 20.825C88.895 20.6917 88.8283 20.5333 88.8283 20.35V4.15C88.8283 3.96667 88.895 3.81667 89.0283 3.7C89.1617 3.56667 89.3117 3.5 89.4783 3.5H93.7283C93.9117 3.5 94.0617 3.56667 94.1783 3.7C94.3117 3.81667 94.3783 3.96667 94.3783 4.15V20.35C94.3783 20.5333 94.3117 20.6917 94.1783 20.825C94.0617 20.9417 93.9117 21 93.7283 21H89.4783ZM104.396 21.25C102.646 21.25 101.188 21.0083 100.021 20.525C98.8709 20.025 98.0042 19.3833 97.4209 18.6C96.8542 17.8 96.5542 16.9583 96.5209 16.075C96.5209 15.925 96.5709 15.8 96.6709 15.7C96.7709 15.6 96.8959 15.55 97.0459 15.55H101.021C101.254 15.55 101.438 15.5917 101.571 15.675C101.704 15.7417 101.846 15.8417 101.996 15.975C102.146 16.1583 102.321 16.3333 102.521 16.5C102.721 16.65 102.979 16.775 103.296 16.875C103.613 16.9583 103.979 17 104.396 17C105.163 17 105.754 16.9 106.171 16.7C106.588 16.4833 106.796 16.1917 106.796 15.825C106.796 15.5417 106.679 15.3083 106.446 15.125C106.229 14.9417 105.854 14.775 105.321 14.625C104.788 14.475 104.063 14.3167 103.146 14.15C101.863 13.9333 100.754 13.6167 99.8209 13.2C98.8876 12.7667 98.1709 12.1917 97.6709 11.475C97.1876 10.7417 96.9459 9.84167 96.9459 8.775C96.9459 7.69167 97.2459 6.73333 97.8459 5.9C98.4626 5.06667 99.3126 4.41667 100.396 3.95C101.496 3.48333 102.771 3.25 104.221 3.25C105.421 3.25 106.479 3.40833 107.396 3.725C108.329 4.04167 109.113 4.45833 109.746 4.975C110.379 5.475 110.863 6.01667 111.196 6.6C111.529 7.18333 111.704 7.74167 111.721 8.275C111.721 8.425 111.663 8.55833 111.546 8.675C111.446 8.775 111.329 8.825 111.196 8.825H107.021C106.821 8.825 106.646 8.79167 106.496 8.725C106.363 8.65833 106.238 8.55 106.121 8.4C106.038 8.16667 105.829 7.95833 105.496 7.775C105.163 7.59167 104.738 7.5 104.221 7.5C103.654 7.5 103.221 7.6 102.921 7.8C102.621 7.98333 102.471 8.25833 102.471 8.625C102.471 8.875 102.563 9.09167 102.746 9.275C102.929 9.45833 103.254 9.625 103.721 9.775C104.188 9.90833 104.838 10.0583 105.671 10.225C107.254 10.4583 108.529 10.7917 109.496 11.225C110.479 11.6583 111.196 12.225 111.646 12.925C112.096 13.625 112.321 14.5 112.321 15.55C112.321 16.7333 111.979 17.75 111.296 18.6C110.613 19.45 109.671 20.1083 108.471 20.575C107.288 21.025 105.929 21.25 104.396 21.25Z"
                    fill="#3C4048" />
                  <defs>
                    <clipPath id="clip0_11_1979">
                      <rect width="24" height="24" fill="white" />
                    </clipPath>
                  </defs>
                </svg>

              </a>
              <div class="-mr-2 flex items-center md:hidden">
                <button type="button"
                  class="inline-flex items-center justify-center rounded-md bg-white p-2 text-gray-400 hover:bg-gray-100 hover:text-gray-500 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-indigo-500"
                  aria-expanded="false">
                  <span class="sr-only">Open main menu</span>
                  <!-- Heroicon name: outline/bars-3 -->
                  <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                    stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round"
                      d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                  </svg>
                </button>
              </div>
            </div>
            {{-- <div class="hidden md:ml-10 md:block md:space-x-10">
              <a href="#" class="font-medium text-gray-500 hover:text-gray-900">Product</a>

              <a href="#" class="font-medium text-gray-500 hover:text-gray-900">Features</a>

              <a href="#" class="font-medium text-gray-500 hover:text-gray-900">Marketplace</a>

              <a href="#" class="font-medium text-gray-500 hover:text-gray-900">Company</a>
            </div> --}}
          </div>
          <div class="hidden text-right lg:flex lg:space-x-1 md:block">
            <x-button label="REGISTER HERE" right-icon="user" cyan class="font-bold" />
            <x-button href="{{ route('login') }}" label="LOGIN" right-icon="login" dark class="font-bold" />
          </div>
        </nav>

        <!--
          Mobile menu, show/hide based on menu open state.
  
          Entering: "duration-150 ease-out"
            From: "opacity-0 scale-95"
            To: "opacity-100 scale-100"
          Leaving: "duration-100 ease-in"
            From: "opacity-100 scale-100"
            To: "opacity-0 scale-95"
        -->
        {{-- <div class="absolute inset-x-0 top-0 z-10 origin-top-right transform p-2 transition md:hidden">
          <div class="overflow-hidden rounded-lg bg-white shadow-md ring-1 ring-black ring-opacity-5">
            <div class="flex items-center justify-between px-5 pt-4">
              <div>

                <svg width="128" height="24" viewBox="0 0 128 24" fill="none"
                  xmlns="http://www.w3.org/2000/svg">
                  <g clip-path="url(#clip0_11_1979)">
                    <path
                      d="M11.5 3.278V2.5H12.5V3.278V3.63829L12.8418 3.7523L17.8418 5.4203L17.9999 5.47305L18.1581 5.42037L21.316 4.3683L21.6324 5.31589L19.0749 6.16867L18.5876 6.33116L18.7631 6.81391L21.7494 15.0243C20.7664 15.9402 19.448 16.5 18 16.5C16.5512 16.5 15.2335 15.9402 14.2505 15.0243L17.2349 6.81381L17.4104 6.3312L16.9232 6.1687L13.1582 4.9127L12.5 4.69311V5.387V19V19.5H13H16.5V20.5H7.50002V19.5H11H11.5V19V5.387V4.69329L10.8419 4.91266L7.07391 6.16866L6.58653 6.33112L6.76214 6.81391L9.74849 15.0245C8.76637 15.9402 7.44799 16.5 6.00002 16.5C4.55117 16.5 3.23347 15.9402 2.25054 15.0243L5.23494 6.81381L5.4104 6.33108L4.92313 6.16866L2.36755 5.3168L2.6842 4.36735L5.84198 5.41937L6.00008 5.47204L6.15816 5.41933L11.1582 3.75233L11.5 3.63836V3.278ZM18.4699 8.93214L18.0002 7.64028L17.5302 8.93203L16.1122 12.829L15.868 13.5H16.582H19.417H20.1309L19.8869 12.8291L18.4699 8.93214ZM6.46992 8.93214L6.00019 7.64029L5.53016 8.93203L4.11216 12.829L3.86801 13.5H4.58202H7.41702H8.13085L7.88692 12.8291L6.46992 8.93214Z"
                      fill="#00ABB3" stroke="#3C4048" />
                  </g>
                  <path
                    d="M34.675 21.25C32.5917 21.25 30.9333 20.7167 29.7 19.65C28.4833 18.5667 27.8583 16.9167 27.825 14.7C27.825 14.6333 27.825 14.55 27.825 14.45C27.825 14.3333 27.825 14.25 27.825 14.2C27.875 12.8167 28.175 11.65 28.725 10.7C29.2917 9.73333 30.075 9 31.075 8.5C32.0917 8 33.2833 7.75 34.65 7.75C36.1833 7.75 37.45 8.05833 38.45 8.675C39.4667 9.275 40.225 10.0833 40.725 11.1C41.225 12.1 41.475 13.225 41.475 14.475V15.175C41.475 15.3417 41.4083 15.4917 41.275 15.625C41.1417 15.7583 40.9833 15.825 40.8 15.825H33.1C33.1 15.825 33.1 15.8417 33.1 15.875C33.1 15.9083 33.1 15.9417 33.1 15.975C33.1 16.375 33.15 16.7333 33.25 17.05C33.3667 17.35 33.5417 17.5917 33.775 17.775C34.0083 17.9417 34.2917 18.025 34.625 18.025C34.8417 18.025 35.025 17.9917 35.175 17.925C35.325 17.8583 35.45 17.775 35.55 17.675C35.6667 17.5583 35.7667 17.45 35.85 17.35C36 17.2 36.125 17.1083 36.225 17.075C36.325 17.025 36.475 17 36.675 17H40.6C40.75 17 40.875 17.05 40.975 17.15C41.0917 17.25 41.1417 17.375 41.125 17.525C41.1083 17.825 40.9667 18.1917 40.7 18.625C40.4333 19.0417 40.0333 19.45 39.5 19.85C38.9833 20.25 38.3167 20.5833 37.5 20.85C36.6833 21.1167 35.7417 21.25 34.675 21.25ZM33.1 13.025H36.2V12.975C36.2 12.525 36.1417 12.1417 36.025 11.825C35.9083 11.5083 35.7333 11.275 35.5 11.125C35.2667 10.9583 34.9833 10.875 34.65 10.875C34.3167 10.875 34.0333 10.9583 33.8 11.125C33.5667 11.275 33.3917 11.5083 33.275 11.825C33.1583 12.1417 33.1 12.525 33.1 12.975V13.025ZM44.1594 15.625C43.976 15.625 43.8177 15.5667 43.6844 15.45C43.5677 15.3167 43.5094 15.1583 43.5094 14.975V12.025C43.5094 11.8417 43.5677 11.6917 43.6844 11.575C43.8177 11.4417 43.976 11.375 44.1594 11.375H52.1594C52.3427 11.375 52.4927 11.4417 52.6094 11.575C52.7427 11.6917 52.8094 11.8417 52.8094 12.025V14.975C52.8094 15.1583 52.7427 15.3167 52.6094 15.45C52.4927 15.5667 52.3427 15.625 52.1594 15.625H44.1594ZM56.2264 21C56.0597 21 55.9097 20.9417 55.7764 20.825C55.643 20.6917 55.5764 20.5333 55.5764 20.35V4.15C55.5764 3.96667 55.643 3.81667 55.7764 3.7C55.9097 3.56667 56.0597 3.5 56.2264 3.5H60.3764C60.5597 3.5 60.718 3.56667 60.8514 3.7C60.9847 3.81667 61.0514 3.96667 61.0514 4.15V16.55H68.2764C68.4597 16.55 68.618 16.6167 68.7514 16.75C68.8847 16.8667 68.9514 17.0167 68.9514 17.2V20.35C68.9514 20.5333 68.8847 20.6917 68.7514 20.825C68.618 20.9417 68.4597 21 68.2764 21H56.2264ZM78.2143 21.25C76.6143 21.25 75.2226 21 74.0393 20.5C72.8726 20 71.9476 19.25 71.2643 18.25C70.5976 17.2333 70.2393 15.975 70.1893 14.475C70.1726 13.775 70.1643 13.0583 70.1643 12.325C70.1643 11.575 70.1726 10.8333 70.1893 10.1C70.2393 8.61667 70.5976 7.36667 71.2643 6.35C71.9476 5.33333 72.8809 4.56667 74.0643 4.05C75.2476 3.51667 76.6309 3.25 78.2143 3.25C79.7809 3.25 81.1559 3.51667 82.3393 4.05C83.5226 4.56667 84.4559 5.33333 85.1393 6.35C85.8226 7.36667 86.1809 8.61667 86.2143 10.1C86.2476 10.8333 86.2643 11.575 86.2643 12.325C86.2643 13.0583 86.2476 13.775 86.2143 14.475C86.1643 15.975 85.7976 17.2333 85.1143 18.25C84.4476 19.25 83.5226 20 82.3393 20.5C81.1726 21 79.7976 21.25 78.2143 21.25ZM78.2143 17C78.9143 17 79.4893 16.7917 79.9393 16.375C80.3893 15.9417 80.6226 15.2583 80.6393 14.325C80.6726 13.6083 80.6893 12.9167 80.6893 12.25C80.6893 11.5667 80.6726 10.875 80.6393 10.175C80.6226 9.55833 80.5059 9.05 80.2893 8.65C80.0893 8.25 79.8059 7.95833 79.4393 7.775C79.0893 7.59167 78.6809 7.5 78.2143 7.5C77.7476 7.5 77.3309 7.59167 76.9643 7.775C76.5976 7.95833 76.3059 8.25 76.0893 8.65C75.8893 9.05 75.7809 9.55833 75.7643 10.175C75.7476 10.875 75.7393 11.5667 75.7393 12.25C75.7393 12.9167 75.7476 13.6083 75.7643 14.325C75.7976 15.2583 76.0309 15.9417 76.4643 16.375C76.9143 16.7917 77.4976 17 78.2143 17ZM89.4783 21C89.3117 21 89.1617 20.9417 89.0283 20.825C88.895 20.6917 88.8283 20.5333 88.8283 20.35V4.15C88.8283 3.96667 88.895 3.81667 89.0283 3.7C89.1617 3.56667 89.3117 3.5 89.4783 3.5H93.7283C93.9117 3.5 94.0617 3.56667 94.1783 3.7C94.3117 3.81667 94.3783 3.96667 94.3783 4.15V20.35C94.3783 20.5333 94.3117 20.6917 94.1783 20.825C94.0617 20.9417 93.9117 21 93.7283 21H89.4783ZM104.396 21.25C102.646 21.25 101.188 21.0083 100.021 20.525C98.8709 20.025 98.0042 19.3833 97.4209 18.6C96.8542 17.8 96.5542 16.9583 96.5209 16.075C96.5209 15.925 96.5709 15.8 96.6709 15.7C96.7709 15.6 96.8959 15.55 97.0459 15.55H101.021C101.254 15.55 101.438 15.5917 101.571 15.675C101.704 15.7417 101.846 15.8417 101.996 15.975C102.146 16.1583 102.321 16.3333 102.521 16.5C102.721 16.65 102.979 16.775 103.296 16.875C103.613 16.9583 103.979 17 104.396 17C105.163 17 105.754 16.9 106.171 16.7C106.588 16.4833 106.796 16.1917 106.796 15.825C106.796 15.5417 106.679 15.3083 106.446 15.125C106.229 14.9417 105.854 14.775 105.321 14.625C104.788 14.475 104.063 14.3167 103.146 14.15C101.863 13.9333 100.754 13.6167 99.8209 13.2C98.8876 12.7667 98.1709 12.1917 97.6709 11.475C97.1876 10.7417 96.9459 9.84167 96.9459 8.775C96.9459 7.69167 97.2459 6.73333 97.8459 5.9C98.4626 5.06667 99.3126 4.41667 100.396 3.95C101.496 3.48333 102.771 3.25 104.221 3.25C105.421 3.25 106.479 3.40833 107.396 3.725C108.329 4.04167 109.113 4.45833 109.746 4.975C110.379 5.475 110.863 6.01667 111.196 6.6C111.529 7.18333 111.704 7.74167 111.721 8.275C111.721 8.425 111.663 8.55833 111.546 8.675C111.446 8.775 111.329 8.825 111.196 8.825H107.021C106.821 8.825 106.646 8.79167 106.496 8.725C106.363 8.65833 106.238 8.55 106.121 8.4C106.038 8.16667 105.829 7.95833 105.496 7.775C105.163 7.59167 104.738 7.5 104.221 7.5C103.654 7.5 103.221 7.6 102.921 7.8C102.621 7.98333 102.471 8.25833 102.471 8.625C102.471 8.875 102.563 9.09167 102.746 9.275C102.929 9.45833 103.254 9.625 103.721 9.775C104.188 9.90833 104.838 10.0583 105.671 10.225C107.254 10.4583 108.529 10.7917 109.496 11.225C110.479 11.6583 111.196 12.225 111.646 12.925C112.096 13.625 112.321 14.5 112.321 15.55C112.321 16.7333 111.979 17.75 111.296 18.6C110.613 19.45 109.671 20.1083 108.471 20.575C107.288 21.025 105.929 21.25 104.396 21.25Z"
                    fill="#3C4048" />
                  <defs>
                    <clipPath id="clip0_11_1979">
                      <rect width="24" height="24" fill="white" />
                    </clipPath>
                  </defs>
                </svg>

              </div>
              <div class="-mr-2">
                <button type="button"
                  class="inline-flex items-center justify-center rounded-md bg-white p-2 text-gray-400 hover:bg-gray-100 hover:text-gray-500 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-indigo-500">
                  <span class="sr-only">Close main menu</span>
                  <!-- Heroicon name: outline/x-mark -->
                  <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                    stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                  </svg>
                </button>
              </div>
            </div>
            <div class="space-y-1 px-2 pt-2 pb-3">
              <a href="#"
                class="block rounded-md px-3 py-2 text-base font-medium text-gray-700 hover:bg-gray-50 hover:text-gray-900">Product</a>

              <a href="#"
                class="block rounded-md px-3 py-2 text-base font-medium text-gray-700 hover:bg-gray-50 hover:text-gray-900">Features</a>

              <a href="#"
                class="block rounded-md px-3 py-2 text-base font-medium text-gray-700 hover:bg-gray-50 hover:text-gray-900">Marketplace</a>

              <a href="#"
                class="block rounded-md px-3 py-2 text-base font-medium text-gray-700 hover:bg-gray-50 hover:text-gray-900">Company</a>
            </div>
            <a href="#"
              class="block w-full bg-gray-50 px-5 py-3 text-center font-medium text-indigo-600 hover:bg-gray-100">Log
              in</a>
          </div>
        </div> --}}
      </div>

      <main class="mx-auto relative mt-16 max-w-7xl px-4 sm:mt-24 sm:px-6 lg:mt-32">
        <div class="lg:grid lg:grid-cols-12 lg:gap-8">
          <div class="sm:text-center md:mx-auto md:max-w-2xl lg:col-span-6 lg:text-left">
            <h1 class="">
              <span class="mt-1 block text-4xl font-bold text-gray-700 tracking-tight sm:text-5xl xl:text-6xl">
                We Specialise in all Aspects of Laws
              </span>
            </h1>
            <p class="mt-3 text-base text-gray-600 sm:mt-5 sm:text-xl lg:text-lg xl:text-lg">We <strong
                class="text-[#00ABB3]">never
                sleep</strong> till our
              client <strong class="text-[#00ABB3]">get justice</strong>.</p>
            <div class="mt-8 sm:mx-auto sm:max-w-lg relative sm:text-center lg:mx-0 lg:text-left">
              <div class="flex space-x-1 items-center">
                <span class="text-gray-600">Find a Lawyer</span>
                <button class="hover:fill-gray-700 fill-gray-500">
                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="h-6">
                    <path fill="none" d="M0 0h24v24H0z" />
                    <path
                      d="M12 2c5.52 0 10 4.48 10 10s-4.48 10-10 10S2 17.52 2 12 6.48 2 12 2zm0 9H8v2h4v3l4-4-4-4v3z" />
                  </svg>
                </button>

              </div>
              <p class="mt-3 text-sm text-gray-600">
                We care about the protection of your data. Read our
                <a href="#" class="font-medium text-gray-900 underline">Privacy Policy</a>.
              </p>
            </div>
          </div>
          <div
            class="relative mt-12 sm:mx-auto sm:max-w-lg lg:col-span-6 lg:mx-0 lg:mt-0 lg:flex lg:max-w-none lg:items-center">
            <svg
              class="absolute top-0 left-1/2 origin-top -translate-x-1/2 -translate-y-8 scale-75 transform sm:scale-100 lg:hidden"
              width="640" height="784" fill="none" viewBox="0 0 640 784" aria-hidden="true">
              <defs>
                <pattern id="4f4f415c-a0e9-44c2-9601-6ded5a34a13e" x="118" y="0" width="20"
                  height="20" patternUnits="userSpaceOnUse">
                  <rect x="0" y="0" width="4" height="4" class="text-gray-200"
                    fill="currentColor" />
                </pattern>
              </defs>
              <rect y="72" width="640" height="640" class="text-gray-50" fill="currentColor" />
              <rect x="118" width="404" height="784"
                fill="url(#4f4f415c-a0e9-44c2-9601-6ded5a34a13e)" />
            </svg>
            <div class="relative mx-auto w-full lg:max-w-md">
              <button type="button"
                class="relative block w-full overflow-hidden rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">
                <span class="sr-only">Watch our video to learn more</span>
                <img class="w-full" src="{{ asset('images/court.png') }}" alt="">

              </button>
            </div>
          </div>
        </div>
      </main>
    </div>
  </div>

  <div class="bg-white border shadow-2xl mb-2 rounded-3xl -mt-24 mx-64 relative">
    <div class=" py-12">
      <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <div class="lg:text-center">
          <p class="mt-2 text-3xl font-bold leading-8 tracking-tight text-gray-900 sm:text-4xl">A better way to send
            money</p>
          <p class="mt-4 max-w-2xl text-xl text-gray-500 lg:mx-auto">Lorem ipsum dolor sit amet consect adipisicing
            elit. Possimus magnam voluptatum cupiditate veritatis in accusamus quisquam.</p>
        </div>

        <div class="mt-10">
          <dl class="space-y-10 md:grid md:grid-cols-2 md:gap-x-8 md:gap-y-10 md:space-y-0">
            <div class="relative">
              <dt>
                <div class="absolute flex h-12 w-12 items-center justify-center rounded-md bg-indigo-500 text-white">
                  <!-- Heroicon name: outline/globe-alt -->
                  <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                    stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round"
                      d="M12 21a9.004 9.004 0 008.716-6.747M12 21a9.004 9.004 0 01-8.716-6.747M12 21c2.485 0 4.5-4.03 4.5-9S14.485 3 12 3m0 18c-2.485 0-4.5-4.03-4.5-9S9.515 3 12 3m0 0a8.997 8.997 0 017.843 4.582M12 3a8.997 8.997 0 00-7.843 4.582m15.686 0A11.953 11.953 0 0112 10.5c-2.998 0-5.74-1.1-7.843-2.918m15.686 0A8.959 8.959 0 0121 12c0 .778-.099 1.533-.284 2.253m0 0A17.919 17.919 0 0112 16.5c-3.162 0-6.133-.815-8.716-2.247m0 0A9.015 9.015 0 013 12c0-1.605.42-3.113 1.157-4.418" />
                  </svg>
                </div>
                <p class="ml-16 text-lg font-medium leading-6 text-gray-900">Competitive exchange rates</p>
              </dt>
              <dd class="mt-2 ml-16 text-base text-gray-500">Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                Maiores impedit perferendis suscipit eaque, iste dolor cupiditate blanditiis ratione.</dd>
            </div>

            <div class="relative">
              <dt>
                <div class="absolute flex h-12 w-12 items-center justify-center rounded-md bg-indigo-500 text-white">
                  <!-- Heroicon name: outline/scale -->
                  <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                    stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round"
                      d="M12 3v17.25m0 0c-1.472 0-2.882.265-4.185.75M12 20.25c1.472 0 2.882.265 4.185.75M18.75 4.97A48.416 48.416 0 0012 4.5c-2.291 0-4.545.16-6.75.47m13.5 0c1.01.143 2.01.317 3 .52m-3-.52l2.62 10.726c.122.499-.106 1.028-.589 1.202a5.988 5.988 0 01-2.031.352 5.988 5.988 0 01-2.031-.352c-.483-.174-.711-.703-.59-1.202L18.75 4.971zm-16.5.52c.99-.203 1.99-.377 3-.52m0 0l2.62 10.726c.122.499-.106 1.028-.589 1.202a5.989 5.989 0 01-2.031.352 5.989 5.989 0 01-2.031-.352c-.483-.174-.711-.703-.59-1.202L5.25 4.971z" />
                  </svg>
                </div>
                <p class="ml-16 text-lg font-medium leading-6 text-gray-900">No hidden fees</p>
              </dt>
              <dd class="mt-2 ml-16 text-base text-gray-500">Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                Maiores impedit perferendis suscipit eaque, iste dolor cupiditate blanditiis ratione.</dd>
            </div>

            <div class="relative">
              <dt>
                <div class="absolute flex h-12 w-12 items-center justify-center rounded-md bg-indigo-500 text-white">
                  <!-- Heroicon name: outline/bolt -->
                  <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                    stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round"
                      d="M3.75 13.5l10.5-11.25L12 10.5h8.25L9.75 21.75 12 13.5H3.75z" />
                  </svg>
                </div>
                <p class="ml-16 text-lg font-medium leading-6 text-gray-900">Transfers are instant</p>
              </dt>
              <dd class="mt-2 ml-16 text-base text-gray-500">Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                Maiores impedit perferendis suscipit eaque, iste dolor cupiditate blanditiis ratione.</dd>
            </div>

            <div class="relative">
              <dt>
                <div class="absolute flex h-12 w-12 items-center justify-center rounded-md bg-indigo-500 text-white">
                  <!-- Heroicon name: outline/chat-bubble-bottom-center-text -->
                  <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                    stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round"
                      d="M7.5 8.25h9m-9 3H12m-9.75 1.51c0 1.6 1.123 2.994 2.707 3.227 1.129.166 2.27.293 3.423.379.35.026.67.21.865.501L12 21l2.755-4.133a1.14 1.14 0 01.865-.501 48.172 48.172 0 003.423-.379c1.584-.233 2.707-1.626 2.707-3.228V6.741c0-1.602-1.123-2.995-2.707-3.228A48.394 48.394 0 0012 3c-2.392 0-4.744.175-7.043.513C3.373 3.746 2.25 5.14 2.25 6.741v6.018z" />
                  </svg>
                </div>
                <p class="ml-16 text-lg font-medium leading-6 text-gray-900">Mobile notifications</p>
              </dt>
              <dd class="mt-2 ml-16 text-base text-gray-500">Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                Maiores impedit perferendis suscipit eaque, iste dolor cupiditate blanditiis ratione.</dd>
            </div>
          </dl>
        </div>
      </div>
    </div>
  </div>

  <div class="relative bg-white  sm:py-24 ">
    <div class="mx-auto max-w-md px-4 text-center sm:max-w-3xl sm:px-6 lg:max-w-7xl lg:px-8">
      <h2 class="text-lg font-semibold text-indigo-600">Deploy faster</h2>
      <p class="mt-2 text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">Everything you need to deploy your
        app</p>
      <p class="mx-auto mt-5 max-w-prose text-xl text-gray-500">Phasellus lorem quam molestie id quisque diam aenean
        nulla in. Accumsan in quis quis nunc, ullamcorper malesuada. Eleifend condimentum id viverra nulla.</p>
      <div class="mt-12">
        <div class="grid grid-cols-1 gap-8 sm:grid-cols-2 lg:grid-cols-3">
          <div class="pt-6">
            <div class="flow-root rounded-lg bg-gray-50 px-6 pb-8">
              <div class="-mt-6">
                <div>
                  <span class="inline-flex items-center justify-center rounded-md bg-indigo-500 p-3 shadow-lg">
                    <!-- Heroicon name: outline/cloud-arrow-up -->
                    <svg class="h-6 w-6 text-white" xmlns="http://www.w3.org/2000/svg" fill="none"
                      viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                      <path stroke-linecap="round" stroke-linejoin="round"
                        d="M12 16.5V9.75m0 0l3 3m-3-3l-3 3M6.75 19.5a4.5 4.5 0 01-1.41-8.775 5.25 5.25 0 0110.233-2.33 3 3 0 013.758 3.848A3.752 3.752 0 0118 19.5H6.75z" />
                    </svg>
                  </span>
                </div>
                <h3 class="mt-8 text-lg font-medium tracking-tight text-gray-900">Push to Deploy</h3>
                <p class="mt-5 text-base text-gray-500">Ac tincidunt sapien vehicula erat auctor pellentesque rhoncus.
                  Et magna sit morbi lobortis.</p>
              </div>
            </div>
          </div>

          <div class="pt-6">
            <div class="flow-root rounded-lg bg-gray-50 px-6 pb-8">
              <div class="-mt-6">
                <div>
                  <span class="inline-flex items-center justify-center rounded-md bg-indigo-500 p-3 shadow-lg">
                    <!-- Heroicon name: outline/lock-closed -->
                    <svg class="h-6 w-6 text-white" xmlns="http://www.w3.org/2000/svg" fill="none"
                      viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                      <path stroke-linecap="round" stroke-linejoin="round"
                        d="M16.5 10.5V6.75a4.5 4.5 0 10-9 0v3.75m-.75 11.25h10.5a2.25 2.25 0 002.25-2.25v-6.75a2.25 2.25 0 00-2.25-2.25H6.75a2.25 2.25 0 00-2.25 2.25v6.75a2.25 2.25 0 002.25 2.25z" />
                    </svg>
                  </span>
                </div>
                <h3 class="mt-8 text-lg font-medium tracking-tight text-gray-900">SSL Certificates</h3>
                <p class="mt-5 text-base text-gray-500">Ac tincidunt sapien vehicula erat auctor pellentesque rhoncus.
                  Et magna sit morbi lobortis.</p>
              </div>
            </div>
          </div>

          <div class="pt-6">
            <div class="flow-root rounded-lg bg-gray-50 px-6 pb-8">
              <div class="-mt-6">
                <div>
                  <span class="inline-flex items-center justify-center rounded-md bg-indigo-500 p-3 shadow-lg">
                    <!-- Heroicon name: outline/arrow-path -->
                    <svg class="h-6 w-6 text-white" xmlns="http://www.w3.org/2000/svg" fill="none"
                      viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                      <path stroke-linecap="round" stroke-linejoin="round"
                        d="M4.5 12c0-1.232.046-2.453.138-3.662a4.006 4.006 0 013.7-3.7 48.678 48.678 0 017.324 0 4.006 4.006 0 013.7 3.7c.017.22.032.441.046.662M4.5 12l-3-3m3 3l3-3m12 3c0 1.232-.046 2.453-.138 3.662a4.006 4.006 0 01-3.7 3.7 48.657 48.657 0 01-7.324 0 4.006 4.006 0 01-3.7-3.7c-.017-.22-.032-.441-.046-.662M19.5 12l-3 3m3-3l3 3" />
                    </svg>
                  </span>
                </div>
                <h3 class="mt-8 text-lg font-medium tracking-tight text-gray-900">Simple Queues</h3>
                <p class="mt-5 text-base text-gray-500">Ac tincidunt sapien vehicula erat auctor pellentesque rhoncus.
                  Et magna sit morbi lobortis.</p>
              </div>
            </div>
          </div>

          <div class="pt-6">
            <div class="flow-root rounded-lg bg-gray-50 px-6 pb-8">
              <div class="-mt-6">
                <div>
                  <span class="inline-flex items-center justify-center rounded-md bg-indigo-500 p-3 shadow-lg">
                    <!-- Heroicon name: outline/shield-check -->
                    <svg class="h-6 w-6 text-white" xmlns="http://www.w3.org/2000/svg" fill="none"
                      viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                      <path stroke-linecap="round" stroke-linejoin="round"
                        d="M9 12.75L11.25 15 15 9.75m-3-7.036A11.959 11.959 0 013.598 6 11.99 11.99 0 003 9.749c0 5.592 3.824 10.29 9 11.623 5.176-1.332 9-6.03 9-11.622 0-1.31-.21-2.571-.598-3.751h-.152c-3.196 0-6.1-1.248-8.25-3.285z" />
                    </svg>
                  </span>
                </div>
                <h3 class="mt-8 text-lg font-medium tracking-tight text-gray-900">Advanced Security</h3>
                <p class="mt-5 text-base text-gray-500">Ac tincidunt sapien vehicula erat auctor pellentesque rhoncus.
                  Et magna sit morbi lobortis.</p>
              </div>
            </div>
          </div>

          <div class="pt-6">
            <div class="flow-root rounded-lg bg-gray-50 px-6 pb-8">
              <div class="-mt-6">
                <div>
                  <span class="inline-flex items-center justify-center rounded-md bg-indigo-500 p-3 shadow-lg">
                    <!-- Heroicon name: outline/cog -->
                    <svg class="h-6 w-6 text-white" xmlns="http://www.w3.org/2000/svg" fill="none"
                      viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                      <path stroke-linecap="round" stroke-linejoin="round"
                        d="M4.5 12a7.5 7.5 0 0015 0m-15 0a7.5 7.5 0 1115 0m-15 0H3m16.5 0H21m-1.5 0H12m-8.457 3.077l1.41-.513m14.095-5.13l1.41-.513M5.106 17.785l1.15-.964m11.49-9.642l1.149-.964M7.501 19.795l.75-1.3m7.5-12.99l.75-1.3m-6.063 16.658l.26-1.477m2.605-14.772l.26-1.477m0 17.726l-.26-1.477M10.698 4.614l-.26-1.477M16.5 19.794l-.75-1.299M7.5 4.205L12 12m6.894 5.785l-1.149-.964M6.256 7.178l-1.15-.964m15.352 8.864l-1.41-.513M4.954 9.435l-1.41-.514M12.002 12l-3.75 6.495" />
                    </svg>
                  </span>
                </div>
                <h3 class="mt-8 text-lg font-medium tracking-tight text-gray-900">Powerful API</h3>
                <p class="mt-5 text-base text-gray-500">Ac tincidunt sapien vehicula erat auctor pellentesque rhoncus.
                  Et magna sit morbi lobortis.</p>
              </div>
            </div>
          </div>

          <div class="pt-6">
            <div class="flow-root rounded-lg bg-gray-50 px-6 pb-8">
              <div class="-mt-6">
                <div>
                  <span class="inline-flex items-center justify-center rounded-md bg-indigo-500 p-3 shadow-lg">
                    <!-- Heroicon name: outline/server -->
                    <svg class="h-6 w-6 text-white" xmlns="http://www.w3.org/2000/svg" fill="none"
                      viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                      <path stroke-linecap="round" stroke-linejoin="round"
                        d="M21.75 17.25v-.228a4.5 4.5 0 00-.12-1.03l-2.268-9.64a3.375 3.375 0 00-3.285-2.602H7.923a3.375 3.375 0 00-3.285 2.602l-2.268 9.64a4.5 4.5 0 00-.12 1.03v.228m19.5 0a3 3 0 01-3 3H5.25a3 3 0 01-3-3m19.5 0a3 3 0 00-3-3H5.25a3 3 0 00-3 3m16.5 0h.008v.008h-.008v-.008zm-3 0h.008v.008h-.008v-.008z" />
                    </svg>
                  </span>
                </div>
                <h3 class="mt-8 text-lg font-medium tracking-tight text-gray-900">Database Backups</h3>
                <p class="mt-5 text-base text-gray-500">Ac tincidunt sapien vehicula erat auctor pellentesque rhoncus.
                  Et magna sit morbi lobortis.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>


  @livewireScripts
</body>

</html>
