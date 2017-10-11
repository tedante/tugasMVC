<form method="POST" action="index.php?controller=mahasiswa&arg_menu=insert_proses">
  <div class="form-group">
    <label for="exampleInputEmail1">NIM</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="NIM" name="nim" required>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Nama</label>
    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Nama" name="nama" required>
  </div>
  <div class="form-group">
    <label for="exampleFormControlSelect1">Kelas</label>
    <select class="form-control" id="exampleFormControlSelect1" name="kelas" required>
      <option value="Pend. Ilmu Komputer">Pend. Ilmu Komputer</option>
      <option value="Ilmu Komputer">Ilmu Komputer</option>
    </select>
  </div>
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>