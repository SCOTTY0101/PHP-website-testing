<x-layout>
    <section>
        <main class="max-w-lg mx-auto mt-10 bg-blue-100 border-gray-200 p-6 rounded-xl">
            <h1 class="text-center font-bold text-xl">Register here</h1>
                <form method="POST" action="/register" class="mt-10">
                    @csrf <!--Stop Cross Site Script Attacks.-->
                <div class="mb-6">
                    <label class="block mb-2 uppercase font-bold text-xs text-gray-700"
                           for="name"
                    >
                        Name
                    </label>

                    <input class="border border-gray-400 rounded-md p-2 w-full"
                           type="text"
                           name="name"
                           id="name"
                           required
                    >
                    
                </div>

                <div class="mb-6">
                    <label class="block mb-2 uppercase font-bold text-xs text-gray-700"
                           for="username"
                    >
                        Username
                    </label>

                    <input class="border border-gray-400 rounded-md p-2 w-full"
                           type="text"
                           name="username"
                           id="username"
                           required
                    >
                </div>

                <div class="mb-6">
                    <label class="block mb-2 uppercase font-bold text-xs text-gray-700"
                           for="email"
                    >
                        Email
                    </label>

                    <input class="border border-gray-400 rounded-md p-2 w-full"
                           type="email"
                           name="email"
                           id="email"
                           required
                    >
                </div>

                <div class="mb-6">
                    <label class="block mb-2 uppercase font-bold text-xs text-gray-700"
                           for="password"
                    >
                        Password
                    </label>

                    <input class="border border-gray-400 rounded-md p-2 w-full"
                           type="password"
                           name="password"
                           id="password"
                           required
                    >
                </div>

                    <div class="mb-6">
                        <button type="submit"
                                class="bg-blue-400 text-white rounded py-2 px-4 hover:bg-blue-500"
                        >
                            Submit
                        </button>
                    </div>
                </form>
        </main>
    </section>
</x-layout>