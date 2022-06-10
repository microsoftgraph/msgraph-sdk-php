<?php

namespace Microsoft\Graph\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class ControlScore implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var string|null $controlCategory Control action category (Identity, Data, Device, Apps, Infrastructure).
    */
    private ?string $controlCategory = null;
    
    /**
     * @var string|null $controlName Control unique name.
    */
    private ?string $controlName = null;
    
    /**
     * @var string|null $description Description of the control.
    */
    private ?string $description = null;
    
    /**
     * @var float|null $score Tenant achieved score for the control (it varies day by day depending on tenant operations on the control).
    */
    private ?float $score = null;
    
    /**
     * Instantiates a new controlScore and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ControlScore
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ControlScore {
        return new ControlScore();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the controlCategory property value. Control action category (Identity, Data, Device, Apps, Infrastructure).
     * @return string|null
    */
    public function getControlCategory(): ?string {
        return $this->controlCategory;
    }

    /**
     * Gets the controlName property value. Control unique name.
     * @return string|null
    */
    public function getControlName(): ?string {
        return $this->controlName;
    }

    /**
     * Gets the description property value. Description of the control.
     * @return string|null
    */
    public function getDescription(): ?string {
        return $this->description;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'controlCategory' => function (ParseNode $n) use ($o) { $o->setControlCategory($n->getStringValue()); },
            'controlName' => function (ParseNode $n) use ($o) { $o->setControlName($n->getStringValue()); },
            'description' => function (ParseNode $n) use ($o) { $o->setDescription($n->getStringValue()); },
            'score' => function (ParseNode $n) use ($o) { $o->setScore($n->getFloatValue()); },
        ];
    }

    /**
     * Gets the score property value. Tenant achieved score for the control (it varies day by day depending on tenant operations on the control).
     * @return float|null
    */
    public function getScore(): ?float {
        return $this->score;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('controlCategory', $this->controlCategory);
        $writer->writeStringValue('controlName', $this->controlName);
        $writer->writeStringValue('description', $this->description);
        $writer->writeFloatValue('score', $this->score);
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
     * Sets the controlCategory property value. Control action category (Identity, Data, Device, Apps, Infrastructure).
     *  @param string|null $value Value to set for the controlCategory property.
    */
    public function setControlCategory(?string $value ): void {
        $this->controlCategory = $value;
    }

    /**
     * Sets the controlName property value. Control unique name.
     *  @param string|null $value Value to set for the controlName property.
    */
    public function setControlName(?string $value ): void {
        $this->controlName = $value;
    }

    /**
     * Sets the description property value. Description of the control.
     *  @param string|null $value Value to set for the description property.
    */
    public function setDescription(?string $value ): void {
        $this->description = $value;
    }

    /**
     * Sets the score property value. Tenant achieved score for the control (it varies day by day depending on tenant operations on the control).
     *  @param float|null $value Value to set for the score property.
    */
    public function setScore(?float $value ): void {
        $this->score = $value;
    }

}
