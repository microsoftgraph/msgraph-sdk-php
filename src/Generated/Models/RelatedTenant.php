<?php

namespace Microsoft\Graph\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class RelatedTenant extends Entity implements Parsable 
{
    /**
     * Instantiates a new RelatedTenant and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return RelatedTenant
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): RelatedTenant {
        return new RelatedTenant();
    }

    /**
     * Gets the appB2BSignInActivityMetrics property value. The appB2BSignInActivityMetrics property
     * @return B2BSignInActivityMetrics|null
    */
    public function getAppB2BSignInActivityMetrics(): ?B2BSignInActivityMetrics {
        $val = $this->getBackingStore()->get('appB2BSignInActivityMetrics');
        if (is_null($val) || $val instanceof B2BSignInActivityMetrics) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'appB2BSignInActivityMetrics'");
    }

    /**
     * Gets the b2BRegistrationMetrics property value. The b2BRegistrationMetrics property
     * @return B2bRegistrationMetrics|null
    */
    public function getB2BRegistrationMetrics(): ?B2bRegistrationMetrics {
        $val = $this->getBackingStore()->get('b2BRegistrationMetrics');
        if (is_null($val) || $val instanceof B2bRegistrationMetrics) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'b2BRegistrationMetrics'");
    }

    /**
     * Gets the b2BSignInActivityMetrics property value. The b2BSignInActivityMetrics property
     * @return B2BSignInActivityMetrics|null
    */
    public function getB2BSignInActivityMetrics(): ?B2BSignInActivityMetrics {
        $val = $this->getBackingStore()->get('b2BSignInActivityMetrics');
        if (is_null($val) || $val instanceof B2BSignInActivityMetrics) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'b2BSignInActivityMetrics'");
    }

    /**
     * Gets the billingMetrics property value. The billingMetrics property
     * @return BillingMetrics|null
    */
    public function getBillingMetrics(): ?BillingMetrics {
        $val = $this->getBackingStore()->get('billingMetrics');
        if (is_null($val) || $val instanceof BillingMetrics) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'billingMetrics'");
    }

    /**
     * Gets the createdDateTime property value. The createdDateTime property
     * @return DateTime|null
    */
    public function getCreatedDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('createdDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'createdDateTime'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'appB2BSignInActivityMetrics' => fn(ParseNode $n) => $o->setAppB2BSignInActivityMetrics($n->getObjectValue([B2BSignInActivityMetrics::class, 'createFromDiscriminatorValue'])),
            'b2BRegistrationMetrics' => fn(ParseNode $n) => $o->setB2BRegistrationMetrics($n->getObjectValue([B2bRegistrationMetrics::class, 'createFromDiscriminatorValue'])),
            'b2BSignInActivityMetrics' => fn(ParseNode $n) => $o->setB2BSignInActivityMetrics($n->getObjectValue([B2BSignInActivityMetrics::class, 'createFromDiscriminatorValue'])),
            'billingMetrics' => fn(ParseNode $n) => $o->setBillingMetrics($n->getObjectValue([BillingMetrics::class, 'createFromDiscriminatorValue'])),
            'createdDateTime' => fn(ParseNode $n) => $o->setCreatedDateTime($n->getDateTimeValue()),
            'isMicrosoftInfrastructure' => fn(ParseNode $n) => $o->setIsMicrosoftInfrastructure($n->getBooleanValue()),
            'multiTenantApplicationMetrics' => fn(ParseNode $n) => $o->setMultiTenantApplicationMetrics($n->getObjectValue([MultiTenantApplicationMetrics::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the isMicrosoftInfrastructure property value. Indicates whether this tenant is a Microsoft infrastructure tenant.
     * @return bool|null
    */
    public function getIsMicrosoftInfrastructure(): ?bool {
        $val = $this->getBackingStore()->get('isMicrosoftInfrastructure');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'isMicrosoftInfrastructure'");
    }

    /**
     * Gets the multiTenantApplicationMetrics property value. The multiTenantApplicationMetrics property
     * @return MultiTenantApplicationMetrics|null
    */
    public function getMultiTenantApplicationMetrics(): ?MultiTenantApplicationMetrics {
        $val = $this->getBackingStore()->get('multiTenantApplicationMetrics');
        if (is_null($val) || $val instanceof MultiTenantApplicationMetrics) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'multiTenantApplicationMetrics'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('appB2BSignInActivityMetrics', $this->getAppB2BSignInActivityMetrics());
        $writer->writeObjectValue('b2BRegistrationMetrics', $this->getB2BRegistrationMetrics());
        $writer->writeObjectValue('b2BSignInActivityMetrics', $this->getB2BSignInActivityMetrics());
        $writer->writeObjectValue('billingMetrics', $this->getBillingMetrics());
        $writer->writeDateTimeValue('createdDateTime', $this->getCreatedDateTime());
        $writer->writeObjectValue('multiTenantApplicationMetrics', $this->getMultiTenantApplicationMetrics());
    }

    /**
     * Sets the appB2BSignInActivityMetrics property value. The appB2BSignInActivityMetrics property
     * @param B2BSignInActivityMetrics|null $value Value to set for the appB2BSignInActivityMetrics property.
    */
    public function setAppB2BSignInActivityMetrics(?B2BSignInActivityMetrics $value): void {
        $this->getBackingStore()->set('appB2BSignInActivityMetrics', $value);
    }

    /**
     * Sets the b2BRegistrationMetrics property value. The b2BRegistrationMetrics property
     * @param B2bRegistrationMetrics|null $value Value to set for the b2BRegistrationMetrics property.
    */
    public function setB2BRegistrationMetrics(?B2bRegistrationMetrics $value): void {
        $this->getBackingStore()->set('b2BRegistrationMetrics', $value);
    }

    /**
     * Sets the b2BSignInActivityMetrics property value. The b2BSignInActivityMetrics property
     * @param B2BSignInActivityMetrics|null $value Value to set for the b2BSignInActivityMetrics property.
    */
    public function setB2BSignInActivityMetrics(?B2BSignInActivityMetrics $value): void {
        $this->getBackingStore()->set('b2BSignInActivityMetrics', $value);
    }

    /**
     * Sets the billingMetrics property value. The billingMetrics property
     * @param BillingMetrics|null $value Value to set for the billingMetrics property.
    */
    public function setBillingMetrics(?BillingMetrics $value): void {
        $this->getBackingStore()->set('billingMetrics', $value);
    }

    /**
     * Sets the createdDateTime property value. The createdDateTime property
     * @param DateTime|null $value Value to set for the createdDateTime property.
    */
    public function setCreatedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('createdDateTime', $value);
    }

    /**
     * Sets the isMicrosoftInfrastructure property value. Indicates whether this tenant is a Microsoft infrastructure tenant.
     * @param bool|null $value Value to set for the isMicrosoftInfrastructure property.
    */
    public function setIsMicrosoftInfrastructure(?bool $value): void {
        $this->getBackingStore()->set('isMicrosoftInfrastructure', $value);
    }

    /**
     * Sets the multiTenantApplicationMetrics property value. The multiTenantApplicationMetrics property
     * @param MultiTenantApplicationMetrics|null $value Value to set for the multiTenantApplicationMetrics property.
    */
    public function setMultiTenantApplicationMetrics(?MultiTenantApplicationMetrics $value): void {
        $this->getBackingStore()->set('multiTenantApplicationMetrics', $value);
    }

}
