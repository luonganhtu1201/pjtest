    <?php require_once('./header.php') ?>
    <div class="main-panel">
        <div class="content-wrapper">
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">Thêm mới ---</h4>
              <div class="row">
                <div class="col-12">
                  <div class="table-responsive">
                    <a href="index.php?admin=admin&mod=category&act=list" class="btn btn-primary">Quay lại</a>
                    <form action="/php27.zent/nhom/Bai2/index.php?admin=admin&mod=category&act=store" method="POST" role="form" enctype="multipart/form-data">
                        <div class="form-group">
                            <label>Tên</label>
                            <input type="text" class="form-control" id="" placeholder="" name="name" required> 
                        </div>
                        <div class="form-group">
                            <label>Mô tả</label>
                            <input type="text" class="form-control" id="" placeholder="" name="description" required>
                        </div>
                        <button type="submit" class="btn btn-primary">CREATE</button>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
<?php require_once('./footer.php') ?>