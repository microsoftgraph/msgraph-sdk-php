<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Enum;

class MessageActionFlag extends Enum {
    public const ANY = 'any';
    public const CALL = 'call';
    public const DO_NOT_FORWARD = 'doNotForward';
    public const FOLLOW_UP = 'followUp';
    public const FYI = 'fyi';
    public const FORWARD = 'forward';
    public const NO_RESPONSE_NECESSARY = 'noResponseNecessary';
    public const READ = 'read';
    public const REPLY = 'reply';
    public const REPLY_TO_ALL = 'replyToAll';
    public const REVIEW = 'review';
}
