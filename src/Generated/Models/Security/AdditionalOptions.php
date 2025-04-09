<?php

namespace Microsoft\Graph\Generated\Models\Security;

use Microsoft\Kiota\Abstractions\Enum;

class AdditionalOptions extends Enum {
    public const NONE = "none";
    public const TEAMS_AND_YAMMER_CONVERSATIONS = "teamsAndYammerConversations";
    public const CLOUD_ATTACHMENTS = "cloudAttachments";
    public const ALL_DOCUMENT_VERSIONS = "allDocumentVersions";
    public const SUBFOLDER_CONTENTS = "subfolderContents";
    public const LIST_ATTACHMENTS = "listAttachments";
    public const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
    public const HTML_TRANSCRIPTS = "htmlTranscripts";
    public const ADVANCED_INDEXING = "advancedIndexing";
    public const ALL_ITEMS_IN_FOLDER = "allItemsInFolder";
    public const INCLUDE_FOLDER_AND_PATH = "includeFolderAndPath";
    public const CONDENSE_PATHS = "condensePaths";
    public const FRIENDLY_NAME = "friendlyName";
    public const SPLIT_SOURCE = "splitSource";
    public const OPTIMIZED_PARTITION_SIZE = "optimizedPartitionSize";
    public const INCLUDE_REPORT = "includeReport";
}
