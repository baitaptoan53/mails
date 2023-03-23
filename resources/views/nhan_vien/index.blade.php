<table class="table table-hover">
                   <a href="{{route('nhanvien.create')}}">Thêm mới</a>
                   <thead>
                                      <tr>
                                                         <th>ID</th>
                                                         <th>Vị trí làm việc</th>
                                                         <th>Lương</th>
                                                         <th>Phòng ban</th>
                                                         <th></th>
                                                         <th></th>
                                                         <th></th>
                                      </tr>
                   </thead>
                   <tbody>
                                      @foreach ($nhanviens as $nhanvien)
                                      <tr>
                                                         <td>{{ $nhanvien->id }}</td>
                                                         <td>{{ $nhanvien->ten }}</td>
                                                         <td>{{ $nhanvien->vi_tri_lam_viec }}</td>
                                                         <td>{{ $nhanvien->luong }}</td>
                                                         <td>{{ $nhanvien->phong_ban }}</td>
                                                         <td><a href="{{ route('nhanvien.edit', $nhanvien->id) }}"
                                                                                               class="btn btn-primary">Sửa</a>
                                                         </td>
                                                         <td><a href="{{ route('nhanvien.show', $nhanvien->id) }}"
                                                                                               class="btn btn-primary">Xem</a>
                                                         </td>
                                                         <td>
                                                                            <form method="POST"
                                                                                               action="{{ route('nhanvien.destroy', $nhanvien->id) }}">
                                                                                               @csrf
                                                                                               @method('DELETE')
                                                                                               <button type="submit"
                                                                                                                  class="btn btn-danger"
                                                                                                                  onclick="return confirm('Bạn có chắc muốn xóa nhân viên này?')">Xóa</button>
                                                                            </form>
                                                         </td>
                                      </tr>
                                      @endforeach
                   </tbody>
</table>