<x-layout-auth>
    <div class="bg-gray-100 flex justify-center items-center h-screen">
    <div class="w-1/2 h-screen hidden lg:block">
      <img src="https://dispora.slemankab.go.id/wp-content/uploads/2024/03/3915b144-afd3-465f-a5c6-4adc19dc78d2.jpg" class="object-cover w-full h-full">
    </div>
    <div class="lg:p-36 md:p-52 sm:20 p-8 w-full lg:w-1/2">
      <h1 class="text-2xl font-semibold mb-4">Masuk</h1>
      <form action="#" method="POST">
        <div class="mb-4">
          <label for="username" class="block text-gray-600">Username</label>
          <input type="text" id="username" name="username" class="w-full border border-gray-300 rounded-md py-2 px-3 focus:outline-none focus:border-blue-500" autocomplete="off">
        </div>
        <div class="mb-4">
          <label for="password" class="block text-gray-600">Sandi</label>
          <input type="password" id="password" name="password" class="w-full border border-gray-300 rounded-md py-2 px-3 focus:outline-none focus:border-blue-500" autocomplete="off">
        </div>
        <button type="submit" class="bg-blue-500 hover:bg-blue-600 text-white font-semibold rounded-md py-2 px-4 w-full">Login</button>
      </form>
      <div class="mt-6 text-blue-500 text-center">
        <a href="/register" class="hover:underline">Daftar disini</a>
      </div>
    </div>
    </div>
</x-layout-auth>
