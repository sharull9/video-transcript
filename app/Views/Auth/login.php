<div class="col-span-12 lg:col-span-4 bg-white/01 row-start-1 row-end-2 z-10">
  <div class="w-full h-full p-3 lg:p-10">
    <div class="flex min-h-full flex-col justify-center bg-white border border-gray-200 rounded-s-lg shadow px-6 py-12 lg:px-8">
      <div class="sm:mx-auto sm:w-full sm:max-w-sm">
        <a href="/" class="flex gap-2 items-center">
          <img class="mx-auto h-12 w-auto mix-blend-dark" src="/dist/assets/emblem.png" alt="Emblem" />
          <span class="text-4xl">Parliament of India</span>
        </a>
        <h2 class="mt-10 text-center text-2xl font-bold leading-9 tracking-tight text-gray-900">
          Sign in to your account
        </h2>
      </div>

      <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm">
        <form class="space-y-6" action="#" method="POST">
          <div>
            <label for="email" class="block text-sm font-medium leading-6 text-gray-900">Email address / Phone Number</label>
            <div class="mt-2">
              <input id="email" name="email" type="email" autocomplete="email" required class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" />
            </div>
          </div>
          <div>
            <div class="flex items-center justify-between">
              <label for="password" class="block text-sm font-medium leading-6 text-gray-900">Password</label>
              <div class="text-sm">
                <a href="/forget-password" class="font-semibold text-indigo-600 hover:text-indigo-500">Forgot password?</a>
              </div>
            </div>
            <div class="mt-2">
              <input id="password" name="password" type="password" autocomplete="current-password" required class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" />
            </div>
          </div>
          <div>
            <button type="submit" class="flex w-full justify-center rounded-md bg-indigo-600 px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
              <a href="/">
                Sign in
              </a>
            </button>
          </div>
        </form>
        <div class="flex my-5 items-center gap-3">
          <div class="flex-grow h-[1px] bg-gray-300"></div>
          <p>or</p>
          <div class="flex-grow h-[1px] bg-gray-300"></div>
        </div>
        <div class="flex gap-3">
          <a href="/login-otp" type="submit" class="flex w-full justify-center rounded-md bg-white px-3 py-1.5 text-sm font-semibold leading-6 text-indigo-600 border border-indigo-600 shadow-sm hover:bg-slate-100 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
            Sign in with OTP
          </a>
        </div>

        <p class="mt-10 text-center text-sm text-gray-500">
          Not a member?
          <a href="/signup" class="font-semibold leading-6 text-indigo-600 hover:text-indigo-500">Create Your Account</a>
        </p>
      </div>
    </div>
  </div>
</div>