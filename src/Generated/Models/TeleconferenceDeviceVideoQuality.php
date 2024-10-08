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
     * @return TeleconferenceDeviceVideoQuality_averageInboundBitRate|null
    */
    public function getAverageInboundBitRate(): ?TeleconferenceDeviceVideoQuality_averageInboundBitRate {
        $val = $this->getBackingStore()->get('averageInboundBitRate');
        if (is_null($val) || $val instanceof TeleconferenceDeviceVideoQuality_averageInboundBitRate) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'averageInboundBitRate'");
    }

    /**
     * Gets the averageInboundFrameRate property value. The average inbound stream video frame rate per second.
     * @return TeleconferenceDeviceVideoQuality_averageInboundFrameRate|null
    */
    public function getAverageInboundFrameRate(): ?TeleconferenceDeviceVideoQuality_averageInboundFrameRate {
        $val = $this->getBackingStore()->get('averageInboundFrameRate');
        if (is_null($val) || $val instanceof TeleconferenceDeviceVideoQuality_averageInboundFrameRate) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'averageInboundFrameRate'");
    }

    /**
     * Gets the averageOutboundBitRate property value. The average outbound stream video bit rate per second.
     * @return TeleconferenceDeviceVideoQuality_averageOutboundBitRate|null
    */
    public function getAverageOutboundBitRate(): ?TeleconferenceDeviceVideoQuality_averageOutboundBitRate {
        $val = $this->getBackingStore()->get('averageOutboundBitRate');
        if (is_null($val) || $val instanceof TeleconferenceDeviceVideoQuality_averageOutboundBitRate) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'averageOutboundBitRate'");
    }

    /**
     * Gets the averageOutboundFrameRate property value. The average outbound stream video frame rate per second.
     * @return TeleconferenceDeviceVideoQuality_averageOutboundFrameRate|null
    */
    public function getAverageOutboundFrameRate(): ?TeleconferenceDeviceVideoQuality_averageOutboundFrameRate {
        $val = $this->getBackingStore()->get('averageOutboundFrameRate');
        if (is_null($val) || $val instanceof TeleconferenceDeviceVideoQuality_averageOutboundFrameRate) {
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
            'averageInboundBitRate' => fn(ParseNode $n) => $o->setAverageInboundBitRate($n->getObjectValue([TeleconferenceDeviceVideoQuality_averageInboundBitRate::class, 'createFromDiscriminatorValue'])),
            'averageInboundFrameRate' => fn(ParseNode $n) => $o->setAverageInboundFrameRate($n->getObjectValue([TeleconferenceDeviceVideoQuality_averageInboundFrameRate::class, 'createFromDiscriminatorValue'])),
            'averageOutboundBitRate' => fn(ParseNode $n) => $o->setAverageOutboundBitRate($n->getObjectValue([TeleconferenceDeviceVideoQuality_averageOutboundBitRate::class, 'createFromDiscriminatorValue'])),
            'averageOutboundFrameRate' => fn(ParseNode $n) => $o->setAverageOutboundFrameRate($n->getObjectValue([TeleconferenceDeviceVideoQuality_averageOutboundFrameRate::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('averageInboundBitRate', $this->getAverageInboundBitRate());
        $writer->writeObjectValue('averageInboundFrameRate', $this->getAverageInboundFrameRate());
        $writer->writeObjectValue('averageOutboundBitRate', $this->getAverageOutboundBitRate());
        $writer->writeObjectValue('averageOutboundFrameRate', $this->getAverageOutboundFrameRate());
    }

    /**
     * Sets the averageInboundBitRate property value. The average inbound stream video bit rate per second.
     * @param TeleconferenceDeviceVideoQuality_averageInboundBitRate|null $value Value to set for the averageInboundBitRate property.
    */
    public function setAverageInboundBitRate(?TeleconferenceDeviceVideoQuality_averageInboundBitRate $value): void {
        $this->getBackingStore()->set('averageInboundBitRate', $value);
    }

    /**
     * Sets the averageInboundFrameRate property value. The average inbound stream video frame rate per second.
     * @param TeleconferenceDeviceVideoQuality_averageInboundFrameRate|null $value Value to set for the averageInboundFrameRate property.
    */
    public function setAverageInboundFrameRate(?TeleconferenceDeviceVideoQuality_averageInboundFrameRate $value): void {
        $this->getBackingStore()->set('averageInboundFrameRate', $value);
    }

    /**
     * Sets the averageOutboundBitRate property value. The average outbound stream video bit rate per second.
     * @param TeleconferenceDeviceVideoQuality_averageOutboundBitRate|null $value Value to set for the averageOutboundBitRate property.
    */
    public function setAverageOutboundBitRate(?TeleconferenceDeviceVideoQuality_averageOutboundBitRate $value): void {
        $this->getBackingStore()->set('averageOutboundBitRate', $value);
    }

    /**
     * Sets the averageOutboundFrameRate property value. The average outbound stream video frame rate per second.
     * @param TeleconferenceDeviceVideoQuality_averageOutboundFrameRate|null $value Value to set for the averageOutboundFrameRate property.
    */
    public function setAverageOutboundFrameRate(?TeleconferenceDeviceVideoQuality_averageOutboundFrameRate $value): void {
        $this->getBackingStore()->set('averageOutboundFrameRate', $value);
    }

}
