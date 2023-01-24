<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class AgreementFile extends AgreementFileProperties implements Parsable 
{
    /**
     * Instantiates a new AgreementFile and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AgreementFile
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): AgreementFile {
        return new AgreementFile();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'localizations' => fn(ParseNode $n) => $o->setLocalizations($n->getCollectionOfObjectValues([AgreementFileLocalization::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the localizations property value. The localized version of the terms of use agreement files attached to the agreement.
     * @return array<AgreementFileLocalization>|null
    */
    public function getLocalizations(): ?array {
        return $this->getBackingStore()->get('localizations');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('localizations', $this->getLocalizations());
    }

    /**
     * Sets the localizations property value. The localized version of the terms of use agreement files attached to the agreement.
     * @param array<AgreementFileLocalization>|null $value Value to set for the localizations property.
    */
    public function setLocalizations(?array $value): void {
        $this->getBackingStore()->set('localizations', $value);
    }

}
