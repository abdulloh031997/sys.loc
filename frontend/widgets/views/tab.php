<div class="my-3">
<ul class="nav nav-tabs mb-3 d-flex justify-content-center " id="ex-with-icons" role="tablist">
  <li class="nav-item " role="presentation">
    <a class="nav-link <?= Yii::$app->request->url == '/abitur/index' ? 'active' : '' ?> text-center font-weight-bold"  href="/abitur/index"><b><i class="fas fa-dashboard fa-fw me-2"></i><?=Yii::t('template','Shaxsiy maʼlumotlar')?></b></a>
  </li>
  <li class="nav-item" role="presentation">
    <a class="nav-link <?= Yii::$app->request->url == '/abitur/create' ? 'active' : '' ?> text-center font-weight-bold"  href="/abitur/create"><b><i class="fas fa-save fa-fw me-2"></i><?=Yii::t('template','Shartnoma olish')?></b></a>
  </li>
  <li class="nav-item" role="presentation">
    <a class="nav-link <?= Yii::$app->request->url == '/abitur/tests' || Yii::$app->request->url == '/abitur/test' ? 'active' : ''  ?>  text-center font-weight-bold" href="/abitur/test"><b><i class="fas fa-check fa-fw me-2"></i><?=Yii::t('template','Mening imtihonlarim')?></b></a>
  </li>
</ul>
</div>