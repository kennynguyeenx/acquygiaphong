<h1><img src="<?= base_url('assets/imgs/brands.jpg') ?>" class="header-img" style="margin-top:-3px;"> Hãng ắc quy</h1>
<hr>
<div class="row">
    <div class="col-sm-6 col-md-4">
        <a href="javascript:void(0);" data-toggle="modal" data-target="#addPage" class="btn btn-default" style="margin-bottom:10px;">Thêm hãng mới</a>
        <?php if (!empty($brands)) {
            ?>
            <ul class="list-group list-none">
                <?php
                foreach ($brands as $brand) {
                    ?>
                    <li class="list-group-item">
                        <?= $brand['name'] ?>
						<a href="?delete=<?= $brand['id'] ?>" class="pull-right confirm-delete">X</a>
                    </li>
                <?php }
                ?>
            </ul>
        <?php } else {
        ?>
		<div class="alert alert-info">Chưa có dữ liệu</div>
		<?php } ?>
    </div>
</div>
<div class="modal fade" id="addPage" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <form action="" method="POST">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Thêm hãng mới</h4>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="name">Tên hãng</label>
                        <input type="text" name="name" class="form-control" id="name">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Hủy</button>
                    <button type="submit" class="btn btn-primary">Thêm</button>
                </div>
            </form>
        </div>
    </div>
</div>