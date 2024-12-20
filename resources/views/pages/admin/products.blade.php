<div>
    <div class="bg-white p-4 rounded-2xl">
        <div class="flex flex-col">
            <div
                data-hs-datatable='{
              "pageLength": 10,
              "pagingOptions": {
                "pageBtnClasses": "min-w-[40px] flex justify-center items-center text-gray-800 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 py-2.5 text-sm rounded-full disabled:opacity-50 disabled:pointer-events-none dark:text-white dark:focus:bg-neutral-700 dark:hover:bg-neutral-700"
              },
              "selecting": false,
              "language": {
                "zeroRecords": "<div class=\"py-10 px-5 flex flex-col justify-center items-center text-center\"><svg class=\"shrink-0 size-6 text-gray-500 dark:text-neutral-500\" xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\"><circle cx=\"11\" cy=\"11\" r=\"8\"/><path d=\"m21 21-4.3-4.3\"/></svg><div class=\"max-w-sm mx-auto\"><p class=\"mt-2 text-sm text-gray-600 dark:text-neutral-400\">No search results</p></div></div>"
              }
            }'>
                <div class="py-3 flex justify-between">
                    <div class="relative max-w-xs">
                        <label for="hs-table-input-search" class="sr-only">Search</label>
                        <input type="search" name="hs-table-search" id="hs-table-input-search"
                            class="py-2 px-3 ps-9 block w-full border-gray-200 shadow-sm rounded-lg text-sm focus:z-10 focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600"
                            placeholder="Search for items" data-hs-datatable-search="">
                        <div class="absolute inset-y-0 start-0 flex items-center pointer-events-none ps-3">
                            <svg class="size-4 text-gray-400 dark:text-neutral-500" xmlns="http://www.w3.org/2000/svg"
                                width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <circle cx="11" cy="11" r="8"></circle>
                                <path d="m21 21-4.3-4.3"></path>
                            </svg>
                        </div>
                    </div>
                    <div>
                        <a href="/product/create" wire:navigate
                            class="py-2 px-4 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-transparent bg-blue-600 text-white hover:bg-blue-700 focus:outline-none focus:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none">
                            Add Products
                        </a>
                    </div>
                </div>

                <div class="min-h-[521px] overflow-x-auto">
                    <div class="min-w-full inline-block align-middle">
                        <div class="overflow-hidden">
                            <table class="min-w-full">
                                <thead class="border-y border-gray-200 dark:border-neutral-700">
                                    <tr>
                                        <th scope="col"
                                            class="py-1 pe-0 group text-start font-normal focus:outline-none">
                                            <div
                                                class="py-1 px-2.5 inline-flex items-center border border-transparent text-sm text-gray-500 rounded-md hover:border-gray-200 dark:text-neutral-500 dark:hover:border-neutral-700">
                                                No.
                                                <svg class="size-3.5 ms-1 -me-0.5 text-gray-400 dark:text-neutral-500"
                                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                                    <path
                                                        class="hs-datatable-ordering-asc:text-blue-600 dark:hs-datatable-ordering-asc:text-blue-500"
                                                        d="m7 15 5 5 5-5"></path>
                                                    <path
                                                        class="hs-datatable-ordering-desc:text-blue-600 dark:hs-datatable-ordering-desc:text-blue-500"
                                                        d="m7 9 5-5 5 5"></path>
                                                </svg>
                                            </div>
                                        </th>
                                        <th scope="col" class="py-1 group text-start font-normal focus:outline-none">
                                            <div
                                                class="py-1 px-2.5 inline-flex items-center border border-transparent text-sm text-gray-500 rounded-md hover:border-gray-200 dark:text-neutral-500 dark:hover:border-neutral-700">
                                                Kategori Produk
                                                <svg class="size-3.5 ms-1 -me-0.5 text-gray-400 dark:text-neutral-500"
                                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                                    <path
                                                        class="hs-datatable-ordering-asc:text-blue-600 dark:hs-datatable-ordering-asc:text-blue-500"
                                                        d="m7 15 5 5 5-5"></path>
                                                    <path
                                                        class="hs-datatable-ordering-desc:text-blue-600 dark:hs-datatable-ordering-desc:text-blue-500"
                                                        d="m7 9 5-5 5 5"></path>
                                                </svg>
                                            </div>
                                        </th>
                                        <th scope="col" class="py-1 group text-start font-normal focus:outline-none">
                                            <div
                                                class="py-1 px-2.5 inline-flex items-center border border-transparent text-sm text-gray-500 rounded-md hover:border-gray-200 dark:text-neutral-500 dark:hover:border-neutral-700">
                                                Produk
                                                <svg class="size-3.5 ms-1 -me-0.5 text-gray-400 dark:text-neutral-500"
                                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                                    <path
                                                        class="hs-datatable-ordering-asc:text-blue-600 dark:hs-datatable-ordering-asc:text-blue-500"
                                                        d="m7 15 5 5 5-5"></path>
                                                    <path
                                                        class="hs-datatable-ordering-desc:text-blue-600 dark:hs-datatable-ordering-desc:text-blue-500"
                                                        d="m7 9 5-5 5 5"></path>
                                                </svg>
                                            </div>
                                        </th>

                                        <th scope="col" class="py-1 group text-start font-normal focus:outline-none">
                                            <div
                                                class="py-1 px-2.5 inline-flex items-center border border-transparent text-sm text-gray-500 rounded-md hover:border-gray-200 dark:text-neutral-500 dark:hover:border-neutral-700">
                                                Deskripsi
                                                <svg class="size-3.5 ms-1 -me-0.5 text-gray-400 dark:text-neutral-500"
                                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                                    <path
                                                        class="hs-datatable-ordering-asc:text-blue-600 dark:hs-datatable-ordering-asc:text-blue-500"
                                                        d="m7 15 5 5 5-5"></path>
                                                    <path
                                                        class="hs-datatable-ordering-desc:text-blue-600 dark:hs-datatable-ordering-desc:text-blue-500"
                                                        d="m7 9 5-5 5 5"></path>
                                                </svg>
                                            </div>
                                        </th>

                                        <th scope="col" class="py-1 group text-start font-normal focus:outline-none">
                                            <div
                                                class="py-1 px-2.5 inline-flex items-center border border-transparent text-sm text-gray-500 rounded-md hover:border-gray-200 dark:text-neutral-500 dark:hover:border-neutral-700">
                                                Harga
                                                <svg class="size-3.5 ms-1 -me-0.5 text-gray-400 dark:text-neutral-500"
                                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                                    <path
                                                        class="hs-datatable-ordering-asc:text-blue-600 dark:hs-datatable-ordering-asc:text-blue-500"
                                                        d="m7 15 5 5 5-5"></path>
                                                    <path
                                                        class="hs-datatable-ordering-desc:text-blue-600 dark:hs-datatable-ordering-desc:text-blue-500"
                                                        d="m7 9 5-5 5 5"></path>
                                                </svg>
                                            </div>
                                        </th>
                                        <th scope="col"
                                            class="py-1 group text-start font-normal focus:outline-none">
                                            <div
                                                class="py-1 px-2.5 inline-flex items-center border border-transparent text-sm text-gray-500 rounded-md hover:border-gray-200 dark:text-neutral-500 dark:hover:border-neutral-700">
                                                Kuantitas
                                                <svg class="size-3.5 ms-1 -me-0.5 text-gray-400 dark:text-neutral-500"
                                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                                    <path
                                                        class="hs-datatable-ordering-asc:text-blue-600 dark:hs-datatable-ordering-asc:text-blue-500"
                                                        d="m7 15 5 5 5-5"></path>
                                                    <path
                                                        class="hs-datatable-ordering-desc:text-blue-600 dark:hs-datatable-ordering-desc:text-blue-500"
                                                        d="m7 9 5-5 5 5"></path>
                                                </svg>
                                            </div>
                                        </th>

                                        <th scope="col"
                                            class="py-2 px-3 text-end font-normal text-sm text-gray-500 --exclude-from-ordering dark:text-neutral-500">
                                            Action</th>
                                    </tr>
                                </thead>
                                <tbody class="divide-y divide-gray-200 dark:divide-neutral-700">
                                    @php
                                        $n = 0;
                                    @endphp
                                    @forelse ($productAll as $produk)
                                        <tr>
                                            <td
                                                class="p-3 ps-6 whitespace-nowrap text-sm font-medium text-gray-800 dark:text-neutral-200">
                                                {{ $n += 1 }}
                                            </td>
                                            <td
                                                class="p-3 whitespace-nowrap text-sm font-medium text-gray-800 dark:text-neutral-200">
                                                {{ $produk->product_name }}
                                            </td>
                                            <td
                                                class="p-3 whitespace-nowrap text-sm font-medium text-gray-800 dark:text-neutral-200">
                                                {{ $produk->product_name }}
                                            </td>
                                            <td
                                                class="p-3 whitespace-nowrap text-sm text-gray-800 dark:text-neutral-200">
                                                {{ $produk->description }}
                                            </td>
                                            <td
                                                class="p-3 whitespace-nowrap text-sm text-gray-800 dark:text-neutral-200">
                                                {{ $produk->price }}
                                            </td>
                                            <td
                                                class="p-3 whitespace-nowrap text-sm text-gray-800 dark:text-neutral-200">
                                                {{ $produk->stock_quantity }}
                                            </td>
                                            <td class="p-3 whitespace-nowrap text-end text-sm font-medium">
                                                <button type="button"
                                                    class="inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent text-blue-600 hover:text-blue-800 focus:outline-none focus:text-blue-800 disabled:opacity-50 disabled:pointer-events-none dark:text-blue-500 dark:hover:text-blue-400 dark:focus:text-blue-400">Delete</button>
                                            </td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td
                                                class="p-3 ps-6 whitespace-nowrap text-sm font-medium text-gray-800 dark:text-neutral-200 text-center hidden">
                                            </td>
                                            <td
                                                class="p-3 ps-6 whitespace-nowrap text-sm font-medium text-gray-800 dark:text-neutral-200 text-center hidden">
                                            </td>
                                            <td
                                                class="p-3 ps-6 whitespace-nowrap text-sm font-medium text-gray-800 dark:text-neutral-200 text-center hidden">
                                            </td>
                                            <td class="p-3 ps-6 whitespace-nowrap text-sm font-medium text-gray-800 dark:text-neutral-200 text-center"
                                                colspan="7">
                                                Tidak ada Produk
                                            </td>
                                            <td
                                                class="p-3 ps-6 whitespace-nowrap text-sm font-medium text-gray-800 dark:text-neutral-200 text-center hidden">
                                            </td>
                                            <td
                                                class="p-3 ps-6 whitespace-nowrap text-sm font-medium text-gray-800 dark:text-neutral-200 text-center hidden">
                                            </td>
                                            <td
                                                class="p-3 ps-6 whitespace-nowrap text-sm font-medium text-gray-800 dark:text-neutral-200 text-center hidden">
                                            </td>
                                        </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <div class="py-1 px-4 hidden" data-hs-datatable-paging="">
                    <nav class="flex items-center space-x-1">
                        <button type="button"
                            class="p-2.5 min-w-[40px] inline-flex justify-center items-center gap-x-2 text-sm rounded-full text-gray-800 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:text-white dark:hover:bg-neutral-700 dark:focus:bg-neutral-700"
                            data-hs-datatable-paging-prev="">
                            <span aria-hidden="true">«</span>
                            <span class="sr-only">Previous</span>
                        </button>
                        <div class="flex items-center space-x-1 [&>.active]:bg-gray-100 dark:[&>.active]:bg-neutral-700"
                            data-hs-datatable-paging-pages=""></div>
                        <button type="button"
                            class="p-2.5 min-w-[40px] inline-flex justify-center items-center gap-x-2 text-sm rounded-full text-gray-800 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:text-white dark:hover:bg-neutral-700 dark:focus:bg-neutral-700"
                            data-hs-datatable-paging-next="">
                            <span class="sr-only">Next</span>
                            <span aria-hidden="true">»</span>
                        </button>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>
@push('scripts')
    <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/js/dataTables.min.js') }}"></script>
@endpush
