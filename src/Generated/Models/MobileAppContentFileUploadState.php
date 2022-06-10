<?php

namespace Microsoft\Graph\Models;

use Microsoft\Kiota\Abstractions\Enum;

class MobileAppContentFileUploadState extends Enum {
    public const SUCCESS = 'success';
    public const TRANSIENT_ERROR = 'transientError';
    public const ERROR = 'error';
    public const UNKNOWN = 'unknown';
    public const AZURE_STORAGE_URI_REQUEST_SUCCESS = 'azureStorageUriRequestSuccess';
    public const AZURE_STORAGE_URI_REQUEST_PENDING = 'azureStorageUriRequestPending';
    public const AZURE_STORAGE_URI_REQUEST_FAILED = 'azureStorageUriRequestFailed';
    public const AZURE_STORAGE_URI_REQUEST_TIMED_OUT = 'azureStorageUriRequestTimedOut';
    public const AZURE_STORAGE_URI_RENEWAL_SUCCESS = 'azureStorageUriRenewalSuccess';
    public const AZURE_STORAGE_URI_RENEWAL_PENDING = 'azureStorageUriRenewalPending';
    public const AZURE_STORAGE_URI_RENEWAL_FAILED = 'azureStorageUriRenewalFailed';
    public const AZURE_STORAGE_URI_RENEWAL_TIMED_OUT = 'azureStorageUriRenewalTimedOut';
    public const COMMIT_FILE_SUCCESS = 'commitFileSuccess';
    public const COMMIT_FILE_PENDING = 'commitFilePending';
    public const COMMIT_FILE_FAILED = 'commitFileFailed';
    public const COMMIT_FILE_TIMED_OUT = 'commitFileTimedOut';
}
