<a href="?menu=kk-create" role="button"> Tambah Kartu Keluarga</a>

<table>
    <thead>
    <tr>
        <th>Nomor KK</th>
        <th>Nama Kepala Keluarga</th>
    </tr>
    </thead>
    <tbody>
    <?php
    /** @var  KartuKeluarga $kk */
    foreach ($kks as $kk){
        echo '<tr>';
        echo '<td>' . $kk->getNo() . '</td>';
        echo '<td>' . $kk->getKepalaKeluarga() . '</td>';
        echo '</tr>';

    }
    ?>
    </tbody>
</table>

