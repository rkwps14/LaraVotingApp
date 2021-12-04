<x-app-layout>
   <div class="filters flex space-x-6">
        <div class="w-1/3">
            <select name="category" id="category" class="w-full border-none rounded-xl px-4 py-2">
                <option value="Category One"> Category One</option>
                <option value="Category One"> Category One</option>
                <option value="Category One"> Category One</option>
                <option value="Category One"> Category One</option>
                <option value="Category One"> Category One</option>
            </select>
        </div>
        <div class="w-1/3">
            <select name="other_filters" id="other_filters" class="w-full border-none rounded-xl px-4 py-2">
                <option value="Filter One"> Filter One</option>
                <option value="Filter One"> Filter One</option>
                <option value="Filter One"> Filter One</option>
                <option value="Filter One"> Filter One</option>
                <option value="Filter One"> Filter One</option>
            </select>
        </div>
        <div class="w-2/3 relative">
            <input type="search" placeholder="Find an idea" class="w-full rounded-xl bg-white px-4 py-2 pl-8 border-none" />
            <div class="absolute top-3 flex item-center h-full ml-2">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                </svg>
            </div>
        </div>    
   </div> <!---End Filters--->
</x-app-layout>
