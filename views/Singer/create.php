    <?php require_once('./header.php') ?>
    <div class="main-panel">
        <div class="content-wrapper">
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">Add singer ---</h4>
              <div class="row">
                <div class="col-12">
                  <div class="table-responsive">
                    <a href="?admin=admin&mod=singer&act=list" class="btn btn-primary">Quay lại</a>
                    <form action="?admin=admin&mod=singer&act=store" method="POST" role="form" enctype="multipart/form-data">
                        <div class="form-group">
                            <label>Name</label>
                            <input type="text" class="form-control" id="" placeholder="" name="name" required>
                        </div>
                        <div class="form-group">
                            <label>Description</label>
                            <input type="text" class="form-control" id="" placeholder="" name="description" required>
                        </div>
                        <div class="form-group">
                            <label>Real Name</label>
                            <input type="text" class="form-control" id="" placeholder="" name="real_name" required>
                        </div>
                        <div class="form-group">
                            <label>BirthDay</label>
                            <input type="date" class="form-control" id="" placeholder="" name="birth" required>
                        </div>
                        <div class="form-group">
                            <label>Album Information</label>
                            <input type="text" class="form-control" id="" placeholder="" name="album_information" required>
                        </div>
                        <div class="form-group">
                            <label>Avatar</label>
                            <input type="file" name="avatar" class="form-control" required>
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