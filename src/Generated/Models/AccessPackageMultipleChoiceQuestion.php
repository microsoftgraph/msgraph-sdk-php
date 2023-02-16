<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class AccessPackageMultipleChoiceQuestion extends AccessPackageQuestion implements Parsable 
{
    /**
     * Instantiates a new AccessPackageMultipleChoiceQuestion and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.accessPackageMultipleChoiceQuestion');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AccessPackageMultipleChoiceQuestion
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): AccessPackageMultipleChoiceQuestion {
        return new AccessPackageMultipleChoiceQuestion();
    }

    /**
     * Gets the choices property value. List of answer choices.
     * @return array<AccessPackageAnswerChoice>|null
    */
    public function getChoices(): ?array {
        return $this->getBackingStore()->get('choices');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'choices' => fn(ParseNode $n) => $o->setChoices($n->getCollectionOfObjectValues([AccessPackageAnswerChoice::class, 'createFromDiscriminatorValue'])),
            'isMultipleSelectionAllowed' => fn(ParseNode $n) => $o->setIsMultipleSelectionAllowed($n->getBooleanValue()),
        ]);
    }

    /**
     * Gets the isMultipleSelectionAllowed property value. Indicates whether requestor can select multiple choices as their answer.
     * @return bool|null
    */
    public function getIsMultipleSelectionAllowed(): ?bool {
        return $this->getBackingStore()->get('isMultipleSelectionAllowed');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('choices', $this->getChoices());
        $writer->writeBooleanValue('isMultipleSelectionAllowed', $this->getIsMultipleSelectionAllowed());
    }

    /**
     * Sets the choices property value. List of answer choices.
     * @param array<AccessPackageAnswerChoice>|null $value Value to set for the choices property.
    */
    public function setChoices(?array $value): void {
        $this->getBackingStore()->set('choices', $value);
    }

    /**
     * Sets the isMultipleSelectionAllowed property value. Indicates whether requestor can select multiple choices as their answer.
     * @param bool|null $value Value to set for the isMultipleSelectionAllowed property.
    */
    public function setIsMultipleSelectionAllowed(?bool $value): void {
        $this->getBackingStore()->set('isMultipleSelectionAllowed', $value);
    }

}
