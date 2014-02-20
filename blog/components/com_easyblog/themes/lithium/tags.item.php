<?php
/**
 * @package		EasyBlog
 * @copyright	Copyright (C) 2010 Stack Ideas Private Limited. All rights reserved.
 * @license		GNU/GPL, see LICENSE.php
 *
 * EasyBlog is free software. This version may have been modified pursuant
 * to the GNU General Public License, and as distributed it includes or
 * is derivative of works licensed under the GNU General Public License or
 * other free or open source software licenses.
 * See COPYRIGHT.php for copyright notices and details.
 */

defined('_JEXEC') or die('Restricted access');
?>
<!-- Tags listings -->
<?php if( $tags && !empty( $tags ) ){ ?>
<div class="blog-tags">
	<?php for( $i = 0; $i < count( $tags );$i++ ){ ?>
		<!-- a tag must remain for styling purposes -->
		<a href="<?php if( isset( $ispreview ) && $ispreview ) { echo 'javascript:void(0)'; } else { echo EasyBlogRouter::_( 'index.php?option=com_easyblog&view=tags&layout=tag&id=' . $tags[$i]->id ); } ?>"><i></i><span itemprop="keywords">#<?php echo JText::_( $tags[$i]->title );?></span><b></b></a>
	<?php } ?>
</div>
<?php } ?>
