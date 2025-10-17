# Learning Management System (Project)
> aseqbase/lms

The objective is to develop a comprehensive Learning Management System, ensuring that it is fully equipped with all necessary accessibility features and required equipment. This Learning Management System will be specifically designed for integration with the existing aseqbase website. The intention is to provide a robust and user-friendly platform that facilitates effective online learning experiences, while adhering to the highest standards of accessibility for all users. The system should incorporate all the essential tools and resources needed for both instructors and learners to successfully engage with the online educational content offered through the aseqbase website, guaranteeing a seamless and inclusive learning environment.

## Dependencies
* <a href="http://github.com//aseqbase/aseqbase">aseqbase/aseqbase</a>
<h2>Managements</h2>
<h3>Installing</h3>

  1. Install all dependencies mentioned before
  2. Follow one of these options:
		* Open a terminal in the destination directory (for example, `D:\MyWebsite\lms\`) of the website, then install the project by:
			``` bash
			> composer create-project aseqbase/lms
			```
		* Prompts below to create a manageable project (update, uninstall, etc.):
			``` bash
			> composer require aseqbase/lms
			> cd vendor/aseqbase/lms
			> composer dev:install
			```
  3. Put the destination directory of your project on the appeared step (for example, `D:\MyWebsite\lms\`)
		``` bash
		Destination Directory [D:\MyWebsite\]: D:\MyWebsite\lms\
		```
  4. Follow the steps to finish the installation of sources, database, etc.
  * [optional] Create an optional file named `global.php` in the `lms` directory with the following script:
	  ``` php
	  <?php
		$BASE = '.aseq'; 			// (Optional) The base directory you want to inherit all properties except what you changed
		$ASEQ = 'lms'; 				// (Optional) The current subdomain sequence, or leave null if this file is in the root directory
		$SEQUENCES_PATCH = [];	// (Optional) An array to apply your custom changes in \_::$Sequences
									// newdirectory, newaseq; // Add new directory to the \_::$Sequences
									// directory, newaseq; // Update directory in the \_::$Sequences
									// directory, null; // Remove thw directory from the \_::$Sequences
	  ?>
	  ```
  5. Enjoy...
<h3>Using</h3>

  1. Do one of the following options:
	  	* Visit its special URL (for example, `http://lms.[my-domain-name].com`, or `http://[my-domain-name].com/lms`)
		* On the local server:
			1. Create or update file named `global.php` in the root directory with at least the following script:
	  			``` php
	  			<?php
					$BASE = 'lms'; // To set the base directory you want to see at the root of `localhost`
	 			 ?>
	  			```
			2. Use the following command on the root directory
				``` bash
				> composer start
		  		```
		  	3. Visit the URL `localhost:8000` on the local browser
  2. Enjoy...

<h3>Updating</h3>

  1. Keep your project updated using
		``` bash
  		> cd vendor/aseqbase/lms
		> composer dev:update
		```
  2. Follow the steps to finish the update of sources, database, etc.
  3. Enjoy...

<h3>Uninstalling</h3>

  1. Uninstall the project and the constructed database using
		``` bash
  		> cd vendor/aseqbase/lms
		> composer dev:unistall
		```
  2. Follow the steps to finish the uninstallation of sources, database, etc.
  3. Enjoy...