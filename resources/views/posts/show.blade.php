<x-layout>
        <main class="max-w-6xl mx-auto mt-10 lg:mt-20 space-y-6">
            <article class="max-w-4xl mx-auto lg:grid lg:grid-cols-12 gap-x-10">
                <div class="col-span-4 lg:text-center lg:pt-14 mb-10">
                    <img src="/images/illustration-1.png" alt="" class="rounded-xl">

                    <p class="mt-4 block text-gray-400 text-xs">
                        Published <time> {{ $post->created_at->diffForHumans() }}</time>
                    </p>

                    <div class="flex items-center lg:justify-center text-sm mt-4">
                        <img src="/images/lary-avatar.svg" alt="Lary avatar">
                        <div class="ml-3 text-left">
                            <h5 class="font-bold">
                                <a href="/?authors={{ $post->author->username }}">{{ $post->author->name }}</a>
                            </h5>
                        </div>
                    </div>
                </div>

                <div class="col-span-8">
                    <div class="hidden lg:flex justify-between mb-6">
                        <a href="/"
                            class="transition-colors duration-300 relative inline-flex items-center text-lg hover:text-blue-500">
                            <svg width="22" height="22" viewBox="0 0 22 22" class="mr-2">
                                <g fill="none" fill-rule="evenodd">
                                    <path stroke="#000" stroke-opacity=".012" stroke-width=".5" d="M21 1v20.16H.84V1z">
                                    </path>
                                    <path class="fill-current"
                                        d="M13.854 7.224l-3.847 3.856 3.847 3.856-1.184 1.184-5.04-5.04 5.04-5.04z">
                                    </path>
                                </g>
                            </svg>

                            Back to Posts
                        </a>

                        <div class="space-x-2">
                            <x-category-button :category="$post->category" />
                        </div>
                    </div>

                    <h1 class="font-bold text-3xl lg:text-4xl mb-10">
                        {!! $post->title !!}
                    </h1>

                    <div class="space-y-4 lg:text-lg leading-loose">
                        {!! $post->body !!}
                    </div>
                </div>
                
                <section class="col-span-8 col-start-5 mt-4 space-y-4">
                    @if (auth()->check())
                        <x-panel>
                            <form action="/posts/{{ $post->slug }}/comments" method="post" class="rounded-xl border border-gray-200 p-6">
                                @csrf
                                <header class="flex item-center">
                                    <img src="https://i.pravatar.cc/40?u={{ auth()->id()}}" alt="" width="40" class="rounded-full">
                                    <h2 class="ml-3">
                                        Want to participate? 
                                    </h2>
                                </header>
                                <div class="mt-4">
                                    <textarea name="body" id="body" cols="30" rows="5" class="w-full text-sm focus:outline-none" placeholder="Quick, Say Something!" required></textarea>
                                    @error('body')
                                        <span class="text-sm text-red-500">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="flex justify-end">
                                    <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit ">
                                        Post
                                    </button>                        
                                </div>
                            </form> 
                        </x-panel>
                    @else
                        <p class="font-bold">
                            <a href="/Register" class="hover:underline">Register to leave a comment !</a> or <a href="/login" class="hover:underline">Login to leave a comment !</a>
                        </p>
                    @endif
                    @foreach ($post->comments as $comment)
                        <x-post-comment :comment="$comment"/>
                    @endforeach
                </section>
            </article>
        </main>

    </x-layout>