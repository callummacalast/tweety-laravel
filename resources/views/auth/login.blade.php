<x-master>

<div class="flex mx-auto container justify-center">
    <div class="px-12 py-6 bg-gray-200 rounded-lg">
        <div class="col-md-8">

                <div class="font-bold text-xl self-center mb-4">{{ __('Login') }}</div>

                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="mb-6">
                            <label for="email" class="block mb-2 uppercase font-bold text-xs text-gray-700">{{ __('E-Mail Address') }}</label>
                                <input id="email" type="email" class="border border-gray-400 p-2 w-full" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                        </div>

                        <div class="mb-6">
                            <label for="password" class="block mb-2 uppercase font-bold text-xs text-gray-700">{{ __('Password') }}</label>
                                <input id="password" type="password" class="border border-gray-400 p-2 w-full" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>

                        <div class="mb-6">
                            <div class="col-md-4 offset-md-4">
                                <div class="form-check">
                                    <input class="mr-1" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="text-xs text-gray-700 font-bold uppercase" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="mb-3">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="bg-blue-400 text-white rounded py-2 px-4 hover:bg-blue-500">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="text-xs text-gray-700" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
        </div>
    </div>
</div>
</x-master>
