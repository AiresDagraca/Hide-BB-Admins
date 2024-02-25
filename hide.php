<?php 

/**
* Exclude Users from BuddyPress Members List by WordPress role.
*
* @param array $args args.
*
* @return array
*/
function buddydev_exclude_users_by_role( $args ) {
// do not exclude in admin.
if ( is_admin() && ! defined( 'DOING_AJAX' ) ) {
return $args;
}
$excluded = isset( $args['exclude'] ) ? $args['exclude'] : array();
if ( ! is_array( $excluded ) ) {
$excluded = explode( ',', $excluded );
}
$role = 'administrator';// change to the role to be excluded.
$user_ids = get_users( array( 'role' => $role, 'fields' => 'ID' ) );
$excluded = array_merge( $excluded, $user_ids );
$args['exclude'] = $excluded;
return $args;
}
add_filter( 'bp_after_has_members_parse_args', 'buddydev_exclude_users_by_role' );
