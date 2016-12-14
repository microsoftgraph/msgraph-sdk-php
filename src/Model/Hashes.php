<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* Hashes File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright 2016 Microsoft Corporation
* @license   https://opensource.org/licenses/MIT MIT License
* @version   GIT: 0.1.0
* @link      https://graph.microsoft.io/
*/
namespace Microsoft\Graph\Model;
/**
* Hashes class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright 2016 Microsoft Corporation
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 0.1.0
* @link      https://graph.microsoft.io/
*/
class Hashes extends Entity
{
    /**
    * The array of properties available 
    * to the model
    *
    * @var array(string => string)
    */
    private $_propDict;
    /**
    * Hashes constructor
    *
    * @param array $propDict List of properties to set
    * Defaults to an empty array
    *
    * @return Hashes
    */
    public function __construct($propDict=array())
    {
        parent::__construct();
        $this->_propDict = $propDict;
        return $this;
    }

	/**
    * Gets the property dictionary of the Hashes
    *
    * @return array The list of properties
    */
    public function getProperties()
    {
        return $this->_propDict;
    }
    
    /**
    * Gets the crc32Hash
    *
    * @return string The crc32Hash
    */
    public function getCrc32Hash()
    {
        if (array_key_exists("crc32Hash", $this->_propDict)) {
            return $this->_propDict["crc32Hash"];
        } else {
            return null;
        }
    }

    /**
    * Sets the crc32Hash
    *
    * @param string $val The value of the crc32Hash
    *
    * @return Hashes
    */
    public function setCrc32Hash($val)
    {
        $this->_propDict["crc32_hash"] = $val;
        return $this;
    }
    
    /**
    * Gets the sha1Hash
    *
    * @return string The sha1Hash
    */
    public function getSha1Hash()
    {
        if (array_key_exists("sha1Hash", $this->_propDict)) {
            return $this->_propDict["sha1Hash"];
        } else {
            return null;
        }
    }

    /**
    * Sets the sha1Hash
    *
    * @param string $val The value of the sha1Hash
    *
    * @return Hashes
    */
    public function setSha1Hash($val)
    {
        $this->_propDict["sha1_hash"] = $val;
        return $this;
    }
    
    /**
    * Gets the quickXorHash
    *
    * @return string The quickXorHash
    */
    public function getQuickXorHash()
    {
        if (array_key_exists("quickXorHash", $this->_propDict)) {
            return $this->_propDict["quickXorHash"];
        } else {
            return null;
        }
    }

    /**
    * Sets the quickXorHash
    *
    * @param string $val The value of the quickXorHash
    *
    * @return Hashes
    */
    public function setQuickXorHash($val)
    {
        $this->_propDict["quick_xor_hash"] = $val;
        return $this;
    }
}
