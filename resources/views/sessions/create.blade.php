<x-layout>
    <section class="px-6 py-8">
        <main class="max-w-lg mx-auto mt-10 bg-gray-100  border border-gray-100 p-6 rounded-xl ">
            <h1 class="text-center font-bold text-xl">Log In</h1>
            <form method="post" action="/login" class="mt-10">
                @csrf
                <div class="mb-6">
                    <label>Email</label>
                    <input  class="border border-gray-400 p-2 w-full" type="text" name="email" required>
                    @error('email')
                    <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                    @enderror
                </div>
                <div class="mb-6">
                    <label>Password</label>
                    <input  class="border border-gray-400 p-2 w-full" type="password" name="password" required>
                    @error('password')
                    <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                    @enderror
                </div>
                <div class="mb-6">
                    <button class="bg-blue-400 text-white rounded py-2 px-4 hover:bg-blue-500" type="submit" name="submit">Log In</button>
                </div>
            </form>
        </main>
    </section>
</x-layout>