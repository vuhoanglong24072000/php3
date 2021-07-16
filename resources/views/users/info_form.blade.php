<form action="{{route('save.info')}}" method = "get">
    <div>
        <label for="">Tuổi</label>
        <input type="text" name="tuoi" id="">
    </div>

    <div>
        <label for="">Giới Tính:</label><br>
        <label for="">Nam</label><input type="radio" name="radio" id="" value = "Nam">
        <label for="">Nữ</label><input type="radio" name="radio" id="" value = "Nữ">
        <label for="">Khác</label><input type="radio" name="radio" id="" value = "Khác">
    </div>

    <div>
        <label for="">Đã kết hôm hay chưa</label>
        <input type="checkbox" id="" name="dakethon" value = "đã kết hôn">
    </div>

    <div>
        <button type="submit">Lưu</button>
    </div>
</form>