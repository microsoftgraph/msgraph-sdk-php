<?php

namespace Microsoft\\Graph\\Generated\Models;

use Microsoft\Kiota\Abstractions\Enum;

class WhatIfAnalysisReasons extends Enum {
    public const NOT_SET = "notSet";
    public const NOT_ENOUGH_INFORMATION = "notEnoughInformation";
    public const INVALID_CONDITION = "invalidCondition";
    public const USERS = "users";
    public const WORKLOAD_IDENTITIES = "workloadIdentities";
    public const APPLICATION = "application";
    public const USER_ACTIONS = "userActions";
    public const AUTHENTICATION_CONTEXT = "authenticationContext";
    public const DEVICE_PLATFORM = "devicePlatform";
    public const DEVICES = "devices";
    public const CLIENT_APPS = "clientApps";
    public const LOCATION = "location";
    public const SIGN_IN_RISK = "signInRisk";
    public const EMPTY_POLICY = "emptyPolicy";
    public const INVALID_POLICY = "invalidPolicy";
    public const POLICY_NOT_ENABLED = "policyNotEnabled";
    public const USER_RISK = "userRisk";
    public const TIME = "time";
    public const INSIDER_RISK = "insiderRisk";
    public const AUTHENTICATION_FLOW = "authenticationFlow";
    public const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}
