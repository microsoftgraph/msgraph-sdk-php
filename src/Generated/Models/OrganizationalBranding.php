<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class OrganizationalBranding extends OrganizationalBrandingProperties implements Parsable 
{
    /**
     * @var array<OrganizationalBrandingLocalization>|null $localizations Add different branding based on a locale.
    */
    private ?array $localizations = null;
    
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
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'localizations' => function (ParseNode $n) use ($o) { $o->setLocalizations($n->getCollectionOfObjectValues(array(OrganizationalBrandingLocalization::class, 'createFromDiscriminatorValue'))); },
        ]);
    }

    /**
     * Gets the localizations property value. Add different branding based on a locale.
     * @return array<OrganizationalBrandingLocalization>|null
    */
    public function getLocalizations(): ?array {
        return $this->localizations;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('localizations', $this->localizations);
    }

    /**
     * Sets the localizations property value. Add different branding based on a locale.
     *  @param array<OrganizationalBrandingLocalization>|null $value Value to set for the localizations property.
    */
    public function setLocalizations(?array $value ): void {
        $this->localizations = $value;
    }

}
