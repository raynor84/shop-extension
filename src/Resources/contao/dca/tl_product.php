<?php
$tablename = 'tl_product';
$GLOBALS['TL_DCA'][$tablename] = [
    'palettes' => [
        'default' => '{title_legend},title,description, trailer, preview, fullvideo, tags, price, teaser, girl',
    ],
];
$GLOBALS['TL_DCA'][$tablename]['list']['label'] = [
    'fields' => array('title'),
	'showColumns' => true
];

$GLOBALS['TL_DCA'][$tablename]['list']['sorting'] = [
    'mode' => 0,
	'fields'      => array('title, description'),
	'flag'        => 1,
	'panelLayout' => 'filter;sort,search,limit'
];

$GLOBALS['TL_DCA'][$tablename]['list']['global_operations'] = array
		(
			'all' => array
			(
				'href'                => 'act=select',
				'class'               => 'header_edit_all',
				'attributes'          => 'onclick="Backend.getScrollOffset()" accesskey="e"'
			)
		);


$GLOBALS['TL_DCA'][$tablename]['list']['operations'] = array
		(

			'edit'   => array
			(
				'label' => &$GLOBALS['TL_LANG'][$tablename]['edit'],
				'href'  => 'act=edit',
				'icon'  => 'edit.gif'
			),
			'delete' => array
			(
				'label'      => &$GLOBALS['TL_LANG'][$tablename]['delete'],
				'href'       => 'act=delete',
				'icon'       => 'delete.gif',
				'attributes' => 'onclick="if(!confirm(\'' . $GLOBALS['TL_LANG']['MSC']['deleteConfirm'] . '\'))return false;Backend.getScrollOffset()"'
			),
			'show'   => array
			(
				'label'      => &$GLOBALS['TL_LANG'][$tablename]['show'],
				'href'       => 'act=show',
				'icon'       => 'show.gif',
				'attributes' => 'style="margin-right:3px"'
			),
			'toggle' => array
			(
				'icon'                => 'visible.svg',
				'attributes'          => 'onclick="Backend.getScrollOffset();return AjaxRequest.toggleVisibility(this,%s)"',
			),
			'copy' => array
			(
				'href'                => 'act=copy',
				'icon'                => 'copy.svg',
				'attributes'          => 'onclick="Backend.getScrollOffset()"',
			),
		);

$GLOBALS['TL_DCA'][$tablename]['fields']['id'] = [
	 'sql'               => 'int(10) unsigned NOT NULL auto_increment'
];
$GLOBALS['TL_DCA'][$tablename]['fields']['tstamp'] = [
	'sql'                   => "int(10) unsigned NOT NULL default '0'"
];
$GLOBALS['TL_DCA'][$tablename]['config'] = [
    'dataContainer' => 'Table',
    'enableVersioning' => true,
    'sql' => [
        'keys' => [
            'id' => 'primary',
        ],
    ],
];

$GLOBALS['TL_DCA'][$tablename]['fields']['title'] = [
    'label' => &$GLOBALS['TL_LANG'][$tablename]['title'],
    'inputType' => 'text',
	'exclude' => true,
    'eval' => ['tl_class'=>'w50', 'maxlength'=>255],
    'sql' => "varchar(255) NOT NULL default ''",
];
$GLOBALS['TL_DCA'][$tablename]['fields']['teaser'] = [
    'label' => &$GLOBALS['TL_LANG'][$tablename]['teaser'],
    'inputType' => 'textarea',
	'exclude' => true,
    'eval' => ['tl_class'=>'clr w100', 'maxlength'=>255],
    'sql' => "TEXT NOT NULL default ''",
];


$GLOBALS['TL_DCA'][$tablename]['fields']['description'] = [
    'label' => &$GLOBALS['TL_LANG'][$tablename]['description'],
    'exclude' => true,
    'inputType' => 'textarea',
    'eval' => ['tl_class'=>'clr w100'],
    'sql' => "TEXT NOT NULL default ''",
];

$GLOBALS['TL_DCA'][$tablename]['fields']['trailer'] = [
    'label' => &$GLOBALS['TL_LANG'][$tablename]['trailer'],
    'exclude' => true,
    'inputType' => 'fineUploader',
    'eval'                    => array
    (
        'storeFile'         => true,                // Mandatory to store the file on the server
        'multiple'          => false,                // Allow multiple files to be uploaded
        'uploadFolder'      => 'files/product/',     // Upload target directory (can also be a Contao file system UUID)
        'addToDbafs'        => true,                // Add files to the database assisted file system
        'extensions'        => 'mpeg,mp4,avi',           // Allowed extension types
        'doNotOverwrite'    => true,                // Do not overwrite files in destination folder

        'maxConnections'    => 1,                    // Maximum allowable concurrent requests
		'feViewable' => true, 
		'feEditable'=>true, 
		"tl_class" => "w50 wizard",
    ),
    'sql'                     => "blob NULL"

];

$GLOBALS['TL_DCA'][$tablename]['fields']['preview'] = [
    'label' => &$GLOBALS['TL_LANG'][$tablename]['preview'],
    'exclude' => true,
    'inputType' => 'fineUploader',
    'eval'                    => array
    (
        'storeFile'         => true,                // Mandatory to store the file on the server
        'multiple'          => false,                // Allow multiple files to be uploaded
        'uploadFolder'      => 'files/product/',     // Upload target directory (can also be a Contao file system UUID)
        'addToDbafs'        => true,                // Add files to the database assisted file system
        'extensions'        => 'jpeg,jpg,gif,png',           // Allowed extension types
        'doNotOverwrite'    => true,                // Do not overwrite files in destination folder

        'maxConnections'    => 1,                    // Maximum allowable concurrent requests
		'feViewable' => true, 
		'feEditable'=>true, 
		"tl_class" => "w50 wizard",
    ),
    'sql'                     => "blob NULL"

];

$GLOBALS['TL_DCA'][$tablename]['fields']['fullvideo'] = [
    'label' => &$GLOBALS['TL_LANG'][$tablename]['fullvideo'],
    'exclude' => true,
    'inputType' => 'fineUploader',
    'eval'                    => array
    (
        'storeFile'         => true,                // Mandatory to store the file on the server
        'multiple'          => false,                // Allow multiple files to be uploaded
        'uploadFolder'      => 'files/videos/',     // Upload target directory (can also be a Contao file system UUID)
        'addToDbafs'        => true,                // Add files to the database assisted file system
        'extensions'        => 'mpeg,mp4,avi,wmv',           // Allowed extension types
        'doNotOverwrite'    => true,                // Do not overwrite files in destination folder

        'maxConnections'    => 1,                    // Maximum allowable concurrent requests
		'feViewable' => true, 
		'feEditable'=>true, 
		"tl_class" => "w50 wizard",
    ),
    'sql'                     => "blob NULL"

];

$GLOBALS['TL_DCA'][$tablename]['fields']['tags'] = [
    'label' => &$GLOBALS['TL_LANG'][$tablename]['tags'],
    'inputType' => 'tagsinput',
    'sql'       => "blob NULL",
    'options'   => array('boston', 'berlin', 'hamburg', 'london'),
    'eval'      => array
    (
        'freeInput'       => true,
        'multiple'        => true,
		'maxTags'         => 3,
		'maxChars'        => 12,
		'trimValue'       => true,
		'allowDuplicates' => true,
		'tl_class' => 'w50 autoheight'
    ),	
];

$GLOBALS['TL_DCA'][$tablename]['fields']['price'] = [
    'label' => &$GLOBALS['TL_LANG'][$tablename]['price'],
    'inputType' => 'text',
	'exclude' => true,
    'eval' => ['tl_class'=>'clr w50', 'maxlength'=>255],
    'sql' => "Integer NOT NULL",
];

$GLOBALS['TL_DCA'][$tablename]['fields']['girl'] = [
    'label'                 => &$GLOBALS['TL_LANG'][$table]['girl'],
    'exclude'               => true,
    'inputType'             => 'select',
    'foreignKey'            => "tl_member.CONCAT(lastname, ', ', firstname)",
    'eval'                  => ['tl_class'=>'w50', 'chosen'=>true, 'includeBlenkOption'=>true],
    'sql'                   => "int(10) NOT NULL default '0'"
];