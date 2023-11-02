<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Enum;

class BaseAuthenticationMethod extends Enum {
    public const PASSWORD = 'password';
    public const VOICE = 'voice';
    public const HARDWARE_OATH = 'hardwareOath';
    public const SOFTWARE_OATH = 'softwareOath';
    public const SMS = 'sms';
    public const FIDO2 = 'fido2';
    public const WINDOWS_HELLO_FOR_BUSINESS = 'windowsHelloForBusiness';
    public const MICROSOFT_AUTHENTICATOR = 'microsoftAuthenticator';
    public const TEMPORARY_ACCESS_PASS = 'temporaryAccessPass';
    public const EMAIL = 'email';
    public const X509_CERTIFICATE = 'x509Certificate';
    public const FEDERATION = 'federation';
    public const UNKNOWN_FUTURE_VALUE = 'unknownFutureValue';
}
