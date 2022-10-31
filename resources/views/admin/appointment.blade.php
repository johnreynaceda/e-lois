<x-admin-layout>
  <div class="py-6">
    <x-breadcrumbs title="Appointments" />
    <div class="mx-auto max-w-7xl mt-5 px-4 sm:px-6 md:px-8">
      <div class="flex space-x-8 justify-between">
        <div class="flex-1 ">
          <div class="flex  justify-between">
            <div>
              <div class="flex bg-white  items-center border px-2 rounded-lg shadow-sm">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="fill-gray-500" width="24"
                  height="24">
                  <path fill="none" d="M0 0h24v24H0z" />
                  <path
                    d="M11 2c4.968 0 9 4.032 9 9s-4.032 9-9 9-9-4.032-9-9 4.032-9 9-9zm0 16c3.867 0 7-3.133 7-7 0-3.868-3.133-7-7-7-3.868 0-7 3.132-7 7 0 3.867 3.132 7 7 7zm8.485.071l2.829 2.828-1.415 1.415-2.828-2.829 1.414-1.414z" />
                </svg>
                <input placeholder="Search appointments..." type="text"
                  class="focus:border-0 border-0 focus:outline-none text-sm focus:ring-0">
              </div>
            </div>
            <div>
            </div>
          </div>
          <div class="overflow-hidden bg-white shadow mt-5 sm:rounded-md">
            <ul role="list" class="divide-y divide-gray-200">
              <li>
                <a href="#" class="block hover:bg-gray-50">
                  <div class="flex items-center p-2 px-4">
                    <div class="min-w-0 flex-1 sm:flex sm:items-center sm:justify-between">
                      <div class="truncate">
                        <div class="flex text-sm space-x-1">
                          <p class="truncate font-semibold uppercase text-sky-700">JOHN DOE |</p>
                          <p class="truncate font-semibold uppercase text-sky-700"> Kalawag 2, Isulan, Sultan Kudarat
                          </p>
                        </div>
                        <div class="flex">
                          <div class="flex items-center text-sm text-white">
                            <!-- Heroicon name: mini/calendar -->
                            <svg class="mr-1.5 h-5 w-5 flex-shrink-0 text-gray-600" xmlns="http://www.w3.org/2000/svg"
                              viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                              <path fill-rule="evenodd"
                                d="M5.75 2a.75.75 0 01.75.75V4h7V2.75a.75.75 0 011.5 0V4h.25A2.75 2.75 0 0118 6.75v8.5A2.75 2.75 0 0115.25 18H4.75A2.75 2.75 0 012 15.25v-8.5A2.75 2.75 0 014.75 4H5V2.75A.75.75 0 015.75 2zm-1 5.5c-.69 0-1.25.56-1.25 1.25v6.5c0 .69.56 1.25 1.25 1.25h10.5c.69 0 1.25-.56 1.25-1.25v-6.5c0-.69-.56-1.25-1.25-1.25H4.75z"
                                clip-rule="evenodd" />
                            </svg>
                            <p class="bg-green-500 px-1.5 rounded-full">
                              <time datetime="2020-01-07">January 7, 2020</time>
                            </p>
                          </div>
                        </div>
                      </div>
                      <div class="mt-4 flex-shrink-0 sm:mt-0 sm:ml-5">
                        <div class="flex -space-x-1 overflow-hidden">
                          <div class="inline-block">
                            <span class="text-sm text-gray-700 underline">Assigned Lawyer:
                              <span class="font-bold text-red-600"> ATTY. KYNDELL A. HILLARIO</span>
                            </span>
                          </div>

                        </div>
                      </div>
                    </div>
                    <div class="ml-5 flex-shrink-0">
                      <!-- Heroicon name: mini/chevron-right -->
                      <svg class="h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                        fill="currentColor" aria-hidden="true">
                        <path fill-rule="evenodd"
                          d="M7.21 14.77a.75.75 0 01.02-1.06L11.168 10 7.23 6.29a.75.75 0 111.04-1.08l4.5 4.25a.75.75 0 010 1.08l-4.5 4.25a.75.75 0 01-1.06-.02z"
                          clip-rule="evenodd" />
                      </svg>
                    </div>
                  </div>
                </a>
              </li>
              <li>
                <a href="#" class="block hover:bg-gray-50">
                  <div class="flex items-center p-2 px-4">
                    <div class="min-w-0 flex-1 sm:flex sm:items-center sm:justify-between">
                      <div class="truncate">
                        <div class="flex text-sm space-x-1">
                          <p class="truncate font-semibold uppercase text-sky-700">JOHN DOE |</p>
                          <p class="truncate font-semibold uppercase text-sky-700"> Kalawag 2, Isulan, Sultan Kudarat
                          </p>
                        </div>
                        <div class="flex">
                          <div class="flex items-center text-sm text-white">
                            <!-- Heroicon name: mini/calendar -->
                            <svg class="mr-1.5 h-5 w-5 flex-shrink-0 text-gray-600" xmlns="http://www.w3.org/2000/svg"
                              viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                              <path fill-rule="evenodd"
                                d="M5.75 2a.75.75 0 01.75.75V4h7V2.75a.75.75 0 011.5 0V4h.25A2.75 2.75 0 0118 6.75v8.5A2.75 2.75 0 0115.25 18H4.75A2.75 2.75 0 012 15.25v-8.5A2.75 2.75 0 014.75 4H5V2.75A.75.75 0 015.75 2zm-1 5.5c-.69 0-1.25.56-1.25 1.25v6.5c0 .69.56 1.25 1.25 1.25h10.5c.69 0 1.25-.56 1.25-1.25v-6.5c0-.69-.56-1.25-1.25-1.25H4.75z"
                                clip-rule="evenodd" />
                            </svg>
                            <p class="bg-green-500 px-1.5 rounded-full">
                              <time datetime="2020-01-07">January 7, 2020</time>
                            </p>
                          </div>
                        </div>
                      </div>
                      <div class="mt-4 flex-shrink-0 sm:mt-0 sm:ml-5">
                        <div class="flex -space-x-1 overflow-hidden">
                          <div class="inline-block">
                            <span class="text-sm text-gray-700 underline">Assigned Lawyer:
                              <span class="font-bold text-red-600"> ATTY. KYNDELL A. HILLARIO</span>
                            </span>
                          </div>

                        </div>
                      </div>
                    </div>
                    <div class="ml-5 flex-shrink-0">
                      <!-- Heroicon name: mini/chevron-right -->
                      <svg class="h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                        fill="currentColor" aria-hidden="true">
                        <path fill-rule="evenodd"
                          d="M7.21 14.77a.75.75 0 01.02-1.06L11.168 10 7.23 6.29a.75.75 0 111.04-1.08l4.5 4.25a.75.75 0 010 1.08l-4.5 4.25a.75.75 0 01-1.06-.02z"
                          clip-rule="evenodd" />
                      </svg>
                    </div>
                  </div>
                </a>
              </li>
              <li>
                <a href="#" class="block hover:bg-gray-50">
                  <div class="flex items-center p-2 px-4">
                    <div class="min-w-0 flex-1 sm:flex sm:items-center sm:justify-between">
                      <div class="truncate">
                        <div class="flex text-sm space-x-1">
                          <p class="truncate font-semibold uppercase text-sky-700">JOHN DOE |</p>
                          <p class="truncate font-semibold uppercase text-sky-700"> Kalawag 2, Isulan, Sultan Kudarat
                          </p>
                        </div>
                        <div class="flex">
                          <div class="flex items-center text-sm text-white">
                            <!-- Heroicon name: mini/calendar -->
                            <svg class="mr-1.5 h-5 w-5 flex-shrink-0 text-gray-600" xmlns="http://www.w3.org/2000/svg"
                              viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                              <path fill-rule="evenodd"
                                d="M5.75 2a.75.75 0 01.75.75V4h7V2.75a.75.75 0 011.5 0V4h.25A2.75 2.75 0 0118 6.75v8.5A2.75 2.75 0 0115.25 18H4.75A2.75 2.75 0 012 15.25v-8.5A2.75 2.75 0 014.75 4H5V2.75A.75.75 0 015.75 2zm-1 5.5c-.69 0-1.25.56-1.25 1.25v6.5c0 .69.56 1.25 1.25 1.25h10.5c.69 0 1.25-.56 1.25-1.25v-6.5c0-.69-.56-1.25-1.25-1.25H4.75z"
                                clip-rule="evenodd" />
                            </svg>
                            <p class="bg-green-500 px-1.5 rounded-full">
                              <time datetime="2020-01-07">January 7, 2020</time>
                            </p>
                          </div>
                        </div>
                      </div>
                      <div class="mt-4 flex-shrink-0 sm:mt-0 sm:ml-5">
                        <div class="flex -space-x-1 overflow-hidden">
                          <div class="inline-block">
                            <span class="text-sm text-gray-700 underline">Assigned Lawyer:
                              <span class="font-bold text-red-600"> ATTY. KYNDELL A. HILLARIO</span>
                            </span>
                          </div>

                        </div>
                      </div>
                    </div>
                    <div class="ml-5 flex-shrink-0">
                      <!-- Heroicon name: mini/chevron-right -->
                      <svg class="h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                        fill="currentColor" aria-hidden="true">
                        <path fill-rule="evenodd"
                          d="M7.21 14.77a.75.75 0 01.02-1.06L11.168 10 7.23 6.29a.75.75 0 111.04-1.08l4.5 4.25a.75.75 0 010 1.08l-4.5 4.25a.75.75 0 01-1.06-.02z"
                          clip-rule="evenodd" />
                      </svg>
                    </div>
                  </div>
                </a>
              </li>
              <li>
                <a href="#" class="block hover:bg-gray-50">
                  <div class="flex items-center p-2 px-4">
                    <div class="min-w-0 flex-1 sm:flex sm:items-center sm:justify-between">
                      <div class="truncate">
                        <div class="flex text-sm space-x-1">
                          <p class="truncate font-semibold uppercase text-sky-700">JOHN DOE |</p>
                          <p class="truncate font-semibold uppercase text-sky-700"> Kalawag 2, Isulan, Sultan Kudarat
                          </p>
                        </div>
                        <div class="flex">
                          <div class="flex items-center text-sm text-white">
                            <!-- Heroicon name: mini/calendar -->
                            <svg class="mr-1.5 h-5 w-5 flex-shrink-0 text-gray-600" xmlns="http://www.w3.org/2000/svg"
                              viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                              <path fill-rule="evenodd"
                                d="M5.75 2a.75.75 0 01.75.75V4h7V2.75a.75.75 0 011.5 0V4h.25A2.75 2.75 0 0118 6.75v8.5A2.75 2.75 0 0115.25 18H4.75A2.75 2.75 0 012 15.25v-8.5A2.75 2.75 0 014.75 4H5V2.75A.75.75 0 015.75 2zm-1 5.5c-.69 0-1.25.56-1.25 1.25v6.5c0 .69.56 1.25 1.25 1.25h10.5c.69 0 1.25-.56 1.25-1.25v-6.5c0-.69-.56-1.25-1.25-1.25H4.75z"
                                clip-rule="evenodd" />
                            </svg>
                            <p class="bg-green-500 px-1.5 rounded-full">
                              <time datetime="2020-01-07">January 7, 2020</time>
                            </p>
                          </div>
                        </div>
                      </div>
                      <div class="mt-4 flex-shrink-0 sm:mt-0 sm:ml-5">
                        <div class="flex -space-x-1 overflow-hidden">
                          <div class="inline-block">
                            <span class="text-sm text-gray-700 underline">Assigned Lawyer:
                              <span class="font-bold text-red-600"> ATTY. KYNDELL A. HILLARIO</span>
                            </span>
                          </div>

                        </div>
                      </div>
                    </div>
                    <div class="ml-5 flex-shrink-0">
                      <!-- Heroicon name: mini/chevron-right -->
                      <svg class="h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                        fill="currentColor" aria-hidden="true">
                        <path fill-rule="evenodd"
                          d="M7.21 14.77a.75.75 0 01.02-1.06L11.168 10 7.23 6.29a.75.75 0 111.04-1.08l4.5 4.25a.75.75 0 010 1.08l-4.5 4.25a.75.75 0 01-1.06-.02z"
                          clip-rule="evenodd" />
                      </svg>
                    </div>
                  </div>
                </a>
              </li>
              <li>
                <a href="#" class="block hover:bg-gray-50">
                  <div class="flex items-center p-2 px-4">
                    <div class="min-w-0 flex-1 sm:flex sm:items-center sm:justify-between">
                      <div class="truncate">
                        <div class="flex text-sm space-x-1">
                          <p class="truncate font-semibold uppercase text-sky-700">JOHN DOE |</p>
                          <p class="truncate font-semibold uppercase text-sky-700"> Kalawag 2, Isulan, Sultan Kudarat
                          </p>
                        </div>
                        <div class="flex">
                          <div class="flex items-center text-sm text-white">
                            <!-- Heroicon name: mini/calendar -->
                            <svg class="mr-1.5 h-5 w-5 flex-shrink-0 text-gray-600" xmlns="http://www.w3.org/2000/svg"
                              viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                              <path fill-rule="evenodd"
                                d="M5.75 2a.75.75 0 01.75.75V4h7V2.75a.75.75 0 011.5 0V4h.25A2.75 2.75 0 0118 6.75v8.5A2.75 2.75 0 0115.25 18H4.75A2.75 2.75 0 012 15.25v-8.5A2.75 2.75 0 014.75 4H5V2.75A.75.75 0 015.75 2zm-1 5.5c-.69 0-1.25.56-1.25 1.25v6.5c0 .69.56 1.25 1.25 1.25h10.5c.69 0 1.25-.56 1.25-1.25v-6.5c0-.69-.56-1.25-1.25-1.25H4.75z"
                                clip-rule="evenodd" />
                            </svg>
                            <p class="bg-green-500 px-1.5 rounded-full">
                              <time datetime="2020-01-07">January 7, 2020</time>
                            </p>
                          </div>
                        </div>
                      </div>
                      <div class="mt-4 flex-shrink-0 sm:mt-0 sm:ml-5">
                        <div class="flex -space-x-1 overflow-hidden">
                          <div class="inline-block">
                            <span class="text-sm text-gray-700 underline">Assigned Lawyer:
                              <span class="font-bold text-red-600"> ATTY. KYNDELL A. HILLARIO</span>
                            </span>
                          </div>

                        </div>
                      </div>
                    </div>
                    <div class="ml-5 flex-shrink-0">
                      <!-- Heroicon name: mini/chevron-right -->
                      <svg class="h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                        fill="currentColor" aria-hidden="true">
                        <path fill-rule="evenodd"
                          d="M7.21 14.77a.75.75 0 01.02-1.06L11.168 10 7.23 6.29a.75.75 0 111.04-1.08l4.5 4.25a.75.75 0 010 1.08l-4.5 4.25a.75.75 0 01-1.06-.02z"
                          clip-rule="evenodd" />
                      </svg>
                    </div>
                  </div>
                </a>
              </li>
              <li>
                <a href="#" class="block hover:bg-gray-50">
                  <div class="flex items-center p-2 px-4">
                    <div class="min-w-0 flex-1 sm:flex sm:items-center sm:justify-between">
                      <div class="truncate">
                        <div class="flex text-sm space-x-1">
                          <p class="truncate font-semibold uppercase text-sky-700">JOHN DOE |</p>
                          <p class="truncate font-semibold uppercase text-sky-700"> Kalawag 2, Isulan, Sultan Kudarat
                          </p>
                        </div>
                        <div class="flex">
                          <div class="flex items-center text-sm text-white">
                            <!-- Heroicon name: mini/calendar -->
                            <svg class="mr-1.5 h-5 w-5 flex-shrink-0 text-gray-600" xmlns="http://www.w3.org/2000/svg"
                              viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                              <path fill-rule="evenodd"
                                d="M5.75 2a.75.75 0 01.75.75V4h7V2.75a.75.75 0 011.5 0V4h.25A2.75 2.75 0 0118 6.75v8.5A2.75 2.75 0 0115.25 18H4.75A2.75 2.75 0 012 15.25v-8.5A2.75 2.75 0 014.75 4H5V2.75A.75.75 0 015.75 2zm-1 5.5c-.69 0-1.25.56-1.25 1.25v6.5c0 .69.56 1.25 1.25 1.25h10.5c.69 0 1.25-.56 1.25-1.25v-6.5c0-.69-.56-1.25-1.25-1.25H4.75z"
                                clip-rule="evenodd" />
                            </svg>
                            <p class="bg-green-500 px-1.5 rounded-full">
                              <time datetime="2020-01-07">January 7, 2020</time>
                            </p>
                          </div>
                        </div>
                      </div>
                      <div class="mt-4 flex-shrink-0 sm:mt-0 sm:ml-5">
                        <div class="flex -space-x-1 overflow-hidden">
                          <div class="inline-block">
                            <span class="text-sm text-gray-700 underline">Assigned Lawyer:
                              <span class="font-bold text-red-600"> ATTY. KYNDELL A. HILLARIO</span>
                            </span>
                          </div>

                        </div>
                      </div>
                    </div>
                    <div class="ml-5 flex-shrink-0">
                      <!-- Heroicon name: mini/chevron-right -->
                      <svg class="h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                        fill="currentColor" aria-hidden="true">
                        <path fill-rule="evenodd"
                          d="M7.21 14.77a.75.75 0 01.02-1.06L11.168 10 7.23 6.29a.75.75 0 111.04-1.08l4.5 4.25a.75.75 0 010 1.08l-4.5 4.25a.75.75 0 01-1.06-.02z"
                          clip-rule="evenodd" />
                      </svg>
                    </div>
                  </div>
                </a>
              </li>
              <li>
                <a href="#" class="block hover:bg-gray-50">
                  <div class="flex items-center p-2 px-4">
                    <div class="min-w-0 flex-1 sm:flex sm:items-center sm:justify-between">
                      <div class="truncate">
                        <div class="flex text-sm space-x-1">
                          <p class="truncate font-semibold uppercase text-sky-700">JOHN DOE |</p>
                          <p class="truncate font-semibold uppercase text-sky-700"> Kalawag 2, Isulan, Sultan Kudarat
                          </p>
                        </div>
                        <div class="flex">
                          <div class="flex items-center text-sm text-white">
                            <!-- Heroicon name: mini/calendar -->
                            <svg class="mr-1.5 h-5 w-5 flex-shrink-0 text-gray-600" xmlns="http://www.w3.org/2000/svg"
                              viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                              <path fill-rule="evenodd"
                                d="M5.75 2a.75.75 0 01.75.75V4h7V2.75a.75.75 0 011.5 0V4h.25A2.75 2.75 0 0118 6.75v8.5A2.75 2.75 0 0115.25 18H4.75A2.75 2.75 0 012 15.25v-8.5A2.75 2.75 0 014.75 4H5V2.75A.75.75 0 015.75 2zm-1 5.5c-.69 0-1.25.56-1.25 1.25v6.5c0 .69.56 1.25 1.25 1.25h10.5c.69 0 1.25-.56 1.25-1.25v-6.5c0-.69-.56-1.25-1.25-1.25H4.75z"
                                clip-rule="evenodd" />
                            </svg>
                            <p class="bg-green-500 px-1.5 rounded-full">
                              <time datetime="2020-01-07">January 7, 2020</time>
                            </p>
                          </div>
                        </div>
                      </div>
                      <div class="mt-4 flex-shrink-0 sm:mt-0 sm:ml-5">
                        <div class="flex -space-x-1 overflow-hidden">
                          <div class="inline-block">
                            <span class="text-sm text-gray-700 underline">Assigned Lawyer:
                              <span class="font-bold text-red-600"> ATTY. KYNDELL A. HILLARIO</span>
                            </span>
                          </div>

                        </div>
                      </div>
                    </div>
                    <div class="ml-5 flex-shrink-0">
                      <!-- Heroicon name: mini/chevron-right -->
                      <svg class="h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                        fill="currentColor" aria-hidden="true">
                        <path fill-rule="evenodd"
                          d="M7.21 14.77a.75.75 0 01.02-1.06L11.168 10 7.23 6.29a.75.75 0 111.04-1.08l4.5 4.25a.75.75 0 010 1.08l-4.5 4.25a.75.75 0 01-1.06-.02z"
                          clip-rule="evenodd" />
                      </svg>
                    </div>
                  </div>
                </a>
              </li>
              <li>
                <a href="#" class="block hover:bg-gray-50">
                  <div class="flex items-center p-2 px-4">
                    <div class="min-w-0 flex-1 sm:flex sm:items-center sm:justify-between">
                      <div class="truncate">
                        <div class="flex text-sm space-x-1">
                          <p class="truncate font-semibold uppercase text-sky-700">JOHN DOE |</p>
                          <p class="truncate font-semibold uppercase text-sky-700"> Kalawag 2, Isulan, Sultan Kudarat
                          </p>
                        </div>
                        <div class="flex">
                          <div class="flex items-center text-sm text-white">
                            <!-- Heroicon name: mini/calendar -->
                            <svg class="mr-1.5 h-5 w-5 flex-shrink-0 text-gray-600" xmlns="http://www.w3.org/2000/svg"
                              viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                              <path fill-rule="evenodd"
                                d="M5.75 2a.75.75 0 01.75.75V4h7V2.75a.75.75 0 011.5 0V4h.25A2.75 2.75 0 0118 6.75v8.5A2.75 2.75 0 0115.25 18H4.75A2.75 2.75 0 012 15.25v-8.5A2.75 2.75 0 014.75 4H5V2.75A.75.75 0 015.75 2zm-1 5.5c-.69 0-1.25.56-1.25 1.25v6.5c0 .69.56 1.25 1.25 1.25h10.5c.69 0 1.25-.56 1.25-1.25v-6.5c0-.69-.56-1.25-1.25-1.25H4.75z"
                                clip-rule="evenodd" />
                            </svg>
                            <p class="bg-green-500 px-1.5 rounded-full">
                              <time datetime="2020-01-07">January 7, 2020</time>
                            </p>
                          </div>
                        </div>
                      </div>
                      <div class="mt-4 flex-shrink-0 sm:mt-0 sm:ml-5">
                        <div class="flex -space-x-1 overflow-hidden">
                          <div class="inline-block">
                            <span class="text-sm text-gray-700 underline">Assigned Lawyer:
                              <span class="font-bold text-red-600"> ATTY. KYNDELL A. HILLARIO</span>
                            </span>
                          </div>

                        </div>
                      </div>
                    </div>
                    <div class="ml-5 flex-shrink-0">
                      <!-- Heroicon name: mini/chevron-right -->
                      <svg class="h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                        fill="currentColor" aria-hidden="true">
                        <path fill-rule="evenodd"
                          d="M7.21 14.77a.75.75 0 01.02-1.06L11.168 10 7.23 6.29a.75.75 0 111.04-1.08l4.5 4.25a.75.75 0 010 1.08l-4.5 4.25a.75.75 0 01-1.06-.02z"
                          clip-rule="evenodd" />
                      </svg>
                    </div>
                  </div>
                </a>
              </li>
              <li>
                <a href="#" class="block hover:bg-gray-50">
                  <div class="flex items-center p-2 px-4">
                    <div class="min-w-0 flex-1 sm:flex sm:items-center sm:justify-between">
                      <div class="truncate">
                        <div class="flex text-sm space-x-1">
                          <p class="truncate font-semibold uppercase text-sky-700">JOHN DOE |</p>
                          <p class="truncate font-semibold uppercase text-sky-700"> Kalawag 2, Isulan, Sultan Kudarat
                          </p>
                        </div>
                        <div class="flex">
                          <div class="flex items-center text-sm text-white">
                            <!-- Heroicon name: mini/calendar -->
                            <svg class="mr-1.5 h-5 w-5 flex-shrink-0 text-gray-600" xmlns="http://www.w3.org/2000/svg"
                              viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                              <path fill-rule="evenodd"
                                d="M5.75 2a.75.75 0 01.75.75V4h7V2.75a.75.75 0 011.5 0V4h.25A2.75 2.75 0 0118 6.75v8.5A2.75 2.75 0 0115.25 18H4.75A2.75 2.75 0 012 15.25v-8.5A2.75 2.75 0 014.75 4H5V2.75A.75.75 0 015.75 2zm-1 5.5c-.69 0-1.25.56-1.25 1.25v6.5c0 .69.56 1.25 1.25 1.25h10.5c.69 0 1.25-.56 1.25-1.25v-6.5c0-.69-.56-1.25-1.25-1.25H4.75z"
                                clip-rule="evenodd" />
                            </svg>
                            <p class="bg-green-500 px-1.5 rounded-full">
                              <time datetime="2020-01-07">January 7, 2020</time>
                            </p>
                          </div>
                        </div>
                      </div>
                      <div class="mt-4 flex-shrink-0 sm:mt-0 sm:ml-5">
                        <div class="flex -space-x-1 overflow-hidden">
                          <div class="inline-block">
                            <span class="text-sm text-gray-700 underline">Assigned Lawyer:
                              <span class="font-bold text-red-600"> ATTY. KYNDELL A. HILLARIO</span>
                            </span>
                          </div>

                        </div>
                      </div>
                    </div>
                    <div class="ml-5 flex-shrink-0">
                      <!-- Heroicon name: mini/chevron-right -->
                      <svg class="h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                        fill="currentColor" aria-hidden="true">
                        <path fill-rule="evenodd"
                          d="M7.21 14.77a.75.75 0 01.02-1.06L11.168 10 7.23 6.29a.75.75 0 111.04-1.08l4.5 4.25a.75.75 0 010 1.08l-4.5 4.25a.75.75 0 01-1.06-.02z"
                          clip-rule="evenodd" />
                      </svg>
                    </div>
                  </div>
                </a>
              </li>
              <li>
                <a href="#" class="block hover:bg-gray-50">
                  <div class="flex items-center p-2 px-4">
                    <div class="min-w-0 flex-1 sm:flex sm:items-center sm:justify-between">
                      <div class="truncate">
                        <div class="flex text-sm space-x-1">
                          <p class="truncate font-semibold uppercase text-sky-700">JOHN DOE |</p>
                          <p class="truncate font-semibold uppercase text-sky-700"> Kalawag 2, Isulan, Sultan Kudarat
                          </p>
                        </div>
                        <div class="flex">
                          <div class="flex items-center text-sm text-white">
                            <!-- Heroicon name: mini/calendar -->
                            <svg class="mr-1.5 h-5 w-5 flex-shrink-0 text-gray-600" xmlns="http://www.w3.org/2000/svg"
                              viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                              <path fill-rule="evenodd"
                                d="M5.75 2a.75.75 0 01.75.75V4h7V2.75a.75.75 0 011.5 0V4h.25A2.75 2.75 0 0118 6.75v8.5A2.75 2.75 0 0115.25 18H4.75A2.75 2.75 0 012 15.25v-8.5A2.75 2.75 0 014.75 4H5V2.75A.75.75 0 015.75 2zm-1 5.5c-.69 0-1.25.56-1.25 1.25v6.5c0 .69.56 1.25 1.25 1.25h10.5c.69 0 1.25-.56 1.25-1.25v-6.5c0-.69-.56-1.25-1.25-1.25H4.75z"
                                clip-rule="evenodd" />
                            </svg>
                            <p class="bg-green-500 px-1.5 rounded-full">
                              <time datetime="2020-01-07">January 7, 2020</time>
                            </p>
                          </div>
                        </div>
                      </div>
                      <div class="mt-4 flex-shrink-0 sm:mt-0 sm:ml-5">
                        <div class="flex -space-x-1 overflow-hidden">
                          <div class="inline-block">
                            <span class="text-sm text-gray-700 underline">Assigned Lawyer:
                              <span class="font-bold text-red-600"> ATTY. KYNDELL A. HILLARIO</span>
                            </span>
                          </div>

                        </div>
                      </div>
                    </div>
                    <div class="ml-5 flex-shrink-0">
                      <!-- Heroicon name: mini/chevron-right -->
                      <svg class="h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                        fill="currentColor" aria-hidden="true">
                        <path fill-rule="evenodd"
                          d="M7.21 14.77a.75.75 0 01.02-1.06L11.168 10 7.23 6.29a.75.75 0 111.04-1.08l4.5 4.25a.75.75 0 010 1.08l-4.5 4.25a.75.75 0 01-1.06-.02z"
                          clip-rule="evenodd" />
                      </svg>
                    </div>
                  </div>
                </a>
              </li>
            </ul>
          </div>

        </div>

        <div class="bg-gray-50 w-80">
          <div class="h-[30rem] border-2 shadow-lg rounded-lg p-5">
            <header>
              <div class="flex justify-between">
                <h2 class="text-lg font-medium uppercase text-gray-700">REQUESTS</h2>
                <x-button.circle icon="dots-vertical" positive xs />
              </div>
            </header>
            <div class="mt-3 overflow-y-auto h-[25rem]">
              <div class="overflow-hidden bg-white shadow ">
                <ul role="list" class="divide-y divide-gray-200">
                  <li>
                    <a href="#" class="block hover:bg-gray-50">
                      <div class="flex items-center px-2 py-2">
                        <div class="flex min-w-0 flex-1 items-center">
                          <div class="flex-shrink-0">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="fill-green-700"
                              width="24" height="24">
                              <path fill="none" d="M0 0h24v24H0z" />
                              <path
                                d="M17 3h4a1 1 0 0 1 1 1v16a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V4a1 1 0 0 1 1-1h4V1h2v2h6V1h2v2zm3 8H4v8h16v-8zm-5-6H9v2H7V5H4v4h16V5h-3v2h-2V5zm-9 8h2v2H6v-2zm5 0h2v2h-2v-2zm5 0h2v2h-2v-2z" />
                            </svg>
                          </div>
                          <div class="min-w-0 flex-1 px-2 md:grid md:grid-cols-1 md:gap-4">
                            <div>
                              <p class=" text-sm font-medium uppercase text-sky-700">JOHN DOE</p>
                              <p class="truncate text-xs">
                                Kalawag 2, Isulan, Sultan Kudarat
                              </p>
                            </div>
                          </div>
                        </div>
                        <div>
                          <!-- Heroicon name: mini/chevron-right -->
                          <svg class="h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                            fill="currentColor" aria-hidden="true">
                            <path fill-rule="evenodd"
                              d="M7.21 14.77a.75.75 0 01.02-1.06L11.168 10 7.23 6.29a.75.75 0 111.04-1.08l4.5 4.25a.75.75 0 010 1.08l-4.5 4.25a.75.75 0 01-1.06-.02z"
                              clip-rule="evenodd" />
                          </svg>
                        </div>
                      </div>
                    </a>
                  </li>
                  <li>
                    <a href="#" class="block hover:bg-gray-50">
                      <div class="flex items-center px-2 py-2">
                        <div class="flex min-w-0 flex-1 items-center">
                          <div class="flex-shrink-0">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="fill-green-700"
                              width="24" height="24">
                              <path fill="none" d="M0 0h24v24H0z" />
                              <path
                                d="M17 3h4a1 1 0 0 1 1 1v16a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V4a1 1 0 0 1 1-1h4V1h2v2h6V1h2v2zm3 8H4v8h16v-8zm-5-6H9v2H7V5H4v4h16V5h-3v2h-2V5zm-9 8h2v2H6v-2zm5 0h2v2h-2v-2zm5 0h2v2h-2v-2z" />
                            </svg>
                          </div>
                          <div class="min-w-0 flex-1 px-2 md:grid md:grid-cols-1 md:gap-4">
                            <div>
                              <p class=" text-sm font-medium uppercase text-sky-700">JOHN DOE</p>
                              <p class="truncate text-xs">
                                Kalawag 2, Isulan, Sultan Kudarat
                              </p>
                            </div>
                          </div>
                        </div>
                        <div>
                          <!-- Heroicon name: mini/chevron-right -->
                          <svg class="h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                            fill="currentColor" aria-hidden="true">
                            <path fill-rule="evenodd"
                              d="M7.21 14.77a.75.75 0 01.02-1.06L11.168 10 7.23 6.29a.75.75 0 111.04-1.08l4.5 4.25a.75.75 0 010 1.08l-4.5 4.25a.75.75 0 01-1.06-.02z"
                              clip-rule="evenodd" />
                          </svg>
                        </div>
                      </div>
                    </a>
                  </li>
                  <li>
                    <a href="#" class="block hover:bg-gray-50">
                      <div class="flex items-center px-2 py-2">
                        <div class="flex min-w-0 flex-1 items-center">
                          <div class="flex-shrink-0">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="fill-green-700"
                              width="24" height="24">
                              <path fill="none" d="M0 0h24v24H0z" />
                              <path
                                d="M17 3h4a1 1 0 0 1 1 1v16a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V4a1 1 0 0 1 1-1h4V1h2v2h6V1h2v2zm3 8H4v8h16v-8zm-5-6H9v2H7V5H4v4h16V5h-3v2h-2V5zm-9 8h2v2H6v-2zm5 0h2v2h-2v-2zm5 0h2v2h-2v-2z" />
                            </svg>
                          </div>
                          <div class="min-w-0 flex-1 px-2 md:grid md:grid-cols-1 md:gap-4">
                            <div>
                              <p class=" text-sm font-medium uppercase text-sky-700">JOHN DOE</p>
                              <p class="truncate text-xs">
                                Kalawag 2, Isulan, Sultan Kudarat
                              </p>
                            </div>
                          </div>
                        </div>
                        <div>
                          <!-- Heroicon name: mini/chevron-right -->
                          <svg class="h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                            fill="currentColor" aria-hidden="true">
                            <path fill-rule="evenodd"
                              d="M7.21 14.77a.75.75 0 01.02-1.06L11.168 10 7.23 6.29a.75.75 0 111.04-1.08l4.5 4.25a.75.75 0 010 1.08l-4.5 4.25a.75.75 0 01-1.06-.02z"
                              clip-rule="evenodd" />
                          </svg>
                        </div>
                      </div>
                    </a>
                  </li>
                  <li>
                    <a href="#" class="block hover:bg-gray-50">
                      <div class="flex items-center px-2 py-2">
                        <div class="flex min-w-0 flex-1 items-center">
                          <div class="flex-shrink-0">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="fill-green-700"
                              width="24" height="24">
                              <path fill="none" d="M0 0h24v24H0z" />
                              <path
                                d="M17 3h4a1 1 0 0 1 1 1v16a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V4a1 1 0 0 1 1-1h4V1h2v2h6V1h2v2zm3 8H4v8h16v-8zm-5-6H9v2H7V5H4v4h16V5h-3v2h-2V5zm-9 8h2v2H6v-2zm5 0h2v2h-2v-2zm5 0h2v2h-2v-2z" />
                            </svg>
                          </div>
                          <div class="min-w-0 flex-1 px-2 md:grid md:grid-cols-1 md:gap-4">
                            <div>
                              <p class=" text-sm font-medium uppercase text-sky-700">JOHN DOE</p>
                              <p class="truncate text-xs">
                                Kalawag 2, Isulan, Sultan Kudarat
                              </p>
                            </div>
                          </div>
                        </div>
                        <div>
                          <!-- Heroicon name: mini/chevron-right -->
                          <svg class="h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                            fill="currentColor" aria-hidden="true">
                            <path fill-rule="evenodd"
                              d="M7.21 14.77a.75.75 0 01.02-1.06L11.168 10 7.23 6.29a.75.75 0 111.04-1.08l4.5 4.25a.75.75 0 010 1.08l-4.5 4.25a.75.75 0 01-1.06-.02z"
                              clip-rule="evenodd" />
                          </svg>
                        </div>
                      </div>
                    </a>
                  </li>
                  <li>
                    <a href="#" class="block hover:bg-gray-50">
                      <div class="flex items-center px-2 py-2">
                        <div class="flex min-w-0 flex-1 items-center">
                          <div class="flex-shrink-0">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="fill-green-700"
                              width="24" height="24">
                              <path fill="none" d="M0 0h24v24H0z" />
                              <path
                                d="M17 3h4a1 1 0 0 1 1 1v16a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V4a1 1 0 0 1 1-1h4V1h2v2h6V1h2v2zm3 8H4v8h16v-8zm-5-6H9v2H7V5H4v4h16V5h-3v2h-2V5zm-9 8h2v2H6v-2zm5 0h2v2h-2v-2zm5 0h2v2h-2v-2z" />
                            </svg>
                          </div>
                          <div class="min-w-0 flex-1 px-2 md:grid md:grid-cols-1 md:gap-4">
                            <div>
                              <p class=" text-sm font-medium uppercase text-sky-700">JOHN DOE</p>
                              <p class="truncate text-xs">
                                Kalawag 2, Isulan, Sultan Kudarat
                              </p>
                            </div>
                          </div>
                        </div>
                        <div>
                          <!-- Heroicon name: mini/chevron-right -->
                          <svg class="h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                            fill="currentColor" aria-hidden="true">
                            <path fill-rule="evenodd"
                              d="M7.21 14.77a.75.75 0 01.02-1.06L11.168 10 7.23 6.29a.75.75 0 111.04-1.08l4.5 4.25a.75.75 0 010 1.08l-4.5 4.25a.75.75 0 01-1.06-.02z"
                              clip-rule="evenodd" />
                          </svg>
                        </div>
                      </div>
                    </a>
                  </li>
                  <li>
                    <a href="#" class="block hover:bg-gray-50">
                      <div class="flex items-center px-2 py-2">
                        <div class="flex min-w-0 flex-1 items-center">
                          <div class="flex-shrink-0">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="fill-green-700"
                              width="24" height="24">
                              <path fill="none" d="M0 0h24v24H0z" />
                              <path
                                d="M17 3h4a1 1 0 0 1 1 1v16a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V4a1 1 0 0 1 1-1h4V1h2v2h6V1h2v2zm3 8H4v8h16v-8zm-5-6H9v2H7V5H4v4h16V5h-3v2h-2V5zm-9 8h2v2H6v-2zm5 0h2v2h-2v-2zm5 0h2v2h-2v-2z" />
                            </svg>
                          </div>
                          <div class="min-w-0 flex-1 px-2 md:grid md:grid-cols-1 md:gap-4">
                            <div>
                              <p class=" text-sm font-medium uppercase text-sky-700">JOHN DOE</p>
                              <p class="truncate text-xs">
                                Kalawag 2, Isulan, Sultan Kudarat
                              </p>
                            </div>
                          </div>
                        </div>
                        <div>
                          <!-- Heroicon name: mini/chevron-right -->
                          <svg class="h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                            fill="currentColor" aria-hidden="true">
                            <path fill-rule="evenodd"
                              d="M7.21 14.77a.75.75 0 01.02-1.06L11.168 10 7.23 6.29a.75.75 0 111.04-1.08l4.5 4.25a.75.75 0 010 1.08l-4.5 4.25a.75.75 0 01-1.06-.02z"
                              clip-rule="evenodd" />
                          </svg>
                        </div>
                      </div>
                    </a>
                  </li>
                  <li>
                    <a href="#" class="block hover:bg-gray-50">
                      <div class="flex items-center px-2 py-2">
                        <div class="flex min-w-0 flex-1 items-center">
                          <div class="flex-shrink-0">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="fill-green-700"
                              width="24" height="24">
                              <path fill="none" d="M0 0h24v24H0z" />
                              <path
                                d="M17 3h4a1 1 0 0 1 1 1v16a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V4a1 1 0 0 1 1-1h4V1h2v2h6V1h2v2zm3 8H4v8h16v-8zm-5-6H9v2H7V5H4v4h16V5h-3v2h-2V5zm-9 8h2v2H6v-2zm5 0h2v2h-2v-2zm5 0h2v2h-2v-2z" />
                            </svg>
                          </div>
                          <div class="min-w-0 flex-1 px-2 md:grid md:grid-cols-1 md:gap-4">
                            <div>
                              <p class=" text-sm font-medium uppercase text-sky-700">JOHN DOE</p>
                              <p class="truncate text-xs">
                                Kalawag 2, Isulan, Sultan Kudarat
                              </p>
                            </div>
                          </div>
                        </div>
                        <div>
                          <!-- Heroicon name: mini/chevron-right -->
                          <svg class="h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                            fill="currentColor" aria-hidden="true">
                            <path fill-rule="evenodd"
                              d="M7.21 14.77a.75.75 0 01.02-1.06L11.168 10 7.23 6.29a.75.75 0 111.04-1.08l4.5 4.25a.75.75 0 010 1.08l-4.5 4.25a.75.75 0 01-1.06-.02z"
                              clip-rule="evenodd" />
                          </svg>
                        </div>
                      </div>
                    </a>
                  </li>
                  <li>
                    <a href="#" class="block hover:bg-gray-50">
                      <div class="flex items-center px-2 py-2">
                        <div class="flex min-w-0 flex-1 items-center">
                          <div class="flex-shrink-0">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="fill-green-700"
                              width="24" height="24">
                              <path fill="none" d="M0 0h24v24H0z" />
                              <path
                                d="M17 3h4a1 1 0 0 1 1 1v16a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V4a1 1 0 0 1 1-1h4V1h2v2h6V1h2v2zm3 8H4v8h16v-8zm-5-6H9v2H7V5H4v4h16V5h-3v2h-2V5zm-9 8h2v2H6v-2zm5 0h2v2h-2v-2zm5 0h2v2h-2v-2z" />
                            </svg>
                          </div>
                          <div class="min-w-0 flex-1 px-2 md:grid md:grid-cols-1 md:gap-4">
                            <div>
                              <p class=" text-sm font-medium uppercase text-sky-700">JOHN DOE</p>
                              <p class="truncate text-xs">
                                Kalawag 2, Isulan, Sultan Kudarat
                              </p>
                            </div>
                          </div>
                        </div>
                        <div>
                          <!-- Heroicon name: mini/chevron-right -->
                          <svg class="h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                            fill="currentColor" aria-hidden="true">
                            <path fill-rule="evenodd"
                              d="M7.21 14.77a.75.75 0 01.02-1.06L11.168 10 7.23 6.29a.75.75 0 111.04-1.08l4.5 4.25a.75.75 0 010 1.08l-4.5 4.25a.75.75 0 01-1.06-.02z"
                              clip-rule="evenodd" />
                          </svg>
                        </div>
                      </div>
                    </a>
                  </li>
                  <li>
                    <a href="#" class="block hover:bg-gray-50">
                      <div class="flex items-center px-2 py-2">
                        <div class="flex min-w-0 flex-1 items-center">
                          <div class="flex-shrink-0">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="fill-green-700"
                              width="24" height="24">
                              <path fill="none" d="M0 0h24v24H0z" />
                              <path
                                d="M17 3h4a1 1 0 0 1 1 1v16a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V4a1 1 0 0 1 1-1h4V1h2v2h6V1h2v2zm3 8H4v8h16v-8zm-5-6H9v2H7V5H4v4h16V5h-3v2h-2V5zm-9 8h2v2H6v-2zm5 0h2v2h-2v-2zm5 0h2v2h-2v-2z" />
                            </svg>
                          </div>
                          <div class="min-w-0 flex-1 px-2 md:grid md:grid-cols-1 md:gap-4">
                            <div>
                              <p class=" text-sm font-medium uppercase text-sky-700">JOHN DOE</p>
                              <p class="truncate text-xs">
                                Kalawag 2, Isulan, Sultan Kudarat
                              </p>
                            </div>
                          </div>
                        </div>
                        <div>
                          <!-- Heroicon name: mini/chevron-right -->
                          <svg class="h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                            fill="currentColor" aria-hidden="true">
                            <path fill-rule="evenodd"
                              d="M7.21 14.77a.75.75 0 01.02-1.06L11.168 10 7.23 6.29a.75.75 0 111.04-1.08l4.5 4.25a.75.75 0 010 1.08l-4.5 4.25a.75.75 0 01-1.06-.02z"
                              clip-rule="evenodd" />
                          </svg>
                        </div>
                      </div>
                    </a>
                  </li>
                  <li>
                    <a href="#" class="block hover:bg-gray-50">
                      <div class="flex items-center px-2 py-2">
                        <div class="flex min-w-0 flex-1 items-center">
                          <div class="flex-shrink-0">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="fill-green-700"
                              width="24" height="24">
                              <path fill="none" d="M0 0h24v24H0z" />
                              <path
                                d="M17 3h4a1 1 0 0 1 1 1v16a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V4a1 1 0 0 1 1-1h4V1h2v2h6V1h2v2zm3 8H4v8h16v-8zm-5-6H9v2H7V5H4v4h16V5h-3v2h-2V5zm-9 8h2v2H6v-2zm5 0h2v2h-2v-2zm5 0h2v2h-2v-2z" />
                            </svg>
                          </div>
                          <div class="min-w-0 flex-1 px-2 md:grid md:grid-cols-1 md:gap-4">
                            <div>
                              <p class=" text-sm font-medium uppercase text-sky-700">JOHN DOE</p>
                              <p class="truncate text-xs">
                                Kalawag 2, Isulan, Sultan Kudarat
                              </p>
                            </div>
                          </div>
                        </div>
                        <div>
                          <!-- Heroicon name: mini/chevron-right -->
                          <svg class="h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                            fill="currentColor" aria-hidden="true">
                            <path fill-rule="evenodd"
                              d="M7.21 14.77a.75.75 0 01.02-1.06L11.168 10 7.23 6.29a.75.75 0 111.04-1.08l4.5 4.25a.75.75 0 010 1.08l-4.5 4.25a.75.75 0 01-1.06-.02z"
                              clip-rule="evenodd" />
                          </svg>
                        </div>
                      </div>
                    </a>
                  </li>
                  <li>
                    <a href="#" class="block hover:bg-gray-50">
                      <div class="flex items-center px-2 py-2">
                        <div class="flex min-w-0 flex-1 items-center">
                          <div class="flex-shrink-0">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="fill-green-700"
                              width="24" height="24">
                              <path fill="none" d="M0 0h24v24H0z" />
                              <path
                                d="M17 3h4a1 1 0 0 1 1 1v16a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V4a1 1 0 0 1 1-1h4V1h2v2h6V1h2v2zm3 8H4v8h16v-8zm-5-6H9v2H7V5H4v4h16V5h-3v2h-2V5zm-9 8h2v2H6v-2zm5 0h2v2h-2v-2zm5 0h2v2h-2v-2z" />
                            </svg>
                          </div>
                          <div class="min-w-0 flex-1 px-2 md:grid md:grid-cols-1 md:gap-4">
                            <div>
                              <p class=" text-sm font-medium uppercase text-sky-700">JOHN DOE</p>
                              <p class="truncate text-xs">
                                Kalawag 2, Isulan, Sultan Kudarat
                              </p>
                            </div>
                          </div>
                        </div>
                        <div>
                          <!-- Heroicon name: mini/chevron-right -->
                          <svg class="h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                            fill="currentColor" aria-hidden="true">
                            <path fill-rule="evenodd"
                              d="M7.21 14.77a.75.75 0 01.02-1.06L11.168 10 7.23 6.29a.75.75 0 111.04-1.08l4.5 4.25a.75.75 0 010 1.08l-4.5 4.25a.75.75 0 01-1.06-.02z"
                              clip-rule="evenodd" />
                          </svg>
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
    </div>
  </div>
</x-admin-layout>
