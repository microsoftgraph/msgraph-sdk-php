<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Enum;

class AccessPackageRequestType extends Enum {
    public const NOT_SPECIFIED = 'notSpecified';
    public const USER_ADD = 'userAdd';
    public const USER_UPDATE = 'userUpdate';
    public const USER_REMOVE = 'userRemove';
    public const ADMIN_ADD = 'adminAdd';
    public const ADMIN_UPDATE = 'adminUpdate';
    public const ADMIN_REMOVE = 'adminRemove';
    public const SYSTEM_ADD = 'systemAdd';
    public const SYSTEM_UPDATE = 'systemUpdate';
    public const SYSTEM_REMOVE = 'systemRemove';
    public const ON_BEHALF_ADD = 'onBehalfAdd';
    public const UNKNOWN_FUTURE_VALUE = 'unknownFutureValue';
}
