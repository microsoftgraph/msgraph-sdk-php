<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class AccessPackageTextInputQuestion extends AccessPackageQuestion implements Parsable 
{
    /**
     * Instantiates a new accessPackageTextInputQuestion and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.accessPackageTextInputQuestion');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AccessPackageTextInputQuestion
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): AccessPackageTextInputQuestion {
        return new AccessPackageTextInputQuestion();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'isSingleLineQuestion' => fn(ParseNode $n) => $o->setIsSingleLineQuestion($n->getBooleanValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'regexPattern' => fn(ParseNode $n) => $o->setRegexPattern($n->getStringValue()),
        ]);
    }

    /**
     * Gets the isSingleLineQuestion property value. Indicates whether the answer will be in single or multiple line format.
     * @return bool|null
    */
    public function getIsSingleLineQuestion(): ?bool {
        $val = $this->getBackingStore()->get('isSingleLineQuestion');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'isSingleLineQuestion'");
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
     * Gets the regexPattern property value. The regular expression pattern which any answer to this question must match.
     * @return string|null
    */
    public function getRegexPattern(): ?string {
        $val = $this->getBackingStore()->get('regexPattern');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'regexPattern'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeBooleanValue('isSingleLineQuestion', $this->getIsSingleLineQuestion());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeStringValue('regexPattern', $this->getRegexPattern());
    }

    /**
     * Sets the isSingleLineQuestion property value. Indicates whether the answer will be in single or multiple line format.
     * @param bool|null $value Value to set for the isSingleLineQuestion property.
    */
    public function setIsSingleLineQuestion(?bool $value): void {
        $this->getBackingStore()->set('isSingleLineQuestion', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the regexPattern property value. The regular expression pattern which any answer to this question must match.
     * @param string|null $value Value to set for the regexPattern property.
    */
    public function setRegexPattern(?string $value): void {
        $this->getBackingStore()->set('regexPattern', $value);
    }

}
