
<select name="specialty" id="specialty">

<? foreach ($cat as $m => $name)  { ?>
 <option value="<?= $m; ?>" selected="selected"><?= $name; ?></option>
 <? } ?>
 <option selected  value="">Выбирите категорию </option>
</select>

