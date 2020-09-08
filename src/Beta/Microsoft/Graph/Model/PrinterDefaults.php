<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* PrinterDefaults File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Beta\Microsoft\Graph\Model;
/**
* PrinterDefaults class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class PrinterDefaults extends Entity
{

    /**
    * Gets the colorMode
    *
    * @return PrintColorMode The colorMode
    */
    public function getColorMode()
    {
        if (array_key_exists("colorMode", $this->_propDict)) {
            if (is_a($this->_propDict["colorMode"], "Beta\Microsoft\Graph\Model\PrintColorMode")) {
                return $this->_propDict["colorMode"];
            } else {
                $this->_propDict["colorMode"] = new PrintColorMode($this->_propDict["colorMode"]);
                return $this->_propDict["colorMode"];
            }
        }
        return null;
    }

    /**
    * Sets the colorMode
    *
    * @param PrintColorMode $val The value to assign to the colorMode
    *
    * @return PrinterDefaults The PrinterDefaults
    */
    public function setColorMode($val)
    {
        $this->_propDict["colorMode"] = $val;
         return $this;
    }
    /**
    * Gets the contentType
    *
    * @return string The contentType
    */
    public function getContentType()
    {
        if (array_key_exists("contentType", $this->_propDict)) {
            return $this->_propDict["contentType"];
        } else {
            return null;
        }
    }

    /**
    * Sets the contentType
    *
    * @param string $val The value of the contentType
    *
    * @return PrinterDefaults
    */
    public function setContentType($val)
    {
        $this->_propDict["contentType"] = $val;
        return $this;
    }
    /**
    * Gets the copiesPerJob
    *
    * @return int The copiesPerJob
    */
    public function getCopiesPerJob()
    {
        if (array_key_exists("copiesPerJob", $this->_propDict)) {
            return $this->_propDict["copiesPerJob"];
        } else {
            return null;
        }
    }

    /**
    * Sets the copiesPerJob
    *
    * @param int $val The value of the copiesPerJob
    *
    * @return PrinterDefaults
    */
    public function setCopiesPerJob($val)
    {
        $this->_propDict["copiesPerJob"] = $val;
        return $this;
    }
    /**
    * Gets the documentMimeType
    *
    * @return string The documentMimeType
    */
    public function getDocumentMimeType()
    {
        if (array_key_exists("documentMimeType", $this->_propDict)) {
            return $this->_propDict["documentMimeType"];
        } else {
            return null;
        }
    }

    /**
    * Sets the documentMimeType
    *
    * @param string $val The value of the documentMimeType
    *
    * @return PrinterDefaults
    */
    public function setDocumentMimeType($val)
    {
        $this->_propDict["documentMimeType"] = $val;
        return $this;
    }
    /**
    * Gets the dpi
    *
    * @return int The dpi
    */
    public function getDpi()
    {
        if (array_key_exists("dpi", $this->_propDict)) {
            return $this->_propDict["dpi"];
        } else {
            return null;
        }
    }

    /**
    * Sets the dpi
    *
    * @param int $val The value of the dpi
    *
    * @return PrinterDefaults
    */
    public function setDpi($val)
    {
        $this->_propDict["dpi"] = $val;
        return $this;
    }

    /**
    * Gets the duplexConfiguration
    *
    * @return PrintDuplexConfiguration The duplexConfiguration
    */
    public function getDuplexConfiguration()
    {
        if (array_key_exists("duplexConfiguration", $this->_propDict)) {
            if (is_a($this->_propDict["duplexConfiguration"], "Beta\Microsoft\Graph\Model\PrintDuplexConfiguration")) {
                return $this->_propDict["duplexConfiguration"];
            } else {
                $this->_propDict["duplexConfiguration"] = new PrintDuplexConfiguration($this->_propDict["duplexConfiguration"]);
                return $this->_propDict["duplexConfiguration"];
            }
        }
        return null;
    }

    /**
    * Sets the duplexConfiguration
    *
    * @param PrintDuplexConfiguration $val The value to assign to the duplexConfiguration
    *
    * @return PrinterDefaults The PrinterDefaults
    */
    public function setDuplexConfiguration($val)
    {
        $this->_propDict["duplexConfiguration"] = $val;
         return $this;
    }

    /**
    * Gets the duplexMode
    *
    * @return PrintDuplexMode The duplexMode
    */
    public function getDuplexMode()
    {
        if (array_key_exists("duplexMode", $this->_propDict)) {
            if (is_a($this->_propDict["duplexMode"], "Beta\Microsoft\Graph\Model\PrintDuplexMode")) {
                return $this->_propDict["duplexMode"];
            } else {
                $this->_propDict["duplexMode"] = new PrintDuplexMode($this->_propDict["duplexMode"]);
                return $this->_propDict["duplexMode"];
            }
        }
        return null;
    }

    /**
    * Sets the duplexMode
    *
    * @param PrintDuplexMode $val The value to assign to the duplexMode
    *
    * @return PrinterDefaults The PrinterDefaults
    */
    public function setDuplexMode($val)
    {
        $this->_propDict["duplexMode"] = $val;
         return $this;
    }

    /**
    * Gets the finishings
    *
    * @return PrintFinishing The finishings
    */
    public function getFinishings()
    {
        if (array_key_exists("finishings", $this->_propDict)) {
            if (is_a($this->_propDict["finishings"], "Beta\Microsoft\Graph\Model\PrintFinishing")) {
                return $this->_propDict["finishings"];
            } else {
                $this->_propDict["finishings"] = new PrintFinishing($this->_propDict["finishings"]);
                return $this->_propDict["finishings"];
            }
        }
        return null;
    }

    /**
    * Sets the finishings
    *
    * @param PrintFinishing $val The value to assign to the finishings
    *
    * @return PrinterDefaults The PrinterDefaults
    */
    public function setFinishings($val)
    {
        $this->_propDict["finishings"] = $val;
         return $this;
    }
    /**
    * Gets the fitPdfToPage
    *
    * @return bool The fitPdfToPage
    */
    public function getFitPdfToPage()
    {
        if (array_key_exists("fitPdfToPage", $this->_propDict)) {
            return $this->_propDict["fitPdfToPage"];
        } else {
            return null;
        }
    }

    /**
    * Sets the fitPdfToPage
    *
    * @param bool $val The value of the fitPdfToPage
    *
    * @return PrinterDefaults
    */
    public function setFitPdfToPage($val)
    {
        $this->_propDict["fitPdfToPage"] = $val;
        return $this;
    }
    /**
    * Gets the mediaColor
    *
    * @return string The mediaColor
    */
    public function getMediaColor()
    {
        if (array_key_exists("mediaColor", $this->_propDict)) {
            return $this->_propDict["mediaColor"];
        } else {
            return null;
        }
    }

    /**
    * Sets the mediaColor
    *
    * @param string $val The value of the mediaColor
    *
    * @return PrinterDefaults
    */
    public function setMediaColor($val)
    {
        $this->_propDict["mediaColor"] = $val;
        return $this;
    }
    /**
    * Gets the mediaSize
    *
    * @return string The mediaSize
    */
    public function getMediaSize()
    {
        if (array_key_exists("mediaSize", $this->_propDict)) {
            return $this->_propDict["mediaSize"];
        } else {
            return null;
        }
    }

    /**
    * Sets the mediaSize
    *
    * @param string $val The value of the mediaSize
    *
    * @return PrinterDefaults
    */
    public function setMediaSize($val)
    {
        $this->_propDict["mediaSize"] = $val;
        return $this;
    }
    /**
    * Gets the mediaType
    *
    * @return string The mediaType
    */
    public function getMediaType()
    {
        if (array_key_exists("mediaType", $this->_propDict)) {
            return $this->_propDict["mediaType"];
        } else {
            return null;
        }
    }

    /**
    * Sets the mediaType
    *
    * @param string $val The value of the mediaType
    *
    * @return PrinterDefaults
    */
    public function setMediaType($val)
    {
        $this->_propDict["mediaType"] = $val;
        return $this;
    }

    /**
    * Gets the multipageLayout
    *
    * @return PrintMultipageLayout The multipageLayout
    */
    public function getMultipageLayout()
    {
        if (array_key_exists("multipageLayout", $this->_propDict)) {
            if (is_a($this->_propDict["multipageLayout"], "Beta\Microsoft\Graph\Model\PrintMultipageLayout")) {
                return $this->_propDict["multipageLayout"];
            } else {
                $this->_propDict["multipageLayout"] = new PrintMultipageLayout($this->_propDict["multipageLayout"]);
                return $this->_propDict["multipageLayout"];
            }
        }
        return null;
    }

    /**
    * Sets the multipageLayout
    *
    * @param PrintMultipageLayout $val The value to assign to the multipageLayout
    *
    * @return PrinterDefaults The PrinterDefaults
    */
    public function setMultipageLayout($val)
    {
        $this->_propDict["multipageLayout"] = $val;
         return $this;
    }

    /**
    * Gets the orientation
    *
    * @return PrintOrientation The orientation
    */
    public function getOrientation()
    {
        if (array_key_exists("orientation", $this->_propDict)) {
            if (is_a($this->_propDict["orientation"], "Beta\Microsoft\Graph\Model\PrintOrientation")) {
                return $this->_propDict["orientation"];
            } else {
                $this->_propDict["orientation"] = new PrintOrientation($this->_propDict["orientation"]);
                return $this->_propDict["orientation"];
            }
        }
        return null;
    }

    /**
    * Sets the orientation
    *
    * @param PrintOrientation $val The value to assign to the orientation
    *
    * @return PrinterDefaults The PrinterDefaults
    */
    public function setOrientation($val)
    {
        $this->_propDict["orientation"] = $val;
         return $this;
    }
    /**
    * Gets the outputBin
    *
    * @return string The outputBin
    */
    public function getOutputBin()
    {
        if (array_key_exists("outputBin", $this->_propDict)) {
            return $this->_propDict["outputBin"];
        } else {
            return null;
        }
    }

    /**
    * Sets the outputBin
    *
    * @param string $val The value of the outputBin
    *
    * @return PrinterDefaults
    */
    public function setOutputBin($val)
    {
        $this->_propDict["outputBin"] = $val;
        return $this;
    }
    /**
    * Gets the pagesPerSheet
    *
    * @return int The pagesPerSheet
    */
    public function getPagesPerSheet()
    {
        if (array_key_exists("pagesPerSheet", $this->_propDict)) {
            return $this->_propDict["pagesPerSheet"];
        } else {
            return null;
        }
    }

    /**
    * Sets the pagesPerSheet
    *
    * @param int $val The value of the pagesPerSheet
    *
    * @return PrinterDefaults
    */
    public function setPagesPerSheet($val)
    {
        $this->_propDict["pagesPerSheet"] = $val;
        return $this;
    }
    /**
    * Gets the pdfFitToPage
    *
    * @return bool The pdfFitToPage
    */
    public function getPdfFitToPage()
    {
        if (array_key_exists("pdfFitToPage", $this->_propDict)) {
            return $this->_propDict["pdfFitToPage"];
        } else {
            return null;
        }
    }

    /**
    * Sets the pdfFitToPage
    *
    * @param bool $val The value of the pdfFitToPage
    *
    * @return PrinterDefaults
    */
    public function setPdfFitToPage($val)
    {
        $this->_propDict["pdfFitToPage"] = $val;
        return $this;
    }

    /**
    * Gets the presentationDirection
    *
    * @return PrintPresentationDirection The presentationDirection
    */
    public function getPresentationDirection()
    {
        if (array_key_exists("presentationDirection", $this->_propDict)) {
            if (is_a($this->_propDict["presentationDirection"], "Beta\Microsoft\Graph\Model\PrintPresentationDirection")) {
                return $this->_propDict["presentationDirection"];
            } else {
                $this->_propDict["presentationDirection"] = new PrintPresentationDirection($this->_propDict["presentationDirection"]);
                return $this->_propDict["presentationDirection"];
            }
        }
        return null;
    }

    /**
    * Sets the presentationDirection
    *
    * @param PrintPresentationDirection $val The value to assign to the presentationDirection
    *
    * @return PrinterDefaults The PrinterDefaults
    */
    public function setPresentationDirection($val)
    {
        $this->_propDict["presentationDirection"] = $val;
         return $this;
    }

    /**
    * Gets the printColorConfiguration
    *
    * @return PrintColorConfiguration The printColorConfiguration
    */
    public function getPrintColorConfiguration()
    {
        if (array_key_exists("printColorConfiguration", $this->_propDict)) {
            if (is_a($this->_propDict["printColorConfiguration"], "Beta\Microsoft\Graph\Model\PrintColorConfiguration")) {
                return $this->_propDict["printColorConfiguration"];
            } else {
                $this->_propDict["printColorConfiguration"] = new PrintColorConfiguration($this->_propDict["printColorConfiguration"]);
                return $this->_propDict["printColorConfiguration"];
            }
        }
        return null;
    }

    /**
    * Sets the printColorConfiguration
    *
    * @param PrintColorConfiguration $val The value to assign to the printColorConfiguration
    *
    * @return PrinterDefaults The PrinterDefaults
    */
    public function setPrintColorConfiguration($val)
    {
        $this->_propDict["printColorConfiguration"] = $val;
         return $this;
    }

    /**
    * Gets the printQuality
    *
    * @return PrintQuality The printQuality
    */
    public function getPrintQuality()
    {
        if (array_key_exists("printQuality", $this->_propDict)) {
            if (is_a($this->_propDict["printQuality"], "Beta\Microsoft\Graph\Model\PrintQuality")) {
                return $this->_propDict["printQuality"];
            } else {
                $this->_propDict["printQuality"] = new PrintQuality($this->_propDict["printQuality"]);
                return $this->_propDict["printQuality"];
            }
        }
        return null;
    }

    /**
    * Sets the printQuality
    *
    * @param PrintQuality $val The value to assign to the printQuality
    *
    * @return PrinterDefaults The PrinterDefaults
    */
    public function setPrintQuality($val)
    {
        $this->_propDict["printQuality"] = $val;
         return $this;
    }

    /**
    * Gets the quality
    *
    * @return PrintQuality The quality
    */
    public function getQuality()
    {
        if (array_key_exists("quality", $this->_propDict)) {
            if (is_a($this->_propDict["quality"], "Beta\Microsoft\Graph\Model\PrintQuality")) {
                return $this->_propDict["quality"];
            } else {
                $this->_propDict["quality"] = new PrintQuality($this->_propDict["quality"]);
                return $this->_propDict["quality"];
            }
        }
        return null;
    }

    /**
    * Sets the quality
    *
    * @param PrintQuality $val The value to assign to the quality
    *
    * @return PrinterDefaults The PrinterDefaults
    */
    public function setQuality($val)
    {
        $this->_propDict["quality"] = $val;
         return $this;
    }

    /**
    * Gets the scaling
    *
    * @return PrintScaling The scaling
    */
    public function getScaling()
    {
        if (array_key_exists("scaling", $this->_propDict)) {
            if (is_a($this->_propDict["scaling"], "Beta\Microsoft\Graph\Model\PrintScaling")) {
                return $this->_propDict["scaling"];
            } else {
                $this->_propDict["scaling"] = new PrintScaling($this->_propDict["scaling"]);
                return $this->_propDict["scaling"];
            }
        }
        return null;
    }

    /**
    * Sets the scaling
    *
    * @param PrintScaling $val The value to assign to the scaling
    *
    * @return PrinterDefaults The PrinterDefaults
    */
    public function setScaling($val)
    {
        $this->_propDict["scaling"] = $val;
         return $this;
    }
}
