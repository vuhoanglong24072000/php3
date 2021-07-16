
<label for="">tuổi:</label> {{$tuoi}} <br>
<label for="">Giới tính:</label>{{$radio}} <br>

<label for="">Kết hôn:</label>

<?php
    if (isset($dakethon)){
        echo 'đã kết hôn';
    }
    else{
        echo 'chưa kết hôn';
    }
?>
