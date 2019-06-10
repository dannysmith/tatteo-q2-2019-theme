## TATTEO PROJECT SETUP

**Document Authors**: Kenny Ward, Danny Smith.

## Prerequisites

Install:

-   Git
-   Vagrant and VirtualBox
-   [VVV](https://varyingvagrantvagrants.org/)

To set up VVV, follow the [prerequisites](https://varyingvagrantvagrants.org/docs/en-US/installation/software-requirements/) here, including the Vagrant Hosts Updater plugin. (Note: it works with VirtualBox 6.x). Then follow the [installation instructions](https://varyingvagrantvagrants.org/docs/en-US/installation/).

## INSTALL WP ENVIROMENT

Add the following to your vvv-custom.yml file, located in your VVV root (~/vagrant-local) ensuring you follow the same syntax as the example sites in the file. **Whitespace matters!**

```yaml
tatteo:
    description: 'A custom WordPress theme for Tatteo'
    repo: https://github.com/Varying-Vagrant-Vagrants/custom-site-template.git
    hosts:
        - tatteo.test
```

Save the file, run the following from your VVV root (~/vagrant-local)

```shell
vagrant provision
```

When complete check http://tatteo.test in a browser. If you have any errors check and fix your syntax in `~/vagrant-local/vvv-custom.yml` and try running the above command again

## INSTALL PLUGINS

```shell
# first, navigate to your VVV root
cd ~/vagrant-local

# connect to the Vagrant VM via SSH
vagrant ssh

# Inside the virtual box, navigate to your WordPress site root
cd /srv/www/tatteo

# install and activate Regenerate Thumbnails
wp plugin install regenerate-thumbnails --activate

# install and activate Yoast SEO
wp plugin install wordpress-seo --activate
```

## INSTALL TATTEO THEME

Now **OUTSIDE THE VIRTUAL MACHINE** (in a new tab), run these commands:

```shell
cd ~/vagrant-local/www/tatteo/public_html/wp-content/themes
git clone https://github.com/redacademy/tatteo-q2-2019-theme.git tatteo
cd tatteo
git log # Check you can see previous commits from Danny and Kenny.
```

Now, back **INSIDE THE VIRTUAL MACHINE** run this command:

```shell
wp theme activate tatteo
```

Refresh your browser, you should now have the Tatteo theme installed and activated. Well done 🎉 Have a celebratory coffee.

## INSTALL TEST DATA

This installs some sample data into the wordpress database.

```shell
# first, navigate to your VVV root
cd ~/vagrant-local

# connect to the Vagrant VM via SSH
vagrant ssh

# once connected, navigate to the WP site where you want to import the data e.g:
cd ~/srv/www/tatteo/public_html

# download the official WP theme test-data. NOTE: Ideally we'd create our own XML document with test data specific to the client project, sometimes this isn't possible so we use the WP data
curl -O https://wpcom-themes.svn.automattic.com/demo/theme-unit-test-data.xml

# install the offical WP importer plugin and activate with flag
wp plugin install wordpress-importer --activate

# import the data that you downloaded and create authors with flag
wp import ./theme-unit-test-data.xml --authors=create

# clean up - remove test data file. NOTE: Doesn't remove the actual test data from the database
rm theme-unit-test-data.xml

# clean up - remove importer plugin as it's not needed now
wp plugin delete wordpress-importer
```
