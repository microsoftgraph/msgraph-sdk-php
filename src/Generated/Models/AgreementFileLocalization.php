<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class AgreementFileLocalization extends AgreementFileProperties implements Parsable 
{
    /**
     * @var string|null $odataType The OdataType property
    */
    public ?string $odataType = null;
    
    /**
     * Instantiates a new agreementFileLocalization and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AgreementFileLocalization
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): AgreementFileLocalization {
        return new AgreementFileLocalization();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'versions' => fn(ParseNode $n) => $o->setVersions($n->getCollectionOfObjectValues([AgreementFileVersion::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the versions property value. Read-only. Customized versions of the terms of use agreement in the Azure AD tenant.
     * @return array<AgreementFileVersion>|null
    */
    public function getVersions(): ?array {
        $val = $this->getBackingStore()->get('versions');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, AgreementFileVersion::class);
            /** @var array<AgreementFileVersion>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'versions'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeCollectionOfObjectValues('versions', $this->getVersions());
    }

    /**
     * Sets the versions property value. Read-only. Customized versions of the terms of use agreement in the Azure AD tenant.
     * @param array<AgreementFileVersion>|null $value Value to set for the versions property.
    */
    public function setVersions(?array $value): void {
        $this->getBackingStore()->set('versions', $value);
    }

}
