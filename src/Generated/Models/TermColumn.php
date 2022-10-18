<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Graph\Generated\Models\TermStore\Set;
use Microsoft\Graph\Generated\Models\TermStore\Term;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class TermColumn implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var bool|null $allowMultipleValues Specifies whether the column will allow more than one value.
    */
    private ?bool $allowMultipleValues = null;
    
    /**
     * @var string|null $odataType The OdataType property
    */
    private ?string $odataType = null;
    
    /**
     * @var Term|null $parentTerm The parentTerm property
    */
    private ?Term $parentTerm = null;
    
    /**
     * @var bool|null $showFullyQualifiedName Specifies whether to display the entire term path or only the term label.
    */
    private ?bool $showFullyQualifiedName = null;
    
    /**
     * @var Set|null $termSet The termSet property
    */
    private ?Set $termSet = null;
    
    /**
     * Instantiates a new termColumn and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
        $this->setOdataType('#microsoft.graph.termColumn');
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
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the allowMultipleValues property value. Specifies whether the column will allow more than one value.
     * @return bool|null
    */
    public function getAllowMultipleValues(): ?bool {
        return $this->allowMultipleValues;
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
        return $this->odataType;
    }

    /**
     * Gets the parentTerm property value. The parentTerm property
     * @return Term|null
    */
    public function getParentTerm(): ?Term {
        return $this->parentTerm;
    }

    /**
     * Gets the showFullyQualifiedName property value. Specifies whether to display the entire term path or only the term label.
     * @return bool|null
    */
    public function getShowFullyQualifiedName(): ?bool {
        return $this->showFullyQualifiedName;
    }

    /**
     * Gets the termSet property value. The termSet property
     * @return Set|null
    */
    public function getTermSet(): ?Set {
        return $this->termSet;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeBooleanValue('allowMultipleValues', $this->allowMultipleValues);
        $writer->writeStringValue('@odata.type', $this->odataType);
        $writer->writeObjectValue('parentTerm', $this->parentTerm);
        $writer->writeBooleanValue('showFullyQualifiedName', $this->showFullyQualifiedName);
        $writer->writeObjectValue('termSet', $this->termSet);
        $writer->writeAdditionalData($this->additionalData);
    }

    /**
     * Sets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     *  @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value ): void {
        $this->additionalData = $value;
    }

    /**
     * Sets the allowMultipleValues property value. Specifies whether the column will allow more than one value.
     *  @param bool|null $value Value to set for the allowMultipleValues property.
    */
    public function setAllowMultipleValues(?bool $value ): void {
        $this->allowMultipleValues = $value;
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     *  @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value ): void {
        $this->odataType = $value;
    }

    /**
     * Sets the parentTerm property value. The parentTerm property
     *  @param Term|null $value Value to set for the parentTerm property.
    */
    public function setParentTerm(?Term $value ): void {
        $this->parentTerm = $value;
    }

    /**
     * Sets the showFullyQualifiedName property value. Specifies whether to display the entire term path or only the term label.
     *  @param bool|null $value Value to set for the showFullyQualifiedName property.
    */
    public function setShowFullyQualifiedName(?bool $value ): void {
        $this->showFullyQualifiedName = $value;
    }

    /**
     * Sets the termSet property value. The termSet property
     *  @param Set|null $value Value to set for the termSet property.
    */
    public function setTermSet(?Set $value ): void {
        $this->termSet = $value;
    }

}
