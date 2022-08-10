<?php

namespace Microsoft\Graph\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class TemporaryAccessPassAuthenticationMethod extends AuthenticationMethod implements Parsable 
{
    /**
     * @var DateTime|null $createdDateTime The date and time when the Temporary Access Pass was created.
    */
    private ?DateTime $createdDateTime = null;
    
    /**
     * @var bool|null $isUsable The state of the authentication method that indicates whether it's currently usable by the user.
    */
    private ?bool $isUsable = null;
    
    /**
     * @var bool|null $isUsableOnce Determines whether the pass is limited to a one-time use. If true, the pass can be used once; if false, the pass can be used multiple times within the Temporary Access Pass lifetime.
    */
    private ?bool $isUsableOnce = null;
    
    /**
     * @var int|null $lifetimeInMinutes The lifetime of the Temporary Access Pass in minutes starting at startDateTime. Must be between 10 and 43200 inclusive (equivalent to 30 days).
    */
    private ?int $lifetimeInMinutes = null;
    
    /**
     * @var string|null $methodUsabilityReason Details about the usability state (isUsable). Reasons can include: EnabledByPolicy, DisabledByPolicy, Expired, NotYetValid, OneTimeUsed.
    */
    private ?string $methodUsabilityReason = null;
    
    /**
     * @var DateTime|null $startDateTime The date and time when the Temporary Access Pass becomes available to use and when isUsable is true is enforced.
    */
    private ?DateTime $startDateTime = null;
    
    /**
     * @var string|null $temporaryAccessPass The Temporary Access Pass used to authenticate. Returned only on creation of a new temporaryAccessPassAuthenticationMethod object; Hidden in subsequent read operations and returned as null with GET.
    */
    private ?string $temporaryAccessPass = null;
    
    /**
     * Instantiates a new TemporaryAccessPassAuthenticationMethod and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.temporaryAccessPassAuthenticationMethod');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return TemporaryAccessPassAuthenticationMethod
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): TemporaryAccessPassAuthenticationMethod {
        return new TemporaryAccessPassAuthenticationMethod();
    }

    /**
     * Gets the createdDateTime property value. The date and time when the Temporary Access Pass was created.
     * @return DateTime|null
    */
    public function getCreatedDateTime(): ?DateTime {
        return $this->createdDateTime;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'createdDateTime' => function (ParseNode $n) use ($o) { $o->setCreatedDateTime($n->getDateTimeValue()); },
            'isUsable' => function (ParseNode $n) use ($o) { $o->setIsUsable($n->getBooleanValue()); },
            'isUsableOnce' => function (ParseNode $n) use ($o) { $o->setIsUsableOnce($n->getBooleanValue()); },
            'lifetimeInMinutes' => function (ParseNode $n) use ($o) { $o->setLifetimeInMinutes($n->getIntegerValue()); },
            'methodUsabilityReason' => function (ParseNode $n) use ($o) { $o->setMethodUsabilityReason($n->getStringValue()); },
            'startDateTime' => function (ParseNode $n) use ($o) { $o->setStartDateTime($n->getDateTimeValue()); },
            'temporaryAccessPass' => function (ParseNode $n) use ($o) { $o->setTemporaryAccessPass($n->getStringValue()); },
        ]);
    }

    /**
     * Gets the isUsable property value. The state of the authentication method that indicates whether it's currently usable by the user.
     * @return bool|null
    */
    public function getIsUsable(): ?bool {
        return $this->isUsable;
    }

    /**
     * Gets the isUsableOnce property value. Determines whether the pass is limited to a one-time use. If true, the pass can be used once; if false, the pass can be used multiple times within the Temporary Access Pass lifetime.
     * @return bool|null
    */
    public function getIsUsableOnce(): ?bool {
        return $this->isUsableOnce;
    }

    /**
     * Gets the lifetimeInMinutes property value. The lifetime of the Temporary Access Pass in minutes starting at startDateTime. Must be between 10 and 43200 inclusive (equivalent to 30 days).
     * @return int|null
    */
    public function getLifetimeInMinutes(): ?int {
        return $this->lifetimeInMinutes;
    }

    /**
     * Gets the methodUsabilityReason property value. Details about the usability state (isUsable). Reasons can include: EnabledByPolicy, DisabledByPolicy, Expired, NotYetValid, OneTimeUsed.
     * @return string|null
    */
    public function getMethodUsabilityReason(): ?string {
        return $this->methodUsabilityReason;
    }

    /**
     * Gets the startDateTime property value. The date and time when the Temporary Access Pass becomes available to use and when isUsable is true is enforced.
     * @return DateTime|null
    */
    public function getStartDateTime(): ?DateTime {
        return $this->startDateTime;
    }

    /**
     * Gets the temporaryAccessPass property value. The Temporary Access Pass used to authenticate. Returned only on creation of a new temporaryAccessPassAuthenticationMethod object; Hidden in subsequent read operations and returned as null with GET.
     * @return string|null
    */
    public function getTemporaryAccessPass(): ?string {
        return $this->temporaryAccessPass;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeDateTimeValue('createdDateTime', $this->createdDateTime);
        $writer->writeBooleanValue('isUsable', $this->isUsable);
        $writer->writeBooleanValue('isUsableOnce', $this->isUsableOnce);
        $writer->writeIntegerValue('lifetimeInMinutes', $this->lifetimeInMinutes);
        $writer->writeStringValue('methodUsabilityReason', $this->methodUsabilityReason);
        $writer->writeDateTimeValue('startDateTime', $this->startDateTime);
        $writer->writeStringValue('temporaryAccessPass', $this->temporaryAccessPass);
    }

    /**
     * Sets the createdDateTime property value. The date and time when the Temporary Access Pass was created.
     *  @param DateTime|null $value Value to set for the createdDateTime property.
    */
    public function setCreatedDateTime(?DateTime $value ): void {
        $this->createdDateTime = $value;
    }

    /**
     * Sets the isUsable property value. The state of the authentication method that indicates whether it's currently usable by the user.
     *  @param bool|null $value Value to set for the isUsable property.
    */
    public function setIsUsable(?bool $value ): void {
        $this->isUsable = $value;
    }

    /**
     * Sets the isUsableOnce property value. Determines whether the pass is limited to a one-time use. If true, the pass can be used once; if false, the pass can be used multiple times within the Temporary Access Pass lifetime.
     *  @param bool|null $value Value to set for the isUsableOnce property.
    */
    public function setIsUsableOnce(?bool $value ): void {
        $this->isUsableOnce = $value;
    }

    /**
     * Sets the lifetimeInMinutes property value. The lifetime of the Temporary Access Pass in minutes starting at startDateTime. Must be between 10 and 43200 inclusive (equivalent to 30 days).
     *  @param int|null $value Value to set for the lifetimeInMinutes property.
    */
    public function setLifetimeInMinutes(?int $value ): void {
        $this->lifetimeInMinutes = $value;
    }

    /**
     * Sets the methodUsabilityReason property value. Details about the usability state (isUsable). Reasons can include: EnabledByPolicy, DisabledByPolicy, Expired, NotYetValid, OneTimeUsed.
     *  @param string|null $value Value to set for the methodUsabilityReason property.
    */
    public function setMethodUsabilityReason(?string $value ): void {
        $this->methodUsabilityReason = $value;
    }

    /**
     * Sets the startDateTime property value. The date and time when the Temporary Access Pass becomes available to use and when isUsable is true is enforced.
     *  @param DateTime|null $value Value to set for the startDateTime property.
    */
    public function setStartDateTime(?DateTime $value ): void {
        $this->startDateTime = $value;
    }

    /**
     * Sets the temporaryAccessPass property value. The Temporary Access Pass used to authenticate. Returned only on creation of a new temporaryAccessPassAuthenticationMethod object; Hidden in subsequent read operations and returned as null with GET.
     *  @param string|null $value Value to set for the temporaryAccessPass property.
    */
    public function setTemporaryAccessPass(?string $value ): void {
        $this->temporaryAccessPass = $value;
    }

}
