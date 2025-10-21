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
			vendor/aseqbase/lms> composer dev:install
			```
  3. Put the destination directory of your project on the appeared step (for example, `D:\MyWebsite\lms\`)
		``` bash
		Destination Directory [D:\MyWebsite\]: D:\MyWebsite\lms\
		```
  4. Follow the steps to finish the installation of sources, database, etc.
  5. [optional] On the local server, create an optional file named `global.php` in the `lms` directory  to change your-parent-directory-name (from the `.aseq`) using:
		``` bash
		> composer lms:create global --aseq "lms" --base "your-parent-directory-name" -f
		```
		or
		``` bash
		> cd vendor/aseqbase/lms
		vendor/aseqbase/lms> composer dev:create global --aseq "lms" --base "your-parent-directory-name" -f
		```
		**Note**: Do not forget to replace "your-parent-directory-name" with your item (default `.aseq`). 
  6. Enjoy...

<h3>Using</h3>

  1. Do one of the following options:
	  	* Visit its special URL (for example, `http://lms.[my-domain-name].com`, or `http://[my-domain-name].com/lms`)
		* On the local server:
			1. Use the following command on the root directory
				``` bash
				> composer start
		  		```
		  	2. Visit the URL `localhost:8000` (for default) on the local browser
  2. Enjoy...

<h3>Updating</h3>

  1. Keep your project updated using
		``` bash
		> composer lms:update
		```
		or
		``` bash
  		> cd vendor/aseqbase/lms
		vendor/aseqbase/lms> composer dev:update
		```
  2. Follow the steps to finish the update of sources, database, etc.
  3. Enjoy...

<h3>Uninstalling</h3>

  1. Uninstall the project and the constructed database using:
		``` bash
		> composer lms:unistall
		```
		or
		``` bash
  		> cd vendor/aseqbase/lms
		vendor/aseqbase/lms> composer dev:unistall
		```
  2. Follow the steps to finish the uninstallation of sources, database, etc.
  3. Enjoy...

<h4>Creating</h4>

  1. Create a new file by a predefined template name (for example, global, config, back, router, front, user, info, etc.) using:
		``` bash
		> composer lms:create [predefined-template-name]
		```
		or
		``` bash
  		> cd vendor/aseqbase/lms
		vendor/aseqbase/lms> composer dev:create [predefined-template-name]
		```
  2. Follow the steps to finish creating the file.
  3. Enjoy...
