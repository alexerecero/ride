<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">

    <div class="carousel-inner">
        <div class="item active">
            <img src="<?php echo Yii::app()->request->baseUrl; ?>/css/51.jpg" class="img-responsive" alt="Imagen responsive">
            <div id="inicio" class="carousel-caption" style="padding-bottom: 20%">
                <div class="row">
                    <div class="col-lg-6 col-lg-offset-3 col-sm-6 col-sm-offset-3">
                        <img id="logoP" onclick="location.href='<?php echo Yii::app()->request->baseUrl; ?>/site/index'" src="<?php echo Yii::app()->request->baseUrl; ?>/css/logo.png" class="img-responsive" alt="Imagen responsive">


                        <?php $form=$this->beginWidget('CActiveForm', array(
                            'id'=>'login-form',
                            'enableClientValidation'=>true,
                            'clientOptions'=>array(
                                'validateOnSubmit'=>true,
                            ),
                        )); ?>
                        <div class="form-group">

                            <?php echo $form->labelEx($model,'username'); ?>
                            <?php echo $form->textField($model,'username'); ?>
                            <?php echo $form->error($model,'username'); ?>

                        </div>
                        <div class="form-group">
                            <?php echo $form->labelEx($model,'password'); ?>
                            <?php echo $form->passwordField($model,'password'); ?>
                            <?php echo $form->error($model,'password'); ?>
                        </div>
                        <div class="form-group">
                            <?php echo $form->checkBox($model,'rememberMe'); ?>
                            <?php echo $form->label($model,'rememberMe'); ?>
                            <?php echo $form->error($model,'rememberMe'); ?>
                        </div>
                        <button type="submit">Entrar</button>
<!--                        --><?php //echo CHtml::submitButton('Login'); ?>
                        <?php $this->endWidget(); ?>






                    </div>
                </div>
            </div>
        </div>
    </div><!-- Wrapper for slides -->


</div>

















