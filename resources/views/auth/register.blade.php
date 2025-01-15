<x-layout-auth>
    <div class="bg-gray-100 flex justify-center items-center h-screen">
    <div class="w-1/2 h-screen hidden lg:block">
      <img src="https://placehold.co/800x/667fff/ffffff.png?text=Your+Image&font=Montserrat" alt="Placeholder Image" class="object-cover w-full h-full">
    </div>
    <div class="lg:p-36 md:p-52 sm:20 p-8 w-full lg:w-1/2">
      <h1 class="text-2xl font-semibold mb-4">Daftar</h1>
      <form action="#" method="POST">
        <div class="mb-4">
            <label for="name" class="block text-gray-600">Nama</label>
            <input type="text" id="name" name="name" class="w-full border border-gray-300 rounded-md py-2 px-3 focus:outline-none focus:border-blue-500" autocomplete="off">
        </div>
        <div class="mb-4">
          <label for="username" class="block text-gray-600">Username</label>
          <input type="text" id="username" name="username" class="w-full border border-gray-300 rounded-md py-2 px-3 focus:outline-none focus:border-blue-500" autocomplete="off">
        </div>
        <div class="mb-4">
          <label for="password" class="block text-gray-600">Sandi</label>
          <input type="password" id="password" name="password" class="w-full border border-gray-300 rounded-md py-2 px-3 focus:outline-none focus:border-blue-500" autocomplete="off">
        </div>
        <div class="mb-4">
            <label for="confirm-password" class="block text-gray-600">Konfirmasi Sandi</label>
            <input type="confirm-password" id="confirm-password" name="confirm-password" class="w-full border border-gray-300 rounded-md py-2 px-3 focus:outline-none focus:border-blue-500" autocomplete="off">
          </div>
        <button type="submit" class="bg-blue-500 hover:bg-blue-600 text-white font-semibold rounded-md py-2 px-4 w-full">Daftar</button>
      </form>
      <div class="mt-6 text-blue-500 text-center">
        <span>Kamu sudah daftar? <a href="/login" class="hover:underline">Masuk disini</a></span>
      </div>
    </div>
    </div>
</x-layout-auth>
