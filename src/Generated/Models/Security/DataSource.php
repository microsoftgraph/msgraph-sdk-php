<?php

namespace Microsoft\Graph\Generated\Models\Security;

use DateTime;
use Microsoft\Graph\Generated\Models\Entity;
use Microsoft\Graph\Generated\Models\IdentitySet;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class DataSource extends Entity implements Parsable 
{
    /**
     * Instantiates a new dataSource and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return DataSource
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): DataSource {
        $mappingValueNode = $parseNode->getChildNode("@odata.type");
        if ($mappingValueNode !== null) {
            $mappingValue = $mappingValueNode->getStringValue();
            switch ($mappingValue) {
                case '#microsoft.graph.security.siteSource': return new SiteSource();
                case '#microsoft.graph.security.unifiedGroupSource': return new UnifiedGroupSource();
                case '#microsoft.graph.security.userSource': return new UserSource();
            }
        }
        return new DataSource();
    }

    /**
     * Gets the createdBy property value. The user who created the dataSource.
     * @return IdentitySet|null
    */
    public function getCreatedBy(): ?IdentitySet {
        return $this->getBackingStore()->get('createdBy');
    }

    /**
     * Gets the createdDateTime property value. The date and time the dataSource was created.
     * @return DateTime|null
    */
    public function getCreatedDateTime(): ?DateTime {
        return $this->getBackingStore()->get('createdDateTime');
    }

    /**
     * Gets the displayName property value. The display name of the dataSource. This will be the name of the SharePoint site.
     * @return string|null
    */
    public function getDisplayName(): ?string {
        return $this->getBackingStore()->get('displayName');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'createdBy' => fn(ParseNode $n) => $o->setCreatedBy($n->getObjectValue([IdentitySet::class, 'createFromDiscriminatorValue'])),
            'createdDateTime' => fn(ParseNode $n) => $o->setCreatedDateTime($n->getDateTimeValue()),
            'displayName' => fn(ParseNode $n) => $o->setDisplayName($n->getStringValue()),
            'holdStatus' => fn(ParseNode $n) => $o->setHoldStatus($n->getEnumValue(DataSourceHoldStatus::class)),
        ]);
    }

    /**
     * Gets the holdStatus property value. The hold status of the dataSource.The possible values are: notApplied, applied, applying, removing, partial
     * @return DataSourceHoldStatus|null
    */
    public function getHoldStatus(): ?DataSourceHoldStatus {
        return $this->getBackingStore()->get('holdStatus');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('createdBy', $this->getCreatedBy());
        $writer->writeDateTimeValue('createdDateTime', $this->getCreatedDateTime());
        $writer->writeStringValue('displayName', $this->getDisplayName());
        $writer->writeEnumValue('holdStatus', $this->getHoldStatus());
    }

    /**
     * Sets the createdBy property value. The user who created the dataSource.
     *  @param IdentitySet|null $value Value to set for the createdBy property.
    */
    public function setCreatedBy(?IdentitySet $value): void {
        $this->getBackingStore()->set('createdBy', $value);
    }

    /**
     * Sets the createdDateTime property value. The date and time the dataSource was created.
     *  @param DateTime|null $value Value to set for the createdDateTime property.
    */
    public function setCreatedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('createdDateTime', $value);
    }

    /**
     * Sets the displayName property value. The display name of the dataSource. This will be the name of the SharePoint site.
     *  @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value): void {
        $this->getBackingStore()->set('displayName', $value);
    }

    /**
     * Sets the holdStatus property value. The hold status of the dataSource.The possible values are: notApplied, applied, applying, removing, partial
     *  @param DataSourceHoldStatus|null $value Value to set for the holdStatus property.
    */
    public function setHoldStatus(?DataSourceHoldStatus $value): void {
        $this->getBackingStore()->set('holdStatus', $value);
    }

}
