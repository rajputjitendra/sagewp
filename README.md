# sagewp
Sage Root WordPress starter theme

WordPress starter theme with a modern development workflow

Sage Base WordPress Integration

To integrate your “WP ERP” data captured in your WordPress website, with Sage, follow these listed steps. 
Step1: WordPress installation steps
1.	The first & foremost step is to install WordPress.
2.	Next is to enable multisite configuration into the wp-config file.  
3.	Once done, logout and login again in your WordPress. 
4.	Install WooCommerce plugin into network site plugins page.
5.	Search “Menu Cart” in WooCommerce and install it on your network site plugin page.
6.	Create a new website as per the following format on your network panel

E.g. xyz.com is your primary domain, then create
•	xyz.com/menu
•	xyz.com/cart
7.	Go to the dashboard of your main website (e.g., xyz.com).
8.	Configure your WooCommerce settings. 
9.	Now, start adding your products one by one.

Step2: Requirements 
The following requirements are must for Sage Base WordPress Integration,
1.	Install or Upgrade to WordPress 5.4 or above.
2.	Ensure PHP version is >=7.3.0. (Make sure PHP-mbstring is enabled.) 
3.	Installing Composer into your system is necessary. 
4.	Download & install GIT in your system. 
5.	Make sure that NODE.JS >= 12.14.0 is installed in your system.
6.	Last, install Yarn from the support theme forum into your system.

Step3: Theme installation 
1.	First, go to wp-content/themes/ and enter the following command into your terminal,
$ composer create-project roots/sage your-theme-name dev-master
2.	Once the theme is installed, go to your theme directory and open the terminal with the below command,
E,g : wp-content/themes/wpsage
$ yarn
3.	On your theme directory, open the webpack.mix.js file and update it with your local dev URL
For instance, browserSync(‘localhost/wordpress-sage’)
4.	$ yarn start - This command will compile all assets when file changes are made and starts the browsersync session.
5.	yarn build - This command will compile and optimize the files in your assets dictionary
6.	yarn build:production - This command will compile assets to start production.

