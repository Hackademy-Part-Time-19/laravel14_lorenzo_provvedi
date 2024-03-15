@vite(['resources/css/app.css', 'resources/js/app.js'])
<form action="/register" method="POST">
    @csrf
    <h1>Registrati</h1>
    <div class="mb-3">
        <label for="name" class="form-label">Nome</label>
        <input name="name" type="text" class="form-control" id="name">
        @error('nome')
            <span class="small text-danger">{{ $message }}</span>
        @enderror
    </div>
    <div class="mb-3">
        <label for="email" class="form-label">Email</label>
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
    <div class="mb-3">
        <label for="password_confirmation" class="form-label">Conferma password</label>
        <input name="password_confirmation" type="password" class="form-control" id="password_confirmation">
        @error('password_confirmation')
            <span class="small text-danger">{{ $message }}</span>
        @enderror
    </div>
    <div class="mb-3 form-check">
        <input type="checkbox" class="form-check-input" id="exampleCheck1">
        <label class="form-check-label" for="exampleCheck1">Check me out</label>
    </div>
    <button type="submit" class="btn btn-primary">Register</button>
</form>
