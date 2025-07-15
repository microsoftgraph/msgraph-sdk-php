<?php

namespace Microsoft\Graph\Generated\Models\Security;

use Microsoft\Kiota\Abstractions\Enum;

class AuditLogUserType extends Enum {
    public const REGULAR = "Regular";
    public const RESERVED = "Reserved";
    public const ADMIN = "Admin";
    public const DC_ADMIN = "DcAdmin";
    public const SYSTEM = "System";
    public const APPLICATION = "Application";
    public const SERVICE_PRINCIPAL = "ServicePrincipal";
    public const CUSTOM_POLICY = "CustomPolicy";
    public const SYSTEM_POLICY = "SystemPolicy";
    public const PARTNER_TECHNICIAN = "PartnerTechnician";
    public const GUEST = "Guest";
    public const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}
