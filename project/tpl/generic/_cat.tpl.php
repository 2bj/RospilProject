
<select name="specialty" id="specialty">

<? foreach ($cat as $m => $name)  { ?>
 <option value="<?= $name; ?>" selected="selected"><?= $name; ?></option>
 <? } ?>
 <option selected  value="">Выбирите категорию </option>
</select>

