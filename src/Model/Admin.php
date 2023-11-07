<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* Admin File
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
* Admin class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class Admin implements \JsonSerializable
{
    /**
    * The array of properties available
    * to the model
    *
    * @var array $_propDict
    */
    protected $_propDict;

    /**
    * Construct a new Admin
    *
    * @param array $propDict A list of properties to set
    */
    function __construct($propDict = array())
    {
        if (!is_array($propDict)) {
           $propDict = array();
        }
        $this->_propDict = $propDict;
    }

    /**
    * Gets the property dictionary of the Admin
    *
    * @return array The list of properties
    */
    public function getProperties()
    {
        return $this->_propDict;
    }

    /**
    * Gets the edge
    * A container for Microsoft Edge resources. Read-only.
    *
    * @return Edge|null The edge
    */
    public function getEdge()
    {
        if (array_key_exists("edge", $this->_propDict)) {
            if (is_a($this->_propDict["edge"], "\Microsoft\Graph\Model\Edge") || is_null($this->_propDict["edge"])) {
                return $this->_propDict["edge"];
            } else {
                $this->_propDict["edge"] = new Edge($this->_propDict["edge"]);
                return $this->_propDict["edge"];
            }
        }
        return null;
    }

    /**
    * Sets the edge
    * A container for Microsoft Edge resources. Read-only.
    *
    * @param Edge $val The edge
    *
    * @return Admin
    */
    public function setEdge($val)
    {
        $this->_propDict["edge"] = $val;
        return $this;
    }

    /**
    * Gets the sharepoint
    *
    * @return Sharepoint|null The sharepoint
    */
    public function getSharepoint()
    {
        if (array_key_exists("sharepoint", $this->_propDict)) {
            if (is_a($this->_propDict["sharepoint"], "\Microsoft\Graph\Model\Sharepoint") || is_null($this->_propDict["sharepoint"])) {
                return $this->_propDict["sharepoint"];
            } else {
                $this->_propDict["sharepoint"] = new Sharepoint($this->_propDict["sharepoint"]);
                return $this->_propDict["sharepoint"];
            }
        }
        return null;
    }

    /**
    * Sets the sharepoint
    *
    * @param Sharepoint $val The sharepoint
    *
    * @return Admin
    */
    public function setSharepoint($val)
    {
        $this->_propDict["sharepoint"] = $val;
        return $this;
    }

    /**
    * Gets the serviceAnnouncement
    * A container for service communications resources. Read-only.
    *
    * @return ServiceAnnouncement|null The serviceAnnouncement
    */
    public function getServiceAnnouncement()
    {
        if (array_key_exists("serviceAnnouncement", $this->_propDict)) {
            if (is_a($this->_propDict["serviceAnnouncement"], "\Microsoft\Graph\Model\ServiceAnnouncement") || is_null($this->_propDict["serviceAnnouncement"])) {
                return $this->_propDict["serviceAnnouncement"];
            } else {
                $this->_propDict["serviceAnnouncement"] = new ServiceAnnouncement($this->_propDict["serviceAnnouncement"]);
                return $this->_propDict["serviceAnnouncement"];
            }
        }
        return null;
    }

    /**
    * Sets the serviceAnnouncement
    * A container for service communications resources. Read-only.
    *
    * @param ServiceAnnouncement $val The serviceAnnouncement
    *
    * @return Admin
    */
    public function setServiceAnnouncement($val)
    {
        $this->_propDict["serviceAnnouncement"] = $val;
        return $this;
    }

    /**
    * Gets the people
    * Represents a setting to control people-related admin settings in the tenant.
    *
    * @return PeopleAdminSettings|null The people
    */
    public function getPeople()
    {
        if (array_key_exists("people", $this->_propDict)) {
            if (is_a($this->_propDict["people"], "\Microsoft\Graph\Model\PeopleAdminSettings") || is_null($this->_propDict["people"])) {
                return $this->_propDict["people"];
            } else {
                $this->_propDict["people"] = new PeopleAdminSettings($this->_propDict["people"]);
                return $this->_propDict["people"];
            }
        }
        return null;
    }

    /**
    * Sets the people
    * Represents a setting to control people-related admin settings in the tenant.
    *
    * @param PeopleAdminSettings $val The people
    *
    * @return Admin
    */
    public function setPeople($val)
    {
        $this->_propDict["people"] = $val;
        return $this;
    }

    /**
    * Gets the ODataType
    *
    * @return string|null The ODataType
    */
    public function getODataType()
    {
        if (array_key_exists('@odata.type', $this->_propDict)) {
            return $this->_propDict["@odata.type"];
        }
        return null;
    }

    /**
    * Sets the ODataType
    *
    * @param string $val The ODataType
    *
    * @return Admin
    */
    public function setODataType($val)
    {
        $this->_propDict["@odata.type"] = $val;
        return $this;
    }

    /**
    * Serializes the object by property array
    * Manually serialize DateTime into RFC3339 format
    *
    * @return array The list of properties
    */
    #[\ReturnTypeWillChange]
    public function jsonSerialize()
    {
        $serializableProperties = $this->getProperties();
        foreach ($serializableProperties as $property => $val) {
            if (is_a($val, "\DateTime")) {
                $serializableProperties[$property] = $val->format(\DateTime::RFC3339);
            } else if (is_a($val, "\Microsoft\Graph\Core\Enum")) {
                $serializableProperties[$property] = $val->value();
            } else if (is_a($val, "\Entity")) {
                $serializableProperties[$property] = $val->jsonSerialize();
            } else if (is_a($val, "\GuzzleHttp\Psr7\Stream")) {
                $serializableProperties[$property] = (string) $val;
            }
        }
        return $serializableProperties;
    }
}
