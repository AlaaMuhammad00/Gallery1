<link rel="stylesheet" type="text/css" href= "<?php echo base_url("css/form.style.css");?>">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js" integrity="sha384-cn7l7gDp0eyniUwwAZgrzD06kc/tftFf19TOAs2zVinnD/C7E91j9yyk5//jjpt/" crossorigin="anonymous"></script>
<?php $validation =  \Config\Services::validation(); ?>
  <div class=" row mt-3">
    <div class="col-sm-8 mt-3">
    <div class="box-responsive-md  m-5 shadow-sm p-4 mb-4 bg-light">
    <form method="post" enctype="multipart/form-data" action=create >
    <?= csrf_field() ?>
    <table class="table p-5 border-light">
      <div class="col-md-5">
        <tr class="tr">
        <td>Enter price</td>
        <td> <input type="text" class="form-control <?php if($validation->getError('price')): ?>is-invalid<?php endif ?>" name="price" placeholder="price" value="<?php echo set_value('price'); ?>"/><td>
          <?php if ($validation->getError('price')): ?>
            <div class="invalid-feedback">
            <?= $validation->getError('price') ?>
          </div>
          <?php endif; ?>
        </tr>
          </div>
      <div class="col-md-5">
        <tr>
        <td>Enter type</td>
        <td> <input type="text" class="form-control <?php if($validation->getError('type')): ?>is-invalid<?php endif ?>" name="type" placeholder="type" value="<?php echo set_value('type'); ?>"/></td>
          <?php if ($validation->getError('type')): ?>
            <div class="invalid-feedback">
            <?= $validation->getError('type') ?>
            </div>
          <?php endif; ?>
        </tr>
      </div>
      <div class="col-md-5"> 
        <tr>
        <td>Select frontImage</td>
        <td>
        <input type="file" class="form-control <?php if($validation->getError('fimage')): ?>is-invalid<?php endif ?>" name="fimage"/>
          <?php if ($validation->getError('fimage')): ?>
            <div class="invalid-feedback">
            <?= $validation->getError('fimage') ?>
            </div>
          <?php endif; ?>
        </td>
        </tr>
      <div>
      <div class="col-md-5">
        <tr>
        <td>Select backtImage</td>
        <td>
        <input type="file" class="form-control <?php if($validation->getError('bimage')): ?>is-invalid<?php endif ?>" name="bimage"/>
          <?php if ($validation->getError('bimage')): ?>
            <div class="invalid-feedback">
            <?= $validation->getError('bimage') ?>
            </div>
          <?php endif; ?>
        </td>
        </tr>
      </div>
      <div class="col-md-6">
        <tr>
        <td colspan="2"><input type="submit" name="submit" value="Upload" class= "btn btn-info btn-lg d-grid gap-2 col-4 mx-auto"></td>
        </tr>
      </div>
    </table>
    </form>
    </div>
    </div>
  </div>

