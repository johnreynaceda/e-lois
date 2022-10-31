<x-admin-layout>
  <div class="py-6">
    <x-breadcrumbs title="Users" />
    <div class="mx-auto max-w-7xl mt-5 px-4 sm:px-6 md:px-8">
      <div class="flex justify-between items-end">
        <div class="flex bg-white  items-center border px-2 rounded-lg shadow-sm">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="fill-gray-500" width="24" height="24">
            <path fill="none" d="M0 0h24v24H0z" />
            <path
              d="M11 2c4.968 0 9 4.032 9 9s-4.032 9-9 9-9-4.032-9-9 4.032-9 9-9zm0 16c3.867 0 7-3.133 7-7 0-3.868-3.133-7-7-7-3.868 0-7 3.132-7 7 0 3.867 3.132 7 7 7zm8.485.071l2.829 2.828-1.415 1.415-2.828-2.829 1.414-1.414z" />
          </svg>
          <input placeholder="Search users..." type="text"
            class="focus:border-0 border-0 focus:outline-none text-sm focus:ring-0">
        </div>
        <div class="flex items-center justify-center space-x-2">
          <x-button label="ADD NEW" class="font-medium" dark sm icon="plus" />
        </div>
      </div>
      <div class="mt-8 flex flex-col">
        <div class="-my-2 -mx-4 sm:-mx-6 lg:-mx-8">
          <div class="inline-block min-w-full py-2 align-middle">
            <div class="shadow-sm ring-1 ring-black ring-opacity-5">
              <table class="min-w-full border-separate" style="border-spacing: 0">
                <thead class="bg-gray-50">
                  <tr>
                    <th scope="col"
                      class="sticky top-0 z-10 border-b border-gray-300 bg-gray-50 uppercase bg-opacity-75 py-3 pl-4 pr-3 text-left text-sm font-semibold text-gray-700 backdrop-blur backdrop-filter sm:pl-6 lg:pl-8">
                      FULLNAME</th>
                    <th scope="col"
                      class="sticky top-0 z-10 hidden border-b border-gray-300 bg-gray-50 uppercase bg-opacity-75 px-3 py-3 text-left text-sm font-semibold text-gray-700 backdrop-blur backdrop-filter sm:table-cell">
                      EMAIL</th>
                    <th scope="col"
                      class="sticky top-0 z-10 hidden border-b border-gray-300 bg-gray-50 uppercase bg-opacity-75 px-3 py-3 text-left text-sm font-semibold text-gray-700 backdrop-blur backdrop-filter lg:table-cell">
                      ADDRESS</th>
                    <th scope="col"
                      class="sticky top-0 z-10 hidden border-b border-gray-300 bg-gray-50 uppercase bg-opacity-75 px-3 py-3 text-left text-sm font-semibold text-gray-700 backdrop-blur backdrop-filter lg:table-cell">
                      CONTACT</th>
                    <th scope="col"
                      class="sticky top-0 z-10 border-b border-gray-300 bg-gray-50 uppercase bg-opacity-75 px-3 py-3 text-left text-sm font-semibold text-gray-700 backdrop-blur backdrop-filter">
                      Role</th>
                    <th scope="col"
                      class="sticky top-0 z-10 border-b border-gray-300 bg-gray-50 uppercase bg-opacity-75 py-3 pr-4 pl-3 backdrop-blur backdrop-filter sm:pr-6 lg:pr-8">
                      <span class="sr-only">Edit</span>
                    </th>
                  </tr>
                </thead>
                <tbody class="bg-white">
                  <tr>
                    <td
                      class="whitespace-nowrap border-b border-gray-200 py-4 pl-4 pr-3 text-sm  text-gray-500 sm:pl-6 lg:pl-8">
                      John Doe</td>
                    <td
                      class="whitespace-nowrap border-b border-gray-200 px-3 py-4 text-sm text-gray-500 hidden sm:table-cell">
                      johndoe@gmail.com</td>
                    <td
                      class="whitespace-nowrap border-b border-gray-200 px-3 py-4 text-sm text-gray-500 hidden sm:table-cell">
                      Isulan, Sultan kudarat</td>
                    <td
                      class="whitespace-nowrap border-b border-gray-200 px-3 py-4 text-sm text-gray-500 hidden lg:table-cell">
                      09123456789</td>
                    <td class="whitespace-nowrap border-b border-gray-200 px-3 py-4 text-sm text-gray-500">
                      <span class="px-2 py-1 text-xs bg-green-600 rounded-full text-white">Administrator</span>
                    </td>
                    <td
                      class="relative whitespace-nowrap border-b border-gray-200 py-4 pr-4 pl-3 text-right text-sm font-medium sm:pr-6 lg:pr-8">
                      <x-button label="Edit" icon="pencil-alt" xs positive />
                      <x-button label="Delete" icon="trash" xs negative />
                    </td>
                  </tr>
                  <tr>
                    <td
                      class="whitespace-nowrap border-b border-gray-200 py-4 pl-4 pr-3 text-sm  text-gray-500 sm:pl-6 lg:pl-8">
                      John Doe</td>
                    <td
                      class="whitespace-nowrap border-b border-gray-200 px-3 py-4 text-sm text-gray-500 hidden sm:table-cell">
                      johndoe@gmail.com</td>
                    <td
                      class="whitespace-nowrap border-b border-gray-200 px-3 py-4 text-sm text-gray-500 hidden sm:table-cell">
                      Isulan, Sultan kudarat</td>
                    <td
                      class="whitespace-nowrap border-b border-gray-200 px-3 py-4 text-sm text-gray-500 hidden lg:table-cell">
                      09123456789</td>
                    <td class="whitespace-nowrap border-b border-gray-200 px-3 py-4 text-sm text-gray-500">
                      <span class="px-2 py-1 text-xs bg-gray-600 rounded-full text-white">Lawyer</span>
                    </td>
                    <td
                      class="relative whitespace-nowrap border-b border-gray-200 py-4 pr-4 pl-3 text-right text-sm font-medium sm:pr-6 lg:pr-8">
                      <x-button label="Edit" icon="pencil-alt" xs positive />
                      <x-button label="Delete" icon="trash" xs negative />
                    </td>
                  </tr>
                  <tr>
                    <td
                      class="whitespace-nowrap border-b border-gray-200 py-4 pl-4 pr-3 text-sm  text-gray-500 sm:pl-6 lg:pl-8">
                      John Doe</td>
                    <td
                      class="whitespace-nowrap border-b border-gray-200 px-3 py-4 text-sm text-gray-500 hidden sm:table-cell">
                      johndoe@gmail.com</td>
                    <td
                      class="whitespace-nowrap border-b border-gray-200 px-3 py-4 text-sm text-gray-500 hidden sm:table-cell">
                      Isulan, Sultan kudarat</td>
                    <td
                      class="whitespace-nowrap border-b border-gray-200 px-3 py-4 text-sm text-gray-500 hidden lg:table-cell">
                      09123456789</td>
                    <td class="whitespace-nowrap border-b border-gray-200 px-3 py-4 text-sm text-gray-500">
                      <span class="px-2 py-1 text-xs bg-gray-600 rounded-full text-white">Lawyer</span>
                    </td>
                    <td
                      class="relative whitespace-nowrap border-b border-gray-200 py-4 pr-4 pl-3 text-right text-sm font-medium sm:pr-6 lg:pr-8">
                      <x-button label="Edit" icon="pencil-alt" xs positive />
                      <x-button label="Delete" icon="trash" xs negative />
                    </td>
                  </tr>
                  <tr>
                    <td
                      class="whitespace-nowrap border-b border-gray-200 py-4 pl-4 pr-3 text-sm  text-gray-500 sm:pl-6 lg:pl-8">
                      John Doe</td>
                    <td
                      class="whitespace-nowrap border-b border-gray-200 px-3 py-4 text-sm text-gray-500 hidden sm:table-cell">
                      johndoe@gmail.com</td>
                    <td
                      class="whitespace-nowrap border-b border-gray-200 px-3 py-4 text-sm text-gray-500 hidden sm:table-cell">
                      Isulan, Sultan kudarat</td>
                    <td
                      class="whitespace-nowrap border-b border-gray-200 px-3 py-4 text-sm text-gray-500 hidden lg:table-cell">
                      09123456789</td>
                    <td class="whitespace-nowrap border-b border-gray-200 px-3 py-4 text-sm text-gray-500">
                      <span class="px-2 py-1 text-xs bg-gray-600 rounded-full text-white">Lawyer</span>
                    </td>
                    <td
                      class="relative whitespace-nowrap border-b border-gray-200 py-4 pr-4 pl-3 text-right text-sm font-medium sm:pr-6 lg:pr-8">
                      <x-button label="Edit" icon="pencil-alt" xs positive />
                      <x-button label="Delete" icon="trash" xs negative />
                    </td>
                  </tr>
                  <tr>
                    <td
                      class="whitespace-nowrap border-b border-gray-200 py-4 pl-4 pr-3 text-sm  text-gray-500 sm:pl-6 lg:pl-8">
                      John Doe</td>
                    <td
                      class="whitespace-nowrap border-b border-gray-200 px-3 py-4 text-sm text-gray-500 hidden sm:table-cell">
                      johndoe@gmail.com</td>
                    <td
                      class="whitespace-nowrap border-b border-gray-200 px-3 py-4 text-sm text-gray-500 hidden sm:table-cell">
                      Isulan, Sultan kudarat</td>
                    <td
                      class="whitespace-nowrap border-b border-gray-200 px-3 py-4 text-sm text-gray-500 hidden lg:table-cell">
                      09123456789</td>
                    <td class="whitespace-nowrap border-b border-gray-200 px-3 py-4 text-sm text-gray-500">
                      <span class="px-2 py-1 text-xs bg-gray-600 rounded-full text-white">Lawyer</span>
                    </td>
                    <td
                      class="relative whitespace-nowrap border-b border-gray-200 py-4 pr-4 pl-3 text-right text-sm font-medium sm:pr-6 lg:pr-8">
                      <x-button label="Edit" icon="pencil-alt" xs positive />
                      <x-button label="Delete" icon="trash" xs negative />
                    </td>
                  </tr>
                  <tr>
                    <td
                      class="whitespace-nowrap border-b border-gray-200 py-4 pl-4 pr-3 text-sm  text-gray-500 sm:pl-6 lg:pl-8">
                      John Doe</td>
                    <td
                      class="whitespace-nowrap border-b border-gray-200 px-3 py-4 text-sm text-gray-500 hidden sm:table-cell">
                      johndoe@gmail.com</td>
                    <td
                      class="whitespace-nowrap border-b border-gray-200 px-3 py-4 text-sm text-gray-500 hidden sm:table-cell">
                      Isulan, Sultan kudarat</td>
                    <td
                      class="whitespace-nowrap border-b border-gray-200 px-3 py-4 text-sm text-gray-500 hidden lg:table-cell">
                      09123456789</td>
                    <td class="whitespace-nowrap border-b border-gray-200 px-3 py-4 text-sm text-gray-500">
                      <span class="px-2 py-1 text-xs bg-gray-600 rounded-full text-white">Lawyer</span>
                    </td>
                    <td
                      class="relative whitespace-nowrap border-b border-gray-200 py-4 pr-4 pl-3 text-right text-sm font-medium sm:pr-6 lg:pr-8">
                      <x-button label="Edit" icon="pencil-alt" xs positive />
                      <x-button label="Delete" icon="trash" xs negative />
                    </td>
                  </tr>

                  <!-- More people... -->
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</x-admin-layout>
