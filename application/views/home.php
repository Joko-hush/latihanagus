<div class="container">
    <h1>Latihan</h1>
    <div class="table-responsive">
        <table class="table table-bordered" id="myTable">
            <thead class="text-center">
                <tr>
                    <th>Nama</th>
                    <th>Umur</th>
                    <th>Alamat</th>
                </tr>
            </thead>
            <tbody class="text-center">
                <?php foreach ($identitas as $i) : ?>
                    <tr>
                        <td><?= $i['nama']; ?></td>
                        <td><?= $i['umur']; ?></td>
                        <td><?= $i['alamat']; ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>

</div>