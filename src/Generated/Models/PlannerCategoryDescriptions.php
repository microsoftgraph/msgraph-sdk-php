<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class PlannerCategoryDescriptions implements AdditionalDataHolder, Parsable 
{
    /** @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well. */
    private array $additionalData;
    
    /** @var string|null $category1 The label associated with Category 1 */
    private ?string $category1 = null;
    
    /** @var string|null $category2 The label associated with Category 2 */
    private ?string $category2 = null;
    
    /** @var string|null $category3 The label associated with Category 3 */
    private ?string $category3 = null;
    
    /** @var string|null $category4 The label associated with Category 4 */
    private ?string $category4 = null;
    
    /** @var string|null $category5 The label associated with Category 5 */
    private ?string $category5 = null;
    
    /** @var string|null $category6 The label associated with Category 6 */
    private ?string $category6 = null;
    
    /**
     * Instantiates a new plannerCategoryDescriptions and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return PlannerCategoryDescriptions
    */
    public function createFromDiscriminatorValue(ParseNode $parseNode): PlannerCategoryDescriptions {
        return new PlannerCategoryDescriptions();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the category1 property value. The label associated with Category 1
     * @return string|null
    */
    public function getCategory1(): ?string {
        return $this->category1;
    }

    /**
     * Gets the category2 property value. The label associated with Category 2
     * @return string|null
    */
    public function getCategory2(): ?string {
        return $this->category2;
    }

    /**
     * Gets the category3 property value. The label associated with Category 3
     * @return string|null
    */
    public function getCategory3(): ?string {
        return $this->category3;
    }

    /**
     * Gets the category4 property value. The label associated with Category 4
     * @return string|null
    */
    public function getCategory4(): ?string {
        return $this->category4;
    }

    /**
     * Gets the category5 property value. The label associated with Category 5
     * @return string|null
    */
    public function getCategory5(): ?string {
        return $this->category5;
    }

    /**
     * Gets the category6 property value. The label associated with Category 6
     * @return string|null
    */
    public function getCategory6(): ?string {
        return $this->category6;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        return  [
            'category1' => function (self $o, ParseNode $n) { $o->setCategory1($n->getStringValue()); },
            'category2' => function (self $o, ParseNode $n) { $o->setCategory2($n->getStringValue()); },
            'category3' => function (self $o, ParseNode $n) { $o->setCategory3($n->getStringValue()); },
            'category4' => function (self $o, ParseNode $n) { $o->setCategory4($n->getStringValue()); },
            'category5' => function (self $o, ParseNode $n) { $o->setCategory5($n->getStringValue()); },
            'category6' => function (self $o, ParseNode $n) { $o->setCategory6($n->getStringValue()); },
        ];
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('category1', $this->category1);
        $writer->writeStringValue('category2', $this->category2);
        $writer->writeStringValue('category3', $this->category3);
        $writer->writeStringValue('category4', $this->category4);
        $writer->writeStringValue('category5', $this->category5);
        $writer->writeStringValue('category6', $this->category6);
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
     * Sets the category1 property value. The label associated with Category 1
     *  @param string|null $value Value to set for the category1 property.
    */
    public function setCategory1(?string $value ): void {
        $this->category1 = $value;
    }

    /**
     * Sets the category2 property value. The label associated with Category 2
     *  @param string|null $value Value to set for the category2 property.
    */
    public function setCategory2(?string $value ): void {
        $this->category2 = $value;
    }

    /**
     * Sets the category3 property value. The label associated with Category 3
     *  @param string|null $value Value to set for the category3 property.
    */
    public function setCategory3(?string $value ): void {
        $this->category3 = $value;
    }

    /**
     * Sets the category4 property value. The label associated with Category 4
     *  @param string|null $value Value to set for the category4 property.
    */
    public function setCategory4(?string $value ): void {
        $this->category4 = $value;
    }

    /**
     * Sets the category5 property value. The label associated with Category 5
     *  @param string|null $value Value to set for the category5 property.
    */
    public function setCategory5(?string $value ): void {
        $this->category5 = $value;
    }

    /**
     * Sets the category6 property value. The label associated with Category 6
     *  @param string|null $value Value to set for the category6 property.
    */
    public function setCategory6(?string $value ): void {
        $this->category6 = $value;
    }

}
