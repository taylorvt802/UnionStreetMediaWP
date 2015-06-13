# unionstreetmedia

==== Instructions ====

The following tasks are meant to simulate common requests you may receive when working here. You can use whatever tools, methods, plugins or libraries you see fit. You are not expected to know these things off the top of your head - research skills are important. We encourage you to leverage Google, StackExchange etc. and to look up information whenever needed. In short, this is an open book assignment.  

All of the tasks describe a feature that can be found on this sample website. http://tophat.i9e.co


======
Challenge 1 - Setting Up WordPress (Required)
======

Please complete the following steps to set up a local development environment for Wordpress. You may use any tools that you like. This step is a prerequisite for the three challenges below.

Download and install MAMP (bonus: use Vagrant to set up instead) ( https://www.mamp.info/en/ | https://github.com/Varying-Vagrant-Vagrants/VVV )
Set up a new Wordpress installation on your machine (If you used Vagrant, this step can be skipped)
Configure Wordpress to allow multisite network (optional)
Create a sub-site on the new network called “Taylor” (optional)
Duplicate the included 'Twenty Fifteen’ theme and rename it to ‘Taylor Theme’. (Bonus: use use the starter theme attached.)
Download this XML file and use it to import sample data into your site: https://wpcom-themes.svn.automattic.com/demo/theme-unit-test-data.xml
Use this site and theme for the challenges below.

======
Challenge 2 (CSS/JS - PHP/WordPress preferred)
======

Story : “I would like to have a simple photo slider on my site. Right in the header. I would prefer it to have some controls so people can go back and forth through the slides. Maybe those indicator dots at the bottom that correspond to each slide respectively? Oh, and is there any way I can choose which photos are in the slideshow? Actually, can it only show up on the home page?"

Instructions : Using any approach, make a photo slideshow that appears on the top of every page or only the home page of your theme.  

======
Challenge 3 (PHP/WordPress)
======

Story : “As a user, I want to be able to control which social media links appear on my site. I would like them to use nice icons and just work. Can you give me an option to enter the URL for my Facebook, Twitter, Pinterest etc. right on the Wordpress Dashboard? Then, when I put in the URL - the site displays the correct icon and link? 

Instructions : Using Advanced Custom Fields Pro plugin (provided) and IcoMoon fonts (provided). Add a Wordpress dashboard area for inputting four social networks into text fields. The URL in those fields should be applied automatically to the corresponding social network icon. 

======
Challenge 4 (Git)
======

Story : “As a team member, we need to be able to keep strong records of revision history and automatically deploy our code."

Instructions: Place your entire WordPress installation under git control. Using GitHub or a similar service, commit and push your work to a remote repository. 

Bonus Challenge
Do something you think is cool. There are no guidelines are requirements other than it be incorporated into your Wordpress theme in some way. If you feel your idea would be prohibitively time consuming to execute, please describe in detail how you would go about developing your idea into a working product.

~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~

==== Process ====

======
Challenge 1 - Setting Up WordPress
======

To start this assessment I was instructed to download and install MAMP, which is the program I used for the Web Development course I took in college. I didn’t have any difficulty with this step. I did configure WordPress to allow multisite network, which was  optional by adding the following code to the wp-config.php file before the /* That’s all, stop editing! Happy blogging. */ line.

/* Multisite */
define( 'WP_ALLOW_MULTISITE', true );

I was also able to create a subset on the new network called “Taylor” by creating a new site in the Network Admin. In order for the site to have content I just created a folder within the MAMP directory called “Taylor” and pasted all the files from the original wordpress folder.

Following that process I duplicated the ‘Twenty Fifteen’ theme and renamed it to ‘Taylor Theme’ by downloading the Duplicate Theme plugin, copying the ‘duplicate-theme.php’ file and pasting it into the plugin folder of the wordpress site, then selecting ‘Network activate’ under plugins. Then going to the site’s dashboard and under Appearance selecting ’Duplicate Theme’, which allowed me to duplicate the former theme and renaming it.

The last step to this challenge was to import sample data into the site using the XML file provided. By going to ‘Tools’ on the left side bar of the dashboard there is a ‘Import’ option which allows you to then select ‘Wordpress’ and then upload the .xml file. This step was pretty straight forward and inserted all the information from the file without any complications.

======
Challenge 2 - Slideshow
======

Unfortunately I was unable to figure the slideshow in the header challenge. I was able to download the plug in called Soliloquy, which created the slideshow and out put the code necessary for the header.php file but nothing that I tried or saw online would change the theme. The code that I used for the slideshow was:

<?php if ( is_home() && function_exists( 'soliloquy' ) ) { soliloquy( '1728' ); ?>

I tried various methods, trying to update the code in the child theme that I created and playing around with the subsite I created before, but nothing was outputting the slideshow. So in place of the header slideshow, I easily downloaded a slider plugin to implement a slideshow in a post.

======
Challenge 3 - Social Networking Icons
======

This next challenge was fairly straight forward. I started by scrolling over to Appearance in the left side bar then selecting ‘Menus’. This brought me to a screen where I was able to select between a primary menu (which I found was the main navigation menu) and the Social Media Menu (which held all the social link menus). To get the social networking icons I simply added four custom links, linking to the social networks and set the Link Text to the name of the social networks. I then scrolled to ’Theme location’ and checked ’Social Links Menu’. 

The last step was to go under the sites dashboard and place the curser on the site’s name up in the left hand corner and selected ‘Theme’. This brought me to a screen that allowed me to customize the theme where I chose to set my Navigation to Primary Menu Short and Social Links Menu to Social Media. All four of the custom links that I created then had their social media icons representing their sites.

======
Challenge 4 - Git Repository
======

My challenge was to place my entire wordpress installation under git control. I first created a repository on my desktop to associate with git called UnionStreetMedia. 

First I set up a git repository on my local machine. In my terminal session I did:

mkdir /Users/taylor/Desktop/UnionStreetMediasiteWP
cd /Users/taylor/Desktop/UnionStreetMediasiteWP
git init
touch README.md
git add README.md
git commit -m “First initial commit."

I used GitHub to add, commit, and push the work to the remote repository by following these exact steps in the terminal.

git add .
git commit -m ’entire wordpress installation’
git remote https://github.com/taylorvt802/UnionStreetMediaWP.git
git push -u origin master

======
Bonus
======

As you can see for this bonus I customized the theme by changing the color format, adding a background image, worked with the content in posts and adding a video, and also downloading the Typecase plugin which allowed me to change the font for each element of the site. 

I wish I could have created more using php but since I am not very experienced with either wordpress or php I had a hard time trusting that the updates to the php files wouldn’t seriously mess anything up. I had a situation with writing on the wrong file on my first attempt for this assignment, which ended up ruining the site. I really enjoyed this assignment and I will probably work with this program for here on out because I loved learned the little that I have the past couple weeks.