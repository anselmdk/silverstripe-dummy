<?php

/**
 * DataObjectWithManyFilesAdmin
 *
 * @author Anselm Christophersen <ac@anselm.dk>
 * @date   June 2015
 */
class DataObjectWithManyFilesAdmin extends ModelAdmin {

	private static $managed_models = array(
		'DataObjectWithManyFiles'
	);

	private static $url_segment = 'fileupload';
	private static $menu_title = 'File Upload';


}
