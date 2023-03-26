@include('partials.__header', ['title'=>'Create User'])
    <header class="max-w-lg mx-auto">
        <a href="">
            <h1 class="text-4xl font-bold text-cyan-900 text-center">Admin Login</h1>
        </a>
    </header>
    <main class="bg-white max-w-lg mx-auto p-8 my-10 rounded-lg shadow-2xl">
        <section>
            <h3 class="font-bold text-2xl text-gray-700">
                Welcome to Student System
            </h3>
            <p class="text-gray-600 pt-2">Sign in to your account</p>
        </section>
        <section class="mt-10">
            <form action="#" method="post" class="flex flex-col">
                <div class="mb-6">
                    <label for="email" class="block text-gray-700 font-semibold">Email Address</label>
                    <input type="email" name="" id="" placeholder="Enter Email Address" class="bg-gray-100 rounded-lg w-full focus:border-cyan-600 focus:bg-white focus:outline-none border border-gray-400 px-4 py-4 mt-2" required>
                </div>
                <div class="mb-6">
                    <label for="password" class="block text-gray-700 font-semibold">Password</label>
                    <input type="password" name="" id="" placeholder="Enter Password" class="bg-gray-100 rounded-lg w-full focus:border-cyan-600 focus:bg-white focus:outline-none border border-gray-400 px-4 py-4 mt-2" required>
                </div>
                <button type="submit" class="w-full block bg-cyan-600 hover:bg-cyan-500 focus:bg-cyan-500 text-white font-semibold rounded-lg
                px-4 py-3 mt-4">Log In</button>
            </form>
        </section>
    </main>
@include('partials.__footer')