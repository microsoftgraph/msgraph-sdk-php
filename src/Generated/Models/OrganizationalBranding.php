<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class OrganizationalBranding extends OrganizationalBrandingProperties implements Parsable 
{
    /**
     * Instantiates a new OrganizationalBranding and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.organizationalBranding');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return OrganizationalBranding
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): OrganizationalBranding {
        return new OrganizationalBranding();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'localizations' => fn(ParseNode $n) => $o->setLocalizations($n->getCollectionOfObjectValues([OrganizationalBrandingLocalization::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the localizations property value. Add different branding based on a locale.
     * @return array<OrganizationalBrandingLocalization>|null
    */
    public function getLocalizations(): ?array {
        $val = $this->getBackingStore()->get('localizations');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, OrganizationalBrandingLocalization::class);
            /** @var array<OrganizationalBrandingLocalization>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'localizations'");
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
     * Sets the localizations property value. Add different branding based on a locale.
     * @param array<OrganizationalBrandingLocalization>|null $value Value to set for the localizations property.
    */
    public function setLocalizations(?array $value): void {
        $this->getBackingStore()->set('localizations', $value);
    }

}
