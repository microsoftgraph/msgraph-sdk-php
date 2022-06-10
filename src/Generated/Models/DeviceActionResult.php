<?php

namespace Microsoft\Graph\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class DeviceActionResult implements AdditionalDataHolder, Parsable 
{
    /**
     * @var string|null $actionName Action name
    */
    private ?string $actionName = null;
    
    /**
     * @var ActionState|null $actionState State of the action. Possible values are: none, pending, canceled, active, done, failed, notSupported.
    */
    private ?ActionState $actionState = null;
    
    /**
     * @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var DateTime|null $lastUpdatedDateTime Time the action state was last updated
    */
    private ?DateTime $lastUpdatedDateTime = null;
    
    /**
     * @var DateTime|null $startDateTime Time the action was initiated
    */
    private ?DateTime $startDateTime = null;
    
    /**
     * Instantiates a new deviceActionResult and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return DeviceActionResult
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): DeviceActionResult {
        return new DeviceActionResult();
    }

    /**
     * Gets the actionName property value. Action name
     * @return string|null
    */
    public function getActionName(): ?string {
        return $this->actionName;
    }

    /**
     * Gets the actionState property value. State of the action. Possible values are: none, pending, canceled, active, done, failed, notSupported.
     * @return ActionState|null
    */
    public function getActionState(): ?ActionState {
        return $this->actionState;
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'actionName' => function (ParseNode $n) use ($o) { $o->setActionName($n->getStringValue()); },
            'actionState' => function (ParseNode $n) use ($o) { $o->setActionState($n->getEnumValue(ActionState::class)); },
            'lastUpdatedDateTime' => function (ParseNode $n) use ($o) { $o->setLastUpdatedDateTime($n->getDateTimeValue()); },
            'startDateTime' => function (ParseNode $n) use ($o) { $o->setStartDateTime($n->getDateTimeValue()); },
        ];
    }

    /**
     * Gets the lastUpdatedDateTime property value. Time the action state was last updated
     * @return DateTime|null
    */
    public function getLastUpdatedDateTime(): ?DateTime {
        return $this->lastUpdatedDateTime;
    }

    /**
     * Gets the startDateTime property value. Time the action was initiated
     * @return DateTime|null
    */
    public function getStartDateTime(): ?DateTime {
        return $this->startDateTime;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('actionName', $this->actionName);
        $writer->writeEnumValue('actionState', $this->actionState);
        $writer->writeDateTimeValue('lastUpdatedDateTime', $this->lastUpdatedDateTime);
        $writer->writeDateTimeValue('startDateTime', $this->startDateTime);
        $writer->writeAdditionalData($this->additionalData);
    }

    /**
     * Sets the actionName property value. Action name
     *  @param string|null $value Value to set for the actionName property.
    */
    public function setActionName(?string $value ): void {
        $this->actionName = $value;
    }

    /**
     * Sets the actionState property value. State of the action. Possible values are: none, pending, canceled, active, done, failed, notSupported.
     *  @param ActionState|null $value Value to set for the actionState property.
    */
    public function setActionState(?ActionState $value ): void {
        $this->actionState = $value;
    }

    /**
     * Sets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     *  @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value ): void {
        $this->additionalData = $value;
    }

    /**
     * Sets the lastUpdatedDateTime property value. Time the action state was last updated
     *  @param DateTime|null $value Value to set for the lastUpdatedDateTime property.
    */
    public function setLastUpdatedDateTime(?DateTime $value ): void {
        $this->lastUpdatedDateTime = $value;
    }

    /**
     * Sets the startDateTime property value. Time the action was initiated
     *  @param DateTime|null $value Value to set for the startDateTime property.
    */
    public function setStartDateTime(?DateTime $value ): void {
        $this->startDateTime = $value;
    }

}
