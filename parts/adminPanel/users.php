<table class="table table-striped">
    <caption><h2>Users</h2></caption>
    <tr>
        <th>User</th>
        <th>Controls</th>
    </tr>
    <?php foreach($users as $i => $user): ?>
    <tr>
        <td><?= $user[0]; ?></td>
        <td>
            <form method="POST">
                    <button title="Delete User" name="deleteUser" value="<?= $i; ?>" type="submit" class="btn btn-danger btn-sm"><i class="icon-trash"></i></button>
            </form>
        </td>
    </tr>
    <?php endforeach; ?>
</table>
<div class="row">
    <div class="col-md-12">
        <div class="panel panel-default">
            <div class="panel-heading"><h2>Add new user</h2></div>
            <div class="panel-body">
                <?php if($addUserInfo === true): ?>
                <p class="alert alert-success">User was added</p>
                <?php elseif($addUserInfo !== ''): ?>
                <p class="alert alert-danger"><?= $addUserInfo; ?></p>
                <?php endif; ?>
                <form method="POST">
                    <div class="form-group">
                        <label for="login">Login</label>
                        <input class="form-control" type="text" name="login" id="login">
                    </div>
                    <div class="form-group">
                        <label for="pass">Password</label>
                        <input class="form-control" type="password" name="pass" id="pass">
                    </div>
                    <div class="form-group">
                        <label for="confPass">Confirm password</label>
                        <input class="form-control" type="password" name="confPass" id="confPass">
                    </div>
                    <input class="btn btn-primary" type="submit" value="Add user" name="addNewUser">
                </form>
            </div>
        </div>
    </div>
</div>