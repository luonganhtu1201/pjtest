<?php require_once('./header.php') ?>
<div class="main-panel">
  <?php 
  if(isset($_COOKIE['success'])){
    ?>
    <div class="alert alert-info">
      <strong><?=$_COOKIE['success']?></strong>
    </div>
  <?php } ?>
  <?php 
  if(isset($_COOKIE['error'])){
    ?>
    <div class="alert alert-danger">
      <strong><?=$_COOKIE['error']?></strong>
    </div>
  <?php } ?>
  <div class="content-wrapper">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">List Nhạc ---</h4>
        <div class="row">
          <div class="col-12">
            <div class="table-responsive">
              <a href="?admin=admin&mod=post&act=create" class="btn btn-primary mb-3">Thêm bài nhạc mới</a>
              <table id="order-listing" class="table">
                <thead>
                  <tr>
                    <th>ID</th>
                    <th>Bài nhạc x Nghệ sĩ</th>
                    <th>Poster</th>
                    <th>Bài nhạc</th>
                    <!-- <th>Lyric</th> -->
                    <th>Hành động</th>
                  </tr>
                </thead>
                <tbody>
                  <?php foreach ($posts as $po) {
                   ?>
                   <tr>
                    <td><?= $po['id'] ?></td>
                    <td><?= $po['name'] ?> - <?= $po['description'] ?></td>
                    <td>
                      <img src="<?= "public/uploads/".$po['avatar'] ?>" width="100px" height="100px">
                    </td>
                    <td>
                      <audio controls>
                        <source src="<?= "public/uploads/Music".$po['music']?>" type="audio/mpeg">
                        </audio>
                      </td>
                      <!-- <td><?= $po['song_lyric'] ?></td> -->
                      <td>
                        <a href="?admin=admin&mod=post&act=detail&id=<?= $po['id'] ?>" class="btn btn-primary">Chi tiết</a>
                        <a href="?admin=admin&mod=post&act=edit&id=<?= $po['id'] ?>" class="btn btn-success">Sửa</a>
                        <?php if ($_SESSION['auth']['permission'] == 1 ) {
                          echo '<a href="?admin=admin&mod=post&act=delete&id='.$po['id'].'" class="btn btn-danger">Xóa</a>';
                        } ?>
                      </td>
                    </tr>
                  <?php } ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <?php require_once('./footer.php') ?>