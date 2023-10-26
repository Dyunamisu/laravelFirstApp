<x-layout>
    <section class="px-6 py-8">
        <div class="w-full max-w-lg mx-auto">
            <form method="post" action="/login" class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
              @csrf
              
              <div class="mb-6">
                <label class="block text-gray-700 text-md font-bold mb-2" for="email">
                  Email
                </label>
                <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="email" name="email" type="email" placeholder="example@example.com" value="{{old('email')}}
                ">
                @error('email')
                  <p class="text-red-500 text-xs mt-2">
                      {{$message}}
                  </p>
                @enderror
              </div>

              <div class="mb-6">
                <label class="block text-gray-700 text-md font-bold mb-2" for="password">
                  Password
                </label>
                <input class="shadow appearance-none border border-red-500 rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline" name="password" id="password" type="password" placeholder="******************">
                <p class="text-red-500 text-xs italic">Please choose a password.</p>
              </div>
              @error('password')
                <p class="text-red-500 text-xs mb-2">
                    {{$message}}
                </p>
              @enderror

              <div class="flex items-center justify-between">
                <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit ">
                  Submit
                </button>
              </div>
            </form>
          </div>
    </section>
</x-layout>