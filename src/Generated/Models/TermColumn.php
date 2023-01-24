<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Graph\Generated\Models\TermStore\Set;
use Microsoft\Graph\Generated\Models\TermStore\Term;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class TermColumn implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new termColumn and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return TermColumn
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): TermColumn {
        return new TermColumn();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): ?array {
        return $this->getBackingStore()->get('additionalData');
    }

    /**
     * Gets the allowMultipleValues property value. Specifies whether the column will allow more than one value.
     * @return bool|null
    */
    public function getAllowMultipleValues(): ?bool {
        return $this->getBackingStore()->get('allowMultipleValues');
    }

    /**
     * Gets the backingStore property value. Stores model information.
     * @return BackingStore
    */
    public function getBackingStore(): BackingStore {
        return $this->backingStore;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'allowMultipleValues' => fn(ParseNode $n) => $o->setAllowMultipleValues($n->getBooleanValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'parentTerm' => fn(ParseNode $n) => $o->setParentTerm($n->getObjectValue([Term::class, 'createFromDiscriminatorValue'])),
            'showFullyQualifiedName' => fn(ParseNode $n) => $o->setShowFullyQualifiedName($n->getBooleanValue()),
            'termSet' => fn(ParseNode $n) => $o->setTermSet($n->getObjectValue([Set::class, 'createFromDiscriminatorValue'])),
        ];
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        return $this->getBackingStore()->get('odataType');
    }

    /**
     * Gets the parentTerm property value. The parentTerm property
     * @return Term|null
    */
    public function getParentTerm(): ?Term {
        return $this->getBackingStore()->get('parentTerm');
    }

    /**
     * Gets the showFullyQualifiedName property value. Specifies whether to display the entire term path or only the term label.
     * @return bool|null
    */
    public function getShowFullyQualifiedName(): ?bool {
        return $this->getBackingStore()->get('showFullyQualifiedName');
    }

    /**
     * Gets the termSet property value. The termSet property
     * @return Set|null
    */
    public function getTermSet(): ?Set {
        return $this->getBackingStore()->get('termSet');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeBooleanValue('allowMultipleValues', $this->getAllowMultipleValues());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeObjectValue('parentTerm', $this->getParentTerm());
        $writer->writeBooleanValue('showFullyQualifiedName', $this->getShowFullyQualifiedName());
        $writer->writeObjectValue('termSet', $this->getTermSet());
        $writer->writeAdditionalData($this->getAdditionalData());
    }

    /**
     * Sets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value): void {
        $this->getBackingStore()->set('additionalData', $value);
    }

    /**
     * Sets the allowMultipleValues property value. Specifies whether the column will allow more than one value.
     * @param bool|null $value Value to set for the allowMultipleValues property.
    */
    public function setAllowMultipleValues(?bool $value): void {
        $this->getBackingStore()->set('allowMultipleValues', $value);
    }

    /**
     * Sets the backingStore property value. Stores model information.
     * @param BackingStore $value Value to set for the BackingStore property.
    */
    public function setBackingStore(BackingStore $value): void {
        $this->backingStore = $value;
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the parentTerm property value. The parentTerm property
     * @param Term|null $value Value to set for the parentTerm property.
    */
    public function setParentTerm(?Term $value): void {
        $this->getBackingStore()->set('parentTerm', $value);
    }

    /**
     * Sets the showFullyQualifiedName property value. Specifies whether to display the entire term path or only the term label.
     * @param bool|null $value Value to set for the showFullyQualifiedName property.
    */
    public function setShowFullyQualifiedName(?bool $value): void {
        $this->getBackingStore()->set('showFullyQualifiedName', $value);
    }

    /**
     * Sets the termSet property value. The termSet property
     * @param Set|null $value Value to set for the termSet property.
    */
    public function setTermSet(?Set $value): void {
        $this->getBackingStore()->set('termSet', $value);
    }

}
