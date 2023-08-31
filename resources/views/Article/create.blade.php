<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <h2 class="font-bold text-xl mx-auto text-gray-900 dark:text-gray-100 pb-4">
                Create a new Article
            </h2>

            <div class="w-full mx-auto mb-10">
                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                    <form method="post"
                          action=""
                          class="px-8  mt-6 space-y-6">
                        @csrf

                        <div>
                            <x-input-label for="status" class="pb-2" :value="__('Status')" />

                            <label class="relative inline-flex items-center cursor-pointer">
                                <input type="checkbox" name="status" class="sr-only peer">
                                <div class="w-11 h-6 bg-gray-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-blue-300 dark:peer-focus:ring-blue-800 rounded-full peer dark:bg-gray-700 peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-blue-600"></div>
                            </label>
                        </div>

                        <div>
                            <x-input-label for="title" :value="__('Title')" />
                            <x-text-input id="title" name="title" type="text" class="mt-1 block w-full" autocomplete="title" />
                             @error('title')
                                <div class="text-red-500">{{ $message }}</div>
                            @enderror
                        </div>

                        <div>
                            <x-input-label for="excerpt" :value="__('Excerpt')" />
                            <textarea name="excerpt" class="mt-1 block w-full h-20 border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm"> </textarea>
                            @error('excerpt')
                                <div class="text-red-500">{{ $message }}</div>
                            @enderror
                        </div>

                        <div>
                            <x-input-label name="description" for="description" :value="__('Description')" />
                            <textarea class="mt-1 block w-full h-40 border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm"> </textarea>
                            @error('description')
                                <div class="text-red-500">{{ $message }}</div>
                            @enderror
                        </div>

                        <div>
                            <x-input-label for="category_id" :value="__('Category')" />
                            <select name="category" class="border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm">
                                <option value="" disabled selected>
                                    Select your category
                                </option>
                                <option value="x">
                                    x
                                </option>
                            </select>
                            @error('category_id')
                                <div class="text-red-500">{{ $message }}</div>
                            @enderror
                        </div>

                        <div>
                            <x-input-label for="tags" :value="__('Tags')" />
                            <select multiple name="tags" id="countries_multiple" class="border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm">
                                <option value="x">x</option>
                            </select>
                        </div>

                        <div class="flex items-center gap-4 pb-10">
                            <x-primary-button>{{ __('Save') }}</x-primary-button>
                        </div>
                    </form>
            </div>
        </div>
    </div>
</x-app-layout>