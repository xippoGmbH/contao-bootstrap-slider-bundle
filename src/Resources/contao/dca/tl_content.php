// contao/dca/tl_content.php
$GLOBALS['TL_DCA']['tl_content']['config']['ptable'] = 'tl_xippo_bs_slide';
$GLOBALS['TL_DCA']['tl_content']['fields']['bootstrapSlider_id'] = [
			'label' => &$GLOBALS['TL_LANG']['tl_content']['bootstrapSlider_id'],
			'inputType' => 'select',
			'foreignKey' => 'tl_xippo_bs_slider.title',
			'sql' => ['type' => 'integer', 'unsigned' => true, 'notnull' => true, 'default' => 0],
			'eval' => [
				'mandatory' => true,
				'includeBlankOption' => true
			]
		];
$GLOBALS['TL_DCA']['tl_content']['palettes']['bootstrapSlider_id'] = '{type_legend},type,headline;{bootstrapSlider_legend},bootstrapSlider_id;{protected_legend:hide},protected;{expert_legend:hide},guests,invisible,cssID,space';