<!DOCTYPE html>
<html><head>
	<title></title>
</head><body>

  <h3 style="text-align: center;"> DAFTAR BUKU</h3>

	<table class="table table-bordered table-striped mt-2">
              <tr>
                  <th class="table-dark">No</th>
                  <th class="table-dark">Id Buku</th>
                  <th class="table-dark">Id Kategori</th>
                  <th class="table-dark">Judul</th>
                  <th class="table-dark">Noisbn</th>
                  <th class="table-dark">Penulis</th>
                  <th class="table-dark">Penerbit</th>
                  <th class="table-dark">Tahun</th>
                  <th class="table-dark">Stok</th>
                  <th class="table-dark">Harga Pokok</th>
                  <th class="table-dark">Harga Jual</th>
                  <th class="table-dark">PPN</th>
                  <th class="table-dark">Diskon</th>
              </tr>

              <?php

              $no=1;
              foreach ($buku as $bku ) : ?>
                <tr>
                    <td><?php echo $no++ ?></td>
                    <td><?php echo $bku->id_buku ?></td>
                    <td><?php echo $bku->id_kategori ?></td>
                    <td><?php echo $bku->judul ?></td>
                    <td><?php echo $bku->noisbn ?></td>
                    <td><?php echo $bku->penulis ?></td>
                    <td><?php echo $bku->penerbit ?></td>
                    <td><?php echo $bku->tahun_terbit ?></td>
                    <td><?php echo $bku->stok ?></td>
                    <td><?php echo $bku->harga_pokok ?></td>
                    <td><?php echo $bku->harga_jual ?></td>
                    <td><?php echo $bku->ppn ?></td>
                    <td><?php echo $bku->diskon ?></td>
                </tr>

            <?php endforeach; ?>
          </table>

	</script>
</body></html>