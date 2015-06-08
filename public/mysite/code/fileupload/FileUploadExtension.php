<?php

/**
 * FileUploadExtension
 *
 * @author Anselm Christophersen <ac@anselm.dk>
 * @date   June 2015
 */
class FileUploadExtension extends DataExtension {

	static $has_one = array (
		'DataObjectWithManyFiles' => 'DataObjectWithManyFiles'
	);

}
