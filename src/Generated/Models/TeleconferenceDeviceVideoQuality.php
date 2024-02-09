<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class TeleconferenceDeviceVideoQuality extends TeleconferenceDeviceMediaQuality implements Parsable 
{
    /**
     * Instantiates a new TeleconferenceDeviceVideoQuality and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.teleconferenceDeviceVideoQuality');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return TeleconferenceDeviceVideoQuality
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): TeleconferenceDeviceVideoQuality {
        $mappingValueNode = $parseNode->getChildNode("@odata.type");
        if ($mappingValueNode !== null) {
            $mappingValue = $mappingValueNode->getStringValue();
            switch ($mappingValue) {
                case '#microsoft.graph.teleconferenceDeviceScreenSharingQuality': return new TeleconferenceDeviceScreenSharingQuality();
            }
        }
        return new TeleconferenceDeviceVideoQuality();
    }

    /**
     * Gets the averageInboundBitRate property value. The average inbound stream video bit rate per second.
     * @return float|null
    */
    public function getAverageInboundBitRate(): ?float {
        $val = $this->getBackingStore()->get('averageInboundBitRate');
        if (is_null($val) || is_float($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'averageInboundBitRate'");
    }

    /**
     * Gets the averageInboundFrameRate property value. The average inbound stream video frame rate per second.
     * @return float|null
    */
    public function getAverageInboundFrameRate(): ?float {
        $val = $this->getBackingStore()->get('averageInboundFrameRate');
        if (is_null($val) || is_float($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'averageInboundFrameRate'");
    }

    /**
     * Gets the averageOutboundBitRate property value. The average outbound stream video bit rate per second.
     * @return float|null
    */
    public function getAverageOutboundBitRate(): ?float {
        $val = $this->getBackingStore()->get('averageOutboundBitRate');
        if (is_null($val) || is_float($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'averageOutboundBitRate'");
    }

    /**
     * Gets the averageOutboundFrameRate property value. The average outbound stream video frame rate per second.
     * @return float|null
    */
    public function getAverageOutboundFrameRate(): ?float {
        $val = $this->getBackingStore()->get('averageOutboundFrameRate');
        if (is_null($val) || is_float($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'averageOutboundFrameRate'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'averageInboundBitRate' => fn(ParseNode $n) => $o->setAverageInboundBitRate($n->getFloatValue()),
            'averageInboundFrameRate' => fn(ParseNode $n) => $o->setAverageInboundFrameRate($n->getFloatValue()),
            'averageOutboundBitRate' => fn(ParseNode $n) => $o->setAverageOutboundBitRate($n->getFloatValue()),
            'averageOutboundFrameRate' => fn(ParseNode $n) => $o->setAverageOutboundFrameRate($n->getFloatValue()),
        ]);
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeFloatValue('averageInboundBitRate', $this->getAverageInboundBitRate());
        $writer->writeFloatValue('averageInboundFrameRate', $this->getAverageInboundFrameRate());
        $writer->writeFloatValue('averageOutboundBitRate', $this->getAverageOutboundBitRate());
        $writer->writeFloatValue('averageOutboundFrameRate', $this->getAverageOutboundFrameRate());
    }

    /**
     * Sets the averageInboundBitRate property value. The average inbound stream video bit rate per second.
     * @param float|null $value Value to set for the averageInboundBitRate property.
    */
    public function setAverageInboundBitRate(?float $value): void {
        $this->getBackingStore()->set('averageInboundBitRate', $value);
    }

    /**
     * Sets the averageInboundFrameRate property value. The average inbound stream video frame rate per second.
     * @param float|null $value Value to set for the averageInboundFrameRate property.
    */
    public function setAverageInboundFrameRate(?float $value): void {
        $this->getBackingStore()->set('averageInboundFrameRate', $value);
    }

    /**
     * Sets the averageOutboundBitRate property value. The average outbound stream video bit rate per second.
     * @param float|null $value Value to set for the averageOutboundBitRate property.
    */
    public function setAverageOutboundBitRate(?float $value): void {
        $this->getBackingStore()->set('averageOutboundBitRate', $value);
    }

    /**
     * Sets the averageOutboundFrameRate property value. The average outbound stream video frame rate per second.
     * @param float|null $value Value to set for the averageOutboundFrameRate property.
    */
    public function setAverageOutboundFrameRate(?float $value): void {
        $this->getBackingStore()->set('averageOutboundFrameRate', $value);
    }

}
