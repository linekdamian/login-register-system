<div class="row text-center">
    <div class="col-lg"></div>
    <div class="col-lg">
        <form method="post" action="<?php echo url('store') ?>">
            <div class="form-group">
                <label for="exampleInputEmail1">Email address</label>
                <input type="email" class="form-control" id="email" aria-describedby="emailMessage" placeholder="Enter email">
                <small id="emailMessage" class="form-text text-danger">message</small>
            </div>

            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control" id="password" placeholder="Password">
            </div>

            <div class="form-group">
                <label for="repeatPassword">Repeat Password</label>
                <input type="password" class="form-control" id="repeatPassword" placeholder="Repeat Password">
            </div>

            <div class="form-group form-check">
                <input type="checkbox" class="form-check-input" id="rules">
                <label class="form-check-label" for="rules">
                    You must accept the rules</label>
            </div>

            <button type="submit" class="btn btn-success">Submit</button>
        </form>
    </div>
    <div class="col-lg"></div>
</div>