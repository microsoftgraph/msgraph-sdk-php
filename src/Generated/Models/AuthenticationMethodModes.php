<?php

namespace Microsoft\\Graph\\Generated\Models;

use Microsoft\Kiota\Abstractions\Enum;

class AuthenticationMethodModes extends Enum {
    public const PASSWORD = "password";
    public const VOICE = "voice";
    public const HARDWARE_OATH = "hardwareOath";
    public const SOFTWARE_OATH = "softwareOath";
    public const SMS = "sms";
    public const FIDO2 = "fido2";
    public const WINDOWS_HELLO_FOR_BUSINESS = "windowsHelloForBusiness";
    public const MICROSOFT_AUTHENTICATOR_PUSH = "microsoftAuthenticatorPush";
    public const DEVICE_BASED_PUSH = "deviceBasedPush";
    public const TEMPORARY_ACCESS_PASS_ONE_TIME = "temporaryAccessPassOneTime";
    public const TEMPORARY_ACCESS_PASS_MULTI_USE = "temporaryAccessPassMultiUse";
    public const EMAIL = "email";
    public const X509_CERTIFICATE_SINGLE_FACTOR = "x509CertificateSingleFactor";
    public const X509_CERTIFICATE_MULTI_FACTOR = "x509CertificateMultiFactor";
    public const FEDERATED_SINGLE_FACTOR = "federatedSingleFactor";
    public const FEDERATED_MULTI_FACTOR = "federatedMultiFactor";
    public const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}
