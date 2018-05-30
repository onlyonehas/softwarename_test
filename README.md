# softwarename_test
Test for Client that create image software, 
They currently produce 4 pieces of software: PortraitPro,
PortraitPro Body, LandscapePro and Smart Photo Editor.  
Each of these is identified internally by a "software id": PP, PPB, LP and SPE,
respectively. Each of these pieces of software is available in
different editions which is identified internally again by an id. The
edition id can be "Std" for "Standard Edition", "StdTrial" for the
trial version and "Studio" for the Studio version of the software
(which has more features).

In this task, you will be working with a PHP script that provides a
facility for printing a user-readable description of the software.

Task 1
------

Navigate to the dir	ectory in which you downloaded the file index.php
and view its output using PHP on the command-line by doing:

    php index.php

You should see the text:

    to be written

Task 2
------

Look at the code in index.php. You will see there is a function
generate_software_description(). Given a software id like "PPB", an
edition id like "Std" and a version such as "2.3.1", it should return
the following:

	PortraitPro Body (Std Edition) v2.3.1

Currently it returns the placeholder text "to be written" which you
saw in the previous task. Change the return value so that it works as
expected.

Task 3
------

Imagine that we are planning on releasing a new piece of software
called FoodscapePro which has a software id of "FP". Update the script
so that it provides support for this software id.

Task 4
------

When we are testing releases internally, we create a release that has
4 version 'segments' such as "2.3.0.3" instead of the usual 3 (such as
"2.3.1" above). Add a function to the script called
is_internal_release(). This should take a version string as a
parameter and return true or false depending on whether it represents
an internal release or not.

Task 5
------

Modify generate_software_description() so that when an internal
version string is used, the output is then:

	PortraitPro Body (Std Edition) v2.3.0.3 [internal]

Task 6
------

On the command-line, in the directory of index.php, run:

   php -S localhost:8080

This should launch a simple web server for running scripts in a server
environment. (If you have problems with this command, please consult
online PHP documentation.)

Use a browser to navigate to:

    http://localhost:8080/index.php

You should see the output of the script in your web browser now
instead of on the command line.

Task 7
------

Modify the script so that the parameters to
generate_software_description() are obtained from the script's GET
query. The GET query parameters should be:

       softwareId
       editionId
       version

Test your code using the local server you set up in the previous
task.

Task 8
------

There are many deficiencies in the way in which the code currently
works. Please address as many of these as you can and modify the code
as you see fit.

You should spend at least 15 minutes on this task.


