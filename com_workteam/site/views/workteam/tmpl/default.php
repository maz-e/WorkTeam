<?php
/**
 * @package     Joomla.Administrator
 * @subpackage  com_workteam
 *
 * @copyright   Copyright (C) 2005 - 2015 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

// No direct access to this file
defined('_JEXEC') or die('Restricted access');

// Define variables
$cat = "";
$i = 0;
?>

<?php if (empty($this->items)) : ?>
	<div class="card-panel alert-success animated bounceIn">
		<div class="valign-wrapper flow-text teal-text text-darken-2">
			<i class="large material-icons">info_outline</i>&nbsp;<?php echo JText::_('JGLOBAL_NO_MATCHING_RESULTS');?>
		</div>
	</div>
<?php else : ?>
	<div class="row">
   <?php foreach ($this->items as $row) : ?>
		<?php if($cat == $row->title) : ?>
			<div class="row valign-wrapper">
			<?php if($row->params->get('show_image') == 1) : ?>
				<?php if ($row->img_user !== "") : ?>
				<div class="col s3">
					<?php
					$dir = $row->img_user;
					echo JHtml::_('image', $dir, 'User image', 'class="circle responsive-img"');
					?>
				</div>
				<?php else: ?>
				<div class="col s3">
					<?php if ($row->sex_user == 0) {
						echo JHtml::_('image', 'components/com_workteam/img/default-muser-img.png', 'Default user image', 'class="circle responsive-img"');
					} else {
						echo JHtml::_('image', 'components/com_workteam/img/default-wuser-img.png', 'Default user image', 'class="circle responsive-img"');
					} ?>
				</div>
				<?php endif; ?>
			<?php endif; ?>
				<div class="col s9 flow-text">
				<?php if($row->params->get('show_name') == 1) {
					echo '<span class="red-text">' . $row->contact_name . '</span><br>';
				}
				if ($row->email !== "") {
					echo JHtml::_('email.cloak', $row->email, 0);
				}
				?>
				</div>
			</div>
		<?php else : ?>
			<?php if ($i!==0) {
				// Close div col s12 m6
				echo '</div>';
				if ($i % 2 == 0) {
					// Close and start row
					echo '</div><div class="row">';
				}
			} $i++; ?>
			<div class="col s12 m6">
				<h5 class="teal-text"><?php echo $row->title; ?></h5>
				<div class="row valign-wrapper">
				<?php if($row->params->get('show_image') == 1) :?>
					<?php if ($row->img_user !== "") : ?>
					<div class="col s3">
						<?php
						$dir = $row->img_user;
						echo JHtml::_('image', $dir, 'User image', 'class="circle responsive-img"');
						?>
					</div>
					<?php else : ?>
						<div class="col s3">
							<?php if ($row->sex_user == 0) {
								echo JHtml::_('image', 'components/com_workteam/img/default-muser-img.png', 'Default user image', 'class="circle responsive-img"');
							} else {
								echo JHtml::_('image', 'components/com_workteam/img/default-wuser-img.png', 'Default user image', 'class="circle responsive-img"');
							} ?>
						</div>
					<?php endif; ?>
				<?php endif; ?>
					<div class="col s9 flow-text">
					<?php if($row->params->get('show_name') == 1) {
						echo '<span class="red-text">' . $row->contact_name . '</span><br>';
					}
					if ($row->email !== "") {
						echo JHtml::_('email.cloak', $row->email, 0);
					}
					?>
					</div>
				</div>
			<?php $cat = $row->title; ?>
		<?php endif; ?>
   <?php endforeach ?>
		</div> <!-- Close div col s12 m6 -->
	</div>
<?php endif ?>
