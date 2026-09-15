<?php

namespace Microsoft\Graph\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class MultiTenantApplicationMetricsBase extends Entity implements Parsable 
{
    /**
     * Instantiates a new MultiTenantApplicationMetricsBase and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return MultiTenantApplicationMetricsBase
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): MultiTenantApplicationMetricsBase {
        $mappingValueNode = $parseNode->getChildNode("@odata.type");
        if ($mappingValueNode !== null) {
            $mappingValue = $mappingValueNode->getStringValue();
            switch ($mappingValue) {
                case '#microsoft.graph.multiTenantApplicationMetricsInitial': return new MultiTenantApplicationMetricsInitial();
                case '#microsoft.graph.multiTenantApplicationMetricsRecent': return new MultiTenantApplicationMetricsRecent();
            }
        }
        return new MultiTenantApplicationMetricsBase();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'inboundMonthlyTotalApplications' => fn(ParseNode $n) => $o->setInboundMonthlyTotalApplications($n->getStringValue()),
            'outboundMonthlyTotalApplications' => fn(ParseNode $n) => $o->setOutboundMonthlyTotalApplications($n->getStringValue()),
            'watermarkDateTime' => fn(ParseNode $n) => $o->setWatermarkDateTime($n->getDateTimeValue()),
        ]);
    }

    /**
     * Gets the inboundMonthlyTotalApplications property value. The inboundMonthlyTotalApplications property
     * @return string|null
    */
    public function getInboundMonthlyTotalApplications(): ?string {
        $val = $this->getBackingStore()->get('inboundMonthlyTotalApplications');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'inboundMonthlyTotalApplications'");
    }

    /**
     * Gets the outboundMonthlyTotalApplications property value. The outboundMonthlyTotalApplications property
     * @return string|null
    */
    public function getOutboundMonthlyTotalApplications(): ?string {
        $val = $this->getBackingStore()->get('outboundMonthlyTotalApplications');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'outboundMonthlyTotalApplications'");
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
        $writer->writeStringValue('inboundMonthlyTotalApplications', $this->getInboundMonthlyTotalApplications());
        $writer->writeStringValue('outboundMonthlyTotalApplications', $this->getOutboundMonthlyTotalApplications());
        $writer->writeDateTimeValue('watermarkDateTime', $this->getWatermarkDateTime());
    }

    /**
     * Sets the inboundMonthlyTotalApplications property value. The inboundMonthlyTotalApplications property
     * @param string|null $value Value to set for the inboundMonthlyTotalApplications property.
    */
    public function setInboundMonthlyTotalApplications(?string $value): void {
        $this->getBackingStore()->set('inboundMonthlyTotalApplications', $value);
    }

    /**
     * Sets the outboundMonthlyTotalApplications property value. The outboundMonthlyTotalApplications property
     * @param string|null $value Value to set for the outboundMonthlyTotalApplications property.
    */
    public function setOutboundMonthlyTotalApplications(?string $value): void {
        $this->getBackingStore()->set('outboundMonthlyTotalApplications', $value);
    }

    /**
     * Sets the watermarkDateTime property value. The watermarkDateTime property
     * @param DateTime|null $value Value to set for the watermarkDateTime property.
    */
    public function setWatermarkDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('watermarkDateTime', $value);
    }

}
