<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* CustomSubjectAlternativeName File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   GIT: 1.4.0
* @link      https://graph.microsoft.io/
*/
namespace Microsoft\Graph\Beta\Model;
/**
* CustomSubjectAlternativeName class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 1.4.0
* @link      https://graph.microsoft.io/
*/
class CustomSubjectAlternativeName extends Entity
{

    /**
    * Gets the sanType
    *
    * @return SubjectAlternativeNameType The sanType
    */
    public function getSanType()
    {
        if (array_key_exists("sanType", $this->_propDict)) {
            if (is_a($this->_propDict["sanType"], "Microsoft\Graph\Beta\Model\SubjectAlternativeNameType")) {
                return $this->_propDict["sanType"];
            } else {
                $this->_propDict["sanType"] = new SubjectAlternativeNameType($this->_propDict["sanType"]);
                return $this->_propDict["sanType"];
            }
        }
        return null;
    }

    /**
    * Sets the sanType
    *
    * @param SubjectAlternativeNameType $val The value to assign to the sanType
    *
    * @return CustomSubjectAlternativeName The CustomSubjectAlternativeName
    */
    public function setSanType($val)
    {
        $this->_propDict["sanType"] = $val;
         return $this;
    }
    /**
    * Gets the name
    *
    * @return string The name
    */
    public function getName()
    {
        if (array_key_exists("name", $this->_propDict)) {
            return $this->_propDict["name"];
        } else {
            return null;
        }
    }

    /**
    * Sets the name
    *
    * @param string $val The value of the name
    *
    * @return CustomSubjectAlternativeName
    */
    public function setName($val)
    {
        $this->_propDict["name"] = $val;
        return $this;
    }
}
