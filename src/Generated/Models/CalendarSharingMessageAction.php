<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class CalendarSharingMessageAction implements AdditionalDataHolder, Parsable 
{
    /**
     * @var CalendarSharingAction|null $action The action property
    */
    private ?CalendarSharingAction $action = null;
    
    /**
     * @var CalendarSharingActionType|null $actionType The actionType property
    */
    private ?CalendarSharingActionType $actionType = null;
    
    /**
     * @var array<string, mixed> $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var CalendarSharingActionImportance|null $importance The importance property
    */
    private ?CalendarSharingActionImportance $importance = null;
    
    /**
     * @var string|null $odataType The OdataType property
    */
    private ?string $odataType = null;
    
    /**
     * Instantiates a new calendarSharingMessageAction and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
        $this->setOdataType('#microsoft.graph.calendarSharingMessageAction');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return CalendarSharingMessageAction
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): CalendarSharingMessageAction {
        return new CalendarSharingMessageAction();
    }

    /**
     * Gets the action property value. The action property
     * @return CalendarSharingAction|null
    */
    public function getAction(): ?CalendarSharingAction {
        return $this->action;
    }

    /**
     * Gets the actionType property value. The actionType property
     * @return CalendarSharingActionType|null
    */
    public function getActionType(): ?CalendarSharingActionType {
        return $this->actionType;
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
            'action' => function (ParseNode $n) use ($o) { $o->setAction($n->getEnumValue(CalendarSharingAction::class)); },
            'actionType' => function (ParseNode $n) use ($o) { $o->setActionType($n->getEnumValue(CalendarSharingActionType::class)); },
            'importance' => function (ParseNode $n) use ($o) { $o->setImportance($n->getEnumValue(CalendarSharingActionImportance::class)); },
            '@odata.type' => function (ParseNode $n) use ($o) { $o->setOdataType($n->getStringValue()); },
        ];
    }

    /**
     * Gets the importance property value. The importance property
     * @return CalendarSharingActionImportance|null
    */
    public function getImportance(): ?CalendarSharingActionImportance {
        return $this->importance;
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        return $this->odataType;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeEnumValue('action', $this->action);
        $writer->writeEnumValue('actionType', $this->actionType);
        $writer->writeEnumValue('importance', $this->importance);
        $writer->writeStringValue('@odata.type', $this->odataType);
        $writer->writeAdditionalData($this->additionalData);
    }

    /**
     * Sets the action property value. The action property
     *  @param CalendarSharingAction|null $value Value to set for the action property.
    */
    public function setAction(?CalendarSharingAction $value ): void {
        $this->action = $value;
    }

    /**
     * Sets the actionType property value. The actionType property
     *  @param CalendarSharingActionType|null $value Value to set for the actionType property.
    */
    public function setActionType(?CalendarSharingActionType $value ): void {
        $this->actionType = $value;
    }

    /**
     * Sets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     *  @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value ): void {
        $this->additionalData = $value;
    }

    /**
     * Sets the importance property value. The importance property
     *  @param CalendarSharingActionImportance|null $value Value to set for the importance property.
    */
    public function setImportance(?CalendarSharingActionImportance $value ): void {
        $this->importance = $value;
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     *  @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value ): void {
        $this->odataType = $value;
    }

}
