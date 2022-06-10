<?php

namespace Microsoft\Graph\Models;

use Microsoft\Kiota\Abstractions\Enum;

class LocationType extends Enum {
    public const ESCAPED_DEFAULT = 'default';
    public const CONFERENCE_ROOM = 'conferenceRoom';
    public const HOME_ADDRESS = 'homeAddress';
    public const BUSINESS_ADDRESS = 'businessAddress';
    public const GEO_COORDINATES = 'geoCoordinates';
    public const STREET_ADDRESS = 'streetAddress';
    public const HOTEL = 'hotel';
    public const RESTAURANT = 'restaurant';
    public const LOCAL_BUSINESS = 'localBusiness';
    public const POSTAL_ADDRESS = 'postalAddress';
}
