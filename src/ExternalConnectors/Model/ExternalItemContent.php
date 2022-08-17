<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* ExternalItemContent File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Microsoft\Graph\ExternalConnectors\Model;
/**
* ExternalItemContent class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class ExternalItemContent extends \Microsoft\Graph\Model\Entity
{

    /**
    * Gets the type
    * The type of content in the value property. Possible values are: text, html, unknownFutureValue. These are the content types that the indexer supports, and not the file extension types allowed.
    *
    * @return ExternalItemContentType|null The type
    */
    public function getType()
    {
        if (array_key_exists("type", $this->_propDict)) {
            if (is_a($this->_propDict["type"], "\Microsoft\Graph\ExternalConnectors\Model\ExternalItemContentType") || is_null($this->_propDict["type"])) {
                return $this->_propDict["type"];
            } else {
                $this->_propDict["type"] = new ExternalItemContentType($this->_propDict["type"]);
                return $this->_propDict["type"];
            }
        }
        return null;
    }

    /**
    * Sets the type
    * The type of content in the value property. Possible values are: text, html, unknownFutureValue. These are the content types that the indexer supports, and not the file extension types allowed.
    *
    * @param ExternalItemContentType $val The value to assign to the type
    *
    * @return ExternalItemContent The ExternalItemContent
    */
    public function setType($val)
    {
        $this->_propDict["type"] = $val;
         return $this;
    }
    /**
    * Gets the value
    * The content for the externalItem. Required.
    *
    * @return string|null The value
    */
    public function getValue()
    {
        if (array_key_exists("value", $this->_propDict)) {
            return $this->_propDict["value"];
        } else {
            return null;
        }
    }

    /**
    * Sets the value
    * The content for the externalItem. Required.
    *
    * @param string $val The value of the value
    *
    * @return ExternalItemContent
    */
    public function setValue($val)
    {
        $this->_propDict["value"] = $val;
        return $this;
    }
}
