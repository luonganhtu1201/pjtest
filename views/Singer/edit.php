    <?php require_once('./header.php') ?>
    <div class="main-panel">
        <div class="content-wrapper">
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">Cập nhật ---</h4>
              <div class="row">
                <div class="col-12">
                  <div class="table-responsive">
                    <a href="?admin=admin&mod=singer&act=list" class="btn btn-primary">Quay lại</a>
                    <form action="?admin=admin&mod=singer&act=update" method="POST" role="form" enctype="multipart/form-data">
                        <div class="form-group">
                            <label>ID</label>
                            <input type="hidden" class="form-control" id="" placeholder="" name="id" value="<?= $singer['id']?>">
                            <input type="text" class="form-control" id="" placeholder="" name="id" value="<?= $singer['id']?>" disabled>
                        </div>
                        <div class="form-group">
                            <label>Nghệ danh</label>
                            <input type="text" class="form-control" id="" placeholder="" name="name" value="<?= $singer['name']?> " required>
                        </div>
                        <div class="form-group">
                            <label>Mô tả</label>
                            <input type="text" class="form-control" id="" placeholder="" name="description" value="<?= $singer['description']?>" required>
                        </div>
                        <div class="form-group">
                            <label>Tên thật</label>
                            <input type="text" class="form-control" id="" placeholder="" name="real_name" value="<?= $singer['real_name']?>" required>
                        </div>
                        <div class="form-group">
                            <label>Ngày sinh</label>
                            <input type="date" class="form-control" id="" placeholder="" name="birth" value="<?= $singer['birth']?>" required>
                        </div>
                        <div class="form-group">
                            <label>Thông tin Albums</label>
                            <input type="text" class="form-control" id="" placeholder="" name="album_information" value="<?= $singer['album_information']?>" required>
                        </div>
                        <div class="form-group">
                            <label>Avatar</label><br>
                            <i style="font-size: 12px">(Bỏ trống nếu không muốn update)</i>
                            <input type="file" name="avatar" class="form-control" value="<?= $singer['avatar']?>">
                        </div>
                        <button type="submit" class="btn btn-primary">Cập nhật</button>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
<?php require_once('./footer.php') ?>