<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Enum;

class UsageRights extends Enum {
    public const UNKNOWN = "unknown";
    public const DOC_EDIT = "docEdit";
    public const EDIT = "edit";
    public const COMMENT = "comment";
    public const EXPORT = "export";
    public const FORWARD = "forward";
    public const OWNER = "owner";
    public const PRINT = "print";
    public const REPLY = "reply";
    public const REPLY_ALL = "replyAll";
    public const VIEW = "view";
    public const EXTRACT = "extract";
    public const VIEW_RIGHTS_DATA = "viewRightsData";
    public const EDIT_RIGHTS_DATA = "editRightsData";
    public const OBJ_MODEL = "objModel";
    public const ACCESS_DENIED = "accessDenied";
    public const USER_DEFINED_PROTECTION_TYPE_NOT_SUPPORTED_EXCEPTION = "userDefinedProtectionTypeNotSupportedException";
    public const ENCRYPTED_PROTECTION_TYPE_NOT_SUPPORTED_EXCEPTION = "encryptedProtectionTypeNotSupportedException";
    public const PURVIEW_CLAIMS_CHALLENGE_NOT_SUPPORTED_EXCEPTION = "purviewClaimsChallengeNotSupportedException";
    public const EXCEPTION = "exception";
    public const LABEL_NOT_FOUND_EXCEPTION = "labelNotFoundException";
    public const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}
