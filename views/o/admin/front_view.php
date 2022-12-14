<?php
/**
 * Dbs Students (dbs-students)
 * @var $this AdminController
 * @var $model DbsStudents
 *
 * @author Putra Sudaryanto <putra@ommu.co>
 * @contact (+62)856-299-4114
 * @copyright Copyright (c) 2016 Ommu Platform (www.ommu.co)
 * @created date 27 July 2016, 02:52 WIB
 * @link https://github.com/ommu/PSB
 *
 */

	$this->breadcrumbs=array(
		'Dbs Students'=>array('manage'),
		$model->student_id,
	);
?>

<?php //begin.Messages ?>
<?php
if(Yii::app()->user->hasFlash('success'))
	echo $this->flashMessage(Yii::app()->user->getFlash('success'), 'success');
?>
<?php //end.Messages ?>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		array(
			'name'=>'student_id',
			'value'=>$model->student_id,
			//'value'=>$model->student_id != '' ? $model->student_id : '-',
		),
		array(
			'name'=>'status',
			'value'=>$model->status == '1' ? CHtml::image(Yii::app()->theme->baseUrl.'/images/icons/publish.png') : CHtml::image(Yii::app()->theme->baseUrl.'/images/icons/unpublish.png'),
			//'value'=>$model->status,
		),
		array(
			'name'=>'register_id',
			'value'=>$model->register_id,
			//'value'=>$model->register_id != '' ? $model->register_id : '-',
		),
		array(
			'name'=>'student_nik',
			'value'=>$model->student_nik,
			//'value'=>$model->student_nik != '' ? $model->student_nik : '-',
		),
		array(
			'name'=>'student_name',
			'value'=>$model->student_name,
			//'value'=>$model->student_name != '' ? $model->student_name : '-',
		),
		array(
			'name'=>'student_nickname',
			'value'=>$model->student_nickname,
			//'value'=>$model->student_nickname != '' ? $model->student_nickname : '-',
		),
		array(
			'name'=>'birth_city',
			'value'=>$model->birth_city,
			//'value'=>$model->birth_city != '' ? $model->birth_city : '-',
		),
		array(
			'name'=>'birth_date',
			'value'=>!in_array($model->birth_date, array('0000-00-00','1970-01-01','0002-12-02','-0001-11-30')) ? $this->dateFormat($model->birth_date, 'full', false) : '-',
		),
		array(
			'name'=>'gender',
			'value'=>$model->gender,
			//'value'=>$model->gender != '' ? $model->gender : '-',
		),
		array(
			'name'=>'status_social',
			'value'=>$model->status_social,
			//'value'=>$model->status_social != '' ? $model->status_social : '-',
		),
		array(
			'name'=>'colloquial',
			'value'=>$model->colloquial,
			//'value'=>$model->colloquial != '' ? $model->colloquial : '-',
		),
		array(
			'name'=>'transfer_status',
			'value'=>$model->transfer_status,
			//'value'=>$model->transfer_status != '' ? $model->transfer_status : '-',
		),
		array(
			'name'=>'transfer_from',
			'value'=>$model->transfer_from != '' ? $model->transfer_from : '-',
			//'value'=>$model->transfer_from != '' ? CHtml::link($model->transfer_from, Yii::app()->request->baseUrl.'/public/visit/'.$model->transfer_from, array('target' => '_blank')) : '-',
			'type'=>'raw',
		),
		array(
			'name'=>'transfer_reason',
			'value'=>$model->transfer_reason != '' ? $model->transfer_reason : '-',
			//'value'=>$model->transfer_reason != '' ? CHtml::link($model->transfer_reason, Yii::app()->request->baseUrl.'/public/visit/'.$model->transfer_reason, array('target' => '_blank')) : '-',
			'type'=>'raw',
		),
		array(
			'name'=>'email',
			'value'=>$model->email,
			//'value'=>$model->email != '' ? $model->email : '-',
		),
		array(
			'name'=>'kps_status',
			'value'=>$model->kps_status,
			//'value'=>$model->kps_status != '' ? $model->kps_status : '-',
		),
		array(
			'name'=>'kps_number',
			'value'=>$model->kps_number,
			//'value'=>$model->kps_number != '' ? $model->kps_number : '-',
		),
		array(
			'name'=>'creation_date',
			'value'=>!in_array($model->creation_date, array('0000-00-00 00:00:00','1970-01-01 00:00:00','0002-12-02 07:07:12','-0001-11-30 00:00:00')) ? $this->dateFormat($model->creation_date) : '-',
		),
		array(
			'name'=>'creation_search',
			'value'=>$model->creation_id,
			//'value'=>$model->creation_id != 0 ? $model->creation_id : '-',
		),
		array(
			'name'=>'modified_date',
			'value'=>!in_array($model->modified_date, array('0000-00-00 00:00:00','1970-01-01 00:00:00','0002-12-02 07:07:12','-0001-11-30 00:00:00')) ? $this->dateFormat($model->modified_date) : '-',
		),
		array(
			'name'=>'modified_search',
			'value'=>$model->modified_id,
			//'value'=>$model->modified_id != 0 ? $model->modified_id : '-',
		),
	),
)); ?>

<div class="dialog-content">
</div>
<div class="dialog-submit">
	<?php echo CHtml::button(Yii::t('phrase', 'Close'), array('id'=>'closed')); ?>
</div>
