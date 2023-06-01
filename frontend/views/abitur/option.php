<?php
/**
 * Created by PhpStorm.
 * User: Developer
 * Date: 28.08.2022
 * Time: 0:26
 */
?>
    <option value="null">Tanlash</option>
<?php foreach ($data  as $item): ?>
    <option value="<?=$item['id']?>"><?=$item['name_uz']?></option>
<?php endforeach;?>