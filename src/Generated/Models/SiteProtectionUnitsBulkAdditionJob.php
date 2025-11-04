<?php

namespace Microsoft\\Graph\\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class SiteProtectionUnitsBulkAdditionJob extends ProtectionUnitsBulkJobBase implements Parsable 
{
    /**
     * Instantiates a new SiteProtectionUnitsBulkAdditionJob and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.siteProtectionUnitsBulkAdditionJob');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return SiteProtectionUnitsBulkAdditionJob
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): SiteProtectionUnitsBulkAdditionJob {
        return new SiteProtectionUnitsBulkAdditionJob();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'siteIds' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setSiteIds($val);
            },
            'siteWebUrls' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setSiteWebUrls($val);
            },
        ]);
    }

    /**
     * Gets the siteIds property value. The list of SharePoint site IDs to add to the SharePoint protection policy.
     * @return array<string>|null
    */
    public function getSiteIds(): ?array {
        $val = $this->getBackingStore()->get('siteIds');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, 'string');
            /** @var array<string>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'siteIds'");
    }

    /**
     * Gets the siteWebUrls property value. The list of SharePoint site URLs to add to the SharePoint protection policy.
     * @return array<string>|null
    */
    public function getSiteWebUrls(): ?array {
        $val = $this->getBackingStore()->get('siteWebUrls');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, 'string');
            /** @var array<string>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'siteWebUrls'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfPrimitiveValues('siteIds', $this->getSiteIds());
        $writer->writeCollectionOfPrimitiveValues('siteWebUrls', $this->getSiteWebUrls());
    }

    /**
     * Sets the siteIds property value. The list of SharePoint site IDs to add to the SharePoint protection policy.
     * @param array<string>|null $value Value to set for the siteIds property.
    */
    public function setSiteIds(?array $value): void {
        $this->getBackingStore()->set('siteIds', $value);
    }

    /**
     * Sets the siteWebUrls property value. The list of SharePoint site URLs to add to the SharePoint protection policy.
     * @param array<string>|null $value Value to set for the siteWebUrls property.
    */
    public function setSiteWebUrls(?array $value): void {
        $this->getBackingStore()->set('siteWebUrls', $value);
    }

}
