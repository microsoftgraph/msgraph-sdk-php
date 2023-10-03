<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Enum;

class PayloadTheme extends Enum {
    public const UNKNOWN = 'unknown';
    public const OTHER = 'other';
    public const ACCOUNT_ACTIVATION = 'accountActivation';
    public const ACCOUNT_VERIFICATION = 'accountVerification';
    public const BILLING = 'billing';
    public const CLEAN_UP_MAIL = 'cleanUpMail';
    public const CONTROVERSIAL = 'controversial';
    public const DOCUMENT_RECEIVED = 'documentReceived';
    public const EXPENSE = 'expense';
    public const FAX = 'fax';
    public const FINANCE_REPORT = 'financeReport';
    public const INCOMING_MESSAGES = 'incomingMessages';
    public const INVOICE = 'invoice';
    public const ITEM_RECEIVED = 'itemReceived';
    public const LOGIN_ALERT = 'loginAlert';
    public const MAIL_RECEIVED = 'mailReceived';
    public const PASSWORD = 'password';
    public const PAYMENT = 'payment';
    public const PAYROLL = 'payroll';
    public const PERSONALIZED_OFFER = 'personalizedOffer';
    public const QUARANTINE = 'quarantine';
    public const REMOTE_WORK = 'remoteWork';
    public const REVIEW_MESSAGE = 'reviewMessage';
    public const SECURITY_UPDATE = 'securityUpdate';
    public const SERVICE_SUSPENDED = 'serviceSuspended';
    public const SIGNATURE_REQUIRED = 'signatureRequired';
    public const UPGRADE_MAILBOX_STORAGE = 'upgradeMailboxStorage';
    public const VERIFY_MAILBOX = 'verifyMailbox';
    public const VOICEMAIL = 'voicemail';
    public const ADVERTISEMENT = 'advertisement';
    public const EMPLOYEE_ENGAGEMENT = 'employeeEngagement';
    public const UNKNOWN_FUTURE_VALUE = 'unknownFutureValue';
}
