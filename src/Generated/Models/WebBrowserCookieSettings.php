<?php

namespace Microsoft\Graph\Models;

use Microsoft\Kiota\Abstractions\Enum;

class WebBrowserCookieSettings extends Enum {
    public const BROWSER_DEFAULT = 'browserDefault';
    public const BLOCK_ALWAYS = 'blockAlways';
    public const ALLOW_CURRENT_WEB_SITE = 'allowCurrentWebSite';
    public const ALLOW_FROM_WEBSITES_VISITED = 'allowFromWebsitesVisited';
    public const ALLOW_ALWAYS = 'allowAlways';
}
