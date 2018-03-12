<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* LocationType File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright 2016 Microsoft Corporation
* @license   https://opensource.org/licenses/MIT MIT License
* @version   GIT: 0.1.0
* @link      https://graph.microsoft.io/
*/
namespace Microsoft\Graph\Beta\Model;

use Microsoft\Graph\Core\Enum;

/**
* LocationType class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright 2016 Microsoft Corporation
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 0.1.0
* @link      https://graph.microsoft.io/
*/
class LocationType extends Enum
{
    /**
    * The Enum LocationType
    */
    const GRAPHDEFAULT = "default";
    const CONFERENCE_ROOM = "conferenceRoom";
    const HOME_ADDRESS = "homeAddress";
    const BUSINESS_ADDRESS = "businessAddress";
    const GEO_COORDINATES = "geoCoordinates";
    const STREET_ADDRESS = "streetAddress";
    const HOTEL = "hotel";
    const RESTAURANT = "restaurant";
    const LOCAL_BUSINESS = "localBusiness";
    const POSTAL_ADDRESS = "postalAddress";
}