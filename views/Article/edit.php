    <?php require_once('./header.php') ?>
    <div class="main-panel">
        <div class="content-wrapper">
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">Cập nhật---</h4>
              <div class="row">
                <div class="col-12">
                  <div class="table-responsive">
                    <a href="index.php?admin=admin&mod=article&act=list" class="btn btn-primary">Quay lại</a>
                    <form action="?admin=admin&mod=article&act=update" method="POST" role="form" enctype="multipart/form-data">
                        <div class="form-group">
                            <label>Tiêu đề</label>
                            <input type="hidden" class="form-control" id="" placeholder="" name="id" value="<?= $article['id'] ?>">
                            <input type="text" class="form-control" id="" placeholder="" name="title" value="<?= $article['title'] ?>" required>
                        </div>
                        <div class="form-group">
                            <label>Nội dung</label>
                            <textarea name="content" id="editor" class="form-control" cols="30" rows="10" required>
                                <?= $article['content'] ?>
                            </textarea>
                        </div>
                        <div class="form-group">
                            <input type="text" name="user_id" class="form-control" id="" value="<?= $_SESSION['auth']['id']?>" hidden>
                        </div>
                        <div class="form-group">
                            <label>Thumbnail</label><br>
                            <i style="font-size: 12px">(Bỏ trống nếu không muốn update)</i>
                            <input type="file" name="thumbnail" class="form-control">
                        </div>
                        <button type="submit" class="btn btn-primary">Cập nhật</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
<?php require_once('./footer.php') ?>