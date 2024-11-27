<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Enum;

class LobbyBypassScope extends Enum {
    public const ORGANIZER = "organizer";
    public const ORGANIZATION = "organization";
    public const ORGANIZATION_AND_FEDERATED = "organizationAndFederated";
    public const EVERYONE = "everyone";
    public const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
    public const INVITED = "invited";
    public const ORGANIZATION_EXCLUDING_GUESTS = "organizationExcludingGuests";
}
