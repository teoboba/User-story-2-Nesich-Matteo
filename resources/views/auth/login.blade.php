<x-layout title="Login - Presto">
    <section class="auth-panel">
        <h1>Login</h1>

        <form method="POST" action="{{ route('login') }}" class="form">
            @csrf

            <label>
                Email
                <input type="email" name="email" value="{{ old('email') }}" required autofocus>
                @error('email') <span class="error">{{ $message }}</span> @enderror
            </label>

            <label>
                Password
                <input type="password" name="password" required>
                @error('password') <span class="error">{{ $message }}</span> @enderror
            </label>

            <button type="submit" class="primary-button">Entra</button>
        </form>
    </section>
</x-layout>
