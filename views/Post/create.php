    <?php require_once('./header.php') ?>
    <div class="main-panel">
        <div class="content-wrapper">
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">Tạo mới</h4>
              <div class="row">
                <div class="col-12">
                  <div class="table-responsive">
                    <a href="?admin=admin&mod=post&act=list" class="btn btn-primary">Quay lại</a>
                    <form action="?admin=admin&mod=post&act=store" method="POST" role="form" enctype="multipart/form-data">
                        <div class="form-group">
                            <label>Tên</label>
                            <input type="text" class="form-control" id="" placeholder="" name="name" required>
                        </div>
                        <div class="form-group">
                            <label>Mô tả</label>
                            <input type="text" class="form-control" id="" placeholder="" name="description" required>
                        </div>
                        <div class="form-group">
                            <label>Lyric</label>
                            <textarea class="form-control" id="editor" placeholder="" name="song_lyric" required></textarea>
                        </div>
                        <div class="form-group" style="display: none">
                            <label>View</label>
                            <input type="text" value="1" class="form-control" id="" placeholder="" name="view" required>
                        </div>
                        <div class="form-group">
                            <label>Phong cách</label>
                            <select name="category_id" id="category_id" class="form-control">
                                <?php 
                                    foreach ($category as $cate) {
                                 ?>
                              <option value="<?= $cate['id'] ?>"><?= $cate['name'] ?></option>
                                <?php } ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Bài nhạc</label>
                            <input type="file" name="music" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>Poster bài nhạc</label>
                            <input type="file" name="avatar" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>Nghệ sĩ</label>
                            <select name="singer_id" id="singer_id" class="form-control">
                                <?php 
                                    foreach ($singer as $sin) {
                                 ?>
                              <option value="<?= $sin['id'] ?>"><?= $sin['name'] ?></option>
                                <?php } ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <input type="text" name="user_id" class="form-control" id="" value="<?= $_SESSION['auth']['id']?>" hidden>
                        </div>
                        <button type="submit" class="btn btn-primary">TẠO</button>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
<?php require_once('./footer.php') ?>