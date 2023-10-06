<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* AwsStatement File
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
* AwsStatement class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class AwsStatement implements \JsonSerializable
{
    /**
    * The array of properties available
    * to the model
    *
    * @var array $_propDict
    */
    protected $_propDict;

    /**
    * Construct a new AwsStatement
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
    * Gets the property dictionary of the AwsStatement
    *
    * @return array The list of properties
    */
    public function getProperties()
    {
        return $this->_propDict;
    }

    /**
    * Gets the actions
    *
    * @return array|null The actions
    */
    public function getActions()
    {
        if (array_key_exists("actions", $this->_propDict)) {
            return $this->_propDict["actions"];
        } else {
            return null;
        }
    }

    /**
    * Sets the actions
    *
    * @param string[] $val The actions
    *
    * @return AwsStatement
    */
    public function setActions($val)
    {
        $this->_propDict["actions"] = $val;
        return $this;
    }

    /**
    * Gets the condition
    *
    * @return AwsCondition|null The condition
    */
    public function getCondition()
    {
        if (array_key_exists("condition", $this->_propDict)) {
            if (is_a($this->_propDict["condition"], "\Beta\Microsoft\Graph\Model\AwsCondition") || is_null($this->_propDict["condition"])) {
                return $this->_propDict["condition"];
            } else {
                $this->_propDict["condition"] = new AwsCondition($this->_propDict["condition"]);
                return $this->_propDict["condition"];
            }
        }
        return null;
    }

    /**
    * Sets the condition
    *
    * @param AwsCondition $val The condition
    *
    * @return AwsStatement
    */
    public function setCondition($val)
    {
        $this->_propDict["condition"] = $val;
        return $this;
    }

    /**
    * Gets the effect
    *
    * @return AwsStatementEffect|null The effect
    */
    public function getEffect()
    {
        if (array_key_exists("effect", $this->_propDict)) {
            if (is_a($this->_propDict["effect"], "\Beta\Microsoft\Graph\Model\AwsStatementEffect") || is_null($this->_propDict["effect"])) {
                return $this->_propDict["effect"];
            } else {
                $this->_propDict["effect"] = new AwsStatementEffect($this->_propDict["effect"]);
                return $this->_propDict["effect"];
            }
        }
        return null;
    }

    /**
    * Sets the effect
    *
    * @param AwsStatementEffect $val The effect
    *
    * @return AwsStatement
    */
    public function setEffect($val)
    {
        $this->_propDict["effect"] = $val;
        return $this;
    }

    /**
    * Gets the notActions
    *
    * @return array|null The notActions
    */
    public function getNotActions()
    {
        if (array_key_exists("notActions", $this->_propDict)) {
            return $this->_propDict["notActions"];
        } else {
            return null;
        }
    }

    /**
    * Sets the notActions
    *
    * @param string[] $val The notActions
    *
    * @return AwsStatement
    */
    public function setNotActions($val)
    {
        $this->_propDict["notActions"] = $val;
        return $this;
    }

    /**
    * Gets the notResources
    *
    * @return array|null The notResources
    */
    public function getNotResources()
    {
        if (array_key_exists("notResources", $this->_propDict)) {
            return $this->_propDict["notResources"];
        } else {
            return null;
        }
    }

    /**
    * Sets the notResources
    *
    * @param string[] $val The notResources
    *
    * @return AwsStatement
    */
    public function setNotResources($val)
    {
        $this->_propDict["notResources"] = $val;
        return $this;
    }

    /**
    * Gets the resources
    *
    * @return array|null The resources
    */
    public function getResources()
    {
        if (array_key_exists("resources", $this->_propDict)) {
            return $this->_propDict["resources"];
        } else {
            return null;
        }
    }

    /**
    * Sets the resources
    *
    * @param string[] $val The resources
    *
    * @return AwsStatement
    */
    public function setResources($val)
    {
        $this->_propDict["resources"] = $val;
        return $this;
    }

    /**
    * Gets the statementId
    *
    * @return string|null The statementId
    */
    public function getStatementId()
    {
        if (array_key_exists("statementId", $this->_propDict)) {
            return $this->_propDict["statementId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the statementId
    *
    * @param string $val The statementId
    *
    * @return AwsStatement
    */
    public function setStatementId($val)
    {
        $this->_propDict["statementId"] = $val;
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
    * @return AwsStatement
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
