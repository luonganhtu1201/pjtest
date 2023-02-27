    <?php require_once('./header.php') ?>
    <div class="main-panel">
        <div class="content-wrapper">
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">Cập nhật ---</h4>
              <div class="row">
                <div class="col-12">
                  <div class="table-responsive">
                    <a href="?admin=admin&mod=post&act=list" class="btn btn-primary">Quay lại</a>
                    <form action="?admin=admin&mod=post&act=update" method="POST" role="form" enctype="multipart/form-data">
                        <div class="form-group">
                            <label>ID</label>
                            <input type="hidden" class="form-control" id="" placeholder="" name="id" value="<?= $post['id']?>">
                            <input type="text" class="form-control" id="" placeholder="" name="id" value="<?= $post['id']?>" disabled>
                        </div>
                        <div class="form-group">
                            <label>Tên</label>
                            <input type="text" class="form-control" id="" placeholder="" name="name" value="<?= $post['name']?>" required>
                        </div>
                        <div class="form-group">
                            <label>Mô tả</label>
                            <input type="text" class="form-control" id="" placeholder="" name="description" value="<?= $post['description']?>" required>
                        </div>
                        <div class="form-group">
                            <label>Lyric</label>
                            <textarea name="song_lyric" class="form-control" id="editor" cols="30" rows="10" required>
                                <?= $post['song_lyric']?>
                            </textarea>
                        </div>
                        <div class="form-group">
                            <label>Phong cách</label>
                            <select name="category_id" id="category_id" class="form-control">
                                <?php 
                                    foreach ($category as $cate) {
                                 ?>
                              <option <?php if($post['category_id']==$cate['id']) echo "selected";?> value="<?= $cate['id'] ?>"><?= $cate['name'] ?></option>
                                <?php } ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Bài nhạc</label>
                            <input type="file" name="music" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>Poster bài nhạc</label><br>
                            <i style="font-size: 12px">(Bỏ trống nếu không muốn update)</i>
                            <input type="file" name="avatar" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Nghệ sĩ</label>
                            <select name="singer_id" id="singer_id" class="form-control">
                                <?php 
                                    foreach ($singer as $sin) {
                                 ?>
                              <option <?php if($post['singer_id']==$sin['id']) echo "selected";?> value="<?= $sin['id'] ?>"><?= $sin['name'] ?></option>
                                <?php } ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <input type="text" name="user_id" class="form-control" id="" value="<?= $_SESSION['auth']['id']?>" hidden>
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