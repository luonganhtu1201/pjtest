    <?php require_once('./header.php') ?>
    <div class="main-panel">
        <div class="content-wrapper">
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">Chi tiết ---</h4>
              <div class="row">
                <div class="col-12">
                  <div class="table-responsive">
                    <a href="index.php?admin=admin&mod=category&act=list" class="btn btn-primary">Quay lại</a>
			 		<table class="table text-center">
			 			<thead>
			                <th>ID</th>
			                <th>Tên</th>
			                <th>Slug</th>
			                <th>Mô tả</th>
			                <th>Ngày tạo</th>
			            </thead>
			 			<tr>
			 				<td><?= $category['id'] ?></td>
			 				<td><?= $category['name'] ?></td>
			 				<td><?= $category['slug'] ?></td>
			 				<td><?= $category['description'] ?></td>
			 				<td><?= $category['created_at'] ?></td>
			 			</tr>
			 		</table>
                    
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
<?php require_once('./footer.php') ?>