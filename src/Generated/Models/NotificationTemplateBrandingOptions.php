<?php

namespace Microsoft\Graph\Models;

use Microsoft\Kiota\Abstractions\Enum;

class NotificationTemplateBrandingOptions extends Enum {
    public const NONE = 'none';
    public const INCLUDE_COMPANY_LOGO = 'includeCompanyLogo';
    public const INCLUDE_COMPANY_NAME = 'includeCompanyName';
    public const INCLUDE_CONTACT_INFORMATION = 'includeContactInformation';
}
