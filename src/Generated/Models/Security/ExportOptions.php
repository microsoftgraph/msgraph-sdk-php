<?php

namespace Microsoft\Graph\Generated\Models\Security;

use Microsoft\Kiota\Abstractions\Enum;

class ExportOptions extends Enum {
    public const ORIGINAL_FILES = "originalFiles";
    public const TEXT = "text";
    public const PDF_REPLACEMENT = "pdfReplacement";
    public const TAGS = "tags";
    public const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
    public const SPLIT_SOURCE = "splitSource";
    public const INCLUDE_FOLDER_AND_PATH = "includeFolderAndPath";
    public const FRIENDLY_NAME = "friendlyName";
    public const CONDENSE_PATHS = "condensePaths";
}
