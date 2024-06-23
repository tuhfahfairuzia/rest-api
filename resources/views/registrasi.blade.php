<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Registrasi</title>
  </head>
<body>
  <h1>Registrasi</h1>
  <form method="POST" action="{{ route('register') }}">
    @csrf
    <div class="form-group">
      <label for="name">Nama</label>
      <input type="text" name="name" id="name" class="form-control" required>
      @error('name')
        <span class="text-danger">{{ $message }}</span>
      @enderror
    </div>
    <div class="form-group">
      <label for="email">Email</label>
      <input type="email" name="email" id="email" class="form-control" required>
      @error('email')
        <span class="text-danger">{{ $message }}</span>
      @enderror
    </div>
    <div class="form-group">
      <label for="password">Password</label>
      <input type="password" name="password" id="password" class="form-control" required>
      @error('password')
        <span class="text-danger">{{ $message }}</span>
      @enderror
    </div>
    <div class="form-group">
      <label for="confirm_password">Konfirmasi Password</label>
      <input type="password" name="confirm_password" id="confirm_password" class="form-control" required>
    </div>
    <button type="submit" class="btn btn-primary">Registrasi</button>
  </form>
</body>
</html>
