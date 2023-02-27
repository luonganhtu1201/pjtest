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
        <h4 class="card-title">Danh mục ---</h4>
        <div class="row">
          <div class="col-12">
            <div class="table-responsive">
              <a href="index.php?admin=admin&mod=category&act=create" class="btn btn-primary mb-3">Thêm danh mục mới</a>
              <table id="order-listing" class="table">
                <thead>
                  <th>ID</th>
                  <th>Tên</th>
                  <th>Mô tả</th>
                  <th>Hành động</th>
                </thead>
                <?php foreach ($categories as $cate) {
                 ?>
                 <tr>
                  <td><?= $cate ['id'] ?></td>
                  <td><?= $cate['name'] ?></td>
                  <td><?= $cate['description'] ?></td>
                  <td>
                    <a href="index.php?admin=admin&mod=category&act=detail&id=<?= $cate ['id'] ?>" class="btn btn-primary">Chi tiết</a>
                    <a href="index.php?admin=admin&mod=category&act=edit&id=<?= $cate ['id'] ?>" class="btn btn-success">Sửa</a>
                    <?php if ($_SESSION['auth']['permission'] == 1 ) {
                      echo '<a href="index.php?admin=admin&mod=category&act=delete&id='.$cate ['id'].'" class="btn btn-danger">Xóa</a>';
                    } ?>
                    
                  </td>
                </tr>
              <?php } ?>      
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<?php require_once('./footer.php') ?>