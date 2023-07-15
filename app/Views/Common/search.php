<div class="m-2 my-3 md:m-5">
    <div class="relative shadow-md rounded-lg border border-gray-200 dark:border-gray-700 overflow-hidden">
        <div class="grid grid-cols-12">
            <div class="col-span-9 px-5 py-8">
                <h2 class="text-2xl font-bold">Search Keywords</h2>
                <p class="">Get result for keywords</p>
            </div>
        </div>
        <form class="w-full flex flex-col p-5 bg-white/30 dark:bg-white/10 backdrop-filter backdrop-blur-3xl" onsubmit="searchQuery(event)">
            <div class="flex flex-row flex-wrap gap-3">
                <input class="p-2 w-[34rem] border-2 border-blue-700/40 rounded-lg outline-none focus:ring-1 focus:ring-blue-700/40 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" type="text" value="" placeholder="Search Keywords" id="search-query" />
                <div class="flex-grow lg:flex-grow-0 lg:w-[250px]">
                    <label for="match-type" class="hidden mb-2 text-sm font-medium text-gray-900 dark:text-white">Select Speaker</label>
                    <select id="match-type" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        <option class="bg-blue-700/10 rounded-sm p-2" value="0" selected>
                            Match Keywords
                        </option>
                        <option class="bg-blue-700/10 rounded-sm p-2" value="1">
                            Match Phonetic
                        </option>
                    </select>
                </div>
                <button type="submit" class="inline-flex w-auto cursor-pointer select-none appearance-none items-center justify-center space-x-2 rounded-lg border border-blue-700 bg-blue-700 px-3 py-2 text-sm font-medium text-white transition hover:border-blue-800 hover:bg-blue-800 focus:border-blue-300 focus:outline-none focus:ring-1 focus:ring-blue-300">
                    <span>Search</span>
                    <span class="material-symbols-outlined"> search </span>
                </button>
                <button type="button" onclick="openFilterOption()" class="inline-flex ml-auto rounded-lg w-auto cursor-pointer select-none appearance-none items-center justify-center space-x-2 border-blue-700/80 bg-blue-700/80 px-3 py-2 text-sm font-medium text-white transition hover:border-blue-800 hover:bg-blue-800 focus:border-blue-300 focus:outline-none focus:ring-1 focus:ring-blue-300">
                    <span>Filter</span>
                    <span class="material-symbols-outlined"> filter_list </span>
                </button>
            </div>
            <div class="w-100 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-3 gap-y-6 pb-3 pt-6">
                <div>

                    <label for="countries" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Select Speaker</label>
                    <select id="countries" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        <option class="bg-blue-700/10 rounded-sm p-2" selected>
                            All
                        </option>
                        <?php foreach ($members as $member) { ?>
                            <option class="bg-blue-700/10 rounded-sm p-2" value="<?php echo $member['id'] ?>">
                                <?php echo $member['name'] ?>
                            </option>
                        <?php } ?>
                    </select>
                </div>
                <div>
                    <label for="house" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Select House</label>
                    <select id="house" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">

                        <option class="bg-blue-700/10 rounded-sm p-2" value="lok-sabha">
                            Lok Sabha
                        </option>
                        <option class="bg-blue-700/10 rounded-sm p-2" value="rajya-sabha">
                            Rajya Sabha
                        </option>
                        <option class="bg-blue-700/10 rounded-sm p-2" value="joint-session">
                            Joint Session
                        </option>
                    </select>
                </div>
                <div class="grid grid-cols-2 gap-3">
                    <div class="relative">
                        <label for="countries" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Date From</label>
                        <div class="absolute inset-y-0 top-[38%] left-0 flex items-center pl-3.5 pointer-events-none">
                            <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z" />
                            </svg>
                        </div>
                        <input datepicker type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Select date" />
                    </div>
                    <div class="relative">
                        <label for="countries" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Date To</label>
                        <div class="absolute inset-y-0 top-[38%] left-0 flex items-center pl-3.5 pointer-events-none">
                            <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z" />
                            </svg>
                        </div>
                        <input datepicker type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Select date" />
                    </div>
                </div>

                <div class="space-x-4">
                    <button class="px-6 py-2 bg-blue-700/10 dark:bg-blue/60 dark:text-white rounded-lg text-black">
                        Reset
                    </button>
                    <button class="px-6 py-2 bg-blue-700 rounded-lg text-white">
                        Apply
                    </button>
                </div>
            </div>
        </form>
    </div>