<link type="text/css" rel="stylesheet" href="./public/css/register.css">
<section class="menuss">
  <form class="formaddemp" action="index.php?controller=dish&action=editDish" method="POST" enctype="multipart/form-data">
    <p style="font-size:30px;margin:10px;padding:20px;">Sửa món</p>

    <div class="mb-3">
      <label class="form-label">Tên món</label>
      <input type="text" name="dishname" id="dishname" class="form-control">
    </div>

    <div class="mb-3">
      <label class="form-label">Giá</label>
      <input type="text" name="price" class="form-control" id="price" value="">
    </div>

    <div class="mb-3">
      <label class="form-label">Mô tả</label>
      <input type="text" name="description" class="form-control" id="description">
    </div>

    <div class="mb-3">
      <label class="form-label">Loại</label>
      <select id="form-type" name="type" class="selectt">
        <option value="food">Food</option>
        <option value="drink">Drink</option>
      </select>
    </div>
    <script>
      $("#dishname").val('<?= $data['dish']['DISHNAME']?>');
      $("#price").val('<?= $data['dish']['PRICE'];?>');
      $("#description").val('<?= $data['dish']['DESCRIP'];?>');
      $("#form-type").val("<?= $data['dish']['TYPEDISH']?>").change();
    </script>
    <div class="mb-3">
      <label class="form-label">Ảnh</label>
      <input type="file" name="image" class="form-control">
    </div>

    <div class="clear"></div>
    <button type="submit" name="btneditdish">Sửa</button>
    <br><br>

    <?php if (isset($data["result"])){ ?>
      <div class="notiregister"><?php 
      if($data["result"]=="true"){
      ?> <h4><?= "Sửa thành công"?> </h4><?php
      } else{
      ?><h4 class="error"><?= "Có gì đó không đúng, vui lòng nhập lại. Nếu không có gì bất thường, hãy thử đổi tên tệp";?></h4> <?php 
      }
      ?></div>
    <?php } ?>

</form>
</section>