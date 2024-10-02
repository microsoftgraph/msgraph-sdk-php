<?php

namespace Microsoft\Graph\Generated\Models\Security;

use Microsoft\Kiota\Abstractions\Enum;

class AdditionalOptions extends Enum {
    public const NONE = 'none';
    public const TEAMS_AND_YAMMER_CONVERSATIONS = 'teamsAndYammerConversations';
    public const CLOUD_ATTACHMENTS = 'cloudAttachments';
    public const ALL_DOCUMENT_VERSIONS = 'allDocumentVersions';
    public const SUBFOLDER_CONTENTS = 'subfolderContents';
    public const LIST_ATTACHMENTS = 'listAttachments';
    public const UNKNOWN_FUTURE_VALUE = 'unknownFutureValue';
}
