<div class="row">
	<div class="span3 well">
		<?php 
		if ($model->c_pathfoto == null || (!is_file(Yii::app()->request->baseUrl . "/images/employee/" .$model->c_pathfoto))) {
			//echo CHtml::image(Yii::app()->request->baseUrl . "/images/nophoto.jpg", "No Photo", array("class"=>"span2"));
			$this->widget('ext.espaceholder.ESpaceHolder', array(
					'size' => '140x200', // you can also do 300x250
					'text' => CHtml::encode($model->vc_psnama),
					'htmlOptions' => array( 'title' => 'test image' )
			));
				
		} else {
			echo CHtml::image(Yii::app()->request->baseUrl . "/images/employee/" .$model->c_pathfoto, CHtml::encode($model->vc_psnama), array("class"=>"span2"));
		}		
		?>
	</div>
	<div class="span9">
		<?php 
		$this->widget('bootstrap.widgets.BootDetailView', array(
		//$this->widget('ext.XDetailView', array(
		//		'ItemColumns' => 2,
				'data'=>$model,
				'attributes'=>array(
						array(
							'header'=>'Personal Data',
						),
						'c_hriskd',
						//'c_proyek',
						//'c_pt',
						//'c_direktorat',
						'c_pskode',
						array(
								'label'=>'Birth Place',
								'value'=>isset($model->birthplace) ? $model->birthplace->name : "",
						),
						'd_pstgllhr',
						array(
								'label'=>'Sex',
								'value'=>isset($model->sex) ? $model->sex->name : "",
						),
						array(
								'label'=>'Religion',
								'value'=>$model->religion->name,
						),
						array(
								'label'=>'Marital Status',
								'value'=>$model->maritalstatus->name,
						),
						array(
								'label'=>'SF',
								'value'=>$model->sf->name,
						),
						array(
							'header'=>'Parents Data',
						),
						'c_rfkwarga',
						't_domalamat',
						'vc_domkec',
						'c_domcity',
						'c_dompos',
						'c_psktp',
						'd_psktp',
						't_psalamat',
						'vc_pskec',
						'c_rfcity',
						'c_pskdpos',
						'vc_psemail',
						'vc_psemail2',
						/*		'c_rfdarah',
						 'vc_psnotelp',
				'vc_psnohp',
				'vc_psnohp2',
				'vc_pshobby',
				'c_psaktif',
				'c_kdaktif',
				't_psaktifket',
				'd_joinunit',
				'd_joingrp',
				'b_sambung',
				'c_pathfoto',
				'userid',
				'tglmodify',
				'pt_kodept',
				'py_kodeproyek',
				*/
				),
		)); ?>

	</div>
</div>

<hr />

<div class="row-fluid">
	<div class="span12">
		<h3>Related Employee</h3>
		<?php $this->widget('bootstrap.widgets.BootGridView',array(
				'id'=>'g-person-grid',
				'dataProvider'=>gPerson::model()->search(),
				//'filter'=>$model,
				'template'=>'{items}',
				'columns'=>array(
						array(
								'header'=>'Name',
								'type'=>'raw',
								'value'=>'CHtml::link($data->vc_psnama,Yii::app()->createUrl("/m1/gPerson/view",array("id"=>$data->id)))',
						),
						'c_hriskd',
						'c_proyek',
						'c_pt',
						'c_direktorat',
						'c_pskode',
						/*
						 'vc_pstemlhr',
		'd_pstgllhr',
		'b_psjkel',
		'c_rfagama',
		'c_psstskw',
		'c_stspjk',
		'c_rfkwarga',
		't_domalamat',
		'vc_domkec',
		'c_domcity',
		'c_dompos',
		'c_psktp',
		'd_psktp',
		't_psalamat',
		'vc_pskec',
		'c_rfcity',
		'c_pskdpos',
		'vc_psemail',
		'vc_psemail2',
		'c_rfdarah',
		'vc_psnotelp',
		'vc_psnohp',
		'vc_psnohp2',
		'vc_pshobby',
		'c_psaktif',
		'c_kdaktif',
		't_psaktifket',
		'd_joinunit',
		'd_joingrp',
		'b_sambung',
		'c_pathfoto',
		'userid',
		'tglmodify',
		'pt_kodept',
		'py_kodeproyek',
		't_status',
		't_status2',
		*/
				),
		)); ?>
	</div>
</div>
