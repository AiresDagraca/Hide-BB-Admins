# Hide-BB-Admins
# Exclude Users by Role from BuddyPress Members List

This WordPress snippet allows you to exclude users of a specific role from appearing in the BuddyPress members list. This can be particularly useful for hiding administrators or other user roles that should not be publicly listed in the community members directory.

## Features

- Excludes any WordPress user role from the BuddyPress members list.
- Easily customizable to target different user roles.
- Works seamlessly with BuddyPress without affecting the WordPress admin area.

## Installation

1. **Copy the Snippet**: Copy the provided PHP code.
2. **Add to WordPress**: Paste the code into your theme's `functions.php` file or a custom plugin.
3. **Customize Role**: Adjust the `$role` variable in the function to specify the WordPress role you wish to exclude from the BuddyPress members list.

## Configuration

- **Set the Target Role**: The function is preset to exclude users with the 'administrator' role. You can change this by modifying the `$role` variable within the function.

  ```php
  $role = 'administrator'; // Change 'administrator' to any valid WordPress user role
