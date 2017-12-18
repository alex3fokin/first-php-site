<table class="table table-striped">
    <caption><h2>Pages</h2></caption>
    <tr>
        <th>Page</th>
        <th>Controls</th>
    </tr>
    <?php foreach ($pages as $page => $pageInfo) { ?>
        <tr>
            <td><?= $pageInfo['name']; ?></td>
            <td>
                <form method="POST">
                    <a href="<?= $pageInfo['href']; ?>" target="_blank" title="See page" class="btn btn-info btn-sm"><i class="icon-eye"></i></a>
                    <a href="<?= $pageInfo['href'] . '&' . $editParam . '=1'; ?>" title="Edit page" target="_blank" class="btn btn-warning btn-sm"><i class="icon-edit"></i></a>
                    <button title="Delete Page" name="deletePage" value="<?= $page; ?>" type="submit" class="btn btn-danger btn-sm"><i class="icon-trash"></i></button>
                </form>
            </td>
        </tr>
    <?php }
    ?>
</table>
<div class="row">
    <div class="col-md-12">
        <div class="panel panel-default">
            <div class="panel-heading"><h2>Add new page</h2></div>
            <div class="panel-body">
                <form method="POST">
                    <div class="form-group">
                        <label for="nameKey">Key name</label>
                        <input class="form-control" type="text" name="nameKey" id="nameKey">
                    </div>
                    <div class="form-group">
                        <label for="nameMenu">Menu name</label>
                        <input class="form-control" type="text" name="nameMenu" id="nameMenu">
                    </div>
                    <div class="form-group">
                        <label for="title">Title</label>
                        <input class="form-control" type="text" name="title" id="title">
                    </div>
                    <input class="btn btn-primary" type="submit" value="Create" name="createNewPage">
                </form>
            </div>
        </div>
    </div>
</div>