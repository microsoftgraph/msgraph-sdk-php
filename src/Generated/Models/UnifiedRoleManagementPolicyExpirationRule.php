<?php

namespace Microsoft\Graph\Models;

use DateInterval;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class UnifiedRoleManagementPolicyExpirationRule extends UnifiedRoleManagementPolicyRule implements Parsable 
{
    /**
     * @var bool|null $isExpirationRequired Indicates whether expiration is required or if it's a permanently active assignment or eligibility.
    */
    private ?bool $isExpirationRequired = null;
    
    /**
     * @var DateInterval|null $maximumDuration The maximum duration allowed for eligibility or assignment which is not permanent. Required when isExpirationRequired is true.
    */
    private ?DateInterval $maximumDuration = null;
    
    /**
     * Instantiates a new UnifiedRoleManagementPolicyExpirationRule and sets the default values.
    */
    public function __construct() {
        parent::__construct();
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
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'isExpirationRequired' => function (ParseNode $n) use ($o) { $o->setIsExpirationRequired($n->getBooleanValue()); },
            'maximumDuration' => function (ParseNode $n) use ($o) { $o->setMaximumDuration($n->getDateIntervalValue()); },
        ]);
    }

    /**
     * Gets the isExpirationRequired property value. Indicates whether expiration is required or if it's a permanently active assignment or eligibility.
     * @return bool|null
    */
    public function getIsExpirationRequired(): ?bool {
        return $this->isExpirationRequired;
    }

    /**
     * Gets the maximumDuration property value. The maximum duration allowed for eligibility or assignment which is not permanent. Required when isExpirationRequired is true.
     * @return DateInterval|null
    */
    public function getMaximumDuration(): ?DateInterval {
        return $this->maximumDuration;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeBooleanValue('isExpirationRequired', $this->isExpirationRequired);
        $writer->writeDateIntervalValue('maximumDuration', $this->maximumDuration);
    }

    /**
     * Sets the isExpirationRequired property value. Indicates whether expiration is required or if it's a permanently active assignment or eligibility.
     *  @param bool|null $value Value to set for the isExpirationRequired property.
    */
    public function setIsExpirationRequired(?bool $value ): void {
        $this->isExpirationRequired = $value;
    }

    /**
     * Sets the maximumDuration property value. The maximum duration allowed for eligibility or assignment which is not permanent. Required when isExpirationRequired is true.
     *  @param DateInterval|null $value Value to set for the maximumDuration property.
    */
    public function setMaximumDuration(?DateInterval $value ): void {
        $this->maximumDuration = $value;
    }

}
