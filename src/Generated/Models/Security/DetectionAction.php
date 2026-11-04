<?php

namespace Microsoft\Graph\Generated\Models\Security;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class DetectionAction implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new DetectionAction and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return DetectionAction
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): DetectionAction {
        return new DetectionAction();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        $val = $this->getBackingStore()->get('additionalData');
        if (is_null($val) || is_array($val)) {
            /** @var array<string, mixed>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'additionalData'");
    }

    /**
     * Gets the alertTemplate property value. The alertTemplate property
     * @return AlertTemplate|null
    */
    public function getAlertTemplate(): ?AlertTemplate {
        $val = $this->getBackingStore()->get('alertTemplate');
        if (is_null($val) || $val instanceof AlertTemplate) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'alertTemplate'");
    }

    /**
     * Gets the automatedActions property value. The set of automated actions to run against entities that match the detection.
     * @return AutomatedActionSet|null
    */
    public function getAutomatedActions(): ?AutomatedActionSet {
        $val = $this->getBackingStore()->get('automatedActions');
        if (is_null($val) || $val instanceof AutomatedActionSet) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'automatedActions'");
    }

    /**
     * Gets the BackingStore property value. Stores model information.
     * @return BackingStore
    */
    public function getBackingStore(): BackingStore {
        return $this->backingStore;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'alertTemplate' => fn(ParseNode $n) => $o->setAlertTemplate($n->getObjectValue([AlertTemplate::class, 'createFromDiscriminatorValue'])),
            'automatedActions' => fn(ParseNode $n) => $o->setAutomatedActions($n->getObjectValue([AutomatedActionSet::class, 'createFromDiscriminatorValue'])),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'organizationalScope' => fn(ParseNode $n) => $o->setOrganizationalScope($n->getObjectValue([OrganizationalScope::class, 'createFromDiscriminatorValue'])),
        ];
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        $val = $this->getBackingStore()->get('odataType');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'odataType'");
    }

    /**
     * Gets the organizationalScope property value. The set of groups (for example, device groups) to which the parent custom detection rule applies.
     * @return OrganizationalScope|null
    */
    public function getOrganizationalScope(): ?OrganizationalScope {
        $val = $this->getBackingStore()->get('organizationalScope');
        if (is_null($val) || $val instanceof OrganizationalScope) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'organizationalScope'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeObjectValue('alertTemplate', $this->getAlertTemplate());
        $writer->writeObjectValue('automatedActions', $this->getAutomatedActions());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeObjectValue('organizationalScope', $this->getOrganizationalScope());
        $writer->writeAdditionalData($this->getAdditionalData());
    }

    /**
     * Sets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value): void {
        $this->getBackingStore()->set('additionalData', $value);
    }

    /**
     * Sets the alertTemplate property value. The alertTemplate property
     * @param AlertTemplate|null $value Value to set for the alertTemplate property.
    */
    public function setAlertTemplate(?AlertTemplate $value): void {
        $this->getBackingStore()->set('alertTemplate', $value);
    }

    /**
     * Sets the automatedActions property value. The set of automated actions to run against entities that match the detection.
     * @param AutomatedActionSet|null $value Value to set for the automatedActions property.
    */
    public function setAutomatedActions(?AutomatedActionSet $value): void {
        $this->getBackingStore()->set('automatedActions', $value);
    }

    /**
     * Sets the BackingStore property value. Stores model information.
     * @param BackingStore $value Value to set for the BackingStore property.
    */
    public function setBackingStore(BackingStore $value): void {
        $this->backingStore = $value;
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the @odata.type property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the organizationalScope property value. The set of groups (for example, device groups) to which the parent custom detection rule applies.
     * @param OrganizationalScope|null $value Value to set for the organizationalScope property.
    */
    public function setOrganizationalScope(?OrganizationalScope $value): void {
        $this->getBackingStore()->set('organizationalScope', $value);
    }

}
