<?php

namespace Microsoft\Graph\Models;

use Microsoft\Kiota\Abstractions\Enum;

class SubjectRightsRequestStage extends Enum {
    public const CONTENT_RETRIEVAL = 'contentRetrieval';
    public const CONTENT_REVIEW = 'contentReview';
    public const GENERATE_REPORT = 'generateReport';
    public const CONTENT_DELETION = 'contentDeletion';
    public const CASE_RESOLVED = 'caseResolved';
    public const CONTENT_ESTIMATE = 'contentEstimate';
    public const UNKNOWN_FUTURE_VALUE = 'unknownFutureValue';
}
