<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class RiskyUserHistoryItem extends RiskyUser implements Parsable 
{
    /**
     * @var RiskUserActivity|null $activity The activity related to user risk level change.
    */
    private ?RiskUserActivity $activity = null;
    
    /**
     * @var string|null $initiatedBy The id of actor that does the operation.
    */
    private ?string $initiatedBy = null;
    
    /**
     * @var string|null $userId The id of the user.
    */
    private ?string $userId = null;
    
    /**
     * Instantiates a new riskyUserHistoryItem and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.riskyUserHistoryItem');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return RiskyUserHistoryItem
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): RiskyUserHistoryItem {
        return new RiskyUserHistoryItem();
    }

    /**
     * Gets the activity property value. The activity related to user risk level change.
     * @return RiskUserActivity|null
    */
    public function getActivity(): ?RiskUserActivity {
        return $this->activity;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'activity' => function (ParseNode $n) use ($o) { $o->setActivity($n->getObjectValue(array(RiskUserActivity::class, 'createFromDiscriminatorValue'))); },
            'initiatedBy' => function (ParseNode $n) use ($o) { $o->setInitiatedBy($n->getStringValue()); },
            'userId' => function (ParseNode $n) use ($o) { $o->setUserId($n->getStringValue()); },
        ]);
    }

    /**
     * Gets the initiatedBy property value. The id of actor that does the operation.
     * @return string|null
    */
    public function getInitiatedBy(): ?string {
        return $this->initiatedBy;
    }

    /**
     * Gets the userId property value. The id of the user.
     * @return string|null
    */
    public function getUserId(): ?string {
        return $this->userId;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('activity', $this->activity);
        $writer->writeStringValue('initiatedBy', $this->initiatedBy);
        $writer->writeStringValue('userId', $this->userId);
    }

    /**
     * Sets the activity property value. The activity related to user risk level change.
     *  @param RiskUserActivity|null $value Value to set for the activity property.
    */
    public function setActivity(?RiskUserActivity $value ): void {
        $this->activity = $value;
    }

    /**
     * Sets the initiatedBy property value. The id of actor that does the operation.
     *  @param string|null $value Value to set for the initiatedBy property.
    */
    public function setInitiatedBy(?string $value ): void {
        $this->initiatedBy = $value;
    }

    /**
     * Sets the userId property value. The id of the user.
     *  @param string|null $value Value to set for the userId property.
    */
    public function setUserId(?string $value ): void {
        $this->userId = $value;
    }

}
