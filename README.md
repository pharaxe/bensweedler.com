# [Ben Sweelder's Personal Site]

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
  * Database variables
    * `DB_NAME` - Database name
    * `DB_USER` - Database user
    * `DB_PASSWORD` - Database password
    * `DB_HOST` - Database host
    * Optionally, you can define `DATABASE_URL` for using a DSN instead of using the variables above (e.g. `mysql://user:password@127.0.0.1:3306/db_name`)
  * `WP_ENV` - Set to environment (`development`, `staging`, `production`)
  * `WP_HOME` - Full URL to WordPress home (https://example.com)
  * `WP_SITEURL` - Full URL to WordPress including subdirectory (https://example.com/wp)
  * `AUTH_KEY`, `SECURE_AUTH_KEY`, `LOGGED_IN_KEY`, `NONCE_KEY`, `AUTH_SALT`, `SECURE_AUTH_SALT`, `LOGGED_IN_SALT`, `NONCE_SALT`
    * Generate with [wp-cli-dotenv-command](https://github.com/aaemnnosttv/wp-cli-dotenv-command)
    * Generate with [our WordPress salts generator](https://roots.io/salts.html)
3. Set the document root on your webserver to Bedrock's `web` folder: `/path/to/site/web/`
4. Request access to privately hosted Salient theme.
5. Set auth.json to the product key from Delcious Brains' WP Migrate DB Pro
6. Access WordPress admin at `https://example.com/wp/wp-admin/`
7. Install the themes and plugins
8. Use WP Migrate DB Pro to install the database from staging.bensweedler.com or dev.bensweedler.com
