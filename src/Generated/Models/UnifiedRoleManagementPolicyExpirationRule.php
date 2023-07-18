<?php

namespace Microsoft\Graph\Generated\Models;

use DateInterval;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class UnifiedRoleManagementPolicyExpirationRule extends UnifiedRoleManagementPolicyRule implements Parsable 
{
    /**
     * @var string|null $odataType The OdataType property
    */
    public ?string $odataType = null;
    
    /**
     * Instantiates a new unifiedRoleManagementPolicyExpirationRule and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.unifiedRoleManagementPolicyExpirationRule');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return UnifiedRoleManagementPolicyExpirationRule
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): UnifiedRoleManagementPolicyExpirationRule {
        return new UnifiedRoleManagementPolicyExpirationRule();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'isExpirationRequired' => fn(ParseNode $n) => $o->setIsExpirationRequired($n->getBooleanValue()),
            'maximumDuration' => fn(ParseNode $n) => $o->setMaximumDuration($n->getDateIntervalValue()),
        ]);
    }

    /**
     * Gets the isExpirationRequired property value. Indicates whether expiration is required or if it's a permanently active assignment or eligibility.
     * @return bool|null
    */
    public function getIsExpirationRequired(): ?bool {
        $val = $this->getBackingStore()->get('isExpirationRequired');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'isExpirationRequired'");
    }

    /**
     * Gets the maximumDuration property value. The maximum duration allowed for eligibility or assignment which is not permanent. Required when isExpirationRequired is true.
     * @return DateInterval|null
    */
    public function getMaximumDuration(): ?DateInterval {
        $val = $this->getBackingStore()->get('maximumDuration');
        if (is_null($val) || $val instanceof DateInterval) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'maximumDuration'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeBooleanValue('isExpirationRequired', $this->getIsExpirationRequired());
        $writer->writeDateIntervalValue('maximumDuration', $this->getMaximumDuration());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
    }

    /**
     * Sets the isExpirationRequired property value. Indicates whether expiration is required or if it's a permanently active assignment or eligibility.
     * @param bool|null $value Value to set for the isExpirationRequired property.
    */
    public function setIsExpirationRequired(?bool $value): void {
        $this->getBackingStore()->set('isExpirationRequired', $value);
    }

    /**
     * Sets the maximumDuration property value. The maximum duration allowed for eligibility or assignment which is not permanent. Required when isExpirationRequired is true.
     * @param DateInterval|null $value Value to set for the maximumDuration property.
    */
    public function setMaximumDuration(?DateInterval $value): void {
        $this->getBackingStore()->set('maximumDuration', $value);
    }

}
