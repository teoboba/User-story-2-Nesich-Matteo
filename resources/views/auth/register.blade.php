<x-layout title="Registrazione - Presto">
    <section class="auth-panel">
        <h1>Registrazione</h1>

        <form method="POST" action="{{ route('register') }}" class="form">
            @csrf

            <label>
                Nome
                <input type="text" name="name" value="{{ old('name') }}" required autofocus>
                @error('name') <span class="error">{{ $message }}</span> @enderror
            </label>

            <label>
                Email
                <input type="email" name="email" value="{{ old('email') }}" required>
                @error('email') <span class="error">{{ $message }}</span> @enderror
            </label>

            <label>
                Password
                <input type="password" name="password" required>
                @error('password') <span class="error">{{ $message }}</span> @enderror
            </label>

            <label>
                Conferma password
                <input type="password" name="password_confirmation" required>
            </label>

            <button type="submit" class="primary-button">Registrati</button>
        </form>
    </section>
</x-layout>
