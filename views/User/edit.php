    <?php require_once('./header.php') ?>
    <div class="main-panel">
        <div class="content-wrapper">
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">Cập nhật người dùng ---</h4>
              <div class="row">
                <div class="col-12">
                  <div class="table-responsive">
                    <a href="?admin=admin&mod=user&act=list" class="btn btn-primary">Quay lại</a>
                    <form action="?admin=admin&mod=user&act=update" method="POST" role="form" enctype="multipart/form-data">
                        <div class="form-group">
                            <label>ID</label>
                            <input type="hidden" class="form-control" id="" placeholder="" name="id" value="<?= $user['id']?>">
                            <input type="text" class="form-control" id="" placeholder="" name="id" value="<?= $user['id']?>" disabled>
                        </div>
                        <div class="form-group">
                            <label>Tên</label>
                            <input type="text" class="form-control" id="" placeholder="" name="name" value="<?= $user['name']?> " required>
                        </div>
                        <div class="form-group">
                            <label>Email</label>
                            <input type="email" class="form-control" id="" placeholder="" name="email" value="<?= $user['email']?>" required>
                        </div>
                        <div class="form-group">
                            <label>Mật khẩu</label>
                            <input type="password" class="form-control" id="" placeholder="" name="password" value="" required>
                        </div>
                        <div class="form-group">
                            <label>Avatar</label><br>
                            <i style="font-size: 12px">(Bỏ trống nếu không muốn update)</i>
                            <input type="file" name="avatar" class="form-control" value="<?= $user['avatar']?>">
                        </div>
                        <div class="form-group">
                            <label>Quyền</label>
                            <select class="form-select form-control" aria-label="Default select example" name="permission">
                              <?php 
                              foreach ($users as $us) {

                               ?>
                               <option <?php if ($user['permission']==$us['permission']) {
                                   echo "selected";
                               }?> value="<?=$us['permission']?>"><?php if ($us['permission']==1){
                                echo "Admin";
                            }else{
                                echo "Mini Admin";
                            }?></option>
                        <?php } ?>
                    </select>
                </div>
                <button type="submit" class="btn btn-primary">Sửa</button>
            </form>
        </div>
    </div>
</div>
</div>
</div>
</div>
<?php require_once('./footer.php') ?>