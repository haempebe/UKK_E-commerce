<div>
    <form wire:submit="CreateCategory">
        <div class="mb-4 sm:mb-8">
            <label for="hs-feedback-post-comment-name-1" class="block mb-2 text-sm font-medium dark:text-white">Kategori
            </label>
            <div class="inline-flex w-full gap-x-2">
                <input type="text" id="hs-feedback-post-comment-name-1" wire:model="nameCategory"
                    class="py-3 px-4 pe-[130px] block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600"
                    placeholder="Buat Kategori Produk">

                <button type="submit"
                    class="min-w-[135px] w-[135px] py-2 px-4 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-transparent bg-blue-600 text-white hover:bg-blue-700 focus:outline-none focus:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none">
                    Add Categories
                </button>
            </div>
        </div>
    </form>
</div>
