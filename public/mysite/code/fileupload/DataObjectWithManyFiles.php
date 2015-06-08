<?php

/**
 * DataObjectWithManyFiles
 *
 * @author Anselm Christophersen <ac@anselm.dk>
 * @date   June 2015
 */
class DataObjectWithManyFiles extends DataObject {

	private static $has_many = array(
		'Files' => 'File'
	);

	public function getCMSFields() {
		$fields = parent::getCMSFields();

		$fields->removeByName('Files');
		$fields->addFieldToTab("Root.Main", FileAttachmentField::create('Files', 'Upload some files')
			->setThumbnailHeight(180)
			->setThumbnailWidth(180)
			->setAutoProcessQueue(true) // do not upload files until user clicks an upload button
			->setMaxFilesize(10) // 10 megabytes. Defaults to PHP's upload_max_filesize ini setting
			//->setAcceptedFiles(array('.pdf','.doc','.docx'))
			->setFolderName('dataobject-with-many-files')
		);

		return $fields;

	}

}
