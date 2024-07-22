<?php
/**
 * @link https://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license https://www.yiiframework.com/license/
 */

namespace app\assets;

use yii\web\AssetBundle;

/**
 * Main application asset bundle.
 *
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class DashboardAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        // 'css/site.css',
        "assets/plugins/custom/datatables/datatables.bundle.css",
		"assets/plugins/custom/vis-timeline/vis-timeline.bundle.css",
		"assets/plugins/global/plugins.bundle.css",
		"assets/css/style.bundle.css",
    ];
    public $js = [
		"assets/plugins/global/plugins.bundle.js",
		"assets/js/scripts.bundle.js",
		"assets/plugins/custom/datatables/datatables.bundle.js",
		"assets/plugins/custom/vis-timeline/vis-timeline.bundle.js",
		"https://cdn.amcharts.com/lib/5/index.js",
		"https://cdn.amcharts.com/lib/5/xy.js",
		"https://cdn.amcharts.com/lib/5/percent.js",
		"https://cdn.amcharts.com/lib/5/radar.js",
		"https://cdn.amcharts.com/lib/5/themes/Animated.js",
		"assets/js/widgets.bundle.js",
		"assets/js/custom/widgets.js",
		"assets/js/custom/apps/chat/chat.js",
		"assets/js/custom/utilities/modals/upgrade-plan.js",
		"assets/js/custom/utilities/modals/create-campaign.js",
		"assets/js/custom/utilities/modals/create-app.js",
		"assets/js/custom/utilities/modals/create-project/type.js",
		"assets/js/custom/utilities/modals/create-project/budget.js",
		"assets/js/custom/utilities/modals/create-project/settings.js",
		"assets/js/custom/utilities/modals/create-project/team.js",
		"assets/js/custom/utilities/modals/create-project/targets.js",
		"assets/js/custom/utilities/modals/create-project/files.js",
		"assets/js/custom/utilities/modals/create-project/complete.js",
		"assets/js/custom/utilities/modals/create-project/main.js",
		"assets/js/custom/utilities/modals/new-address.js",
		"assets/js/custom/utilities/modals/users-search.js",
    ];
    public $depends = [
        'yii\web\YiiAsset',
        // 'yii\bootstrap5\BootstrapAsset'
    ];
}
