# WordPress Disable Password Reset

A lightweight, zero-overhead WordPress plugin that completely disables the password reset functionality. 

This plugin is designed for single-user blogs or sites where security is a priority and you want to prevent automated scripts from triggering password reset emails.

## Features

This plugin applies a 4-layer protection system:
1. **Core Block:** Intercepts and blocks the reset request at the server level.
2. **Visual Cleanup:** Removes the "Lost your password?" link from the login screen.
3. **CSS Fallback:** Hides the link via inline CSS just in case.
4. **Bot Redirection:** Instantly redirects any direct traffic to the lost password form back to the standard login page.

**Zero Configuration:** No settings pages, no database changes. Just activate it and it works.

## Installation

1. Download the `wordpress-disable-password-reset.php` file.
2. Create a folder named `wordpress-disable-password-reset`.
3. Place the PHP file inside that folder.
4. Zip the folder and upload it via the WordPress Admin (**Plugins** > **Add New**).
5. Activate the plugin.

## Manual Password Reset

If you need to change your password while this plugin is active, you must do it via the database:
1. Open **phpMyAdmin**.
2. Go to the `wp_users` table.
3. Edit your user, select **MD5** for the `user_pass` field, and type your new password.
4. Save and log in.
