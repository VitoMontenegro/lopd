<?php

/**
 * Provide a admin area view for the plugin
 *
 * This file is used to markup the admin-facing aspects of the plugin.
 *
 * @link       https://my-plugin/author
 * @since      1.0.0
 *
 * @package    My_Plugin
 * @subpackage My_Plugin/admin/partials
 */

$url = get_admin_url() . 'options-general.php?page=my-plugin';

$tab = 'selectdates';
if(isset($_REQUEST['tab'])) $tab = $_REQUEST['tab'];

?>

<!-- This file should primarily consist of HTML with a little bit of PHP. -->
<div class="ihc-dashboard-wrap">
    <div class="ihc-admin-header">
        <div class="ihc-top-menu-section">

            <div class="ihc-dashboard-menu">
                <div class="ihc-admin-mobile-bttn-wrapp"><i class="ihc-admin-mobile-bttn"></i></div>
                <ul  class="ihc-dashboard-menu-items nav nav-tabs">

                    <li class="nav-item<?php if($tab=='selectdates'){echo ' active';} ?>">
                        <a class="nav-link active" href="<?php echo $url.'&tab=selectdates';?>">
                            <div class="ihc-page-title">
                                <i class="dashicons dashicons-email"></i>
                                <div>Block 1</div>
                            </div>
                        </a>
                    </li>

                    <li class="nav-item<?php if($tab=='characteristics'){echo ' active';} ?>">
                        <a class="nav-link" href="<?php echo $url.'&tab=characteristics';?>">
                            <div class="ihc-page-title">
                                <i class="dashicons dashicons-plus-alt"></i>
                                <div>Block 2</div>
                            </div>
                        </a>
                    </li>
                    <li class="nav-item<?php if($tab=='thirdblock'){echo ' active';} ?>">
                        <a class="nav-link" href="<?php echo $url.'&tab=thirdblock';?>">
                            <div class="ihc-page-title">
                                <i class="dashicons dashicons-images-alt2"></i>
                                <div>Block 3</div>
                            </div>
                        </a>
                    </li>

                </ul>
        </div>
      </div>
    </div>

  <?php
    //tabs

    switch($tab){
      case 'selectdates':
        include_once PLUGIN_PATH . 'admin/includes/tabs/select_dates.php';
      break;
      case 'characteristics':
        include_once PLUGIN_PATH . 'admin/includes/tabs/show_the_ids.php';
      break;
      default :
        include_once PLUGIN_PATH . 'admin/includes/tabs/print.php';
        break;
    }

  ?>
</div>