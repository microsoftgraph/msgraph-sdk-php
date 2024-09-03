<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class SharePointRestoreSession extends RestoreSessionBase implements Parsable 
{
    /**
     * Instantiates a new SharePointRestoreSession and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.sharePointRestoreSession');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return SharePointRestoreSession
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): SharePointRestoreSession {
        return new SharePointRestoreSession();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'siteRestoreArtifacts' => fn(ParseNode $n) => $o->setSiteRestoreArtifacts($n->getCollectionOfObjectValues([SiteRestoreArtifact::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the siteRestoreArtifacts property value. A collection of restore points and destination details that can be used to restore SharePoint sites.
     * @return array<SiteRestoreArtifact>|null
    */
    public function getSiteRestoreArtifacts(): ?array {
        $val = $this->getBackingStore()->get('siteRestoreArtifacts');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, SiteRestoreArtifact::class);
            /** @var array<SiteRestoreArtifact>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'siteRestoreArtifacts'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('siteRestoreArtifacts', $this->getSiteRestoreArtifacts());
    }

    /**
     * Sets the siteRestoreArtifacts property value. A collection of restore points and destination details that can be used to restore SharePoint sites.
     * @param array<SiteRestoreArtifact>|null $value Value to set for the siteRestoreArtifacts property.
    */
    public function setSiteRestoreArtifacts(?array $value): void {
        $this->getBackingStore()->set('siteRestoreArtifacts', $value);
    }

}
