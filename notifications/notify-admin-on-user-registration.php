<?php
/**
 * Notify wp admin when a user register with Charitable
 *
 * @param   array[] $fields
 * @param   Charitable_Donation_Form $form
 * @return  array[]
 */

function charitable_notify_new_user($user_id, $values)
{
	wp_new_user_notification( $user_id, null, 'admin' );
}

add_action('charitable_after_insert_user', 'charitable_notify_new_user', 10, 2);