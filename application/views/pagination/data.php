<div class="alert alert-success alert-dismissible">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
    <h4><i class="icon fa fa-check"></i> Hasil Pencarian Anda!</h4>
    <?= $total_rows; ?>
</div>
<table class="table">
    <thead>
        <tr>
            <th>#</th>
            <th>Judul</th>
            <th>Email</th>
            <th>action</th>
        </tr>
    </thead>
    <tbody>
        <?php if (empty($pagination)) : ?>
            <tr>
                <td colspan="4">
                    <div class="alert alert-danger alert-dismissible">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                        <h4><i class="icon fa fa-ban"></i> Not Found!</h4>
                        data pencarian anda tidak ditemukan
                    </div>
                </td>
            </tr>
        <?php endif; ?>
        <?php
        foreach ($pagination as $page) : ?>
            <tr>
                <th><?= ++$start; ?></th>
                <td><?= $page['nama']; ?></td>
                <td><?= $page['email']; ?></td>
                <td>
                    <a href="" class="badge badge-warning">detail</a>
                    <a href="" class="badge badge-success">ubah</a>
                    <a href="" class="badge badge-danger">delete</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>
<?= $this->pagination->create_links(); ?>