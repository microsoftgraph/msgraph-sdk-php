<?php

namespace Microsoft\Graph\Generated\Solutions\BackupRestore\RestorePoints\Search;

use Microsoft\Graph\Generated\Models\ArtifactQuery;
use Microsoft\Graph\Generated\Models\RestorePointPreference;
use Microsoft\Graph\Generated\Models\RestorePointTags;
use Microsoft\Graph\Generated\Models\TimePeriod;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class SearchPostRequestBody implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new SearchPostRequestBody and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return SearchPostRequestBody
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): SearchPostRequestBody {
        return new SearchPostRequestBody();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        $val = $this->getBackingStore()->get('additionalData');
        if (is_null($val) || is_array($val)) {
            /** @var array<string, mixed>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'additionalData'");
    }

    /**
     * Gets the artifactQuery property value. The artifactQuery property
     * @return ArtifactQuery|null
    */
    public function getArtifactQuery(): ?ArtifactQuery {
        $val = $this->getBackingStore()->get('artifactQuery');
        if (is_null($val) || $val instanceof ArtifactQuery) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'artifactQuery'");
    }

    /**
     * Gets the BackingStore property value. Stores model information.
     * @return BackingStore
    */
    public function getBackingStore(): BackingStore {
        return $this->backingStore;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'artifactQuery' => fn(ParseNode $n) => $o->setArtifactQuery($n->getObjectValue([ArtifactQuery::class, 'createFromDiscriminatorValue'])),
            'protectionTimePeriod' => fn(ParseNode $n) => $o->setProtectionTimePeriod($n->getObjectValue([TimePeriod::class, 'createFromDiscriminatorValue'])),
            'protectionUnitIds' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setProtectionUnitIds($val);
            },
            'restorePointPreference' => fn(ParseNode $n) => $o->setRestorePointPreference($n->getEnumValue(RestorePointPreference::class)),
            'tags' => fn(ParseNode $n) => $o->setTags($n->getEnumValue(RestorePointTags::class)),
        ];
    }

    /**
     * Gets the protectionTimePeriod property value. The protectionTimePeriod property
     * @return TimePeriod|null
    */
    public function getProtectionTimePeriod(): ?TimePeriod {
        $val = $this->getBackingStore()->get('protectionTimePeriod');
        if (is_null($val) || $val instanceof TimePeriod) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'protectionTimePeriod'");
    }

    /**
     * Gets the protectionUnitIds property value. The protectionUnitIds property
     * @return array<string>|null
    */
    public function getProtectionUnitIds(): ?array {
        $val = $this->getBackingStore()->get('protectionUnitIds');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, 'string');
            /** @var array<string>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'protectionUnitIds'");
    }

    /**
     * Gets the restorePointPreference property value. The restorePointPreference property
     * @return RestorePointPreference|null
    */
    public function getRestorePointPreference(): ?RestorePointPreference {
        $val = $this->getBackingStore()->get('restorePointPreference');
        if (is_null($val) || $val instanceof RestorePointPreference) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'restorePointPreference'");
    }

    /**
     * Gets the tags property value. The tags property
     * @return RestorePointTags|null
    */
    public function getTags(): ?RestorePointTags {
        $val = $this->getBackingStore()->get('tags');
        if (is_null($val) || $val instanceof RestorePointTags) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'tags'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeObjectValue('artifactQuery', $this->getArtifactQuery());
        $writer->writeObjectValue('protectionTimePeriod', $this->getProtectionTimePeriod());
        $writer->writeCollectionOfPrimitiveValues('protectionUnitIds', $this->getProtectionUnitIds());
        $writer->writeEnumValue('restorePointPreference', $this->getRestorePointPreference());
        $writer->writeEnumValue('tags', $this->getTags());
        $writer->writeAdditionalData($this->getAdditionalData());
    }

    /**
     * Sets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value): void {
        $this->getBackingStore()->set('additionalData', $value);
    }

    /**
     * Sets the artifactQuery property value. The artifactQuery property
     * @param ArtifactQuery|null $value Value to set for the artifactQuery property.
    */
    public function setArtifactQuery(?ArtifactQuery $value): void {
        $this->getBackingStore()->set('artifactQuery', $value);
    }

    /**
     * Sets the BackingStore property value. Stores model information.
     * @param BackingStore $value Value to set for the BackingStore property.
    */
    public function setBackingStore(BackingStore $value): void {
        $this->backingStore = $value;
    }

    /**
     * Sets the protectionTimePeriod property value. The protectionTimePeriod property
     * @param TimePeriod|null $value Value to set for the protectionTimePeriod property.
    */
    public function setProtectionTimePeriod(?TimePeriod $value): void {
        $this->getBackingStore()->set('protectionTimePeriod', $value);
    }

    /**
     * Sets the protectionUnitIds property value. The protectionUnitIds property
     * @param array<string>|null $value Value to set for the protectionUnitIds property.
    */
    public function setProtectionUnitIds(?array $value): void {
        $this->getBackingStore()->set('protectionUnitIds', $value);
    }

    /**
     * Sets the restorePointPreference property value. The restorePointPreference property
     * @param RestorePointPreference|null $value Value to set for the restorePointPreference property.
    */
    public function setRestorePointPreference(?RestorePointPreference $value): void {
        $this->getBackingStore()->set('restorePointPreference', $value);
    }

    /**
     * Sets the tags property value. The tags property
     * @param RestorePointTags|null $value Value to set for the tags property.
    */
    public function setTags(?RestorePointTags $value): void {
        $this->getBackingStore()->set('tags', $value);
    }

}
