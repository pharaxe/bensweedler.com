# Ben Sweelder's Personal Site

Made with 
* [Wordpress](https://wordpress.com)
* [Bedrock](https://roots.io/bedrock/)
* [Salient Theme](http://themenectar.com/docs/salient/)


My personal website,  where I blog and make my work publically available.

## Requirements

* PHP >= 7.1
* Composer - [Install](https://getcomposer.org/doc/00-intro.md#installation-linux-unix-osx)

## Installation

1. 
    ```sh
    $ composer install
    ```
2. Update environment variables in the `.env` file:
3. Set the document root to Bedrock's `web` folder: `/path/to/site/web/`
4. Set auth.json to the product key from Delcious Brains' WP Migrate DB Pro
5. Access WordPress admin at `https://example.com/wp/wp-admin/`
6. Install the themes and plugins
7. Make www-pub is the group for web/app/uploads and it is writeable by the group
    ```sh
    $ chgrp g+w web/app/uploads
    ```
7. Use WP Migrate DB Pro to install the database from staging.bensweedler.com or dev.bensweedler.com
