<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class ConditionalAccessClientApplications implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new conditionalAccessClientApplications and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
        $this->setOdataType('#microsoft.graph.conditionalAccessClientApplications');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ConditionalAccessClientApplications
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ConditionalAccessClientApplications {
        return new ConditionalAccessClientApplications();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): ?array {
        return $this->getBackingStore()->get('additionalData');
    }

    /**
     * Gets the backingStore property value. Stores model information.
     * @return BackingStore
    */
    public function getBackingStore(): BackingStore {
        return $this->backingStore;
    }

    /**
     * Gets the excludeServicePrincipals property value. Service principal IDs excluded from the policy scope.
     * @return array<string>|null
    */
    public function getExcludeServicePrincipals(): ?array {
        return $this->getBackingStore()->get('excludeServicePrincipals');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'excludeServicePrincipals' => fn(ParseNode $n) => $o->setExcludeServicePrincipals($n->getCollectionOfPrimitiveValues()),
            'includeServicePrincipals' => fn(ParseNode $n) => $o->setIncludeServicePrincipals($n->getCollectionOfPrimitiveValues()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
        ];
    }

    /**
     * Gets the includeServicePrincipals property value. Service principal IDs included in the policy scope, or ServicePrincipalsInMyTenant.
     * @return array<string>|null
    */
    public function getIncludeServicePrincipals(): ?array {
        return $this->getBackingStore()->get('includeServicePrincipals');
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        return $this->getBackingStore()->get('odataType');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeCollectionOfPrimitiveValues('excludeServicePrincipals', $this->getExcludeServicePrincipals());
        $writer->writeCollectionOfPrimitiveValues('includeServicePrincipals', $this->getIncludeServicePrincipals());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeAdditionalData($this->getAdditionalData());
    }

    /**
     * Sets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     *  @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value): void {
        $this->getBackingStore()->set('additionalData', $value);
    }

    /**
     * Sets the excludeServicePrincipals property value. Service principal IDs excluded from the policy scope.
     *  @param array<string>|null $value Value to set for the excludeServicePrincipals property.
    */
    public function setExcludeServicePrincipals(?array $value): void {
        $this->getBackingStore()->set('excludeServicePrincipals', $value);
    }

    /**
     * Sets the includeServicePrincipals property value. Service principal IDs included in the policy scope, or ServicePrincipalsInMyTenant.
     *  @param array<string>|null $value Value to set for the includeServicePrincipals property.
    */
    public function setIncludeServicePrincipals(?array $value): void {
        $this->getBackingStore()->set('includeServicePrincipals', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     *  @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

}
