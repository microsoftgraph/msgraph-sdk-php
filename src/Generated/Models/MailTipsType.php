<?php

namespace Microsoft\\Graph\\Generated\Models;

use Microsoft\Kiota\Abstractions\Enum;

class MailTipsType extends Enum {
    public const AUTOMATIC_REPLIES = "automaticReplies";
    public const MAILBOX_FULL_STATUS = "mailboxFullStatus";
    public const CUSTOM_MAIL_TIP = "customMailTip";
    public const EXTERNAL_MEMBER_COUNT = "externalMemberCount";
    public const TOTAL_MEMBER_COUNT = "totalMemberCount";
    public const MAX_MESSAGE_SIZE = "maxMessageSize";
    public const DELIVERY_RESTRICTION = "deliveryRestriction";
    public const MODERATION_STATUS = "moderationStatus";
    public const RECIPIENT_SCOPE = "recipientScope";
    public const RECIPIENT_SUGGESTIONS = "recipientSuggestions";
}
