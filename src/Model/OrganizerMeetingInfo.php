<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* OrganizerMeetingInfo File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Microsoft\Graph\Model;
/**
* OrganizerMeetingInfo class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class OrganizerMeetingInfo extends MeetingInfo
{
    /**
    * Set the @odata.type since this type is immediately descended from an abstract
    * type that is referenced as the type in an entity.
    * @param array $propDict The property dictionary
    */
    public function __construct($propDict = array())
    {
        parent::__construct($propDict);
        $this->setODataType("#microsoft.graph.organizerMeetingInfo");
    }


    /**
    * Gets the organizer
    * The organizer Microsoft Entra identity.
    *
    * @return IdentitySet|null The organizer
    */
    public function getOrganizer()
    {
        if (array_key_exists("organizer", $this->_propDict)) {
            if (is_a($this->_propDict["organizer"], "\Microsoft\Graph\Model\IdentitySet") || is_null($this->_propDict["organizer"])) {
                return $this->_propDict["organizer"];
            } else {
                $this->_propDict["organizer"] = new IdentitySet($this->_propDict["organizer"]);
                return $this->_propDict["organizer"];
            }
        }
        return null;
    }

    /**
    * Sets the organizer
    * The organizer Microsoft Entra identity.
    *
    * @param IdentitySet $val The value to assign to the organizer
    *
    * @return OrganizerMeetingInfo The OrganizerMeetingInfo
    */
    public function setOrganizer($val)
    {
        $this->_propDict["organizer"] = $val;
         return $this;
    }
}
