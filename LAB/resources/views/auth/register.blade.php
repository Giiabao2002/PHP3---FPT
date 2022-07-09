<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot>

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <!-- Name -->
            <div>
                <x-label for="name" :value="__('Tên Của Bạn')" />

                <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus />
            </div>

            <!-- Email Address -->
            <div class="mt-4">
                <x-label for="email" :value="__('Email Của Bạn')" />

                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-label for="password" :value="__('Mật Khẩu Của Bạn')" />

                <x-input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="new-password" />
            </div>

            <!-- Confirm Password -->
            <div class="mt-4">
                <x-label for="password_confirmation" :value="__('Nhập Lại Mật Khẩu')" />

                <x-input id="password_confirmation" class="block mt-1 w-full"
                                type="password"
                                name="password_confirmation" required />
            </div>

            <!-- Nghe Nghiep -->
            <div class="mt-4">
                <x-label for="password_confirmation" :value="__('Nghề Nghiệp Của Bạn')" />

                <x-input  class="block mt-1 w-full"
                                type="text"
                                name="nghenghiep" required />
            </div>

            <!-- Nghe Nghiep -->
            <div class="mt-4">
                <x-label for="password_confirmation" :value="__('Phái')" />

                <select name="phai">
                    <option value="0">Nữ</option>
                    <option value="1">Nam</option>
                </select>
            </div>

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Bạn Đã Có Tài Khoản?') }}
                </a>

                <x-button class="ml-4">
                    {{ __('Đăng Ký') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>
