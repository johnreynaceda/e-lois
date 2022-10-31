<x-admin-layout>
  <div class="py-6">
    <x-breadcrumbs title="Documents" />
    <div class="mx-auto max-w-7xl mt-5 px-4 sm:px-6 md:px-8">
      <div class="h-[35rem] flex justify-center items-center space-x-14">
        <div class="border-2 shadow-xl p-5 h-64 w-64 rounded-3xl">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="h-10 fill-sky-600">
            <path fill="none" d="M0 0h24v24H0z" />
            <path
              d="M6 7V4a1 1 0 0 1 1-1h6.414l2 2H21a1 1 0 0 1 1 1v10a1 1 0 0 1-1 1h-3v3a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V8a1 1 0 0 1 1-1h3zm0 2H4v10h12v-2H6V9z" />
          </svg>
          <div class="mt-10 w-full text-center">
            <h1 class="uppercase font-bold text-2xl text-gray-700">cases documents</h1>
          </div>
          <div class="mt-5 flex justify-center items-center">
            <x-button label="OPEN" right-icon="external-link" href="{{ route('admin.cases-document') }}" dark sm
              class="" />
          </div>
        </div>
        <div class="border-2 shadow-xl p-5 h-64 w-64 rounded-3xl">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="h-10 fill-sky-600">
            <path fill="none" d="M0 0h24v24H0z" />
            <path
              d="M6 7V4a1 1 0 0 1 1-1h6.414l2 2H21a1 1 0 0 1 1 1v10a1 1 0 0 1-1 1h-3v3a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V8a1 1 0 0 1 1-1h3zm0 2H4v10h12v-2H6V9z" />
          </svg>
          <div class="mt-10 w-full text-center">
            <h1 class="uppercase font-bold text-2xl text-gray-700">notarial documents</h1>
          </div>
          <div class="mt-5 flex justify-center items-center">
            <x-button label="OPEN" right-icon="external-link" dark sm class="" />
          </div>
        </div>
      </div>
    </div>
  </div>
</x-admin-layout>
