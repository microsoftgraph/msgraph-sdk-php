<?php

namespace Microsoft\Graph\Generated\Models\Security;

use Microsoft\Kiota\Abstractions\Enum;

class MailboxConfigurationType extends Enum {
    public const MAIL_FORWARDING_RULE = 'mailForwardingRule';
    public const OWA_SETTINGS = 'owaSettings';
    public const EWS_SETTINGS = 'ewsSettings';
    public const MAIL_DELEGATION = 'mailDelegation';
    public const USER_INBOX_RULE = 'userInboxRule';
    public const UNKNOWN_FUTURE_VALUE = 'unknownFutureValue';
}
