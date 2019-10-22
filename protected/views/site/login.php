
<div class="signin-row row">
                    <div class="span5"></div>
                    <div class="span6">
                        <div class="container-signin">
                            <legend  style="text-align:center">LOGIN SISTEM</legend>
                            <?php $form=$this->beginWidget('CActiveForm', array(
                                'id'=>'login-form',
                                'action'=>Yii::app()->createUrl('site/login'),
                                'enableAjaxValidation'=>true,
                            )); ?>
                                <div class="form-inner">
                                    <div class="input-prepend">
									<?php echo $form->labelEx($model,'username'); ?>
									<?php echo $form->textField($model,'username'); ?>
									<?php echo $form->error($model,'username'); ?>
                                    </div>

                                    <div class="input-prepend">
										<?php echo $form->labelEx($model,'password'); ?>
										<?php echo $form->passwordField($model,'password'); ?>
										<?php echo $form->error($model,'password'); ?>
                                    </div>
                                    <!-- <label class="checkbox" for='remember_me'>Remember me
                                        <input type='checkbox' id='remember_me'/>
                                    </label> -->
                                </div>
                                <footer class="signin-actions">
								<?php echo CHtml::submitButton('Login'); ?>
                                </footer>
                                <?php $this->endWidget(); ?>
                        </div>
                    </div>
                    <div class="span4"></div>
				</div>
			
