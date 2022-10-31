<x-admin-layout>
  <div class="py-6">
    <x-breadcrumbs title="Dashboard" />
    <div class="mx-auto max-w-7xl mt-5 px-4 sm:px-6 md:px-8">
      <!-- Replace with your content -->
      <div class="py-4">
        <div class="grid grid-cols-3 gap-8">
          <div class="col-span-2">
            <div>
              <header>
                <h1 class="font-semibold text-gray-600">STATISTICAL OVERVIEW</h1>
              </header>
              <div class="mt-5 grid grid-cols-2 gap-4">
                <x-stats title="TOTAL DOCUMENTS" total="100">
                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="h-10 fill-green-600">
                    <path fill="none" d="M0 0h24v24H0z" />
                    <path
                      d="M3.087 9h17.826a1 1 0 0 1 .997 1.083l-.834 10a1 1 0 0 1-.996.917H3.92a1 1 0 0 1-.996-.917l-.834-10A1 1 0 0 1 3.087 9zM4.84 19h14.32l.666-8H4.174l.666 8zm8.574-14H20a1 1 0 0 1 1 1v1H3V4a1 1 0 0 1 1-1h7.414l2 2z" />
                  </svg>
                </x-stats>
                <x-stats title="TOTAL APPOINTMENTS" total="100">
                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="h-10 fill-blue-600">
                    <path fill="none" d="M0 0h24v24H0z" />
                    <path
                      d="M17 3h4a1 1 0 0 1 1 1v16a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V4a1 1 0 0 1 1-1h4V1h2v2h6V1h2v2zM4 9v10h16V9H4zm2 2h2v2H6v-2zm0 4h2v2H6v-2zm4-4h8v2h-8v-2zm0 4h5v2h-5v-2z" />
                  </svg>
                </x-stats>
                <x-stats title="TOTAL USERS" total="100">
                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="h-10 fill-gray-600">
                    <path fill="none" d="M0 0h24v24H0z" />
                    <path d="M5 20h14v2H5v-2zm7-2a8 8 0 1 1 0-16 8 8 0 0 1 0 16z" />
                  </svg>
                </x-stats>
                <x-stats title="TOTAL CLIENTS" total="100">
                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="h-10 fill-gray-600">
                    <path fill="none" d="M0 0h24v24H0z" />
                    <path d="M5 20h14v2H5v-2zm7-2a8 8 0 1 1 0-16 8 8 0 0 1 0 16z" />
                  </svg>
                </x-stats>
              </div>
            </div>
            <div class="mt-10">
              <header>
                <h1 class="font-semibold text-gray-600">TODAY'S APPOINTMENTS</h1>
              </header>
              <div class="mt-2">
                <div class="overflow-hidden bg-white shadow sm:rounded-md">
                  <ul role="list" class="divide-y divide-gray-200">
                    <li>
                      <a href="#" class="block hover:bg-gray-50">
                        <div class="px-4 py-4 sm:px-6">
                          <div class="flex items-center justify-between">
                            <p class="truncate text-sm font-medium text-indigo-600">Back End Developer</p>
                            <div class="ml-2 flex flex-shrink-0">
                              <p
                                class="inline-flex rounded-full bg-green-100 px-2 text-xs font-semibold leading-5 text-green-800">
                                Full-time</p>
                            </div>
                          </div>
                          <div class="mt-2 sm:flex sm:justify-between">
                            <div class="sm:flex">
                              <p class="flex items-center text-sm text-gray-500">
                                <!-- Heroicon name: mini/users -->
                                <svg class="mr-1.5 h-5 w-5 flex-shrink-0 text-gray-400"
                                  xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                                  aria-hidden="true">
                                  <path
                                    d="M7 8a3 3 0 100-6 3 3 0 000 6zM14.5 9a2.5 2.5 0 100-5 2.5 2.5 0 000 5zM1.615 16.428a1.224 1.224 0 01-.569-1.175 6.002 6.002 0 0111.908 0c.058.467-.172.92-.57 1.174A9.953 9.953 0 017 18a9.953 9.953 0 01-5.385-1.572zM14.5 16h-.106c.07-.297.088-.611.048-.933a7.47 7.47 0 00-1.588-3.755 4.502 4.502 0 015.874 2.636.818.818 0 01-.36.98A7.465 7.465 0 0114.5 16z" />
                                </svg>
                                Engineering
                              </p>
                              <p class="mt-2 flex items-center text-sm text-gray-500 sm:mt-0 sm:ml-6">
                                <!-- Heroicon name: mini/map-pin -->
                                <svg class="mr-1.5 h-5 w-5 flex-shrink-0 text-gray-400"
                                  xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                                  aria-hidden="true">
                                  <path fill-rule="evenodd"
                                    d="M9.69 18.933l.003.001C9.89 19.02 10 19 10 19s.11.02.308-.066l.002-.001.006-.003.018-.008a5.741 5.741 0 00.281-.14c.186-.096.446-.24.757-.433.62-.384 1.445-.966 2.274-1.765C15.302 14.988 17 12.493 17 9A7 7 0 103 9c0 3.492 1.698 5.988 3.355 7.584a13.731 13.731 0 002.273 1.765 11.842 11.842 0 00.976.544l.062.029.018.008.006.003zM10 11.25a2.25 2.25 0 100-4.5 2.25 2.25 0 000 4.5z"
                                    clip-rule="evenodd" />
                                </svg>
                                Remote
                              </p>
                            </div>
                            <div class="mt-2 flex items-center text-sm text-gray-500 sm:mt-0">
                              <!-- Heroicon name: mini/calendar -->
                              <svg class="mr-1.5 h-5 w-5 flex-shrink-0 text-gray-400" xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd"
                                  d="M5.75 2a.75.75 0 01.75.75V4h7V2.75a.75.75 0 011.5 0V4h.25A2.75 2.75 0 0118 6.75v8.5A2.75 2.75 0 0115.25 18H4.75A2.75 2.75 0 012 15.25v-8.5A2.75 2.75 0 014.75 4H5V2.75A.75.75 0 015.75 2zm-1 5.5c-.69 0-1.25.56-1.25 1.25v6.5c0 .69.56 1.25 1.25 1.25h10.5c.69 0 1.25-.56 1.25-1.25v-6.5c0-.69-.56-1.25-1.25-1.25H4.75z"
                                  clip-rule="evenodd" />
                              </svg>
                              <p>
                                Closing on
                                <time datetime="2020-01-07">January 7, 2020</time>
                              </p>
                            </div>
                          </div>
                        </div>
                      </a>
                    </li>

                    <li>
                      <a href="#" class="block hover:bg-gray-50">
                        <div class="px-4 py-4 sm:px-6">
                          <div class="flex items-center justify-between">
                            <p class="truncate text-sm font-medium text-indigo-600">Front End Developer</p>
                            <div class="ml-2 flex flex-shrink-0">
                              <p
                                class="inline-flex rounded-full bg-green-100 px-2 text-xs font-semibold leading-5 text-green-800">
                                Full-time</p>
                            </div>
                          </div>
                          <div class="mt-2 sm:flex sm:justify-between">
                            <div class="sm:flex">
                              <p class="flex items-center text-sm text-gray-500">
                                <!-- Heroicon name: mini/users -->
                                <svg class="mr-1.5 h-5 w-5 flex-shrink-0 text-gray-400"
                                  xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                                  aria-hidden="true">
                                  <path
                                    d="M7 8a3 3 0 100-6 3 3 0 000 6zM14.5 9a2.5 2.5 0 100-5 2.5 2.5 0 000 5zM1.615 16.428a1.224 1.224 0 01-.569-1.175 6.002 6.002 0 0111.908 0c.058.467-.172.92-.57 1.174A9.953 9.953 0 017 18a9.953 9.953 0 01-5.385-1.572zM14.5 16h-.106c.07-.297.088-.611.048-.933a7.47 7.47 0 00-1.588-3.755 4.502 4.502 0 015.874 2.636.818.818 0 01-.36.98A7.465 7.465 0 0114.5 16z" />
                                </svg>
                                Engineering
                              </p>
                              <p class="mt-2 flex items-center text-sm text-gray-500 sm:mt-0 sm:ml-6">
                                <!-- Heroicon name: mini/map-pin -->
                                <svg class="mr-1.5 h-5 w-5 flex-shrink-0 text-gray-400"
                                  xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                                  aria-hidden="true">
                                  <path fill-rule="evenodd"
                                    d="M9.69 18.933l.003.001C9.89 19.02 10 19 10 19s.11.02.308-.066l.002-.001.006-.003.018-.008a5.741 5.741 0 00.281-.14c.186-.096.446-.24.757-.433.62-.384 1.445-.966 2.274-1.765C15.302 14.988 17 12.493 17 9A7 7 0 103 9c0 3.492 1.698 5.988 3.355 7.584a13.731 13.731 0 002.273 1.765 11.842 11.842 0 00.976.544l.062.029.018.008.006.003zM10 11.25a2.25 2.25 0 100-4.5 2.25 2.25 0 000 4.5z"
                                    clip-rule="evenodd" />
                                </svg>
                                Remote
                              </p>
                            </div>
                            <div class="mt-2 flex items-center text-sm text-gray-500 sm:mt-0">
                              <!-- Heroicon name: mini/calendar -->
                              <svg class="mr-1.5 h-5 w-5 flex-shrink-0 text-gray-400"
                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                                aria-hidden="true">
                                <path fill-rule="evenodd"
                                  d="M5.75 2a.75.75 0 01.75.75V4h7V2.75a.75.75 0 011.5 0V4h.25A2.75 2.75 0 0118 6.75v8.5A2.75 2.75 0 0115.25 18H4.75A2.75 2.75 0 012 15.25v-8.5A2.75 2.75 0 014.75 4H5V2.75A.75.75 0 015.75 2zm-1 5.5c-.69 0-1.25.56-1.25 1.25v6.5c0 .69.56 1.25 1.25 1.25h10.5c.69 0 1.25-.56 1.25-1.25v-6.5c0-.69-.56-1.25-1.25-1.25H4.75z"
                                  clip-rule="evenodd" />
                              </svg>
                              <p>
                                Closing on
                                <time datetime="2020-01-07">January 7, 2020</time>
                              </p>
                            </div>
                          </div>
                        </div>
                      </a>
                    </li>

                    <li>
                      <a href="#" class="block hover:bg-gray-50">
                        <div class="px-4 py-4 sm:px-6">
                          <div class="flex items-center justify-between">
                            <p class="truncate text-sm font-medium text-indigo-600">User Interface Designer</p>
                            <div class="ml-2 flex flex-shrink-0">
                              <p
                                class="inline-flex rounded-full bg-green-100 px-2 text-xs font-semibold leading-5 text-green-800">
                                Full-time</p>
                            </div>
                          </div>
                          <div class="mt-2 sm:flex sm:justify-between">
                            <div class="sm:flex">
                              <p class="flex items-center text-sm text-gray-500">
                                <!-- Heroicon name: mini/users -->
                                <svg class="mr-1.5 h-5 w-5 flex-shrink-0 text-gray-400"
                                  xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                                  aria-hidden="true">
                                  <path
                                    d="M7 8a3 3 0 100-6 3 3 0 000 6zM14.5 9a2.5 2.5 0 100-5 2.5 2.5 0 000 5zM1.615 16.428a1.224 1.224 0 01-.569-1.175 6.002 6.002 0 0111.908 0c.058.467-.172.92-.57 1.174A9.953 9.953 0 017 18a9.953 9.953 0 01-5.385-1.572zM14.5 16h-.106c.07-.297.088-.611.048-.933a7.47 7.47 0 00-1.588-3.755 4.502 4.502 0 015.874 2.636.818.818 0 01-.36.98A7.465 7.465 0 0114.5 16z" />
                                </svg>
                                Design
                              </p>
                              <p class="mt-2 flex items-center text-sm text-gray-500 sm:mt-0 sm:ml-6">
                                <!-- Heroicon name: mini/map-pin -->
                                <svg class="mr-1.5 h-5 w-5 flex-shrink-0 text-gray-400"
                                  xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                                  aria-hidden="true">
                                  <path fill-rule="evenodd"
                                    d="M9.69 18.933l.003.001C9.89 19.02 10 19 10 19s.11.02.308-.066l.002-.001.006-.003.018-.008a5.741 5.741 0 00.281-.14c.186-.096.446-.24.757-.433.62-.384 1.445-.966 2.274-1.765C15.302 14.988 17 12.493 17 9A7 7 0 103 9c0 3.492 1.698 5.988 3.355 7.584a13.731 13.731 0 002.273 1.765 11.842 11.842 0 00.976.544l.062.029.018.008.006.003zM10 11.25a2.25 2.25 0 100-4.5 2.25 2.25 0 000 4.5z"
                                    clip-rule="evenodd" />
                                </svg>
                                Remote
                              </p>
                            </div>
                            <div class="mt-2 flex items-center text-sm text-gray-500 sm:mt-0">
                              <!-- Heroicon name: mini/calendar -->
                              <svg class="mr-1.5 h-5 w-5 flex-shrink-0 text-gray-400"
                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                                aria-hidden="true">
                                <path fill-rule="evenodd"
                                  d="M5.75 2a.75.75 0 01.75.75V4h7V2.75a.75.75 0 011.5 0V4h.25A2.75 2.75 0 0118 6.75v8.5A2.75 2.75 0 0115.25 18H4.75A2.75 2.75 0 012 15.25v-8.5A2.75 2.75 0 014.75 4H5V2.75A.75.75 0 015.75 2zm-1 5.5c-.69 0-1.25.56-1.25 1.25v6.5c0 .69.56 1.25 1.25 1.25h10.5c.69 0 1.25-.56 1.25-1.25v-6.5c0-.69-.56-1.25-1.25-1.25H4.75z"
                                  clip-rule="evenodd" />
                              </svg>
                              <p>
                                Closing on
                                <time datetime="2020-01-14">January 14, 2020</time>
                              </p>
                            </div>
                          </div>
                        </div>
                      </a>
                    </li>
                  </ul>
                </div>

              </div>
            </div>
          </div>
          <div class="">
            <div>
              <header class="flex justify-between items-center">
                <h1 class="font-semibold text-gray-600">NEW CASES</h1>
                <a href="" class="flex space-x-1 items-center text-gray-600 hover:text-green-700">
                  <p class="text-sm ">View all</p>
                  <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="w-5 h-5">
                    <path stroke-linecap="round" stroke-linejoin="round"
                      d="M17.25 8.25L21 12m0 0l-3.75 3.75M21 12H3" />
                  </svg>

                </a>
              </header>
              <div class="mt-3">
                <ul role="list" class="divide-y-2 divide-gray-200">
                  <li>
                    <a href="#" class="block bg-gray-50">
                      <div class="px-4 py-4 sm:px-6">
                        <div class="flex items-center justify-between">
                          <x-button label="OPEN" xs right-icon="external-link" sky />
                          <div class="ml-2 flex flex-shrink-0">
                            <p class="text-xs text-gray-700">Nov. 23, 2022</p>
                          </div>
                        </div>
                        <div class="mt-2 sm:flex sm:justify-between">
                          <div>
                            <h1 class="text-md uppercase font-medium text-gray-500">asdjkhsdhsakd</h1>
                            <p class="text-justify text-xs">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                              Eaque
                              corrupti, voluptas dolorum
                              sunt dignissimos nobis non et officia assumenda atque?</p>
                          </div>

                        </div>
                      </div>
                    </a>
                  </li>
                  <li>
                    <a href="#" class="block bg-gray-50">
                      <div class="px-4 py-4 sm:px-6">
                        <div class="flex items-center justify-between">
                          <x-button label="OPEN" xs right-icon="external-link" sky />
                          <div class="ml-2 flex flex-shrink-0">
                            <p class="text-xs text-gray-700">Nov. 23, 2022</p>
                          </div>
                        </div>
                        <div class="mt-2 sm:flex sm:justify-between">
                          <div>
                            <h1 class="text-md uppercase font-medium text-gray-500">asdjkhsdhsakd</h1>
                            <p class="text-justify text-xs">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                              Eaque
                              corrupti, voluptas dolorum
                              sunt dignissimos nobis non et officia assumenda atque?</p>
                          </div>

                        </div>
                      </div>
                    </a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- /End replace -->
    </div>
  </div>
</x-admin-layout>
