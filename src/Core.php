<?php

namespace SSM\Core;

class Core {

    public static function setup() {

        add_filter('admin_footer_text', Core::override_admin_footer_text );

    }

    /**
     * Modify the admin footer text
     * See: http://wp-snippets.com/change-footer-text-in-wp-admin/
     */
    public function override_admin_footer_text() {

        $footer_text = get_option("ssm_core_agency_name") != NULL ? get_option("ssm_core_agency_name") : "Secret Stache Media";
        $footer_link = get_option("ssm_core_agency_url") != NULL ? get_option("ssm_core_agency_url") : "http://secretstache.com";

        echo "Built by <a href=\"" . $footer_link . "\" target=\"_blank\">" . $footer_text . "</a> with WordPress.";
    }

}
