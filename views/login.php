<div class="row text-center">
    <div class="col-lg"></div>
    <div class="col-lg">
        <form method="post" action="<?= url('authorize') ?>">
            <div class="form-group">
                <label for="email">Email address</label>
                <input type="email" class="form-control" id="email" name="email" aria-describedby="emailMessage" placeholder="Enter email">
                <?php if (isset($errors['email'])) {
                    foreach ($errors['email'] as $message) { ?>
                        <small class="text-danger"><?= $message ?></small><br>
                    <?php }
                } ?>
            </div>

            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                <?php if (isset($errors['password'])) {
                    foreach ($errors['password'] as $message) { ?>
                        <small class="text-danger"><?= $message ?></small><br>
                    <?php }
                } ?>
            </div>
            <?php if (isset($errors['failed'])) {
                foreach ($errors['failed'] as $message) { ?>
                    <p class="text-danger"><?= $message ?></p><br>
                <?php }
            } ?>

            <button type="submit" class="btn btn-danger">Login</button>
        </form>
    </div>
    <div class="col-lg"></div>
</div>