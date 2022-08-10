<?php

namespace Microsoft\Graph\Generated\Models\Security;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class UserSource extends DataSource implements Parsable 
{
    /**
     * @var string|null $email Email address of the user's mailbox.
    */
    private ?string $email = null;
    
    /**
     * @var SourceType|null $includedSources Specifies which sources are included in this group. Possible values are: mailbox, site.
    */
    private ?SourceType $includedSources = null;
    
    /**
     * @var string|null $siteWebUrl The URL of the user's OneDrive for Business site. Read-only.
    */
    private ?string $siteWebUrl = null;
    
    /**
     * Instantiates a new UserSource and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.security.userSource');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return UserSource
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): UserSource {
        return new UserSource();
    }

    /**
     * Gets the email property value. Email address of the user's mailbox.
     * @return string|null
    */
    public function getEmail(): ?string {
        return $this->email;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'email' => function (ParseNode $n) use ($o) { $o->setEmail($n->getStringValue()); },
            'includedSources' => function (ParseNode $n) use ($o) { $o->setIncludedSources($n->getEnumValue(SourceType::class)); },
            'siteWebUrl' => function (ParseNode $n) use ($o) { $o->setSiteWebUrl($n->getStringValue()); },
        ]);
    }

    /**
     * Gets the includedSources property value. Specifies which sources are included in this group. Possible values are: mailbox, site.
     * @return SourceType|null
    */
    public function getIncludedSources(): ?SourceType {
        return $this->includedSources;
    }

    /**
     * Gets the siteWebUrl property value. The URL of the user's OneDrive for Business site. Read-only.
     * @return string|null
    */
    public function getSiteWebUrl(): ?string {
        return $this->siteWebUrl;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('email', $this->email);
        $writer->writeEnumValue('includedSources', $this->includedSources);
        $writer->writeStringValue('siteWebUrl', $this->siteWebUrl);
    }

    /**
     * Sets the email property value. Email address of the user's mailbox.
     *  @param string|null $value Value to set for the email property.
    */
    public function setEmail(?string $value ): void {
        $this->email = $value;
    }

    /**
     * Sets the includedSources property value. Specifies which sources are included in this group. Possible values are: mailbox, site.
     *  @param SourceType|null $value Value to set for the includedSources property.
    */
    public function setIncludedSources(?SourceType $value ): void {
        $this->includedSources = $value;
    }

    /**
     * Sets the siteWebUrl property value. The URL of the user's OneDrive for Business site. Read-only.
     *  @param string|null $value Value to set for the siteWebUrl property.
    */
    public function setSiteWebUrl(?string $value ): void {
        $this->siteWebUrl = $value;
    }

}
