<h1>Thông tin nhân viên</h1>
<div class="container">
    <div class="form-group">
        <label for="name">Tên nhân viên</label>
        <input type="text" class="form-control" name="ten" value="{{ $nhanvien->ten }}" disabled>
    </div>
    <div class="form-group">
        <label for="email">Vị trí làm việc: </label>
        <input type="email" class="form-control" name="vi_tri_lam_viec" value="{{ $nhanvien->vi_tri_lam_viec }}" disabled>
    </div>
    <div class="form-check">
        <label for="role">Lương</label>
        <input type="number" class="form-control" name="luong" value="{{ $nhanvien->luong }}" disabled>
    </div>
    <div class="form-group">
        <label for="text">Phòng ban</label>
        <input type="text" class="form-control" name="phong_ban" value="{{ $nhanvien->phong_ban }}" disabled>
    </div>