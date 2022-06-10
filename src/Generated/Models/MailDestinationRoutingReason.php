<?php

namespace Microsoft\Graph\Models;

use Microsoft\Kiota\Abstractions\Enum;

class MailDestinationRoutingReason extends Enum {
    public const NONE = 'none';
    public const MAIL_FLOW_RULE = 'mailFlowRule';
    public const SAFE_SENDER = 'safeSender';
    public const BLOCKED_SENDER = 'blockedSender';
    public const ADVANCED_SPAM_FILTERING = 'advancedSpamFiltering';
    public const DOMAIN_ALLOW_LIST = 'domainAllowList';
    public const DOMAIN_BLOCK_LIST = 'domainBlockList';
    public const NOT_IN_ADDRESS_BOOK = 'notInAddressBook';
    public const FIRST_TIME_SENDER = 'firstTimeSender';
    public const AUTO_PURGE_TO_INBOX = 'autoPurgeToInbox';
    public const AUTO_PURGE_TO_JUNK = 'autoPurgeToJunk';
    public const AUTO_PURGE_TO_DELETED = 'autoPurgeToDeleted';
    public const OUTBOUND = 'outbound';
    public const NOT_JUNK = 'notJunk';
    public const JUNK = 'junk';
    public const UNKNOWN_FUTURE_VALUE = 'unknownFutureValue';
}
