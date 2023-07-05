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
namespace Beta\Microsoft\Graph\Model;

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
            if (is_a($this->_propDict["edge"], "\Beta\Microsoft\Graph\Model\Edge") || is_null($this->_propDict["edge"])) {
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
            if (is_a($this->_propDict["sharepoint"], "\Beta\Microsoft\Graph\Model\Sharepoint") || is_null($this->_propDict["sharepoint"])) {
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
            if (is_a($this->_propDict["serviceAnnouncement"], "\Beta\Microsoft\Graph\Model\ServiceAnnouncement") || is_null($this->_propDict["serviceAnnouncement"])) {
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
    * Gets the reportSettings
    * A container for administrative resources to manage reports.
    *
    * @return AdminReportSettings|null The reportSettings
    */
    public function getReportSettings()
    {
        if (array_key_exists("reportSettings", $this->_propDict)) {
            if (is_a($this->_propDict["reportSettings"], "\Beta\Microsoft\Graph\Model\AdminReportSettings") || is_null($this->_propDict["reportSettings"])) {
                return $this->_propDict["reportSettings"];
            } else {
                $this->_propDict["reportSettings"] = new AdminReportSettings($this->_propDict["reportSettings"]);
                return $this->_propDict["reportSettings"];
            }
        }
        return null;
    }

    /**
    * Sets the reportSettings
    * A container for administrative resources to manage reports.
    *
    * @param AdminReportSettings $val The reportSettings
    *
    * @return Admin
    */
    public function setReportSettings($val)
    {
        $this->_propDict["reportSettings"] = $val;
        return $this;
    }

    /**
    * Gets the appsAndServices
    *
    * @return AdminAppsAndServices|null The appsAndServices
    */
    public function getAppsAndServices()
    {
        if (array_key_exists("appsAndServices", $this->_propDict)) {
            if (is_a($this->_propDict["appsAndServices"], "\Beta\Microsoft\Graph\Model\AdminAppsAndServices") || is_null($this->_propDict["appsAndServices"])) {
                return $this->_propDict["appsAndServices"];
            } else {
                $this->_propDict["appsAndServices"] = new AdminAppsAndServices($this->_propDict["appsAndServices"]);
                return $this->_propDict["appsAndServices"];
            }
        }
        return null;
    }

    /**
    * Sets the appsAndServices
    *
    * @param AdminAppsAndServices $val The appsAndServices
    *
    * @return Admin
    */
    public function setAppsAndServices($val)
    {
        $this->_propDict["appsAndServices"] = $val;
        return $this;
    }

    /**
    * Gets the dynamics
    *
    * @return AdminDynamics|null The dynamics
    */
    public function getDynamics()
    {
        if (array_key_exists("dynamics", $this->_propDict)) {
            if (is_a($this->_propDict["dynamics"], "\Beta\Microsoft\Graph\Model\AdminDynamics") || is_null($this->_propDict["dynamics"])) {
                return $this->_propDict["dynamics"];
            } else {
                $this->_propDict["dynamics"] = new AdminDynamics($this->_propDict["dynamics"]);
                return $this->_propDict["dynamics"];
            }
        }
        return null;
    }

    /**
    * Sets the dynamics
    *
    * @param AdminDynamics $val The dynamics
    *
    * @return Admin
    */
    public function setDynamics($val)
    {
        $this->_propDict["dynamics"] = $val;
        return $this;
    }

    /**
    * Gets the forms
    *
    * @return AdminForms|null The forms
    */
    public function getForms()
    {
        if (array_key_exists("forms", $this->_propDict)) {
            if (is_a($this->_propDict["forms"], "\Beta\Microsoft\Graph\Model\AdminForms") || is_null($this->_propDict["forms"])) {
                return $this->_propDict["forms"];
            } else {
                $this->_propDict["forms"] = new AdminForms($this->_propDict["forms"]);
                return $this->_propDict["forms"];
            }
        }
        return null;
    }

    /**
    * Sets the forms
    *
    * @param AdminForms $val The forms
    *
    * @return Admin
    */
    public function setForms($val)
    {
        $this->_propDict["forms"] = $val;
        return $this;
    }

    /**
    * Gets the todo
    *
    * @return AdminTodo|null The todo
    */
    public function getTodo()
    {
        if (array_key_exists("todo", $this->_propDict)) {
            if (is_a($this->_propDict["todo"], "\Beta\Microsoft\Graph\Model\AdminTodo") || is_null($this->_propDict["todo"])) {
                return $this->_propDict["todo"];
            } else {
                $this->_propDict["todo"] = new AdminTodo($this->_propDict["todo"]);
                return $this->_propDict["todo"];
            }
        }
        return null;
    }

    /**
    * Sets the todo
    *
    * @param AdminTodo $val The todo
    *
    * @return Admin
    */
    public function setTodo($val)
    {
        $this->_propDict["todo"] = $val;
        return $this;
    }

    /**
    * Gets the windows
    * A container for all Windows administrator functionalities. Read-only.
    *
    * @return AdminWindows|null The windows
    */
    public function getWindows()
    {
        if (array_key_exists("windows", $this->_propDict)) {
            if (is_a($this->_propDict["windows"], "\Beta\Microsoft\Graph\Model\AdminWindows") || is_null($this->_propDict["windows"])) {
                return $this->_propDict["windows"];
            } else {
                $this->_propDict["windows"] = new AdminWindows($this->_propDict["windows"]);
                return $this->_propDict["windows"];
            }
        }
        return null;
    }

    /**
    * Sets the windows
    * A container for all Windows administrator functionalities. Read-only.
    *
    * @param AdminWindows $val The windows
    *
    * @return Admin
    */
    public function setWindows($val)
    {
        $this->_propDict["windows"] = $val;
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
