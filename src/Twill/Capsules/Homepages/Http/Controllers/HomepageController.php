<?php

namespace TwillHomepage\Twill\Capsules\Homepages\Http\Controllers;

use A17\Twill\Http\Controllers\Admin\SingletonModuleController as BaseModuleController;

class HomepageController extends BaseModuleController
{
    protected $moduleName = 'homepages';

    protected $indexOptions = [
        'permalink' => false,
    ];
}
