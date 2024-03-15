<x-layout>
    <h1>Login page</h1>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <form action="/login" method="POST">
        @csrf
        <h1>Accedi</h1>
        <div class="mb-3">
            <label for="email" class="form-label">Email address</label>
            <input name="email" type="email" class="form-control" id="email">
            @error('email')
                <span class="small text-danger">{{ $message }}</span>
            @enderror
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input name = "password" type="password" class="form-control" id="password">
            @error('password')
                <span class="small text-danger">{{ $message }}</span>
            @enderror
        </div>
        <div class="mb-3 form-check">
            <input type="checkbox" class="form-check-input" id="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1">Check me out</label>
        </div>
        <button type="submit" class="btn btn-primary">Login</button>
    </form>

</x-layout>
