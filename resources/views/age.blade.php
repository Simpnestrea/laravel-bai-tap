<form action="{{ route('age.save') }}" method="POST">
    @csrf
    <h3>Vui lòng nhập tuổi của bạn:</h3>
    <input type="number" name="age" required>
    <button type="submit">Xác nhận</button>
</form>