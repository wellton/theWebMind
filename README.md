wMind
===============================================
Nota: este projeto é um fork do theWebMind de Felipe Moura.

This is the source code for wMind project.

Requirements:
---------
* PHP 5.3+
* PHP-cli
* PHP-SQLite3
* ReadLine(if you inted to use it in command line, not only with HTTP requisitions)

NOTE: on linux, ReadLine is installed by default

TIP: if you want to install the full environment to run mind3rd, here are the commands to do that on Unix based machines:

  $ sudo apt-get install libsqlite3-0 libsqlite3-dev
  $ sudo apt-get install apache2 php5 libapache2-mod-php5 php5-cli php-pear php5-dev php5-sqlite

with these commands, your machine will be good to go ;)

Installation:
-------------
For now, only working on mac and Linux...sorry bill!  
Your HTTPServer's user must have permission to read and write on its folder  
In your console, run the following command into this directory:
		$sudo php mind install

Great! Now you're good to go

* * *

Examples and tests:
-------------
To perform some examples and tests, access in your browser
the IDE demo
	http://[yourMindDir]/docs/ide

For graphics, diagrams, examples of code, help and documentation, see
the docs directory
	[yourMindDir]/docs/

Your projects are stored at:
	[yourMindDir]/projects/[projectName]
You can write your codes directly in sources/main.mnd in your  
project's source directory.  
You can see the generated documentation and source code on 'docs' and  
'app' directories, into the project's directory.

Please, check/change the data and options as you need, on
	[yourMindDir]/env/defaults.ini

Unit tests are on Tests directory, run it with PHPUnit
	[yourMindDir]/Tests

Useful/interesting links:
[Official website](http://wellton.com.br/wMind "wMind") |
[Licenses](https://github.com/felipenmoura/theWebMind/blob/master/licenses/mind3rd.license, "Licenses") |
[Documentation](http://docs.thewebmind.org "documentation") |
[Contact](mailto:wMind@wellton.com.br "contact") |
[Twitter](http://social.wellton.com.br/wMind "GNU Social") | 
