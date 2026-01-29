<!DOCTYPE html>
<html>
<head><title>Đăng ký tài khoản</title></head>
<body>
    <h2>Form Đăng Ký</h2>
    <form action="{{ route('auth.check') }}" method="POST">
        @csrf
        <label>Username:</label> <input type="text" name="username" required><br><br>
        <label>Password:</label> <input type="password" name="password" required><br><br>
        <label>Re-pass:</label> <input type="password" name="repass" required><br><br>
        <label>MSSV:</label> <input type="text" name="mssv" required><br><br>
        <label>Lớp:</label> <input type="text" name="lopmonhoc" required><br><br>
        <label>Giới tính:</label> <input type="text" name="gioitinh" required><br><br>
        <button type="submit">Sign In</button>
    </form>
</body>
</html>