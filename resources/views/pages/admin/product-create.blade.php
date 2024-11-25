<div>
    <div class="bg-white rounded-2xl p-4 mb-6">
        <livewire:forms.category />
    </div>
    <div class="bg-white rounded-2xl">
        <div class="flex justify-between items-center py-3 px-4 border-b dark:border-neutral-800">
            <h3 id="hs-bg-gray-on-hover-cards-label" class="font-bold text-gray-800 dark:text-neutral-200">
                Buat Produk
            </h3>
        </div>
        <form action="" wire:submit.prevent="ProductAdd">
            <div class="p-4">
                <div class="md:grid md:grid-cols-2 gap-4">
                    <div>
                        <label for="hs-feedback-post-comment-name-1"
                            class="block mb-2 text-sm font-medium dark:text-white">Kategori Produk
                        </label>
                        <select wire:model="productCategory" id="kategori_produk"
                            class="py-3 px-4 pe-9 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none placeholder-gray-400 mt-2">
                            <option selected="" disabled>Pilih kategori Produk</option>
                            @forelse ($categoryAll as $kategori)
                                <option value="{{ $kategori->id }}">{{ $kategori->category_name }}</option>
                            @empty
                                <option selected="" disabled>none</option>
                            @endforelse
                        </select>
                    </div>
                    <div>
                        <label for="hs-feedback-post-comment-name-1"
                            class="block mb-2 text-sm font-medium dark:text-white">Kategori Produk
                        </label>
                        <input wire:model="productName" id="produk" type="text" placeholder="Nama Kategori"
                            class="py-3 px-4  block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none mt-2" />
                    </div>
                    <div class="col-span-2">
                        <label for="hs-feedback-post-comment-name-1"
                            class="block mb-2 text-sm font-medium dark:text-white">Deskripsi Produk
                        </label>
                        <textarea wire:model="productDesc" id="produk" type="text" placeholder="Deskripsikan Produk anda"
                            class="py-3 px-4  block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none mt-2"></textarea>
                    </div>
                    <div>
                        <label for="hs-feedback-post-comment-name-1"
                            class="block mb-2 text-sm font-medium dark:text-white">Harga Produk
                        </label>
                        <input wire:model="productPrice" id="hargaproduk" type="number" placeholder="Rp. ...,-"
                            class="py-3 px-4  block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none mt-2" />
                    </div>
                    <div>
                        <label for="hs-feedback-post-comment-name-1"
                            class="block mb-2 text-sm font-medium dark:text-white">Kuantitas Produk
                        </label>
                        <input wire:model="productQty" id="produk" type="number" placeholder="stock"
                            class="py-3 px-4  block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none mt-2" />
                    </div>
                </div>
            </div>
            <div class="flex justify-end items-center gap-x-2 p-4 sm:px-7 border-t dark:border-neutral-800">
                <a href="/products" wire:navigate
                    class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-gray-200 bg-white text-gray-800 shadow-sm hover:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none focus:outline-none focus:bg-gray-50 dark:bg-transparent dark:border-neutral-700 dark:text-neutral-300 dark:hover:bg-neutral-800 dark:focus:bg-neutral-800"
                    data-hs-overlay="#hs-notifications">
                    Cancel
                </a>
                <button
                    class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-transparent bg-blue-600 text-white hover:bg-blue-700 focus:outline-none focus:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none"
                    type="submit">
                    Simpan Produk
                </button>
            </div>
        </form>
    </div>
</div>
