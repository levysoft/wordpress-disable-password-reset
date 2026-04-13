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

The easiest way to install the plugin is to use the pre-built zip file:

1. Go to the [Releases](https://github.com/levysoft/wordpress-disable-password-reset/releases) page.
2. Download the `wordpress-disable-password-reset.zip` file from the latest release.
3. In your WordPress Admin, go to **Plugins** > **Add New** > **Upload Plugin**.
4. Choose the downloaded zip file and click **Install Now**.
5. Click **Activate Plugin**.

## Manual Password Reset

Since this plugin disables the recovery UI, if you need to change your password you must do it via the database:
1. Open **phpMyAdmin**.
2. Go to the `wp_users` table.
3. Edit your user, select **MD5** for the `user_pass` field, and type your new password.
4. Save and log in.

## Documentation & Articles
For a deep dive into why this plugin was created and an analysis of the "127.0.0.2" reset requests, check out these articles:
* **English:** [Medium - Disable Password Reset in WordPress](https://levysoft.medium.com/disable-password-reset-in-wordpress-causes-analysis-and-solution-f45f51c17cbf)
* **Italiano:** [Levysoft - Disabilitare il reset password in WordPress](https://www.levysoft.it/archivio/2026/04/12/disabilitare-il-reset-password-in-wordpress-cause-analisi-e-soluzione/)
