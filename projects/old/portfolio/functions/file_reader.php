<?php
// File Reader
function readLine( $file, $line_number ) {
	// Reads a line from the requested text file
	
	if (file_exists($file)) {
	    /*** read the file into the iterator ***/
    	$file_obj = new SplFileObject( $file );

	    /*** seek to the line number ***/
	    $file_obj->seek( $line_number );

    	/*** return the current line ***/
	    return $file_obj->current();
	}
	else {
		// The file doesn't exist
		return "<p class='error_text'>The requested file '" . $file . "' doesn't exist or can't be accessed.</p>\n";
	}
}

// For reading the Links CSV files
function readCSV($file_name) {
	
	$file_handle = fopen($file_name, "r");

	while (!feof($file_handle) ) {
		$line_of_text = fgetcsv($file_handle, 1024, ",");
		echo "<li><a href=\"index.php?page=" . $line_of_text[1] . "\">" . $line_of_text[0] . "</a></li>\n";
	}
	fclose($file_handle);
}
?>