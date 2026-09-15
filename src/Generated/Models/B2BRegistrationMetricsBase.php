<?php

namespace Microsoft\Graph\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class B2BRegistrationMetricsBase extends Entity implements Parsable 
{
    /**
     * Instantiates a new B2BRegistrationMetricsBase and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return B2BRegistrationMetricsBase
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): B2BRegistrationMetricsBase {
        $mappingValueNode = $parseNode->getChildNode("@odata.type");
        if ($mappingValueNode !== null) {
            $mappingValue = $mappingValueNode->getStringValue();
            switch ($mappingValue) {
                case '#microsoft.graph.b2BRegistrationMetricsInitial': return new B2BRegistrationMetricsInitial();
                case '#microsoft.graph.b2BRegistrationMetricsRecent': return new B2BRegistrationMetricsRecent();
            }
        }
        return new B2BRegistrationMetricsBase();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'inboundTotalUsers' => fn(ParseNode $n) => $o->setInboundTotalUsers($n->getStringValue()),
            'outboundTotalUsers' => fn(ParseNode $n) => $o->setOutboundTotalUsers($n->getStringValue()),
            'watermarkDateTime' => fn(ParseNode $n) => $o->setWatermarkDateTime($n->getDateTimeValue()),
        ]);
    }

    /**
     * Gets the inboundTotalUsers property value. The inboundTotalUsers property
     * @return string|null
    */
    public function getInboundTotalUsers(): ?string {
        $val = $this->getBackingStore()->get('inboundTotalUsers');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'inboundTotalUsers'");
    }

    /**
     * Gets the outboundTotalUsers property value. The outboundTotalUsers property
     * @return string|null
    */
    public function getOutboundTotalUsers(): ?string {
        $val = $this->getBackingStore()->get('outboundTotalUsers');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'outboundTotalUsers'");
    }

    /**
     * Gets the watermarkDateTime property value. The watermarkDateTime property
     * @return DateTime|null
    */
    public function getWatermarkDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('watermarkDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'watermarkDateTime'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('inboundTotalUsers', $this->getInboundTotalUsers());
        $writer->writeStringValue('outboundTotalUsers', $this->getOutboundTotalUsers());
        $writer->writeDateTimeValue('watermarkDateTime', $this->getWatermarkDateTime());
    }

    /**
     * Sets the inboundTotalUsers property value. The inboundTotalUsers property
     * @param string|null $value Value to set for the inboundTotalUsers property.
    */
    public function setInboundTotalUsers(?string $value): void {
        $this->getBackingStore()->set('inboundTotalUsers', $value);
    }

    /**
     * Sets the outboundTotalUsers property value. The outboundTotalUsers property
     * @param string|null $value Value to set for the outboundTotalUsers property.
    */
    public function setOutboundTotalUsers(?string $value): void {
        $this->getBackingStore()->set('outboundTotalUsers', $value);
    }

    /**
     * Sets the watermarkDateTime property value. The watermarkDateTime property
     * @param DateTime|null $value Value to set for the watermarkDateTime property.
    */
    public function setWatermarkDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('watermarkDateTime', $value);
    }

}
