<?php
/**
 * Comment ID merge tag
 *
 * @package notification
 */

namespace underDEV\Notification\Defaults\MergeTag\Comment;

use underDEV\Notification\Defaults\MergeTag\IntegerTag;


/**
 * Comment ID merge tag class
 */
class CommentID extends IntegerTag {

	/**
     * Merge tag constructor
     *
     * @since [Next]
     * @param array $params merge tag configuration params.
     */
    public function __construct( $params = array() ) {

		$args = wp_parse_args( $params,  array(
			'slug'        => 'comment_ID',
			'name'        => __( 'Comment ID', 'notification' ),
			'description' => '35',
			'example'     => true,
			'resolver'    => function() {
				return $this->trigger->comment->comment_ID;
			},
		) );

    	parent::__construct( $args );

	}

	/**
	 * Function for checking requirements
	 *
	 * @return boolean
	 */
	public function check_requirements( ) {
		return isset( $this->trigger->comment->comment_ID );
	}

}
