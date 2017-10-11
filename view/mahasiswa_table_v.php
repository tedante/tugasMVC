<div class="container">
  <h2 style="color:white">Data Mahasiswa</h2>
</div>
<table class="table" style="color:white">
  <thead class="thead-inverse">
    <tr>
      <th>#</th>
      <th>NIM</th>
      <th>Nama</th>
      <th>Kelas</th>
    </tr>
  </thead>
  <tbody>
    <?php 
      $i = 1;
      foreach ($data as $row) {
    ?>
    <tr>
      <th scope="row"><?php echo $i; ?></th>
      <td><?php echo $row['nim']; ?></td>
      <td><?php echo $row['nama']; ?></td>
      <td><?php echo $row['kelas']; ?></td>
    </tr>
    <?php
      }
    ?>
  </tbody>
</table>