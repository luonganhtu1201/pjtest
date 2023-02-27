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
          <h4 class="card-title">Nghệ sĩ---</h4>
          <div class="row">
            <div class="col-12">
              <div class="table-responsive">                   
                <a href="?admin=admin&mod=singer&act=create" class="btn btn-primary mb-3">Thêm nghệ sĩ mới</a>
                <table id="order-listing" class="table text-center">
                    <thead>
                        <th>ID</th>
                        <th>Tên</th>
                        <th>Avatar</th>
                        <th>Hành động</th>
                    </thead>
                    <?php foreach ($singers as $sg) {
                       ?>
                       <tr>
                        <td><?= $sg['id'] ?></td>
                        <td><?= $sg['name'] ?></td>
                        <td>
                            <img src="<?= "public/uploads/".$sg['avatar'] ?>" width="100px" height="100px" style="border-radius: 50%;">
                        </td>
                        <td>
                            <a href="?admin=admin&mod=singer&act=detail&id=<?= $sg['id'] ?>" class="btn btn-primary">Chi tiết</a>
                            <a href="?admin=admin&mod=singer&act=edit&id=<?= $sg['id'] ?>" class="btn btn-success">Sửa</a>
                            <?php if ($_SESSION['auth']['permission'] == 1 ) {
                              echo '<a href="?admin=admin&mod=singer&act=delete&id='.$sg['id'].'" class="btn btn-danger">Xóa</a>';
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