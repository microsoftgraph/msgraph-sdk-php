<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Enum;

class FileStorageContainerTypeAppPermission extends Enum {
    public const NONE = "none";
    public const READ_CONTENT = "readContent";
    public const WRITE_CONTENT = "writeContent";
    public const MANAGE_CONTENT = "manageContent";
    public const CREATE = "create";
    public const DELETE = "delete";
    public const READ = "read";
    public const WRITE = "write";
    public const ENUMERATE_PERMISSIONS = "enumeratePermissions";
    public const ADD_PERMISSIONS = "addPermissions";
    public const UPDATE_PERMISSIONS = "updatePermissions";
    public const DELETE_PERMISSIONS = "deletePermissions";
    public const DELETE_OWN_PERMISSION = "deleteOwnPermission";
    public const MANAGE_PERMISSIONS = "managePermissions";
    public const FULL = "full";
    public const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}
