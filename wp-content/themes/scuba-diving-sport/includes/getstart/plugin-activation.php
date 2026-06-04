<?php
if ( ! class_exists( 'Scuba_Diving_Sport_Plugin_Activation_WPElemento_Importer' ) ) {
    /**
     * Scuba_Diving_Sport_Plugin_Activation_WPElemento_Importer initial setup
     *
     * @since 1.6.2
     */

    class Scuba_Diving_Sport_Plugin_Activation_WPElemento_Importer {

        private static $scuba_diving_sport_instance;
        public $scuba_diving_sport_action_count;
        public $scuba_diving_sport_recommended_actions;

        /** Initiator **/
        public static function get_instance() {
          if ( ! isset( self::$scuba_diving_sport_instance) ) {
            self::$scuba_diving_sport_instance = new self();
          }
          return self::$scuba_diving_sport_instance;
        }

        /*  Constructor */
        public function __construct() {

            add_action( 'admin_enqueue_scripts', array( $this, 'enqueue_scripts' ) );

            // ---------- wpelementoimpoter Plugin Activation -------
            add_filter( 'scuba_diving_sport_recommended_plugins', array($this, 'scuba_diving_sport_recommended_elemento_importer_plugins_array') );

            $scuba_diving_sport_actions                   = $this->scuba_diving_sport_get_recommended_actions();
            $this->scuba_diving_sport_action_count        = $scuba_diving_sport_actions['count'];
            $this->scuba_diving_sport_recommended_actions = $scuba_diving_sport_actions['actions'];

            add_action( 'wp_ajax_create_pattern_setup_builder', array( $this, 'create_pattern_setup_builder' ) );
        }

        public function scuba_diving_sport_recommended_elemento_importer_plugins_array($scuba_diving_sport_plugins){
            $scuba_diving_sport_plugins[] = array(
                    'name'     => esc_html__('WPElemento Importer', 'scuba-diving-sport'),
                    'slug'     =>  'wpelemento-importer',
                    'function' => 'WPElemento_Importer_ThemeWhizzie',
                    'desc'     => esc_html__('We highly recommend installing the WPElemento Importer plugin for importing the demo content with Elementor.', 'scuba-diving-sport'),               
            );
            return $scuba_diving_sport_plugins;
        }

        public function enqueue_scripts() {
            wp_enqueue_script('updates');      
            wp_register_script( 'scuba-diving-sport-plugin-activation-script', esc_url(get_template_directory_uri()) . '/includes/getstart/js/plugin-activation.js', array('jquery') );
            wp_localize_script('scuba-diving-sport-plugin-activation-script', 'scuba_diving_sport_plugin_activate_plugin',
                array(
                    'installing' => esc_html__('Installing', 'scuba-diving-sport'),
                    'activating' => esc_html__('Activating', 'scuba-diving-sport'),
                    'error' => esc_html__('Error', 'scuba-diving-sport'),
                    'ajax_url' => esc_url(admin_url('admin-ajax.php')),
                    'wpelementoimpoter_admin_url' => esc_url(admin_url('admin.php?page=wpelemento-importer-tgmpa-install-plugins')),
                    'addon_admin_url' => esc_url(admin_url('admin.php?page=wpelementoimporter-wizard'))
                )
            );
            wp_enqueue_script( 'scuba-diving-sport-plugin-activation-script' );

        }

        // --------- Plugin Actions ---------
        public function scuba_diving_sport_get_recommended_actions() {

            $scuba_diving_sport_act_count  = 0;
            $scuba_diving_sport_actions_todo = get_option( 'recommending_actions', array());

            $scuba_diving_sport_plugins = $this->scuba_diving_sport_get_recommended_plugins();

            if ($scuba_diving_sport_plugins) {
                foreach ($scuba_diving_sport_plugins as $scuba_diving_sport_key => $scuba_diving_sport_plugin) {
                    $scuba_diving_sport_action = array();
                    if (!isset($scuba_diving_sport_plugin['slug'])) {
                        continue;
                    }

                    $scuba_diving_sport_action['id']   = 'install_' . $scuba_diving_sport_plugin['slug'];
                    $scuba_diving_sport_action['desc'] = '';
                    if (isset($scuba_diving_sport_plugin['desc'])) {
                        $scuba_diving_sport_action['desc'] = $scuba_diving_sport_plugin['desc'];
                    }

                    $scuba_diving_sport_action['name'] = '';
                    if (isset($scuba_diving_sport_plugin['name'])) {
                        $scuba_diving_sport_action['title'] = $scuba_diving_sport_plugin['name'];
                    }

                    $scuba_diving_sport_link_and_is_done  = $this->scuba_diving_sport_get_plugin_buttion($scuba_diving_sport_plugin['slug'], $scuba_diving_sport_plugin['name'], $scuba_diving_sport_plugin['function']);
                    $scuba_diving_sport_action['link']    = $scuba_diving_sport_link_and_is_done['button'];
                    $scuba_diving_sport_action['is_done'] = $scuba_diving_sport_link_and_is_done['done'];
                    if (!$scuba_diving_sport_action['is_done'] && (!isset($scuba_diving_sport_actions_todo[$scuba_diving_sport_action['id']]) || !$scuba_diving_sport_actions_todo[$scuba_diving_sport_action['id']])) {
                        $scuba_diving_sport_act_count++;
                    }
                    $scuba_diving_sport_recommended_actions[] = $scuba_diving_sport_action;
                    $scuba_diving_sport_actions_todo[]        = array('id' => $scuba_diving_sport_action['id'], 'watch' => true);
                }
                return array('count' => $scuba_diving_sport_act_count, 'actions' => $scuba_diving_sport_recommended_actions);
            }

        }

        public function scuba_diving_sport_get_recommended_plugins() {

            $scuba_diving_sport_plugins = apply_filters('scuba_diving_sport_recommended_plugins', array());
            return $scuba_diving_sport_plugins;
        }

        public function scuba_diving_sport_get_plugin_buttion($slug, $name, $function) {
                $scuba_diving_sport_is_done      = false;
                $scuba_diving_sport_button_html  = '';
                $scuba_diving_sport_is_installed = $this->is_plugin_installed($slug);
                $scuba_diving_sport_plugin_path  = $this->get_plugin_basename_from_slug($slug);
                $scuba_diving_sport_is_activeted = (class_exists($function)) ? true : false;
                if (!$scuba_diving_sport_is_installed) {
                    $scuba_diving_sport_plugin_install_url = add_query_arg(
                        array(
                            'action' => 'install-plugin',
                            'plugin' => $slug,
                        ),
                        self_admin_url('update.php')
                    );
                    $scuba_diving_sport_plugin_install_url = wp_nonce_url($scuba_diving_sport_plugin_install_url, 'install-plugin_' . esc_attr($slug));
                    $scuba_diving_sport_button_html        = sprintf('<a class="scuba-diving-sport-plugin-install install-now button-secondary button" data-slug="%1$s" href="%2$s" aria-label="%3$s" data-name="%4$s">%5$s</a>',
                        esc_attr($slug),
                        esc_url($scuba_diving_sport_plugin_install_url),
                        sprintf(esc_html__('Install %s Now', 'scuba-diving-sport'), esc_html($name)),
                        esc_html($name),
                        esc_html__('Install & Activate', 'scuba-diving-sport')
                    );
                } elseif ($scuba_diving_sport_is_installed && !$scuba_diving_sport_is_activeted) {

                    $scuba_diving_sport_plugin_activate_link = add_query_arg(
                        array(
                            'action'        => 'activate',
                            'plugin'        => rawurlencode($scuba_diving_sport_plugin_path),
                            'plugin_status' => 'all',
                            'paged'         => '1',
                            '_wpnonce'      => wp_create_nonce('activate-plugin_' . $scuba_diving_sport_plugin_path),
                        ), self_admin_url('plugins.php')
                    );

                    $scuba_diving_sport_button_html = sprintf('<a class="scuba-diving-sport-plugin-activate activate-now button-primary button" data-slug="%1$s" href="%2$s" aria-label="%3$s" data-name="%4$s">%5$s</a>',
                        esc_attr($slug),
                        esc_url($scuba_diving_sport_plugin_activate_link),
                        sprintf(esc_html__('Activate %s Now', 'scuba-diving-sport'), esc_html($name)),
                        esc_html($name),
                        esc_html__('Activate', 'scuba-diving-sport')
                    );
                } elseif ($scuba_diving_sport_is_activeted) {
                    $scuba_diving_sport_button_html = sprintf('<div class="action-link button disabled"><span class="dashicons dashicons-yes"></span> %s</div>', esc_html__('Active', 'scuba-diving-sport'));
                    $scuba_diving_sport_is_done     = true;
                }

                return array('done' => $scuba_diving_sport_is_done, 'button' => $scuba_diving_sport_button_html);
            }
        public function is_plugin_installed($slug) {
            $scuba_diving_sport_installed_plugins = $this->get_installed_plugins(); // Retrieve a list of all installed plugins (WP cached).
            $scuba_diving_sport_file_path         = $this->get_plugin_basename_from_slug($slug);
            return (!empty($scuba_diving_sport_installed_plugins[$scuba_diving_sport_file_path]));
        }
        public function get_plugin_basename_from_slug($slug) {
            $scuba_diving_sport_keys = array_keys($this->get_installed_plugins());
            foreach ($scuba_diving_sport_keys as $scuba_diving_sport_key) {
                if (preg_match('|^' . $slug . '/|', $scuba_diving_sport_key)) {
                    return $scuba_diving_sport_key;
                }
            }
            return $slug;
        }

        public function get_installed_plugins() {

            if (!function_exists('get_plugins')) {
                require_once ABSPATH . 'wp-admin/includes/plugin.php';
            }

            return get_plugins();
        }
        public function create_pattern_setup_builder() {

            $edit_page = admin_url().'post-new.php?post_type=page&create_pattern=true';
            echo json_encode(['page_id'=>'','edit_page_url'=> $edit_page ]);

            exit;
        }

    }
}
/**
 * Kicking this off by calling 'get_instance()' method
 */
Scuba_Diving_Sport_Plugin_Activation_WPElemento_Importer::get_instance();