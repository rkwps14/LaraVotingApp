<x-app-layout>
   <div class="filters flex space-x-6">
        <div class="w-1/2">
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
   </div> <!-- -End Filters- -->
   <div class="ideas-container space-y-6 my-6">
        <div class="idea-container bg-white rounded-xl flex hover:shadow-md">
            <div class="border-r border-gray-100 px-5 py-8">
                <div class="text-center">
                    <div class="font-semibold text-2xl">12</div>
                    <div class="text-gray-500">Votes</div>
                </div>
                <div class="mt-8">
                    <button class="button w-30 bg-gray-200 border border-gray-200 hover:border-gray-400 font-bold transition duration-150 ease-in text-xs uppercase rounded-xl px-4 py-3">Vote</button>
                </div>
            </div>
            <div class="flex px-2 py-6">
                <a href="#" class="flex-none">
                    <img src="https://source.unsplash.com/200x200/?face&crop=face&v=1" alt="avatar" class="w-14 ht-14 rounded-xl">
                </a>
                <div class="mx-4">
                    <h4 class="text-xl font-semibold">
                        <a href="#" class="hover:underline">A Random Title Can Go There</a>
                    </h4>
                    <div class="text-gray-600 mt-3 line-clamp-3">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        Sit nisi sunt quo asperiores unde itaque quos deserunt officia.
                        Reprehenderit quos dicta, pariatur, cumque libero illo sit possimus labore magnam autem soluta qui earum debitis amet asperiores laboriosam maiores eum dignissimos similique tempore quidem temporibus cupiditate? Officiis, nobis a? Cum natus veritatis iure voluptatem culpa fuga nobis beatae! Possimus omnis perspiciatis aperiam fugiat earum ullam nisi corrupti alias quia neque, vero odio iusto accusamus commodi consequuntur, animi at? Sunt incidunt possimus suscipit, odio deleniti amet molestiae numquam nobis iste, eaque quaerat reprehenderit distinctio nam eos nisi est! Voluptates consectetur ipsam nesciunt?
                    </div>
                    <div class="flex-item-center justify-between mt-6">
                        <div class="flex item-center text-xs text-gray-400 font-semibold space-x-2">
                            <div>10 Hours ago</div>
                            <div>&bull;</div>
                            <div>Category 1</div>
                            <div>&bull;</div>
                            <div class="text-gray-900">3 Comments</div>
                        </div>
                        <div class="flex item-center space-x-2">
                            <div class="bg-gray-200 text-xss font-bold uppercase leading-none rounded-full text-center w-28 h-7 py-2 px-4">
                                Open
                            </div>
                            <button class="relative bg-gray-100 hover:bg-gray-200 rounded-full h-7 transition duration-150 py-2 px-3">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-6" fill="none" viewBox="0 5 24 24" stroke="currentColor">
                              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h.01M12 12h.01M19 12h.01M6 12a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0z" />
                            </svg>
                            <ul class="absolute w-44 text-left font-semibold bg-white shadow-lg rounded-xl py-3 ml-8">
                                <li><a href="#" class="hover:bg-gray-100 transition block duration-150-ease-in px-5 py-3">Mark as spam</a></li>
                                <li><a href="#" class="hover:bg-gray-100 transition block duration-150-ease-in px-5 py-3">Delete post</a></li>
                            </ul>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- end ideas container -->
   </div> <!-- end ideas container -->
</x-app-layout>
