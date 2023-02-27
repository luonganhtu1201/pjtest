    <?php require_once('./header.php') ?>
    <div class="main-panel">
        <div class="content-wrapper">
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">Update User ---</h4>
              <div class="row">
                <div class="col-12">
                  <div class="table-responsive">
                    <a href="?admin=admin&mod=user&act=list" class="btn btn-primary">Quay lại</a>
                    <form action="?admin=admin&mod=user&act=store" method="POST" role="form" enctype="multipart/form-data">
                        <div class="form-group">
                            <label>Name</label>
                            <input type="text" class="form-control" id="" placeholder="" name="name" required>
                        </div>
                        <div class="form-group">
                            <label>Email</label>
                            <input type="email" class="form-control" id="" placeholder="" name="email" required>
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" class="form-control" id="" placeholder="" name="password" required>
                        </div>
                        <div class="form-group">
                            <label>Avatar</label>
                            <input type="file" name="avatar" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>Permission</label>
                            <select class="form-select form-control" aria-label="Default select example" name="permission">
                              <option value="1">Admin</option>
                              <option value="2">Mini Admin</option>
                          </select>
                      </div>
                      <button type="submit" class="btn btn-primary">EDIT</button>
                  </form>
              </div>
          </div>
      </div>
  </div>
</div>
</div>
<?php require_once('./footer.php') ?>