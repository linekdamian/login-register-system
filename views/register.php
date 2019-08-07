<div class="row text-center">
    <div class="col-lg"></div>
    <div class="col-lg">
        <form method="post" action="<?= url('register.store') ?>">
            <div class="form-group">
                <label for="email">Email address</label>
                <input type="email" class="form-control" id="email" name="email" aria-describedby="emailMessage" placeholder="Enter email" value="<?php echo $old['email'] ?? null ?>">
                <?php if (isset($errors['email'])) {
                    foreach ($errors['email'] as $message) { ?>
                        <small class="text-danger"><?php echo $message ?></small><br>
                    <?php }
                } ?>
            </div>

            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                <?php if (isset($errors['password'])) {
                    foreach ($errors['password'] as $message) { ?>
                        <small class="text-danger"><?php echo $message ?></small><br>
                    <?php }
                } ?>
            </div>

            <div class="form-group">
                <label for="repeatPassword">Repeat Password</label>
                <input type="password" class="form-control" id="repeatPassword" name="repeatPassword" placeholder="Repeat Password">
                <?php if (isset($errors['repeatPassword'])) {
                    foreach ($errors['repeatPassword'] as $message) { ?>
                        <small class="text-danger"><?php echo $message ?></small><br>
                    <?php }
                } ?>
            </div>

            <div class="form-group form-check">
                <input type="checkbox" class="form-check-input" id="rules" name="rules" <?php echo $old['rules'] ? 'checked' : '' ?>>
                <label class="form-check-label" for="rules">
                    You must accept the rules</label><br>
                <?php if (isset($errors['rules'])) {
                    foreach ($errors['rules'] as $message) { ?>
                        <small class="text-danger"><?php echo $message ?></small><br>
                    <?php }
                } ?>
            </div>

            <button type="submit" class="btn btn-success">Submit</button>
        </form>
    </div>
    <div class="col-lg"></div>
</div>