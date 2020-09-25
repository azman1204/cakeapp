<table>
    <tr>
        <td></td>
        <td></td>
        <td></td>
    </tr>
    <?php foreach ($films as $film) : ?>
    <tr>
        <td><?= $no++ ?></td>
        <td><?= $film->title ?></td>
        <td><?= $film->description ?></td>
    </tr>
<?php endforeach; ?>
</table>