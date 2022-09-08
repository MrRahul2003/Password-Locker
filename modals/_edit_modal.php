<div class="container">
    <form class="form" action="<?php $_SERVER['PHP_SELF']?>" method="POST">
        <div class="row">
            <div class="col">
                <div class="row">
                    <div class="col">
                        <div class="form-group">
                            <label>Title</label>
                            <input class="form-control" type="text" name="title" placeholder="facebook">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="form-group">
                            <label>Email</label>
                            <input class="form-control" type="text" name="email" placeholder="user@example.com">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col mb-3">
                        <div class="form-group">
                            <label>Description</label>
                            <textarea class="form-control" rows="5" name="description"
                                placeholder="This is the username and password of my facebook website...">
                                                    </textarea>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-sm-6 mb-3">
                <div class="mb-2"><b>Change Password</b></div>
                <div class="row">
                    <div class="col">
                        <div class="form-group">
                            <label>Old Password</label>
                            <input class="form-control" type="password" name="opassword" placeholder="••••••">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="form-group">
                            <label>New Password</label>
                            <input class="form-control" type="password" name="npassword" placeholder="••••••">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col d-flex justify-content-end">
                <button name="edit" class="btn btn-primary" type="submit">Edit Now!</button>
            </div>
        </div>
    </form>
</div>