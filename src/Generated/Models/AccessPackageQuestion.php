<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class AccessPackageQuestion extends Entity implements Parsable 
{
    /**
     * Instantiates a new accessPackageQuestion and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AccessPackageQuestion
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): AccessPackageQuestion {
        $mappingValueNode = $parseNode->getChildNode("@odata.type");
        if ($mappingValueNode !== null) {
            $mappingValue = $mappingValueNode->getStringValue();
            switch ($mappingValue) {
                case '#microsoft.graph.accessPackageMultipleChoiceQuestion': return new AccessPackageMultipleChoiceQuestion();
                case '#microsoft.graph.accessPackageTextInputQuestion': return new AccessPackageTextInputQuestion();
            }
        }
        return new AccessPackageQuestion();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'isAnswerEditable' => fn(ParseNode $n) => $o->setIsAnswerEditable($n->getBooleanValue()),
            'isRequired' => fn(ParseNode $n) => $o->setIsRequired($n->getBooleanValue()),
            'localizations' => fn(ParseNode $n) => $o->setLocalizations($n->getCollectionOfObjectValues([AccessPackageLocalizedText::class, 'createFromDiscriminatorValue'])),
            'sequence' => fn(ParseNode $n) => $o->setSequence($n->getIntegerValue()),
            'text' => fn(ParseNode $n) => $o->setText($n->getStringValue()),
        ]);
    }

    /**
     * Gets the isAnswerEditable property value. Specifies whether the requestor is allowed to edit answers to questions for an assignment by posting an update to accessPackageAssignmentRequest.
     * @return bool|null
    */
    public function getIsAnswerEditable(): ?bool {
        return $this->getBackingStore()->get('isAnswerEditable');
    }

    /**
     * Gets the isRequired property value. Whether the requestor is required to supply an answer or not.
     * @return bool|null
    */
    public function getIsRequired(): ?bool {
        return $this->getBackingStore()->get('isRequired');
    }

    /**
     * Gets the localizations property value. The text of the question represented in a format for a specific locale.
     * @return array<AccessPackageLocalizedText>|null
    */
    public function getLocalizations(): ?array {
        return $this->getBackingStore()->get('localizations');
    }

    /**
     * Gets the sequence property value. Relative position of this question when displaying a list of questions to the requestor.
     * @return int|null
    */
    public function getSequence(): ?int {
        return $this->getBackingStore()->get('sequence');
    }

    /**
     * Gets the text property value. The text of the question to show to the requestor.
     * @return string|null
    */
    public function getText(): ?string {
        return $this->getBackingStore()->get('text');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeBooleanValue('isAnswerEditable', $this->getIsAnswerEditable());
        $writer->writeBooleanValue('isRequired', $this->getIsRequired());
        $writer->writeCollectionOfObjectValues('localizations', $this->getLocalizations());
        $writer->writeIntegerValue('sequence', $this->getSequence());
        $writer->writeStringValue('text', $this->getText());
    }

    /**
     * Sets the isAnswerEditable property value. Specifies whether the requestor is allowed to edit answers to questions for an assignment by posting an update to accessPackageAssignmentRequest.
     * @param bool|null $value Value to set for the isAnswerEditable property.
    */
    public function setIsAnswerEditable(?bool $value): void {
        $this->getBackingStore()->set('isAnswerEditable', $value);
    }

    /**
     * Sets the isRequired property value. Whether the requestor is required to supply an answer or not.
     * @param bool|null $value Value to set for the isRequired property.
    */
    public function setIsRequired(?bool $value): void {
        $this->getBackingStore()->set('isRequired', $value);
    }

    /**
     * Sets the localizations property value. The text of the question represented in a format for a specific locale.
     * @param array<AccessPackageLocalizedText>|null $value Value to set for the localizations property.
    */
    public function setLocalizations(?array $value): void {
        $this->getBackingStore()->set('localizations', $value);
    }

    /**
     * Sets the sequence property value. Relative position of this question when displaying a list of questions to the requestor.
     * @param int|null $value Value to set for the sequence property.
    */
    public function setSequence(?int $value): void {
        $this->getBackingStore()->set('sequence', $value);
    }

    /**
     * Sets the text property value. The text of the question to show to the requestor.
     * @param string|null $value Value to set for the text property.
    */
    public function setText(?string $value): void {
        $this->getBackingStore()->set('text', $value);
    }

}
