<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* ThumbnailSet File
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
* ThumbnailSet class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright 2016 Microsoft Corporation
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 0.1.0
* @link      https://graph.microsoft.io/
*/
class ThumbnailSet extends Entity
{
    /**
    * The array of properties available
    * to the model
    *
    * @var array(string => string)
    */
    private $_propDict;
    
    /**
    * Construct a new ThumbnailSet
    *
    * @param array $propDict A list of properties to set
    *
    * @return ThumbnailSet
    */
    function __construct($propDict = array())
    {
        parent::__construct();
        $this->_propDict = $propDict;
        return $this;
    }

    /**
    * Gets the property dictionary of the ThumbnailSet
    *
    * @return array The list of properties
    */
    public function getProperties()
    {
        return $this->_propDict;
    }

    /**
    * Gets the large
    *
    * @return Thumbnail The large
    */
    public function getLarge()
    {
        if (array_key_exists("large", $this->_propDict)) {
            if (is_a($this->_propDict["large"], "Thumbnail")) {
                return $this->_propDict["large"];
            } else {
                $this->_propDict["large"] = new Thumbnail($this->_propDict["large"]);
                return $this->_propDict["large"];
            }
        }
        return null;
    }

    /**
    * Sets the large
    *
    * @param string $val The large
    *
    * @return ThumbnailSet
    */
    public function setLarge($val)
    {
        $this->_propDict["large"] = $val;
        return $this;
    }

    /**
    * Gets the medium
    *
    * @return Thumbnail The medium
    */
    public function getMedium()
    {
        if (array_key_exists("medium", $this->_propDict)) {
            if (is_a($this->_propDict["medium"], "Thumbnail")) {
                return $this->_propDict["medium"];
            } else {
                $this->_propDict["medium"] = new Thumbnail($this->_propDict["medium"]);
                return $this->_propDict["medium"];
            }
        }
        return null;
    }

    /**
    * Sets the medium
    *
    * @param string $val The medium
    *
    * @return ThumbnailSet
    */
    public function setMedium($val)
    {
        $this->_propDict["medium"] = $val;
        return $this;
    }

    /**
    * Gets the small
    *
    * @return Thumbnail The small
    */
    public function getSmall()
    {
        if (array_key_exists("small", $this->_propDict)) {
            if (is_a($this->_propDict["small"], "Thumbnail")) {
                return $this->_propDict["small"];
            } else {
                $this->_propDict["small"] = new Thumbnail($this->_propDict["small"]);
                return $this->_propDict["small"];
            }
        }
        return null;
    }

    /**
    * Sets the small
    *
    * @param string $val The small
    *
    * @return ThumbnailSet
    */
    public function setSmall($val)
    {
        $this->_propDict["small"] = $val;
        return $this;
    }

    /**
    * Gets the source
    *
    * @return Thumbnail The source
    */
    public function getSource()
    {
        if (array_key_exists("source", $this->_propDict)) {
            if (is_a($this->_propDict["source"], "Thumbnail")) {
                return $this->_propDict["source"];
            } else {
                $this->_propDict["source"] = new Thumbnail($this->_propDict["source"]);
                return $this->_propDict["source"];
            }
        }
        return null;
    }

    /**
    * Sets the source
    *
    * @param string $val The source
    *
    * @return ThumbnailSet
    */
    public function setSource($val)
    {
        $this->_propDict["source"] = $val;
        return $this;
    }
}