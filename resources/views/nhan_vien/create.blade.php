
<div class="container">
                   <h1>Thêm nhân viên mới</h1>
                   <form method="POST" action="{{ route('nhanvien.store') }}">
                                      @csrf
                                      <div class="form-group">
                                                         <label for="ten">Tên nhân viên:</label>
                                                         <input type="text" class="form-control" name="ten"
                                                                            required>
                                      </div>
                                      <div class="form-group">
                                                         <label for="vi_tri_lam_viec">Vị trí làm việc:</label>
                                                         <input type="text" class="form-control" name="vi_tri_lam_viec" required>
                                      </div>
                                      <div class="form-group">
                                                         <label for="luong">Lương:</label>
                                                         <input type="number" class="form-control" name="luong"
                                                                            required>
                                      </div>
                                      <div class="form-check">
                                                         <label for="phong_ban">Phòng ban:</label>
                                                         <input type="text" class="form-control" name="phong_ban" required>
                                      </div>
                                      <button type="submit" class="btn btn-primary">Lưu</button>
                   </form>
</div>
